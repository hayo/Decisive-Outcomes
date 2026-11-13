<?php
require __DIR__ . '/../includes/bootstrap.php';
$data = filemtime(SITE_ROOT . '/includes/data.php');
$inzichten = alle_inzichten();
$urls = [];
// Gewone pagina's (een map met index.php) en /inzichten/ (via de router).
foreach (array_unique(array_merge(['/', '/contact/', '/over-ons/ons-verhaal/'], array_column(array_merge(NAVIGATIE, FOOTER_LINKS), 0))) as $pad) {
    $bestand = SITE_PUBLIC . $pad . 'index.php';
    $urls[$pad] = is_file($bestand) ? filemtime($bestand) : max([$data, ...array_column($inzichten, 'gewijzigd')]);
}
// Divisies en sectoren uit data.php, inzichten uit content/.
foreach (array_keys(DIVISIES) as $slug) $urls["/diensten/$slug/"] = $data;
foreach (array_keys(SECTOREN) as $id) $urls["/sectoren/$id/"] = $data;
foreach (array_keys(INZICHT_OVERZICHTEN) as $pad) {
    $soorten = INZICHT_OVERZICHTEN[$pad][1];
    $urls[$pad] = max([0, ...array_column(array_filter($inzichten, fn($i) => in_array($i['soort'], $soorten, true)), 'gewijzigd')]) ?: $data;
}
foreach ($inzichten as $i) $urls[$i['url']] = $i['gewijzigd'];
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $pad => $tijd): ?>
<url><loc><?= e(SITE_URL . $pad) ?></loc><lastmod><?= date('Y-m-d', $tijd) ?></lastmod></url>
<?php endforeach ?>
</urlset>
