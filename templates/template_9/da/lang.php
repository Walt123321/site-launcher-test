<?php
require __DIR__ . '/../lang.php';
$site_lang = 'da-DK';
$form_language = 'da'; // matches this page's own language, not the offer's global default

// ============================================================
// DA TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $review_5_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Ratings (TZ item 21 -- SoftwareApplication schema)

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// -------------------------
// Meta (TZ item 9)
// -------------------------
$home_meta_title = "$site_name — Officiel Hjemmeside | Handelsplatform";
$home_meta_description = "$site_name tilbyder en brugervenlig handelsplatform med avancerede markedsværktøjer, indsigt i realtid og praktiske funktioner designet til at gøre online handel mere tilgængelig og velinformeret.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platform";
$hero_subtitle = "Understøtter millioner verden over på deres rejse med digitale aktiver";
$hero_badge_title = "Glade Medlemmer";
$hero_badge_subtitle = "Elsket af millioner";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Begynd at Handle i Dag";
$form_desc = "Klar til at gøre din bevægelse? Tilmeld dig nu og tag det første skridt mod finansiel frihed. Start med kun $app_price $app_currency — få adgang til alle handelsværktøjer, markedsdata i realtid og fuld platformsadgang fra dag ét.";
$form_fname_placeholder = "Navn";
$form_lname_placeholder = "Efternavn";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Tilmeld dig";
$form_disclaimer_text = "Ved at indtaste dine personlige oplysninger og klikke på knappen accepterer du hjemmesidens <a class=\"link\" href=\"privacy.php\">Privatlivspolitik</a> og <a class=\"link\" href=\"conditions.php\">Vilkår &amp; Betingelser</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIKKER";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Lær Platformen at Kende";
$stats_title = "En hurtig introduktion til smartere handel";
$stat_1_value = "154+";
$stat_1_label = "Dækkede Lande";
$stat_2_value = "29 Millioner";
$stat_2_label = "Globale Investorer";
$stat_3_value = "635+";
$stat_3_label = "Mønter";
$stat_4_value = "3,26 Milliarder $";
$stat_4_label = "24-timers Handelsvolumen";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Hvorfor $site_name?";
$why_title = "Grunde til at Vælge Os";
$why_1_title = "Hurtigt &amp; Nemt";
$why_1_text = "Køb og sælg dine foretrukne kryptovalutaer på få sekunder.";
$why_2_title = "Sikkert &amp; Beskyttet";
$why_2_text = "Vi bruger den nyeste teknologi til at holde dine midler og data sikre.";
$why_3_title = "Åbent for Alle";
$why_3_text = "Handl på vores platform 24/7, hvor og hvornår du vil.";
$why_4_title = "Professionelle Værktøjer";
$why_4_text = "Fra simple til professionelle handelsfunktioner har vi alt.";
$why_5_title = "Trends &amp; Indsigt";
$why_5_text = "Få de seneste kryptonyheder, indsigter og trends fra eksperter.";
$why_6_title = "Support 24/7";
$why_6_text = "Vores venlige supportteam er her for at hjælpe når som helst.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Sådan Fungerer Det";
$how_title = "Nemme Trin til at Begynde at Handle";
$how_1_title = "Tilmeld dig";
$how_1_text = "Opret en konto og begynd at handle inden for minutter.";
$how_1_btn = "Begynd at Handle";
$how_2_title = "Indbetal Midler";
$how_2_text = "Finansier din konto med et minimumsindskud på $app_price $app_currency for at låse op for fuld handelsadgang. Vælg mellem flere betalingsmetoder og begynd at vokse din portefølje i dag.";
$how_2_note = "Tilføj midler....";
$how_3_title = "Begynd at Handle";
$how_3_text = "Udforsk markedet og handl på din egen måde.";
$how_3_note = "Køb og HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Beregner";
$calc_title = "Se hvor meget tid og potentiale du efterlader på bordet";
$calc_volume_label = "Månedlig Handelsvolumen";
$calc_trades_label = "Handler om Ugen";
$calc_time_label = "Tid Du Kunne Spare";
$calc_boost_label = "Potentiel Volumenforøgelse";
$calc_btn = "Begynd at Handle";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funktioner";
$features_title = "Styrken ved $site_name";
$feature_1_title = "Spot Trading";
$feature_1_text = "Maksimer dit handelspotentiale med professionelle værktøjer.";
$feature_2_title = "Køb Krypto";
$feature_2_text = "Køb krypto med kort eller banker.";
$feature_3_title = "Krypto Derivater";
$feature_3_text = "Nem, avanceret futures-handel.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Lad din formue vokse med lethed.";
$feature_5_title = "Handelsbot";
$feature_5_text = "Højere fortjeneste, selv mens du sover.";
$feature_6_title = "Margin Trading";
$feature_6_text = "Lån, handl og betal tilbage nemt.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Hvad Vores Brugere Siger";
$review_1_text = "Platformen er meget nem at bruge, og jeg har set stabil fremgang, siden jeg blev holder. Teamets engagement og friske idéer får mig til at se frem til, hvad der kommer næste gang!";
$review_1_role = "Trader";
$review_2_text = "$site_name tilbyder en glidende og intuitiv handelsoplevelse. Jeg kunne straks begynde at købe og handle krypto. Grænsefladen er nem at bruge, og transaktionshastighederne er fremragende!";
$review_2_role = "Ny Trader";
$review_3_text = "Jeg stoler på denne platform til at administrere mine krypto-investeringer. Dens sikkerhedsfunktioner giver mig tillid, og jeg har aldrig oplevet problemer med udbetalinger eller indbetalinger. Det er en af de mest pålidelige børser, jeg har brugt.";
$review_3_role = "Professionel Trader";
$review_4_text = "Når jeg har haft spørgsmål, har kundesupportteamet været hurtigt og hjælpsomt. De bekymrer sig virkelig om deres brugere og gør hver handelsoplevelse glidende og enkel.";
$review_4_role = "Erfaren Trader";
$review_5_text = "Som nybegynder fandt jeg $site_name meget nemt at bruge. Det, der virkelig skiller sig ud, er udvalget af avancerede værktøjer til mere erfarne handlende. Det er et solidt valg for alle, der ønsker at opbygge deres portefølje!";
$review_5_role = "Trader fra Fællesskabet";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Ofte Stillede Spørgsmål";
$faq_title = "Ofte Stillede Spørgsmål";
$faq_q1 = "Hvad er $site_name?";
$faq_a1 = "$site_name er en kryptobørs, hvor brugere nemt kan handle et bredt udvalg af mønter, herunder Bitcoin, Ethereum og andre populære kryptovalutaer.";
$faq_q2 = "Hvor Sikker er $site_name for Krypto-handel?";
$faq_a2 = "Platformen tilbyder sikkerhed gennem avanceret teknologi og 1:1 aktivdækning via Proof of Reserves.";
$faq_q3 = "Hvordan Foretager Jeg et Indskud?";
$faq_a3 = "$site_name tilbyder flere indskudsmuligheder, herunder kryptoindskud, fiat-indskud, P2P-handel og One-Click Buy.";
$faq_q4 = "Skal Jeg Have Erfaring for at Bruge $site_name?";
$faq_a4 = "Nej, du behøver ingen erfaring. Platformens brugervenlige grænseflade gør den tilgængelig for alle, fra begyndere til avancerede handlende.";
$faq_q5 = "Er der skjulte gebyrer eller omkostninger?";
$faq_a5 = "Slet ikke. Der er ingen registreringsgebyrer, abonnementsomkostninger eller skjulte gebyrer af nogen art. Du ser altid det nøjagtige transaktionsbeløb, før du bekræfter. Indtægter kommer fra premiumfunktioner og børspartnerskaber, ikke fra at tage penge fra brugerne.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Begynd at Handle i Dag";
$cta_desc = "Klar til at gøre din bevægelse? Tilmeld dig nu og tag det første skridt mod finansiel uafhængighed.";
$cta_btn = "Tilmeld dig";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Vigtige Funktioner ved $site_name Handelsplatform";
$table_1_label = "🤖 Platformsteknologi";
$table_1_val = "Avanceret AI-Handelsmotor";
$table_2_label = "💳 Finansieringsmetoder";
$table_2_val = "Store Kreditkort, Bankoverførsel, PayPal";
$table_3_label = "📱 Platformsadgang";
$table_3_val = "Kompatibilitet på Tværs af Enheder";
$table_4_label = "🚀 Ydelsesrate";
$table_4_val = "85% Nøjagtighed";
$table_5_label = "📊 Handelsinstrumenter";
$table_5_val = "Aktier, Forex, Råvarer, Ædelmetaller, CFD'er, Kryptovalutaer og mere…";
$table_6_label = "✍️ Kontoopsætning";
$table_6_val = "Hurtig og Effektiv";
$table_7_label = "📞 Kundesupport";
$table_7_val = "24/7 Professionel Assistance";

