<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hr-HR';
$form_language = 'hr'; // matches this page's own language, not the offer's global default

// ============================================================
// HR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Službena Web Stranica | Trgovinska Platforma";
$home_meta_description = "$site_name nudi jednostavnu trgovinsku platformu s naprednim tržišnim alatima, uvidima u stvarnom vremenu i praktičnim značajkama koje čine online trgovanje pristupačnijim i informiranijim.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "O nama";
$nav_contacts = "Kontakt";
$nav_login = "Prijava";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Uživo";
$activity_suffix = "Upravo se pridružio";
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
$form_title = "Počnite Sada";
$form_fname_placeholder = "Puno ime";
$form_lname_placeholder = "Prezime";
$form_email_placeholder = "Adresa e-pošte";
$form_btn_submit = "Otvori Račun";
$form_disclaimer_text = "* Klikom na gumb slažete se s našim <a class=\"link\" href=\"privacy.php\">Pravilima Privatnosti</a> i <a class=\"link\" href=\"conditions.php\">Uvjetima Korištenja</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "OSIGURANO";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: UI dizajniran za jasnije čitanje tržišta";
$s1_subtitle = "Investicijska strategija vođena tehnologijom";
$s1_quote = "$site_name je izgrađen kako bi olakšao rad s tržištima, bez obzira imate li iskustva ili ne. Platforma primjenjuje umjetnu inteligenciju za pretvaranje složenih podataka u jasne, primjenjive odluke, omogućujući vam trgovanje s više samopouzdanja u bilo kojem scenariju.";
$s1_p1 = "Sustav pregledava ogromne količine informacija u stvarnom vremenu: otkriva promjene, prepoznaje obrasce i brzo reagira na tržišne signale. To vam daje jasnu sliku trenutnog konteksta, tako da možete uočiti prilike bez potrebe za kopanjem kroz složene analize.";
$s1_p2 = "Praćenje 24/7, jednostavno sučelje i visoka razina zaštite čine iskustvo ugodnim i pouzdanim. Sve je dizajnirano tako da se možete usredotočiti na rezultate, a ne na tehničku stranu.";
$s1_p3 = "Značajka copy tradinga također vam daje pristup strategijama iskusnijih trgovaca. Možete pratiti njihove poteze i primijeniti dokazane pristupe na vlastito trgovanje, kombinirajući profesionalnu prosudbu s automatizacijom.";
$s1_cta = "Otvori Račun";
$s1_img_alt = "$site_name digitalne financije";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Precizna tržišna analiza, bez dodatne buke";
$s2_intro = "$site_name koristi umjetnu inteligenciju za kontinuirano praćenje tržišta i brzo otkrivanje promjena. Sustav obrađuje ogromne količine podataka i prikazuje samo relevantne signale, bez preopterećivanja nepotrebnim informacijama.";
$s2_item1_title = "Tržišna reakcija bez čekanja";
$s2_item1_text = "Platforma prepoznaje pokrete u njihovim ranim fazama: zamah, preokrete i promjene trenda. Odmah vidite što se događa i možete djelovati u pravom trenutku.";
$s2_item2_title = "Jasan uvid umjesto nagađanja";
$s2_item2_text = "Bez složenih grafikona ili nagađanja. $site_name ističe bitno, pružajući jasan pregled situacije, tako da možete odlučivati na temelju podataka, a ne intuicije.";
$s2_item3_title = "Kontrola i zaštita";
$s2_item3_text = "Vaši podaci su zaštićeni, pristup je kontroliran, a transakcije teku kroz sigurne kanale. To vam omogućuje da se usredotočite na tržište, a ne na tehnički rizik.";
$s2_img_alt = "$site_name kripto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Jasna inteligencija za trgovce";
$s3_card1_title = "$site_name poštuje privatnost i kontrolu korisnika";
$s3_card1_text = "$site_name postupa s informacijama uz potpunu transparentnost i integritet. Ne zlorabi vaše osobne podatke. Nikakve transakcije ili narudžbe se ne bilježe na ovoj platformi.";
$s3_card2_title = "Jasno analitičko okruženje za bolje odluke";
$s3_card2_text = "$site_name funkcionira kao tehnološki prostor u kojem UI pojačava ljudsku prosudbu umjesto da je zamjenjuje. Ovi alati olakšavaju razumijevanje tržišnih pomaka, uspoređivanje strategija i proučavanje ponašanja imovine.";
$s3_card3_title = "UI alati koji izoštravaju vaš pogled na tržište";
$s3_card3_text = "Analiza se nikad ne zaustavlja. $site_name promatra kripto okruženje i šalje obavijesti u stvarnom vremenu čim se pojavi relevantan pokret.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Oštra analiza, bez emocija ili pogrešaka";
$s4_quote = "$site_name pretvara složene tržišne podatke u organizirane, lako čitljive informacije, eliminirajući nepotrebnu buku i pomažući vam da se usredotočite na signale koji su zaista bitni. To vam omogućuje da situaciju shvatite ranije i odlučite bez preuzimanja kontrole emocijama.";
$s4_p1 = "Sustav kontinuirano ažurira svoje zaključke novim podacima. Umjesto zaostajućih indikatora, koristi adaptivne modele koji reagiraju na tržišne promjene u stvarnom vremenu. To znači da uvijek radite s ažurnom slikom i možete djelovati brže kada je to zaista važno.";
$s4_img_alt = "$site_name umjetna inteligencija";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Koristite $site_name UI za precizne, pravovremene odluke";
$s5_quote = "$site_name analizira tržište u stvarnom vremenu i odmah vam pokazuje gdje su pokret i prilike. Sustav obrađuje podatke umjesto vas, pružajući gotove signale: kada ući, kada izaći i na što obratiti pozornost.";
$s5_p1 = "Ne morate cijeli dan gledati grafikone. Platforma sama otkriva promjene i brzo reagira na tržište, tako da ne propustite važne trenutke.";
$s5_p2 = "Algoritmi rade 24/7, prepoznajući nove prilike čim se pojave. Dobivate ažurne informacije bez kašnjenja ili preopterećenja informacijama.";
$s5_p3 = "Istovremeno, sigurnost ostaje na visokoj razini: zaštita podataka, siguran pristup i kontrola trgovanja. $site_name je prikladan za početnike i za aktivne trgovce — odluke ostaju vaše, ali podržane čvrstom analitičkom osnovom.";
$s5_img_alt = "$site_name financijska automatizacija";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Dosljedno trgovanje počinje organiziranim sustavom";
$s6_p1 = "$site_name pomaže unijeti strukturu u vaš rad s tržištem. Platforma stvara jasan okvir: vi definirate svoje ciljeve i razinu rizika, a sustav prilagođava svoju analizu vašem stilu — bez kaosa i preopterećenja.";
$s6_p2 = "Analiza 24/7 pretvara tok podataka u jednostavne, razumljive signale. Vidite samo ono što je bitno: gdje ima pokreta, gdje se isplati ući i kada je bolje pričekati. S vremenom algoritmi postaju precizniji i prilagođavaju se tržištu.";
$s6_item1_title = "Odaberite svoj tempo: brzo trgovanje ili dugoročni pristup";
$s6_item1_text = "$site_name podržava različite strategije. Za aktivno trgovanje sustav označava ulazne točke i cjenovne pokrete. Za dugoročni pristup pomaže vam zadržati pozicije uzimajući u obzir trend i rizik.";
$s6_item2_title = "Ulazne točke bez nagađanja";
$s6_item2_text = "Platforma pokazuje gdje je tržište najaktivnije. To vam pomaže ući s više samopouzdanja i izaći na vrijeme, bez improvizacije.";
$s6_item3_title = "Upravljanje rizikom od samog početka";
$s6_item3_text = "Možete unaprijed vidjeti moguće scenarije: gdje je rizik niži, a potencijal veći. To vam omogućuje planiranje transakcija prije nego što pokret uopće počne.";
$s6_item4_title = "Gotova analiza";
$s6_item4_text = "$site_name vas ne preopterećuje složenom terminologijom. Dobivate jasne, izravno primjenjive informacije, dizajnirane da vam pomognu odlučiti brže i s više samopouzdanja.";
$s6_cta = "Počnite Sada";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Jednostavni alati za precizne odluke s $site_name";
$s7_quote = "$site_name vam pruža sve što vam je potrebno za trgovanje na tržištu — bez tehničkog žargona ili preopterećenja informacijama. Platforma sama analizira cjenovne pokrete, trendove i moguće ulazne točke, prikazujući samo ono što je zaista bitno.";
$s7_point1 = "Sustav pomaže otkriti kada se tržište može okrenuti, gdje se pojavljuju snažni pokreti i koji su trenuci najbolji za ulazak ili izlazak. Svaki signal dolazi unaprijed obrađen — ne morate savladati složene indikatore.";
$s7_point2 = "Uključuje i copy trading: možete pratiti i ponoviti odluke iskusnih trgovaca bez trošenja vremena na vlastitu analizu.";
$s7_point3 = "Sučelje ostaje što jednostavnije — svaki alat se razumije na prvi pogled i spreman je za korištenje od prvog trenutka.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Pronađite važne vremenske prozore uz $site_name UI";
$s8_item1 = "Automatska diversifikacija raspoređuje sredstva na različitu imovinu, smanjujući rizik i štiteći kapital čak i na nestabilnim tržištima.";
$s8_item2 = "Potpuno autonoman sustav — ne morate gledati grafikone. Algoritmi analiziraju tržište i samostalno donose odluke.";
$s8_item3 = "Isplate su dostupne u bilo kojem trenutku — na bankovne kartice, kripto novčanike ili elektroničke platne sustave, bez kašnjenja.";
$s8_item4 = "Dnevna izvješća prikazuju vaše rezultate i daju vam potpunu kontrolu nad situacijom u stvarnom vremenu.";
$s8_item5 = "Fleksibilne postavke razine rizika omogućuju vam odabir strategije koja odgovara vašim ciljevima — od konzervativne do agresivnije.";
$s8_item6 = "Potencijal profita do 400% čini $site_name alatom za one koji žele ne samo sačuvati svoj kapital, već ga značajno povećati.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Stručna analiza pokretana $site_name";
$s9_quote = "$site_name kombinira snagu algoritama s tržišnim iskustvom, pretvarajući složene podatke u jasne, lako razumljive signale. Sustav brzo otkriva obrasce i potencijalne prilike, omogućujući vam odlučivanje bez preopterećenja informacijama.";
$s9_p1 = "Dobivate unaprijed obrađene analize koje uzimaju u obzir i tehničke indikatore i ponašanje tržišta — tako da možete djelovati brže, s više samopouzdanja i preciznosti.";
$s9_img_alt = "$site_name investicijska strategija";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Što kažu naši korisnici";
$review_1_text = "Platforma je vrlo intuitivna, a alati su mi pomogli poboljšati rezultate trgovanja.";
$review_2_text = "Brza podrška i doista korisni materijali za učenje — savršeno za ljude koji tek počinju.";
$review_3_text = "Prilagodljivi grafikoni i brzo izvršenje — to je moj prvi izbor već mjesecima.";
$review_4_text = "Registracija je trajala manje od pet minuta, a nadzorna ploča olakšava praćenje točno gdje se nalazi moj novac.";
$review_5_text = "Sviđa mi se što platforma objašnjava logiku iza svakog signala, umjesto da mi samo baca brojke.";
$review_6_text = "Isplate su za mene uvijek bile brze, a tim za podršku doista odgovara u roku od nekoliko minuta.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Često Postavljana Pitanja o $site_name";
$faq_q1 = "Može li $site_name otkriti tržišne promjene u stvarnom vremenu?";
$faq_a1 = "Da. Prati podatke uživo, prepoznaje pomake zamaha u njihovim ranim fazama i uočava obrasce prije nego što se potpuno razviju, dajući korisnicima pravovremenu prednost.";
$faq_q2 = "Može li se $site_name iskustvo prilagoditi?";
$faq_a2 = "Da. Korisnici mogu odabrati područja interesa, prilagoditi razinu detalja i pratiti javne strategije koje odgovaraju njihovom stilu trgovanja ili obrazovnim potrebama.";
$faq_q3 = "Zamjenjuje li $site_name tradicionalne metode istraživanja?";
$faq_a3 = "Ne. Poboljšava ih pružajući brzo uvide filtrirane umjetnom inteligencijom, dok korisnik zadržava potpunu kontrolu nad vlastitim istraživanjem i odlukama.";
$faq_cta = "Saznajte Više Sada";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Istaknuto";
$hl1_emoji = "🤖";
$hl1_title = "Trošak Registracije";
$hl1_desc = "Nema troškova za registraciju";
$hl2_emoji = "💰";
$hl2_title = "Trgovinske Provizije";
$hl2_desc = "Apsolutno bez troškova";
$hl3_emoji = "📋";
$hl3_title = "Jednostavnost Registracije";
$hl3_desc = "Registracija je brza i jednostavna";
$hl4_emoji = "📊";
$hl4_title = "Obrazovni Fokus";
$hl4_desc = "Lekcije o kriptu, Forex trgovanju i investiranju";
$hl5_emoji = "🌎";
$hl5_title = "Dostupne Zemlje";
$hl5_desc = "Nije dostupno u SAD-u, dostupno u većini drugih zemalja";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Trgujte pametno, rastite s povjerenjem";
$footnav_about = "O nama";
$footnav_product = "Proizvod";
$footnav_offer = "Ponuda";
$footnav_contacts = "Kontakt";
$footnav_faq = "Česta Pitanja";
$footnav_privacy = "Pravila Privatnosti";
$footnav_conditions = "Uvjeti Korištenja";
$footnav_risk = "Upozorenje o Riziku";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name objavljuje opće obrazovne materijale o trgovanju, investiranju, financijskim tržištima i digitalnoj imovini. Članci, tržišni podaci, grafikoni i drugi sadržaj web stranice pružaju se isključivo u informativne svrhe i ne bi ih trebalo smatrati financijskim, investicijskim ili pravnim savjetom. Iako nastojimo pružiti pouzdane i ažurne informacije, ne možemo jamčiti njihovu točnost ili potpunost i nismo odgovorni za gubitke koji proizlaze iz oslanjanja na sadržaj.<br><br>Trgovanje uključuje rizik, a kriptovalute, Forex, CFD-ovi, dionice i drugi financijski proizvodi mogu značajno varirati u vrijednosti. Razmotrite svoju financijsku situaciju i toleranciju na rizik prije trgovanja i potražite stručni savjet gdje je potrebno. Nikada ne ulažite novac koji si ne možete priuštiti izgubiti.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Trgovinski Savjetnik";
$quiz_text_welcome = "Zdravo! Ja sam Sofia, vaš osobni trgovinski savjetnik. Imate li nekoliko minuta da pronađemo najbolji plan za vas?";
$quiz_text_q1 = "Jeste li trgovali ranije?";
$quiz_text_a1_yes = "Da, imam iskustva";
$quiz_text_a1_no = "Ne, ja sam početnik";
$quiz_text_q2 = "Odlično! Koje je vaše ime kako bih mogla personalizirati vaš plan?";
$quiz_text_q3 = "Koji je vaš glavni cilj s trgovanjem?";
$quiz_text_a3_yes = "Izgradnja dugoročnog bogatstva";
$quiz_text_a3_no = "Generiranje kratkoročnog prihoda";
$quiz_text_q4 = "S koliko biste željeli početi?";
$quiz_text_a4_1 = "Manje od $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Više od $1000";
$quiz_text_q5 = "Savršeno. Želite li da vam sada otvorim besplatni račun?";
$quiz_text_a5_yes = "Da, učinimo to";
$quiz_text_a5_no = "Ne sada";
$quiz_text_loader = "Pronalaženje najboljeg plana za vas...";
$quiz_text_final_ttl = "Sve je spremno!";
$quiz_text_processing = "Vaši podaci se šalju...";
$quiz_text_typing = "piše...";
$quiz_placeholder_fname = "Ime";
$quiz_placeholder_lname = "Prezime";
$quiz_placeholder_email = "E-pošta";
$quiz_btn_submit = "Dobij Moj Besplatni Račun";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Početna";
$bc_about = "O nama";
$bc_product = "Proizvod";
$bc_offer = "Ponuda";
$bc_contacts = "Kontakt";
$bc_faq = "Česta Pitanja";
$bc_privacy = "Pravila Privatnosti";
$bc_conditions = "Uvjeti Korištenja";
$bc_risk = "Upozorenje o Riziku";
$bc_sign = "Registracija";
$bc_thanks = "Hvala Vam";
$bc_sitemap = "Karta Stranice";

