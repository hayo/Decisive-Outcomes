# Nieuws en inzichten toevoegen

Een persbericht is één Markdown-bestand in `newsroom/`. Meer is niet nodig: geen map in `public/`, geen PHP. Na de volgende deploy staat het bericht op de site, in de newsroom, op `/inzichten/`, op de homepage, in de feed en in de sitemap.

## Een persbericht

Maak `newsroom/jjjj-mm-dd-korte-titel.md`. De bestandsnaam is het adres (`/newsroom/jjjj-mm-dd-korte-titel/`) en de datum aan het begin is de publicatiedatum.

```markdown
---
titel: Decisive Agri breidt veestapel uit naar 413 geiten
samenvatting: Eén zin voor de kaart, de zoekmachine en de feed.
plaats: Kralendijk
beeld: NEWS-18
alt: Wat er op het beeld te zien is.
divisies: decisive-agri
stemming: 3
bereikbaar: Bereikbaar op werkdagen, na het Stand-By-overleg.
---

Eerste alinea.

Tweede alinea, met **vet**, *cursief* en een [link](/diensten/decisive-agri/).

## Noot voor de redactie

Optioneel. Alles onder deze kop komt in het blok *Noot voor de redactie*.
```

Het blok *Over Decisive Outcomes Group* komt er vanzelf onder.

## De velden

| Veld | Nodig | Wat |
|---|---|---|
| `titel` | ja | De kop. |
| `samenvatting` | ja | Eén of twee zinnen voor de kaart, de meta description en de feed. |
| `plaats` | nee | Standaard `Kralendijk`. |
| `beeld` | nee | Beeld-ID uit `beelden/beelden.json`, met de JPEG's in `public/assets/img/`. Zonder beeld krijgt de hero geen foto. |
| `alt` | bij een beeld | Beschrijving van het beeld. |
| `divisies` | nee | Slugs uit `includes/data.php`, gescheiden door komma's. De divisiepagina toont dan het bericht. |
| `stemming` | ja, voor nieuwe berichten | De stemming van Annelies Brouwer, 1 t/m 5 (zie de root-`CLAUDE.md`). Wordt niet getoond; zo weet het volgende bericht waar ze staat. |
| `bereikbaar` | nee | Een zin achter het perscontact, bijvoorbeeld *Bereikbaar na het Stand-By-overleg.* |
| `datum` | nee | Alleen nodig als de bestandsnaam niet met een datum begint (`jjjj-mm-dd`). |
| `soort` | nee | Standaard `Persbericht`. Anders: `Analyse`, `Casestudy`, `Rapport` of `Jaarrapport`. Die horen in `inzichten/`. |
| `inleiding` | nee | Een openingsalinea in grotere letters, boven de tekst. |
| `download` | nee | Pad van een PDF onder `public/assets/`, bijvoorbeeld `docs/rapport.pdf`. |

Elk veld staat op één regel: `naam: waarde`, zonder aanhalingstekens.

## De tekst

- Een lege regel begint een nieuwe alinea. Zet elke alinea op één regel.
- `## Kop` en `### Kop` voor tussenkoppen.
- Lijsten met `- ` of `1. `, zonder lege regels ertussen.
- `**vet**`, `*cursief*` en `[tekst](/pad/)`. Links beginnen met `/`, `https://` of `mailto:`.
- Een `\` aan het eind van een regel geeft een regelovergang binnen de alinea.
- HTML werkt niet; die wordt als tekst getoond.

Een bestand dat met `_` begint, telt niet mee. Zo kun je een concept alvast in de repo zetten.

## Een bericht weghalen

Een gepubliceerd adres verdwijnt nooit zomaar. Haal je een bericht weg, zet dan een 410 of een redirect in het redirectblok van `public/.htaccess`.
