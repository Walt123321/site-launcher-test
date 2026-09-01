<?php
require __DIR__ . '/../lang.php';
$site_lang = 'no-NO';
$form_language = 'no'; // matches this page's own language, not the offer's global default

// ============================================================
// NO TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Offisiell Nettside | Handelsplattform";
$home_meta_description = "$site_name tilbyr en brukervennlig handelsplattform med avanserte markedsverktøy, sanntidsinnsikt og praktiske funksjoner som gjør nettbasert handel mer tilgjengelig og bedre informert.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Om oss";
$nav_contacts = "Kontakt";
$nav_login = "Logg inn";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Ble nettopp med";
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
$form_title = "Kom i Gang Nå";
$form_fname_placeholder = "Fullt navn";
$form_lname_placeholder = "Etternavn";
$form_email_placeholder = "E-postadresse";
$form_btn_submit = "Opprett Konto";
$form_disclaimer_text = "* Ved å klikke på knappen godtar du våre <a class=\"link\" href=\"privacy.php\">Personvernregler</a> og <a class=\"link\" href=\"conditions.php\">Bruksvilkår</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIKRET";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI designet for å lese markedet klarere";
$s1_subtitle = "Teknologidrevet investeringsstrategi";
$s1_quote = "$site_name er bygget for å gjøre det enklere å jobbe med markedene, enten du har erfaring eller ikke. Plattformen bruker kunstig intelligens til å omdanne komplekse data til klare, handlingsrettede beslutninger, slik at du kan handle med større trygghet i ethvert scenario.";
$s1_p1 = "Systemet gjennomgår enorme mengder informasjon i sanntid: det oppdager endringer, gjenkjenner mønstre og reagerer raskt på markedssignaler. Dette gir deg et klart bilde av dagens kontekst, slik at du kan oppdage muligheter uten å måtte grave deg gjennom komplisert analyse.";
$s1_p2 = "Overvåking døgnet rundt, et brukervennlig grensesnitt og et høyt beskyttelsesnivå gjør opplevelsen komfortabel og pålitelig. Alt er designet slik at du kan fokusere på resultater, ikke den tekniske siden.";
$s1_p3 = "Copy trading-funksjonen gir deg også tilgang til strategiene til mer erfarne handlere. Du kan følge bevegelsene deres og bruke velprøvde tilnærminger i din egen handel, og kombinere profesjonell vurdering med automatisering.";
$s1_cta = "Opprett Konto";
$s1_img_alt = "$site_name digital finans";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Presis markedsanalyse, uten ekstra støy";
$s2_intro = "$site_name bruker kunstig intelligens til å overvåke markedet kontinuerlig og oppdage endringer raskt. Systemet behandler enorme mengder data og viser bare de relevante signalene, uten å overvelde deg med unødvendig informasjon.";
$s2_item1_title = "Markedsreaksjon uten venting";
$s2_item1_text = "Plattformen identifiserer bevegelser i tidlige stadier: momentum, vendinger og trendendringer. Du ser umiddelbart hva som skjer, og kan handle på riktig tidspunkt.";
$s2_item2_title = "En klar avlesning i stedet for gjetting";
$s2_item2_text = "Ingen kompliserte grafer eller gjetting. $site_name fremhever det essensielle og gir en klar oversikt over situasjonen, slik at du kan bestemme deg basert på data, ikke intuisjon.";
$s2_item3_title = "Kontroll og beskyttelse";
$s2_item3_text = "Dataene dine er beskyttet, tilgangen kontrolleres, og transaksjoner flyter gjennom sikre kanaler. Dette lar deg fokusere på markedet, ikke teknisk risiko.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Klar intelligens for handlere";
$s3_card1_title = "$site_name respekterer brukerens personvern og kontroll";
$s3_card1_text = "$site_name behandler informasjon med full åpenhet og integritet. Den misbruker ikke dine personopplysninger. Ingen transaksjoner eller ordre registreres på denne plattformen.";
$s3_card2_title = "Et klart analysemiljø for bedre beslutninger";
$s3_card2_text = "$site_name fungerer som et teknologisk rom hvor AI styrker menneskelig vurdering i stedet for å erstatte den. Disse verktøyene gjør det lettere å forstå markedsendringer, sammenligne strategier og studere aktivaadferd.";
$s3_card3_title = "AI-verktøy som skjerper ditt blikk på markedet";
$s3_card3_text = "Analysen stopper aldri. $site_name holder øye med kryptomiljøet og sender sanntidsvarsler så snart en relevant bevegelse dukker opp.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Skarp analyse, uten følelser eller feil";
$s4_quote = "$site_name omdanner komplekse markedsdata til organisert, lettlest informasjon, eliminerer unødvendig støy og hjelper deg med å fokusere på signalene som virkelig betyr noe. Dette lar deg forstå en situasjon tidligere og bestemme deg uten at følelser tar over.";
$s4_p1 = "Systemet oppdaterer kontinuerlig sine konklusjoner med nye data. I stedet for haltende indikatorer bruker det adaptive modeller som reagerer på markedsendringer i sanntid. Det betyr at du alltid jobber med et oppdatert bilde og kan handle raskere når det virkelig betyr noe.";
$s4_img_alt = "$site_name kunstig intelligens";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Bruk $site_name AI for presise, rettidige beslutninger";
$s5_quote = "$site_name analyserer markedet i sanntid og viser deg umiddelbart hvor bevegelsen og mulighetene er. Systemet behandler dataene for deg og leverer ferdige signaler: når du skal gå inn, når du skal gå ut, og hva du skal se etter.";
$s5_p1 = "Du trenger ikke se på grafer hele dagen. Plattformen oppdager selv endringer og reagerer raskt på markedet, slik at du ikke går glipp av viktige øyeblikk.";
$s5_p2 = "Algoritmene jobber døgnet rundt og identifiserer nye muligheter så snart de oppstår. Du får oppdatert informasjon uten forsinkelser eller informasjonsoverbelastning.";
$s5_p3 = "Samtidig forblir sikkerheten på et høyt nivå: databeskyttelse, sikker tilgang og handelskontroll. $site_name passer for både nybegynnere og aktive handlere — beslutningene forblir dine, men støttet av et solid analytisk fundament.";
$s5_img_alt = "$site_name finansiell automatisering";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konsekvent handel begynner med et organisert system";
$s6_p1 = "$site_name hjelper deg med å bringe struktur til arbeidet ditt med markedet. Plattformen skaper en klar ramme: du definerer målene og risikonivået ditt, og systemet tilpasser analysen sin til stilen din — uten kaos og uten overbelastning.";
$s6_p2 = "Døgnkontinuerlig analyse omdanner datastrømmen til enkle, forståelige signaler. Du ser bare det som betyr noe: hvor det er bevegelse, hvor det er verdt å gå inn, og når det er bedre å vente. Over tid blir algoritmene skarpere og tilpasser seg markedet.";
$s6_item1_title = "Velg din tempo: rask handel eller en langsiktig tilnærming";
$s6_item1_text = "$site_name støtter ulike strategier. For aktiv handel markerer systemet inngangspunkter og prisbevegelser. For en langsiktig tilnærming hjelper det deg med å opprettholde posisjoner med tanke på trend og risiko.";
$s6_item2_title = "Inngangspunkter uten gjetting";
$s6_item2_text = "Plattformen viser hvor markedet er mest aktivt. Dette hjelper deg med å gå inn med større trygghet og gå ut i tide, uten improvisasjon.";
$s6_item3_title = "Risikostyring fra begynnelsen";
$s6_item3_text = "Du kan se mulige scenarier på forhånd: hvor risikoen er lavere og potensialet er høyere. Dette lar deg planlegge transaksjoner før bevegelsen i det hele tatt begynner.";
$s6_item4_title = "Klar analyse";
$s6_item4_text = "$site_name overvelder deg ikke med komplisert terminologi. Du får klar, direkte anvendbar informasjon, designet for å hjelpe deg med å bestemme deg raskere og med større trygghet.";
$s6_cta = "Kom i Gang Nå";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Enkle verktøy for presise beslutninger med $site_name";
$s7_quote = "$site_name gir deg alt du trenger for å handle på markedet — uten teknisk sjargong eller informasjonsoverbelastning. Plattformen analyserer selv prisbevegelser, trender og mulige inngangspunkter, og viser bare det som virkelig betyr noe.";
$s7_point1 = "Systemet hjelper deg med å oppdage når markedet kan snu, hvor sterke bevegelser oppstår, og hvilke øyeblikk som er best for å gå inn eller ut. Hvert signal kommer forhåndsbehandlet — du trenger ikke mestre komplekse indikatorer.";
$s7_point2 = "Det inkluderer også copy trading: du kan følge og gjenta beslutningene til erfarne handlere uten å bruke tid på din egen analyse.";
$s7_point3 = "Grensesnittet forblir så enkelt som mulig — hvert verktøy forstås med et blikk og er klart til bruk fra første øyeblikk.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Finn viktige tidsvinduer med $site_name AI";
$s8_item1 = "Automatisk diversifisering fordeler midler over ulike aktiva, reduserer risiko og beskytter kapital selv i ustabile markeder.";
$s8_item2 = "Et fullstendig autonomt system — du trenger ikke se på grafene. Algoritmene analyserer markedet og tar beslutninger selvstendig.";
$s8_item3 = "Uttak er tilgjengelig når som helst — til bankkort, kryptolommebøker eller elektroniske betalingssystemer, uten forsinkelser.";
$s8_item4 = "Daglige rapporter viser resultatene dine og gir deg full kontroll over situasjonen i sanntid.";
$s8_item5 = "Fleksible innstillinger for risikonivå lar deg velge en strategi som passer målene dine — fra konservativ til mer aggressiv.";
$s8_item6 = "Et profittpotensial på opptil 400% gjør $site_name til et verktøy for de som ikke bare ønsker å bevare kapitalen sin, men å vokse den betydelig.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Ekspertanalyse drevet av $site_name";
$s9_quote = "$site_name kombinerer kraften i algoritmer med markedserfaring, og omdanner komplekse data til klare, lettforståelige signaler. Systemet oppdager raskt mønstre og potensielle muligheter, slik at du kan bestemme deg uten informasjonsoverbelastning.";
$s9_p1 = "Du mottar forhåndsbehandlede analyser som tar hensyn til både tekniske indikatorer og markedsadferd — slik at du kan handle raskere, med større trygghet og presisjon.";
$s9_img_alt = "$site_name investeringsstrategi";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Hva brukerne våre sier";
$review_1_text = "Plattformen er svært intuitiv, og verktøyene har hjulpet meg med å forbedre handelsresultatene mine.";
$review_2_text = "Rask support og virkelig nyttige læringsmateriell — perfekt for folk som akkurat har begynt.";
$review_3_text = "Tilpassbare grafer og rask utførelse — det har vært mitt førstevalg i flere måneder.";
$review_4_text = "Registrering tok mindre enn fem minutter, og dashbordet gjør det enkelt å se nøyaktig hvor pengene mine er.";
$review_5_text = "Jeg liker at plattformen forklarer resonnementet bak hvert signal, i stedet for bare å kaste tall på meg.";
$review_6_text = "Uttak har alltid vært raske for meg, og supportteamet svarer faktisk innen få minutter.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Ofte Stilte Spørsmål om $site_name";
$faq_q1 = "Kan $site_name oppdage markedsendringer i sanntid?";
$faq_a1 = "Ja. Den følger sanntidsdata, identifiserer momentumskifter i tidlige stadier og oppdager mønstre før de utvikler seg fullstendig, noe som gir brukerne en rettidig fordel.";
$faq_q2 = "Kan $site_name-opplevelsen tilpasses?";
$faq_a2 = "Ja. Brukere kan velge interesseområder, justere detaljnivået og følge offentlige strategier som matcher deres handelsstil eller læringsbehov.";
$faq_q3 = "Erstatter $site_name tradisjonelle forskningsmetoder?";
$faq_a3 = "Nei. Den forbedrer dem ved raskt å levere AI-filtrert innsikt, mens brukeren beholder full kontroll over sin egen forskning og beslutninger.";
$faq_cta = "Lær Mer Nå";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Høydepunkter";
$hl1_emoji = "🤖";
$hl1_title = "Registreringskostnad";
$hl1_desc = "Ingen kostnad for å registrere seg";
$hl2_emoji = "💰";
$hl2_title = "Handelsprovisjoner";
$hl2_desc = "Helt uten kostnader";
$hl3_emoji = "📋";
$hl3_title = "Enkel Registrering";
$hl3_desc = "Registrering er rask og enkel";
$hl4_emoji = "📊";
$hl4_title = "Utdanningsfokus";
$hl4_desc = "Leksjoner om krypto, Forex-handel og investering";
$hl5_emoji = "🌎";
$hl5_title = "Tilgjengelige Land";
$hl5_desc = "Ikke tilgjengelig i USA, tilgjengelig i de fleste andre land";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handle smart, voks med trygghet";
$footnav_about = "Om oss";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";
$footnav_contacts = "Kontakt";
$footnav_faq = "Ofte Stilte Spørsmål";
$footnav_privacy = "Personvernregler";
$footnav_conditions = "Bruksvilkår";
$footnav_risk = "Risikovarsel";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publiserer generelt undervisningsmateriell om handel, investering, finansmarkeder og digitale eiendeler. Artikler, markedsdata, grafer og annet nettstedinnhold er kun gitt for informasjonsformål og bør ikke betraktes som finansiell, investerings- eller juridisk rådgivning. Selv om vi bestreber oss på å gi pålitelig og oppdatert informasjon, kan vi ikke garantere nøyaktigheten eller fullstendigheten, og vi er ikke ansvarlige for tap som følge av å stole på innholdet.<br><br>Handel innebærer risiko, og kryptovaluta, Forex, CFD-er, aksjer og andre finansielle produkter kan variere betydelig i verdi. Vurder din egen økonomiske situasjon og risikotoleranse før du handler, og søk profesjonell rådgivning der det er nødvendig. Sett aldri inn penger du ikke har råd til å tape.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Handelsrådgiver";
$quiz_text_welcome = "Hei! Jeg er Sofia, din personlige handelsrådgiver. Har du noen minutter til å finne den beste planen for deg?";
$quiz_text_q1 = "Har du handlet før?";
$quiz_text_a1_yes = "Ja, jeg har erfaring";
$quiz_text_a1_no = "Nei, jeg er nybegynner";
$quiz_text_q2 = "Flott! Hva er fornavnet ditt slik at jeg kan tilpasse planen din?";
$quiz_text_q3 = "Hva er ditt hovedmål med handel?";
$quiz_text_a3_yes = "Bygge langsiktig velstand";
$quiz_text_a3_no = "Generere kortsiktig inntekt";
$quiz_text_q4 = "Hvor mye vil du starte med?";
$quiz_text_a4_1 = "Mindre enn $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Mer enn $1000";
$quiz_text_q5 = "Perfekt. Vil du at jeg åpner en gratis konto for deg nå?";
$quiz_text_a5_yes = "Ja, la oss gjøre det";
$quiz_text_a5_no = "Ikke nå";
$quiz_text_loader = "Finner den beste planen for deg...";
$quiz_text_final_ttl = "Alt er klart!";
$quiz_text_processing = "Detaljene dine sendes...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Etternavn";
$quiz_placeholder_email = "E-post";
$quiz_btn_submit = "Få Min Gratis Konto";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Hjem";
$bc_about = "Om oss";
$bc_product = "Produkt";
$bc_offer = "Tilbud";
$bc_contacts = "Kontakt";
$bc_faq = "Ofte Stilte Spørsmål";
$bc_privacy = "Personvernregler";
$bc_conditions = "Bruksvilkår";
$bc_risk = "Risikovarsel";
$bc_sign = "Registrering";
$bc_thanks = "Takk";
$bc_sitemap = "Nettstedkart";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Om $site_name";
$about_meta_description = "Lær om $site_name sitt oppdrag: å gjøre markedsanalyse klarere og mer tilgjengelig med AI-drevne verktøy.";
$about_h1 = "Om $site_name";
$about_lead = "$site_name er bygget rundt én idé: handelsbeslutninger bør baseres på klar informasjon, ikke gjetting.";
$about_p1 = "Vi kombinerer kunstig intelligens med reell markedserfaring for å omdanne komplekse, støyfylte data til signaler som er lette å forstå og handle på. Plattformen vår overvåker markedene dag og natt, slik at du ikke trenger å gjøre det.";
$about_p2 = "Enten du gjør din første handel eller har vært aktiv i markedene i årevis, er $site_name designet for å møte deg der du er — med verktøy som spenner fra enkel veiledning til avansert sanntidsanalyse.";
$about_p3 = "Vi tror teknologi bør støtte vurderingen din, ikke erstatte den. Hvert signal $site_name genererer er ment å informere en beslutning som fortsatt er helt din egen.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produkt — AI Markedsanalyseverktøy";
$product_meta_description = "Utforsk $site_name-produktet: AI-markedsanalyse i sanntid, copy trading, risikokontroll og automatisert diversifisering.";
$product_h1 = "$site_name-produktet";
$product_lead = "Én plattform som leser markedet for deg: sanntidsanalyse, copy trading og fleksible risikoverktøy, designet for å gjøre handelsbeslutninger klarere.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Tilbud — Start Gratis";
$offer_meta_description = "Se hva som er inkludert i det nåværende $site_name-tilbudet: gratis registrering, ingen handelsprovisjoner og full plattformtilgang.";
$offer_h1 = "Vårt nåværende tilbud";
$offer_lead = "Opprett kontoen din gratis og lås opp den fulle $site_name-plattformen &mdash; ingen registreringsavgifter, ingen handelsprovisjoner.";
$offer_li1 = "Ingen kostnad for å registrere kontoen din";
$offer_li2 = "Ingen provisjoner på transaksjoner";
$offer_li3 = "Full tilgang til AI-markedsanalyse i sanntid og copy trading";
$offer_li4 = "Uttak tilgjengelig når som helst, uten skjulte avgifter";
$offer_li5 = "Utdanningsressurser om krypto, Forex og investering inkludert";
$offer_note = "Tilgjengelighet kan variere etter region. Se vårt <a class=\"link\" href=\"risk-warning.php\">Risikovarsel</a> før du finansierer en konto.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontakt $site_name — Kom i kontakt med teamet vårt";
$contacts_meta_description = "Har du et spørsmål om $site_name-kontoen din eller plattformen? Kontakt supportteamet vårt via e-post eller send oss en melding.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Spørsmål om kontoen din, et innskudd, eller hvordan plattformen fungerer? Teamet vårt er klart til å hjelpe.";
$contacts_email_label = "E-post";
$contacts_hours_label = "Supporttider";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typisk Svartid";
$contacts_response_value = "Innen 24 timer";
$contacts_form_title = "Send Oss en Melding";
$contacts_form_desc = "Legg igjen detaljene dine nedenfor, så vil et medlem av teamet vårt kontakte deg direkte.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Personvernregler";
$privacy_meta_description = "Lær hvordan $site_name samler inn, bruker og beskytter dine personopplysninger på tvers av nettstedet og plattformen.";
$privacy_sections = [
    [
        "title" => "1. Innledning",
        "body" => "Disse Personvernreglene forklarer hvordan $site_name (\"vi\") samler inn, bruker og beskytter personopplysninger til besøkende og brukere av $site_domain (\"Nettstedet\"). Ved å bruke Nettstedet godtar du praksisene beskrevet nedenfor.",
    ],
    [
        "title" => "2. Informasjon Vi Samler Inn",
        "body" => "Vi kan samle inn informasjon du oppgir direkte, som navn, e-postadresse og telefonnummer ved registrering eller innsending av et skjema, samt automatisk innsamlet informasjon, inkludert IP-adressen din, enhets- og nettlesertype, og sider vist på Nettstedet.",
    ],
    [
        "title" => "3. Hvordan Vi Bruker Din Informasjon",
        "body" => "Vi bruker innsamlet informasjon til å opprette og administrere kontoen din, svare på henvendelser, gi kundestøtte, forbedre Nettstedet og tjenestene våre, og, der det er tillatt, sende oppdateringer om produkter og tilbud. Du kan når som helst melde deg av markedsføringskommunikasjon.",
    ],
    [
        "title" => "4. Informasjonskapsler og Sporingsteknologier",
        "body" => "Nettstedet bruker informasjonskapsler og lignende teknologier for å huske preferansene dine, holde deg innlogget og forstå hvordan besøkende bruker sidene våre. Du kan deaktivere informasjonskapsler via nettleserinnstillingene dine, selv om enkelte funksjoner kanskje ikke fungerer riktig.",
    ],
    [
        "title" => "5. Deling av Informasjon",
        "body" => "Vi selger ikke dine personopplysninger. Vi kan dele informasjon med pålitelige tjenesteleverandører som hjelper oss med å drive Nettstedet (som hosting- eller analyseleverandører), eller når det kreves av loven, eller for å beskytte våre juridiske rettigheter.",
    ],
    [
        "title" => "6. Datasikkerhet",
        "body" => "Vi anvender rimelige tekniske og organisatoriske tiltak for å beskytte informasjonen din mot uautorisert tilgang, endring eller tap. Ingen overførings- eller lagringsmetode er fullstendig sikker, og vi kan ikke garantere absolutt sikkerhet.",
    ],
    [
        "title" => "7. Dine Rettigheter og Valg",
        "body" => "Avhengig av din plassering kan du ha rett til å få tilgang til, korrigere eller be om sletting av personopplysningene dine, og motsette deg visse bruksområder av dem. For å utøve disse rettighetene, kontakt oss via vår <a class=\"link\" href=\"contacts.php\">kontaktside</a>.",
    ],
    [
        "title" => "8. Barns Personvern",
        "body" => "Nettstedet er ikke rettet mot personer under 18 år, og vi samler ikke bevisst inn personopplysninger fra mindreårige. Hvis du tror en mindreårig har gitt oss personopplysninger, kontakt oss slik at vi kan fjerne dem.",
    ],
    [
        "title" => "9. Endringer i Disse Reglene",
        "body" => "Vi kan oppdatere disse Personvernreglene fra tid til annen. Eventuelle endringer vil bli publisert på denne siden med en revidert ikrafttredelsesdato. Vi oppfordrer deg til å sjekke denne siden regelmessig.",
    ],
    [
        "title" => "10. Kontakt Oss",
        "body" => "Hvis du har spørsmål om disse Personvernreglene eller hvordan informasjonen din håndteres, kontakt oss via vår <a class=\"link\" href=\"contacts.php\">kontaktside</a> eller e-post oss på info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Bruksvilkår";
$conditions_meta_description = "Gjennomgå Bruksvilkårene som regulerer tilgang til og bruk av $site_name sitt nettsted og handelsplattform.";
$conditions_sections = [
    [
        "title" => "1. Aksept av Vilkår",
        "body" => "Ved å få tilgang til eller bruke $site_domain (\"Nettstedet\"), godtar du å være bundet av disse Bruksvilkårene. Hvis du ikke godtar noen del av disse vilkårene, bør du ikke bruke Nettstedet.",
    ],
    [
        "title" => "2. Kvalifikasjon",
        "body" => "Du må være minst 18 år gammel og ha juridisk kapasitet til å bruke handelsrelaterte tjenester i din jurisdiksjon for å bruke Nettstedet. Ved å bruke Nettstedet bekrefter du at du oppfyller disse kravene.",
    ],
    [
        "title" => "3. Beskrivelse av Tjenesten",
        "body" => "$site_name tilbyr en nettbasert plattform med undervisningsinnhold, markedsinformasjon og AI-støttede analyseverktøy. Ingenting på Nettstedet utgjør finansiell, investerings-, skatte- eller juridisk rådgivning, og all informasjon som gis er kun for generelle informasjonsformål.",
    ],
    [
        "title" => "4. Brukerens Ansvar",
        "body" => "Du er ansvarlig for å gi nøyaktig informasjon ved registrering, for å opprettholde konfidensialiteten til kontolegitimasjonen din, og for alle aktiviteter som skjer under kontoen din.",
    ],
    [
        "title" => "5. Immaterielle Rettigheter",
        "body" => "Alt innhold på Nettstedet, inkludert tekst, bilder, logoer og programvare, eies av $site_name eller dets lisensgivere og er beskyttet av gjeldende lover om immaterielle rettigheter. Du kan ikke reprodusere eller distribuere dette innholdet uten tillatelse.",
    ],
    [
        "title" => "6. Ingen Finansiell Rådgivning",
        "body" => "Innhold på Nettstedet er gitt kun for informasjons- og undervisningsformål og bør ikke tolkes som finansiell rådgivning. Du er alene ansvarlig for dine egne handelsbeslutninger og bør konsultere en uavhengig finansiell rådgiver der det er nødvendig. Se vårt <a class=\"link\" href=\"risk-warning.php\">Risikovarsel</a> for å lære mer.",
    ],
    [
        "title" => "7. Ansvarsbegrensning",
        "body" => "I den grad loven tillater det, er $site_name ikke ansvarlig for direkte, indirekte, tilfeldige eller følgeskader som oppstår fra din bruk av, eller manglende evne til å bruke, Nettstedet eller tilknyttede tredjepartstjenester.",
    ],
    [
        "title" => "8. Oppsigelse",
        "body" => "Vi forbeholder oss retten til å suspendere eller avslutte tilgangen din til Nettstedet etter eget skjønn, uten varsel, for atferd vi mener bryter disse Bruksvilkårene eller på annen måte er skadelig for andre brukere eller Nettstedet.",
    ],
    [
        "title" => "9. Endringer i Disse Vilkårene",
        "body" => "Vi kan revidere disse Bruksvilkårene når som helst. Fortsatt bruk av Nettstedet etter at endringer er publisert utgjør aksept av de oppdaterte vilkårene.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Spørsmål om disse Bruksvilkårene kan rettes til teamet vårt via <a class=\"link\" href=\"contacts.php\">kontaktsiden</a> eller via e-post til info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikovarsel — Offentliggjøring av Handelsrisiko";
$risk_meta_description = "Les $site_name sitt risikovarsel før du handler: krypto-markedsrisiko, gearing, likviditet, cybersikkerhet og regulatoriske hensyn.";
$risk_title = "Risikovarsel";
$risk_intro = "Å forstå risiko er det første skrittet mot selvsikker handel.";
$risk_ai_title = "Hvordan vårt AI-system hjelper med risikostyring:";
$risk_ai_1_title = "Algoritmisk Effektivitet og Følelsesløs Handel:";
$risk_ai_1_text = "Avanserte algoritmer analyserer markedssignaler for å utføre transaksjoner objektivt på optimale tidspunkter.";
$risk_ai_2_title = "Datadrevne Strategier:";
$risk_ai_2_text = "Strategier er basert på verifiserte markedsmønstre og sanntidsanalyse, ikke gjetting.";
$risk_ai_3_title = "Fleksible Innstillinger og Full Kontroll:";
$risk_ai_3_text = "Juster risikoparametrene dine når som helst. Følg alle saldoer og transaksjoner transparent på dashbordet ditt, uten skjulte avgifter og uten uttaksbegrensninger.";
$risk_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel innebærer alltid risiko. Automatiserte systemer (inkludert AI) garanterer ikke profitt, kan feile på grunn av programvarefeil eller uventede markedshendelser, og krever brukertilsyn. Tidligere resultater garanterer ikke fremtidige resultater. Denne plattformen tjener kun informasjons- og markedsføringsformål og gir ikke finansiell rådgivning.";
$risk_s1_title = "1. Generell Krypto-Markedsrisiko";
$risk_s1_text = "Kryptovaluta er svært volatile, spekulative eiendeler som opererer 24/7 med minimalt regulatorisk tilsyn i de fleste jurisdiksjoner.";
$risk_s1_li1 = "Verdier kan svinge dramatisk innenfor korte perioder, potensielt føre til et totalt tap av investert kapital.";
$risk_s1_li2 = "Markedsverdier kan påvirkes sterkt av regulatoriske endringer, teknologisk utvikling, sikkerhetsbrudd eller bredere makroøkonomiske hendelser.";
$risk_s1_li3 = "Noen eiendeler kan miste hele sin verdi. Invester bare midler du har råd til å tape.";
$risk_s2_title = "2. Utførelses-, Likviditets- og Gearingrisiko";
$risk_s2_li1_title = "Markedsvolatilitet og Likviditet:";
$risk_s2_li1_text = "Ekstreme prisbevegelser (10-20%+ daglig) eller lav likviditet (spesielt i mindre mynter) kan forårsake forsinkelser, plattformsvikt og alvorlig utførelsesslippage. Stop-loss-ordrer garanterer kanskje ikke tapsgrenser under ekstreme forhold.";
$risk_s2_li2_title = "Gearing- og Marginrisiko:";
$risk_s2_li2_text = "Gearede produkter forsterker både gevinster og tap, noe som betyr at du kan tape mer enn ditt opprinnelige innskudd. Omtrent 70-80% av detaljinvestorkontoer taper penger når de handler gearede produkter.";
$risk_s3_title = "3. Teknisk, Cybersikkerhets- og Tredjepartsrisiko";
$risk_s3_li1_title = "Tekniske Faktorer:";
$risk_s3_li1_text = "Nettbasert handel innebærer iboende risikoer for internettforbindelsessvikt, maskinvare-/programvarefeil og utilgjengelighet av tjenesten.";
$risk_s3_li2_title = "Cybersikkerhet:";
$risk_s3_li2_text = "Kryptokontoer er hyppige mål for phishing, skadevare og hacking. Transaksjoner er irreversible; kompromittering av påloggingsinformasjonen din kan føre til permanent tap.";
$risk_s3_li3_title = "Tredjepartsplattformer:";
$risk_s3_li3_text = "Dette nettstedet kan koble brukere til tredjepartsplattformer. Vi kontrollerer, godkjenner eller garanterer ikke deres sikkerhet, drift eller solvens. Utfør alltid din egen grundige due diligence før du setter inn midler på eksterne plattformer.";
$risk_s4_title = "4. Regulatoriske, Skatte- og Sluttbestemmelser";
$risk_s4_li1_title = "Juridisk Overholdelse og Skatter:";
$risk_s4_li1_text = "Regulatoriske rammeverk varierer sterkt og endres raskt. Brukere er alene ansvarlige for å sikre at deres handelsaktiviteter overholder lokale lover og for å oppfylle sine egne skatteforpliktelser.";
$risk_s4_li2_title = "Ingen Profittgarantier:";
$risk_s4_li2_text = "Det finnes ingen \"sikker\" eller risikofri kryptohandel. Eventuelle oppgitte avkastningstall eller ytelseseksempler er rent hypotetiske.";
$risk_s4_li3_title = "Egnethet:";
$risk_s4_li3_text = "Hvis du ikke fullt ut forstår risikoene, er avhengig av essensielle midler, eller handler med lånte penger, er kryptohandel ikke egnet for deg. Rådfør deg med en uavhengig, lisensiert finansiell rådgiver ved tvil.";
$risk_contact = "<strong>Kontakt:</strong> For spørsmål om denne uttalelsen, eller for å sende inn en forespørsel, vennligst kontakt vårt offisielle kundeserviceteam via kontaktskjemaet på nettstedet vårt.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrering | $site_name — Opprett Din Gratis Konto";
$sign_meta_description = "Opprett din gratis $site_name-konto på minutter og begynn å handle smartere med AI-drevet markedsanalyse.";
$sign_h1 = "Opprett Din Gratis Konto";
$sign_lead = "Bli med i $site_name på minutter. Fyll ut detaljene dine nedenfor for å komme i gang.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Takk | $site_name";
$thanks_h1 = "Takk!";
$thanks_text = "Detaljene dine er mottatt. Et medlem av $site_name-teamet vil kontakte deg snart for å hjelpe deg i gang.";
$thanks_btn = "Tilbake til Hjem";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Nettstedkart | $site_name";
$sitemap_meta_description = "Se hver side på $site_name sitt nettsted, inkludert handelsplattformen, tilbudet, support og juridiske sider.";
$sitemap_h1 = "Nettstedkart";
$sitemap_lead = "Hver side av $site_name på ett sted.";

