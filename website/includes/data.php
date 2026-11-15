<?php
// Vaste inhoud die op meerdere pagina's terugkomt. Canon: zie CLAUDE.md in de root.

const NAVIGATIE = [
    ['/over-ons/', 'Over ons'],
    ['/diensten/', 'Diensten'],
    ['/sectoren/', 'Sectoren'],
    ['/wereldwijd/', 'Wereldwijd'],
    ['/inzichten/', 'Inzichten'],
    ['/werken-bij/', 'Werken bij'],
];

const FOOTER_LINKS = [
    ['/ethiek-en-compliance/', 'Ethiek & compliance'],
    ['/investor-relations/', 'Investor relations'],
    ['/algemene-voorwaarden/', 'Algemene voorwaarden'],
    ['/privacy/', 'Privacyverklaring'],
    ['/colofon/', 'Colofon'],
];

const KERNCIJFERS = [
    ['40', 'landen'],
    ['7', 'divisies'],
    ['45+', 'jaar operationeel'],
    ['100%*', 'afgeronde opdrachten'],
];
const KERNCIJFERS_NOOT = '* Exclusief de opdracht uit 1979. Die loopt nog.';

/*
 * Divisies. Velden: naam, kop, kort (kaart en hero), intro (inleiding), tekst (alinea's),
 * competenties ([titel, tekst]), aanpak (optioneel, [stap, tekst]), feiten ([kenmerk, waarde]),
 * inzet ([titel, tekst, link naar casestudy (optioneel)]), icoon, beeld.
 */
