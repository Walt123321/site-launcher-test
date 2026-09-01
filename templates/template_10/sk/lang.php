<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sk-SK';
$form_language = 'sk'; // matches this page's own language, not the offer's global default

// ============================================================
// SK TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficiálna Webová Stránka | Obchodná Platforma";
$home_meta_description = "$site_name ponúka užívateľsky prívetivú obchodnú platformu s pokročilými trhovými nástrojmi, prehľadmi v reálnom čase a praktickými funkciami, ktoré robia online obchodovanie dostupnejším a informovanejším.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "O nás";
$nav_contacts = "Kontakt";
$nav_login = "Prihlásiť sa";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Naživo";
$activity_suffix = "Práve sa pripojil";
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
$form_title = "Začnite Teraz";
$form_fname_placeholder = "Celé meno";
$form_lname_placeholder = "Priezvisko";
$form_email_placeholder = "E-mailová adresa";
$form_btn_submit = "Vytvoriť Účet";
$form_disclaimer_text = "* Kliknutím na tlačidlo súhlasíte s našimi <a class=\"link\" href=\"privacy.php\">Zásadami Ochrany Osobných Údajov</a> a <a class=\"link\" href=\"conditions.php\">Podmienkami Používania</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "ZABEZPEČENÉ";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI navrhnutá na jasnejšie čítanie trhu";
$s1_subtitle = "Investičná stratégia riadená technológiou";
$s1_quote = "$site_name bola vytvorená, aby uľahčila prácu s trhmi, či už máte skúsenosti alebo nie. Platforma využíva umelú inteligenciu na premenu zložitých údajov na jasné, uplatniteľné rozhodnutia, čo vám umožňuje obchodovať s väčšou istotou v akomkoľvek scenári.";
$s1_p1 = "Systém prechádza obrovské množstvo informácií v reálnom čase: zisťuje zmeny, rozpoznáva vzory a rýchlo reaguje na trhové signály. To vám poskytuje jasný obraz o aktuálnom kontexte, aby ste mohli objavovať príležitosti bez toho, aby ste sa museli prehrabávať komplikovanými analýzami.";
$s1_p2 = "Nepretržité monitorovanie, užívateľsky prívetivé rozhranie a vysoká úroveň ochrany robia zážitok pohodlným a spoľahlivým. Všetko je navrhnuté tak, aby ste sa mohli sústrediť na výsledky, nie na technickú stránku.";
$s1_p3 = "Funkcia copy tradingu vám tiež poskytuje prístup k stratégiám skúsenejších obchodníkov. Môžete sledovať ich pohyby a uplatňovať osvedčené prístupy vo vlastnom obchodovaní, čím kombinujete profesionálny úsudok s automatizáciou.";
$s1_cta = "Vytvoriť Účet";
$s1_img_alt = "$site_name digitálne financie";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Presná trhová analýza, bez zbytočného šumu";
$s2_intro = "$site_name využíva umelú inteligenciu na nepretržité monitorovanie trhu a rýchle zisťovanie zmien. Systém spracováva obrovské množstvo údajov a zobrazuje iba relevantné signály bez toho, aby vás zahltil zbytočnými informáciami.";
$s2_item1_title = "Reakcia na trh bez čakania";
$s2_item1_text = "Platforma identifikuje pohyby v ich počiatočných fázach: hybnosť, obraty a zmeny trendu. Okamžite vidíte, čo sa deje, a môžete konať v správnom okamihu.";
$s2_item2_title = "Jasný prehľad namiesto hádania";
$s2_item2_text = "Žiadne komplikované grafy alebo hádanie. $site_name zdôrazňuje podstatné a poskytuje jasný prehľad situácie, aby ste sa mohli rozhodovať na základe údajov, nie intuície.";
$s2_item3_title = "Kontrola a ochrana";
$s2_item3_text = "Vaše údaje sú chránené, prístup je kontrolovaný a transakcie prebiehajú cez zabezpečené kanály. To vám umožňuje sústrediť sa na trh, nie na technické riziko.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Jasná inteligencia pre obchodníkov";
$s3_card1_title = "$site_name rešpektuje súkromie a kontrolu používateľa";
$s3_card1_text = "$site_name zaobchádza s informáciami s úplnou transparentnosťou a integritou. Nezneužíva vaše osobné údaje. Na tejto platforme sa nezaznamenávajú žiadne transakcie ani objednávky.";
$s3_card2_title = "Jasné analytické prostredie pre lepšie rozhodnutia";
$s3_card2_text = "$site_name funguje ako technologický priestor, kde AI posilňuje ľudský úsudok namiesto toho, aby ho nahrádzala. Tieto nástroje uľahčujú pochopenie trhových posunov, porovnávanie stratégií a štúdium správania aktív.";
$s3_card3_title = "Nástroje AI, ktoré zaostrujú váš pohľad na trh";
$s3_card3_text = "Analýza sa nikdy nezastaví. $site_name sleduje krypto prostredie a odosiela oznámenia v reálnom čase, akonáhle sa objaví relevantný pohyb.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Ostrá analýza, bez emócií a chýb";
$s4_quote = "$site_name premieňa zložité trhové údaje na organizované, ľahko čitateľné informácie, eliminuje zbytočný šum a pomáha vám sústrediť sa na signály, na ktorých skutočne záleží. To vám umožňuje pochopiť situáciu skôr a rozhodnúť sa bez toho, aby emócie prevzali kontrolu.";
$s4_p1 = "Systém neustále aktualizuje svoje závery s novými údajmi. Namiesto oneskorených indikátorov používa adaptívne modely, ktoré reagujú na trhové zmeny v reálnom čase. To znamená, že vždy pracujete s aktuálnym obrazom a môžete konať rýchlejšie, keď na tom skutočne záleží.";
$s4_img_alt = "$site_name umelá inteligencia";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Používajte AI $site_name na presné, včasné rozhodnutia";
$s5_quote = "$site_name analyzuje trh v reálnom čase a okamžite vám ukazuje, kde je pohyb a príležitosti. Systém spracováva údaje za vás a poskytuje pripravené signály: kedy vstúpiť, kedy vystúpiť a na čo si dať pozor.";
$s5_p1 = "Nemusíte sa celý deň pozerať na grafy. Platforma sama zisťuje zmeny a rýchlo reaguje na trh, takže vám neujdú dôležité momenty.";
$s5_p2 = "Algoritmy pracujú nepretržite a identifikujú nové príležitosti hneď, ako sa objavia. Získavate aktuálne informácie bez oneskorenia alebo preťaženia informáciami.";
$s5_p3 = "Zároveň bezpečnosť zostáva na vysokej úrovni: ochrana údajov, bezpečný prístup a kontrola obchodovania. $site_name je vhodná pre začiatočníkov aj aktívnych obchodníkov — rozhodnutia zostávajú vaše, ale podporené pevným analytickým základom.";
$s5_img_alt = "$site_name finančná automatizácia";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konzistentné obchodovanie začína organizovaným systémom";
$s6_p1 = "$site_name vám pomáha priniesť štruktúru do vašej práce s trhom. Platforma vytvára jasný rámec: vy určujete svoje ciele a úroveň rizika a systém prispôsobuje svoju analýzu vášmu štýlu — bez chaosu a bez preťaženia.";
$s6_p2 = "Nepretržitá analýza premieňa tok údajov na jednoduché, zrozumiteľné signály. Vidíte iba to, na čom záleží: kde je pohyb, kde sa oplatí vstúpiť a kedy je lepšie počkať. Postupom času sa algoritmy stávajú presnejšími a prispôsobujú sa trhu.";
$s6_item1_title = "Vyberte si svoje tempo: rýchle obchodovanie alebo dlhodobý prístup";
$s6_item1_text = "$site_name podporuje rôzne stratégie. Pre aktívne obchodovanie systém označuje vstupné body a cenové pohyby. Pre dlhodobý prístup pomáha udržiavať pozície s ohľadom na trend a riziko.";
$s6_item2_title = "Vstupné body bez hádania";
$s6_item2_text = "Platforma ukazuje, kde je trh najaktívnejší. To vám pomáha vstupovať s väčšou istotou a vystupovať včas, bez improvizácie.";
$s6_item3_title = "Riadenie rizika od samého začiatku";
$s6_item3_text = "Môžete si vopred prezrieť možné scenáre: kde je riziko nižšie a potenciál vyšší. To vám umožňuje plánovať transakcie ešte predtým, ako sa pohyb vôbec začne.";
$s6_item4_title = "Pripravená analýza";
$s6_item4_text = "$site_name vás nezahlcuje komplikovanou terminológiou. Získavate jasné, priamo použiteľné informácie navrhnuté tak, aby vám pomohli rozhodovať sa rýchlejšie a s väčšou istotou.";
$s6_cta = "Začnite Teraz";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Jednoduché nástroje na presné rozhodnutia s $site_name";
$s7_quote = "$site_name vám poskytuje všetko, čo potrebujete na obchodovanie na trhu — bez technického žargónu alebo preťaženia informáciami. Platforma sama analyzuje cenové pohyby, trendy a možné vstupné body a zobrazuje iba to, na čom skutočne záleží.";
$s7_point1 = "Systém pomáha zistiť, kedy sa trh môže obrátiť, kde vznikajú silné pohyby a ktoré momenty sú najlepšie na vstup alebo výstup. Každý signál prichádza predspracovaný — nemusíte zvládnuť zložité indikátory.";
$s7_point2 = "Zahŕňa aj copy trading: môžete sledovať a opakovať rozhodnutia skúsených obchodníkov bez toho, aby ste trávili čas vlastnou analýzou.";
$s7_point3 = "Rozhranie zostáva čo najjednoduchšie — každý nástroj je pochopený na prvý pohľad a je pripravený na použitie od prvého okamihu.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Nájdite dôležité časové okná s AI $site_name";
$s8_item1 = "Automatická diverzifikácia rozdeľuje prostriedky medzi rôzne aktíva, znižuje riziko a chráni kapitál aj na nestabilných trhoch.";
$s8_item2 = "Plne autonómny systém — nemusíte sa pozerať na grafy. Algoritmy analyzujú trh a rozhodujú sa samostatne.";
$s8_item3 = "Výbery sú dostupné kedykoľvek — na bankové karty, krypto peňaženky alebo elektronické platobné systémy bez oneskorenia.";
$s8_item4 = "Denné správy zobrazujú vaše výsledky a poskytujú vám plnú kontrolu nad situáciou v reálnom čase.";
$s8_item5 = "Flexibilné nastavenia úrovne rizika vám umožňujú vybrať si stratégiu zodpovedajúcu vašim cieľom — od konzervatívnej po agresívnejšiu.";
$s8_item6 = "Potenciál zisku až 400% robí z $site_name nástroj pre tých, ktorí chcú nielen zachovať svoj kapitál, ale výrazne ho zhodnotiť.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Odborná analýza poháňaná $site_name";
$s9_quote = "$site_name kombinuje silu algoritmov s trhovými skúsenosťami a premieňa zložité údaje na jasné, ľahko zrozumiteľné signály. Systém rýchlo zisťuje vzory a potenciálne príležitosti, čo vám umožňuje rozhodovať sa bez preťaženia informáciami.";
$s9_p1 = "Získavate predspracované analýzy, ktoré zohľadňujú technické ukazovatele aj správanie trhu — aby ste mohli konať rýchlejšie, s väčšou istotou a presnosťou.";
$s9_img_alt = "$site_name investičná stratégia";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Čo hovoria naši používatelia";
$review_1_text = "Platforma je veľmi intuitívna a nástroje mi pomohli zlepšiť moje obchodné výsledky.";
$review_2_text = "Rýchla podpora a naozaj užitočné vzdelávacie materiály — ideálne pre ľudí, ktorí práve začínajú.";
$review_3_text = "Prispôsobiteľné grafy a rýchle vykonanie — je to moja prvá voľba už mesiace.";
$review_4_text = "Registrácia trvala menej ako päť minút a prehľadová tabuľa uľahčuje sledovanie, kde presne sú moje peniaze.";
$review_5_text = "Páči sa mi, že platforma vysvetľuje logiku za každým signálom namiesto toho, aby mi len hádzala čísla.";
$review_6_text = "Výbery boli pre mňa vždy rýchle a podporný tím naozaj odpovedá do niekoľkých minút.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Často Kladené Otázky o $site_name";
$faq_q1 = "Dokáže $site_name zistiť trhové zmeny v reálnom čase?";
$faq_a1 = "Áno. Sleduje živé údaje, identifikuje zmeny hybnosti v ich počiatočných fázach a rozpoznáva vzory skôr, ako sa plne rozvinú, čím poskytuje používateľom včasnú výhodu.";
$faq_q2 = "Dá sa zážitok $site_name prispôsobiť?";
$faq_a2 = "Áno. Používatelia si môžu vybrať oblasti záujmu, upraviť úroveň podrobností a sledovať verejné stratégie, ktoré zodpovedajú ich obchodnému štýlu alebo vzdelávacím potrebám.";
$faq_q3 = "Nahrádza $site_name tradičné výskumné metódy?";
$faq_a3 = "Nie. Zlepšuje ich rýchlym poskytovaním poznatkov filtrovaných umelou inteligenciou, pričom používateľ si zachováva plnú kontrolu nad vlastným výskumom a rozhodnutiami.";
$faq_cta = "Zistite Viac Teraz";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Zvýraznenia $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Poplatok za Registráciu";
$hl1_desc = "Žiadny poplatok za registráciu";
$hl2_emoji = "💰";
$hl2_title = "Obchodné Provízie";
$hl2_desc = "Absolútne žiadne poplatky";
$hl3_emoji = "📋";
$hl3_title = "Jednoduchosť Registrácie";
$hl3_desc = "Registrácia je rýchla a jednoduchá";
$hl4_emoji = "📊";
$hl4_title = "Vzdelávacie Zameranie";
$hl4_desc = "Lekcie o krypte, Forex obchodovaní a investovaní";
$hl5_emoji = "🌎";
$hl5_title = "Dostupné Krajiny";
$hl5_desc = "Nedostupné v USA, dostupné vo väčšine ostatných krajín";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Obchodujte múdro, rastite s istotou";
$footnav_about = "O nás";
$footnav_product = "Produkt";
$footnav_offer = "Ponuka";
$footnav_contacts = "Kontakt";
$footnav_faq = "Časté Otázky";
$footnav_privacy = "Zásady Ochrany Osobných Údajov";
$footnav_conditions = "Podmienky Používania";
$footnav_risk = "Upozornenie na Riziko";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publikuje všeobecné vzdelávacie materiály o obchodovaní, investovaní, finančných trhoch a digitálnych aktívach. Články, trhové údaje, grafy a iný obsah webovej stránky sú poskytované výlučne na informačné účely a nemali by sa považovať za finančné, investičné alebo právne poradenstvo. Aj keď sa snažíme poskytovať spoľahlivé a aktuálne informácie, nemôžeme zaručiť ich presnosť ani úplnosť a nezodpovedáme za straty vyplývajúce zo spoliehania sa na obsah.<br><br>Obchodovanie zahŕňa riziko a kryptomeny, Forex, CFD, akcie a iné finančné produkty môžu výrazne kolísať v hodnote. Pred obchodovaním zvážte svoju vlastnú finančnú situáciu a toleranciu rizika a v prípade potreby vyhľadajte odborné poradenstvo. Nikdy neinvestujte peniaze, ktoré si nemôžete dovoliť stratiť.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Obchodný Poradca";
$quiz_text_welcome = "Ahoj! Som Sofia, vaša osobná obchodná poradkyňa. Máte pár minút na to, aby sme pre vás našli najlepší plán?";
$quiz_text_q1 = "Obchodovali ste už predtým?";
$quiz_text_a1_yes = "Áno, mám skúsenosti";
$quiz_text_a1_no = "Nie, som začiatočník";
$quiz_text_q2 = "Skvelé! Aké je vaše krstné meno, aby som mohla prispôsobiť váš plán?";
$quiz_text_q3 = "Aký je váš hlavný cieľ v obchodovaní?";
$quiz_text_a3_yes = "Budovanie dlhodobého bohatstva";
$quiz_text_a3_no = "Generovanie krátkodobého príjmu";
$quiz_text_q4 = "S akou sumou by ste chceli začať?";
$quiz_text_a4_1 = "Menej ako $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Viac ako $1000";
$quiz_text_q5 = "Skvelé. Chcete, aby som vám teraz otvorila bezplatný účet?";
$quiz_text_a5_yes = "Áno, urobme to";
$quiz_text_a5_no = "Teraz nie";
$quiz_text_loader = "Hľadáme najlepší plán pre vás...";
$quiz_text_final_ttl = "Všetko je pripravené!";
$quiz_text_processing = "Vaše údaje sa odosielajú...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Krstné meno";
$quiz_placeholder_lname = "Priezvisko";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Získať Môj Bezplatný Účet";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Domov";
$bc_about = "O nás";
$bc_product = "Produkt";
$bc_offer = "Ponuka";
$bc_contacts = "Kontakt";
$bc_faq = "Časté Otázky";
$bc_privacy = "Zásady Ochrany Osobných Údajov";
$bc_conditions = "Podmienky Používania";
$bc_risk = "Upozornenie na Riziko";
$bc_sign = "Registrácia";
$bc_thanks = "Ďakujeme";
$bc_sitemap = "Mapa Stránky";

