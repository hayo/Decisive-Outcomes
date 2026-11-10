</main>
<footer class="voet">
<div class="h-card">
<a class="u-url merk" href="/"><img class="u-logo" src="<?= e(asset('img/logo-88.png')) ?>" srcset="<?= e(asset('img/logo-176.png')) ?> 2x" width="88" height="88" alt=""><span class="p-name"><?= e(SITE_NAAM) ?></span></a>
<p class="p-note">Beslissende uitkomsten. Sinds 1979.</p>
</div>
<nav aria-label="Divisies">
<h2>Divisies</h2>
<ul>
<?php foreach (DIVISIES as $slug => $d): ?>
<li><a href="/diensten/<?= e($slug) ?>/"><?= icoon($d['icoon']) ?><?= e($d['naam']) ?></a></li>
<?php endforeach ?>
</ul>
</nav>
<nav aria-label="Organisatie">
<h2>Organisatie</h2>
<ul>
<?php foreach (NAVIGATIE as [$href, $label]): ?>
<li><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
<?php endforeach ?>
<li><a href="/contact/">Contact</a></li>
</ul>
</nav>
<nav aria-label="Juridisch">
<h2>Juridisch</h2>
<ul>
<?php foreach (FOOTER_LINKS as [$href, $label]): ?>
<li><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
<?php endforeach ?>
</ul>
</nav>
<p class="disclaimer">Decisive Outcomes is een airsoftteam. Decisive Outcomes Group is fictie. <a href="/colofon/">Lees meer</a>.</p>
<p class="copyright">© 1984–<?= date('Y') ?> <?= e(SITE_NAAM) ?>. Ingeschreven in Rhodesië.</p>
</footer>
</body>
</html>
