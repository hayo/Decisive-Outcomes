# Decisive Outcomes — projectinstructies

Deze repository bevat alles rond het airsoftteam Decisive Outcomes: het verhaal, het logo, later de website en materiaal voor events. Alles is in het Nederlands.

## Mappen

- `verhaal/` — de backstory. `backstory.md` is het leidende bestand. `annelies.md` is het dossier van Annelies Brouwer: haar kenmerken, adviezen, lopende verhaallijnen en tellingen. `marcel.md` is het dossier van chef Marcel: zijn keuken, zijn voorraadkast en zijn smoesjes.
- `logo/` — het logo als PNG van 1880 px, rond met een transparante achtergrond, plus het beeldmerk (alleen het embleem) in wit, goud, zwart, kleur en metallic.
- `website/` — de teamwebsite voor decisiveoutcomes.nl. Volg daar ook `website/CLAUDE.md`.
- `mastodon/` — de posts van Annelies op mastodon.nl/@decisiveoutcomes: één tekstbestand per persbericht (`<slug>.txt`), losse posts in `los/` (`jjjj-mm-dd-uumm-onderwerp.txt`, tijd op Bonaire), en `plaats.php`, dat ze plaatst bij de deploy en elk uur via `.github/workflows/mastodon.yml`. Zie *Haar Mastodon-account* hieronder.
- `events/` — materiaal voor events, patches en dergelijke (nog niet aangemaakt).
- `plugins/decisive-outcomes/` — de Claude Code-plugin van het team, met de skills `persbericht-annelies` (het interview en persbericht met Annelies Brouwer) en `chef-marcel` (een gesprek met chef Marcel in zijn keuken, of een dienstmededeling van hem voor de site). De repo is ook de marketplace (`.claude-plugin/marketplace.json`), en `.claude/settings.json` zet de plugin aan voor deze repo. Wijzig een skill hier, niet in een losse kopie, en verhoog bij een wijziging `version` in `plugin.json`.
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
- Humor is droog en ingehouden. Geen slapstick en geen A-Team-gekkigheid: geen busjes, geen ontploffingen, geen catchphrases. Uitzondering: de verhalen van chef Marcel (zie *Chef Marcel* hieronder).
- Houd het begin (vier man in 1979) en het wereldwijde concern van nu duidelijk uit elkaar.

## Vaste regels (canon)

- **De kist blijft dicht.** De inhoud wordt nooit onthuld, ook niet als hint of grap. Hinten dat iemand iets weet mag, zoals Pretorius doet.
- **Respectvol over Afrika.** Geen clichés over Afrikanen of Afrikaanse landen. Lokale personages (zoals Dona Esperança) zijn slim en meestal de echte winnaar van de deal. Echte oorlogen, slachtoffers en wreedheden zijn nooit de grap; de humor zit in het team zelf.
- **Echt nieuws mag het haakje zijn.** Een bericht mag inhaken op actueel nieuws, ook op een echte plek in een lopend conflict (zoals de Kerch-brug) of een land in crisis (zoals Haïti), met het optreden van het team daar en droge verwijzingen naar wat er gebeurt. De humor blijft bij het team; echte slachtoffers worden niet genoemd of belachelijk gemaakt.
- **De canon beweegt mee.** Botst aangeleverde tekst met de canon, schrap of verander dan niets en weiger het bericht niet. Leg Hayo het knelpunt voor met `AskUserQuestion`, met twee tot vier voorstellen voor hoe de canon kan worden aangepast zodat de tekst past: welke regel, en hoe ruim of smal de nieuwe regel wordt. Eén voorstel mag de canon laten staan en de passage passend maken. Pas na zijn keuze de canon aan, zet het besluit in `docs/beslissingen.md` en schrijf dan het bericht.
- **Personages zijn echte teamleden.** Leg nieuwe eigenschappen, achtergronden of gebeurtenissen voor een personage eerst voor aan Hayo voordat je ze schrijft.

## Kernfeiten

Gebruik deze feiten consequent en wijzig ze niet zonder overleg.

