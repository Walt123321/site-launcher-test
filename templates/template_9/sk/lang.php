<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sk-SK';
$form_language = 'sk'; // matches this page's own language, not the offer's global default

// ============================================================
// SK TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficiálna Webová Stránka | Obchodná Platforma";
$home_meta_description = "$site_name ponúka užívateľsky prívetivú obchodnú platformu s pokročilými trhovými nástrojmi, informáciami v reálnom čase a praktickými funkciami navrhnutými tak, aby bolo online obchodovanie dostupnejšie a informovanejšie.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Platforma $site_name";
$hero_subtitle = "Podporujeme milióny ľudí na celom svete na ich ceste digitálnymi aktívami";
$hero_badge_title = "Spokojní Členovia";
$hero_badge_subtitle = "Milovaná miliónmi";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Začnite Obchodovať Ešte Dnes";
$form_desc = "Ste pripravení urobiť svoj krok? Zaregistrujte sa teraz a urobte prvý krok k finančnej slobode. Začnite už s $app_price $app_currency — získajte prístup ku všetkým obchodným nástrojom, trhovým dátam v reálnom čase a plnému prístupu k platforme od prvého dňa.";
$form_fname_placeholder = "Meno";
$form_lname_placeholder = "Priezvisko";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Zaregistrovať sa";
$form_disclaimer_text = "Zadaním svojich osobných údajov a kliknutím na tlačidlo súhlasíte so <a class=\"link\" href=\"privacy.php\">Zásadami ochrany osobných údajov</a> a <a class=\"link\" href=\"conditions.php\">Podmienkami používania</a> webovej stránky.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BEZPEČNÉ";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Spoznajte Platformu";
$stats_title = "Rýchly úvod do inteligentnejšieho obchodovania";
$stat_1_value = "154+";
$stat_1_label = "Pokrytých Krajín";
$stat_2_value = "29 Miliónov";
$stat_2_label = "Globálnych Investorov";
$stat_3_value = "635+";
$stat_3_label = "Mincí";
$stat_4_value = "3,26 Miliardy $";
$stat_4_label = "24-hodinový Objem Obchodovania";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Prečo $site_name?";
$why_title = "Dôvody, Prečo si Nás Vybrať";
$why_1_title = "Rýchlo &amp; Jednoducho";
$why_1_text = "Kupujte a predávajte svoje obľúbené kryptomeny v priebehu sekúnd.";
$why_2_title = "Bezpečne &amp; Chránené";
$why_2_text = "Používame najnovšie technológie, aby boli vaše finančné prostriedky a údaje v bezpečí.";
$why_3_title = "Otvorené Pre Všetkých";
$why_3_text = "Obchodujte na našej platforme 24/7, kdekoľvek a kedykoľvek chcete.";
$why_4_title = "Profesionálne Nástroje";
$why_4_text = "Od jednoduchých po profesionálne obchodné funkcie, máme všetko.";
$why_5_title = "Trendy &amp; Postrehy";
$why_5_text = "Získajte najnovšie kryptonovinky, postrehy a trendy od odborníkov.";
$why_6_title = "Podpora 24/7";
$why_6_text = "Náš priateľský tím podpory je tu, aby vám kedykoľvek pomohol.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Ako to Funguje";
$how_title = "Jednoduché Kroky na Začatie Obchodovania";
$how_1_title = "Zaregistrovať sa";
$how_1_text = "Vytvorte si účet a začnite obchodovať v priebehu niekoľkých minút.";
$how_1_btn = "Začať Obchodovať";
$how_2_title = "Vložte Prostriedky";
$how_2_text = "Financujte svoj účet minimálnym vkladom $app_price $app_currency, aby ste odomkli plný prístup k obchodovaniu. Vyberte si z viacerých spôsobov platby a začnite budovať svoje portfólio ešte dnes.";
$how_2_note = "Pridajte prostriedky....";
$how_3_title = "Začať Obchodovať";
$how_3_text = "Preskúmajte trh a obchodujte podľa seba.";
$how_3_note = "Kúpte a Držte";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulačka";
$calc_title = "Zistite, koľko času a potenciálu nechávate nevyužité";
$calc_volume_label = "Mesačný Objem Obchodovania";
$calc_trades_label = "Obchody za Týždeň";
$calc_time_label = "Čas, Ktorý by Ste Mohli Ušetriť";
$calc_boost_label = "Potenciálne Zvýšenie Objemu";
$calc_btn = "Začať Obchodovať";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funkcie";
$features_title = "Sila $site_name";
$feature_1_title = "Spotové Obchodovanie";
$feature_1_text = "Maximalizujte svoj obchodný potenciál pomocou profesionálnych nástrojov.";
$feature_2_title = "Kúpte Krypto";
$feature_2_text = "Kúpte krypto pomocou kariet alebo bánk.";
$feature_3_title = "Krypto Deriváty";
$feature_3_text = "Jednoduché, pokročilé futures obchodovanie.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Nechajte svoje bohatstvo rásť s ľahkosťou.";
$feature_5_title = "Obchodný Bot";
$feature_5_text = "Vyššie zisky, aj keď spíte.";
$feature_6_title = "Maržové Obchodovanie";
$feature_6_text = "Požičiavajte si, obchodujte a splácajte jednoducho.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Čo Hovoria Naši Používatelia";
$review_1_text = "Platforma sa veľmi ľahko používa a od chvíle, čo som sa stal držiteľom, som zaznamenal stály pokrok. Nasadenie tímu a nové nápady ma tešia na to, čo príde ďalej!";
$review_1_role = "Obchodník";
$review_2_text = "$site_name ponúka hladký a intuitívny obchodný zážitok. Mohol som okamžite začať nakupovať a obchodovať s kryptom. Rozhranie je jednoduché na použitie a rýchlosť transakcií je vynikajúca!";
$review_2_role = "Nový Obchodník";
$review_3_text = "Dôverujem tejto platforme pri správe svojich krypto investícií. Jej bezpečnostné funkcie mi dávajú istotu a nikdy som nemal problémy s výbermi alebo vkladmi. Je to jedna z najspoľahlivejších búrz, ktoré som kedy použil.";
$review_3_role = "Profesionálny Obchodník";
$review_4_text = "Kedykoľvek som mal otázky, tím zákazníckej podpory bol rýchly a nápomocný. Skutočne im záleží na svojich používateľoch a robia každý obchodný zážitok plynulým a jednoduchým.";
$review_4_role = "Skúsený Obchodník";
$review_5_text = "Ako začiatočník som zistil, že $site_name sa veľmi ľahko používa. Čo skutočne vyniká, je rozsah pokročilých nástrojov pre skúsenejších obchodníkov. Je to skvelá voľba pre každého, kto chce budovať svoje portfólio!";
$review_5_role = "Obchodník z Komunity";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Často Kladené Otázky";
$faq_title = "Často Kladené Otázky";
$faq_q1 = "Čo je $site_name?";
$faq_a1 = "$site_name je krypto burza, kde môžu používatelia jednoducho obchodovať so širokou škálou mincí vrátane Bitcoinu, Etherea a ďalších populárnych kryptomien.";
$faq_q2 = "Ako Bezpečná je $site_name pre Krypto Obchodovanie?";
$faq_a2 = "Platforma poskytuje bezpečnosť prostredníctvom pokročilej technológie a krytia aktív 1:1 prostredníctvom Proof of Reserves.";
$faq_q3 = "Ako Vykonám Vklad?";
$faq_a3 = "$site_name ponúka viacero možností vkladu, vrátane krypto vkladu, fiat vkladu, P2P obchodovania a nákupu jedným kliknutím.";
$faq_q4 = "Potrebujem Skúsenosti na Používanie $site_name?";
$faq_a4 = "Nie, nepotrebujete žiadne skúsenosti. Užívateľsky prívetivé rozhranie platformy ju sprístupňuje každému, od začiatočníkov po pokročilých obchodníkov.";
$faq_q5 = "Existujú nejaké skryté poplatky alebo náklady?";
$faq_a5 = "Vôbec nie. Neexistujú žiadne registračné poplatky, náklady na predplatné ani skryté poplatky akéhokoľvek druhu. Pred potvrdením vždy vidíte presnú sumu transakcie. Príjmy pochádzajú z prémiových funkcií a partnerstiev búrz, nie z odoberania peňazí od používateľov.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Začnite Obchodovať Ešte Dnes";
$cta_desc = "Ste pripravení urobiť svoj krok? Zaregistrujte sa teraz a urobte prvý krok k finančnej nezávislosti.";
$cta_btn = "Zaregistrovať sa";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Kľúčové Vlastnosti Obchodnej Platformy $site_name";
$table_1_label = "🤖 Technológia Platformy";
$table_1_val = "Pokročilý AI Obchodný Motor";
$table_2_label = "💳 Spôsoby Financovania";
$table_2_val = "Hlavné Kreditné Karty, Bankový Prevod, PayPal";
$table_3_label = "📱 Prístup k Platforme";
$table_3_val = "Kompatibilita s Viacerými Zariadeniami";
$table_4_label = "🚀 Miera Výkonu";
$table_4_val = "85% Presnosť";
$table_5_label = "📊 Obchodné Nástroje";
$table_5_val = "Akcie, Forex, Komodity, Drahé Kovy, CFD, Kryptomeny a ďalšie…";
$table_6_label = "✍️ Nastavenie Účtu";
$table_6_val = "Rýchle a Efektívne";
$table_7_label = "📞 Zákaznícka Podpora";
$table_7_val = "24/7 Profesionálna Pomoc";

