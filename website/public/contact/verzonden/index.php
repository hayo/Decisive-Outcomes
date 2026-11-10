<?php
require __DIR__ . '/../../../includes/bootstrap.php';
header('X-Robots-Tag: noindex');
pagina_begin([
    'titel' => 'Bericht verzonden',
    'beschrijving' => 'Je bericht is verzonden.',
    'pad' => '/contact/verzonden/',
    'kruimels' => [['/contact/', 'Contact'], ['/contact/verzonden/', 'Bericht verzonden']],
]);
component('hero', ['label' => 'Contact', 'kop' => 'Bericht verzonden', 'intro' => 'Dank voor je bericht.']);
?>
<section>
<p class="inleiding">Gaat je bericht over het team of over meespelen? Dan krijg je zo snel mogelijk een echt antwoord.</p>
<p>Ging het om een aanvraag voor diensten: Decisive Outcomes Group is fictie. Zulke aanvragen nemen wij niet in behandeling.</p>
<p><a href="/">Terug naar de homepage</a></p>
</section>
<?php pagina_einde();
