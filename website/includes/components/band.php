<?php
/** Donkere band met kop, tekst en knop. Variabelen: $kop, $tekst, $href, $knop, $label (optioneel). */
$label ??= ''; $tekst ??= ''; $href ??= ''; $knop ??= '';
?>
<section class="band">
<?php if ($label): ?><p class="label"><?= e($label) ?></p><?php endif ?>
<h2><?= e($kop) ?></h2>
<?php if ($tekst): ?><p><?= e($tekst) ?></p><?php endif ?>
<?php if ($href): ?><p><a class="knop knop-goud" href="<?= e($href) ?>"><?= e($knop) ?></a></p><?php endif ?>
</section>
