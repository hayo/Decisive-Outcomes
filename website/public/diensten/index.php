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
<div class="artikel">
<p class="inleiding">Decisive Outcomes Group bestaat uit zeven divisies. Elk heeft een eigen kerntaak, een eigen leiding en een eigen plek in het organogram, dat sinds 2005 op A3 wordt gedrukt.</p>
<p>Onze divisies zijn niet op de tekentafel ontstaan, maar in het veld. Bijna elke divisie begon als betaling van een opdrachtgever die geen geld had, of die het niet wilde uitgeven: een fabriek voor gedroogd vlees, een kwartsmijn, een pakket aandelen, een eiland, een uitzendbureau en een groeiende veestapel. Wat andere concerns een gediversifieerde portefeuille noemen, hebben wij zonder aankoopkosten opgebouwd.</p>
<p>Voor onze opdrachtgevers betekent dat één aanspreekpunt voor vrijwel elk vraagstuk. Een beveiligingsopdracht komt met catering, personeel en, waar nodig, een eigen locatie. Wij stellen voor elke opdracht een team samen uit de divisies die nodig zijn, onder leiding van een van de oprichters.</p>
</div>
</section>
<section class="vlak">
<h2>Onze divisies</h2>
<ul class="kaarten">
<?php foreach (DIVISIES as $slug => $d) {
    component('kaart', ['titel' => $d['naam'], 'href' => "/diensten/$slug/", 'tekst' => $d['kop'], 'icoon' => $d['icoon'], 'kop' => 'h3', 'beeld' => $d['beeld'], 'alt' => '']);
} ?>
</ul>
</section>
<section>
<h2>Hoe wij samenwerken</h2>
<ul class="punten">
<li><h3>Eén opdracht, één team</h3><p>Wij stellen per opdracht een team samen uit de divisies die nodig zijn. U heeft één contactpersoon, en één factuur.</p></li>
<li><h3>Eigen middelen</h3><p>Wij beschikken over een eigen wagenpark, een eigen luchtvloot en eigen vastgoed. Het wagenpark rijdt.</p></li>
<li><h3>Vast overlegritme</h3><p>Elke opdracht wordt besproken in het Stand-By-overleg, elke maandag om 06.00 uur, na het vaste eerste agendapunt.</p></li>
<li><h3>Flexibele afrekening</h3><p>Wij rekenen af in Amerikaanse dollars, Rhodesische dollars of in natura. Over geiten valt te praten.</p></li>
</ul>
</section>
<?php component('band', ['kop' => 'Op zoek naar een partner voor een complexe opdracht?', 'tekst' => 'Wij denken graag met u mee, binnen de gebruikelijke reactietermijn.', 'href' => '/contact/', 'knop' => 'Vraag een offerte aan']);
pagina_einde();
