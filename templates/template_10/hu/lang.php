<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hu-HU';
$form_language = 'hu'; // matches this page's own language, not the offer's global default

// ============================================================
// HU TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Hivatalos Weboldal | Kereskedési Platform";
$home_meta_description = "A $site_name felhasználóbarát kereskedési platformot kínál fejlett piaci eszközökkel, valós idejű betekintéssel és praktikus funkciókkal, amelyek hozzáférhetőbbé és tájékozottabbá teszik az online kereskedést.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Rólunk";
$nav_contacts = "Kapcsolat";
$nav_login = "Bejelentkezés";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Élő";
$activity_suffix = "Most csatlakozott";
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
$form_title = "Kezdje El Most";
$form_fname_placeholder = "Teljes név";
$form_lname_placeholder = "Vezetéknév";
$form_email_placeholder = "E-mail cím";
$form_btn_submit = "Fiók Létrehozása";
$form_disclaimer_text = "* A gombra kattintva elfogadja <a class=\"link\" href=\"privacy.php\">Adatvédelmi Szabályzatunkat</a> és <a class=\"link\" href=\"conditions.php\">Felhasználási Feltételeinket</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BIZTONSÁGOS";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: MI, amelyet a piac tisztább olvasására terveztek";
$s1_subtitle = "Technológia által vezérelt befektetési stratégia";
$s1_quote = "A $site_name azért épült, hogy megkönnyítse a piacokkal való munkát, akár van tapasztalata, akár nincs. A platform mesterséges intelligenciát alkalmaz az összetett adatok egyértelmű, cselekvésre késztető döntésekké alakítására, lehetővé téve, hogy nagyobb magabiztossággal kereskedjen bármilyen forgatókönyvben.";
$s1_p1 = "A rendszer valós időben tekinti át a hatalmas mennyiségű információt: felismeri a változásokat, mintázatokat azonosít, és gyorsan reagál a piaci jelekre. Ez tiszta képet ad az aktuális helyzetről, hogy lehetőségeket találhasson anélkül, hogy bonyolult elemzésekbe kellene ásnia magát.";
$s1_p2 = "A 24/7-es felügyelet, a felhasználóbarát felület és a magas szintű védelem kényelmessé és megbízhatóvá teszi az élményt. Minden úgy van kialakítva, hogy az eredményekre koncentrálhasson, ne a technikai oldalra.";
$s1_p3 = "A copy trading funkció hozzáférést biztosít a tapasztaltabb kereskedők stratégiáihoz is. Nyomon követheti mozgásaikat, és bevált megközelítéseket alkalmazhat saját kereskedésében, ötvözve a szakmai megítélést az automatizálással.";
$s1_cta = "Fiók Létrehozása";
$s1_img_alt = "$site_name digitális pénzügyek";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Pontos piaci elemzés, felesleges zaj nélkül";
$s2_intro = "A $site_name mesterséges intelligenciát használ a piac folyamatos figyelésére és a változások gyors felismerésére. A rendszer hatalmas mennyiségű adatot dolgoz fel, és csak a releváns jeleket jeleníti meg, anélkül hogy szükségtelen információval terhelné.";
$s2_item1_title = "Piaci reakció várakozás nélkül";
$s2_item1_text = "A platform korai szakaszukban azonosítja a mozgásokat: lendület, fordulatok és trendváltozások. Azonnal látja, mi történik, és a megfelelő pillanatban cselekedhet.";
$s2_item2_title = "Egyértelmű olvasat találgatás helyett";
$s2_item2_text = "Nincsenek bonyolult grafikonok vagy találgatások. A $site_name kiemeli a lényeget, egyértelmű áttekintést nyújtva a helyzetről, hogy adatok alapján dönthessen, ne megérzés alapján.";
$s2_item3_title = "Ellenőrzés és védelem";
$s2_item3_text = "Adatai védettek, a hozzáférés ellenőrzött, és a tranzakciók biztonságos csatornákon keresztül zajlanak. Ez lehetővé teszi, hogy a piacra koncentráljon, ne a technikai kockázatra.";
$s2_img_alt = "$site_name kripto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Egyértelmű intelligencia kereskedőknek";
$s3_card1_title = "A $site_name tiszteletben tartja a felhasználó adatvédelmét és irányítását";
$s3_card1_text = "A $site_name teljes átláthatósággal és integritással kezeli az információkat. Nem él vissza személyes adataival. Ezen a platformon nem rögzítenek tranzakciókat vagy megbízásokat.";
$s3_card2_title = "Egyértelmű elemzési környezet a jobb döntésekért";
$s3_card2_text = "A $site_name technológiai térként működik, ahol az MI erősíti az emberi ítélőképességet, ahelyett hogy helyettesítené azt. Ezek az eszközök megkönnyítik a piaci elmozdulások megértését, a stratégiák összehasonlítását és az eszközök viselkedésének tanulmányozását.";
$s3_card3_title = "MI eszközök, amelyek élesítik piaci rálátását";
$s3_card3_text = "Az elemzés soha nem áll meg. A $site_name figyeli a kripto környezetet, és valós idejű értesítéseket küld, amint releváns mozgás jelenik meg.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Éles elemzés, érzelem és hiba nélkül";
$s4_quote = "A $site_name összetett piaci adatokat szervezett, könnyen olvasható információvá alakít, kiküszöbölve a szükségtelen zajt, és segít arra összpontosítani, ami valóban számít. Ez lehetővé teszi, hogy korábban megértse a helyzetet, és úgy döntsön, hogy az érzelmek nem veszik át az irányítást.";
$s4_p1 = "A rendszer folyamatosan frissíti következtetéseit új adatokkal. A lemaradó mutatók helyett adaptív modelleket használ, amelyek valós időben reagálnak a piaci változásokra. Ez azt jelenti, hogy mindig naprakész képpel dolgozik, és gyorsabban cselekedhet, amikor igazán számít.";
$s4_img_alt = "$site_name mesterséges intelligencia";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Használja a $site_name MI-t pontos, időszerű döntésekhez";
$s5_quote = "A $site_name valós időben elemzi a piacot, és azonnal megmutatja, hol vannak a mozgások és lehetőségek. A rendszer feldolgozza az adatokat ön helyett, kész jeleket szolgáltatva: mikor lépjen be, mikor lépjen ki, és mire figyeljen.";
$s5_p1 = "Nem kell egész nap grafikonokat néznie. A platform maga észleli a változásokat, és gyorsan reagál a piacra, így nem hagy ki fontos pillanatokat.";
$s5_p2 = "Az algoritmusok 24/7 működnek, azonosítva az új lehetőségeket, amint megjelennek. Naprakész információkat kap késedelmek vagy információtúlterhelés nélkül.";
$s5_p3 = "Eközben a biztonság magas szinten marad: adatvédelem, biztonságos hozzáférés és kereskedési ellenőrzés. A $site_name egyaránt alkalmas kezdőknek és aktív kereskedőknek — a döntések az önéi maradnak, de szilárd elemzési alapon nyugszanak.";
$s5_img_alt = "$site_name pénzügyi automatizálás";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "A következetes kereskedés szervezett rendszerrel kezdődik";
$s6_p1 = "A $site_name segít struktúrát vinni a piaccal végzett munkájába. A platform egyértelmű keretet hoz létre: ön határozza meg céljait és kockázati szintjét, a rendszer pedig az ön stílusához igazítja elemzését — káosz és túlterhelés nélkül.";
$s6_p2 = "A 24/7-es elemzés egyszerű, érthető jelekké alakítja az adatáramlást. Csak azt látja, ami számít: hol van mozgás, hol érdemes belépni, és mikor jobb várni. Idővel az algoritmusok pontosabbá válnak, és alkalmazkodnak a piachoz.";
$s6_item1_title = "Válassza ki a tempóját: gyors kereskedés vagy hosszú távú megközelítés";
$s6_item1_text = "A $site_name különböző stratégiákat támogat. Aktív kereskedéshez a rendszer megjelöli a belépési pontokat és az árváltozásokat. Hosszú távú megközelítéshez segít fenntartani a pozíciókat a trend és a kockázat figyelembevételével.";
$s6_item2_title = "Belépési pontok találgatás nélkül";
$s6_item2_text = "A platform megmutatja, hol a legaktívabb a piac. Ez segít nagyobb magabiztossággal belépni és időben kilépni, improvizáció nélkül.";
$s6_item3_title = "Kockázatkezelés a kezdetektől";
$s6_item3_text = "Előre láthatja a lehetséges forgatókönyveket: hol alacsonyabb a kockázat, és magasabb a potenciál. Ez lehetővé teszi, hogy még a mozgás megkezdése előtt megtervezze a tranzakciókat.";
$s6_item4_title = "Kész elemzés";
$s6_item4_text = "A $site_name nem terheli önt bonyolult terminológiával. Egyértelmű, közvetlenül alkalmazható információkat kap, amelyeket úgy terveztek, hogy segítsenek gyorsabban és nagyobb magabiztossággal dönteni.";
$s6_cta = "Kezdje El Most";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Egyszerű eszközök pontos döntésekhez a $site_name-mel";
$s7_quote = "A $site_name mindent megad, amire szüksége van a piaci kereskedéshez — technikai szakzsargon vagy információtúlterhelés nélkül. A platform maga elemzi az árváltozásokat, a trendeket és a lehetséges belépési pontokat, csak azt mutatva, ami valóban számít.";
$s7_point1 = "A rendszer segít felismerni, mikor fordulhat meg a piac, hol jelennek meg erős mozgások, és mely pillanatok a legjobbak a be- vagy kilépésre. Minden jel előfeldolgozva érkezik — nem kell elsajátítania összetett mutatókat.";
$s7_point2 = "Ez magában foglalja a copy tradinget is: nyomon követheti és megismételheti tapasztalt kereskedők döntéseit anélkül, hogy időt töltene saját elemzésével.";
$s7_point3 = "A felület a lehető legegyszerűbb marad — minden eszközt egy pillantás alatt megért, és az első pillanattól kezdve használatra kész.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Találja meg a fontos időablakokat a $site_name MI-vel";
$s8_item1 = "Az automatikus diverzifikáció különböző eszközök között osztja el az összegeket, csökkentve a kockázatot, és védve a tőkét még instabil piacokon is.";
$s8_item2 = "Teljesen autonóm rendszer — nem kell néznie a grafikonokat. Az algoritmusok elemzik a piacot, és önállóan hoznak döntéseket.";
$s8_item3 = "A kifizetések bármikor elérhetők — bankkártyákra, kriptopénztárcákra vagy elektronikus fizetési rendszerekre, késedelmek nélkül.";
$s8_item4 = "A napi jelentések megmutatják eredményeit, és teljes kontrollt biztosítanak a helyzet felett valós időben.";
$s8_item5 = "A rugalmas kockázati szint beállítások lehetővé teszik, hogy céljainak megfelelő stratégiát válasszon — a konzervatívtól az agresszívebbig.";
$s8_item6 = "A 400%-ig terjedő profitpotenciál olyan eszközzé teszi a $site_name-et, amely nemcsak megőrzi tőkéjét, hanem jelentősen növeli is.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Szakértői elemzés a $site_name által hajtva";
$s9_quote = "A $site_name egyesíti az algoritmusok erejét a piaci tapasztalattal, összetett adatokat egyértelmű, könnyen érthető jelekké alakítva. A rendszer gyorsan felismeri a mintázatokat és a potenciális lehetőségeket, lehetővé téve, hogy információtúlterhelés nélkül döntsön.";
$s9_p1 = "Előfeldolgozott elemzéseket kap, amelyek figyelembe veszik mind a technikai mutatókat, mind a piaci viselkedést — hogy gyorsabban, nagyobb magabiztossággal és pontossággal cselekedhessen.";
$s9_img_alt = "$site_name befektetési stratégia";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Mit mondanak felhasználóink";
$review_1_text = "A platform nagyon intuitív, és az eszközök segítettek javítani a kereskedési eredményeimen.";
$review_2_text = "Gyors támogatás és valóban hasznos tanulási anyagok — tökéletes azoknak, akik most kezdik.";
$review_3_text = "Testreszabható grafikonok és gyors végrehajtás — hónapok óta ez az első választásom.";
$review_4_text = "A regisztráció kevesebb mint öt percet vett igénybe, és az irányítópult megkönnyíti, hogy pontosan lássam, hol van a pénzem.";
$review_5_text = "Tetszik, hogy a platform elmagyarázza az egyes jelek mögötti logikát, ahelyett hogy csak számokat dobna elém.";
$review_6_text = "A kifizetések számomra mindig gyorsak voltak, és a támogató csapat valóban perceken belül válaszol.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Gyakran Ismételt Kérdések a $site_name-ről";
$faq_q1 = "Képes a $site_name valós időben felismerni a piaci változásokat?";
$faq_a1 = "Igen. Élő adatokat követ, korai szakaszában azonosítja a lendületváltozásokat, és mintázatokat vesz észre, mielőtt azok teljesen kifejlődnének, időszerű előnyt biztosítva a felhasználóknak.";
$faq_q2 = "Testreszabható a $site_name élmény?";
$faq_a2 = "Igen. A felhasználók kiválaszthatják az érdeklődési területeket, beállíthatják a részletességi szintet, és követhetik a kereskedési stílusukhoz vagy tanulási igényeikhez illő nyilvános stratégiákat.";
$faq_q3 = "Helyettesíti a $site_name a hagyományos kutatási módszereket?";
$faq_a3 = "Nem. Fejleszti azokat azáltal, hogy gyorsan MI-szűrt betekintést nyújt, miközben a felhasználó teljes kontrollt tart saját kutatása és döntései felett.";
$faq_cta = "Tudjon Meg Többet Most";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Kiemelt Jellemzők";
$hl1_emoji = "🤖";
$hl1_title = "Regisztrációs Költség";
$hl1_desc = "Nincs regisztrációs költség";
$hl2_emoji = "💰";
$hl2_title = "Kereskedési Jutalékok";
$hl2_desc = "Teljesen díjmentes";
$hl3_emoji = "📋";
$hl3_title = "Regisztráció Egyszerűsége";
$hl3_desc = "A regisztráció gyors és egyszerű";
$hl4_emoji = "📊";
$hl4_title = "Oktatási Fókusz";
$hl4_desc = "Leckék a kriptóról, Forex kereskedésről és befektetésről";
$hl5_emoji = "🌎";
$hl5_title = "Elérhető Országok";
$hl5_desc = "Az USA-ban nem elérhető, a legtöbb más országban elérhető";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Kereskedjen okosan, fejlődjön magabiztosan";
$footnav_about = "Rólunk";
$footnav_product = "Termék";
$footnav_offer = "Ajánlat";
$footnav_contacts = "Kapcsolat";
$footnav_faq = "GYIK";
$footnav_privacy = "Adatvédelmi Szabályzat";
$footnav_conditions = "Felhasználási Feltételek";
$footnav_risk = "Kockázati Figyelmeztetés";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "A $site_name általános oktatási anyagokat tesz közzé a kereskedésről, befektetésről, pénzügyi piacokról és digitális eszközökről. A cikkek, piaci adatok, grafikonok és a weboldal egyéb tartalma kizárólag tájékoztatási célokat szolgál, és nem tekinthető pénzügyi, befektetési vagy jogi tanácsnak. Bár igyekszünk megbízható és naprakész információt nyújtani, nem garantálhatjuk pontosságát vagy teljességét, és nem vagyunk felelősek a tartalomra való hagyatkozásból eredő veszteségekért.<br><br>A kereskedés kockázattal jár, és a kriptovaluták, Forex, CFD-k, részvények és más pénzügyi termékek jelentősen ingadozhatnak értékben. Fontolja meg saját pénzügyi helyzetét és kockázattűrő képességét kereskedés előtt, és szükség esetén kérjen szakmai tanácsot. Soha ne tegyen kockára olyan pénzt, amelynek elvesztését nem engedheti meg magának.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Kereskedési Tanácsadó";
$quiz_text_welcome = "Szia! Sofia vagyok, az Ön személyes kereskedési tanácsadója. Van néhány perce, hogy megtaláljuk az Önnek legjobb tervet?";
$quiz_text_q1 = "Kereskedett már korábban?";
$quiz_text_a1_yes = "Igen, van tapasztalatom";
$quiz_text_a1_no = "Nem, kezdő vagyok";
$quiz_text_q2 = "Nagyszerű! Mi a keresztneve, hogy személyre szabhassam a tervét?";
$quiz_text_q3 = "Mi a fő célja a kereskedéssel?";
$quiz_text_a3_yes = "Hosszú távú vagyon építése";
$quiz_text_a3_no = "Rövid távú jövedelem generálása";
$quiz_text_q4 = "Mennyivel szeretne kezdeni?";
$quiz_text_a4_1 = "Kevesebb mint $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Több mint $1000";
$quiz_text_q5 = "Tökéletes. Szeretné, ha most nyitnék önnek egy ingyenes fiókot?";
$quiz_text_a5_yes = "Igen, csináljuk";
$quiz_text_a5_no = "Most nem";
$quiz_text_loader = "Az Ön legjobb tervének keresése...";
$quiz_text_final_ttl = "Minden készen áll!";
$quiz_text_processing = "Az Ön adatai küldés alatt...";
$quiz_text_typing = "gépel...";
$quiz_placeholder_fname = "Keresztnév";
$quiz_placeholder_lname = "Vezetéknév";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Ingyenes Fiókom Igénylése";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Kezdőlap";
$bc_about = "Rólunk";
$bc_product = "Termék";
$bc_offer = "Ajánlat";
$bc_contacts = "Kapcsolat";
$bc_faq = "GYIK";
$bc_privacy = "Adatvédelmi Szabályzat";
$bc_conditions = "Felhasználási Feltételek";
$bc_risk = "Kockázati Figyelmeztetés";
$bc_sign = "Regisztráció";
$bc_thanks = "Köszönjük";
$bc_sitemap = "Oldaltérkép";

