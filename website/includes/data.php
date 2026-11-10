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

const DIVISIES = [
    'decisive-security' => [
        'naam' => 'Decisive Security',
        'kop' => 'Beveiliging, bewaking en evacuatie onder alle omstandigheden',
        'kort' => 'Bescherming van mensen, middelen en locaties, ook waar anderen al vertrokken zijn.',
        'intro' => 'Decisive Security is de oudste divisie van de groep. Zij levert beveiliging, bewaking en evacuatie in omgevingen waar de situatie snel verandert en de planning zelden standhoudt. Onze teams zijn gewend om lang op hun plek te blijven.',
        'competenties' => [
            ['Bewaking', 'Langdurige bewaking van objecten en locaties. Onze langste lopende inzet begon in 1979.'],
            ['Evacuatie', 'Verplaatsing van mensen en waardevolle goederen uit instabiele gebieden, met voorrang voor wat de klant het belangrijkst vindt.'],
            ['Risicobeoordeling', 'Analyse van routes, ophaalpunten en dreigingen, onderbouwd met eigen kaartmateriaal.'],
        ],
        'inzet' => ['Kinshasa, 1991', 'Volledige evacuatie van een Belgische frituur, inclusief installatie en receptuur, binnen één dag.'],
        'icoon' => 'schild',
        'beeld' => 'DIEN-01',
    ],
    'decisive-hospitality' => [
        'naam' => 'Decisive Hospitality',
        'kop' => 'Gastvrijheid in uitdagende omgevingen',
        'kort' => 'Horeca, catering en safari\'s op locaties waar gastvrijheid geen vanzelfsprekendheid is.',
        'intro' => 'Decisive Hospitality verzorgt horeca, catering en begeleide excursies. De divisie ontstond uit Kariba Biltong (1985) en werd in 1991 versterkt met een volledig geëvacueerde frietinstallatie. Zij draait sinds 1985 een structureel en bewust gekozen verlies.',
        'competenties' => [
            ['Catering op locatie', 'Voeding voor teams en gasten, ook als de aanvoer onzeker is.'],
            ['Excursies', 'Begeleide safari\'s met vaste routes en een realistische kijk op wilde dieren.'],
            ['Receptuurbeheer', 'Veilige opslag van recepten van strategisch belang.'],
        ],
        'inzet' => ['Kariba, sinds 1985', 'Continuïteit van de productie van gedroogd vlees, ondanks een negatief resultaat in elk boekjaar.'],
        'icoon' => 'kom',
        'beeld' => 'DIEN-02',
    ],
    'decisive-mining' => [
        'naam' => 'Decisive Mining',
        'kop' => 'Grondstoffen. Of iets wat erop lijkt.',
        'kort' => 'Beveiliging en beheer van bodemschatten, met een open blik op wat de bodem uiteindelijk oplevert.',
        'intro' => 'Decisive Mining beveiligt en beheert locaties waar grondstoffen worden gewonnen. De divisie ontstond in 1989 uit een opdracht in Angola, waarvoor de groep in natura werd betaald.',
        'competenties' => [
            ['Beveiliging van mijnen', 'Bewaking van winlocaties, opslag en transportroutes.'],
            ['Waardebepaling', 'Onafhankelijke beoordeling van wat er werkelijk uit de grond komt.'],
            ['Betaling in natura', 'Flexibele afrekening in de grondstof die de klant voorhanden heeft.'],
        ],
        'inzet' => ['Angola, 1989', 'Bewaking van een diamantmijn die bij oplevering een kwartsmijn bleek. Betaald in kwarts.'],
        'icoon' => 'kristal',
        'beeld' => 'DIEN-03',
    ],
    'decisive-capital' => [
        'naam' => 'Decisive Capital',
        'kop' => 'Langetermijnbeleggingen met een korte voorgeschiedenis',
        'kort' => 'Beheer van het vermogen van de groep, met een sterke voorkeur voor de lange termijn.',
        'intro' => 'Decisive Capital beheert de beleggingen van de groep. De portefeuille werd in 1997 opgebouwd uit een pakket Albanese aandelen en wordt sindsdien met geduld beheerd.',
        'competenties' => [
            ['Vermogensbeheer', 'Beheer van een gespreide portefeuille in drie valuta: Amerikaanse dollars, Rhodesische dollars en geiten.'],
            ['Herstructurering', 'Omzetting van moeilijk verhandelbare bezittingen in nieuwe beleggingen.'],
            ['Rapportage', 'Een jaarverslag dat nog nooit is afgekeurd.'],
        ],
        'inzet' => ['Albanië, 1997', 'Geld teruggehaald uit een piramidespel en direct omgezet in een nieuwe belegging.'],
        'icoon' => 'grafiek',
        'beeld' => 'DIEN-04',
    ],
    'decisive-real-estate' => [
        'naam' => 'Decisive Real Estate',
        'kop' => 'Vastgoed op locaties die niet op de kaart staan',
        'kort' => 'Ontwikkeling en beheer van vastgoed op discrete en flexibele locaties.',
        'intro' => 'Decisive Real Estate beheert het vastgoed van de groep, waaronder het wereldwijde hoofdkantoor op Klein Klein Bonaire. De divisie is gespecialiseerd in locaties met een wisselende oppervlakte.',
        'competenties' => [
            ['Hoofdkantoren', 'Ontwikkeling van representatieve vestigingen op plekken die moeilijk te vinden zijn.'],
            ['Herbestemming', 'Nieuwe functies voor bestaande objecten, zoals een vliegtuig als golfbreker.'],
            ['Postbussen', 'Een netwerk van veertig vestigingen, waarvan één met een bankje.'],
        ],
        'inzet' => ['Bonaire, 1999', 'Verwerving van Klein Klein Bonaire: 40 m² bij hoog water, bijna een hectare bij laag water.'],
        'icoon' => 'eiland',
        'beeld' => 'DIEN-05',
    ],
    'decisive-people' => [
        'naam' => 'Decisive People',
        'kop' => 'Flexibele inzet van personeel, per dag',
        'kort' => 'Gekwalificeerd personeel op korte termijn, met een contract per dag.',
        'intro' => 'Decisive People levert flexibel personeel voor alle divisies. De divisie ontstond in 2001 uit een uitzendbureau op Bonaire, dat de groep overnam op de dag dat het failliet ging.',
        'competenties' => [
            ['Werving', 'Snelle inzet van mensen met de juiste ervaring, of de juiste houding.'],
            ['Contractbeheer', 'Contracten per dag, opgesteld in het Portugees.'],
            ['Beloning', 'Het Geitenplan: na drie afgeronde opdrachten een geit uit de eigen veestapel.'],
        ],
        'inzet' => ['Bonaire, 2001', 'Overname van een uitzendbureau, met behoud van het volledige personeelsbestand van nul medewerkers.'],
        'icoon' => 'badge',
        'beeld' => 'DIEN-06',
    ],
    'decisive-agri' => [
        'naam' => 'Decisive Agri',
        'kop' => 'Duurzame veehouderij en natuurlijk groenbeheer',
        'kort' => 'Beheer van de veestapel van de groep en natuurlijk groenonderhoud.',
        'intro' => 'Decisive Agri beheert de veestapel van de groep: 412 geiten, verworven als betaling in de loop van ruim veertig jaar. De divisie verzorgt daarnaast al het groenonderhoud op Bonaire, op natuurlijke wijze.',
        'competenties' => [
            ['Veehouderij', 'Duurzaam beheer van 412 geiten op Bonaire, waar ook veel wilde geiten lopen.'],
            ['Groenbeheer', 'Onderhoud van terreinen zonder machines, brandstof of personeel.'],
            ['Begeleiding van vee', 'Veilige doorgang van levende have over lange afstanden.'],
        ],
        'inzet' => ['Malawi, 1986', 'Begeleiding van een kudde koeien, opgeleverd met 108 procent van het aantal dieren.'],
        'icoon' => 'geit',
        'beeld' => 'DIEN-07',
    ],
];

