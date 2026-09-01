<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ============================================================
// DE TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Offizielle Website | Handelsplattform";
$home_meta_description = "$site_name bietet eine benutzerfreundliche Handelsplattform mit fortschrittlichen Markttools, Echtzeit-Einblicken und praktischen Funktionen, die den Online-Handel zugänglicher und fundierter machen.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Über uns";
$nav_contacts = "Kontakt";
$nav_login = "Anmelden";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Gerade beigetreten";
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
$form_title = "Loslegen";
$form_fname_placeholder = "Vollständiger Name";
$form_lname_placeholder = "Nachname";
$form_email_placeholder = "E-Mail-Adresse";
$form_btn_submit = "Konto erstellen";
$form_disclaimer_text = "* Durch Klicken auf die Schaltfläche stimmen Sie unseren <a class=\"link\" href=\"privacy.php\">Datenschutzhinweisen</a> und <a class=\"link\" href=\"conditions.php\">Nutzungsbedingungen</a> zu.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SICHER";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: KI entwickelt, um den Markt klarer zu lesen";
$s1_subtitle = "Technologiegestützte Anlagestrategie";
$s1_quote = "$site_name wurde entwickelt, um die Arbeit mit den Märkten einfacher zu machen — unabhängig davon, ob Sie Erfahrung haben oder nicht. Die Plattform nutzt künstliche Intelligenz, um komplexe Daten in klare, umsetzbare Entscheidungen zu verwandeln, damit Sie in jedem Szenario mit mehr Selbstvertrauen agieren können.";
$s1_p1 = "Das System überprüft enorme Mengen an Informationen in Echtzeit: Es erkennt Veränderungen, identifiziert Muster und reagiert schnell auf Marktsignale. Dies gibt Ihnen ein präzises Bild der aktuellen Situation, sodass Sie Chancen erkennen können, ohne sich durch komplizierte Analysen wühlen zu müssen.";
$s1_p2 = "24/7-Überwachung, eine benutzerfreundliche Oberfläche und ein hohes Schutzniveau machen das Erlebnis komfortabel und zuverlässig. Alles ist so gestaltet, dass Sie sich auf Ergebnisse konzentrieren können, nicht auf die technische Seite.";
$s1_p3 = "Die Copy-Trading-Funktion gibt Ihnen zudem Zugang zu den Strategien erfahrenerer Trader. Sie können deren Schritte verfolgen und bewährte Ansätze auf Ihren eigenen Handel anwenden, wobei professionelles Urteilsvermögen mit Automatisierung kombiniert wird.";
$s1_cta = "Konto erstellen";
$s1_img_alt = "$site_name digitale Finanzen";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Präzise Marktanalyse ohne zusätzlichen Lärm";
$s2_intro = "$site_name nutzt künstliche Intelligenz, um den Markt kontinuierlich zu überwachen und Veränderungen schnell zu erkennen. Das System verarbeitet große Datenmengen und zeigt nur die relevanten Signale an, ohne Sie mit unnötigen Informationen zu überfordern.";
$s2_item1_title = "Marktreaktion ohne Wartezeit";
$s2_item1_text = "Die Plattform identifiziert Bewegungen in ihren frühen Phasen: Momentum, Umkehrungen und Trendwechsel. Sie sehen sofort, was passiert, und können im richtigen Moment handeln.";
$s2_item2_title = "Eine klare Lesart statt Rätselraten";
$s2_item2_text = "Keine verworrenen Diagramme oder Rätselraten. $site_name hebt das Wesentliche hervor und bietet einen klaren Blick auf die Situation, sodass Sie mit Daten statt mit Intuition entscheiden können.";
$s2_item3_title = "Kontrolle und Schutz";
$s2_item3_text = "Ihre Daten sind geschützt, der Zugriff wird kontrolliert, und Trades laufen über sichere Kanäle. So können Sie sich auf den Markt konzentrieren, nicht auf technische Risiken.";
$s2_img_alt = "$site_name Krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Klare Intelligenz für Trader";
$s3_card1_title = "$site_name respektiert die Privatsphäre und Kontrolle der Nutzer";
$s3_card1_text = "$site_name behandelt Informationen mit vollständiger Transparenz und Integrität. Ihre persönlichen Daten werden nicht missbraucht. Auf dieser Plattform werden keine Trades oder Orders erfasst.";
$s3_card2_title = "Eine klare Analyseumgebung für bessere Entscheidungen";
$s3_card2_text = "$site_name funktioniert als technologischer Raum, in dem KI das menschliche Urteilsvermögen verstärkt, anstatt es zu ersetzen. Diese Tools erleichtern das Verständnis von Marktverschiebungen, den Vergleich von Strategien und die Untersuchung des Anlageverhaltens.";
$s3_card3_title = "KI-Tools, die Ihr Marktverständnis schärfen";
$s3_card3_text = "Die Analyse hört nie auf. $site_name beobachtet das Krypto-Umfeld und sendet Echtzeit-Benachrichtigungen, sobald eine relevante Bewegung auftritt.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Scharfe Analyse ohne Emotionen oder Fehler";
$s4_quote = "$site_name verwandelt komplexe Marktdaten in organisierte, leicht verständliche Informationen, eliminiert unnötigen Lärm und hilft Ihnen, sich auf die Signale zu konzentrieren, die wirklich wichtig sind. So können Sie eine Situation früher verstehen und entscheiden, ohne dass Emotionen die Oberhand gewinnen.";
$s4_p1 = "Das System aktualisiert seine Schlussfolgerungen kontinuierlich mit neuen Daten. Statt nachlaufender Indikatoren verwendet es adaptive Modelle, die in Echtzeit auf Marktveränderungen reagieren. Das bedeutet, Sie arbeiten immer mit einer aktuellen Sicht und können schneller handeln, wenn es wirklich darauf ankommt.";
$s4_img_alt = "$site_name künstliche Intelligenz";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Nutzen Sie $site_name KI für präzise, rechtzeitige Entscheidungen";
$s5_quote = "$site_name analysiert den Markt in Echtzeit und zeigt Ihnen sofort, wo sich Bewegung und Chancen befinden. Das System verarbeitet die Daten für Sie und liefert einsatzbereite Signale: wann einsteigen, wann aussteigen und worauf zu achten ist.";
$s5_p1 = "Sie müssen die Charts nicht den ganzen Tag beobachten. Die Plattform erkennt Veränderungen selbstständig und reagiert schnell auf den Markt, damit Sie keine wichtigen Momente verpassen.";
$s5_p2 = "Die Algorithmen arbeiten 24/7 und erkennen neue Chancen, sobald sie auftreten. Sie erhalten aktuelle Informationen ohne Verzögerungen oder Informationsüberflutung.";
$s5_p3 = "Gleichzeitig bleibt die Sicherheit auf hohem Niveau: Datenschutz, sicherer Zugriff und Handelskontrolle. $site_name eignet sich sowohl für Anfänger als auch für aktive Trader — die Entscheidungen liegen weiterhin bei Ihnen, unterstützt jedoch durch eine solide analytische Grundlage.";
$s5_img_alt = "$site_name finanzielle Automatisierung";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Konsistenter Handel beginnt mit einem organisierten System";
$s6_p1 = "$site_name hilft, Struktur in Ihre Arbeit mit dem Markt zu bringen. Die Plattform schafft einen klaren Rahmen: Sie definieren Ihre Ziele und Ihr Risikoniveau, und das System passt seine Analyse an Ihren Stil an — ohne Chaos und ohne Überlastung.";
$s6_p2 = "Die 24/7-Analyse verwandelt den Datenfluss in einfache, verständliche Signale. Sie sehen nur, was wichtig ist: wo Bewegung ist, wo sich ein Einstieg lohnt und wann es besser ist zu warten. Mit der Zeit werden die Algorithmen präziser und passen sich dem Markt an.";
$s6_item1_title = "Wählen Sie Ihr Tempo: Schneller Handel oder ein langfristiger Ansatz";
$s6_item1_text = "$site_name unterstützt verschiedene Strategien. Für aktiven Handel markiert das System Einstiegspunkte und Preisbewegungen. Für einen längerfristigen Ansatz hilft es Ihnen, Positionen unter Berücksichtigung von Trend und Risiko zu halten.";
$s6_item2_title = "Einstiegspunkte ohne Rätselraten";
$s6_item2_text = "Die Plattform zeigt, wo der Markt am aktivsten ist. Das hilft Ihnen, mit mehr Selbstvertrauen einzusteigen und rechtzeitig auszusteigen, ohne zu improvisieren.";
$s6_item3_title = "Risikomanagement von Anfang an";
$s6_item3_text = "Sie können mögliche Szenarien im Voraus sehen: wo das Risiko niedriger und das Potenzial höher ist. So können Sie Trades planen, bevor die Bewegung überhaupt beginnt.";
$s6_item4_title = "Einsatzbereite Analyse";
$s6_item4_text = "$site_name überfordert Sie nicht mit komplizierter Terminologie. Sie erhalten klare, einsatzbereite Informationen, die Ihnen helfen sollen, schneller und mit mehr Selbstvertrauen zu entscheiden.";
$s6_cta = "Jetzt starten";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Einfache Tools für präzise Entscheidungen mit $site_name";
$s7_quote = "$site_name gibt Ihnen alles, was Sie brauchen, um mit dem Markt zu handeln — ohne technischen Fachjargon oder Informationsüberflutung. Die Plattform analysiert Preisbewegungen, Trends und mögliche Einstiegspunkte selbstständig und zeigt nur, was wirklich wichtig ist.";
$s7_point1 = "Das System hilft zu erkennen, wann sich der Markt wenden könnte, wo starke Bewegungen auftreten und welche Momente am besten für den Ein- oder Ausstieg geeignet sind. Jedes Signal wird vorverarbeitet — Sie müssen keine komplexen Indikatoren beherrschen.";
$s7_point2 = "Es umfasst auch Copy-Trading: Sie können den Entscheidungen erfahrener Trader folgen und diese replizieren, ohne Zeit für eigene Analysen aufzuwenden.";
$s7_point3 = "Die Oberfläche bleibt so einfach wie möglich — jedes Tool wird auf einen Blick verstanden und ist ab dem ersten Moment einsatzbereit.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Finden Sie wichtige Timing-Zonen mit $site_name KI";
$s8_item1 = "Automatische Diversifikation verteilt Mittel auf verschiedene Vermögenswerte, reduziert das Risiko und schützt das Kapital selbst in instabilen Märkten.";
$s8_item2 = "Ein vollständig autonomes System — Sie müssen die Charts nicht beobachten. Die Algorithmen analysieren den Markt und treffen selbstständig Entscheidungen.";
$s8_item3 = "Auszahlungen sind jederzeit möglich — auf Bankkarten, Krypto-Wallets oder elektronische Zahlungssysteme, ohne Verzögerungen.";
$s8_item4 = "Tägliche Berichte zeigen Ihre Ergebnisse und geben Ihnen die volle Kontrolle über die Situation in Echtzeit.";
$s8_item5 = "Flexible Risikostufeneinstellungen lassen Sie eine Strategie wählen, die zu Ihren Zielen passt — von konservativ bis aggressiver.";
$s8_item6 = "Ein Gewinnpotenzial von bis zu 400% macht $site_name zu einem Werkzeug für alle, die ihr Kapital nicht nur bewahren, sondern erheblich vermehren möchten.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Expertenanalyse angetrieben von $site_name";
$s9_quote = "$site_name kombiniert die Kraft von Algorithmen mit Markterfahrung und verwandelt komplexe Daten in klare, leicht verständliche Signale. Das System erkennt Muster und potenzielle Chancen schnell und hilft Ihnen, ohne Informationsüberflutung zu entscheiden.";
$s9_p1 = "Sie erhalten vorverarbeitete Analysen, die sowohl technische Indikatoren als auch Marktverhalten berücksichtigen — damit Sie mit mehr Geschwindigkeit, Vertrauen und Präzision handeln können.";
$s9_img_alt = "$site_name Anlagestrategie";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Was unsere Nutzer sagen";
$review_1_text = "Die Plattform ist sehr intuitiv, und ihre Tools haben mir geholfen, meine Handelsergebnisse zu verbessern.";
$review_2_text = "Schneller Support und wirklich nützliche Lernressourcen — perfekt für Einsteiger.";
$review_3_text = "Anpassbare Charts und schnelle Ausführung — seit Monaten meine erste Wahl.";
$review_4_text = "Die Anmeldung dauerte weniger als fünf Minuten, und das Dashboard zeigt mir genau, wo mein Geld ist.";
$review_5_text = "Mir gefällt, dass die Plattform die Begründung hinter jedem Signal erklärt, statt mir nur Zahlen vorzuwerfen.";
$review_6_text = "Auszahlungen waren bei mir immer schnell, und das Support-Team antwortet tatsächlich innerhalb von Minuten.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Häufig gestellte Fragen zu $site_name";
$faq_q1 = "Kann $site_name Marktveränderungen in Echtzeit erkennen?";
$faq_a1 = "Ja. Es verfolgt Live-Daten, identifiziert Momentum-Verschiebungen in ihren frühen Phasen und erkennt Muster, bevor sie sich vollständig entwickeln, was Nutzern einen zeitlichen Vorteil verschafft.";
$faq_q2 = "Kann das $site_name-Erlebnis angepasst werden?";
$faq_a2 = "Ja. Nutzer können Interessengebiete auswählen, den Detailgrad anpassen und öffentlichen Strategien folgen, die zu ihrem Handelsstil oder Lernbedarf passen.";
$faq_q3 = "Ersetzt $site_name traditionelle Recherchemethoden?";
$faq_a3 = "Nein. Es ergänzt sie, indem es schnell KI-gefilterte Einblicke bietet, während der Nutzer die volle Kontrolle über seine eigene Recherche und Entscheidungen behält.";
$faq_cta = "Jetzt mehr entdecken";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Highlights";
$hl1_emoji = "🤖";
$hl1_title = "Anmeldekosten";
$hl1_desc = "Keine Gebühren für die Registrierung";
$hl2_emoji = "💰";
$hl2_title = "Handelsprovisionen";
$hl2_desc = "Überhaupt keine Kosten";
$hl3_emoji = "📋";
$hl3_title = "Einfachheit der Registrierung";
$hl3_desc = "Die Anmeldung ist schnell und einfach";
$hl4_emoji = "📊";
$hl4_title = "Bildungsschwerpunkt";
$hl4_desc = "Lektionen zu Krypto, Forex-Handel und Investitionen";
$hl5_emoji = "🌎";
$hl5_title = "Verfügbare Länder";
$hl5_desc = "Nicht verfügbar in den USA, in den meisten anderen Ländern verfügbar";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Klug handeln, mit Selbstvertrauen wachsen";
$footnav_about = "Über uns";
$footnav_product = "Produkt";
$footnav_offer = "Angebot";
$footnav_contacts = "Kontakt";
$footnav_faq = "FAQ";
$footnav_privacy = "Datenschutzrichtlinie";
$footnav_conditions = "Nutzungsbedingungen";
$footnav_risk = "Risikowarnung";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name veröffentlicht allgemeines Bildungsmaterial zu Handel, Investitionen, Finanzmärkten und digitalen Vermögenswerten. Artikel, Marktdaten, Diagramme und andere Website-Inhalte dienen ausschließlich Informationszwecken und sollten nicht als Finanz-, Anlage- oder Rechtsberatung betrachtet werden. Obwohl wir uns bemühen, zuverlässige und aktuelle Informationen bereitzustellen, können wir deren Genauigkeit oder Vollständigkeit nicht garantieren und sind nicht verantwortlich für Verluste, die aus dem Vertrauen auf die Inhalte entstehen.<br><br>Handel birgt Risiken, und Kryptowährungen, Forex, CFDs, Aktien und andere Finanzprodukte können erheblich im Wert schwanken. Berücksichtigen Sie Ihre eigenen finanziellen Umstände und Ihre Risikotoleranz, bevor Sie handeln, und holen Sie sich gegebenenfalls professionellen Rat ein. Investieren Sie niemals Mittel, deren Verlust Sie sich nicht leisten können.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Handelsberaterin";
$quiz_text_welcome = "Hallo! Ich bin Sofia, Ihre persönliche Handelsberaterin. Haben Sie ein paar Minuten Zeit, um den besten Plan für Sie zu finden?";
$quiz_text_q1 = "Haben Sie schon einmal gehandelt?";
$quiz_text_a1_yes = "Ja, ich habe Erfahrung";
$quiz_text_a1_no = "Nein, ich bin Anfänger";
$quiz_text_q2 = "Großartig! Wie ist Ihr Vorname, damit ich Ihren Plan personalisieren kann?";
$quiz_text_q3 = "Was ist Ihr Hauptziel beim Handel?";
$quiz_text_a3_yes = "Langfristigen Wohlstand aufbauen";
$quiz_text_a3_no = "Kurzfristiges Einkommen generieren";
$quiz_text_q4 = "Wie viel möchten Sie zu Beginn investieren?";
$quiz_text_a4_1 = "Unter $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Über $1000";
$quiz_text_q5 = "Perfekt. Möchten Sie, dass ich jetzt ein kostenloses Konto für Sie eröffne?";
$quiz_text_a5_yes = "Ja, machen wir das";
$quiz_text_a5_no = "Nicht jetzt";
$quiz_text_loader = "Suche nach Ihrem besten Plan...";
$quiz_text_final_ttl = "Alles ist bereit!";
$quiz_text_processing = "Ihre Angaben werden übermittelt...";
$quiz_text_typing = "tippt...";
$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail";
$quiz_btn_submit = "Kostenloses Konto erhalten";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Startseite";
$bc_about = "Über uns";
$bc_product = "Produkt";
$bc_offer = "Angebot";
$bc_contacts = "Kontakt";
$bc_faq = "FAQ";
$bc_privacy = "Datenschutzrichtlinie";
$bc_conditions = "Nutzungsbedingungen";
$bc_risk = "Risikowarnung";
$bc_sign = "Registrieren";
$bc_thanks = "Vielen Dank";
$bc_sitemap = "Sitemap";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Über $site_name";
$about_meta_description = "Erfahren Sie mehr über die Mission von $site_name: Marktanalysen durch KI-gestützte Tools klarer und zugänglicher zu machen.";
$about_h1 = "Über $site_name";
$about_lead = "$site_name wurde nach einer Idee entwickelt: Handelsentscheidungen sollten auf klaren Informationen basieren, nicht auf Rätselraten.";
$about_p1 = "Wir kombinieren künstliche Intelligenz mit realer Markterfahrung, um komplexe, verrauschte Daten in leicht verständliche und umsetzbare Signale zu verwandeln. Unsere Plattform überwacht die Märkte rund um die Uhr, damit Sie es nicht müssen.";
$about_p2 = "Ob Sie Ihren ersten Trade tätigen oder seit Jahren aktiv an den Märkten sind — $site_name wurde entwickelt, um Sie dort abzuholen, wo Sie stehen, mit Tools, die von einfacher Anleitung bis zu fortschrittlichen Echtzeit-Analysen reichen.";
$about_p3 = "Wir glauben, dass Technologie Ihr Urteilsvermögen unterstützen sollte, nicht ersetzen. Jedes Signal, das $site_name generiert, soll eine Entscheidung informieren, die immer noch vollständig bei Ihnen liegt.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produkt — KI-Marktanalysetools";
$product_meta_description = "Entdecken Sie das $site_name-Produkt: Echtzeit-KI-Marktanalyse, Copy-Trading, Risikokontrollen und automatische Diversifikation.";
$product_h1 = "Das $site_name-Produkt";
$product_lead = "Eine Plattform, die den Markt für Sie liest: Echtzeit-Analyse, Copy-Trading und flexible Risikotools, entwickelt, um Handelsentscheidungen klarer zu machen.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Angebot — Kostenlos loslegen";
$offer_meta_description = "Erfahren Sie, was im aktuellen $site_name-Angebot enthalten ist: kostenlose Registrierung, keine Handelsprovisionen und vollständiger Plattformzugang.";
$offer_h1 = "Unser aktuelles Angebot";
$offer_lead = "Erstellen Sie Ihr Konto kostenlos und schalten Sie die vollständige $site_name-Plattform frei &mdash; keine Anmeldegebühren, keine Handelsprovisionen.";
$offer_li1 = "Keine Gebühren für die Kontoregistrierung";
$offer_li2 = "Keine Provisionen auf Trades";
$offer_li3 = "Voller Zugang zu Echtzeit-KI-Marktanalyse und Copy-Trading";
$offer_li4 = "Auszahlungen jederzeit verfügbar, ohne versteckte Gebühren";
$offer_li5 = "Bildungsressourcen zu Krypto, Forex und Investitionen inbegriffen";
$offer_note = "Die Verfügbarkeit kann je nach Region variieren. Lesen Sie unsere <a class=\"link\" href=\"risk-warning.php\">Risikowarnung</a>, bevor Sie ein Konto finanzieren.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Kontaktieren Sie $site_name — Nehmen Sie Kontakt mit unserem Team auf";
$contacts_meta_description = "Haben Sie eine Frage zu Ihrem $site_name-Konto oder der Plattform? Erreichen Sie unser Support-Team per E-Mail oder senden Sie uns eine Nachricht.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Fragen zu Ihrem Konto, einer Einzahlung oder wie die Plattform funktioniert? Unser Team hilft Ihnen gerne weiter.";
$contacts_email_label = "E-Mail";
$contacts_hours_label = "Support-Zeiten";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typische Antwortzeit";
$contacts_response_value = "Innerhalb von 24 Stunden";
$contacts_form_title = "Senden Sie uns eine Nachricht";
$contacts_form_desc = "Hinterlassen Sie unten Ihre Daten, und ein Mitglied unseres Teams wird sich direkt bei Ihnen melden.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Datenschutzrichtlinie";
$privacy_meta_description = "Erfahren Sie, wie $site_name Ihre persönlichen Daten auf der gesamten Website und Plattform sammelt, verwendet und schützt.";
$privacy_sections = [
    [
        "title" => "1. Einleitung",
        "body" => "Diese Datenschutzrichtlinie erklärt, wie $site_name (\"wir\", \"uns\", \"unser\") die persönlichen Daten von Besuchern und Nutzern von $site_domain (die \"Website\") sammelt, verwendet und schützt. Durch die Nutzung der Website stimmen Sie den unten beschriebenen Praktiken zu.",
    ],
    [
        "title" => "2. Informationen, die wir sammeln",
        "body" => "Wir können Informationen sammeln, die Sie direkt bereitstellen, wie Ihren Namen, Ihre E-Mail-Adresse und Telefonnummer bei der Registrierung oder Einreichung eines Formulars, sowie automatisch gesammelte Informationen, einschließlich Ihrer IP-Adresse, Geräte- und Browsertyp und auf der Website angesehene Seiten.",
    ],
    [
        "title" => "3. Wie wir Ihre Informationen verwenden",
        "body" => "Wir verwenden gesammelte Informationen, um Ihr Konto zu erstellen und zu verwalten, auf Anfragen zu reagieren, Kundensupport zu bieten, die Website und unsere Dienste zu verbessern und, wo zulässig, Updates zu Produkten und Angeboten zu senden. Sie können sich jederzeit von Marketing-Kommunikationen abmelden.",
    ],
    [
        "title" => "4. Cookies &amp; Tracking-Technologien",
        "body" => "Die Website verwendet Cookies und ähnliche Technologien, um Ihre Präferenzen zu merken, Sie angemeldet zu halten und zu verstehen, wie Besucher unsere Seiten nutzen. Sie können Cookies über Ihre Browsereinstellungen deaktivieren, obwohl einige Funktionen dadurch möglicherweise nicht korrekt funktionieren.",
    ],
    [
        "title" => "5. Weitergabe von Informationen",
        "body" => "Wir verkaufen Ihre persönlichen Daten nicht. Wir können Informationen mit vertrauenswürdigen Dienstleistern teilen, die uns beim Betrieb der Website helfen (wie Hosting- oder Analyseanbieter), oder wenn dies gesetzlich vorgeschrieben ist oder zum Schutz unserer rechtlichen Interessen erforderlich ist.",
    ],
    [
        "title" => "6. Datensicherheit",
        "body" => "Wir wenden angemessene technische und organisatorische Maßnahmen an, um Ihre Informationen vor unbefugtem Zugriff, Veränderung oder Verlust zu schützen. Keine Übertragungs- oder Speichermethode ist vollständig sicher, und wir können absolute Sicherheit nicht garantieren.",
    ],
    [
        "title" => "7. Ihre Rechte &amp; Wahlmöglichkeiten",
        "body" => "Je nach Ihrem Standort haben Sie möglicherweise das Recht, auf Ihre persönlichen Daten zuzugreifen, sie zu korrigieren oder deren Löschung zu beantragen, und bestimmten Verwendungen zu widersprechen. Um diese Rechte auszuüben, wenden Sie sich bitte über unsere <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> an uns.",
    ],
    [
        "title" => "8. Datenschutz von Kindern",
        "body" => "Die Website richtet sich nicht an Personen unter 18 Jahren, und wir sammeln nicht wissentlich persönliche Daten von Minderjährigen. Wenn Sie glauben, dass ein Minderjähriger uns persönliche Daten zur Verfügung gestellt hat, kontaktieren Sie uns bitte, damit wir diese entfernen können.",
    ],
    [
        "title" => "9. Änderungen dieser Richtlinie",
        "body" => "Wir können diese Datenschutzrichtlinie von Zeit zu Zeit aktualisieren. Änderungen werden auf dieser Seite mit einem überarbeiteten Gültigkeitsdatum veröffentlicht. Wir empfehlen Ihnen, diese Seite regelmäßig zu überprüfen.",
    ],
    [
        "title" => "10. Kontaktieren Sie uns",
        "body" => "Wenn Sie Fragen zu dieser Datenschutzrichtlinie oder dazu haben, wie Ihre Informationen behandelt werden, wenden Sie sich bitte über unsere <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> an uns oder senden Sie uns eine E-Mail an info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Nutzungsbedingungen";
$conditions_meta_description = "Lesen Sie die Nutzungsbedingungen, die den Zugang zu und die Nutzung der $site_name-Website und Handelsplattform regeln.";
$conditions_sections = [
    [
        "title" => "1. Annahme der Bedingungen",
        "body" => "Durch den Zugriff auf oder die Nutzung von $site_domain (die \"Website\") stimmen Sie zu, an diese Nutzungsbedingungen gebunden zu sein. Wenn Sie mit einem Teil dieser Bedingungen nicht einverstanden sind, nutzen Sie die Website bitte nicht.",
    ],
    [
        "title" => "2. Berechtigung",
        "body" => "Sie müssen mindestens 18 Jahre alt und rechtlich befugt sein, handelsbezogene Dienste in Ihrer Gerichtsbarkeit zu nutzen, um die Website zu verwenden. Durch die Nutzung der Website bestätigen Sie, dass Sie diese Anforderungen erfüllen.",
    ],
    [
        "title" => "3. Beschreibung des Dienstes",
        "body" => "$site_name bietet eine Online-Plattform mit Bildungsinhalten, Marktinformationen und KI-gestützten Analysetools. Nichts auf der Website stellt Finanz-, Anlage-, Steuer- oder Rechtsberatung dar, und alle bereitgestellten Informationen dienen ausschließlich allgemeinen Informationszwecken.",
    ],
    [
        "title" => "4. Nutzerverantwortung",
        "body" => "Sie sind verantwortlich für die Bereitstellung genauer Informationen bei der Registrierung, für die Wahrung der Vertraulichkeit Ihrer Kontodaten und für alle Aktivitäten, die unter Ihrem Konto stattfinden.",
    ],
    [
        "title" => "5. Geistiges Eigentum",
        "body" => "Alle Inhalte auf der Website, einschließlich Text, Grafiken, Logos und Software, sind Eigentum von $site_name oder seinen Lizenzgebern und durch geltendes Recht des geistigen Eigentums geschützt. Sie dürfen diese Inhalte nicht ohne Genehmigung reproduzieren oder verbreiten.",
    ],
    [
        "title" => "6. Keine Finanzberatung",
        "body" => "Inhalte auf der Website dienen ausschließlich Informations- und Bildungszwecken und sollten nicht als Finanzberatung ausgelegt werden. Sie sind allein verantwortlich für Ihre eigenen Handelsentscheidungen und sollten bei Bedarf einen unabhängigen Finanzberater konsultieren. Weitere Informationen finden Sie in unserer <a class=\"link\" href=\"risk-warning.php\">Risikowarnung</a>.",
    ],
    [
        "title" => "7. Haftungsbeschränkung",
        "body" => "Im gesetzlich zulässigen Umfang haftet $site_name nicht für direkte, indirekte, zufällige oder Folgeschäden, die aus Ihrer Nutzung oder Unfähigkeit zur Nutzung der Website oder verlinkter Drittanbieterdienste entstehen.",
    ],
    [
        "title" => "8. Kündigung",
        "body" => "Wir behalten uns das Recht vor, Ihren Zugang zur Website nach eigenem Ermessen ohne Vorankündigung zu sperren oder zu beenden, wenn Verhalten vorliegt, das unserer Ansicht nach gegen diese Nutzungsbedingungen verstößt oder anderweitig anderen Nutzern oder der Website schadet.",
    ],
    [
        "title" => "9. Änderungen dieser Bedingungen",
        "body" => "Wir können diese Nutzungsbedingungen jederzeit überarbeiten. Die fortgesetzte Nutzung der Website nach Veröffentlichung von Änderungen stellt die Annahme der aktualisierten Bedingungen dar.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Fragen zu diesen Nutzungsbedingungen können an unser Team über die <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> oder per E-Mail an info@$site_domain gerichtet werden.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikowarnung — Offenlegung von Handelsrisiken";
$risk_meta_description = "Lesen Sie die $site_name-Risikowarnung, bevor Sie handeln: Risiken des Kryptowährungsmarktes, Hebelwirkung, Liquidität, Cybersicherheit und regulatorische Überlegungen.";
$risk_title = "Risikowarnung";
$risk_intro = "Das Verständnis von Risiken ist der erste Schritt zu selbstbewusstem Handel.";
$risk_ai_title = "Wie unser KI-System hilft, Risiken zu managen:";
$risk_ai_1_title = "Algorithmische Effizienz &amp; emotionsloser Handel:";
$risk_ai_1_text = "Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zu optimalen Zeitpunkten auszuführen.";
$risk_ai_2_title = "Datengesteuerte Strategien:";
$risk_ai_2_text = "Strategien basieren auf verifizierten Marktmustern und Echtzeitanalyse statt auf Rätselraten.";
$risk_ai_3_title = "Flexible Einstellungen &amp; volle Kontrolle:";
$risk_ai_3_text = "Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Salden und Trades transparent auf Ihrem Dashboard ohne versteckte Gebühren und uneingeschränkte Auszahlungen.";
$risk_disclaimer = "<strong>Haftungsausschluss:</strong> Handel birgt immer Risiken. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können aufgrund von Softwarefehlern oder unerwarteten Marktereignissen ausfallen und erfordern eine Überwachung durch den Nutzer. Vergangene Ergebnisse sind kein Indikator für zukünftige Ergebnisse. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und bietet keine Finanzberatung.";
$risk_s1_title = "1. Allgemeine &amp; Kryptowährungsmarktrisiken";
$risk_s1_text = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die 24/7 mit minimaler behördlicher Aufsicht in den meisten Rechtsordnungen betrieben werden.";
$risk_s1_li1 = "Werte können innerhalb kurzer Zeiträume dramatisch schwanken, was potenziell zu einem vollständigen Verlust des investierten Kapitals führen kann.";
$risk_s1_li2 = "Marktwerte können erheblich durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder breitere makroökonomische Ereignisse beeinflusst werden.";
$risk_s1_li3 = "Einige Vermögenswerte können vollständig ihren gesamten Wert verlieren. Investieren Sie nur Mittel, deren Verlust Sie sich leisten können.";
$risk_s2_title = "2. Ausführungs-, Liquiditäts- &amp; Hebelrisiken";
$risk_s2_li1_title = "Marktvolatilität &amp; Liquidität:";
$risk_s2_li1_text = "Extreme Preisbewegungen (10–20%+ täglich) oder niedrige Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und schwerwiegender Ausführungsabweichung führen. Stop-Loss-Orders können Verlustgrenzen unter extremen Bedingungen nicht garantieren.";
$risk_s2_li2_title = "Hebel- &amp; Margenrisiken:";
$risk_s2_li2_text = "Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, was bedeutet, dass Sie mehr verlieren können als Ihre ursprüngliche Einlage. Etwa 70–80% der Konten von Kleinanlegern verlieren Geld beim Handel mit gehebelten Produkten.";
$risk_s3_title = "3. Technische, Cybersicherheits- &amp; Drittanbieterrisiken";
$risk_s3_li1_title = "Technische Faktoren:";
$risk_s3_li1_text = "Online-Handel birgt inhärent Risiken wie Internetverbindungsabbrüche, Hardware-/Softwarefehler und Nichtverfügbarkeit des Dienstes.";
$risk_s3_li2_title = "Cybersicherheit:";
$risk_s3_li2_text = "Kryptowährungskonten sind häufige Ziele für Phishing, Malware und Hacking. Transaktionen sind unwiderruflich; die Kompromittierung Ihrer Zugangsdaten kann zu dauerhaftem Verlust führen.";
$risk_s3_li3_title = "Drittanbieterplattformen:";
$risk_s3_li3_text = "Diese Website kann Nutzer mit Drittanbieterplattformen verbinden. Wir kontrollieren, unterstützen oder garantieren nicht deren Sicherheit, Betrieb oder Zahlungsfähigkeit. Führen Sie stets Ihre eigene gründliche Sorgfaltsprüfung durch, bevor Sie Mittel auf externen Plattformen einzahlen.";
$risk_s4_title = "4. Regulatorische, steuerliche &amp; abschließende Bestimmungen";
$risk_s4_li1_title = "Rechtliche Compliance &amp; Steuern:";
$risk_s4_li1_text = "Regulatorische Rahmenbedingungen variieren stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich, sicherzustellen, dass ihre Handelsaktivitäten den lokalen Gesetzen entsprechen, und ihre eigenen steuerlichen Verpflichtungen zu erfüllen.";
$risk_s4_li2_title = "Keine Gewinngarantien:";
$risk_s4_li2_text = "Es gibt keinen \"sicheren\" oder risikofreien Krypto-Handel. Alle Ertragszahlen oder Leistungsbeispiele sind rein hypothetisch.";
$risk_s4_li3_title = "Eignung:";
$risk_s4_li3_text = "Wenn Sie die Risiken nicht vollständig verstehen, auf notwendige Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel nichts für Sie. Konsultieren Sie bei Unsicherheit einen unabhängigen lizenzierten Finanzberater.";
$risk_contact = "<strong>Kontakt:</strong> Bei Fragen zu dieser Erklärung oder zur Einreichung einer Anfrage wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrieren | $site_name — Erstellen Sie Ihr kostenloses Konto";
$sign_meta_description = "Erstellen Sie Ihr kostenloses $site_name-Konto in wenigen Minuten und beginnen Sie klüger zu handeln mit KI-gestützter Marktanalyse.";
$sign_h1 = "Erstellen Sie Ihr kostenloses Konto";
$sign_lead = "Treten Sie $site_name in wenigen Minuten bei. Füllen Sie unten Ihre Daten aus, um loszulegen.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Vielen Dank | $site_name";
$thanks_h1 = "Vielen Dank!";
$thanks_text = "Ihre Daten wurden empfangen. Ein Mitglied des $site_name-Teams wird sich in Kürze bei Ihnen melden, um Ihnen den Einstieg zu erleichtern.";
$thanks_btn = "Zurück zur Startseite";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Durchsuchen Sie jede Seite der $site_name-Website, einschließlich der Handelsplattform, des Angebots, des Supports und der rechtlichen Seiten.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Jede Seite von $site_name an einem Ort.";