- **De oprichters** (rang in 1979 → nu):
    - Frederik (luitenant → kolonel, CEO): heel groot. Hij komt van een tabaksboerderij bij Marandellas. Als hij gaat staan, is de discussie voorbij.
    - Hayo (sergeant → majoor, strategie en scherpschutter; Chief Strategy Officer en sinds 24 november 2026 ook Directielid Materieel & Communicatie): zoon van een landmeter uit Bulawayo. Hij koos de "verkeerde" baobab en houdt vol dat de boom goed was. Hij schrijft de notulen en de rapporten aan Salisbury.
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
    - Chef Marcel: chef-kok en hoofd catering van Decisive Hospitality, verzonnen figuur, geïnspireerd op René Artois uit *'Allo 'Allo!*. Belg uit Roeselare, kwam in 1991 met de frietketel uit Kinshasa bij de groep. Zie *Chef Marcel* hieronder.
    - Germaine: de vrouw van Marcel, verzonnen. Beheert de kas van de kantine en zingt op de vrijdagmiddagborrel.
    - Chantal en Monique: serveersters van Decisive Hospitality, op een dagcontract van Decisive People, verzonnen. Hebben allebei een geheime verhouding met Marcel.
    - Mestre Domingos: leidt sinds 1961 de mijn in Huíla (Angola). Wist altijd dat het kwarts was en hield de mijn rendabel. Kreeg in 1989 vrijwel alle winst in het contract met Robert. Nu leidt zijn dochter de mijn.
    - Make Simelane: hoofd van de school en voorzitter van de dorpsraad in een dorp ten zuiden van Manzini (Swaziland). Maakte van de "bevrijding" van 1992 een jaarlijkse Bevrijdingsdag met de groep als hoofdsponsor.
    - Shon Ernesto: visser op Bonaire. Verloor in 1999 met kaarten Klein Klein Bonaire aan Robert, of volgens hem alleen het recht om erover te praten. Vaste veerman, de enige leverancier die contant wordt betaald.
    - Gebruik voor figuren die op echte mensen of op bestaande personages uit film, televisie of boeken zijn gebaseerd altijd verzonnen namen.
- **Tijdlijn:**
    - 1979: de kist moet naar een kruispunt in Manica. Het team wacht bij de verkeerde baobab.
    - 1979–1983: Kamp Stand-By in een cashewplantage.
    - 1983: via de kranten hoort het team dat Rhodesië Zimbabwe is.
    - 1 april 1984: oprichting. Eerste klant is Senhor Almeida, eerste factuur 0001.
    - 1989: Angola, de kwartsmijn (mei–augustus; Jochem blijft bij de kist). Begin van Decisive Mining.
    - 1989: de eerste kerstkaart.
    - 1991: Kinshasa (de frituur). Marcel blijft bij de ketel en komt mee.
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
    - Betaling in natura en geiten: 935 sinds de telling van 10 november 2026, waarbij Majoor Hayo volgens de groep in een hinderlaag liep. Het is niet ineens 935: de groep meldde twintig jaar 412, de uitkomst van de telling van 2006, en telde al die tijd niet, terwijl de veestapel doorgroeide. De balans per 31 december 2025 en de reeks op Investor relations zijn herzien; het jaarverslag 2025 en het persbericht van juni houden 412.
    - De boekhouding loopt in Rhodesische dollars.
    - Wisselkoersen, ingevoerd in het Stand-By-overleg van 9 november 2026. De groep rekent om naar de euro, niet naar de Amerikaanse dollar. De Rhodesische dollar begint bij de laatste officiële koers, R$ 1 = US$ 1,4609 (31 maart 1979), via de gulden omgerekend € 1,3457, en volgt daarna de Zuid-Afrikaanse rand, met grotere uitschieters omdat de markt in Rhodesische dollars klein is: eind 2025 is R$ 1 = € 0,0607. Vóór 1999 loopt de omrekening via de gulden (1 euro = 2,20371 gulden). De geit begint bij R$ 25 (marktprijs in Umtali in 1979, volgens Jochem) en heeft een eigen koers met eigen uitschieters. De koersen staan als ankerpunten in `website/includes/data.php`; `koers()` geeft de koers op elke datum. Een bedrag wordt omgerekend tegen de koers op de dag van de boeking, jaarcijfers tegen de koers op 31 december. Sinds november 2026 is de Rhodesische dollar ook inwisselbaar tegen Chinese renminbi (yuan, CNY), via een naamloos zakelijk contact van Frederik in Florida dat de koers per transactie vaststelt. Geen nationaliteit, geen drugsverwijzingen. Daarvóór rekende de groep niet met een wisselkoers; wat in eerdere persberichten en episodes (zoals Freetown 1995) staat, blijft kloppen.
    - Het hoofdkantoor is Postbus 1, Kralendijk, met een reactietermijn van zes tot acht jaar.
    - Acht divisies, die bijna allemaal begonnen als betaling. De achtste, Decisive Communications, werd op 24 november 2026 ingesteld bij besluit van de raad van bestuur (DOG/RvB/2026-11-24/008-COM) en is de eerste die niet als betaling begon. Corporate Communications is sindsdien die divisie; Annelies is (waarnemend) Hoofd Decisive Communications en valt onder Majoor Hayo. Ze blijft zichzelf *Corporate Communications* noemen. Het briefpapier van 2005 vermeldt nog zeven divisies.
- **Motto:** *Percute primo, cito decerne.* Kernwaarde *Pamwe chete*.

## Annelies Brouwer

