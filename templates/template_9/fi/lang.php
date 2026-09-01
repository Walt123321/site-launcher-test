<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fi-FI';
$form_language = 'fi'; // matches this page's own language, not the offer's global default

// ============================================================
// FI TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Virallinen Verkkosivusto | Kaupankäyntialusta";
$home_meta_description = "$site_name tarjoaa käyttäjäystävällisen kaupankäyntialustan, jossa on edistyneet markkinatyökalut, reaaliaikaiset näkemykset ja käytännölliset ominaisuudet, jotka on suunniteltu tekemään verkkokaupankäynnistä helpommin lähestyttävää ja tietoisempaa.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name-alusta";
$hero_subtitle = "Tuemme miljoonia ihmisiä ympäri maailmaa heidän digitaalisten omaisuuserien matkallaan";
$hero_badge_title = "Tyytyväiset Jäsenet";
$hero_badge_subtitle = "Miljoonien rakastama";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Aloita Kaupankäynti Tänään";
$form_desc = "Valmis tekemään siirtosi? Rekisteröidy nyt ja ota ensimmäinen askel kohti taloudellista vapautta. Aloita vain $app_price $app_currency:lla — pääset käsiksi kaikkiin kaupankäyntityökaluihin, reaaliaikaisiin markkinatietoihin ja täyteen alustan käyttöoikeuteen heti ensimmäisestä päivästä alkaen.";
$form_fname_placeholder = "Etunimi";
$form_lname_placeholder = "Sukunimi";
$form_email_placeholder = "Sähköposti";
$form_btn_submit = "Rekisteröidy";
$form_disclaimer_text = "Antamalla henkilötietosi ja napsauttamalla painiketta hyväksyt sivuston <a class=\"link\" href=\"privacy.php\">Tietosuojakäytännön</a> ja <a class=\"link\" href=\"conditions.php\">Käyttöehdot</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "TURVALLINEN";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Tutustu Alustaan";
$stats_title = "Nopea johdatus älykkäämpään kaupankäyntiin";
$stat_1_value = "154+";
$stat_1_label = "Katettua Maata";
$stat_2_value = "29 Miljoonaa";
$stat_2_label = "Globaalia Sijoittajaa";
$stat_3_value = "635+";
$stat_3_label = "Kolikkoa";
$stat_4_value = "3,26 Miljardia $";
$stat_4_label = "24h Kaupankäyntivolyymi";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Miksi $site_name?";
$why_title = "Syitä Valita Meidät";
$why_1_title = "Nopea &amp; Helppo";
$why_1_text = "Osta ja myy suosikkikryptovaluuttojasi sekunneissa.";
$why_2_title = "Turvallinen &amp; Suojattu";
$why_2_text = "Käytämme uusinta teknologiaa pitääksemme varasi ja tietosi turvassa.";
$why_3_title = "Avoin Kaikille";
$why_3_text = "Käy kauppaa alustallamme 24/7, missä ja milloin tahansa haluat.";
$why_4_title = "Ammattilaistyökalut";
$why_4_text = "Yksinkertaisista ammattimaisiin kaupankäyntiominaisuuksiin, meillä on kaikki.";
$why_5_title = "Trendit &amp; Näkemykset";
$why_5_text = "Saat uusimmat kryptouutiset, näkemykset ja trendit asiantuntijoilta.";
$why_6_title = "Tuki 24/7";
$why_6_text = "Ystävällinen tukitiimimme on täällä auttamassa milloin tahansa.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Näin Se Toimii";
$how_title = "Helpot Vaiheet Kaupankäynnin Aloittamiseen";
$how_1_title = "Rekisteröidy";
$how_1_text = "Luo tili ja aloita kaupankäynti muutamassa minuutissa.";
$how_1_btn = "Aloita Kaupankäynti";
$how_2_title = "Talleta Varoja";
$how_2_text = "Rahoita tilisi vähintään $app_price $app_currency:n talletuksella avataksesi täyden kaupankäyntioikeuden. Valitse useista maksutavoista ja aloita salkkusi kasvattaminen jo tänään.";
$how_2_note = "Lisää varoja....";
$how_3_title = "Aloita Kaupankäynti";
$how_3_text = "Tutustu markkinoihin ja käy kauppaa omalla tavallasi.";
$how_3_note = "Osta ja Pidä";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Laskuri";
$calc_title = "Katso, kuinka paljon aikaa ja potentiaalia jätät käyttämättä";
$calc_volume_label = "Kuukausittainen Kaupankäyntivolyymi";
$calc_trades_label = "Kauppoja Viikossa";
$calc_time_label = "Aika, Jonka Voisit Säästää";
$calc_boost_label = "Mahdollinen Volyymin Kasvu";
$calc_btn = "Aloita Kaupankäynti";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Ominaisuudet";
$features_title = "$site_name:n Voima";
$feature_1_title = "Spot-kaupankäynti";
$feature_1_text = "Maksimoi kaupankäyntipotentiaalisi ammattilaistyökaluilla.";
$feature_2_title = "Osta Kryptoa";
$feature_2_text = "Osta kryptoa korteilla tai pankeilla.";
$feature_3_title = "Kryptojohdannaiset";
$feature_3_text = "Helppoa, edistynyttä futuurikauppaa.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Kasvata varallisuuttasi vaivattomasti.";
$feature_5_title = "Kaupankäyntibotti";
$feature_5_text = "Suurempia voittoja, jopa nukkuessasi.";
$feature_6_title = "Vipuvaikutteinen Kaupankäynti";
$feature_6_text = "Lainaa, käy kauppaa ja maksa takaisin helposti.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Mitä Käyttäjämme Sanovat";
$review_1_text = "Alusta on erittäin helppokäyttöinen, ja olen nähnyt tasaista edistystä siitä lähtien, kun minusta tuli haltija. Tiimin sitoutuminen ja tuoreet ideat saavat minut odottamaan innolla, mitä seuraavaksi tapahtuu!";
$review_1_role = "Treidaaja";
$review_2_text = "$site_name tarjoaa sujuvan ja intuitiivisen kaupankäyntikokemuksen. Pystyin aloittamaan kryptojen ostamisen ja kaupankäynnin heti. Käyttöliittymä on helppokäyttöinen, ja tapahtumanopeudet ovat erinomaiset!";
$review_2_role = "Uusi Treidaaja";
$review_3_text = "Luotan tähän alustaan kryptosijoitusteni hallinnoinnissa. Sen turvaominaisuudet antavat minulle luottamusta, enkä ole koskaan kokenut ongelmia nostojen tai talletusten kanssa. Se on yksi luotettavimmista pörsseistä, joita olen käyttänyt.";
$review_3_role = "Ammattitreidaaja";
$review_4_text = "Aina kun minulla on ollut kysymyksiä, asiakastukitiimi on ollut nopea ja avulias. He välittävät aidosti käyttäjistään ja tekevät jokaisesta kaupankäyntikokemuksesta sujuvan ja yksinkertaisen.";
$review_4_role = "Kokenut Treidaaja";
$review_5_text = "Aloittelijana koin $site_name:n erittäin helppokäyttöiseksi. Se, mikä todella erottuu, on kokeneemmille treidaajille tarkoitettujen edistyneiden työkalujen valikoima. Se on hyvä valinta kaikille, jotka haluavat rakentaa salkkuaan!";
$review_5_role = "Yhteisön Treidaaja";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Usein Kysytyt Kysymykset";
$faq_title = "Usein Kysytyt Kysymykset";
$faq_q1 = "Mikä on $site_name?";
$faq_a1 = "$site_name on kryptopörssi, jossa käyttäjät voivat helposti käydä kauppaa laajalla valikoimalla kolikoita, mukaan lukien Bitcoin, Ethereum ja muut suositut kryptovaluutat.";
$faq_q2 = "Kuinka Turvallinen $site_name On Kryptokaupankäyntiin?";
$faq_a2 = "Alusta tarjoaa turvallisuutta edistyneen teknologian ja 1:1-omaisuuskatteen avulla Proof of Reserves -menetelmällä.";
$faq_q3 = "Miten Teen Talletuksen?";
$faq_a3 = "$site_name tarjoaa useita talletusvaihtoehtoja, mukaan lukien kryptotalletuksen, fiat-talletuksen, P2P-kaupankäynnin ja One-Click Buy -ostoksen.";
$faq_q4 = "Tarvitsenko Kokemusta Käyttääkseni $site_name:a?";
$faq_a4 = "Ei, et tarvitse minkäänlaista kokemusta. Alustan helppokäyttöinen käyttöliittymä tekee siitä helposti lähestyttävän kaikille, aloittelijoista edistyneisiin treidaajiin.";
$faq_q5 = "Onko olemassa piilokuluja tai maksuja?";
$faq_a5 = "Ei lainkaan. Rekisteröitymismaksuja, tilausmaksuja tai piilokuluja ei ole minkäänlaisia. Näet aina tarkan tapahtumasumman ennen vahvistamista. Tulot tulevat premium-ominaisuuksista ja pörssikumppanuuksista, ei käyttäjiltä otetuista rahoista.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Aloita Kaupankäynti Tänään";
$cta_desc = "Valmis tekemään siirtosi? Rekisteröidy nyt ja ota ensimmäinen askel kohti taloudellista riippumattomuutta.";
$cta_btn = "Rekisteröidy";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "$site_name-kaupankäyntialustan Tärkeimmät Ominaisuudet";
$table_1_label = "🤖 Alustan Teknologia";
$table_1_val = "Edistynyt AI-kaupankäyntimoottori";
$table_2_label = "💳 Rahoitustavat";
$table_2_val = "Yleisimmät Luottokortit, Pankkisiirto, PayPal";
$table_3_label = "📱 Alustan Käyttö";
$table_3_val = "Yhteensopivuus Useilla Laitteilla";
$table_4_label = "🚀 Suorituskyky";
$table_4_val = "85 % Tarkkuus";
$table_5_label = "📊 Kaupankäyntivälineet";
$table_5_val = "Osakkeet, Forex, Hyödykkeet, Jalometallit, CFD:t, Kryptovaluutat ja lisää…";
$table_6_label = "✍️ Tilin Perustaminen";
$table_6_val = "Nopea ja Tehokas";
$table_7_label = "📞 Asiakastuki";
$table_7_val = "24/7 Ammattimaista Apua";

