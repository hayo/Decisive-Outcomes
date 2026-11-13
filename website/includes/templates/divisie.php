<?php
/** Pagina voor één divisie. Verwacht $slug. */
$d = DIVISIES[$slug];
pagina_begin([
    'titel' => $d['naam'],
    'beschrijving' => $d['kort'],
    'pad' => "/diensten/$slug/",
    'beeld' => $d['beeld'],
    'kruimels' => [['/diensten/', 'Diensten'], ["/diensten/$slug/", $d['naam']]],
    'jsonld' => [['@type' => 'Service', 'name' => $d['naam'], 'description' => $d['kort'], 'provider' => ['@type' => 'Organization', 'name' => SITE_NAAM]]],
]);
component('hero', ['label' => $d['naam'], 'kop' => $d['kop'], 'intro' => $d['kort'], 'beeld' => $d['beeld'], 'alt' => '']);
?>
<section>
<div class="artikel">
<p class="inleiding"><?= e($d['intro']) ?></p>
<?php foreach ($d['tekst'] ?? [] as $alinea): ?>
<p><?= e($alinea) ?></p>
<?php endforeach ?>
</div>
</section>
<section class="vlak">
<h2>Kerncompetenties</h2>
<ul class="punten">
<?php foreach ($d['competenties'] as [$titel, $tekst]): ?>
<li><h3><?= e($titel) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ul>
</section>
<?php if (!empty($d['aanpak'])): ?>
<section>
<h2>Onze aanpak</h2>
<ol class="punten">
<?php foreach ($d['aanpak'] as $n => [$stap, $tekst]): ?>
<li><h3><?= $n + 1 ?>. <?= e($stap) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ol>
</section>
<?php endif ?>
<section<?= empty($d['aanpak']) ? '' : ' class="vlak"' ?>>
<div class="twee">
<div>
<p class="label">Recente inzet</p>
<h2><?= e($d['inzet'][0]) ?></h2>
<p><?= e($d['inzet'][1]) ?></p>
<?php if (!empty($d['inzet'][2])): ?><p><a href="<?= e($d['inzet'][2]) ?>">Lees de casestudy</a></p><?php endif ?>
<?php $sectoren = array_filter(SECTOREN, fn($s) => in_array($slug, $s['divisies'], true)); if ($sectoren): ?>
<p class="label">Sectoren</p>
<p><?php $n = 0; foreach ($sectoren as $id => $s): ?><?= $n++ ? ', ' : '' ?><a href="/sectoren/<?= e($id) ?>/"><?= e($s['naam']) ?></a><?php endforeach ?></p>
<?php endif ?>
</div>
<?php if (!empty($d['feiten'])): ?>
<div class="tabel" role="region" aria-label="<?= e($d['naam']) ?> in feiten" tabindex="0">
<table>
<caption><?= e($d['naam']) ?> in feiten</caption>
<tbody>
<?php foreach ($d['feiten'] as [$kenmerk, $waarde]): ?>
<tr><th scope="row"><?= e($kenmerk) ?></th><td><?= e($waarde) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>
</div>
<?php endif ?>
</div>
</section>
<?php $inzichten = array_slice(inzichten_waar(null, $slug), 0, 3); if ($inzichten): ?>
<section>
<h2>Inzichten</h2>
<ul class="kaarten">
<?php foreach ($inzichten as $i) {
    component('kaart', ['titel' => $i['titel'], 'href' => $i['url'], 'tekst' => $i['samenvatting'], 'label' => $i['soort'] . ' · ' . datum($i['datum']), 'beeld' => $i['beeld'], 'alt' => $i['alt']]);
} ?>
</ul>
</section>
<?php endif ?>
<?php component('band', ['kop' => 'Vraag een offerte aan', 'tekst' => 'Vertel ons wat u nodig heeft. Wij reageren binnen zes tot acht jaar.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
