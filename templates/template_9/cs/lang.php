<?php
require __DIR__ . '/../lang.php';
$site_lang = 'cs-CZ';
$form_language = 'cs'; // matches this page's own language, not the offer's global default

// ============================================================
// CS TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficiální Web | Obchodní Platforma";
$home_meta_description = "$site_name nabízí uživatelsky přívětivou obchodní platformu s pokročilými tržními nástroji, informacemi v reálném čase a praktickými funkcemi navrženými tak, aby byl online obchodování dostupnější a informovanější.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Platforma $site_name";
$hero_subtitle = "Podporujeme miliony lidí po celém světě na jejich cestě s digitálními aktivy";
$hero_badge_title = "Spokojení Členové";
$hero_badge_subtitle = "Milovaný miliony";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Začněte Obchodovat Ještě Dnes";
$form_desc = "Připraveni udělat svůj tah? Zaregistrujte se nyní a udělejte první krok k finanční svobodě. Začněte jen s $app_price $app_currency — získejte přístup ke každému obchodnímu nástroji, tržním datům v reálném čase a plnému přístupu k platformě od prvního dne.";
$form_fname_placeholder = "Jméno";
$form_lname_placeholder = "Příjmení";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Registrovat se";
$form_disclaimer_text = "Zadáním svých osobních údajů a kliknutím na tlačítko souhlasíte se <a class=\"link\" href=\"privacy.php\">Zásadami Ochrany Osobních Údajů</a> a <a class=\"link\" href=\"conditions.php\">Podmínkami Používání</a> webu.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BEZPEČNÉ";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Poznejte Platformu";
$stats_title = "Krátký úvod do chytřejšího obchodování";
$stat_1_value = "154+";
$stat_1_label = "Pokrytých Zemí";
$stat_2_value = "29 Milionů";
$stat_2_label = "Globálních Investorů";
$stat_3_value = "635+";
$stat_3_label = "Mincí";
$stat_4_value = "3,26 Miliardy $";
$stat_4_label = "24hodinový Obchodní Objem";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Proč $site_name?";
$why_title = "Důvody, Proč Si Vybrat Nás";
$why_1_title = "Rychle &amp; Snadno";
$why_1_text = "Kupujte a prodávejte své oblíbené kryptoměny během sekund.";
$why_2_title = "Bezpečně &amp; Chráněně";
$why_2_text = "Používáme nejnovější technologie k zajištění bezpečnosti vašich prostředků a dat.";
$why_3_title = "Otevřeno pro Všechny";
$why_3_text = "Obchodujte na naší platformě 24/7, kdekoli a kdykoli chcete.";
$why_4_title = "Profesionální Nástroje";
$why_4_text = "Od jednoduchých po profesionální obchodní funkce, máme vše.";
$why_5_title = "Trendy &amp; Poznatky";
$why_5_text = "Získávejte nejnovější zprávy o kryptoměnách, poznatky a trendy od odborníků.";
$why_6_title = "Podpora 24/7";
$why_6_text = "Náš přátelský tým podpory je zde, aby vám kdykoli pomohl.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Jak To Funguje";
$how_title = "Jednoduché Kroky k Zahájení Obchodování";
$how_1_title = "Registrovat se";
$how_1_text = "Vytvořte si účet a začněte obchodovat během několika minut.";
$how_1_btn = "Začít Obchodovat";
$how_2_title = "Vložte Finanční Prostředky";
$how_2_text = "Financujte svůj účet minimálním vkladem $app_price $app_currency, abyste odemkli plný přístup k obchodování. Vyberte si z více platebních metod a začněte rozšiřovat své portfolio ještě dnes.";
$how_2_note = "Přidat prostředky....";
$how_3_title = "Začít Obchodovat";
$how_3_text = "Prozkoumejte trh a obchodujte po svém.";
$how_3_note = "Kupujte a HODLujte";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulačka";
$calc_title = "Zjistěte, kolik času a potenciálu necháváte ležet ladem";
$calc_volume_label = "Měsíční Obchodní Objem";
$calc_trades_label = "Obchody za Týden";
$calc_time_label = "Čas, Který Byste Mohli Ušetřit";
$calc_boost_label = "Potenciální Nárůst Objemu";
$calc_btn = "Začít Obchodovat";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funkce";
$features_title = "Síla $site_name";
$feature_1_title = "Spotový Obchod";
$feature_1_text = "Maximalizujte svůj obchodní potenciál s profesionálními nástroji.";
$feature_2_title = "Kupte Krypto";
$feature_2_text = "Kupte krypto pomocí karet nebo bank.";
$feature_3_title = "Krypto Deriváty";
$feature_3_text = "Snadné, pokročilé obchodování s futures.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Nechte své bohatství snadno růst.";
$feature_5_title = "Obchodní Bot";
$feature_5_text = "Vyšší zisky, i když spíte.";
$feature_6_title = "Maržové Obchodování";
$feature_6_text = "Půjčujte si, obchodujte a snadno splácejte.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Co Říkají Naši Uživatelé";
$review_1_text = "Platforma je velmi snadno použitelná a od té doby, co jsem se stal držitelem, jsem zaznamenal stálý pokrok. Odhodlání a čerstvé nápady týmu ve mně vzbuzují očekávání toho, co přijde dál!";
$review_1_role = "Trader";
$review_2_text = "$site_name nabízí plynulý a intuitivní obchodní zážitek. Mohl jsem okamžitě začít nakupovat a obchodovat krypto. Rozhraní je snadno použitelné a rychlosti transakcí jsou vynikající!";
$review_2_role = "Nový Trader";
$review_3_text = "Důvěřuji této platformě při správě svých kryptoinvestic. Její bezpečnostní funkce mi dávají jistotu a nikdy jsem nezaznamenal žádné problémy s výběry nebo vklady. Je mezi nejspolehlivějšími burzami, které jsem použil.";
$review_3_role = "Profesionální Trader";
$review_4_text = "Kdykoli jsem měl otázky, tým zákaznické podpory byl rychlý a nápomocný. Skutečně jim záleží na jejich uživatelích a dělají každý obchodní zážitek plynulým a jednoduchým.";
$review_4_role = "Zkušený Trader";
$review_5_text = "Jako začátečník jsem shledal $site_name velmi snadno použitelnou. Co skutečně vyniká, je řada pokročilých nástrojů pro zkušenější obchodníky. Je to solidní volba pro každého, kdo chce budovat své portfolio!";
$review_5_role = "Trader z Komunity";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Časté Otázky";
$faq_title = "Často Kladené Otázky";
$faq_q1 = "Co je $site_name?";
$faq_a1 = "$site_name je kryptoburza, kde mohou uživatelé snadno obchodovat se širokou škálou mincí, včetně Bitcoinu, Ethereum a dalších oblíbených kryptoměn.";
$faq_q2 = "Jak Bezpečná je $site_name pro Obchodování s Krypto?";
$faq_a2 = "Platforma poskytuje bezpečnost prostřednictvím pokročilé technologie a 1:1 krytí aktiv pomocí Proof of Reserves.";
$faq_q3 = "Jak Provedu Vklad?";
$faq_a3 = "$site_name nabízí několik možností vkladu, včetně krypto vkladu, fiat vkladu, P2P obchodování a nákupu jedním kliknutím.";
$faq_q4 = "Potřebuji Zkušenosti k Používání $site_name?";
$faq_a4 = "Ne, nepotřebujete žádné zkušenosti. Uživatelsky přívětivé rozhraní platformy ji zpřístupňuje všem, od začátečníků po pokročilé obchodníky.";
$faq_q5 = "Existují nějaké skryté poplatky nebo náklady?";
$faq_a5 = "Vůbec žádné. Neexistují žádné registrační poplatky, náklady na předplatné ani žádné skryté poplatky jakéhokoli druhu. Vždy vidíte přesnou částku transakce před potvrzením. Příjmy pocházejí z prémiových funkcí a burzovních partnerství, nikoli z odebírání peněz uživatelům.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Začněte Obchodovat Ještě Dnes";
$cta_desc = "Připraveni udělat svůj tah? Zaregistrujte se nyní a udělejte první krok k finanční nezávislosti.";
$cta_btn = "Registrovat se";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Klíčové Funkce Obchodní Platformy $site_name";
$table_1_label = "🤖 Technologie Platformy";
$table_1_val = "Pokročilý AI Obchodní Nástroj";
$table_2_label = "💳 Způsoby Financování";
$table_2_val = "Hlavní Kreditní Karty, Bankovní Převod, PayPal";
$table_3_label = "📱 Přístup k Platformě";
$table_3_val = "Kompatibilita s Více Zařízeními";
$table_4_label = "🚀 Míra Výkonnosti";
$table_4_val = "85% Přesnost";
$table_5_label = "📊 Obchodní Nástroje";
$table_5_val = "Akcie, Forex, Komodity, Drahé Kovy, CFD, Kryptoměny a další…";
$table_6_label = "✍️ Nastavení Účtu";
$table_6_val = "Rychlé a Efektivní";
$table_7_label = "📞 Zákaznická Podpora";
$table_7_val = "24/7 Profesionální Asistence";

