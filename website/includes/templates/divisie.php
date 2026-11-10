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
<p class="inleiding"><?= e($d['intro']) ?></p>
<h2>Kerncompetenties</h2>
<ul class="punten">
<?php foreach ($d['competenties'] as [$titel, $tekst]): ?>
<li><h3><?= e($titel) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ul>
</section>
<section class="vlak">
<p class="label">Recente inzet</p>
<h2><?= e($d['inzet'][0]) ?></h2>
<p class="inleiding"><?= e($d['inzet'][1]) ?></p>
</section>
<?php component('band', ['kop' => 'Vraag een offerte aan', 'tekst' => 'Vertel ons wat u nodig heeft. Wij reageren binnen zes tot acht jaar.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
