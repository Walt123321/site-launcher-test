<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hu-HU';
$form_language = 'hu'; // matches this page's own language, not the offer's global default

// ============================================================
// HU TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Hivatalos Weboldal | Kereskedési Platform";
$home_meta_description = "A $site_name felhasználóbarát kereskedési platformot kínál fejlett piaci eszközökkel, valós idejű betekintésekkel és gyakorlati funkciókkal, amelyeket úgy terveztek, hogy az online kereskedést hozzáférhetőbbé és tájékozottabbá tegyék.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platform";
$hero_subtitle = "Milliókat támogatunk világszerte a digitális eszközökkel kapcsolatos útjukon";
$hero_badge_title = "Elégedett Tagok";
$hero_badge_subtitle = "Milliók szeretik";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Kezdje el a Kereskedést Ma";
$form_desc = "Készen áll a lépésre? Regisztráljon most, és tegye meg az első lépést a pénzügyi szabadság felé. Kezdje mindössze $app_price $app_currency-vel — férjen hozzá minden kereskedési eszközhöz, valós idejű piaci adatokhoz és a teljes platformhoz az első naptól kezdve.";
$form_fname_placeholder = "Keresztnév";
$form_lname_placeholder = "Vezetéknév";
$form_email_placeholder = "Email";
$form_btn_submit = "Regisztráció";
$form_disclaimer_text = "Személyes adatai megadásával és a gombra kattintva elfogadja a weboldal <a class=\"link\" href=\"privacy.php\">Adatvédelmi Irányelveit</a> és <a class=\"link\" href=\"conditions.php\">Felhasználási Feltételeit</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BIZTONSÁGOS";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Ismerje Meg a Platformot";
$stats_title = "Gyors bevezetés az okosabb kereskedésbe";
$stat_1_value = "154+";
$stat_1_label = "Lefedett Ország";
$stat_2_value = "29 Millió";
$stat_2_label = "Globális Befektető";
$stat_3_value = "635+";
$stat_3_label = "Érme";
$stat_4_value = "3,26 Milliárd $";
$stat_4_label = "24 Órás Kereskedési Volumen";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Miért a $site_name?";
$why_title = "Okok, Hogy Minket Válasszon";
$why_1_title = "Gyors &amp; Egyszerű";
$why_1_text = "Vásárolja és adja el kedvenc kriptovalutáit másodpercek alatt.";
$why_2_title = "Biztonságos &amp; Védett";
$why_2_text = "A legújabb technológiát használjuk, hogy pénzeszközei és adatai biztonságban legyenek.";
$why_3_title = "Nyitva Mindenki Előtt";
$why_3_text = "Kereskedjen platformunkon 24/7, bárhol és bármikor, ahogy szeretné.";
$why_4_title = "Professzionális Eszközök";
$why_4_text = "Az egyszerű funkcióktól a professzionális kereskedési funkciókig mindenünk megvan.";
$why_5_title = "Trendek &amp; Betekintések";
$why_5_text = "Szerezze meg a legfrissebb kripto híreket, betekintéseket és trendeket szakértőktől.";
$why_6_title = "Támogatás 24/7";
$why_6_text = "Barátságos támogató csapatunk bármikor készen áll segíteni.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Hogyan Működik";
$how_title = "Egyszerű Lépések a Kereskedés Megkezdéséhez";
$how_1_title = "Regisztráció";
$how_1_text = "Hozzon létre egy fiókot, és kezdje el a kereskedést percek alatt.";
$how_1_btn = "Kereskedés Megkezdése";
$how_2_title = "Fizessen be Pénzt";
$how_2_text = "Finanszírozza fiókját minimum $app_price $app_currency befizetéssel a teljes kereskedési hozzáférés feloldásához. Válasszon több fizetési mód közül, és kezdje el növelni portfólióját még ma.";
$how_2_note = "Adjon hozzá pénzeszközöket....";
$how_3_title = "Kereskedés Megkezdése";
$how_3_text = "Fedezze fel a piacot, és kereskedjen a saját módján.";
$how_3_note = "Vásároljon és Tartsa";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulátor";
$calc_title = "Nézze meg, mennyi időt és lehetőséget hagy kihasználatlanul";
$calc_volume_label = "Havi Kereskedési Volumen";
$calc_trades_label = "Kereskedések Hetente";
$calc_time_label = "Megtakarítható Idő";
$calc_boost_label = "Potenciális Volumennövekedés";
$calc_btn = "Kereskedés Megkezdése";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funkciók";
$features_title = "A $site_name Ereje";
$feature_1_title = "Azonnali Kereskedés";
$feature_1_text = "Maximalizálja kereskedési potenciálját professzionális eszközökkel.";
$feature_2_title = "Kripto Vásárlása";
$feature_2_text = "Vásároljon kriptót kártyával vagy bankon keresztül.";
$feature_3_title = "Kripto Származékos Termékek";
$feature_3_text = "Egyszerű, fejlett határidős kereskedés.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Növelje vagyonát könnyedén.";
$feature_5_title = "Kereskedési Bot";
$feature_5_text = "Magasabb profit, még alvás közben is.";
$feature_6_title = "Margin Kereskedés";
$feature_6_text = "Kölcsönözzön, kereskedjen és fizessen vissza egyszerűen.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Amit Felhasználóink Mondanak";
$review_1_text = "A platform nagyon könnyen használható, és folyamatos fejlődést tapasztaltam, mióta tulajdonos lettem. A csapat elkötelezettsége és friss ötletei izgatottá tesznek a következő lépések iránt!";
$review_1_role = "Kereskedő";
$review_2_text = "A $site_name zökkenőmentes és intuitív kereskedési élményt nyújt. Azonnal el tudtam kezdeni a kriptovaluták vásárlását és kereskedését. A felület könnyen használható, és a tranzakciós sebességek kiválóak!";
$review_2_role = "Új Kereskedő";
$review_3_text = "Bízom ebben a platformban a kriptobefektetéseim kezelésében. Biztonsági funkciói bizalmat adnak, és soha nem tapasztaltam problémát a kifizetésekkel vagy befizetésekkel kapcsolatban. Ez az egyik legmegbízhatóbb tőzsde, amelyet valaha használtam.";
$review_3_role = "Profi Kereskedő";
$review_4_text = "Amikor kérdéseim voltak, az ügyfélszolgálati csapat gyors és segítőkész volt. Igazán törődnek felhasználóikkal, és minden kereskedési élményt zökkenőmentessé és egyszerűvé tesznek.";
$review_4_role = "Tapasztalt Kereskedő";
$review_5_text = "Kezdőként a $site_name-et nagyon könnyen használhatónak találtam. Ami igazán kiemelkedik, az a tapasztaltabb kereskedők számára elérhető fejlett eszközök választéka. Szilárd választás bárki számára, aki portfóliót szeretne építeni!";
$review_5_role = "Közösségi Kereskedő";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Gyakran Ismételt Kérdések";
$faq_title = "Gyakran Ismételt Kérdések";
$faq_q1 = "Mi az a $site_name?";
$faq_a1 = "A $site_name egy kriptotőzsde, ahol a felhasználók könnyedén kereskedhetnek érmék széles választékával, beleértve a Bitcoint, Ethereumot és más népszerű kriptovalutákat.";
$faq_q2 = "Mennyire Biztonságos a $site_name a Kripto Kereskedéshez?";
$faq_a2 = "A platform fejlett technológián és 1:1 eszközfedezeten keresztül biztosít biztonságot a Proof of Reserves segítségével.";
$faq_q3 = "Hogyan Fizetek Be?";
$faq_a3 = "A $site_name több befizetési lehetőséget kínál, beleértve a kripto befizetést, fiat befizetést, P2P kereskedést és az egykattintásos vásárlást.";
$faq_q4 = "Szükségem Van Tapasztalatra a $site_name Használatához?";
$faq_a4 = "Nem, semmilyen tapasztalatra nincs szüksége. A platform könnyen használható felülete mindenki számára elérhetővé teszi, kezdőktől a haladó kereskedőkig.";
$faq_q5 = "Vannak rejtett díjak vagy költségek?";
$faq_a5 = "Egyáltalán nincsenek. Nincsenek regisztrációs díjak, előfizetési költségek vagy bármilyen rejtett díj. Mindig látja a pontos tranzakciós összeget megerősítés előtt. A bevétel prémium funkciókból és tőzsdei partnerségekből származik, nem a felhasználóktól elvett pénzből.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Kezdje el a Kereskedést Ma";
$cta_desc = "Készen áll a lépésre? Regisztráljon most, és tegye meg az első lépést a pénzügyi függetlenség felé.";
$cta_btn = "Regisztráció";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "A $site_name Kereskedési Platform Fő Jellemzői";
$table_1_label = "🤖 Platform Technológia";
$table_1_val = "Fejlett AI Kereskedési Motor";
$table_2_label = "💳 Finanszírozási Módok";
$table_2_val = "Fő Hitelkártyák, Banki Átutalás, PayPal";
$table_3_label = "📱 Platform Hozzáférés";
$table_3_val = "Több Eszközön Kompatibilis";
$table_4_label = "🚀 Teljesítmény Arány";
$table_4_val = "85%-os Pontosság";
$table_5_label = "📊 Kereskedési Eszközök";
$table_5_val = "Részvények, Forex, Árucikkek, Nemesfémek, CFD-k, Kriptovaluták és több…";
$table_6_label = "✍️ Fiók Beállítása";
$table_6_val = "Gyors és Hatékony";
$table_7_label = "📞 Ügyfélszolgálat";
$table_7_val = "24/7 Professzionális Segítség";