const DIVISIES = [
    'decisive-security' => [
        'naam' => 'Decisive Security',
        'kop' => 'Beveiliging, bewaking en evacuatie onder alle omstandigheden',
        'kort' => 'Bescherming van mensen, middelen en locaties, ook waar anderen al vertrokken zijn.',
        'intro' => 'Decisive Security is de oudste divisie van de groep. Zij levert beveiliging, bewaking en evacuatie in omgevingen waar de situatie snel verandert en de planning zelden standhoudt. Onze teams zijn gewend om lang op hun plek te blijven.',
        'tekst' => [
            'De divisie vindt haar oorsprong in augustus 1979, toen de oprichters van de groep in de provincie Manica een opdracht aannamen die tot op vandaag loopt. Uit die eerste inzet groeide een werkwijze die wij sindsdien bij elke opdrachtgever toepassen: grondige voorbereiding, eigen kaartmateriaal, een vast overlegritme en de bereidheid om te blijven, ook als anderen al zijn vertrokken.',
            'Decisive Security werkt voor overheden, bedrijven en particulieren in Afrika, Zuid-Amerika, Europa en het Caribisch gebied. Onze teams worden samengesteld via Decisive People en staan onder leiding van officieren met ruim veertig jaar ervaring in het veld. Elke inzet wordt afgesloten met een volledig rapport, dat wordt verstuurd aan de opdrachtgever en aan ons hoofdkwartier.',
            'Wij geloven niet in onnodig geweld. Onze ervaring is dat de meeste situaties tot rust komen zodra er iemand rustig opstaat. Waar dat niet volstaat, kiezen wij voor terugtrekken, wachten en opnieuw beoordelen. Op het gebied van wachten beschikken wij over een expertise die in de sector ongeëvenaard is.',
        ],
        'competenties' => [
            ['Objectbewaking', 'Langdurige bewaking van objecten, opslag en locaties, dag en nacht. Onze langste lopende inzet begon in 1979 en kent sinds december 1989 geen enkel onbewaakt moment.'],
            ['Evacuatie', 'Verplaatsing van mensen en waardevolle goederen uit instabiele gebieden, over land en over water. Wij evacueren wat de opdrachtgever het belangrijkst vindt, ook als dat een frietketel is.'],
            ['Risicobeoordeling', 'Analyse van routes, ophaalpunten en dreigingen, onderbouwd met eigen kaartmateriaal. Onze kaarten zijn nauwkeurig. Over de interpretatie ervan verschillen wij soms van mening met piloten.'],
            ['Persoonsbeveiliging', 'Discrete begeleiding van opdrachtgevers en hun gasten. Onze beveiligers vallen op door hun lengte, wat in de praktijk de meeste incidenten voorkomt.'],
            ['Verbindingen', 'Radioverbindingen en meldprocedures in gebieden zonder netwerk. Wij luisteren altijd mee, ook als er al jaren niets wordt uitgezonden.'],
        ],
        'aanpak' => [
            ['Verkenning', 'Wij bezoeken de locatie, tekenen een eigen kaart en geven alles een nummer wat groter is dan een geit.'],
            ['Plan', 'Een plan van aanpak met roosters, ophaalpunten en een plan B. Plan A wordt zorgvuldig vastgelegd.'],
            ['Inzet', 'Onze teams nemen positie in en blijven. Elke maandag om 06.00 uur volgt een statusoverleg.'],
            ['Rapportage', 'Na afloop ontvangt u een volledig rapport, met kaarten, tijdlijn en evaluatie. Een kopie gaat naar ons hoofdkwartier.'],
        ],
        'feiten' => [
            ['Opgericht', '1979'],
            ['Langste lopende inzet', 'Sinds augustus 1979'],
            ['Onbewaakte momenten sinds december 1989', '0'],
            ['Afgeronde opdrachten', '100 procent, exclusief de opdracht uit 1979'],
        ],
        'inzet' => ['Kinshasa, 1991', 'In september 1991 evacueerde Decisive Security een complete frituur uit Kinshasa. Het team stak bij zonsopgang de Kongo over, demonteerde de frietketel binnen veertig minuten en bracht ook het vat saus weg zonder het te laten kantelen. De installatie bereikte haar bestemming drie maanden later, via Beira. De eigenaar reisde op eigen verzoek apart.', '/inzichten/casestudy/evacuatie-kinshasa/'],
        'icoon' => 'schild',
        'beeld' => 'DIEN-01',
    ],
    'decisive-hospitality' => [
        'naam' => 'Decisive Hospitality',
        'kop' => 'Gastvrijheid in uitdagende omgevingen',
        'kort' => 'Horeca, catering en safari\'s op locaties waar gastvrijheid geen vanzelfsprekendheid is.',
        'intro' => 'Decisive Hospitality verzorgt horeca, catering en begeleide excursies op locaties waar gastvrijheid geen vanzelfsprekendheid is. De divisie ontstond uit Kariba Biltong, een producent van gedroogd vlees aan het Kariba-meer, en werd in 1991 versterkt met een volledig geëvacueerde frietinstallatie uit Kinshasa.',
        'tekst' => [
            'Kariba Biltong kwam in 1985 in handen van de groep, als betaling van factuur 0001, de eerste factuur in onze geschiedenis. Sindsdien levert het bedrijf zonder onderbreking gedroogd vlees aan teams, gasten en opdrachtgevers. Het heeft in die periode in geen enkel boekjaar winst gemaakt. De raad van bestuur beschouwt dat als een strategische keuze en heeft het verlies in elk meerjarenplan opgenomen als doelstelling. Die doelstelling wordt elk jaar gehaald.',
            'In 1991 kwam daar de frituur bij: een handgemaakte frietketel uit Roeselare en een saus waarvan het recept sinds 1962 binnen één familie is gebleven. Het recept wordt bewaard in de kluis van ons hoofdkantoor, naast de kist. Het is het best bewaakte document van de groep.',
            'Daarnaast organiseert Decisive Hospitality excursies en safari\'s, met vaste routes, ervaren gidsen en een realistische kijk op wilde dieren. Kapitein Robert, die opgroeide in een hotel bij de Victoria-watervallen, ziet persoonlijk toe op de kwaliteit van de gastvrijheid. Hij is van mening dat elke opdracht, ook een beveiligingsopdracht, begint met een goede kop koffie.',
        ],
        'competenties' => [
            ['Catering op locatie', 'Maaltijden voor teams en gasten, ook als de aanvoer onzeker is. Onze biltong is lang houdbaar, licht van gewicht en volgens de jaarlijkse enquête onder medewerkers voedzaam.'],
            ['Horeca', 'Inrichting en exploitatie van bars en eetgelegenheden, van een veldkeuken tot een bar aan het water. Onze bar in Kamp Stand-By had twintig jaar lang een dak van parachutes.'],
            ['Excursies en safari\'s', 'Begeleide tochten met vaste routes en een realistische kijk op wilde dieren. Onze gidsen beloven niets wat de natuur niet kan waarmaken.'],
            ['Receptuurbeheer', 'Veilige opslag en, zo nodig, evacuatie van recepten van strategisch belang. Wij hebben op dit gebied een trackrecord dat in de sector ongeëvenaard is.'],
            ['Vergadercatering', 'Verzorging van vergaderingen en overleggen, ook op maandag om 06.00 uur. Koffie is altijd inbegrepen.'],
        ],
        'feiten' => [
            ['Opgericht', '1985 (Kariba Biltong)'],
            ['Versterkt', '1991 (frituur, Kinshasa)'],
            ['Boekjaren met verlies', 'Alle, sinds 1985, conform plan'],
            ['Best bewaakte document', 'Het sausrecept uit 1962'],
        ],
        'inzet' => ['Kariba, sinds 1985', 'Kariba Biltong produceert sinds 1985 zonder onderbreking gedroogd vlees aan de oever van het Kariba-meer. Het bedrijf heeft in ruim veertig jaar elke doelstelling uit het meerjarenplan gehaald, waaronder een negatief resultaat in elk boekjaar. Geen andere onderneming in de groep is zo voorspelbaar.'],
        'icoon' => 'kom',
        'beeld' => 'DIEN-02',
    ],
    'decisive-mining' => [
        'naam' => 'Decisive Mining',
        'kop' => 'Grondstoffen. Of iets wat erop lijkt.',
        'kort' => 'Beveiliging en beheer van bodemschatten, met een open blik op wat de bodem uiteindelijk oplevert.',
        'intro' => 'Decisive Mining beveiligt en beheert locaties waar grondstoffen worden gewonnen. De divisie ontstond in 1989 uit een opdracht in Angola, waarvoor de groep werd betaald met de mijn zelf.',
        'tekst' => [
            'In mei 1989 nam de groep de bewaking op zich van een diamantmijn in de hooglanden van Huíla. Na elf weken stelde een onafhankelijke deskundige vast dat de mijn kwarts opleverde en geen diamanten. De lokale bedrijfsleider wist dat al sinds 1961. Hij had de mijn al die tijd rendabel gehouden door het kwarts te leveren aan een glasfabriek en aan aannemers in de regio.',
            'De opdrachtgever betaalde in natura, met de mijn. Sindsdien is Decisive Mining de enige divisie van de groep die elk jaar winst maakt. Die winst gaat, op grond van een overeenkomst uit augustus 1989, vrijwel volledig naar de lokale leiding van de mijn. De raad van bestuur ziet daarin een voorbeeld van duurzaam lokaal eigenaarschap. Kapitein Robert, die de overeenkomst opstelde, spreekt van een langetermijnrelatie.',
            'Wij combineren bewaking met een eerlijke waardebepaling. Wij beloven onze opdrachtgevers niet wat er in de grond zit. Wij vertellen hun wat er uitkomt, ook als dat tegenvalt, en wij luisteren naar de mensen die het al jaren weten.',
        ],
        'competenties' => [
            ['Beveiliging van mijnen', 'Bewaking van winlocaties, opslag en transportroutes, met nachtelijke inspecties door een officier.'],
            ['Waardebepaling', 'Onafhankelijke beoordeling van wat er werkelijk uit de grond komt. Wij werken met deskundigen in Antwerpen en met lokale vakmensen. De lokale vakmensen zijn meestal sneller.'],
            ['Lokaal beheer', 'Wij laten de leiding van een locatie bij de mensen die haar kennen. Onze mijn in Huíla wordt sinds 1961 door dezelfde familie geleid.'],
            ['Kartering', 'Gedetailleerde kaarten van concessies, waarop elke rots die groter is dan een geit een eigen nummer heeft.'],
            ['Betaling in natura', 'Flexibele afrekening in de grondstof die de klant voorhanden heeft, of in de mijn zelf.'],
        ],
        'aanpak' => [
            ['Verkenning', 'Wij brengen de concessie in kaart en spreken met de mensen die er werken.'],
            ['Bewaking', 'Onze teams beveiligen de locatie volgens een vast rooster, zolang als nodig.'],
            ['Keuring', 'Monsters worden onafhankelijk gekeurd. De uitkomst delen wij met de opdrachtgever, ook als die haar niet wil horen.'],
            ['Afrekening', 'Wij rekenen af in geld, in grondstof of in eigendom. De keuze is aan de opdrachtgever.'],
        ],
        'feiten' => [
            ['Opgericht', '1989'],
            ['Locatie', 'Huíla, Angola'],
            ['Gewonnen diamanten', '0'],
            ['Boekjaren met winst', 'Alle, sinds 1989'],
        ],
        'inzet' => ['Angola, 1989', 'Van mei tot augustus 1989 bewaakte de groep een diamantmijn in het zuiden van Angola. In die periode is geen enkele diamant verdwenen. De mijn bleek bij oplevering een kwartsmijn, wat de lokale bedrijfsleider al achtentwintig jaar wist. De groep werd betaald met de mijn zelf.'],
        'icoon' => 'kristal',
        'beeld' => 'DIEN-03',
    ],
    'decisive-capital' => [
        'naam' => 'Decisive Capital',
        'kop' => 'Langetermijnbeleggingen met een korte voorgeschiedenis',
        'kort' => 'Beheer van het vermogen van de groep, met een sterke voorkeur voor de lange termijn.',
        'intro' => 'Decisive Capital beheert het vermogen van de groep. De divisie werd in 1997 opgericht om een pakket Albanese aandelen te beheren en hanteert sindsdien een beleggingshorizon die verder reikt dan die van de meeste vermogensbeheerders.',
        'tekst' => [
            'In 1997 haalde de groep in Albanië het vermogen van een opdrachtgever terug uit een beleggingsconstructie die op dat moment instortte. De opdrachtgever betaalde met een pakket Albanese aandelen, dat bij aankomst in Kamp Stand-By de helft van zijn waarde had verloren. Decisive Capital beheert die portefeuille sindsdien met geduld, en heeft er in bijna dertig jaar niets van verkocht.',
            'Ons beleggingsbeleid rust op drie uitgangspunten. Wij beleggen voor de lange termijn, omdat de korte termijn ons zelden iets heeft opgeleverd. Wij spreiden over drie valuta: Amerikaanse dollars, Rhodesische dollars en geiten. En wij verkopen nooit onder de aankoopprijs, wat in de praktijk betekent dat wij weinig verkopen.',
            'Decisive Capital beheert ook de reserves van de groep, waaronder de kist uit 1979. De kist staat op de balans als reserve, met een onbekende waarde. Volgens onze boekhouder kan de balans daardoor in één klap heel goed of heel slecht worden, maar alleen als iemand de kist openmaakt. Dat is niet voorzien.',
        ],
        'competenties' => [
            ['Vermogensbeheer', 'Beheer van een gespreide portefeuille in drie valuta. Er bestaat geen wisselkoers tussen de drie, wat de rapportage overzichtelijk houdt.'],
            ['Herstructurering', 'Omzetting van moeilijk verhandelbare bezittingen in nieuwe beleggingen, zoals een factuur in een fabriek of een frituur in een recept.'],
            ['Treasury', 'Beheer van de kasstroom van de groep, die voor een belangrijk deel op vier poten loopt.'],
            ['Waardering', 'Waardering van activa waarvoor geen markt bestaat. Waar een waardering niet mogelijk is, vermelden wij dat eerlijk: nog niet bekend.'],
            ['Rapportage', 'Een jaarrekening die nog nooit is afgekeurd. Hij is ook nog nooit goedgekeurd.'],
        ],
        'feiten' => [
            ['Opgericht', '1997'],
            ['Valuta', '3'],
            ['Wisselkoersen', '0'],
            ['Beleggingshorizon', 'Onbepaald'],
        ],
        'inzet' => ['Albanië, 1997', 'In 1997 haalde de groep het vermogen van een opdrachtgever terug uit een beleggingsconstructie die op dat moment instortte, en zette het direct om in een nieuwe belegging. De opdrachtgever betaalde met een pakket Albanese aandelen. Die vormen nog altijd de kern van onze portefeuille.'],
        'icoon' => 'grafiek',
        'beeld' => 'DIEN-04',
    ],
    'decisive-real-estate' => [
        'naam' => 'Decisive Real Estate',
        'kop' => 'Vastgoed op locaties die niet op de kaart staan',
        'kort' => 'Ontwikkeling en beheer van vastgoed op discrete en flexibele locaties.',
        'intro' => 'Decisive Real Estate beheert het vastgoed van de groep, waaronder het wereldwijde hoofdkantoor op Klein Klein Bonaire. De divisie is gespecialiseerd in locaties met een wisselende oppervlakte.',
        'tekst' => [
            'In 1999 verwierf de groep Klein Klein Bonaire, een eilandje voor de kust van Bonaire dat op geen enkele officiële kaart staat. Bij hoog water meet het ongeveer veertig vierkante meter, bij laag water bijna een hectare. Decisive Real Estate bouwde er een vergaderzaal, een kluis en een aanlegsteiger, en ontwikkelde het tot het wereldwijde hoofdkantoor van de groep.',
            'Daarnaast beheert de divisie een netwerk van veertig vestigingen wereldwijd. Op één na zijn dat postbussen. De vestiging in Kralendijk is een postbus met een bankje ervoor. Dankzij dit netwerk is de groep in veertig landen aanwezig, tegen de kosten van één.',
            'Sinds 10 oktober 2010 valt het hoofdkantoor onder Nederland. Decisive Real Estate voert sindsdien elk jaar overleg met de Belastingdienst over de grondslag van de aanslag, die afhangt van het getij. Het bezwaar loopt. Daarnaast is de divisie verantwoordelijk voor de herbestemming van objecten die hun oorspronkelijke functie niet kunnen vervullen, zoals een vliegtuig dat niet vliegt.',
        ],
        'competenties' => [
            ['Hoofdkantoren', 'Ontwikkeling van representatieve vestigingen op plekken die moeilijk te vinden zijn.'],
            ['Herbestemming', 'Nieuwe functies voor bestaande objecten. Onze Antonov doet sinds de verhuizing naar het eiland dienst als golfbreker.'],
            ['Postbussen', 'Een netwerk van veertig vestigingen, waarvan één met een bankje.'],
            ['Getijdenbeheer', 'Wij werken met een oppervlakte die twee keer per dag verandert, en wij meten haar twee keer per dag.'],
            ['Bereikbaarheid', 'Toegang via een vaste veerdienst, die sinds 1999 in contanten wordt betaald.'],
        ],
        'feiten' => [
            ['Hoofdkantoor', 'Klein Klein Bonaire'],
            ['Oppervlakte', '40 m² tot 1 ha, afhankelijk van het getij'],
            ['Vestigingen', '40'],
            ['Waarvan met een bankje', '1'],
        ],
        'inzet' => ['Bonaire, 1999', 'In 1999 verwierf de groep Klein Klein Bonaire met kaarten. De vorige eigenaar houdt vol dat de groep alleen het recht won om over het eiland te praten. Decisive Real Estate heeft dat recht sindsdien ten volle benut.'],
        'icoon' => 'eiland',
        'beeld' => 'DIEN-05',
    ],
    'decisive-people' => [
        'naam' => 'Decisive People',
        'kop' => 'Flexibele inzet van personeel, per dag',
        'kort' => 'Gekwalificeerd personeel op korte termijn, met een contract per dag.',
        'intro' => 'Decisive People levert flexibel personeel voor alle divisies. De divisie ontstond in 2001 uit een uitzendbureau op Bonaire, dat de groep overnam op de dag dat het failliet ging.',
        'tekst' => [
            'In 2001 nam de groep Uitzendbureau Flamingo Flex in Kralendijk over. Het personeelsbestand bestond op dat moment uit nul medewerkers, wat de integratie aanzienlijk vereenvoudigde. Onder de naam Decisive People groeide het bureau uit tot de vaste leverancier van alle flexibele medewerkers van de groep. Dat zijn er inmiddels ruim drieduizend.',
            'De groep heeft vier vaste medewerkers, en dat zijn er sinds 1979 altijd vier geweest. Alle anderen werken via Decisive People, met een contract per dag. Het contract is in het Portugees. Wij vinden dat een contract dat je niet helemaal begrijpt meer indruk maakt, en onze ervaring is dat het aantal geschillen daardoor laag blijft.',
            'Iedere nieuwe medewerker tekent op de eerste dag een geheimhoudingsverklaring over de kist. Omdat niemand weet wat erin zit, wordt die verklaring vrijwel nooit geschonden. Wie drie opdrachten zonder incidenten afrondt, ontvangt een geit uit de eigen veestapel. Dit is het Geitenplan, onze enige secundaire arbeidsvoorwaarde en volgens de jaarlijkse enquête ook de populairste.',
        ],
        'competenties' => [
            ['Werving', 'Snelle inzet van mensen met de juiste ervaring, of de juiste houding.'],
            ['Contractbeheer', 'Contracten per dag, opgesteld in het Portugees en zo nodig dagelijks verlengd.'],
            ['Onboarding', 'Een eerste werkdag met een geheimhoudingsverklaring, een rooster en koffie.'],
            ['Beloning', 'Het Geitenplan: na drie afgeronde opdrachten zonder incidenten een geit uit de eigen veestapel.'],
            ['Loopbaanontwikkeling', 'Doorgroei naar een vaste aanstelling is mogelijk zodra er een plek vrijkomt. Dat is sinds 1979 niet voorgekomen.'],
        ],
        'aanpak' => [
            ['Aanvraag', 'U geeft aan hoeveel mensen u nodig heeft, waar en voor hoeveel dagen.'],
            ['Selectie', 'Wij selecteren op ervaring, discipline en vooral op geduld.'],
            ['Inzet', 'Elke medewerker ontvangt een contract voor één dag, dat zo nodig dagelijks wordt verlengd.'],
            ['Evaluatie', 'Na drie opdrachten zonder incidenten volgt een evaluatie, en een geit.'],
        ],
        'feiten' => [
            ['Overgenomen', '2001'],
            ['Vaste medewerkers', '4'],
            ['Flexibele medewerkers', 'Ruim 3.000'],
            ['Duur van een contract', '1 dag'],
            ['Taal van het contract', 'Portugees'],
        ],
        'inzet' => ['Bonaire, 2001', 'Overname van een uitzendbureau in Kralendijk, op de dag van het faillissement, met behoud van het volledige personeelsbestand van nul medewerkers. Binnen tien jaar leverde het bureau ruim drieduizend mensen aan de groep.'],
        'icoon' => 'badge',
        'beeld' => 'DIEN-06',
    ],
    'decisive-agri' => [
        'naam' => 'Decisive Agri',
        'kop' => 'Duurzame veehouderij en natuurlijk groenbeheer',
        'kort' => 'Beheer van de veestapel van de groep en natuurlijk groenonderhoud.',
        'intro' => 'Decisive Agri beheert de veestapel van de groep: 412 geiten, verworven als betaling in de loop van ruim veertig jaar. De divisie verzorgt daarnaast al het groenonderhoud op Bonaire, op natuurlijke wijze.',
        'tekst' => [
            'De eerste betaling in de geschiedenis van de groep was een geit, voor de reparatie van een waterpomp in Manica. Er volgden meer reparaties, en meer geiten. Decisive Agri beheert die veestapel, die inmiddels 412 dieren telt. Van elk dier wordt een eigen bladzijde bijgehouden in het register van de groep, dat de titel Activa draagt en inmiddels uit meerdere delen bestaat.',
            'Sinds 2010 graast de veestapel op Bonaire, waar ook veel wilde geiten rondlopen. Welke daarvan van de groep zijn, wordt onderzocht door een externe commissie. Tot die commissie haar bevindingen presenteert, houdt Decisive Agri vast aan het aantal van 412, dat zij als ondergrens beschouwt.',
            'Daarnaast verzorgt de divisie al het groenonderhoud op Bonaire en op het hoofdkantoor, zonder machines, brandstof of personeel. Dat levert de groep een uitstekende score op het gebied van duurzaamheid op, en een beperkt aantal vragen van omwonenden over hun tuin.',
        ],
        'competenties' => [
            ['Veehouderij', 'Duurzaam beheer van 412 geiten op Bonaire, met een eigen register per dier.'],
            ['Groenbeheer', 'Onderhoud van terreinen zonder machines, brandstof of personeel.'],
            ['Begeleiding van vee', 'Veilige doorgang van levende have over lange afstanden, met een opleverpercentage dat zelden onder de honderd ligt.'],
            ['Telling', 'Een betrouwbare telling, ook waar wilde dieren rondlopen. Onze tellingen vallen zelden lager uit dan verwacht.'],
            ['Betalingsverkeer', 'Ontvangst en verwerking van betalingen in levende have, inclusief de administratie.'],
        ],
        'feiten' => [
            ['Veestapel', '412 geiten'],
            ['Waardering', 'Nog niet bekend'],
            ['Opleverpercentage Malawi, 1986', '108 procent'],
            ['Machines in het groenbeheer', '0'],
        ],
        'inzet' => ['Malawi, 1986', 'In 1986 begeleidde de groep een kudde koeien over lange afstand door Malawi. De kudde werd opgeleverd met 108 procent van het aantal dieren. De afwijking is onderzocht en niet verklaard. De opdrachtgever heeft het overschot behouden.'],
        'icoon' => 'geit',
        'beeld' => 'DIEN-07',
    ],
];

