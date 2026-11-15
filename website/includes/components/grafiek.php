<?php
/**
 * Grafiek als inline SVG, zonder JavaScript. Variabelen:
 *   $id          uniek id op de pagina
 *   $titel       bijschrift boven de grafiek
 *   $soort       'kolom' (reeks door de tijd), 'balk' (categorieën, ook negatief) of 'lijn' (x is een jaartal)
 *   $reeks       [[label, waarde], ...]
 *   $eenheid     voorvoegsel bij waarden, bijvoorbeeld 'R$' (optioneel)
 *   $decimalen   aantal decimalen (optioneel, standaard 0)
 *   $toelichting korte tekst onder de grafiek (optioneel)
 *   $tabel       true: de cijfers als tabel in een uitklapper (standaard); false: geen tabel
 *                (alleen als dezelfde cijfers al als tabel op de pagina staan)
 */
$eenheid ??= ''; $decimalen ??= 0; $toelichting ??= ''; $tabel ??= true;

$fmt = fn(float $w): string => ($w < 0 ? '−' : '') . trim($eenheid . ' ' . number_format(abs($w), $decimalen, ',', '.'));
$xy = fn(float $v): string => rtrim(rtrim(number_format($v, 1, '.', ''), '0'), '.');

/** Ronde schaal: [min, max, stap] die 0 en alle waarden bevat, in ongeveer vier stappen. */
$schaal = function (float $lo, float $hi): array {
    $lo = min(0, $lo); $hi = max(0, $hi);
    $ruw = ($hi - $lo) / 4 ?: 1;
    $mag = 10 ** floor(log10($ruw));
    $n = $ruw / $mag;
    $stap = ($n <= 1 ? 1 : ($n <= 2 ? 2 : ($n <= 2.5 ? 2.5 : ($n <= 5 ? 5 : 10)))) * $mag;
    return [floor($lo / $stap) * $stap, ceil($hi / $stap) * $stap, $stap];
};

/** Staaf met een afgeronde kop (4px) en een rechte voet op de nullijn. */
$staaf = function (float $x, float $y0, float $w, float $y1, bool $liggend) use ($xy): string {
    $r = 4;
    if ($liggend) { // x = nullijn, y = boven, w = dikte, y1 = eindpunt op de x-as
        [$a, $b, $t] = [$x, $y1, $y0];
        $r = min($r, abs($b - $a));
        $s = $b >= $a ? 1 : -1;
        return 'M' . $xy($a) . ' ' . $xy($t) . 'H' . $xy($b - $s * $r) . 'Q' . $xy($b) . ' ' . $xy($t) . ' ' . $xy($b) . ' ' . $xy($t + $r)
            . 'V' . $xy($t + $w - $r) . 'Q' . $xy($b) . ' ' . $xy($t + $w) . ' ' . $xy($b - $s * $r) . ' ' . $xy($t + $w) . 'H' . $xy($a) . 'Z';
    }
    $r = min($r, abs($y1 - $y0));
    $s = $y1 <= $y0 ? 1 : -1; // 1 = omhoog
    return 'M' . $xy($x) . ' ' . $xy($y0) . 'V' . $xy($y1 + $s * $r) . 'Q' . $xy($x) . ' ' . $xy($y1) . ' ' . $xy($x + $r) . ' ' . $xy($y1)
        . 'H' . $xy($x + $w - $r) . 'Q' . $xy($x + $w) . ' ' . $xy($y1) . ' ' . $xy($x + $w) . ' ' . $xy($y1 + $s * $r) . 'V' . $xy($y0) . 'Z';
};

$waarden = array_column($reeks, 1);
$W = 600;
$svg = '';

