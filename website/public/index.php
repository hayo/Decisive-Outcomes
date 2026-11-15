<?php
require __DIR__ . '/../includes/bootstrap.php';
pagina_begin(['pad' => '/']);
component('hero', [
    'groot' => true,
    'label' => 'Risico- en veiligheidsdiensten wereldwijd',
    'kop' => 'Beslissende uitkomsten. Sinds 1979.',
    'intro' => 'Wij leveren beveiliging, logistiek en continuïteit in omgevingen waar anderen al vertrokken zijn. Wij blijven tot de opdracht is afgerond.',
    'knoppen' => [['/diensten/', 'Onze diensten', 'goud'], ['/contact/', 'Neem contact op', 'rand']],
    'beeld' => 'HOME-01',
    'alt' => 'Twee oude terreinwagens op een zandweg in de savanne bij zonsondergang, met vier mannen die naar de horizon kijken.',
]);
component('cijfers');
?>
<section class="twee">
<div>
<p class="label">Werken bij</p>
<h2>Wij zoeken mensen die kunnen wachten</h2>
<p class="inleiding">Onze opdrachten vragen om discipline, geduld en een lange adem. Via Decisive People bieden wij flexibele inzet, per dag, wereldwijd.</p>
<p>Wij werken in veertig landen, op plekken waar de omstandigheden zelden voorspelbaar zijn. Wat onze medewerkers verbindt, is het vermogen om op hun post te blijven als anderen vertrekken. Daar staat een contract per dag tegenover, een internationale werkomgeving en, na drie opdrachten zonder incidenten, een geit uit de eigen veestapel.</p>
<p><a class="knop knop-rood" href="/werken-bij/">Bekijk de mogelijkheden</a></p>
</div>
<?= beeld('WERK-01', 'Een groep mensen in buitenkleding loopt bij ochtendgloren een mistig bos in.', '(min-width: 50em) 50vw, 100vw') ?>
</section>
<section class="vlak">
<p class="label">Diensten</p>
<h2>Zeven divisies, één opdracht</h2>
<ul class="kaarten">
<?php foreach (['decisive-security' => 'HOME-02', 'decisive-hospitality' => 'HOME-03', 'decisive-real-estate' => 'HOME-04'] as $slug => $beeld) {
    $d = DIVISIES[$slug];
    component('kaart', ['titel' => $d['naam'], 'href' => "/diensten/$slug/", 'tekst' => $d['kort'], 'icoon' => $d['icoon'], 'beeld' => $beeld, 'alt' => '']);
} ?>
</ul>
<p><a href="/diensten/">Alle zeven divisies</a></p>
</section>
<section class="twee">
<div>
<p class="label">Over de groep</p>
<h2>Sinds 1979 stand-by</h2>
<p class="inleiding">Decisive Outcomes Group begon met vier man, een kist en een opdracht in de provincie Manica. Die opdracht is nooit ingetrokken.</p>
<p>Uit dat begin groeide een internationale groep met zeven divisies, actief in beveiliging, horeca, grondstoffen, beleggingen, vastgoed, personeel en veehouderij. Bijna elke divisie begon als betaling van een opdrachtgever. Wij noemen dat groei door overnames.</p>
<p>De vier oprichters leiden de groep nog altijd zelf, vanuit het hoofdkantoor op Klein Klein Bonaire. Elke maandag om 06.00 uur komen zij bijeen voor het Stand-By-overleg, zoals zij dat sinds augustus 1979 elke week hebben gedaan.</p>
<p><a class="knop knop-rood" href="/over-ons/ons-verhaal/">Lees ons verhaal</a></p>
</div>
<div>
<p class="label">Sectoren</p>
<h2>Voor wie wij werken</h2>
<p>Wij werken voor overheden, bedrijven en maatschappelijke organisaties, in sectoren waar continuïteit niet vanzelfsprekend is.</p>
<ul>
<?php foreach (SECTOREN as $id => $s): ?>
<li><a href="/sectoren/<?= e($id) ?>/"><?= e($s['naam']) ?></a>: <?= e(lcfirst($s['kort'])) ?></li>
<?php endforeach ?>
</ul>
</div>
</section>
<?php component('band', [
    'label' => 'Jaarrapport',
    'kop' => 'Stand-By Outlook 2026',
    'tekst' => 'Onze jaarlijkse analyse van risico\'s en ontwikkelingen. Voor het zesenveertigste jaar op rij met een heldere conclusie.',
    'href' => '/inzichten/rapport/stand-by-outlook-2026/',
    'knop' => 'Lees het rapport',
]); ?>
<section>
<p class="label">Inzichten</p>
<h2>Laatste inzichten</h2>
<ul class="kaarten">
<?php foreach (array_slice(alle_inzichten(), 0, 3) as $i) {
    component('kaart', ['titel' => $i['titel'], 'href' => $i['url'], 'tekst' => $i['samenvatting'], 'label' => $i['label'], 'beeld' => $i['beeld'], 'alt' => $i['alt']]);
} ?>
</ul>
<p><a href="/inzichten/">Alle inzichten</a></p>
</section>
<section class="vlak">
<?php component('citaat', ['tekst' => 'Een opdracht stopt pas als iemand zegt dat hij stopt. Dat heeft niemand gezegd.', 'naam' => 'Kolonel Frederik', 'functie' => 'Chief Executive Officer']); ?>
</section>
<?php component('band', ['kop' => 'Wij staan stand-by. Altijd.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
