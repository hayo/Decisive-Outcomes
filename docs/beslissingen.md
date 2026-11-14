# Beslissingen

Wat is besloten, wanneer en waarom. Nieuwe beslissingen komen bovenaan in de tabel van hun onderwerp. Wordt een beslissing teruggedraaid, dan streep je hem niet weg: je zet een nieuwe regel erboven.

## Verhaal

| Datum | Besluit | Reden |
|---|---|---|
| 2026-11-11 | Drie nieuwe hoofdstukken in Deel 1: 7 *De kwartsmijn* (Angola 1989), 10 *Bevrijdingsdag* (Swaziland 1992) en 14 *Klein Klein Bonaire* (1999). De latere hoofdstukken zijn vernummerd; Sierra Leone is nu hoofdstuk 13. Het eerste stuk van *Van kamp naar concern* is ingekort, omdat het kaartspel nu in hoofdstuk 14 staat. Nieuwe verzonnen figuren: mestre Domingos, Make Simelane en Shon Ernesto. | Gekozen door Hayo, om het corpus te vergroten. De lokale figuren zijn slim en winnen de deal. |
| 2026-11-11 | Annelies Brouwer komt van een communicatieafdeling van een ministerie in Den Haag. Ze ergert zich aan concepten die niet worden goedgekeurd, Hayo's bijlagen en Roberts productplaatsing. Haar frustratie staat in de noot en in een enkel subtiel zinnetje in het persbericht zelf. Uitgewerkt in de root-`CLAUDE.md`. | Antwoorden van Hayo. |
| 2026-11-10 | Figuren die op echte mensen zijn gebaseerd (Viktor Bout, Neall Ellis) krijgen verzonnen namen: Arkadi Morozov en Gavin Laurie. | In het verhaal doen en zeggen ze dingen die de echte personen nooit deden. |
| 2026-11-10 | Hoofdstuk 11 (Sierra Leone 1998–1999) is serieus, zonder grappen over de oorlog. | Echte oorlogen en slachtoffers zijn nooit de grap. |
| 2026-11-10 | Geen slapstick en geen A-Team-verwijzingen; droge, corporate humor. | Slapstick maakt het verhaal goedkoper en minder geloofwaardig. |
| 2026-11-10 | Twee delen: Deel 1 (hoe het begon) als spannend boek, Deel 2 (het concern van nu) als jaarverslag. | Het begin en het wereldwijde concern van nu moeten niet door elkaar lopen. |
| 2026-11-10 | De inhoud van de kist wordt nooit onthuld. | Het is de spanningsboog van het hele verhaal. |
| 2026-11-10 | Het verhaal staat als Markdown in `verhaal/backstory.md`; de ODT is verwijderd. | Leesbaar op GitHub, klein, en wijzigingen zijn per alinea te volgen. |

## Website

