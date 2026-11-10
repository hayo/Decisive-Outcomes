# Beeldtaal en promptbibliotheek

Alle beelden op de site worden gemaakt met Gemini. Deze gids zorgt dat ze eruitzien als één fotoshoot van één bedrijf, en niet als losse AI-plaatjes.

De prompts staan in het Engels. Gemini levert daarmee consistentere resultaten, en de prompts zijn invoer voor een tool, geen tekst op de site.

## Stijl in het kort

- **Sfeer:** filmisch en ingetogen, zoals een jaarverslag van een defensiebedrijf. Rustig, duur en serieus.
- **Licht:** laag, warm zijlicht (gouden uur) of donker binnenlicht met één lichtbron. Diepe schaduwen.
- **Kleur:** licht ontkleurd. Warm goud in de lichten (`#D4A94F`), diep zwart in de schaduwen (`#0F0D0B`), en spaarzaam een rood accent (`#9B1C15`).
- **Textuur:** subtiele filmkorrel, alsof het op 35 mm is geschoten.
- **Mensen:** altijd als silhouet, in tegenlicht, van achteren of met het gezicht in de schaduw. Er zijn geen herkenbare gezichten nodig, en dat voorkomt dat Gemini echte personen benadert.
- **Compositie:** veel lege ruimte, zodat er tekst overheen kan. Het onderwerp staat meestal links of rechts, niet in het midden.

## Stijlblok

Begin elke prompt met dit blok, zodat de stijl overal hetzelfde is:

> Cinematic corporate photography for a private security company annual report. Shot on 35mm film, subtle grain, slightly desaturated colors with warm golden highlights and deep near-black shadows, occasional muted crimson accent. Low, warm side light or single-source interior light, strong contrast, calm and serious mood. Generous negative space for text overlay. No text, no logos, no watermarks, no flags.

## Wat nooit in beeld komt

- Herkenbare gezichten of echte personen.
- Logo's, merknamen, vlaggen of insignes van echte landen, legers of bedrijven. Ook het eigen logo komt niet in beeld.
- Gevechten, gewonden, slachtoffers of verwoesting.
- Clichébeelden van Afrika: geen armoede als decor, geen "exotische" stereotypen. Landschappen en mensen worden net zo serieus en waardig neergezet als in de rest van de shoot.
- Leesbare tekst in het beeld. Die wordt meestal verminkt; tekst gaat er later in de vormgeving overheen.

## Formaten

| Gebruik | Verhouding | Minimaal formaat |
|---|---|---|
| Hero op een pagina | 16:9 | 2400 × 1350 px |
| Tegels en kaarten | 4:3 | 1200 × 900 px |
| Portretten bestuur | 4:5 | 1200 × 1500 px |
| Persbericht | 3:2 | 1500 × 1000 px |
| Deelafbeelding (Open Graph) | 1,91:1 | 1200 × 630 px, uitgesneden uit een bestaand beeld |

Zet de verhouding ook in de prompt, bijvoorbeeld: *Aspect ratio 16:9.*

## Consistent blijven

- Maak eerst `HOME-01`. Gebruik het goedgekeurde beeld daarna als referentiebeeld bij de andere prompts, met de toevoeging: *Match the color grading, light and grain of the reference image.*
- Doe hetzelfde bij de portretten: keur er één goed en gebruik die als referentie voor de andere drie.
- Leg goedgekeurde beelden vast in `website/beelden/originelen/`, met het ID als bestandsnaam (zie *Beeldeisen*).

## Beeldeisen

### Maken in Google AI Studio

- Maak de beelden in Google AI Studio of via de Gemini-API, in de hoogste resolutie die beschikbaar is. Een hero moet minimaal 1600 px breed zijn. Haalt Gemini dat niet, maak hem dan opnieuw of overleg.
- Leg per beeld vast hoe het gemaakt is: het model, de datum, de volledige prompt (inclusief stijlblok) en eventueel gebruikte referentiebeelden. Dat gaat in het manifest (zie hieronder).
- Upload nooit foto's van echte teamleden of andere echte mensen als referentie naar Gemini, tenzij die persoon daar uitdrukkelijk toestemming voor heeft gegeven.

