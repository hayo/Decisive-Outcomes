<?php
require __DIR__ . '/../../includes/bootstrap.php';
$items = alle_inzichten();
$bijgewerkt = $items ? max(array_column($items, 'gewijzigd')) : time();
header('Content-Type: application/atom+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>', "\n";
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="nl">
<title>Inzichten van <?= e(SITE_NAAM) ?></title>
<link href="<?= e(SITE_URL) ?>/inzichten/"/>
<link rel="self" href="<?= e(SITE_URL) ?>/inzichten/feed.php"/>
<id><?= e(SITE_URL) ?>/inzichten/</id>
<updated><?= date(DATE_ATOM, $bijgewerkt) ?></updated>
<author><name><?= e(SITE_NAAM) ?></name></author>
<?php foreach ($items as $i): ?>
<entry>
<title><?= e($i['titel']) ?></title>
<link href="<?= e(SITE_URL . $i['url']) ?>"/>
<id><?= e(SITE_URL . $i['url']) ?></id>
<published><?= date(DATE_ATOM, strtotime($i['datum'] . ' 09:00:00 UTC')) ?></published>
<updated><?= date(DATE_ATOM, $i['gewijzigd']) ?></updated>
<category term="<?= e($i['soort']) ?>"/>
<summary><?= e($i['samenvatting']) ?></summary>
<content type="html"><?= e($i['html']) ?></content>
</entry>
<?php endforeach ?>
</feed>
