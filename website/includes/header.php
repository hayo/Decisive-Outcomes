<?php /** @var array $p */ ?>
<body>
<a class="skiplink" href="#inhoud">Naar de inhoud</a>
<header class="kop">
<a class="merk" href="/" aria-label="<?= e(SITE_NAAM) ?>, naar de homepage">
<img src="<?= e(asset('img/beeldmerk-wit-44.png')) ?>" srcset="<?= e(asset('img/beeldmerk-wit-88.png')) ?> 2x" width="43" height="44" alt="">
<span>Decisive Outcomes<small>Group</small></span>
</a>
<nav aria-label="Hoofdmenu">
<details class="menu">
<summary><?= icoon('menu') ?>Menu</summary>
<ul>
<?php $sectie = str_starts_with($p['pad'], '/newsroom/') ? '/inzichten/' : $p['pad']; ?>
<?php foreach (NAVIGATIE as [$href, $label]): ?>
<li><a href="<?= e($href) ?>"<?= $p['pad'] === $href ? ' aria-current="page"' : (str_starts_with($sectie, $href) ? ' aria-current="true"' : '') ?>><?= e($label) ?></a></li>
<?php endforeach ?>
<li><a class="knop knop-goud" href="/contact/"<?= $p['pad'] === '/contact/' ? ' aria-current="page"' : '' ?>>Neem contact op</a></li>
</ul>
</details>
</nav>
</header>
<main id="inhoud">