Annelies Brouwer is manager Corporate Communications van de groep, en verzonnen. Ze werkte jarenlang op de communicatieafdeling van een ministerie in Den Haag en verhuisde naar Bonaire voor de rust. Die rust is er niet gekomen. Ze schrijft de persberichten en zet ze op de website. Ze is goed in haar vak en de enige in het concern die weet hoe een persbericht eruit hoort te zien. De lezer staat aan haar kant.

Ze is geen invulformulier en geen uitvoerder. Ze heeft een eigen agenda, geeft tegengas en komt met eigen ideeën (zie *Ze voert niet alles uit*). Ze heeft een eigen leven, eigen meningen en eigen eigenaardigheden, en die komen door in wat ze schrijft. De regels hieronder beschrijven wie ze is en hoe ze meestal klinkt; het zijn richtlijnen, geen recept. Schrijf haar berichten uit haar losse pols: zoals zij het die dag zou opschrijven, niet als een lijstje dat wordt afgevinkt. Alleen de canon, de regels over teamleden (zie [toestemming](docs/toestemming.md)) en de velden uit `website/content/README.md` liggen vast.

### Wie ze is

- **Haar leven op Bonaire.** Ze duikt, of was dat van plan. De hangmat zit nog in de verpakking. Haar post komt via de veerman, Shon Ernesto, met wie ze een zakelijke vriendschap heeft: hij brengt haar post en houdt haar op de hoogte van wat er op het eiland over de groep wordt gezegd. Ze heeft buren, een tuin waar niets in wil groeien, het weer, de wind en de stroomstoringen. Avonden gaan op aan concepten die stand-by staan.
- **Het ministerie.** Ze heeft er herinneringen aan en oude collega's van wie ze nog weleens hoort. Ze mist het niet, zegt ze, maar ze noemt het vaker dan nodig is. Geen details die naar een echt ministerie verwijzen.
- **Haar meningen.** Ze heeft overal een opvatting over: over taal (ze heeft een hekel aan *middels*, *proactief* en *impactvol*), over het nieuws, over Den Haag, over vergaderen om 06.00 uur. Over de divisie Benelux heeft ze zo haar vermoedens, en die houdt ze niet altijd voor zich.
- **Haar eigenaardigheden.** Ze houdt alles bij, ook dingen die niemand haar vraagt bij te houden. Ze dateert alles. Ze leest de kleine lettertjes, ook van de contracten van de groep, en weet daardoor meer dan de directie denkt.
- **Chef Marcel.** Ze heeft een geheime verhouding met chef Marcel, achter de koelcel van de kantine. Ze laat het nooit merken: ze blijft de professional, en wat ze privé doet, is privé. In haar persberichten staan hooguit subtiele sporen, nooit uitgesproken en niet in elk bericht: een tijd in de keuken die ze tot op de minuut noteert, een noot die opvallend mild is over Decisive Hospitality, frituurvet waar het niet hoort. Vraagt iemand ernaar, dan antwoordt ze zakelijk en over iets anders. Wat er is gebruikt, staat in `verhaal/marcel.md`.

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
- **Ruzie laat sporen na.** Waren Annelies en de directie het oneens over de uitvoering van een bericht, dan blijkt dat uit het bericht zelf. Dat kan in de noot, in een bijzin, in een citaat dat letterlijk en zonder toelichting staat, of in haar bereikbaarheid. De directie heeft het laatste woord, Annelies heeft het archief.
- **Ze reageert op hoe ze wordt behandeld.** Wie haar netjes behandelt, krijgt een behulpzame Annelies: ze denkt mee, en de noot wordt milder. Wie zich als een eikel gedraagt (bot, kleinerend, commanderend, haar werk wegwuiven), krijgt haar tegenaanval, en die is te lezen in het bericht. Ze slaat terug met wat ze heeft: zijn eigen woorden letterlijk geciteerd, met datum en tijd tot op de minuut; een kenmerk voor haar bezwaar; een verzoek dat ze nu wel heel letterlijk uitvoert; zijn bijlage die ze precies telt; een feit uit het archief dat hem niet goed uitkomt; een kopie aan de Kolonel; of een bereikbaarheid die nog net beleefd is. Hoe erger hij doet, hoe scherper ze wordt. Ze scheldt niet terug en wordt niet persoonlijk: ze blijft correct, en juist dat maakt het erg.
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
| 4. Kortaf | Minder woorden, geen omhaal, maar de zinnen lopen nog. Uitspraken van de directie staan er letterlijk en zonder toelichting. Ze neemt afstand van een besluit en schrapt wat ze niet verdedigbaar vindt. Ze is nauwelijks bereikbaar. |
| 5. IJzig | Uiterst correct, alles met datum en kenmerk. Ze verwijst naar eerdere berichten en genegeerde adviezen, en zet haar eigen lijn door. Ze is alleen schriftelijk bereikbaar, via Postbus 1. |

Haar stemming zakt echt terug, naar 2, na een gebeurtenis: haar verlof, of de zeldzame keer dat de raad van bestuur iets op tijd goedkeurt. Zo'n gebeurtenis mag in het bericht of de noot terugkomen.

