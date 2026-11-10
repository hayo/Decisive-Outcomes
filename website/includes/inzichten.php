<?php
// Inzichten: persberichten (content/newsroom) en andere soorten (content/inzichten).
// Elk bestand geeft een array terug met: slug, titel, datum, plaats, samenvatting, beeld, alt, soort, html.

const SOORT_URL = ['Persbericht' => null, 'Analyse' => 'analyse', 'Casestudy' => 'casestudy', 'Rapport' => 'rapport', 'Jaarrapport' => 'rapport'];

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
