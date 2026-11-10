<?php
require __DIR__ . '/../includes/bootstrap.php';
http_response_code(404);
pagina_begin(['titel' => 'Pagina niet gevonden', 'beschrijving' => 'Deze pagina bestaat niet.', 'pad' => '/404/']);
component('hero', ['label' => 'Foutcode 404', 'kop' => 'Deze pagina staat stand-by', 'intro' => 'De pagina die je zoekt bestaat niet, of is nog niet aangekomen.', 'knoppen' => [['/', 'Naar de homepage', 'goud'], ['/contact/', 'Neem contact op', 'rand']]]);
?>
<section>
<h2>Misschien zoek je</h2>
<ul>
<?php foreach (NAVIGATIE as [$href, $label]): ?>
<li><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
<?php endforeach ?>
</ul>
</section>
<?php pagina_einde();
