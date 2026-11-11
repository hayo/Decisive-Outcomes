<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Investor relations',
    'beschrijving' => 'Kerncijfers, aandeelhoudersstructuur en koersinformatie van Decisive Outcomes Group.',
    'pad' => '/investor-relations/',
]);
component('hero', [
    'label' => 'Investor relations',
    'kop' => 'Informatie voor aandeelhouders',
    'intro' => 'Transparant over onze resultaten, in drie valuta.',
    'knoppen' => [['#jaarverslag', 'Jaarverslag 2025', 'goud']],
]);
$kerncijfers = [
    ['Landen met activiteiten', '40', 'Inclusief landen met alleen een postbus.'],
    ['Divisies', '7', 'Bijna allemaal ontstaan als betaling van een klant.'],
    ['Medewerkers', '4 vast, ruim 3.000 flexibel', 'Flexibel via Decisive People.'],
    ['Veestapel', '412 geiten', 'Waardering: nog niet bekend.'],
    ['Afgeronde opdrachten', '100 procent', 'Exclusief de opdracht uit 1979. Die loopt nog.'],
    ['Klanttevredenheid', 'Niet gemeten', 'Bewuste keuze sinds 1986.'],
    ['Omzet', 'Niet openbaar', 'Deels in geiten.'],
];
?>
<section>
<div class="artikel">
<p class="inleiding">Decisive Outcomes Group is een besloten groep met vier aandeelhouders. Wij publiceren desondanks jaarlijks onze kerncijfers en een jaarverslag, omdat wij transparantie beschouwen als onderdeel van goed bestuur.</p>
<p>Onze cijfers worden opgesteld door de afdeling Strategie, gecontroleerd door de afdeling Compliance en goedgekeurd door de raad van bestuur, die ze vervolgens doorstuurt naar Salisbury. Wij rapporteren in drie valuta. Omdat er tussen die valuta geen wisselkoers bestaat, worden de bedragen niet opgeteld. Dat voorkomt rekenfouten.</p>
</div>
</section>
<section class="vlak">
<div class="tabel" role="region" aria-label="Kerncijfers" tabindex="0">
<table>
<caption>Kerncijfers Decisive Outcomes Group</caption>
<thead><tr><th scope="col">Kerncijfer</th><th scope="col">Waarde</th><th scope="col">Toelichting</th></tr></thead>
<tbody>
<?php foreach ($kerncijfers as [$cijfer, $waarde, $toelichting]): ?>
<tr><th scope="row"><?= e($cijfer) ?></th><td><?= e($waarde) ?></td><td><?= e($toelichting) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</section>
<section>
<div class="twee">
<div>
<h2>Aandeelhouders</h2>
<p>De groep heeft vier aandeelhouders. Alle vier zijn lid van de raad van bestuur en van de raad van commissarissen. De raden vergaderen op verschillende tijdstippen, aan verschillende kanten van de tafel.</p>
</div>
<div>
<h2>Koersinformatie</h2>
<p>Niet beschikbaar in Rhodesische dollars.</p>
<p>De groep rapporteert in Amerikaanse dollars, Rhodesische dollars en geiten. Er bestaat geen wisselkoers tussen deze valuta.</p>
<h2>Dividend</h2>
<p>De groep keert jaarlijks dividend uit, in natura. Over boekjaar 2025 ontving elke aandeelhouder een pot biltong van Decisive Hospitality. De raad van bestuur stelt voor dit beleid ongewijzigd voort te zetten.</p>
</div>
</div>
</section>
<section class="vlak" id="jaarverslag">
<div class="artikel">
<p class="label">Jaarverslag 2025</p>
<h2>Verslag van de raad van bestuur</h2>
<p class="inleiding">2025 was voor Decisive Outcomes Group een jaar van continuïteit. De groep is in alle veertig landen aanwezig gebleven, heeft geen divisies afgestoten en is voor het zesenveertigste jaar op rij stand-by gebleven.</p>
<p>Het Stand-By-overleg kwam in 2025 tweeënvijftig keer bijeen, elke maandag om 06.00 uur. Het vaste eerste agendapunt leverde ook dit jaar geen nieuws op. Het aantal rapporten aan Salisbury nam opnieuw toe, vooral door de activiteiten van de divisie Benelux, die in 2025 op een groot aantal terreinen in Nederland actief was. Op geen van de rapporten is antwoord ontvangen. De raad van bestuur ziet daarin geen reden tot ongerustheid.</p>
<p>De divisies presteerden in lijn met het meerjarenplan. Decisive Mining sloot het jaar opnieuw af met winst, die conform de overeenkomst uit 1989 vrijwel volledig ten goede kwam aan de lokale leiding van de mijn. Decisive Hospitality realiseerde opnieuw het begrote verlies. Decisive Agri handhaafde de veestapel op 412 geiten; de externe commissie die onderzoekt welke geiten op Bonaire van de groep zijn, heeft haar werkzaamheden voortgezet. Decisive Real Estate diende tijdig bezwaar in tegen de aanslag voor de grond van het hoofdkantoor.</p>
<h2>Kerngegevens 2025</h2>
<div class="tabel" role="region" aria-label="Kerngegevens 2025" tabindex="0">
<table>
<caption>Kerngegevens 2025, per valuta</caption>
<thead><tr><th scope="col">Onderdeel</th><th scope="col">Amerikaanse dollars</th><th scope="col">Rhodesische dollars</th><th scope="col">Geiten</th></tr></thead>
<tbody>
<tr><th scope="row">Omzet</th><td>Niet openbaar</td><td>Niet openbaar</td><td>Niet openbaar</td></tr>
<tr><th scope="row">Resultaat Decisive Mining</th><td>Positief</td><td>Niet van toepassing</td><td>0</td></tr>
<tr><th scope="row">Resultaat Decisive Hospitality</th><td>Negatief, conform plan</td><td>Negatief, conform plan</td><td>0</td></tr>
<tr><th scope="row">Veestapel</th><td>Waardering nog niet bekend</td><td>Waardering nog niet bekend</td><td>412</td></tr>
<tr><th scope="row">Reserve (de kist)</th><td>Onbekend</td><td>Onbekend</td><td>Onbekend</td></tr>
</tbody>
</table>
</div>
<h2>Governance</h2>
<p>De samenstelling van de raad van bestuur en de raad van commissarissen is in 2025 niet gewijzigd. Beide raden vergaderden volgens schema, op verschillende tijdstippen en aan verschillende kanten van de tafel. Van beide vergaderingen zijn afzonderlijke notulen opgesteld. Er hebben zich geen belangenconflicten voorgedaan die niet al sinds 1984 bekend waren.</p>
<h2>Risicoparagraaf</h2>
<p>De groep houdt haar belangrijkste risico's bij op een risicokaart in de vergaderzaal. De samenstelling van de top drie is ten opzichte van vorig jaar ongewijzigd.</p>
<div class="tabel" role="region" aria-label="Belangrijkste risico's" tabindex="0">
<table>
<caption>Belangrijkste risico's</caption>
<thead><tr><th scope="col">Risico</th><th scope="col">Kans</th><th scope="col">Gevolg</th><th scope="col">Beheersmaatregel</th></tr></thead>
<tbody>
<tr><th scope="row">De kist gaat open</th><td>Laag</td><td>Onbekend</td><td>Er staat altijd iemand bij.</td></tr>
<tr><th scope="row">Er komt nieuws uit Salisbury</th><td>Laag</td><td>Aanzienlijk</td><td>Wekelijkse controle in het Stand-By-overleg.</td></tr>
<tr><th scope="row">Hoog water</th><td>Twee keer per dag</td><td>Tijdelijk verlies van 99 procent van het hoofdkantoor</td><td>Vergaderen bij laag water.</td></tr>
</tbody>
</table>
</div>
<h2>Vooruitblik 2026</h2>
<p>Voor 2026 verwacht de raad van bestuur geen wezenlijke veranderingen. De groep blijft stand-by. Het meerjarenplan voorziet in een voortzetting van de inzet in de Benelux, een nieuw vervangingsplan voor het wagenpark, dat naar verwachting unaniem zal worden goedgekeurd, en een herinnering aan de luchtvaartautoriteiten over de vliegvergunning van de Antonov. De visie blijft ongewijzigd: in 2040 is de groep wereldwijd marktleider.</p>
<h2>Verslag van de raad van commissarissen</h2>
<p>De raad van commissarissen heeft het jaarverslag besproken met de raad van bestuur en kan zich vinden in het gevoerde beleid. De raad dankt de raad van bestuur voor de inzet in het afgelopen jaar. De raad van bestuur dankt de raad van commissarissen voor het vertrouwen.</p>
<h2>Jaarrekening</h2>
<p>De jaarrekening over 2025 is opgesteld door de boekhouder van de groep, die sinds 1986 voor ons werkt. Hij heeft ook dit jaar de jaarrekening niet kunnen afsluiten, omdat de bedragen in drie valuta niet kunnen worden opgeteld. De jaarrekening is daardoor niet goedgekeurd. Zij is ook niet afgekeurd.</p>
</div>
</section>
<section>
<h2>Financiële kalender</h2>
<div class="tabel" role="region" aria-label="Financiële kalender" tabindex="0">
<table>
<caption>Financiële kalender 2026</caption>
<thead><tr><th scope="col">Moment</th><th scope="col">Datum</th></tr></thead>
<tbody>
<tr><th scope="row">Stand-By Outlook 2026</th><td>5 januari 2026, gepubliceerd</td></tr>
<tr><th scope="row">Stand-By-overleg</th><td>Elke maandag, 06.00 uur</td></tr>
<tr><th scope="row">Algemene vergadering van aandeelhouders</th><td>Aansluitend aan het Stand-By-overleg, wanneer nodig</td></tr>
<tr><th scope="row">Jaarverslag 2026</th><td>Na goedkeuring van de raad van bestuur</td></tr>
</tbody>
</table>
</div>
<p>Vragen van aandeelhouders kunnen worden gesteld tijdens het Stand-By-overleg. Vragen van anderen kunnen schriftelijk naar Postbus 1, Kralendijk.</p>
</section>
<?php pagina_einde();
