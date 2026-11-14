# Website — instructies

Deze instructies gelden voor alles in `website/`. Ze vullen de algemene `CLAUDE.md` in de root aan.

De site komt op **decisiveoutcomes.nl**. Ze ziet eruit als de corporate site van een echte internationale private military company; de humor zit alleen in de details. Inhoud en opbouw staan in [sitemap.md](sitemap.md), de beelden in [beeldtaal.md](beeldtaal.md).

## Techniek

- Handgeschreven HTML, CSS en PHP. Geen frameworks, geen CMS, geen packagemanagers en geen afhankelijkheden van derden. Er is geen build-stap: wat in de repo staat, gaat zo naar de server.
- De site draait op eigen hosting met PHP 8 en Apache, met `.htaccess` voor headers en serverregels.
- Header, navigatie, footer en terugkerende onderdelen zijn PHP-includes.
- Mappenstructuur:

```
website/
  public/              documentroot
    index.php
    over-ons/index.php    (één map per gewone pagina, voor nette URL's)
    router.php            persberichten, inzichten, divisies en sectoren
    inzichten/feed.php    Atom-feed
    assets/css/site.css
    assets/js/            alleen kleine verbeteringen
    assets/fonts/
    assets/img/
    robots.txt
    .htaccess
  includes/            buiten de documentroot
    bootstrap.php      helpers: e(), asset(), component(), beeld(), icoon(), pagina_begin(); laadt data.php en inzichten.php
    data.php           vaste inhoud: navigatie, divisies, sectoren, bestuur, tijdlijn
    inzichten.php      inlezen van content/ en een kleine Markdown-omzetter
    head.php, header.php, footer.php
    components/        herbruikbare onderdelen
    templates/         sjablonen voor de pagina's van router.php
    formulier.php      contactformulier
    config.example.php
  content/README.md    zo voeg je nieuws en inzichten toe
  content/newsroom/    één Markdown-bestand per persbericht
  content/inzichten/   analyses, casestudy's, rapporten en de Stand-By Outlook
  beelden/
    originelen/        originele beelden, in de repo
    beelden.json       manifest: alt-tekst, uitsnedes, type en bron
  (de JPEG's voor de site staan in public/assets/img/)
```

- `includes/` en `content/` staan buiten de documentroot. Echte configuratie (zoals het teamadres voor het formulier) staat in `includes/config.php`. Dat bestand staat in `.gitignore` en komt nooit in de repo.

## URL's en routering

- **Eén adres:** alles draait op `https://decisiveoutcomes.nl/`. HTTP en `www.` worden met een 301 doorgestuurd naar dat adres.
- **Nette URL's:** kleine letters, Nederlandse woorden met koppeltekens, en een slash aan het eind (`/over-ons/`, `/diensten/decisive-security/`). Nooit `.php` in een URL.
- **Persberichten:** `/newsroom/jjjj-mm-dd-korte-titel/`. Andere inzichten: `/inzichten/<soort>/<korte-titel>/`. Het overzicht staat op `/inzichten/`.
- **Router:** persberichten, inzichten en hun overzichten, divisies (`/diensten/<slug>/`) en sectoren (`/sectoren/<id>/`) hebben geen eigen map in `public/`. `.htaccess` stuurt die adressen naar `router.php`, dat ze opbouwt uit `content/` en `data.php`. Een onbekend adres geeft de 404. De routeringsregels staan ná het redirectblok, zodat een redirect altijd voorgaat.
- **Foutpagina's:**
    - Een eigen 404-pagina in de huisstijl, met een droge zin en links naar de hoofdpagina's. Bijvoorbeeld: *Deze pagina staat stand-by.*
    - Verwijderde inhoud krijgt een 410.
    - Fouten op de server krijgen een sobere 500-pagina zonder technische details.
- **Redirects:** alle 301- en 410-regels staan in één blok in `.htaccess`, met een korte reden erbij. Een URL die eenmaal gepubliceerd is, verdwijnt nooit zonder redirect of 410.

## Zoekmachines en structured data

- **sitemap.xml:**
    - Een PHP-script maakt `/sitemap.xml` aan uit de lijst met pagina's en de inzichten, met `lastmod` op basis van de wijzigingsdatum.
    - Een rewrite-regel maakt het bestand bereikbaar onder dat adres.
    - `robots.txt` verwijst ernaar.
- **Structured data als JSON-LD** in `<script type="application/ld+json">`. Dit is een datablok en geen uitvoerbaar script, dus het past binnen de CSP.
    - Op elke pagina: `Organization` (naam, url, logo).
    - Op persberichten: `NewsArticle` (kop, datum, beeld, auteur = de organisatie).
    - Op de bestuurspagina: `Person` per bestuurder, met alleen naam en functie.
    - Geen verzonnen adressen of contactgegevens in de structured data. Die moeten kloppen, of ze blijven weg.