### Controleren voordat een beeld wordt gebruikt

- **Stijl:** het beeld past bij `HOME-01` in kleur, licht en korrel.
- **Fouten:** geen typische AI-fouten, zoals rare handen of vingers, vervormde geweren of voertuigen, onleesbare tekst of verzonnen insignes.
- **Wat nooit in beeld komt:** geen herkenbare gezichten, echte vlaggen, logo's of merknamen. Zie de lijst hierboven.
- **Twijfel:** bij twijfel maak je het beeld opnieuw. Een middelmatig beeld maakt de hele site minder geloofwaardig.

### Opslag en manifest

- Originelen staan in de repo, in `website/beelden/originelen/`, met het beeld-ID als bestandsnaam. Bijvoorbeeld `HOME-01.png`, of `HOME-01-mobiel.png` voor een aparte mobiele uitsnede.
- Elk beeld staat in `website/beelden/beelden.json`, met:
    - `id` en `type` (`ai` of `foto`);
    - `alt`: de Nederlandse alt-tekst;
    - `uitsnede`: het focuspunt, of een verwijzing naar een apart mobiel origineel;
    - `bron`: model, datum en prompt bij AI-beelden; fotograaf en datum bij foto's.
- De PHP-component voor beelden en het deployscript lezen allebei dit manifest.

### Afgeleiden bij de deploy

GitHub Actions maakt bij elke deploy de afgeleide bestanden. Ze staan niet in git.

| | |
|---|---|
| Breedtes | 480, 800, 1200, 1600 en 2400 px. Nooit groter dan het origineel. |
| Formaten | AVIF (kwaliteit ±50), WebP (±75), JPEG (±80, progressive) |
| Mobiele uitsnede | 4:5, uit het mobiele origineel of rond het focuspunt |
| Deelafbeelding | 1200 × 630 px JPEG voor Open Graph, zonder logo |
| Metadata | Alle EXIF- en locatiegegevens worden verwijderd |
| Uitvoer | `public/assets/img/<id>-<breedte>.<ext>` |

Houd je aan de bestandsgroottes uit het snelheidsbudget in `website/CLAUDE.md`: een hero is maximaal 120 KB op mobiel en 250 KB op desktop.

### Alt-teksten

- Beschrijf in het Nederlands wat er te zien is en waarom het beeld er staat, in één of twee zinnen.
- Niet beginnen met "afbeelding van" of "AI-beeld van".
- Puur decoratieve beelden krijgen `alt=""`.

### AI-vermelding

Op de colofonpagina staat dat de beelden op de site met Google Gemini zijn gemaakt, behalve de foto's van speeldagen. Bij de beelden zelf staat geen label.

### Echte foto's van speeldagen

- Echte foto's van speeldagen zijn toegestaan, maar alleen met toestemming van iedereen die herkenbaar in beeld is. Leg die toestemming vast. Foto's waarop iemand herkenbaar is zonder toestemming worden niet gebruikt.
- Geef ze dezelfde kleurbewerking als de AI-beelden: licht ontkleurd, warm in de lichten, diep in de schaduwen en met een subtiele korrel.
- Vermeld in het manifest wie de fotograaf is en wanneer de foto is gemaakt. De deploy verwijdert de locatiegegevens.

### Logo

Het logo komt nooit in een beeld, ook niet op deelafbeeldingen. Het staat alleen in de header en de footer van de site.

## Prompts

Zet steeds eerst het stijlblok voor de prompt.

### Home

**HOME-01 — Hero.** *Aspect ratio 16:9.*
Two weathered 1970s Land Rovers parked on a red dirt road in African savanna at golden hour, a large baobab tree on the horizon, dust hanging in the warm light. Four men in plain olive field clothing stand beside the vehicles seen from behind, looking toward the horizon. The scene is calm and patient, as if they have been waiting a long time.

**HOME-02 — Security.** *Aspect ratio 4:3.*
A lone figure in dark field clothing seen from behind on a rooftop at dusk, looking out over a quiet city with a pair of binoculars. Warm lights coming on in the distance, the figure in silhouette.

**HOME-03 — Hospitality.** *Aspect ratio 4:3.*
A simple, elegant bar on a wooden deck by the sea at sunset, a single glass of beer on the counter, an empty chair, warm golden light, a calm ocean in the background.

