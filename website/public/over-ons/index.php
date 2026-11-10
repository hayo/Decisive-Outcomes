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
<p>Vier leden van dat team bleven ter plaatse. Zij bouwden een basis, onderhielden goede relaties met de lokale gemeenschap en hielden zich aan hun opdracht. In 1984 richtten zij Decisive Outcomes op, aan een keukentafel, met een eerste factuur in Rhodesische dollars.</p>
<p>Sindsdien groeide de onderneming uit tot een internationale groep met zeven divisies en veertig vestigingen. De oprichters vormen nog altijd de raad van bestuur. De kist is nog altijd in ons bezit.</p>
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
<p class="inleiding"><strong>Missie.</strong> Wij zorgen voor een beslissende uitkomst. Welke uitkomst dat is, beslissen wij ter plekke.</p>
<p class="inleiding"><strong>Visie.</strong> In 2040 zijn wij wereldwijd marktleider. In elk geval op Klein Klein Bonaire.</p>
</div>
<ul class="punten">
<?php foreach (KERNWAARDEN as [$waarde, $tekst]): ?>
<li><h3><?= e($waarde) ?></h3><p><?= e($tekst) ?></p></li>
<?php endforeach ?>
</ul>
<p>Onze wapenspreuk is <i lang="la">Percute primo, cito decerne</i>: sla als eerste toe en beslis snel.</p>
</section>
<section>
<h2>Raad van bestuur</h2>
<ul class="bestuur">
<?php foreach (BESTUUR as [$naam, $functie, $bio, $beeld]) {
    component('profiel', ['naam' => $naam, 'functie' => $functie, 'bio' => $bio, 'beeld' => $beeld]);
} ?>
</ul>
</section>
<?php pagina_einde();