/*
 * Sectoren. Velden: naam, kort, intro, tekst (alinea's), uitdagingen ([titel, tekst]),
 * divisies, wapenfeit ([titel, tekst]).
 */
const SECTOREN = [
    'overheden' => [
        'naam' => 'Overheden',
        'kort' => 'Ondersteuning van staten in overgang, ook als die staat niet meer bestaat.',
        'intro' => 'Overheden in overgang hebben behoefte aan stabiliteit, continuïteit en partners die blijven. Decisive Outcomes Group ondersteunt staten bij beveiliging, personeel en planning. Onze ervaring met staten in overgang gaat terug tot 1979, toen onze eerste opdrachtgever zelf in overgang raakte.',
        'tekst' => [
            'Een overheid in overgang heeft weinig aan partners die vertrekken zodra het spannend wordt. Wij bieden het tegenovergestelde. Onze teams blijven op hun post tot een opdracht formeel is ingetrokken, en wij nemen het woord formeel daarbij zeer serieus. Wij rapporteren aan de oorspronkelijke opdrachtgever, ook als die inmiddels anders heet of niet meer bestaat.',
            'Wij werken met ministeries, provincies en lokale besturen, en met traditionele leiders, die in de praktijk vaak meer te zeggen hebben dan de kaart doet vermoeden. Wij schrijven in op internationale aanbestedingen en stellen onze offertes op met dezelfde zorg als onze rapporten: volledig, tot op de laatste cent en in de valuta van onze keuze.',
        ],
        'uitdagingen' => [
            ['Continuïteit', 'Wij blijven, ook als de opdrachtgever verandert. Onze rapportage aan de oorspronkelijke opdrachtgever loopt nog.'],
            ['Aanbestedingen', 'Wij schrijven volledig in op internationale aanbestedingen, in de valuta van onze keuze.'],
            ['Flexibele inzet', 'Personeel per dag via Decisive People, ook op korte termijn.'],
            ['Rapportage', 'Elke inzet eindigt met een volledig rapport, met kaarten, tijdlijn en evaluatie. Wij hebben er 412 verstuurd.'],
        ],
        'divisies' => ['decisive-security', 'decisive-people'],
        'wapenfeit' => ['Freetown, 1995', 'In april 1995 schreef de groep in op de beveiliging van diamantvelden in Sierra Leone. De presentatie werd goed ontvangen, tot de laatste sheet, waarop de prijs in Rhodesische dollars stond. De minister vroeg naar de wisselkoers. De opdracht ging naar een andere partij. Wij beschouwen het als onze leerzaamste aanbesteding.'],
    ],
    'mijnbouw' => [
        'naam' => 'Mijnbouw en grondstoffen',
        'kort' => 'Bescherming van waardevolle bodemschatten, of iets wat erop lijkt.',
        'intro' => 'Mijnbouw vraagt om bescherming van locaties, opslag en transportroutes, vaak ver van de bewoonde wereld. Decisive Mining en Decisive Security combineren bewaking met een onafhankelijke waardebepaling van wat er uit de grond komt.',
        'tekst' => [
            'Mijnen liggen zelden op plekken waar het makkelijk werken is. De wegen zijn slecht, de afstanden groot en de verwachtingen vaak hoger dan de opbrengst. Wij kennen die omstandigheden uit eigen ervaring: sinds 1989 zijn wij zelf eigenaar van een mijn, en wij weten hoe het is als de bodem iets anders oplevert dan de papieren beloofden.',
            'Onze aanpak is daarom nuchter. Wij beveiligen de locatie, wij laten monsters onafhankelijk keuren en wij werken met de mensen die de mijn al jaren kennen. Wij vertellen u wat er werkelijk uit de grond komt, ook als dat geen goed nieuws is. Onze opdrachtgevers waarderen die eerlijkheid, soms pas achteraf.',
        ],
        'uitdagingen' => [
            ['Afgelegen locaties', 'Wij zijn gewend aan plekken die niet op de kaart staan, of op een andere plek dan verwacht.'],
            ['Waardebepaling', 'Wij stellen vast wat er werkelijk wordt gewonnen, ook als dat tegenvalt.'],
            ['Lokale kennis', 'Wij werken met de mensen die er al jaren werken. Zij weten meestal het meest.'],
            ['Betaling', 'Wij accepteren betaling in de grondstof die de klant voorhanden heeft.'],
        ],
        'divisies' => ['decisive-mining', 'decisive-security'],
        'wapenfeit' => ['Angola, 1989', 'Van mei tot augustus 1989 bewaakte de groep een diamantmijn in de hooglanden van Huíla. Er is in die periode geen enkele diamant verdwenen. Bij oplevering bleek de mijn een kwartsmijn. De groep werd betaald met de mijn, die sindsdien elk jaar winst maakt.'],
    ],
    'horeca' => [
        'naam' => 'Horeca en voedselindustrie',
        'kort' => 'Continuïteit van de keten, van biltong tot frietketel.',
        'intro' => 'In de horeca en de voedselindustrie draait alles om continuïteit. Decisive Hospitality zorgt dat de keten blijft draaien, van productie tot bediening, ook als de omstandigheden veranderen.',
        'tekst' => [
            'Een keuken die stilvalt, is binnen een dag een probleem. Een recept dat verloren gaat, is dat voor altijd. Wij helpen ondernemers in de horeca en de voedselindustrie om beide te voorkomen: met beveiliging van locaties en voorraden, met catering op plekken waar de aanvoer onzeker is, en zo nodig met de volledige evacuatie van installaties en receptuur.',
            'Wij spreken uit ervaring. De groep exploiteert sinds 1985 een eigen producent van gedroogd vlees, en bewaart sinds 1991 een sausrecept dat beter wordt beveiligd dan enig ander document in ons bezit. Wij weten wat het betekent om een onderneming draaiende te houden, ook in jaren waarin dat financieel niet voor de hand ligt.',
        ],
        'uitdagingen' => [
            ['Bevoorrading', 'Voeding voor teams en gasten, ook als de aanvoer onzeker is.'],
            ['Receptuur', 'Veilige opslag en, zo nodig, evacuatie van recepten van strategisch belang.'],
            ['Evacuatie van installaties', 'Demontage en transport van keukenapparatuur, binnen een dag, zonder iets te laten kantelen.'],
            ['Rendement', 'Ruim veertig jaar ervaring met een onderneming die blijft draaien zonder winst te maken.'],
        ],
        'divisies' => ['decisive-hospitality', 'decisive-security'],
        'wapenfeit' => ['Kinshasa, 1991', 'In september 1991 evacueerde de groep een complete frituur uit Kinshasa: een handgemaakte frietketel uit Roeselare en een vat saus volgens een familierecept uit 1962. De installatie kwam drie maanden later veilig aan. Het recept ligt nu in de kluis op ons hoofdkantoor.'],
    ],
    'vastgoed' => [
        'naam' => 'Vastgoed en infrastructuur',
        'kort' => 'Beheer van locaties die niet op de kaart staan.',
        'intro' => 'Vastgoed op bijzondere locaties vraagt om beheer dat rekening houdt met wisselende omstandigheden. Decisive Real Estate ontwikkelt en beheert vestigingen voor de groep en haar opdrachtgevers, waaronder het wereldwijde hoofdkantoor.',
        'tekst' => [
            'Niet elke locatie laat zich vangen in een kadaster. Sommige staan niet op de kaart, andere veranderen van omvang met het getij, en weer andere zijn alleen bereikbaar voor wie de veerman kent. Wij hebben ruime ervaring met zulke locaties, omdat ons eigen hoofdkantoor er een is.',
            'Wij adviseren eigenaren en beheerders over ontwikkeling, bereikbaarheid, herbestemming en de fiscale gevolgen van een bijzondere ligging. Wij zijn daarbij open over wat wij nog niet hebben opgelost. Ons bezwaar tegen de jaarlijkse aanslag voor de grond van ons hoofdkantoor loopt sinds 2011.',
        ],
        'uitdagingen' => [
            ['Wisselende oppervlakte', 'Ervaring met locaties die bij hoog water 40 m² meten en bij laag water bijna een hectare.'],
            ['Bereikbaarheid', 'Vestigingen die moeilijk te vinden zijn, met een postbus die altijd werkt.'],
            ['Herbestemming', 'Nieuwe functies voor bestaande objecten, zoals een vliegtuig als golfbreker.'],
            ['Fiscale positie', 'Ervaring met aanslagen voor grond waarvan de oppervlakte twee keer per dag verandert.'],
        ],
        'divisies' => ['decisive-real-estate'],
        'wapenfeit' => ['Bonaire, 1999', 'In 1999 verwierf de groep Klein Klein Bonaire, een eilandje dat op geen enkele kaart staat. Decisive Real Estate bouwde er een vergaderzaal, een kluis en een aanlegsteiger, en ontwikkelde het tot het wereldwijde hoofdkantoor van de groep.'],
    ],
    'landbouw' => [
        'naam' => 'Landbouw en veehouderij',
        'kort' => 'Veilige doorgang voor levende have.',
        'intro' => 'Veehouderij en landbouw vragen om geduld en zorg voor levende have. Decisive Agri beheert de veestapel van de groep en begeleidt vee over lange afstanden.',
        'tekst' => [
            'Levende have laat zich niet plannen zoals vracht. Dieren hebben eigen opvattingen over routes en tempo, en een kudde die vertrekt, is bij aankomst zelden precies dezelfde. Wij begeleiden vee over lange afstanden, met vaste rustpunten, zorg voor water en een nauwkeurige telling bij vertrek en aankomst.',
            'De groep is zelf een van de grotere veehouders in het Caribisch deel van het Koninkrijk. Onze veestapel van 412 geiten is in ruim veertig jaar opgebouwd uit betalingen van opdrachtgevers. Wij weten daardoor hoe het is om dieren te ontvangen, te registreren en te verzorgen, en hoe lastig het kan zijn om ze te onderscheiden van de wilde geiten van de buren.',
        ],
        'uitdagingen' => [
            ['Telling', 'Een betrouwbare telling, ook waar wilde dieren rondlopen.'],
            ['Transport', 'Veilige doorgang van levende have, met een opleverpercentage dat zelden onder de honderd ligt.'],
            ['Groenbeheer', 'Natuurlijk onderhoud van terreinen, zonder machines.'],
            ['Betaling in levende have', 'Wij accepteren betaling in vee en verzorgen de administratie per dier.'],
        ],
        'divisies' => ['decisive-agri'],
        'wapenfeit' => ['Malawi, 1986', 'In 1986 begeleidde de groep een kudde koeien door Malawi. De kudde werd opgeleverd met acht procent meer dieren dan bij vertrek. De afwijking is onderzocht en niet verklaard.'],
    ],
    'maatschappelijk' => [
        'naam' => 'Maatschappelijke organisaties',
        'kort' => 'Partner bij bevrijding, ook preventief.',
        'intro' => 'Maatschappelijke organisaties werken vaak in gebieden waar veiligheid niet vanzelfsprekend is. Decisive Security ondersteunt hen met beveiliging, risicobeoordeling en, waar nodig, evacuatie.',
        'tekst' => [
            'Scholen, ziekenhuizen, kerken en hulporganisaties hebben een partner nodig die snel komt, rustig blijft en goed luistert naar de mensen ter plaatse. Wij werken met lokale partners, die het gebied kennen en die in onze ervaring meestal beter onderhandelen dan wij. Dat beschouwen wij niet als een zwakte, maar als een uitgangspunt.',
            'Wij blijven ook na afloop betrokken. Waar wij eenmaal zijn geweest, komen wij graag terug. In Swaziland zijn wij sinds 1993 elk jaar aanwezig bij de viering van Bevrijdingsdag, als hoofdsponsor, en ons onderhoud aan de generator van de dorpsschool is in al die jaren niet één keer overgeslagen.',
        ],
        'uitdagingen' => [
            ['Risicobeoordeling', 'Analyse van routes, ophaalpunten en dreigingen, vooraf.'],
            ['Preventie', 'Wij treden op voordat er iets gebeurt, en soms ook als er niets gebeurt.'],
            ['Lokale samenwerking', 'Wij werken met lokale partners, die meestal beter onderhandelen dan wij.'],
            ['Langdurige betrokkenheid', 'Sponsoring, onderhoud en jaarlijkse aanwezigheid, voor onbepaalde tijd en met indexering.'],
        ],
        'divisies' => ['decisive-security'],
        'wapenfeit' => ['Swaziland, 1992', 'In november 1992 reisde een team van de groep naar een dorp in Swaziland, op basis van een melding dat het dorp bezet was. Bij aankomst bleek het dorp bezet door gasten voor de opening van een nieuwe school. Het team herstelde de generator van de school. Het dorp viert die dag sindsdien elk jaar als Bevrijdingsdag, met de groep als hoofdsponsor.'],
    ],
];

