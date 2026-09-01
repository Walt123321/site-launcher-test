<?php
require __DIR__ . '/../lang.php';
$site_lang = 'cs-CZ';
$form_language = 'cs'; // matches this page's own language, not the offer's global default

// ============================================================
// CS TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficiální Web | Obchodní Platforma";
$home_meta_description = "$site_name nabízí uživatelsky přívětivou obchodní platformu s pokročilými tržními nástroji, přehledy v reálném čase a praktickými funkcemi, které usnadňují online obchodování a činí jej informovanějším.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "O nás";
$nav_contacts = "Kontakt";
$nav_login = "Přihlásit se";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Právě se připojil";
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
$form_title = "Začít Nyní";
$form_fname_placeholder = "Celé jméno";
$form_lname_placeholder = "Příjmení";
$form_email_placeholder = "E-mailová adresa";
$form_btn_submit = "Vytvořit Účet";
$form_disclaimer_text = "* Kliknutím na tlačítko souhlasíte s našimi <a class=\"link\" href=\"privacy.php\">Zásadami Ochrany Osobních Údajů</a> a <a class=\"link\" href=\"conditions.php\">Podmínkami Použití</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "ZABEZPEČENO";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI navržená k jasnějšímu čtení trhu";
$s1_subtitle = "Investiční strategie řízená technologií";
$s1_quote = "$site_name byla vytvořena, aby usnadnila práci s trhy, ať už máte zkušenosti, nebo ne. Platforma využívá umělou inteligenci k převodu složitých dat na jasná, akceschopná rozhodnutí, což vám umožňuje obchodovat s větší jistotou v jakémkoli scénáři.";
$s1_p1 = "Systém prochází obrovské množství informací v reálném čase: detekuje změny, rozpoznává vzory a rychle reaguje na tržní signály. To vám poskytuje jasný přehled o aktuálním kontextu, abyste mohli odhalovat příležitosti, aniž byste se museli prokousávat složitými analýzami.";
$s1_p2 = "Nepřetržité sledování, uživatelsky přívětivé rozhraní a vysoká úroveň ochrany činí zážitek pohodlným a spolehlivým. Vše je navrženo tak, abyste se mohli soustředit na výsledky, nikoli na technickou stránku.";
$s1_p3 = "Funkce copy tradingu vám také poskytuje přístup ke strategiím zkušenějších obchodníků. Můžete sledovat jejich pohyby a aplikovat osvědčené přístupy na vlastní obchodování, čímž kombinujete profesionální úsudek s automatizací.";
$s1_cta = "Vytvořit Účet";
$s1_img_alt = "$site_name digitální finance";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Přesná tržní analýza, bez zbytečného šumu";
$s2_intro = "$site_name využívá umělou inteligenci k nepřetržitému sledování trhu a rychlé detekci změn. Systém zpracovává obrovské množství dat a zobrazuje pouze relevantní signály, aniž by vás zahlcoval zbytečnými informacemi.";
$s2_item1_title = "Reakce na trh bez čekání";
$s2_item1_text = "Platforma identifikuje pohyby v jejich raných fázích: momentum, obraty a změny trendu. Okamžitě vidíte, co se děje, a můžete jednat ve správný okamžik.";
$s2_item2_title = "Jasný přehled místo hádání";
$s2_item2_text = "Žádné složité grafy ani hádání. $site_name zdůrazňuje podstatné a poskytuje jasný přehled situace, abyste se mohli rozhodovat na základě dat, nikoli intuice.";
$s2_item3_title = "Kontrola a ochrana";
$s2_item3_text = "Vaše data jsou chráněna, přístup je kontrolován a transakce probíhají zabezpečenými kanály. To vám umožňuje soustředit se na trh, nikoli na technické riziko.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Jasná inteligence pro obchodníky";
$s3_card1_title = "$site_name respektuje soukromí a kontrolu uživatele";
$s3_card1_text = "$site_name zachází s informacemi s naprostou transparentností a integritou. Nezneužívá vaše osobní údaje. Na této platformě se nezaznamenávají žádné transakce ani objednávky.";
$s3_card2_title = "Přehledné analytické prostředí pro lepší rozhodování";
$s3_card2_text = "$site_name funguje jako technologický prostor, kde AI posiluje lidský úsudek, místo aby jej nahrazovala. Tyto nástroje usnadňují pochopení tržních posunů, porovnávání strategií a studium chování aktiv.";
$s3_card3_title = "Nástroje AI, které zostřují váš pohled na trh";
$s3_card3_text = "Analýza nikdy nekončí. $site_name sleduje krypto prostředí a odesílá oznámení v reálném čase, jakmile se objeví relevantní pohyb.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Ostrá analýza, bez emocí a chyb";
$s4_quote = "$site_name transformuje složitá tržní data na organizované, snadno čitelné informace, eliminuje zbytečný šum a pomáhá vám soustředit se na signály, na kterých skutečně záleží. To vám umožňuje pochopit situaci dříve a rozhodovat se, aniž by převzaly kontrolu emoce.";
$s4_p1 = "Systém neustále aktualizuje své závěry s novými daty. Namísto zpožděných indikátorů používá adaptivní modely, které reagují na tržní změny v reálném čase. To znamená, že vždy pracujete s aktuálním obrazem a můžete jednat rychleji, když na tom skutečně záleží.";
$s4_img_alt = "$site_name umělá inteligence";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Používejte AI $site_name pro přesná, včasná rozhodnutí";
$s5_quote = "$site_name analyzuje trh v reálném čase a okamžitě vám ukazuje, kde je pohyb a příležitosti. Systém za vás zpracovává data a poskytuje připravené signály: kdy vstoupit, kdy vystoupit a na co si dát pozor.";
$s5_p1 = "Nemusíte se celý den dívat na grafy. Platforma sama detekuje změny a rychle reaguje na trh, takže nepropásnete důležité okamžiky.";
$s5_p2 = "Algoritmy pracují nepřetržitě a identifikují nové příležitosti, jakmile se objeví. Získáváte aktuální informace bez zpoždění nebo přehlcení informacemi.";
$s5_p3 = "Bezpečnost přitom zůstává na vysoké úrovni: ochrana dat, bezpečný přístup a kontrola obchodování. $site_name je vhodná jak pro začátečníky, tak pro aktivní obchodníky — rozhodnutí zůstávají na vás, ale jsou podpořena pevným analytickým základem.";
$s5_img_alt = "$site_name finanční automatizace";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konzistentní obchodování začíná organizovaným systémem";
$s6_p1 = "$site_name vám pomáhá vnést strukturu do vaší práce s trhem. Platforma vytváří jasný rámec: vy určujete své cíle a úroveň rizika, systém přizpůsobuje svou analýzu vašemu stylu — bez chaosu a přetížení.";
$s6_p2 = "Nepřetržitá analýza přeměňuje tok dat na jednoduché, srozumitelné signály. Vidíte pouze to, na čem záleží: kde je pohyb, kde se vyplatí vstoupit a kdy je lepší počkat. Postupem času se algoritmy stávají přesnějšími a přizpůsobují se trhu.";
$s6_item1_title = "Vyberte si své tempo: rychlé obchodování nebo dlouhodobý přístup";
$s6_item1_text = "$site_name podporuje různé strategie. Pro aktivní obchodování systém označuje vstupní body a cenové pohyby. Pro dlouhodobý přístup pomáhá udržovat pozice s ohledem na trend a riziko.";
$s6_item2_title = "Vstupní body bez hádání";
$s6_item2_text = "Platforma ukazuje, kde je trh nejaktivnější. To vám pomáhá vstupovat s větší jistotou a vystupovat včas, bez improvizace.";
$s6_item3_title = "Řízení rizika od samého začátku";
$s6_item3_text = "Můžete si předem prohlédnout možné scénáře: kde je riziko nižší a potenciál vyšší. To vám umožňuje plánovat transakce ještě předtím, než pohyb vůbec začne.";
$s6_item4_title = "Připravená analýza";
$s6_item4_text = "$site_name vás nezahlcuje složitou terminologií. Získáváte jasné, přímo použitelné informace navržené tak, aby vám pomohly rozhodovat se rychleji a s větší jistotou.";
$s6_cta = "Začít Nyní";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Jednoduché nástroje pro přesná rozhodnutí s $site_name";
$s7_quote = "$site_name vám poskytuje vše potřebné k obchodování na trhu — bez technického žargonu nebo přehlcení informacemi. Platforma sama analyzuje cenové pohyby, trendy a možné vstupní body a zobrazuje pouze to, na čem skutečně záleží.";
$s7_point1 = "Systém pomáhá detekovat, kdy se trh může obrátit, kde se objevují silné pohyby a které okamžiky jsou nejlepší pro vstup nebo výstup. Každý signál přichází předzpracovaný — nemusíte zvládat složité indikátory.";
$s7_point2 = "Zahrnuje také copy trading: můžete sledovat a kopírovat rozhodnutí zkušených obchodníků, aniž byste trávili čas vlastní analýzou.";
$s7_point3 = "Rozhraní zůstává co nejjednodušší — každý nástroj je pochopen na první pohled a je připraven k použití od prvního okamžiku.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Najděte důležitá časová okna s AI $site_name";
$s8_item1 = "Automatická diverzifikace rozděluje prostředky mezi různá aktiva, snižuje riziko a chrání kapitál i na nestabilních trzích.";
$s8_item2 = "Plně autonomní systém — nemusíte se dívat na grafy. Algoritmy analyzují trh a rozhodují se samostatně.";
$s8_item3 = "Výběry jsou dostupné kdykoli — na bankovní karty, krypto peněženky nebo elektronické platební systémy, bez zpoždění.";
$s8_item4 = "Denní přehledy ukazují vaše výsledky a poskytují vám plnou kontrolu nad situací v reálném čase.";
$s8_item5 = "Flexibilní nastavení úrovně rizika vám umožňuje zvolit strategii odpovídající vašim cílům — od konzervativní po agresivnější.";
$s8_item6 = "Potenciál zisku až 400 % dělá z $site_name nástroj pro ty, kteří chtějí nejen zachovat svůj kapitál, ale výrazně jej zhodnotit.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Odborná analýza poháněná $site_name";
$s9_quote = "$site_name kombinuje sílu algoritmů s tržními zkušenostmi a přeměňuje složitá data na jasné, snadno pochopitelné signály. Systém rychle detekuje vzory a potenciální příležitosti, což vám umožňuje rozhodovat se bez přehlcení informacemi.";
$s9_p1 = "Získáváte předzpracované analýzy, které zohledňují jak technické ukazatele, tak chování trhu — abyste mohli jednat rychleji, s větší jistotou a přesností.";
$s9_img_alt = "$site_name investiční strategie";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Co říkají naši uživatelé";
$review_1_text = "Platforma je velmi intuitivní a nástroje mi pomohly zlepšit mé obchodní výsledky.";
$review_2_text = "Rychlá podpora a skutečně užitečné vzdělávací materiály — ideální pro lidi, kteří teprve začínají.";
$review_3_text = "Přizpůsobitelné grafy a rychlé provedení — je to moje první volba už měsíce.";
$review_4_text = "Registrace trvala méně než pět minut a nástěnka usnadňuje sledování, kde přesně jsou moje peníze.";
$review_5_text = "Líbí se mi, že platforma vysvětluje logiku za každým signálem, místo aby mi jen házela čísla.";
$review_6_text = "Výběry pro mě byly vždy rychlé a tým podpory skutečně odpovídá během několika minut.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Často kladené otázky o $site_name";
$faq_q1 = "Dokáže $site_name detekovat tržní změny v reálném čase?";
$faq_a1 = "Ano. Sleduje živá data, identifikuje posuny momentu v jejich raných fázích a rozpoznává vzory dříve, než se plně rozvinou, čímž dává uživatelům včasnou výhodu.";
$faq_q2 = "Lze zážitek $site_name přizpůsobit?";
$faq_a2 = "Ano. Uživatelé si mohou vybrat oblasti zájmu, upravit úroveň detailů a sledovat veřejné strategie odpovídající jejich obchodnímu stylu nebo vzdělávacím potřebám.";
$faq_q3 = "Nahrazuje $site_name tradiční metody výzkumu?";
$faq_a3 = "Ne. Vylepšuje je rychlým poskytováním poznatků filtrovaných umělou inteligencí, přičemž uživatel si zachovává plnou kontrolu nad vlastním výzkumem a rozhodnutími.";
$faq_cta = "Zjistit Více Nyní";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Přehled";
$hl1_emoji = "🤖";
$hl1_title = "Poplatek za Registraci";
$hl1_desc = "Žádný poplatek za registraci";
$hl2_emoji = "💰";
$hl2_title = "Obchodní Provize";
$hl2_desc = "Zcela bez poplatků";
$hl3_emoji = "📋";
$hl3_title = "Snadnost Registrace";
$hl3_desc = "Registrace je rychlá a jednoduchá";
$hl4_emoji = "📊";
$hl4_title = "Vzdělávací Zaměření";
$hl4_desc = "Lekce o kryptu, Forex obchodování a investování";
$hl5_emoji = "🌎";
$hl5_title = "Dostupné Země";
$hl5_desc = "Není dostupné v USA, dostupné ve většině ostatních zemí";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Obchodujte chytře, rozvíjejte se s jistotou";
$footnav_about = "O nás";
$footnav_product = "Produkt";
$footnav_offer = "Nabídka";
$footnav_contacts = "Kontakt";
$footnav_faq = "Časté Dotazy";
$footnav_privacy = "Zásady Ochrany Osobních Údajů";
$footnav_conditions = "Podmínky Použití";
$footnav_risk = "Upozornění na Riziko";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publikuje obecné vzdělávací materiály o obchodování, investování, finančních trzích a digitálních aktivech. Články, tržní data, grafy a další obsah webu jsou poskytovány pouze pro informační účely a neměly by být považovány za finanční, investiční nebo právní poradenství. I když se snažíme poskytovat spolehlivé a aktuální informace, nemůžeme zaručit jejich přesnost nebo úplnost a nejsme odpovědní za ztráty vyplývající ze spoléhání se na obsah.<br><br>Obchodování zahrnuje riziko a kryptoměny, Forex, CFD, akcie a další finanční produkty mohou výrazně kolísat v hodnotě. Před obchodováním zvažte svou vlastní finanční situaci a toleranci k riziku a v případě potřeby vyhledejte odborné poradenství. Nikdy nevkládejte peníze, které si nemůžete dovolit ztratit.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Obchodní Poradce";
$quiz_text_welcome = "Ahoj! Jsem Sofia, vaše osobní obchodní poradkyně. Máte pár minut, abychom pro vás našli nejlepší plán?";
$quiz_text_q1 = "Obchodovali jste už dříve?";
$quiz_text_a1_yes = "Ano, mám zkušenosti";
$quiz_text_a1_no = "Ne, jsem začátečník";
$quiz_text_q2 = "Skvělé! Jaké je vaše křestní jméno, abych mohla přizpůsobit váš plán?";
$quiz_text_q3 = "Jaký je váš hlavní cíl v obchodování?";
$quiz_text_a3_yes = "Budování dlouhodobého bohatství";
$quiz_text_a3_no = "Generování krátkodobého příjmu";
$quiz_text_q4 = "S jakou částkou byste chtěli začít?";
$quiz_text_a4_1 = "Méně než $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Více než $1000";
$quiz_text_q5 = "Skvělé. Chcete, abych vám nyní otevřela bezplatný účet?";
$quiz_text_a5_yes = "Ano, pojďme na to";
$quiz_text_a5_no = "Teď ne";
$quiz_text_loader = "Hledání nejlepšího plánu pro vás...";
$quiz_text_final_ttl = "Vše je připraveno!";
$quiz_text_processing = "Vaše údaje se odesílají...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Křestní jméno";
$quiz_placeholder_lname = "Příjmení";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Získat Můj Bezplatný Účet";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Domů";
$bc_about = "O nás";
$bc_product = "Produkt";
$bc_offer = "Nabídka";
$bc_contacts = "Kontakt";
$bc_faq = "Časté Dotazy";
$bc_privacy = "Zásady Ochrany Osobních Údajů";
$bc_conditions = "Podmínky Použití";
$bc_risk = "Upozornění na Riziko";
$bc_sign = "Registrace";
$bc_thanks = "Děkujeme";
$bc_sitemap = "Mapa Webu";

