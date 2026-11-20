<?php
declare(strict_types=1);

// Plaatst persberichten op mastodon.nl/@decisiveoutcomes.
// Elke post is mastodon/<slug>.txt: de tekst van Annelies; de link komt er vanzelf onder.
//
//   php mastodon/plaats.php check            controleert de posts, zonder netwerk
//   php mastodon/plaats.php post [--dry-run] plaatst wat nog niet op het account staat
//
// Voor post: MASTODON_TOKEN (scopes read:accounts, read:statuses, write:statuses).
// MASTODON_INSTANCE en SITE_URL zijn er om lokaal tegen een nepserver te testen.

const LIMIET = 500;      // tekens per post op mastodon.nl
const LINK_TELT = 23;    // Mastodon telt elke link als 23 tekens

$map = __DIR__;
$newsroom = dirname(__DIR__) . '/website/content/newsroom';
$instance = rtrim(getenv('MASTODON_INSTANCE') ?: 'https://mastodon.nl', '/');
$site = rtrim(getenv('SITE_URL') ?: 'https://decisiveoutcomes.nl', '/');
$modus = $argv[1] ?? '';
$proef = in_array('--dry-run', $argv, true);

if (!in_array($modus, ['check', 'post'], true)) {
    fwrite(STDERR, "Gebruik: php mastodon/plaats.php check | post [--dry-run]\n");
    exit(2);
}

function tekens(string $s): int
{
    return preg_match_all('/./su', $s);
}

function fout(string $melding): never
{
    fwrite(STDERR, "FOUT: $melding\n");
    exit(1);
}

/** @return array{int, string} status en body; nooit een exception */
function verzoek(string $methode, string $url, ?string $token = null, ?array $velden = null, array $extra = []): array
{
    $kop = ['User-Agent: decisiveoutcomes.nl-newsroom', 'Accept: application/json'];
    if ($token !== null) {
        $kop[] = "Authorization: Bearer $token";
    }
    $inhoud = '';
    if ($velden !== null) {
        $kop[] = 'Content-Type: application/x-www-form-urlencoded';
        $inhoud = http_build_query($velden);
    }
    $context = stream_context_create(['http' => [
        'method' => $methode,
        'header' => implode("\r\n", [...$kop, ...$extra]),
        'content' => $inhoud,
        'ignore_errors' => true,
        'timeout' => 30,
        'follow_location' => 0,
    ]]);
    $body = @file_get_contents($url, false, $context);
    $koppen = function_exists('http_get_last_response_headers')
        ? (http_get_last_response_headers() ?? [])
        : ($http_response_header ?? []);
    $status = preg_match('{^HTTP/\S+ (\d{3})}', $koppen[0] ?? '', $m) ? (int) $m[1] : 0;
    return [$status, $body === false ? '' : $body];
}

// Alle posts, oudste bericht eerst.
$posts = [];
foreach (glob("$map/*.txt") ?: [] as $pad) {
    $slug = basename($pad, '.txt');
    if (!preg_match('/^\d{4}-\d{2}-\d{2}-[a-z0-9-]+$/', $slug)) {
        fout("$slug.txt: de naam moet de slug van een persbericht zijn (jjjj-mm-dd-korte-titel).");
    }
    if (!is_file("$newsroom/$slug.md")) {
        fout("$slug.txt: er is geen persbericht website/content/newsroom/$slug.md.");
    }
    $tekst = trim(str_replace("\r\n", "\n", (string) file_get_contents($pad)));
    if ($tekst === '') {
        fout("$slug.txt is leeg.");
    }
    if (preg_match('{https?://}', $tekst)) {
        fout("$slug.txt bevat een link. De link naar het persbericht komt er vanzelf onder; zet er geen in de tekst.");
    }
    $url = "$site/newsroom/$slug/";
    $lengte = tekens($tekst) + 2 + LINK_TELT;
    if ($lengte > LIMIET) {
        fout("$slug.txt is $lengte tekens met de link; het maximum is " . LIMIET . '.');
    }
    $posts[$slug] = ['tekst' => "$tekst\n\n$url", 'url' => $url, 'lengte' => $lengte];
}
ksort($posts);

if ($modus === 'check') {
    foreach ($posts as $slug => $p) {
        echo "ok  $slug ({$p['lengte']} tekens)\n";
    }
    echo count($posts) . " posts gecontroleerd.\n";
    exit(0);
}

// Trimmen: een geplakt secret neemt makkelijk een spatie of regeleinde mee, en dat geeft een 401.
$token = trim((string) getenv('MASTODON_TOKEN')) ?: fout('MASTODON_TOKEN ontbreekt.');

[$status, $body] = verzoek('GET', "$instance/api/v1/accounts/verify_credentials", $token);
$account = json_decode($body, true);
if ($status !== 200 || !isset($account['id'])) {
    $reden = json_decode($body, true)['error'] ?? substr($body, 0, 200);
    fout("inloggen bij $instance mislukt (HTTP $status): $reden. Is MASTODON_TOKEN het toegangstoken (niet de client key of het client secret), met de scope read:accounts?");
}
echo "Account: @{$account['acct']}\n";

// Welke berichten staan er al op? Alle eigen posts doorlopen; het account is klein.
$geplaatst = '';
$max = '';
do {
    $adres = "$instance/api/v1/accounts/{$account['id']}/statuses?limit=40&exclude_reblogs=true" . ($max !== '' ? "&max_id=$max" : '');
    [$status, $body] = verzoek('GET', $adres, $token);
    $pagina = json_decode($body, true);
    if ($status !== 200 || !is_array($pagina)) {
        fout("de eigen posts ophalen mislukte (HTTP $status).");
    }
    foreach ($pagina as $s) {
        $geplaatst .= ($s['content'] ?? '') . ' ' . ($s['card']['url'] ?? '') . "\n";
        $max = (string) $s['id'];
    }
} while (count($pagina) > 0);

$nieuw = array_filter($posts, fn(array $p): bool => !str_contains($geplaatst, $p['url']));
if ($nieuw === []) {
    echo "Niets nieuws te plaatsen.\n";
    exit(0);
}

$fouten = 0;
foreach ($nieuw as $slug => $p) {
    // Alleen plaatsen als het bericht al op de site staat, anders heeft de link geen kaart.
    [$status] = verzoek('GET', $p['url']);
    if ($status !== 200) {
        echo "::warning::$slug staat nog niet op de site (HTTP $status); volgende keer opnieuw.\n";
        continue;
    }
    if ($proef) {
        echo "--- zou plaatsen: $slug\n{$p['tekst']}\n";
        continue;
    }
    [$status, $body] = verzoek('POST', "$instance/api/v1/statuses", $token, [
        'status' => $p['tekst'],
        'visibility' => 'public',
        'language' => 'nl',
    ], ['Idempotency-Key: ' . hash('sha256', $slug)]);
    $post = json_decode($body, true);
    if ($status !== 200 || !isset($post['url'])) {
        echo "ERROR: $slug plaatsen mislukte (HTTP $status): " . substr($body, 0, 200) . "\n";
        $fouten++;
        continue;
    }
    echo "Geplaatst: $slug → {$post['url']}\n";
    sleep(2);
}
exit($fouten > 0 ? 1 : 0);