const BESTUUR = [
    ['Kolonel Frederik', 'Chief Executive Officer', 'Frederik is voorzitter van de raad van bestuur en lid van alle commissies, ook van de commissie die toezicht houdt op de raad van bestuur. Hij groeide op op een tabaksboerderij bij Marandellas en leidde in 1979 het team dat de basis legde voor de groep. Hij gelooft in een platte organisatie en in korte vergaderingen: de meeste besluiten zijn genomen zodra hij opstaat. Hij tekent elk contract persoonlijk.', 'LEAD-01'],
    ['Majoor Hayo', 'Chief Strategy Officer', 'Hayo is verantwoordelijk voor strategie, precisieadvies en compliance, en vormt in die laatste rol in zijn eentje de afdeling. Als zoon van een landmeter uit Bulawayo leerde hij kaartlezen voordat hij kon fietsen; zijn kaarten zijn sindsdien de basis van elke inzet. Hij schrijft elke vijf jaar het meerjarenplan, houdt de notulen bij van het Stand-By-overleg en rapporteert na elke opdracht aan het hoofdkwartier.', 'LEAD-02'],
    ['Kapitein Jochem', 'Chief Operating Officer', 'Jochem is verantwoordelijk voor operaties, wagenpark, luchtvloot en vastgoed. Hij begon als monteur in Umtali en houdt sindsdien alles rijdend wat de groep bezit, ook als er onderdelen ontbreken. Het wagenpark bestaat uit twee Land Rovers uit 1971; zijn jaarlijkse vervangingsplan wordt elk jaar unaniem goedgekeurd. Zijn functieomschrijving omvat ook het dragen en bewaken van de kist, een taak die hij sinds 1979 uitvoert.', 'LEAD-03'],
    ['Kapitein Robert', 'Chief Commercial Officer', 'Robert is verantwoordelijk voor verkoop, contracten en de relatie met de aandeelhouders. Hij groeide op in een hotel bij de Victoria-watervallen, spreekt vloeiend Portugees en sloot in 1984 de eerste overeenkomst in de geschiedenis van de groep. Hij beschouwt elke afwijzing als een warme lead en elke verloren aanbesteding als een leermoment. Zijn pijplijn is sinds 1995 uitstekend gevuld.', 'LEAD-04'],
];

