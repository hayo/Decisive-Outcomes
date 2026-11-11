# Beeldtaal en promptbibliotheek

Alle beelden op de site worden gemaakt met Gemini. Deze gids zorgt dat ze eruitzien als één fotoshoot van één bedrijf, en niet als losse AI-plaatjes.

De prompts staan in het Engels. Gemini levert daarmee consistentere resultaten, en de prompts zijn invoer voor een tool, geen tekst op de site.

## Stijl in het kort

- **Sfeer:** filmisch en ingetogen, zoals een jaarverslag van een defensiebedrijf. Rustig, duur en serieus.
- **Licht:** laag, warm zijlicht (gouden uur) of donker binnenlicht met één lichtbron. Diepe schaduwen.
- **Kleur:** licht ontkleurd. Warm goud in de lichten (`#D4A94F`), diep zwart in de schaduwen (`#0F0D0B`), en spaarzaam een rood accent (`#9B1C15`).
- **Textuur:** subtiele filmkorrel, alsof het op 35 mm is geschoten.
- **Mensen:** altijd als silhouet, in tegenlicht, van achteren of met het gezicht in de schaduw. Er zijn geen herkenbare gezichten nodig, en dat voorkomt dat Gemini echte personen benadert. Echte beveiligingsbedrijven tonen hun personeel wel herkenbaar; wij compenseren dat met veel mensen in actie, uitrusting en omgeving, zodat de beelden niet leeg aanvoelen.
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
| Tegels en kaarten | 16:9 | 1600 × 900 px |
| Portretten bestuur | 4:5 | 1200 × 1500 px |
| Inzichten (kaart en artikel) | 16:9 | 1600 × 900 px |
| Deelafbeelding (Open Graph) | 1,91:1 | 1200 × 630 px, uitgesneden uit een bestaand beeld |

Zet de verhouding ook in de prompt, bijvoorbeeld: *Aspect ratio 16:9.*

## Consistent blijven

- Maak eerst `HOME-01`. Gebruik het goedgekeurde beeld daarna als referentiebeeld bij de andere prompts, met de toevoeging: *Match the color grading, light and grain of the reference image.*
- Doe hetzelfde bij de portretten: keur er één goed en gebruik die als referentie voor de andere drie.
- De vier oprichters zijn wit. Gemini maakt silhouetten in tegenlicht vaak donker; noem het daarom altijd in de prompt (*white Rhodesian soldiers*, of *The man is white* bij de portretten). Werkt het niet, bewerk dan een goedgekeurd beeld in plaats van een nieuw te maken.
- Zet achter elke prompt: *Everything is unbadged: no lettering, no number plates, no brand names, no insignia.* Zonder die zin zet Gemini merknamen en kentekens op voertuigen.
- Bij hero's de tekst links, het onderwerp rechts: *Composition for a website header: main subject in the right half of the frame, the left half calm and darker for text overlay.*
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
- De PHP-component voor beelden leest dit manifest.

### JPEG's voor de site

Er is geen build-stap. Als een beeld wordt toegevoegd, maak je éénmalig de JPEG's voor de site en commit je ze, naast het origineel.

| | |
|---|---|
| Breedtes | 800 en 1600 px. Nooit groter dan het origineel. |
| Formaat | JPEG, progressive, kwaliteit ±80 |
| Mobiele uitsnede | Alleen bij hero's: 4:5 op 800 px, uit het mobiele origineel of rond het focuspunt |
| Deelafbeelding | 1200 × 630 px voor Open Graph, zonder logo |
| Metadata | Alle EXIF- en locatiegegevens worden verwijderd |
| Bestandsnaam | `public/assets/img/<id>-<breedte>.jpg`, `<id>-mobiel.jpg` en `<id>-og.jpg` |

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
- Vermeld in het manifest wie de fotograaf is en wanneer de foto is gemaakt. Verwijder de locatiegegevens uit de JPEG's voor de site.

### Logo

Het logo komt nooit in een beeld, ook niet op deelafbeeldingen. Het staat alleen in de header en de footer van de site.

## Prompts

Zet steeds eerst het stijlblok voor de prompt.

### Home

**HOME-01 — Hero.** *Aspect ratio 16:9.*
Two weathered 1970s Land Rovers parked on a red dirt road in African savanna at golden hour, a large baobab tree on the horizon, dust hanging in the warm light. Four white Rhodesian soldiers in plain olive field clothing stand beside the vehicles seen from behind, looking toward the horizon; one of them is noticeably taller and broader than the others. The scene is calm and patient, as if they have been waiting a long time.

