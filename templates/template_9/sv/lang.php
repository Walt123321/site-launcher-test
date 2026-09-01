<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sv-SE';
$form_language = 'sv'; // matches this page's own language, not the offer's global default

// ============================================================
// SV TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Officiell Webbplats | Handelsplattform";
$home_meta_description = "$site_name erbjuder en användarvänlig handelsplattform med avancerade marknadsverktyg, insikter i realtid och praktiska funktioner utformade för att göra online-handel mer tillgänglig och välinformerad.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Plattform";
$hero_subtitle = "Stödjer miljontals människor världen över på deras resa med digitala tillgångar";
$hero_badge_title = "Nöjda Medlemmar";
$hero_badge_subtitle = "Älskad av miljontals";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Börja Handla Idag";
$form_desc = "Redo att göra ditt drag? Registrera dig nu och ta det första steget mot ekonomisk frihet. Börja med bara $app_price $app_currency — få tillgång till alla handelsverktyg, marknadsdata i realtid och full plattformsåtkomst från dag ett.";
$form_fname_placeholder = "Förnamn";
$form_lname_placeholder = "Efternamn";
$form_email_placeholder = "E-post";
$form_btn_submit = "Registrera dig";
$form_disclaimer_text = "Genom att ange dina personuppgifter och klicka på knappen godkänner du webbplatsens <a class=\"link\" href=\"privacy.php\">Integritetspolicy</a> och <a class=\"link\" href=\"conditions.php\">Användarvillkor</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SÄKER";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Lär Känna Plattformen";
$stats_title = "En snabb introduktion till smartare handel";
$stat_1_value = "154+";
$stat_1_label = "Täckta Länder";
$stat_2_value = "29 Miljoner";
$stat_2_label = "Globala Investerare";
$stat_3_value = "635+";
$stat_3_label = "Mynt";
$stat_4_value = "3,26 Miljarder $";
$stat_4_label = "24-timmars Handelsvolym";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Varför $site_name?";
$why_title = "Anledningar att Välja Oss";
$why_1_title = "Snabbt &amp; Enkelt";
$why_1_text = "Köp och sälj dina föredragna kryptovalutor på sekunder.";
$why_2_title = "Säkert &amp; Skyddat";
$why_2_text = "Vi använder den senaste tekniken för att hålla dina medel och data säkra.";
$why_3_title = "Öppet för Alla";
$why_3_text = "Handla på vår plattform 24/7, var och när du vill.";
$why_4_title = "Professionella Verktyg";
$why_4_text = "Från enkla till professionella handelsfunktioner, vi har allt.";
$why_5_title = "Trender &amp; Insikter";
$why_5_text = "Få de senaste kryptonyheterna, insikterna och trenderna från experter.";
$why_6_title = "Support 24/7";
$why_6_text = "Vårt vänliga supportteam är här för att hjälpa dig när som helst.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Så Fungerar Det";
$how_title = "Enkla Steg för att Börja Handla";
$how_1_title = "Registrera dig";
$how_1_text = "Skapa ett konto och börja handla inom några minuter.";
$how_1_btn = "Börja Handla";
$how_2_title = "Sätt in Medel";
$how_2_text = "Finansiera ditt konto med en minsta insättning på $app_price $app_currency för att låsa upp full handelsåtkomst. Välj mellan flera betalningsmetoder och börja växa din portfölj idag.";
$how_2_note = "Lägg till medel....";
$how_3_title = "Börja Handla";
$how_3_text = "Utforska marknaden och handla på ditt sätt.";
$how_3_note = "Köp och HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkylator";
$calc_title = "Se hur mycket tid och potential du lämnar outnyttjad";
$calc_volume_label = "Månatlig Handelsvolym";
$calc_trades_label = "Affärer per Vecka";
$calc_time_label = "Tid Du Kan Spara";
$calc_boost_label = "Potentiell Volymökning";
$calc_btn = "Börja Handla";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funktioner";
$features_title = "Styrkan hos $site_name";
$feature_1_title = "Spot-handel";
$feature_1_text = "Maximera din handelspotential med professionella verktyg.";
$feature_2_title = "Köp Krypto";
$feature_2_text = "Köp krypto med kort eller banker.";
$feature_3_title = "Kryptoderivat";
$feature_3_text = "Enkel, avancerad futureshandel.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Låt din förmögenhet växa med lätthet.";
$feature_5_title = "Handelsbot";
$feature_5_text = "Högre vinster, även när du sover.";
$feature_6_title = "Marginalhandel";
$feature_6_text = "Låna, handla och betala tillbaka enkelt.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Vad Våra Användare Säger";
$review_1_text = "Plattformen är väldigt lätt att använda, och jag har sett stadiga framsteg sedan jag blev innehavare. Teamets engagemang och nya idéer gör att jag ser fram emot vad som kommer härnäst!";
$review_1_role = "Handlare";
$review_2_text = "$site_name erbjuder en smidig och intuitiv handelsupplevelse. Jag kunde börja köpa och handla krypto direkt. Gränssnittet är lätt att använda och transaktionshastigheterna är utmärkta!";
$review_2_role = "Ny Handlare";
$review_3_text = "Jag litar på den här plattformen för att hantera mina kryptoinvesteringar. Dess säkerhetsfunktioner ger mig förtroende, och jag har aldrig upplevt några problem med uttag eller insättningar. Det är en av de mest pålitliga börserna jag har använt.";
$review_3_role = "Professionell Handlare";
$review_4_text = "När jag har haft frågor har kundsupportteamet varit snabbt och hjälpsamt. De bryr sig verkligen om sina användare och gör varje handelsupplevelse smidig och enkel.";
$review_4_role = "Erfaren Handlare";
$review_5_text = "Som nybörjare tyckte jag att $site_name var väldigt lätt att använda. Det som verkligen sticker ut är utbudet av avancerade verktyg för mer erfarna handlare. Det är ett solitt val för alla som vill bygga sin portfölj!";
$review_5_role = "Handlare från Communityn";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Vanliga Frågor";
$faq_title = "Vanliga Frågor";
$faq_q1 = "Vad är $site_name?";
$faq_a1 = "$site_name är en kryptobörs där användare enkelt kan handla ett brett utbud av mynt, inklusive Bitcoin, Ethereum och andra populära kryptovalutor.";
$faq_q2 = "Hur Säker är $site_name för Kryptohandel?";
$faq_a2 = "Plattformen erbjuder säkerhet genom avancerad teknik och 1:1 tillgångstäckning via Proof of Reserves.";
$faq_q3 = "Hur Gör Jag en Insättning?";
$faq_a3 = "$site_name erbjuder flera insättningsalternativ, inklusive kryptoinsättning, fiat-insättning, P2P-handel och ett-klicks köp.";
$faq_q4 = "Behöver Jag Erfarenhet för att Använda $site_name?";
$faq_a4 = "Nej, du behöver ingen erfarenhet alls. Plattformens användarvänliga gränssnitt gör den tillgänglig för alla, från nybörjare till avancerade handlare.";
$faq_q5 = "Finns det några dolda avgifter eller kostnader?";
$faq_a5 = "Absolut inte. Det finns inga registreringsavgifter, prenumerationskostnader eller dolda avgifter av något slag. Du ser alltid det exakta transaktionsbeloppet innan du bekräftar. Intäkter kommer från premiumfunktioner och börspartnerskap, inte från att ta pengar från användare.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Börja Handla Idag";
$cta_desc = "Redo att göra ditt drag? Registrera dig nu och ta det första steget mot ekonomiskt oberoende.";
$cta_btn = "Registrera dig";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Huvudfunktioner hos $site_name Handelsplattform";
$table_1_label = "🤖 Plattformsteknik";
$table_1_val = "Avancerad AI-handelsmotor";
$table_2_label = "💳 Finansieringsmetoder";
$table_2_val = "Stora Kreditkort, Banköverföring, PayPal";
$table_3_label = "📱 Plattformsåtkomst";
$table_3_val = "Kompatibilitet mellan Flera Enheter";
$table_4_label = "🚀 Prestandagrad";
$table_4_val = "85% Noggrannhet";
$table_5_label = "📊 Handelsinstrument";
$table_5_val = "Aktier, Forex, Råvaror, Ädelmetaller, CFD:er, Kryptovalutor och mer…";
$table_6_label = "✍️ Kontoinställning";
$table_6_val = "Snabbt och Effektivt";
$table_7_label = "📞 Kundsupport";
$table_7_val = "24/7 Professionell Assistans";

