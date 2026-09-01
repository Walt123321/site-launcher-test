<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sv-SE';
$form_language = 'sv'; // matches this page's own language, not the offer's global default

// ============================================================
// SV TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Officiell Webbplats | Handelsplattform";
$home_meta_description = "$site_name erbjuder en användarvänlig handelsplattform med avancerade marknadsverktyg, realtidsinsikter och praktiska funktioner som gör onlinehandel mer tillgänglig och välinformerad.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Om oss";
$nav_contacts = "Kontakt";
$nav_login = "Logga in";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Gick just med";
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
$form_title = "Kom Igång Nu";
$form_fname_placeholder = "Fullständigt namn";
$form_lname_placeholder = "Efternamn";
$form_email_placeholder = "E-postadress";
$form_btn_submit = "Skapa Konto";
$form_disclaimer_text = "* Genom att klicka på knappen godkänner du vår <a class=\"link\" href=\"privacy.php\">Integritetspolicy</a> och våra <a class=\"link\" href=\"conditions.php\">Användarvillkor</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SÄKRAD";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI designad för att läsa marknaden tydligare";
$s1_subtitle = "Teknikdriven investeringsstrategi";
$s1_quote = "$site_name är byggt för att göra det enklare att arbeta med marknaderna, oavsett om du har erfarenhet eller inte. Plattformen använder artificiell intelligens för att omvandla komplex data till tydliga, handlingsbara beslut, vilket gör att du kan handla med större självförtroende i alla scenarier.";
$s1_p1 = "Systemet granskar enorma mängder information i realtid: det upptäcker förändringar, känner igen mönster och reagerar snabbt på marknadssignaler. Detta ger dig en tydlig bild av det aktuella sammanhanget, så att du kan upptäcka möjligheter utan att behöva gräva igenom komplicerad analys.";
$s1_p2 = "Övervakning dygnet runt, ett användarvänligt gränssnitt och en hög skyddsnivå gör upplevelsen bekväm och pålitlig. Allt är utformat så att du kan fokusera på resultat, inte på den tekniska sidan.";
$s1_p3 = "Copy trading-funktionen ger dig också tillgång till mer erfarna handlares strategier. Du kan följa deras rörelser och tillämpa beprövade tillvägagångssätt i din egen handel, vilket kombinerar professionell bedömning med automatisering.";
$s1_cta = "Skapa Konto";
$s1_img_alt = "$site_name digital ekonomi";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Precis marknadsanalys, utan extra brus";
$s2_intro = "$site_name använder artificiell intelligens för att kontinuerligt övervaka marknaden och snabbt upptäcka förändringar. Systemet bearbetar enorma mängder data och visar endast de relevanta signalerna, utan att överväldiga dig med onödig information.";
$s2_item1_title = "Marknadsreaktion utan väntan";
$s2_item1_text = "Plattformen identifierar rörelser i deras tidiga skeden: momentum, vändningar och trendförändringar. Du ser omedelbart vad som händer och kan agera vid rätt tidpunkt.";
$s2_item2_title = "En tydlig avläsning istället för gissningar";
$s2_item2_text = "Inga komplicerade diagram eller gissningar. $site_name betonar det väsentliga och ger en tydlig översikt av situationen, så att du kan besluta utifrån data, inte intuition.";
$s2_item3_title = "Kontroll och skydd";
$s2_item3_text = "Din data är skyddad, åtkomsten kontrolleras och transaktioner flödar genom säkra kanaler. Detta gör att du kan fokusera på marknaden, inte på teknisk risk.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Tydlig intelligens för handlare";
$s3_card1_title = "$site_name respekterar användarens integritet och kontroll";
$s3_card1_text = "$site_name behandlar information med full transparens och integritet. Den missbrukar inte dina personuppgifter. Inga transaktioner eller ordrar registreras på denna plattform.";
$s3_card2_title = "En tydlig analysmiljö för bättre beslut";
$s3_card2_text = "$site_name fungerar som ett teknologiskt utrymme där AI förstärker mänskligt omdöme istället för att ersätta det. Dessa verktyg gör det lättare att förstå marknadsförändringar, jämföra strategier och studera tillgångars beteende.";
$s3_card3_title = "AI-verktyg som skärper din blick på marknaden";
$s3_card3_text = "Analysen stannar aldrig. $site_name observerar kryptomiljön och skickar realtidsaviseringar så snart en relevant rörelse dyker upp.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Skarp analys, utan känslor eller fel";
$s4_quote = "$site_name omvandlar komplex marknadsdata till organiserad, lättläst information, eliminerar onödigt brus och hjälper dig att fokusera på signalerna som verkligen betyder något. Detta gör att du förstår en situation tidigare och beslutar utan att känslor tar över.";
$s4_p1 = "Systemet uppdaterar kontinuerligt sina slutsatser med ny data. Istället för eftersläpande indikatorer använder det adaptiva modeller som reagerar på marknadsförändringar i realtid. Det betyder att du alltid arbetar med en aktuell bild och kan agera snabbare när det verkligen betyder något.";
$s4_img_alt = "$site_name artificiell intelligens";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Använd $site_name AI för precisa, rättidiga beslut";
$s5_quote = "$site_name analyserar marknaden i realtid och visar dig omedelbart var rörelsen och möjligheterna finns. Systemet bearbetar data åt dig och levererar färdiga signaler: när du ska gå in, när du ska gå ut och vad du ska hålla utkik efter.";
$s5_p1 = "Du behöver inte titta på diagram hela dagen. Plattformen upptäcker själv förändringar och reagerar snabbt på marknaden, så att du inte missar viktiga ögonblick.";
$s5_p2 = "Algoritmerna arbetar dygnet runt och identifierar nya möjligheter så snart de uppstår. Du får uppdaterad information utan förseningar eller informationsöverbelastning.";
$s5_p3 = "Samtidigt förblir säkerheten på hög nivå: dataskydd, säker åtkomst och handelskontroll. $site_name passar både nybörjare och aktiva handlare — besluten förblir dina, men stöds av en solid analytisk grund.";
$s5_img_alt = "$site_name finansiell automatisering";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konsekvent handel börjar med ett organiserat system";
$s6_p1 = "$site_name hjälper till att skapa struktur i ditt arbete med marknaden. Plattformen skapar ett tydligt ramverk: du definierar dina mål och din risknivå, och systemet anpassar sin analys till din stil — utan kaos och utan överbelastning.";
$s6_p2 = "Dygnet runt-analys omvandlar dataflödet till enkla, begripliga signaler. Du ser bara det som betyder något: var det finns rörelse, var det är värt att gå in och när det är bättre att vänta. Med tiden blir algoritmerna skarpare och anpassar sig till marknaden.";
$s6_item1_title = "Välj ditt tempo: snabb handel eller ett långsiktigt tillvägagångssätt";
$s6_item1_text = "$site_name stöder olika strategier. För aktiv handel markerar systemet ingångspunkter och prisrörelser. För ett långsiktigt tillvägagångssätt hjälper det dig att behålla positioner med hänsyn till trend och risk.";
$s6_item2_title = "Ingångspunkter utan gissningar";
$s6_item2_text = "Plattformen visar var marknaden är mest aktiv. Detta hjälper dig att gå in med större självförtroende och gå ut i tid, utan improvisation.";
$s6_item3_title = "Riskhantering från början";
$s6_item3_text = "Du kan se möjliga scenarier i förväg: var risken är lägre och potentialen högre. Detta gör att du kan planera transaktioner innan rörelsen ens börjar.";
$s6_item4_title = "Färdig analys";
$s6_item4_text = "$site_name överväldigar dig inte med komplicerad terminologi. Du får tydlig, direkt användbar information, utformad för att hjälpa dig besluta snabbare och med större självförtroende.";
$s6_cta = "Kom Igång Nu";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Enkla verktyg för precisa beslut med $site_name";
$s7_quote = "$site_name ger dig allt du behöver för att handla på marknaden — utan tekniskt jargong eller informationsöverbelastning. Plattformen analyserar själv prisrörelser, trender och möjliga ingångspunkter, och visar endast det som verkligen betyder något.";
$s7_point1 = "Systemet hjälper till att upptäcka när marknaden kan vända, var starka rörelser uppstår och vilka ögonblick som är bäst för att gå in eller ut. Varje signal kommer förbehandlad — du behöver inte behärska komplexa indikatorer.";
$s7_point2 = "Det inkluderar även copy trading: du kan följa och upprepa erfarna handlares beslut utan att lägga tid på din egen analys.";
$s7_point3 = "Gränssnittet förblir så enkelt som möjligt — varje verktyg förstås med en blick och är redo att användas från första stund.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Hitta viktiga tidsfönster med $site_name AI";
$s8_item1 = "Automatisk diversifiering fördelar medel över olika tillgångar, minskar risken och skyddar kapital även på instabila marknader.";
$s8_item2 = "Ett helt autonomt system — du behöver inte titta på diagrammen. Algoritmerna analyserar marknaden och fattar beslut självständigt.";
$s8_item3 = "Uttag är tillgängliga när som helst — till bankkort, kryptoplånböcker eller elektroniska betalningssystem, utan förseningar.";
$s8_item4 = "Dagliga rapporter visar dina resultat och ger dig full kontroll över situationen i realtid.";
$s8_item5 = "Flexibla inställningar för risknivå gör att du kan välja en strategi som passar dina mål — från konservativ till mer aggressiv.";
$s8_item6 = "En vinstpotential på upp till 400% gör $site_name till ett verktyg för dem som inte bara vill bevara sitt kapital, utan låta det växa avsevärt.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Expertanalys driven av $site_name";
$s9_quote = "$site_name kombinerar kraften i algoritmer med marknadserfarenhet och omvandlar komplex data till tydliga, lättförståeliga signaler. Systemet upptäcker snabbt mönster och potentiella möjligheter, vilket gör att du kan besluta utan informationsöverbelastning.";
$s9_p1 = "Du får förbehandlade analyser som tar hänsyn till både tekniska indikatorer och marknadsbeteende — så att du kan agera snabbare, med större självförtroende och precision.";
$s9_img_alt = "$site_name investeringsstrategi";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Vad våra användare säger";
$review_1_text = "Plattformen är väldigt intuitiv, och verktygen har hjälpt mig att förbättra mina handelsresultat.";
$review_2_text = "Snabb support och verkligen användbart utbildningsmaterial — perfekt för personer som precis har börjat.";
$review_3_text = "Anpassningsbara diagram och snabb exekvering — det har varit mitt förstahandsval i flera månader.";
$review_4_text = "Registreringen tog mindre än fem minuter, och instrumentpanelen gör det enkelt att se exakt var mina pengar finns.";
$review_5_text = "Jag gillar att plattformen förklarar resonemanget bakom varje signal, istället för att bara kasta siffror på mig.";
$review_6_text = "Uttag har alltid varit snabba för mig, och supportteamet svarar faktiskt inom några minuter.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Vanliga Frågor om $site_name";
$faq_q1 = "Kan $site_name upptäcka marknadsförändringar i realtid?";
$faq_a1 = "Ja. Den följer livedata, identifierar momentumförändringar i deras tidiga skeden och upptäcker mönster innan de utvecklas fullt ut, vilket ger användarna en tidig fördel.";
$faq_q2 = "Kan $site_name-upplevelsen anpassas?";
$faq_a2 = "Ja. Användare kan välja intresseområden, justera detaljnivån och följa offentliga strategier som matchar deras handelsstil eller inlärningsbehov.";
$faq_q3 = "Ersätter $site_name traditionella forskningsmetoder?";
$faq_a3 = "Nej. Den förbättrar dem genom att snabbt tillhandahålla AI-filtrerade insikter, medan användaren behåller full kontroll över sin egen forskning och sina beslut.";
$faq_cta = "Lär Dig Mer Nu";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Höjdpunkter";
$hl1_emoji = "🤖";
$hl1_title = "Registreringskostnad";
$hl1_desc = "Ingen kostnad för att registrera sig";
$hl2_emoji = "💰";
$hl2_title = "Handelskommissioner";
$hl2_desc = "Absolut inga kostnader";
$hl3_emoji = "📋";
$hl3_title = "Enkel Registrering";
$hl3_desc = "Registreringen är snabb och enkel";
$hl4_emoji = "📊";
$hl4_title = "Utbildningsfokus";
$hl4_desc = "Lektioner om krypto, Forex-handel och investering";
$hl5_emoji = "🌎";
$hl5_title = "Tillgängliga Länder";
$hl5_desc = "Inte tillgänglig i USA, tillgänglig i de flesta andra länder";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handla smart, väx med tillförsikt";
$footnav_about = "Om oss";
$footnav_product = "Produkt";
$footnav_offer = "Erbjudande";
$footnav_contacts = "Kontakt";
$footnav_faq = "Vanliga Frågor";
$footnav_privacy = "Integritetspolicy";
$footnav_conditions = "Användarvillkor";
$footnav_risk = "Riskvarning";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publicerar allmänt utbildningsmaterial om handel, investeringar, finansmarknader och digitala tillgångar. Artiklar, marknadsdata, diagram och annat webbplatsinnehåll tillhandahålls endast i informationssyfte och bör inte betraktas som finansiell, investerings- eller juridisk rådgivning. Även om vi strävar efter att tillhandahålla pålitlig och uppdaterad information kan vi inte garantera dess noggrannhet eller fullständighet och ansvarar inte för förluster som uppstår till följd av att man förlitar sig på innehållet.<br><br>Handel innebär risk, och kryptovaluta, Forex, CFD:er, aktier och andra finansiella produkter kan variera betydligt i värde. Överväg din egen ekonomiska situation och risktolerans innan du handlar, och sök professionell rådgivning när det behövs. Sätt aldrig in pengar som du inte har råd att förlora.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Handelskonsult";
$quiz_text_welcome = "Hej! Jag är Sofia, din personliga handelskonsult. Har du några minuter att hitta den bästa planen för dig?";
$quiz_text_q1 = "Har du handlat tidigare?";
$quiz_text_a1_yes = "Ja, jag har erfarenhet";
$quiz_text_a1_no = "Nej, jag är nybörjare";
$quiz_text_q2 = "Toppen! Vad är ditt förnamn så att jag kan anpassa din plan?";
$quiz_text_q3 = "Vad är ditt huvudsakliga mål med handel?";
$quiz_text_a3_yes = "Bygga långsiktig förmögenhet";
$quiz_text_a3_no = "Generera kortsiktig inkomst";
$quiz_text_q4 = "Hur mycket vill du börja med?";
$quiz_text_a4_1 = "Mindre än $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Mer än $1000";
$quiz_text_q5 = "Perfekt. Vill du att jag öppnar ett gratis konto åt dig nu?";
$quiz_text_a5_yes = "Ja, låt oss göra det";
$quiz_text_a5_no = "Inte nu";
$quiz_text_loader = "Hittar din bästa plan...";
$quiz_text_final_ttl = "Allt är klart!";
$quiz_text_processing = "Dina uppgifter skickas...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Förnamn";
$quiz_placeholder_lname = "Efternamn";
$quiz_placeholder_email = "E-post";
$quiz_btn_submit = "Skaffa Mitt Gratis Konto";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Hem";
$bc_about = "Om oss";
$bc_product = "Produkt";
$bc_offer = "Erbjudande";
$bc_contacts = "Kontakt";
$bc_faq = "Vanliga Frågor";
$bc_privacy = "Integritetspolicy";
$bc_conditions = "Användarvillkor";
$bc_risk = "Riskvarning";
$bc_sign = "Registrering";
$bc_thanks = "Tack";
$bc_sitemap = "Webbplatskarta";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Om $site_name";
$about_meta_description = "Lär dig om $site_name uppdrag: att göra marknadsanalys tydligare och mer tillgänglig med AI-drivna verktyg.";
$about_h1 = "Om $site_name";
$about_lead = "$site_name är byggt kring en idé: handelsbeslut bör baseras på tydlig information, inte gissningar.";
$about_p1 = "Vi kombinerar artificiell intelligens med verklig marknadserfarenhet för att omvandla komplex, brusig data till signaler som är lätta att förstå och agera på. Vår plattform övervakar marknaderna dag och natt, så att du inte behöver göra det.";
$about_p2 = "Oavsett om du gör din första handel eller har varit aktiv på marknaderna i åratal, är $site_name designad för att möta dig där du är — med verktyg som sträcker sig från enkel vägledning till avancerad realtidsanalys.";
$about_p3 = "Vi tror att teknik ska stödja ditt omdöme, inte ersätta det. Varje signal som $site_name genererar är avsedd att informera ett beslut som fortfarande är helt ditt eget.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produkt — AI-marknadsanalysverktyg";
$product_meta_description = "Utforska $site_name-produkten: realtids AI-marknadsanalys, copy trading, riskkontroller och automatiserad diversifiering.";
$product_h1 = "$site_name-produkten";
$product_lead = "En enda plattform som läser marknaden åt dig: realtidsanalys, copy trading och flexibla riskverktyg, designade för att göra handelsbeslut tydligare.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Erbjudande — Börja Gratis";
$offer_meta_description = "Se vad som ingår i det aktuella $site_name-erbjudandet: gratis registrering, inga handelskommissioner och full plattformsåtkomst.";
$offer_h1 = "Vårt aktuella erbjudande";
$offer_lead = "Skapa ditt konto gratis och lås upp den fullständiga $site_name-plattformen &mdash; inga registreringsavgifter, inga handelskommissioner.";
$offer_li1 = "Ingen kostnad för att registrera ditt konto";
$offer_li2 = "Inga kommissioner på transaktioner";
$offer_li3 = "Full åtkomst till realtids AI-marknadsanalys och copy trading";
$offer_li4 = "Uttag tillgängliga när som helst, utan dolda avgifter";
$offer_li5 = "Utbildningsresurser om krypto, Forex och investering ingår";
$offer_note = "Tillgängligheten kan variera beroende på region. Granska vår <a class=\"link\" href=\"risk-warning.php\">Riskvarning</a> innan du finansierar ett konto.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontakta $site_name — Kom i kontakt med vårt team";
$contacts_meta_description = "Har du en fråga om ditt $site_name-konto eller plattformen? Kontakta vårt supportteam via e-post eller skicka ett meddelande till oss.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Frågor om ditt konto, en insättning, eller hur plattformen fungerar? Vårt team är redo att hjälpa till.";
$contacts_email_label = "E-post";
$contacts_hours_label = "Supporttider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svarstid";
$contacts_response_value = "Inom 24 timmar";
$contacts_form_title = "Skicka Ett Meddelande";
$contacts_form_desc = "Lämna dina uppgifter nedan så kontaktar en medlem av vårt team dig direkt.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Integritetspolicy";
$privacy_meta_description = "Lär dig hur $site_name samlar in, använder och skyddar dina personuppgifter över hela webbplatsen och plattformen.";
$privacy_sections = [
    [
        "title" => "1. Introduktion",
        "body" => "Denna Integritetspolicy förklarar hur $site_name (\"vi\") samlar in, använder och skyddar personuppgifter för besökare och användare av $site_domain (\"Webbplatsen\"). Genom att använda Webbplatsen godkänner du de metoder som beskrivs nedan.",
    ],
    [
        "title" => "2. Information Vi Samlar In",
        "body" => "Vi kan samla in information som du direkt tillhandahåller, såsom ditt namn, e-postadress och telefonnummer vid registrering eller inlämning av ett formulär, samt automatiskt insamlad information, inklusive din IP-adress, enhets- och webbläsartyp och sidor som visas på Webbplatsen.",
    ],
    [
        "title" => "3. Hur Vi Använder Din Information",
        "body" => "Vi använder insamlad information för att skapa och hantera ditt konto, svara på förfrågningar, tillhandahålla kundsupport, förbättra Webbplatsen och våra tjänster, och där det är tillåtet, skicka uppdateringar om produkter och erbjudanden. Du kan avregistrera dig från marknadsföringskommunikation när som helst.",
    ],
    [
        "title" => "4. Cookies och Spårningstekniker",
        "body" => "Webbplatsen använder cookies och liknande tekniker för att komma ihåg dina preferenser, hålla dig inloggad och förstå hur besökare använder våra sidor. Du kan inaktivera cookies via dina webbläsarinställningar, även om vissa funktioner kanske inte fungerar korrekt.",
    ],
    [
        "title" => "5. Delning av Information",
        "body" => "Vi säljer inte dina personuppgifter. Vi kan dela information med betrodda tjänsteleverantörer som hjälper oss att driva Webbplatsen (som hosting- eller analysleverantörer), eller när det krävs enligt lag, eller för att skydda våra juridiska rättigheter.",
    ],
    [
        "title" => "6. Datasäkerhet",
        "body" => "Vi tillämpar rimliga tekniska och organisatoriska åtgärder för att skydda din information från obehörig åtkomst, ändring eller förlust. Ingen överförings- eller lagringsmetod är helt säker och vi kan inte garantera absolut säkerhet.",
    ],
    [
        "title" => "7. Dina Rättigheter och Val",
        "body" => "Beroende på din plats kan du ha rätt att få tillgång till, korrigera eller begära radering av dina personuppgifter, och att invända mot vissa användningar av dem. För att utöva dessa rättigheter, kontakta oss via vår <a class=\"link\" href=\"contacts.php\">kontaktsida</a>.",
    ],
    [
        "title" => "8. Barns Integritet",
        "body" => "Webbplatsen riktar sig inte till personer under 18 år, och vi samlar inte medvetet in personuppgifter från minderåriga. Om du tror att en minderårig har försett oss med personuppgifter, kontakta oss så att vi kan ta bort dem.",
    ],
    [
        "title" => "9. Ändringar av Denna Policy",
        "body" => "Vi kan uppdatera denna Integritetspolicy från tid till annan. Eventuella ändringar kommer att publiceras på denna sida med ett reviderat ikraftträdandedatum. Vi uppmuntrar dig att regelbundet granska denna sida.",
    ],
    [
        "title" => "10. Kontakta Oss",
        "body" => "Om du har frågor om denna Integritetspolicy eller hur din information hanteras, kontakta oss via vår <a class=\"link\" href=\"contacts.php\">kontaktsida</a> eller e-posta oss på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Användarvillkor";
$conditions_meta_description = "Granska Användarvillkoren som reglerar åtkomst till och användning av $site_name webbplats och handelsplattform.";
$conditions_sections = [
    [
        "title" => "1. Godkännande av Villkor",
        "body" => "Genom att komma åt eller använda $site_domain (\"Webbplatsen\") samtycker du till att vara bunden av dessa Användarvillkor. Om du inte håller med om någon del av dessa villkor, använd inte Webbplatsen.",
    ],
    [
        "title" => "2. Behörighet",
        "body" => "Du måste vara minst 18 år gammal och ha juridisk kapacitet att använda handelsrelaterade tjänster i din jurisdiktion för att använda Webbplatsen. Genom att använda Webbplatsen bekräftar du att du uppfyller dessa krav.",
    ],
    [
        "title" => "3. Beskrivning av Tjänsten",
        "body" => "$site_name tillhandahåller en onlineplattform med utbildningsinnehåll, marknadsinformation och AI-assisterade analysverktyg. Inget på Webbplatsen utgör finansiell, investerings-, skatte- eller juridisk rådgivning, och all information som tillhandahålls är endast för allmänna informationssyften.",
    ],
    [
        "title" => "4. Användarens Ansvar",
        "body" => "Du ansvarar för att tillhandahålla korrekt information vid registrering, för att upprätthålla konfidentialiteten för dina kontouppgifter och för alla aktiviteter som sker under ditt konto.",
    ],
    [
        "title" => "5. Immateriella Rättigheter",
        "body" => "Allt innehåll på Webbplatsen, inklusive text, bilder, logotyper och programvara, ägs av $site_name eller dess licensgivare och skyddas av tillämpliga immaterialrättslagar. Du får inte reproducera eller distribuera detta innehåll utan tillstånd.",
    ],
    [
        "title" => "6. Ingen Finansiell Rådgivning",
        "body" => "Innehåll på Webbplatsen tillhandahålls endast för informations- och utbildningssyften och bör inte tolkas som finansiell rådgivning. Du är ensam ansvarig för dina egna handelsbeslut och bör konsultera en oberoende finansiell rådgivare när det behövs. Se vår <a class=\"link\" href=\"risk-warning.php\">Riskvarning</a> för att lära dig mer.",
    ],
    [
        "title" => "7. Ansvarsbegränsning",
        "body" => "I den utsträckning som tillåts enligt lag ska $site_name inte hållas ansvarig för några direkta, indirekta, tillfälliga eller följdskador som uppstår från din användning av, eller oförmåga att använda, Webbplatsen eller anslutna tredjepartstjänster.",
    ],
    [
        "title" => "8. Uppsägning",
        "body" => "Vi förbehåller oss rätten att stänga av eller avsluta din åtkomst till Webbplatsen efter eget gottfinnande, utan föregående meddelande, för beteende som vi anser bryter mot dessa Användarvillkor eller på annat sätt är skadligt för andra användare eller Webbplatsen.",
    ],
    [
        "title" => "9. Ändringar av Dessa Villkor",
        "body" => "Vi kan revidera dessa Användarvillkor när som helst. Fortsatt användning av Webbplatsen efter att ändringar har publicerats utgör godkännande av de uppdaterade villkoren.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Frågor om dessa Användarvillkor kan riktas till vårt team via <a class=\"link\" href=\"contacts.php\">kontaktsidan</a> eller via e-post till info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Riskvarning — Information om Handelsrisk";
$risk_meta_description = "Läs $site_name riskvarning innan du handlar: kryptomarknadsrisker, hävstång, likviditet, cybersäkerhet och regulatoriska överväganden.";
$risk_title = "Riskvarning";
$risk_intro = "Att förstå risker är det första steget mot självsäker handel.";
$risk_ai_title = "Hur vårt AI-system hjälper till med riskhantering:";
$risk_ai_1_title = "Algoritmisk Effektivitet och Känslolös Handel:";
$risk_ai_1_text = "Avancerade algoritmer analyserar marknadssignaler för att objektivt utföra transaktioner vid optimala tidpunkter.";
$risk_ai_2_title = "Datadrivna Strategier:";
$risk_ai_2_text = "Strategier baseras på verifierade marknadsmönster och realtidsanalys, inte gissningar.";
$risk_ai_3_title = "Flexibla Inställningar och Full Kontroll:";
$risk_ai_3_text = "Justera dina riskparametrar när som helst. Följ alla saldon och transaktioner transparent på din instrumentpanel, utan dolda avgifter och utan uttagsbegränsningar.";
$risk_disclaimer = "<strong>Ansvarsfriskrivning:</strong> Handel innebär alltid risk. Automatiserade system (inklusive AI) garanterar inte vinst, kan misslyckas på grund av programvarufel eller oväntade marknadshändelser, och kräver användarövervakning. Tidigare resultat garanterar inte framtida resultat. Denna plattform tjänar endast informations- och marknadsföringssyften och ger inte finansiell rådgivning.";
$risk_s1_title = "1. Allmän Kryptomarknadsrisk";
$risk_s1_text = "Kryptovalutor är mycket volatila, spekulativa tillgångar som verkar dygnet runt med minimal reglerande tillsyn i de flesta jurisdiktioner.";
$risk_s1_li1 = "Värden kan fluktuera dramatiskt inom korta perioder, vilket potentiellt kan leda till en total förlust av investerat kapital.";
$risk_s1_li2 = "Marknadsvärden kan starkt påverkas av regulatoriska förändringar, teknisk utveckling, säkerhetsintrång eller bredare makroekonomiska händelser.";
$risk_s1_li3 = "Vissa tillgångar kan helt förlora sitt värde. Investera endast medel som du har råd att förlora.";
$risk_s2_title = "2. Exekverings-, Likviditets- och Hävstångsrisk";
$risk_s2_li1_title = "Marknadsvolatilitet och Likviditet:";
$risk_s2_li1_text = "Extrema prisrörelser (10-20%+ dagligen) eller låg likviditet (särskilt i mindre mynt) kan orsaka förseningar, plattformsfel och allvarlig exekveringsslippage. Stop-loss-order kanske inte garanterar förlustgränser under extrema förhållanden.";
$risk_s2_li2_title = "Hävstångs- och Marginalrisk:";
$risk_s2_li2_text = "Hävstångsprodukter förstärker både vinster och förluster, vilket innebär att du kan förlora mer än din ursprungliga insättning. Ungefär 70-80% av privatinvesterarnas konton förlorar pengar vid handel med hävstångsprodukter.";
$risk_s3_title = "3. Teknisk, Cybersäkerhets- och Tredjepartsrisk";
$risk_s3_li1_title = "Tekniska Faktorer:";
$risk_s3_li1_text = "Onlinehandel medför inneboende risker för internetanslutningsfel, hårdvaru-/programvarufel och otillgänglighet av tjänsten.";
$risk_s3_li2_title = "Cybersäkerhet:";
$risk_s3_li2_text = "Kryptokonton är vanliga mål för phishing, skadlig programvara och hackning. Transaktioner är oåterkalleliga; om dina inloggningsuppgifter komprometteras kan det leda till permanent förlust.";
$risk_s3_li3_title = "Tredjepartsplattformar:";
$risk_s3_li3_text = "Denna webbplats kan koppla samman användare med tredjepartsplattformar. Vi kontrollerar, godkänner eller garanterar inte deras säkerhet, verksamhet eller solvens. Genomför alltid din egen grundliga due diligence innan du sätter in medel på externa plattformar.";
$risk_s4_title = "4. Regulatoriska, Skatte- och Slutbestämmelser";
$risk_s4_li1_title = "Efterlevnad av Lag och Skatter:";
$risk_s4_li1_text = "Regulatoriska ramverk varierar kraftigt och förändras snabbt. Användare är ensamma ansvariga för att säkerställa att deras handelsaktiviteter följer lokala lagar och för att uppfylla sina egna skatteskyldigheter.";
$risk_s4_li2_title = "Inga Vinstgarantier:";
$risk_s4_li2_text = "Det finns ingen \"säker\" eller riskfri kryptohandel. Eventuella avkastningssiffror eller resultatexempel som tillhandahålls är rent hypotetiska.";
$risk_s4_li3_title = "Lämplighet:";
$risk_s4_li3_text = "Om du inte fullt ut förstår riskerna, är beroende av väsentliga medel eller handlar med lånade pengar, är kryptohandel inte lämplig för dig. Rådgör med en oberoende, licensierad finansiell rådgivare om du är osäker.";
$risk_contact = "<strong>Kontakt:</strong> För frågor om detta uttalande, eller för att skicka in en förfrågan, kontakta vårt officiella kundtjänstteam via kontaktformuläret på vår webbplats.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrering | $site_name — Skapa Ditt Gratis Konto";
$sign_meta_description = "Skapa ditt gratis $site_name-konto på minuter och börja handla smartare med AI-driven marknadsanalys.";
$sign_h1 = "Skapa Ditt Gratis Konto";
$sign_lead = "Gå med i $site_name på minuter. Fyll i dina uppgifter nedan för att komma igång.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Tack | $site_name";
$thanks_h1 = "Tack!";
$thanks_text = "Dina uppgifter har tagits emot. En medlem av $site_name-teamet kontaktar dig snart för att hjälpa dig komma igång.";
$thanks_btn = "Tillbaka till Hem";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Webbplatskarta | $site_name";
$sitemap_meta_description = "Se varje sida på $site_name webbplats, inklusive handelsplattformen, erbjudandet, support och juridiska sidor.";
$sitemap_h1 = "Webbplatskarta";
$sitemap_lead = "Varje sida av $site_name på ett ställe.";

