<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Sectoren',
    'beschrijving' => 'Decisive Outcomes Group werkt voor overheden, mijnbouw, horeca, vastgoed, landbouw en maatschappelijke organisaties.',
    'pad' => '/sectoren/',
]);
component('hero', [
    'label' => 'Sectoren',
    'kop' => 'Wie wij bedienen',
    'intro' => 'Elke sector kent eigen risico\'s. Wij combineren de juiste divisies voor elke klantgroep.',
    'beeld' => 'TACT-01',
    'alt' => 'Een beveiliger met een geweer aan de draagriem kijkt bij zonsopgang vanaf een wal uit over een dagbouwmijn, achter een hek met prikkeldraad.',
]);
?>
<section>
<ul class="kaarten">
<?php foreach (SECTOREN as $id => $s) {
    component('kaart', ['titel' => $s['naam'], 'href' => "/sectoren/$id/", 'tekst' => $s['kort'], 'kop' => 'h2']);
} ?>
</ul>
</section>
<?php pagina_einde();