// Reviews summary card
$summary_title = "$site_name Recensioner";
$summary_badge = "Pålitlig";
$summary_desc = "En kraftfull, användarvänlig handelsplattform med solid automatisering och pedagogiska resurser.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handla smart, väx snabbt";
$footer_community_label = "Community";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Erbjudande";
$footnav_contacts = "Kontakta oss";
$footnav_faq = "Vanliga Frågor";
$footnav_privacy = "Integritetspolicy";
$footnav_conditions = "Användarvillkor";
$footnav_risk = "Riskvarning";
$footer_disclaimer = "$site_name delar pedagogiska resurser och marknadsrelaterat material för att hjälpa besökare att bättre förstå handel, investering och digitala finansiella produkter. Information som presenteras på webbplatsen, såsom marknadskommentarer, tillgångspriser, diagram, guider och analytiskt innehåll, tillhandahålls för allmänna informationssyften och utgör inte finansiell, investerings-, skatte- eller juridisk rådgivning. Även om rimliga ansträngningar görs för att upprätthålla korrekt och relevant information, ger $site_name inga garantier avseende innehållets fullständighet, noggrannhet eller aktualitet och kan inte hållas ansvarig för beslut eller förluster som uppstår från dess användning.<br><br>Deltagande på finansiella marknader innebär inneboende risker. Kryptovaluta, Forex, CFD:er, aktier och andra handelsinstrument kan uppleva betydande prisfluktuationer, och förluster kan uppstå. Individuella omständigheter och risktolerans varierar, så användare bör göra sin egen research och överväga att inhämta råd från en kvalificerad finansiell rådgivare innan de binder medel. Handla aldrig med pengar du inte har råd att förlora.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Handelskonsult";
$quiz_text_welcome = "Hej! Jag är Maya, din personliga handelskonsult. Har du ett par minuter för att hitta den bästa planen för dig?";
$quiz_text_q1 = "Har du handlat med kryptovaluta tidigare?";
$quiz_text_a1_yes = "Ja, jag har erfarenhet";
$quiz_text_a1_no = "Nej, jag är nybörjare";
$quiz_text_q2 = "Toppen! Vad är ditt förnamn så att jag kan anpassa din plan?";
$quiz_text_q3 = "Vad är ditt huvudmål med handel?";
$quiz_text_a3_yes = "Bygg långsiktig förmögenhet";
$quiz_text_a3_no = "Generera kortsiktig inkomst";
$quiz_text_q4 = "Hur mycket vill du börja med?";
$quiz_text_a4_1 = "Under $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Över $1000";
$quiz_text_q5 = "Perfekt. Vill du att jag öppnar ett gratis konto åt dig nu?";
$quiz_text_a5_yes = "Ja, låt oss göra det";
$quiz_text_a5_no = "Inte just nu";
$quiz_text_loader = "Hittar din bästa plan...";
$quiz_text_final_ttl = "Allt är klart!";
$quiz_text_processing = "Skickar dina uppgifter...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Förnamn";
$quiz_placeholder_lname = "Efternamn";
$quiz_placeholder_email = "E-post";
$quiz_btn_submit = "Skaffa Mitt Gratis Konto";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Riskvarning — Riskupplysning för Handel";
$risk_meta_description = "Läs $site_names riskvarning innan du handlar: risker på kryptovalutamarknaden, hävstång, likviditet, cybersäkerhet och regulatoriska överväganden.";
$risk_title = "Riskvarning";
$risk_intro = "Att förstå risker är det första steget mot säker handel.";
$risk_ai_title = "Så Här Hjälper Vårt AI-system till att Hantera Risk:";
$risk_ai_1_title = "Algoritmisk Effektivitet &amp; Känslolös Handel:";
$risk_ai_1_text = "Avancerade algoritmer analyserar marknadssignaler för att objektivt utföra affärer vid optimala tidpunkter.";
$risk_ai_2_title = "Datadrivna Strategier:";
$risk_ai_2_text = "Strategier baseras på verifierade marknadsmönster och realtidsanalys snarare än gissningar.";
$risk_ai_3_title = "Flexibla Inställningar &amp; Full Kontroll:";
$risk_ai_3_text = "Justera dina riskparametrar när som helst. Spåra alla saldon och affärer transparent på din instrumentpanel, utan dolda avgifter och utan begränsningar för uttag.";
$risk_disclaimer = "<strong>Ansvarsfriskrivning:</strong> Handel innebär alltid risk. Automatiserade system (inklusive AI) garanterar inte vinst, kan misslyckas på grund av programvarufel eller oväntade marknadshändelser, och kräver användarövervakning. Tidigare resultat är inte en indikator på framtida resultat. Denna plattform tjänar enbart informations- och marknadsföringssyften och tillhandahåller inte finansiell rådgivning.";
$risk_s1_title = "1. Allmänna &amp; Kryptovalutamarknadsrisker";
$risk_s1_text = "Kryptovalutor är mycket volatila, spekulativa tillgångar som fungerar 24/7 med minimal reglerande tillsyn i de flesta jurisdiktioner.";
$risk_s1_li1 = "Värden kan fluktuera dramatiskt under korta perioder, vilket potentiellt kan leda till en total förlust av investerat kapital.";
$risk_s1_li2 = "Marknadsvärden kan påverkas kraftigt av regulatoriska uppdateringar, teknisk utveckling, säkerhetsintrång eller bredare makroekonomiska händelser.";
$risk_s1_li3 = "Vissa tillgångar kan förlora allt sitt värde helt och hållet. Investera endast medel som du har råd att förlora.";
$risk_s2_title = "2. Utförande-, Likviditets- &amp; Hävstångsrisker";
$risk_s2_li1_title = "Marknadsvolatilitet &amp; Likviditet:";
$risk_s2_li1_text = "Extrema prisrörelser (10-20 %+ dagligen) eller låg likviditet (särskilt i mindre mynt) kan leda till förseningar, plattformsavbrott och allvarlig utförandeglidning. Stop-loss-order kan inte garantera förlustgränser under extrema förhållanden.";
$risk_s2_li2_title = "Hävstångs- &amp; Marginalrisker:";
$risk_s2_li2_text = "Hävstångsprodukter förstärker både vinster och förluster, vilket innebär att du kan förlora mer än din ursprungliga insättning. <em>Ungefär 70-80 % av privatinvesterares konton förlorar pengar när de handlar med hävstångsprodukter.</em>";
$risk_s3_title = "3. Tekniska, Cybersäkerhets- &amp; Tredjepartsrisker";
$risk_s3_li1_title = "Tekniska Faktorer:";
$risk_s3_li1_text = "Online-handel innebär i sig risker för internetavbrott, hårdvaru-/mjukvarufel och otillgänglighet av tjänsten.";
$risk_s3_li2_title = "Cybersäkerhet:";
$risk_s3_li2_text = "Kryptovalutakonton är vanliga mål för nätfiske, skadlig programvara och hackning. Transaktioner är oåterkalleliga; att komprometteras dina inloggningsuppgifter kan resultera i permanent förlust.";
$risk_s3_li3_title = "Tredjepartsplattformar:";
$risk_s3_li3_text = "Denna webbplats kan koppla samman användare med tredjepartsplattformar. Vi kontrollerar, godkänner eller garanterar inte deras säkerhet, verksamhet eller solvens. Genomför alltid din egen grundliga due diligence innan du sätter in medel på externa plattformar.";
$risk_s4_title = "4. Regulatoriska, Skatte- &amp; Slutbestämmelser";
$risk_s4_li1_title = "Juridisk Efterlevnad &amp; Skatter:";
$risk_s4_li1_text = "Regulatoriska ramverk varierar mycket och förändras snabbt. Användare är ensamt ansvariga för att säkerställa att deras handelsaktivitet följer lokala lagar och för att uppfylla sina egna skatteförpliktelser.";
$risk_s4_li2_title = "Inga Vinstgarantier:";
$risk_s4_li2_text = "Det finns ingen \"säker\" eller riskfri kryptohandel. Eventuella avkastningssiffror eller prestandaexempel som ges är rent hypotetiska.";
$risk_s4_li3_title = "Lämplighet:";
$risk_s4_li3_text = "Om du inte fullt ut förstår riskerna, förlitar dig på nödvändiga medel eller handlar med lånade pengar, är kryptohandel inte lämplig för dig. Rådgör med en oberoende, licensierad finansiell rådgivare om du är osäker.";
$risk_contact = "<strong>Kontakt:</strong> För eventuella frågor angående detta uttalande eller för att skicka en förfrågan, vänligen kontakta vårt officiella kundsupportteam via kontaktformuläret på vår webbplats.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Hem";
$bc_product = "Produkt";
$bc_offer = "Erbjudande";
$bc_contacts = "Kontakta oss";
$bc_faq = "Vanliga Frågor";
$bc_privacy = "Integritetspolicy";
$bc_conditions = "Användarvillkor";
$bc_risk = "Riskvarning";
$bc_sign = "Registrera dig";
$bc_sitemap = "Webbplatskarta";
$bc_thanks = "Tack";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Produkt — Handelsverktyg &amp; Plattformsfunktioner";
$product_meta_description = "Utforska $site_name-produkten: spot-handel, kryptoderivat, en handelsbot, marginalhandel och mer, allt byggt på en snabb och säker plattform.";
$product_h1 = "$site_name Handelsprodukt";
$product_lead = "En plattform, alla verktyg en handlare behöver: från din första spot-affär till automatiserade strategier och marginalpositioner, $site_name håller upplevelsen snabb, säker och lätt att förstå.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Erbjudande — Börja Handla Från $$app_price";
$offer_meta_description = "Se vad som ingår i det nuvarande $site_name-erbjudandet: en låg lägsta insättning på $$app_price, full plattformsåtkomst och inga dolda avgifter.";
$offer_h1 = "Vårt Nuvarande Erbjudande";
$offer_lead = "Börja med så lite som <strong>$$app_price $app_currency</strong> och lås upp den fullständiga $site_name-plattformen från dag ett &mdash; alla verktyg, alla marknader, inga dolda kostnader.";
$offer_li1 = "Lägsta insättning på bara $$app_price $app_currency för att aktivera ditt konto";
$offer_li2 = "Full åtkomst till spot-handel, derivat, marginal och handelsboten";
$offer_li3 = "Flera finansieringsmetoder, inklusive kort och banköverföring";
$offer_li4 = "Inga registreringsavgifter, inga prenumerationskostnader, inga dolda avgifter";
$offer_li5 = "Kundsupport 24/7 medan du kommer igång";
$offer_note = "Insättningsbelopp och tillgängliga betalningsmetoder kan variera beroende på region. Granska vår <a class=\"link\" href=\"risk-warning.php\">Riskvarning</a> innan du finansierar ett konto.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontakta $site_name — Kom i Kontakt med Vårt Team";
$contacts_meta_description = "Har du en fråga om ditt $site_name-konto eller plattformen? Nå vårt supportteam via e-post eller skicka oss ett meddelande så återkommer vi till dig.";
$contacts_h1 = "Kontakta oss";
$contacts_lead = "Frågor om ditt konto, en insättning, eller hur plattformen fungerar? Vårt team är här för att hjälpa dig.";
$contacts_email_label = "E-post";
$contacts_hours_label = "Supporttider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svarstid";
$contacts_response_value = "Inom 24 timmar";
$contacts_form_title = "Skicka Oss ett Meddelande";
$contacts_form_desc = "Lämna dina uppgifter nedan så kontaktar en medlem av vårt team dig direkt.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Vanliga Frågor";
$faq_meta_description = "Svar på de vanligaste frågorna om att skapa ett $site_name-konto, göra en insättning, plattformssäkerhet och avgifter.";
$faq_page_lead = "Allt du behöver veta innan du börjar handla. Hittar du inte ditt svar? <a class=\"link\" href=\"contacts.php\">Kontakta vårt team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Integritetspolicy";
$privacy_meta_description = "Ta reda på hur $site_name samlar in, använder och skyddar din personliga information på webbplatsen och plattformen.";
$privacy_sections = [
    [
        "title" => "1. Introduktion",
        "body" => "Denna Integritetspolicy förklarar hur $site_name (\"vi\") samlar in, använder och skyddar personlig information för besökare och användare av $site_domain (\"Webbplatsen\"). Genom att använda Webbplatsen godkänner du de metoder som beskrivs nedan.",
    ],
    [
        "title" => "2. Information Vi Samlar In",
        "body" => "Vi kan samla in information du tillhandahåller direkt, såsom ditt namn, e-postadress och telefonnummer när du registrerar dig eller skickar in ett formulär, samt information som samlas in automatiskt, inklusive din IP-adress, enhets- och webbläsartyp, och sidor som visas på Webbplatsen.",
    ],
    [
        "title" => "3. Hur Vi Använder Din Information",
        "body" => "Vi använder insamlad information för att skapa och hantera ditt konto, svara på förfrågningar, tillhandahålla kundsupport, förbättra Webbplatsen och våra tjänster, och, där det är tillåtet, skicka uppdateringar om produkter och erbjudanden. Du kan avregistrera dig från marknadsföringskommunikation när som helst.",
    ],
    [
        "title" => "4. Cookies &amp; Spårningsteknik",
        "body" => "Webbplatsen använder cookies och liknande teknik för att komma ihåg dina preferenser, hålla dig inloggad och förstå hur besökare använder våra sidor. Du kan inaktivera cookies via dina webbläsarinställningar, även om vissa funktioner kanske inte fungerar korrekt som ett resultat.",
    ],
    [
        "title" => "5. Delning av Information",
        "body" => "Vi säljer inte din personliga information. Vi kan dela information med betrodda tjänsteleverantörer som hjälper oss att driva Webbplatsen (såsom hosting- eller analysleverantörer), eller när det krävs enligt lag eller för att skydda våra juridiska rättigheter.",
    ],
    [
        "title" => "6. Datasäkerhet",
        "body" => "Vi tillämpar rimliga tekniska och organisatoriska åtgärder för att skydda din information mot obehörig åtkomst, ändring eller förlust. Ingen metod för överföring eller lagring är helt säker, och vi kan inte garantera absolut säkerhet.",
    ],
    [
        "title" => "7. Dina Rättigheter &amp; Val",
        "body" => "Beroende på din plats kan du ha rätt att komma åt, korrigera eller begära radering av din personliga information, och att invända mot vissa användningar av den. För att utöva dessa rättigheter, kontakta oss via vår <a class=\"link\" href=\"contacts.php\">kontaktsida</a>.",
    ],
    [
        "title" => "8. Barns Integritet",
        "body" => "Webbplatsen riktar sig inte till personer under 18 år, och vi samlar inte medvetet in personlig information från minderåriga. Om du tror att en minderårig har gett oss personlig information, kontakta oss så att vi kan ta bort den.",
    ],
    [
        "title" => "9. Ändringar av Denna Policy",
        "body" => "Vi kan uppdatera denna Integritetspolicy från tid till annan. Eventuella ändringar kommer att publiceras på denna sida med ett reviderat ikraftträdandedatum. Vi uppmuntrar dig att granska denna sida regelbundet.",
    ],
    [
        "title" => "10. Kontakta Oss",
        "body" => "Om du har frågor om denna Integritetspolicy eller om hur din information hanteras, vänligen kontakta oss via vår <a class=\"link\" href=\"contacts.php\">kontaktsida</a> eller e-posta oss på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Användarvillkor";
$conditions_meta_description = "Granska Användarvillkoren som styr åtkomst till och användning av $site_names webbplats och handelsplattform.";
$conditions_sections = [
    [
        "title" => "1. Godkännande av Villkor",
        "body" => "Genom att komma åt eller använda $site_domain (\"Webbplatsen\"), godkänner du att vara bunden av dessa Användarvillkor. Om du inte godkänner någon del av dessa villkor, vänligen använd inte Webbplatsen.",
    ],
    [
        "title" => "2. Behörighet",
        "body" => "Du måste vara minst 18 år gammal och lagligt behörig att använda handelsrelaterade tjänster i din jurisdiktion för att använda Webbplatsen. Genom att använda Webbplatsen bekräftar du att du uppfyller dessa krav.",
    ],
    [
        "title" => "3. Beskrivning av Tjänsten",
        "body" => "$site_name tillhandahåller en online-plattform med pedagogiskt innehåll, marknadsinformation och handelsverktyg. Inget på Webbplatsen utgör finansiell, investerings-, skatte- eller juridisk rådgivning, och all information som tillhandahålls är endast för allmänna informationssyften.",
    ],
    [
        "title" => "4. Användaransvar",
        "body" => "Du är ansvarig för att tillhandahålla korrekt information vid registrering, för att upprätthålla sekretessen för dina kontouppgifter, och för all aktivitet som sker under ditt konto.",
    ],
    [
        "title" => "5. Immateriella Rättigheter",
        "body" => "Allt innehåll på Webbplatsen, inklusive text, grafik, logotyper och programvara, är egendom tillhörande $site_name eller dess licensgivare och skyddas av gällande lagar om immateriella rättigheter. Du får inte reproducera eller distribuera detta innehåll utan tillstånd.",
    ],
    [
        "title" => "6. Ingen Finansiell Rådgivning",
        "body" => "Innehåll på Webbplatsen tillhandahålls endast för informations- och utbildningssyften och bör inte tolkas som finansiell rådgivning. Du är ensamt ansvarig för dina egna handelsbeslut och bör konsultera en oberoende finansiell rådgivare vid behov. Se vår <a class=\"link\" href=\"risk-warning.php\">Riskvarning</a> för mer information.",
    ],
    [
        "title" => "7. Ansvarsbegränsning",
        "body" => "I den utsträckning som lagen tillåter, ska $site_name inte hållas ansvarig för direkta, indirekta, tillfälliga eller följdskador som uppstår från din användning av, eller oförmåga att använda, Webbplatsen eller eventuella länkade tredjepartstjänster.",
    ],
    [
        "title" => "8. Uppsägning",
        "body" => "Vi förbehåller oss rätten att avstänga eller avsluta din åtkomst till Webbplatsen efter eget gottfinnande, utan förvarning, för beteende som vi anser bryter mot dessa Användarvillkor eller på annat sätt är skadligt för andra användare eller Webbplatsen.",
    ],
    [
        "title" => "9. Ändringar av Dessa Villkor",
        "body" => "Vi kan revidera dessa Användarvillkor när som helst. Fortsatt användning av Webbplatsen efter att ändringar publicerats utgör godkännande av de uppdaterade villkoren.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Frågor om dessa Användarvillkor kan riktas till vårt team via <a class=\"link\" href=\"contacts.php\">kontaktsidan</a> eller via e-post till info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrera dig | $site_name — Skapa Ditt Gratis Konto";
$sign_meta_description = "Skapa ditt gratis $site_name-konto på minuter och börja handla med så lite som $$app_price $app_currency.";
$sign_h1 = "Skapa Ditt Gratis Konto";
$sign_lead = "Gå med i $site_name på några minuter. Fyll i dina uppgifter nedan för att komma igång.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Tack | $site_name";
$thanks_h1 = "Tack!";
$thanks_text = "Dina uppgifter har tagits emot. En medlem av $site_name-teamet kommer snart att kontakta dig för att hjälpa dig komma igång.";
$thanks_btn = "Tillbaka till Hemsidan";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Webbplatskarta | $site_name";
$sitemap_meta_description = "Bläddra bland alla sidor på $site_name-webbplatsen, inklusive handelsplattformen, erbjudandet, support och juridiska sidor.";
$sitemap_h1 = "Webbplatskarta";
$sitemap_lead = "Alla sidor på $site_name på ett ställe.";

