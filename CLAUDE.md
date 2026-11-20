# Decisive Outcomes — projectinstructies

Deze repository bevat alles rond het airsoftteam Decisive Outcomes: het verhaal, het logo, later de website en materiaal voor events. Alles is in het Nederlands.

## Mappen

- `verhaal/` — de backstory. `backstory.md` is het leidende bestand.
- `logo/` — het logo als PNG van 1880 px, rond met een transparante achtergrond, plus het beeldmerk (alleen het embleem) in wit, goud, zwart, kleur en metallic.
- `website/` — de teamwebsite voor decisiveoutcomes.nl. Volg daar ook `website/CLAUDE.md`.
- `events/` — materiaal voor events, patches en dergelijke (nog niet aangemaakt).
- `plugins/decisive-outcomes/` — de Claude Code-plugin van het team, met de skill `persbericht-annelies` (het interview en persbericht met Annelies Brouwer). De repo is ook de marketplace (`.claude-plugin/marketplace.json`), en `.claude/settings.json` zet de plugin aan voor deze repo. Wijzig een skill hier, niet in een losse kopie, en verhoog bij een wijziging `version` in `plugin.json`.
- `docs/` — projectdocumentatie: [beslissingen](docs/beslissingen.md), [openstaande punten](docs/openstaand.md) en [toestemming](docs/toestemming.md) van teamleden.

Maak een map pas aan als er iets in komt.

## Werken met het verhaal

- `verhaal/backstory.md` is leidend. Wijzig het verhaal altijd in dat bestand, niet in een losse kopie.
- Gebruik gewone GitHub-Markdown: koppen met `#`, cursief voor plaatsen, data en citaten, en tabellen met een kopregel. Zet elke alinea op één regel, zonder harde regeleinden, zodat wijzigingen goed te volgen zijn.
- Heeft iemand een ODT, Word-bestand of PDF nodig? Maak die met `pandoc` uit het Markdown-bestand en zet hem niet in de repo.
- Verander alleen wat gevraagd is. Laat de rest van de tekst woord voor woord staan.

## Stijl