**HOME-04 — Real Estate.** *Aspect ratio 4:3.*
Aerial photograph of a tiny sandbank island in turquoise Caribbean water with a single small modern building and a short wooden jetty, low tide revealing pale sand, late afternoon light.

### Over ons

**OVER-01 — Geschiedenis.** *Aspect ratio 16:9.*
An old wooden table in an abandoned colonial farmhouse kitchen, a yellowed newspaper and an empty coffee cup on it, a notebook with handwritten notes, warm light falling through shutters. Quiet, nostalgic, documentary.

**OVER-02 — Pamwe chete.** *Aspect ratio 4:3.*
Four pairs of worn military boots standing side by side on red earth, shot low to the ground, golden backlight, long shadows.

### Raad van bestuur

Gebruik voor alle vier hetzelfde decor en licht, en alleen de details uit de canon.

**LEAD-basis** (zet dit voor elk portret):
Formal executive portrait in a dark boardroom with a large window behind, the man silhouetted against warm evening light, face in deep shadow and not recognizable, wearing a dark suit. *Aspect ratio 4:5.*

- **LEAD-01 — Frederik:** A very tall, broad man standing upright, almost filling the frame, completely still.
- **LEAD-02 — Hayo:** A man seated at the boardroom table, a folded map and an open notebook in front of him, a pen in his hand.
- **LEAD-03 — Jochem:** A man standing beside a closed dark wooden chest with iron bands, one hand resting on it.
- **LEAD-04 — Robert:** A man standing by the window with a coffee cup, half turned away, relaxed but alert.

### Diensten

**DIEN-01 — Security.** *Aspect ratio 16:9.*
A plain unmarked truck being loaded at night in a narrow city street, two figures in dark clothing working quickly, one standing in a doorway, lit by a single street lamp. Tense but controlled.

**DIEN-02 — Hospitality.** *Aspect ratio 16:9.*
The interior of a small, old-fashioned fry shop at closing time, a large stainless steel fryer gleaming under warm light, chairs on the tables, a sense of a story behind it.

**DIEN-03 — Mining.** *Aspect ratio 16:9.*
Close-up of rough clear quartz crystals on a dark stone table under a single warm light, with a jeweler's loupe beside them. Serious, as if they were diamonds.

**DIEN-04 — Capital.** *Aspect ratio 16:9.*
A neat stack of old share certificates with ornate borders tied with string on a mahogany desk, a reading lamp, a fountain pen, deep shadows. The certificates are blank, no readable text.

**DIEN-05 — Real Estate.** *Aspect ratio 16:9.*
A rusted Antonov biplane half buried in the sand at the edge of a small Caribbean island, waves breaking against it, golden evening light. Calm and strangely dignified.

**DIEN-06 — People.** *Aspect ratio 16:9.*
A small, tidy recruitment office in a Caribbean town, a single wooden desk with a stack of contracts and a pen, sunlight through the blinds, a fan on the ceiling.

**DIEN-07 — Agri.** *Aspect ratio 16:9.*
A herd of goats walking through dry Caribbean scrubland with cacti at sunrise, seen from a low angle, warm golden light, dust in the air. Shot like a nature documentary.

### Wereldwijd

**WERELD-01 — Kaart.** *Aspect ratio 16:9.*
A dark, minimal world map made of fine gold lines on a near-black background, with small glowing dots in many locations around the globe. Clean, corporate, no country names, no text.

**WERELD-02 — Hoofdkantoor.** *Aspect ratio 16:9.*
A modern glass meeting room on a tiny island at dawn, a long table with four chairs, the ocean visible on all sides, the sea calm and almost touching the floor.

### Werken bij

**WERK-01 — Werken bij.** *Aspect ratio 16:9.*
A group of people in practical outdoor gear seen from behind, walking into a forest at early morning, mist between the trees, soft golden light. Purposeful, a team.

### Newsroom

**NEWS-basis** (pas het onderwerp per persbericht aan):
*Aspect ratio 3:2.* Documentary-style photograph related to [onderwerp], same color grading as the rest of the series, people only as silhouettes or from behind.
