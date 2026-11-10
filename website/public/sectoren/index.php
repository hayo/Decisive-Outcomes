<?php
require __DIR__ . '/../../includes/bootstrap.php';
pagina_begin([
    'titel' => 'Sectoren',
    'beschrijving' => 'Decisive Outcomes Group werkt voor overheden, mijnbouw, horeca, vastgoed, landbouw en maatschappelijke organisaties.',
    'pad' => '/sectoren/',
]);
component('hero', [
    'label' => 'Sectoren',
    'kop' => 'Wie wij bedienen',
    'intro' => 'Elke sector kent eigen risico\'s. Wij combineren de juiste divisies voor elke klantgroep.',
]);
?>
<section>
<ul class="kaarten">
<?php foreach (SECTOREN as $id => [$naam, $kop, $divisies, $wapenfeit]): ?>
<li class="kaart" id="<?= e($id) ?>">
<h2><?= e($naam) ?></h2>
<p><?= e($kop) ?></p>
<p class="label">Wapenfeit</p>
<p><?= e($wapenfeit) ?></p>
<p class="label">Divisies</p>
<p><?php foreach ($divisies as $n => $slug): ?><?= $n ? ', ' : '' ?><a href="/diensten/<?= e($slug) ?>/"><?= e(DIVISIES[$slug]['naam']) ?></a><?php endforeach ?></p>
</li>
<?php endforeach ?>
</ul>
</section>
<?php pagina_einde();
