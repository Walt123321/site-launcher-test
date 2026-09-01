<?php
require __DIR__ . '/../lang.php';
$site_lang = 'nl-NL';
$form_language = 'nl'; // matches this page's own language, not the offer's global default

// ============================================================
// NL TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Officiële Website | Handelsplatform";
$home_meta_description = "$site_name biedt een gebruiksvriendelijk handelsplatform met geavanceerde markttools, realtime inzichten en praktische functies die online handelen toegankelijker en beter geïnformeerd maken.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platform";
$hero_subtitle = "Ondersteunt miljoenen wereldwijd op hun reis met digitale activa";
$hero_badge_title = "Tevreden Leden";
$hero_badge_subtitle = "Geliefd door miljoenen";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Begin Vandaag Nog met Handelen";
$form_desc = "Klaar om de sprong te wagen? Registreer u nu en zet de eerste stap naar financiële vrijheid. Begin met slechts $app_price $app_currency — toegang tot elke handelstool, realtime marktgegevens en volledige platformtoegang vanaf dag één.";
$form_fname_placeholder = "Voornaam";
$form_lname_placeholder = "Achternaam";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Registreren";
$form_disclaimer_text = "Door uw persoonlijke gegevens in te voeren en op de knop te klikken, gaat u akkoord met het <a class=\"link\" href=\"privacy.php\">Privacybeleid</a> en de <a class=\"link\" href=\"conditions.php\">Algemene Voorwaarden</a> van de website.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BEVEILIGD";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Leer het Platform Kennen";
$stats_title = "Een korte introductie tot slimmer handelen";
$stat_1_value = "154+";
$stat_1_label = "Landen Gedekt";
$stat_2_value = "29 Miljoen";
$stat_2_label = "Wereldwijde Investeerders";
$stat_3_value = "635+";
$stat_3_label = "Munten";
$stat_4_value = "3,26 Miljard $";
$stat_4_label = "24u-Handelsvolume";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Waarom $site_name?";
$why_title = "Redenen om Voor Ons te Kiezen";
$why_1_title = "Snel &amp; Eenvoudig";
$why_1_text = "Koop en verkoop uw favoriete cryptovaluta binnen seconden.";
$why_2_title = "Veilig &amp; Beveiligd";
$why_2_text = "Wij gebruiken de nieuwste technologie om uw geld en gegevens veilig te houden.";
$why_3_title = "Open voor Iedereen";
$why_3_text = "Handel 24/7 op ons platform, waar en wanneer u maar wilt.";
$why_4_title = "Professionele Tools";
$why_4_text = "Van eenvoudige tot professionele handelsfuncties, wij hebben alles.";
$why_5_title = "Trends &amp; Inzichten";
$why_5_text = "Ontvang het laatste crypto-nieuws, inzichten en trends van experts.";
$why_6_title = "24/7 Ondersteuning";
$why_6_text = "Ons vriendelijke ondersteuningsteam staat altijd voor u klaar.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Hoe Het Werkt";
$how_title = "Eenvoudige Stappen om te Beginnen met Handelen";
$how_1_title = "Registreren";
$how_1_text = "Maak een account aan en begin binnen enkele minuten met handelen.";
$how_1_btn = "Begin met Handelen";
$how_2_title = "Stort Geld";
$how_2_text = "Financier uw account met een minimale storting van $app_price $app_currency om volledige handelstoegang te ontgrendelen. Kies uit meerdere betaalmethoden en laat uw portefeuille vandaag nog groeien.";
$how_2_note = "Geld toevoegen....";
$how_3_title = "Begin met Handelen";
$how_3_text = "Verken de markt en handel op uw eigen manier.";
$how_3_note = "Kopen en HODLen";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Rekenmachine";
$calc_title = "Ontdek hoeveel tijd en potentieel u laat liggen";
$calc_volume_label = "Maandelijks Handelsvolume";
$calc_trades_label = "Trades per Week";
$calc_time_label = "Tijd die U Kunt Besparen";
$calc_boost_label = "Potentiële Volumeboost";
$calc_btn = "Begin met Handelen";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Functies";
$features_title = "De Kracht van $site_name";
$feature_1_title = "Spot Trading";
$feature_1_text = "Maximaliseer uw handelspotentieel met professionele tools.";
$feature_2_title = "Koop Crypto";
$feature_2_text = "Koop crypto met kaarten of banken.";
$feature_3_title = "Crypto Derivaten";
$feature_3_text = "Eenvoudige, geavanceerde futures-handel.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Laat uw vermogen moeiteloos groeien.";
$feature_5_title = "Trading Bot";
$feature_5_text = "Hogere winsten, zelfs terwijl u slaapt.";
$feature_6_title = "Margin Trading";
$feature_6_text = "Leen, handel en betaal eenvoudig terug.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Wat Onze Gebruikers Zeggen";
$review_1_text = "Het platform is heel eenvoudig te gebruiken, en ik heb gestage vooruitgang gezien sinds ik holder werd. De toewijding en frisse ideeën van het team maken dat ik uitkijk naar wat er komen gaat!";
$review_1_role = "Trader";
$review_2_text = "$site_name biedt een soepele en intuïtieve handelservaring. Ik kon meteen beginnen met het kopen en verhandelen van crypto. De interface is eenvoudig te gebruiken en de transactiesnelheden zijn uitstekend!";
$review_2_role = "Nieuwe Trader";
$review_3_text = "Ik vertrouw dit platform voor het beheren van mijn crypto-investeringen. De beveiligingsfuncties geven mij vertrouwen, en ik heb nooit problemen ondervonden met opnames of stortingen. Het is een van de meest betrouwbare exchanges die ik heb gebruikt.";
$review_3_role = "Professionele Trader";
$review_4_text = "Wanneer ik vragen had, was het klantenserviceteam snel en behulpzaam. Ze geven echt om hun gebruikers en maken elke handelservaring soepel en eenvoudig.";
$review_4_role = "Ervaren Trader";
$review_5_text = "Als beginner vond ik $site_name erg eenvoudig te gebruiken. Wat echt opvalt, is het scala aan geavanceerde tools voor meer ervaren traders. Het is een solide optie voor iedereen die zijn portefeuille wil opbouwen!";
$review_5_role = "Community Trader";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "FAQ";
$faq_title = "Veelgestelde Vragen";
$faq_q1 = "Wat is $site_name?";
$faq_a1 = "$site_name is een crypto-exchange waar gebruikers eenvoudig een breed scala aan munten kunnen verhandelen, waaronder Bitcoin, Ethereum en andere populaire cryptovaluta.";
$faq_q2 = "Hoe Veilig Is $site_name voor Crypto-handel?";
$faq_a2 = "Het platform biedt beveiliging door geavanceerde technologie en 1:1 dekking van activa via Proof of Reserves.";
$faq_q3 = "Hoe Doe Ik een Storting?";
$faq_a3 = "$site_name biedt verschillende stortingsopties, waaronder crypto-storting, fiat-storting, P2P-handel en One-Click Buy.";
$faq_q4 = "Heb Ik Ervaring Nodig om $site_name te Gebruiken?";
$faq_a4 = "Nee, u heeft geen enkele ervaring nodig. De gebruiksvriendelijke interface van het platform maakt het toegankelijk voor iedereen, van beginners tot gevorderde traders.";
$faq_q5 = "Zijn er verborgen kosten of vergoedingen?";
$faq_a5 = "Absoluut niet. Er zijn geen registratiekosten, abonnementskosten of verborgen kosten van welke aard dan ook. U ziet altijd het exacte transactiebedrag voordat u bevestigt. Inkomsten komen van premiumfuncties en exchange-partnerschappen, niet van het afnemen van geld van gebruikers.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Begin Vandaag Nog met Handelen";
$cta_desc = "Klaar om de sprong te wagen? Registreer u nu en zet de eerste stap naar financiële onafhankelijkheid.";
$cta_btn = "Registreren";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Belangrijkste Functies van het $site_name Handelsplatform";
$table_1_label = "🤖 Platformtechnologie";
$table_1_val = "Geavanceerde AI-Handelsengine";
$table_2_label = "💳 Financieringsmethoden";
$table_2_val = "Belangrijkste Creditcards, Bankoverschrijving, PayPal";
$table_3_label = "📱 Platformtoegang";
$table_3_val = "Compatibiliteit met Meerdere Apparaten";
$table_4_label = "🚀 Prestatiepercentage";
$table_4_val = "85% Nauwkeurigheid";
$table_5_label = "📊 Handelsinstrumenten";
$table_5_val = "Aandelen, Forex, Grondstoffen, Edelmetalen, CFD's, Cryptovaluta en meer…";
$table_6_label = "✍️ Accountinstelling";
$table_6_val = "Snel en Efficiënt";
$table_7_label = "📞 Klantenservice";
$table_7_val = "24/7 Professionele Ondersteuning";

