<?php
declare(strict_types=1);

// Basis voor elke pagina: paden, configuratie, foutafhandeling en helpers.

const SITE_ROOT = __DIR__ . '/..';
const SITE_PUBLIC = SITE_ROOT . '/public';
const SITE_URL = 'https://decisiveoutcomes.nl';
const SITE_NAAM = 'Decisive Outcomes Group';

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);
header_remove('X-Powered-By');

$config = is_file(__DIR__ . '/config.php')
    ? require __DIR__ . '/config.php'
    : require __DIR__ . '/config.example.php';

require __DIR__ . '/data.php';
require __DIR__ . '/inzichten.php';

/** Escape voor HTML-uitvoer. */
function e(?string $s): string
{
    return htmlspecialchars($s ?? '', ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8');
}

/** Pad naar een bestand in /assets met ?v= op basis van de wijzigingstijd. */
function asset(string $pad): string
{
    $bestand = SITE_PUBLIC . '/assets/' . $pad;
    $v = is_file($bestand) ? (string) filemtime($bestand) : '0';
    return '/assets/' . $pad . '?v=' . $v;
}

/** Laad een component uit includes/components met eigen variabelen. */
function component(string $__component, array $__args = []): void
{
    extract($__args, EXTR_SKIP);
    require __DIR__ . '/components/' . $__component . '.php';
}

/** Inline SVG-icoon uit de vaste set. */
function icoon(string $naam): string
{
    static $paden = null;
    $paden ??= require __DIR__ . '/iconen.php';
    if (!isset($paden[$naam])) {
        return '';
    }
    return '<svg class="icoon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">' . $paden[$naam] . '</svg>';
}

/**
 * Beeld uit public/assets/img (<id>-800.jpg en <id>-1600.jpg, optioneel <id>-mobiel.jpg).
 * Bestaat het beeld nog niet, dan geeft dit een lege string terug.
 */
function beeld(string $id, string $alt, string $sizes = '100vw', bool $lcp = false): string
{
    static $manifest = null;
    $map = SITE_PUBLIC . '/assets/img/';
    if (!is_file($map . $id . '-800.jpg')) {
        return '';
    }
    if ($manifest === null) {
        $json = @file_get_contents(SITE_ROOT . '/beelden/beelden.json');
        $manifest = $json ? (json_decode($json, true) ?: []) : [];
    }
    $srcset = asset("img/$id-800.jpg") . ' 800w';
    if (is_file($map . $id . '-1600.jpg')) {
        $srcset .= ', ' . asset("img/$id-1600.jpg") . ' 1600w';
    }
    [$w, $h] = getimagesize($map . $id . '-800.jpg') ?: [800, 450];
    $laden = $lcp ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"';
    $img = sprintf(
        '<img src="%s" srcset="%s" sizes="%s" width="%d" height="%d" alt="%s" %s>',
        e(asset("img/$id-800.jpg")), e($srcset), e($sizes), $w, $h, e($alt), $laden
    );
    if (is_file($map . $id . '-mobiel.jpg')) {
        $img = '<picture><source media="(max-width: 40em)" srcset="' . e(asset("img/$id-mobiel.jpg")) . '">' . $img . '</picture>';
    }
    return $img;
}

/** Nederlandse datum, bijvoorbeeld 10 november 2026. */
function datum(string $iso): string
{
    static $maanden = ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli',
        'augustus', 'september', 'oktober', 'november', 'december'];
    $t = strtotime($iso);
    return (int) date('j', $t) . ' ' . $maanden[(int) date('n', $t) - 1] . ' ' . date('Y', $t);
}

/** Begin van een pagina: head, header en het openen van main. */
function pagina_begin(array $p): void
{
    $p += [
        'titel' => SITE_NAAM,
        'beschrijving' => 'Decisive Outcomes Group levert beslissende uitkomsten in complexe omgevingen. Sinds 1979.',
        'pad' => '/',
        'type' => 'website',
        'beeld' => null,
        'kruimels' => [],
        'jsonld' => [],
        'actief' => '',
    ];
    $GLOBALS['pagina'] = $p;
    header('Content-Type: text/html; charset=utf-8');
    require __DIR__ . '/head.php';
    require __DIR__ . '/header.php';
}

/** Einde van een pagina: main sluiten en footer. */
function pagina_einde(): void
{
    require __DIR__ . '/footer.php';
}
