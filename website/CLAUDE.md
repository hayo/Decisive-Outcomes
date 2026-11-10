# Website — instructies

Deze instructies gelden voor alles in `website/`. Ze vullen de algemene `CLAUDE.md` in de root aan.

De site komt op **decisiveoutcomes.nl**. Ze ziet eruit als de corporate site van een echte internationale private military company; de humor zit alleen in de details. Inhoud en opbouw staan in [sitemap.md](sitemap.md), de beelden in [beeldtaal.md](beeldtaal.md).

## Techniek

- Handgeschreven HTML, CSS en PHP. Geen frameworks, geen CMS, geen build-stap, geen packagemanagers en geen afhankelijkheden van derden.
- De site draait op eigen hosting met PHP 8 en Apache, met `.htaccess` voor headers en serverregels.
- Header, navigatie, footer en terugkerende onderdelen zijn PHP-includes.
- Mappenstructuur:

```
website/
  public/              documentroot
    index.php
    over-ons/index.php    (één map per pagina, voor nette URL's)
    newsroom/feed.php     Atom-feed
    assets/css/site.css
    assets/js/            alleen kleine verbeteringen
    assets/fonts/
    assets/img/
    robots.txt
    .htaccess
  includes/            buiten de documentroot
    head.php, header.php, footer.php
    components/        herbruikbare onderdelen
    config.example.php
  content/newsroom/    één PHP-bestand per persbericht (metadata + HTML)
```

- `includes/` en `content/` staan buiten de documentroot. Echte configuratie (zoals het teamadres voor het formulier) staat in `includes/config.php`. Dat bestand staat in `.gitignore` en komt nooit in de repo.

## HTML

- Webstandaarden voorop: valide HTML5, `lang="nl"` en semantische elementen (`header`, `nav`, `main`, `article`, `section`, `aside`, `footer`, `figure`, `time`, `address`).
- Bouw met een kleine set herbruikbare componenten en gebruik die overal hetzelfde. Bijvoorbeeld: paginakop (hero), kaart, kerncijferbalk, call-to-action, tabel, persbericht, bestuursprofiel en formulierveld. Elk component is één include in `includes/components/`.
- Houd de HTML compact: geen overbodige `div`s, geen wrappers voor opmaak alleen, en weinig classes. Style waar mogelijk op element en component, niet met utility-classes.
- Eén `h1` per pagina en een logische kopvolgorde.
- Nooit inline `style`, inline `script` of event-attributen (`onclick` en dergelijke); de CSP blokkeert die.

## CSS

- Eén stylesheet, `assets/css/site.css`. Compact en zonder framework.
- Design tokens als custom properties in `:root`: kleuren, typografie, spacing en maximale breedtes.
- Modern CSS: grid, flexbox, `clamp()` voor vloeiende typografie en logische eigenschappen (`margin-inline` en dergelijke). Mobile-first.
- Respecteer `prefers-reduced-motion`. Voeg een eenvoudige printstijl toe.
- **Licht corporate ontwerp:** witte of gebroken witte achtergrond, veel ruimte en een rustige typografie. Goud is het accent.

### Kleuren en contrast

| Token | Waarde | Gebruik | Contrast op wit |
|---|---|---|---|
| tekst | `#0F0D0B` | lopende tekst en koppen | 19,4:1 |
| link / accent | `#9B1C15` | links, knoppen, nadruk | 8,2:1 |
| goud donker | `#6B5218` | gouden tekst en kleine accenten | 7,4:1 |
| goud | `#D4A94F` | alleen lijnen, vlakken en het logo, **nooit voor tekst op licht** | 2,2:1 |
| achtergrond | `#FFFFFF` / `#FAF8F4` | pagina en vlakken | — |

Op donkere vlakken, zoals een hero met beeld, mag goud `#D4A94F` wel als tekstkleur (8,9:1 op zwart).

## Lettertypes

- Koppen in **Oswald**, lopende tekst in **Source Sans 3**. Beide hebben een open licentie (OFL).
- Self-hosted als WOFF2, beperkt tot de Latijnse tekenset, met `font-display: swap`. Preload alleen het lettertype voor de koppen.
- Nooit fonts laden van Google Fonts of een andere externe dienst.

## JavaScript

- Progressive enhancement: de hele site werkt volledig zonder JavaScript.
- Alleen kleine verbeteringen, als losse bestanden met `defer`. Bijvoorbeeld directe validatie in het formulier.
- Geen frameworks, geen externe scripts en niets wat de CSP zou breken.

## Beveiliging

