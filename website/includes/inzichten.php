<?php
// Inzichten: persberichten (content/newsroom) en andere soorten (content/inzichten).
// Elk inzicht is één Markdown-bestand; de bestandsnaam is de slug. Zie content/README.md.

const SOORT_URL = ['Persbericht' => null, 'Analyse' => 'analyse', 'Casestudy' => 'casestudy', 'Rapport' => 'rapport', 'Jaarrapport' => 'rapport'];

/** Overzichtspagina's per soort: pad => [naam, soorten, beschrijving]. */
const INZICHT_OVERZICHTEN = [
    '/newsroom/' => ['Persberichten', ['Persbericht'], 'Persberichten en nieuws van Decisive Outcomes Group.'],
    '/inzichten/analyse/' => ['Analyses', ['Analyse'], 'Analyses van risico\'s en ontwikkelingen door Decisive Outcomes Group.'],
    '/inzichten/casestudy/' => ['Casestudy\'s', ['Casestudy'], 'Casestudy\'s van opdrachten van Decisive Outcomes Group.'],
    '/inzichten/rapport/' => ['Rapporten', ['Rapport', 'Jaarrapport'], 'Rapporten en het jaarlijkse Stand-By Outlook van Decisive Outcomes Group.'],
];

const NOOT_KOP = '## Noot voor de redactie';

/** Lees één inzicht: metadata uit de kop tussen ---, de tekst als Markdown. */
function inzicht_laden(string $pad): array
{
    $tekst = str_replace("\r\n", "\n", (string) file_get_contents($pad));
    $i = [];
    if (preg_match('/\A---\n(.*?)\n---\n/s', $tekst, $m)) {
        foreach (explode("\n", $m[1]) as $regel) {
            if (preg_match('/^([a-z]+):\s*(.*)$/', $regel, $kv)) {
                $i[$kv[1]] = trim($kv[2]);
            }
        }
        $tekst = substr($tekst, strlen($m[0]));
    }
    [$tekst, $noot] = array_pad(explode("\n" . NOOT_KOP . "\n", "\n" . $tekst . "\n", 2), 2, '');

    $i['slug'] = basename($pad, '.md');
    $i['soort'] = $i['soort'] ?? 'Persbericht';
    $i['datum'] ??= preg_match('/^\d{4}-\d{2}-\d{2}/', $i['slug'], $d) ? $d[0] : date('Y-m-d', filemtime($pad));
    $i += ['titel' => $i['slug'], 'plaats' => 'Kralendijk', 'samenvatting' => '', 'beeld' => '', 'alt' => ''];
    $i['divisies'] = array_filter(array_map('trim', explode(',', $i['divisies'] ?? '')));
    $i['html'] = (empty($i['inleiding']) ? '' : '<p class="inleiding">' . markdown_inline($i['inleiding']) . "</p>\n") . markdown($tekst);
    $i['noot'] = markdown($noot);
    $i['url'] = $i['soort'] === 'Persbericht'
        ? '/newsroom/' . $i['slug'] . '/'
        : '/inzichten/' . (SOORT_URL[$i['soort']] ?? 'analyse') . '/' . $i['slug'] . '/';
    $i['gewijzigd'] = filemtime($pad);
    return $i;
}

/** Alle inzichten, nieuwste eerst. Bestanden die met _ beginnen tellen niet mee. */
function alle_inzichten(): array
{
    static $lijst = null;
    if ($lijst === null) {
        $lijst = [];
        foreach (glob(SITE_ROOT . '/content/{newsroom,inzichten}/[!_]*.md', GLOB_BRACE) ?: [] as $pad) {
            $lijst[] = inzicht_laden($pad);
        }
        usort($lijst, fn($a, $b) => strcmp($b['datum'], $a['datum']));
    }
    return $lijst;
}

/** Inzichten van bepaalde soorten of bij een divisie, nieuwste eerst. */
function inzichten_waar(?array $soorten = null, ?string $divisie = null): array
{
    return array_values(array_filter(alle_inzichten(), fn($i) =>
        ($soorten === null || in_array($i['soort'], $soorten, true))
        && ($divisie === null || in_array($divisie, $i['divisies'], true))));
}

/**
 * Een kleine, vaste set Markdown: alinea's, ## en ### koppen, lijsten met - of 1.,
 * **vet**, *cursief*, [links](/pad/) en een harde regelovergang met \ aan het eind van een regel.
 * HTML in de tekst wordt niet uitgevoerd maar getoond.
 */
function markdown(string $tekst): string
{
    $html = [];
    foreach (preg_split('/\n\s*\n/', trim($tekst)) as $blok) {
        $regels = explode("\n", trim($blok));
        if ($blok === '') {
            continue;
        }
        if (preg_match('/^(#{2,3}) (.+)$/', $regels[0], $m) && count($regels) === 1) {
            $n = strlen($m[1]);
            $html[] = "<h$n>" . markdown_inline($m[2]) . "</h$n>";
        } elseif (preg_match('/^(-|\d+\.) /', $regels[0], $m)) {
            $tag = $m[1] === '-' ? 'ul' : 'ol';
            $items = preg_split('/\n(?:-|\d+\.) /', "\n" . trim($blok), -1, PREG_SPLIT_NO_EMPTY);
            $html[] = "<$tag>\n" . implode("\n", array_map(
                fn($li) => '<li>' . markdown_inline(preg_replace('/^(?:-|\d+\.) /', '', trim($li))) . '</li>', $items
            )) . "\n</$tag>";
        } else {
            $html[] = '<p>' . markdown_inline($blok) . '</p>';
        }
    }
    return implode("\n", $html);
}

function markdown_inline(string $s): string
{
    $s = htmlspecialchars(trim($s), ENT_NOQUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8');
    $s = preg_replace('/\\\\\n\s*/', '<br>', $s);
    $s = preg_replace('/\s*\n\s*/', ' ', $s);
    $s = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $s);
    $s = preg_replace('/(?<![*\w])\*(?=\S)(.+?)(?<=\S)\*(?![*\w])/', '<em>$1</em>', $s);
    return preg_replace_callback('/\[([^\]]+)\]\(((?:\/|#|https:\/\/|mailto:)[^)\s]*)\)/', fn($m) =>
        '<a href="' . str_replace('"', '&quot;', $m[2]) . '">' . $m[1] . '</a>', $s);
}
