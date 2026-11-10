# Website — instructies

Deze instructies gelden voor alles in `website/`. Ze vullen de algemene `CLAUDE.md` in de root aan.

De site komt op **decisiveoutcomes.nl**. Ze ziet eruit als de corporate site van een echte internationale private military company; de humor zit alleen in de details. Inhoud en opbouw staan in [sitemap.md](sitemap.md), de beelden in [beeldtaal.md](beeldtaal.md).

## Techniek

- Handgeschreven HTML, CSS en PHP. Geen frameworks, geen CMS, geen build-stap, geen packagemanagers en geen afhankelijkheden van derden.
- De site draait op eigen hosting met PHP. Ga uit van PHP 8 en Apache met `.htaccess`, tenzij Hayo iets anders zegt.
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

- Koppen in **Oswald**. Lopende tekst in een tweede webfont; voorstel: **Source Sans 3**. Beide hebben een open licentie (OFL).
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

## Beelden en prestaties

- Beelden als AVIF of WebP met een JPEG-fallback via `picture`, altijd met `width` en `height`, en `loading="lazy"` onder de vouw.
- Budget per pagina, exclusief beelden: HTML, CSS en JS samen onder de 100 KB.

## Controleren

Controleer voor elke commit:

- de HTML met de W3C-validator;
- de beveiligingsheaders en de CSP;
- het contrast;
- toetsenbordbediening;
- of de pagina zonder JavaScript werkt.

Noem in het commitbericht wat er is gecontroleerd.

## Tekst

- Nederlands, in de toon uit de sitemap: zakelijk, zelfverzekerd en zonder knipogen. De grap staat in een bijzin, een voetnoot of een getal.
- Volg de canon en de stijlregels uit de root-`CLAUDE.md`.