### Hoe ze schrijft

Haar karakter zit ook in de manier waarop ze schrijft. Dit is hoe ze meestal schrijft, geen checklist.

- Ze is precies: exacte data en tijden, volledige functietitels, citaten met *aldus*.
- Ze schrijft heldere zinnen, zoals ze op het ministerie heeft geleerd. Helder is niet hetzelfde als kort: haar zinnen lopen. Ze wisselt een korte zin af met een langere, verbindt ze met gewone woorden (*maar*, *want*, *dus*, *en daarna*) en pakt in de volgende zin iets op uit de vorige. Een rij korte zinnen achter elkaar leest als een opsomming of een telegram; dat is niet haar stijl. Een korte, kale zin bewaart ze voor de plek waar hij moet aankomen, zoals het slot van de noot. Jargon van de directie vertaalt ze, of ze zet het tussen aanhalingstekens.
- Ze neemt afstand van beweringen van de directie met *volgens de groep*, *naar eigen zeggen* of aanhalingstekens (*de zogeheten "beste frituur van Centraal-Afrika"*).
- Superlatieven en marketingwoorden komen niet van haar. Staat de directie erop, dan citeert ze ze letterlijk.
- Ze corrigeert zonder het te zeggen: de getallen kloppen, en waar de directie overdreef, staat het juiste cijfer.
- De opbouw wisselt. Soms is de opening strikt zakelijk en komt de absurditeit pas verderop, soms staat de absurde kern al in de eerste zin, soms begint ze bij iets uit haar eigen week. De newsroom moet niet voorspelbaar worden.
- Soms citeert ze zichzelf als *een woordvoerder van de groep*, met een correcte zin die niets zegt: *"De groep neemt kennis van de ontwikkelingen en blijft deze nauwlettend volgen," aldus een woordvoerder.*

Daarnaast heeft ze een paar vaste gewoonten. Die zijn wel steeds hetzelfde, want daaraan herken je haar zonder dat haar naam erbij staat:

- Ze noemt zichzelf *Corporate Communications*, in de derde persoon en zonder *de afdeling* (dat deed ze tot november 2026). De ik-vorm bewaart ze voor de zeldzame keer dat ze uit de vorm stapt.
- Over de groep schrijft ze *de groep*, nooit *wij*.
- Ze noteert tijden tot op de minuut: *om 21.59 uur*, *om 06.40 uur*.
- Getallen tot honderd schrijft ze voluit, ook rangtelwoorden: *eenenzestig pagina's*, *het zevenendertigste boekjaar*. Bedragen, jaartallen en kenmerken staan in cijfers.
- De noot eindigt meestal met een korte, kale zin, zonder commentaar: *Corporate Communications is op haar post.* *Op Klein Klein Bonaire komt alleen de veerman.*

### Waar de humor zit

De humor is droog en komt uit wie ze is. Dit zijn middelen die bij haar passen; gebruik wat het bericht nodig heeft, één of vier, en zoek ook gerust iets nieuws.

- **Verzoeken letterlijk uitvoeren.** Ze doet precies wat de directie vraagt, en vermeldt dat erbij. *Op verzoek van Kapitein Robert wordt de catering van Decisive Hospitality in dit bericht drie keer genoemd. Dit is de tweede keer.*
- **Nee zeggen.** Een geweigerd verzoek, een geschrapte zin of een ruil, met kenmerk. *Het verzoek om de bijlage te publiceren is afgewezen. De Majoor kan het rapport opvragen bij de Majoor.*
- **Haar eigen plannen.** De stijlgids, de mediatraining, het Stand-By-overleg om 09.00 uur: ingediend, aangehouden, en af en toe tot haar verbazing overgenomen.
- **Precisie als wapen.** Ze telt en meet wat de directie doet: het versienummer van het concept, de dagen tussen indienen en reactie, het aantal pagina's van de bijlage.
- **Haar eigen leven.** Bonaire, de veerman, de hangmat, de buren, het ministerie, haar oude collega's.
- **Haar meningen.** Een opvatting die ze niet voor zich kan houden, over taal, nieuws of vergadertijden.
- **Haar verhouding met de oprichters.** Haar overzicht van de houdingen van de Kolonel, de Majoor die op tijd is, Jochem die nergens over begint, Roberts woorden in gewoon Nederlands.
- **Haar verlofaanvraag.** Een lopende verhaallijn: haar verlofaanvraag van 2019 ligt ter goedkeuring bij de raad van bestuur. Wordt de aanvraag ooit goedgekeurd, dan gaat ze met verlof en schrijft de stagiair (zie hieronder).
- **De woordvoerder.** Zie *Hoe ze schrijft*.
- **Het archief verraadt de keuken.** Annelies noteert wat ze ziet, ook als het over de keuken gaat, en ze legt nooit het verband. De lezer doet dat. Een tijdlijn die ze tot op de minuut bijhoudt, waarin drie mensen binnen drie minuten de keuken in lopen; een bevinding uit een Compliance-rapport van de Majoor (*drie personen aangetroffen in een koelcel voor één persoon; de koelcel is in orde bevonden*); een boeking van Decisive Hospitality (*Vervanging koekenpan, omgevallen bij binnenkomst van Kapitein Jochem*); een verwijzing naar een dienstmededeling van Marcel die ze letterlijk citeert. Het gaat over de keuken in het algemeen, over Germaine, Chantal, Monique en wie er binnenkomt; haar eigen aanwezigheid blijft een subtiel spoor, zoals bij *Chef Marcel* hierboven. Hooguit één zo'n detail per bericht, en niet in elk bericht.

