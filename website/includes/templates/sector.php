<?php
/** Pagina voor één sector. Verwacht $id. */
$s = SECTOREN[$id];
pagina_begin([
    'titel' => $s['naam'],
    'beschrijving' => $s['kort'],
    'pad' => "/sectoren/$id/",
    'kruimels' => [['/sectoren/', 'Sectoren'], ["/sectoren/$id/", $s['naam']]],
]);
component('hero', ['label' => 'Sectoren', 'kop' => $s['naam'], 'intro' => $s['kort']]);
?>
<section>
<p class="inleiding"><?= e($s['intro']) ?></p>
<h2>Waar wij bij helpen</h2>
<ul class="punten">
<?php foreach ($s['uitdagingen'] as [$titel, $tekst]): ?>
<li><h3><?= e($titel) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ul>
</section>
<section class="vlak">
<p class="label">Wapenfeit</p>
<h2><?= e(strtok($s['wapenfeit'], ':')) ?></h2>
<p class="inleiding"><?= e(ucfirst(trim(substr($s['wapenfeit'], strpos($s['wapenfeit'], ':') + 1)))) ?></p>
</section>
<section>
<h2>Betrokken divisies</h2>
<ul class="kaarten">
<?php foreach ($s['divisies'] as $slug) {
    $d = DIVISIES[$slug];
    component('kaart', ['titel' => $d['naam'], 'href' => "/diensten/$slug/", 'tekst' => $d['kort'], 'icoon' => $d['icoon']]);
} ?>
</ul>
</section>
<?php component('band', ['kop' => 'Vraag een offerte aan', 'tekst' => 'Vertel ons wat u nodig heeft. Wij reageren binnen zes tot acht jaar.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
