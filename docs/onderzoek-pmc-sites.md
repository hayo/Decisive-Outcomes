# Onderzoek: sites van echte PMC's en beveiligingsbedrijven

Uitgevoerd op 10 november 2026. Doel: nagaan of de aannames in [sitemap.md](../website/sitemap.md) en [beeldtaal.md](../website/beeldtaal.md) kloppen met hoe echte bedrijven zich online presenteren.

## Bekeken sites

| Bedrijf | Wat het is | Opvallend |
|---|---|---|
| [Constellis](https://www.constellis.com/) | Opvolger van onder meer Blackwater/Academi en Triple Canopy | Drieledige kop met "outcomes" erin, ervaring in jaren, werkgebieden per regio, sterke nadruk op werving |
| [GardaWorld Security](https://www.garda.com/) | Groot beveiligingsbedrijf | Werving staat direct onder de hero; cijferbalk, prijzen, een klantverhaal, een citaat van de directie |
| [Control Risks](https://www.controlrisks.com/) | Risicoadvies en beveiliging | Rustig en adviserend; een jaarlijks risicorapport als vlaggenschip; kaarten in 16:9 met een label voor het type inhoud |
| [Amentum](https://www.amentum.com/) | Beursgenoteerde defensiecontractor (onder meer de voormalige DynCorp) | Investor relations in de bovenbalk, cijfers (medewerkers, landen), lijniconen per markt, ethiek en compliance in de footer |
| Executive Outcomes (2020) | Heropgericht door de oprichter | Werd aangekondigd via sociale media; [geen beschreven website](https://overtdefense.com/2020/11/27/private-military-contractor-executive-outcomes-revived-after-22-years) |

De sites zijn op 10 november 2026 ook visueel bekeken in Chrome, met schermafbeeldingen en de berekende stijlen van de pagina's (zie *Vormgeving*).

## Vormgeving

| Bedrijf | Achtergrond | Hero | Header | Lettertype | Knoppen |
|---|---|---|---|---|---|
| Constellis | wit | donker, volle breedte, witte kop in hoofdletters | transparant over de hero | Europa (geometrische sans), vet | vierkant, 3 px afronding |
| GardaWorld | wit | foto van een medewerker, donker gemaakt, witte kop in dunne letter | rood vlak | Neue Helvetica, licht | vierkant, rood accent met pijl |
| Control Risks | wit en lichtgrijs | donkerblauw met een fotocollage, witte kop | wit | Open Sans | vierkant, **goud/oker op donker** |
| Amentum | wit, footer donkergrijs | aarde bij nacht met netwerklijnen, witte kop | transparant over de hero | Roboto, vet | vierkant, hoofdletters |

### Wat dit betekent

- **Licht ontwerp klopt.** Alle vier hebben een witte basis. Het patroon is een donkere hero over de volle breedte met een witte kop, daaronder lichte secties.
- **Goud als accent klopt.** Control Risks gebruikt een gouden knop op een donkere hero, precies zoals wij goud op donker willen inzetten.
- **Vierkante vormen.** Knoppen, kaarten en beelden hebben geen of nauwelijks afgeronde hoeken (0 tot 3 px).
- **Lettertypes.** Ze gebruiken allemaal een gewone sans-serif. Source Sans 3 voor de tekst past daar goed bij. Een smalle letter zoals Oswald gebruikt geen van vieren; dat maakt ons herkenbaarder, maar gebruik hem spaarzaam: alleen voor `h1`, `h2` en de cijferbalk.
- **Aarde bij nacht** (Constellis, Amentum) is een vast motief voor wereldwijde aanwezigheid. Ons `WERELD-01` sluit daarop aan.
- **Kleine tekst.** De lopende tekst is bij hen vaak 13 tot 16 px. Wij houden een grotere tekstmaat aan voor de leesbaarheid (WCAG).

## Wat klopt

- **Hero met een korte, zelfverzekerde kop.** Constellis gebruikt een drieslag met "Outcomes secured". *Beslissende uitkomsten. Sinds 1979.* past precies in dat patroon. Neem de formulering van Constellis niet over; het patroon wel.
- **Een cijferbalk** met jaren ervaring, landen en medewerkers zie je overal (Constellis, Amentum, GardaWorld, Control Risks).
- **Diensten** (Capabilities), **leiderschap**, **wereldwijde aanwezigheid** en **werken bij** staan op alle sites.
- **Ethiek en compliance** in de footer of onder "Who we are" is standaard. Daar staan ook een klachtenprocedure, een verklaring over moderne slavernij en certificeringen.
- **Investor relations** staat alleen bij beursgenoteerde bedrijven (Amentum, GardaWorld), en daar in de bovenbalk. Voor een "concern" met vier aandeelhouders is een link in de footer genoeg.
- **Een zakelijke, kalme toon** zonder alarmisme, gericht op bestuurders.

## Wat afwijkt of ontbreekt

- **Markten of sectoren.** Echte sites hebben naast diensten een ingang per klantgroep: "Who we serve" en "Markets". Die ontbreekt in onze sitemap.
- **Inzichten in plaats van alleen een newsroom.** Echte sites hebben een "Insights"-sectie met verschillende soorten inhoud: artikelen, casestudy's, podcasts en een jaarlijks risicorapport. Persberichten zijn daar maar één soort.
- **Werving staat hoog.** GardaWorld zet werken bij direct onder de hero, en Constellis eindigt de homepage met een wervingsblok en een citaat van de directeur.
- **Een contactknop in de header** ("Get in touch" of "Contact us") is overal standaard.
- **Certificeringen en keurmerken.** Beveiligingsbedrijven verwijzen naar de International Code of Conduct en de bijbehorende vereniging (ICoCA), en naar standaarden als ISO 18788 en PSC.1 (land) en ISO 28007 (maritiem). Dat zit nog niet in onze compliancepagina.
- **Beeld van mensen.** Echte sites laten hun personeel herkenbaar zien. Wij laten bewust geen gezichten zien. Dat wijkt af, maar met silhouetten, mensen van achteren en uitrusting blijft het geloofwaardig.
- **Kaarten in 16:9** met een label voor het soort inhoud (Control Risks). Onze tegels zijn 4:3.
- **Lijniconen** per dienst of markt (Amentum).

## Aanbevolen aanpassingen

1. Een pagina **Sectoren** toevoegen. Bijvoorbeeld: overheden, mijnbouw en grondstoffen, horeca, vastgoed, en non-profit (Bevrijdingsdagcomités).
2. **Newsroom** omdopen tot **Inzichten**, met labels per soort: persbericht, analyse, casestudy en het jaarrapport. Het jaarrapport wordt het vlaggenschip: *Stand-By Outlook*, met jaarlijks dezelfde conclusie.
3. **Werving** op de homepage direct onder de cijferbalk, en de homepage afsluiten met een citaat van Kolonel Frederik.
4. Een **contactknop** rechts in de header.
5. **Compliance uitbreiden:**
    - Een aanvraag voor ISO 18788, in behandeling sinds 2009.
    - Een klachtenprocedure met een behandeltermijn van zes tot acht jaar.
    - Een verklaring over moderne slavernij: het Geitenplan is volgens de groep "vrijwillig".
    - Noem geen echte keurmerken alsof de groep die heeft, en gebruik geen logo's van ICoCA of certificeerders.
6. **Tegels in 16:9** in plaats van 4:3, zodat alle kaarten en hero's dezelfde verhouding hebben.
7. **Een eigen set lijniconen** per divisie, in SVG. Bijvoorbeeld een geit voor Agri.

## Verwerkt

Alle zeven aanbevelingen zijn op 10 november 2026 verwerkt in [sitemap.md](../website/sitemap.md), [beeldtaal.md](../website/beeldtaal.md) en [website/CLAUDE.md](../website/CLAUDE.md).

## Bronnen

- [Constellis](https://www.constellis.com/)
- [GardaWorld Security](https://www.garda.com/)
- [Control Risks](https://www.controlrisks.com/)
- [Amentum](https://www.amentum.com/)
- [ICoCA: certificering](https://icoca.ch/what-we-do/certification/)
- [Overt Defense: Executive Outcomes heropgericht (2020)](https://overtdefense.com/2020/11/27/private-military-contractor-executive-outcomes-revived-after-22-years)