// -------------------------
// About page
// -------------------------
$about_meta_title = "O $site_name";
$about_meta_description = "Poznejte poslání $site_name: učinit tržní analýzu jasnější a dostupnější díky nástrojům poháněným umělou inteligencí.";
$about_h1 = "O $site_name";
$about_lead = "$site_name byla vybudována kolem jedné myšlenky: obchodní rozhodnutí by měla být založena na jasných informacích, nikoli na hádání.";
$about_p1 = "Kombinujeme umělou inteligenci se skutečnými tržními zkušenostmi, abychom přeměnili složitá, chaotická data na signály, které jsou snadno pochopitelné a použitelné. Naše platforma sleduje trhy dnem i nocí, abyste to nemuseli dělat vy.";
$about_p2 = "Ať už provádíte svůj první obchod, nebo jste na trzích aktivní již léta, $site_name je navržena tak, aby vás oslovila tam, kde jste — s nástroji sahajícími od jednoduchého vedení až po pokročilou analýzu v reálném čase.";
$about_p3 = "Věříme, že technologie by měla podporovat váš úsudek, nikoli jej nahrazovat. Každý signál, který $site_name generuje, má za cíl informovat rozhodnutí, které je stále zcela vaše.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produkt — AI Nástroje pro Tržní Analýzu";
$product_meta_description = "Prozkoumejte produkt $site_name: tržní analýzu AI v reálném čase, copy trading, kontroly rizika a automatizovanou diverzifikaci.";
$product_h1 = "Produkt $site_name";
$product_lead = "Jedna platforma, která za vás čte trh: analýza v reálném čase, copy trading a flexibilní nástroje pro riziko, navržené tak, aby byla obchodní rozhodnutí jasnější.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Nabídka $site_name — Začněte Zdarma";
$offer_meta_description = "Podívejte se, co je zahrnuto v aktuální nabídce $site_name: bezplatná registrace, žádné obchodní provize a plný přístup k platformě.";
$offer_h1 = "Naše aktuální nabídka";
$offer_lead = "Vytvořte si účet zdarma a odemkněte plnou platformu $site_name &mdash; žádné registrační poplatky, žádné obchodní provize.";
$offer_li1 = "Žádný poplatek za registraci vašeho účtu";
$offer_li2 = "Žádné provize z transakcí";
$offer_li3 = "Plný přístup k tržní analýze AI v reálném čase a copy tradingu";
$offer_li4 = "Výběry dostupné kdykoli, bez skrytých poplatků";
$offer_li5 = "Vzdělávací zdroje o kryptu, Forexu a investování v ceně";
$offer_note = "Dostupnost se může lišit podle regionu. Před vložením prostředků na účet si přečtěte naše <a class=\"link\" href=\"risk-warning.php\">Upozornění na Riziko</a>.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontaktujte $site_name — Spojte se s naším týmem";
$contacts_meta_description = "Máte otázku ohledně svého účtu $site_name nebo platformy? Kontaktujte náš tým podpory e-mailem nebo nám pošlete zprávu.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Otázky ohledně vašeho účtu, vkladu nebo fungování platformy? Náš tým je připraven pomoci.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Provozní Doba Podpory";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typická Doba Odezvy";
$contacts_response_value = "Do 24 hodin";
$contacts_form_title = "Napište Nám";
$contacts_form_desc = "Zanechte své údaje níže a člen našeho týmu vás bude přímo kontaktovat.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Zásady Ochrany Osobních Údajů $site_name";
$privacy_meta_description = "Zjistěte, jak $site_name shromažďuje, používá a chrání vaše osobní údaje na celém webu a platformě.";
$privacy_sections = [
    [
        "title" => "1. Úvod",
        "body" => "Tyto Zásady Ochrany Osobních Údajů vysvětlují, jak $site_name (\"my\") shromažďuje, používá a chrání osobní údaje návštěvníků a uživatelů $site_domain (\"Web\"). Používáním Webu souhlasíte s postupy popsanými níže.",
    ],
    [
        "title" => "2. Informace, Které Shromažďujeme",
        "body" => "Můžeme shromažďovat informace, které přímo poskytnete, jako je vaše jméno, e-mailová adresa a telefonní číslo při registraci nebo odeslání formuláře, a také automaticky shromážděné informace, včetně vaší IP adresy, typu zařízení a prohlížeče a stránek zobrazených na Webu.",
    ],
    [
        "title" => "3. Jak Používáme Vaše Informace",
        "body" => "Shromážděné informace používáme k vytvoření a správě vašeho účtu, odpovídání na dotazy, poskytování zákaznické podpory, zlepšování Webu a našich služeb a, je-li to povoleno, k zasílání aktualizací o produktech a nabídkách. Marketingovou komunikaci můžete kdykoli odhlásit.",
    ],
    [
        "title" => "4. Soubory Cookie a Sledovací Technologie",
        "body" => "Web používá soubory cookie a podobné technologie, aby si zapamatoval vaše preference, udržel vás přihlášené a porozuměl tomu, jak návštěvníci používají naše stránky. Soubory cookie můžete zakázat v nastavení prohlížeče, i když některé funkce nemusí správně fungovat.",
    ],
    [
        "title" => "5. Sdílení Informací",
        "body" => "Vaše osobní údaje neprodáváme. Můžeme sdílet informace s důvěryhodnými poskytovateli služeb, kteří nám pomáhají provozovat Web (jako jsou poskytovatelé hostingu nebo analytiky), nebo pokud to vyžaduje zákon nebo za účelem ochrany našich zákonných práv.",
    ],
    [
        "title" => "6. Zabezpečení Dat",
        "body" => "Uplatňujeme přiměřená technická a organizační opatření k ochraně vašich informací před neoprávněným přístupem, úpravou nebo ztrátou. Žádná metoda přenosu nebo ukládání není zcela bezpečná a nemůžeme zaručit absolutní bezpečnost.",
    ],
    [
        "title" => "7. Vaše Práva a Volby",
        "body" => "V závislosti na vaší poloze můžete mít právo na přístup, opravu nebo požádání o vymazání vašich osobních údajů a namítat proti určitým způsobům jejich použití. Chcete-li tato práva uplatnit, kontaktujte nás prostřednictvím naší <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a>.",
    ],
    [
        "title" => "8. Ochrana Soukromí Dětí",
        "body" => "Web není zaměřen na osoby mladší 18 let a vědomě neshromažďujeme osobní údaje od nezletilých. Pokud se domníváte, že nám nezletilý poskytl osobní údaje, kontaktujte nás, abychom je mohli odstranit.",
    ],
    [
        "title" => "9. Změny Těchto Zásad",
        "body" => "Tyto Zásady Ochrany Osobních Údajů můžeme čas od času aktualizovat. Veškeré změny budou zveřejněny na této stránce s revidovaným datem účinnosti. Doporučujeme vám tuto stránku pravidelně kontrolovat.",
    ],
    [
        "title" => "10. Kontaktujte Nás",
        "body" => "Máte-li otázky ohledně těchto Zásad Ochrany Osobních Údajů nebo způsobu zpracování vašich informací, kontaktujte nás prostřednictvím naší <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a> nebo nám napište na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Podmínky Použití $site_name";
$conditions_meta_description = "Přečtěte si Podmínky Použití upravující přístup a používání webu a obchodní platformy $site_name.";
$conditions_sections = [
    [
        "title" => "1. Přijetí Podmínek",
        "body" => "Přístupem k $site_domain (\"Web\") nebo jeho používáním souhlasíte s tím, že budete vázáni těmito Podmínkami Použití. Pokud nesouhlasíte s jakoukoli částí těchto podmínek, Web nepoužívejte.",
    ],
    [
        "title" => "2. Způsobilost",
        "body" => "Abyste mohli používat Web, musí vám být alespoň 18 let a musíte mít právní způsobilost k používání služeb souvisejících s obchodováním ve vaší jurisdikci. Používáním Webu potvrzujete, že splňujete tyto požadavky.",
    ],
    [
        "title" => "3. Popis Služby",
        "body" => "$site_name poskytuje online platformu se vzdělávacím obsahem, tržními informacemi a analytickými nástroji podporovanými umělou inteligencí. Nic na Webu nepředstavuje finanční, investiční, daňové nebo právní poradenství a veškeré poskytnuté informace slouží pouze pro obecné informační účely.",
    ],
    [
        "title" => "4. Odpovědnosti Uživatele",
        "body" => "Jste odpovědní za poskytnutí přesných informací při registraci, za zachování důvěrnosti přihlašovacích údajů vašeho účtu a za veškeré aktivity, které probíhají pod vaším účtem.",
    ],
    [
        "title" => "5. Duševní Vlastnictví",
        "body" => "Veškerý obsah na Webu, včetně textu, obrázků, log a softwaru, je majetkem $site_name nebo jejích poskytovatelů licencí a je chráněn příslušnými zákony o duševním vlastnictví. Tento obsah nesmíte reprodukovat ani distribuovat bez povolení.",
    ],
    [
        "title" => "6. Žádné Finanční Poradenství",
        "body" => "Obsah na Webu je poskytován pouze pro informační a vzdělávací účely a neměl by být vykládán jako finanční poradenství. Za vlastní obchodní rozhodnutí nesete výhradní odpovědnost a v případě potřeby byste se měli poradit s nezávislým finančním poradcem. Další informace naleznete v našem <a class=\"link\" href=\"risk-warning.php\">Upozornění na Riziko</a>.",
    ],
    [
        "title" => "7. Omezení Odpovědnosti",
        "body" => "V maximálním rozsahu povoleném zákonem není $site_name odpovědná za jakékoli přímé, nepřímé, náhodné nebo následné škody vyplývající z vašeho používání nebo nemožnosti používat Web nebo propojené služby třetích stran.",
    ],
    [
        "title" => "8. Ukončení",
        "body" => "Vyhrazujeme si právo pozastavit nebo ukončit váš přístup k Webu podle vlastního uvážení, bez upozornění, za chování, o kterém se domníváme, že porušuje tyto Podmínky Použití nebo je jinak škodlivé pro ostatní uživatele nebo Web.",
    ],
    [
        "title" => "9. Změny Těchto Podmínek",
        "body" => "Tyto Podmínky Použití můžeme kdykoli revidovat. Pokračující používání Webu po zveřejnění změn představuje přijetí aktualizovaných podmínek.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Dotazy ohledně těchto Podmínek Použití lze zaslat našemu týmu prostřednictvím <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a> nebo e-mailem na info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Upozornění na Riziko $site_name — Zveřejnění Obchodního Rizika";
$risk_meta_description = "Přečtěte si upozornění na riziko $site_name před obchodováním: rizika krypto trhu, pákový efekt, likvidita, kybernetická bezpečnost a regulační aspekty.";
$risk_title = "Upozornění na Riziko";
$risk_intro = "Pochopení rizik je prvním krokem k sebevědomému obchodování.";
$risk_ai_title = "Jak náš AI systém pomáhá při řízení rizika:";
$risk_ai_1_title = "Algoritmická Efektivita a Obchodování Bez Emocí:";
$risk_ai_1_text = "Pokročilé algoritmy analyzují tržní signály, aby objektivně prováděly transakce v optimálních okamžicích.";
$risk_ai_2_title = "Strategie Založené na Datech:";
$risk_ai_2_text = "Strategie jsou založeny na ověřených tržních vzorech a analýze v reálném čase, nikoli na hádání.";
$risk_ai_3_title = "Flexibilní Nastavení a Plná Kontrola:";
$risk_ai_3_text = "Kdykoli upravte své parametry rizika. Sledujte všechny zůstatky a transakce transparentně na svém dashboardu, bez skrytých poplatků a bez omezení výběrů.";
$risk_disclaimer = "<strong>Prohlášení:</strong> Obchodování vždy zahrnuje riziko. Automatizované systémy (včetně AI) nezaručují zisk, mohou selhat kvůli softwarovým chybám nebo neočekávaným tržním událostem a vyžadují dohled uživatele. Minulá výkonnost nezaručuje budoucí výsledky. Tato platforma slouží pouze pro informační a marketingové účely a neposkytuje finanční poradenství.";
$risk_s1_title = "1. Obecné Riziko Krypto Trhu";
$risk_s1_text = "Kryptoměny jsou vysoce volatilní, spekulativní aktiva, která fungují nepřetržitě s minimálním regulačním dohledem ve většině jurisdikcí.";
$risk_s1_li1 = "Hodnoty se mohou v krátkých obdobích dramaticky kolísat, což může potenciálně vést k úplné ztrátě investovaného kapitálu.";
$risk_s1_li2 = "Tržní hodnoty mohou být silně ovlivněny regulačními změnami, technologickým vývojem, bezpečnostními narušeními nebo širšími makroekonomickými událostmi.";
$risk_s1_li3 = "Některá aktiva mohou zcela ztratit svou hodnotu. Investujte pouze prostředky, jejichž ztrátu si můžete dovolit.";
$risk_s2_title = "2. Riziko Provedení, Likvidity a Pákového Efektu";
$risk_s2_li1_title = "Tržní Volatilita a Likvidita:";
$risk_s2_li1_text = "Extrémní cenové pohyby (10-20 %+ denně) nebo nízká likvidita (zejména u menších mincí) mohou způsobit zpoždění, selhání platformy a vážné prokluzy při provádění. Stop-loss příkazy nemusí zaručit limity ztrát za extrémních podmínek.";
$risk_s2_li2_title = "Riziko Pákového Efektu a Marže:";
$risk_s2_li2_text = "Produkty s pákovým efektem zesilují jak zisky, tak ztráty, což znamená, že můžete ztratit více než svůj původní vklad. Přibližně 70-80 % účtů retailových investorů přichází o peníze při obchodování s produkty s pákovým efektem.";
$risk_s3_title = "3. Technické, Kybernetické a Riziko Třetích Stran";
$risk_s3_li1_title = "Technické Faktory:";
$risk_s3_li1_text = "Online obchodování s sebou nese inherentní rizika výpadků internetového připojení, hardwarových/softwarových chyb a nedostupnosti služby.";
$risk_s3_li2_title = "Kybernetická Bezpečnost:";
$risk_s3_li2_text = "Krypto účty jsou častým cílem phishingu, malwaru a hackerských útoků. Transakce jsou nevratné; kompromitace vašich přihlašovacích údajů může vést k trvalé ztrátě.";
$risk_s3_li3_title = "Platformy Třetích Stran:";
$risk_s3_li3_text = "Tento web může propojovat uživatele s platformami třetích stran. Nekontrolujeme, neschvalujeme ani nezaručujeme jejich bezpečnost, provoz ani platební schopnost. Před vložením prostředků na externí platformy vždy proveďte vlastní důkladnou kontrolu.";
$risk_s4_title = "4. Regulační, Daňová a Závěrečná Ustanovení";
$risk_s4_li1_title = "Právní Soulad a Daně:";
$risk_s4_li1_text = "Regulační rámce se výrazně liší a rychle se mění. Uživatelé nesou výhradní odpovědnost za zajištění toho, že jejich obchodní aktivity jsou v souladu s místními zákony, a za plnění vlastních daňových povinností.";
$risk_s4_li2_title = "Žádné Záruky Zisku:";
$risk_s4_li2_text = "Neexistuje žádné \"bezpečné\" nebo bezrizikové krypto obchodování. Veškeré uvedené výnosy nebo příklady výkonnosti jsou čistě hypotetické.";
$risk_s4_li3_title = "Vhodnost:";
$risk_s4_li3_text = "Pokud plně nerozumíte rizikům, jste závislí na základních prostředcích nebo obchodujete s vypůjčenými penězi, krypto obchodování pro vás není vhodné. V případě pochybností se poraďte s nezávislým, licencovaným finančním poradcem.";
$risk_contact = "<strong>Kontakt:</strong> V případě dotazů ohledně tohoto prohlášení nebo pro podání dotazu kontaktujte náš oficiální tým zákaznického servisu prostřednictvím kontaktního formuláře na našem webu.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrace | $site_name — Vytvořte Si Bezplatný Účet";
$sign_meta_description = "Vytvořte si bezplatný účet $site_name během minut a začněte obchodovat chytřeji s tržní analýzou poháněnou AI.";
$sign_h1 = "Vytvořte Si Bezplatný Účet";
$sign_lead = "Připojte se k $site_name během minut. Vyplňte níže své údaje a začněte.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Děkujeme | $site_name";
$thanks_h1 = "Děkujeme!";
$thanks_text = "Vaše údaje byly přijaty. Člen týmu $site_name vás brzy kontaktuje, aby vám pomohl začít.";
$thanks_btn = "Zpět Domů";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mapa Webu | $site_name";
$sitemap_meta_description = "Prohlédněte si každou stránku webu $site_name, včetně obchodní platformy, nabídky, podpory a právních stránek.";
$sitemap_h1 = "Mapa Webu";
$sitemap_lead = "Každá stránka $site_name na jednom místě.";