- Breadcrumbs als `BreadcrumbList` op pagina's dieper dan één niveau.

## Contentwerkwijze

- Teksten voor pagina's en persberichten worden aangeleverd, als gewone tekst of Markdown.
- Elk persbericht is één Markdown-bestand in `content/newsroom/`, met de naam `jjjj-mm-dd-korte-titel.md`; andere inzichten staan in `content/inzichten/`, met dezelfde opbouw plus het veld `soort`. Opbouw en velden staan in [content/README.md](content/README.md):
    - een kop tussen `---` met `titel`, `samenvatting`, `beeld` (een beeld-ID), `alt` en zo nodig `plaats`, `divisies`, `datum`;
    - de tekst: drie tot vijf alinea's. Het standaardblok *Over Decisive Outcomes Group* komt er vanzelf onder. Een *Noot voor de redactie* staat onder de kop `## Noot voor de redactie`.
- Er is geen apart PHP-bestand of map per bericht nodig. Het bestand neerzetten is genoeg.
- Een nieuwe pagina krijgt een eigen map in `public/` en gebruikt de bestaande componenten. Als er een nieuw component nodig is, overleg je dat eerst.
- Controleer bij elke tekst de canon en de stijlregels uit de root-`CLAUDE.md`. Klopt iets niet, meld het dan voordat je het publiceert.

## Deployment

- **Via de branch `deploy`:** werk gewoon op `main`. Elke push naar `deploy` rolt automatisch uit via GitHub Actions. Uitrollen doe je met `git push origin main:deploy`. Er is geen testomgeving, dus elke push naar `deploy` is meteen live.
- **Alleen doorschuiven:** op `deploy` wordt nooit los gecommit; de branch volgt `main`.
- **Vóór het uitrollen:** test lokaal met `php -S localhost:8000 -t website/public website/public/router.php` (de router doet dan ook het werk van `.htaccess`) en loop de checklijst onder *Controleren* door.
- **De workflow:**
    1. Draai `php -l` over alle PHP-bestanden. Bij een fout stopt de deploy.
    2. Upload `public/`, `includes/` en `content/` via SFTP. Upload alleen gewijzigde bestanden.
- **Inloggegevens:** host, gebruiker, wachtwoord en de host key (`DEPLOY_KNOWN_HOSTS`, daar staat de hostnaam in) staan als GitHub Secrets, nooit in de repo. Poort en pad op de server staan gewoon in `deploy.yml`.
- **Op de server:**
    - `includes/config.php` zet je één keer handmatig op de server, buiten de deploy om.
    - De deploy overschrijft of verwijdert dat bestand nooit. Hij verwijdert ook nooit andere bestanden op de server die niet uit de repo komen.
- **Terugdraaien:** met `git revert` op `main` en daarna weer `git push origin main:deploy`.

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
- **Opbouw van een pagina:** een donkere hero over de volle breedte (beeld met een donkere laag eroverheen, witte of gouden kop), daaronder lichte secties. De header ligt transparant over de hero en wordt wit zodra de hero voorbij is (zonder JavaScript: een witte header onder de hero is ook goed).
- **Vormen:** vierkant. Knoppen, kaarten, beelden en invoervelden hebben een afronding van hooguit 2 px.
- **Knoppen:** op donker een gouden knop (`#D4A94F`) met zwarte tekst; op licht een rode (`#9B1C15`) of zwarte knop met witte tekst.
- **Footer:** donker (`#0F0D0B`) met lichte tekst en gouden accenten.

### Kleuren en contrast

Het palet hieronder is een startpunt. De website mag afwijken van de logokleuren als dat beter past bij de stijl van een echte PMC. Echte sites gebruiken meestal een neutrale basis (wit, lichtgrijs, antraciet of donker marineblauw) met één accentkleur. Het logo zelf verandert nooit van kleur.

Bij een ander palet:

- elke tekstkleur haalt minimaal 7:1 op zijn achtergrond, en interactieve elementen minimaal 3:1 ten opzichte van hun omgeving;
- er blijft één accentkleur die naast het logo werkt (goud ligt voor de hand);
- de kleuren staan als tokens in `:root`, zodat het palet op één plek te wijzigen is;
- het nieuwe palet komt met datum en reden in `docs/beslissingen.md`.

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
- Oswald alleen voor `h1`, `h2` en de cijfers in de cijferbalk, in hoofdletters met wat extra letterafstand. Kleinere koppen, navigatie, knoppen en tekst in Source Sans 3.
- Lopende tekst minimaal 18 px op desktop en 17 px op mobiel, met een regelhoogte van ongeveer 1,6.
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
- Een favicon-set uit het embleem, gemaakt uit de PNG van het logo.

## IndieWeb

