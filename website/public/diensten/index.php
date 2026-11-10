<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Diensten',
    'beschrijving' => 'Zeven divisies voor beveiliging, horeca, grondstoffen, beleggingen, vastgoed, personeel en veehouderij.',
    'pad' => '/diensten/',
]);
component('hero', [
    'label' => 'Diensten',
    'kop' => 'Zeven divisies, één opdracht',
    'intro' => 'Van beveiliging tot veehouderij: onze divisies werken samen aan één beslissende uitkomst voor elke opdrachtgever.',
]);
?>
<section>
<ul class="kaarten">
<?php foreach (DIVISIES as $slug => $d) {
    component('kaart', ['titel' => $d['naam'], 'href' => "/diensten/$slug/", 'tekst' => $d['kop'], 'icoon' => $d['icoon'], 'kop' => 'h2', 'beeld' => $d['beeld'], 'alt' => '']);
} ?>
</ul>
</section>
<?php component('band', ['kop' => 'Op zoek naar een partner voor een complexe opdracht?', 'tekst' => 'Wij denken graag met u mee, binnen de gebruikelijke reactietermijn.', 'href' => '/contact/', 'knop' => 'Vraag een offerte aan']);
pagina_einde();
