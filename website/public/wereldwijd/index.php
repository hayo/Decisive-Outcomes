<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Wereldwijd',
    'beschrijving' => 'Veertig vestigingen in vier regio\'s, met het wereldwijde hoofdkantoor op Klein Klein Bonaire.',
    'pad' => '/wereldwijd/',
]);
component('hero', [
    'label' => 'Wereldwijd',
    'kop' => 'Waar wij actief zijn',
    'intro' => 'Met veertig vestigingen in vier regio\'s zijn wij dicht bij onze opdrachtgevers. Of in elk geval bij hun postbus.',
    'beeld' => 'TACT-03',
    'alt' => 'Een kleine ongemarkeerde helikopter vliegt laag over de savanne bij zonsondergang.',
]);
$regios = [
    'Afrika' => ['Beira', 'Brazzaville', 'Chimoio', 'Freetown', 'Harare', 'Kinshasa', 'Lilongwe', 'Luanda', 'Lungi', 'Malabo', 'Manica', 'Maputo', 'Mbabane', 'Victoria Falls'],
    'Amerika' => ['Bogotá', 'Kralendijk', 'La Paz', 'Lima', 'Paramaribo', 'Rincon', 'Santa Cruz de la Sierra', 'Willemstad'],
    'Europa' => ['Antwerpen', 'Brussel', 'Den Haag', 'Lissabon', 'Maastricht', 'Ostende', 'Roeselare', 'Sarajevo', 'Tirana', 'Zwolle'],
    'Midden-Oosten en Azië' => ['Abu Dhabi', 'Bahrein', 'Dubai', 'Doha', 'Muscat', 'Ras al-Khaimah', 'Sharjah', 'Singapore'],
];
?>
<section>
<div class="twee">
<div>
<h2>Hoofdkantoor</h2>
<p class="inleiding">Het wereldwijde hoofdkantoor ligt op Klein Klein Bonaire, voor de kust van Bonaire. De oppervlakte bedraagt 40 m² tot 1 hectare, afhankelijk van het getij.</p>
<p>Het hoofdkantoor beschikt over een vergaderzaal, een kluis en een aanlegsteiger. Bezoek is uitsluitend op afspraak. Een afspraak is nog nooit gemaakt.</p>
</div>
<?= beeld('WERELD-02', 'Een moderne vergaderruimte van glas op een klein eiland bij zonsopgang, met zee aan alle kanten.', '(min-width: 50em) 50vw, 100vw') ?>
</div>
</section>
<section class="kaartbeeld">
<figure>
<?= beeld('WERELD-01', 'Wereldkaart met de veertig vestigingen van de groep en verbindingen vanaf het hoofdkantoor op Bonaire.', '(min-width: 76rem) 76rem, 100vw') ?>
<figcaption>Veertig vestigingen in vier regio's. Hoofdkantoor: Klein Klein Bonaire.</figcaption>
</figure>
</section>
<section class="vlak">
<h2>Vestigingen</h2>
<p>Al onze vestigingen zijn een postbus, met uitzondering van Kralendijk. Dat is een postbus met een bankje.</p>
<div class="punten">
<?php foreach ($regios as $regio => $plaatsen): ?>
<div>
<h3><?= e($regio) ?></h3>
<ul>
<?php foreach ($plaatsen as $plaats): ?>
<li><?= e($plaats) ?><?= $plaats === 'Kralendijk' ? ' (postbus met bankje)' : '' ?></li>
<?php endforeach ?>
</ul>
</div>
<?php endforeach ?>
</div>
</section>
<?php pagina_einde();
