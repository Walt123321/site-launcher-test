<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ro-RO';
$form_language = 'ro'; // matches this page's own language, not the offer's global default

// ============================================================
// RO TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Oficial | Platformă de Tranzacționare";
$home_meta_description = "$site_name oferă o platformă de tranzacționare ușor de utilizat, cu instrumente avansate de piață, informații în timp real și funcții practice concepute pentru a face tranzacționarea online mai accesibilă și mai informată.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Platforma $site_name";
$hero_subtitle = "Susținem milioane de oameni din întreaga lume în călătoria lor cu activele digitale";
$hero_badge_title = "Membri Mulțumiți";
$hero_badge_subtitle = "Iubit de milioane";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Începeți să Tranzacționați Astăzi";
$form_desc = "Sunteți gata să faceți mișcarea? Înregistrați-vă acum și faceți primul pas către libertatea financiară. Începeți cu doar $app_price $app_currency — accesați fiecare instrument de tranzacționare, date de piață în timp real și acces complet la platformă din prima zi.";
$form_fname_placeholder = "Prenume";
$form_lname_placeholder = "Nume";
$form_email_placeholder = "Email";
$form_btn_submit = "Înregistrare";
$form_disclaimer_text = "Prin introducerea datelor dvs. personale și apăsarea butonului, sunteți de acord cu <a class=\"link\" href=\"privacy.php\">Politica de Confidențialitate</a> și <a class=\"link\" href=\"conditions.php\">Termenii &amp; Condițiile</a> site-ului.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SIGUR";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Cunoașteți Platforma";
$stats_title = "O introducere rapidă în tranzacționarea mai inteligentă";
$stat_1_value = "154+";
$stat_1_label = "Țări Acoperite";
$stat_2_value = "29 Milioane";
$stat_2_label = "Investitori Globali";
$stat_3_value = "635+";
$stat_3_label = "Monede";
$stat_4_value = "3,26 Miliarde $";
$stat_4_label = "Volum de Tranzacționare în 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "De ce $site_name?";
$why_title = "Motive pentru a Ne Alege";
$why_1_title = "Rapid &amp; Ușor";
$why_1_text = "Cumpărați și vindeți criptomonedele preferate în câteva secunde.";
$why_2_title = "Sigur &amp; Protejat";
$why_2_text = "Folosim cea mai recentă tehnologie pentru a vă păstra fondurile și datele în siguranță.";
$why_3_title = "Deschis Tuturor";
$why_3_text = "Tranzacționați pe platforma noastră 24/7, oriunde și oricând doriți.";
$why_4_title = "Instrumente Profesionale";
$why_4_text = "De la funcții simple la funcții profesionale de tranzacționare, avem totul.";
$why_5_title = "Tendințe &amp; Perspective";
$why_5_text = "Obțineți cele mai recente știri, perspective și tendințe cripto de la experți.";
$why_6_title = "Suport 24/7";
$why_6_text = "Echipa noastră prietenoasă de suport este aici pentru a ajuta oricând.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Cum Funcționează";
$how_title = "Pași Ușori pentru a Începe Tranzacționarea";
$how_1_title = "Înregistrare";
$how_1_text = "Creați un cont și începeți să tranzacționați în câteva minute.";
$how_1_btn = "Începeți Tranzacționarea";
$how_2_title = "Depuneți Fonduri";
$how_2_text = "Finanțați-vă contul cu un depozit minim de $app_price $app_currency pentru a debloca accesul complet la tranzacționare. Alegeți dintre mai multe metode de plată și începeți să vă creșteți portofoliul astăzi.";
$how_2_note = "Adăugați fonduri....";
$how_3_title = "Începeți Tranzacționarea";
$how_3_text = "Explorați piața și tranzacționați în felul dvs.";
$how_3_note = "Cumpărați și Păstrați";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calculator";
$calc_title = "Vedeți cât timp și potențial lăsați neexploatat";
$calc_volume_label = "Volum Lunar de Tranzacționare";
$calc_trades_label = "Tranzacții pe Săptămână";
$calc_time_label = "Timp pe Care l-ați Putea Economisi";
$calc_boost_label = "Creștere Potențială a Volumului";
$calc_btn = "Începeți Tranzacționarea";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funcții";
$features_title = "Puterea $site_name";
$feature_1_title = "Tranzacționare Spot";
$feature_1_text = "Maximizați-vă potențialul de tranzacționare cu instrumente profesionale.";
$feature_2_title = "Cumpărați Cripto";
$feature_2_text = "Cumpărați cripto folosind carduri sau bănci.";
$feature_3_title = "Derivate Cripto";
$feature_3_text = "Tranzacționare futures avansată și ușoară.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Creșteți-vă averea cu ușurință.";
$feature_5_title = "Bot de Tranzacționare";
$feature_5_text = "Profituri mai mari, chiar și în timp ce dormiți.";
$feature_6_title = "Tranzacționare cu Marjă";
$feature_6_text = "Împrumutați, tranzacționați și rambursați cu ușurință.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Ce Spun Utilizatorii Noștri";
$review_1_text = "Platforma este foarte ușor de utilizat și am văzut progres constant de când am devenit deținător. Angajamentul echipei și ideile proaspete mă fac să aștept cu nerăbdare ce urmează!";
$review_1_role = "Trader";
$review_2_text = "$site_name oferă o experiență de tranzacționare fluidă și intuitivă. Am putut începe să cumpăr și să tranzacționez cripto imediat. Interfața este ușor de utilizat, iar vitezele tranzacțiilor sunt excelente!";
$review_2_role = "Trader Nou";
$review_3_text = "Am încredere în această platformă pentru gestionarea investițiilor mele cripto. Funcțiile sale de securitate îmi oferă încredere și nu am întâmpinat niciodată probleme cu retragerile sau depunerile. Este una dintre cele mai fiabile burse pe care le-am folosit.";
$review_3_role = "Trader Profesionist";
$review_4_text = "Ori de câte ori am avut întrebări, echipa de asistență pentru clienți a fost promptă și utilă. Le pasă cu adevărat de utilizatorii lor și fac fiecare experiență de tranzacționare fluidă și simplă.";
$review_4_role = "Trader Experimentat";
$review_5_text = "Ca începător, am găsit $site_name foarte ușor de utilizat. Ceea ce iese cu adevărat în evidență este gama de instrumente avansate pentru traderii mai experimentați. Este o opțiune solidă pentru oricine dorește să-și construiască portofoliul!";
$review_5_role = "Trader al Comunității";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Întrebări Frecvente";
$faq_title = "Întrebări Frecvente";
$faq_q1 = "Ce este $site_name?";
$faq_a1 = "$site_name este o bursă cripto în care utilizatorii pot tranzacționa cu ușurință o gamă largă de monede, inclusiv Bitcoin, Ethereum și alte criptomonede populare.";
$faq_q2 = "Cât de Sigur este $site_name pentru Tranzacționarea Cripto?";
$faq_a2 = "Platforma oferă securitate prin tehnologie avansată și acoperire de active 1:1 prin Proof of Reserves.";
$faq_q3 = "Cum Fac o Depunere?";
$faq_a3 = "$site_name oferă mai multe opțiuni de depunere, inclusiv depunere cripto, depunere fiat, tranzacționare P2P și cumpărare cu un clic.";
$faq_q4 = "Am Nevoie de Experiență pentru a Folosi $site_name?";
$faq_a4 = "Nu, nu aveți nevoie de nicio experiență. Interfața ușor de utilizat a platformei o face accesibilă tuturor, de la începători la traderi avansați.";
$faq_q5 = "Există taxe sau costuri ascunse?";
$faq_a5 = "Deloc. Nu există taxe de înregistrare, costuri de abonament sau taxe ascunse de niciun fel. Vedeți întotdeauna suma exactă a tranzacției înainte de a confirma. Veniturile provin din funcții premium și parteneriate de schimb, nu din luarea de bani de la utilizatori.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Începeți să Tranzacționați Astăzi";
$cta_desc = "Sunteți gata să faceți mișcarea? Înregistrați-vă acum și faceți primul pas către independența financiară.";
$cta_btn = "Înregistrare";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Caracteristici Cheie ale Platformei de Tranzacționare $site_name";
$table_1_label = "🤖 Tehnologia Platformei";
$table_1_val = "Motor Avansat de Tranzacționare AI";
$table_2_label = "💳 Metode de Finanțare";
$table_2_val = "Carduri de Credit Majore, Transfer Bancar, PayPal";
$table_3_label = "📱 Acces la Platformă";
$table_3_val = "Compatibilitate Multi-Dispozitiv";
$table_4_label = "🚀 Rata de Performanță";
$table_4_val = "Precizie de 85%";
$table_5_label = "📊 Instrumente de Tranzacționare";
$table_5_val = "Acțiuni, Forex, Mărfuri, Metale Prețioase, CFD-uri, Criptomonede și mai multe…";
$table_6_label = "✍️ Configurarea Contului";
$table_6_val = "Rapid și Eficient";
$table_7_label = "📞 Asistență Clienți";
$table_7_val = "Asistență Profesională 24/7";