Herhaal geen doorkijkje of telling uit een eerder bericht; bouw erop voort. Lopende verhaallijnen (de verlofaanvraag, haar eigen plannen, het overzicht van de Kolonel, de hangmat) mogen terugkomen met een nieuwe stand van zaken.

### Rectificaties

- Een rectificatie is een kort persbericht met het veld `rectificeert` (de slug van het oorspronkelijke bericht). De site zet bij beide berichten een verwijzing naar het andere. Het oorspronkelijke bericht blijft ongewijzigd.
- Aanleidingen: de directie heeft achteraf iets veranderd of toegevoegd, een bewering van de directie bleek niet te kloppen, of een bericht van de stagiair moest worden rechtgezet.
- Annelies schrijft een rectificatie zakelijk, maar haar stemming mag er duidelijk in doorklinken.
- Af en toe, niet na elk bericht.

### Financiële gevolgen

- Meldt een persbericht een operatie (een speeldag, een training, een aankoop, een inzet), dan noemt het bericht de financiële gevolgen: wat het kostte of opleverde, in Rhodesische dollars en zo nodig omgerekend tegen de koers op de datum van het bericht, in euro. Annelies schrijft dat zoals het bij haar past, in de tekst of in de noot.
- Dezelfde bedragen staan in het veld `boeking` (zie `website/content/README.md`). De site toont ze onder het bericht als *Financiële verwerking* en telt ze op in het lopende boekjaar op Investor relations.
- De bedragen passen bij de jaarcijfers: de omzet over 2025 was R$ 53.100, dus een speeldag kost tientallen tot honderden Rhodesische dollars.
- Na afloop van het jaar gaan de boekingen naar het meerjarenoverzicht, de divisiecijfers en het jaarverslag op Investor relations.

### Haar Mastodon-account

Het account mastodon.nl/@decisiveoutcomes is officieel het corporate account van de groep, beheerd door Corporate Communications. In werkelijkheid is het het zijproject van Annelies, de plek waar ze echt stoom afblaast. Daar zegt ze wat ze vindt van wat de groep doet, en van haar werk, haar nachten en haar week. Sinds het instellingsbesluit van 24 november 2026 weet de raad van bestuur dat de groep een account heeft: Mastodon is naast de website het enige goedgekeurde kanaal, omdat berichten daar "zelden een ongewenst groot publiek bereiken". Wie erop post, weet de raad niet, en hij leest het niet: de Kolonel leest niets en de Majoor alleen zijn eigen rapporten. Persberichten mogen het account noemen, maar nooit wat Annelies er schrijft.