// Reviews summary card
$summary_title = "Recenze $site_name";
$summary_badge = "Důvěryhodné";
$summary_desc = "Výkonná, uživatelsky přívětivá obchodní platforma se solidní automatizací a vzdělávacími zdroji.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Obchodujte moudře, rostěte rychle";
$footer_community_label = "Komunita";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Nabídka";
$footnav_contacts = "Kontakt";
$footnav_faq = "Časté Otázky";
$footnav_privacy = "Zásady Ochrany Osobních Údajů";
$footnav_conditions = "Podmínky Používání";
$footnav_risk = "Upozornění na Riziko";
$footer_disclaimer = "$site_name sdílí vzdělávací zdroje a materiály související s trhem, aby pomohla návštěvníkům lépe porozumět obchodování, investování a digitálním finančním produktům. Informace prezentované na webu, jako jsou tržní komentáře, ceny aktiv, grafy, průvodci a analytický obsah, jsou poskytovány pouze pro obecné informační účely a nepředstavují finanční, investiční, daňové nebo právní poradenství. Ačkoli jsou vynakládány přiměřené úsilí k udržení přesných a relevantních informací, $site_name neposkytuje žádné záruky ohledně úplnosti, přesnosti nebo aktuálnosti obsahu a nemůže nést odpovědnost za rozhodnutí nebo ztráty vyplývající z jeho použití.<br><br>Účast na finančních trzích s sebou nese vlastní rizika. Kryptoměny, Forex, CFD, akcie a další obchodní nástroje mohou zaznamenat značné cenové výkyvy a mohou nastat ztráty. Individuální okolnosti a tolerance rizika se liší, proto by uživatelé měli provést vlastní výzkum a zvážit získání rady od kvalifikovaného finančního odborníka před vložením finančních prostředků. Nikdy neobchodujte s penězi, o jejichž ztrátu si nemůžete dovolit přijít.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Obchodní Konzultantka";
$quiz_text_welcome = "Ahoj! Jsem Maya, vaše osobní obchodní konzultantka. Máte pár minut, abychom pro vás našli nejlepší plán?";
$quiz_text_q1 = "Obchodovali jste již dříve s kryptoměnami?";
$quiz_text_a1_yes = "Ano, mám zkušenosti";
$quiz_text_a1_no = "Ne, jsem začátečník";
$quiz_text_q2 = "Skvělé! Jaké je vaše křestní jméno, abych mohla personalizovat váš plán?";
$quiz_text_q3 = "Jaký je váš hlavní cíl s obchodováním?";
$quiz_text_a3_yes = "Vybudovat dlouhodobé bohatství";
$quiz_text_a3_no = "Generovat krátkodobý příjem";
$quiz_text_q4 = "S jakou částkou byste chtěli začít?";
$quiz_text_a4_1 = "Méně než $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Více než $1000";
$quiz_text_q5 = "Perfektní. Chtěli byste, abych vám nyní otevřela bezplatný účet?";
$quiz_text_a5_yes = "Ano, pojďme na to";
$quiz_text_a5_no = "Teď ne";
$quiz_text_loader = "Hledání vašeho nejlepšího plánu...";
$quiz_text_final_ttl = "Vše je připraveno!";
$quiz_text_processing = "Vaše údaje se odesílají...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Křestní jméno";
$quiz_placeholder_lname = "Příjmení";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Získat Můj Bezplatný Účet";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Upozornění na Riziko $site_name — Zveřejnění Obchodního Rizika";
$risk_meta_description = "Přečtěte si upozornění na riziko $site_name před obchodováním: rizika trhu kryptoměn, pákový efekt, likvidita, kybernetická bezpečnost a regulační aspekty.";
$risk_title = "Upozornění na Riziko";
$risk_intro = "Pochopení rizik je prvním krokem k sebevědomému obchodování.";
$risk_ai_title = "Jak Náš AI Systém Pomáhá Řídit Riziko:";
$risk_ai_1_title = "Algoritmická Efektivita &amp; Obchodování Bez Emocí:";
$risk_ai_1_text = "Pokročilé algoritmy analyzují tržní signály, aby objektivně prováděly obchody v optimálních okamžicích.";
$risk_ai_2_title = "Strategie Založené na Datech:";
$risk_ai_2_text = "Strategie jsou založeny na ověřených tržních vzorcích a analýze v reálném čase, nikoli na dohadech.";
$risk_ai_3_title = "Flexibilní Nastavení &amp; Plná Kontrola:";
$risk_ai_3_text = "Upravte své rizikové parametry kdykoli. Sledujte všechny zůstatky a obchody transparentně na svém dashboardu, bez skrytých poplatků a bez omezení výběrů.";
$risk_disclaimer = "<strong>Prohlášení o vyloučení odpovědnosti:</strong> Obchodování vždy nese riziko. Automatizované systémy (včetně AI) negarantují zisk, mohou selhat kvůli softwarovým chybám nebo neočekávaným tržním událostem a vyžadují dohled uživatele. Minulá výkonnost není indikátorem budoucích výsledků. Tato platforma slouží výhradně informačním a marketingovým účelům a neposkytuje finanční poradenství.";
$risk_s1_title = "1. Obecná Rizika &amp; Rizika Trhu Kryptoměn";
$risk_s1_text = "Kryptoměny jsou vysoce volatilní, spekulativní aktiva, která fungují 24/7 s minimálním regulačním dohledem ve většině jurisdikcí.";
$risk_s1_li1 = "Hodnoty se mohou dramaticky měnit v krátkých obdobích, což může potenciálně vést k úplné ztrátě investovaného kapitálu.";
$risk_s1_li2 = "Tržní hodnoty mohou být silně ovlivněny regulačními změnami, technickým vývojem, bezpečnostními narušeními nebo širšími makroekonomickými událostmi.";
$risk_s1_li3 = "Některá aktiva mohou zcela ztratit veškerou svou hodnotu. Investujte pouze prostředky, o jejichž ztrátu si můžete dovolit přijít.";
$risk_s2_title = "2. Riziko Provádění, Likvidity &amp; Pákového Efektu";
$risk_s2_li1_title = "Tržní Volatilita &amp; Likvidita:";
$risk_s2_li1_text = "Extrémní cenové pohyby (10-20 %+ denně) nebo nízká likvidita (zejména u menších mincí) mohou vést ke zpožděním, výpadkům platformy a vážnému prokluzu při provádění. Stop-loss příkazy nemohou zaručit limity ztrát za extrémních podmínek.";
$risk_s2_li2_title = "Riziko Pákového Efektu &amp; Marže:";
$risk_s2_li2_text = "Pákové produkty zesilují zisky i ztráty, což znamená, že můžete ztratit více než svůj počáteční vklad. <em>Přibližně 70-80 % účtů retailových investorů ztrácí peníze při obchodování s pákovými produkty.</em>";
$risk_s3_title = "3. Technická, Kybernetická &amp; Riziko Třetích Stran";
$risk_s3_li1_title = "Technické Faktory:";
$risk_s3_li1_text = "Online obchodování s sebou přirozeně nese rizika výpadků internetového připojení, chyb hardwaru/softwaru a nedostupnosti služby.";
$risk_s3_li2_title = "Kybernetická Bezpečnost:";
$risk_s3_li2_text = "Účty kryptoměn jsou častým cílem phishingu, malwaru a hackingu. Transakce jsou nevratné; kompromitace vašich přihlašovacích údajů může vést k trvalé ztrátě.";
$risk_s3_li3_title = "Platformy Třetích Stran:";
$risk_s3_li3_text = "Tento web může propojovat uživatele s platformami třetích stran. Nekontrolujeme, neschvalujeme ani nezaručujeme jejich bezpečnost, provoz ani solventnost. Před vložením finančních prostředků na externí platformy vždy proveďte vlastní důkladnou due diligence.";
$risk_s4_title = "4. Regulační, Daňová &amp; Závěrečná Ustanovení";
$risk_s4_li1_title = "Právní Soulad &amp; Daně:";
$risk_s4_li1_text = "Regulační rámce se výrazně liší a rychle se mění. Uživatelé jsou výhradně odpovědní za zajištění toho, že jejich obchodní aktivita je v souladu s místními zákony, a za plnění vlastních daňových povinností.";
$risk_s4_li2_title = "Žádné Záruky Zisku:";
$risk_s4_li2_text = "Neexistuje žádné „bezpečné“ nebo bezrizikové obchodování s krypto. Jakékoli uvedené výnosové údaje nebo příklady výkonnosti jsou čistě hypotetické.";
$risk_s4_li3_title = "Vhodnost:";
$risk_s4_li3_text = "Pokud plně nerozumíte rizikům, spoléháte na základní finanční prostředky nebo obchodujete s vypůjčenými penězi, obchodování s krypto pro vás není vhodné. V případě nejistoty se poraďte s nezávislým, licencovaným finančním poradcem.";
$risk_contact = "<strong>Kontakt:</strong> Máte-li jakékoli dotazy týkající se tohoto prohlášení nebo chcete-li podat dotaz, obraťte se prosím na náš oficiální tým zákaznické podpory prostřednictvím kontaktního formuláře na našem webu.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Domů";
$bc_product = "Produkt";
$bc_offer = "Nabídka";
$bc_contacts = "Kontakt";
$bc_faq = "Časté Otázky";
$bc_privacy = "Zásady Ochrany Osobních Údajů";
$bc_conditions = "Podmínky Používání";
$bc_risk = "Upozornění na Riziko";
$bc_sign = "Registrovat se";
$bc_sitemap = "Mapa Webu";
$bc_thanks = "Děkujeme";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produkt $site_name — Obchodní Nástroje &amp; Funkce Platformy";
$product_meta_description = "Objevte produkt $site_name: spotový obchod, krypto deriváty, obchodní bot, maržové obchodování a další, vše postavené na rychlé a bezpečné platformě.";
$product_h1 = "Obchodní Produkt $site_name";
$product_lead = "Jedna platforma, každý nástroj, který obchodník potřebuje: od vašeho prvního spotového obchodu po automatizované strategie a maržové pozice, $site_name udržuje zážitek rychlý, bezpečný a snadno pochopitelný.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Nabídka $site_name — Začněte Obchodovat od $$app_price";
$offer_meta_description = "Podívejte se, co je zahrnuto v aktuální nabídce $site_name: nízký minimální vklad $$app_price, plný přístup k platformě a žádné skryté poplatky.";
$offer_h1 = "Naše Aktuální Nabídka";
$offer_lead = "Začněte s pouhými <strong>$$app_price $app_currency</strong> a odemkněte plnou platformu $site_name od prvního dne &mdash; každý nástroj, každý trh, žádné skryté náklady.";
$offer_li1 = "Minimální vklad pouhých $$app_price $app_currency k aktivaci vašeho účtu";
$offer_li2 = "Plný přístup ke spotovému obchodu, derivátům, marži a obchodnímu botu";
$offer_li3 = "Více způsobů financování, včetně karet a bankovního převodu";
$offer_li4 = "Žádné registrační poplatky, žádné náklady na předplatné, žádné skryté poplatky";
$offer_li5 = "Zákaznická podpora 24/7, zatímco začínáte";
$offer_note = "Výše vkladů a dostupné platební metody se mohou lišit podle regionu. Přečtěte si naše <a class=\"link\" href=\"risk-warning.php\">Upozornění na Riziko</a> před financováním účtu.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontaktujte $site_name — Spojte se s Naším Týmem";
$contacts_meta_description = "Máte otázku ohledně svého účtu $site_name nebo platformy? Kontaktujte náš tým podpory e-mailem nebo nám pošlete zprávu a my se vám ozveme.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Otázky ohledně vašeho účtu, vkladu nebo toho, jak platforma funguje? Náš tým je tu, aby pomohl.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Doba Podpory";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typická Doba Odezvy";
$contacts_response_value = "Do 24 hodin";
$contacts_form_title = "Napište Nám";
$contacts_form_desc = "Zanechte své údaje níže a člen našeho týmu se s vámi přímo spojí.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Časté Otázky $site_name";
$faq_meta_description = "Odpovědi na nejčastější otázky týkající se vytvoření účtu $site_name, provedení vkladu, bezpečnosti platformy a poplatků.";
$faq_page_lead = "Vše, co potřebujete vědět, než začnete obchodovat. Nemůžete najít svou odpověď? <a class=\"link\" href=\"contacts.php\">Kontaktujte náš tým</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
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
        "body" => "Můžeme shromažďovat informace, které poskytujete přímo, jako je vaše jméno, e-mailová adresa a telefonní číslo při registraci nebo odeslání formuláře, jakož i informace shromážděné automaticky, včetně vaší IP adresy, typu zařízení a prohlížeče a stránek zobrazených na Webu.",
    ],
    [
        "title" => "3. Jak Používáme Vaše Informace",
        "body" => "Shromážděné informace používáme k vytvoření a správě vašeho účtu, odpovídání na dotazy, poskytování zákaznické podpory, zlepšování Webu a našich služeb, a tam, kde je to povoleno, k zasílání aktualizací o produktech a nabídkách. Marketingovou komunikaci můžete kdykoli zrušit.",
    ],
    [
        "title" => "4. Cookies &amp; Sledovací Technologie",
        "body" => "Web používá cookies a podobné technologie, aby si zapamatoval vaše preference, udržel vás přihlášené a porozuměl tomu, jak návštěvníci používají naše stránky. Cookies můžete zakázat prostřednictvím nastavení svého prohlížeče, i když některé funkce nemusí v důsledku toho fungovat správně.",
    ],
    [
        "title" => "5. Sdílení Informací",
        "body" => "Vaše osobní údaje neprodáváme. Můžeme sdílet informace s důvěryhodnými poskytovateli služeb, kteří nám pomáhají provozovat Web (jako jsou poskytovatelé hostingu nebo analýz), nebo pokud to vyžaduje zákon, nebo abychom chránili naše zákonná práva.",
    ],
    [
        "title" => "6. Zabezpečení Dat",
        "body" => "Uplatňujeme přiměřená technická a organizační opatření k ochraně vašich informací před neoprávněným přístupem, změnou nebo ztrátou. Žádná metoda přenosu nebo uchovávání není zcela bezpečná a nemůžeme zaručit absolutní bezpečnost.",
    ],
    [
        "title" => "7. Vaše Práva &amp; Volby",
        "body" => "V závislosti na vaší poloze můžete mít právo na přístup, opravu nebo požádání o vymazání svých osobních údajů a namítat proti určitým způsobům jejich použití. K uplatnění těchto práv nás prosím kontaktujte prostřednictvím naší <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a>.",
    ],
    [
        "title" => "8. Ochrana Soukromí Dětí",
        "body" => "Web není zaměřen na osoby mladší 18 let a vědomě neshromažďujeme osobní údaje od nezletilých. Pokud se domníváte, že nám nezletilý poskytl osobní údaje, kontaktujte nás, abychom je mohli odstranit.",
    ],
    [
        "title" => "9. Změny Těchto Zásad",
        "body" => "Tyto Zásady Ochrany Osobních Údajů můžeme čas od času aktualizovat. Jakékoli změny budou zveřejněny na této stránce s revidovaným datem účinnosti. Doporučujeme vám tuto stránku pravidelně kontrolovat.",
    ],
    [
        "title" => "10. Kontaktujte Nás",
        "body" => "Máte-li dotazy ohledně těchto Zásad Ochrany Osobních Údajů nebo způsobu zpracování vašich informací, kontaktujte nás prosím prostřednictvím naší <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a> nebo nám pošlete e-mail na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Podmínky Používání $site_name";
$conditions_meta_description = "Přečtěte si Podmínky Používání upravující přístup a používání webu a obchodní platformy $site_name.";
$conditions_sections = [
    [
        "title" => "1. Přijetí Podmínek",
        "body" => "Přístupem k $site_domain (\"Web\") nebo jeho používáním souhlasíte s tím, že se budete řídit těmito Podmínkami Používání. Pokud nesouhlasíte s jakoukoli částí těchto podmínek, prosím Web nepoužívejte.",
    ],
    [
        "title" => "2. Způsobilost",
        "body" => "Musí vám být alespoň 18 let a musíte mít zákonnou způsobilost používat služby související s obchodováním ve vaší jurisdikci, abyste mohli Web používat. Používáním Webu potvrzujete, že splňujete tyto požadavky.",
    ],
    [
        "title" => "3. Popis Služby",
        "body" => "$site_name poskytuje online platformu se vzdělávacím obsahem, tržními informacemi a obchodními nástroji. Nic na Webu nepředstavuje finanční, investiční, daňové nebo právní poradenství a veškeré poskytnuté informace jsou pouze pro obecné informační účely.",
    ],
    [
        "title" => "4. Odpovědnosti Uživatele",
        "body" => "Jste odpovědní za poskytnutí přesných informací při registraci, za zachování důvěrnosti přihlašovacích údajů svého účtu a za veškerou aktivitu, ke které dojde pod vaším účtem.",
    ],
    [
        "title" => "5. Duševní Vlastnictví",
        "body" => "Veškerý obsah na Webu, včetně textu, grafiky, log a softwaru, je majetkem $site_name nebo jejích poskytovatelů licencí a je chráněn platnými zákony o duševním vlastnictví. Tento obsah nesmíte reprodukovat ani distribuovat bez povolení.",
    ],
    [
        "title" => "6. Žádné Finanční Poradenství",
        "body" => "Obsah na Webu je poskytován pouze pro informační a vzdělávací účely a neměl by být vykládán jako finanční poradenství. Jste sami odpovědní za svá vlastní obchodní rozhodnutí a v případě potřeby byste se měli poradit s nezávislým finančním poradcem. Další informace naleznete v našem <a class=\"link\" href=\"risk-warning.php\">Upozornění na Riziko</a>.",
    ],
    [
        "title" => "7. Omezení Odpovědnosti",
        "body" => "V maximálním rozsahu povoleném zákonem $site_name neponese odpovědnost za jakékoli přímé, nepřímé, náhodné nebo následné škody vyplývající z vašeho používání nebo neschopnosti používat Web nebo jakékoli propojené služby třetích stran.",
    ],
    [
        "title" => "8. Ukončení",
        "body" => "Vyhrazujeme si právo pozastavit nebo ukončit váš přístup k Webu podle vlastního uvážení, bez upozornění, za chování, o kterém se domníváme, že porušuje tyto Podmínky Používání nebo je jinak škodlivé pro ostatní uživatele nebo Web.",
    ],
    [
        "title" => "9. Změny Těchto Podmínek",
        "body" => "Tyto Podmínky Používání můžeme kdykoli revidovat. Pokračující používání Webu po zveřejnění změn představuje přijetí aktualizovaných podmínek.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Dotazy ohledně těchto Podmínek Používání mohou být směřovány na náš tým prostřednictvím <a class=\"link\" href=\"contacts.php\">kontaktní stránky</a> nebo e-mailem na info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrovat se | $site_name — Vytvořte Si Bezplatný Účet";
$sign_meta_description = "Vytvořte si bezplatný účet $site_name během minut a začněte obchodovat s pouhými $$app_price $app_currency.";
$sign_h1 = "Vytvořte Si Bezplatný Účet";
$sign_lead = "Připojte se k $site_name během minut. Vyplňte své údaje níže a začněte.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Děkujeme | $site_name";
$thanks_h1 = "Děkujeme!";
$thanks_text = "Vaše údaje byly přijaty. Člen týmu $site_name vás brzy kontaktuje, aby vám pomohl začít.";
$thanks_btn = "Zpět na Domovskou Stránku";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa Webu | $site_name";
$sitemap_meta_description = "Procházejte každou stránku webu $site_name, včetně obchodní platformy, nabídky, podpory a právních stránek.";
$sitemap_h1 = "Mapa Webu";
$sitemap_lead = "Každá stránka $site_name na jednom místě.";

