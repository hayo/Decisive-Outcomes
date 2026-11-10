<?php
require __DIR__ . '/../../includes/bootstrap.php';
require SITE_ROOT . '/includes/formulier.php';

$actief = formulier_actief($config);
$w = ['naam' => '', 'email' => '', 'organisatie' => '', 'onderwerp' => 'team', 'regio' => '', 'budget' => '', 'valuta' => '', 'bericht' => ''];
$f = [];
$algemeen = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $actief) {
    [$w, $f] = formulier_controleer($_POST);
    $vangnet = ($_POST['website'] ?? '') !== '';
    if (!token_ok((string) ($_POST['token'] ?? ''), $config)) {
        $algemeen = 'Het formulier is verlopen of te snel verstuurd. Controleer je gegevens en verstuur het opnieuw.';
    } elseif (!$f) {
        if ($vangnet || formulier_verstuur($w, $config)) {
            header('Location: /contact/verzonden/', true, 303);
            exit;
        }
        error_log('Contactformulier: mail() mislukt');
        $algemeen = 'Het versturen is niet gelukt. Probeer het later opnieuw.';
    }
    http_response_code(422);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    http_response_code(503);
}

pagina_begin([
    'titel' => 'Contact',
    'beschrijving' => 'Neem contact op met Decisive Outcomes Group, of met het airsoftteam Decisive Outcomes.',
    'pad' => '/contact/',
]);
component('hero', [
    'label' => 'Contact',
    'kop' => 'Neem contact op',
    'intro' => 'Wij reageren op aanvragen binnen zes tot acht jaar. Vragen over het team beantwoorden wij sneller.',
]);
$veld = fn(string $naam, array $extra) => component('veld', $extra + ['naam' => $naam, 'waarde' => $w[$naam], 'fout' => $f[$naam] ?? '']);
?>
<section>
<div class="twee">
<div>
<p class="melding"><strong>Let op:</strong> Decisive Outcomes is een airsoftteam. Decisive Outcomes Group is fictie. Aanvragen voor echte diensten nemen wij niet in behandeling. Wil je meespelen of heb je een vraag over het team? Dan krijg je een echt antwoord.</p>
<?php if (!$actief): ?>
<p class="melding melding-fout">Het contactformulier is op dit moment niet beschikbaar. Probeer het later opnieuw.</p>
<?php else: ?>
<?php if ($f || $algemeen): ?>
<div class="melding melding-fout" role="alert">
<p><strong><?= $algemeen ? e($algemeen) : 'Controleer de gemarkeerde velden.' ?></strong></p>
<?php if ($f): ?><ul><?php foreach ($f as $naam => $tekst): ?><li><a href="#veld-<?= e($naam) ?>"><?= e($tekst) ?></a></li><?php endforeach ?></ul><?php endif ?>
</div>
<?php endif ?>
<form method="post" action="/contact/" novalidate>
<?php
$veld('naam', ['label' => 'Naam', 'verplicht' => true, 'autocomplete' => 'name']);
$veld('email', ['label' => 'E-mailadres', 'type' => 'email', 'verplicht' => true, 'autocomplete' => 'email']);
$veld('organisatie', ['label' => 'Organisatie', 'autocomplete' => 'organization']);
$veld('onderwerp', ['label' => 'Onderwerp', 'type' => 'select', 'verplicht' => true, 'opties' => ['' => 'Kies een onderwerp'] + ONDERWERPEN]);
?>
<fieldset>
<legend>Aanvraagdetails</legend>
<?php
$veld('regio', ['label' => 'Regio', 'type' => 'select', 'opties' => REGIOS]);
$veld('budget', ['label' => 'Budget', 'hulp' => 'Een bedrag of een aantal.']);
$veld('valuta', ['label' => 'Valuta', 'type' => 'select', 'opties' => VALUTA]);
?>
</fieldset>
<?php $veld('bericht', ['label' => 'Bericht', 'type' => 'textarea', 'verplicht' => true]); ?>
<p class="vangnet" aria-hidden="true"><label for="veld-website">Website</label><input type="text" id="veld-website" name="website" tabindex="-1" autocomplete="off"></p>
<input type="hidden" name="token" value="<?= e(token_maak($config)) ?>">
<p><button class="knop knop-rood" type="submit">Verstuur bericht</button></p>
<p><small>Wij gebruiken je gegevens alleen om je bericht te beantwoorden. Lees de <a href="/privacy/">privacyverklaring</a>.</small></p>
</form>
<?php endif ?>
</div>
<div>
<h2>Hoofdkantoor</h2>
<address>Decisive Outcomes Group<br>Postbus 1<br>Kralendijk</address>
<p>Reactietermijn: zes tot acht jaar.</p>
<h2>Pers</h2>
<p>Voor persvragen: Postbus 1, Kralendijk. Of gebruik het formulier en kies <em>Persvraag</em>.</p>
</div>
</div>
</section>
<?php pagina_einde();
