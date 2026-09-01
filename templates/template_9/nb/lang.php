<?php
require __DIR__ . '/../lang.php';
$site_lang = 'nb-NO';
$form_language = 'nb'; // matches this page's own language, not the offer's global default

// ============================================================
// NB TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Offisiell Nettside | Handelsplattform";
$home_meta_description = "$site_name tilbyr en brukervennlig handelsplattform med avanserte markedsverktøy, sanntidsinnsikt og praktiske funksjoner utviklet for å gjøre nettbasert handel mer tilgjengelig og velinformert.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Plattform";
$hero_subtitle = "Støtter millioner over hele verden på deres digitale eiendelsreise";
$hero_badge_title = "Fornøyde Medlemmer";
$hero_badge_subtitle = "Elsket av millioner";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Begynn å Handle i Dag";
$form_desc = "Klar til å ta steget? Registrer deg nå og ta det første skrittet mot økonomisk frihet. Start med bare $app_price $app_currency — få tilgang til alle handelsverktøy, sanntids markedsdata og full plattformtilgang fra dag én.";
$form_fname_placeholder = "Fornavn";
$form_lname_placeholder = "Etternavn";
$form_email_placeholder = "E-post";
$form_btn_submit = "Registrer deg";
$form_disclaimer_text = "Ved å oppgi personopplysningene dine og klikke på knappen godtar du nettstedets <a class=\"link\" href=\"privacy.php\">personvernerklæring</a> og <a class=\"link\" href=\"conditions.php\">vilkår og betingelser</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIKKER";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Bli Kjent med Plattformen";
$stats_title = "En rask introduksjon til smartere handel";
$stat_1_value = "154+";
$stat_1_label = "Land Dekket";
$stat_2_value = "29 Millioner";
$stat_2_label = "Globale Investorer";
$stat_3_value = "635+";
$stat_3_label = "Mynter";
$stat_4_value = "3,26 Milliarder $";
$stat_4_label = "24-timers Handelsvolum";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Hvorfor $site_name?";
$why_title = "Grunner til å Velge Oss";
$why_1_title = "Raskt &amp; Enkelt";
$why_1_text = "Kjøp og selg dine foretrukne kryptovalutaer på sekunder.";
$why_2_title = "Trygt &amp; Sikkert";
$why_2_text = "Vi bruker den nyeste teknologien for å holde midlene og dataene dine trygge.";
$why_3_title = "Åpent for Alle";
$why_3_text = "Handle på plattformen vår 24/7, hvor og når du vil.";
$why_4_title = "Profesjonelle Verktøy";
$why_4_text = "Fra enkle til profesjonelle handelsfunksjoner, vi har alt.";
$why_5_title = "Trender &amp; Innsikt";
$why_5_text = "Få de siste kryptonyhetene, innsikten og trendene fra eksperter.";
$why_6_title = "Support 24/7";
$why_6_text = "Vårt vennlige supportteam er her for å hjelpe når som helst.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Slik Fungerer Det";
$how_title = "Enkle Trinn for å Begynne å Handle";
$how_1_title = "Registrer deg";
$how_1_text = "Opprett en konto og begynn å handle i løpet av minutter.";
$how_1_btn = "Begynn å Handle";
$how_2_title = "Sett Inn Midler";
$how_2_text = "Finansier kontoen din med et minimumsinnskudd på $app_price $app_currency for å låse opp full handelstilgang. Velg blant flere betalingsmetoder og begynn å vokse porteføljen din i dag.";
$how_2_note = "Legg til midler....";
$how_3_title = "Begynn å Handle";
$how_3_text = "Utforsk markedet og handle på din egen måte.";
$how_3_note = "Kjøp og HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulator";
$calc_title = "Se hvor mye tid og potensial du lar gå til spille";
$calc_volume_label = "Månedlig Handelsvolum";
$calc_trades_label = "Handler per Uke";
$calc_time_label = "Tid Du Kunne Spart";
$calc_boost_label = "Potensiell Volumøkning";
$calc_btn = "Begynn å Handle";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funksjoner";
$features_title = "Kraften til $site_name";
$feature_1_title = "Spot-handel";
$feature_1_text = "Maksimer handelspotensialet ditt med profesjonelle verktøy.";
$feature_2_title = "Kjøp Krypto";
$feature_2_text = "Kjøp krypto med kort eller banker.";
$feature_3_title = "Kryptoderivater";
$feature_3_text = "Enkel, avansert futures-handel.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "La formuen din vokse med letthet.";
$feature_5_title = "Handelsbot";
$feature_5_text = "Høyere fortjeneste, selv mens du sover.";
$feature_6_title = "Marginhandel";
$feature_6_text = "Lån, handle og betal tilbake enkelt.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Hva Brukerne Våre Sier";
$review_1_text = "Plattformen er veldig enkel å bruke, og jeg har sett jevn fremgang siden jeg ble innehaver. Teamets engasjement og friske ideer gjør at jeg ser frem til hva som kommer neste gang!";
$review_1_role = "Handler";
$review_2_text = "$site_name tilbyr en sømløs og intuitiv handelsopplevelse. Jeg kunne begynne å kjøpe og handle krypto med det samme. Grensesnittet er enkelt å bruke, og transaksjonshastighetene er utmerkede!";
$review_2_role = "Ny Handler";
$review_3_text = "Jeg stoler på denne plattformen for å administrere kryptoinvesteringene mine. Sikkerhetsfunksjonene gir meg trygghet, og jeg har aldri opplevd problemer med uttak eller innskudd. Det er en av de mest pålitelige børsene jeg har brukt.";
$review_3_role = "Profesjonell Handler";
$review_4_text = "Hver gang jeg har hatt spørsmål, har kundestøtteteamet vært raskt og hjelpsomt. De bryr seg virkelig om brukerne sine og gjør hver handelsopplevelse smidig og enkel.";
$review_4_role = "Erfaren Handler";
$review_5_text = "Som nybegynner fant jeg $site_name veldig enkel å bruke. Det som virkelig skiller seg ut er utvalget av avanserte verktøy for mer erfarne handlere. Det er et solid valg for alle som ønsker å bygge opp porteføljen sin!";
$review_5_role = "Handler fra Fellesskapet";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Ofte Stilte Spørsmål";
$faq_title = "Ofte Stilte Spørsmål";
$faq_q1 = "Hva er $site_name?";
$faq_a1 = "$site_name er en kryptobørs der brukere enkelt kan handle et bredt utvalg av mynter, inkludert Bitcoin, Ethereum og andre populære kryptovalutaer.";
$faq_q2 = "Hvor Trygt er $site_name for Kryptohandel?";
$faq_a2 = "Plattformen tilbyr sikkerhet gjennom avansert teknologi og 1:1 aktivadekning via Proof of Reserves.";
$faq_q3 = "Hvordan Setter Jeg Inn Penger?";
$faq_a3 = "$site_name tilbyr flere innskuddsalternativer, inkludert kryptoinnskudd, fiat-innskudd, P2P-handel og ett-klikks kjøp.";
$faq_q4 = "Trenger Jeg Erfaring for å Bruke $site_name?";
$faq_a4 = "Nei, du trenger ingen erfaring. Plattformens brukervennlige grensesnitt gjør den tilgjengelig for alle, fra nybegynnere til avanserte handlere.";
$faq_q5 = "Er det skjulte gebyrer eller kostnader?";
$faq_a5 = "Overhodet ikke. Det er ingen registreringsavgifter, abonnementskostnader eller skjulte gebyrer av noe slag. Du ser alltid det nøyaktige transaksjonsbeløpet før du bekrefter. Inntekter kommer fra premiumfunksjoner og børspartnerskap, ikke fra å ta penger fra brukerne.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Begynn å Handle i Dag";
$cta_desc = "Klar til å ta steget? Registrer deg nå og ta det første skrittet mot økonomisk uavhengighet.";
$cta_btn = "Registrer deg";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Hovedfunksjoner ved $site_name Handelsplattform";
$table_1_label = "🤖 Plattformteknologi";
$table_1_val = "Avansert AI-handelsmotor";
$table_2_label = "💳 Finansieringsmetoder";
$table_2_val = "Store Kredittkort, Bankoverføring, PayPal";
$table_3_label = "📱 Plattformtilgang";
$table_3_val = "Kompatibilitet på Tvers av Enheter";
$table_4_label = "🚀 Ytelsesrate";
$table_4_val = "85% Nøyaktighet";
$table_5_label = "📊 Handelsinstrumenter";
$table_5_val = "Aksjer, Forex, Råvarer, Edelmetaller, CFD-er, Kryptovalutaer og mer…";
$table_6_label = "✍️ Kontooppsett";
$table_6_val = "Raskt og Effektivt";
$table_7_label = "📞 Kundestøtte";
$table_7_val = "24/7 Profesjonell Assistanse";

