<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pl-PL';
$form_language = 'pl'; // matches this page's own language, not the offer's global default

// ============================================================
// PL TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficjalna Strona | Platforma Handlowa";
$home_meta_description = "$site_name oferuje przyjazną dla użytkownika platformę handlową z zaawansowanymi narzędziami rynkowymi, wglądem w czasie rzeczywistym i praktycznymi funkcjami, które sprawiają, że handel online jest bardziej dostępny i lepiej poinformowany.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "O nas";
$nav_contacts = "Kontakt";
$nav_login = "Zaloguj się";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Na żywo";
$activity_suffix = "Dołączył właśnie";
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
$form_title = "Zacznij teraz";
$form_fname_placeholder = "Imię i nazwisko";
$form_lname_placeholder = "Nazwisko";
$form_email_placeholder = "Adres e-mail";
$form_btn_submit = "Utwórz konto";
$form_disclaimer_text = "* Klikając przycisk, zgadzasz się z naszą <a class=\"link\" href=\"privacy.php\">Polityką Prywatności</a> i <a class=\"link\" href=\"conditions.php\">Warunkami Korzystania</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "ZABEZPIECZONE";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI zaprojektowane, by jaśniej odczytywać rynek";
$s1_subtitle = "Strategia inwestycyjna oparta na technologii";
$s1_quote = "$site_name zostało stworzone, aby ułatwić pracę z rynkami, niezależnie od tego, czy masz doświadczenie, czy nie. Platforma wykorzystuje sztuczną inteligencję, aby przekształcić złożone dane w jasne, praktyczne decyzje, co pozwala handlować z większą pewnością w każdym scenariuszu.";
$s1_p1 = "System analizuje ogromne ilości informacji w czasie rzeczywistym: wykrywa zmiany, rozpoznaje wzorce i szybko reaguje na sygnały rynkowe. Daje to jasny obraz aktualnej sytuacji, dzięki czemu możesz dostrzegać okazje bez konieczności przekopywania się przez skomplikowane analizy.";
$s1_p2 = "Monitorowanie 24/7, przyjazny interfejs i wysoki poziom ochrony sprawiają, że korzystanie z platformy jest wygodne i niezawodne. Wszystko zostało zaprojektowane tak, abyś mógł skupić się na wynikach, a nie na aspektach technicznych.";
$s1_p3 = "Funkcja copy trading daje również dostęp do strategii bardziej doświadczonych traderów. Możesz śledzić ich ruchy i stosować sprawdzone podejścia we własnym handlu, łącząc profesjonalną ocenę z automatyzacją.";
$s1_cta = "Utwórz konto";
$s1_img_alt = "Finanse cyfrowe $site_name";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Precyzyjna analiza rynku, bez zbędnego szumu";
$s2_intro = "$site_name wykorzystuje sztuczną inteligencję do ciągłego monitorowania rynku i szybkiego wykrywania zmian. System przetwarza ogromne ilości danych i pokazuje tylko istotne sygnały, nie przytłaczając Cię niepotrzebnymi informacjami.";
$s2_item1_title = "Reakcja na rynek bez oczekiwania";
$s2_item1_text = "Platforma identyfikuje ruchy na wczesnym etapie: momentum, odwrócenia i zmiany trendu. Widzisz od razu, co się dzieje, i możesz działać we właściwym momencie.";
$s2_item2_title = "Jasny obraz zamiast zgadywania";
$s2_item2_text = "Żadnych skomplikowanych wykresów ani zgadywania. $site_name podkreśla to, co istotne, zapewniając jasny przegląd sytuacji, dzięki czemu podejmujesz decyzje na podstawie danych, a nie intuicji.";
$s2_item3_title = "Kontrola i ochrona";
$s2_item3_text = "Twoje dane są zabezpieczone, dostęp jest kontrolowany, a transakcje przebiegają bezpiecznymi kanałami. Dzięki temu możesz skupić się na rynku, a nie na ryzyku technicznym.";
$s2_img_alt = "Kryptowaluty $site_name";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Jasna inteligencja dla traderów";
$s3_card1_title = "$site_name szanuje prywatność i kontrolę użytkownika";
$s3_card1_text = "$site_name traktuje informacje z pełną przejrzystością i uczciwością. Nie nadużywa Twoich danych osobowych. Na tej platformie nie są rejestrowane żadne transakcje ani zlecenia.";
$s3_card2_title = "Przejrzyste środowisko analityczne dla lepszych decyzji";
$s3_card2_text = "$site_name działa jako przestrzeń technologiczna, w której AI wzmacnia ludzki osąd, zamiast go zastępować. Te narzędzia ułatwiają zrozumienie zmian rynkowych, porównywanie strategii i analizowanie zachowania aktywów.";
$s3_card3_title = "Narzędzia AI, które wyostrzają Twoje spojrzenie na rynek";
$s3_card3_text = "Analiza nigdy się nie zatrzymuje. $site_name obserwuje środowisko kryptowalut i wysyła powiadomienia w czasie rzeczywistym, gdy tylko pojawi się istotny ruch.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Ostra analiza, bez emocji i błędów";
$s4_quote = "$site_name przekształca złożone dane rynkowe w uporządkowane, łatwe do odczytania informacje, eliminując niepotrzebny szum i pomagając skupić się na sygnałach, które naprawdę mają znaczenie. Dzięki temu szybciej rozumiesz sytuację i podejmujesz decyzje bez wpływu emocji.";
$s4_p1 = "System stale aktualizuje swoje wnioski na podstawie nowych danych. Zamiast wskaźników opóźnionych wykorzystuje modele adaptacyjne, które reagują na zmiany rynkowe w czasie rzeczywistym. Oznacza to, że zawsze pracujesz z aktualnym obrazem sytuacji i możesz działać szybciej, gdy naprawdę się to liczy.";
$s4_img_alt = "Sztuczna inteligencja $site_name";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Korzystaj z AI $site_name, aby podejmować dokładne i terminowe decyzje";
$s5_quote = "$site_name analizuje rynek w czasie rzeczywistym i natychmiast pokazuje, gdzie znajdują się ruch i okazje. System przetwarza dane za Ciebie, dostarczając gotowe sygnały: kiedy wejść, kiedy wyjść i na co zwrócić uwagę.";
$s5_p1 = "Nie musisz przez cały dzień patrzeć na wykresy. Platforma sama wykrywa zmiany i szybko reaguje na rynek, dzięki czemu nie przegapisz ważnych momentów.";
$s5_p2 = "Algorytmy pracują 24/7, identyfikując nowe okazje, gdy tylko się pojawią. Otrzymujesz aktualne informacje bez opóźnień i nadmiaru danych.";
$s5_p3 = "Jednocześnie bezpieczeństwo pozostaje na wysokim poziomie: ochrona danych, bezpieczny dostęp i kontrola handlu. $site_name jest odpowiednie zarówno dla początkujących, jak i aktywnych traderów — decyzje należą do Ciebie, ale wspierane solidną podstawą analityczną.";
$s5_img_alt = "Automatyzacja finansowa $site_name";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konsekwentny handel zaczyna się od uporządkowanego systemu";
$s6_p1 = "$site_name pomaga wprowadzić strukturę do Twojej pracy z rynkiem. Platforma tworzy jasne ramy: Ty ustalasz swoje cele i poziom ryzyka, a system dostosowuje swoją analizę do Twojego stylu — bez chaosu i przeciążenia.";
$s6_p2 = "Analiza 24/7 przekształca strumień danych w proste, zrozumiałe sygnały. Widzisz tylko to, co ma znaczenie: gdzie jest ruch, gdzie warto wejść, a kiedy lepiej poczekać. Z czasem algorytmy stają się coraz bardziej precyzyjne i dostosowują się do rynku.";
$s6_item1_title = "Wybierz swoje tempo: szybki handel lub podejście długoterminowe";
$s6_item1_text = "$site_name obsługuje różne strategie. Do aktywnego handlu system oznacza punkty wejścia i ruchy cenowe. Do podejścia długoterminowego pomaga utrzymywać pozycje z uwzględnieniem trendu i ryzyka.";
$s6_item2_title = "Punkty wejścia bez zgadywania";
$s6_item2_text = "Platforma pokazuje, gdzie rynek jest najbardziej aktywny. Pomaga to wejść z większą pewnością i wyjść w porę, bez improwizacji.";
$s6_item3_title = "Zarządzanie ryzykiem od samego początku";
$s6_item3_text = "Możesz z góry zobaczyć możliwe scenariusze: gdzie ryzyko jest niższe, a potencjał wyższy. Pozwala to zaplanować transakcje, zanim ruch w ogóle się zacznie.";
$s6_item4_title = "Gotowa analiza";
$s6_item4_text = "$site_name nie przytłacza Cię skomplikowaną terminologią. Otrzymujesz jasne, praktyczne informacje, zaprojektowane, aby pomóc Ci podejmować decyzje szybciej i z większą pewnością.";
$s6_cta = "Zacznij teraz";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Proste narzędzia do precyzyjnych decyzji z $site_name";
$s7_quote = "$site_name daje Ci wszystko, czego potrzebujesz do handlu na rynku — bez technicznego żargonu i nadmiaru informacji. Platforma sama analizuje ruchy cen, trendy i potencjalne punkty wejścia, pokazując tylko to, co naprawdę ma znaczenie.";
$s7_point1 = "System pomaga wykryć, kiedy rynek może się odwrócić, gdzie pojawiają się silne ruchy i które momenty są najlepsze do wejścia lub wyjścia. Każdy sygnał jest wstępnie przetworzony — nie musisz opanowywać skomplikowanych wskaźników.";
$s7_point2 = "Obejmuje to również copy trading: możesz śledzić i powielać decyzje doświadczonych traderów, bez poświęcania czasu na własną analizę.";
$s7_point3 = "Interfejs pozostaje tak prosty, jak to możliwe — każde narzędzie jest zrozumiałe na pierwszy rzut oka i gotowe do użycia od pierwszej chwili.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Znajdź kluczowe momenty czasowe dzięki AI $site_name";
$s8_item1 = "Automatyczna dywersyfikacja rozkłada środki na różne aktywa, zmniejszając ryzyko i chroniąc kapitał nawet na niestabilnych rynkach.";
$s8_item2 = "W pełni autonomiczny system — nie musisz patrzeć na wykresy. Algorytmy analizują rynek i podejmują decyzje samodzielnie.";
$s8_item3 = "Wypłaty są dostępne w każdej chwili — na karty bankowe, portfele kryptowalut lub elektroniczne systemy płatności, bez opóźnień.";
$s8_item4 = "Codzienne raporty pokazują Twoje wyniki i dają Ci pełną kontrolę nad sytuacją w czasie rzeczywistym.";
$s8_item5 = "Elastyczne ustawienia poziomu ryzyka pozwalają wybrać strategię dopasowaną do Twoich celów — od konserwatywnej po bardziej agresywną.";
$s8_item6 = "Potencjał zysku sięgający 400% czyni $site_name narzędziem dla tych, którzy chcą nie tylko zachować swój kapitał, ale znacząco go pomnożyć.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Ekspercka analiza napędzana przez $site_name";
$s9_quote = "$site_name łączy siłę algorytmów z doświadczeniem rynkowym, przekształcając złożone dane w jasne, łatwe do zrozumienia sygnały. System szybko wykrywa wzorce i potencjalne okazje, pozwalając Ci podejmować decyzje bez nadmiaru informacji.";
$s9_p1 = "Otrzymujesz wstępnie przetworzone analizy, które uwzględniają zarówno wskaźniki techniczne, jak i zachowanie rynku — dzięki czemu możesz działać szybciej, z większą pewnością i precyzją.";
$s9_img_alt = "Strategia inwestycyjna $site_name";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Co mówią nasi użytkownicy";
$review_1_text = "Platforma jest bardzo intuicyjna, a narzędzia pomogły mi poprawić wyniki handlowe.";
$review_2_text = "Szybkie wsparcie i naprawdę przydatne materiały edukacyjne — idealne dla osób, które dopiero zaczynają.";
$review_3_text = "Konfigurowalne wykresy i szybka realizacja — to moja pierwsza wybór od miesięcy.";
$review_4_text = "Rejestracja zajęła mniej niż pięć minut, a panel ułatwia dokładne śledzenie, gdzie są moje pieniądze.";
$review_5_text = "Podoba mi się, że platforma wyjaśnia uzasadnienie każdego sygnału, zamiast po prostu rzucać mi liczby.";
$review_6_text = "Wypłaty zawsze były dla mnie szybkie, a zespół wsparcia odpowiada w ciągu kilku minut.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Często zadawane pytania o $site_name";
$faq_q1 = "Czy $site_name może wykrywać zmiany rynkowe w czasie rzeczywistym?";
$faq_a1 = "Tak. Śledzi dane na żywo, identyfikuje zmiany momentum na wczesnym etapie i dostrzega wzorce, zanim w pełni się rozwiną, dając użytkownikom przewagę czasową.";
$faq_q2 = "Czy doświadczenie $site_name można dostosować?";
$faq_a2 = "Tak. Użytkownicy mogą wybierać obszary zainteresowań, dostosowywać poziom szczegółowości i śledzić publiczne strategie dopasowane do ich stylu handlu lub potrzeb edukacyjnych.";
$faq_q3 = "Czy $site_name zastępuje tradycyjne metody badawcze?";
$faq_a3 = "Nie. Wzbogaca je, szybko dostarczając spostrzeżenia filtrowane przez AI, przy jednoczesnym zachowaniu pełnej kontroli użytkownika nad własnymi badaniami i decyzjami.";
$faq_cta = "Dowiedz się więcej teraz";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Najważniejsze informacje o $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Koszt rejestracji";
$hl1_desc = "Brak kosztów rejestracji";
$hl2_emoji = "💰";
$hl2_title = "Prowizje handlowe";
$hl2_desc = "Zupełnie bez opłat";
$hl3_emoji = "📋";
$hl3_title = "Łatwość rejestracji";
$hl3_desc = "Rejestracja jest szybka i prosta";
$hl4_emoji = "📊";
$hl4_title = "Skupienie edukacyjne";
$hl4_desc = "Lekcje o kryptowalutach, handlu Forex i inwestowaniu";
$hl5_emoji = "🌎";
$hl5_title = "Dostępne kraje";
$hl5_desc = "Niedostępne w USA, dostępne w większości innych krajów";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handluj mądrze, rozwijaj się z pewnością";
$footnav_about = "O nas";
$footnav_product = "Produkt";
$footnav_offer = "Oferta";
$footnav_contacts = "Kontakt";
$footnav_faq = "FAQ";
$footnav_privacy = "Polityka Prywatności";
$footnav_conditions = "Warunki Korzystania";
$footnav_risk = "Ostrzeżenie o Ryzyku";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publikuje ogólne materiały edukacyjne dotyczące handlu, inwestowania, rynków finansowych i aktywów cyfrowych. Artykuły, dane rynkowe, wykresy i inne treści witryny są udostępniane wyłącznie w celach informacyjnych i nie powinny być traktowane jako porada finansowa, inwestycyjna lub prawna. Choć staramy się dostarczać rzetelne i aktualne informacje, nie możemy zagwarantować ich dokładności ani kompletności i nie ponosimy odpowiedzialności za straty wynikające z polegania na tych treściach.<br><br>Handel wiąże się z ryzykiem, a kryptowaluty, Forex, CFD, akcje i inne produkty finansowe mogą znacznie zmieniać wartość. Przed rozpoczęciem handlu rozważ swoją sytuację finansową i tolerancję ryzyka, a w razie potrzeby skorzystaj z porady profesjonalisty. Nigdy nie inwestuj środków, na których utratę nie możesz sobie pozwolić.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Doradca Handlowy";
$quiz_text_welcome = "Cześć! Jestem Sofia, Twoja osobista doradczyni handlowa. Masz kilka minut, aby znaleźć dla Ciebie najlepszy plan?";
$quiz_text_q1 = "Czy handlowałeś już wcześniej?";
$quiz_text_a1_yes = "Tak, mam doświadczenie";
$quiz_text_a1_no = "Nie, jestem początkujący";
$quiz_text_q2 = "Świetnie! Jak masz na imię, abym mogła spersonalizować Twój plan?";
$quiz_text_q3 = "Jaki jest Twój główny cel w handlu?";
$quiz_text_a3_yes = "Budowanie długoterminowego dobrobytu";
$quiz_text_a3_no = "Generowanie krótkoterminowego dochodu";
$quiz_text_q4 = "Od jakiej kwoty chcesz zacząć?";
$quiz_text_a4_1 = "Mniej niż $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Więcej niż $1000";
$quiz_text_q5 = "Świetnie. Czy chcesz, abym teraz otworzyła dla Ciebie darmowe konto?";
$quiz_text_a5_yes = "Tak, zróbmy to";
$quiz_text_a5_no = "Nie teraz";
$quiz_text_loader = "Znajdowanie najlepszego planu dla Ciebie...";
$quiz_text_final_ttl = "Wszystko gotowe!";
$quiz_text_processing = "Twoje dane są wysyłane...";
$quiz_text_typing = "pisze...";
$quiz_placeholder_fname = "Imię";
$quiz_placeholder_lname = "Nazwisko";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Odbierz moje darmowe konto";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Strona główna";
$bc_about = "O nas";
$bc_product = "Produkt";
$bc_offer = "Oferta";
$bc_contacts = "Kontakt";
$bc_faq = "FAQ";
$bc_privacy = "Polityka Prywatności";
$bc_conditions = "Warunki Korzystania";
$bc_risk = "Ostrzeżenie o Ryzyku";
$bc_sign = "Rejestracja";
$bc_thanks = "Dziękujemy";
$bc_sitemap = "Mapa strony";

