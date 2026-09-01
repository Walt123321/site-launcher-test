<?php
require __DIR__ . '/../lang.php';
$site_lang = 'da-DK';
$form_language = 'da'; // matches this page's own language, not the offer's global default

// ============================================================
// DA TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $review_5_author, $review_6_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Ratings (TZ item 20 -- schema aggregateRating equivalents used across pages)

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// -------------------------
// Meta (TZ item 11)
// -------------------------
$home_meta_title = "$site_name — Officiel Hjemmeside | Handelsplatform";
$home_meta_description = "$site_name tilbyder en brugervenlig handelsplatform med avancerede markedsværktøjer, indsigt i realtid og praktiske funktioner, der gør online-handel mere tilgængelig og velinformeret.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Om os";
$nav_contacts = "Kontakt";
$nav_login = "Log ind";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Har lige tilmeldt sig";
$activity_name_1 = "James";
$activity_name_2 = "Oliver";
$activity_name_3 = "Natalie";
$activity_name_4 = "Paul";
$activity_name_5 = "Hugo";
$activity_name_6 = "Irene";
$activity_name_7 = "Alex";
$activity_name_8 = "Ellen";

// -------------------------
// Hero
// -------------------------
$hero_title = "$site_name";
$form_title = "Kom i Gang Nu";
$form_fname_placeholder = "Fulde navn";
$form_lname_placeholder = "Efternavn";
$form_email_placeholder = "E-mailadresse";
$form_btn_submit = "Opret Konto";
$form_disclaimer_text = "* Ved at klikke på knappen accepterer du vores <a class=\"link\" href=\"privacy.php\">Privatlivspolitik</a> og <a class=\"link\" href=\"conditions.php\">Brugsvilkår</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIKRET";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI designet til at læse markedet klarere";
$s1_subtitle = "Teknologidrevet investeringsstrategi";
$s1_quote = "$site_name er bygget for at gøre det nemmere at arbejde med markederne, uanset om du har erfaring eller ej. Platformen anvender kunstig intelligens til at omdanne komplekse data til klare, handlingsrettede beslutninger, så du kan handle med større tillid i ethvert scenarie.";
$s1_p1 = "Systemet gennemgår enorme mængder information i realtid: det opdager ændringer, genkender mønstre og reagerer hurtigt på markedssignaler. Dette giver dig et klart billede af den aktuelle situation, så du kan spotte muligheder uden at skulle grave dig gennem kompliceret analyse.";
$s1_p2 = "Overvågning døgnet rundt, en brugervenlig grænseflade og et højt beskyttelsesniveau gør oplevelsen komfortabel og pålidelig. Alt er designet, så du kan fokusere på resultater, ikke på den tekniske side.";
$s1_p3 = "Copy trading-funktionen giver dig også adgang til strategier fra mere erfarne handlende. Du kan følge deres bevægelser og anvende afprøvede tilgange i din egen handel, hvilket kombinerer professionel vurdering med automatisering.";
$s1_cta = "Opret Konto";
$s1_img_alt = "$site_name digital finans";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Præcis markedsanalyse, uden ekstra støj";
$s2_intro = "$site_name bruger kunstig intelligens til løbende at overvåge markedet og hurtigt opdage ændringer. Systemet behandler store mængder data og viser kun de relevante signaler, uden at overvælde dig med unødvendig information.";
$s2_item1_title = "Markedsreaktion uden ventetid";
$s2_item1_text = "Platformen identificerer bevægelser i deres tidlige stadier: momentum, vendinger og trendændringer. Du ser med det samme, hvad der sker, og kan handle på det rigtige tidspunkt.";
$s2_item2_title = "En klar aflæsning i stedet for gætteri";
$s2_item2_text = "Ingen komplicerede grafer eller gætteri. $site_name fremhæver det væsentlige og giver et klart overblik over situationen, så du kan beslutte ud fra data, ikke intuition.";
$s2_item3_title = "Kontrol og beskyttelse";
$s2_item3_text = "Dine data er beskyttet, adgangen kontrolleres, og transaktioner foregår via sikre kanaler. Dette giver dig mulighed for at fokusere på markedet, ikke teknisk risiko.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Klar intelligens til handlende";
$s3_card1_title = "$site_name respekterer brugerens privatliv og kontrol";
$s3_card1_text = "$site_name behandler information med fuld gennemsigtighed og integritet. Den misbruger ikke dine personlige data. Ingen transaktioner eller ordrer registreres på denne platform.";
$s3_card2_title = "Et klart analysemiljø for bedre beslutninger";
$s3_card2_text = "$site_name fungerer som et teknologisk rum, hvor AI styrker menneskelig dømmekraft i stedet for at erstatte den. Disse værktøjer gør det lettere at forstå markedsforskydninger, sammenligne strategier og studere aktivadfærd.";
$s3_card3_title = "AI-værktøjer, der skærper dit blik på markedet";
$s3_card3_text = "Analysen stopper aldrig. $site_name holder øje med kryptomiljøet og sender realtidsmeddelelser, så snart en relevant bevægelse dukker op.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Skarp analyse, uden følelser eller fejl";
$s4_quote = "$site_name omdanner komplekse markedsdata til organiseret, letlæselig information, eliminerer unødvendig støj og hjælper dig med at fokusere på de signaler, der virkelig betyder noget. Dette gør, at du forstår en situation tidligere og beslutter uden at følelser tager over.";
$s4_p1 = "Systemet opdaterer løbende sine konklusioner med nye data. I stedet for haltende indikatorer bruger det adaptive modeller, der reagerer på markedsændringer i realtid. Det betyder, at du altid arbejder med et aktuelt billede og kan handle hurtigere, når det virkelig betyder noget.";
$s4_img_alt = "$site_name kunstig intelligens";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Brug $site_name AI til præcise, rettidige beslutninger";
$s5_quote = "$site_name analyserer markedet i realtid og viser dig straks, hvor bevægelsen og mulighederne er. Systemet behandler dataene for dig og leverer klare signaler: hvornår du skal gå ind, hvornår du skal gå ud, og hvad du skal holde øje med.";
$s5_p1 = "Du behøver ikke se på grafer hele dagen. Platformen opdager selv ændringer og reagerer hurtigt på markedet, så du ikke går glip af vigtige øjeblikke.";
$s5_p2 = "Algoritmerne arbejder døgnet rundt og identificerer nye muligheder, så snart de opstår. Du får opdateret information uden forsinkelser eller informationsoverbelastning.";
$s5_p3 = "Samtidig forbliver sikkerheden på et højt niveau: databeskyttelse, sikker adgang og handelskontrol. $site_name er velegnet til både begyndere og aktive handlende — beslutningerne forbliver dine, men understøttet af et solidt analytisk fundament.";
$s5_img_alt = "$site_name finansiel automatisering";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konsistent handel begynder med et organiseret system";
$s6_p1 = "$site_name hjælper med at bringe struktur til dit arbejde med markedet. Platformen skaber en klar ramme: du definerer dine mål og dit risikoniveau, og systemet tilpasser sin analyse til din stil — uden kaos og uden overbelastning.";
$s6_p2 = "Døgnovervågning omdanner datastrømmen til enkle, forståelige signaler. Du ser kun det, der betyder noget: hvor der er bevægelse, hvor det er værd at gå ind, og hvornår det er bedre at vente. Med tiden bliver algoritmerne skarpere og tilpasser sig markedet.";
$s6_item1_title = "Vælg dit tempo: hurtig handel eller en langsigtet tilgang";
$s6_item1_text = "$site_name understøtter forskellige strategier. Til aktiv handel markerer systemet indgangspunkter og prisbevægelser. Til en langsigtet tilgang hjælper det dig med at fastholde positioner under hensyntagen til trend og risiko.";
$s6_item2_title = "Indgangspunkter uden gætteri";
$s6_item2_text = "Platformen viser, hvor markedet er mest aktivt. Dette hjælper dig med at gå ind med større tillid og gå ud i tide, uden improvisation.";
$s6_item3_title = "Risikostyring fra begyndelsen";
$s6_item3_text = "Du kan se mulige scenarier på forhånd: hvor risikoen er lavere, og potentialet er højere. Dette giver dig mulighed for at planlægge transaktioner, før bevægelsen overhovedet begynder.";
$s6_item4_title = "Klar analyse";
$s6_item4_text = "$site_name overvælder dig ikke med kompliceret terminologi. Du får klar, direkte anvendelig information, designet til at hjælpe dig med at beslutte hurtigere og med større tillid.";
$s6_cta = "Kom i Gang Nu";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Enkle værktøjer til præcise beslutninger med $site_name";
$s7_quote = "$site_name giver dig alt, hvad du behøver for at handle på markedet — uden teknisk jargon eller informationsoverbelastning. Platformen analyserer selv prisbevægelser, trends og mulige indgangspunkter og viser kun det, der virkelig betyder noget.";
$s7_point1 = "Systemet hjælper med at opdage, hvornår markedet kan vende, hvor stærke bevægelser opstår, og hvilke øjeblikke der er bedst til at gå ind eller ud. Hvert signal kommer forbehandlet — du behøver ikke mestre komplekse indikatorer.";
$s7_point2 = "Det inkluderer også copy trading: du kan følge og gentage beslutninger fra erfarne handlende uden at bruge tid på din egen analyse.";
$s7_point3 = "Grænsefladen forbliver så enkel som muligt — hvert værktøj forstås ved et blik og er klar til brug fra det første øjeblik.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Find vigtige tidsvinduer med $site_name AI";
$s8_item1 = "Automatisk diversificering fordeler midler over forskellige aktiver, hvilket reducerer risiko og beskytter kapital selv på ustabile markeder.";
$s8_item2 = "Et fuldt autonomt system — du behøver ikke se på graferne. Algoritmerne analyserer markedet og træffer beslutninger selvstændigt.";
$s8_item3 = "Udbetalinger er tilgængelige når som helst — til bankkort, krypto-tegnebøger eller elektroniske betalingssystemer, uden forsinkelser.";
$s8_item4 = "Daglige rapporter viser dine resultater og giver dig fuld kontrol over situationen i realtid.";
$s8_item5 = "Fleksible risikoniveauindstillinger giver dig mulighed for at vælge en strategi, der passer til dine mål — fra konservativ til mere aggressiv.";
$s8_item6 = "Et profitpotentiale på op til 400% gør $site_name til et værktøj for dem, der ikke kun ønsker at bevare deres kapital, men at vokse den betydeligt.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Ekspertanalyse drevet af $site_name";
$s9_quote = "$site_name kombinerer kraften i algoritmer med markedserfaring og omdanner komplekse data til klare, letforståelige signaler. Systemet opdager hurtigt mønstre og potentielle muligheder, hvilket giver dig mulighed for at beslutte uden informationsoverbelastning.";
$s9_p1 = "Du modtager forbehandlede analyser, der tager højde for både tekniske indikatorer og markedsadfærd — så du kan handle hurtigere, med større tillid og præcision.";
$s9_img_alt = "$site_name investeringsstrategi";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Hvad vores brugere siger";
$review_1_text = "Platformen er meget intuitiv, og værktøjerne har hjulpet mig med at forbedre mine handelsresultater.";
$review_2_text = "Hurtig support og virkelig nyttige læringsmaterialer — perfekt til folk, der lige er startet.";
$review_3_text = "Tilpasselige grafer og hurtig udførelse — det har været mit førstevalg i månedsvis.";
$review_4_text = "Registrering tog mindre end fem minutter, og dashboardet gør det nemt at se præcis, hvor mine penge er.";
$review_5_text = "Jeg kan godt lide, at platformen forklarer ræsonnementet bag hvert signal, i stedet for bare at give mig tal.";
$review_6_text = "Udbetalinger har altid været hurtige for mig, og supportteamet svarer faktisk inden for få minutter.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Ofte Stillede Spørgsmål om $site_name";
$faq_q1 = "Kan $site_name opdage markedsændringer i realtid?";
$faq_a1 = "Ja. Den følger live data, identificerer momentumskift i deres tidlige stadier og spotter mønstre, før de fuldt ud udvikler sig, hvilket giver brugerne en rettidig fordel.";
$faq_q2 = "Kan $site_name-oplevelsen tilpasses?";
$faq_a2 = "Ja. Brugere kan vælge interesseområder, justere detaljeniveauet og følge offentlige strategier, der matcher deres handelsstil eller læringsbehov.";
$faq_q3 = "Erstatter $site_name traditionelle forskningsmetoder?";
$faq_a3 = "Nej. Den forbedrer dem ved hurtigt at levere AI-filtreret indsigt, mens brugeren bevarer fuld kontrol over sin egen forskning og beslutninger.";
$faq_cta = "Lær Mere Nu";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Højdepunkter";
$hl1_emoji = "🤖";
$hl1_title = "Tilmeldingsgebyr";
$hl1_desc = "Ingen omkostninger ved registrering";
$hl2_emoji = "💰";
$hl2_title = "Handelsprovision";
$hl2_desc = "Absolut ingen omkostninger";
$hl3_emoji = "📋";
$hl3_title = "Nem Registrering";
$hl3_desc = "Registrering er hurtig og enkel";
$hl4_emoji = "📊";
$hl4_title = "Uddannelsesmæssigt Fokus";
$hl4_desc = "Lektioner om krypto, Forex-handel og investering";
$hl5_emoji = "🌎";
$hl5_title = "Tilgængelige Lande";
$hl5_desc = "Ikke tilgængelig i USA, tilgængelig i de fleste andre lande";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handl klogt, voks med tillid";
$footnav_about = "Om os";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";
$footnav_contacts = "Kontakt";
$footnav_faq = "Ofte Stillede Spørgsmål";
$footnav_privacy = "Privatlivspolitik";
$footnav_conditions = "Brugsvilkår";
$footnav_risk = "Risikoadvarsel";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name udgiver generelt uddannelsesmateriale om handel, investering, finansielle markeder og digitale aktiver. Artikler, markedsdata, grafer og andet indhold på hjemmesiden leveres udelukkende til informationsformål og bør ikke betragtes som finansiel, investerings- eller juridisk rådgivning. Selvom vi bestræber os på at levere pålidelig og opdateret information, kan vi ikke garantere dens nøjagtighed eller fuldstændighed og er ikke ansvarlige for tab, der opstår som følge af tillid til indholdet.<br><br>Handel indebærer risiko, og kryptovaluta, Forex, CFD'er, aktier og andre finansielle produkter kan svinge betydeligt i værdi. Overvej din egen finansielle situation og risikotolerance, før du handler, og søg professionel rådgivning, hvor det er nødvendigt. Sæt aldrig penge på spil, som du ikke har råd til at tabe.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Handelsrådgiver";
$quiz_text_welcome = "Hej! Jeg er Sofia, din personlige handelsrådgiver. Har du et par minutter til at finde den bedste plan for dig?";
$quiz_text_q1 = "Har du handlet før?";
$quiz_text_a1_yes = "Ja, jeg har erfaring";
$quiz_text_a1_no = "Nej, jeg er nybegynder";
$quiz_text_q2 = "Fantastisk! Hvad er dit fornavn, så jeg kan tilpasse din plan?";
$quiz_text_q3 = "Hvad er dit primære mål med handel?";
$quiz_text_a3_yes = "Opbygge langsigtet velstand";
$quiz_text_a3_no = "Generere kortsigtet indkomst";
$quiz_text_q4 = "Hvor meget vil du gerne starte med?";
$quiz_text_a4_1 = "Mindre end $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Mere end $1000";
$quiz_text_q5 = "Perfekt. Vil du have, at jeg åbner en gratis konto til dig nu?";
$quiz_text_a5_yes = "Ja, lad os gøre det";
$quiz_text_a5_no = "Ikke nu";
$quiz_text_loader = "Finder din bedste plan...";
$quiz_text_final_ttl = "Alt er klar!";
$quiz_text_processing = "Dine oplysninger sendes...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Efternavn";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Få Min Gratis Konto";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Hjem";
$bc_about = "Om os";
$bc_product = "Produkt";
$bc_offer = "Tilbud";
$bc_contacts = "Kontakt";
$bc_faq = "Ofte Stillede Spørgsmål";
$bc_privacy = "Privatlivspolitik";
$bc_conditions = "Brugsvilkår";
$bc_risk = "Risikoadvarsel";
$bc_sign = "Tilmelding";
$bc_thanks = "Tak";
$bc_sitemap = "Sitemap";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Om $site_name";
$about_meta_description = "Lær om $site_name's mission: at gøre markedsanalyse klarere og mere tilgængelig med AI-drevne værktøjer.";
$about_h1 = "Om $site_name";
$about_lead = "$site_name er bygget omkring én idé: handelsbeslutninger bør baseres på klar information, ikke gætteri.";
$about_p1 = "Vi kombinerer kunstig intelligens med reel markedserfaring for at omdanne komplekse, støjfyldte data til signaler, der er lette at forstå og handle på. Vores platform overvåger markederne dag og nat, så du ikke behøver at gøre det.";
$about_p2 = "Uanset om du foretager din første handel eller har været aktiv på markederne i årevis, er $site_name designet til at møde dig, hvor du er — med værktøjer, der spænder fra simpel vejledning til avanceret realtidsanalyse.";
$about_p3 = "Vi tror på, at teknologi bør understøtte din dømmekraft, ikke erstatte den. Hvert signal, som $site_name genererer, er beregnet til at informere en beslutning, der stadig er helt din egen.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produkt — AI Markedsanalyseværktøjer";
$product_meta_description = "Udforsk $site_name-produktet: AI-markedsanalyse i realtid, copy trading, risikokontrol og automatiseret diversificering.";
$product_h1 = "$site_name-produktet";
$product_lead = "Én platform, der læser markedet for dig: realtidsanalyse, copy trading og fleksible risikoværktøjer, designet til at gøre handelsbeslutninger klarere.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Tilbud — Start Gratis";
$offer_meta_description = "Se, hvad der er inkluderet i det aktuelle $site_name-tilbud: gratis registrering, ingen handelsprovision og fuld platformsadgang.";
$offer_h1 = "Vores nuværende tilbud";
$offer_lead = "Opret din konto gratis og lås op for den fulde $site_name-platform &mdash; ingen registreringsgebyrer, ingen handelsprovision.";
$offer_li1 = "Ingen omkostninger ved at registrere din konto";
$offer_li2 = "Ingen provision på transaktioner";
$offer_li3 = "Fuld adgang til AI-markedsanalyse i realtid og copy trading";
$offer_li4 = "Udbetalinger tilgængelige når som helst, uden skjulte gebyrer";
$offer_li5 = "Uddannelsesressourcer om krypto, Forex og investering inkluderet";
$offer_note = "Tilgængelighed kan variere efter region. Gennemgå vores <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a>, før du finansierer en konto.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontakt $site_name — Kom i kontakt med vores team";
$contacts_meta_description = "Har du et spørgsmål om din $site_name-konto eller platformen? Kontakt vores supportteam via e-mail eller send os en besked.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Spørgsmål om din konto, et indskud, eller hvordan platformen fungerer? Vores team er klar til at hjælpe.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Supporttider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svartid";
$contacts_response_value = "Inden for 24 timer";
$contacts_form_title = "Send Os en Besked";
$contacts_form_desc = "Efterlad dine oplysninger nedenfor, og et medlem af vores team vil kontakte dig direkte.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Privatlivspolitik";
$privacy_meta_description = "Lær, hvordan $site_name indsamler, bruger og beskytter dine personlige data på tværs af hjemmesiden og platformen.";
$privacy_sections = [
    [
        "title" => "1. Introduktion",
        "body" => "Denne Privatlivspolitik forklarer, hvordan $site_name (\"vi\") indsamler, bruger og beskytter personlige data fra besøgende og brugere af $site_domain (\"Hjemmesiden\"). Ved at bruge Hjemmesiden accepterer du de praksisser, der er beskrevet nedenfor.",
    ],
    [
        "title" => "2. Information Vi Indsamler",
        "body" => "Vi kan indsamle information, du direkte oplyser, såsom dit navn, e-mailadresse og telefonnummer ved registrering eller indsendelse af en formular, samt automatisk indsamlet information, herunder din IP-adresse, enheds- og browsertype, og sider set på Hjemmesiden.",
    ],
    [
        "title" => "3. Hvordan Vi Bruger Dine Oplysninger",
        "body" => "Vi bruger indsamlet information til at oprette og administrere din konto, besvare forespørgsler, yde kundesupport, forbedre Hjemmesiden og vores tjenester, og, hvor tilladt, sende opdateringer om produkter og tilbud. Du kan til enhver tid framelde dig markedsføringskommunikation.",
    ],
    [
        "title" => "4. Cookies og Sporingsteknologier",
        "body" => "Hjemmesiden bruger cookies og lignende teknologier til at huske dine præferencer, holde dig logget ind og forstå, hvordan besøgende bruger vores sider. Du kan deaktivere cookies via dine browserindstillinger, selvom nogle funktioner muligvis ikke fungerer korrekt.",
    ],
    [
        "title" => "5. Deling af Information",
        "body" => "Vi sælger ikke dine personlige data. Vi kan dele information med betroede tjenesteudbydere, der hjælper os med at drive Hjemmesiden (såsom hosting- eller analyseudbydere), eller når det kræves ved lov, eller for at beskytte vores juridiske rettigheder.",
    ],
    [
        "title" => "6. Datasikkerhed",
        "body" => "Vi anvender rimelige tekniske og organisatoriske foranstaltninger til at beskytte dine oplysninger mod uautoriseret adgang, ændring eller tab. Ingen metode til overførsel eller opbevaring er fuldstændig sikker, og vi kan ikke garantere absolut sikkerhed.",
    ],
    [
        "title" => "7. Dine Rettigheder og Valg",
        "body" => "Afhængigt af din placering kan du have ret til at få adgang til, rette eller anmode om sletning af dine personlige data og til at gøre indsigelse mod visse anvendelser af dem. For at udøve disse rettigheder kan du kontakte os via vores <a class=\"link\" href=\"contacts.php\">kontaktside</a>.",
    ],
    [
        "title" => "8. Børns Privatliv",
        "body" => "Hjemmesiden er ikke rettet mod personer under 18 år, og vi indsamler ikke bevidst personlige data fra mindreårige. Hvis du mener, at en mindreårig har givet os personlige data, bedes du kontakte os, så vi kan fjerne dem.",
    ],
    [
        "title" => "9. Ændringer til Denne Politik",
        "body" => "Vi kan opdatere denne Privatlivspolitik fra tid til anden. Eventuelle ændringer vil blive offentliggjort på denne side med en revideret ikrafttrædelsesdato. Vi opfordrer dig til at gennemgå denne side regelmæssigt.",
    ],
    [
        "title" => "10. Kontakt Os",
        "body" => "Hvis du har spørgsmål om denne Privatlivspolitik, eller hvordan dine oplysninger håndteres, kan du kontakte os via vores <a class=\"link\" href=\"contacts.php\">kontaktside</a> eller e-maile os på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Brugsvilkår";
$conditions_meta_description = "Gennemgå Brugsvilkårene, der regulerer adgangen til og brugen af $site_name's hjemmeside og handelsplatform.";
$conditions_sections = [
    [
        "title" => "1. Accept af Vilkår",
        "body" => "Ved at få adgang til eller bruge $site_domain (\"Hjemmesiden\") accepterer du at være bundet af disse Brugsvilkår. Hvis du ikke er enig i nogen del af disse vilkår, bør du ikke bruge Hjemmesiden.",
    ],
    [
        "title" => "2. Berettigelse",
        "body" => "Du skal være mindst 18 år gammel og have juridisk kapacitet til at bruge handelsrelaterede tjenester i din jurisdiktion for at bruge Hjemmesiden. Ved at bruge Hjemmesiden bekræfter du, at du opfylder disse krav.",
    ],
    [
        "title" => "3. Beskrivelse af Tjenesten",
        "body" => "$site_name leverer en online platform med uddannelsesindhold, markedsinformation og AI-understøttede analyseværktøjer. Intet på Hjemmesiden udgør finansiel, investerings-, skatte- eller juridisk rådgivning, og alle oplysninger, der gives, er kun til generelle informationsformål.",
    ],
    [
        "title" => "4. Brugerens Ansvar",
        "body" => "Du er ansvarlig for at give præcise oplysninger ved registrering, for at bevare fortroligheden af dine kontooplysninger og for alle aktiviteter, der finder sted under din konto.",
    ],
    [
        "title" => "5. Intellektuel Ejendom",
        "body" => "Alt indhold på Hjemmesiden, herunder tekst, billeder, logoer og software, er ejet af $site_name eller dens licensgivere og er beskyttet af gældende love om intellektuel ejendom. Du må ikke reproducere eller distribuere dette indhold uden tilladelse.",
    ],
    [
        "title" => "6. Ingen Finansiel Rådgivning",
        "body" => "Indhold på Hjemmesiden gives udelukkende til informations- og uddannelsesformål og bør ikke fortolkes som finansiel rådgivning. Du er alene ansvarlig for dine egne handelsbeslutninger og bør konsultere en uafhængig finansiel rådgiver, hvor det er nødvendigt. Se vores <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a> for at lære mere.",
    ],
    [
        "title" => "7. Ansvarsbegrænsning",
        "body" => "I det maksimale omfang tilladt ved lov er $site_name ikke ansvarlig for direkte, indirekte, hændelige eller følgeskader, der opstår som følge af din brug af, eller manglende evne til at bruge, Hjemmesiden eller tilknyttede tredjepartstjenester.",
    ],
    [
        "title" => "8. Ophør",
        "body" => "Vi forbeholder os retten til efter eget skøn at suspendere eller afslutte din adgang til Hjemmesiden uden varsel for adfærd, vi mener overtræder disse Brugsvilkår eller på anden måde er skadelig for andre brugere eller Hjemmesiden.",
    ],
    [
        "title" => "9. Ændringer til Disse Vilkår",
        "body" => "Vi kan til enhver tid revidere disse Brugsvilkår. Fortsat brug af Hjemmesiden efter offentliggørelse af ændringer udgør accept af de opdaterede vilkår.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Spørgsmål om disse Brugsvilkår kan rettes til vores team via <a class=\"link\" href=\"contacts.php\">kontaktsiden</a> eller via e-mail til info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikoadvarsel — Oplysning om Handelsrisiko";
$risk_meta_description = "Læs $site_name's risikoadvarsel, før du handler: krypto-markedsrisici, gearing, likviditet, cybersikkerhed og lovgivningsmæssige overvejelser.";
$risk_title = "Risikoadvarsel";
$risk_intro = "At forstå risici er det første skridt mod selvsikker handel.";
$risk_ai_title = "Sådan hjælper vores AI-system med risikostyring:";
$risk_ai_1_title = "Algoritmisk Effektivitet og Følelsesløs Handel:";
$risk_ai_1_text = "Avancerede algoritmer analyserer markedssignaler for objektivt at udføre transaktioner på optimale tidspunkter.";
$risk_ai_2_title = "Datadrevne Strategier:";
$risk_ai_2_text = "Strategier er baseret på verificerede markedsmønstre og realtidsanalyse frem for gætteri.";
$risk_ai_3_title = "Fleksible Indstillinger og Fuld Kontrol:";
$risk_ai_3_text = "Juster dine risikoparametre når som helst. Spor alle saldi og transaktioner gennemsigtigt på dit dashboard, uden skjulte gebyrer og uden udbetalingsbegrænsninger.";
$risk_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel indebærer altid risiko. Automatiserede systemer (inklusive AI) garanterer ikke profit, kan fejle på grund af softwarefejl eller uventede markedshændelser og kræver brugertilsyn. Tidligere resultater garanterer ikke fremtidige resultater. Denne platform tjener udelukkende informations- og markedsføringsformål og giver ikke finansiel rådgivning.";
$risk_s1_title = "1. Generel Krypto-Markedsrisiko";
$risk_s1_text = "Kryptovaluta er meget volatile, spekulative aktiver, der opererer døgnet rundt med minimal regulatorisk tilsyn i de fleste jurisdiktioner.";
$risk_s1_li1 = "Værdier kan svinge dramatisk inden for korte perioder, hvilket potentielt kan føre til et totalt tab af investeret kapital.";
$risk_s1_li2 = "Markedsværdier kan påvirkes stærkt af lovgivningsmæssige ændringer, teknologiske udviklinger, sikkerhedsbrud eller bredere makroøkonomiske begivenheder.";
$risk_s1_li3 = "Nogle aktiver kan helt miste deres værdi. Invester kun midler, du har råd til at tabe.";
$risk_s2_title = "2. Udførelses-, Likviditets- og Gearingsrisiko";
$risk_s2_li1_title = "Markedsvolatilitet og Likviditet:";
$risk_s2_li1_text = "Ekstreme prisbevægelser (10-20%+ dagligt) eller lav likviditet (især i mindre mønter) kan forårsage forsinkelser, platformsvigt og alvorlig udførelsesslippage. Stop-loss-ordrer kan ikke garantere tabsgrænser under ekstreme forhold.";
$risk_s2_li2_title = "Gearings- og Marginrisiko:";
$risk_s2_li2_text = "Gearede produkter forstærker både gevinster og tab, hvilket betyder, at du kan tabe mere end dit oprindelige indskud. Cirka 70-80% af detailinvestorkonti taber penge, når de handler gearede produkter.";
$risk_s3_title = "3. Teknisk, Cybersikkerheds- og Tredjepartsrisiko";
$risk_s3_li1_title = "Tekniske Faktorer:";
$risk_s3_li1_text = "Online handel indebærer iboende risici for internetforbindelsessvigt, hardware-/softwarefejl og utilgængelighed af tjenesten.";
$risk_s3_li2_title = "Cybersikkerhed:";
$risk_s3_li2_text = "Kryptokonti er hyppige mål for phishing, malware og hacking. Transaktioner er irreversible; kompromittering af dine loginoplysninger kan føre til permanent tab.";
$risk_s3_li3_title = "Tredjepartsplatforme:";
$risk_s3_li3_text = "Denne hjemmeside kan forbinde brugere med tredjepartsplatforme. Vi kontrollerer, godkender eller garanterer ikke deres sikkerhed, drift eller solvens. Udfør altid din egen grundige due diligence, før du indsætter midler på eksterne platforme.";
$risk_s4_title = "4. Lovgivningsmæssige, Skattemæssige og Afsluttende Bestemmelser";
$risk_s4_li1_title = "Juridisk Overholdelse og Skatter:";
$risk_s4_li1_text = "Lovgivningsmæssige rammer varierer meget og ændrer sig hurtigt. Brugere er alene ansvarlige for at sikre, at deres handelsaktiviteter overholder lokale love, og for at opfylde deres egne skatteforpligtelser.";
$risk_s4_li2_title = "Ingen Profitgarantier:";
$risk_s4_li2_text = "Der findes ingen \"sikker\" eller risikofri kryptohandel. Eventuelle angivne afkasttal eller resultateksempler er rent hypotetiske.";
$risk_s4_li3_title = "Egnethed:";
$risk_s4_li3_text = "Hvis du ikke fuldt ud forstår risiciene, er afhængig af essentielle midler eller handler med lånte penge, er kryptohandel ikke egnet for dig. Konsulter en uafhængig, licenseret finansiel rådgiver i tvivlstilfælde.";
$risk_contact = "<strong>Kontakt:</strong> For spørgsmål om denne erklæring, eller for at indsende en forespørgsel, bedes du kontakte vores officielle kundeserviceteam via kontaktformularen på vores hjemmeside.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Tilmelding | $site_name — Opret Din Gratis Konto";
$sign_meta_description = "Opret din gratis $site_name-konto på få minutter og begynd at handle klogere med AI-drevet markedsanalyse.";
$sign_h1 = "Opret Din Gratis Konto";
$sign_lead = "Bliv en del af $site_name på få minutter. Udfyld dine oplysninger nedenfor for at komme i gang.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Tak | $site_name";
$thanks_h1 = "Tak!";
$thanks_text = "Dine oplysninger er modtaget. Et medlem af $site_name-teamet kontakter dig snart for at hjælpe dig i gang.";
$thanks_btn = "Tilbage til Hjem";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Se hver side på $site_name's hjemmeside, herunder handelsplatformen, tilbuddet, support og juridiske sider.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Hver side af $site_name på ét sted.";