const TIJDLIJN = [
    ['1979', 'Een team van verkenners neemt een opdracht aan in Manica, Mozambique. De opdracht is nooit ingetrokken en loopt nog.'],
    ['1984', 'Oprichting van Decisive Outcomes aan een keukentafel. Eerste klant: Senhor Almeida. Eerste factuur: nummer 0001.'],
    ['1985', 'Kariba Biltong wordt de eerste dochteronderneming, als betaling van factuur 0001.'],
    ['1989', 'Een opdracht in Angola legt de basis voor Decisive Mining.'],
    ['1991', 'Evacuatie van een frituur in Kinshasa. Decisive Hospitality wordt versterkt.'],
    ['1992', 'Bevrijding van een dorp in Swaziland. Het dorp viert sindsdien Bevrijdingsdag.'],
    ['1993', 'Verwerving van luchttransportcapaciteit in Sharjah. De vliegvergunning is in behandeling.'],
    ['1995', 'Eerste deelname aan een internationale aanbesteding, in Freetown.'],
    ['1999', 'Verwerving van Klein Klein Bonaire, het huidige hoofdkantoor.'],
    ['2005', 'Oprichting van de holding Decisive Outcomes Group bij de notaris in Kralendijk.'],
    ['2010', 'Het hoofdkantoor valt voortaan onder Nederland. De Belastingdienst stuurt een eerste aanslag.'],
    ['2019', 'Start van de divisie Benelux.'],
];

const KERNWAARDEN = [
    ['Pamwe chete', 'Shona voor "alles samen". Wij werken als één team, en dat doen wij sinds 1979. Er was ook niemand anders.'],
    ['Geduld', 'Wij staan sinds 1979 onafgebroken stand-by. Wij beoordelen een opdracht niet op de eerste week, maar op de eerste veertig jaar.'],
    ['Flexibiliteit', 'In planning, in uitvoering en vooral in betaling. Wij accepteren geld, grondstoffen, bedrijven en levende have.'],
    ['Betrouwbaarheid', 'Wat ons wordt toevertrouwd, blijft in goede handen. De kist is nog dicht.'],
];

const PERSCONTACT = 'Annelies Brouwer, Corporate Communications';
const STAGIAIR = 'Kim de Graaf, stagiair Corporate Communications, namens Annelies Brouwer (met verlof)';

const OVER_DE_GROEP = 'Decisive Outcomes Group levert sinds 1984 beveiliging, logistiek, horeca, vastgoed en veehouderij in complexe omgevingen, met kantoren in veertig landen en een hoofdkantoor op Klein Klein Bonaire. De groep staat sinds 1979 onafgebroken stand-by.';
