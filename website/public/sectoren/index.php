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
<div class="artikel">
<p class="inleiding">Elke sector kent eigen risico's, eigen regels en eigen mensen die het al jaren weten. Wij stemmen onze inzet daarop af.</p>
<p>Wij werken voor overheden, voor bedrijven in de mijnbouw, de horeca, het vastgoed en de landbouw, en voor maatschappelijke organisaties. Voor elke sector combineren wij de divisies die nodig zijn, met teams die de omstandigheden kennen. Wij beloven daarbij niet meer dan wij kunnen leveren, en wij leveren altijd een uitkomst.</p>
<p>Onze ervaring in deze sectoren is niet ontleend aan studies, maar aan opdrachten. Bij elke sector vindt u een wapenfeit uit ons eigen projectportfolio.</p>
</div>
</section>
<section class="vlak">
<ul class="kaarten">
<?php foreach (SECTOREN as $id => $s) {
    component('kaart', ['titel' => $s['naam'], 'href' => "/sectoren/$id/", 'tekst' => $s['kort'], 'kop' => 'h2']);
} ?>
</ul>
</section>
<?php pagina_einde();
