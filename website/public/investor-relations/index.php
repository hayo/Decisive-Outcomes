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
<section class="vlak">
<div class="twee">
<div>
<h2>Aandeelhouders</h2>
<p>De groep heeft vier aandeelhouders. Alle vier zijn lid van de raad van bestuur en van de raad van commissarissen. De raden vergaderen op verschillende tijdstippen, aan verschillende kanten van de tafel.</p>
</div>
<div>
<h2>Koersinformatie</h2>
<p>Niet beschikbaar in Rhodesische dollars.</p>
<p>De groep rapporteert in Amerikaanse dollars, Rhodesische dollars en geiten. Er bestaat geen wisselkoers tussen deze valuta.</p>
</div>
</div>
</section>
<?php pagina_einde();