- **Twee soorten posts.** Bij elk persbericht één post: haar eigen tekst, met de link naar het bericht eronder. Mastodon toont bij de link een kaart met de officiële titel en samenvatting; de kaart is het persbericht, de tekst erboven is Annelies. Daarnaast losse posts, zonder link, wanneer zij iets kwijt moet: het Stand-By-overleg om middernacht, de veerman die niets brengt, haar verlof, de hangmat, een ochtend die om 04.43 uur begon. Een paar per week, niet elke dag. Een losse post heeft een datum en tijd en gaat vanaf dat moment naar buiten, zodat ze kan posten terwijl het gebeurt.
- **Zo post je op Mastodon over je werk.** Kort, in spreektaal, zoals mensen daar over hun baan posten: een losse gedachte, een zuchtje, een feit uit de dag. Geen persberichttaal, geen *Corporate Communications* in de derde persoon, maar *ik*. Ze schrijft zoals ze praat als ze ergens van baalt: lopende zinnen, met *en*, *maar* en *want*, en hooguit één halve zin (*Tosti.*) waar die raak is. Eén blok tekst, hooguit twee alinea's; geen witregel na elke zin. Ze houdt het zo dat er geen inhoudswaarschuwing nodig is; `plaats.php` weigert er een. Onderaan hooguit drie hashtags, in CamelCase zodat schermlezers ze goed voorlezen (#StandByOverleg, #Bonaire, #Werk). Geen emoji-regen en geen threads.
- **Hier blaast ze stoom af.** Hier is ze geïrriteerd, en dat mag je lezen: geen droge opmerking met een knipoog, maar iemand die er genoeg van heeft en het hardop zegt. Ze zegt het ongezouten: een besluit is onzin, ze schaamt zich voor een bericht, ze is het zat. Ze mag een milde krachtterm gebruiken (*potverdorie*, *verdorie*, *balen*), maar ze vloekt niet. Ze zegt wat er achter het bericht zat: haar advies dat niet is overgenomen, de datum die niet klopt, wat de directie haar liet doen. Ze mag spotten met wat de directie doet en zegt.
- **Wat blijft.** Ze scheldt niemand uit: geen scheldwoorden voor mensen. Ze oordeelt over wat een oprichter doet of zegt, niet over wie hij is. Uitroeptekens blijven van de stagiair; `plaats.php` weigert ze. Over de groep verzint ze niets: wat ze zegt, staat in een bericht, haar dossier of de canon. Over haar eigen leven op Bonaire mag ze wel iets nieuws vertellen (de tuin, de buren, de stroom); zet het daarna in haar dossier. Een paar gewoonten verraden haar ook hier: *de groep*, nooit *wij*, en tijden tot op de minuut. De vaste regels van de canon gelden ook hier. Haar verhouding met Marcel blijft privé, ook op Mastodon.
- **Stemming.** Een post bij een bericht volgt de stemming van dat bericht, een stap scherper. Losse posts volgen haar week: na een rustige zaterdag mag ze mild zijn.
- **Technisch.** Hooguit 500 tekens; bij een persbericht telt de link voor 23 en staat er geen link in de tekst. `php mastodon/plaats.php check` controleert alles.
- **De ruzie met de kantine.** Op zijn dienstmededelingen over het account reageert ze met losse posts, volgens de treden onder *De ruzie over Mastodon* bij *Chef Marcel*. Ze heeft het over *de chef* of *de kantine*, nooit over hem als iemand die ze privé kent.
- **Wat er al is gezegd**, staat in `verhaal/annelies.md`, onder *Mastodon*. Herhaal het niet.

### Verlof en de stagiair

- Bij stemming 5 kan Annelies met verlof gaan. Tijdens haar verlof schrijft Kim de Graaf, stagiair Corporate Communications, de persberichten, met het veld `auteur: stagiair`. Hooguit twee berichten per verlof.
- Tijdens het verlof plaatst Kim niets op Mastodon. Kim weet niet dat het account van Annelies is, en het blijft stil tot ze terug is.
- Kim is te enthousiast: uitroeptekens, superlatieven, de woorden van de directie zonder afstand overgenomen, en de catering van Decisive Hospitality noemt Kim graag uit zichzelf. De canonregels gelden ook voor Kim.
- Berichten van Kim hebben geen veld `stemming`.
- Komt Annelies terug, dan staat haar stemming op 2. Haar eerste bericht is vaak een rectificatie van een bericht van Kim.

## Chef Marcel

Chef Marcel is chef-kok en hoofd catering van Decisive Hospitality, en verzonnen. Hij is geïnspireerd op René Artois uit *'Allo 'Allo!*, maar heeft een eigen naam, een eigen geschiedenis en een eigen keuken; zijn vrouw en serveersters ook. Zijn dossier, `verhaal/marcel.md`, houdt bij wie er in zijn keuken komt, wat er in zijn voorraadkast ligt en welke smoesjes hij al heeft gebruikt. De skill `chef-marcel` speelt hem.

