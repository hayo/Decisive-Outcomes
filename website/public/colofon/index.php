<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Colofon',
    'beschrijving' => 'Over deze website: wie hem maakt, waar de beelden en lettertypes vandaan komen, en wat fictie is.',
    'pad' => '/colofon/',
]);
component('hero', ['label' => 'Colofon', 'kop' => 'Over deze website']);
?>
<section>
<div class="artikel">
<h2>Fictie</h2>
<p>Decisive Outcomes is een airsoftteam uit Nederland. Decisive Outcomes Group, de geschiedenis en de bedrijven, personen en gebeurtenissen op deze site zijn verzonnen, met uitzondering van de teamleden zelf. Sommige figuren zijn losjes geïnspireerd op historische personen, maar hun namen en daden in dit verhaal zijn verzonnen. Wij leveren geen beveiligings-, militaire of andere diensten en hebben geen enkele band met bestaande bedrijven, waaronder Executive Outcomes en andere organisaties met een vergelijkbare naam.</p>
<h2>Makers</h2>
<p>Deze website is gemaakt door de leden van het airsoftteam Decisive Outcomes, met de hand geschreven in HTML, CSS en PHP.</p>
<h2>Beelden</h2>
<p>De beelden op deze site zijn gemaakt met Google Gemini, met uitzondering van foto's van speeldagen.</p>
<h2>Lettertypes</h2>
<p>Koppen staan in Oswald, lopende tekst in Source Sans 3. Beide lettertypes vallen onder de <a href="<?= e(asset('fonts/OFL-oswald.txt')) ?>">SIL Open Font License 1.1</a> en worden vanaf deze server geladen.</p>
<h2>Privacy en techniek</h2>
<p>Deze site gebruikt geen cookies, geen trackers en geen diensten van derden. Lees de <a href="/privacy/">privacyverklaring</a>.</p>
</div>
</section>
<?php pagina_einde();
