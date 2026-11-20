<?php
declare(strict_types=1);

// Plaatst de posts van Annelies op mastodon.nl/@decisiveoutcomes.
//
//   mastodon/<slug>.txt                       bij een persbericht; de link komt er vanzelf onder
//   mastodon/los/jjjj-mm-dd-uumm-onderwerp.txt   een losse post, geplaatst vanaf die tijd (Bonaire)
//
//   php mastodon/plaats.php check            controleert de posts, zonder netwerk
//   php mastodon/plaats.php post [--dry-run] plaatst wat aan de beurt is en nog niet op het account staat
//
// Voor post: MASTODON_TOKEN (scopes read:accounts, read:statuses, write:statuses).
// MASTODON_INSTANCE, SITE_URL en NU (jjjj-mm-dd uu:mm) zijn er om lokaal te testen.

const LIMIET = 500;      // tekens per post op mastodon.nl
const LINK_TELT = 23;    // Mastodon telt elke link als 23 tekens
const TIJDZONE = 'America/Kralendijk';

$map = __DIR__;
$newsroom = dirname(__DIR__) . '/website/content/newsroom';
$instance = rtrim(getenv('MASTODON_INSTANCE') ?: 'https://mastodon.nl', '/');
$site = rtrim(getenv('SITE_URL') ?: 'https://decisiveoutcomes.nl', '/');
$nu = new DateTimeImmutable(getenv('NU') ?: 'now', new DateTimeZone(TIJDZONE));
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

