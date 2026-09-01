<?php
require __DIR__ . '/../lang.php';
$site_lang = 'nl-NL';
$form_language = 'nl'; // matches this page's own language, not the offer's global default

// ============================================================
// NL TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Officiële Website | Handelsplatform";
$home_meta_description = "$site_name biedt een gebruiksvriendelijk handelsplatform met geavanceerde markttools, realtime inzichten en praktische functies die online handelen toegankelijker en beter geïnformeerd maken.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Over ons";
$nav_contacts = "Contact";
$nav_login = "Inloggen";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Net lid geworden";
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
$form_title = "Aan de slag";
$form_fname_placeholder = "Volledige naam";
$form_lname_placeholder = "Achternaam";
$form_email_placeholder = "E-mailadres";
$form_btn_submit = "Account aanmaken";
$form_disclaimer_text = "* Door op de knop te klikken, gaat u akkoord met onze <a class=\"link\" href=\"privacy.php\">Privacyverklaring</a> en <a class=\"link\" href=\"conditions.php\">Gebruiksvoorwaarden</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BEVEILIGD";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI ontworpen om de markt duidelijker te lezen";
$s1_subtitle = "Technologie-gestuurde investeringsstrategie";
$s1_quote = "$site_name is gebouwd om het werken met markten eenvoudiger te maken, of u nu ervaring heeft of niet. Het platform past kunstmatige intelligentie toe om complexe gegevens om te zetten in duidelijke, uitvoerbare beslissingen, waardoor u met meer vertrouwen in elk scenario kunt handelen.";
$s1_p1 = "Het systeem bekijkt enorme hoeveelheden informatie in realtime: het detecteert veranderingen, herkent patronen en reageert snel op marktsignalen. Dit geeft u een scherp beeld van de huidige context, zodat u kansen kunt spotten zonder door ingewikkelde analyses te hoeven graven.";
$s1_p2 = "24/7-monitoring, een gebruiksvriendelijke interface en een hoog beschermingsniveau maken de ervaring comfortabel en betrouwbaar. Alles is ontworpen zodat u zich kunt concentreren op resultaten, niet op de technische kant.";
$s1_p3 = "De copy trading-functie geeft u ook toegang tot de strategieën van meer ervaren handelaren. U kunt hun bewegingen volgen en bewezen benaderingen toepassen op uw eigen handel, waarbij professioneel oordeel wordt gecombineerd met automatisering.";
$s1_cta = "Account aanmaken";
$s1_img_alt = "$site_name digitale financiën";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Precieze marktanalyse, zonder extra ruis";
$s2_intro = "$site_name gebruikt kunstmatige intelligentie om de markt continu te monitoren en veranderingen snel te detecteren. Het systeem verwerkt grote hoeveelheden gegevens en toont alleen de relevante signalen, zonder u te overweldigen met onnodige informatie.";
$s2_item1_title = "Marktreactie zonder wachten";
$s2_item1_text = "Het platform identificeert bewegingen in hun vroege stadia: momentum, omkeringen en trendveranderingen. U ziet direct wat er gebeurt en kunt op het juiste moment handelen.";
$s2_item2_title = "Een duidelijke lezing in plaats van giswerk";
$s2_item2_text = "Geen ingewikkelde grafieken of giswerk. $site_name benadrukt de essentie en biedt een helder overzicht van de situatie, zodat u kunt beslissen met gegevens, niet met intuïtie.";
$s2_item3_title = "Controle en bescherming";
$s2_item3_text = "Uw gegevens zijn beveiligd, toegang wordt gecontroleerd en transacties verlopen via veilige kanalen. Zo kunt u zich concentreren op de markt, niet op technisch risico.";
$s2_img_alt = "$site_name crypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Duidelijke intelligentie voor handelaren";
$s3_card1_title = "$site_name respecteert de privacy en controle van de gebruiker";
$s3_card1_text = "$site_name behandelt informatie met volledige transparantie en integriteit. Het maakt geen misbruik van uw persoonlijke gegevens. Er worden geen transacties of orders geregistreerd op dit platform.";
$s3_card2_title = "Een heldere analyseomgeving voor betere beslissingen";
$s3_card2_text = "$site_name functioneert als een technologische ruimte waar AI het menselijk oordeel versterkt in plaats van te vervangen. Deze tools maken het makkelijker om marktverschuivingen te begrijpen, strategieën te vergelijken en het gedrag van activa te bestuderen.";
$s3_card3_title = "AI-tools die uw marktinzicht verscherpen";
$s3_card3_text = "De analyse stopt nooit. $site_name houdt de crypto-omgeving in de gaten en stuurt realtime meldingen zodra er een relevante beweging verschijnt.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Scherpe analyse, zonder emotie of fout";
$s4_quote = "$site_name zet complexe marktgegevens om in georganiseerde, gemakkelijk leesbare informatie, elimineert onnodige ruis en helpt u zich te concentreren op de signalen die er echt toe doen. Hierdoor begrijpt u een situatie eerder en beslist u zonder dat emotie de overhand krijgt.";
$s4_p1 = "Het systeem werkt zijn conclusies continu bij met nieuwe gegevens. In plaats van achterlopende indicatoren gebruikt het adaptieve modellen die in realtime reageren op marktveranderingen. Dat betekent dat u altijd werkt met een actueel beeld en sneller kunt handelen wanneer het er echt toe doet.";
$s4_img_alt = "$site_name kunstmatige intelligentie";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Gebruik $site_name AI voor nauwkeurige, tijdige beslissingen";
$s5_quote = "$site_name analyseert de markt in realtime en toont u onmiddellijk waar de beweging en de kansen liggen. Het systeem verwerkt de gegevens voor u en levert kant-en-klare signalen: wanneer instappen, wanneer uitstappen en waar op te letten.";
$s5_p1 = "U hoeft niet de hele dag naar grafieken te kijken. Het platform detecteert zelf veranderingen en reageert snel op de markt, zodat u geen belangrijke momenten mist.";
$s5_p2 = "De algoritmen werken 24/7 en identificeren nieuwe kansen zodra ze verschijnen. U krijgt actuele informatie zonder vertragingen of informatie-overload.";
$s5_p3 = "Tegelijkertijd blijft de beveiliging op een hoog niveau: gegevensbescherming, veilige toegang en handelscontrole. $site_name is geschikt voor zowel beginners als actieve handelaren — de beslissingen blijven van u, maar ondersteund door een solide analytische basis.";
$s5_img_alt = "$site_name financiële automatisering";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Consistent handelen begint met een georganiseerd systeem";
$s6_p1 = "$site_name helpt structuur aan te brengen in uw werk met de markt. Het platform creëert een duidelijk kader: u bepaalt uw doelen en uw risiconiveau, en het systeem past zijn analyse aan uw stijl aan — zonder chaos en zonder overbelasting.";
$s6_p2 = "24/7-analyse zet de gegevensstroom om in eenvoudige, begrijpelijke signalen. U ziet alleen wat ertoe doet: waar beweging is, waar het de moeite waard is om in te stappen, en wanneer het beter is te wachten. Na verloop van tijd worden de algoritmen scherper en passen ze zich aan de markt aan.";
$s6_item1_title = "Kies uw tempo: snel handelen of een langetermijnbenadering";
$s6_item1_text = "$site_name ondersteunt verschillende strategieën. Voor actief handelen markeert het systeem instappunten en prijsbewegingen. Voor een langetermijnbenadering helpt het u posities aan te houden met trend en risico in gedachten.";
$s6_item2_title = "Instappunten zonder giswerk";
$s6_item2_text = "Het platform toont waar de markt het meest actief is. Dat helpt u met meer vertrouwen in te stappen en op tijd uit te stappen, zonder te improviseren.";
$s6_item3_title = "Risicobeheer vanaf het begin";
$s6_item3_text = "U kunt mogelijke scenario's van tevoren zien: waar het risico lager is en het potentieel hoger. Zo kunt u transacties plannen voordat de beweging zelfs maar begint.";
$s6_item4_title = "Kant-en-klare analyse";
$s6_item4_text = "$site_name overweldigt u niet met ingewikkelde terminologie. U krijgt duidelijke, direct bruikbare informatie, ontworpen om u te helpen sneller en met meer vertrouwen te beslissen.";
$s6_cta = "Nu beginnen";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Eenvoudige tools voor precieze beslissingen met $site_name";
$s7_quote = "$site_name geeft u alles wat u nodig heeft om te handelen op de markt — zonder technisch jargon of informatie-overload. Het platform analyseert zelf prijsbewegingen, trends en mogelijke instappunten, en toont alleen wat er echt toe doet.";
$s7_point1 = "Het systeem helpt te detecteren wanneer de markt kan omslaan, waar sterke bewegingen verschijnen, en welke momenten het beste zijn om in of uit te stappen. Elk signaal komt voorbewerkt — u hoeft geen complexe indicatoren onder de knie te krijgen.";
$s7_point2 = "Het omvat ook copy trading: u kunt de beslissingen van ervaren handelaren volgen en repliceren zonder tijd te besteden aan uw eigen analyse.";
$s7_point3 = "De interface blijft zo eenvoudig mogelijk — elke tool wordt in één oogopslag begrepen en is vanaf het eerste moment klaar voor gebruik.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Vind belangrijke timingzones met $site_name AI";
$s8_item1 = "Automatische diversificatie spreidt fondsen over verschillende activa, waardoor risico wordt verminderd en kapitaal wordt beschermd, zelfs in instabiele markten.";
$s8_item2 = "Een volledig autonoom systeem — u hoeft niet naar de grafieken te kijken. De algoritmen analyseren de markt en nemen zelfstandig beslissingen.";
$s8_item3 = "Opnames zijn op elk moment beschikbaar — naar bankkaarten, crypto-wallets of elektronische betaalsystemen, zonder vertragingen.";
$s8_item4 = "Dagelijkse rapporten tonen uw resultaten en geven u volledige controle over de situatie in realtime.";
$s8_item5 = "Flexibele instellingen voor risiconiveau laten u een strategie kiezen die bij uw doelen past — van conservatief tot agressiever.";
$s8_item6 = "Een winstpotentieel tot 400% maakt $site_name een instrument voor wie niet alleen zijn kapitaal wil behouden, maar het aanzienlijk wil laten groeien.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Deskundige analyse aangedreven door $site_name";
$s9_quote = "$site_name combineert de kracht van algoritmen met marktervaring, waardoor complexe gegevens worden omgezet in duidelijke, gemakkelijk te begrijpen signalen. Het systeem detecteert snel patronen en potentiële kansen, waardoor u kunt beslissen zonder informatie-overload.";
$s9_p1 = "U ontvangt voorbewerkte analyses die zowel technische indicatoren als marktgedrag meewegen — zodat u sneller, met meer vertrouwen en precisie kunt handelen.";
$s9_img_alt = "$site_name investeringsstrategie";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Wat onze gebruikers zeggen";
$review_1_text = "Het platform is zeer intuïtief, en de tools hebben me geholpen mijn handelsresultaten te verbeteren.";
$review_2_text = "Snelle ondersteuning en echt nuttige leermiddelen — perfect voor mensen die net beginnen.";
$review_3_text = "Aanpasbare grafieken en snelle uitvoering — het is al maanden mijn eerste keuze.";
$review_4_text = "Aanmelden duurde minder dan vijf minuten, en het dashboard maakt het gemakkelijk om precies te zien waar mijn geld is.";
$review_5_text = "Ik vind het fijn dat het platform de redenering achter elk signaal uitlegt in plaats van me alleen maar cijfers voor te schotelen.";
$review_6_text = "Opnames zijn voor mij altijd snel geweest, en het supportteam antwoordt daadwerkelijk binnen enkele minuten.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Veelgestelde vragen over $site_name";
$faq_q1 = "Kan $site_name marktveranderingen in realtime detecteren?";
$faq_a1 = "Ja. Het volgt live gegevens, identificeert momentumverschuivingen in hun vroege stadia en spot patronen voordat ze zich volledig ontwikkelen, wat gebruikers een tijdig voordeel geeft.";
$faq_q2 = "Kan de $site_name-ervaring worden aangepast?";
$faq_a2 = "Ja. Gebruikers kunnen interessegebieden kiezen, het detailniveau aanpassen en openbare strategieën volgen die passen bij hun handelsstijl of leerbehoeften.";
$faq_q3 = "Vervangt $site_name traditionele onderzoeksmethoden?";
$faq_a3 = "Nee. Het verbetert ze door snel door AI gefilterde inzichten te bieden, terwijl de gebruiker volledige controle houdt over zijn eigen onderzoek en beslissingen.";
$faq_cta = "Ontdek nu meer";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Hoogtepunten";
$hl1_emoji = "🤖";
$hl1_title = "Aanmeldkosten";
$hl1_desc = "Geen kosten om te registreren";
$hl2_emoji = "💰";
$hl2_title = "Handelscommissies";
$hl2_desc = "Helemaal geen kosten";
$hl3_emoji = "📋";
$hl3_title = "Gemak van registratie";
$hl3_desc = "Aanmelden is snel en eenvoudig";
$hl4_emoji = "📊";
$hl4_title = "Educatieve focus";
$hl4_desc = "Lessen over crypto, Forex-handel en beleggen";
$hl5_emoji = "🌎";
$hl5_title = "Beschikbare landen";
$hl5_desc = "Niet beschikbaar in de VS, wel beschikbaar in de meeste andere landen";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handel verstandig, groei met vertrouwen";
$footnav_about = "Over ons";
$footnav_product = "Product";
$footnav_offer = "Aanbod";
$footnav_contacts = "Contact";
$footnav_faq = "FAQ";
$footnav_privacy = "Privacybeleid";
$footnav_conditions = "Gebruiksvoorwaarden";
$footnav_risk = "Risicowaarschuwing";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publiceert algemeen educatief materiaal over handelen, beleggen, financiële markten en digitale activa. Artikelen, marktgegevens, grafieken en andere website-inhoud worden uitsluitend ter informatie verstrekt en mogen niet worden beschouwd als financieel, beleggings- of juridisch advies. Hoewel we ernaar streven betrouwbare en actuele informatie te verstrekken, kunnen we de nauwkeurigheid of volledigheid ervan niet garanderen en zijn we niet verantwoordelijk voor verliezen als gevolg van het vertrouwen op de inhoud.<br><br>Handelen brengt risico's met zich mee, en cryptovaluta, Forex, CFD's, aandelen en andere financiële producten kunnen aanzienlijk in waarde schommelen. Overweeg uw eigen financiële omstandigheden en risicotolerantie voordat u handelt, en zoek professioneel advies waar nodig. Zet nooit geld in dat u zich niet kunt veroorloven te verliezen.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Handelsadviseur";
$quiz_text_welcome = "Hallo! Ik ben Sofia, uw persoonlijke handelsadviseur. Heeft u een paar minuten om het beste plan voor u te vinden?";
$quiz_text_q1 = "Heeft u al eerder gehandeld?";
$quiz_text_a1_yes = "Ja, ik heb ervaring";
$quiz_text_a1_no = "Nee, ik ben een beginner";
$quiz_text_q2 = "Geweldig! Wat is uw voornaam zodat ik uw plan kan personaliseren?";
$quiz_text_q3 = "Wat is uw belangrijkste doel met handelen?";
$quiz_text_a3_yes = "Langetermijnwelvaart opbouwen";
$quiz_text_a3_no = "Kortetermijninkomen genereren";
$quiz_text_q4 = "Met hoeveel wilt u beginnen?";
$quiz_text_a4_1 = "Minder dan $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Meer dan $1000";
$quiz_text_q5 = "Perfect. Wilt u dat ik nu een gratis account voor u open?";
$quiz_text_a5_yes = "Ja, laten we het doen";
$quiz_text_a5_no = "Nu niet";
$quiz_text_loader = "Bezig met het vinden van uw beste plan...";
$quiz_text_final_ttl = "Alles is klaar!";
$quiz_text_processing = "Uw gegevens worden verzonden...";
$quiz_text_typing = "is aan het typen...";
$quiz_placeholder_fname = "Voornaam";
$quiz_placeholder_lname = "Achternaam";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Mijn gratis account ontvangen";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Home";
$bc_about = "Over ons";
$bc_product = "Product";
$bc_offer = "Aanbod";
$bc_contacts = "Contact";
$bc_faq = "FAQ";
$bc_privacy = "Privacybeleid";
$bc_conditions = "Gebruiksvoorwaarden";
$bc_risk = "Risicowaarschuwing";
$bc_sign = "Registreren";
$bc_thanks = "Bedankt";
$bc_sitemap = "Sitemap";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Over $site_name";
$about_meta_description = "Ontdek de missie van $site_name: marktanalyse duidelijker en toegankelijker maken met AI-gestuurde tools.";
$about_h1 = "Over $site_name";
$about_lead = "$site_name is gebouwd rond één idee: handelsbeslissingen moeten gebaseerd zijn op duidelijke informatie, niet op giswerk.";
$about_p1 = "Wij combineren kunstmatige intelligentie met echte marktervaring om complexe, ruizige gegevens om te zetten in signalen die gemakkelijk te begrijpen en waarop te handelen zijn. Ons platform bewaakt de markten dag en nacht, zodat u dat niet hoeft te doen.";
$about_p2 = "Of u nu uw eerste transactie doet of al jaren actief bent op de markten, $site_name is ontworpen om u te ontmoeten waar u zich bevindt — met tools die variëren van eenvoudige begeleiding tot geavanceerde realtime analyses.";
$about_p3 = "Wij geloven dat technologie uw oordeel moet ondersteunen, niet vervangen. Elk signaal dat $site_name genereert, is bedoeld om een beslissing te informeren die nog steeds volledig van u is.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Product — AI Marktanalyse Tools";
$product_meta_description = "Ontdek het $site_name-product: realtime AI-marktanalyse, copy trading, risicobeheersing en geautomatiseerde diversificatie.";
$product_h1 = "Het $site_name-product";
$product_lead = "Eén platform dat de markt voor u leest: realtime analyse, copy trading en flexibele risicotools, ontworpen om handelsbeslissingen duidelijker te maken.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Aanbod — Begin gratis";
$offer_meta_description = "Bekijk wat is inbegrepen in het huidige $site_name-aanbod: gratis registratie, geen handelscommissies en volledige platformtoegang.";
$offer_h1 = "Ons huidige aanbod";
$offer_lead = "Maak uw account gratis aan en ontgrendel het volledige $site_name-platform &mdash; geen registratiekosten, geen handelscommissies.";
$offer_li1 = "Geen kosten voor het registreren van uw account";
$offer_li2 = "Geen commissies op transacties";
$offer_li3 = "Volledige toegang tot realtime AI-marktanalyse en copy trading";
$offer_li4 = "Opnames op elk moment beschikbaar, zonder verborgen kosten";
$offer_li5 = "Educatieve bronnen over crypto, Forex en beleggen inbegrepen";
$offer_note = "Beschikbaarheid kan per regio verschillen. Bekijk onze <a class=\"link\" href=\"risk-warning.php\">Risicowaarschuwing</a> voordat u een account financiert.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Neem contact op met $site_name — Neem contact op met ons team";
$contacts_meta_description = "Heeft u een vraag over uw $site_name-account of het platform? Bereik ons supportteam via e-mail of stuur ons een bericht.";
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
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Privacybeleid";
$privacy_meta_description = "Lees hoe $site_name uw persoonlijke gegevens verzamelt, gebruikt en beschermt op de hele website en het platform.";
$privacy_sections = [
    [
        "title" => "1. Inleiding",
        "body" => "Dit Privacybeleid legt uit hoe $site_name (\"wij\") de persoonlijke gegevens verzamelt, gebruikt en beschermt van bezoekers en gebruikers van $site_domain (de \"Website\"). Door de Website te gebruiken, gaat u akkoord met de hieronder beschreven praktijken.",
    ],
    [
        "title" => "2. Informatie die wij verzamelen",
        "body" => "Wij kunnen informatie verzamelen die u rechtstreeks verstrekt, zoals uw naam, e-mailadres en telefoonnummer bij registratie of het indienen van een formulier, evenals automatisch verzamelde informatie, waaronder uw IP-adres, apparaat- en browsertype, en pagina's bekeken op de Website.",
    ],
    [
        "title" => "3. Hoe wij uw informatie gebruiken",
        "body" => "Wij gebruiken verzamelde informatie om uw account aan te maken en te beheren, te reageren op vragen, klantenondersteuning te bieden, de Website en onze diensten te verbeteren, en, indien toegestaan, updates te sturen over producten en aanbiedingen. U kunt zich op elk moment afmelden voor marketingcommunicatie.",
    ],
    [
        "title" => "4. Cookies &amp; Trackingtechnologieën",
        "body" => "De Website gebruikt cookies en vergelijkbare technologieën om uw voorkeuren te onthouden, u aangemeld te houden en te begrijpen hoe bezoekers onze pagina's gebruiken. U kunt cookies uitschakelen via uw browserinstellingen, hoewel sommige functies hierdoor mogelijk niet goed werken.",
    ],
    [
        "title" => "5. Delen van informatie",
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
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Gebruiksvoorwaarden";
$conditions_meta_description = "Bekijk de Gebruiksvoorwaarden die de toegang tot en het gebruik van de $site_name-website en het handelsplatform regelen.";
$conditions_sections = [
    [
        "title" => "1. Aanvaarding van Voorwaarden",
        "body" => "Door toegang te krijgen tot of gebruik te maken van $site_domain (de \"Website\"), gaat u ermee akkoord gebonden te zijn aan deze Gebruiksvoorwaarden. Als u het niet eens bent met enig deel van deze voorwaarden, gebruik de Website dan niet.",
    ],
    [
        "title" => "2. Geschiktheid",
        "body" => "U moet ten minste 18 jaar oud zijn en wettelijk bevoegd zijn om handelsgerelateerde diensten te gebruiken in uw rechtsgebied om de Website te gebruiken. Door de Website te gebruiken, bevestigt u dat u aan deze vereisten voldoet.",
    ],
    [
        "title" => "3. Beschrijving van de Dienst",
        "body" => "$site_name biedt een online platform met educatieve inhoud, marktinformatie en AI-ondersteunde analysetools. Niets op de Website vormt financieel, beleggings-, belasting- of juridisch advies, en alle verstrekte informatie is alleen voor algemene informatiedoeleinden.",
    ],
    [
        "title" => "4. Verantwoordelijkheden van de Gebruiker",
        "body" => "U bent verantwoordelijk voor het verstrekken van nauwkeurige informatie bij registratie, voor het handhaven van de vertrouwelijkheid van uw accountgegevens, en voor alle activiteiten die plaatsvinden onder uw account.",
    ],
    [
        "title" => "5. Intellectueel Eigendom",
        "body" => "Alle inhoud op de Website, inclusief tekst, afbeeldingen, logo's en software, is eigendom van $site_name of haar licentiegevers en is beschermd door toepasselijke wetten inzake intellectueel eigendom. U mag deze inhoud niet reproduceren of verspreiden zonder toestemming.",
    ],
    [
        "title" => "6. Geen Financieel Advies",
        "body" => "Inhoud op de Website wordt uitsluitend ter informatie en educatie verstrekt en mag niet worden opgevat als financieel advies. U bent zelf verantwoordelijk voor uw eigen handelsbeslissingen en dient indien nodig een onafhankelijke financieel adviseur te raadplegen. Zie onze <a class=\"link\" href=\"risk-warning.php\">Risicowaarschuwing</a> voor meer informatie.",
    ],
    [
        "title" => "7. Beperking van Aansprakelijkheid",
        "body" => "Voor zover wettelijk toegestaan, is $site_name niet aansprakelijk voor directe, indirecte, incidentele of gevolgschade voortvloeiend uit uw gebruik van, of onvermogen om te gebruiken, de Website of gekoppelde diensten van derden.",
    ],
    [
        "title" => "8. Beëindiging",
        "body" => "Wij behouden ons het recht voor om uw toegang tot de Website naar eigen goeddunken op te schorten of te beëindigen, zonder kennisgeving, voor gedrag waarvan wij van mening zijn dat het deze Gebruiksvoorwaarden schendt of anderszins schadelijk is voor andere gebruikers of de Website.",
    ],
    [
        "title" => "9. Wijzigingen in deze Voorwaarden",
        "body" => "Wij kunnen deze Gebruiksvoorwaarden op elk moment herzien. Voortgezet gebruik van de Website nadat wijzigingen zijn geplaatst, vormt aanvaarding van de bijgewerkte voorwaarden.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Vragen over deze Gebruiksvoorwaarden kunnen worden gericht aan ons team via de <a class=\"link\" href=\"contacts.php\">contactpagina</a> of per e-mail naar info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risicowaarschuwing — Openbaarmaking van Handelsrisico's";
$risk_meta_description = "Lees de $site_name risicowaarschuwing voordat u handelt: risico's van de cryptovalutamarkt, hefboomwerking, liquiditeit, cyberbeveiliging en regelgevende overwegingen.";
$risk_title = "Risicowaarschuwing";
$risk_intro = "Het begrijpen van risico's is de eerste stap naar zelfverzekerd handelen.";
$risk_ai_title = "Hoe ons AI-systeem helpt bij risicobeheer:";
$risk_ai_1_title = "Algoritmische Efficiëntie &amp; Emotieloos Handelen:";
$risk_ai_1_text = "Geavanceerde algoritmen analyseren marktsignalen om transacties objectief op optimale momenten uit te voeren.";
$risk_ai_2_title = "Datagestuurde Strategieën:";
$risk_ai_2_text = "Strategieën zijn gebaseerd op geverifieerde marktpatronen en realtime analyse in plaats van giswerk.";
$risk_ai_3_title = "Flexibele Instellingen &amp; Volledige Controle:";
$risk_ai_3_text = "Pas uw risicoparameters op elk moment aan. Volg alle saldi en transacties transparant op uw dashboard zonder verborgen kosten en zonder beperkingen op opnames.";
$risk_disclaimer = "<strong>Disclaimer:</strong> Handelen brengt altijd risico met zich mee. Geautomatiseerde systemen (inclusief AI) garanderen geen winst, kunnen falen door softwarefouten of onverwachte marktgebeurtenissen, en vereisen toezicht van de gebruiker. Prestaties uit het verleden bieden geen garantie voor de toekomst. Dit platform dient uitsluitend informatieve en marketingdoeleinden en biedt geen financieel advies.";
$risk_s1_title = "1. Algemene &amp; Cryptovalutamarktrisico's";
$risk_s1_text = "Cryptovaluta zijn zeer volatiele, speculatieve activa die 24/7 opereren met minimaal regelgevend toezicht in de meeste rechtsgebieden.";
$risk_s1_li1 = "Waarden kunnen dramatisch schommelen binnen korte periodes, wat mogelijk kan leiden tot een totaal verlies van geïnvesteerd kapitaal.";
$risk_s1_li2 = "Marktwaarden kunnen sterk worden beïnvloed door regelgevende wijzigingen, technische ontwikkelingen, beveiligingsinbreuken of bredere macro-economische gebeurtenissen.";
$risk_s1_li3 = "Sommige activa kunnen hun volledige waarde volledig verliezen. Investeer alleen fondsen die u zich kunt veroorloven te verliezen.";
$risk_s2_title = "2. Uitvoerings-, Liquiditeits- &amp; Hefboomrisico's";
$risk_s2_li1_title = "Marktvolatiliteit &amp; Liquiditeit:";
$risk_s2_li1_text = "Extreme prijsbewegingen (10-20%+ dagelijks) of lage liquiditeit (vooral bij kleinere munten) kunnen leiden tot vertragingen, platformstoringen en ernstige uitvoeringsslippage. Stop-loss-orders kunnen verlieslimieten onder extreme omstandigheden niet garanderen.";
$risk_s2_li2_title = "Hefboom- &amp; Margerisico's:";
$risk_s2_li2_text = "Producten met hefboomwerking versterken zowel winsten als verliezen, wat betekent dat u meer kunt verliezen dan uw oorspronkelijke storting. Ongeveer 70-80% van de rekeningen van particuliere beleggers verliest geld bij het handelen met producten met hefboomwerking.";
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
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registreren | $site_name — Maak Uw Gratis Account Aan";
$sign_meta_description = "Maak uw gratis $site_name-account aan in enkele minuten en begin slimmer te handelen met AI-gestuurde marktanalyse.";
$sign_h1 = "Maak Uw Gratis Account Aan";
$sign_lead = "Word in enkele minuten lid van $site_name. Vul hieronder uw gegevens in om te beginnen.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Bedankt | $site_name";
$thanks_h1 = "Bedankt!";
$thanks_text = "Uw gegevens zijn ontvangen. Een lid van het $site_name-team neemt binnenkort contact met u op om u op weg te helpen.";
$thanks_btn = "Terug naar Home";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Bekijk elke pagina van de $site_name-website, inclusief het handelsplatform, aanbod, ondersteuning en juridische pagina's.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Elke pagina van $site_name op één plek.";

