<?php
/** @var array $p */
$titel = $p['pad'] === '/' ? SITE_NAAM . ' | Beslissende uitkomsten' : $p['titel'] . ' | ' . SITE_NAAM;
$url = SITE_URL . $p['pad'];
$og = $p['beeld'] && is_file(SITE_PUBLIC . '/assets/img/' . $p['beeld'] . '-og.jpg')
    ? SITE_URL . '/assets/img/' . $p['beeld'] . '-og.jpg' : null;

$ld = [[
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => SITE_NAAM,
    'url' => SITE_URL . '/',
    'logo' => SITE_URL . '/assets/img/logo-176.png',
]];
if ($p['kruimels']) {
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_URL . '/']];
    foreach ($p['kruimels'] as $i => [$href, $naam]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $naam, 'item' => SITE_URL . $href];
    }
    $ld[] = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items];
}
foreach ($p['jsonld'] as $extra) {
    $ld[] = ['@context' => 'https://schema.org'] + $extra;
}
?><!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($titel) ?></title>
<meta name="description" content="<?= e($p['beschrijving']) ?>">
<link rel="canonical" href="<?= e($url) ?>">
<link rel="preload" href="<?= e(asset('fonts/oswald.woff2')) ?>" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>">
<link rel="icon" href="/favicon.ico" sizes="48x48">
<link rel="icon" href="<?= e(asset('img/favicon-32.png')) ?>" type="image/png" sizes="32x32">
<link rel="apple-touch-icon" href="<?= e(asset('img/apple-touch-icon.png')) ?>">
<link rel="alternate" type="application/atom+xml" title="Inzichten van <?= e(SITE_NAAM) ?>" href="/inzichten/feed.php">
<meta property="og:title" content="<?= e($p['titel']) ?>">
<meta property="og:description" content="<?= e($p['beschrijving']) ?>">
<meta property="og:url" content="<?= e($url) ?>">
<meta property="og:type" content="<?= e($p['type']) ?>">
<meta property="og:locale" content="nl_NL">
<meta property="og:site_name" content="<?= e(SITE_NAAM) ?>">
<?php if ($og): ?>
<meta property="og:image" content="<?= e($og) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<?php else: ?>
<meta name="twitter:card" content="summary">
<?php endif ?>
<meta name="theme-color" content="#0f0d0b">
<script type="application/ld+json"><?= json_encode(count($ld) === 1 ? $ld[0] : $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
</head>
