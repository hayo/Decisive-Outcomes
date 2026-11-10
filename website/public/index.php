<?php
require __DIR__ . '/../includes/bootstrap.php';
require __DIR__ . '/../includes/inzichten.php';
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
<p><a href="/diensten/">Alle diensten</a></p>
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
    component('kaart', ['titel' => $i['titel'], 'href' => $i['url'], 'tekst' => $i['samenvatting'], 'label' => $i['soort'], 'beeld' => $i['beeld'], 'alt' => $i['alt']]);
} ?>
</ul>
<p><a href="/inzichten/">Alle inzichten</a></p>
</section>
<section class="vlak">
<?php component('citaat', ['tekst' => 'Een opdracht stopt pas als iemand zegt dat hij stopt. Dat heeft niemand gezegd.', 'naam' => 'Kolonel Frederik', 'functie' => 'Chief Executive Officer']); ?>
</section>
<?php component('band', ['kop' => 'Wij staan stand-by. Altijd.', 'href' => '/contact/', 'knop' => 'Neem contact op']);
pagina_einde();