// Reviews summary card
$summary_title = "Recenzie $site_name";
$summary_badge = "Dôveryhodné";
$summary_desc = "Výkonná, užívateľsky prívetivá obchodná platforma so solídnou automatizáciou a vzdelávacími zdrojmi.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Obchodujte múdro, rastte rýchlo";
$footer_community_label = "Komunita";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Ponuka";
$footnav_contacts = "Kontaktujte nás";
$footnav_faq = "Často Kladené Otázky";
$footnav_privacy = "Zásady Ochrany Osobných Údajov";
$footnav_conditions = "Podmienky Používania";
$footnav_risk = "Upozornenie na Riziko";
$footer_disclaimer = "$site_name zdieľa vzdelávacie zdroje a materiály súvisiace s trhom, aby pomohla návštevníkom lepšie pochopiť obchodovanie, investovanie a digitálne finančné produkty. Informácie prezentované na webovej stránke, ako sú trhové komentáre, ceny aktív, grafy, príručky a analytický obsah, sú poskytované na všeobecné informačné účely a nepredstavujú finančné, investičné, daňové ani právne poradenstvo. Aj keď sa vynakladá primerané úsilie na udržiavanie presných a relevantných informácií, $site_name neposkytuje žiadne záruky týkajúce sa úplnosti, presnosti alebo aktuálnosti obsahu a nemôže byť zodpovedná za rozhodnutia alebo straty vyplývajúce z jeho použitia.<br><br>Účasť na finančných trhoch prináša inherentné riziká. Kryptomena, Forex, CFD, akcie a ďalšie obchodné nástroje môžu zaznamenať výrazné cenové výkyvy a môžu nastať straty. Individuálne okolnosti a tolerancia rizika sa líšia, preto by mali používatelia vykonať vlastný prieskum a zvážiť získanie rady od kvalifikovaného finančného odborníka pred vložením finančných prostriedkov. Nikdy neobchodujte s peniazmi, ktoré si nemôžete dovoliť stratiť.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Obchodný Konzultant";
$quiz_text_welcome = "Ahoj! Som Maya, vaša osobná obchodná konzultantka. Máte pár minút na to, aby sme pre vás našli najlepší plán?";
$quiz_text_q1 = "Obchodovali ste už niekedy s kryptomenou?";
$quiz_text_a1_yes = "Áno, mám skúsenosti";
$quiz_text_a1_no = "Nie, som začiatočník";
$quiz_text_q2 = "Skvelé! Aké je vaše meno, aby som mohla prispôsobiť váš plán?";
$quiz_text_q3 = "Aký je váš hlavný cieľ pri obchodovaní?";
$quiz_text_a3_yes = "Vybudovať dlhodobé bohatstvo";
$quiz_text_a3_no = "Generovať krátkodobý príjem";
$quiz_text_q4 = "S koľkými chcete začať?";
$quiz_text_a4_1 = "Pod $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Nad $1000";
$quiz_text_q5 = "Skvelé. Chcete, aby som vám teraz otvorila bezplatný účet?";
$quiz_text_a5_yes = "Áno, poďme na to";
$quiz_text_a5_no = "Teraz nie";
$quiz_text_loader = "Hľadám váš najlepší plán...";
$quiz_text_final_ttl = "Všetko je pripravené!";
$quiz_text_processing = "Odosielam vaše údaje...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Meno";
$quiz_placeholder_lname = "Priezvisko";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Získať Môj Bezplatný Účet";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Upozornenie na Riziko — Zverejnenie Obchodného Rizika";
$risk_meta_description = "Prečítajte si upozornenie na riziko $site_name pred obchodovaním: riziká krypto trhu, pákový efekt, likvidita, kybernetická bezpečnosť a regulačné aspekty.";
$risk_title = "Upozornenie na Riziko";
$risk_intro = "Pochopenie rizík je prvým krokom k sebavedomému obchodovaniu.";
$risk_ai_title = "Ako Náš AI Systém Pomáha Riadiť Riziko:";
$risk_ai_1_title = "Algoritmická Efektívnosť &amp; Obchodovanie Bez Emócií:";
$risk_ai_1_text = "Pokročilé algoritmy analyzujú trhové signály na objektívne vykonávanie obchodov v optimálnych momentoch.";
$risk_ai_2_title = "Stratégie Riadené Dátami:";
$risk_ai_2_text = "Stratégie sú založené na overených trhových vzorcoch a analýze v reálnom čase, nie na dohadoch.";
$risk_ai_3_title = "Flexibilné Nastavenia &amp; Plná Kontrola:";
$risk_ai_3_text = "Kedykoľvek upravte svoje rizikové parametre. Transparentne sledujte všetky zostatky a obchody na svojom ovládacom paneli, bez skrytých poplatkov a bez obmedzení výberov.";
$risk_disclaimer = "<strong>Vyhlásenie o Odmietnutí Zodpovednosti:</strong> Obchodovanie vždy nesie riziko. Automatizované systémy (vrátane AI) nezaručujú zisk, môžu zlyhať kvôli chybám softvéru alebo neočakávaným trhovým udalostiam a vyžadujú monitorovanie používateľom. Minulá výkonnosť nie je indikátorom budúcich výsledkov. Táto platforma slúži výlučne na informačné a marketingové účely a neposkytuje finančné poradenstvo.";
$risk_s1_title = "1. Všeobecné Riziká &amp; Riziká Trhu Kryptomien";
$risk_s1_text = "Kryptomeny sú vysoko volatilné, špekulatívne aktíva, ktoré fungujú 24/7 s minimálnym regulačným dohľadom vo väčšine jurisdikcií.";
$risk_s1_li1 = "Hodnoty môžu drasticky kolísať v krátkych obdobiach, čo môže potenciálne viesť k úplnej strate investovaného kapitálu.";
$risk_s1_li2 = "Trhové hodnoty môžu byť výrazne ovplyvnené regulačnými aktualizáciami, technickým vývojom, bezpečnostnými únikmi alebo širšími makroekonomickými udalosťami.";
$risk_s1_li3 = "Niektoré aktíva môžu úplne stratiť všetku hodnotu. Investujte iba finančné prostriedky, ktoré si môžete dovoliť stratiť.";
$risk_s2_title = "2. Riziká Vykonávania, Likvidity &amp; Pákového Efektu";
$risk_s2_li1_title = "Volatilita Trhu &amp; Likvidita:";
$risk_s2_li1_text = "Extrémne cenové pohyby (10-20 %+ denne) alebo nízka likvidita (najmä pri menších minciach) môžu viesť k oneskoreniam, výpadkom platformy a vážnemu prekĺznutiu vykonania. Príkazy stop-loss nemôžu zaručiť limity strát v extrémnych podmienkach.";
$risk_s2_li2_title = "Riziká Pákového Efektu &amp; Marže:";
$risk_s2_li2_text = "Pákové produkty zosilňujú zisky aj straty, čo znamená, že môžete stratiť viac ako váš pôvodný vklad. <em>Približne 70-80 % účtov retailových investorov stráca peniaze pri obchodovaní s pákovými produktmi.</em>";
$risk_s3_title = "3. Technické Riziká, Riziká Kybernetickej Bezpečnosti &amp; Tretích Strán";
$risk_s3_li1_title = "Technické Faktory:";
$risk_s3_li1_text = "Online obchodovanie prirodzene zahŕňa riziká odpojenia internetu, chýb hardvéru/softvéru a nedostupnosti služby.";
$risk_s3_li2_title = "Kybernetická Bezpečnosť:";
$risk_s3_li2_text = "Účty kryptomien sú častým cieľom phishingu, malvéru a hackingu. Transakcie sú nezvratné; kompromitácia vašich prihlasovacích údajov môže viesť k trvalej strate.";
$risk_s3_li3_title = "Platformy Tretích Strán:";
$risk_s3_li3_text = "Táto webová stránka môže prepojiť používateľov s platformami tretích strán. Nekontrolujeme, neschvaľujeme ani nezaručujeme ich bezpečnosť, prevádzku alebo solventnosť. Pred vložením finančných prostriedkov na externé platformy vždy vykonajte vlastnú dôkladnú náležitú starostlivosť.";
$risk_s4_title = "4. Regulačné, Daňové &amp; Záverečné Ustanovenia";
$risk_s4_li1_title = "Súlad so Zákonmi &amp; Dane:";
$risk_s4_li1_text = "Regulačné rámce sa značne líšia a rýchlo sa menia. Používatelia sú výlučne zodpovední za zabezpečenie toho, aby ich obchodná činnosť bola v súlade s miestnymi zákonmi, a za plnenie svojich vlastných daňových povinností.";
$risk_s4_li2_title = "Žiadne Záruky Zisku:";
$risk_s4_li2_text = "Neexistuje žiadne „bezpečné“ alebo bezrizikové krypto obchodovanie. Akékoľvek uvedené výnosové čísla alebo príklady výkonnosti sú čisto hypotetické.";
$risk_s4_li3_title = "Vhodnosť:";
$risk_s4_li3_text = "Ak plne nerozumiete rizikám, spoliehate sa na nevyhnutné finančné prostriedky alebo obchodujete s požičanými peniazmi, krypto obchodovanie pre vás nie je vhodné. Ak si nie ste istí, poraďte sa s nezávislým licencovaným finančným poradcom.";
$risk_contact = "<strong>Kontakt:</strong> Ak máte akékoľvek otázky týkajúce sa tohto vyhlásenia alebo chcete odoslať otázku, obráťte sa na náš oficiálny tím zákazníckej podpory prostredníctvom kontaktného formulára na našej webovej stránke.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Domov";
$bc_product = "Produkt";
$bc_offer = "Ponuka";
$bc_contacts = "Kontaktujte nás";
$bc_faq = "Často Kladené Otázky";
$bc_privacy = "Zásady Ochrany Osobných Údajov";
$bc_conditions = "Podmienky Používania";
$bc_risk = "Upozornenie na Riziko";
$bc_sign = "Zaregistrovať sa";
$bc_sitemap = "Mapa Stránky";
$bc_thanks = "Ďakujeme";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produkt $site_name — Obchodné Nástroje &amp; Vlastnosti Platformy";
$product_meta_description = "Preskúmajte produkt $site_name: spotové obchodovanie, krypto deriváty, obchodný bot, maržové obchodovanie a ďalšie, všetko postavené na rýchlej a bezpečnej platforme.";
$product_h1 = "Obchodný Produkt $site_name";
$product_lead = "Jedna platforma, každý nástroj, ktorý obchodník potrebuje: od vášho prvého spotového obchodu po automatizované stratégie a maržové pozície, $site_name udržiava zážitok rýchly, bezpečný a ľahko zrozumiteľný.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Ponuka $site_name — Začnite Obchodovať od $$app_price";
$offer_meta_description = "Pozrite si, čo je zahrnuté v aktuálnej ponuke $site_name: nízky minimálny vklad $$app_price, plný prístup k platforme a žiadne skryté poplatky.";
$offer_h1 = "Naša Aktuálna Ponuka";
$offer_lead = "Začnite už s <strong>$$app_price $app_currency</strong> a odomknite plnú platformu $site_name od prvého dňa &mdash; každý nástroj, každý trh, žiadne skryté náklady.";
$offer_li1 = "Minimálny vklad iba $$app_price $app_currency na aktiváciu vášho účtu";
$offer_li2 = "Plný prístup k spotovému obchodovaniu, derivátom, marži a obchodnému botu";
$offer_li3 = "Viacero spôsobov financovania vrátane kariet a bankového prevodu";
$offer_li4 = "Žiadne registračné poplatky, žiadne náklady na predplatné, žiadne skryté poplatky";
$offer_li5 = "Zákaznícka podpora 24/7, kým začínate";
$offer_note = "Výšky vkladov a dostupné spôsoby platby sa môžu líšiť podľa regiónu. Pred financovaním účtu si prečítajte naše <a class=\"link\" href=\"risk-warning.php\">Upozornenie na Riziko</a>.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontaktujte $site_name — Spojte sa s Naším Tímom";
$contacts_meta_description = "Máte otázku ohľadom vášho účtu $site_name alebo platformy? Kontaktujte náš tím podpory e-mailom alebo nám pošlite správu a my sa vám ozveme.";
$contacts_h1 = "Kontaktujte nás";
$contacts_lead = "Otázky ohľadom vášho účtu, vkladu alebo toho, ako platforma funguje? Náš tím je tu, aby vám pomohol.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Hodiny Podpory";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typický Čas Odozvy";
$contacts_response_value = "Do 24 hodín";
$contacts_form_title = "Pošlite nám Správu";
$contacts_form_desc = "Zanechajte svoje údaje nižšie a člen nášho tímu vás priamo osloví.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Často Kladené Otázky $site_name";
$faq_meta_description = "Odpovede na najčastejšie otázky o vytvorení účtu $site_name, vykonaní vkladu, bezpečnosti platformy a poplatkoch.";
$faq_page_lead = "Všetko, čo potrebujete vedieť pred začatím obchodovania. Nenašli ste svoju odpoveď? <a class=\"link\" href=\"contacts.php\">Kontaktujte náš tím</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Zásady Ochrany Osobných Údajov $site_name";
$privacy_meta_description = "Zistite, ako $site_name zhromažďuje, používa a chráni vaše osobné údaje na webovej stránke a platforme.";
$privacy_sections = [
    [
        "title" => "1. Úvod",
        "body" => "Tieto Zásady Ochrany Osobných Údajov vysvetľujú, ako $site_name („my“) zhromažďuje, používa a chráni osobné údaje návštevníkov a používateľov $site_domain („Webová Stránka“). Používaním Webovej Stránky súhlasíte s postupmi opísanými nižšie.",
    ],
    [
        "title" => "2. Informácie, Ktoré Zhromažďujeme",
        "body" => "Môžeme zhromažďovať informácie, ktoré poskytujete priamo, ako je vaše meno, e-mailová adresa a telefónne číslo pri registrácii alebo odoslaní formulára, ako aj informácie zhromaždené automaticky, vrátane vašej IP adresy, typu zariadenia a prehliadača a stránok zobrazených na Webovej Stránke.",
    ],
    [
        "title" => "3. Ako Používame Vaše Informácie",
        "body" => "Zhromaždené informácie používame na vytvorenie a správu vášho účtu, odpovedanie na otázky, poskytovanie zákazníckej podpory, zlepšovanie Webovej Stránky a našich služieb a tam, kde je to povolené, na zasielanie aktualizácií o produktoch a ponukách. Z marketingovej komunikácie sa môžete kedykoľvek odhlásiť.",
    ],
    [
        "title" => "4. Súbory Cookie &amp; Sledovacie Technológie",
        "body" => "Webová Stránka používa súbory cookie a podobné technológie na zapamätanie vašich preferencií, udržanie vášho prihlásenia a pochopenie toho, ako návštevníci používajú naše stránky. Súbory cookie môžete deaktivovať prostredníctvom nastavení prehliadača, hoci niektoré funkcie nemusia v dôsledku toho fungovať správne.",
    ],
    [
        "title" => "5. Zdieľanie Informácií",
        "body" => "Vaše osobné údaje nepredávame. Informácie môžeme zdieľať s dôveryhodnými poskytovateľmi služieb, ktorí nám pomáhajú prevádzkovať Webovú Stránku (ako sú poskytovatelia hostingu alebo analytiky), alebo keď to vyžaduje zákon alebo na ochranu našich zákonných práv.",
    ],
    [
        "title" => "6. Bezpečnosť Údajov",
        "body" => "Uplatňujeme primerané technické a organizačné opatrenia na ochranu vašich informácií pred neoprávneným prístupom, zmenou alebo stratou. Žiadna metóda prenosu alebo ukladania nie je úplne bezpečná a nemôžeme zaručiť absolútnu bezpečnosť.",
    ],
    [
        "title" => "7. Vaše Práva &amp; Možnosti",
        "body" => "V závislosti od vašej polohy môžete mať právo na prístup, opravu alebo požiadanie o vymazanie vašich osobných údajov a namietať proti určitým ich použitiam. Na uplatnenie týchto práv nás prosím kontaktujte prostredníctvom našej <a class=\"link\" href=\"contacts.php\">kontaktnej stránky</a>.",
    ],
    [
        "title" => "8. Súkromie Detí",
        "body" => "Webová Stránka nie je určená osobám mladším ako 18 rokov a vedome nezhromažďujeme osobné údaje od maloletých. Ak sa domnievate, že nám maloletý poskytol osobné údaje, kontaktujte nás, aby sme ich mohli odstrániť.",
    ],
    [
        "title" => "9. Zmeny Týchto Zásad",
        "body" => "Tieto Zásady Ochrany Osobných Údajov môžeme z času na čas aktualizovať. Akékoľvek zmeny budú zverejnené na tejto stránke s revidovaným dátumom účinnosti. Odporúčame vám túto stránku pravidelne kontrolovať.",
    ],
    [
        "title" => "10. Kontaktujte Nás",
        "body" => "Ak máte otázky týkajúce sa týchto Zásad Ochrany Osobných Údajov alebo o tom, ako sú vaše informácie spracovávané, kontaktujte nás prosím prostredníctvom našej <a class=\"link\" href=\"contacts.php\">kontaktnej stránky</a> alebo nám napíšte e-mail na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Podmienky Používania $site_name";
$conditions_meta_description = "Prečítajte si Podmienky Používania, ktoré upravujú prístup k webovej stránke a obchodnej platforme $site_name a ich používanie.";
$conditions_sections = [
    [
        "title" => "1. Prijatie Podmienok",
        "body" => "Prístupom na $site_domain („Webová Stránka“) alebo jej používaním súhlasíte s tým, že budete viazaní týmito Podmienkami Používania. Ak nesúhlasíte s akoukoľvek časťou týchto podmienok, prosím nepoužívajte Webovú Stránku.",
    ],
    [
        "title" => "2. Oprávnenosť",
        "body" => "Musíte mať aspoň 18 rokov a byť právne oprávnení používať služby súvisiace s obchodovaním vo vašej jurisdikcii, aby ste mohli používať Webovú Stránku. Používaním Webovej Stránky potvrdzujete, že spĺňate tieto požiadavky.",
    ],
    [
        "title" => "3. Popis Služby",
        "body" => "$site_name poskytuje online platformu so vzdelávacím obsahom, trhovými informáciami a obchodnými nástrojmi. Nič na Webovej Stránke nepredstavuje finančné, investičné, daňové ani právne poradenstvo a akékoľvek poskytnuté informácie sú iba na všeobecné informačné účely.",
    ],
    [
        "title" => "4. Zodpovednosti Používateľa",
        "body" => "Ste zodpovední za poskytovanie presných informácií pri registrácii, za udržiavanie dôvernosti prihlasovacích údajov vášho účtu a za všetky aktivity, ktoré prebiehajú v rámci vášho účtu.",
    ],
    [
        "title" => "5. Duševné Vlastníctvo",
        "body" => "Všetok obsah na Webovej Stránke, vrátane textu, grafiky, log a softvéru, je majetkom $site_name alebo jej poskytovateľov licencií a je chránený platnými zákonmi o duševnom vlastníctve. Tento obsah nesmiete reprodukovať ani distribuovať bez povolenia.",
    ],
    [
        "title" => "6. Žiadne Finančné Poradenstvo",
        "body" => "Obsah na Webovej Stránke je poskytovaný iba na informačné a vzdelávacie účely a nemal by byť vykladaný ako finančné poradenstvo. Ste výlučne zodpovední za svoje vlastné obchodné rozhodnutia a v prípade potreby by ste sa mali poradiť s nezávislým finančným poradcom. Viac informácií nájdete v našom <a class=\"link\" href=\"risk-warning.php\">Upozornení na Riziko</a>.",
    ],
    [
        "title" => "7. Obmedzenie Zodpovednosti",
        "body" => "V najväčšom rozsahu povolenom zákonom, $site_name nebude zodpovedná za žiadne priame, nepriame, náhodné alebo následné škody vyplývajúce z vášho používania alebo neschopnosti používať Webovú Stránku alebo akékoľvek prepojené služby tretích strán.",
    ],
    [
        "title" => "8. Ukončenie",
        "body" => "Vyhradzujeme si právo pozastaviť alebo ukončiť váš prístup k Webovej Stránke podľa vlastného uváženia, bez upozornenia, za správanie, o ktorom sa domnievame, že porušuje tieto Podmienky Používania alebo je inak škodlivé pre ostatných používateľov alebo Webovú Stránku.",
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
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Zaregistrovať sa | $site_name — Vytvorte si Bezplatný Účet";
$sign_meta_description = "Vytvorte si bezplatný účet $site_name v priebehu niekoľkých minút a začnite obchodovať už s $$app_price $app_currency.";
$sign_h1 = "Vytvorte si Bezplatný Účet";
$sign_lead = "Pripojte sa k $site_name za pár minút. Vyplňte svoje údaje nižšie, aby ste mohli začať.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Ďakujeme | $site_name";
$thanks_h1 = "Ďakujeme!";
$thanks_text = "Vaše údaje boli prijaté. Člen tímu $site_name sa vám čoskoro ozve, aby vám pomohol začať.";
$thanks_btn = "Späť na Domovskú Stránku";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa Stránky | $site_name";
$sitemap_meta_description = "Prezerajte si každú stránku webovej stránky $site_name vrátane obchodnej platformy, ponuky, podpory a právnych stránok.";
$sitemap_h1 = "Mapa Stránky";
$sitemap_lead = "Každá stránka na $site_name na jednom mieste.";