- Werk volgens de OWASP Top 10 en, waar het voor deze site relevant is, de controles uit de OWASP ASVS.
- Strikte Content Security Policy via `.htaccess` of PHP:

```
default-src 'none'; script-src 'self'; style-src 'self'; img-src 'self'; font-src 'self';
form-action 'self'; connect-src 'self'; base-uri 'none'; frame-ancestors 'none';
object-src 'none'; upgrade-insecure-requests
```

- Stuur ook deze headers mee:
    - `Strict-Transport-Security`
    - `X-Content-Type-Options: nosniff`
    - `Referrer-Policy: strict-origin-when-cross-origin`
    - `Permissions-Policy` (alles uit wat niet nodig is)
    - `Cross-Origin-Opener-Policy: same-origin`
- Escape alle uitvoer met `htmlspecialchars`. Includes gebruiken alleen vaste paden, nooit invoer van gebruikers. Foutmeldingen gaan naar het log, niet naar het scherm.

## Contactformulier

- Een echt PHP-formulier dat mailt naar het teamadres uit `config.php`. Er wordt niets opgeslagen.
- Zonder cookies, dus ook geen sessie. Bescherming tegen misbruik:
    - een honeypotveld;
    - een tijdscontrole;
    - een stateless token: een tijdstempel plus HMAC met een geheim uit de config.
- Valideer en normaliseer alle velden. Haal regeleinden uit alles wat in een mailheader komt. Ontvanger en afzender liggen vast; het adres van de bezoeker komt alleen in `Reply-To`, na validatie.
- Na verzenden volgt een redirect naar een bevestigingspagina (Post/Redirect/Get). Foutmeldingen staan bij het veld, gekoppeld via `aria-describedby`.
- Het satirische aanvraagformulier (RFP) uit de sitemap mag ook bestaan, maar maakt dan gebruik van hetzelfde echte formulier. Echte contactgegevens en de privacyverklaring zijn altijd duidelijk herkenbaar en kloppen.

## Privacy

- Geen cookies, geen trackers, geen analytics en geen externe requests. Fonts, beelden en scripts staan allemaal op de eigen server. Geen embeds.
- De privacyverklaring is echt en beschrijft precies wat het formulier doet. Die pagina is nooit satire.

## AI-crawlers

- Blokkeer AI- en LLM-crawlers in `robots.txt` en ook op serverniveau in `.htaccess`, op user-agent.
- Gewone zoekmachines blijven welkom.

## Open Graph en metadata

- Elke pagina heeft een eigen `title`, `meta description`, `link rel="canonical"` (op `https://decisiveoutcomes.nl/...`) en Open Graph-tags:
    - `og:title`, `og:description`, `og:url`, `og:type` en `og:locale` (`nl_NL`);
    - `og:image` met afmetingen van 1200 × 630 px;
    - `twitter:card` met `summary_large_image`.
- Een favicon-set uit het embleem.

## IndieWeb

- Een `h-card` voor de organisatie in de footer.
- Elk persbericht is een `h-entry` met `p-name`, `dt-published`, `p-author` en `e-content`.
- `rel="me"`-links waar ze van toepassing zijn.
- Webmentions komen later, als ze geen externe afhankelijkheid of request in de browser toevoegen.

## Newsroom en feed

- Elk persbericht is één bestand in `content/newsroom/`. Het overzicht en de feed worden daaruit opgebouwd.
- De Atom-feed staat op `/newsroom/feed.php` en wordt via `link rel="alternate"` in de `head` aangekondigd.

## Toegankelijkheid

- WCAG 2.2 AA is verplicht, AAA waar dat kan.
- Lopende tekst haalt minimaal 7:1 contrast, interactieve elementen zijn minimaal 44 × 44 px en er is een zichtbare focusstijl.
- Bovenaan elke pagina staat een skiplink naar `main`.
- Niets is alleen met kleur aangeduid.
- Tabellen hebben een `caption` en `th` met `scope`.
- Elk Gemini-beeld krijgt een beschrijvende alt-tekst; puur decoratieve beelden krijgen `alt=""`.

## Snelheid

Snelheid weegt zwaar. Bij twijfel kies je de lichtere oplossing.

### Doelen

Gemeten op een gemiddelde mobiele telefoon met een 4G-verbinding:

- Largest Contentful Paint onder 1,5 seconde.
- Cumulative Layout Shift onder 0,05.
- Interaction to Next Paint onder 100 ms.
- Lighthouse Performance: 100 op mobiel.

### Budget per pagina