// Reviews summary card
$summary_title = "Recenzii $site_name";
$summary_badge = "De Încredere";
$summary_desc = "O platformă de tranzacționare puternică și ușor de utilizat, cu automatizare solidă și resurse educaționale.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Tranzacționați inteligent, creșteți rapid";
$footer_community_label = "Comunitate";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produs";
$footnav_offer = "Ofertă";
$footnav_contacts = "Contact";
$footnav_faq = "Întrebări Frecvente";
$footnav_privacy = "Politica de Confidențialitate";
$footnav_conditions = "Termeni &amp; Condiții";
$footnav_risk = "Avertisment de Risc";
$footer_disclaimer = "$site_name distribuie resurse educaționale și materiale legate de piață pentru a ajuta vizitatorii să înțeleagă mai bine tranzacționarea, investițiile și produsele financiare digitale. Informațiile prezentate pe site, cum ar fi comentariile de piață, prețurile activelor, graficele, ghidurile și conținutul analitic, sunt furnizate în scopuri generale de informare și nu constituie consiliere financiară, de investiții, fiscală sau juridică. Deși se fac eforturi rezonabile pentru a menține informații exacte și relevante, $site_name nu oferă garanții cu privire la caracterul complet, exactitatea sau actualitatea conținutului și nu poate fi ținut responsabil pentru deciziile sau pierderile rezultate din utilizarea acestuia.<br><br>Participarea pe piețele financiare implică riscuri inerente. Criptomoneda, Forex, CFD-urile, acțiunile și alte instrumente de tranzacționare pot experimenta fluctuații substanțiale de preț, iar pierderile pot apărea. Circumstanțele individuale și toleranța la risc variază, așa că utilizatorii ar trebui să efectueze propria cercetare și să ia în considerare obținerea de sfaturi de la un profesionist financiar calificat înainte de a angaja fonduri. Nu tranzacționați niciodată cu bani pe care nu vă permiteți să-i pierdeți.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Consultant de Tranzacționare";
$quiz_text_welcome = "Bună! Sunt Maya, consultantul dvs. personal de tranzacționare. Aveți câteva minute pentru a găsi cel mai bun plan pentru dvs.?";
$quiz_text_q1 = "Ați tranzacționat criptomonedă înainte?";
$quiz_text_a1_yes = "Da, am experiență";
$quiz_text_a1_no = "Nu, sunt începător";
$quiz_text_q2 = "Excelent! Care este prenumele dvs. pentru a vă putea personaliza planul?";
$quiz_text_q3 = "Care este obiectivul dvs. principal cu tranzacționarea?";
$quiz_text_a3_yes = "Construiți avere pe termen lung";
$quiz_text_a3_no = "Generați venituri pe termen scurt";
$quiz_text_q4 = "Cu cât doriți să începeți?";
$quiz_text_a4_1 = "Sub $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Peste $1000";
$quiz_text_q5 = "Perfect. Doriți să vă deschid un cont gratuit acum?";
$quiz_text_a5_yes = "Da, să o facem";
$quiz_text_a5_no = "Nu chiar acum";
$quiz_text_loader = "Se caută cel mai bun plan pentru dvs...";
$quiz_text_final_ttl = "Totul este pregătit!";
$quiz_text_processing = "Se trimit detaliile dvs...";
$quiz_text_typing = "scrie...";
$quiz_placeholder_fname = "Prenume";
$quiz_placeholder_lname = "Nume";
$quiz_placeholder_email = "Email";
$quiz_btn_submit = "Obțineți Contul Meu Gratuit";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Avertisment de Risc — Dezvăluirea Riscului de Tranzacționare";
$risk_meta_description = "Citiți avertismentul de risc $site_name înainte de a tranzacționa: riscuri ale pieței criptomonedelor, efect de levier, lichiditate, securitate cibernetică și considerente de reglementare.";
$risk_title = "Avertisment de Risc";
$risk_intro = "Înțelegerea riscurilor este primul pas către o tranzacționare încrezătoare.";
$risk_ai_title = "Cum Ajută Sistemul Nostru AI la Gestionarea Riscului:";
$risk_ai_1_title = "Eficiență Algoritmică &amp; Tranzacționare Fără Emoții:";
$risk_ai_1_text = "Algoritmi avansați analizează semnalele de piață pentru a executa tranzacții în mod obiectiv la momentele optime.";
$risk_ai_2_title = "Strategii Bazate pe Date:";
$risk_ai_2_text = "Strategiile se bazează pe modele de piață verificate și analize în timp real, nu pe presupuneri.";
$risk_ai_3_title = "Setări Flexibile &amp; Control Total:";
$risk_ai_3_text = "Ajustați-vă parametrii de risc oricând. Urmăriți toate soldurile și tranzacțiile în mod transparent pe tabloul de bord, fără taxe ascunse și fără restricții de retragere.";
$risk_disclaimer = "<strong>Declinarea Responsabilității:</strong> Tranzacționarea implică întotdeauna riscuri. Sistemele automatizate (inclusiv AI) nu garantează profit, pot eșua din cauza erorilor software sau a evenimentelor neașteptate de piață și necesită monitorizarea utilizatorului. Performanța trecută nu este un indicator al rezultatelor viitoare. Această platformă servește exclusiv scopuri informative și de marketing și nu oferă consiliere financiară.";
$risk_s1_title = "1. Riscuri Generale &amp; ale Pieței de Criptomonede";
$risk_s1_text = "Criptomonedele sunt active foarte volatile, speculative, care operează 24/7 cu supraveghere de reglementare minimă în majoritatea jurisdicțiilor.";
$risk_s1_li1 = "Valorile pot fluctua dramatic în perioade scurte, ducând potențial la pierderea totală a capitalului investit.";
$risk_s1_li2 = "Valorile de piață pot fi puternic afectate de actualizări de reglementare, dezvoltări tehnice, breșe de securitate sau evenimente macroeconomice mai ample.";
$risk_s1_li3 = "Unele active își pot pierde complet toată valoarea. Investiți doar fonduri pe care vă permiteți să le pierdeți.";
$risk_s2_title = "2. Riscuri de Execuție, Lichiditate &amp; Efect de Levier";
$risk_s2_li1_title = "Volatilitatea Pieței &amp; Lichiditate:";
$risk_s2_li1_text = "Mișcările extreme de preț (10-20%+ zilnic) sau lichiditatea scăzută (în special la monede mai mici) pot duce la întârzieri, întreruperi ale platformei și alunecări severe de execuție. Ordinele stop-loss nu pot garanta limite de pierdere în condiții extreme.";
$risk_s2_li2_title = "Riscuri de Efect de Levier &amp; Marjă:";
$risk_s2_li2_text = "Produsele cu efect de levier amplifică atât câștigurile, cât și pierderile, ceea ce înseamnă că puteți pierde mai mult decât depozitul inițial. <em>Aproximativ 70-80% dintre conturile investitorilor de retail pierd bani atunci când tranzacționează produse cu efect de levier.</em>";
$risk_s3_title = "3. Riscuri Tehnice, de Securitate Cibernetică &amp; ale Terților";
$risk_s3_li1_title = "Factori Tehnici:";
$risk_s3_li1_text = "Tranzacționarea online implică inerent riscuri de deconectare de la internet, erori de hardware/software și indisponibilitatea serviciului.";
$risk_s3_li2_title = "Securitate Cibernetică:";
$risk_s3_li2_text = "Conturile de criptomonedă sunt ținte frecvente pentru phishing, malware și hacking. Tranzacțiile sunt ireversibile; compromiterea acreditărilor dvs. poate duce la pierderi permanente.";
$risk_s3_li3_title = "Platforme Terțe:";
$risk_s3_li3_text = "Acest site poate conecta utilizatorii la platforme terțe. Nu controlăm, nu aprobăm și nu garantăm securitatea, operațiunile sau solvabilitatea acestora. Efectuați întotdeauna propria diligență amănunțită înainte de a depune fonduri pe platforme externe.";
$risk_s4_title = "4. Prevederi de Reglementare, Fiscale &amp; Finale";
$risk_s4_li1_title = "Conformitate Legală &amp; Taxe:";
$risk_s4_li1_text = "Cadrele de reglementare variază foarte mult și se schimbă rapid. Utilizatorii sunt singurii responsabili pentru a se asigura că activitatea lor de tranzacționare respectă legile locale și pentru îndeplinirea propriilor obligații fiscale.";
$risk_s4_li2_title = "Nicio Garanție de Profit:";
$risk_s4_li2_text = "Nu există tranzacționare cripto \"sigură\" sau fără risc. Orice cifre de randament sau exemple de performanță oferite sunt pur ipotetice.";
$risk_s4_li3_title = "Adecvare:";
$risk_s4_li3_text = "Dacă nu înțelegeți pe deplin riscurile, vă bazați pe fonduri esențiale sau tranzacționați cu bani împrumutați, tranzacționarea cripto nu este potrivită pentru dvs. Consultați un consultant financiar independent, autorizat, dacă nu sunteți sigur.";
$risk_contact = "<strong>Contact:</strong> Pentru orice întrebări referitoare la această declarație sau pentru a trimite o solicitare, vă rugăm să contactați echipa noastră oficială de asistență pentru clienți prin formularul de contact de pe site-ul nostru.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Acasă";
$bc_product = "Produs";
$bc_offer = "Ofertă";
$bc_contacts = "Contact";
$bc_faq = "Întrebări Frecvente";
$bc_privacy = "Politica de Confidențialitate";
$bc_conditions = "Termeni &amp; Condiții";
$bc_risk = "Avertisment de Risc";
$bc_sign = "Înregistrare";
$bc_sitemap = "Harta Site-ului";
$bc_thanks = "Mulțumim";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produs $site_name — Instrumente de Tranzacționare &amp; Caracteristici ale Platformei";
$product_meta_description = "Explorați produsul $site_name: tranzacționare spot, derivate cripto, un bot de tranzacționare, tranzacționare cu marjă și multe altele, toate construite pe o platformă rapidă și sigură.";
$product_h1 = "Produsul de Tranzacționare $site_name";
$product_lead = "O singură platformă, fiecare instrument de care un trader are nevoie: de la prima dvs. tranzacție spot la strategii automatizate și poziții cu marjă, $site_name menține experiența rapidă, sigură și ușor de înțeles.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Ofertă $site_name — Începeți Tranzacționarea de la $$app_price";
$offer_meta_description = "Vedeți ce este inclus în oferta actuală $site_name: un depozit minim scăzut de $$app_price, acces complet la platformă și fără taxe ascunse.";
$offer_h1 = "Oferta Noastră Actuală";
$offer_lead = "Începeți cu doar <strong>$$app_price $app_currency</strong> și deblocați platforma completă $site_name din prima zi &mdash; fiecare instrument, fiecare piață, fără costuri ascunse.";
$offer_li1 = "Depozit minim de doar $$app_price $app_currency pentru a vă activa contul";
$offer_li2 = "Acces complet la tranzacționarea spot, derivate, marjă și botul de tranzacționare";
$offer_li3 = "Metode multiple de finanțare, inclusiv carduri și transfer bancar";
$offer_li4 = "Fără taxe de înregistrare, fără costuri de abonament, fără taxe ascunse";
$offer_li5 = "Asistență clienți 24/7 în timp ce începeți";
$offer_note = "Sumele de depozit și metodele de plată disponibile pot varia în funcție de regiune. Consultați <a class=\"link\" href=\"risk-warning.php\">Avertismentul de Risc</a> înainte de a finanța un cont.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Contactați $site_name — Intrați în Legătură cu Echipa Noastră";
$contacts_meta_description = "Aveți o întrebare despre contul dvs. $site_name sau platformă? Contactați echipa noastră de asistență prin email sau trimiteți-ne un mesaj și vă vom răspunde.";
$contacts_h1 = "Contact";
$contacts_lead = "Întrebări despre contul dvs., o depunere sau modul în care funcționează platforma? Echipa noastră este aici pentru a ajuta.";
$contacts_email_label = "Email";
$contacts_hours_label = "Ore de Asistență";
$contacts_hours_value = "24/7";
$contacts_response_label = "Timp Tipic de Răspuns";
$contacts_response_value = "În termen de 24 de ore";
$contacts_form_title = "Trimiteți-ne un Mesaj";
$contacts_form_desc = "Lăsați detaliile dvs. mai jos și un membru al echipei noastre vă va contacta direct.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Întrebări Frecvente $site_name";
$faq_meta_description = "Răspunsuri la cele mai frecvente întrebări despre crearea unui cont $site_name, efectuarea unei depuneri, siguranța platformei și taxe.";
$faq_page_lead = "Tot ce trebuie să știți înainte de a începe să tranzacționați. Nu găsiți răspunsul dvs.? <a class=\"link\" href=\"contacts.php\">Contactați echipa noastră</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Politica de Confidențialitate $site_name";
$privacy_meta_description = "Aflați cum $site_name colectează, utilizează și protejează informațiile dvs. personale pe site și platformă.";
$privacy_sections = [
    [
        "title" => "1. Introducere",
        "body" => "Această Politică de Confidențialitate explică modul în care $site_name (\"noi\") colectează, utilizează și protejează informațiile personale ale vizitatorilor și utilizatorilor $site_domain (\"Site-ul\"). Prin utilizarea Site-ului, sunteți de acord cu practicile descrise mai jos.",
    ],
    [
        "title" => "2. Informații pe Care le Colectăm",
        "body" => "Putem colecta informații pe care le furnizați direct, cum ar fi numele dvs., adresa de email și numărul de telefon atunci când vă înregistrați sau trimiteți un formular, precum și informații colectate automat, inclusiv adresa dvs. IP, tipul de dispozitiv și browser și paginile vizualizate pe Site.",
    ],
    [
        "title" => "3. Cum Utilizăm Informațiile Dvs.",
        "body" => "Utilizăm informațiile colectate pentru a crea și gestiona contul dvs., pentru a răspunde la întrebări, pentru a oferi asistență clienților, pentru a îmbunătăți Site-ul și serviciile noastre și, acolo unde este permis, pentru a trimite actualizări despre produse și oferte. Vă puteți dezabona de la comunicările de marketing în orice moment.",
    ],
    [
        "title" => "4. Cookie-uri &amp; Tehnologii de Urmărire",
        "body" => "Site-ul folosește cookie-uri și tehnologii similare pentru a vă memora preferințele, pentru a vă menține conectat și pentru a înțelege modul în care vizitatorii folosesc paginile noastre. Puteți dezactiva cookie-urile prin setările browserului dvs., deși este posibil ca unele funcții să nu funcționeze corect ca urmare.",
    ],
    [
        "title" => "5. Distribuirea Informațiilor",
        "body" => "Nu vindem informațiile dvs. personale. Este posibil să distribuim informații cu furnizori de servicii de încredere care ne ajută să operăm Site-ul (cum ar fi furnizorii de găzduire sau de analiză), sau atunci când este cerut de lege sau pentru a ne proteja drepturile legale.",
    ],
    [
        "title" => "6. Securitatea Datelor",
        "body" => "Aplicăm măsuri tehnice și organizaționale rezonabile pentru a vă proteja informațiile împotriva accesului neautorizat, alterării sau pierderii. Nicio metodă de transmitere sau stocare nu este complet sigură și nu putem garanta securitate absolută.",
    ],
    [
        "title" => "7. Drepturile &amp; Opțiunile Dvs.",
        "body" => "În funcție de locația dvs., este posibil să aveți dreptul de a accesa, corecta sau solicita ștergerea informațiilor dvs. personale și de a vă opune anumitor utilizări ale acestora. Pentru a exercita aceste drepturi, vă rugăm să ne contactați prin <a class=\"link\" href=\"contacts.php\">pagina noastră de contact</a>.",
    ],
    [
        "title" => "8. Confidențialitatea Copiilor",
        "body" => "Site-ul nu se adresează persoanelor sub 18 ani și nu colectăm în mod conștient informații personale de la minori. Dacă credeți că un minor ne-a furnizat informații personale, vă rugăm să ne contactați pentru a le putea elimina.",
    ],
    [
        "title" => "9. Modificări ale Acestei Politici",
        "body" => "Este posibil să actualizăm periodic această Politică de Confidențialitate. Orice modificare va fi publicată pe această pagină cu o dată de intrare în vigoare revizuită. Vă încurajăm să revizuiți periodic această pagină.",
    ],
    [
        "title" => "10. Contactați-ne",
        "body" => "Dacă aveți întrebări despre această Politică de Confidențialitate sau despre modul în care sunt gestionate informațiile dvs., vă rugăm să ne contactați prin <a class=\"link\" href=\"contacts.php\">pagina noastră de contact</a> sau trimiteți-ne un email la info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Termeni &amp; Condiții $site_name";
$conditions_meta_description = "Revizuiți Termenii &amp; Condițiile care guvernează accesul la și utilizarea site-ului și platformei de tranzacționare $site_name.";
$conditions_sections = [
    [
        "title" => "1. Acceptarea Termenilor",
        "body" => "Prin accesarea sau utilizarea $site_domain (\"Site-ul\"), sunteți de acord să fiți obligat de acești Termeni &amp; Condiții. Dacă nu sunteți de acord cu nicio parte a acestor termeni, vă rugăm să nu utilizați Site-ul.",
    ],
    [
        "title" => "2. Eligibilitate",
        "body" => "Trebuie să aveți cel puțin 18 ani și să fiți autorizat legal să utilizați servicii legate de tranzacționare în jurisdicția dvs. pentru a utiliza Site-ul. Prin utilizarea Site-ului, confirmați că îndepliniți aceste cerințe.",
    ],
    [
        "title" => "3. Descrierea Serviciului",
        "body" => "$site_name oferă o platformă online cu conținut educațional, informații de piață și instrumente de tranzacționare. Nimic de pe Site nu constituie consiliere financiară, de investiții, fiscală sau juridică, iar orice informație furnizată este doar în scopuri generale de informare.",
    ],
    [
        "title" => "4. Responsabilitățile Utilizatorului",
        "body" => "Sunteți responsabil pentru furnizarea de informații exacte la înregistrare, pentru menținerea confidențialității acreditărilor contului dvs. și pentru toate activitățile care au loc sub contul dvs.",
    ],
    [
        "title" => "5. Proprietate Intelectuală",
        "body" => "Tot conținutul de pe Site, inclusiv textul, graficele, siglele și software-ul, este proprietatea $site_name sau a licențiatorilor săi și este protejat de legile aplicabile privind proprietatea intelectuală. Nu puteți reproduce sau distribui acest conținut fără permisiune.",
    ],
    [
        "title" => "6. Fără Consiliere Financiară",
        "body" => "Conținutul de pe Site este furnizat doar în scopuri informative și educaționale și nu ar trebui interpretat ca sfaturi financiare. Sunteți singurul responsabil pentru propriile decizii de tranzacționare și ar trebui să consultați un consilier financiar independent dacă este necesar. Consultați <a class=\"link\" href=\"risk-warning.php\">Avertismentul nostru de Risc</a> pentru mai multe informații.",
    ],
    [
        "title" => "7. Limitarea Răspunderii",
        "body" => "În măsura maximă permisă de lege, $site_name nu va fi răspunzător pentru daune directe, indirecte, incidentale sau consecvente care rezultă din utilizarea de către dvs. sau incapacitatea de a utiliza Site-ul sau orice servicii terțe conectate.",
    ],
    [
        "title" => "8. Reziliere",
        "body" => "Ne rezervăm dreptul de a suspenda sau rezilia accesul dvs. la Site la discreția noastră, fără notificare, pentru conduite pe care le considerăm că încalcă acești Termeni &amp; Condiții sau sunt altfel dăunătoare altor utilizatori sau Site-ului.",
    ],
    [
        "title" => "9. Modificări ale Acestor Termeni",
        "body" => "Putem revizui acești Termeni &amp; Condiții oricând. Utilizarea continuă a Site-ului după publicarea modificărilor constituie acceptarea termenilor actualizați.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Întrebările despre acești Termeni &amp; Condiții pot fi adresate echipei noastre prin <a class=\"link\" href=\"contacts.php\">pagina de contact</a> sau prin email la info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Înregistrare | $site_name — Creați-vă Contul Gratuit";
$sign_meta_description = "Creați-vă contul gratuit $site_name în câteva minute și începeți să tranzacționați cu doar $$app_price $app_currency.";
$sign_h1 = "Creați-vă Contul Gratuit";
$sign_lead = "Alăturați-vă $site_name în câteva minute. Completați detaliile dvs. mai jos pentru a începe.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Mulțumim | $site_name";
$thanks_h1 = "Mulțumim!";
$thanks_text = "Detaliile dvs. au fost primite. Un membru al echipei $site_name vă va contacta în curând pentru a vă ajuta să începeți.";
$thanks_btn = "Înapoi la Pagina Principală";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Harta Site-ului | $site_name";
$sitemap_meta_description = "Răsfoiți fiecare pagină de pe site-ul $site_name, inclusiv platforma de tranzacționare, oferta, suportul și paginile juridice.";
$sitemap_h1 = "Harta Site-ului";
$sitemap_lead = "Fiecare pagină de pe $site_name într-un singur loc.";

