<?php
/**
 * Paginakop. Variabelen: $kop (h1), $intro, $label (optioneel), $knoppen ([[href, tekst, 'goud'|'rand']]),
 * $beeld (beeld-ID, optioneel), $alt, $groot (bool, homepage).
 * Het kruimelpad komt uit de paginagegevens ('kruimels').
 */
$groot ??= false; $label ??= ''; $intro ??= ''; $knoppen ??= []; $beeld ??= ''; $alt ??= '';
$img = $beeld ? beeld($beeld, $alt, '100vw', true) : '';
$kruimels = $GLOBALS['pagina']['kruimels'] ?? [];
$laatste = array_key_last($kruimels);
?>
<section class="hero<?= $groot ? ' hero-groot' : '' ?>">
<?= $img ?>
<div>
<?php if ($kruimels): ?>
<nav class="kruimels" aria-label="Kruimelpad"><ol><li><a href="/">Home</a></li><?php foreach ($kruimels as $i => [$href, $naam]): ?><li><a href="<?= e($href) ?>"<?= $i === $laatste ? ' aria-current="page"' : '' ?>><?= e($naam) ?></a></li><?php endforeach ?></ol></nav>
<?php endif ?>
<?php if ($label): ?><p class="label"><?= e($label) ?></p><?php endif ?>
<h1><?= e($kop) ?></h1>
<?php if ($intro): ?><p class="intro"><?= e($intro) ?></p><?php endif ?>
<?php if ($knoppen): ?>
<p class="knoppen">
<?php foreach ($knoppen as [$href, $tekst, $soort]): ?>
<a class="knop knop-<?= e($soort) ?>" href="<?= e($href) ?>"><?= e($tekst) ?></a>
<?php endforeach ?>
</p>
<?php endif ?>
</div>
</section>
