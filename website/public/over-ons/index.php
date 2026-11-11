<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Over ons',
    'beschrijving' => 'Decisive Outcomes Group: opgericht in 1984 door vier veteranen met een gedeelde visie en een gedeelde kist.',
    'pad' => '/over-ons/',
    'jsonld' => array_map(fn($b) => ['@type' => 'Person', 'name' => $b[0], 'jobTitle' => $b[1], 'worksFor' => ['@type' => 'Organization', 'name' => SITE_NAAM]], BESTUUR),
]);
component('hero', [
    'label' => 'Over ons',
    'kop' => 'Vier veteranen, één opdracht',
    'intro' => 'Decisive Outcomes Group werd in 1984 opgericht door vier veteranen met een gedeelde visie en een gedeelde kist.',
    'beeld' => 'OVER-01',
    'alt' => 'Een oude houten keukentafel in een verlaten boerderij, met een vergeelde krant, een lege koffiekop en een notitieboek.',
]);
?>
<section class="twee">
<div>
<h2>Onze geschiedenis</h2>
<p class="inleiding">In 1979 kreeg een team van verkenners de opdracht een kist af te leveren in de provincie Manica, in Mozambique. De ontvanger verscheen niet. De opdracht werd nooit ingetrokken.</p>
<p>Vier leden van dat team bleven ter plaatse. Zij vestigden zich op een verlaten cashewplantage, die zij Kamp Stand-By noemden, en hielden zich aan hun opdracht. Zij herstelden waterpompen en generatoren voor de omliggende dorpen, haalden de cashewoogst binnen en bouwden goede relaties op met de lokale gemeenschap, in het bijzonder met Dona Esperança, die de streek leidde en die tot op vandaag de beste onderhandelaar is die de groep heeft ontmoet.</p>
<p>In 1983 vernam het team uit de kranten dat het land waarvoor het werkte inmiddels anders heette. De opdracht was daarmee niet vervallen. Op 1 april 1984 richtten de vier Decisive Outcomes op, aan een keukentafel, met een eerste klant, een eerste contract en een eerste factuur in Rhodesische dollars.</p>
<p>In de twintig jaar daarna voerde het team opdrachten uit in Afrika, Zuid-Amerika en op de Balkan. Klanten betaalden zelden in geld, en zo groeide het bezit: een fabriek voor gedroogd vlees, een kwartsmijn, een pakket aandelen, een uitzendbureau, een eiland en een veestapel. In 2005 werden al die bezittingen ondergebracht in één holding, Decisive Outcomes Group, met zeven divisies en een hoofdkantoor op Klein Klein Bonaire.</p>
<p>De oprichters vormen nog altijd de raad van bestuur. De kist is nog altijd in ons bezit.</p>
<p><a class="knop knop-rood" href="/over-ons/ons-verhaal/">Lees ons verhaal</a></p>
</div>
<div>
<h2>Tijdlijn</h2>
<ol class="tijdlijn">
<?php foreach (TIJDLIJN as [$jaar, $tekst]): ?>
<li><strong><?= e($jaar) ?></strong><?= e($tekst) ?></li>
<?php endforeach ?>
</ol>
</div>
</section>
<section class="vlak">
<h2>Missie, visie en kernwaarden</h2>
<div class="twee">
<div>
<p class="inleiding"><strong>Missie.</strong> Wij zorgen voor een beslissende uitkomst. Welke uitkomst dat is, beslissen wij ter plekke.</p>
<p>Onze missie werd in 1984 aan de keukentafel opgeschreven en is sindsdien niet veranderd. Zij geeft ons de ruimte om in elke situatie de uitkomst te kiezen die het best past. Geen enkele opdrachtgever heeft ons ooit kunnen verwijten dat de beloofde uitkomst niet is geleverd.</p>
</div>
<div>
<p class="inleiding"><strong>Visie.</strong> In 2040 zijn wij wereldwijd marktleider. In elk geval op Klein Klein Bonaire.</p>
<p>Wij groeien gestaag, vooral door overnames, en wij kiezen daarbij voor de lange termijn. Op Klein Klein Bonaire is de positie van marktleider al met grote zekerheid te melden. Voor de rest van de wereld staat de doelstelling in het meerjarenplan.</p>
</div>
</div>
<ul class="punten">
<?php foreach (KERNWAARDEN as [$waarde, $tekst]): ?>
<li><h3><?= e($waarde) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ul>
<?= beeld('OVER-02', 'Vier paar versleten legerkisten naast elkaar op rode aarde, in laag tegenlicht.', '(min-width: 76rem) 76rem, 100vw') ?>
<p>Onze wapenspreuk is <i lang="la">Percute primo, cito decerne</i>: sla als eerste toe en beslis snel. In de praktijk vergaderen wij eerst. De raad van bestuur ziet daarin geen tegenspraak.</p>
</section>
<section>
<h2>Raad van bestuur</h2>
<p class="inleiding">De raad van bestuur bestaat uit dezelfde vier mannen die in 1979 achterbleven in Manica. Zij zijn tevens de enige aandeelhouders en de enige vaste medewerkers van de groep.</p>
<ul class="bestuur">
<?php foreach (BESTUUR as [$naam, $functie, $bio, $beeld]) {
    component('profiel', ['naam' => $naam, 'functie' => $functie, 'bio' => $bio, 'beeld' => $beeld]);
} ?>
</ul>
</section>
<section class="vlak">
<div class="twee">
<div>
<h2>Governance</h2>
<p>De groep wordt bestuurd door een raad van bestuur van vier leden, onder toezicht van een raad van commissarissen van vier leden. Het zijn dezelfde vier mensen. De raden vergaderen op verschillende tijdstippen en aan verschillende kanten van de tafel, en van beide vergaderingen worden afzonderlijke notulen bijgehouden. Zo blijven bestuur en toezicht strikt gescheiden.</p>
<p>Besluiten worden genomen met algemene stemmen. In de praktijk is een besluit genomen zodra de voorzitter opstaat. Er is in ruim veertig jaar geen besluit herroepen.</p>
</div>
<div>
<h2>Het Stand-By-overleg</h2>
<p>Het belangrijkste overleg van de groep is het Stand-By-overleg, elke maandag om 06.00 uur. Het wordt gehouden sinds augustus 1979 en heeft nog nooit een week overgeslagen, ook niet tijdens de regentijd, de malaria of de evacuatie van Kinshasa.</p>
<p>Er staat één vast punt op de agenda: is er nieuws uit Salisbury? Pas daarna komen andere zaken aan de orde. De notulen van het eerste punt luiden sinds 1979 vrijwel elke week hetzelfde: <i>geen nieuws uit Salisbury, wij blijven stand-by.</i></p>
</div>
</div>
</section>
<section>
<div class="artikel">
<h2>Ons embleem</h2>
<p class="inleiding">Ons embleem vertelt de geschiedenis van de groep, al weten de meeste opdrachtgevers dat niet.</p>
<p>De parachute en de vleugels staan voor de luchtlandingscapaciteit van het team. Die is nooit ingezet; de parachutes hebben twintig jaar dienstgedaan als dak van de bar in Kamp Stand-By. De dolk in het midden is de briefopener van Kolonel Frederik, waarmee alle contracten worden geopend en geen enkele kist. De twee geweren zijn de twee die het team nog over heeft. De vlam staat voor het kampvuur van Kamp Stand-By, dat sinds 1979 niet meer is uitgegaan en tegenwoordig brandt in een vuurschaal op het eiland. De twee sterren staan voor plan A en plan B. Plan A is nooit gebruikt.</p>
</div>
</section>
<?php component('band', ['kop' => 'Ons verhaal, vanaf het begin', 'tekst' => 'Van een kist in Manica tot een concern met zeven divisies.', 'href' => '/over-ons/ons-verhaal/', 'knop' => 'Lees ons verhaal']);
pagina_einde();