// Reviews summary card
$summary_title = "$site_name Beoordelingen";
$summary_badge = "Betrouwbaar";
$summary_desc = "Een krachtig, gebruiksvriendelijk handelsplatform met solide automatisering en educatieve bronnen.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handel verstandig, groei snel";
$footer_community_label = "Community";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Product";
$footnav_offer = "Aanbod";
$footnav_contacts = "Contact";
$footnav_faq = "FAQ";
$footnav_privacy = "Privacybeleid";
$footnav_conditions = "Algemene Voorwaarden";
$footnav_risk = "Risicowaarschuwing";
$footer_disclaimer = "$site_name deelt educatieve bronnen en marktgerelateerd materiaal om bezoekers te helpen handelen, investeren en digitale financiële producten beter te begrijpen. Informatie die op de website wordt gepresenteerd, zoals marktcommentaar, activaprijzen, grafieken, gidsen en analytische content, wordt uitsluitend voor algemene informatieve doeleinden verstrekt en vormt geen financieel, investerings-, belasting- of juridisch advies. Hoewel redelijke inspanningen worden geleverd om accurate en relevante informatie te behouden, geeft $site_name geen garanties met betrekking tot de volledigheid, nauwkeurigheid of tijdigheid van de content en kan niet verantwoordelijk worden gehouden voor beslissingen of verliezen die voortvloeien uit het gebruik ervan.<br><br>Deelname aan financiële markten brengt inherente risico's met zich mee. Cryptovaluta, Forex, CFD's, aandelen en andere handelsinstrumenten kunnen aanzienlijke prijsschommelingen ondergaan, en verliezen kunnen optreden. Individuele omstandigheden en risicotolerantie variëren, dus gebruikers moeten hun eigen onderzoek doen en overwegen advies in te winnen bij een gekwalificeerde financiële professional voordat ze geld inzetten. Handel nooit met geld dat u zich niet kunt veroorloven te verliezen.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Handelsadviseur";
$quiz_text_welcome = "Hallo! Ik ben Maya, uw persoonlijke handelsadviseur. Heeft u een paar minuten om het beste plan voor u te vinden?";
$quiz_text_q1 = "Heeft u al eerder in cryptovaluta gehandeld?";
$quiz_text_a1_yes = "Ja, ik heb ervaring";
$quiz_text_a1_no = "Nee, ik ben een beginner";
$quiz_text_q2 = "Geweldig! Wat is uw voornaam zodat ik uw plan kan personaliseren?";
$quiz_text_q3 = "Wat is uw hoofddoel met handelen?";
$quiz_text_a3_yes = "Langetermijnwelvaart opbouwen";
$quiz_text_a3_no = "Kortetermijninkomen genereren";
$quiz_text_q4 = "Met hoeveel wilt u beginnen?";
$quiz_text_a4_1 = "Minder dan $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Meer dan $1000";
$quiz_text_q5 = "Perfect. Wilt u dat ik nu een gratis account voor u open?";
$quiz_text_a5_yes = "Ja, laten we het doen";
$quiz_text_a5_no = "Nu niet";
$quiz_text_loader = "Uw beste plan wordt gezocht...";
$quiz_text_final_ttl = "Alles is klaar!";
$quiz_text_processing = "Uw gegevens worden verzonden...";
$quiz_text_typing = "is aan het typen...";
$quiz_placeholder_fname = "Voornaam";
$quiz_placeholder_lname = "Achternaam";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Mijn Gratis Account Ontvangen";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risicowaarschuwing — Openbaarmaking van Handelsrisico's";
$risk_meta_description = "Lees de $site_name risicowaarschuwing voordat u handelt: cryptovaluta-marktrisico's, hefboomwerking, liquiditeit, cyberbeveiliging en regelgevende overwegingen.";
$risk_title = "Risicowaarschuwing";
$risk_intro = "Het begrijpen van risico's is de eerste stap naar zelfverzekerd handelen.";
$risk_ai_title = "Hoe Ons AI-Systeem Helpt bij Risicobeheer:";
$risk_ai_1_title = "Algoritmische Efficiëntie &amp; Emotieloos Handelen:";
$risk_ai_1_text = "Geavanceerde algoritmen analyseren marktsignalen om transacties objectief op optimale momenten uit te voeren.";
$risk_ai_2_title = "Datagestuurde Strategieën:";
$risk_ai_2_text = "Strategieën zijn gebaseerd op geverifieerde marktpatronen en realtime analyse in plaats van giswerk.";
$risk_ai_3_title = "Flexibele Instellingen &amp; Volledige Controle:";
$risk_ai_3_text = "Pas uw risicoparameters op elk moment aan. Volg alle saldi en transacties transparant op uw dashboard, zonder verborgen kosten en zonder beperkingen op opnames.";
$risk_disclaimer = "<strong>Disclaimer:</strong> Handelen brengt altijd risico met zich mee. Geautomatiseerde systemen (inclusief AI) garanderen geen winst, kunnen falen door softwarefouten of onverwachte marktgebeurtenissen, en vereisen toezicht van de gebruiker. Prestaties uit het verleden bieden geen garantie voor de toekomst. Dit platform dient uitsluitend informatieve en marketingdoeleinden en biedt geen financieel advies.";
$risk_s1_title = "1. Algemene &amp; Cryptovaluta-marktrisico's";
$risk_s1_text = "Cryptovaluta's zijn zeer volatiele, speculatieve activa die 24/7 opereren met minimaal regelgevend toezicht in de meeste rechtsgebieden.";
$risk_s1_li1 = "Waarden kunnen binnen korte periodes dramatisch schommelen, wat mogelijk kan leiden tot een totaal verlies van geïnvesteerd kapitaal.";
$risk_s1_li2 = "Marktwaarden kunnen sterk worden beïnvloed door regelgevende wijzigingen, technische ontwikkelingen, beveiligingsinbreuken of bredere macro-economische gebeurtenissen.";
$risk_s1_li3 = "Sommige activa kunnen hun volledige waarde volledig verliezen. Investeer alleen geld dat u zich kunt veroorloven te verliezen.";
$risk_s2_title = "2. Uitvoerings-, Liquiditeits- &amp; Hefboomrisico's";
$risk_s2_li1_title = "Marktvolatiliteit &amp; Liquiditeit:";
$risk_s2_li1_text = "Extreme prijsbewegingen (10-20%+ dagelijks) of lage liquiditeit (vooral bij kleinere munten) kunnen leiden tot vertragingen, platformstoringen en ernstige uitvoeringsslippage. Stop-loss-orders kunnen verlieslimieten onder extreme omstandigheden niet garanderen.";
$risk_s2_li2_title = "Hefboom- &amp; Margerisico's:";
$risk_s2_li2_text = "Producten met hefboomwerking versterken zowel winsten als verliezen, wat betekent dat u meer kunt verliezen dan uw oorspronkelijke storting. <em>Ongeveer 70-80% van de rekeningen van particuliere beleggers verliest geld bij het handelen met producten met hefboomwerking.</em>";
$risk_s3_title = "3. Technische, Cyberbeveiligings- &amp; Risico's van Derden";
$risk_s3_li1_title = "Technische Factoren:";
$risk_s3_li1_text = "Online handelen brengt inherent risico's met zich mee van internetverbindingsstoringen, hardware-/softwarefouten en niet-beschikbaarheid van de dienst.";
$risk_s3_li2_title = "Cyberbeveiliging:";
$risk_s3_li2_text = "Cryptovaluta-accounts zijn frequente doelwitten van phishing, malware en hacking. Transacties zijn onomkeerbaar; het compromitteren van uw inloggegevens kan leiden tot permanent verlies.";
$risk_s3_li3_title = "Platforms van Derden:";
$risk_s3_li3_text = "Deze website kan gebruikers verbinden met platforms van derden. Wij controleren, onderschrijven of garanderen hun veiligheid, activiteiten of solvabiliteit niet. Voer altijd uw eigen grondige due diligence uit voordat u geld stort op externe platforms.";
$risk_s4_title = "4. Regelgevende, Fiscale &amp; Slotbepalingen";
$risk_s4_li1_title = "Wettelijke Naleving &amp; Belastingen:";
$risk_s4_li1_text = "Regelgevende kaders variëren sterk en veranderen snel. Gebruikers zijn zelf verantwoordelijk voor het waarborgen dat hun handelsactiviteiten voldoen aan lokale wetten en voor het nakomen van hun eigen belastingverplichtingen.";
$risk_s4_li2_title = "Geen Winstgaranties:";
$risk_s4_li2_text = "Er bestaat geen \"veilige\" of risicovrije cryptohandel. Eventuele rendementscijfers of prestatievoorbeelden zijn puur hypothetisch.";
$risk_s4_li3_title = "Geschiktheid:";
$risk_s4_li3_text = "Als u de risico's niet volledig begrijpt, afhankelijk bent van essentiële fondsen, of handelt met geleend geld, is cryptohandel niet geschikt voor u. Raadpleeg een onafhankelijke, gelicentieerde financieel adviseur bij twijfel.";
$risk_contact = "<strong>Contact:</strong> Voor vragen over deze verklaring of om een vraag in te dienen, kunt u contact opnemen met ons officiële klantenserviceteam via het contactformulier op onze website.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Home";
$bc_product = "Product";
$bc_offer = "Aanbod";
$bc_contacts = "Contact";
$bc_faq = "FAQ";
$bc_privacy = "Privacybeleid";
$bc_conditions = "Algemene Voorwaarden";
$bc_risk = "Risicowaarschuwing";
$bc_sign = "Registreren";
$bc_sitemap = "Sitemap";
$bc_thanks = "Bedankt";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Product — Handelstools &amp; Platformfuncties";
$product_meta_description = "Ontdek het $site_name-product: spot trading, crypto-derivaten, een trading bot, margin trading en meer, allemaal gebouwd op een snel en veilig platform.";
$product_h1 = "Het $site_name Handelsproduct";
$product_lead = "Eén platform, elke tool die een trader nodig heeft: van uw eerste spot-trade tot geautomatiseerde strategieën en margeposities, $site_name houdt de ervaring snel, veilig en gemakkelijk te begrijpen.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Aanbod — Begin met Handelen vanaf $$app_price";
$offer_meta_description = "Bekijk wat is inbegrepen in het huidige $site_name-aanbod: een lage minimumstorting van $$app_price, volledige platformtoegang en geen verborgen kosten.";
$offer_h1 = "Ons Huidige Aanbod";
$offer_lead = "Begin met slechts <strong>$$app_price $app_currency</strong> en ontgrendel het volledige $site_name-platform vanaf dag één &mdash; elke tool, elke markt, geen verborgen kosten.";
$offer_li1 = "Minimumstorting van slechts $$app_price $app_currency om uw account te activeren";
$offer_li2 = "Volledige toegang tot spot trading, derivaten, marge en de trading bot";
$offer_li3 = "Meerdere financieringsmethoden, waaronder kaarten en bankoverschrijving";
$offer_li4 = "Geen registratiekosten, geen abonnementskosten, geen verborgen kosten";
$offer_li5 = "24/7 klantenservice terwijl u begint";
$offer_note = "Stortingsbedragen en beschikbare betaalmethoden kunnen per regio verschillen. Bekijk onze <a class=\"link\" href=\"risk-warning.php\">Risicowaarschuwing</a> voordat u een account financiert.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Neem Contact op met $site_name — Neem Contact op met Ons Team";
$contacts_meta_description = "Heeft u een vraag over uw $site_name-account of het platform? Bereik ons ondersteuningsteam via e-mail of stuur ons een bericht, dan nemen we contact met u op.";
$contacts_h1 = "Contact";
$contacts_lead = "Vragen over uw account, een storting, of hoe het platform werkt? Ons team staat klaar om te helpen.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Ondersteuningsuren";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typische Reactietijd";
$contacts_response_value = "Binnen 24 uur";
$contacts_form_title = "Stuur Ons een Bericht";
$contacts_form_desc = "Laat hieronder uw gegevens achter en een lid van ons team neemt rechtstreeks contact met u op.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name FAQ — Veelgestelde Vragen";
$faq_meta_description = "Antwoorden op de meest voorkomende vragen over het aanmaken van een $site_name-account, het doen van een storting, platformveiligheid en kosten.";
$faq_page_lead = "Alles wat u moet weten voordat u begint met handelen. Vindt u uw antwoord niet? <a class=\"link\" href=\"contacts.php\">Neem contact op met ons team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Privacybeleid";
$privacy_meta_description = "Lees hoe $site_name uw persoonlijke gegevens verzamelt, gebruikt en beschermt op de hele website en het platform.";
$privacy_sections = [
    [
        "title" => "1. Inleiding",
        "body" => "Dit Privacybeleid legt uit hoe $site_name (\"wij\") de persoonlijke gegevens van bezoekers en gebruikers van $site_domain (de \"Website\") verzamelt, gebruikt en beschermt. Door de Website te gebruiken, gaat u akkoord met de hieronder beschreven praktijken.",
    ],
    [
        "title" => "2. Informatie die Wij Verzamelen",
        "body" => "Wij kunnen informatie verzamelen die u rechtstreeks verstrekt, zoals uw naam, e-mailadres en telefoonnummer bij registratie of het indienen van een formulier, evenals automatisch verzamelde informatie, waaronder uw IP-adres, apparaat- en browsertype, en pagina's bekeken op de Website.",
    ],
    [
        "title" => "3. Hoe Wij Uw Informatie Gebruiken",
        "body" => "Wij gebruiken verzamelde informatie om uw account aan te maken en te beheren, te reageren op vragen, klantenondersteuning te bieden, de Website en onze diensten te verbeteren, en, indien toegestaan, updates te sturen over producten en aanbiedingen. U kunt zich op elk moment afmelden voor marketingcommunicatie.",
    ],
    [
        "title" => "4. Cookies &amp; Trackingtechnologieën",
        "body" => "De Website gebruikt cookies en vergelijkbare technologieën om uw voorkeuren te onthouden, u aangemeld te houden en te begrijpen hoe bezoekers onze pagina's gebruiken. U kunt cookies uitschakelen via uw browserinstellingen, hoewel sommige functies hierdoor mogelijk niet goed werken.",
    ],
    [
        "title" => "5. Delen van Informatie",
        "body" => "Wij verkopen uw persoonlijke gegevens niet. Wij kunnen informatie delen met vertrouwde dienstverleners die ons helpen de Website te exploiteren (zoals hosting- of analyseproviders), of wanneer dit wettelijk verplicht is of om onze wettelijke rechten te beschermen.",
    ],
    [
        "title" => "6. Gegevensbeveiliging",
        "body" => "Wij passen redelijke technische en organisatorische maatregelen toe om uw informatie te beschermen tegen ongeautoriseerde toegang, wijziging of verlies. Geen enkele overdrachts- of opslagmethode is volledig veilig, en wij kunnen absolute veiligheid niet garanderen.",
    ],
    [
        "title" => "7. Uw Rechten &amp; Keuzes",
        "body" => "Afhankelijk van uw locatie kunt u het recht hebben om toegang te krijgen tot, te corrigeren of verwijdering te vragen van uw persoonlijke gegevens, en om bezwaar te maken tegen bepaald gebruik ervan. Om deze rechten uit te oefenen, kunt u contact met ons opnemen via onze <a class=\"link\" href=\"contacts.php\">contactpagina</a>.",
    ],
    [
        "title" => "8. Privacy van Kinderen",
        "body" => "De Website is niet gericht op personen jonger dan 18 jaar, en wij verzamelen niet bewust persoonlijke gegevens van minderjarigen. Als u denkt dat een minderjarige ons persoonlijke gegevens heeft verstrekt, neem dan contact met ons op zodat wij deze kunnen verwijderen.",
    ],
    [
        "title" => "9. Wijzigingen in dit Beleid",
        "body" => "Wij kunnen dit Privacybeleid van tijd tot tijd bijwerken. Eventuele wijzigingen worden op deze pagina geplaatst met een herziene ingangsdatum. Wij raden u aan deze pagina regelmatig te controleren.",
    ],
    [
        "title" => "10. Neem Contact met Ons op",
        "body" => "Als u vragen heeft over dit Privacybeleid of hoe uw informatie wordt behandeld, neem dan contact met ons op via onze <a class=\"link\" href=\"contacts.php\">contactpagina</a> of e-mail ons op info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Algemene Voorwaarden";
$conditions_meta_description = "Bekijk de Algemene Voorwaarden die de toegang tot en het gebruik van de $site_name-website en het handelsplatform regelen.";
$conditions_sections = [
    [
        "title" => "1. Aanvaarding van Voorwaarden",
        "body" => "Door toegang te krijgen tot of gebruik te maken van $site_domain (de \"Website\"), gaat u ermee akkoord gebonden te zijn aan deze Algemene Voorwaarden. Als u het niet eens bent met enig deel van deze voorwaarden, gebruik de Website dan niet.",
    ],
    [
        "title" => "2. Geschiktheid",
        "body" => "U moet ten minste 18 jaar oud zijn en wettelijk bevoegd zijn om handelsgerelateerde diensten te gebruiken in uw rechtsgebied om de Website te gebruiken. Door de Website te gebruiken, bevestigt u dat u aan deze vereisten voldoet.",
    ],
    [
        "title" => "3. Beschrijving van de Dienst",
        "body" => "$site_name biedt een online platform met educatieve content, marktinformatie en handelstools. Niets op de Website vormt financieel, beleggings-, belasting- of juridisch advies, en alle verstrekte informatie is alleen voor algemene informatiedoeleinden.",
    ],
    [
        "title" => "4. Verantwoordelijkheden van de Gebruiker",
        "body" => "U bent verantwoordelijk voor het verstrekken van nauwkeurige informatie bij registratie, voor het handhaven van de vertrouwelijkheid van uw accountgegevens, en voor alle activiteiten die plaatsvinden onder uw account.",
    ],
    [
        "title" => "5. Intellectueel Eigendom",
        "body" => "Alle content op de Website, inclusief tekst, afbeeldingen, logo's en software, is eigendom van $site_name of haar licentiegevers en is beschermd door toepasselijke wetten inzake intellectueel eigendom. U mag deze content niet reproduceren of verspreiden zonder toestemming.",
    ],
    [
        "title" => "6. Geen Financieel Advies",
        "body" => "Content op de Website wordt uitsluitend ter informatie en educatie verstrekt en mag niet worden opgevat als financieel advies. U bent zelf verantwoordelijk voor uw eigen handelsbeslissingen en dient indien nodig een onafhankelijke financieel adviseur te raadplegen. Zie onze <a class=\"link\" href=\"risk-warning.php\">Risicowaarschuwing</a> voor meer informatie.",
    ],
    [
        "title" => "7. Beperking van Aansprakelijkheid",
        "body" => "Voor zover wettelijk toegestaan, is $site_name niet aansprakelijk voor directe, indirecte, incidentele of gevolgschade voortvloeiend uit uw gebruik van, of onvermogen om te gebruiken, de Website of gekoppelde diensten van derden.",
    ],
    [
        "title" => "8. Beëindiging",
        "body" => "Wij behouden ons het recht voor om uw toegang tot de Website naar eigen goeddunken op te schorten of te beëindigen, zonder kennisgeving, voor gedrag waarvan wij van mening zijn dat het deze Algemene Voorwaarden schendt of anderszins schadelijk is voor andere gebruikers of de Website.",
    ],
    [
        "title" => "9. Wijzigingen in deze Voorwaarden",
        "body" => "Wij kunnen deze Algemene Voorwaarden op elk moment herzien. Voortgezet gebruik van de Website nadat wijzigingen zijn geplaatst, vormt aanvaarding van de bijgewerkte voorwaarden.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Vragen over deze Algemene Voorwaarden kunnen worden gericht aan ons team via de <a class=\"link\" href=\"contacts.php\">contactpagina</a> of per e-mail naar info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registreren | $site_name — Maak Uw Gratis Account Aan";
$sign_meta_description = "Maak uw gratis $site_name-account aan in enkele minuten en begin te handelen met slechts $$app_price $app_currency.";
$sign_h1 = "Maak Uw Gratis Account Aan";
$sign_lead = "Word in enkele minuten lid van $site_name. Vul hieronder uw gegevens in om te beginnen.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Bedankt | $site_name";
$thanks_h1 = "Bedankt!";
$thanks_text = "Uw gegevens zijn ontvangen. Een lid van het $site_name-team neemt binnenkort contact met u op om u op weg te helpen.";
$thanks_btn = "Terug naar Home";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Bekijk elke pagina van de $site_name-website, inclusief het handelsplatform, aanbod, ondersteuning en juridische pagina's.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Elke pagina van $site_name op één plek.";

