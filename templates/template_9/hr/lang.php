<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hr-HR';
$form_language = 'hr'; // matches this page's own language, not the offer's global default

// ============================================================
// HR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Službena Web Stranica | Trgovinska Platforma";
$home_meta_description = "$site_name nudi jednostavnu za korištenje trgovinsku platformu s naprednim tržišnim alatima, uvidima u stvarnom vremenu i praktičnim značajkama dizajniranima kako bi online trgovanje bilo pristupačnije i informiranije.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platforma";
$hero_subtitle = "Podržavamo milijune ljudi diljem svijeta na njihovom putovanju kroz digitalnu imovinu";
$hero_badge_title = "Zadovoljni Članovi";
$hero_badge_subtitle = "Voljeni od milijuna";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Počnite Trgovati Danas";
$form_desc = "Spremni napraviti svoj potez? Registrirajte se sada i napravite prvi korak prema financijskoj slobodi. Počnite s tek $app_price $app_currency — pristupite svakom alatu za trgovanje, tržišnim podacima u stvarnom vremenu i punom pristupu platformi od prvog dana.";
$form_fname_placeholder = "Ime";
$form_lname_placeholder = "Prezime";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Registrirajte se";
$form_disclaimer_text = "Unosom svojih osobnih podataka i klikom na gumb prihvaćate <a class=\"link\" href=\"privacy.php\">Politiku privatnosti</a> i <a class=\"link\" href=\"conditions.php\">Uvjete korištenja</a> web stranice.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIGURNO";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Upoznajte Platformu";
$stats_title = "Brzi uvod u pametnije trgovanje";
$stat_1_value = "154+";
$stat_1_label = "Pokrivenih Zemalja";
$stat_2_value = "29 Milijuna";
$stat_2_label = "Globalnih Ulagača";
$stat_3_value = "635+";
$stat_3_label = "Kovanica";
$stat_4_value = "3,26 Milijardi $";
$stat_4_label = "24-satni Volumen Trgovanja";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Zašto $site_name?";
$why_title = "Razlozi da Nas Odaberete";
$why_1_title = "Brzo &amp; Jednostavno";
$why_1_text = "Kupujte i prodajte svoje omiljene kriptovalute u nekoliko sekundi.";
$why_2_title = "Sigurno &amp; Zaštićeno";
$why_2_text = "Koristimo najnoviju tehnologiju kako bismo vaša sredstva i podatke držali sigurnima.";
$why_3_title = "Otvoreno za Sve";
$why_3_text = "Trgujte na našoj platformi 24/7, gdje god i kad god želite.";
$why_4_title = "Profesionalni Alati";
$why_4_text = "Od jednostavnih do profesionalnih značajki trgovanja, imamo sve.";
$why_5_title = "Trendovi &amp; Uvidi";
$why_5_text = "Dobijte najnovije kripto vijesti, uvide i trendove od stručnjaka.";
$why_6_title = "Podrška 24/7";
$why_6_text = "Naš prijateljski tim za podršku je ovdje kako bi pomogao u bilo koje vrijeme.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Kako Funkcionira";
$how_title = "Jednostavni Koraci za Početak Trgovanja";
$how_1_title = "Registrirajte se";
$how_1_text = "Otvorite račun i počnite trgovati u nekoliko minuta.";
$how_1_btn = "Počnite Trgovati";
$how_2_title = "Uplatite Sredstva";
$how_2_text = "Financirajte svoj račun minimalnim depozitom od $app_price $app_currency kako biste otključali puni pristup trgovanju. Odaberite između više načina plaćanja i počnite rasti svoj portfelj već danas.";
$how_2_note = "Dodajte sredstva....";
$how_3_title = "Počnite Trgovati";
$how_3_text = "Istražite tržište i trgujte na svoj način.";
$how_3_note = "Kupite i Zadržite";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulator";
$calc_title = "Pogledajte koliko vremena i potencijala ostavljate neiskorišteno";
$calc_volume_label = "Mjesečni Volumen Trgovanja";
$calc_trades_label = "Trgovina Tjedno";
$calc_time_label = "Vrijeme Koje Biste Mogli Uštedjeti";
$calc_boost_label = "Potencijalno Povećanje Volumena";
$calc_btn = "Počnite Trgovati";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Značajke";
$features_title = "Snaga $site_name";
$feature_1_title = "Spot Trgovanje";
$feature_1_text = "Maksimizirajte svoj potencijal trgovanja profesionalnim alatima.";
$feature_2_title = "Kupite Kripto";
$feature_2_text = "Kupite kripto karticama ili bankama.";
$feature_3_title = "Kripto Derivati";
$feature_3_text = "Jednostavno, napredno trgovanje futuresima.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Rastite svoje bogatstvo s lakoćom.";
$feature_5_title = "Bot za Trgovanje";
$feature_5_text = "Veći profiti, čak i dok spavate.";
$feature_6_title = "Marginsko Trgovanje";
$feature_6_text = "Posudite, trgujte i vratite jednostavno.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Što Kažu Naši Korisnici";
$review_1_text = "Platforma je vrlo jednostavna za korištenje i vidio sam stalan napredak otkako sam postao vlasnik. Predanost tima i svježe ideje čine da se veselim onome što slijedi!";
$review_1_role = "Trgovac";
$review_2_text = "$site_name nudi glatko i intuitivno iskustvo trgovanja. Mogao sam odmah početi kupovati i trgovati kriptom. Sučelje je jednostavno za korištenje, a brzine transakcija su izvrsne!";
$review_2_role = "Novi Trgovac";
$review_3_text = "Vjerujem ovoj platformi za upravljanje svojim kripto ulaganjima. Njezine sigurnosne značajke daju mi povjerenje i nikada nisam imao problema s isplatama ili depozitima. Jedna je od najpouzdanijih burzi koje sam koristio.";
$review_3_role = "Profesionalni Trgovac";
$review_4_text = "Kad god sam imao pitanja, tim za korisničku podršku bio je brz i uslužan. Zaista im je stalo do korisnika i čine svako iskustvo trgovanja glatkim i jednostavnim.";
$review_4_role = "Iskusni Trgovac";
$review_5_text = "Kao početnik, smatrao sam $site_name vrlo jednostavnim za korištenje. Ono što se stvarno ističe je raspon naprednih alata za iskusnije trgovce. Odličan je izbor za svakoga tko želi izgraditi svoj portfelj!";
$review_5_role = "Trgovac iz Zajednice";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Često Postavljana Pitanja";
$faq_title = "Često Postavljana Pitanja";
$faq_q1 = "Što je $site_name?";
$faq_a1 = "$site_name je kripto burza gdje korisnici mogu jednostavno trgovati širokim rasponom kovanica, uključujući Bitcoin, Ethereum i druge popularne kriptovalute.";
$faq_q2 = "Koliko je $site_name Sigurna za Kripto Trgovanje?";
$faq_a2 = "Platforma pruža sigurnost kroz naprednu tehnologiju i 1:1 pokriće imovine putem Proof of Reserves.";
$faq_q3 = "Kako Napraviti Depozit?";
$faq_a3 = "$site_name nudi više opcija depozita, uključujući kripto depozit, fiat depozit, P2P trgovanje i One-Click kupnju.";
$faq_q4 = "Trebam li Iskustvo za Korištenje $site_name?";
$faq_a4 = "Ne, ne trebate nikakvo iskustvo. Jednostavno sučelje platforme čini je pristupačnom svima, od početnika do naprednih trgovaca.";
$faq_q5 = "Postoje li skrivene naknade ili troškovi?";
$faq_a5 = "Nikako. Nema naknada za registraciju, troškova pretplate ili skrivenih naknada bilo koje vrste. Uvijek vidite točan iznos transakcije prije potvrde. Prihod dolazi od premium značajki i partnerstava s burzama, a ne od uzimanja novca od korisnika.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Počnite Trgovati Danas";
$cta_desc = "Spremni napraviti svoj potez? Registrirajte se sada i napravite prvi korak prema financijskoj neovisnosti.";
$cta_btn = "Registrirajte se";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Ključne Značajke $site_name Trgovinske Platforme";
$table_1_label = "🤖 Tehnologija Platforme";
$table_1_val = "Napredni AI Motor za Trgovanje";
$table_2_label = "💳 Metode Financiranja";
$table_2_val = "Glavne Kreditne Kartice, Bankovni Transfer, PayPal";
$table_3_label = "📱 Pristup Platformi";
$table_3_val = "Kompatibilnost na Više Uređaja";
$table_4_label = "🚀 Stopa Performansi";
$table_4_val = "85% Točnost";
$table_5_label = "📊 Instrumenti Trgovanja";
$table_5_val = "Dionice, Forex, Roba, Plemeniti Metali, CFD-ovi, Kriptovalute i više…";
$table_6_label = "✍️ Postavljanje Računa";
$table_6_val = "Brzo i Učinkovito";
$table_7_label = "📞 Korisnička Podrška";
$table_7_val = "24/7 Profesionalna Pomoć";