// -------------------------
// About page
// -------------------------
$about_meta_title = "O $site_name";
$about_meta_description = "Zistite viac o poslaní $site_name: urobiť trhovú analýzu jasnejšou a dostupnejšou pomocou nástrojov poháňaných AI.";
$about_h1 = "O $site_name";
$about_lead = "$site_name bola vybudovaná okolo jednej myšlienky: obchodné rozhodnutia by mali byť založené na jasných informáciách, nie na hádaní.";
$about_p1 = "Kombinujeme umelú inteligenciu so skutočnými trhovými skúsenosťami, aby sme premenili zložité, chaotické údaje na signály, ktoré sú ľahko pochopiteľné a použiteľné. Naša platforma sleduje trhy dňom aj nocou, takže vy to nemusíte robiť.";
$about_p2 = "Či už robíte svoj prvý obchod, alebo ste na trhoch aktívni už roky, $site_name je navrhnutá tak, aby vás oslovila tam, kde ste — s nástrojmi siahajúcimi od jednoduchého vedenia až po pokročilú analýzu v reálnom čase.";
$about_p3 = "Veríme, že technológia by mala podporovať váš úsudok, nie ho nahrádzať. Každý signál, ktorý $site_name generuje, má za cieľ informovať rozhodnutie, ktoré je stále úplne vaše.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Produkt $site_name — AI Nástroje na Trhovú Analýzu";
$product_meta_description = "Preskúmajte produkt $site_name: trhovú analýzu AI v reálnom čase, copy trading, kontroly rizika a automatizovanú diverzifikáciu.";
$product_h1 = "Produkt $site_name";
$product_lead = "Jedna platforma, ktorá číta trh za vás: analýza v reálnom čase, copy trading a flexibilné nástroje na riziko, navrhnuté tak, aby boli obchodné rozhodnutia jasnejšie.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Ponuka $site_name — Začnite Zadarmo";
$offer_meta_description = "Pozrite sa, čo je zahrnuté v súčasnej ponuke $site_name: bezplatná registrácia, žiadne obchodné provízie a plný prístup k platforme.";
$offer_h1 = "Naša súčasná ponuka";
$offer_lead = "Vytvorte si účet zadarmo a odomknite plnú platformu $site_name &mdash; žiadne registračné poplatky, žiadne obchodné provízie.";
$offer_li1 = "Žiadny poplatok za registráciu vášho účtu";
$offer_li2 = "Žiadne provízie z transakcií";
$offer_li3 = "Plný prístup k trhovej analýze AI v reálnom čase a copy tradingu";
$offer_li4 = "Výbery dostupné kedykoľvek, bez skrytých poplatkov";
$offer_li5 = "Vzdelávacie zdroje o krypte, Forexe a investovaní zahrnuté";
$offer_note = "Dostupnosť sa môže líšiť podľa regiónu. Prečítajte si naše <a class=\"link\" href=\"risk-warning.php\">Upozornenie na Riziko</a> pred financovaním účtu.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontaktujte $site_name — Spojte sa s naším tímom";
$contacts_meta_description = "Máte otázku týkajúcu sa vášho účtu $site_name alebo platformy? Kontaktujte náš podporný tím e-mailom alebo nám pošlite správu.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Otázky týkajúce sa vášho účtu, vkladu alebo fungovania platformy? Náš tím je pripravený pomôcť.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Podporné Hodiny";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typický Čas Odozvy";
$contacts_response_value = "Do 24 hodín";
$contacts_form_title = "Pošlite Nám Správu";
$contacts_form_desc = "Zanechajte svoje údaje nižšie a člen nášho tímu vás priamo kontaktuje.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Zásady Ochrany Osobných Údajov $site_name";
$privacy_meta_description = "Zistite, ako $site_name zhromažďuje, používa a chráni vaše osobné údaje na celej webovej stránke a platforme.";
$privacy_sections = [
    [
        "title" => "1. Úvod",
        "body" => "Tieto Zásady Ochrany Osobných Údajov vysvetľujú, ako $site_name (\"my\") zhromažďuje, používa a chráni osobné údaje návštevníkov a používateľov $site_domain (\"Webová Stránka\"). Používaním Webovej Stránky súhlasíte s postupmi opísanými nižšie.",
    ],
    [
        "title" => "2. Informácie, Ktoré Zhromažďujeme",
        "body" => "Môžeme zhromažďovať informácie, ktoré priamo poskytnete, ako je vaše meno, e-mailová adresa a telefónne číslo pri registrácii alebo odoslaní formulára, ako aj automaticky zhromaždené informácie vrátane vašej IP adresy, typu zariadenia a prehliadača a stránok zobrazených na Webovej Stránke.",
    ],
    [
        "title" => "3. Ako Používame Vaše Informácie",
        "body" => "Zhromaždené informácie používame na vytvorenie a správu vášho účtu, odpovedanie na otázky, poskytovanie zákazníckej podpory, zlepšovanie Webovej Stránky a našich služieb a tam, kde je to povolené, na zasielanie aktualizácií o produktoch a ponukách. Marketingovú komunikáciu môžete kedykoľvek odhlásiť.",
    ],
    [
        "title" => "4. Súbory Cookie a Sledovacie Technológie",
        "body" => "Webová Stránka používa súbory cookie a podobné technológie na zapamätanie vašich preferencií, udržanie vášho prihlásenia a pochopenie toho, ako návštevníci používajú naše stránky. Súbory cookie môžete zakázať prostredníctvom nastavení prehliadača, hoci niektoré funkcie nemusia fungovať správne.",
    ],
    [
        "title" => "5. Zdieľanie Informácií",
        "body" => "Vaše osobné údaje nepredávame. Môžeme zdieľať informácie s dôveryhodnými poskytovateľmi služieb, ktorí nám pomáhajú prevádzkovať Webovú Stránku (ako sú poskytovatelia hostingu alebo analytiky), alebo keď to vyžaduje zákon, alebo na ochranu našich zákonných práv.",
    ],
    [
        "title" => "6. Bezpečnosť Údajov",
        "body" => "Uplatňujeme primerané technické a organizačné opatrenia na ochranu vašich informácií pred neoprávneným prístupom, zmenou alebo stratou. Žiadna metóda prenosu alebo uchovávania nie je úplne bezpečná a nemôžeme zaručiť absolútnu bezpečnosť.",
    ],
    [
        "title" => "7. Vaše Práva a Voľby",
        "body" => "V závislosti od vašej polohy môžete mať právo na prístup, opravu alebo požiadanie o vymazanie vašich osobných údajov a namietať proti určitým spôsobom ich použitia. Na uplatnenie týchto práv nás kontaktujte prostredníctvom našej <a class=\"link\" href=\"contacts.php\">kontaktnej stránky</a>.",
    ],
    [
        "title" => "8. Ochrana Súkromia Detí",
        "body" => "Webová Stránka nie je určená osobám mladším ako 18 rokov a vedome nezhromažďujeme osobné údaje od maloletých. Ak si myslíte, že nám maloletý poskytol osobné údaje, kontaktujte nás, aby sme ich mohli odstrániť.",
    ],
    [
        "title" => "9. Zmeny Týchto Zásad",
        "body" => "Tieto Zásady Ochrany Osobných Údajov môžeme z času na čas aktualizovať. Akékoľvek zmeny budú zverejnené na tejto stránke s revidovaným dátumom účinnosti. Odporúčame vám túto stránku pravidelne kontrolovať.",
    ],
    [
        "title" => "10. Kontaktujte Nás",
        "body" => "Ak máte otázky týkajúce sa týchto Zásad Ochrany Osobných Údajov alebo spôsobu spracovania vašich informácií, kontaktujte nás prostredníctvom našej <a class=\"link\" href=\"contacts.php\">kontaktnej stránky</a> alebo nám napíšte na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Podmienky Používania $site_name";
$conditions_meta_description = "Prečítajte si Podmienky Používania upravujúce prístup a používanie webovej stránky a obchodnej platformy $site_name.";
$conditions_sections = [
    [
        "title" => "1. Prijatie Podmienok",
        "body" => "Prístupom k $site_domain (\"Webová Stránka\") alebo jej používaním súhlasíte s tým, že budete viazaní týmito Podmienkami Používania. Ak nesúhlasíte s akoukoľvek časťou týchto podmienok, nepoužívajte Webovú Stránku.",
    ],
    [
        "title" => "2. Spôsobilosť",
        "body" => "Aby ste mohli používať Webovú Stránku, musíte mať aspoň 18 rokov a mať právnu spôsobilosť používať služby súvisiace s obchodovaním vo vašej jurisdikcii. Používaním Webovej Stránky potvrdzujete, že spĺňate tieto požiadavky.",
    ],
    [
        "title" => "3. Popis Služby",
        "body" => "$site_name poskytuje online platformu so vzdelávacím obsahom, trhovými informáciami a analytickými nástrojmi podporovanými AI. Nič na Webovej Stránke nepredstavuje finančné, investičné, daňové alebo právne poradenstvo a všetky poskytnuté informácie slúžia iba na všeobecné informačné účely.",
    ],
    [
        "title" => "4. Zodpovednosti Používateľa",
        "body" => "Ste zodpovední za poskytnutie presných informácií pri registrácii, za zachovanie dôvernosti poverení vášho účtu a za všetky aktivity, ktoré sa uskutočňujú pod vaším účtom.",
    ],
    [
        "title" => "5. Duševné Vlastníctvo",
        "body" => "Všetok obsah na Webovej Stránke vrátane textu, obrázkov, log a softvéru je vlastníctvom $site_name alebo jej poskytovateľov licencií a je chránený platnými zákonmi o duševnom vlastníctve. Nesmiete reprodukovať ani distribuovať tento obsah bez povolenia.",
    ],
    [
        "title" => "6. Žiadne Finančné Poradenstvo",
        "body" => "Obsah na Webovej Stránke je poskytovaný výlučne na informačné a vzdelávacie účely a nemal by sa vykladať ako finančné poradenstvo. Ste sami zodpovední za svoje vlastné obchodné rozhodnutia a mali by ste sa poradiť s nezávislým finančným poradcom tam, kde je to potrebné. Ďalšie informácie nájdete v našom <a class=\"link\" href=\"risk-warning.php\">Upozornení na Riziko</a>.",
    ],
    [
        "title" => "7. Obmedzenie Zodpovednosti",
        "body" => "V maximálnom rozsahu povolenom zákonom nie je $site_name zodpovedná za žiadne priame, nepriame, náhodné alebo následné škody vyplývajúce z vášho používania alebo neschopnosti používať Webovú Stránku alebo súvisiace služby tretích strán.",
    ],
    [
        "title" => "8. Ukončenie",
        "body" => "Vyhradzujeme si právo pozastaviť alebo ukončiť váš prístup k Webovej Stránke podľa vlastného uváženia bez upozornenia za správanie, o ktorom sa domnievame, že porušuje tieto Podmienky Používania alebo je inak škodlivé pre iných používateľov alebo Webovú Stránku.",
    ],
    [
        "title" => "9. Zmeny Týchto Podmienok",
        "body" => "Tieto Podmienky Používania môžeme kedykoľvek revidovať. Pokračujúce používanie Webovej Stránky po zverejnení zmien predstavuje prijatie aktualizovaných podmienok.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Otázky týkajúce sa týchto Podmienok Používania môžu byť adresované nášmu tímu prostredníctvom <a class=\"link\" href=\"contacts.php\">kontaktnej stránky</a> alebo e-mailom na info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Upozornenie na Riziko $site_name — Zverejnenie Obchodného Rizika";
$risk_meta_description = "Prečítajte si upozornenie na riziko $site_name pred obchodovaním: riziká krypto trhu, pákový efekt, likvidita, kybernetická bezpečnosť a regulačné úvahy.";
$risk_title = "Upozornenie na Riziko";
$risk_intro = "Pochopenie rizík je prvým krokom k sebavedomému obchodovaniu.";
$risk_ai_title = "Ako náš AI systém pomáha pri riadení rizika:";
$risk_ai_1_title = "Algoritmická Efektívnosť a Obchodovanie Bez Emócií:";
$risk_ai_1_text = "Pokročilé algoritmy analyzujú trhové signály, aby objektívne vykonávali transakcie v optimálnych okamihoch.";
$risk_ai_2_title = "Stratégie Založené na Údajoch:";
$risk_ai_2_text = "Stratégie sú založené na overených trhových vzoroch a analýze v reálnom čase, nie na hádaní.";
$risk_ai_3_title = "Flexibilné Nastavenia a Plná Kontrola:";
$risk_ai_3_text = "Upravte svoje rizikové parametre kedykoľvek. Sledujte všetky zostatky a transakcie transparentne na svojom prehľade, bez skrytých poplatkov a bez obmedzení výberu.";
$risk_disclaimer = "<strong>Vyhlásenie o Vylúčení Zodpovednosti:</strong> Obchodovanie vždy zahŕňa riziko. Automatizované systémy (vrátane AI) nezaručujú zisk, môžu zlyhať kvôli chybám softvéru alebo neočakávaným trhovým udalostiam a vyžadujú dohľad používateľa. Minulá výkonnosť nezaručuje budúce výsledky. Táto platforma slúži výlučne na informačné a marketingové účely a neposkytuje finančné poradenstvo.";
$risk_s1_title = "1. Všeobecné Riziko Krypto Trhu";
$risk_s1_text = "Kryptomeny sú vysoko volatilné, špekulatívne aktíva, ktoré fungujú nepretržite s minimálnym regulačným dohľadom vo väčšine jurisdikcií.";
$risk_s1_li1 = "Hodnoty môžu dramaticky kolísať v krátkych obdobiach, čo môže potenciálne viesť k úplnej strate investovaného kapitálu.";
$risk_s1_li2 = "Trhové hodnoty môžu byť silne ovplyvnené regulačnými zmenami, technologickým vývojom, bezpečnostnými narušeniami alebo širšími makroekonomickými udalosťami.";
$risk_s1_li3 = "Niektoré aktíva môžu úplne stratiť svoju hodnotu. Investujte iba prostriedky, ktorých stratu si môžete dovoliť.";
$risk_s2_title = "2. Riziko Vykonania, Likvidity a Pákového Efektu";
$risk_s2_li1_title = "Trhová Volatilita a Likvidita:";
$risk_s2_li1_text = "Extrémne cenové pohyby (10-20%+ denne) alebo nízka likvidita (najmä pri menších minciach) môžu spôsobiť oneskorenia, zlyhania platformy a vážne sklzy pri vykonávaní. Stop-loss príkazy nemusia zaručiť limity strát v extrémnych podmienkach.";
$risk_s2_li2_title = "Riziko Pákového Efektu a Marže:";
$risk_s2_li2_text = "Produkty s pákovým efektom zosilňujú zisky aj straty, čo znamená, že môžete stratiť viac ako svoj pôvodný vklad. Približne 70-80% účtov retailových investorov stráca peniaze pri obchodovaní s produktmi s pákovým efektom.";
$risk_s3_title = "3. Technické, Kybernetické a Riziko Tretích Strán";
$risk_s3_li1_title = "Technické Faktory:";
$risk_s3_li1_text = "Online obchodovanie so sebou nesie inherentné riziká zlyhania internetového pripojenia, chýb hardvéru/softvéru a nedostupnosti služby.";
$risk_s3_li2_title = "Kybernetická Bezpečnosť:";
$risk_s3_li2_text = "Krypto účty sú častým cieľom phishingu, malvéru a hackingu. Transakcie sú nezvratné; kompromitácia vašich prihlasovacích údajov môže viesť k trvalej strate.";
$risk_s3_li3_title = "Platformy Tretích Strán:";
$risk_s3_li3_text = "Táto webová stránka môže spájať používateľov s platformami tretích strán. Nekontrolujeme, neschvaľujeme ani nezaručujeme ich bezpečnosť, prevádzku alebo solventnosť. Pred vložením prostriedkov na externé platformy vždy vykonajte vlastnú dôkladnú due diligence.";
$risk_s4_title = "4. Regulačné, Daňové a Záverečné Ustanovenia";
$risk_s4_li1_title = "Právne Dodržiavanie a Dane:";
$risk_s4_li1_text = "Regulačné rámce sa výrazne líšia a rýchlo sa menia. Používatelia sú výlučne zodpovední za zabezpečenie toho, aby ich obchodné aktivity boli v súlade s miestnymi zákonmi, a za plnenie svojich vlastných daňových povinností.";
$risk_s4_li2_title = "Žiadne Záruky Zisku:";
$risk_s4_li2_text = "Neexistuje žiadne \"bezpečné\" alebo bezrizikové krypto obchodovanie. Akékoľvek uvedené čísla výnosov alebo príklady výkonnosti sú čisto hypotetické.";
$risk_s4_li3_title = "Vhodnosť:";
$risk_s4_li3_text = "Ak plne nerozumiete rizikám, ste závislí od základných prostriedkov alebo obchodujete s požičanými peniazmi, krypto obchodovanie nie je pre vás vhodné. V prípade pochybností sa poraďte s nezávislým, licencovaným finančným poradcom.";
$risk_contact = "<strong>Kontakt:</strong> V prípade otázok týkajúcich sa tohto vyhlásenia alebo na predloženie otázky kontaktujte náš oficiálny tím zákazníckych služieb prostredníctvom kontaktného formulára na našej webovej stránke.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrácia | $site_name — Vytvorte si Bezplatný Účet";
$sign_meta_description = "Vytvorte si bezplatný účet $site_name za pár minút a začnite obchodovať inteligentnejšie s trhovou analýzou poháňanou AI.";
$sign_h1 = "Vytvorte si Bezplatný Účet";
$sign_lead = "Pripojte sa k $site_name za pár minút. Vyplňte svoje údaje nižšie, aby ste mohli začať.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Ďakujeme | $site_name";
$thanks_h1 = "Ďakujeme!";
$thanks_text = "Vaše údaje boli prijaté. Člen tímu $site_name vás čoskoro kontaktuje, aby vám pomohol začať.";
$thanks_btn = "Späť Domov";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mapa Stránky | $site_name";
$sitemap_meta_description = "Pozrite si každú stránku webovej stránky $site_name, vrátane obchodnej platformy, ponuky, podpory a právnych stránok.";
$sitemap_h1 = "Mapa Stránky";
$sitemap_lead = "Každá stránka $site_name na jednom mieste.";

