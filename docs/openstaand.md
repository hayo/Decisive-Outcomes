# Openstaand

Wat nog moet gebeuren voordat en nadat de site live gaat. Vink af wat klaar is en verwijder het bij de volgende opruimronde.

## Team en inhoud

- [ ] Frederik, Jochem en Robert lezen hun personage en geven akkoord. Stuur ieder zijn deel uit [inzage.md](inzage.md); vul het akkoord in bij [toestemming.md](toestemming.md).
- [ ] Het echte contactadres voor het formulier kiezen. (Waar het team speelt en hoe je meedoet, staat op de site.)
- [ ] De licentie bevestigen (zie [LICENSE.md](../LICENSE.md)) of een andere kiezen.
- [ ] Besluiten of de naam Decisive Outcomes goed genoeg te onderscheiden is van bestaande bedrijven met een vergelijkbare naam.
- [ ] Een besloten plek kiezen voor toestemmingen bij foto's, buiten de repo.

## Hosting en techniek

- [ ] Controleren of de hosting PHP 8 heeft en Apache-modules voor `mod_rewrite`, `mod_headers` en compressie (`mod_deflate` of Brotli).
- [ ] Vaststellen of er SFTP is of alleen FTPS. Een account aanmaken voor GitHub Actions en de GitHub Secrets invullen.
- [ ] Het teamadres voor het formulier kiezen en `includes/config.php` op de server zetten.
- [ ] SPF, DKIM en DMARC instellen voor het afzenderadres van het formulier.
- [ ] HTTPS-certificaat en de redirects naar `https://decisiveoutcomes.nl/` controleren.
- [ ] Beheergegevens vastleggen buiten de repo: waar het domein en de hosting zijn ondergebracht en wie toegang heeft. Gebruik een wachtwoordkluis of een besloten document.

## Website bouwen

- [x] Eerste versie van de website gebouwd (10 november 2026): alle pagina's uit de sitemap, contactformulier, feed, sitemap.xml, `.htaccess` en deploy-workflow.
- [ ] Concept-teksten op de website nalezen. Alle teksten zijn door Claude geschreven op basis van de canon; vooral de bestuursbio's moeten langs de teamleden (zie [toestemming.md](toestemming.md)).
- [ ] De elf inzichten in de newsroom nalezen (concepten van Claude). Actuele berichten verouderen: kijk eens per kwartaal of ze nog kloppen.
- [x] Echte informatie voor *Meedoen met het airsoftteam* op Werken bij.
- [ ] Privacyverklaring laten controleren, vooral de bewaartermijn (nu: uiterlijk een jaar) en de grondslag.
- [ ] Besluiten of het volledige verhaal als pagina *Ons verhaal* op de site komt. Het is te groot voor het paginabudget en bevat nog niet-goedgekeurde personages.
- [ ] Op de server: documentroot naar `public/` zetten, `includes/config.php` aanmaken (zie `config.example.php`) en de GitHub Secrets voor de deploy invullen. Tot die tijd mislukt de deploy-workflow.
- [ ] Eventueel een professionele vectorversie (SVG) van het logo laten maken. Tot die tijd gebruiken we de originele PNG.
- [x] De lijniconen per divisie ontwerpen.
- [x] De lettertypes Oswald en Source Sans 3 downloaden, beperken tot de Latijnse tekenset en de OFL-licentiebestanden meenemen.
- [x] `HOME-01` en twaalf andere beelden uit [beeldtaal.md](../website/beeldtaal.md) gemaakt en geplaatst (10 november 2026).
- [ ] Gemini-tegoed aanvullen in AI Studio; het prepaid-tegoed was op.
- [ ] `DIEN-01` opnieuw maken: in de eerste versie waren gezichten zichtbaar.
- [ ] `LEAD-02` en `LEAD-03` opnieuw maken, met `LEAD-01` als referentie. Bij `LEAD-02` was het gezicht te goed zichtbaar, `LEAD-03` had een ander decor. De portretten gaan pas op de site als alle vier klaar zijn.
- [ ] Beelden voor de dertien inzichten (NEWS-basis), zodat ook persberichten een `og:image` hebben.
- [ ] `OVER-02` wordt nergens gebruikt: een plek geven of uit de beeldtaal halen.
- [x] Het colofon, de privacyverklaring en de disclaimer schrijven. Deze teksten zijn echt, geen satire.
- [x] De GitHub Actions-workflow voor de deploy.

## Later

- [ ] Na akkoord van alle vier: besluiten of de silhouetportretten worden vervangen door echte foto's.
- [ ] De map `events/`: patch-ontwerp, callsigns en templates.
- [ ] Webmentions, als dat kan zonder externe afhankelijkheid.
- [ ] De eerste vier commits opschonen (vermelding van Claude eruit). Dit vraagt een force-push op `main`; doe je dat zelf, zie de opdracht in het gesprek van 10 november.

