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
    'alt' => 'Een oude ongemarkeerde transporthelikopter vliegt laag over de savanne bij zonsondergang.',
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
<p>Het hoofdkantoor beschikt over een vergaderzaal met airconditioning en uitzicht op zee, een kluis en een aanlegsteiger. In de kluis bevinden zich de archieven van de groep, het sausrecept uit 1962 en, in de kamer ernaast, de kist. Daar staat altijd iemand bij.</p>
<p>Het eiland is bereikbaar per boot, via een vaste veerdienst vanaf Bonaire. Bij laag water is de aanlegsteiger niet altijd nodig. Bezoek is uitsluitend op afspraak. Een afspraak is nog nooit gemaakt.</p>
<p>Klein Klein Bonaire staat op geen enkele officiële kaart. Wij beschouwen dat als een bewuste keuze voor discretie. Sinds 10 oktober 2010 valt het eiland onder Nederland. Onze correspondentie met de Belastingdienst over de oppervlakte loopt.</p>
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
<p class="inleiding">Al onze vestigingen zijn een postbus, met uitzondering van Kralendijk. Dat is een postbus met een bankje.</p>
<p>Onze vestigingen liggen op plekken waar de groep heeft gewerkt, waar zij iets bezit, of waar een opdrachtgever ooit om een adres vroeg. Zo zijn wij in veertig landen aanwezig, met lage vaste lasten en een reactietermijn die overal gelijk is: zes tot acht jaar. Post voor alle vestigingen wordt doorgestuurd naar Postbus 1 in Kralendijk en daar zorgvuldig gelezen.</p>
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
<section>
<div class="twee">
<div>
<h2>Afrika</h2>
<p>Afrika is waar de groep begon, en waar de meeste opdrachten nog altijd hun oorsprong hebben. In Manica ligt Kamp Stand-By, onze eerste vestiging. Aan het Kariba-meer staat de fabriek van Decisive Hospitality, in Huíla de mijn van Decisive Mining. In Swaziland zijn wij elk jaar aanwezig bij Bevrijdingsdag.</p>
<h2>Amerika</h2>
<p>Vanuit Kralendijk worden het hoofdkantoor, Decisive People en Decisive Agri aangestuurd. In Zuid-Amerika heeft de groep vestigingen op plaatsen waar zij in de jaren negentig opdrachten uitvoerde, waaronder de beveiliging van televisieopnames in Bogotá en het terugvinden van een lama in Bolivia.</p>
</div>
<div>
<h2>Europa</h2>
<p>In Europa is de groep actief op de Balkan, in Portugal en, sinds 2019, in de Benelux. De vestigingen in België hebben een historische band met Decisive Hospitality: in Roeselare werd onze frietketel gemaakt. In Nederland en België is de divisie Benelux actief op een groot aantal terreinen.</p>
<h2>Midden-Oosten en Azië</h2>
<p>In de Golfregio onderhoudt de groep sinds 1993 contacten op het gebied van luchttransport. Onze luchtvloot werd in Sharjah aangeschaft. De aanvraag voor een vliegvergunning loopt.</p>
</div>
</div>
</section>
<?php component('band', ['kop' => 'Wij zijn bij u in de buurt', 'tekst' => 'Of in elk geval bij uw postbus. Schrijf ons via Postbus 1, Kralendijk.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
