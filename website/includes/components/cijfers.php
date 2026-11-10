<section class="cijfers" aria-label="Kerncijfers">
<dl>
<?php foreach (KERNCIJFERS as [$getal, $omschrijving]): ?>
<div><dt><?= e($omschrijving) ?></dt><dd><?= e($getal) ?></dd></div>
<?php endforeach ?>
</dl>
<p><small><?= e(KERNCIJFERS_NOOT) ?></small></p>
</section>
