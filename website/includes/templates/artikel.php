<?php
/** Pagina voor één inzicht. Verwacht $bestand (bijv. 'newsroom/2026-11-10-nieuwe-website'). */
require __DIR__ . '/../inzichten.php';
$i = inzicht_laden($bestand);
$pers = $i['soort'] === 'Persbericht';
pagina_begin([
    'titel' => $i['titel'],
    'beschrijving' => $i['samenvatting'],
    'pad' => $i['url'],
    'type' => 'article',
    'beeld' => $i['beeld'] ?? null,
    'kruimels' => [['/inzichten/', 'Inzichten'], [$i['url'], $i['titel']]],
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
<?php if ($pers): ?>
<aside class="over">
<h2 class="label">Over <?= e(SITE_NAAM) ?></h2>
<p><?= e(OVER_DE_GROEP) ?></p>
<p>Voor persvragen: Postbus 1, Kralendijk.</p>
</aside>
<?php endif ?>
<p><a href="/inzichten/">Alle inzichten</a></p>
</article>
</section>
<?php pagina_einde();
