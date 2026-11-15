<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Investor relations',
    'beschrijving' => 'Kerncijfers, wisselkoers, meerjarenoverzicht, balans en jaarverslag van Decisive Outcomes Group.',
    'pad' => '/investor-relations/',
]);
component('hero', [
    'label' => 'Investor relations',
    'kop' => 'Informatie voor aandeelhouders',
    'intro' => 'Transparant over onze resultaten, in drie valuta. Sinds 9 november 2026 tegen een vaste koers.',
    'knoppen' => [['#jaarverslag', 'Jaarverslag 2025', 'goud'], ['#koers', 'Wisselkoers', 'rand']],
]);

/** Bedragen: Rhodesische dollars zijn leidend, de andere valuta worden omgerekend tegen KOERS. */
$getal = fn(float $w, int $d = 0): string => ($w < 0 ? '−' : '') . number_format(abs($w), $d, ',', '.');
$rhd = fn(float $w): string => 'R$ ' . $getal($w);
$usd = fn(float $w): string => 'US$ ' . $getal(round($w * KOERS['usd']));
$geit = fn(float $w): string => $getal($w / KOERS['geit'], fmod($w, KOERS['geit']) == 0 ? 0 : 1);

// Meerjarenoverzicht: [jaar, omzet, resultaat, toelichting], in Rhodesische dollars.
$jaren = [
    [1985, 3100, -310, 'Eerste volle boekjaar. Kariba Biltong verworven; verlies conform plan.'],
    [1990, 19400, 1150, 'Eerste volle jaar van Decisive Mining. De winst ging vrijwel volledig naar de mijn.'],
    [1995, 27800, -1600, 'Inschrijving op een internationale aanbesteding. Niet gegund.'],
    [2000, 40200, -2900, 'Inrichting van het hoofdkantoor op Klein Klein Bonaire.'],
    [2005, 39600, 410, 'Oprichting van Decisive Outcomes Group bij de notaris in Kralendijk.'],
    [2010, 44900, -1200, 'Bonaire wordt Nederland. Eerste aanslag voor de grond.'],
    [2015, 47300, 320, 'In lijn met het meerjarenplan.'],
    [2020, 48600, -2950, 'Eerste volle jaar van de divisie Benelux: veldfees.'],
    [2025, 53100, 90, 'Eerste jaarrekening die is afgesloten.'],
];

// Divisies 2025: [divisie, omzet, resultaat, toelichting], in Rhodesische dollars.
$divisies = [
    ['Security', 14200, 1900, 'Beveiliging, bewaking en evacuatie.'],
    ['Hospitality', 6800, -1850, 'Begroot verlies: R$ 1.850. Gerealiseerd verlies: R$ 1.850.'],
    ['Mining', 21400, 210, 'Winst vóór afdracht R$ 9.800, waarvan R$ 9.590 conform de overeenkomst uit 1989 naar de lokale leiding van de mijn.'],
    ['Capital', 0, 0, 'Geen verkopen. Het ongerealiseerde resultaat op de Albanese aandelen is niet bepaald.'],
    ['Real Estate', 0, -1020, 'Kosten van het bezwaar tegen de aanslag voor de grond.'],
    ['People', 9900, 150, 'Ruim 3.000 dagcontracten, in het Portugees.'],
    ['Agri', 800, 700, 'Groenonderhoud op Bonaire, uitgevoerd door de veestapel.'],
];

// Balans per 31 december 2025: [post, bedrag in R$ of null, toelichting].
$activa = [
    ['Klein Klein Bonaire', 6275, 'Gemiddelde van de waarde bij laag water (R$ 12.500) en bij hoog water (R$ 50).'],
    ['Veestapel', 412 * KOERS['geit'], '412 geiten tegen de vaste koers.'],
    ['Albanese aandelen', 4000, 'Tegen aankoopprijs, 1997. Er is sindsdien niets verkocht.'],
    ['Kas', 2140, 'Contant, voor de veerman.'],
    ['Antonov', 1, 'Herbestemd als golfbreker.'],
    ['Wagenpark', 0, 'Twee Land Rovers uit 1971, afgeschreven. Het vervangingsplan is goedgekeurd.'],
    ['Reserve (de kist)', null, 'Waarde onbekend. Niet opgenomen in het totaal.'],
];
$passiva = [
    ['Voorziening aanslag grond', 1020, 'Het bezwaar loopt.'],
];
$totaal = array_sum(array_column($activa, 1));
$passiva[] = ['Eigen vermogen', $totaal - 1020, 'Voor het eerst berekend.'];