| Datum | Besluit | Reden |
|---|---|---|
| 2026-11-14 | Annelies Brouwer mag enigszins negatief zijn over de directie: afstand nemen van besluiten, feiten noemen die de directie niet uitkomen, genegeerde adviezen vermelden. Zakelijk en beleefd, nooit persoonlijk. | Gekozen door Hayo. |
| 2026-11-14 | Annelies Brouwer krijgt een stemming die over de persberichten heen oploopt (veld `stemming`, 1 t/m 5), een wisselende bereikbaarheid in het persblok (veld `bereikbaar`) en ruimte voor cynische bijzinnen over de directie. Dit vervangt de regel van hooguit één of twee zinnetjes per bericht. Bestaande berichten blijven zoals ze zijn. | Gekozen door Hayo: haar stemming mag meer doorklinken. |
| 2026-11-13 | Persberichten en inzichten zijn Markdown-bestanden met een kop tussen `---`, gelezen door een eigen kleine omzetter in `includes/inzichten.php`. Eén `router.php` bouwt persberichten, inzichten, overzichten, divisies en sectoren op; de dertig losse `index.php`-bestanden van vier regels zijn weg. | Nieuws toevoegen is nu één bestand neerzetten. Markdown schrijft makkelijker dan PHP met HTML, ook in de GitHub-editor, en er komt geen afhankelijkheid bij. |
| 2026-11-11 | Alle teksten op de site uitgebreid tot de lengte van een echte PMC-site: divisies (met aanpak en feitentabel), sectoren, Over ons (governance, Stand-By-overleg, embleem), Ethiek, Wereldwijd, Werken bij, algemene voorwaarden, persberichten en inzichten. Nieuw: de pagina *Ons verhaal*, een jaarverslag 2025 op Investor relations en vier persberichten. Geen veldrollen en geen uitrusting van het echte team op de site. | De teksten lazen als placeholder. Keuzes van Hayo. |
| 2026-11-11 | *Ons verhaal* staat op `/over-ons/ons-verhaal/`, als verkorte corporate versie van Deel 1, niet het volledige verhaal. | Past binnen het paginabudget; het volledige verhaal blijft in de repo. |
| 2026-11-11 | Koppen (`h1`, `h2`) krijgen `hyphens: auto` en `overflow-wrap: break-word`. | Lange Nederlandse woorden in hoofdletters liepen op 320 px uit beeld. |
| 2026-11-10 | De site staat bij Strato in de root van de webruimte; het domein wijst naar `/public/`. | Eenvoudig, en `includes/` en `content/` staan zo buiten de documentroot. |
| 2026-11-10 | Alleen host, gebruiker, wachtwoord en host key zijn GitHub Secrets; poort en pad staan in `deploy.yml`. Alleen SFTP, geen FTPS meer. | De rest is niet geheim en zo makkelijker te lezen en aan te passen. De server heeft SFTP. |
| 2026-11-10 | Uitrollen via de branch `deploy`: elke push daarnaartoe gaat live (`git push origin main:deploy`). Een push naar `main` rolt niet meer uit. | Zelf bepalen wanneer iets live gaat, zonder testomgeving. |
| 2026-11-10 | Aanspreekvorm: *u* voor opdrachtgevers en de corporate delen (ook de 404), *je* voor sollicitanten, spelers en alles wat echt is (contact, formulier, privacy, meedoen). | Echte PMC-sites spreken klanten met u aan; het echte deel van de site is persoonlijk. |
| 2026-11-10 | Inzichten krijgen overzichtspagina's per soort (`/newsroom/`, `/inzichten/analyse/`, `/casestudy/`, `/rapport/`) met een filterrij van gewone links. | Filteren zonder JavaScript, en elke soort heeft een eigen adres. |
| 2026-11-10 | Elke sector krijgt een eigen pagina onder `/sectoren/<sector>/`. Divisiepagina's linken naar hun sectoren, de casestudy en de inzichten met dezelfde divisie (veld `divisies`). | Zo is de site opgebouwd als die van echte PMC's, en de pagina's verwijzen naar elkaar. |
| 2026-11-10 | De *Stand-By Outlook* is ook als PDF te downloaden. De PDF wordt met Playwright uit de printweergave gemaakt en staat in `public/assets/docs/`. | Echte jaarrapporten zijn een PDF. Geen build-stap: de PDF wordt opnieuw gemaakt als de tekst verandert. |
| 2026-11-10 | Meedoen: het team speelt meestal op Combat City in Leiderdorp, op wisselende dagen. Vanaf 18 jaar, eerst een keer meespelen, huren op het veld kan. Aanmelden via het contactformulier. | Echte informatie van Hayo. |
| 2026-11-10 | Persberichten krijgen een optionele *Noot voor de redactie* en een perscontact: Annelies Brouwer, Corporate Communications (verzonnen). Daarin sijpelt haar frustratie over de raad van bestuur door. Een deel van de persberichten haakt in op het nieuws (NAVO-top, CBS-inflatie, wintertijd, reservisten), alleen op onderwerpen waar de grap bij het team ligt. | Echte persberichten hebben die opbouw, en de grap blijft in de bijzin. Actualiteit maakt de newsroom geloofwaardig. |
| 2026-11-10 | Header met het witte beeldmerk en de woordnaam; volledig logo in de footer. Mobiel menu als `details`/`summary`, op desktop een rij via `::details-content`. | Strakker en meer corporate dan het ronde logo klein in de header. Het menu werkt zonder JavaScript. |
| 2026-11-10 | Het logo mag ook als beeldmerk worden gebruikt: alleen het embleem, in wit, goud, zwart, metallic of de originele kleuren. | Afspraak van Hayo; past beter bij de PMC-stijl. |
| 2026-11-10 | De website mag in kleur afwijken van het logo als dat beter past bij de PMC-stijl. Het logo blijft ongewijzigd; contrasteisen blijven gelden. | Echte PMC-sites gebruiken een neutrale basis met één accent; de logokleuren zijn daarvoor niet per se de beste keuze. |
| 2026-11-10 | Het logo opgeschoond: egale huisstijlkleuren zonder compressieruis, embleem 7 procent kleiner zodat de vleugels niet in de rode ring lopen, 1880 px. | Netter, en de vleugels liepen in het rood. |
| 2026-11-10 | Het logo is het originele ontwerp, alleen rond uitgesneden met een transparante achtergrond. Geen nagetekende versies. | De nagetekende versies waren niet goed genoeg. |
| 2026-11-10 | Portretten van het bestuur voorlopig als silhouet, zonder herkenbare gezichten. Echte foto's (zelf gefotografeerd, in dezelfde kleurbewerking) kunnen later, als alle vier akkoord zijn met hun personage. Geen AI-portretten op basis van echte gezichten. | Geen privacyrisico en geen realistische nepbeelden van echte personen. Echte PMC-sites tonen wel gezichten; dat blijft een bewuste afwijking. |
| 2026-11-10 | Donkere hero over de volle breedte, lichte secties, vierkante vormen, gouden knoppen op donker, donkere footer. Oswald alleen voor `h1`, `h2` en cijfers. | Zo zien echte PMC-sites eruit, na visuele controle in Chrome (zie [onderzoek-pmc-sites.md](onderzoek-pmc-sites.md)). |
| 2026-11-10 | Sitemap aangepast naar het onderzoek: een pagina Sectoren, Newsroom wordt Inzichten met de *Stand-By Outlook* als vlaggenschip, werving hoog op de homepage, een contactknop in de header, kaarten in 16:9, lijniconen per divisie en een uitgebreide compliancepagina zonder echte keurmerken. | Zo lijkt de site meer op echte sites van PMC's en beveiligingsbedrijven (zie [onderzoek-pmc-sites.md](onderzoek-pmc-sites.md)). |
| 2026-11-10 | Het logo voorlopig als PNG; de SVG is verwijderd. | De SVG was niet goed genoeg. |
| 2026-11-10 | Beelden als gewone JPEG in twee breedtes; de originelen staan in de repo. | Een build-stap voor AVIF en WebP werd te groot voor het project. |
| 2026-11-10 | Het logo komt nooit in een beeld. AI-gebruik wordt alleen in het colofon vermeld. | Rustiger beeld, en één duidelijke plek voor de verantwoording. |
| 2026-11-10 | Echte foto's van speeldagen mogen, met vastgelegde toestemming. | Echte foto's maken de site levendig, maar zonder toestemming kan het niet. |
| 2026-11-10 | Beelden worden gemaakt met Gemini via Google AI Studio of de API. | Meer controle over formaat en resolutie dan in de app. |
| 2026-11-10 | Beelden maken we met `gemini-3-pro-image` via de API, in 4K. Originelen gaan als JPEG van 2400 px breed (kwaliteit 92) in de repo, niet het volle 4K-bestand. | Gemini levert JPEG van zo’n 8 MB per beeld; 2400 px is het minimum voor een hero en houdt de repo klein. |
| 2026-11-10 | Een beeld mag horizontaal gespiegeld worden als er geen tekst of asymmetrisch herkenbaar detail in staat. Dat staat dan in het manifest. | De tekst in de hero staat links; het onderwerp hoort rechts. |
| 2026-11-10 | De vier oprichters staan in beeld als witte mannen; in de prompts heten ze *white Rhodesian soldiers*. | Zo zien de teamleden eruit, en het past bij het verhaal (Rhodesische militairen in 1979). |
| 2026-11-10 | Meer tactische beelden: beveiligers met wapens, konvooien en helikopters, bij Security en als hero van Sectoren, Ethiek en compliance en Wereldwijd. Paraatheid, nooit een gevecht; wapens aan de draagriem of naar de grond; gezichten mogen achter pet en zonnebril. | Echte PMC-sites tonen tactisch werk. Hoe serieuzer de beelden, hoe beter de grap elders werkt. |
| 2026-11-10 | Helikopters op de beelden zijn oude, ongemarkeerde Sovjettransporthelikopters. Ze zijn alleen beeld: de groep heeft in het verhaal geen helikopter. | Past bij de sfeer (Morozov, de Antonov) zonder iets aan de canon toe te voegen. |
| 2026-11-10 | Alleen een productieomgeving. Deploy via GitHub Actions met SFTP, of FTPS als dat niet kan. | Eenvoudig. Lokaal testen met `php -S` vervangt een testomgeving. |
| 2026-11-10 | Teksten worden aangeleverd en door Claude omgezet naar pagina's en persberichten. | Het team schrijft, de opmaak blijft consequent. |
| 2026-11-10 | Snelheid weegt zwaar, met harde budgetten per pagina. Mobile-first en responsive. | De site moet op mobiel direct laden. |
| 2026-11-10 | WCAG 2.2 AA verplicht, AAA waar mogelijk. Lopende tekst minimaal 7:1 contrast. | Toegankelijkheid is een uitgangspunt, geen extraatje. |
| 2026-11-10 | Licht corporate ontwerp. Goud `#D4A94F` alleen voor vlakken en lijnen; gouden tekst in `#6B5218`. | Goud op wit haalt maar 2,2:1 contrast. |
| 2026-11-10 | Lettertypes: Oswald voor koppen en Source Sans 3 voor tekst, self-hosted. | Oswald past bij het logo, Source Sans 3 leest rustig. Geen externe verzoeken. |
| 2026-11-10 | Geen cookies, trackers of externe verzoeken. AI-crawlers worden geblokkeerd. | Privacy en snelheid. |
| 2026-11-10 | Een echt PHP-contactformulier, zonder cookies, beschermd met een honeypot, een tijdscontrole en een HMAC-token. | Echt contact is nodig; een sessiecookie niet. |
| 2026-11-10 | Strikte CSP, OWASP Top 10 en de relevante ASVS-controles. | Een veilige basis voor een publieke site met een formulier. |
| 2026-11-10 | Handgeschreven HTML, CSS en PHP 8 op Apache. PHP-includes voor herbruikbare onderdelen. Geen build-stap. | Compact, snel en zonder afhankelijkheden. |
| 2026-11-10 | De site ziet eruit als die van een echte PMC; de humor zit alleen in de details. Overal een duidelijke disclaimer. | Hoe serieuzer de verpakking, hoe beter de grap. Maar niemand mag denken dat het echt is. |

## Repo

| Datum | Besluit | Reden |
|---|---|---|
| 2026-11-10 | Licentie: de code van de website onder MIT; teksten, logo en beelden met alle rechten voorbehouden. *Voorstel, nog te bevestigen.* | De code mag iedereen gebruiken; de personages zijn echte mensen. |
| 2026-11-14 | Commits van Claude mogen een vermelding van Claude bevatten (`Co-Authored-By`, sessielink). Vervangt het besluit van 10 november. | Zonder die vermelding kon Claude niet pushen. |
| 2026-11-10 | Commits als Hayo, zonder vermelding van Claude. *Vervangen op 14 november.* | Het is het project van het team. |
| 2026-11-10 | Direct committen op `main`. | Klein team, geen reviewproces nodig. |
| 2026-11-10 | Alles in het Nederlands. | Het team en het publiek zijn Nederlands. |
