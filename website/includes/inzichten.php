<?php
// Inzichten: persberichten (content/newsroom) en andere soorten (content/inzichten).
// Elk bestand geeft een array terug met: slug, titel, datum, plaats, samenvatting, beeld, alt, soort, html.
// Optioneel: noot (Noot voor de redactie), divisies (slugs), download (pad onder public/assets/, bijv. 'docs/rapport.pdf').

const SOORT_URL = ['Persbericht' => null, 'Analyse' => 'analyse', 'Casestudy' => 'casestudy', 'Rapport' => 'rapport', 'Jaarrapport' => 'rapport'];

/** Overzichtspagina's per soort: pad => [naam, soorten, beschrijving]. */
const INZICHT_OVERZICHTEN = [
    '/newsroom/' => ['Persberichten', ['Persbericht'], 'Persberichten en nieuws van Decisive Outcomes Group.'],
    '/inzichten/analyse/' => ['Analyses', ['Analyse'], 'Analyses van risico\'s en ontwikkelingen door Decisive Outcomes Group.'],
    '/inzichten/casestudy/' => ['Casestudy\'s', ['Casestudy'], 'Casestudy\'s van opdrachten van Decisive Outcomes Group.'],
    '/inzichten/rapport/' => ['Rapporten', ['Rapport', 'Jaarrapport'], 'Rapporten en het jaarlijkse Stand-By Outlook van Decisive Outcomes Group.'],
];

function inzicht_laden(string $bestand): array
{
    $i = require SITE_ROOT . '/content/' . $bestand . '.php';
    $i['soort'] ??= 'Persbericht';
    $i['url'] = $i['soort'] === 'Persbericht'
        ? '/newsroom/' . $i['slug'] . '/'
        : '/inzichten/' . SOORT_URL[$i['soort']] . '/' . $i['slug'] . '/';
    $i['gewijzigd'] = filemtime(SITE_ROOT . '/content/' . $bestand . '.php');
    return $i;
}

/** Alle inzichten, nieuwste eerst. */
function alle_inzichten(): array
{
    $lijst = [];
    foreach (['newsroom', 'inzichten'] as $map) {
        foreach (glob(SITE_ROOT . "/content/$map/*.php") ?: [] as $pad) {
            $lijst[] = inzicht_laden($map . '/' . basename($pad, '.php'));
        }
    }
    usort($lijst, fn($a, $b) => strcmp($b['datum'], $a['datum']));
    return $lijst;
}

/** Inzichten van bepaalde soorten of bij een divisie, nieuwste eerst. */
function inzichten_waar(?array $soorten = null, ?string $divisie = null): array
{
    return array_values(array_filter(alle_inzichten(), fn($i) =>
        ($soorten === null || in_array($i['soort'], $soorten, true))
        && ($divisie === null || in_array($divisie, $i['divisies'] ?? [], true))));
}
