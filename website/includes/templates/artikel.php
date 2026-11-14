<?php
/** Pagina voor één inzicht. Verwacht $i uit alle_inzichten(). */
$pers = $i['soort'] === 'Persbericht';
$overzicht = $pers ? '/newsroom/' : '/inzichten/' . SOORT_URL[$i['soort']] . '/';
pagina_begin([
    'titel' => $i['titel'],
    'beschrijving' => $i['samenvatting'],
    'pad' => $i['url'],
    'type' => 'article',
    'beeld' => $i['beeld'] ?? null,
    'kruimels' => [['/inzichten/', 'Inzichten'], [$overzicht, INZICHT_OVERZICHTEN[$overzicht][0]], [$i['url'], $i['titel']]],
    'jsonld' => [array_filter([
        '@type' => $pers ? 'NewsArticle' : 'Article',
        'headline' => $i['titel'],
        'datePublished' => $i['datum'],
        'description' => $i['samenvatting'],
        'author' => ['@type' => 'Organization', 'name' => SITE_NAAM, 'url' => SITE_URL . '/'],
        'publisher' => ['@type' => 'Organization', 'name' => SITE_NAAM],
        'image' => !empty($i['beeld']) && is_file(SITE_PUBLIC . '/assets/img/' . $i['beeld'] . '-1600.jpg') ? SITE_URL . '/assets/img/' . $i['beeld'] . '-1600.jpg' : null,
    ])],
]);
component('hero', ['label' => $i['soort'], 'kop' => $i['titel'], 'intro' => $i['samenvatting'], 'beeld' => $i['beeld'] ?? '', 'alt' => $i['alt'] ?? '']);
?>
<section>
<article class="artikel h-entry">
<data class="p-name" value="<?= e($i['titel']) ?>"></data>
<p class="meta"><?= e($i['plaats']) ?>, <time class="dt-published" datetime="<?= e($i['datum']) ?>"><?= e(datum($i['datum'])) ?></time> · <span class="p-author h-card"><?= e(SITE_NAAM) ?></span></p>
<div class="e-content">
<?= $i['html'] ?>
</div>
<?php if (!empty($i['download']) && is_file(SITE_PUBLIC . '/assets/' . $i['download'])): ?>
<p class="download"><a class="knop knop-rood" href="<?= e(asset($i['download'])) ?>" download>Download als PDF</a> <small>PDF, <?= round(filesize(SITE_PUBLIC . '/assets/' . $i['download']) / 1024) ?> kB</small></p>
<?php endif ?>
<?php if ($i['noot']): ?>
<aside class="over">
<h2 class="label">Noot voor de redactie</h2>
<?= $i['noot'] ?>
</aside>
<?php endif ?>
<?php if ($pers): ?>
<aside class="over">
<h2 class="label">Over <?= e(SITE_NAAM) ?></h2>
<p><?= e(OVER_DE_GROEP) ?></p>
<p>Voor persvragen: <?= e(PERSCONTACT) ?>, Postbus 1, Kralendijk.</p>
</aside>
<?php endif ?>
<p class="terug"><a href="/inzichten/">Alle inzichten</a></p>
</article>
</section>
<?php pagina_einde();