const SECTOREN = [
    'overheden' => ['Overheden', 'Ondersteuning van staten in overgang, ook als die staat niet meer bestaat.', ['decisive-security', 'decisive-people'], 'Freetown, 1995: een volledige offerte voor de beveiliging van diamantvelden, opgesteld in Rhodesische dollars.'],
    'mijnbouw' => ['Mijnbouw en grondstoffen', 'Bescherming van waardevolle bodemschatten, of iets wat erop lijkt.', ['decisive-mining', 'decisive-security'], 'Angola, 1989: bewaking van een mijn die anders bleek dan verwacht.'],
    'horeca' => ['Horeca en voedselindustrie', 'Continuïteit van de keten, van biltong tot frietketel.', ['decisive-hospitality', 'decisive-security'], 'Kinshasa, 1991: evacuatie van een complete frituur, receptuur inbegrepen.'],
    'vastgoed' => ['Vastgoed en infrastructuur', 'Beheer van locaties die niet op de kaart staan.', ['decisive-real-estate'], 'Bonaire, 1999: verwerving en ontwikkeling van het wereldwijde hoofdkantoor.'],
    'landbouw' => ['Landbouw en veehouderij', 'Veilige doorgang voor levende have.', ['decisive-agri'], 'Malawi, 1986: een kudde koeien begeleid en opgeleverd met acht procent meer dieren.'],
    'maatschappelijk' => ['Maatschappelijke organisaties', 'Partner bij bevrijding, ook preventief.', ['decisive-security'], 'Swaziland, 1992: bevrijding van een dorp dat niet bezet was. Het dorp viert sindsdien elk jaar Bevrijdingsdag.'],
];

