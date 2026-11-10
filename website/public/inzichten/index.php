<?php
require __DIR__ . '/../../includes/bootstrap.php';
require SITE_ROOT . '/includes/inzichten.php';
pagina_begin([
    'titel' => 'Inzichten',
    'beschrijving' => 'Persberichten, analyses, casestudy\'s en het jaarlijkse Stand-By Outlook van Decisive Outcomes Group.',
    'pad' => '/inzichten/',
]);
component('hero', [
    'label' => 'Inzichten',
    'kop' => 'Analyse, nieuws en rapportage',
    'intro' => 'Onze kijk op risico\'s en ontwikkelingen, en het laatste nieuws uit de groep.',
]);
?>
<section>
<ul class="kaarten">
<?php foreach (alle_inzichten() as $i) {
    component('kaart', ['titel' => $i['titel'], 'href' => $i['url'], 'tekst' => $i['samenvatting'], 'label' => $i['soort'] . ' · ' . datum($i['datum']), 'beeld' => $i['beeld'], 'alt' => $i['alt'], 'kop' => 'h2']);
} ?>
</ul>
<p>Volg onze inzichten via de <a href="/inzichten/feed.php">Atom-feed</a>. Voor persvragen: Postbus 1, Kralendijk.</p>
</section>
<?php pagina_einde();