// Reviews summary card
$summary_title = "$site_name-arvostelut";
$summary_badge = "Luotettava";
$summary_desc = "Tehokas, käyttäjäystävällinen kaupankäyntialusta, jossa on vankka automaatio ja koulutusresursseja.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Käy kauppaa viisaasti, kasva nopeasti";
$footer_community_label = "Yhteisö";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Tuote";
$footnav_offer = "Tarjous";
$footnav_contacts = "Ota yhteyttä";
$footnav_faq = "Usein Kysytyt Kysymykset";
$footnav_privacy = "Tietosuojakäytäntö";
$footnav_conditions = "Käyttöehdot";
$footnav_risk = "Riskivaroitus";
$footer_disclaimer = "$site_name jakaa koulutusresursseja ja markkinoihin liittyvää materiaalia auttaakseen kävijöitä ymmärtämään paremmin kaupankäyntiä, sijoittamista ja digitaalisia rahoitustuotteita. Sivustolla esitetyt tiedot, kuten markkinakommentit, omaisuuserien hinnat, kaaviot, oppaat ja analyyttinen sisältö, on tarkoitettu yleisiin tiedotustarkoituksiin, eivätkä ne muodosta rahoitus-, sijoitus-, vero- tai oikeudellista neuvontaa. Vaikka kohtuullisia toimenpiteitä tehdään tarkkojen ja relevanttien tietojen ylläpitämiseksi, $site_name ei anna takuita sisällön täydellisyydestä, tarkkuudesta tai ajantasaisuudesta, eikä sitä voida pitää vastuussa sen käytöstä johtuvista päätöksistä tai tappioista.<br><br>Osallistuminen rahoitusmarkkinoille sisältää luontaisia riskejä. Kryptovaluutta, Forex, CFD:t, osakkeet ja muut kaupankäyntivälineet voivat kokea merkittäviä hintavaihteluita, ja tappioita voi syntyä. Yksilölliset olosuhteet ja riskinsietokyky vaihtelevat, joten käyttäjien tulisi tehdä oma tutkimuksensa ja harkita neuvojen hankkimista pätevältä rahoitusalan ammattilaiselta ennen varojen sitomista. Älä koskaan käy kauppaa rahalla, jonka menettämiseen sinulla ei ole varaa.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Kaupankäyntikonsultti";
$quiz_text_welcome = "Hei! Olen Maya, henkilökohtainen kaupankäyntikonsulttisi. Onko sinulla pari minuuttia aikaa löytää sinulle paras suunnitelma?";
$quiz_text_q1 = "Oletko käynyt kauppaa kryptovaluutalla aiemmin?";
$quiz_text_a1_yes = "Kyllä, minulla on kokemusta";
$quiz_text_a1_no = "Ei, olen aloittelija";
$quiz_text_q2 = "Loistavaa! Mikä on etunimesi, jotta voin personoida suunnitelmasi?";
$quiz_text_q3 = "Mikä on päätavoitteesi kaupankäynnissä?";
$quiz_text_a3_yes = "Rakenna pitkäaikaista varallisuutta";
$quiz_text_a3_no = "Luo lyhytaikaista tuloa";
$quiz_text_q4 = "Kuinka paljon haluat aloittaa?";
$quiz_text_a4_1 = "Alle $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Yli $1000";
$quiz_text_q5 = "Täydellistä. Haluatko, että avaan sinulle ilmaisen tilin nyt?";
$quiz_text_a5_yes = "Kyllä, tehdään se";
$quiz_text_a5_no = "Ei juuri nyt";
$quiz_text_loader = "Etsitään paras suunnitelmasi...";
$quiz_text_final_ttl = "Kaikki on valmista!";
$quiz_text_processing = "Tietosi lähetetään...";
$quiz_text_typing = "kirjoittaa...";
$quiz_placeholder_fname = "Etunimi";
$quiz_placeholder_lname = "Sukunimi";
$quiz_placeholder_email = "Sähköposti";
$quiz_btn_submit = "Hanki Ilmainen Tilini";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Riskivaroitus — Kaupankäyntiriskien Tiedottaminen";
$risk_meta_description = "Lue $site_name:n riskivaroitus ennen kaupankäyntiä: kryptovaluuttamarkkinoiden riskit, vipuvaikutus, likviditeetti, kyberturvallisuus ja sääntelyyn liittyvät näkökohdat.";
$risk_title = "Riskivaroitus";
$risk_intro = "Riskien ymmärtäminen on ensimmäinen askel kohti luottavaista kaupankäyntiä.";
$risk_ai_title = "Näin AI-järjestelmämme Auttaa Hallitsemaan Riskiä:";
$risk_ai_1_title = "Algoritminen Tehokkuus &amp; Tunteeton Kaupankäynti:";
$risk_ai_1_text = "Edistyneet algoritmit analysoivat markkinasignaaleja suorittaakseen kauppoja objektiivisesti optimaalisina ajankohtina.";
$risk_ai_2_title = "Datalähtöiset Strategiat:";
$risk_ai_2_text = "Strategiat perustuvat todennettuihin markkinamalleihin ja reaaliaikaiseen analyysiin arvailun sijaan.";
$risk_ai_3_title = "Joustavat Asetukset &amp; Täysi Hallinta:";
$risk_ai_3_text = "Säädä riskiparametrejasi milloin tahansa. Seuraa kaikkia saldoja ja kauppoja läpinäkyvästi hallintapaneelissasi ilman piilokuluja ja rajoituksetta nostoja.";
$risk_disclaimer = "<strong>Vastuuvapauslauseke:</strong> Kaupankäyntiin liittyy aina riski. Automatisoidut järjestelmät (mukaan lukien AI) eivät takaa voittoa, voivat epäonnistua ohjelmistovirheiden tai odottamattomien markkinatapahtumien vuoksi, ja vaativat käyttäjän valvontaa. Aiempi tuotto ei ole tae tulevasta tuotosta. Tämä alusta palvelee puhtaasti tiedotus- ja markkinointitarkoituksiin eikä tarjoa rahoitusneuvontaa.";
$risk_s1_title = "1. Yleiset &amp; Kryptovaluuttamarkkinoiden Riskit";
$risk_s1_text = "Kryptovaluutat ovat erittäin volatiileja, spekulatiivisia omaisuuseriä, jotka toimivat 24/7 minimaalisella sääntelyvalvonnalla useimmilla lainkäyttöalueilla.";
$risk_s1_li1 = "Arvot voivat vaihdella dramaattisesti lyhyessä ajassa, mikä voi johtaa sijoitetun pääoman täydelliseen menettämiseen.";
$risk_s1_li2 = "Markkina-arvoihin voivat vaikuttaa voimakkaasti sääntelymuutokset, tekninen kehitys, tietoturvaloukkaukset tai laajemmat makrotaloudelliset tapahtumat.";
$risk_s1_li3 = "Jotkin omaisuuserät voivat menettää arvonsa kokonaan. Sijoita vain varoja, joiden menettämiseen sinulla on varaa.";
$risk_s2_title = "2. Toteutus-, Likviditeetti- &amp; Vipuvaikutusriskit";
$risk_s2_li1_title = "Markkinavolatiliteetti &amp; Likviditeetti:";
$risk_s2_li1_text = "Äärimmäiset hintaliikkeet (10–20 %+ päivässä) tai alhainen likviditeetti (erityisesti pienemmissä kolikoissa) voivat johtaa viivästyksiin, alustan käyttökatkoihin ja vakavaan toteutuksen liukumaan. Stop-loss-toimeksiannot eivät voi taata tappiorajoja äärimmäisissä olosuhteissa.";
$risk_s2_li2_title = "Vipuvaikutus- &amp; Marginaaliriskit:";
$risk_s2_li2_text = "Vipuvaikutteiset tuotteet vahvistavat sekä voittoja että tappioita, mikä tarkoittaa, että voit menettää enemmän kuin alkuperäisen talletuksesi. <em>Noin 70–80 % vähittäissijoittajien tileistä menettää rahaa käydessään kauppaa vipuvaikutteisilla tuotteilla.</em>";
$risk_s3_title = "3. Tekniset, Kyberturvallisuus- &amp; Kolmannen Osapuolen Riskit";
$risk_s3_li1_title = "Tekniset Tekijät:";
$risk_s3_li1_text = "Verkossa tapahtuvaan kaupankäyntiin liittyy luontaisesti riskejä internetyhteyden katkeamisesta, laitteisto-/ohjelmistovirheistä ja palvelun saatavuuden puutteesta.";
$risk_s3_li2_title = "Kyberturvallisuus:";
$risk_s3_li2_text = "Kryptovaluuttatilit ovat yleisiä kohteita phishingille, haittaohjelmille ja hakkeroinnille. Tapahtumat ovat peruuttamattomia; kirjautumistietojesi vaarantuminen voi johtaa pysyvään menetykseen.";
$risk_s3_li3_title = "Kolmannen Osapuolen Alustat:";
$risk_s3_li3_text = "Tämä verkkosivusto voi yhdistää käyttäjiä kolmannen osapuolen alustoihin. Emme valvo, suosittele tai takaa niiden turvallisuutta, toimintaa tai vakavaraisuutta. Suorita aina oma perusteellinen due diligence -tarkastuksesi ennen varojen tallettamista ulkoisiin alustoihin.";
$risk_s4_title = "4. Sääntely-, Vero- &amp; Loppusäännökset";
$risk_s4_li1_title = "Lakisääteinen Vaatimustenmukaisuus &amp; Verot:";
$risk_s4_li1_text = "Sääntelykehykset vaihtelevat suuresti ja muuttuvat nopeasti. Käyttäjät ovat yksin vastuussa siitä, että heidän kaupankäyntitoimintansa noudattaa paikallisia lakeja, ja omien verovelvoitteidensa täyttämisestä.";
$risk_s4_li2_title = "Ei Voittotakuita:";
$risk_s4_li2_text = "Ei ole olemassa \"turvallista\" tai riskitöntä kryptokaupankäyntiä. Kaikki annetut tuottoluvut tai suorituskykyesimerkit ovat puhtaasti hypoteettisia.";
$risk_s4_li3_title = "Soveltuvuus:";
$risk_s4_li3_text = "Jos et täysin ymmärrä riskejä, luotat välttämättömiin varoihin tai käyt kauppaa lainatulla rahalla, kryptokaupankäynti ei sovi sinulle. Konsultoi riippumatonta, lisensoitua rahoitusneuvojaa, jos olet epävarma.";
$risk_contact = "<strong>Yhteystiedot:</strong> Jos sinulla on kysymyksiä tästä lausunnosta tai haluat lähettää tiedustelun, ota yhteyttä viralliseen asiakastukitiimiimme verkkosivustomme yhteydenottolomakkeen kautta.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Etusivu";
$bc_product = "Tuote";
$bc_offer = "Tarjous";
$bc_contacts = "Ota yhteyttä";
$bc_faq = "Usein Kysytyt Kysymykset";
$bc_privacy = "Tietosuojakäytäntö";
$bc_conditions = "Käyttöehdot";
$bc_risk = "Riskivaroitus";
$bc_sign = "Rekisteröidy";
$bc_sitemap = "Sivukartta";
$bc_thanks = "Kiitos";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Tuote — Kaupankäyntityökalut &amp; Alustan Ominaisuudet";
$product_meta_description = "Tutustu $site_name-tuotteeseen: spot-kaupankäynti, kryptojohdannaiset, kaupankäyntibotti, vipuvaikutteinen kaupankäynti ja paljon muuta, kaikki rakennettu nopealle ja turvalliselle alustalle.";
$product_h1 = "$site_name Kaupankäyntituote";
$product_lead = "Yksi alusta, jokainen työkalu, jota treidaaja tarvitsee: ensimmäisestä spot-kaupastasi automatisoituihin strategioihin ja vipuvaikutteisiin positioihin, $site_name pitää kokemuksen nopeana, turvallisena ja helposti ymmärrettävänä.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Tarjous — Aloita Kaupankäynti Alkaen $$app_price";
$offer_meta_description = "Katso, mitä nykyinen $site_name-tarjous sisältää: alhainen $$app_price vähimmäistalletus, täysi alustan käyttöoikeus ja ei piilokuluja.";
$offer_h1 = "Nykyinen Tarjouksemme";
$offer_lead = "Aloita jo <strong>$$app_price $app_currency</strong>:lla ja avaa täysi $site_name-alusta ensimmäisestä päivästä alkaen &mdash; jokainen työkalu, jokainen markkina, ei piilokuluja.";
$offer_li1 = "Vain $$app_price $app_currency:n vähimmäistalletus tilisi aktivoimiseksi";
$offer_li2 = "Täysi pääsy spot-kaupankäyntiin, johdannaisiin, marginaaliin ja kaupankäyntibottiin";
$offer_li3 = "Useita rahoitustapoja, mukaan lukien kortit ja pankkisiirto";
$offer_li4 = "Ei rekisteröitymismaksuja, ei tilausmaksuja, ei piilokuluja";
$offer_li5 = "Asiakastuki 24/7 aloittaessasi";
$offer_note = "Talletussummat ja käytettävissä olevat maksutavat voivat vaihdella alueittain. Tutustu <a class=\"link\" href=\"risk-warning.php\">Riskivaroitukseemme</a> ennen tilin rahoittamista.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Ota Yhteyttä $site_name:iin — Ota Yhteyttä Tiimiimme";
$contacts_meta_description = "Onko sinulla kysymys $site_name-tilistäsi tai alustasta? Ota yhteyttä tukitiimiimme sähköpostitse tai lähetä meille viesti, niin vastaamme sinulle.";
$contacts_h1 = "Ota Yhteyttä";
$contacts_lead = "Kysymyksiä tilistäsi, talletuksesta tai alustan toiminnasta? Tiimimme on täällä auttamassa.";
$contacts_email_label = "Sähköposti";
$contacts_hours_label = "Tukiajat";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tyypillinen Vastausaika";
$contacts_response_value = "24 tunnin sisällä";
$contacts_form_title = "Lähetä Meille Viesti";
$contacts_form_desc = "Jätä tietosi alle, niin tiimimme jäsen ottaa sinuun suoraan yhteyttä.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Usein Kysytyt Kysymykset";
$faq_meta_description = "Vastauksia yleisimpiin kysymyksiin $site_name-tilin luomisesta, talletuksen tekemisestä, alustan turvallisuudesta ja maksuista.";
$faq_page_lead = "Kaikki, mitä sinun tarvitsee tietää ennen kaupankäynnin aloittamista. Etkö löydä vastaustasi? <a class=\"link\" href=\"contacts.php\">Ota yhteyttä tiimiimme</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Tietosuojakäytäntö";
$privacy_meta_description = "Ota selvää, kuinka $site_name kerää, käyttää ja suojaa henkilötietojasi verkkosivustolla ja alustalla.";
$privacy_sections = [
    [
        "title" => "1. Johdanto",
        "body" => "Tämä Tietosuojakäytäntö selittää, kuinka $site_name (\"me\") kerää, käyttää ja suojaa $site_domain:n (\"Verkkosivusto\") kävijöiden ja käyttäjien henkilötietoja. Käyttämällä Verkkosivustoa hyväksyt alla kuvatut käytännöt.",
    ],
    [
        "title" => "2. Keräämämme Tiedot",
        "body" => "Voimme kerätä tietoja, jotka annat suoraan, kuten nimesi, sähköpostiosoitteesi ja puhelinnumerosi rekisteröityessäsi tai lähettäessäsi lomakkeen, sekä automaattisesti kerättyjä tietoja, mukaan lukien IP-osoitteesi, laite- ja selaintyyppisi sekä Verkkosivustolla katsotut sivut.",
    ],
    [
        "title" => "3. Kuinka Käytämme Tietojasi",
        "body" => "Käytämme kerättyjä tietoja tilisi luomiseen ja hallintaan, tiedusteluihin vastaamiseen, asiakastuen tarjoamiseen, Verkkosivuston ja palveluidemme parantamiseen, ja sallituissa tapauksissa tuotteita ja tarjouksia koskevien päivitysten lähettämiseen. Voit peruuttaa markkinointiviestinnän milloin tahansa.",
    ],
    [
        "title" => "4. Evästeet &amp; Seurantateknologiat",
        "body" => "Verkkosivusto käyttää evästeitä ja vastaavia teknologioita muistaakseen asetuksesi, pitääkseen sinut kirjautuneena ja ymmärtääkseen, kuinka kävijät käyttävät sivujamme. Voit poistaa evästeet käytöstä selaimesi asetuksista, vaikka jotkin ominaisuudet eivät välttämättä toimi tämän seurauksena oikein.",
    ],
    [
        "title" => "5. Tietojen Jakaminen",
        "body" => "Emme myy henkilötietojasi. Voimme jakaa tietoja luotettujen palveluntarjoajien kanssa, jotka auttavat meitä ylläpitämään Verkkosivustoa (kuten hosting- tai analytiikkapalveluntarjoajat), tai kun laki sitä vaatii tai suojataksemme oikeudellisia oikeuksiamme.",
    ],
    [
        "title" => "6. Tietoturva",
        "body" => "Käytämme kohtuullisia teknisiä ja organisatorisia toimenpiteitä suojataksemme tietojasi luvattomalta pääsyltä, muuttamiselta tai menetykseltä. Mikään siirto- tai tallennusmenetelmä ei ole täysin turvallinen, emmekä voi taata absoluuttista turvallisuutta.",
    ],
    [
        "title" => "7. Oikeutesi &amp; Valintasi",
        "body" => "Sijainnistasi riippuen sinulla voi olla oikeus päästä käsiksi, korjata tai pyytää poistamaan henkilötietosi, ja vastustaa tiettyjä niiden käyttötapoja. Käyttääksesi näitä oikeuksia, ota meihin yhteyttä <a class=\"link\" href=\"contacts.php\">yhteydenottosivumme</a> kautta.",
    ],
    [
        "title" => "8. Lasten Yksityisyys",
        "body" => "Verkkosivusto ei ole suunnattu alle 18-vuotiaille, emmekä tietoisesti kerää henkilötietoja alaikäisiltä. Jos uskot, että alaikäinen on antanut meille henkilötietoja, ota meihin yhteyttä, jotta voimme poistaa ne.",
    ],
    [
        "title" => "9. Muutokset Tähän Käytäntöön",
        "body" => "Voimme päivittää tätä Tietosuojakäytäntöä ajoittain. Kaikki muutokset julkaistaan tällä sivulla päivitetyllä voimaantulopäivämäärällä. Suosittelemme tarkistamaan tämän sivun säännöllisesti.",
    ],
    [
        "title" => "10. Ota Meihin Yhteyttä",
        "body" => "Jos sinulla on kysymyksiä tästä Tietosuojakäytännöstä tai siitä, kuinka tietojasi käsitellään, ota meihin yhteyttä <a class=\"link\" href=\"contacts.php\">yhteydenottosivumme</a> kautta tai lähetä sähköpostia osoitteeseen info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Käyttöehdot";
$conditions_meta_description = "Tutustu Käyttöehtoihin, jotka koskevat $site_name-verkkosivuston ja kaupankäyntialustan käyttöä.";
$conditions_sections = [
    [
        "title" => "1. Ehtojen Hyväksyminen",
        "body" => "Käyttämällä $site_domain:ia (\"Verkkosivusto\"), hyväksyt olevasi näiden Käyttöehtojen sitoma. Jos et hyväksy jotain osaa näistä ehdoista, älä käytä Verkkosivustoa.",
    ],
    [
        "title" => "2. Kelpoisuus",
        "body" => "Sinun on oltava vähintään 18-vuotias ja laillisesti oikeutettu käyttämään kaupankäyntiin liittyviä palveluita lainkäyttöalueellasi käyttääksesi Verkkosivustoa. Käyttämällä Verkkosivustoa vahvistat täyttäväsi nämä vaatimukset.",
    ],
    [
        "title" => "3. Palvelun Kuvaus",
        "body" => "$site_name tarjoaa verkkoalustan koulutussisällöllä, markkinatiedoilla ja kaupankäyntityökaluilla. Mikään Verkkosivustolla ei muodosta rahoitus-, sijoitus-, vero- tai oikeudellista neuvontaa, ja kaikki annetut tiedot ovat vain yleisiin tiedotustarkoituksiin.",
    ],
    [
        "title" => "4. Käyttäjän Vastuut",
        "body" => "Olet vastuussa tarkkojen tietojen antamisesta rekisteröityessäsi, tilisi kirjautumistietojen luottamuksellisuuden ylläpitämisestä ja kaikesta tililläsi tapahtuvasta toiminnasta.",
    ],
    [
        "title" => "5. Immateriaalioikeudet",
        "body" => "Kaikki Verkkosivuston sisältö, mukaan lukien teksti, grafiikka, logot ja ohjelmisto, on $site_name:n tai sen lisenssinantajien omaisuutta ja on suojattu sovellettavilla immateriaalioikeuslaeilla. Et saa jäljentää tai jakaa tätä sisältöä ilman lupaa.",
    ],
    [
        "title" => "6. Ei Rahoitusneuvontaa",
        "body" => "Verkkosivuston sisältö on tarkoitettu vain tiedotus- ja koulutustarkoituksiin, eikä sitä tule tulkita rahoitusneuvonnaksi. Olet yksin vastuussa omista kaupankäyntipäätöksistäsi ja sinun tulisi konsultoida riippumatonta rahoitusneuvojaa tarvittaessa. Katso <a class=\"link\" href=\"risk-warning.php\">Riskivaroituksemme</a> saadaksesi lisätietoja.",
    ],
    [
        "title" => "7. Vastuunrajoitus",
        "body" => "Lain sallimassa laajimmassa määrin $site_name ei ole vastuussa mistään suorista, epäsuorista, satunnaisista tai välillisistä vahingoista, jotka johtuvat Verkkosivuston tai siihen linkitettyjen kolmannen osapuolen palveluiden käytöstäsi tai kyvyttömyydestäsi käyttää niitä.",
    ],
    [
        "title" => "8. Irtisanominen",
        "body" => "Pidätämme oikeuden keskeyttää tai lopettaa käyttöoikeutesi Verkkosivustoon oman harkintamme mukaan, ilman erillistä ilmoitusta, käytöksestä, jonka uskomme rikkovan näitä Käyttöehtoja tai olevan muutoin haitallista muille käyttäjille tai Verkkosivustolle.",
    ],
    [
        "title" => "9. Muutokset Näihin Ehtoihin",
        "body" => "Voimme tarkistaa näitä Käyttöehtoja milloin tahansa. Verkkosivuston jatkuva käyttö muutosten julkaisemisen jälkeen merkitsee päivitettyjen ehtojen hyväksymistä.",
    ],
    [
        "title" => "10. Yhteystiedot",
        "body" => "Kysymykset näistä Käyttöehdoista voi osoittaa tiimillemme <a class=\"link\" href=\"contacts.php\">yhteydenottosivun</a> kautta tai lähettämällä sähköpostia osoitteeseen info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Rekisteröidy | $site_name — Luo Ilmainen Tilisi";
$sign_meta_description = "Luo ilmainen $site_name-tilisi minuuteissa ja aloita kaupankäynti jo $$app_price $app_currency:lla.";
$sign_h1 = "Luo Ilmainen Tilisi";
$sign_lead = "Liity $site_name:iin muutamassa minuutissa. Täytä tietosi alla aloittaaksesi.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Kiitos | $site_name";
$thanks_h1 = "Kiitos!";
$thanks_text = "Tietosi on vastaanotettu. $site_name-tiimin jäsen ottaa sinuun pian yhteyttä auttaakseen sinua pääsemään alkuun.";
$thanks_btn = "Takaisin Etusivulle";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Sivukartta | $site_name";
$sitemap_meta_description = "Selaa jokaista $site_name-verkkosivuston sivua, mukaan lukien kaupankäyntialusta, tarjous, tuki ja lakisivut.";
$sitemap_h1 = "Sivukartta";
$sitemap_lead = "Jokainen $site_name:n sivu yhdessä paikassa.";