**HOME-02 — Security.** *Aspect ratio 16:9.*
A small team in tactical gear with slung carbines walking toward an old, unmarked Soviet-era twin-engine transport helicopter with faded olive-drab paint waiting on a dusty landing zone at golden hour, dust in the air. Seen from behind, faces not visible.

**HOME-03 — Hospitality.** *Aspect ratio 16:9.*
A simple, elegant bar on a wooden deck by the sea at sunset, a single glass of beer on the counter, an empty chair, warm golden light, a calm ocean in the background.

**HOME-04 — Real Estate.** *Aspect ratio 16:9.*
Aerial photograph of a tiny sandbank island in turquoise Caribbean water with a single small modern building and a short wooden jetty, low tide revealing pale sand, late afternoon light.

### Over ons

**OVER-01 — Geschiedenis.** *Aspect ratio 16:9.*
An old wooden table in an abandoned colonial farmhouse kitchen, a yellowed newspaper and an empty coffee cup on it, a notebook with handwritten notes, warm light falling through shutters. Quiet, nostalgic, documentary.

**OVER-02 — Pamwe chete.** *Aspect ratio 16:9.*
Four pairs of worn military boots standing side by side on red earth, shot low to the ground, golden backlight, long shadows.
Op Over ons, bij de kernwaarden. Gemini maakt bij deze prompt steeds twee of drie paar; het vierde paar is er met een bewerking bij gezet (zie het manifest).

### Raad van bestuur

Gebruik voor alle vier hetzelfde decor en licht, en alleen de details uit de canon. Dit zijn voorlopig silhouetten; echte gezichten pas na een nieuw besluit (zie `docs/beslissingen.md`). Maak geen AI-portretten op basis van foto's van echte teamleden.

**LEAD-basis** (zet dit voor elk portret):
Formal executive portrait in a dark boardroom with a large window behind, the man silhouetted against warm evening light, face in deep shadow and not recognizable, wearing a dark suit. The man is white. Exactly one person in the image, nobody else in the room. *Aspect ratio 4:5.*

- **LEAD-01 — Frederik:** A very tall, broad man standing upright, almost filling the frame, completely still.
- **LEAD-02 — Hayo:** A man seated at the boardroom table, a folded map and an open notebook in front of him, a pen in his hand.
- **LEAD-03 — Jochem:** A man standing beside a closed dark wooden chest with iron bands, one hand resting on it.
- **LEAD-04 — Robert:** A man standing by the window with a coffee cup, half turned away, relaxed but alert.

### Diensten

**DIEN-01 — Security.** *Aspect ratio 16:9.*
Security operators with slung carbines beside a convoy of three unmarked dark 4x4 vehicles on a dusty road at dawn, one man scanning the horizon, the others standing ready. Seen from behind and from the side, faces turned away or hidden by caps and sunglasses. Calm, professional and controlled.

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

### Tactisch

De tactische beelden laten paraatheid en beveiliging zien, nooit een gevecht. Wapens hangen aan de draagriem of wijzen naar de grond. Helikopters zijn oude Sovjettransporthelikopters in verbleekt olijfgroen, zonder sterren, nummers of andere markeringen. Voertuigen zijn ongemarkeerd. De helikopter is alleen beeld en hoort niet bij het verhaal. Gezichten zijn van achteren, in de schaduw of achter pet en zonnebril.

**TACT-01 — Mijnbouw.** *Aspect ratio 16:9.* Hero van Sectoren.
A security guard with a slung rifle seen from behind on a raised earth berm overlooking an open-pit mine at sunrise, binoculars in hand, heavy machinery small in the distance, a chain-link fence with razor wire in the foreground.

**TACT-02 — Briefing.** *Aspect ratio 16:9.* Hero van Ethiek en compliance.
A briefing on the hood of a dusty 4x4 vehicle in early morning light: a paper map spread out, hands pointing at it, a compass, a radio and a pair of gloves on the map. Men in tactical vests around the vehicle, visible only from the chest down. The map has no readable text.

**TACT-03 — Helikopter.** *Aspect ratio 16:9.* Hero van Wereldwijd.
A single old, unmarked Soviet-era twin-engine transport helicopter with faded olive-drab paint flying low over African savanna at golden hour, seen from behind and slightly above, its shadow on the grass, a few acacia trees, dust and haze.

### Iconen

Geen Gemini, maar een eigen set lijniconen in SVG, één per divisie. Gebruik een stroke van 1,5 px op een raster van 24 px, ronde uiteinden en de kleur `currentColor`, zodat het icoon de tekstkleur overneemt. Houd ze eenvoudig en herkenbaar op 24 px.

### Wereldwijd

