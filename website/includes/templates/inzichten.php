<?php
/** Overzicht van inzichten. Verwacht $pad: '/inzichten/' of een sleutel uit INZICHT_OVERZICHTEN. */
$overzicht = INZICHT_OVERZICHTEN[$pad] ?? null;
pagina_begin([
    'titel' => $overzicht[0] ?? 'Inzichten',
    'beschrijving' => $overzicht[2] ?? 'Persberichten, analyses, casestudy\'s en het jaarlijkse Stand-By Outlook van Decisive Outcomes Group.',
    'pad' => $pad,
    'kruimels' => $overzicht ? [['/inzichten/', 'Inzichten'], [$pad, $overzicht[0]]] : [],
]);
component('hero', [
    'label' => 'Inzichten',
    'kop' => $overzicht[0] ?? 'Analyse, nieuws en rapportage',
    'intro' => 'Onze kijk op risico\'s en ontwikkelingen, en het laatste nieuws uit de groep.',
]);
?>
<section>
<nav class="filter" aria-label="Soort inzicht">
<ul>
<li><a href="/inzichten/"<?= $overzicht ? '' : ' aria-current="page"' ?>>Alles</a></li>
<?php foreach (INZICHT_OVERZICHTEN as $href => [$naam]): ?>
<li><a href="<?= e($href) ?>"<?= $href === $pad ? ' aria-current="page"' : '' ?>><?= e($naam) ?></a></li>
<?php endforeach ?>
</ul>
</nav>
<ul class="kaarten">
<?php foreach (inzichten_waar($overzicht[1] ?? null) as $i) {
    component('kaart', ['titel' => $i['titel'], 'href' => $i['url'], 'tekst' => $i['samenvatting'], 'label' => $i['label'] . ' · ' . datum($i['datum']), 'beeld' => $i['beeld'], 'alt' => $i['alt'], 'kop' => 'h2']);
} ?>
</ul>
<p>Volg onze inzichten via de <a href="/inzichten/feed.php">Atom-feed</a>. Voor persvragen: <?= e(PERSCONTACT) ?>, Postbus 1, Kralendijk.</p>
</section>
<?php pagina_einde();
