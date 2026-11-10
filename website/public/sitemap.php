<?php
require __DIR__ . '/../includes/bootstrap.php';
require SITE_ROOT . '/includes/inzichten.php';
$paden = ['/', '/contact/'];
foreach (array_merge(NAVIGATIE, FOOTER_LINKS) as [$href]) $paden[] = $href;
foreach (array_keys(DIVISIES) as $slug) $paden[] = "/diensten/$slug/";
foreach (array_keys(SECTOREN) as $id) $paden[] = "/sectoren/$id/";
foreach (array_keys(INZICHT_OVERZICHTEN) as $pad) $paden[] = $pad;
$urls = [];
foreach (array_unique($paden) as $pad) {
    $bestand = SITE_PUBLIC . $pad . 'index.php';
    $urls[] = [$pad, is_file($bestand) ? filemtime($bestand) : time()];
}
foreach (alle_inzichten() as $i) $urls[] = [$i['url'], $i['gewijzigd']];
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as [$pad, $tijd]): ?>
<url><loc><?= e(SITE_URL . $pad) ?></loc><lastmod><?= date('Y-m-d', $tijd) ?></lastmod></url>
<?php endforeach ?>
</urlset>
