<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ro-RO';
$form_language = 'ro'; // matches this page's own language, not the offer's global default

// ============================================================
// RO TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Oficial | Platformă de Tranzacționare";
$home_meta_description = "$site_name oferă o platformă de tranzacționare ușor de utilizat, cu instrumente avansate de piață, informații în timp real și funcții practice care fac tranzacționarea online mai accesibilă și mai informată.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Despre noi";
$nav_contacts = "Contact";
$nav_login = "Autentificare";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Tocmai s-a alăturat";
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
$form_title = "Începeți Acum";
$form_fname_placeholder = "Nume complet";
$form_lname_placeholder = "Nume de familie";
$form_email_placeholder = "Adresă de e-mail";
$form_btn_submit = "Creați Cont";
$form_disclaimer_text = "* Făcând clic pe buton, sunteți de acord cu <a class=\"link\" href=\"privacy.php\">Politica de Confidențialitate</a> și <a class=\"link\" href=\"conditions.php\">Termenii de Utilizare</a> ale noastre.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SECURIZAT";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: IA concepută pentru a citi piața mai clar";
$s1_subtitle = "Strategie de investiții bazată pe tehnologie";
$s1_quote = "$site_name a fost construită pentru a face mai simplă munca cu piețele, indiferent dacă aveți experiență sau nu. Platforma aplică inteligența artificială pentru a transforma date complexe în decizii clare, aplicabile, permițându-vă să tranzacționați cu mai multă încredere în orice scenariu.";
$s1_p1 = "Sistemul examinează cantități uriașe de informații în timp real: detectează schimbările, recunoaște tiparele și reacționează rapid la semnalele pieței. Acest lucru vă oferă o imagine clară a contextului actual, astfel încât să puteți identifica oportunități fără a fi nevoie să căutați prin analize complicate.";
$s1_p2 = "Monitorizarea 24/7, o interfață ușor de utilizat și un nivel ridicat de protecție fac experiența confortabilă și fiabilă. Totul este conceput astfel încât să vă puteți concentra pe rezultate, nu pe partea tehnică.";
$s1_p3 = "Funcția de copy trading vă oferă și acces la strategiile traderilor mai experimentați. Puteți urmări mișcările lor și aplica abordări dovedite în propria tranzacționare, combinând judecata profesională cu automatizarea.";
$s1_cta = "Creați Cont";
$s1_img_alt = "finanțe digitale $site_name";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Analiză precisă a pieței, fără zgomot suplimentar";
$s2_intro = "$site_name folosește inteligența artificială pentru a monitoriza piața continuu și a detecta rapid schimbările. Sistemul procesează cantități uriașe de date și afișează doar semnalele relevante, fără a vă copleși cu informații inutile.";
$s2_item1_title = "Reacție la piață fără așteptare";
$s2_item1_text = "Platforma identifică mișcările în stadiile lor incipiente: impuls, inversări și schimbări de tendință. Vedeți instantaneu ce se întâmplă și puteți acționa la momentul potrivit.";
$s2_item2_title = "O citire clară în loc de presupuneri";
$s2_item2_text = "Fără grafice complicate sau presupuneri. $site_name subliniază esențialul, oferind o imagine clară a situației, astfel încât să puteți decide pe baza datelor, nu a intuiției.";
$s2_item3_title = "Control și protecție";
$s2_item3_text = "Datele dvs. sunt protejate, accesul este controlat, iar tranzacțiile circulă prin canale sigure. Acest lucru vă permite să vă concentrați pe piață, nu pe riscul tehnic.";
$s2_img_alt = "cripto $site_name";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Inteligență clară pentru traderi";
$s3_card1_title = "$site_name respectă confidențialitatea și controlul utilizatorului";
$s3_card1_text = "$site_name tratează informațiile cu transparență și integritate deplină. Nu abuzează de datele dvs. personale. Nicio tranzacție sau comandă nu este înregistrată pe această platformă.";
$s3_card2_title = "Un mediu de analiză clar pentru decizii mai bune";
$s3_card2_text = "$site_name funcționează ca un spațiu tehnologic în care IA întărește judecata umană în loc să o înlocuiască. Aceste instrumente facilitează înțelegerea schimbărilor de piață, compararea strategiilor și studierea comportamentului activelor.";
$s3_card3_title = "Instrumente IA care vă ascut privirea asupra pieței";
$s3_card3_text = "Analiza nu se oprește niciodată. $site_name urmărește mediul cripto și trimite notificări în timp real de îndată ce apare o mișcare relevantă.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Analiză ascuțită, fără emoție sau eroare";
$s4_quote = "$site_name transformă date complexe de piață în informații organizate, ușor de citit, eliminând zgomotul inutil și ajutându-vă să vă concentrați pe semnalele care contează cu adevărat. Acest lucru vă permite să înțelegeți o situație mai devreme și să decideți fără ca emoția să preia controlul.";
$s4_p1 = "Sistemul își actualizează continuu concluziile cu date noi. În loc de indicatori întârziați, folosește modele adaptive care reacționează la schimbările pieței în timp real. Aceasta înseamnă că lucrați întotdeauna cu o imagine actualizată și puteți acționa mai rapid atunci când chiar contează.";
$s4_img_alt = "inteligență artificială $site_name";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Folosiți IA $site_name pentru decizii precise și oportune";
$s5_quote = "$site_name analizează piața în timp real și vă arată imediat unde se află mișcarea și oportunitățile. Sistemul procesează datele pentru dvs., oferind semnale gata pregătite: când să intrați, când să ieșiți și la ce să fiți atenți.";
$s5_p1 = "Nu trebuie să priviți grafice toată ziua. Platforma detectează singură schimbările și reacționează rapid la piață, astfel încât să nu ratați momente importante.";
$s5_p2 = "Algoritmii lucrează 24/7, identificând noi oportunități imediat ce apar. Primiți informații actualizate fără întârzieri sau supraîncărcare informațională.";
$s5_p3 = "În același timp, securitatea rămâne la un nivel ridicat: protecția datelor, acces securizat și control al tranzacționării. $site_name este potrivit atât pentru începători, cât și pentru traderii activi — deciziile rămân ale dvs., dar susținute de o bază analitică solidă.";
$s5_img_alt = "automatizare financiară $site_name";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Tranzacționarea consecventă începe cu un sistem organizat";
$s6_p1 = "$site_name vă ajută să aduceți structură în munca dvs. cu piața. Platforma creează un cadru clar: dvs. definiți obiectivele și nivelul de risc, iar sistemul își adaptează analiza la stilul dvs. — fără haos și fără supraîncărcare.";
$s6_p2 = "Analiza 24/7 transformă fluxul de date în semnale simple, ușor de înțeles. Vedeți doar ceea ce contează: unde există mișcare, unde merită să intrați și când este mai bine să așteptați. De-a lungul timpului, algoritmii devin mai precisi și se adaptează la piață.";
$s6_item1_title = "Alegeți-vă ritmul: tranzacționare rapidă sau o abordare pe termen lung";
$s6_item1_text = "$site_name susține diferite strategii. Pentru tranzacționarea activă, sistemul marchează punctele de intrare și mișcările prețurilor. Pentru o abordare pe termen lung, vă ajută să mențineți pozițiile ținând cont de tendință și risc.";
$s6_item2_title = "Puncte de intrare fără presupuneri";
$s6_item2_text = "Platforma arată unde piața este cea mai activă. Acest lucru vă ajută să intrați cu mai multă încredere și să ieșiți la timp, fără improvizație.";
$s6_item3_title = "Managementul riscului de la bun început";
$s6_item3_text = "Puteți vedea din timp scenarii posibile: unde riscul este mai mic și potențialul mai mare. Acest lucru vă permite să planificați tranzacții chiar înainte ca mișcarea să înceapă.";
$s6_item4_title = "Analiză gata pregătită";
$s6_item4_text = "$site_name nu vă copleșește cu terminologie complicată. Primiți informații clare, direct aplicabile, concepute pentru a vă ajuta să decideți mai rapid și cu mai multă încredere.";
$s6_cta = "Începeți Acum";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Instrumente simple pentru decizii precise cu $site_name";
$s7_quote = "$site_name vă oferă tot ce aveți nevoie pentru a tranzacționa pe piață — fără jargon tehnic sau supraîncărcare informațională. Platforma analizează singură mișcările prețurilor, tendințele și posibilele puncte de intrare, arătând doar ceea ce contează cu adevărat.";
$s7_point1 = "Sistemul ajută la detectarea momentului în care piața se poate inversa, unde apar mișcări puternice și care momente sunt cele mai bune pentru a intra sau ieși. Fiecare semnal ajunge preprocesat — nu trebuie să stăpâniți indicatori complecși.";
$s7_point2 = "Include și copy trading: puteți urmări și reproduce deciziile traderilor experimentați fără a petrece timp cu propria analiză.";
$s7_point3 = "Interfața rămâne cât mai simplă posibil — fiecare instrument este înțeles dintr-o privire și este gata de utilizare din primul moment.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Găsiți ferestre temporale importante cu IA $site_name";
$s8_item1 = "Diversificarea automată distribuie fondurile pe diferite active, reducând riscul și protejând capitalul chiar și pe piețe instabile.";
$s8_item2 = "Un sistem complet autonom — nu trebuie să priviți graficele. Algoritmii analizează piața și iau decizii în mod independent.";
$s8_item3 = "Retragerile sunt disponibile în orice moment — pe carduri bancare, portofele cripto sau sisteme de plată electronică, fără întârzieri.";
$s8_item4 = "Rapoartele zilnice vă arată rezultatele și vă oferă control total asupra situației în timp real.";
$s8_item5 = "Setările flexibile ale nivelului de risc vă permit să alegeți o strategie potrivită obiectivelor dvs. — de la conservatoare la mai agresivă.";
$s8_item6 = "Un potențial de profit de până la 400% face din $site_name un instrument pentru cei care doresc nu doar să-și păstreze capitalul, ci să-l crească semnificativ.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Analiză expertă susținută de $site_name";
$s9_quote = "$site_name combină puterea algoritmilor cu experiența de piață, transformând date complexe în semnale clare, ușor de înțeles. Sistemul detectează rapid tipare și oportunități potențiale, permițându-vă să decideți fără supraîncărcare informațională.";
$s9_p1 = "Primiți analize preprocesate care iau în considerare atât indicatorii tehnici, cât și comportamentul pieței — astfel încât să puteți acționa mai rapid, cu mai multă încredere și precizie.";
$s9_img_alt = "strategie de investiții $site_name";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Ce spun utilizatorii noștri";
$review_1_text = "Platforma este foarte intuitivă, iar instrumentele m-au ajutat să îmi îmbunătățesc rezultatele de tranzacționare.";
$review_2_text = "Suport rapid și materiale de învățare cu adevărat utile — perfect pentru cei care tocmai încep.";
$review_3_text = "Grafice personalizabile și execuție rapidă — a fost prima mea alegere de luni de zile.";
$review_4_text = "Înregistrarea a durat mai puțin de cinci minute, iar tabloul de bord facilitează urmărirea exactă a locului în care se află banii mei.";
$review_5_text = "Îmi place că platforma explică raționamentul din spatele fiecărui semnal, în loc să-mi arunce doar cifre.";
$review_6_text = "Retragerile au fost întotdeauna rapide pentru mine, iar echipa de suport răspunde efectiv în câteva minute.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Întrebări Frecvente despre $site_name";
$faq_q1 = "Poate $site_name detecta schimbările de piață în timp real?";
$faq_a1 = "Da. Urmărește date live, identifică schimbările de impuls în stadiile lor incipiente și detectează tipare înainte ca acestea să se dezvolte complet, oferind utilizatorilor un avantaj oportun.";
$faq_q2 = "Poate fi personalizată experiența $site_name?";
$faq_a2 = "Da. Utilizatorii pot alege domenii de interes, ajusta nivelul de detaliu și urmări strategii publice care se potrivesc stilului lor de tranzacționare sau nevoilor educaționale.";
$faq_q3 = "Înlocuiește $site_name metodele tradiționale de cercetare?";
$faq_a3 = "Nu. Le îmbunătățește oferind rapid perspective filtrate de IA, în timp ce utilizatorul păstrează controlul deplin asupra propriei cercetări și deciziilor.";
$faq_cta = "Aflați Mai Multe Acum";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Repere $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Cost de Înregistrare";
$hl1_desc = "Niciun cost pentru înregistrare";
$hl2_emoji = "💰";
$hl2_title = "Comisioane de Tranzacționare";
$hl2_desc = "Absolut niciun cost";
$hl3_emoji = "📋";
$hl3_title = "Ușurința Înregistrării";
$hl3_desc = "Înregistrarea este rapidă și simplă";
$hl4_emoji = "📊";
$hl4_title = "Focalizare Educațională";
$hl4_desc = "Lecții despre cripto, tranzacționare Forex și investiții";
$hl5_emoji = "🌎";
$hl5_title = "Țări Disponibile";
$hl5_desc = "Nu este disponibil în SUA, disponibil în majoritatea celorlalte țări";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Tranzacționați inteligent, creșteți cu încredere";
$footnav_about = "Despre noi";
$footnav_product = "Produs";
$footnav_offer = "Ofertă";
$footnav_contacts = "Contact";
$footnav_faq = "Întrebări Frecvente";
$footnav_privacy = "Politica de Confidențialitate";
$footnav_conditions = "Termenii de Utilizare";
$footnav_risk = "Avertisment de Risc";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publică materiale educaționale generale despre tranzacționare, investiții, piețe financiare și active digitale. Articolele, datele de piață, graficele și alt conținut al site-ului sunt furnizate doar în scop informativ și nu ar trebui considerate consiliere financiară, de investiții sau juridică. Deși ne străduim să oferim informații fiabile și actualizate, nu putem garanta acuratețea sau exhaustivitatea acestora și nu suntem responsabili pentru pierderile rezultate din încrederea acordată conținutului.<br><br>Tranzacționarea implică risc, iar criptomonedele, Forex, CFD-urile, acțiunile și alte produse financiare pot fluctua semnificativ ca valoare. Luați în considerare propria situație financiară și toleranța la risc înainte de a tranzacționa și căutați consiliere profesională atunci când este necesar. Nu investiți niciodată bani pe care nu vă permiteți să îi pierdeți.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Consultant de Tranzacționare";
$quiz_text_welcome = "Bună! Sunt Sofia, consultanta dvs. personală de tranzacționare. Aveți câteva minute pentru a găsi cel mai bun plan pentru dvs.?";
$quiz_text_q1 = "Ați mai tranzacționat înainte?";
$quiz_text_a1_yes = "Da, am experiență";
$quiz_text_a1_no = "Nu, sunt începător";
$quiz_text_q2 = "Excelent! Care este prenumele dvs. pentru a vă putea personaliza planul?";
$quiz_text_q3 = "Care este obiectivul dvs. principal cu tranzacționarea?";
$quiz_text_a3_yes = "Construirea bunăstării pe termen lung";
$quiz_text_a3_no = "Generarea de venituri pe termen scurt";
$quiz_text_q4 = "Cu cât ați dori să începeți?";
$quiz_text_a4_1 = "Mai puțin de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Mai mult de $1000";
$quiz_text_q5 = "Perfect. Doriți să vă deschid acum un cont gratuit?";
$quiz_text_a5_yes = "Da, să o facem";
$quiz_text_a5_no = "Nu acum";
$quiz_text_loader = "Găsim cel mai bun plan pentru dvs...";
$quiz_text_final_ttl = "Totul este pregătit!";
$quiz_text_processing = "Detaliile dvs. sunt trimise...";
$quiz_text_typing = "scrie...";
$quiz_placeholder_fname = "Prenume";
$quiz_placeholder_lname = "Nume de familie";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Obțineți Contul Meu Gratuit";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Acasă";
$bc_about = "Despre noi";
$bc_product = "Produs";
$bc_offer = "Ofertă";
$bc_contacts = "Contact";
$bc_faq = "Întrebări Frecvente";
$bc_privacy = "Politica de Confidențialitate";
$bc_conditions = "Termenii de Utilizare";
$bc_risk = "Avertisment de Risc";
$bc_sign = "Înregistrare";
$bc_thanks = "Mulțumim";
$bc_sitemap = "Harta Site-ului";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Despre $site_name";
$about_meta_description = "Aflați despre misiunea $site_name: să facă analiza pieței mai clară și mai accesibilă cu instrumente bazate pe IA.";
$about_h1 = "Despre $site_name";
$about_lead = "$site_name a fost construită în jurul unei idei: deciziile de tranzacționare ar trebui să se bazeze pe informații clare, nu pe presupuneri.";
$about_p1 = "Combinăm inteligența artificială cu experiența reală de piață pentru a transforma date complexe, zgomotoase în semnale ușor de înțeles și de acționat. Platforma noastră monitorizează piețele zi și noapte, astfel încât dvs. nu trebuie să o faceți.";
$about_p2 = "Fie că faceți prima dvs. tranzacție sau ați fost activ pe piețe de ani de zile, $site_name este concepută pentru a vă întâmpina acolo unde sunteți — cu instrumente care variază de la îndrumare simplă la analiză avansată în timp real.";
$about_p3 = "Credem că tehnologia ar trebui să vă susțină judecata, nu să o înlocuiască. Fiecare semnal pe care $site_name îl generează este menit să informeze o decizie care rămâne în întregime a dvs.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Produs $site_name — Instrumente de Analiză a Pieței cu IA";
$product_meta_description = "Explorați produsul $site_name: analiză de piață IA în timp real, copy trading, controale de risc și diversificare automatizată.";
$product_h1 = "Produsul $site_name";
$product_lead = "O singură platformă care citește piața pentru dvs.: analiză în timp real, copy trading și instrumente de risc flexibile, concepute pentru a face deciziile de tranzacționare mai clare.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Ofertă $site_name — Începeți Gratuit";
$offer_meta_description = "Vedeți ce este inclus în oferta actuală $site_name: înregistrare gratuită, fără comisioane de tranzacționare și acces complet la platformă.";
$offer_h1 = "Oferta noastră actuală";
$offer_lead = "Creați-vă contul gratuit și deblocați platforma completă $site_name &mdash; fără taxe de înregistrare, fără comisioane de tranzacționare.";
$offer_li1 = "Niciun cost pentru înregistrarea contului dvs.";
$offer_li2 = "Niciun comision la tranzacții";
$offer_li3 = "Acces complet la analiza de piață IA în timp real și copy trading";
$offer_li4 = "Retrageri disponibile în orice moment, fără taxe ascunse";
$offer_li5 = "Resurse educaționale despre cripto, Forex și investiții incluse";
$offer_note = "Disponibilitatea poate varia în funcție de regiune. Consultați <a class=\"link\" href=\"risk-warning.php\">Avertismentul nostru de Risc</a> înainte de a alimenta un cont.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contactați $site_name — Luați legătura cu echipa noastră";
$contacts_meta_description = "Aveți o întrebare despre contul dvs. $site_name sau despre platformă? Contactați echipa noastră de suport prin e-mail sau trimiteți-ne un mesaj.";
$contacts_h1 = "Contact";
$contacts_lead = "Întrebări despre contul dvs., un depozit sau despre cum funcționează platforma? Echipa noastră este gata să ajute.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Ore de Suport";
$contacts_hours_value = "24/7";
$contacts_response_label = "Timp de Răspuns Tipic";
$contacts_response_value = "În 24 de ore";
$contacts_form_title = "Trimiteți-ne un Mesaj";
$contacts_form_desc = "Lăsați detaliile dvs. mai jos și un membru al echipei noastre vă va contacta direct.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Politica de Confidențialitate $site_name";
$privacy_meta_description = "Aflați cum $site_name colectează, utilizează și protejează datele dvs. personale pe întregul site și platformă.";
$privacy_sections = [
    [
        "title" => "1. Introducere",
        "body" => "Această Politică de Confidențialitate explică modul în care $site_name (\"noi\") colectează, utilizează și protejează datele personale ale vizitatorilor și utilizatorilor $site_domain (\"Site-ul\"). Prin utilizarea Site-ului, sunteți de acord cu practicile descrise mai jos.",
    ],
    [
        "title" => "2. Informații pe Care le Colectăm",
        "body" => "Putem colecta informații pe care le furnizați direct, cum ar fi numele, adresa de e-mail și numărul de telefon la înregistrare sau la trimiterea unui formular, precum și informații colectate automat, inclusiv adresa dvs. IP, tipul dispozitivului și browserului, și paginile vizualizate pe Site.",
    ],
    [
        "title" => "3. Cum Vă Utilizăm Informațiile",
        "body" => "Utilizăm informațiile colectate pentru a crea și gestiona contul dvs., a răspunde la întrebări, a oferi asistență pentru clienți, a îmbunătăți Site-ul și serviciile noastre și, acolo unde este permis, pentru a trimite actualizări despre produse și oferte. Vă puteți dezabona de la comunicările de marketing în orice moment.",
    ],
    [
        "title" => "4. Cookie-uri și Tehnologii de Urmărire",
        "body" => "Site-ul utilizează cookie-uri și tehnologii similare pentru a vă reține preferințele, a vă menține conectat și a înțelege modul în care vizitatorii utilizează paginile noastre. Puteți dezactiva cookie-urile prin setările browserului dvs., deși unele funcții ar putea să nu funcționeze corect.",
    ],
    [
        "title" => "5. Partajarea Informațiilor",
        "body" => "Nu vă vindem datele personale. Putem partaja informații cu furnizori de servicii de încredere care ne ajută să operăm Site-ul (cum ar fi furnizorii de hosting sau analitică), sau atunci când este cerut de lege, sau pentru a ne proteja drepturile legale.",
    ],
    [
        "title" => "6. Securitatea Datelor",
        "body" => "Aplicăm măsuri tehnice și organizaționale rezonabile pentru a proteja informațiile dvs. de accesul, modificarea sau pierderea neautorizată. Nicio metodă de transmitere sau stocare nu este complet sigură și nu putem garanta securitatea absolută.",
    ],
    [
        "title" => "7. Drepturile și Alegerile Dvs.",
        "body" => "În funcție de locația dvs., puteți avea dreptul de a accesa, corecta sau solicita ștergerea datelor dvs. personale și de a vă opune anumitor utilizări ale acestora. Pentru a exercita aceste drepturi, contactați-ne prin <a class=\"link\" href=\"contacts.php\">pagina noastră de contact</a>.",
    ],
    [
        "title" => "8. Confidențialitatea Copiilor",
        "body" => "Site-ul nu este destinat persoanelor sub 18 ani și nu colectăm cu bună știință date personale de la minori. Dacă credeți că un minor ne-a furnizat date personale, vă rugăm să ne contactați pentru a le putea elimina.",
    ],
    [
        "title" => "9. Modificări ale Acestei Politici",
        "body" => "Putem actualiza această Politică de Confidențialitate din când în când. Orice modificări vor fi publicate pe această pagină cu o dată de intrare în vigoare revizuită. Vă încurajăm să verificați această pagină în mod regulat.",
    ],
    [
        "title" => "10. Contactați-ne",
        "body" => "Dacă aveți întrebări despre această Politică de Confidențialitate sau despre modul în care sunt gestionate informațiile dvs., contactați-ne prin <a class=\"link\" href=\"contacts.php\">pagina noastră de contact</a> sau trimiteți-ne un e-mail la info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Termenii de Utilizare $site_name";
$conditions_meta_description = "Consultați Termenii de Utilizare care guvernează accesul și utilizarea site-ului web și a platformei de tranzacționare $site_name.";
$conditions_sections = [
    [
        "title" => "1. Acceptarea Termenilor",
        "body" => "Prin accesarea sau utilizarea $site_domain (\"Site-ul\"), sunteți de acord să fiți obligat de acești Termeni de Utilizare. Dacă nu sunteți de acord cu vreo parte a acestor termeni, nu utilizați Site-ul.",
    ],
    [
        "title" => "2. Eligibilitate",
        "body" => "Trebuie să aveți cel puțin 18 ani și să aveți capacitatea legală de a utiliza serviciile legate de tranzacționare în jurisdicția dvs. pentru a utiliza Site-ul. Prin utilizarea Site-ului, confirmați că îndepliniți aceste cerințe.",
    ],
    [
        "title" => "3. Descrierea Serviciului",
        "body" => "$site_name oferă o platformă online cu conținut educațional, informații de piață și instrumente de analiză asistate de IA. Nimic de pe Site nu constituie consiliere financiară, de investiții, fiscală sau juridică, iar toate informațiile furnizate sunt doar în scopuri informative generale.",
    ],
    [
        "title" => "4. Responsabilitățile Utilizatorului",
        "body" => "Sunteți responsabil pentru furnizarea de informații exacte la înregistrare, pentru menținerea confidențialității acreditărilor contului dvs. și pentru toate activitățile care au loc sub contul dvs.",
    ],
    [
        "title" => "5. Proprietate Intelectuală",
        "body" => "Tot conținutul de pe Site, inclusiv text, imagini, logo-uri și software, este deținut de $site_name sau de licențiatorii săi și este protejat de legile aplicabile privind proprietatea intelectuală. Nu puteți reproduce sau distribui acest conținut fără permisiune.",
    ],
    [
        "title" => "6. Fără Consiliere Financiară",
        "body" => "Conținutul de pe Site este furnizat doar în scopuri informative și educaționale și nu ar trebui interpretat ca fiind consiliere financiară. Sunteți singurul responsabil pentru propriile decizii de tranzacționare și ar trebui să consultați un consilier financiar independent atunci când este necesar. Consultați <a class=\"link\" href=\"risk-warning.php\">Avertismentul nostru de Risc</a> pentru a afla mai multe.",
    ],
    [
        "title" => "7. Limitarea Răspunderii",
        "body" => "În măsura maximă permisă de lege, $site_name nu va fi responsabilă pentru niciun fel de daune directe, indirecte, incidentale sau pe cale de consecință care rezultă din utilizarea dvs. sau din incapacitatea de a utiliza Site-ul sau serviciile terților asociate.",
    ],
    [
        "title" => "8. Reziliere",
        "body" => "Ne rezervăm dreptul de a suspenda sau înceta accesul dvs. la Site la discreția noastră exclusivă, fără notificare, pentru comportament pe care îl considerăm că încalcă acești Termeni de Utilizare sau este dăunător în alt mod pentru alți utilizatori sau pentru Site.",
    ],
    [
        "title" => "9. Modificări ale Acestor Termeni",
        "body" => "Putem revizui acești Termeni de Utilizare în orice moment. Utilizarea continuă a Site-ului după publicarea modificărilor constituie acceptarea termenilor actualizați.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Întrebările despre acești Termeni de Utilizare pot fi adresate echipei noastre prin <a class=\"link\" href=\"contacts.php\">pagina de contact</a> sau prin e-mail la info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Avertisment de Risc $site_name — Dezvăluirea Riscului de Tranzacționare";
$risk_meta_description = "Citiți avertismentul de risc $site_name înainte de a tranzacționa: riscurile pieței cripto, efectul de levier, lichiditatea, securitatea cibernetică și considerații de reglementare.";
$risk_title = "Avertisment de Risc";
$risk_intro = "Înțelegerea riscurilor este primul pas către tranzacționarea cu încredere.";
$risk_ai_title = "Cum vă ajută sistemul nostru IA în managementul riscului:";
$risk_ai_1_title = "Eficiență Algoritmică și Tranzacționare Fără Emoții:";
$risk_ai_1_text = "Algoritmii avansați analizează semnalele de piață pentru a executa tranzacții obiectiv în momentele optime.";
$risk_ai_2_title = "Strategii Bazate pe Date:";
$risk_ai_2_text = "Strategiile se bazează pe tipare de piață verificate și analiză în timp real, nu pe presupuneri.";
$risk_ai_3_title = "Setări Flexibile și Control Deplin:";
$risk_ai_3_text = "Ajustați parametrii de risc în orice moment. Urmăriți toate soldurile și tranzacțiile transparent pe tabloul dvs. de bord, fără taxe ascunse și fără restricții de retragere.";
$risk_disclaimer = "<strong>Declinarea Responsabilității:</strong> Tranzacționarea implică întotdeauna risc. Sistemele automatizate (inclusiv IA) nu garantează profit, pot eșua din cauza erorilor de software sau evenimentelor neprevăzute de piață și necesită supraveghere din partea utilizatorului. Performanța trecută nu garantează rezultate viitoare. Această platformă servește exclusiv scopurilor informative și de marketing și nu oferă consiliere financiară.";
$risk_s1_title = "1. Riscul General al Pieței Cripto";
$risk_s1_text = "Criptomonedele sunt active extrem de volatile, speculative, care operează 24/7 cu supraveghere reglementară minimă în majoritatea jurisdicțiilor.";
$risk_s1_li1 = "Valorile pot fluctua dramatic în perioade scurte de timp, ducând potențial la pierderea totală a capitalului investit.";
$risk_s1_li2 = "Valorile de piață pot fi puternic afectate de schimbări de reglementare, dezvoltări tehnologice, breșe de securitate sau evenimente macroeconomice mai ample.";
$risk_s1_li3 = "Unele active își pot pierde complet valoarea. Investiți doar fonduri pe care vă permiteți să le pierdeți.";
$risk_s2_title = "2. Riscul de Execuție, Lichiditate și Levier";
$risk_s2_li1_title = "Volatilitatea Pieței și Lichiditate:";
$risk_s2_li1_text = "Mișcările extreme de preț (10-20%+ zilnic) sau lichiditatea scăzută (în special la monedele mai mici) pot cauza întârzieri, defecțiuni ale platformei și alunecări severe de execuție. Ordinele stop-loss ar putea să nu garanteze limitele de pierdere în condiții extreme.";
$risk_s2_li2_title = "Riscul de Levier și Marjă:";
$risk_s2_li2_text = "Produsele cu levier amplifică atât câștigurile, cât și pierderile, ceea ce înseamnă că puteți pierde mai mult decât depozitul dvs. inițial. Aproximativ 70-80% dintre conturile investitorilor de retail pierd bani atunci când tranzacționează produse cu levier.";
$risk_s3_title = "3. Riscul Tehnic, de Securitate Cibernetică și al Terților";
$risk_s3_li1_title = "Factori Tehnici:";
$risk_s3_li1_text = "Tranzacționarea online implică riscuri inerente de defecțiuni ale conexiunii la internet, erori hardware/software și indisponibilitatea serviciului.";
$risk_s3_li2_title = "Securitate Cibernetică:";
$risk_s3_li2_text = "Conturile cripto sunt ținte frecvente ale phishing-ului, malware-ului și hacking-ului. Tranzacțiile sunt ireversibile; compromiterea acreditărilor dvs. de autentificare poate duce la pierdere permanentă.";
$risk_s3_li3_title = "Platforme ale Terților:";
$risk_s3_li3_text = "Acest site poate conecta utilizatorii cu platforme ale terților. Nu controlăm, aprobăm sau garantăm securitatea, operațiunile sau solvabilitatea acestora. Efectuați întotdeauna propria diligență minuțioasă înainte de a depune fonduri pe platforme externe.";
$risk_s4_title = "4. Prevederi de Reglementare, Fiscale și Finale";
$risk_s4_li1_title = "Conformitate Juridică și Taxe:";
$risk_s4_li1_text = "Cadrele de reglementare variază foarte mult și se schimbă rapid. Utilizatorii sunt singurii responsabili pentru a se asigura că activitățile lor de tranzacționare respectă legile locale și pentru îndeplinirea propriilor obligații fiscale.";
$risk_s4_li2_title = "Fără Garanții de Profit:";
$risk_s4_li2_text = "Nu există tranzacționare cripto \"sigură\" sau fără risc. Orice cifre de rentabilitate sau exemple de performanță furnizate sunt pur ipotetice.";
$risk_s4_li3_title = "Adecvare:";
$risk_s4_li3_text = "Dacă nu înțelegeți pe deplin riscurile, depindeți de fonduri esențiale sau tranzacționați cu bani împrumutați, tranzacționarea cripto nu este potrivită pentru dvs. Consultați un consilier financiar independent, licențiat, în caz de dubiu.";
$risk_contact = "<strong>Contact:</strong> Pentru întrebări despre această declarație, sau pentru a trimite o întrebare, vă rugăm să contactați echipa noastră oficială de servicii pentru clienți prin formularul de contact de pe site-ul nostru.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Înregistrare | $site_name — Creați-vă Contul Gratuit";
$sign_meta_description = "Creați-vă contul gratuit $site_name în câteva minute și începeți să tranzacționați mai inteligent cu analiza de piață bazată pe IA.";
$sign_h1 = "Creați-vă Contul Gratuit";
$sign_lead = "Alăturați-vă $site_name în câteva minute. Completați detaliile dvs. mai jos pentru a începe.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Mulțumim | $site_name";
$thanks_h1 = "Mulțumim!";
$thanks_text = "Detaliile dvs. au fost primite. Un membru al echipei $site_name vă va contacta în curând pentru a vă ajuta să începeți.";
$thanks_btn = "Înapoi Acasă";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Harta Site-ului | $site_name";
$sitemap_meta_description = "Vedeți fiecare pagină a site-ului $site_name, inclusiv platforma de tranzacționare, oferta, suportul și paginile juridice.";
$sitemap_h1 = "Harta Site-ului";
$sitemap_lead = "Fiecare pagină $site_name într-un singur loc.";