/** Tekst zonder opmaak en witruimte, om een post terug te vinden in de HTML van Mastodon. */
function kaal(string $s): string
{
    return preg_replace('/\s+/u', '', html_entity_decode(strip_tags($s), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
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

function lees(string $pad, string $naam): string
{
    $tekst = trim(str_replace("\r\n", "\n", (string) file_get_contents($pad)));
    if ($tekst === '') {
        fout("$naam is leeg.");
    }
    if (preg_match('/^cw:/i', $tekst)) {
        fout("$naam begint met een inhoudswaarschuwing. Annelies houdt het zo dat er geen nodig is.");
    }
    if (preg_match('{https?://}', $tekst)) {
        fout("$naam bevat een link. Bij een persbericht komt de link er vanzelf onder; een losse post heeft er geen.");
    }
    if (str_contains($tekst, '!')) {
        fout("$naam bevat een uitroepteken. Die zijn van de stagiair.");
    }
    return $tekst;
}

// Alle posts, met als sleutel het moment waarop ze aan de beurt zijn.
$posts = [];
foreach (glob("$map/*.txt") ?: [] as $pad) {
    $slug = basename($pad, '.txt');
    $naam = "$slug.txt";
    if (!preg_match('/^(\d{4}-\d{2}-\d{2})-[a-z0-9-]+$/', $slug, $m)) {
        fout("$naam: de naam moet de slug van een persbericht zijn (jjjj-mm-dd-korte-titel).");
    }
    if (!is_file("$newsroom/$slug.md")) {
        fout("$naam: er is geen persbericht website/content/newsroom/$slug.md.");
    }
    $tekst = lees($pad, $naam);
    $url = "$site/newsroom/$slug/";
    $posts["{$m[1]} 00:00 $slug"] = ['naam' => $naam, 'tekst' => "$tekst\n\n$url", 'url' => $url,
        'vanaf' => new DateTimeImmutable($m[1], new DateTimeZone(TIJDZONE)),
        'lengte' => tekens($tekst) + 2 + LINK_TELT];
}
foreach (glob("$map/los/*.txt") ?: [] as $pad) {
    $naam = 'los/' . basename($pad);
    if (!preg_match('/^(\d{4}-\d{2}-\d{2})-(\d{2})(\d{2})-[a-z0-9-]+\.txt$/', basename($pad), $m)) {
        fout("$naam: de naam moet jjjj-mm-dd-uumm-onderwerp.txt zijn, met de tijd op Bonaire.");
    }
    $vanaf = DateTimeImmutable::createFromFormat('!Y-m-d H:i', "{$m[1]} {$m[2]}:{$m[3]}", new DateTimeZone(TIJDZONE))
        ?: fout("$naam: geen geldige datum en tijd.");
    $tekst = lees($pad, $naam);
    $posts["{$m[1]} {$m[2]}:{$m[3]} $naam"] = ['naam' => $naam, 'tekst' => $tekst, 'url' => null,
        'vanaf' => $vanaf, 'lengte' => tekens($tekst)];
}
ksort($posts);
foreach ($posts as $p) {
    if ($p['lengte'] > LIMIET) {
        fout("{$p['naam']} is {$p['lengte']} tekens" . ($p['url'] ? ' met de link' : '') . '; het maximum is ' . LIMIET . '.');
    }
}

if ($modus === 'check') {
    foreach ($posts as $p) {
        $wanneer = $p['vanaf'] > $nu ? ', vanaf ' . $p['vanaf']->format('Y-m-d H:i') : '';
        echo "ok  {$p['naam']} ({$p['lengte']} tekens$wanneer)\n";
    }
    echo count($posts) . " posts gecontroleerd.\n";
    exit(0);
}

// Trimmen: een geplakt secret neemt makkelijk een spatie of regeleinde mee, en dat geeft een 401.
$token = trim((string) getenv('MASTODON_TOKEN')) ?: fout('MASTODON_TOKEN ontbreekt.');

$aanDeBeurt = array_filter($posts, fn(array $p): bool => $p['vanaf'] <= $nu);
if ($aanDeBeurt === []) {
    echo "Niets aan de beurt.\n";
    exit(0);
}

[$status, $body] = verzoek('GET', "$instance/api/v1/accounts/verify_credentials", $token);
$account = json_decode($body, true);
if ($status !== 200 || !isset($account['id'])) {
    $reden = json_decode($body, true)['error'] ?? substr($body, 0, 200);
    fout("inloggen bij $instance mislukt (HTTP $status): $reden. Is MASTODON_TOKEN het toegangstoken (niet de client key of het client secret), met de scope read:accounts?");
}
echo "Account: @{$account['acct']}\n";

// Wat staat er al? Alle eigen posts doorlopen; het account is klein.
$geplaatst = '';
$kaalGeplaatst = '';
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
        $kaalGeplaatst .= kaal($s['content'] ?? '') . "\n";
        $max = (string) $s['id'];
    }
} while (count($pagina) > 0);

$nieuw = array_filter($aanDeBeurt, fn(array $p): bool => $p['url'] !== null
    ? !str_contains($geplaatst, $p['url'])
    : !str_contains($kaalGeplaatst, kaal($p['tekst'])));
if ($nieuw === []) {
    echo "Niets nieuws te plaatsen.\n";
    exit(0);
}

$fouten = 0;
foreach ($nieuw as $p) {
    // Een post bij een persbericht wacht tot het bericht op de site staat, anders heeft de link geen kaart.
    if ($p['url'] !== null) {
        [$status] = verzoek('GET', $p['url']);
        if ($status !== 200) {
            echo "::warning::{$p['naam']}: het bericht staat nog niet op de site (HTTP $status); volgende keer opnieuw.\n";
            continue;
        }
    }
    if ($proef) {
        echo "--- zou plaatsen: {$p['naam']}\n{$p['tekst']}\n";
        continue;
    }
    [$status, $body] = verzoek('POST', "$instance/api/v1/statuses", $token, [
        'status' => $p['tekst'],
        'visibility' => 'public',
        'language' => 'nl',
    ], ['Idempotency-Key: ' . hash('sha256', $p['naam'])]);
    $post = json_decode($body, true);
    if ($status !== 200 || !isset($post['url'])) {
        echo "ERROR: {$p['naam']} plaatsen mislukte (HTTP $status): " . substr($body, 0, 200) . "\n";
        $fouten++;
        continue;
    }
    echo "Geplaatst: {$p['naam']} → {$post['url']}\n";
    sleep(2);
}
exit($fouten > 0 ? 1 : 0);