| Onderdeel | Maximum (gecomprimeerd) |
|---|---|
| HTML | 15 KB |
| CSS | 15 KB |
| JavaScript | 5 KB, en meestal 0 |
| Fonts | 2 bestanden, samen 80 KB |
| Totaal bij eerste weergave, inclusief beelden | 400 KB |

### Werkwijze

- **Eén CSS-bestand en geen render-blokkerend JavaScript.** Scripts krijgen altijd `defer`.
- **Fonts:** variabele WOFF2-bestanden, beperkt tot de Latijnse tekenset. Preload alleen het lettertype voor de koppen. Gebruik `font-display: swap` en een fallback-font met `size-adjust` en aangepaste metrics, zodat er bij het laden niets verspringt.
- **Het LCP-beeld** (meestal de hero) krijgt `fetchpriority="high"` en nooit `loading="lazy"`. Alle andere beelden onder de vouw krijgen `loading="lazy"` en `decoding="async"`.
- **Beelden** als AVIF met WebP- en JPEG-fallback via `picture`. Gebruik `srcset` en `sizes`, zodat een telefoon nooit een desktopbeeld laadt. Altijd met `width` en `height`. Hero's maximaal 120 KB op mobiel en 250 KB op desktop.
- **Caching:**
    - Statische bestanden krijgen in `.htaccess` een cache van een jaar, met `immutable`.
    - Versiebeheer van die bestanden gaat met een PHP-helper die `?v=` plus de wijzigingstijd van het bestand toevoegt, dus zonder build-stap.
    - HTML krijgt een korte cache.
- **Compressie:** Brotli of gzip voor HTML, CSS, JS, SVG en de feed, via `.htaccess`.
- **PHP:** geen database en zo weinig werk per verzoek als mogelijk. Lees de newsroom alleen in op de pagina's die hem nodig hebben.
- **Geen externe verzoeken en geen derde partijen.** Dat is niet alleen privacy, maar ook snelheid.
- **SVG:** iconen en het logo als compacte SVG. Kleine iconen inline, of als één sprite die met `use` wordt hergebruikt.

## Responsive

- **Mobile-first.** De basisstijl is voor een smal scherm; bredere schermen krijgen aanvullingen via `min-width`-queries in `em`, met zo min mogelijk breakpoints.
- **Componenten passen zich aan hun eigen ruimte aan met container queries,** zodat ze overal herbruikbaar zijn: in een smalle kolom, een brede kolom of naast elkaar.
- **Vloeiende maten:** typografie en witruimte schalen met `clamp()`. Layouts met grid en flexbox, nooit met vaste breedtes in pixels.
- **Geen horizontale scroll vanaf 320 px breed.** Inhoud blijft bruikbaar bij 400 procent zoom (WCAG reflow). De viewport-meta heeft geen `maximum-scale` en blokkeert nooit inzoomen.
- **Navigatie op mobiel** werkt zonder JavaScript, bijvoorbeeld met een `details`/`summary`-patroon. JavaScript voegt hooguit `aria-expanded` en een nettere animatie toe.
- **Tabellen:**
    - Smalle tabellen blijven een tabel.
    - Brede tabellen staan in een scrollcontainer met `tabindex="0"`, `role="region"` en een `aria-label`.
    - Waar dat beter leest, worden ze op mobiel een gestapelde lijst.
- **Beelden:** gebruik art direction via `picture` waar het beeld anders moet worden uitgesneden. Een hero is op mobiel bijvoorbeeld 4:5 in plaats van 16:9, met het onderwerp in beeld.
- **Aanraken:** interactieve elementen zijn minimaal 44 × 44 px, met genoeg ruimte ertussen. Er zijn geen hover-afhankelijke functies; wat bij hover verschijnt, is ook met aanraken en toetsenbord bereikbaar.
- **Testen** op breedtes van 320, 375, 768, 1024 en 1440 px, staand en liggend.

## Controleren

Controleer voor elke commit:

- de HTML met de W3C-validator;
- de beveiligingsheaders en de CSP;
- het contrast;
- toetsenbordbediening;
- of de pagina zonder JavaScript werkt;
- Lighthouse op mobiel en het budget per pagina;
- de weergave op 320 px en bij 400 procent zoom.

Noem in het commitbericht wat er is gecontroleerd.

## Tekst

- Nederlands, in de toon uit de sitemap: zakelijk, zelfverzekerd en zonder knipogen. De grap staat in een bijzin, een voetnoot of een getal.
- Volg de canon en de stijlregels uit de root-`CLAUDE.md`.
