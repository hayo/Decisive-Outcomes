# Beslissingen

Wat is besloten, wanneer en waarom. Nieuwe beslissingen komen bovenaan in de tabel van hun onderwerp. Wordt een beslissing teruggedraaid, dan streep je hem niet weg: je zet een nieuwe regel erboven.

## Verhaal

| Datum | Besluit | Reden |
|---|---|---|
| 2026-11-10 | Figuren die op echte mensen zijn gebaseerd (Viktor Bout, Neall Ellis) krijgen verzonnen namen: Arkadi Morozov en Gavin Laurie. | In het verhaal doen en zeggen ze dingen die de echte personen nooit deden. |
| 2026-11-10 | Hoofdstuk 11 (Sierra Leone 1998–1999) is serieus, zonder grappen over de oorlog. | Echte oorlogen en slachtoffers zijn nooit de grap. |
| 2026-11-10 | Geen slapstick en geen A-Team-verwijzingen; droge, corporate humor. | Slapstick maakt het verhaal goedkoper en minder geloofwaardig. |
| 2026-11-10 | Twee delen: Deel 1 (hoe het begon) als spannend boek, Deel 2 (het concern van nu) als jaarverslag. | Het begin en het wereldwijde concern van nu moeten niet door elkaar lopen. |
| 2026-11-10 | De inhoud van de kist wordt nooit onthuld. | Het is de spanningsboog van het hele verhaal. |
| 2026-11-10 | Het verhaal staat als Markdown in `verhaal/backstory.md`; de ODT is verwijderd. | Leesbaar op GitHub, klein, en wijzigingen zijn per alinea te volgen. |

## Website

| Datum | Besluit | Reden |
|---|---|---|
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
| 2026-11-10 | Commits als Hayo, zonder vermelding van Claude. | Het is het project van het team. |
| 2026-11-10 | Direct committen op `main`. | Klein team, geen reviewproces nodig. |
| 2026-11-10 | Alles in het Nederlands. | Het team en het publiek zijn Nederlands. |