**WERELD-01 — Kaart.** *Aspect ratio 16:9.*
A dark, minimal world map made of fine gold lines on a near-black background, with small glowing dots in many locations around the globe. Clean, corporate, no country names, no text.

**WERELD-02 — Hoofdkantoor.** *Aspect ratio 16:9.*
A modern glass meeting room on a tiny island at dawn, a long table with four chairs, the ocean visible on all sides, the sea calm and almost touching the floor.

### Werken bij

**WERK-01 — Werken bij.** *Aspect ratio 16:9.* Wordt ook gebruikt in het wervingsblok op de homepage.
A group of people in practical outdoor gear seen from behind, walking into a forest at early morning, mist between the trees, soft golden light. Purposeful, a team.

### Inzichten

**NEWS-basis** (pas het onderwerp per artikel aan):
*Aspect ratio 16:9.* Documentary-style photograph related to [onderwerp], same color grading as the rest of the series, people only as silhouettes or from behind.

Onderwerpen per inzicht (de volledige prompts staan in het manifest):

- **NEWS-01 — ISO 18788.** A tall stack of thick ring binders and an application folder in a wire inbox tray on a desk in an empty office, a thin layer of dust on top, late afternoon light through blinds.
- **NEWS-02 — Veestapel.** A small herd of goats resting in the shade of a cactus fence in dry Caribbean scrubland, one goat looking calmly at the camera, warm low sun.
- **NEWS-03 — NAVO-norm.** A long conference table in a grand empty hall with rows of empty chairs and small blank name stands, evening light through tall windows.
- **NEWS-04 — Opdracht 1979.** A closed dark wooden chest with iron bands standing alone on a concrete floor in a dim storeroom, a single beam of warm light falling on it. The chest is shut.
- **NEWS-05 — Divisie Benelux.** A small team in green tactical gear with slung rifles moving through a damp Northern European pine forest in autumn, fallen leaves, mist between the trees, seen from behind.
- **NEWS-06 — Inflatie Bonaire.** An old mechanical adding machine with a long paper roll on a wooden desk, sunlight through shutters, a Caribbean harbor blurred outside the window.
- **NEWS-07 — Wintertijd.** A simple wall clock with plain tick marks and no numerals, hands at six o'clock, above a table with a field radio and a cup of coffee in a dark room before dawn, a single lamp.
- **NEWS-08 — Reservisten.** A neat row of packed rucksacks and helmets lined up against a wall in a quiet barracks corridor at dawn, boots placed in front of each one.
- **NEWS-09 — Vernieuwde website.** A laptop open on a folding field table inside a canvas tent, the screen glowing softly and blurred, a field radio and a folded paper map beside it, morning light at the tent opening.
- **NEWS-10 — Conflict Benelux (analyse).** A paper map of a forested area spread on a table with colored pins and red string, a magnifying glass and a pencil, lit by a desk lamp.
- **NEWS-11 — Evacuatie Kinshasa (casestudy).** A large stainless steel commercial fryer strapped onto the bed of an old flatbed truck at dawn on a wide, quiet avenue, two men in work clothes tightening the straps, seen from behind. Calm and orderly.
- **NEWS-12 — Rapport 412.** An old typewriter with a sheet of paper, carbon copies, a rubber stamp and a sealed envelope on a desk in a dim office, a radio set in the background. The paper is blank or blurred.
- **NEWS-13 — Stand-By Outlook 2026.** An old military field radio on a wooden table in a dark room at dawn, the handset resting on top, a small red indicator light glowing, a cup of coffee beside it. A sense of waiting.

- **NEWS-14 — Vervangingsplan wagenpark.** Two weathered, unbadged 1970s four-wheel-drive utility vehicles with their bonnets open inside a dim, orderly workshop, tools laid out neatly on a wooden workbench, a single hanging lamp casting warm light, dust in the air. No people.
- **NEWS-15 — Vliegvergunning Antonov.** An old single-engine Soviet-era biplane without any markings standing on a sandbar at the edge of a turquoise Caribbean sea at low tide, small waves breaking gently against its fuselage like a breakwater, warm late-afternoon light.
- **NEWS-16 — Decisive Mining.** An open-sided sorting shed with a corrugated metal roof against a grey rocky hillside in the Angolan highlands at sunrise, wooden crates filled with pale quartz stones glinting in the low light, a small mine entrance in the rock behind. No people.
- **NEWS-17 — Bevrijdingsdag.** A large white marquee tent with neat rows of empty chairs on a swept square in front of a simple, well-kept village school building against a green hillside in Eswatini, warm evening light, the school windows glowing with electric light. Dignified and peaceful, no people visible.
