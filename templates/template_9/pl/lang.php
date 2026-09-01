<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pl-PL';
$form_language = 'pl'; // matches this page's own language, not the offer's global default

// ============================================================
// PL TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Oficjalna Strona | Platforma Handlowa";
$home_meta_description = "$site_name oferuje przyjazną dla użytkownika platformę handlową z zaawansowanymi narzędziami rynkowymi, informacjami w czasie rzeczywistym i praktycznymi funkcjami zaprojektowanymi, aby uczynić handel online bardziej dostępnym i lepiej poinformowanym.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Platforma $site_name";
$hero_subtitle = "Wspieramy miliony ludzi na całym świecie w ich podróży z aktywami cyfrowymi";
$hero_badge_title = "Zadowoleni Członkowie";
$hero_badge_subtitle = "Uwielbiane przez miliony";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Zacznij Handlować Już Dziś";
$form_desc = "Gotowy na swój ruch? Zarejestruj się teraz i zrób pierwszy krok w stronę wolności finansowej. Zacznij od zaledwie $app_price $app_currency — uzyskaj dostęp do każdego narzędzia handlowego, danych rynkowych w czasie rzeczywistym i pełnego dostępu do platformy od pierwszego dnia.";
$form_fname_placeholder = "Imię";
$form_lname_placeholder = "Nazwisko";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Zarejestruj Się";
$form_disclaimer_text = "Wprowadzając swoje dane osobowe i klikając przycisk, zgadzasz się z <a class=\"link\" href=\"privacy.php\">Polityką Prywatności</a> i <a class=\"link\" href=\"conditions.php\">Warunkami Korzystania</a> ze strony.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "BEZPIECZNE";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Poznaj Platformę";
$stats_title = "Krótkie wprowadzenie do mądrzejszego handlu";
$stat_1_value = "154+";
$stat_1_label = "Objętych Krajów";
$stat_2_value = "29 Milionów";
$stat_2_label = "Globalnych Inwestorów";
$stat_3_value = "635+";
$stat_3_label = "Monet";
$stat_4_value = "3,26 Miliarda $";
$stat_4_label = "Wolumen Obrotu w 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Dlaczego $site_name?";
$why_title = "Powody, aby Nas Wybrać";
$why_1_title = "Szybko &amp; Łatwo";
$why_1_text = "Kupuj i sprzedawaj swoje ulubione kryptowaluty w kilka sekund.";
$why_2_title = "Bezpiecznie &amp; Chronione";
$why_2_text = "Wykorzystujemy najnowszą technologię, aby chronić Twoje środki i dane.";
$why_3_title = "Otwarte dla Wszystkich";
$why_3_text = "Handluj na naszej platformie 24/7, gdziekolwiek i kiedykolwiek chcesz.";
$why_4_title = "Narzędzia Profesjonalne";
$why_4_text = "Od prostych po profesjonalne funkcje handlowe, mamy wszystko.";
$why_5_title = "Trendy &amp; Analizy";
$why_5_text = "Otrzymuj najnowsze wiadomości, analizy i trendy dotyczące kryptowalut od ekspertów.";
$why_6_title = "Wsparcie 24/7";
$why_6_text = "Nasz przyjazny zespół wsparcia jest tutaj, aby pomóc w każdej chwili.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Jak To Działa";
$how_title = "Proste Kroki, aby Rozpocząć Handel";
$how_1_title = "Zarejestruj Się";
$how_1_text = "Załóż konto i zacznij handlować w kilka minut.";
$how_1_btn = "Zacznij Handlować";
$how_2_title = "Wpłać Środki";
$how_2_text = "Zasil swoje konto minimalnym depozytem $app_price $app_currency, aby odblokować pełny dostęp do handlu. Wybierz spośród wielu metod płatności i zacznij powiększać swoje portfolio już dziś.";
$how_2_note = "Dodaj środki....";
$how_3_title = "Zacznij Handlować";
$how_3_text = "Poznaj rynek i handluj na swój sposób.";
$how_3_note = "Kupuj i HODLuj";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulator";
$calc_title = "Zobacz, ile czasu i potencjału pozostawiasz niewykorzystanego";
$calc_volume_label = "Miesięczny Wolumen Obrotu";
$calc_trades_label = "Transakcje Tygodniowo";
$calc_time_label = "Czas, Który Możesz Zaoszczędzić";
$calc_boost_label = "Potencjalny Wzrost Wolumenu";
$calc_btn = "Zacznij Handlować";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funkcje";
$features_title = "Siła $site_name";
$feature_1_title = "Handel Spot";
$feature_1_text = "Zmaksymalizuj swój potencjał handlowy dzięki profesjonalnym narzędziom.";
$feature_2_title = "Kup Kryptowaluty";
$feature_2_text = "Kupuj kryptowaluty za pomocą kart lub banków.";
$feature_3_title = "Instrumenty Pochodne Krypto";
$feature_3_text = "Łatwy, zaawansowany handel kontraktami terminowymi.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Powiększaj swój majątek z łatwością.";
$feature_5_title = "Bot Handlowy";
$feature_5_text = "Wyższe zyski, nawet gdy śpisz.";
$feature_6_title = "Handel z Dźwignią";
$feature_6_text = "Pożyczaj, handluj i spłacaj z łatwością.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Co Mówią Nasi Użytkownicy";
$review_1_text = "Platforma jest bardzo łatwa w obsłudze, a odkąd zostałem posiadaczem, widzę stały postęp. Zaangażowanie zespołu i świeże pomysły sprawiają, że z niecierpliwością czekam na to, co będzie dalej!";
$review_1_role = "Trader";
$review_2_text = "$site_name oferuje płynne i intuicyjne doświadczenie handlowe. Mogłem od razu zacząć kupować i handlować kryptowalutami. Interfejs jest łatwy w obsłudze, a szybkość transakcji jest doskonała!";
$review_2_role = "Nowy Trader";
$review_3_text = "Ufam tej platformie w zarządzaniu moimi inwestycjami w kryptowaluty. Jej funkcje bezpieczeństwa dają mi pewność, a nigdy nie doświadczyłem żadnych problemów z wypłatami czy wpłatami. To jedna z najbardziej niezawodnych giełd, z jakich korzystałem.";
$review_3_role = "Trader Profesjonalny";
$review_4_text = "Kiedykolwiek miałem pytania, zespół obsługi klienta był szybki i pomocny. Naprawdę dbają o swoich użytkowników i sprawiają, że każde doświadczenie handlowe jest płynne i proste.";
$review_4_role = "Doświadczony Trader";
$review_5_text = "Jako początkujący, uważam $site_name za bardzo łatwe w obsłudze. To, co naprawdę wyróżnia się, to zakres zaawansowanych narzędzi dla bardziej doświadczonych traderów. To solidna opcja dla każdego, kto chce zbudować swoje portfolio!";
$review_5_role = "Trader Społeczności";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Najczęściej Zadawane Pytania";
$faq_title = "Najczęściej Zadawane Pytania";
$faq_q1 = "Czym jest $site_name?";
$faq_a1 = "$site_name to giełda kryptowalut, na której użytkownicy mogą łatwo handlować szeroką gamą monet, w tym Bitcoin, Ethereum i innymi popularnymi kryptowalutami.";
$faq_q2 = "Jak Bezpieczna jest $site_name dla Handlu Kryptowalutami?";
$faq_a2 = "Platforma zapewnia bezpieczeństwo dzięki zaawansowanej technologii i zabezpieczeniu aktywów 1:1 poprzez Proof of Reserves.";
$faq_q3 = "Jak Dokonać Wpłaty?";
$faq_a3 = "$site_name oferuje kilka opcji wpłaty, w tym wpłatę kryptowalutami, wpłatę fiat, handel P2P i zakup jednym kliknięciem.";
$faq_q4 = "Czy Potrzebuję Doświadczenia, aby Korzystać z $site_name?";
$faq_a4 = "Nie, nie potrzebujesz żadnego doświadczenia. Przyjazny dla użytkownika interfejs platformy sprawia, że jest dostępna dla każdego, od początkujących po zaawansowanych traderów.";
$faq_q5 = "Czy są jakieś ukryte opłaty lub koszty?";
$faq_a5 = "Absolutnie żadnych. Nie ma opłat rejestracyjnych, kosztów subskrypcji ani żadnych ukrytych opłat jakiegokolwiek rodzaju. Zawsze widzisz dokładną kwotę transakcji przed potwierdzeniem. Przychody pochodzą z funkcji premium i partnerstw giełdowych, a nie z pobierania pieniędzy od użytkowników.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Zacznij Handlować Już Dziś";
$cta_desc = "Gotowy na swój ruch? Zarejestruj się teraz i zrób pierwszy krok w stronę niezależności finansowej.";
$cta_btn = "Zarejestruj Się";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Kluczowe Funkcje Platformy Handlowej $site_name";
$table_1_label = "🤖 Technologia Platformy";
$table_1_val = "Zaawansowany Silnik Handlowy AI";
$table_2_label = "💳 Metody Finansowania";
$table_2_val = "Główne Karty Kredytowe, Przelew Bankowy, PayPal";
$table_3_label = "📱 Dostęp do Platformy";
$table_3_val = "Kompatybilność z Wieloma Urządzeniami";
$table_4_label = "🚀 Wskaźnik Wydajności";
$table_4_val = "85% Dokładności";
$table_5_label = "📊 Instrumenty Handlowe";
$table_5_val = "Akcje, Forex, Towary, Metale Szlachetne, CFD, Kryptowaluty i więcej…";
$table_6_label = "✍️ Konfiguracja Konta";
$table_6_val = "Szybka i Wydajna";
$table_7_label = "📞 Obsługa Klienta";
$table_7_val = "Profesjonalna Pomoc 24/7";