if ($soort === 'balk') {
    $rij = 40; $boven = 8;
    $H = $boven + count($reeks) * $rij + 8;
    [$lo, $hi] = $schaal(min($waarden), max($waarden));
    // Ruimte voor de categorienamen, en aan weerszijden voor de waarden bij de uiteinden.
    $links = 120 + ($lo < 0 ? 90 : 0); $rechts = $hi > 0 ? 90 : 16;
    $sx = fn(float $v): float => $links + ($v - $lo) / ($hi - $lo) * ($W - $links - $rechts);
    $nul = $sx(0);
    foreach ($reeks as $i => [$label, $w]) {
        $y = $boven + $i * $rij;
        $svg .= '<g><title>' . e($label . ': ' . $fmt($w)) . '</title>'
            . '<rect class="raak" x="0" y="' . $y . '" width="' . $W . '" height="' . $rij . '"/>'
            . '<text x="0" y="' . ($y + 25) . '">' . e($label) . '</text>';
        if ($w != 0) {
            $svg .= '<path class="' . ($w < 0 ? 'min' : 'plus') . '" d="' . $staaf($nul, $y + 8, 24, $sx($w), true) . '"/>';
        }
        $tx = $w < 0 ? $sx($w) - 8 : $sx($w) + 8;
        $svg .= '<text class="waarde" x="' . $xy($tx) . '" y="' . ($y + 25) . '"' . ($w < 0 ? ' text-anchor="end"' : '') . '>' . e($fmt($w)) . '</text></g>';
    }
    $svg .= '<line class="nul" x1="' . $xy($nul) . '" x2="' . $xy($nul) . '" y1="' . $boven . '" y2="' . ($H - 8) . '"/>';
} else {
    $H = 300; $links = 64; $rechts = $soort === 'lijn' ? 110 : 16; $boven = 16; $onder = 36;
    [$lo, $hi, $stap] = $schaal(min($waarden), max($waarden));
    $sy = fn(float $v): float => $boven + ($hi - $v) / ($hi - $lo) * ($H - $boven - $onder);
    $as = '';
    for ($t = $lo; $t <= $hi + $stap / 2; $t += $stap) {
        $y = $xy($sy($t));
        $as .= '<line class="' . (abs($t) < $stap / 2 ? 'nul' : 'raster') . '" x1="' . $links . '" x2="' . ($W - $rechts) . '" y1="' . $y . '" y2="' . $y . '"/>'
            . '<text x="' . ($links - 8) . '" y="' . $xy($sy($t) + 5) . '" text-anchor="end">' . e(str_replace('-', '−', number_format($t, $stap < 1 ? 1 : 0, ',', '.'))) . '</text>';
    }
    $svg .= $as;
    if ($soort === 'kolom') {
        $band = ($W - $links - $rechts) / count($reeks);
        $dik = min(24, $band * .6);
        foreach ($reeks as $i => [$label, $w]) {
            $x = $links + $i * $band;
            $svg .= '<g><title>' . e($label . ': ' . $fmt($w)) . '</title>'
                . '<rect class="raak" x="' . $xy($x) . '" y="0" width="' . $xy($band) . '" height="' . $H . '"/>';
            if ($w != 0) {
                $svg .= '<path class="' . ($w < 0 ? 'min' : 'plus') . '" d="' . $staaf($x + ($band - $dik) / 2, $sy(0), $dik, $sy($w), false) . '"/>';
            }
            $svg .= '<text x="' . $xy($x + $band / 2) . '" y="' . ($H - 10) . '" text-anchor="middle">' . e($label) . '</text></g>';
        }
        // Alleen de laatste waarde staat bij de staaf; de rest staat in de tabel en de tooltip.
        [$label, $w] = end($reeks);
        $x = $links + (count($reeks) - .5) * $band;
        $ty = $w < 0 ? $sy($w) + 20 : $sy($w) - 8;
        $svg .= '<text class="waarde" x="' . $xy($x) . '" y="' . $xy($ty) . '" text-anchor="middle">' . e($fmt($w)) . '</text>';
    } else {
        $jaren = array_map('floatval', array_column($reeks, 0));
        [$j0, $j1] = [min($jaren), max($jaren)];
        $sx = fn(float $j): float => $links + 12 + ($j - $j0) / (($j1 - $j0) ?: 1) * ($W - $links - $rechts - 24);
        $punten = [];
        $merken = '';
        foreach ($reeks as [$jaar, $w]) {
            $punten[] = $xy($sx((float) $jaar)) . ',' . $xy($sy($w));
            $merken .= '<g><title>' . e($jaar . ': ' . $fmt($w)) . '</title><circle class="raak" cx="' . $xy($sx((float) $jaar)) . '" cy="' . $xy($sy($w)) . '" r="14"/>'
                . '<circle class="punt" cx="' . $xy($sx((float) $jaar)) . '" cy="' . $xy($sy($w)) . '" r="4"/></g>';
        }
        // Jaartallen op de x-as: het eerste, het laatste en de tientallen daartussen, als ze niet botsen.
        $vorige = -INF;
        foreach ($jaren as $i => $j) {
            $x = $sx($j);
            if ($i === array_key_last($jaren) || ($x - $vorige >= 48 && $x <= $sx($j1) - 48)) {
                $svg .= '<text x="' . $xy($x) . '" y="' . ($H - 10) . '" text-anchor="middle">' . e((string) $reeks[$i][0]) . '</text>';
                $vorige = $x;
            }
        }
        [$jaar, $w] = end($reeks);
        $svg .= '<polyline class="lijn" points="' . implode(' ', $punten) . '"/>' . $merken
            . '<text class="waarde" x="' . $xy($sx((float) $jaar) + 12) . '" y="' . $xy($sy($w) + 5) . '">' . e($fmt($w)) . '</text>';
    }
}
?>
<figure class="grafiek" id="<?= e($id) ?>">
<figcaption id="<?= e($id) ?>-titel"><?= e($titel) ?></figcaption>
<div class="grafiek-vlak" role="region" aria-labelledby="<?= e($id) ?>-titel" tabindex="0">
<svg viewBox="0 0 <?= $W ?> <?= $H ?>" width="<?= $W ?>" height="<?= $H ?>" role="img" aria-labelledby="<?= e($id) ?>-titel"><?= $svg ?></svg>
</div>
<?php if ($toelichting): ?><p><small><?= e($toelichting) ?></small></p><?php endif ?>
<?php if ($tabel): ?>
<details>
<summary>De cijfers als tabel</summary>
<table>
<caption><?= e($titel) ?></caption>
<thead><tr><th scope="col"><?= $soort === 'balk' ? 'Onderdeel' : 'Jaar' ?></th><th scope="col">Waarde</th></tr></thead>
<tbody>
<?php foreach ($reeks as [$label, $w]): ?>
<tr><th scope="row"><?= e((string) $label) ?></th><td><?= e($fmt($w)) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>
</details>
<?php endif ?>
</figure>
