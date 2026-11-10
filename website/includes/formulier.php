<?php
// Contactformulier: validatie, stateless token en verzending. Er wordt niets opgeslagen.

const ONDERWERPEN = [
    'team' => 'Meespelen of een vraag over het team',
    'aanvraag' => 'Aanvraag voor diensten (RFP)',
    'pers' => 'Persvraag',
    'anders' => 'Iets anders',
];
const REGIOS = ['' => 'Kies een regio', 'afrika' => 'Afrika', 'amerika' => 'Amerika', 'europa' => 'Europa', 'benelux' => 'Benelux', 'azie' => 'Midden-Oosten en Azië'];
const VALUTA = ['' => 'Kies een valuta', 'usd' => 'Amerikaanse dollar', 'rhd' => 'Rhodesische dollar', 'geiten' => 'Geiten'];

function formulier_actief(array $config): bool
{
    return filter_var($config['mail_naar'], FILTER_VALIDATE_EMAIL) && filter_var($config['mail_van'], FILTER_VALIDATE_EMAIL) && strlen($config['formulier_geheim']) >= 32;
}

function token_maak(array $config): string
{
    $t = (string) time();
    return $t . '.' . hash_hmac('sha256', $t, $config['formulier_geheim']);
}

function token_ok(string $token, array $config): bool
{
    [$t, $sig] = array_pad(explode('.', $token, 2), 2, '');
    if (!ctype_digit($t) || !hash_equals(hash_hmac('sha256', $t, $config['formulier_geheim']), $sig)) {
        return false;
    }
    $leeftijd = time() - (int) $t;
    return $leeftijd >= 3 && $leeftijd <= 7200;   // niet te snel (bots), niet te oud
}

/** Eén regel tekst: geen regeleinden of stuurtekens, ingekort. */
function regel(mixed $w, int $max): string
{
    $w = is_string($w) ? $w : '';
    $w = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $w) ?? '';
    return mb_substr(trim($w), 0, $max);
}

/** Valideer de invoer. Geeft [waarden, fouten] terug. */
function formulier_controleer(array $post): array
{
    $w = [
        'naam' => regel($post['naam'] ?? '', 100),
        'email' => regel($post['email'] ?? '', 200),
        'organisatie' => regel($post['organisatie'] ?? '', 150),
        'onderwerp' => regel($post['onderwerp'] ?? '', 20),
        'regio' => regel($post['regio'] ?? '', 20),
        'budget' => regel($post['budget'] ?? '', 100),
        'valuta' => regel($post['valuta'] ?? '', 20),
        'bericht' => mb_substr(trim(str_replace("\r\n", "\n", is_string($post['bericht'] ?? null) ? $post['bericht'] : '')), 0, 5000),
    ];
    $f = [];
    if ($w['naam'] === '') $f['naam'] = 'Vul je naam in.';
    if (!filter_var($w['email'], FILTER_VALIDATE_EMAIL)) $f['email'] = 'Vul een geldig e-mailadres in, bijvoorbeeld naam@voorbeeld.nl.';
    if (!isset(ONDERWERPEN[$w['onderwerp']])) $f['onderwerp'] = 'Kies een onderwerp.';
    if (!isset(REGIOS[$w['regio']])) $w['regio'] = '';
    if (!isset(VALUTA[$w['valuta']])) $w['valuta'] = '';
    if (mb_strlen($w['bericht']) < 10) $f['bericht'] = 'Schrijf een bericht van minimaal tien tekens.';
    return [$w, $f];
}

function formulier_verstuur(array $w, array $config): bool
{
    $onderwerp = '[decisiveoutcomes.nl] ' . ONDERWERPEN[$w['onderwerp']] . ': ' . $w['naam'];
    $regels = [
        'Naam: ' . $w['naam'],
        'E-mail: ' . $w['email'],
        'Organisatie: ' . ($w['organisatie'] ?: '-'),
        'Onderwerp: ' . ONDERWERPEN[$w['onderwerp']],
    ];
    if ($w['regio'] || $w['budget'] || $w['valuta']) {
        $regels[] = 'Regio: ' . ($w['regio'] ? REGIOS[$w['regio']] : '-');
        $regels[] = 'Budget: ' . ($w['budget'] ?: '-') . ($w['valuta'] ? ' (' . VALUTA[$w['valuta']] . ')' : '');
    }
    $tekst = implode("\n", $regels) . "\n\n" . $w['bericht'] . "\n";
    $headers = [
        'From' => 'Website Decisive Outcomes <' . $config['mail_van'] . '>',
        'Reply-To' => $w['email'],
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/plain; charset=UTF-8',
        'Content-Transfer-Encoding' => '8bit',
    ];
    return mail($config['mail_naar'], mb_encode_mimeheader($onderwerp, 'UTF-8'), $tekst, $headers, '-f' . $config['mail_van']);
}