// -------------------------
// About page
// -------------------------
$about_meta_title = "O $site_name";
$about_meta_description = "Saznajte više o misiji $site_name: učiniti tržišnu analizu jasnijom i pristupačnijom pomoću alata pokretanih umjetnom inteligencijom.";
$about_h1 = "O $site_name";
$about_lead = "$site_name je izgrađen oko jedne ideje: trgovinske odluke trebale bi se temeljiti na jasnim informacijama, a ne na nagađanju.";
$about_p1 = "Kombiniramo umjetnu inteligenciju sa stvarnim tržišnim iskustvom kako bismo pretvorili složene, bučne podatke u signale koji su laki za razumijevanje i djelovanje. Naša platforma prati tržišta danju i noću, tako da vi to ne morate.";
$about_p2 = "Bilo da obavljate svoju prvu trgovinu ili ste aktivni na tržištima godinama, $site_name je dizajniran da vas dočeka tamo gdje jeste — s alatima koji se kreću od jednostavnog vodstva do napredne analize u stvarnom vremenu.";
$about_p3 = "Vjerujemo da bi tehnologija trebala podržati vašu prosudbu, a ne je zamijeniti. Svaki signal koji $site_name generira namijenjen je informiranju odluke koja je i dalje u potpunosti vaša.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Proizvod — UI Alati za Tržišnu Analizu";
$product_meta_description = "Istražite $site_name proizvod: UI tržišnu analizu u stvarnom vremenu, copy trading, kontrolu rizika i automatiziranu diversifikaciju.";
$product_h1 = "$site_name proizvod";
$product_lead = "Jedna platforma koja čita tržište umjesto vas: analiza u stvarnom vremenu, copy trading i fleksibilni alati za rizik, dizajnirani da trgovinske odluke učine jasnijima.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Ponuda — Počnite Besplatno";
$offer_meta_description = "Pogledajte što je uključeno u trenutnu $site_name ponudu: besplatna registracija, bez trgovinskih provizija i pun pristup platformi.";
$offer_h1 = "Naša trenutna ponuda";
$offer_lead = "Otvorite svoj račun besplatno i otključajte punu $site_name platformu &mdash; bez naknada za registraciju, bez trgovinskih provizija.";
$offer_li1 = "Nema troškova za registraciju vašeg računa";
$offer_li2 = "Nema provizija na transakcije";
$offer_li3 = "Pun pristup UI tržišnoj analizi u stvarnom vremenu i copy tradingu";
$offer_li4 = "Isplate dostupne u bilo kojem trenutku, bez skrivenih naknada";
$offer_li5 = "Obrazovni resursi o kriptu, Forexu i investiranju uključeni";
$offer_note = "Dostupnost može varirati ovisno o regiji. Pregledajte naše <a class=\"link\" href=\"risk-warning.php\">Upozorenje o Riziku</a> prije financiranja računa.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontaktirajte $site_name — Obratite se našem timu";
$contacts_meta_description = "Imate li pitanje o svom $site_name računu ili platformi? Obratite se našem timu za podršku putem e-pošte ili nam pošaljite poruku.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Pitanja o vašem računu, depozitu ili kako platforma funkcionira? Naš tim je spreman pomoći.";
$contacts_email_label = "E-pošta";
$contacts_hours_label = "Radno Vrijeme Podrške";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tipično Vrijeme Odgovora";
$contacts_response_value = "Unutar 24 sata";
$contacts_form_title = "Pošaljite Nam Poruku";
$contacts_form_desc = "Ostavite svoje podatke ispod i član našeg tima će vas izravno kontaktirati.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Pravila Privatnosti";
$privacy_meta_description = "Saznajte kako $site_name prikuplja, koristi i štiti vaše osobne podatke na cijeloj web stranici i platformi.";
$privacy_sections = [
    [
        "title" => "1. Uvod",
        "body" => "Ova Pravila Privatnosti objašnjavaju kako $site_name (\"mi\") prikuplja, koristi i štiti osobne podatke posjetitelja i korisnika $site_domain (\"Web Stranica\"). Korištenjem Web Stranice slažete se s praksama opisanim u nastavku.",
    ],
    [
        "title" => "2. Informacije Koje Prikupljamo",
        "body" => "Možemo prikupljati informacije koje izravno pružate, poput vašeg imena, adrese e-pošte i telefonskog broja prilikom registracije ili slanja obrasca, kao i automatski prikupljene informacije, uključujući vašu IP adresu, vrstu uređaja i preglednika te stranice pregledane na Web Stranici.",
    ],
    [
        "title" => "3. Kako Koristimo Vaše Informacije",
        "body" => "Koristimo prikupljene informacije za stvaranje i upravljanje vašim računom, odgovaranje na upite, pružanje korisničke podrške, poboljšanje Web Stranice i naših usluga te, gdje je dopušteno, slanje ažuriranja o proizvodima i ponudama. Marketinšku komunikaciju možete odjaviti u bilo kojem trenutku.",
    ],
    [
        "title" => "4. Kolačići i Tehnologije Praćenja",
        "body" => "Web Stranica koristi kolačiće i slične tehnologije za pamćenje vaših preferencija, održavanje vaše prijave i razumijevanje kako posjetitelji koriste naše stranice. Kolačiće možete onemogućiti putem postavki preglednika, iako neke značajke možda neće ispravno funkcionirati.",
    ],
    [
        "title" => "5. Dijeljenje Informacija",
        "body" => "Ne prodajemo vaše osobne podatke. Možemo dijeliti informacije s pouzdanim pružateljima usluga koji nam pomažu voditi Web Stranicu (poput pružatelja hostinga ili analitike), ili kada to zahtijeva zakon, ili kako bismo zaštitili svoja zakonska prava.",
    ],
    [
        "title" => "6. Sigurnost Podataka",
        "body" => "Primjenjujemo razumne tehničke i organizacijske mjere za zaštitu vaših informacija od neovlaštenog pristupa, izmjene ili gubitka. Nijedna metoda prijenosa ili pohrane nije potpuno sigurna i ne možemo jamčiti apsolutnu sigurnost.",
    ],
    [
        "title" => "7. Vaša Prava i Izbori",
        "body" => "Ovisno o vašoj lokaciji, možda imate pravo pristupiti, ispraviti ili zatražiti brisanje svojih osobnih podataka te se usprotiviti određenim njihovim korištenjima. Da biste ostvarili ova prava, obratite nam se putem naše <a class=\"link\" href=\"contacts.php\">kontakt stranice</a>.",
    ],
    [
        "title" => "8. Privatnost Djece",
        "body" => "Web Stranica nije namijenjena osobama mlađim od 18 godina i ne prikupljamo svjesno osobne podatke od maloljetnika. Ako vjerujete da nam je maloljetnik pružio osobne podatke, obratite nam se kako bismo ih mogli ukloniti.",
    ],
    [
        "title" => "9. Promjene Ovih Pravila",
        "body" => "Ova Pravila Privatnosti možemo povremeno ažurirati. Sve promjene bit će objavljene na ovoj stranici s revidiranim datumom stupanja na snagu. Potičemo vas da redovito pregledavate ovu stranicu.",
    ],
    [
        "title" => "10. Obratite Nam Se",
        "body" => "Ako imate pitanja o ovim Pravilima Privatnosti ili o tome kako se postupa s vašim informacijama, obratite nam se putem naše <a class=\"link\" href=\"contacts.php\">kontakt stranice</a> ili nam pošaljite e-poštu na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Uvjeti Korištenja";
$conditions_meta_description = "Pregledajte Uvjete Korištenja koji reguliraju pristup i korištenje $site_name web stranice i trgovinske platforme.";
$conditions_sections = [
    [
        "title" => "1. Prihvaćanje Uvjeta",
        "body" => "Pristupanjem ili korištenjem $site_domain (\"Web Stranica\"), slažete se da ćete biti vezani ovim Uvjetima Korištenja. Ako se ne slažete s bilo kojim dijelom ovih uvjeta, nemojte koristiti Web Stranicu.",
    ],
    [
        "title" => "2. Prihvatljivost",
        "body" => "Morate imati najmanje 18 godina i imati pravnu sposobnost za korištenje usluga vezanih uz trgovanje u svojoj jurisdikciji kako biste koristili Web Stranicu. Korištenjem Web Stranice potvrđujete da ispunjavate ove zahtjeve.",
    ],
    [
        "title" => "3. Opis Usluge",
        "body" => "$site_name pruža online platformu s obrazovnim sadržajem, tržišnim informacijama i analitičkim alatima potpomognutim umjetnom inteligencijom. Ništa na Web Stranici ne predstavlja financijski, investicijski, porezni ili pravni savjet, a sve pružene informacije služe samo u opće informativne svrhe.",
    ],
    [
        "title" => "4. Odgovornosti Korisnika",
        "body" => "Odgovorni ste za pružanje točnih informacija prilikom registracije, za očuvanje povjerljivosti podataka vašeg računa i za sve aktivnosti koje se odvijaju na vašem računu.",
    ],
    [
        "title" => "5. Intelektualno Vlasništvo",
        "body" => "Sav sadržaj na Web Stranici, uključujući tekst, slike, logotipe i softver, u vlasništvu je $site_name ili njegovih davatelja licenci i zaštićen je primjenjivim zakonima o intelektualnom vlasništvu. Ne smijete reproducirati ili distribuirati ovaj sadržaj bez dopuštenja.",
    ],
    [
        "title" => "6. Nema Financijskog Savjeta",
        "body" => "Sadržaj na Web Stranici pruža se isključivo u informativne i obrazovne svrhe i ne bi ga trebalo tumačiti kao financijski savjet. Vi ste isključivo odgovorni za vlastite trgovinske odluke i trebali biste se posavjetovati s neovisnim financijskim savjetnikom gdje je potrebno. Pogledajte naše <a class=\"link\" href=\"risk-warning.php\">Upozorenje o Riziku</a> za više informacija.",
    ],
    [
        "title" => "7. Ograničenje Odgovornosti",
        "body" => "U najvećoj mjeri dopuštenoj zakonom, $site_name neće biti odgovoran za bilo kakvu izravnu, neizravnu, slučajnu ili posljedičnu štetu koja proizlazi iz vašeg korištenja, ili nemogućnosti korištenja, Web Stranice ili povezanih usluga trećih strana.",
    ],
    [
        "title" => "8. Prestanak",
        "body" => "Zadržavamo pravo suspendirati ili prekinuti vaš pristup Web Stranici prema vlastitom nahođenju, bez obavijesti, za ponašanje za koje smatramo da krši ove Uvjete Korištenja ili je na drugi način štetno za druge korisnike ili Web Stranicu.",
    ],
    [
        "title" => "9. Promjene Ovih Uvjeta",
        "body" => "Ove Uvjete Korištenja možemo revidirati u bilo kojem trenutku. Daljnje korištenje Web Stranice nakon objave promjena predstavlja prihvaćanje ažuriranih uvjeta.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Pitanja o ovim Uvjetima Korištenja mogu se uputiti našem timu putem <a class=\"link\" href=\"contacts.php\">kontakt stranice</a> ili e-poštom na info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Upozorenje o Riziku — Otkrivanje Trgovinskog Rizika";
$risk_meta_description = "Pročitajte $site_name upozorenje o riziku prije trgovanja: rizike kripto tržišta, financijsku polugu, likvidnost, kibernetičku sigurnost i regulatorna razmatranja.";
$risk_title = "Upozorenje o Riziku";
$risk_intro = "Razumijevanje rizika prvi je korak prema samouvjerenom trgovanju.";
$risk_ai_title = "Kako naš UI sustav pomaže u upravljanju rizikom:";
$risk_ai_1_title = "Algoritamska Učinkovitost i Trgovanje Bez Emocija:";
$risk_ai_1_text = "Napredni algoritmi analiziraju tržišne signale kako bi objektivno izvršavali transakcije u optimalnim trenucima.";
$risk_ai_2_title = "Strategije Vođene Podacima:";
$risk_ai_2_text = "Strategije se temelje na provjerenim tržišnim obrascima i analizi u stvarnom vremenu, a ne na nagađanju.";
$risk_ai_3_title = "Fleksibilne Postavke i Puna Kontrola:";
$risk_ai_3_text = "Prilagodite svoje parametre rizika u bilo kojem trenutku. Pratite sva stanja i transakcije transparentno na svojoj nadzornoj ploči, bez skrivenih naknada i bez ograničenja isplate.";
$risk_disclaimer = "<strong>Odricanje od odgovornosti:</strong> Trgovanje uvijek uključuje rizik. Automatizirani sustavi (uključujući UI) ne jamče profit, mogu zakazati zbog softverskih grešaka ili neočekivanih tržišnih događaja i zahtijevaju nadzor korisnika. Prošli rezultati ne jamče buduće rezultate. Ova platforma služi isključivo u informativne i marketinške svrhe i ne pruža financijski savjet.";
$risk_s1_title = "1. Opći Rizik Kripto Tržišta";
$risk_s1_text = "Kriptovalute su visoko volatilna, špekulativna imovina koja djeluje 24/7 uz minimalan regulatorni nadzor u većini jurisdikcija.";
$risk_s1_li1 = "Vrijednosti mogu dramatično oscilirati u kratkim razdobljima, potencijalno dovodeći do potpunog gubitka uloženog kapitala.";
$risk_s1_li2 = "Tržišne vrijednosti mogu biti snažno pogođene regulatornim promjenama, tehnološkim razvojem, sigurnosnim povredama ili širim makroekonomskim događajima.";
$risk_s1_li3 = "Neka imovina može potpuno izgubiti svoju vrijednost. Ulažite samo sredstva koja si možete priuštiti izgubiti.";
$risk_s2_title = "2. Rizik Izvršenja, Likvidnosti i Financijske Poluge";
$risk_s2_li1_title = "Tržišna Volatilnost i Likvidnost:";
$risk_s2_li1_text = "Ekstremni cjenovni pokreti (10-20%+ dnevno) ili niska likvidnost (posebno kod manjih coinova) mogu uzrokovati kašnjenja, kvarove platforme i ozbiljno odstupanje pri izvršenju. Stop-loss nalozi možda ne jamče granice gubitka u ekstremnim uvjetima.";
$risk_s2_li2_title = "Rizik Financijske Poluge i Marže:";
$risk_s2_li2_text = "Proizvodi s financijskom polugom pojačavaju i dobitke i gubitke, što znači da možete izgubiti više od svog izvornog depozita. Otprilike 70-80% računa malih investitora gubi novac trgujući proizvodima s financijskom polugom.";
$risk_s3_title = "3. Tehnički, Kibernetički i Rizik Trećih Strana";
$risk_s3_li1_title = "Tehnički Faktori:";
$risk_s3_li1_text = "Online trgovanje nosi inherentne rizike prekida internetske veze, kvarova hardvera/softvera i nedostupnosti usluge.";
$risk_s3_li2_title = "Kibernetička Sigurnost:";
$risk_s3_li2_text = "Kripto računi česta su meta phishinga, zlonamjernog softvera i hakiranja. Transakcije su nepovratne; kompromitiranje vaših podataka za prijavu može dovesti do trajnog gubitka.";
$risk_s3_li3_title = "Platforme Trećih Strana:";
$risk_s3_li3_text = "Ova web stranica može povezati korisnike s platformama trećih strana. Ne kontroliramo, ne odobravamo niti jamčimo njihovu sigurnost, poslovanje ili solventnost. Uvijek provedite vlastitu temeljitu dubinsku analizu prije polaganja sredstava na vanjske platforme.";
$risk_s4_title = "4. Regulatorne, Porezne i Završne Odredbe";
$risk_s4_li1_title = "Pravna Usklađenost i Porezi:";
$risk_s4_li1_text = "Regulatorni okviri uvelike variraju i brzo se mijenjaju. Korisnici su isključivo odgovorni za osiguravanje da njihove trgovinske aktivnosti budu u skladu s lokalnim zakonima i za ispunjavanje vlastitih poreznih obveza.";
$risk_s4_li2_title = "Nema Jamstava Profita:";
$risk_s4_li2_text = "Ne postoji \"siguran\" ili rizikom slobodan kripto trading. Bilo kakvi navedeni brojevi povrata ili primjeri učinkovitosti čisto su hipotetski.";
$risk_s4_li3_title = "Prikladnost:";
$risk_s4_li3_text = "Ako ne razumijete potpuno rizike, ovisite o osnovnim sredstvima ili trgujete posuđenim novcem, kripto trgovanje nije prikladno za vas. U slučaju sumnje posavjetujte se s neovisnim, licenciranim financijskim savjetnikom.";
$risk_contact = "<strong>Kontakt:</strong> Za pitanja o ovoj izjavi, ili za slanje upita, obratite se našem službenom timu za korisničku podršku putem kontakt obrasca na našoj web stranici.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registracija | $site_name — Otvorite Svoj Besplatni Račun";
$sign_meta_description = "Otvorite svoj besplatni $site_name račun za nekoliko minuta i počnite trgovati pametnije uz UI vođenu tržišnu analizu.";
$sign_h1 = "Otvorite Svoj Besplatni Račun";
$sign_lead = "Pridružite se $site_name za nekoliko minuta. Ispunite svoje podatke ispod za početak.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Hvala Vam | $site_name";
$thanks_h1 = "Hvala Vam!";
$thanks_text = "Vaši podaci su primljeni. Član $site_name tima uskoro će vas kontaktirati kako bi vam pomogao krenuti.";
$thanks_btn = "Natrag na Početnu";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Karta Stranice | $site_name";
$sitemap_meta_description = "Pogledajte svaku stranicu $site_name web stranice, uključujući trgovinsku platformu, ponudu, podršku i pravne stranice.";
$sitemap_h1 = "Karta Stranice";
$sitemap_lead = "Svaka stranica $site_name na jednom mjestu.";