// -------------------------
// About page
// -------------------------
$about_meta_title = "A $site_name-ről";
$about_meta_description = "Ismerje meg a $site_name küldetését: a piaci elemzés tisztábbá és hozzáférhetőbbé tétele MI által vezérelt eszközökkel.";
$about_h1 = "A $site_name-ről";
$about_lead = "A $site_name egyetlen gondolat köré épült: a kereskedési döntéseknek egyértelmű információn kell alapulniuk, nem találgatáson.";
$about_p1 = "A mesterséges intelligenciát valós piaci tapasztalattal ötvözzük, hogy az összetett, zajos adatokat könnyen érthető és cselekvésre alkalmas jelekké alakítsuk. Platformunk éjjel-nappal figyeli a piacokat, hogy Önnek ne kelljen.";
$about_p2 = "Akár az első kereskedését végzi, akár évek óta aktív a piacokon, a $site_name úgy lett kialakítva, hogy ott találkozzon Önnel, ahol tart — az egyszerű útmutatástól a fejlett valós idejű elemzésig terjedő eszközökkel.";
$about_p3 = "Hisszük, hogy a technológiának támogatnia kell az ítélőképességét, nem helyettesítenie. Minden jel, amelyet a $site_name generál, arra szolgál, hogy egy olyan döntést tájékoztasson, amely továbbra is teljes mértékben az Öné.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Termék — MI Piaci Elemző Eszközök";
$product_meta_description = "Fedezze fel a $site_name terméket: valós idejű MI piaci elemzés, copy trading, kockázatkezelés és automatizált diverzifikáció.";
$product_h1 = "A $site_name termék";
$product_lead = "Egyetlen platform, amely az ön helyett olvassa a piacot: valós idejű elemzés, copy trading és rugalmas kockázati eszközök, amelyeket úgy terveztek, hogy egyértelműbbé tegyék a kereskedési döntéseket.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Ajánlat — Kezdje Ingyen";
$offer_meta_description = "Nézze meg, mi tartozik a jelenlegi $site_name ajánlatba: ingyenes regisztráció, nincs kereskedési jutalék, és teljes platformhozzáférés.";
$offer_h1 = "Jelenlegi ajánlatunk";
$offer_lead = "Hozza létre fiókját ingyenesen, és oldja fel a teljes $site_name platformot &mdash; regisztrációs díj nélkül, kereskedési jutalék nélkül.";
$offer_li1 = "Nincs költség a fiók regisztrálásáért";
$offer_li2 = "Nincs jutalék a tranzakciókon";
$offer_li3 = "Teljes hozzáférés a valós idejű MI piaci elemzéshez és copy tradinghez";
$offer_li4 = "Kifizetések bármikor elérhetők, rejtett díjak nélkül";
$offer_li5 = "Oktatási források a kriptóról, Forexről és befektetésről beleértve";
$offer_note = "Az elérhetőség régiónként eltérő lehet. Tekintse át <a class=\"link\" href=\"risk-warning.php\">Kockázati Figyelmeztetésünket</a>, mielőtt feltölti fiókját.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Lépjen Kapcsolatba a $site_name-mel — Vegye fel a kapcsolatot csapatunkkal";
$contacts_meta_description = "Kérdése van $site_name fiókjával vagy a platformmal kapcsolatban? Vegye fel a kapcsolatot támogató csapatunkkal e-mailben, vagy küldjön nekünk üzenetet.";
$contacts_h1 = "Kapcsolat";
$contacts_lead = "Kérdései vannak fiókjával, egy befizetéssel, vagy hogy hogyan működik a platform? Csapatunk készen áll segíteni.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Támogatási Órák";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tipikus Válaszidő";
$contacts_response_value = "24 órán belül";
$contacts_form_title = "Küldjön Nekünk Üzenetet";
$contacts_form_desc = "Hagyja meg adatait alább, és csapatunk egyik tagja közvetlenül felveszi Önnel a kapcsolatot.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Adatvédelmi Szabályzat";
$privacy_meta_description = "Ismerje meg, hogyan gyűjti, használja és védi a $site_name személyes adatait a weboldalon és a platformon.";
$privacy_sections = [
    [
        "title" => "1. Bevezetés",
        "body" => "Ez az Adatvédelmi Szabályzat elmagyarázza, hogyan gyűjti, használja és védi a $site_name (\"mi\") a $site_domain (a \"Weboldal\") látogatóinak és felhasználóinak személyes adatait. A Weboldal használatával elfogadja az alábbiakban leírt gyakorlatokat.",
    ],
    [
        "title" => "2. Az Általunk Gyűjtött Információk",
        "body" => "Gyűjthetünk közvetlenül megadott információkat, például nevét, e-mail címét és telefonszámát regisztrációkor vagy űrlap benyújtásakor, valamint automatikusan gyűjtött információkat, beleértve IP-címét, eszköz- és böngészőtípusát, valamint a Weboldalon megtekintett oldalakat.",
    ],
    [
        "title" => "3. Hogyan Használjuk Az Ön Információit",
        "body" => "A gyűjtött információkat fiókja létrehozására és kezelésére, kérdésekre való válaszadásra, ügyfélszolgálat nyújtására, a Weboldal és szolgáltatásaink fejlesztésére, és ahol engedélyezett, termékekről és ajánlatokról szóló frissítések küldésére használjuk. Bármikor leiratkozhat a marketing kommunikációról.",
    ],
    [
        "title" => "4. Sütik és Nyomkövetési Technológiák",
        "body" => "A Weboldal sütiket és hasonló technológiákat használ preferenciáinak megjegyzésére, bejelentkezve tartására, és annak megértésére, hogyan használják a látogatók oldalainkat. A sütiket böngészője beállításain keresztül letilthatja, bár egyes funkciók esetleg nem működnek megfelelően.",
    ],
    [
        "title" => "5. Információmegosztás",
        "body" => "Nem adjuk el személyes adatait. Megoszthatunk információkat megbízható szolgáltatókkal, akik segítenek működtetni a Weboldalt (mint például hoszting- vagy elemzési szolgáltatók), vagy amikor a törvény megköveteli, vagy jogaink védelme érdekében.",
    ],
    [
        "title" => "6. Adatbiztonság",
        "body" => "Ésszerű technikai és szervezeti intézkedéseket alkalmazunk információi jogosulatlan hozzáféréstől, módosítástól vagy elvesztéstől való védelmére. Egyetlen továbbítási vagy tárolási módszer sem teljesen biztonságos, és nem garantálhatunk abszolút biztonságot.",
    ],
    [
        "title" => "7. Az Ön Jogai és Választásai",
        "body" => "Helyétől függően jogosult lehet hozzáférni, javítani vagy kérni személyes adatai törlését, valamint kifogást emelni bizonyos felhasználásaik ellen. E jogok gyakorlásához vegye fel velünk a kapcsolatot <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalunkon</a> keresztül.",
    ],
    [
        "title" => "8. Gyermekek Adatvédelme",
        "body" => "A Weboldal nem 18 év alattiaknak szól, és tudatosan nem gyűjtünk személyes adatokat kiskorúaktól. Ha úgy gondolja, hogy egy kiskorú személyes adatokat adott meg nekünk, kérjük, vegye fel velünk a kapcsolatot, hogy eltávolíthassuk azokat.",
    ],
    [
        "title" => "9. E Szabályzat Módosításai",
        "body" => "Időről időre frissíthetjük ezt az Adatvédelmi Szabályzatot. Bármilyen változást ezen az oldalon teszünk közzé, felülvizsgált hatálybalépési dátummal. Javasoljuk, hogy rendszeresen tekintse át ezt az oldalt.",
    ],
    [
        "title" => "10. Vegye Fel Velünk a Kapcsolatot",
        "body" => "Ha kérdése van ezzel az Adatvédelmi Szabályzattal vagy információi kezelésével kapcsolatban, vegye fel velünk a kapcsolatot <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalunkon</a> keresztül, vagy írjon nekünk az info@$site_domain címre.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Felhasználási Feltételek";
$conditions_meta_description = "Tekintse át a $site_name weboldal és kereskedési platform hozzáférését és használatát szabályozó Felhasználási Feltételeket.";
$conditions_sections = [
    [
        "title" => "1. A Feltételek Elfogadása",
        "body" => "A $site_domain (a \"Weboldal\") elérésével vagy használatával elfogadja, hogy ezen Felhasználási Feltételek kötelező érvényűek Önre. Ha nem ért egyet e feltételek bármely részével, ne használja a Weboldalt.",
    ],
    [
        "title" => "2. Jogosultság",
        "body" => "Legalább 18 évesnek kell lennie, és rendelkeznie kell jogi képességgel a kereskedéssel kapcsolatos szolgáltatások joghatósága szerinti használatára a Weboldal használatához. A Weboldal használatával megerősíti, hogy megfelel ezeknek a követelményeknek.",
    ],
    [
        "title" => "3. A Szolgáltatás Leírása",
        "body" => "A $site_name egy online platformot biztosít oktatási tartalommal, piaci információkkal és MI-támogatott elemzési eszközökkel. A Weboldalon semmi sem minősül pénzügyi, befektetési, adó- vagy jogi tanácsnak, és minden megadott információ kizárólag általános tájékoztatási célokat szolgál.",
    ],
    [
        "title" => "4. Felhasználói Felelősségek",
        "body" => "Ön felelős a pontos információk megadásáért a regisztrációkor, fiókadatai bizalmasságának megőrzéséért, valamint minden fiókja alatt zajló tevékenységért.",
    ],
    [
        "title" => "5. Szellemi Tulajdon",
        "body" => "A Weboldalon lévő minden tartalom, beleértve a szöveget, képeket, logókat és szoftvert, a $site_name vagy licencadói tulajdonát képezi, és az alkalmazandó szellemi tulajdonjogi törvények védik. Nem sokszorosíthatja vagy terjesztheti ezt a tartalmat engedély nélkül.",
    ],
    [
        "title" => "6. Nincs Pénzügyi Tanácsadás",
        "body" => "A Weboldalon lévő tartalom kizárólag tájékoztatási és oktatási célokat szolgál, és nem értelmezhető pénzügyi tanácsként. Ön kizárólagosan felelős saját kereskedési döntéseiért, és szükség esetén független pénzügyi tanácsadóhoz kell fordulnia. Tekintse meg <a class=\"link\" href=\"risk-warning.php\">Kockázati Figyelmeztetésünket</a> a további információkért.",
    ],
    [
        "title" => "7. Felelősségkorlátozás",
        "body" => "A törvény által megengedett legnagyobb mértékben a $site_name nem felelős semmilyen közvetlen, közvetett, véletlenszerű vagy következményes kárért, amely a Weboldal vagy a kapcsolódó harmadik féltől származó szolgáltatások használatából vagy annak lehetetlenségéből ered.",
    ],
    [
        "title" => "8. Megszüntetés",
        "body" => "Fenntartjuk a jogot, hogy saját belátásunk szerint felfüggesszük vagy megszüntessük a Weboldalhoz való hozzáférését, értesítés nélkül, olyan magatartás miatt, amelyről úgy véljük, hogy sérti ezeket a Felhasználási Feltételeket, vagy más módon káros más felhasználók vagy a Weboldal számára.",
    ],
    [
        "title" => "9. E Feltételek Módosításai",
        "body" => "Bármikor felülvizsgálhatjuk ezeket a Felhasználási Feltételeket. A Weboldal folyamatos használata a változások közzététele után az frissített feltételek elfogadását jelenti.",
    ],
    [
        "title" => "10. Kapcsolat",
        "body" => "Az ezen Felhasználási Feltételekkel kapcsolatos kérdéseket csapatunknak a <a class=\"link\" href=\"contacts.php\">kapcsolatfelvételi oldalon</a> keresztül vagy e-mailben az info@$site_domain címre küldheti.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Kockázati Figyelmeztetés — Kereskedési Kockázat Feltárása";
$risk_meta_description = "Olvassa el a $site_name kockázati figyelmeztetést kereskedés előtt: kripto piaci kockázatok, tőkeáttétel, likviditás, kiberbiztonság és szabályozási megfontolások.";
$risk_title = "Kockázati Figyelmeztetés";
$risk_intro = "A kockázatok megértése az önbizalommal teli kereskedés első lépése.";
$risk_ai_title = "Hogyan segít MI rendszerünk a kockázatkezelésben:";
$risk_ai_1_title = "Algoritmikus Hatékonyság és Érzelemmentes Kereskedés:";
$risk_ai_1_text = "Fejlett algoritmusok elemzik a piaci jeleket, hogy objektíven hajtsák végre a tranzakciókat az optimális pillanatokban.";
$risk_ai_2_title = "Adatvezérelt Stratégiák:";
$risk_ai_2_text = "A stratégiák ellenőrzött piaci mintázatokon és valós idejű elemzésen alapulnak, nem találgatáson.";
$risk_ai_3_title = "Rugalmas Beállítások és Teljes Kontroll:";
$risk_ai_3_text = "Bármikor módosíthatja kockázati paramétereit. Átláthatóan nyomon követheti minden egyenlegét és tranzakcióját irányítópultján, rejtett díjak és kifizetési korlátozások nélkül.";
$risk_disclaimer = "<strong>Felelősség kizárása:</strong> A kereskedés mindig kockázattal jár. Az automatizált rendszerek (beleértve az MI-t) nem garantálnak profitot, meghibásodhatnak szoftverhibák vagy váratlan piaci események miatt, és felhasználói felügyeletet igényelnek. A múltbeli teljesítmény nem garantálja a jövőbeli eredményeket. Ez a platform kizárólag tájékoztatási és marketing célokat szolgál, és nem nyújt pénzügyi tanácsot.";
$risk_s1_title = "1. Általános Kripto Piaci Kockázat";
$risk_s1_text = "A kriptovaluták rendkívül volatilis, spekulatív eszközök, amelyek 24/7 működnek, minimális szabályozói felügyelet mellett a legtöbb joghatóságban.";
$risk_s1_li1 = "Az értékek drámaian ingadozhatnak rövid időszakokon belül, potenciálisan a befektetett tőke teljes elvesztéséhez vezetve.";
$risk_s1_li2 = "A piaci értékeket erősen befolyásolhatják a szabályozási változások, technológiai fejlemények, biztonsági jogsértések vagy szélesebb körű makrogazdasági események.";
$risk_s1_li3 = "Egyes eszközök teljesen elveszíthetik értéküket. Csak olyan pénzt fektessen be, amelynek elvesztését megengedheti magának.";
$risk_s2_title = "2. Végrehajtási, Likviditási és Tőkeáttételi Kockázat";
$risk_s2_li1_title = "Piaci Volatilitás és Likviditás:";
$risk_s2_li1_text = "A szélsőséges árváltozások (napi 10-20%+) vagy az alacsony likviditás (különösen a kisebb érméknél) késedelmeket, platformhibákat és súlyos végrehajtási csúszást okozhatnak. A stop-loss megbízások szélsőséges körülmények között nem garantálhatják a veszteséghatárokat.";
$risk_s2_li2_title = "Tőkeáttételi és Fedezeti Kockázat:";
$risk_s2_li2_text = "A tőkeáttételes termékek felerősítik mind a nyereséget, mind a veszteséget, ami azt jelenti, hogy többet veszíthet, mint az eredeti befizetése. A lakossági befektetői számlák körülbelül 70-80%-a pénzt veszít tőkeáttételes termékek kereskedésekor.";
$risk_s3_title = "3. Technikai, Kiberbiztonsági és Harmadik Féltől Származó Kockázat";
$risk_s3_li1_title = "Technikai Tényezők:";
$risk_s3_li1_text = "Az online kereskedés eredendő kockázatokat hordoz az internetkapcsolat meghibásodása, hardver-/szoftverhibák és a szolgáltatás elérhetetlensége tekintetében.";
$risk_s3_li2_title = "Kiberbiztonság:";
$risk_s3_li2_text = "A kripto fiókok gyakori célpontjai az adathalászatnak, rosszindulatú szoftvereknek és hackelésnek. A tranzakciók visszafordíthatatlanok; bejelentkezési adatai kompromittálódása végleges veszteséghez vezethet.";
$risk_s3_li3_title = "Harmadik Féltől Származó Platformok:";
$risk_s3_li3_text = "Ez a weboldal összekapcsolhatja a felhasználókat harmadik féltől származó platformokkal. Nem ellenőrizzük, nem támogatjuk, és nem garantáljuk azok biztonságát, működését vagy fizetőképességét. Mindig végezze el saját alapos átvilágítását, mielőtt pénzt helyezne el külső platformokon.";
$risk_s4_title = "4. Szabályozási, Adózási és Záró Rendelkezések";
$risk_s4_li1_title = "Jogi Megfelelés és Adók:";
$risk_s4_li1_text = "A szabályozási keretek nagymértékben eltérnek és gyorsan változnak. A felhasználók kizárólagosan felelősek annak biztosításáért, hogy kereskedési tevékenységeik megfeleljenek a helyi törvényeknek, valamint saját adókötelezettségeik teljesítéséért.";
$risk_s4_li2_title = "Nincs Profitgarancia:";
$risk_s4_li2_text = "Nem létezik \"biztonságos\" vagy kockázatmentes kripto kereskedés. Bármilyen megadott hozamszám vagy teljesítménypélda tisztán hipotetikus.";
$risk_s4_li3_title = "Alkalmasság:";
$risk_s4_li3_text = "Ha nem érti teljesen a kockázatokat, alapvető pénzeszközöktől függ, vagy kölcsönpénzzel kereskedik, a kripto kereskedés nem alkalmas Önnek. Kétség esetén konzultáljon független, engedéllyel rendelkező pénzügyi tanácsadóval.";
$risk_contact = "<strong>Kapcsolat:</strong> Ha kérdése van ezzel a nyilatkozattal kapcsolatban, vagy kérdést szeretne benyújtani, kérjük, vegye fel a kapcsolatot hivatalos ügyfélszolgálati csapatunkkal weboldalunk kapcsolatfelvételi űrlapján keresztül.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Regisztráció | $site_name — Hozza Létre Ingyenes Fiókját";
$sign_meta_description = "Hozza létre ingyenes $site_name fiókját percek alatt, és kezdjen okosabban kereskedni MI-vezérelt piaci elemzéssel.";
$sign_h1 = "Hozza Létre Ingyenes Fiókját";
$sign_lead = "Csatlakozzon a $site_name-hez percek alatt. Töltse ki adatait alább a kezdéshez.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Köszönjük | $site_name";
$thanks_h1 = "Köszönjük!";
$thanks_text = "Adatait megkaptuk. A $site_name csapat egyik tagja hamarosan felveszi Önnel a kapcsolatot, hogy segítsen elkezdeni.";
$thanks_btn = "Vissza a Kezdőlapra";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Oldaltérkép | $site_name";
$sitemap_meta_description = "Tekintse meg a $site_name weboldal minden oldalát, beleértve a kereskedési platformot, ajánlatot, támogatást és jogi oldalakat.";
$sitemap_h1 = "Oldaltérkép";
$sitemap_lead = "A $site_name minden oldala egy helyen.";