// -------------------------
// About page
// -------------------------
$about_meta_title = "O $site_name";
$about_meta_description = "Poznaj misję $site_name: uczynienie analizy rynkowej jaśniejszą i bardziej dostępną dzięki narzędziom opartym na AI.";
$about_h1 = "O $site_name";
$about_lead = "$site_name zostało zbudowane wokół jednej idei: decyzje handlowe powinny opierać się na jasnych informacjach, a nie na zgadywaniu.";
$about_p1 = "Łączymy sztuczną inteligencję z prawdziwym doświadczeniem rynkowym, aby przekształcić złożone, chaotyczne dane w sygnały łatwe do zrozumienia i wykorzystania. Nasza platforma monitoruje rynki dzień i noc, dzięki czemu Ty nie musisz.";
$about_p2 = "Niezależnie od tego, czy dokonujesz pierwszej transakcji, czy handlujesz na rynkach od lat, $site_name zostało zaprojektowane, aby wyjść naprzeciw Twoim potrzebom — z narzędziami sięgającymi od prostych wskazówek po zaawansowaną analizę w czasie rzeczywistym.";
$about_p3 = "Wierzymy, że technologia powinna wspierać Twoją ocenę, a nie ją zastępować. Każdy sygnał generowany przez $site_name ma na celu wsparcie decyzji, która wciąż w pełni należy do Ciebie.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Produkt $site_name — Narzędzia AI do Analizy Rynku";
$product_meta_description = "Poznaj produkt $site_name: analizę rynku AI w czasie rzeczywistym, copy trading, kontrolę ryzyka i automatyczną dywersyfikację.";
$product_h1 = "Produkt $site_name";
$product_lead = "Jedna platforma, która czyta rynek za Ciebie: analiza w czasie rzeczywistym, copy trading i elastyczne narzędzia ryzyka, zaprojektowane, aby decyzje handlowe były jaśniejsze.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Oferta $site_name — Zacznij za darmo";
$offer_meta_description = "Sprawdź, co jest zawarte w obecnej ofercie $site_name: darmowa rejestracja, brak prowizji handlowych i pełny dostęp do platformy.";
$offer_h1 = "Nasza obecna oferta";
$offer_lead = "Utwórz swoje konto za darmo i odblokuj pełną platformę $site_name &mdash; bez opłat za rejestrację, bez prowizji handlowych.";
$offer_li1 = "Brak opłat za rejestrację konta";
$offer_li2 = "Brak prowizji od transakcji";
$offer_li3 = "Pełny dostęp do analizy rynku AI w czasie rzeczywistym i copy trading";
$offer_li4 = "Wypłaty dostępne w każdej chwili, bez ukrytych opłat";
$offer_li5 = "Zasoby edukacyjne dotyczące kryptowalut, Forex i inwestowania w zestawie";
$offer_note = "Dostępność może się różnić w zależności od regionu. Zapoznaj się z naszym <a class=\"link\" href=\"risk-warning.php\">Ostrzeżeniem o Ryzyku</a> przed zasileniem konta.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Skontaktuj się z $site_name — Skontaktuj się z naszym zespołem";
$contacts_meta_description = "Masz pytanie dotyczące swojego konta $site_name lub platformy? Skontaktuj się z naszym zespołem wsparcia przez e-mail lub wyślij nam wiadomość.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Pytania dotyczące Twojego konta, wpłaty lub działania platformy? Nasz zespół jest gotowy do pomocy.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Godziny Wsparcia";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typowy Czas Odpowiedzi";
$contacts_response_value = "W ciągu 24 godzin";
$contacts_form_title = "Wyślij Nam Wiadomość";
$contacts_form_desc = "Zostaw swoje dane poniżej, a członek naszego zespołu skontaktuje się z Tobą bezpośrednio.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Polityka Prywatności $site_name";
$privacy_meta_description = "Dowiedz się, jak $site_name gromadzi, wykorzystuje i chroni Twoje dane osobowe w całej witrynie i platformie.";
$privacy_sections = [
    [
        "title" => "1. Wprowadzenie",
        "body" => "Niniejsza Polityka Prywatności wyjaśnia, w jaki sposób $site_name (\"my\") gromadzi, wykorzystuje i chroni dane osobowe odwiedzających i użytkowników $site_domain (\"Witryna\"). Korzystając z Witryny, zgadzasz się na praktyki opisane poniżej.",
    ],
    [
        "title" => "2. Informacje, które gromadzimy",
        "body" => "Możemy gromadzić informacje, które podajesz bezpośrednio, takie jak imię, adres e-mail i numer telefonu podczas rejestracji lub przesyłania formularza, a także informacje gromadzone automatycznie, w tym Twój adres IP, typ urządzenia i przeglądarki oraz strony przeglądane w Witrynie.",
    ],
    [
        "title" => "3. Jak wykorzystujemy Twoje informacje",
        "body" => "Wykorzystujemy zgromadzone informacje do tworzenia i zarządzania Twoim kontem, odpowiadania na zapytania, zapewniania obsługi klienta, ulepszania Witryny i naszych usług oraz, gdy jest to dozwolone, wysyłania aktualizacji o produktach i ofertach. Możesz w każdej chwili zrezygnować z komunikacji marketingowej.",
    ],
    [
        "title" => "4. Pliki cookie i technologie śledzenia",
        "body" => "Witryna wykorzystuje pliki cookie i podobne technologie, aby zapamiętać Twoje preferencje, utrzymać Cię zalogowanym i zrozumieć, jak odwiedzający korzystają z naszych stron. Możesz wyłączyć pliki cookie w ustawieniach przeglądarki, choć niektóre funkcje mogą wtedy nie działać poprawnie.",
    ],
    [
        "title" => "5. Udostępnianie informacji",
        "body" => "Nie sprzedajemy Twoich danych osobowych. Możemy udostępniać informacje zaufanym dostawcom usług, którzy pomagają nam obsługiwać Witrynę (takim jak dostawcy hostingu lub analityki), lub gdy jest to wymagane prawem, lub w celu ochrony naszych praw.",
    ],
    [
        "title" => "6. Bezpieczeństwo danych",
        "body" => "Stosujemy rozsądne środki techniczne i organizacyjne, aby chronić Twoje informacje przed nieautoryzowanym dostępem, zmianą lub utratą. Żadna metoda transmisji ani przechowywania nie jest w pełni bezpieczna, a my nie możemy zagwarantować absolutnego bezpieczeństwa.",
    ],
    [
        "title" => "7. Twoje Prawa i Wybory",
        "body" => "W zależności od lokalizacji możesz mieć prawo do dostępu, poprawiania lub żądania usunięcia swoich danych osobowych oraz sprzeciwu wobec niektórych ich zastosowań. Aby skorzystać z tych praw, skontaktuj się z nami za pośrednictwem naszej <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a>.",
    ],
    [
        "title" => "8. Prywatność Dzieci",
        "body" => "Witryna nie jest skierowana do osób poniżej 18 roku życia i nie gromadzimy świadomie danych osobowych od osób nieletnich. Jeśli uważasz, że nieletni przekazał nam dane osobowe, skontaktuj się z nami, abyśmy mogli je usunąć.",
    ],
    [
        "title" => "9. Zmiany w niniejszej Polityce",
        "body" => "Możemy od czasu do czasu aktualizować niniejszą Politykę Prywatności. Wszelkie zmiany zostaną opublikowane na tej stronie z zaktualizowaną datą wejścia w życie. Zachęcamy do regularnego sprawdzania tej strony.",
    ],
    [
        "title" => "10. Skontaktuj się z Nami",
        "body" => "Jeśli masz pytania dotyczące niniejszej Polityki Prywatności lub sposobu przetwarzania Twoich informacji, skontaktuj się z nami za pośrednictwem naszej <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a> lub napisz do nas na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Warunki Korzystania $site_name";
$conditions_meta_description = "Zapoznaj się z Warunkami Korzystania regulującymi dostęp i korzystanie ze strony internetowej i platformy handlowej $site_name.";
$conditions_sections = [
    [
        "title" => "1. Akceptacja Warunków",
        "body" => "Uzyskując dostęp do $site_domain (\"Witryna\") lub korzystając z niej, zgadzasz się na przestrzeganie niniejszych Warunków Korzystania. Jeśli nie zgadzasz się z jakąkolwiek częścią tych warunków, nie korzystaj z Witryny.",
    ],
    [
        "title" => "2. Kwalifikowalność",
        "body" => "Musisz mieć co najmniej 18 lat i posiadać prawną zdolność do korzystania z usług związanych z handlem w swojej jurysdykcji, aby korzystać z Witryny. Korzystając z Witryny, potwierdzasz, że spełniasz te wymagania.",
    ],
    [
        "title" => "3. Opis Usługi",
        "body" => "$site_name zapewnia internetową platformę z treściami edukacyjnymi, informacjami rynkowymi i narzędziami analitycznymi wspieranymi przez AI. Żadna treść w Witrynie nie stanowi porady finansowej, inwestycyjnej, podatkowej ani prawnej, a wszystkie podane informacje służą wyłącznie ogólnym celom informacyjnym.",
    ],
    [
        "title" => "4. Obowiązki Użytkownika",
        "body" => "Jesteś odpowiedzialny za podanie dokładnych informacji podczas rejestracji, zachowanie poufności danych swojego konta oraz za wszystkie działania podejmowane w ramach Twojego konta.",
    ],
    [
        "title" => "5. Własność Intelektualna",
        "body" => "Wszystkie treści w Witrynie, w tym tekst, obrazy, logo i oprogramowanie, są własnością $site_name lub jej licencjodawców i są chronione obowiązującymi przepisami dotyczącymi własności intelektualnej. Nie możesz kopiować ani rozpowszechniać tych treści bez zgody.",
    ],
    [
        "title" => "6. Brak Porady Finansowej",
        "body" => "Treści w Witrynie są udostępniane wyłącznie w celach informacyjnych i edukacyjnych i nie powinny być interpretowane jako porada finansowa. Ponosisz wyłączną odpowiedzialność za swoje decyzje handlowe i w razie potrzeby powinieneś skonsultować się z niezależnym doradcą finansowym. Zapoznaj się z naszym <a class=\"link\" href=\"risk-warning.php\">Ostrzeżeniem o Ryzyku</a>, aby dowiedzieć się więcej.",
    ],
    [
        "title" => "7. Ograniczenie Odpowiedzialności",
        "body" => "W maksymalnym zakresie dozwolonym przez prawo, $site_name nie ponosi odpowiedzialności za jakiekolwiek bezpośrednie, pośrednie, przypadkowe lub wynikowe szkody wynikające z korzystania lub niemożności korzystania z Witryny lub powiązanych usług osób trzecich.",
    ],
    [
        "title" => "8. Zakończenie",
        "body" => "Zastrzegamy sobie prawo do zawieszenia lub zakończenia dostępu do Witryny według własnego uznania, bez powiadomienia, za zachowanie, które uznajemy za naruszające niniejsze Warunki Korzystania lub w inny sposób szkodliwe dla innych użytkowników lub Witryny.",
    ],
    [
        "title" => "9. Zmiany w niniejszych Warunkach",
        "body" => "Możemy zmieniać niniejsze Warunki Korzystania w dowolnym momencie. Dalsze korzystanie z Witryny po opublikowaniu zmian stanowi akceptację zaktualizowanych warunków.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Pytania dotyczące niniejszych Warunków Korzystania można kierować do naszego zespołu za pośrednictwem <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a> lub e-mailem na info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Ostrzeżenie o Ryzyku $site_name — Ujawnienie Ryzyka Handlowego";
$risk_meta_description = "Zapoznaj się z ostrzeżeniem o ryzyku $site_name przed rozpoczęciem handlu: ryzyko rynku kryptowalut, dźwignia, płynność, cyberbezpieczeństwo i kwestie regulacyjne.";
$risk_title = "Ostrzeżenie o Ryzyku";
$risk_intro = "Zrozumienie ryzyka to pierwszy krok do pewnego siebie handlu.";
$risk_ai_title = "Jak nasz system AI pomaga w zarządzaniu ryzykiem:";
$risk_ai_1_title = "Wydajność Algorytmiczna i Handel Bez Emocji:";
$risk_ai_1_text = "Zaawansowane algorytmy analizują sygnały rynkowe, aby obiektywnie realizować transakcje w optymalnych momentach.";
$risk_ai_2_title = "Strategie Oparte na Danych:";
$risk_ai_2_text = "Strategie opierają się na zweryfikowanych wzorcach rynkowych i analizie w czasie rzeczywistym, a nie na zgadywaniu.";
$risk_ai_3_title = "Elastyczne Ustawienia i Pełna Kontrola:";
$risk_ai_3_text = "Dostosuj parametry ryzyka w dowolnym momencie. Śledź wszystkie salda i transakcje w sposób przejrzysty na swoim panelu, bez ukrytych opłat i bez ograniczeń wypłat.";
$risk_disclaimer = "<strong>Zastrzeżenie:</strong> Handel zawsze wiąże się z ryzykiem. Systemy zautomatyzowane (w tym AI) nie gwarantują zysków, mogą zawieść z powodu błędów oprogramowania lub nieoczekiwanych wydarzeń rynkowych i wymagają nadzoru użytkownika. Wyniki z przeszłości nie gwarantują przyszłych rezultatów. Ta platforma służy wyłącznie celom informacyjnym i marketingowym i nie stanowi porady finansowej.";
$risk_s1_title = "1. Ogólne Ryzyko Rynku Kryptowalut";
$risk_s1_text = "Kryptowaluty to wysoce zmienne, spekulacyjne aktywa działające 24/7 przy minimalnym nadzorze regulacyjnym w większości jurysdykcji.";
$risk_s1_li1 = "Wartości mogą dramatycznie wahać się w krótkich okresach, co może potencjalnie prowadzić do całkowitej utraty zainwestowanego kapitału.";
$risk_s1_li2 = "Wartości rynkowe mogą być silnie dotknięte zmianami regulacyjnymi, rozwojem technologicznym, naruszeniami bezpieczeństwa lub szerszymi wydarzeniami makroekonomicznymi.";
$risk_s1_li3 = "Niektóre aktywa mogą całkowicie stracić swoją wartość. Inwestuj tylko środki, na których utratę możesz sobie pozwolić.";
$risk_s2_title = "2. Ryzyko Realizacji, Płynności i Dźwigni";
$risk_s2_li1_title = "Zmienność Rynku i Płynność:";
$risk_s2_li1_text = "Ekstremalne ruchy cen (10-20%+ dziennie) lub niska płynność (szczególnie w przypadku mniejszych monet) mogą powodować opóźnienia, awarie platformy i poważne poślizgi realizacji. Zlecenia stop-loss mogą nie gwarantować limitów strat w ekstremalnych warunkach.";
$risk_s2_li2_title = "Ryzyko Dźwigni i Depozytu Zabezpieczającego:";
$risk_s2_li2_text = "Produkty z dźwignią wzmacniają zarówno zyski, jak i straty, co oznacza, że możesz stracić więcej niż pierwotny depozyt. Około 70-80% kont inwestorów detalicznych traci pieniądze podczas handlu produktami z dźwignią.";
$risk_s3_title = "3. Ryzyko Techniczne, Cyberbezpieczeństwa i Osób Trzecich";
$risk_s3_li1_title = "Czynniki Techniczne:";
$risk_s3_li1_text = "Handel online wiąże się nieodłącznie z ryzykiem awarii połączenia internetowego, błędów sprzętu/oprogramowania i niedostępności usługi.";
$risk_s3_li2_title = "Cyberbezpieczeństwo:";
$risk_s3_li2_text = "Konta kryptowalutowe są częstym celem phishingu, złośliwego oprogramowania i włamań. Transakcje są nieodwracalne; naruszenie danych logowania może prowadzić do trwałej straty.";
$risk_s3_li3_title = "Platformy Osób Trzecich:";
$risk_s3_li3_text = "Ta strona może łączyć użytkowników z platformami osób trzecich. Nie kontrolujemy, nie popieramy ani nie gwarantujemy ich bezpieczeństwa, działań ani wypłacalności. Zawsze przeprowadź własną dokładną analizę przed wpłatą środków na zewnętrzne platformy.";
$risk_s4_title = "4. Postanowienia Regulacyjne, Podatkowe i Końcowe";
$risk_s4_li1_title = "Zgodność Prawna i Podatki:";
$risk_s4_li1_text = "Ramy regulacyjne znacznie się różnią i szybko się zmieniają. Użytkownicy są sami odpowiedzialni za zapewnienie, że ich działalność handlowa jest zgodna z lokalnym prawem oraz za wypełnianie własnych zobowiązań podatkowych.";
$risk_s4_li2_title = "Brak Gwarancji Zysku:";
$risk_s4_li2_text = "Nie istnieje \"bezpieczny\" ani wolny od ryzyka handel kryptowalutami. Wszelkie podane liczby zwrotów lub przykłady wyników są czysto hipotetyczne.";
$risk_s4_li3_title = "Odpowiedniość:";
$risk_s4_li3_text = "Jeśli nie rozumiesz w pełni ryzyka, jesteś zależny od niezbędnych środków lub handlujesz pożyczonymi pieniędzmi, handel kryptowalutami nie jest dla Ciebie odpowiedni. W razie wątpliwości skonsultuj się z niezależnym, licencjonowanym doradcą finansowym.";
$risk_contact = "<strong>Kontakt:</strong> W przypadku pytań dotyczących tego oświadczenia lub w celu złożenia zapytania, prosimy o kontakt z naszym oficjalnym zespołem obsługi klienta za pośrednictwem formularza kontaktowego na naszej stronie.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Rejestracja | $site_name — Utwórz Swoje Darmowe Konto";
$sign_meta_description = "Utwórz swoje darmowe konto $site_name w kilka minut i zacznij handlować mądrzej dzięki analizie rynku opartej na AI.";
$sign_h1 = "Utwórz Swoje Darmowe Konto";
$sign_lead = "Dołącz do $site_name w kilka minut. Wypełnij poniższe dane, aby zacząć.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Dziękujemy | $site_name";
$thanks_h1 = "Dziękujemy!";
$thanks_text = "Twoje dane zostały otrzymane. Członek zespołu $site_name skontaktuje się z Tobą wkrótce, aby pomóc Ci zacząć.";
$thanks_btn = "Powrót do Strony Głównej";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mapa strony | $site_name";
$sitemap_meta_description = "Zobacz każdą stronę witryny $site_name, w tym platformę handlową, ofertę, wsparcie i strony prawne.";
$sitemap_h1 = "Mapa strony";
$sitemap_lead = "Każda strona $site_name w jednym miejscu.";