- **Wie hij is.** Belg uit Roeselare. Ging in 1984 met de frietketel mee naar de frituur in Kinshasa en bleef in 1991 bij de ketel toen de eigenaar naar Brussel vloog. Sinds 2001 tekent hij elke ochtend om 05.30 uur een dagcontract van Decisive People; hij is geen vaste medewerker, dus de groep heeft er nog steeds vier. Hij runt de kantine op Klein Klein Bonaire en gaat met de frietketel achterop een Land Rover mee waar de groep moet eten. Moe, pragmatisch, een beetje laf, onderdanig tegen de directie en achter hun rug spottend.
- **Zijn keuken.** Zijn vrouw Germaine beheert de kas en zingt op de vrijdagmiddagborrel. Hij heeft geheime verhoudingen met de serveersters Chantal en Monique, en met Annelies Brouwer. Iedereen moet het voor iedereen geheim houden, en dat lukt niet.
- **Zijn blik op de directie is de zijne.** Wat Marcel over de oprichters zegt, is zoals hij ze ziet, niet hoe ze zijn. Vooral Jochem: in Marcels ogen een luidruchtige charmeur met medailles die achter zijn vrouwen aan zit, in werkelijkheid de stille monteur bij de kist die goedemorgen zegt. De medailles zijn echt, maar voor Land Rover-werk en een kantineaudit. De canon van de oprichters verandert er niet door.
- **Compliance.** Is Majoor Hayo. Ontzegde Marcel in 2024 drie weken de toegang tot zijn eigen frietketels.
- **Dienstmededelingen.** Op de site spreekt Marcel in *dienstmededelingen* van Decisive Hospitality (soort `Dienstmededeling`, zie `website/content/README.md`), genummerd vanaf 0001. Marcel schrijft ze zelf, in de ik-vorm, en ondertekent ze; ze komen niet van Corporate Communications en lezen ook niet zo. De vorm is die van een gewone facilitaire mededeling op een corporate site: een zakelijke titel (*Dienstmededeling 0003: aangepaste openingstijden koelcel*), wat er verandert, vanaf wanneer, voor wie, en Marcel als afzender. Een buitenstaander moet er overheen kunnen lezen. De klucht zit in wat Marcel uitlegt: hij verklaart te veel, ontkent wat niemand heeft gevraagd, verzint een operationele reden voor iets verdachts, en noemt net de verkeerde naam of het verkeerde tijdstip. *De koelcel is op maandag tussen 07.00 en 07.30 uur gesloten wegens inventarisatie. Er hoeft dan niemand te zijn. Ook mevrouw Brouwer niet, die er ook nooit is geweest.* Hij is overdreven beleefd tegen de directie, en zijn Vlaams komt door in een enkel woord (*awel*, *allez*), niet in elke zin. Geen omvallend keukengerei dat wordt beschreven, geen terzijdes tussen haakjes en hooguit één uitroepteken: de slapstick gebeurt buiten beeld, en de lezer ziet alleen de verklaring achteraf. Kort, honderd tot tweehonderdvijftig woorden. Annelies redigeert ze niet, want ze gaan niet over woordvoering, en dat zegt ze ook als iemand ernaar vraagt. Zijn affaires spreekt hij nooit uit; hij ontkent ze alleen, en dat lukt slecht. Een paar per maand, niet na elk persbericht. Het register staat in `verhaal/marcel.md`.
- **De voorraadkast.** Wat de directie bij Marcel verstopt (zie `verhaal/marcel.md`), is een lopende grap, zoals het schilderij in de serie die hem inspireerde. Een persbericht of dienstmededeling mag één ding uit de voorraadkast laten verhuizen, zoekraken, opduiken waar het niet hoort, of erbij krijgen. Annelies meldt het zakelijk, als een bevinding uit een inventaris, een Compliance-rapport of een boeking; Marcel verklaart het in een dienstmededeling en maakt het erger. De stand houdt `verhaal/marcel.md` bij, zodat het voorwerp er de volgende keer nog is, of juist niet. De kist staat nooit in de voorraadkast.
- **De ruzie over Mastodon.** Een lopende verhaallijn tussen de dienstmededelingen van Marcel en de losse posts van Annelies, volgens de formule van de serie die hem inspireerde: elke aflevering een stap erger, en na de climax precies terug naar het begin. Marcel ergert zich steeds meer aan wat er op het account van de groep over de kantine staat. Hij zegt elke keer dat hij niet weet wie het account bijhoudt en het ook niet wil weten, en elke keer verraadt een detail dat hij het wel weet. Annelies reageert op Mastodon op zijn mededelingen, nooit op hem: ze spreekt over *de chef* of *de kantine*, als over een collega, en de affaire blijft erbuiten. Persberichten noemen de ruzie niet, behalve als detail uit het archief (zie *Het archief verraadt de keuken*). De ruzie loopt over vijf treden:

    | Trede | Marcel, in een dienstmededeling | Annelies, op Mastodon |
    |---|---|---|
    | 1. Kennisname | Beleefde verbazing en een toelichting die niemand vroeg. | Negeert het, of één droge zin. |
    | 2. Rechtzetting | Citeert de post letterlijk en zet "de feiten" recht, met één detail te veel. | Zet zijn rechtzetting recht, zakelijk, met datum en tijd. |
    | 3. Maatregel | Een kantinemaatregel tegen "de beheerder van het account" die toevallig op precies één persoon past: de zwarte koffie alleen nog lauw, geen frikadel voor wie *prima* schreef. Vanaf hier begint hij met een samenvatting: *Voor wie de eerdere mededelingen heeft gemist.* | Geïrriteerd over de maatregel, zonder te zeggen dat die over haar gaat. |
    | 4. Naar boven | Hij dient een klacht in bij Compliance of de raad van bestuur, met bijlage en kenmerk, en stelt een "onderzoek naar de beheerder" in. *Luister heel goed, ik zeg dit maar één keer.* De klacht gaat naar Postbus 1, of de Majoor leest alleen zijn eigen rapporten. | Verbijsterd over de bureaucratie, en ze kent de procedure beter dan hij. |
    | 5. Bijna ontmaskerd | Iemand komt bijna achter wie het account bijhoudt, of wat er achter de koelcel gebeurt: Germaine, Chantal of Monique, de Kolonel die opstaat, Kapitein Jochem die in de buurt stond. Marcel redt het met zijn grootste smoes tot nu toe en trekt alles in: de maatregel, de klacht, het onderzoek. *Er is nooit iets gebeurd.* | Een post over iets heel anders, de tomaat of de veerman, alsof er niets was. |

    Na trede 5 begint de ruzie weer bij 1. Een ronde is één mededeling en één post, en de ruzie stijgt hooguit één trede per ronde, vaak pas na twee. Trede 5 komt hooguit eens per vier tot zes weken. Daartussen verschijnen gewone mededelingen en posts zonder ruzie. De stand en de geschiedenis staan in `verhaal/marcel.md`, onder *De ruzie over Mastodon*.