// Reviews summary card
$summary_title = "$site_name Anmeldelser";
$summary_badge = "Pålidelig";
$summary_desc = "En kraftfuld, brugervenlig handelsplatform med solid automatisering og uddannelsesressourcer.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handl klogt, voks hurtigt";
$footer_community_label = "Fællesskab";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";
$footnav_contacts = "Kontakt";
$footnav_faq = "Ofte Stillede Spørgsmål";
$footnav_privacy = "Privatlivspolitik";
$footnav_conditions = "Vilkår &amp; Betingelser";
$footnav_risk = "Risikoadvarsel";
$footer_disclaimer = "$site_name deler uddannelsesressourcer og markedsrelateret materiale for at hjælpe besøgende med bedre at forstå handel, investering og digitale finansielle produkter. Information præsenteret på tværs af hjemmesiden, såsom markedskommentarer, aktivpriser, diagrammer, guider og analytisk indhold, gives til generelle informationsformål og udgør ikke finansiel, investerings-, skatte- eller juridisk rådgivning. Selvom der gøres rimelige bestræbelser på at opretholde nøjagtig og relevant information, giver $site_name ingen garantier vedrørende indholdets fuldstændighed, nøjagtighed eller aktualitet og kan ikke holdes ansvarlig for beslutninger eller tab, der opstår som følge af dets brug.<br><br>Deltagelse på finansielle markeder indebærer iboende risici. Kryptovaluta, Forex, CFD'er, aktier og andre handelsinstrumenter kan opleve betydelige prisudsving, og tab kan forekomme. Individuelle omstændigheder og risikotolerance varierer, så brugere bør foretage deres egen research og overveje at indhente rådgivning fra en kvalificeret finansiel professionel, før de forpligter midler. Handl aldrig med penge, du ikke har råd til at tabe.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Handelskonsulent";
$quiz_text_welcome = "Hej! Jeg er Maya, din personlige handelskonsulent. Har du et par minutter til at finde den bedste plan for dig?";
$quiz_text_q1 = "Har du handlet med kryptovaluta før?";
$quiz_text_a1_yes = "Ja, jeg har erfaring";
$quiz_text_a1_no = "Nej, jeg er nybegynder";
$quiz_text_q2 = "Fantastisk! Hvad er dit fornavn, så jeg kan personliggøre din plan?";
$quiz_text_q3 = "Hvad er dit hovedmål med handel?";
$quiz_text_a3_yes = "Opbyg langsigtet formue";
$quiz_text_a3_no = "Generer kortsigtet indkomst";
$quiz_text_q4 = "Hvor meget vil du gerne starte med?";
$quiz_text_a4_1 = "Under $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Over $1000";
$quiz_text_q5 = "Perfekt. Vil du have, at jeg åbner en gratis konto for dig nu?";
$quiz_text_a5_yes = "Ja, lad os gøre det";
$quiz_text_a5_no = "Ikke lige nu";
$quiz_text_loader = "Finder din bedste plan...";
$quiz_text_final_ttl = "Alt er klar!";
$quiz_text_processing = "Dine oplysninger sendes...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Efternavn";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Få Min Gratis Konto";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikoadvarsel — Oplysning om Handelsrisiko";
$risk_meta_description = "Læs $site_name's risikoadvarsel, før du handler: krypto-markedsrisici, gearing, likviditet, cybersikkerhed og lovgivningsmæssige overvejelser.";
$risk_title = "Risikoadvarsel";
$risk_intro = "At forstå risici er det første skridt mod selvsikker handel.";
$risk_ai_title = "Sådan Hjælper Vores AI-System med at Håndtere Risiko:";
$risk_ai_1_title = "Algoritmisk Effektivitet &amp; Følelsesløs Handel:";
$risk_ai_1_text = "Avancerede algoritmer analyserer markedssignaler for objektivt at udføre handler på optimale tidspunkter.";
$risk_ai_2_title = "Datadrevne Strategier:";
$risk_ai_2_text = "Strategier er baseret på verificerede markedsmønstre og realtidsanalyse frem for gætterier.";
$risk_ai_3_title = "Fleksible Indstillinger &amp; Fuld Kontrol";
$risk_ai_3_text = "Juster dine risikoparametre når som helst. Følg alle saldi og handler gennemsigtigt på dit dashboard, uden skjulte gebyrer og uden begrænsninger på udbetalinger.";
$risk_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel indebærer altid risiko. Automatiserede systemer (inklusive AI) garanterer ikke fortjeneste, kan fejle på grund af softwarefejl eller uventede markedshændelser og kræver brugerovervågning. Tidligere resultater er ikke en indikator for fremtidige resultater. Denne platform tjener udelukkende informations- og markedsføringsformål og giver ikke finansiel rådgivning.";
$risk_s1_title = "1. Generelle Risici &amp; Kryptovaluta-markedsrisici";
$risk_s1_text = "Kryptovalutaer er meget volatile, spekulative aktiver, der opererer 24/7 med minimal lovgivningsmæssig tilsyn i de fleste jurisdiktioner.";
$risk_s1_li1 = "Værdier kan svinge dramatisk inden for korte perioder, hvilket potentielt kan føre til et totalt tab af investeret kapital.";
$risk_s1_li2 = "Markedsværdier kan påvirkes kraftigt af lovgivningsmæssige ændringer, tekniske udviklinger, sikkerhedsbrud eller bredere makroøkonomiske begivenheder.";
$risk_s1_li3 = "Nogle aktiver kan miste hele deres værdi fuldstændigt. Investér kun midler, du har råd til at tabe.";
$risk_s2_title = "2. Udførelses-, Likviditets- &amp; Gearingsrisici";
$risk_s2_li1_title = "Markedsvolatilitet &amp; Likviditet:";
$risk_s2_li1_text = "Ekstreme prisbevægelser (10-20%+ dagligt) eller lav likviditet (især i mindre mønter) kan føre til forsinkelser, platformsafbrydelser og alvorlig udførelsesslippage. Stop-loss-ordrer kan ikke garantere tabsgrænser under ekstreme forhold.";
$risk_s2_li2_title = "Gearings- &amp; Marginrisici:";
$risk_s2_li2_text = "Gearede produkter forstærker både gevinster og tab, hvilket betyder, at du kan tabe mere end dit oprindelige indskud. <em>Cirka 70-80% af detailinvestorernes konti taber penge, når de handler med gearede produkter.</em>";
$risk_s3_title = "3. Tekniske, Cybersikkerheds- &amp; Tredjepartsrisici";
$risk_s3_li1_title = "Tekniske Faktorer:";
$risk_s3_li1_text = "Online handel indebærer i sagens natur risici for internetafbrydelser, hardware-/softwarefejl og manglende tilgængelighed af tjenesten.";
$risk_s3_li2_title = "Cybersikkerhed:";
$risk_s3_li2_text = "Kryptovaluta-konti er hyppige mål for phishing, malware og hacking. Transaktioner er irreversible; kompromittering af dine legitimationsoplysninger kan resultere i permanent tab.";
$risk_s3_li3_title = "Tredjepartsplatforme:";
$risk_s3_li3_text = "Denne hjemmeside kan forbinde brugere til tredjepartsplatforme. Vi kontrollerer, godkender eller garanterer ikke deres sikkerhed, drift eller solvens. Udfør altid din egen grundige due diligence, før du indbetaler midler på eksterne platforme.";
$risk_s4_title = "4. Lovgivningsmæssige, Skatte- &amp; Slutbestemmelser";
$risk_s4_li1_title = "Juridisk Overholdelse &amp; Skatter:";
$risk_s4_li1_text = "Lovgivningsmæssige rammer varierer meget og ændrer sig hurtigt. Brugere er alene ansvarlige for at sikre, at deres handelsaktivitet overholder lokale love, og for at opfylde deres egne skatteforpligtelser.";
$risk_s4_li2_title = "Ingen Profitgarantier:";
$risk_s4_li2_text = "Der er ingen \"sikker\" eller risikofri krypto-handel. Eventuelle afkasttal eller ydelseseksempler, der gives, er rent hypotetiske.";
$risk_s4_li3_title = "Egnethed:";
$risk_s4_li3_text = "Hvis du ikke fuldt ud forstår risiciene, er afhængig af væsentlige midler eller handler med lånte penge, er krypto-handel ikke egnet for dig. Konsulter en uafhængig, licenseret finansiel rådgiver, hvis du er i tvivl.";
$risk_contact = "<strong>Kontakt:</strong> For eventuelle spørgsmål vedrørende denne erklæring eller for at indsende en forespørgsel, kontakt venligst vores officielle kundeserviceteam via kontaktformularen på vores hjemmeside.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Hjem";
$bc_product = "Produkt";
$bc_offer = "Tilbud";
$bc_contacts = "Kontakt";
$bc_faq = "Ofte Stillede Spørgsmål";
$bc_privacy = "Privatlivspolitik";
$bc_conditions = "Vilkår &amp; Betingelser";
$bc_risk = "Risikoadvarsel";
$bc_sign = "Tilmeld dig";
$bc_sitemap = "Sitemap";
$bc_thanks = "Tak";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Produkt — Handelsværktøjer &amp; Platformsfunktioner";
$product_meta_description = "Udforsk $site_name-produktet: spot trading, krypto-derivater, en handelsbot, margin trading og mere, alt bygget på en hurtig og sikker platform.";
$product_h1 = "$site_name Handelsproduktet";
$product_lead = "Én platform, ethvert værktøj en handlende har brug for: fra din første spot-handel til automatiserede strategier og marginpositioner, $site_name holder oplevelsen hurtig, sikker og let at forstå.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Tilbud — Begynd at Handle fra $$app_price";
$offer_meta_description = "Se hvad der er inkluderet i det nuværende $site_name-tilbud: et lavt minimumsindskud på $$app_price, fuld platformsadgang og ingen skjulte gebyrer.";
$offer_h1 = "Vores Nuværende Tilbud";
$offer_lead = "Begynd med så lidt som <strong>$$app_price $app_currency</strong> og lås op for den fulde $site_name-platform fra dag ét &mdash; alle værktøjer, alle markeder, ingen skjulte omkostninger.";
$offer_li1 = "Minimumsindskud på kun $$app_price $app_currency for at aktivere din konto";
$offer_li2 = "Fuld adgang til spot trading, derivater, margin og handelsbotten";
$offer_li3 = "Flere finansieringsmetoder, inklusive kort og bankoverførsel";
$offer_li4 = "Ingen registreringsgebyrer, ingen abonnementsomkostninger, ingen skjulte gebyrer";
$offer_li5 = "Kundesupport 24/7, mens du kommer i gang";
$offer_note = "Indskudsbeløb og tilgængelige betalingsmetoder kan variere efter region. Gennemgå vores <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a>, før du finansierer en konto.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontakt $site_name — Kom i Kontakt med Vores Team";
$contacts_meta_description = "Har du et spørgsmål om din $site_name-konto eller platformen? Nå vores supportteam via e-mail eller send os en besked, så vender vi tilbage til dig.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Spørgsmål om din konto, et indskud, eller hvordan platformen fungerer? Vores team er her for at hjælpe.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Supporttider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svartid";
$contacts_response_value = "Inden for 24 timer";
$contacts_form_title = "Send Os en Besked";
$contacts_form_desc = "Efterlad dine oplysninger nedenfor, og et medlem af vores team vil kontakte dig direkte.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Ofte Stillede Spørgsmål";
$faq_meta_description = "Svar på de mest almindelige spørgsmål om at oprette en $site_name-konto, foretage et indskud, platformsikkerhed og gebyrer.";
$faq_page_lead = "Alt hvad du behøver at vide, før du begynder at handle. Kan du ikke finde dit svar? <a class=\"link\" href=\"contacts.php\">Kontakt vores team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Privatlivspolitik";
$privacy_meta_description = "Find ud af, hvordan $site_name indsamler, bruger og beskytter dine personlige oplysninger på tværs af hjemmesiden og platformen.";
$privacy_sections = [
    [
        "title" => "1. Introduktion",
        "body" => "Denne Privatlivspolitik forklarer, hvordan $site_name (\"vi\") indsamler, bruger og beskytter personlige oplysninger for besøgende og brugere af $site_domain (\"Hjemmesiden\"). Ved at bruge Hjemmesiden accepterer du de praksisser, der er beskrevet nedenfor.",
    ],
    [
        "title" => "2. Information Vi Indsamler",
        "body" => "Vi kan indsamle information, du giver direkte, såsom dit navn, e-mailadresse og telefonnummer, når du registrerer dig eller indsender en formular, samt information indsamlet automatisk, herunder din IP-adresse, enheds- og browsertype, og sider set på Hjemmesiden.",
    ],
    [
        "title" => "3. Hvordan Vi Bruger Dine Oplysninger",
        "body" => "Vi bruger indsamlet information til at oprette og administrere din konto, besvare forespørgsler, yde kundesupport, forbedre Hjemmesiden og vores tjenester, og, hvor tilladt, sende opdateringer om produkter og tilbud. Du kan til enhver tid framelde dig markedsføringskommunikation.",
    ],
    [
        "title" => "4. Cookies &amp; Sporingsteknologier",
        "body" => "Hjemmesiden bruger cookies og lignende teknologier til at huske dine præferencer, holde dig logget ind og forstå, hvordan besøgende bruger vores sider. Du kan deaktivere cookies via dine browserindstillinger, selvom nogle funktioner måske ikke fungerer korrekt som følge heraf.",
    ],
    [
        "title" => "5. Deling af Information",
        "body" => "Vi sælger ikke dine personlige oplysninger. Vi kan dele information med betroede tjenesteudbydere, der hjælper os med at drive Hjemmesiden (såsom hosting- eller analyseudbydere), eller når det kræves ved lov, eller for at beskytte vores juridiske rettigheder.",
    ],
    [
        "title" => "6. Datasikkerhed",
        "body" => "Vi anvender rimelige tekniske og organisatoriske foranstaltninger til at beskytte din information mod uautoriseret adgang, ændring eller tab. Ingen overførsels- eller lagringsmetode er fuldstændig sikker, og vi kan ikke garantere absolut sikkerhed.",
    ],
    [
        "title" => "7. Dine Rettigheder &amp; Valg",
        "body" => "Afhængigt af din placering kan du have ret til at få adgang til, rette eller anmode om sletning af dine personlige oplysninger, og til at gøre indsigelse mod visse anvendelser deraf. For at udøve disse rettigheder, kontakt os venligst via vores <a class=\"link\" href=\"contacts.php\">kontaktside</a>.",
    ],
    [
        "title" => "8. Børns Privatliv",
        "body" => "Hjemmesiden er ikke rettet mod personer under 18 år, og vi indsamler ikke bevidst personlige oplysninger fra mindreårige. Hvis du mener, at en mindreårig har givet os personlige oplysninger, bedes du kontakte os, så vi kan fjerne dem.",
    ],
    [
        "title" => "9. Ændringer til Denne Politik",
        "body" => "Vi kan opdatere denne Privatlivspolitik fra tid til anden. Eventuelle ændringer vil blive offentliggjort på denne side med en revideret ikrafttrædelsesdato. Vi opfordrer dig til at gennemgå denne side regelmæssigt.",
    ],
    [
        "title" => "10. Kontakt Os",
        "body" => "Hvis du har spørgsmål om denne Privatlivspolitik eller om, hvordan dine oplysninger behandles, bedes du kontakte os via vores <a class=\"link\" href=\"contacts.php\">kontaktside</a> eller e-maile os på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Vilkår &amp; Betingelser";
$conditions_meta_description = "Gennemgå Vilkår &amp; Betingelser, der regulerer adgang til og brug af $site_name's hjemmeside og handelsplatform.";
$conditions_sections = [
    [
        "title" => "1. Accept af Vilkår",
        "body" => "Ved at få adgang til eller bruge $site_domain (\"Hjemmesiden\") accepterer du at være bundet af disse Vilkår &amp; Betingelser. Hvis du ikke er enig i nogen del af disse vilkår, bedes du ikke bruge Hjemmesiden.",
    ],
    [
        "title" => "2. Berettigelse",
        "body" => "Du skal være mindst 18 år gammel og juridisk berettiget til at bruge handelsrelaterede tjenester i din jurisdiktion for at bruge Hjemmesiden. Ved at bruge Hjemmesiden bekræfter du, at du opfylder disse krav.",
    ],
    [
        "title" => "3. Beskrivelse af Tjenesten",
        "body" => "$site_name leverer en online platform med uddannelsesindhold, markedsinformation og handelsværktøjer. Intet på Hjemmesiden udgør finansiel, investerings-, skatte- eller juridisk rådgivning, og enhver information, der gives, er kun til generelle informationsformål.",
    ],
    [
        "title" => "4. Brugeransvar",
        "body" => "Du er ansvarlig for at give nøjagtig information ved registrering, for at opretholde fortroligheden af dine kontooplysninger, og for al aktivitet, der finder sted under din konto.",
    ],
    [
        "title" => "5. Immaterielle Rettigheder",
        "body" => "Alt indhold på Hjemmesiden, herunder tekst, grafik, logoer og software, er ejendom tilhørende $site_name eller dens licensgivere og er beskyttet af gældende love om immaterielle rettigheder. Du må ikke reproducere eller distribuere dette indhold uden tilladelse.",
    ],
    [
        "title" => "6. Ingen Finansiel Rådgivning",
        "body" => "Indhold på Hjemmesiden er udelukkende til informations- og uddannelsesformål og bør ikke fortolkes som finansiel rådgivning. Du er alene ansvarlig for dine egne handelsbeslutninger og bør konsultere en uafhængig finansiel rådgiver, hvis det er nødvendigt. Se vores <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a> for at lære mere.",
    ],
    [
        "title" => "7. Ansvarsbegrænsning",
        "body" => "I det maksimale omfang tilladt ved lov, vil $site_name ikke være ansvarlig for direkte, indirekte, hændelige eller følgeskader, der opstår som følge af din brug af, eller manglende evne til at bruge, Hjemmesiden eller eventuelle tilknyttede tredjepartstjenester.",
    ],
    [
        "title" => "8. Ophør",
        "body" => "Vi forbeholder os retten til at suspendere eller opsige din adgang til Hjemmesiden efter eget skøn, uden varsel, for adfærd, vi mener overtræder disse Vilkår &amp; Betingelser eller på anden måde er skadelig for andre brugere eller Hjemmesiden.",
    ],
    [
        "title" => "9. Ændringer til Disse Vilkår",
        "body" => "Vi kan til enhver tid revidere disse Vilkår &amp; Betingelser. Fortsat brug af Hjemmesiden efter offentliggørelse af ændringer udgør accept af de opdaterede vilkår.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Spørgsmål om disse Vilkår &amp; Betingelser kan rettes til vores team via <a class=\"link\" href=\"contacts.php\">kontaktsiden</a> eller via e-mail til info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Tilmeld dig | $site_name — Opret Din Gratis Konto";
$sign_meta_description = "Opret din gratis $site_name-konto på minutter og begynd at handle med så lidt som $$app_price $app_currency.";
$sign_h1 = "Opret Din Gratis Konto";
$sign_lead = "Bliv medlem af $site_name på minutter. Udfyld dine oplysninger nedenfor for at komme i gang.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Tak | $site_name";
$thanks_h1 = "Tak!";
$thanks_text = "Dine oplysninger er blevet modtaget. Et medlem af $site_name-teamet vil snart kontakte dig for at hjælpe dig i gang.";
$thanks_btn = "Tilbage til Forsiden";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Gennemse hver side på $site_name-hjemmesiden, herunder handelsplatformen, tilbuddet, support og juridiske sider.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Hver side på $site_name på ét sted.";

