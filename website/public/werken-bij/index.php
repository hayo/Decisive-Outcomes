<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Werken bij',
    'beschrijving' => 'Werken bij Decisive Outcomes Group: flexibele inzet via Decisive People, en meedoen met het airsoftteam.',
    'pad' => '/werken-bij/',
]);
component('hero', [
    'label' => 'Werken bij',
    'kop' => 'Wij zoeken mensen die kunnen wachten',
    'intro' => 'Discipline, geduld en een lange adem. Herken je jezelf daarin, dan is er bij ons plek voor je.',
    'knoppen' => [['#meedoen', 'Meedoen met het team', 'goud']],
    'beeld' => 'WERK-01',
    'alt' => 'Een groep mensen in buitenkleding loopt bij ochtendgloren een mistig bos in.',
]);
?>
<section>
<h2>Werken bij de groep</h2>
<p class="inleiding">Onze medewerkers werken in uitdagende omgevingen, vaak lang op dezelfde plek. Wij bieden een omgeving waarin loyaliteit beloond wordt en waarin niemand zomaar wordt achtergelaten. Behalve in 1979.</p>
<ul class="punten">
<li><h3>Flexibel</h3><p>Via Decisive People werk je met een contract per dag. Het contract is in het Portugees.</p></li>
<li><h3>Internationaal</h3><p>Opdrachten in veertig landen, met een hoofdkantoor op een eiland.</p></li>
<li><h3>Het Geitenplan</h3><p>Na drie opdrachten zonder incidenten ontvang je een geit uit de eigen veestapel. Deelname is vrijwillig.</p></li>
</ul>
</section>
<section class="vlak" id="meedoen">
<p class="label">Meedoen</p>
<h2>Meedoen met het airsoftteam</h2>
<p class="inleiding">Decisive Outcomes is in werkelijkheid een airsoftteam uit Nederland. Dit deel van de site is echt.</p>
<p>Wij spelen meestal op Combat City in Leiderdorp, op wisselende dagen. Nieuwe spelers zijn welkom. Dit heb je nodig:</p>
<ul>
<li>Je bent 18 jaar of ouder.</li>
<li>Eigen uitrusting is handig, maar niet nodig: op het veld kun je uitrusting huren.</li>
<li>Je speelt eerst een keer mee. Zo leren we elkaar kennen, en weet je of het bij je past.</li>
</ul>
<p>Lijkt het je leuk? Stuur ons een bericht via het contactformulier en kies het onderwerp <em>Meespelen of een vraag over het team</em>. Je krijgt een echt antwoord, en sneller dan zes tot acht jaar.</p>
<p><a class="knop knop-rood" href="/contact/">Stuur een bericht</a></p>
</section>
<?php pagina_einde();
