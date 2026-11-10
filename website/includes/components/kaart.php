<?php
/** Kaart in een lijst. Variabelen: $titel, $href, $tekst, $label (optioneel), $icoon (optioneel), $beeld (optioneel), $alt, $kop (h2|h3). */
$label ??= ''; $icoon ??= ''; $beeld ??= ''; $alt ??= ''; $kop ??= 'h3';
$img = $beeld ? beeld($beeld, $alt, '(min-width: 60em) 33vw, (min-width: 40em) 50vw, 100vw') : '';
?>
<li class="kaart">
<?= $img ?>
<?php if ($label): ?><p class="label"><?= e($label) ?></p><?php endif ?>
<?php if ($icoon): ?><?= icoon($icoon) ?><?php endif ?>
<<?= $kop ?>><a href="<?= e($href) ?>"><?= e($titel) ?></a></<?= $kop ?>>
<p><?= e($tekst) ?></p>
</li>