- Een `h-card` voor de organisatie in de footer.
- Elk persbericht is een `h-entry` met `p-name`, `dt-published`, `p-author` en `e-content`.
- `rel="me"`-links waar ze van toepassing zijn.
- Webmentions komen later, als ze geen externe afhankelijkheid of request in de browser toevoegen.

## Inzichten en feed

- Persberichten staan in `content/newsroom/`, de andere inzichten in `content/inzichten/`. Het overzicht op `/inzichten/` en de feed worden uit beide opgebouwd.
- Per soort is er een overzicht: `/newsroom/`, `/inzichten/analyse/`, `/inzichten/casestudy/` en `/inzichten/rapport/` (`INZICHT_OVERZICHTEN` in `includes/inzichten.php`).
- Het veld `divisies` koppelt een inzicht aan divisies; de divisiepagina toont de drie nieuwste.
- Een inzicht kan een openingsalinea hebben (veld `inleiding`).
- Een inzicht kan een PDF hebben (veld `download`, pad onder `public/assets/`). Maak die opnieuw uit de printweergave als de tekst verandert, bijvoorbeeld met Playwright: `page.emulateMedia({ media: 'print' })` en `page.pdf({ format: 'A4' })`.
- De Atom-feed bevat alle inzichten, met de soort als `category`. Hij staat op `/inzichten/feed.php` en wordt via `link rel="alternate"` in de `head` aangekondigd.

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
- **Beelden** als gewone progressive JPEG in twee breedtes. Gebruik `srcset` en `sizes`, zodat een telefoon nooit een desktopbeeld laadt. Gebruik `picture` alleen voor een aparte mobiele uitsnede. Altijd met `width` en `height`. Hero's maximaal 120 KB op mobiel en 250 KB op desktop.
- **Caching:**
    - Statische bestanden krijgen in `.htaccess` een cache van een jaar, met `immutable`.
    - Versiebeheer van die bestanden gaat met een PHP-helper die `?v=` plus de wijzigingstijd van het bestand toevoegt, dus zonder build-stap.
    - HTML krijgt een korte cache.
- **Compressie:** Brotli of gzip voor HTML, CSS, JS, SVG en de feed, via `.htaccess`.
- **PHP:** geen database en zo weinig werk per verzoek als mogelijk. Lees de inzichten alleen in op de pagina's die ze nodig hebben.
- **Geen externe verzoeken en geen derde partijen.** Dat is niet alleen privacy, maar ook snelheid.
- **SVG:** iconen als compacte SVG. Kleine iconen inline, of als één sprite die met `use` wordt hergebruikt.
- **Logo:** voorlopig de PNG uit `logo/`, verkleind tot de weergavemaat in twee resoluties (1x en 2x), met `width` en `height`. Er is nu geen goede SVG; komt die er, dan vervangt hij de PNG.

## Responsive

- **Mobile-first.** De basisstijl is voor een smal scherm; bredere schermen krijgen aanvullingen via `min-width`-queries in `em`, met zo min mogelijk breakpoints.
- **Componenten passen zich aan hun eigen ruimte aan met container queries,** zodat ze overal herbruikbaar zijn: in een smalle kolom, een brede kolom of naast elkaar.
- **Vloeiende maten:** typografie en witruimte schalen met `clamp()`. Layouts met grid en flexbox, nooit met vaste breedtes in pixels.
- **Geen horizontale scroll vanaf 320 px breed.** Inhoud blijft bruikbaar bij 400 procent zoom (WCAG reflow). De viewport-meta heeft geen `maximum-scale` en blokkeert nooit inzoomen.
- **Navigatie op mobiel** werkt zonder JavaScript met een `details`/`summary`-menu. Op desktop staat het menu als rij, via `::details-content`; browsers die dat niet kennen, houden ook op desktop de menuknop.
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
- Aanspreekvorm: *u* voor opdrachtgevers en alle corporate tekst, *je* voor sollicitanten, spelers en alles wat echt is (contact, formulier, privacy, meedoen).
- Persberichten kunnen een *Noot voor de redactie* hebben (onder de kop `## Noot voor de redactie`). Daarin, in cynische bijzinnen in het bericht zelf en in haar bereikbaarheid (veld `bereikbaar`) sijpelt de frustratie van Annelies Brouwer (Corporate Communications) over de raad van bestuur door, afhankelijk van haar stemming (veld `stemming`). Droog, nooit als openlijke klacht. Zie *Annelies Brouwer* in de root-`CLAUDE.md`.
- Komt er een teamlid in een citaat of noot, werk dan [docs/inzage.md](../docs/inzage.md) bij.
- Volg de canon en de stijlregels uit de root-`CLAUDE.md`.
- De disclaimer staat altijd in de footer, in het colofon en bij het formulier (zie de sitemap). Haal die nooit weg en maak hem nooit grappig.
- Echte personen: alleen voornamen van teamleden, en alleen wat in `docs/toestemming.md` is goedgekeurd.