// Reviews summary card
$summary_title = "$site_name Recenzije";
$summary_badge = "Pouzdano";
$summary_desc = "Snažna, jednostavna za korištenje trgovinska platforma sa solidnom automatizacijom i edukativnim resursima.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Trgujte pametno, rastite brzo";
$footer_community_label = "Zajednica";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Proizvod";
$footnav_offer = "Ponuda";
$footnav_contacts = "Kontakt";
$footnav_faq = "Često Postavljana Pitanja";
$footnav_privacy = "Politika Privatnosti";
$footnav_conditions = "Uvjeti Korištenja";
$footnav_risk = "Upozorenje o Riziku";
$footer_disclaimer = "$site_name dijeli edukativne resurse i materijale povezane s tržištem kako bi pomogao posjetiteljima bolje razumjeti trgovanje, ulaganje i digitalne financijske proizvode. Informacije prikazane na web stranici, poput tržišnih komentara, cijena imovine, grafikona, vodiča i analitičkog sadržaja, pružaju se u opće informativne svrhe i ne predstavljaju financijski, investicijski, porezni ili pravni savjet. Iako se ulažu razumni napori za održavanje točnih i relevantnih informacija, $site_name ne daje nikakva jamstva u pogledu potpunosti, točnosti ili pravovremenosti sadržaja i ne može se smatrati odgovornim za odluke ili gubitke koji proizlaze iz njegove upotrebe.<br><br>Sudjelovanje na financijskim tržištima nosi inherentne rizike. Kriptovaluta, Forex, CFD-ovi, dionice i drugi instrumenti trgovanja mogu doživjeti značajne fluktuacije cijena, a gubici mogu nastati. Individualne okolnosti i tolerancija na rizik variraju, stoga bi korisnici trebali provesti vlastito istraživanje i razmotriti dobivanje savjeta od kvalificiranog financijskog stručnjaka prije ulaganja sredstava. Nikada ne trgujte novcem koji si ne možete priuštiti izgubiti.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Savjetnik za Trgovanje";
$quiz_text_welcome = "Bok! Ja sam Maya, vaša osobna savjetnica za trgovanje. Imate li nekoliko minuta da pronađemo najbolji plan za vas?";
$quiz_text_q1 = "Jeste li ikada trgovali kriptovalutom?";
$quiz_text_a1_yes = "Da, imam iskustva";
$quiz_text_a1_no = "Ne, ja sam početnik";
$quiz_text_q2 = "Sjajno! Koje je vaše ime kako bih mogla personalizirati vaš plan?";
$quiz_text_q3 = "Koji je vaš glavni cilj s trgovanjem?";
$quiz_text_a3_yes = "Izgradite dugoročno bogatstvo";
$quiz_text_a3_no = "Generirajte kratkoročni prihod";
$quiz_text_q4 = "Koliko biste željeli početi?";
$quiz_text_a4_1 = "Ispod $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Preko $1000";
$quiz_text_q5 = "Savršeno. Želite li da vam sada otvorim besplatni račun?";
$quiz_text_a5_yes = "Da, učinimo to";
$quiz_text_a5_no = "Ne baš sada";
$quiz_text_loader = "Pronalaženje vašeg najboljeg plana...";
$quiz_text_final_ttl = "Sve je spremno!";
$quiz_text_processing = "Slanje vaših podataka...";
$quiz_text_typing = "tipka...";
$quiz_placeholder_fname = "Ime";
$quiz_placeholder_lname = "Prezime";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Dobijte Moj Besplatni Račun";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Upozorenje o Riziku — Otkrivanje Rizika Trgovanja";
$risk_meta_description = "Pročitajte $site_name upozorenje o riziku prije trgovanja: rizici kripto tržišta, poluga, likvidnost, kibernetička sigurnost i regulatorna razmatranja.";
$risk_title = "Upozorenje o Riziku";
$risk_intro = "Razumijevanje rizika prvi je korak prema samouvjerenom trgovanju.";
$risk_ai_title = "Kako Naš AI Sustav Pomaže u Upravljanju Rizikom:";
$risk_ai_1_title = "Algoritamska Učinkovitost &amp; Trgovanje Bez Emocija:";
$risk_ai_1_text = "Napredni algoritmi analiziraju tržišne signale kako bi objektivno izvršili trgovine u optimalnim trenucima.";
$risk_ai_2_title = "Strategije Vođene Podacima:";
$risk_ai_2_text = "Strategije se temelje na provjerenim tržišnim obrascima i analizi u stvarnom vremenu, a ne na nagađanju.";
$risk_ai_3_title = "Fleksibilne Postavke &amp; Puna Kontrola:";
$risk_ai_3_text = "Prilagodite svoje parametre rizika u bilo kojem trenutku. Pratite sve stanja i trgovine transparentno na svojoj nadzornoj ploči, bez skrivenih naknada i neograničenih isplata.";
$risk_disclaimer = "<strong>Odricanje odgovornosti:</strong> Trgovanje uvijek nosi rizik. Automatizirani sustavi (uključujući AI) ne jamče profit, mogu zakazati zbog softverskih pogrešaka ili neočekivanih tržišnih događaja i zahtijevaju nadzor korisnika. Prošli rezultati nisu pokazatelj budućih rezultata. Ova platforma služi isključivo u informativne i marketinške svrhe i ne pruža financijske savjete.";
$risk_s1_title = "1. Opći Rizici &amp; Rizici Tržišta Kriptovaluta";
$risk_s1_text = "Kriptovalute su vrlo volatilna, špekulativna imovina koja djeluje 24/7 s minimalnim regulatornim nadzorom u većini jurisdikcija.";
$risk_s1_li1 = "Vrijednosti mogu dramatično fluktuirati unutar kratkih razdoblja, što potencijalno može dovesti do potpunog gubitka uloženog kapitala.";
$risk_s1_li2 = "Tržišne vrijednosti mogu biti snažno pod utjecajem regulatornih ažuriranja, tehničkih razvoja, sigurnosnih povreda ili šireg makroekonomskih događaja.";
$risk_s1_li3 = "Neka imovina može u potpunosti izgubiti svu vrijednost. Ulažite samo sredstva koja si možete priuštiti izgubiti.";
$risk_s2_title = "2. Rizici Izvršenja, Likvidnosti &amp; Poluge";
$risk_s2_li1_title = "Volatilnost Tržišta &amp; Likvidnost:";
$risk_s2_li1_text = "Ekstremna kretanja cijena (10-20%+ dnevno) ili niska likvidnost (posebno kod manjih kovanica) mogu dovesti do kašnjenja, prekida rada platforme i ozbiljnog odstupanja pri izvršenju. Nalozi stop-loss ne mogu jamčiti granice gubitka u ekstremnim uvjetima.";
$risk_s2_li2_title = "Rizici Poluge &amp; Marže:";
$risk_s2_li2_text = "Proizvodi s polugom pojačavaju i dobitke i gubitke, što znači da možete izgubiti više od svog početnog depozita. <em>Otprilike 70-80% računa maloprodajnih ulagača gubi novac pri trgovanju proizvodima s polugom.</em>";
$risk_s3_title = "3. Tehnički, Kibernetičko-sigurnosni &amp; Rizici Trećih Strana";
$risk_s3_li1_title = "Tehnički Čimbenici:";
$risk_s3_li1_text = "Online trgovanje inherentno uključuje rizike prekida internetske veze, kvarova hardvera/softvera i nedostupnosti usluge.";
$risk_s3_li2_title = "Kibernetička Sigurnost:";
$risk_s3_li2_text = "Kripto računi česta su meta phishinga, malwarea i hakiranja. Transakcije su nepovratne; kompromitiranje vaših vjerodajnica može rezultirati trajnim gubitkom.";
$risk_s3_li3_title = "Platforme Trećih Strana:";
$risk_s3_li3_text = "Ova web stranica može povezati korisnike s platformama trećih strana. Ne kontroliramo, ne odobravamo niti jamčimo njihovu sigurnost, poslovanje ili solventnost. Uvijek provedite vlastitu temeljitu dubinsku analizu prije uplate sredstava na vanjske platforme.";
$risk_s4_title = "4. Regulatorne, Porezne &amp; Završne Odredbe";
$risk_s4_li1_title = "Zakonska Usklađenost &amp; Porezi:";
$risk_s4_li1_text = "Regulatorni okviri uvelike variraju i brzo se mijenjaju. Korisnici su isključivo odgovorni za osiguravanje da njihova trgovinska aktivnost bude u skladu s lokalnim zakonima i za ispunjavanje vlastitih poreznih obveza.";
$risk_s4_li2_title = "Nema Jamstva Profita:";
$risk_s4_li2_text = "Ne postoji \"sigurno\" ili bezrizično kripto trgovanje. Bilo koji navedeni podaci o prinosu ili primjeri performansi čisto su hipotetski.";
$risk_s4_li3_title = "Prikladnost:";
$risk_s4_li3_text = "Ako u potpunosti ne razumijete rizike, oslanjate se na neophodna sredstva ili trgujete posuđenim novcem, kripto trgovanje nije prikladno za vas. Konzultirajte neovisnog, licenciranog financijskog savjetnika ako niste sigurni.";
$risk_contact = "<strong>Kontakt:</strong> Za bilo kakva pitanja u vezi ove izjave ili za slanje upita, molimo obratite se našem službenom timu za korisničku podršku putem kontakt obrasca na našoj web stranici.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Početna";
$bc_product = "Proizvod";
$bc_offer = "Ponuda";
$bc_contacts = "Kontakt";
$bc_faq = "Često Postavljana Pitanja";
$bc_privacy = "Politika Privatnosti";
$bc_conditions = "Uvjeti Korištenja";
$bc_risk = "Upozorenje o Riziku";
$bc_sign = "Registrirajte se";
$bc_sitemap = "Mapa Web Stranice";
$bc_thanks = "Hvala Vam";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Proizvod — Alati za Trgovanje &amp; Značajke Platforme";
$product_meta_description = "Istražite $site_name proizvod: spot trgovanje, kripto derivate, bota za trgovanje, marginsko trgovanje i više, sve izgrađeno na brzoj i sigurnoj platformi.";
$product_h1 = "$site_name Proizvod za Trgovanje";
$product_lead = "Jedna platforma, svaki alat koji trgovcu treba: od vaše prve spot trgovine do automatiziranih strategija i marginskih pozicija, $site_name održava iskustvo brzim, sigurnim i lako razumljivim.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Ponuda — Počnite Trgovati Od $$app_price";
$offer_meta_description = "Pogledajte što je uključeno u trenutnu $site_name ponudu: nizak minimalni depozit od $$app_price, puni pristup platformi i bez skrivenih naknada.";
$offer_h1 = "Naša Trenutna Ponuda";
$offer_lead = "Počnite s tek <strong>$$app_price $app_currency</strong> i otključajte punu $site_name platformu od prvog dana &mdash; svaki alat, svako tržište, bez skrivenih troškova.";
$offer_li1 = "Minimalni depozit od tek $$app_price $app_currency za aktivaciju vašeg računa";
$offer_li2 = "Puni pristup spot trgovanju, derivatima, marži i botu za trgovanje";
$offer_li3 = "Više metoda financiranja, uključujući kartice i bankovni transfer";
$offer_li4 = "Nema naknada za registraciju, nema troškova pretplate, nema skrivenih naknada";
$offer_li5 = "Korisnička podrška 24/7 dok počinjete";
$offer_note = "Iznosi depozita i dostupne metode plaćanja mogu varirati ovisno o regiji. Pregledajte naše <a class=\"link\" href=\"risk-warning.php\">Upozorenje o Riziku</a> prije financiranja računa.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontaktirajte $site_name — Stupite u Kontakt s Našim Timom";
$contacts_meta_description = "Imate pitanje o svom $site_name računu ili platformi? Kontaktirajte naš tim za podršku putem e-maila ili nam pošaljite poruku, a mi ćemo vam odgovoriti.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Pitanja o vašem računu, depozitu ili kako platforma funkcionira? Naš tim je ovdje kako bi pomogao.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Radno Vrijeme Podrške";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tipično Vrijeme Odgovora";
$contacts_response_value = "Unutar 24 sata";
$contacts_form_title = "Pošaljite nam Poruku";
$contacts_form_desc = "Ostavite svoje podatke ispod, a član našeg tima će vas izravno kontaktirati.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Često Postavljana Pitanja";
$faq_meta_description = "Odgovori na najčešća pitanja o otvaranju $site_name računa, izvršavanju depozita, sigurnosti platforme i naknadama.";
$faq_page_lead = "Sve što trebate znati prije nego počnete trgovati. Ne možete pronaći svoj odgovor? <a class=\"link\" href=\"contacts.php\">Kontaktirajte naš tim</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Politika Privatnosti";
$privacy_meta_description = "Saznajte kako $site_name prikuplja, koristi i štiti vaše osobne podatke na web stranici i platformi.";
$privacy_sections = [
    [
        "title" => "1. Uvod",
        "body" => "Ova Politika Privatnosti objašnjava kako $site_name (\"mi\") prikuplja, koristi i štiti osobne podatke posjetitelja i korisnika $site_domain (\"Web Stranica\"). Korištenjem Web Stranice pristajete na prakse opisane u nastavku.",
    ],
    [
        "title" => "2. Informacije Koje Prikupljamo",
        "body" => "Možemo prikupljati informacije koje izravno pružite, poput vašeg imena, e-mail adrese i telefonskog broja kada se registrirate ili predate obrazac, kao i informacije prikupljene automatski, uključujući vašu IP adresu, vrstu uređaja i preglednika, te stranice pregledane na Web Stranici.",
    ],
    [
        "title" => "3. Kako Koristimo Vaše Informacije",
        "body" => "Koristimo prikupljene informacije za otvaranje i upravljanje vašim računom, odgovaranje na upite, pružanje korisničke podrške, poboljšanje Web Stranice i naših usluga, i, gdje je dopušteno, slanje ažuriranja o proizvodima i ponudama. Možete se odjaviti od marketinških komunikacija u bilo kojem trenutku.",
    ],
    [
        "title" => "4. Kolačići &amp; Tehnologije Praćenja",
        "body" => "Web Stranica koristi kolačiće i slične tehnologije kako bi zapamtila vaše preferencije, održala vas prijavljenima i razumjela kako posjetitelji koriste naše stranice. Kolačiće možete onemogućiti putem postavki preglednika, iako neke značajke možda kao rezultat toga neće ispravno funkcionirati.",
    ],
    [
        "title" => "5. Dijeljenje Informacija",
        "body" => "Ne prodajemo vaše osobne podatke. Možemo dijeliti informacije s pouzdanim pružateljima usluga koji nam pomažu upravljati Web Stranicom (poput pružatelja hostinga ili analitike), ili kada je to zakonski propisano ili radi zaštite naših zakonskih prava.",
    ],
    [
        "title" => "6. Sigurnost Podataka",
        "body" => "Primjenjujemo razumne tehničke i organizacijske mjere kako bismo zaštitili vaše informacije od neovlaštenog pristupa, izmjene ili gubitka. Nijedna metoda prijenosa ili pohrane nije potpuno sigurna i ne možemo jamčiti apsolutnu sigurnost.",
    ],
    [
        "title" => "7. Vaša Prava &amp; Izbori",
        "body" => "Ovisno o vašoj lokaciji, možete imati pravo pristupa, ispravka ili zahtijevanja brisanja vaših osobnih podataka, te ulaganja prigovora na određena korištenja istih. Da biste ostvarili ova prava, obratite nam se putem naše <a class=\"link\" href=\"contacts.php\">kontakt stranice</a>.",
    ],
    [
        "title" => "8. Privatnost Djece",
        "body" => "Web Stranica nije namijenjena osobama mlađim od 18 godina i svjesno ne prikupljamo osobne podatke od maloljetnika. Ako smatrate da nam je maloljetnik dostavio osobne podatke, kontaktirajte nas kako bismo ih mogli ukloniti.",
    ],
    [
        "title" => "9. Izmjene Ove Politike",
        "body" => "S vremena na vrijeme možemo ažurirati ovu Politiku Privatnosti. Sve izmjene bit će objavljene na ovoj stranici s revidiranim datumom stupanja na snagu. Potičemo vas da povremeno pregledavate ovu stranicu.",
    ],
    [
        "title" => "10. Kontaktirajte Nas",
        "body" => "Ako imate pitanja o ovoj Politici Privatnosti ili o tome kako se vaše informacije obrađuju, obratite nam se putem naše <a class=\"link\" href=\"contacts.php\">kontakt stranice</a> ili nam pošaljite e-mail na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Uvjeti Korištenja";
$conditions_meta_description = "Pregledajte Uvjete Korištenja koji reguliraju pristup i korištenje $site_name web stranice i trgovinske platforme.";
$conditions_sections = [
    [
        "title" => "1. Prihvaćanje Uvjeta",
        "body" => "Pristupanjem ili korištenjem $site_domain (\"Web Stranica\"), pristajete biti vezani ovim Uvjetima Korištenja. Ako se ne slažete s bilo kojim dijelom ovih uvjeta, molimo ne koristite Web Stranicu.",
    ],
    [
        "title" => "2. Prihvatljivost",
        "body" => "Morate imati najmanje 18 godina i biti zakonski ovlašteni koristiti usluge povezane s trgovanjem u svojoj jurisdikciji kako biste koristili Web Stranicu. Korištenjem Web Stranice potvrđujete da ispunjavate ove zahtjeve.",
    ],
    [
        "title" => "3. Opis Usluge",
        "body" => "$site_name pruža online platformu s edukativnim sadržajem, tržišnim informacijama i alatima za trgovanje. Ništa na Web Stranici ne predstavlja financijski, investicijski, porezni ili pravni savjet, a bilo koje pružene informacije služe samo u opće informativne svrhe.",
    ],
    [
        "title" => "4. Odgovornosti Korisnika",
        "body" => "Odgovorni ste za pružanje točnih informacija prilikom registracije, za održavanje povjerljivosti podataka za pristup vašem računu i za svu aktivnost koja se odvija pod vašim računom.",
    ],
    [
        "title" => "5. Intelektualno Vlasništvo",
        "body" => "Sav sadržaj na Web Stranici, uključujući tekst, grafiku, logotipe i softver, vlasništvo je $site_name ili njegovih davatelja licence i zaštićen je primjenjivim zakonima o intelektualnom vlasništvu. Ne smijete reproducirati ili distribuirati ovaj sadržaj bez dopuštenja.",
    ],
    [
        "title" => "6. Bez Financijskog Savjeta",
        "body" => "Sadržaj na Web Stranici pruža se samo u informativne i edukativne svrhe i ne treba se tumačiti kao financijski savjet. Isključivo ste odgovorni za svoje vlastite odluke o trgovanju i trebali biste se posavjetovati s neovisnim financijskim savjetnikom ako je potrebno. Pogledajte naše <a class=\"link\" href=\"risk-warning.php\">Upozorenje o Riziku</a> za više informacija.",
    ],
    [
        "title" => "7. Ograničenje Odgovornosti",
        "body" => "U najvećoj mjeri dopuštenoj zakonom, $site_name neće biti odgovoran za bilo kakvu izravnu, neizravnu, slučajnu ili posljedičnu štetu koja proizlazi iz vašeg korištenja, ili nemogućnosti korištenja, Web Stranice ili bilo kojih povezanih usluga trećih strana.",
    ],
    [
        "title" => "8. Raskid",
        "body" => "Zadržavamo pravo suspendirati ili raskinuti vaš pristup Web Stranici prema vlastitom nahođenju, bez prethodne obavijesti, za ponašanje za koje vjerujemo da krši ove Uvjete Korištenja ili je na drugi način štetno za druge korisnike ili Web Stranicu.",
    ],
    [
        "title" => "9. Izmjene Ovih Uvjeta",
        "body" => "Ove Uvjete Korištenja možemo revidirati u bilo kojem trenutku. Nastavak korištenja Web Stranice nakon objave izmjena predstavlja prihvaćanje ažuriranih uvjeta.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Pitanja o ovim Uvjetima Korištenja mogu se uputiti našem timu putem <a class=\"link\" href=\"contacts.php\">kontakt stranice</a> ili e-mailom na info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registracija | $site_name — Otvorite Svoj Besplatni Račun";
$sign_meta_description = "Otvorite svoj besplatni $site_name račun u nekoliko minuta i počnite trgovati s tek $$app_price $app_currency.";
$sign_h1 = "Otvorite Svoj Besplatni Račun";
$sign_lead = "Pridružite se $site_name u nekoliko minuta. Ispunite svoje podatke u nastavku kako biste počeli.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Hvala Vam | $site_name";
$thanks_h1 = "Hvala Vam!";
$thanks_text = "Vaši podaci su primljeni. Član $site_name tima uskoro će vas kontaktirati kako bi vam pomogao započeti.";
$thanks_btn = "Povratak na Početnu";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa Web Stranice | $site_name";
$sitemap_meta_description = "Pregledajte svaku stranicu na $site_name web stranici, uključujući trgovinsku platformu, ponudu, podršku i pravne stranice.";
$sitemap_h1 = "Mapa Web Stranice";
$sitemap_lead = "Svaka stranica na $site_name na jednom mjestu.";