// Reviews summary card
$summary_title = "$site_name Anmeldelser";
$summary_badge = "Pålitelig";
$summary_desc = "En kraftig, brukervennlig handelsplattform med solid automatisering og pedagogiske ressurser.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handle klokt, voks raskt";
$footer_community_label = "Fellesskap";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";
$footnav_contacts = "Kontakt";
$footnav_faq = "Ofte Stilte Spørsmål";
$footnav_privacy = "Personvernerklæring";
$footnav_conditions = "Vilkår &amp; Betingelser";
$footnav_risk = "Risikoadvarsel";
$footer_disclaimer = "$site_name deler pedagogiske ressurser og markedsrelatert materiale for å hjelpe besøkende med å bedre forstå handel, investering og digitale finansielle produkter. Informasjon som presenteres på nettstedet, som markedskommentarer, aktivapriser, diagrammer, guider og analytisk innhold, gis til generelle informasjonsformål og utgjør ikke finansiell, investerings-, skatte- eller juridisk rådgivning. Selv om rimelige tiltak tas for å opprettholde nøyaktig og relevant informasjon, gir $site_name ingen garantier angående innholdets fullstendighet, nøyaktighet eller aktualitet og kan ikke holdes ansvarlig for beslutninger eller tap som følge av bruken.<br><br>Deltakelse i finansmarkedene innebærer iboende risiko. Kryptovaluta, Forex, CFD-er, aksjer og andre handelsinstrumenter kan oppleve betydelige prissvingninger, og tap kan forekomme. Individuelle omstendigheter og risikotoleranse varierer, så brukere bør gjøre sin egen research og vurdere å innhente råd fra en kvalifisert finansiell rådgiver før de forplikter midler. Handle aldri med penger du ikke har råd til å tape.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Handelskonsulent";
$quiz_text_welcome = "Hei! Jeg er Maya, din personlige handelskonsulent. Har du et par minutter til å finne den beste planen for deg?";
$quiz_text_q1 = "Har du handlet med kryptovaluta før?";
$quiz_text_a1_yes = "Ja, jeg har erfaring";
$quiz_text_a1_no = "Nei, jeg er nybegynner";
$quiz_text_q2 = "Flott! Hva er fornavnet ditt, slik at jeg kan tilpasse planen din?";
$quiz_text_q3 = "Hva er hovedmålet ditt med handel?";
$quiz_text_a3_yes = "Bygg langsiktig formue";
$quiz_text_a3_no = "Generer kortsiktig inntekt";
$quiz_text_q4 = "Hvor mye ønsker du å starte med?";
$quiz_text_a4_1 = "Under $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Over $1000";
$quiz_text_q5 = "Perfekt. Vil du at jeg åpner en gratis konto for deg nå?";
$quiz_text_a5_yes = "Ja, la oss gjøre det";
$quiz_text_a5_no = "Ikke akkurat nå";
$quiz_text_loader = "Finner din beste plan...";
$quiz_text_final_ttl = "Alt er klart!";
$quiz_text_processing = "Sender inn opplysningene dine...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Etternavn";
$quiz_placeholder_email = "E-post";
$quiz_btn_submit = "Få Min Gratis Konto";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikoadvarsel — Opplysning om Handelsrisiko";
$risk_meta_description = "Les $site_names risikoadvarsel før du handler: kryptomarkedsrisiko, gearing, likviditet, cybersikkerhet og regulatoriske hensyn.";
$risk_title = "Risikoadvarsel";
$risk_intro = "Å forstå risiko er det første skrittet mot selvsikker handel.";
$risk_ai_title = "Slik Hjelper Vårt AI-system med å Håndtere Risiko:";
$risk_ai_1_title = "Algoritmisk Effektivitet &amp; Følelsesløs Handel:";
$risk_ai_1_text = "Avanserte algoritmer analyserer markedssignaler for å utføre handler objektivt på optimale tidspunkter.";
$risk_ai_2_title = "Datadrevne Strategier:";
$risk_ai_2_text = "Strategier er basert på verifiserte markedsmønstre og sanntidsanalyse fremfor gjetting.";
$risk_ai_3_title = "Fleksible Innstillinger &amp; Full Kontroll:";
$risk_ai_3_text = "Juster risikoparametrene dine når som helst. Følg alle saldoer og handler transparent på dashbordet ditt, uten skjulte gebyrer og uten begrensninger på uttak.";
$risk_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel innebærer alltid risiko. Automatiserte systemer (inkludert AI) garanterer ikke fortjeneste, kan svikte på grunn av programvarefeil eller uventede markedshendelser, og krever brukerovervåking. Tidligere resultater er ikke en indikator for fremtidige resultater. Denne plattformen tjener utelukkende informasjons- og markedsføringsformål og gir ikke finansiell rådgivning.";
$risk_s1_title = "1. Generelle Risikoer &amp; Kryptovalutamarkedsrisikoer";
$risk_s1_text = "Kryptovalutaer er svært volatile, spekulative eiendeler som opererer 24/7 med minimal regulatorisk tilsyn i de fleste jurisdiksjoner.";
$risk_s1_li1 = "Verdier kan svinge dramatisk i korte perioder, noe som potensielt kan føre til et totalt tap av investert kapital.";
$risk_s1_li2 = "Markedsverdier kan påvirkes kraftig av regulatoriske endringer, tekniske utviklinger, sikkerhetsbrudd eller bredere makroøkonomiske hendelser.";
$risk_s1_li3 = "Noen eiendeler kan miste all verdi fullstendig. Invester bare midler du har råd til å tape.";
$risk_s2_title = "2. Utførelse-, Likviditets- &amp; Gearingsrisikoer";
$risk_s2_li1_title = "Markedsvolatilitet &amp; Likviditet:";
$risk_s2_li1_text = "Ekstreme prisbevegelser (10–20 %+ daglig) eller lav likviditet (spesielt i mindre mynter) kan føre til forsinkelser, plattformavbrudd og alvorlig utførelsesslipp. Stop-loss-ordrer kan ikke garantere tapsgrenser under ekstreme forhold.";
$risk_s2_li2_title = "Gearings- &amp; Marginrisikoer:";
$risk_s2_li2_text = "Gearede produkter forsterker både gevinster og tap, noe som betyr at du kan tape mer enn ditt opprinnelige innskudd. <em>Omtrent 70–80 % av detaljinvestorenes kontoer taper penger når de handler gearede produkter.</em>";
$risk_s3_title = "3. Tekniske, Cybersikkerhets- &amp; Tredjepartsrisikoer";
$risk_s3_li1_title = "Tekniske Faktorer:";
$risk_s3_li1_text = "Nettbasert handel innebærer i sagens natur risiko for internettavbrudd, maskinvare-/programvarefeil og manglende tilgjengelighet av tjenesten.";
$risk_s3_li2_title = "Cybersikkerhet:";
$risk_s3_li2_text = "Kryptovalutakontoer er hyppige mål for phishing, skadevare og hacking. Transaksjoner er irreversible; kompromittering av påloggingsinformasjonen din kan resultere i permanent tap.";
$risk_s3_li3_title = "Tredjepartsplattformer:";
$risk_s3_li3_text = "Dette nettstedet kan koble brukere til tredjepartsplattformer. Vi kontrollerer, godkjenner eller garanterer ikke deres sikkerhet, drift eller soliditet. Utfør alltid din egen grundige due diligence før du setter inn midler på eksterne plattformer.";
$risk_s4_title = "4. Regulatoriske, Skatte- &amp; Sluttbestemmelser";
$risk_s4_li1_title = "Juridisk Overholdelse &amp; Skatter:";
$risk_s4_li1_text = "Regulatoriske rammeverk varierer mye og endres raskt. Brukere er alene ansvarlige for å sikre at handelsaktiviteten deres overholder lokale lover, og for å oppfylle sine egne skatteforpliktelser.";
$risk_s4_li2_title = "Ingen Profittgarantier:";
$risk_s4_li2_text = "Det finnes ingen \"trygg\" eller risikofri kryptohandel. Eventuelle avkasttall eller ytelseseksempler som gis er rent hypotetiske.";
$risk_s4_li3_title = "Egnethet:";
$risk_s4_li3_text = "Hvis du ikke fullt ut forstår risikoene, er avhengig av vesentlige midler, eller handler med lånte penger, er kryptohandel ikke egnet for deg. Konsulter en uavhengig, lisensiert finansiell rådgiver hvis du er usikker.";
$risk_contact = "<strong>Kontakt:</strong> For eventuelle spørsmål angående denne erklæringen eller for å sende inn en forespørsel, vennligst ta kontakt med vårt offisielle kundestøtteteam via kontaktskjemaet på nettstedet vårt.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Hjem";
$bc_product = "Produkt";
$bc_offer = "Tilbud";
$bc_contacts = "Kontakt";
$bc_faq = "Ofte Stilte Spørsmål";
$bc_privacy = "Personvernerklæring";
$bc_conditions = "Vilkår &amp; Betingelser";
$bc_risk = "Risikoadvarsel";
$bc_sign = "Registrer deg";
$bc_sitemap = "Nettstedskart";
$bc_thanks = "Takk";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Produkt — Handelsverktøy &amp; Plattformfunksjoner";
$product_meta_description = "Utforsk $site_name-produktet: spot-handel, kryptoderivater, en handelsbot, marginhandel og mer, alt bygget på en rask og sikker plattform.";
$product_h1 = "$site_name Handelsprodukt";
$product_lead = "Én plattform, hvert verktøy en handler trenger: fra din første spot-handel til automatiserte strategier og marginposisjoner, $site_name holder opplevelsen rask, sikker og lett å forstå.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Tilbud — Begynn å Handle Fra $$app_price";
$offer_meta_description = "Se hva som er inkludert i det nåværende $site_name-tilbudet: et lavt minimumsinnskudd på $$app_price, full plattformtilgang og ingen skjulte gebyrer.";
$offer_h1 = "Vårt Nåværende Tilbud";
$offer_lead = "Start med så lite som <strong>$$app_price $app_currency</strong> og lås opp den fulle $site_name-plattformen fra dag én &mdash; alle verktøy, alle markeder, ingen skjulte kostnader.";
$offer_li1 = "Minimumsinnskudd på bare $$app_price $app_currency for å aktivere kontoen din";
$offer_li2 = "Full tilgang til spot-handel, derivater, margin og handelsboten";
$offer_li3 = "Flere finansieringsmetoder, inkludert kort og bankoverføring";
$offer_li4 = "Ingen registreringsavgifter, ingen abonnementskostnader, ingen skjulte gebyrer";
$offer_li5 = "Kundestøtte 24/7 mens du kommer i gang";
$offer_note = "Innskuddsbeløp og tilgjengelige betalingsmetoder kan variere etter region. Se gjennom vår <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a> før du finansierer en konto.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontakt $site_name — Kom i Kontakt med Teamet Vårt";
$contacts_meta_description = "Har du et spørsmål om $site_name-kontoen din eller plattformen? Nå supportteamet vårt via e-post eller send oss en melding, så tar vi kontakt med deg.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Spørsmål om kontoen din, et innskudd, eller hvordan plattformen fungerer? Teamet vårt er her for å hjelpe.";
$contacts_email_label = "E-post";
$contacts_hours_label = "Support-tider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svartid";
$contacts_response_value = "Innen 24 timer";
$contacts_form_title = "Send Oss en Melding";
$contacts_form_desc = "Legg igjen opplysningene dine nedenfor, så vil et medlem av teamet vårt kontakte deg direkte.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Ofte Stilte Spørsmål";
$faq_meta_description = "Svar på de vanligste spørsmålene om å opprette en $site_name-konto, gjøre et innskudd, plattformsikkerhet og gebyrer.";
$faq_page_lead = "Alt du trenger å vite før du begynner å handle. Finner du ikke svaret ditt? <a class=\"link\" href=\"contacts.php\">Kontakt teamet vårt</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Personvernerklæring";
$privacy_meta_description = "Finn ut hvordan $site_name samler inn, bruker og beskytter dine personopplysninger på tvers av nettstedet og plattformen.";
$privacy_sections = [
    [
        "title" => "1. Introduksjon",
        "body" => "Denne personvernerklæringen forklarer hvordan $site_name (\"vi\") samler inn, bruker og beskytter personopplysninger for besøkende og brukere av $site_domain (\"Nettstedet\"). Ved å bruke Nettstedet godtar du praksisene beskrevet nedenfor.",
    ],
    [
        "title" => "2. Informasjon Vi Samler Inn",
        "body" => "Vi kan samle inn informasjon du oppgir direkte, som navnet ditt, e-postadresse og telefonnummer når du registrerer deg eller sender inn et skjema, samt informasjon samlet inn automatisk, inkludert din IP-adresse, enhets- og nettlesertype, og sider sett på Nettstedet.",
    ],
    [
        "title" => "3. Hvordan Vi Bruker Opplysningene Dine",
        "body" => "Vi bruker innsamlet informasjon til å opprette og administrere kontoen din, svare på henvendelser, gi kundestøtte, forbedre Nettstedet og våre tjenester, og, der det er tillatt, sende oppdateringer om produkter og tilbud. Du kan når som helst melde deg av markedsføringskommunikasjon.",
    ],
    [
        "title" => "4. Informasjonskapsler &amp; Sporingsteknologier",
        "body" => "Nettstedet bruker informasjonskapsler og lignende teknologier for å huske preferansene dine, holde deg pålogget og forstå hvordan besøkende bruker sidene våre. Du kan deaktivere informasjonskapsler via nettleserinnstillingene dine, selv om enkelte funksjoner kanskje ikke fungerer riktig som følge av dette.",
    ],
    [
        "title" => "5. Deling av Informasjon",
        "body" => "Vi selger ikke dine personopplysninger. Vi kan dele informasjon med pålitelige tjenesteleverandører som hjelper oss med å drive Nettstedet (som hosting- eller analyseleverandører), eller når det kreves av loven eller for å beskytte våre juridiske rettigheter.",
    ],
    [
        "title" => "6. Datasikkerhet",
        "body" => "Vi bruker rimelige tekniske og organisatoriske tiltak for å beskytte informasjonen din mot uautorisert tilgang, endring eller tap. Ingen overførings- eller lagringsmetode er helt sikker, og vi kan ikke garantere absolutt sikkerhet.",
    ],
    [
        "title" => "7. Dine Rettigheter &amp; Valg",
        "body" => "Avhengig av din plassering kan du ha rett til å få tilgang til, rette eller be om sletting av dine personopplysninger, og til å motsette deg visse bruksområder av disse. For å utøve disse rettighetene, vennligst kontakt oss via vår <a class=\"link\" href=\"contacts.php\">kontaktside</a>.",
    ],
    [
        "title" => "8. Barns Personvern",
        "body" => "Nettstedet er ikke rettet mot personer under 18 år, og vi samler ikke bevisst inn personopplysninger fra mindreårige. Hvis du tror at en mindreårig har gitt oss personopplysninger, vennligst kontakt oss slik at vi kan fjerne dem.",
    ],
    [
        "title" => "9. Endringer i Denne Erklæringen",
        "body" => "Vi kan oppdatere denne personvernerklæringen fra tid til annen. Eventuelle endringer vil bli publisert på denne siden med en revidert ikrafttredelsesdato. Vi oppfordrer deg til å gjennomgå denne siden regelmessig.",
    ],
    [
        "title" => "10. Kontakt Oss",
        "body" => "Hvis du har spørsmål om denne personvernerklæringen eller om hvordan opplysningene dine behandles, vennligst kontakt oss via vår <a class=\"link\" href=\"contacts.php\">kontaktside</a> eller e-post oss på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Vilkår &amp; Betingelser";
$conditions_meta_description = "Gjennomgå Vilkår &amp; Betingelser som regulerer tilgang til og bruk av $site_names nettsted og handelsplattform.";
$conditions_sections = [
    [
        "title" => "1. Aksept av Vilkår",
        "body" => "Ved å få tilgang til eller bruke $site_domain (\"Nettstedet\"), godtar du å være bundet av disse Vilkår &amp; Betingelser. Hvis du ikke er enig i noen del av disse vilkårene, vennligst ikke bruk Nettstedet.",
    ],
    [
        "title" => "2. Kvalifisering",
        "body" => "Du må være minst 18 år gammel og lovlig berettiget til å bruke handelsrelaterte tjenester i din jurisdiksjon for å bruke Nettstedet. Ved å bruke Nettstedet bekrefter du at du oppfyller disse kravene.",
    ],
    [
        "title" => "3. Beskrivelse av Tjenesten",
        "body" => "$site_name tilbyr en nettbasert plattform med pedagogisk innhold, markedsinformasjon og handelsverktøy. Ingenting på Nettstedet utgjør finansiell, investerings-, skatte- eller juridisk rådgivning, og all informasjon som gis er kun til generelle informasjonsformål.",
    ],
    [
        "title" => "4. Brukeransvar",
        "body" => "Du er ansvarlig for å oppgi nøyaktig informasjon ved registrering, for å opprettholde konfidensialiteten til kontolegitimasjonen din, og for all aktivitet som skjer under kontoen din.",
    ],
    [
        "title" => "5. Immaterielle Rettigheter",
        "body" => "Alt innhold på Nettstedet, inkludert tekst, grafikk, logoer og programvare, er eiendommen til $site_name eller dets lisensgivere og er beskyttet av gjeldende lover om immaterielle rettigheter. Du kan ikke reprodusere eller distribuere dette innholdet uten tillatelse.",
    ],
    [
        "title" => "6. Ingen Finansiell Rådgivning",
        "body" => "Innhold på Nettstedet gis kun til informasjons- og pedagogiske formål og bør ikke tolkes som finansiell rådgivning. Du er alene ansvarlig for dine egne handelsbeslutninger og bør konsultere en uavhengig finansiell rådgiver om nødvendig. Se vår <a class=\"link\" href=\"risk-warning.php\">Risikoadvarsel</a> for mer informasjon.",
    ],
    [
        "title" => "7. Ansvarsbegrensning",
        "body" => "I den maksimale utstrekning tillatt ved lov, vil ikke $site_name være ansvarlig for direkte, indirekte, tilfeldige eller følgeskader som oppstår fra din bruk av, eller manglende evne til å bruke, Nettstedet eller eventuelle tilknyttede tredjepartstjenester.",
    ],
    [
        "title" => "8. Oppsigelse",
        "body" => "Vi forbeholder oss retten til å suspendere eller avslutte din tilgang til Nettstedet etter eget skjønn, uten varsel, for atferd vi mener bryter disse Vilkår &amp; Betingelser eller på annen måte er skadelig for andre brukere eller Nettstedet.",
    ],
    [
        "title" => "9. Endringer i Disse Vilkårene",
        "body" => "Vi kan revidere disse Vilkår &amp; Betingelser når som helst. Fortsatt bruk av Nettstedet etter at endringer er publisert utgjør aksept av de oppdaterte vilkårene.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Spørsmål om disse Vilkår &amp; Betingelser kan rettes til teamet vårt via <a class=\"link\" href=\"contacts.php\">kontaktsiden</a> eller via e-post til info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrer deg | $site_name — Opprett Din Gratis Konto";
$sign_meta_description = "Opprett din gratis $site_name-konto på minutter og begynn å handle med så lite som $$app_price $app_currency.";
$sign_h1 = "Opprett Din Gratis Konto";
$sign_lead = "Bli medlem av $site_name på noen minutter. Fyll inn opplysningene dine nedenfor for å komme i gang.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Takk | $site_name";
$thanks_h1 = "Takk!";
$thanks_text = "Opplysningene dine er mottatt. Et medlem av $site_name-teamet vil snart ta kontakt med deg for å hjelpe deg i gang.";
$thanks_btn = "Tilbake til Hjemmesiden";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Nettstedskart | $site_name";
$sitemap_meta_description = "Bla gjennom hver side på $site_name-nettstedet, inkludert handelsplattformen, tilbudet, support og juridiske sider.";
$sitemap_h1 = "Nettstedskart";
$sitemap_lead = "Hver side på $site_name på ett sted.";