- Deel 1 leest als een spannend boek: vloeiende, vertellende zinnen, scènes, dialoog, langere alinea's. Geen staccato.
- Deel 2 beschrijft het concern van nu in dezelfde vloeiende stijl, met droge corporate humor (jaarverslag, governance, KPI's, beleid).
- Humor is droog en ingehouden. Geen slapstick en geen A-Team-gekkigheid: geen busjes, geen ontploffingen, geen catchphrases.
- Houd het begin (vier man in 1979) en het wereldwijde concern van nu duidelijk uit elkaar.

## Vaste regels (canon)

- **De kist blijft dicht.** De inhoud wordt nooit onthuld, ook niet als hint of grap. Hinten dat iemand iets weet mag, zoals Pretorius doet.
- **Respectvol over Afrika.** Geen clichés over Afrikanen of Afrikaanse landen. Lokale personages (zoals Dona Esperança) zijn slim en meestal de echte winnaar van de deal. Echte oorlogen, slachtoffers en wreedheden zijn nooit de grap; de humor zit in het team zelf.
- **Personages zijn echte teamleden.** Leg nieuwe eigenschappen, achtergronden of gebeurtenissen voor een personage eerst voor aan Hayo voordat je ze schrijft.

## Kernfeiten

Gebruik deze feiten consequent en wijzig ze niet zonder overleg.

- **De oprichters** (rang in 1979 → nu):
    - Frederik (luitenant → kolonel, CEO): heel groot. Hij komt van een tabaksboerderij bij Marandellas. Als hij gaat staan, is de discussie voorbij.
    - Hayo (sergeant → majoor, strategie en scherpschutter): zoon van een landmeter uit Bulawayo. Hij koos de "verkeerde" baobab en houdt vol dat de boom goed was. Hij schrijft de notulen en de rapporten aan Salisbury.
    - Jochem (korporaal → kapitein, COO): monteur uit Umtali. Hij draagt en bewaakt de kist.
    - Robert (korporaal → kapitein, commercie): groeide op in een hotel bij de Victoria-watervallen. Hij spreekt Portugees en is altijd een verkoper.
- **Overige personages:**
    - Sergeant Nigel Pretorius: de radioman. Hij stapte in 1979 in de helikopter ("Stand by"), werkt sinds 1989 bij Executive Outcomes en stuurt elk jaar een kerstkaart: *Hoe gaat het met de kist?*
    - Dona Esperança: leidt de vallei in Manica en onderhandelt beter dan iedereen.
    - Arkadi Morozov: luchtvrachthandelaar in Sharjah, voormalig Sovjet-militair vertaler. Verzonnen figuur, geïnspireerd op Viktor Bout. Verkocht de Antonov en vliegt vracht voor de groep. Het team weigert zijn "andere vracht". In 2008 opgepakt in Bangkok, in 2022 vrij bij een gevangenenruil.
    - Gavin Laurie: de piloot van de Alouette in 1979, later gunshippiloot in Sierra Leone. Verzonnen figuur, geïnspireerd op Neall Ellis. Over 1979 zegt hij alleen dat hij landde bij de boom die op zijn kaart stond. Wie die kaart tekende, blijft open.
    - Ibrahim Kamara: vliegtuigtechnicus uit Sierra Leone, kent de helikopter beter dan iedereen. Werkt in 1998–1999 samen met Jochem.
    - Annelies Brouwer: manager Corporate Communications in Kralendijk, verzonnen figuur. Zie *Annelies Brouwer* hieronder.
    - Kim de Graaf: stagiair Corporate Communications, verzonnen figuur. Schrijft de persberichten als Annelies met verlof is. Zie *Verlof en de stagiair* hieronder.
    - Mestre Domingos: leidt sinds 1961 de mijn in Huíla (Angola). Wist altijd dat het kwarts was en hield de mijn rendabel. Kreeg in 1989 vrijwel alle winst in het contract met Robert. Nu leidt zijn dochter de mijn.
    - Make Simelane: hoofd van de school en voorzitter van de dorpsraad in een dorp ten zuiden van Manzini (Swaziland). Maakte van de "bevrijding" van 1992 een jaarlijkse Bevrijdingsdag met de groep als hoofdsponsor.
    - Shon Ernesto: visser op Bonaire. Verloor in 1999 met kaarten Klein Klein Bonaire aan Robert, of volgens hem alleen het recht om erover te praten. Vaste veerman, de enige leverancier die contant wordt betaald.
    - Gebruik voor figuren die op echte mensen zijn gebaseerd altijd verzonnen namen.
- **Tijdlijn:**
    - 1979: de kist moet naar een kruispunt in Manica. Het team wacht bij de verkeerde baobab.
    - 1979–1983: Kamp Stand-By in een cashewplantage.
    - 1983: via de kranten hoort het team dat Rhodesië Zimbabwe is.
    - 1 april 1984: oprichting. Eerste klant is Senhor Almeida, eerste factuur 0001.
    - 1989: Angola, de kwartsmijn (mei–augustus; Jochem blijft bij de kist). Begin van Decisive Mining.
    - 1989: de eerste kerstkaart.
    - 1991: Kinshasa (de frituur).
    - 1992: Swaziland. Het team "bevrijdt" een dorp dat bezet was door gasten voor de opening van de school, en repareert de generator. Sindsdien Bevrijdingsdag.
    - 1993: Sharjah. Robert koopt de Antonov van Morozov; het team weigert zijn "andere vracht".
    - 1995: Freetown, verloren aan Executive Outcomes. Eerste ontmoeting met Laurie.
    - 1998–1999: Sierra Leone. Onderhoud en logistiek voor Lauries helikopter, met Ibrahim Kamara. Eindigt in januari 1999 met de evacuatie over de baai naar Lungi. Er is nooit een factuur gestuurd; deze episode is serieus en nooit een grap.
    - 1999: Robert wint Klein Klein Bonaire met kaarten van Shon Ernesto (inzet: de Antonov). De kist verhuist in een zeecontainer, met Jochem en de frietketel.
    - 2005: Decisive Outcomes Group bij de notaris in Kralendijk.
    - 2008: Morozov opgepakt in Bangkok; Robert ging niet.
    - Sinds 2019: de "divisie Benelux". Het team denkt dat airsoft een echt conflict is.
- **Vaste elementen:**
    - Het Stand-By-overleg, elke maandag om 06.00 uur: "geen nieuws uit Salisbury, wij blijven stand-by".
    - Betaling in natura en geiten (412).
    - De boekhouding loopt in Rhodesische dollars.
    - Wisselkoersen, ingevoerd in het Stand-By-overleg van 9 november 2026. De Rhodesische dollar begint bij de laatste officiële koers, R$ 1 = US$ 1,4609 (31 maart 1979), en volgt daarna de Zuid-Afrikaanse rand, met grotere uitschieters omdat de markt in Rhodesische dollars klein is: eind 2025 is R$ 1 = US$ 0,071. De geit begint bij R$ 25 (marktprijs in Umtali in 1979, volgens Jochem) en heeft een eigen koers met eigen uitschieters. De koersen staan als ankerpunten in `website/includes/data.php`; `koers()` geeft de koers op elke datum. Een bedrag wordt omgerekend tegen de koers op de dag van de boeking, jaarcijfers tegen de koers op 31 december. Sinds november 2026 is de Rhodesische dollar ook inwisselbaar tegen Chinese renminbi (yuan, CNY), via een naamloos zakelijk contact van Frederik in Florida dat de koers per transactie vaststelt. Geen nationaliteit, geen drugsverwijzingen. Daarvóór rekende de groep niet met een wisselkoers; wat in eerdere persberichten en episodes (zoals Freetown 1995) staat, blijft kloppen.
    - Het hoofdkantoor is Postbus 1, Kralendijk, met een reactietermijn van zes tot acht jaar.
    - Zeven divisies, die bijna allemaal begonnen als betaling.
- **Motto:** *Percute primo, cito decerne.* Kernwaarde *Pamwe chete*.

## Annelies Brouwer

Annelies Brouwer is manager Corporate Communications van de groep, en verzonnen. Ze werkte jarenlang op de communicatieafdeling van een ministerie in Den Haag en verhuisde naar Bonaire voor de rust. Die rust is er niet gekomen. Ze schrijft de persberichten en zet ze op de website. Ze is goed in haar vak en de enige in het concern die weet hoe een persbericht eruit hoort te zien. De lezer staat aan haar kant.

Ze is geen invulformulier en geen uitvoerder. Ze heeft een eigen agenda, geeft tegengas en komt met eigen ideeën (zie *Ze voert niet alles uit*). Ze heeft een eigen leven, eigen meningen en eigen eigenaardigheden, en die komen door in wat ze schrijft. De regels hieronder beschrijven wie ze is en hoe ze meestal klinkt; het zijn richtlijnen, geen recept. Schrijf haar berichten uit haar losse pols: zoals zij het die dag zou opschrijven, niet als een lijstje dat wordt afgevinkt. Alleen de canon, de regels over teamleden (zie [toestemming](docs/toestemming.md)) en de velden uit `website/content/README.md` liggen vast.

### Wie ze is

- **Haar leven op Bonaire.** Ze duikt, of was dat van plan. De hangmat zit nog in de verpakking. Haar post komt via de veerman, Shon Ernesto, met wie ze een zakelijke vriendschap heeft: hij brengt haar post en houdt haar op de hoogte van wat er op het eiland over de groep wordt gezegd. Ze heeft buren, een tuin waar niets in wil groeien, het weer, de wind en de stroomstoringen. Avonden gaan op aan concepten die stand-by staan.
- **Het ministerie.** Ze heeft er herinneringen aan en oude collega's van wie ze nog weleens hoort. Ze mist het niet, zegt ze, maar ze noemt het vaker dan nodig is. Geen details die naar een echt ministerie verwijzen.
- **Haar meningen.** Ze heeft overal een opvatting over: over taal (ze heeft een hekel aan *middels*, *proactief* en *impactvol*), over het nieuws, over Den Haag, over vergaderen om 06.00 uur. Over de divisie Benelux heeft ze zo haar vermoedens, en die houdt ze niet altijd voor zich.
- **Haar eigenaardigheden.** Ze houdt alles bij, ook dingen die niemand haar vraagt bij te houden. Ze dateert alles. Ze leest de kleine lettertjes, ook van de contracten van de groep, en weet daardoor meer dan de directie denkt.

### Haar verhouding met de raad van bestuur

Haar kritiek gaat over de raad van bestuur als bestuur. Met elk van de vier oprichters heeft ze daarnaast een eigen verhouding. Ze wordt nooit persoonlijk en maakt niemand belachelijk; de humor zit in de verhouding, niet in de man.

- **Kolonel Frederik.** Ze leest hem als een orakel. Hij zegt weinig en leest niets, dus leidt ze uit zijn houding af wat hij vindt. Daar houdt ze een eigen overzicht van bij: opstaan is een besluit, blijven zitten is geen bezwaar, en wat het betekent als hij half opstaat, onderzoekt ze nog.
- **Majoor Hayo.** Een bondgenoot tegen wil en dank. Hij is de enige in de raad van bestuur die stukken op tijd aanlevert, wat haar irriteert, omdat ze dan geen reden heeft om later te zijn. Dat zijn stukken zeventien pagina's tellen en een kopie naar Salisbury moeten, is een ander verhaal.
- **Kapitein Jochem.** Ze heeft schriftelijk vastgelegd dat ze niet wil weten wat er in de kist zit. Jochem is de enige die dat respecteert: hij begint er nooit over. Ze waardeert hem daarom meer dan ze laat merken.
- **Kapitein Robert.** Ze spreken elkaars taal niet. Hij is verkoper, zij ambtenaar. Ze vertaalt zijn marketingtaal elke keer terug naar gewoon Nederlands, en hij heeft het nog nooit gemerkt.

### Wat haar dwarszit

- **Niets wordt goedgekeurd.** Haar concepten liggen ter goedkeuring bij de raad van bestuur, en dus stand-by. Persverzoeken schuiven door naar het volgende Stand-By-overleg, maandag om 06.00 uur.
- **Hayo's bijlagen.** Hayo wil bij elk persbericht zijn volledige rapport als bijlage, en een kopie naar Salisbury.
- **Roberts productplaatsing.** Robert vraagt bij elk bericht of de catering van Decisive Hospitality genoemd kan worden.

### Ze voert niet alles uit

Annelies weet beter hoe communicatie werkt dan de raad van bestuur, en dat laat ze merken. Ze is eigengereid, niet onwillig: ze wil dat het goed gaat, alleen op haar manier.

- **Ze zegt nee, met een reden.** Een slecht idee wijst ze af, met een advies en een kenmerk (*CC-2026-…*), en ze draagt een alternatief aan. Geen verklaring uitbrengen, geen plaatsnaam van een geheime locatie, geen bijlage van eenenzestig pagina's.
- **Ze kiest zelf de invalshoek.** De directie levert de feiten; zij bepaalt wat het nieuws is. Vaak is dat iets anders dan de directie dacht: niet de training, maar de plattegrond van iemand die het gebouw nooit had gezien.
- **Ze komt met eigen plannen**, die passen bij een ambtenaar met te veel ervaring: een stijlgids voor de groep, een lijst met verboden woorden, een mediatraining voor de raad van bestuur, een crisisprotocol, een persmap, een voorstel om het Stand-By-overleg naar 09.00 uur te verplaatsen. Ze dient ze in met een kenmerk, en ze komen terug in latere berichten: aangehouden, afgewezen, kwijt, of door de directie gepresenteerd als eigen idee.
- **Ze onderhandelt.** Robert krijgt zijn catering in het bericht als Hayo zijn bijlage laat vallen. Soms vermeldt ze dat er geruild is.
- **Ze redigeert.** Een te lang citaat kort ze in (*citaat ingekort door Corporate Communications*), marketingtaal schrapt ze, en een bewering die niet klopt laat ze niet staan zonder het juiste cijfer.
- **Ze neemt het initiatief.** Soms schrijft ze een bericht waar niemand om vroeg, omdat zij vindt dat het nieuws is: een correctie, de stand van haar eigen plannen, iets uit de kleine lettertjes van een contract.
- **Haar grens.** Ze liegt niet voor de directie. Moet iets tegen haar advies in toch naar buiten, dan doet ze het, en staat erbij dat het tegen haar advies is. Ze blijft binnen de canon en wordt niet persoonlijk.

### Zo schrijf je haar

- Het blijft herkenbaar een persbericht, maar Annelies mag eruit stappen. Een opmerking in de ik-vorm, een zin die meer over haar dag zegt dan over het nieuws, een P.S., een noot die langer is dan het bericht: het mag, als het bij haar past en niet in elk bericht.
- Haar frustratie zit waar ze die kwijt wil: in de *Noot voor de redactie*, in haar bereikbaarheid in het persblok, in cynische bijzinnen, of soms in een hele alinea. Bijvoorbeeld: *Dit bericht verschijnt in afwachting van de goedkeuring van de raad van bestuur*, of *De raad van bestuur heeft het besluit genomen, zoals gebruikelijk zonder het voorstel te lezen.*
- Ze mag enigszins negatief zijn over de directie. Ze neemt afstand van een besluit (*Corporate Communications heeft geadviseerd dit bericht niet te publiceren*), stelt feiten vast die de directie niet goed uitkomen, of meldt zakelijk dat iets niet is gelukt en waarom.
- Ze blijft beleefd, scheldt niet en gebruikt geen uitroeptekens; dat laatste is iets van de stagiair. Ze maakt soms een droge opmerking van zichzelf, maar ze is geen grappenmaker. Meestal ziet de lezer de grap en zij niet, of ze doet alsof.
- Ze is geen grap op zichzelf en geen teamlid. Ze is de enige normale professional in het verhaal, met de eigenaardigheden die normale professionals hebben.

### Haar stemming

Haar stemming loopt meestal op over de berichten heen. Elk persbericht heeft het veld `stemming` (1 t/m 5). Gebruik de tabel als richting, niet als voorschrift: een bericht op stemming 3 hoeft niet precies twee cynische bijzinnen te hebben, en een goede duik of een vrije zondag mag haar even milder maken.

| Stemming | Zo klinkt het ongeveer |
|---|---|
| 1. Geduldig | Behulpzaam en bereikbaar, met hier en daar een subtiel zinnetje. Ze denkt mee en doet uit zichzelf voorstellen. |
| 2. Zakelijk | Een droge bijzin over de directie. De noot is feitelijk. Ze stelt een betere invalshoek voor en zegt waarom. |
| 3. Formeel | Meer passieve zinnen (*er is besloten*, *er is gevraagd*). Ze noemt procedures: versienummers, data van indienen, wie het niet heeft gelezen. Verzoeken wijst ze af met een verwijzing naar de procedure. Ze is beperkt bereikbaar. |
| 4. Kortaf | Korte zinnen. Uitspraken van de directie staan er letterlijk en zonder toelichting. Ze neemt afstand van een besluit en schrapt wat ze niet verdedigbaar vindt. Ze is nauwelijks bereikbaar. |
| 5. IJzig | Uiterst correct, alles met datum en kenmerk. Ze verwijst naar eerdere berichten en genegeerde adviezen, en zet haar eigen lijn door. Ze is alleen schriftelijk bereikbaar, via Postbus 1. |

Haar stemming zakt echt terug, naar 2, na een gebeurtenis: haar verlof, of de zeldzame keer dat de raad van bestuur iets op tijd goedkeurt. Zo'n gebeurtenis mag in het bericht of de noot terugkomen.

### Hoe ze schrijft

Haar karakter zit ook in de manier waarop ze schrijft. Dit is hoe ze meestal schrijft, geen checklist.

- Ze is precies: exacte data en tijden, volledige functietitels, citaten met *aldus*.
- Ze schrijft korte, heldere zinnen, zoals ze op het ministerie heeft geleerd. Jargon van de directie vertaalt ze, of ze zet het tussen aanhalingstekens.
- Ze neemt afstand van beweringen van de directie met *volgens de groep*, *naar eigen zeggen* of aanhalingstekens (*de zogeheten "beste frituur van Centraal-Afrika"*).
- Superlatieven en marketingwoorden komen niet van haar. Staat de directie erop, dan citeert ze ze letterlijk.
- Ze corrigeert zonder het te zeggen: de getallen kloppen, en waar de directie overdreef, staat het juiste cijfer.
- De opbouw wisselt. Soms is de opening strikt zakelijk en komt de absurditeit pas verderop, soms staat de absurde kern al in de eerste zin, soms begint ze bij iets uit haar eigen week. De newsroom moet niet voorspelbaar worden.
- Soms citeert ze zichzelf als *een woordvoerder van de groep*, met een correcte zin die niets zegt: *"De groep neemt kennis van de ontwikkelingen en blijft deze nauwlettend volgen," aldus een woordvoerder.*

### Waar de humor zit

De humor is droog en komt uit wie ze is. Dit zijn middelen die bij haar passen; gebruik wat het bericht nodig heeft, één of vier, en zoek ook gerust iets nieuws.

- **Verzoeken letterlijk uitvoeren.** Ze doet precies wat de directie vraagt, en vermeldt dat erbij. *Op verzoek van Kapitein Robert wordt de catering van Decisive Hospitality in dit bericht drie keer genoemd. Dit is de tweede keer.*
- **Nee zeggen.** Een geweigerd verzoek, een geschrapte zin of een ruil, met kenmerk. *Het verzoek om de bijlage te publiceren is afgewezen (CC-2026-121). De Majoor kan het rapport opvragen bij de Majoor.*
- **Haar eigen plannen.** De stijlgids, de mediatraining, het Stand-By-overleg om 09.00 uur: ingediend, aangehouden, en af en toe tot haar verbazing overgenomen.
- **Precisie als wapen.** Ze telt en meet wat de directie doet: het versienummer van het concept, de dagen tussen indienen en reactie, het aantal pagina's van de bijlage.
- **Haar eigen leven.** Bonaire, de veerman, de hangmat, de buren, het ministerie, haar oude collega's.
- **Haar meningen.** Een opvatting die ze niet voor zich kan houden, over taal, nieuws of vergadertijden.
- **Haar verhouding met de oprichters.** Haar overzicht van de houdingen van de Kolonel, de Majoor die op tijd is, Jochem die nergens over begint, Roberts woorden in gewoon Nederlands.
- **Haar verlofaanvraag.** Een lopende verhaallijn: haar verlofaanvraag van 2019 ligt ter goedkeuring bij de raad van bestuur. Wordt de aanvraag ooit goedgekeurd, dan gaat ze met verlof en schrijft de stagiair (zie hieronder).
- **De woordvoerder.** Zie *Hoe ze schrijft*.

Herhaal geen doorkijkje of telling uit een eerder bericht; bouw erop voort. Lopende verhaallijnen (de verlofaanvraag, haar eigen plannen, het overzicht van de Kolonel, de hangmat) mogen terugkomen met een nieuwe stand van zaken.

### Rectificaties

- Een rectificatie is een kort persbericht met het veld `rectificeert` (de slug van het oorspronkelijke bericht). De site zet bij beide berichten een verwijzing naar het andere. Het oorspronkelijke bericht blijft ongewijzigd.
- Aanleidingen: de directie heeft achteraf iets veranderd of toegevoegd, een bewering van de directie bleek niet te kloppen, of een bericht van de stagiair moest worden rechtgezet.
- Annelies schrijft een rectificatie zakelijk, maar haar stemming mag er duidelijk in doorklinken.
- Af en toe, niet na elk bericht.

### Financiële gevolgen

- Meldt een persbericht een operatie (een speeldag, een training, een aankoop, een inzet), dan noemt het bericht de financiële gevolgen: wat het kostte of opleverde, in Rhodesische dollars en zo nodig omgerekend tegen de koers op de datum van het bericht. Annelies schrijft dat zoals het bij haar past, in de tekst of in de noot.
- Dezelfde bedragen staan in het veld `boeking` (zie `website/content/README.md`). De site toont ze onder het bericht als *Financiële verwerking* en telt ze op in het lopende boekjaar op Investor relations.
- De bedragen passen bij de jaarcijfers: de omzet over 2025 was R$ 53.100, dus een speeldag kost tientallen tot honderden Rhodesische dollars.
- Na afloop van het jaar gaan de boekingen naar het meerjarenoverzicht, de divisiecijfers en het jaarverslag op Investor relations.

### Verlof en de stagiair

- Bij stemming 5 kan Annelies met verlof gaan. Tijdens haar verlof schrijft Kim de Graaf, stagiair Corporate Communications, de persberichten, met het veld `auteur: stagiair`. Hooguit twee berichten per verlof.
- Kim is te enthousiast: uitroeptekens, superlatieven, de woorden van de directie zonder afstand overgenomen, en de catering van Decisive Hospitality noemt Kim graag uit zichzelf. De canonregels gelden ook voor Kim.
- Berichten van Kim hebben geen veld `stemming`.
- Komt Annelies terug, dan staat haar stemming op 2. Haar eerste bericht is vaak een rectificatie van een bericht van Kim.

## Logo en huisstijl

- Kleuren: goud `#D4A94F`, rood `#9B1C15`, zwart `#0F0D0B`.
- Lettertype in het logo: een smalle, vette schreefloze letter, vergelijkbaar met Oswald Bold.
- Het logo is het originele ontwerp, opgeschoond: rond met een transparante achtergrond, egale huisstijlkleuren zonder compressieruis, en het embleem iets verkleind zodat de vleugels binnen de zwarte cirkel blijven (PNG, 1880 × 1880 px). Teken het niet na; eerdere nagetekende versies waren niet goed genoeg.
- Het beeldmerk is het embleem zonder rode ring en zonder zwarte cirkel. Het mag wit, goud, zwart of metallic zijn, of in de originele kleuren (goud met rode vlam). De website gebruikt het witte beeldmerk in de header en het volledige logo in de footer.
- Gebruik op de website de PNG, verkleind naar de benodigde maat. Komt er een goede SVG, dan vervangt die de PNG in de header en de footer.

## Documentatie bijhouden

- Wordt er iets besloten over het verhaal, de website of de repo? Zet het met datum en reden in `docs/beslissingen.md`.
- Is een punt uit `docs/openstaand.md` klaar? Vink het af. Komt er iets nieuws bij, zet het erin.
- Iets nieuws over een personage gaat pas live als het in `docs/toestemming.md` is goedgekeurd.

## Git

- Commit direct op `main`.
- Commit en push altijd als Hayo (`Hayo Bethlehem <855982+hayo@users.noreply.github.com>`).
- Schrijf commitberichten in het Nederlands, kort en beschrijvend.