// Reviews summary card
$summary_title = "$site_name Vélemények";
$summary_badge = "Megbízható";
$summary_desc = "Erőteljes, felhasználóbarát kereskedési platform szilárd automatizálással és oktatási forrásokkal.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Kereskedjen okosan, növekedjen gyorsan";
$footer_community_label = "Közösség";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Termék";
$footnav_offer = "Ajánlat";
$footnav_contacts = "Kapcsolat";
$footnav_faq = "Gyakran Ismételt Kérdések";
$footnav_privacy = "Adatvédelmi Irányelvek";
$footnav_conditions = "Felhasználási Feltételek";
$footnav_risk = "Kockázati Figyelmeztetés";
$footer_disclaimer = "A $site_name oktatási forrásokat és piaccal kapcsolatos anyagokat oszt meg, hogy segítse a látogatókat a kereskedés, befektetés és digitális pénzügyi termékek jobb megértésében. A weboldalon megjelenő információk, mint például piaci kommentárok, eszközárak, diagramok, útmutatók és elemző tartalmak, általános tájékoztatási célokat szolgálnak, és nem minősülnek pénzügyi, befektetési, adózási vagy jogi tanácsadásnak. Bár ésszerű erőfeszítéseket teszünk a pontos és releváns információk fenntartására, a $site_name nem vállal garanciát a tartalom teljességére, pontosságára vagy időszerűségére vonatkozóan, és nem vonható felelősségre a felhasználásából eredő döntésekért vagy veszteségekért.<br><br>A pénzügyi piacokon való részvétel eredendő kockázatokkal jár. A kriptovaluta, Forex, CFD-k, részvények és más kereskedési eszközök jelentős áringadozásokat tapasztalhatnak, és veszteségek fordulhatnak elő. Az egyéni körülmények és kockázattűrő képesség eltérőek, ezért a felhasználóknak saját kutatást kell végezniük, és fontolóra kell venniük egy szakképzett pénzügyi szakember tanácsának kikérését, mielőtt pénzt fektetnének be. Soha ne kereskedjen olyan pénzzel, amelynek elvesztését nem engedheti meg magának.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Kereskedési Tanácsadó";
$quiz_text_welcome = "Szia! Maya vagyok, az Ön személyes kereskedési tanácsadója. Van néhány perce, hogy megtaláljuk az Önnek legjobb tervet?";
$quiz_text_q1 = "Kereskedett már korábban kriptovalutával?";
$quiz_text_a1_yes = "Igen, van tapasztalatom";
$quiz_text_a1_no = "Nem, kezdő vagyok";
$quiz_text_q2 = "Nagyszerű! Mi a keresztneve, hogy személyre szabhassam a tervét?";
$quiz_text_q3 = "Mi a fő célja a kereskedéssel?";
$quiz_text_a3_yes = "Hosszú távú vagyon építése";
$quiz_text_a3_no = "Rövid távú bevétel generálása";
$quiz_text_q4 = "Mennyivel szeretne kezdeni?";
$quiz_text_a4_1 = "$$app_price alatt";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "$1000 felett";
$quiz_text_q5 = "Tökéletes. Szeretné, ha most nyitnék Önnek egy ingyenes fiókot?";
$quiz_text_a5_yes = "Igen, csináljuk";
$quiz_text_a5_no = "Most nem";
$quiz_text_loader = "A legjobb terv keresése...";
$quiz_text_final_ttl = "Minden készen áll!";
$quiz_text_processing = "Adatai küldése folyamatban...";
$quiz_text_typing = "gépel...";
$quiz_placeholder_fname = "Keresztnév";
$quiz_placeholder_lname = "Vezetéknév";
$quiz_placeholder_email = "Email";
$quiz_btn_submit = "Kérem Ingyenes Fiókomat";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Kockázati Figyelmeztetés — Kereskedési Kockázat Tájékoztató";
$risk_meta_description = "Olvassa el a $site_name kockázati figyelmeztetését kereskedés előtt: kriptovaluta piaci kockázatok, tőkeáttétel, likviditás, kiberbiztonság és szabályozási szempontok.";
$risk_title = "Kockázati Figyelmeztetés";
$risk_intro = "A kockázatok megértése az első lépés a magabiztos kereskedés felé.";
$risk_ai_title = "Hogyan Segít AI Rendszerünk a Kockázatkezelésben:";
$risk_ai_1_title = "Algoritmikus Hatékonyság &amp; Érzelemmentes Kereskedés:";
$risk_ai_1_text = "Fejlett algoritmusok elemzik a piaci jeleket, hogy objektíven, optimális pillanatokban hajtsák végre a kereskedéseket.";
$risk_ai_2_title = "Adatvezérelt Stratégiák:";
$risk_ai_2_text = "A stratégiák ellenőrzött piaci mintákon és valós idejű elemzésen alapulnak, nem találgatáson.";
$risk_ai_3_title = "Rugalmas Beállítások &amp; Teljes Kontroll:";
$risk_ai_3_text = "Bármikor módosíthatja kockázati paramétereit. Kövesse nyomon az összes egyenleget és kereskedést átláthatóan az irányítópulton, rejtett díjak és kivételi korlátozások nélkül.";
$risk_disclaimer = "<strong>Felelősség Kizárása:</strong> A kereskedés mindig kockázattal jár. Az automatizált rendszerek (beleértve az AI-t) nem garantálnak profitot, meghibásodhatnak szoftverhibák vagy váratlan piaci események miatt, és felhasználói felügyeletet igényelnek. A múltbeli teljesítmény nem garancia a jövőbeli eredményekre. Ez a platform kizárólag tájékoztatási és marketing célokat szolgál, és nem nyújt pénzügyi tanácsadást.";
$risk_s1_title = "1. Általános &amp; Kriptovaluta Piaci Kockázatok";
$risk_s1_text = "A kriptovaluták rendkívül volatilis, spekulatív eszközök, amelyek 24/7 működnek minimális szabályozási felügyelet mellett a legtöbb joghatóságban.";
$risk_s1_li1 = "Az értékek drámaian ingadozhatnak rövid időn belül, ami potenciálisan a befektetett tőke teljes elvesztéséhez vezethet.";
$risk_s1_li2 = "A piaci értékeket erősen befolyásolhatják a szabályozási frissítések, technikai fejlesztések, biztonsági incidensek vagy szélesebb makrogazdasági események.";
$risk_s1_li3 = "Egyes eszközök teljesen elveszíthetik értéküket. Csak olyan pénzt fektessen be, amelynek elvesztését megengedheti magának.";
$risk_s2_title = "2. Végrehajtási, Likviditási &amp; Tőkeáttételi Kockázatok";
$risk_s2_li1_title = "Piaci Volatilitás &amp; Likviditás:";
$risk_s2_li1_text = "Szélsőséges ármozgások (napi 10-20%+) vagy alacsony likviditás (különösen a kisebb érméknél) késésekhez, platform leállásokhoz és súlyos végrehajtási csúszáshoz vezethetnek. A stop-loss megbízások nem garantálhatnak veszteséghatárokat szélsőséges körülmények között.";
$risk_s2_li2_title = "Tőkeáttételi &amp; Margin Kockázatok:";
$risk_s2_li2_text = "A tőkeáttételes termékek egyaránt felerősítik a nyereséget és a veszteséget, ami azt jelenti, hogy többet is veszíthet, mint a kezdeti befizetése. <em>A lakossági befektetői számlák megközelítőleg 70-80%-a veszít pénzt tőkeáttételes termékek kereskedésekor.</em>";
$risk_s3_title = "3. Technikai, Kiberbiztonsági &amp; Harmadik Fél Kockázatok";
$risk_s3_li1_title = "Technikai Tényezők:";
$risk_s3_li1_text = "Az online kereskedés eredendően magában foglalja az internetkapcsolat megszakadásának, hardver-/szoftverhibáknak és a szolgáltatás elérhetetlenségének kockázatait.";
$risk_s3_li2_title = "Kiberbiztonság:";
$risk_s3_li2_text = "A kriptovaluta fiókok gyakori célpontjai az adathalászatnak, rosszindulatú szoftvereknek és hackertámadásoknak. A tranzakciók visszafordíthatatlanok; hitelesítő adatainak veszélyeztetése tartós veszteséget eredményezhet.";
$risk_s3_li3_title = "Harmadik Féltől Származó Platformok:";
$risk_s3_li3_text = "Ez a weboldal harmadik féltől származó platformokhoz kapcsolhatja a felhasználókat. Nem ellenőrizzük, nem támogatjuk és nem garantáljuk azok biztonságát, működését vagy fizetőképességét. Mindig végezzen alapos átvilágítást, mielőtt pénzt fizetne be külső platformokra.";
$risk_s4_title = "4. Szabályozási, Adózási &amp; Záró Rendelkezések";
$risk_s4_li1_title = "Jogi Megfelelés &amp; Adók:";
$risk_s4_li1_text = "A szabályozási keretek nagyban eltérnek és gyorsan változnak. A felhasználók kizárólagosan felelősek azért, hogy kereskedési tevékenységük megfeleljen a helyi törvényeknek, és saját adókötelezettségeik teljesítéséért.";
$risk_s4_li2_title = "Nincs Profitgarancia:";
$risk_s4_li2_text = "Nincs \"biztonságos\" vagy kockázatmentes kriptokereskedés. Bármely megadott hozamadat vagy teljesítménypélda pusztán hipotetikus.";
$risk_s4_li3_title = "Alkalmasság:";
$risk_s4_li3_text = "Ha nem érti teljesen a kockázatokat, alapvető pénzeszközökre támaszkodik, vagy kölcsönpénzzel kereskedik, a kriptokereskedés nem alkalmas Önnek. Konzultáljon egy független, engedélyezett pénzügyi tanácsadóval, ha bizonytalan.";
$risk_contact = "<strong>Kapcsolat:</strong> Ha bármilyen kérdése van ezzel a nyilatkozattal kapcsolatban, vagy ha kérdést szeretne beküldeni, kérjük, forduljon hivatalos ügyfélszolgálati csapatunkhoz a weboldalunkon található kapcsolatfelvételi űrlapon keresztül.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Kezdőlap";
$bc_product = "Termék";
$bc_offer = "Ajánlat";
$bc_contacts = "Kapcsolat";
$bc_faq = "Gyakran Ismételt Kérdések";
$bc_privacy = "Adatvédelmi Irányelvek";
$bc_conditions = "Felhasználási Feltételek";
$bc_risk = "Kockázati Figyelmeztetés";
$bc_sign = "Regisztráció";
$bc_sitemap = "Oldaltérkép";
$bc_thanks = "Köszönjük";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Termék — Kereskedési Eszközök &amp; Platform Funkciók";
$product_meta_description = "Fedezze fel a $site_name termékét: azonnali kereskedés, kripto származékos termékek, kereskedési bot, margin kereskedés és még sok más, mind egy gyors és biztonságos platformra építve.";
$product_h1 = "A $site_name Kereskedési Termék";
$product_lead = "Egyetlen platform, minden eszköz, amire egy kereskedőnek szüksége van: az első azonnali kereskedéstől az automatizált stratégiákig és margin pozíciókig, a $site_name gyors, biztonságos és könnyen érthető élményt nyújt.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Ajánlat — Kezdje a Kereskedést $$app_price-tól";
$offer_meta_description = "Nézze meg, mi tartozik a jelenlegi $site_name ajánlathoz: alacsony $$app_price minimum befizetés, teljes platform hozzáférés és nincsenek rejtett díjak.";
$offer_h1 = "Jelenlegi Ajánlatunk";
$offer_lead = "Kezdje mindössze <strong>$$app_price $app_currency</strong>-vel, és oldja fel a teljes $site_name platformot az első naptól kezdve &mdash; minden eszköz, minden piac, rejtett költségek nélkül.";
$offer_li1 = "Mindössze $$app_price $app_currency minimum befizetés a fiók aktiválásához";
$offer_li2 = "Teljes hozzáférés az azonnali kereskedéshez, származékos termékekhez, marginhoz és a kereskedési bothoz";
$offer_li3 = "Több finanszírozási mód, beleértve a kártyákat és banki átutalást";
$offer_li4 = "Nincsenek regisztrációs díjak, előfizetési költségek, rejtett díjak";
$offer_li5 = "Ügyfélszolgálat 24/7, amíg elkezdi";
$offer_note = "A befizetési összegek és az elérhető fizetési módok régiónként eltérőek lehetnek. Tekintse át <a class=\"link\" href=\"risk-warning.php\">Kockázati Figyelmeztetésünket</a>, mielőtt fiókot finanszírozna.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Lépjen Kapcsolatba a $site_name-mel — Vegye Fel a Kapcsolatot Csapatunkkal";
$contacts_meta_description = "Kérdése van a $site_name fiókjával vagy a platformmal kapcsolatban? Vegye fel a kapcsolatot támogató csapatunkkal emailben, vagy küldjön nekünk üzenetet, és mi válaszolunk.";
$contacts_h1 = "Kapcsolat";
$contacts_lead = "Kérdései vannak fiókjával, egy befizetéssel kapcsolatban, vagy hogy hogyan működik a platform? Csapatunk itt van, hogy segítsen.";
$contacts_email_label = "Email";
$contacts_hours_label = "Támogatási Órák";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tipikus Válaszidő";
$contacts_response_value = "24 órán belül";
$contacts_form_title = "Küldjön Nekünk Üzenetet";
$contacts_form_desc = "Hagyja meg adatait alább, és csapatunk egy tagja közvetlenül felveszi Önnel a kapcsolatot.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Gyakran Ismételt Kérdések";
$faq_meta_description = "Válaszok a leggyakoribb kérdésekre a $site_name fiók létrehozásával, befizetéssel, platformbiztonsággal és díjakkal kapcsolatban.";
$faq_page_lead = "Minden, amit tudnia kell, mielőtt elkezdi a kereskedést. Nem találja a választ? <a class=\"link\" href=\"contacts.php\">Vegye fel a kapcsolatot csapatunkkal</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Adatvédelmi Irányelvek";
$privacy_meta_description = "Tudja meg, hogyan gyűjti, használja és védi a $site_name személyes adatait a weboldalon és a platformon.";
$privacy_sections = [
    [
        "title" => "1. Bevezetés",
        "body" => "Ez az Adatvédelmi Irányelv elmagyarázza, hogyan gyűjti, használja és védi a $site_name (\"mi\") a $site_domain (\"Weboldal\") látogatóinak és felhasználóinak személyes adatait. A Weboldal használatával elfogadja az alább leírt gyakorlatokat.",
    ],
    [
        "title" => "2. Az Általunk Gyűjtött Információk",
        "body" => "Gyűjthetünk közvetlenül megadott információkat, mint például a nevét, email címét és telefonszámát, amikor regisztrál vagy űrlapot küld be, valamint automatikusan gyűjtött információkat, beleértve az IP-címét, eszköz- és böngészőtípusát, valamint a Weboldalon megtekintett oldalakat.",
    ],
    [
        "title" => "3. Hogyan Használjuk Az Ön Adatait",
        "body" => "A gyűjtött információkat fiókja létrehozására és kezelésére, kérdésekre való válaszadásra, ügyfélszolgálat nyújtására, a Weboldal és szolgáltatásaink fejlesztésére, és, ahol megengedett, termékekkel és ajánlatokkal kapcsolatos frissítések küldésére használjuk. Bármikor leiratkozhat a marketing kommunikációról.",
    ],
    [
        "title" => "4. Sütik &amp; Nyomkövető Technológiák",
        "body" => "A Weboldal sütiket és hasonló technológiákat használ, hogy megjegyezze preferenciáit, bejelentkezve tartsa Önt, és megértse, hogyan használják a látogatók oldalainkat. A sütiket letilthatja böngészője beállításain keresztül, bár ennek eredményeként egyes funkciók esetleg nem működnek megfelelően.",
    ],
    [
        "title" => "5. Információk Megosztása",
        "body" => "Nem adjuk el személyes adatait. Megoszthatunk információkat megbízható szolgáltatókkal, akik segítenek üzemeltetni a Weboldalt (mint például hoszting- vagy analitikai szolgáltatók), vagy amikor törvény írja elő, vagy jogi jogaink védelme érdekében.",
    ],
    [
        "title" => "6. Adatbiztonság",
        "body" => "Ésszerű technikai és szervezeti intézkedéseket alkalmazunk információi jogosulatlan hozzáféréstől, módosítástól vagy elvesztéstől való védelmére. Egyetlen továbbítási vagy tárolási módszer sem teljesen biztonságos, és nem garantálhatunk abszolút biztonságot.",
    ],
    [
        "title" => "7. Az Ön Jogai &amp; Választásai",
        "body" => "Tartózkodási helyétől függően joga lehet hozzáférni, javítani vagy kérni személyes adatai törlését, és tiltakozhat azok bizonyos felhasználásai ellen. E jogok gyakorlásához kérjük, vegye fel velünk a kapcsolatot <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalunkon</a> keresztül.",
    ],
    [
        "title" => "8. Gyermekek Adatvédelme",
        "body" => "A Weboldal nem 18 éven aluli személyeknek szól, és tudatosan nem gyűjtünk személyes adatokat kiskorúaktól. Ha úgy véli, hogy egy kiskorú személyes adatokat adott meg nekünk, kérjük, vegye fel velünk a kapcsolatot, hogy eltávolíthassuk azokat.",
    ],
    [
        "title" => "9. Ezen Irányelv Módosításai",
        "body" => "Időről időre frissíthetjük ezt az Adatvédelmi Irányelvet. Bármilyen változást ezen az oldalon teszünk közzé, felülvizsgált hatálybalépési dátummal. Javasoljuk, hogy rendszeresen tekintse át ezt az oldalt.",
    ],
    [
        "title" => "10. Lépjen Kapcsolatba Velünk",
        "body" => "Ha kérdései vannak ezzel az Adatvédelmi Irányelvvel vagy azzal kapcsolatban, hogyan kezeljük adatait, kérjük, vegye fel velünk a kapcsolatot <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalunkon</a> keresztül, vagy küldjön emailt az info@$site_domain címre.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Felhasználási Feltételek";
$conditions_meta_description = "Tekintse át a Felhasználási Feltételeket, amelyek szabályozzák a $site_name weboldalhoz és kereskedési platformhoz való hozzáférést és annak használatát.";
$conditions_sections = [
    [
        "title" => "1. A Feltételek Elfogadása",
        "body" => "A $site_domain (\"Weboldal\") elérésével vagy használatával Ön elfogadja, hogy kötelezi Önt ezen Felhasználási Feltételek. Ha nem ért egyet ezen feltételek bármely részével, kérjük, ne használja a Weboldalt.",
    ],
    [
        "title" => "2. Jogosultság",
        "body" => "Legalább 18 évesnek kell lennie, és jogszerűen jogosultnak kell lennie a kereskedéssel kapcsolatos szolgáltatások használatára joghatóságában, hogy használhassa a Weboldalt. A Weboldal használatával megerősíti, hogy megfelel ezeknek a követelményeknek.",
    ],
    [
        "title" => "3. A Szolgáltatás Leírása",
        "body" => "A $site_name egy online platformot biztosít oktatási tartalommal, piaci információkkal és kereskedési eszközökkel. Semmi a Weboldalon nem minősül pénzügyi, befektetési, adózási vagy jogi tanácsnak, és bármely megadott információ csak általános tájékoztatási célokat szolgál.",
    ],
    [
        "title" => "4. Felhasználói Felelősségek",
        "body" => "Ön felelős a pontos információk megadásáért regisztrációkor, fiókja hitelesítő adatainak titkosságának fenntartásáért, és minden, a fiókja alatt zajló tevékenységért.",
    ],
    [
        "title" => "5. Szellemi Tulajdon",
        "body" => "A Weboldalon található minden tartalom, beleértve a szöveget, grafikákat, logókat és szoftvert, a $site_name vagy licencadói tulajdona, és az alkalmazandó szellemi tulajdonjogi törvények védik. Nem szabad reprodukálnia vagy terjesztenie ezt a tartalmat engedély nélkül.",
    ],
    [
        "title" => "6. Nincs Pénzügyi Tanácsadás",
        "body" => "A Weboldalon található tartalom kizárólag tájékoztatási és oktatási célokat szolgál, és nem értelmezhető pénzügyi tanácsadásként. Ön kizárólagosan felelős saját kereskedési döntéseiért, és szükség esetén konzultálnia kell egy független pénzügyi tanácsadóval. További információért lásd a <a class=\"link\" href=\"risk-warning.php\">Kockázati Figyelmeztetésünket</a>.",
    ],
    [
        "title" => "7. Felelősség Korlátozása",
        "body" => "A törvény által megengedett legteljesebb mértékben a $site_name nem felelős semmilyen közvetlen, közvetett, véletlen vagy következményes kárért, amely a Weboldal vagy bármely kapcsolódó harmadik féltől származó szolgáltatás használatából vagy a használat képtelenségéből ered.",
    ],
    [
        "title" => "8. Megszüntetés",
        "body" => "Fenntartjuk a jogot, hogy saját belátásunk szerint, előzetes értesítés nélkül felfüggesszük vagy megszüntessük az Ön hozzáférését a Weboldalhoz olyan magatartás miatt, amelyről úgy véljük, hogy megsérti ezeket a Felhasználási Feltételeket, vagy más módon káros más felhasználók vagy a Weboldal számára.",
    ],
    [
        "title" => "9. Ezen Feltételek Módosításai",
        "body" => "Bármikor felülvizsgálhatjuk ezeket a Felhasználási Feltételeket. A Weboldal folyamatos használata a változtatások közzététele után az frissített feltételek elfogadását jelenti.",
    ],
    [
        "title" => "10. Kapcsolat",
        "body" => "Az ezen Felhasználási Feltételekkel kapcsolatos kérdéseket csapatunknak küldheti a <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalon</a> keresztül, vagy emailben az info@$site_domain címre.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Regisztráció | $site_name — Hozza Létre Ingyenes Fiókját";
$sign_meta_description = "Hozza létre ingyenes $site_name fiókját percek alatt, és kezdje el a kereskedést mindössze $$app_price $app_currency-vel.";
$sign_h1 = "Hozza Létre Ingyenes Fiókját";
$sign_lead = "Csatlakozzon a $site_name-hez néhány perc alatt. Töltse ki adatait alább a kezdéshez.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Köszönjük | $site_name";
$thanks_h1 = "Köszönjük!";
$thanks_text = "Adatait megkaptuk. A $site_name csapat egyik tagja hamarosan felveszi Önnel a kapcsolatot, hogy segítsen elkezdeni.";
$thanks_btn = "Vissza a Kezdőlapra";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Oldaltérkép | $site_name";
$sitemap_meta_description = "Böngéssze a $site_name weboldal minden oldalát, beleértve a kereskedési platformot, ajánlatot, támogatást és jogi oldalakat.";
$sitemap_h1 = "Oldaltérkép";
$sitemap_lead = "Minden oldal a $site_name-en egy helyen.";

