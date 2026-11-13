<?php
// Router voor pagina's die uit content/ en data.php komen: persberichten, inzichten,
// divisies en sectoren. Apache stuurt die URL's hierheen (zie .htaccess); voor de
// ingebouwde PHP-server: php -S localhost:8000 -t website/public website/public/router.php

if (PHP_SAPI === 'cli-server') {
    $pad = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
    if ($pad === '/sitemap.xml') {
        require __DIR__ . '/sitemap.php';
        return true;
    }
    if (!preg_match('#^/(newsroom|inzichten|diensten|sectoren)(/|$)#', $pad) || is_file(__DIR__ . $pad . 'index.php') || is_file(__DIR__ . $pad)) {
        return false; // bestaand bestand of gewone pagina: laat de server het afhandelen
    }
}

require_once __DIR__ . '/../includes/bootstrap.php';

$pad = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';

// Altijd een slash aan het eind.
if (!str_ends_with($pad, '/') && preg_match('#^/(newsroom|inzichten|diensten|sectoren)(/[a-z0-9-]+){0,2}$#', $pad)) {
    header('Location: ' . $pad . '/', true, 301);
    exit;
}

if ($pad === '/inzichten/' || isset(INZICHT_OVERZICHTEN[$pad])) {
    require SITE_ROOT . '/includes/templates/inzichten.php';
    exit;
}

if (preg_match('#^/diensten/([a-z0-9-]+)/$#', $pad, $m) && isset(DIVISIES[$m[1]])) {
    $slug = $m[1];
    require SITE_ROOT . '/includes/templates/divisie.php';
    exit;
}

if (preg_match('#^/sectoren/([a-z0-9-]+)/$#', $pad, $m) && isset(SECTOREN[$m[1]])) {
    $id = $m[1];
    require SITE_ROOT . '/includes/templates/sector.php';
    exit;
}

if (preg_match('#^/(newsroom|inzichten/[a-z]+)/([a-z0-9-]+)/$#', $pad, $m)) {
    foreach (alle_inzichten() as $i) {
        if ($i['slug'] !== $m[2]) {
            continue;
        }
        if ($i['url'] !== $pad) {
            header('Location: ' . $i['url'], true, 301); // juiste soort, ander adres
            exit;
        }
        require SITE_ROOT . '/includes/templates/artikel.php';
        exit;
    }
}

require __DIR__ . '/404.php';