// Reviews summary card
$summary_title = "Opinie o $site_name";
$summary_badge = "Zaufane";
$summary_desc = "Potężna, przyjazna dla użytkownika platforma handlowa z solidną automatyzacją i zasobami edukacyjnymi.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Handluj mądrze, rozwijaj się szybko";
$footer_community_label = "Społeczność";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Oferta";
$footnav_contacts = "Kontakt";
$footnav_faq = "Najczęściej Zadawane Pytania";
$footnav_privacy = "Polityka Prywatności";
$footnav_conditions = "Warunki Korzystania";
$footnav_risk = "Ostrzeżenie o Ryzyku";
$footer_disclaimer = "$site_name udostępnia zasoby edukacyjne i materiały związane z rynkiem, aby pomóc odwiedzającym lepiej zrozumieć handel, inwestowanie i cyfrowe produkty finansowe. Informacje przedstawione na stronie, takie jak komentarze rynkowe, ceny aktywów, wykresy, przewodniki i treści analityczne, są udostępniane wyłącznie w ogólnych celach informacyjnych i nie stanowią porady finansowej, inwestycyjnej, podatkowej ani prawnej. Chociaż dokładamy uzasadnionych starań, aby utrzymać dokładne i istotne informacje, $site_name nie udziela żadnych gwarancji dotyczących kompletności, dokładności lub aktualności treści i nie może być pociągnięta do odpowiedzialności za decyzje lub straty wynikające z ich wykorzystania.<br><br>Uczestnictwo w rynkach finansowych wiąże się z nieodłącznym ryzykiem. Kryptowaluty, Forex, CFD, akcje i inne instrumenty handlowe mogą doświadczać znacznych wahań cen, a straty mogą wystąpić. Indywidualne okoliczności i tolerancja ryzyka są różne, dlatego użytkownicy powinni przeprowadzić własne badania i rozważyć uzyskanie porady od wykwalifikowanego specjalisty finansowego przed zainwestowaniem środków. Nigdy nie handluj pieniędzmi, których stratę mógłbyś sobie pozwolić.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Konsultantka Handlowa";
$quiz_text_welcome = "Cześć! Jestem Maya, Twoja osobista konsultantka handlowa. Masz kilka minut, aby znaleźć dla Ciebie najlepszy plan?";
$quiz_text_q1 = "Handlowałeś już wcześniej kryptowalutami?";
$quiz_text_a1_yes = "Tak, mam doświadczenie";
$quiz_text_a1_no = "Nie, jestem początkujący";
$quiz_text_q2 = "Świetnie! Jak masz na imię, abym mogła spersonalizować Twój plan?";
$quiz_text_q3 = "Jaki jest Twój główny cel w handlu?";
$quiz_text_a3_yes = "Budowanie długoterminowego bogactwa";
$quiz_text_a3_no = "Generowanie krótkoterminowego dochodu";
$quiz_text_q4 = "Od jakiej kwoty chciałbyś zacząć?";
$quiz_text_a4_1 = "Mniej niż $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Więcej niż $1000";
$quiz_text_q5 = "Świetnie. Czy chciałbyś, abym teraz otworzyła dla Ciebie darmowe konto?";
$quiz_text_a5_yes = "Tak, zróbmy to";
$quiz_text_a5_no = "Nie teraz";
$quiz_text_loader = "Szukanie najlepszego planu dla Ciebie...";
$quiz_text_final_ttl = "Wszystko gotowe!";
$quiz_text_processing = "Twoje dane są wysyłane...";
$quiz_text_typing = "pisze...";
$quiz_placeholder_fname = "Imię";
$quiz_placeholder_lname = "Nazwisko";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Odbierz Moje Darmowe Konto";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Ostrzeżenie o Ryzyku $site_name — Ujawnienie Ryzyka Handlowego";
$risk_meta_description = "Przeczytaj ostrzeżenie o ryzyku $site_name przed rozpoczęciem handlu: ryzyka rynku kryptowalut, dźwignia finansowa, płynność, cyberbezpieczeństwo i kwestie regulacyjne.";
$risk_title = "Ostrzeżenie o Ryzyku";
$risk_intro = "Zrozumienie ryzyka jest pierwszym krokiem w kierunku pewnego siebie handlu.";
$risk_ai_title = "Jak Nasz System AI Pomaga Zarządzać Ryzykiem:";
$risk_ai_1_title = "Efektywność Algorytmiczna &amp; Handel Bez Emocji:";
$risk_ai_1_text = "Zaawansowane algorytmy analizują sygnały rynkowe, aby obiektywnie wykonywać transakcje w optymalnych momentach.";
$risk_ai_2_title = "Strategie Oparte na Danych:";
$risk_ai_2_text = "Strategie opierają się na zweryfikowanych wzorcach rynkowych i analizie w czasie rzeczywistym, a nie na domysłach.";
$risk_ai_3_title = "Elastyczne Ustawienia &amp; Pełna Kontrola:";
$risk_ai_3_text = "Dostosuj parametry ryzyka w dowolnym momencie. Śledź wszystkie salda i transakcje w sposób przejrzysty na swoim panelu, bez ukrytych opłat i bez ograniczeń wypłat.";
$risk_disclaimer = "<strong>Zastrzeżenie:</strong> Handel zawsze wiąże się z ryzykiem. Zautomatyzowane systemy (w tym AI) nie gwarantują zysku, mogą zawieść z powodu błędów oprogramowania lub nieoczekiwanych wydarzeń rynkowych i wymagają nadzoru użytkownika. Wyniki osiągnięte w przeszłości nie są wskaźnikiem przyszłych rezultatów. Ta platforma służy wyłącznie celom informacyjnym i marketingowym i nie udziela porad finansowych.";
$risk_s1_title = "1. Ogólne Ryzyko &amp; Ryzyko Rynku Kryptowalut";
$risk_s1_text = "Kryptowaluty to wysoce zmienne, spekulacyjne aktywa, które działają 24/7 przy minimalnym nadzorze regulacyjnym w większości jurysdykcji.";
$risk_s1_li1 = "Wartości mogą drastycznie wahać się w krótkich okresach, co potencjalnie może prowadzić do całkowitej utraty zainwestowanego kapitału.";
$risk_s1_li2 = "Wartości rynkowe mogą być silnie dotknięte zmianami regulacyjnymi, rozwojem technicznym, naruszeniami bezpieczeństwa lub szerszymi wydarzeniami makroekonomicznymi.";
$risk_s1_li3 = "Niektóre aktywa mogą całkowicie stracić całą swoją wartość. Inwestuj tylko środki, których stratę możesz sobie pozwolić.";
$risk_s2_title = "2. Ryzyko Wykonania, Płynności &amp; Dźwigni Finansowej";
$risk_s2_li1_title = "Zmienność Rynku &amp; Płynność:";
$risk_s2_li1_text = "Ekstremalne ruchy cen (10-20%+ dziennie) lub niska płynność (szczególnie w przypadku mniejszych monet) mogą prowadzić do opóźnień, przerw w działaniu platformy i poważnego poślizgu wykonania. Zlecenia stop-loss nie mogą zagwarantować limitów strat w ekstremalnych warunkach.";
$risk_s2_li2_title = "Ryzyko Dźwigni Finansowej &amp; Depozytu Zabezpieczającego:";
$risk_s2_li2_text = "Produkty z dźwignią finansową wzmacniają zarówno zyski, jak i straty, co oznacza, że możesz stracić więcej niż Twój początkowy depozyt. <em>Około 70-80% kont inwestorów detalicznych traci pieniądze podczas handlu produktami z dźwignią finansową.</em>";
$risk_s3_title = "3. Ryzyko Techniczne, Cyberbezpieczeństwa &amp; Osób Trzecich";
$risk_s3_li1_title = "Czynniki Techniczne:";
$risk_s3_li1_text = "Handel online z natury wiąże się z ryzykiem przerw w połączeniu internetowym, błędów sprzętu/oprogramowania i niedostępności usługi.";
$risk_s3_li2_title = "Cyberbezpieczeństwo:";
$risk_s3_li2_text = "Konta kryptowalutowe są częstym celem phishingu, złośliwego oprogramowania i włamań. Transakcje są nieodwracalne; naruszenie Twoich danych uwierzytelniających może skutkować trwałą stratą.";
$risk_s3_li3_title = "Platformy Osób Trzecich:";
$risk_s3_li3_text = "Ta strona internetowa może łączyć użytkowników z platformami osób trzecich. Nie kontrolujemy, nie popieramy ani nie gwarantujemy ich bezpieczeństwa, działalności ani wypłacalności. Zawsze przeprowadzaj własną dokładną analizę due diligence przed zdeponowaniem środków na zewnętrznych platformach.";
$risk_s4_title = "4. Postanowienia Regulacyjne, Podatkowe &amp; Końcowe";
$risk_s4_li1_title = "Zgodność Prawna &amp; Podatki:";
$risk_s4_li1_text = "Ramy regulacyjne znacznie się różnią i szybko się zmieniają. Użytkownicy są wyłącznie odpowiedzialni za zapewnienie, że ich działalność handlowa jest zgodna z lokalnymi przepisami, oraz za wypełnianie własnych zobowiązań podatkowych.";
$risk_s4_li2_title = "Brak Gwarancji Zysku:";
$risk_s4_li2_text = "Nie istnieje \"bezpieczny\" ani wolny od ryzyka handel kryptowalutami. Wszelkie podane liczby zwrotów lub przykłady wydajności są czysto hipotetyczne.";
$risk_s4_li3_title = "Odpowiedniość:";
$risk_s4_li3_text = "Jeśli nie rozumiesz w pełni ryzyka, polegasz na niezbędnych środkach lub handlujesz pożyczonymi pieniędzmi, handel kryptowalutami nie jest dla Ciebie odpowiedni. W razie wątpliwości skonsultuj się z niezależnym, licencjonowanym doradcą finansowym.";
$risk_contact = "<strong>Kontakt:</strong> W przypadku jakichkolwiek pytań dotyczących tego oświadczenia lub w celu złożenia zapytania, prosimy o kontakt z naszym oficjalnym zespołem obsługi klienta za pośrednictwem formularza kontaktowego na naszej stronie internetowej.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Strona Główna";
$bc_product = "Produkt";
$bc_offer = "Oferta";
$bc_contacts = "Kontakt";
$bc_faq = "Najczęściej Zadawane Pytania";
$bc_privacy = "Polityka Prywatności";
$bc_conditions = "Warunki Korzystania";
$bc_risk = "Ostrzeżenie o Ryzyku";
$bc_sign = "Zarejestruj Się";
$bc_sitemap = "Mapa Strony";
$bc_thanks = "Dziękujemy";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produkt $site_name — Narzędzia Handlowe &amp; Funkcje Platformy";
$product_meta_description = "Odkryj produkt $site_name: handel spot, instrumenty pochodne krypto, bota handlowego, handel z dźwignią i więcej, wszystko zbudowane na szybkiej i bezpiecznej platformie.";
$product_h1 = "Produkt Handlowy $site_name";
$product_lead = "Jedna platforma, każde narzędzie, którego potrzebuje trader: od Twojej pierwszej transakcji spot po zautomatyzowane strategie i pozycje z dźwignią, $site_name utrzymuje doświadczenie szybkie, bezpieczne i łatwe do zrozumienia.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Oferta $site_name — Zacznij Handlować Już od $$app_price";
$offer_meta_description = "Zobacz, co jest zawarte w obecnej ofercie $site_name: niski minimalny depozyt $$app_price, pełny dostęp do platformy i brak ukrytych opłat.";
$offer_h1 = "Nasza Obecna Oferta";
$offer_lead = "Zacznij już od <strong>$$app_price $app_currency</strong> i odblokuj pełną platformę $site_name od pierwszego dnia &mdash; każde narzędzie, każdy rynek, bez ukrytych kosztów.";
$offer_li1 = "Minimalny depozyt zaledwie $$app_price $app_currency, aby aktywować swoje konto";
$offer_li2 = "Pełny dostęp do handlu spot, instrumentów pochodnych, dźwigni i bota handlowego";
$offer_li3 = "Wiele metod finansowania, w tym karty i przelew bankowy";
$offer_li4 = "Bez opłat rejestracyjnych, bez kosztów subskrypcji, bez ukrytych opłat";
$offer_li5 = "Obsługa klienta 24/7 podczas rozpoczynania";
$offer_note = "Kwoty depozytów i dostępne metody płatności mogą się różnić w zależności od regionu. Zapoznaj się z naszym <a class=\"link\" href=\"risk-warning.php\">Ostrzeżeniem o Ryzyku</a> przed zasileniem konta.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Skontaktuj się z $site_name — Skontaktuj się z Naszym Zespołem";
$contacts_meta_description = "Masz pytanie dotyczące swojego konta $site_name lub platformy? Skontaktuj się z naszym zespołem wsparcia mailowo lub wyślij nam wiadomość, a odpowiemy.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Pytania dotyczące Twojego konta, wpłaty lub sposobu działania platformy? Nasz zespół jest tu, aby pomóc.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Godziny Wsparcia";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typowy Czas Odpowiedzi";
$contacts_response_value = "W ciągu 24 godzin";
$contacts_form_title = "Wyślij Nam Wiadomość";
$contacts_form_desc = "Zostaw swoje dane poniżej, a członek naszego zespołu skontaktuje się z Tobą bezpośrednio.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Najczęściej Zadawane Pytania $site_name";
$faq_meta_description = "Odpowiedzi na najczęstsze pytania dotyczące zakładania konta $site_name, dokonywania wpłaty, bezpieczeństwa platformy i opłat.";
$faq_page_lead = "Wszystko, co musisz wiedzieć przed rozpoczęciem handlu. Nie możesz znaleźć odpowiedzi? <a class=\"link\" href=\"contacts.php\">Skontaktuj się z naszym zespołem</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Polityka Prywatności $site_name";
$privacy_meta_description = "Dowiedz się, jak $site_name gromadzi, wykorzystuje i chroni Twoje dane osobowe w całej witrynie i platformie.";
$privacy_sections = [
    [
        "title" => "1. Wprowadzenie",
        "body" => "Niniejsza Polityka Prywatności wyjaśnia, jak $site_name (\"my\") gromadzi, wykorzystuje i chroni dane osobowe odwiedzających i użytkowników $site_domain (\"Witryna\"). Korzystając z Witryny, zgadzasz się na praktyki opisane poniżej.",
    ],
    [
        "title" => "2. Informacje, Które Gromadzimy",
        "body" => "Możemy gromadzić informacje, które podajesz bezpośrednio, takie jak imię, adres e-mail i numer telefonu podczas rejestracji lub przesyłania formularza, a także informacje gromadzone automatycznie, w tym adres IP, typ urządzenia i przeglądarki oraz strony przeglądane w Witrynie.",
    ],
    [
        "title" => "3. Jak Wykorzystujemy Twoje Informacje",
        "body" => "Wykorzystujemy zgromadzone informacje do tworzenia i zarządzania Twoim kontem, odpowiadania na zapytania, zapewniania obsługi klienta, ulepszania Witryny i naszych usług oraz, gdy jest to dozwolone, wysyłania aktualizacji dotyczących produktów i ofert. Możesz zrezygnować z komunikacji marketingowej w dowolnym momencie.",
    ],
    [
        "title" => "4. Pliki Cookie &amp; Technologie Śledzące",
        "body" => "Witryna wykorzystuje pliki cookie i podobne technologie, aby zapamiętać Twoje preferencje, utrzymać Cię zalogowanego i zrozumieć, jak odwiedzający korzystają z naszych stron. Możesz wyłączyć pliki cookie za pomocą ustawień przeglądarki, choć niektóre funkcje mogą wtedy nie działać poprawnie.",
    ],
    [
        "title" => "5. Udostępnianie Informacji",
        "body" => "Nie sprzedajemy Twoich danych osobowych. Możemy udostępniać informacje zaufanym dostawcom usług, którzy pomagają nam obsługiwać Witrynę (takim jak dostawcy hostingu lub analityki), lub gdy jest to wymagane przez prawo, lub w celu ochrony naszych praw.",
    ],
    [
        "title" => "6. Bezpieczeństwo Danych",
        "body" => "Stosujemy rozsądne środki techniczne i organizacyjne, aby chronić Twoje informacje przed nieautoryzowanym dostępem, zmianą lub utratą. Żadna metoda transmisji ani przechowywania nie jest w pełni bezpieczna, i nie możemy zagwarantować absolutnego bezpieczeństwa.",
    ],
    [
        "title" => "7. Twoje Prawa &amp; Wybory",
        "body" => "W zależności od Twojej lokalizacji możesz mieć prawo do dostępu, poprawiania lub żądania usunięcia swoich danych osobowych, oraz sprzeciwiania się określonym sposobom ich wykorzystania. Aby skorzystać z tych praw, skontaktuj się z nami za pośrednictwem naszej <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a>.",
    ],
    [
        "title" => "8. Prywatność Dzieci",
        "body" => "Witryna nie jest skierowana do osób poniżej 18 roku życia, i nie gromadzimy świadomie danych osobowych od nieletnich. Jeśli uważasz, że nieletni przekazał nam dane osobowe, skontaktuj się z nami, abyśmy mogli je usunąć.",
    ],
    [
        "title" => "9. Zmiany w Niniejszej Polityce",
        "body" => "Możemy od czasu do czasu aktualizować niniejszą Politykę Prywatności. Wszelkie zmiany zostaną opublikowane na tej stronie z poprawioną datą wejścia w życie. Zachęcamy do regularnego sprawdzania tej strony.",
    ],
    [
        "title" => "10. Skontaktuj się z Nami",
        "body" => "Jeśli masz pytania dotyczące niniejszej Polityki Prywatności lub sposobu przetwarzania Twoich informacji, skontaktuj się z nami za pośrednictwem naszej <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a> lub napisz do nas na info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Warunki Korzystania $site_name";
$conditions_meta_description = "Zapoznaj się z Warunkami Korzystania regulującymi dostęp do i korzystanie ze strony internetowej i platformy handlowej $site_name.";
$conditions_sections = [
    [
        "title" => "1. Akceptacja Warunków",
        "body" => "Uzyskując dostęp do $site_domain (\"Witryna\") lub korzystając z niej, zgadzasz się przestrzegać niniejszych Warunków Korzystania. Jeśli nie zgadzasz się z jakąkolwiek częścią tych warunków, prosimy nie korzystać z Witryny.",
    ],
    [
        "title" => "2. Kwalifikowalność",
        "body" => "Musisz mieć co najmniej 18 lat i być prawnie uprawnionym do korzystania z usług związanych z handlem w swojej jurysdykcji, aby korzystać z Witryny. Korzystając z Witryny, potwierdzasz, że spełniasz te wymagania.",
    ],
    [
        "title" => "3. Opis Usługi",
        "body" => "$site_name zapewnia platformę internetową z treściami edukacyjnymi, informacjami rynkowymi i narzędziami handlowymi. Nic w Witrynie nie stanowi porady finansowej, inwestycyjnej, podatkowej ani prawnej, a wszelkie podane informacje służą wyłącznie ogólnym celom informacyjnym.",
    ],
    [
        "title" => "4. Obowiązki Użytkownika",
        "body" => "Jesteś odpowiedzialny za podanie dokładnych informacji podczas rejestracji, za zachowanie poufności danych logowania do konta, oraz za wszelkie działania, które mają miejsce na Twoim koncie.",
    ],
    [
        "title" => "5. Własność Intelektualna",
        "body" => "Wszystkie treści w Witrynie, w tym tekst, grafika, logo i oprogramowanie, są własnością $site_name lub jej licencjodawców i są chronione obowiązującymi przepisami dotyczącymi własności intelektualnej. Nie możesz kopiować ani rozpowszechniać tych treści bez zezwolenia.",
    ],
    [
        "title" => "6. Brak Porad Finansowych",
        "body" => "Treści w Witrynie są udostępniane wyłącznie w celach informacyjnych i edukacyjnych i nie powinny być interpretowane jako porada finansowa. Ponosisz wyłączną odpowiedzialność za własne decyzje handlowe i powinieneś skonsultować się z niezależnym doradcą finansowym w razie potrzeby. Zobacz nasze <a class=\"link\" href=\"risk-warning.php\">Ostrzeżenie o Ryzyku</a>, aby dowiedzieć się więcej.",
    ],
    [
        "title" => "7. Ograniczenie Odpowiedzialności",
        "body" => "W maksymalnym zakresie dozwolonym przez prawo, $site_name nie ponosi odpowiedzialności za jakiekolwiek bezpośrednie, pośrednie, przypadkowe lub wynikowe szkody wynikające z korzystania lub niemożności korzystania z Witryny lub jakichkolwiek powiązanych usług osób trzecich.",
    ],
    [
        "title" => "8. Rozwiązanie",
        "body" => "Zastrzegamy sobie prawo do zawieszenia lub zakończenia Twojego dostępu do Witryny według własnego uznania, bez powiadomienia, za zachowanie, które naszym zdaniem narusza niniejsze Warunki Korzystania lub jest w inny sposób szkodliwe dla innych użytkowników lub Witryny.",
    ],
    [
        "title" => "9. Zmiany w Niniejszych Warunkach",
        "body" => "Możemy w dowolnym momencie zmienić niniejsze Warunki Korzystania. Dalsze korzystanie z Witryny po opublikowaniu zmian stanowi akceptację zaktualizowanych warunków.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Pytania dotyczące niniejszych Warunków Korzystania można kierować do naszego zespołu za pośrednictwem <a class=\"link\" href=\"contacts.php\">strony kontaktowej</a> lub mailowo na info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Zarejestruj Się | $site_name — Załóż Swoje Darmowe Konto";
$sign_meta_description = "Załóż swoje darmowe konto $site_name w kilka minut i zacznij handlować już od $$app_price $app_currency.";
$sign_h1 = "Załóż Swoje Darmowe Konto";
$sign_lead = "Dołącz do $site_name w kilka minut. Wypełnij swoje dane poniżej, aby zacząć.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Dziękujemy | $site_name";
$thanks_h1 = "Dziękujemy!";
$thanks_text = "Twoje dane zostały odebrane. Członek zespołu $site_name skontaktuje się z Tobą wkrótce, aby pomóc Ci zacząć.";
$thanks_btn = "Powrót do Strony Głównej";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa Strony | $site_name";
$sitemap_meta_description = "Przeglądaj każdą stronę witryny $site_name, w tym platformę handlową, ofertę, wsparcie i strony prawne.";
$sitemap_h1 = "Mapa Strony";
$sitemap_lead = "Każda strona $site_name w jednym miejscu.";

