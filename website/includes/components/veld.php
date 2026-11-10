<?php
/**
 * Formulierveld. Variabelen: $naam, $label, $type (text|email|textarea|select), $waarde, $fout, $verplicht, $opties, $hulp, $autocomplete.
 */
$type ??= 'text'; $waarde ??= ''; $fout ??= ''; $verplicht ??= false; $opties ??= []; $hulp ??= ''; $autocomplete ??= '';
$id = 'veld-' . $naam;
$beschreven = trim(($hulp ? "$id-hulp " : '') . ($fout ? "$id-fout" : ''));
$attr = ' id="' . e($id) . '" name="' . e($naam) . '"'
    . ($verplicht ? ' required' : '')
    . ($autocomplete ? ' autocomplete="' . e($autocomplete) . '"' : '')
    . ($beschreven ? ' aria-describedby="' . e($beschreven) . '"' : '')
    . ($fout ? ' aria-invalid="true"' : '');
?>
<p class="veld<?= $fout ? ' veld-fout' : '' ?>">
<label for="<?= e($id) ?>"><?= e($label) ?><?= $verplicht ? '' : ' <span>(optioneel)</span>' ?></label>
<?php if ($hulp): ?><span class="hulp" id="<?= e($id) ?>-hulp"><?= e($hulp) ?></span><?php endif ?>
<?php if ($fout): ?><strong class="fout" id="<?= e($id) ?>-fout"><?= e($fout) ?></strong><?php endif ?>
<?php if ($type === 'textarea'): ?>
<textarea<?= $attr ?> rows="6" maxlength="5000"><?= e($waarde) ?></textarea>
<?php elseif ($type === 'select'): ?>
<select<?= $attr ?>>
<?php foreach ($opties as $waardeOptie => $tekst): ?>
<option value="<?= e((string) $waardeOptie) ?>"<?= (string) $waardeOptie === $waarde ? ' selected' : '' ?>><?= e($tekst) ?></option>
<?php endforeach ?>
</select>
<?php else: ?>
<input type="<?= e($type) ?>"<?= $attr ?> value="<?= e($waarde) ?>" maxlength="200">
<?php endif ?>
</p>