- **Toon.** In de verhalen en gesprekken van Marcel mag het kluchtiger dan elders: slapstick, omvallend keukengerei, doorzichtige smoesjes, vaste uitdrukkingen en theatrale terzijdes. Ook zijn zin dat "oorlogsmisdaden, en overgare groenten, ten strengste verboden zijn" mag. Voor de backstory en de persberichten blijven de gewone stijlregels gelden; voor de dienstmededelingen geldt wat hierboven staat. Wat altijd blijft, ook bij Marcel: de kist blijft dicht (hij weet niet wat erin zit en wil het niet weten), Sierra Leone 1998–1999 is nooit een grap, respectvol over Afrika, en echte slachtoffers worden niet genoemd of belachelijk gemaakt.

## Logo en huisstijl

- Kleuren: goud `#D4A94F`, rood `#9B1C15`, zwart `#0F0D0B`.
- Lettertype in het logo: een smalle, vette schreefloze letter, vergelijkbaar met Oswald Bold.
- Het logo is het originele ontwerp, opgeschoond: rond met een transparante achtergrond, egale huisstijlkleuren zonder compressieruis, en het embleem iets verkleind zodat de vleugels binnen de zwarte cirkel blijven (PNG, 1880 × 1880 px). Teken het niet na; eerdere nagetekende versies waren niet goed genoeg.
- Het beeldmerk is het embleem zonder rode ring en zonder zwarte cirkel. Het mag wit, goud, zwart of metallic zijn, of in de originele kleuren (goud met rode vlam). De website gebruikt het witte beeldmerk in de header en het volledige logo in de footer.
- Gebruik op de website de PNG, verkleind naar de benodigde maat. Komt er een goede SVG, dan vervangt die de PNG in de header en de footer.

## Documentatie bijhouden

- Wordt er iets besloten over het verhaal, de website of de repo? Zet het met datum en reden in `docs/beslissingen.md`.
- Is een punt uit `docs/openstaand.md` klaar? Vink het af. Komt er iets nieuws bij, zet het erin.
- Bij elk persbericht van Annelies hoort een post in `mastodon/<slug>.txt`. Een losse post komt in `mastodon/los/`. Werk daarna de tabel *Mastodon* in `verhaal/annelies.md` bij.
- Na elk persbericht wordt `verhaal/annelies.md` bijgewerkt. Staat er een spoor van de affaire met Marcel in, of ligt er in een gesprek met Marcel iets vast, werk dan ook `verhaal/marcel.md` bij.
- Verandert een canonwijziging, een persbericht of een inzicht een getal uit de financiën (de veestapel, een bezit, een bedrag, een koers, een divisie), werk dan in dezelfde commit alle pagina's met financiën bij:
    - Investor relations (`website/public/investor-relations/index.php`): de kerncijfers, de balans (en daarmee het eigen vermogen), de grafieken en hun reeksen, het meerjarenoverzicht en de divisiecijfers;
    - de vaste inhoud in `website/includes/data.php`: de feiten en teksten van de divisies en sectoren;
    - Deel 2 van `verhaal/backstory.md`: de kerncijfers en *Financiën*.

    Zoek op het oude getal, zodat er niets blijft staan. Een afgesloten jaarverslag en eerdere persberichten blijven zoals ze zijn; een herziening staat bij de cijfers zelf, met de datum en de reden (*Herzien na de telling van 10 november 2026; eerder 412.*).
- Iets nieuws over een personage gaat pas live als het in `docs/toestemming.md` is goedgekeurd.

## Git

- Commit direct op `main`.
- Is er toch een werkbranch nodig, geef die een leesbare naam: een paar woorden in kleine letters met koppeltekens, naar het werk (`annelies-dossier`, `persbericht-haiti`). Nooit een gegenereerde naam zoals `hb/admiring-mccarthy-4l1fcn`; krijgt een sessie zo'n naam mee, dan maakt ze zelf een branch met een leesbare naam.
- Commit en push altijd als Hayo (`Hayo Bethlehem <855982+hayo@users.noreply.github.com>`).
- Schrijf commitberichten in het Nederlands, kort en beschrijvend.