$kerncijfers = [
    ['Landen met activiteiten', '40', 'Inclusief landen met alleen een postbus.'],
    ['Divisies', '7', 'Bijna allemaal ontstaan als betaling van een klant.'],
    ['Medewerkers', '4 vast, ruim 3.000 flexibel', 'Flexibel via Decisive People.'],
    ['Veestapel', '412 geiten', 'Waardering: ' . $rhd(412 * KOERS['geit']) . ' (' . $usd(412 * KOERS['geit']) . ').'],
    ['Afgeronde opdrachten', '100 procent', 'Exclusief de opdracht uit 1979. Die loopt nog.'],
    ['Klanttevredenheid', 'Niet gemeten', 'Bewuste keuze sinds 1986.'],
    ['Omzet 2025', $rhd(53100), $usd(53100) . ', deels in geiten.'],
    ['Wisselkoers', 'R$ 1 = US$ ' . $getal(KOERS['usd'], 4), 'Vast sinds 1979, vastgesteld in 2026.'],
];
?>
<section>
<div class="artikel">
<p class="inleiding">Decisive Outcomes Group is een besloten groep met vier aandeelhouders. Wij publiceren desondanks jaarlijks onze kerncijfers en een jaarverslag, omdat wij transparantie beschouwen als onderdeel van goed bestuur.</p>
<p>Onze cijfers worden opgesteld door de afdeling Strategie, gecontroleerd door de afdeling Compliance en goedgekeurd door de raad van bestuur, die ze vervolgens doorstuurt naar Salisbury. Wij rapporteren in drie valuta. Tot november 2026 bestond er tussen die valuta geen wisselkoers en werden de bedragen niet opgeteld. Dat voorkwam rekenfouten. Sinds 9 november 2026 heeft de groep een vaste wisselkoers, en kan de boekhouder optellen.</p>
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
<p>De groep is niet beursgenoteerd en heeft daarom geen aandelenkoers. Wel heeft zij sinds 9 november 2026 een wisselkoers; die staat hieronder.</p>
<h2>Dividend</h2>
<p>De groep keert jaarlijks dividend uit, in natura. Over boekjaar 2025 ontving elke aandeelhouder een pot biltong van Decisive Hospitality. De raad van bestuur stelt voor dit beleid ongewijzigd voort te zetten.</p>
</div>
</div>
</section>
<section class="vlak" id="koers">
<div class="artikel">
<p class="label">Wisselkoers</p>
<h2>Eén koers sinds 1979</h2>
<p class="inleiding">In het Stand-By-overleg van maandag 9 november 2026, om 06.00 uur, heeft de raad van bestuur voor het eerst een wisselkoers vastgesteld tussen de drie valuta van de groep.</p>
<p>Het voorstel kwam van de boekhouder, die er sinds 1986 om vroeg. Het besluit werd genomen toen Kolonel Frederik opstond. Majoor Hayo heeft in de notulen laten aantekenen dat hij de koersen aanvaardt onder voorbehoud van bekrachtiging door Salisbury. Een kopie is verzonden.</p>
<p>De groep gebruikt de laatste koers die zij heeft ontvangen: die van 31 maart 1979. Er is sindsdien geen nieuwe koers bekendgemaakt. De Rhodesische dollar is daarmee de stabielste munt waarin ter wereld wordt gerapporteerd. Inflatie komt in de boeken van de groep niet voor.</p>
<p>Sinds november 2026 kan de Rhodesische dollar bovendien worden ingewisseld tegen de Chinese renminbi, met als rekeneenheid de yuan (CNY). Kolonel Frederik heeft dit geregeld via een zakelijk contact in Florida, dat de koers per transactie vaststelt. Er is nog niets ingewisseld.</p>
<div class="tabel" role="region" aria-label="Wisselkoersen" tabindex="0">
<table>
<caption>Wisselkoersen van de groep, vastgesteld op 9 november 2026</caption>
<thead><tr><th scope="col">Koers</th><th scope="col">Waarde</th><th scope="col">Grondslag</th></tr></thead>
<tbody>
<tr><th scope="row">Rhodesische dollar in Amerikaanse dollars</th><td>R$ 1 = US$ <?= e($getal(KOERS['usd'], 4)) ?></td><td>Laatst bekende koers: R$ 0,6845 per Amerikaanse dollar, 31 maart 1979.</td></tr>
<tr><th scope="row">Geit in Rhodesische dollars</th><td>1 geit = R$ <?= e($getal(KOERS['geit'])) ?></td><td>Marktprijs in Umtali in 1979, volgens Kapitein Jochem.</td></tr>
<tr><th scope="row">Geit in Amerikaanse dollars</th><td>1 geit = US$ <?= e($getal(KOERS['geit'] * KOERS['usd'], 2)) ?></td><td>Afgeleid uit de twee koersen hierboven.</td></tr>
</tbody>
</table>
</div>
<?php
component('grafiek', [
    'id' => 'grafiek-koers',
    'titel' => 'Koers van de Rhodesische dollar in Amerikaanse dollars, 1979–2026',
    'soort' => 'lijn',
    'eenheid' => 'US$',
    'decimalen' => 4,
    'reeks' => array_map(fn($j) => [$j, KOERS['usd']], [1979, 1984, 1989, 1994, 1999, 2004, 2009, 2014, 2019, 2024, 2026]),
    'toelichting' => 'Volatiliteit sinds 1979: 0,0 procent.',
]);
?>
</div>
</section>
<section>
<h2>Meerjarenoverzicht</h2>
<p>Alle bedragen in Rhodesische dollars, omgerekend tegen de vaste koers. Omdat de koers sinds 1979 vastligt, zit er in deze reeks geen inflatie. De groei is volgens de raad van bestuur dus volledig organisch.</p>
<div class="twee">
<?php
component('grafiek', [
    'id' => 'grafiek-omzet',
    'titel' => 'Omzet per jaar, in Rhodesische dollars',
    'soort' => 'kolom',
    'eenheid' => 'R$',
    'reeks' => array_map(fn($r) => [$r[0], $r[1]], $jaren),
    'tabel' => false,
]);
component('grafiek', [
    'id' => 'grafiek-resultaat',
    'titel' => 'Resultaat per jaar, in Rhodesische dollars',
    'soort' => 'kolom',
    'eenheid' => 'R$',
    'reeks' => array_map(fn($r) => [$r[0], $r[2]], $jaren),
    'tabel' => false,
]);
?>
</div>
<div class="tabel" role="region" aria-label="Meerjarenoverzicht" tabindex="0">
<table>
<caption>Meerjarenoverzicht 1985–2025</caption>
<thead><tr><th scope="col">Jaar</th><th scope="col">Omzet</th><th scope="col">Omzet in US$</th><th scope="col">Resultaat</th><th scope="col">Toelichting</th></tr></thead>
<tbody>
<?php foreach ($jaren as [$jaar, $omzet, $resultaat, $toelichting]): ?>
<tr><th scope="row"><?= $jaar ?></th><td><?= e($rhd($omzet)) ?></td><td><?= e($usd($omzet)) ?></td><td><?= e($rhd($resultaat)) ?></td><td><?= e($toelichting) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</section>
<section class="vlak">
<h2>Resultaat per divisie</h2>
<p>Zes van de zeven divisies droegen in 2025 bij aan de omzet. Decisive Hospitality realiseerde het begrote verlies tot op de dollar. Decisive Mining was opnieuw de grootste divisie naar omzet en, na afdracht aan de mijn, een van de kleinste naar resultaat.</p>
<?php
component('grafiek', [
    'id' => 'grafiek-divisies',
    'titel' => 'Resultaat per divisie in 2025, in Rhodesische dollars',
    'soort' => 'balk',
    'eenheid' => 'R$',
    'reeks' => array_map(fn($r) => [$r[0], $r[2]], $divisies),
    'tabel' => false,
]);
?>
<div class="tabel" role="region" aria-label="Divisies 2025" tabindex="0">
<table>
<caption>Omzet en resultaat per divisie, 2025</caption>
<thead><tr><th scope="col">Divisie</th><th scope="col">Omzet</th><th scope="col">Resultaat</th><th scope="col">Toelichting</th></tr></thead>
<tbody>
<?php foreach ($divisies as [$naam, $omzet, $resultaat, $toelichting]): ?>
<tr><th scope="row">Decisive <?= e($naam) ?></th><td><?= e($rhd($omzet)) ?></td><td><?= e($rhd($resultaat)) ?></td><td><?= e($toelichting) ?></td></tr>
<?php endforeach ?>
<tr><th scope="row">Groep</th><td><?= e($rhd(array_sum(array_column($divisies, 1)))) ?></td><td><?= e($rhd(array_sum(array_column($divisies, 2)))) ?></td><td><?= e($usd(array_sum(array_column($divisies, 2)))) ?>, of <?= e($geit(array_sum(array_column($divisies, 2)))) ?> geit.</td></tr>
</tbody>
</table>
</div>
</section>
<section>
<h2>Veestapel en balans</h2>
<div class="twee">
<?php
component('grafiek', [
    'id' => 'grafiek-veestapel',
    'titel' => 'Veestapel in geiten, 1979–2025',
    'soort' => 'lijn',
    'reeks' => [[1979, 1], [1985, 34], [1990, 92], [1995, 141], [2000, 203], [2005, 266], [2010, 412], [2015, 412], [2020, 412], [2025, 412]],
    'toelichting' => 'De eerste geit was de betaling voor een waterpomp, in 1979. Sinds de verhuizing naar Bonaire staat de teller op 412; welke geiten op het eiland van de groep zijn, onderzoekt een externe commissie.',
]);
?>
<div>
<p>Met de vaste koers heeft de groep voor het eerst een balans kunnen opstellen. De veestapel staat erop tegen <?= e($rhd(KOERS['geit'])) ?> per geit. De kist staat erop als reserve, tegen een onbekende waarde, en telt daarom niet mee in het totaal.</p>
<p>De boekhouder heeft erop gewezen dat de balans in één klap heel goed of heel slecht kan worden als iemand de kist openmaakt. Dat is niet voorzien.</p>
</div>
</div>
<div class="tabel" role="region" aria-label="Balans" tabindex="0">
<table>
<caption>Balans per 31 december 2025</caption>
<thead><tr><th scope="col">Post</th><th scope="col">Rhodesische dollars</th><th scope="col">Amerikaanse dollars</th><th scope="col">Toelichting</th></tr></thead>
<tbody>
<?php foreach ([['Activa', $activa, 'Totaal activa'], ['Passiva', $passiva, 'Totaal passiva']] as [$kop, $posten, $som]): ?>
<tr><th scope="rowgroup" colspan="4"><?= e($kop) ?></th></tr>
<?php foreach ($posten as [$post, $bedrag, $toelichting]): ?>
<tr><th scope="row"><?= e($post) ?></th><td><?= $bedrag === null ? 'Onbekend' : e($rhd($bedrag)) ?></td><td><?= $bedrag === null ? 'Onbekend' : e($usd($bedrag)) ?></td><td><?= e($toelichting) ?></td></tr>
<?php endforeach ?>
<tr><th scope="row"><?= e($som) ?></th><td><?= e($rhd($totaal)) ?></td><td><?= e($usd($totaal)) ?></td><td>Exclusief de kist.</td></tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</section>
<section id="boekjaar">
<h2>Lopend boekjaar <?= e(date('Y')) ?></h2>
<?php $lopend = boekingen(date('Y')); ?>
<p>Elke operatie die de groep in een persbericht meldt, wordt met haar financiële gevolgen in de boeken verwerkt. Hieronder staan de boekingen van dit jaar, in Rhodesische dollars en omgerekend tegen de vaste koers. Ze worden na afloop van het jaar opgenomen in het jaarverslag.</p>
<?php if (!$lopend): ?>
<p>Er zijn dit jaar nog geen boekingen uit persberichten. Het inwisselen tegen renminbi heeft nog niets opgeleverd, omdat er nog niets is ingewisseld.</p>
<?php else: ?>
<div class="tabel" role="region" aria-label="Boekingen lopend boekjaar" tabindex="0">
<table>
<caption>Boekingen uit persberichten, <?= e(date('Y')) ?></caption>
<thead><tr><th scope="col">Datum</th><th scope="col">Persbericht</th><th scope="col">Divisie</th><th scope="col">Omschrijving</th><th scope="col">Bedrag</th><th scope="col">In US$</th></tr></thead>
<tbody>
<?php foreach ($lopend as [$bericht, $divisie, $w, $omschrijving]): ?>
<tr><td><?= e(datum($bericht['datum'])) ?></td><th scope="row"><a href="<?= e($bericht['url']) ?>"><?= e($bericht['titel']) ?></a></th><td><?= e(DIVISIES[$divisie]['naam']) ?></td><td><?= e($omschrijving) ?></td><td><?= e(bedrag($w)) ?></td><td><?= e(bedrag($w, 'usd')) ?></td></tr>
<?php endforeach ?>
<?php $som = array_sum(array_column($lopend, 2)); ?>
<tr><th scope="row" colspan="4">Totaal tot nu toe</th><td><?= e(bedrag($som)) ?></td><td><?= e(bedrag($som, 'usd')) ?>, of <?= e(bedrag($som, 'geit')) ?></td></tr>
</tbody>
</table>
</div>
<?php endif ?>
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
<caption>Kerngegevens 2025, per valuta, omgerekend tegen de vaste koers</caption>
<thead><tr><th scope="col">Onderdeel</th><th scope="col">Rhodesische dollars</th><th scope="col">Amerikaanse dollars</th><th scope="col">Geiten</th></tr></thead>
<tbody>
<?php foreach ([['Omzet', 53100], ['Resultaat', 90], ['Resultaat Decisive Mining', 210], ['Resultaat Decisive Hospitality', -1850], ['Veestapel', 412 * KOERS['geit']]] as [$onderdeel, $w]): ?>
<tr><th scope="row"><?= e($onderdeel) ?></th><td><?= e($rhd($w)) ?></td><td><?= e($usd($w)) ?></td><td><?= e($geit($w)) ?></td></tr>
<?php endforeach ?>
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
<p>De jaarrekening over 2025 is opgesteld door de boekhouder van de groep, die sinds 1986 voor ons werkt. Tot november 2026 kon hij geen enkele jaarrekening afsluiten, omdat de bedragen in drie valuta niet konden worden opgeteld. Na de vaststelling van de wisselkoers heeft hij de jaarrekening 2025 op 10 november 2026 afgesloten, als eerste jaarrekening sinds 1986. Zij ligt ter goedkeuring bij de raad van bestuur.</p>
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
<tr><th scope="row">Vaststelling wisselkoers</th><td>9 november 2026, Stand-By-overleg</td></tr>
<tr><th scope="row">Jaarrekening 2025 afgesloten</th><td>10 november 2026, ter goedkeuring</td></tr>
<tr><th scope="row">Stand-By-overleg</th><td>Elke maandag, 06.00 uur</td></tr>
<tr><th scope="row">Algemene vergadering van aandeelhouders</th><td>Aansluitend aan het Stand-By-overleg, wanneer nodig</td></tr>
<tr><th scope="row">Jaarverslag 2026</th><td>Na goedkeuring van de raad van bestuur</td></tr>
</tbody>
</table>
</div>
<p>Vragen van aandeelhouders kunnen worden gesteld tijdens het Stand-By-overleg. Vragen van anderen kunnen schriftelijk naar Postbus 1, Kralendijk.</p>
</section>
<?php pagina_einde();
