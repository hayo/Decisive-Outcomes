<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Privacyverklaring',
    'beschrijving' => 'Welke gegevens deze website verwerkt, waarom, en wat je rechten zijn.',
    'pad' => '/privacy/',
]);
component('hero', ['label' => 'Privacy', 'kop' => 'Privacyverklaring', 'intro' => 'Deze pagina is geen fictie. Hier staat precies welke gegevens deze website verwerkt.']);
?>
<section>
<div class="artikel">
<h2>Wie wij zijn</h2>
<p>Deze website is van het airsoftteam Decisive Outcomes uit Nederland. Wij zijn verantwoordelijk voor de verwerking van de gegevens die hieronder staan. Je bereikt ons via het <a href="/contact/">contactformulier</a>.</p>
<h2>Het contactformulier</h2>
<p>Als je het contactformulier gebruikt, ontvangen wij je naam, je e-mailadres, je bericht en de velden die je verder invult. Het formulier stuurt die gegevens als e-mail naar het team. De website zelf bewaart niets.</p>
<p>Wij gebruiken je gegevens alleen om je bericht te beantwoorden. Wij delen ze met niemand en gebruiken ze niet voor nieuwsbrieven of reclame. De e-mail bewaren wij zolang dat nodig is om je vraag af te handelen, en uiterlijk een jaar. De grondslag is je toestemming: je stuurt ons zelf een bericht.</p>
<h2>Cookies en statistieken</h2>
<p>Deze website gebruikt geen cookies, geen analytics en geen trackers. Er worden geen lettertypes, scripts of andere bestanden van andere partijen geladen.</p>
<h2>Serverlogboeken</h2>
<p>Zoals bij vrijwel elke website houdt de webserver technische logboeken bij, met onder meer het IP-adres, de opgevraagde pagina en het tijdstip. Die logboeken zijn nodig voor beveiliging en het oplossen van storingen. Ze worden niet gebruikt om bezoekers te volgen en worden na beperkte tijd verwijderd.</p>
<h2>Je rechten</h2>
<p>Je hebt het recht om je gegevens in te zien, te laten aanpassen of te laten verwijderen. Stuur ons daarvoor een bericht via het contactformulier. Ben je het niet eens met hoe wij met je gegevens omgaan, dan kun je een klacht indienen bij de Autoriteit Persoonsgegevens.</p>
</div>
</section>
<?php pagina_einde();