const BESTUUR = [
    ['Kolonel Frederik', 'Chief Executive Officer', 'Frederik is voorzitter van de raad van bestuur en lid van alle commissies. Hij groeide op op een tabaksboerderij bij Marandellas en leidde in 1979 het team dat de basis legde voor de groep. Hij gelooft in een platte organisatie en tekent elk contract persoonlijk.', 'LEAD-01'],
    ['Majoor Hayo', 'Chief Strategy Officer', 'Hayo is verantwoordelijk voor strategie, precisieadvies en compliance. Als zoon van een landmeter uit Bulawayo leerde hij kaartlezen voordat hij kon fietsen. Hij schrijft elke vijf jaar het meerjarenplan en rapporteert na elke opdracht aan het hoofdkwartier.', 'LEAD-02'],
    ['Kapitein Jochem', 'Chief Operating Officer', 'Jochem is verantwoordelijk voor operaties, wagenpark, luchtvloot en vastgoed. Hij begon als monteur in Umtali en houdt sindsdien alles rijdend wat de groep bezit. Zijn functieomschrijving omvat ook het dragen en bewaken van de kist.', 'LEAD-03'],
    ['Kapitein Robert', 'Chief Commercial Officer', 'Robert is verantwoordelijk voor verkoop, contracten en de relatie met de aandeelhouders. Hij groeide op in een hotel bij de Victoria-watervallen, spreekt vloeiend Portugees en beschouwt elke afwijzing als een warme lead.', 'LEAD-04'],
];

const TIJDLIJN = [
    ['1979', 'Een team van vier verkenners neemt een opdracht aan in Manica, Mozambique. De opdracht loopt nog.'],
    ['1984', 'Oprichting van Decisive Outcomes, aan een keukentafel. Eerste factuur: nummer 0001.'],
    ['1991', 'Evacuatie in Kinshasa legt de basis voor Decisive Hospitality.'],
    ['1995', 'Eerste deelname aan een internationale aanbesteding, in Freetown.'],
    ['1999', 'Verwerving van Klein Klein Bonaire, het huidige hoofdkantoor.'],
    ['2005', 'Oprichting van de holding Decisive Outcomes Group in Kralendijk.'],
    ['2019', 'Start van de divisie Benelux.'],
];

const KERNWAARDEN = [
    ['Pamwe chete', 'Shona voor "alles samen". Er was ook niemand anders.'],
    ['Geduld', 'Wij staan sinds 1979 onafgebroken stand-by.'],
    ['Flexibiliteit', 'In planning, in uitvoering en vooral in betaling.'],
    ['Betrouwbaarheid', 'De kist is nog dicht.'],
];

const OVER_DE_GROEP = 'Decisive Outcomes Group levert sinds 1984 beveiliging, logistiek, horeca, vastgoed en veehouderij in complexe omgevingen, met kantoren in veertig landen en een hoofdkantoor op Klein Klein Bonaire. De groep staat sinds 1979 onafgebroken stand-by.';
