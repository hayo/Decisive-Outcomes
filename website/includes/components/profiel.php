<?php /** Bestuursprofiel. Variabelen: $naam, $functie, $bio, $beeld. */ ?>
<li class="profiel">
<?= beeld($beeld, '', '(min-width: 40em) 25vw, 100vw') ?>
<h3><?= e($naam) ?></h3>
<p class="functie"><?= e($functie) ?></p>
<p><?= e($bio) ?></p>
</li>
