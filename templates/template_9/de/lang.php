<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ============================================================
// DE TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Offizielle Website | Handelsplattform";
$home_meta_description = "$site_name bietet eine benutzerfreundliche Handelsplattform mit fortschrittlichen Markttools, Echtzeit-Einblicken und praktischen Funktionen, die den Online-Handel zugänglicher und informierter machen.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Plattform";
$hero_subtitle = "Unterstützt Millionen weltweit auf ihrer Reise mit digitalen Vermögenswerten";
$hero_badge_title = "Zufriedene Mitglieder";
$hero_badge_subtitle = "Von Millionen geliebt";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Beginnen Sie Noch Heute mit dem Handel";
$form_desc = "Bereit für den nächsten Schritt? Registrieren Sie sich jetzt und machen Sie den ersten Schritt in Richtung finanzieller Freiheit. Beginnen Sie mit nur $app_price $app_currency — Zugang zu jedem Handelswerkzeug, Echtzeit-Marktdaten und vollem Plattformzugang ab dem ersten Tag.";
$form_fname_placeholder = "Name";
$form_lname_placeholder = "Nachname";
$form_email_placeholder = "E-Mail";
$form_btn_submit = "Registrieren";
$form_disclaimer_text = "Durch die Eingabe Ihrer persönlichen Daten und das Klicken auf die Schaltfläche stimmen Sie der <a class=\"link\" href=\"privacy.php\">Datenschutzerklärung</a> und den <a class=\"link\" href=\"conditions.php\">Nutzungsbedingungen</a> der Website zu.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SICHER";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Lernen Sie die Plattform Kennen";
$stats_title = "Eine kurze Einführung in intelligenteren Handel";
$stat_1_value = "154+";
$stat_1_label = "Abgedeckte Länder";
$stat_2_value = "29 Millionen";
$stat_2_label = "Globale Investoren";
$stat_3_value = "635+";
$stat_3_label = "Coins";
$stat_4_value = "3,26 Milliarden $";
$stat_4_label = "24h-Handelsvolumen";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Warum $site_name?";
$why_title = "Gründe für die Wahl";
$why_1_title = "Schnell &amp; Einfach";
$why_1_text = "Kaufen und verkaufen Sie Ihre bevorzugten Kryptowährungen in Sekunden.";
$why_2_title = "Sicher &amp; Geschützt";
$why_2_text = "Wir nutzen modernste Technologie, um Ihre Gelder und Daten zu schützen.";
$why_3_title = "Für Jeden Offen";
$why_3_text = "Handeln Sie rund um die Uhr auf unserer Plattform, wann und wo immer Sie möchten.";
$why_4_title = "Profi-Tools";
$why_4_text = "Von einfachen bis zu professionellen Handelsfunktionen haben wir alles.";
$why_5_title = "Trends &amp; Einblicke";
$why_5_text = "Erhalten Sie die neuesten Krypto-Nachrichten, Einblicke und Trends von Experten.";
$why_6_title = "24/7-Support";
$why_6_text = "Unser freundliches Support-Team steht Ihnen jederzeit zur Verfügung.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "So Funktioniert Es";
$how_title = "Einfache Schritte für den Handelsstart";
$how_1_title = "Registrieren";
$how_1_text = "Erstellen Sie ein Konto und beginnen Sie innerhalb von Minuten mit dem Handel.";
$how_1_btn = "Handel Starten";
$how_2_title = "Geld Einzahlen";
$how_2_text = "Zahlen Sie mindestens $app_price $app_currency auf Ihr Konto ein, um vollen Handelszugang freizuschalten. Wählen Sie aus mehreren Zahlungsmethoden und lassen Sie Ihr Portfolio schon heute wachsen.";
$how_2_note = "Geld hinzufügen....";
$how_3_title = "Handel Starten";
$how_3_text = "Erkunden Sie den Markt und handeln Sie auf Ihre Weise.";
$how_3_note = "Kaufen und HODLen";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Rechner";
$calc_title = "Sehen Sie, wie viel Zeit und Potenzial Sie ungenutzt lassen";
$calc_volume_label = "Monatliches Handelsvolumen";
$calc_trades_label = "Trades pro Woche";
$calc_time_label = "Zeit, die Sie sparen könnten";
$calc_boost_label = "Mögliche Volumensteigerung";
$calc_btn = "Handel Starten";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funktionen";
$features_title = "Die Stärke von $site_name";
$feature_1_title = "Spot-Handel";
$feature_1_text = "Maximieren Sie Ihr Handelspotenzial mit Profi-Tools.";
$feature_2_title = "Krypto Kaufen";
$feature_2_text = "Kaufen Sie Krypto mit Karten oder Banken.";
$feature_3_title = "Krypto-Derivate";
$feature_3_text = "Einfacher, fortschrittlicher Terminhandel.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Vermehren Sie Ihr Vermögen mühelos.";
$feature_5_title = "Trading-Bot";
$feature_5_text = "Höhere Gewinne, selbst während Sie schlafen.";
$feature_6_title = "Margin-Handel";
$feature_6_text = "Leihen, handeln und mühelos zurückzahlen.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Was Unsere Nutzer Sagen";
$review_1_text = "Die Plattform ist sehr einfach zu bedienen, und ich habe seit meinem Einstieg stetige Fortschritte gesehen. Das Engagement und die frischen Ideen des Teams lassen mich gespannt auf das sein, was als Nächstes kommt!";
$review_1_role = "Trader";
$review_2_text = "$site_name bietet eine reibungslose und intuitive Handelserfahrung. Ich konnte sofort mit dem Kauf und Handel von Krypto beginnen. Die Benutzeroberfläche ist einfach zu bedienen, und die Transaktionsgeschwindigkeiten sind hervorragend!";
$review_2_role = "Neuer Trader";
$review_3_text = "Ich vertraue dieser Plattform bei der Verwaltung meiner Krypto-Investitionen. Ihre Sicherheitsfunktionen geben mir Vertrauen, und ich hatte noch nie Probleme mit Auszahlungen oder Einzahlungen. Sie gehört zu den zuverlässigsten Börsen, die ich genutzt habe.";
$review_3_role = "Profi-Trader";
$review_4_text = "Wann immer ich Fragen hatte, war das Kundensupport-Team prompt und hilfsbereit. Sie kümmern sich wirklich um ihre Nutzer und machen jedes Handelserlebnis reibungslos und unkompliziert.";
$review_4_role = "Erfahrener Trader";
$review_5_text = "Als Anfänger fand ich $site_name sehr einfach zu bedienen. Was wirklich heraussticht, ist die Bandbreite an fortschrittlichen Tools für erfahrenere Trader. Es ist eine solide Option für jeden, der sein Portfolio aufbauen möchte!";
$review_5_role = "Community-Trader";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "FAQs";
$faq_title = "Häufig Gestellte Fragen";
$faq_q1 = "Was ist $site_name?";
$faq_a1 = "$site_name ist eine Krypto-Börse, auf der Nutzer problemlos eine breite Palette von Coins handeln können, darunter Bitcoin, Ethereum und andere beliebte Kryptowährungen.";
$faq_q2 = "Wie Sicher Ist $site_name für den Krypto-Handel?";
$faq_a2 = "Die Plattform bietet Sicherheit durch fortschrittliche Technologie und 1:1-Deckung der Vermögenswerte durch Proof of Reserves.";
$faq_q3 = "Wie tätige ich eine Einzahlung?";
$faq_a3 = "$site_name bietet mehrere Einzahlungsoptionen, darunter Krypto-Einzahlung, Fiat-Einzahlung, P2P-Handel und One-Click-Kauf.";
$faq_q4 = "Benötige Ich Erfahrung, um $site_name zu Nutzen?";
$faq_a4 = "Nein, Sie benötigen keinerlei Erfahrung. Die benutzerfreundliche Oberfläche der Plattform macht sie für jeden zugänglich, vom Anfänger bis zum fortgeschrittenen Trader.";
$faq_q5 = "Gibt es versteckte Gebühren oder Kosten?";
$faq_a5 = "Überhaupt nicht. Es gibt keine Registrierungsgebühren, Abonnementkosten oder versteckte Gebühren jeglicher Art. Sie sehen immer den genauen Transaktionsbetrag vor der Bestätigung. Die Einnahmen stammen aus Premium-Funktionen und Börsenpartnerschaften, nicht aus der Abschöpfung von Nutzergeldern.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Beginnen Sie Noch Heute mit dem Handel";
$cta_desc = "Bereit für den nächsten Schritt? Registrieren Sie sich jetzt und machen Sie den ersten Schritt in Richtung finanzieller Unabhängigkeit.";
$cta_btn = "Registrieren";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Kernfunktionen der $site_name Handelsplattform";
$table_1_label = "🤖 Plattform-Technologie";
$table_1_val = "Fortschrittliche KI-Handels-Engine";
$table_2_label = "💳 Finanzierungsmethoden";
$table_2_val = "Gängige Kreditkarten, Banküberweisung, PayPal";
$table_3_label = "📱 Plattformzugang";
$table_3_val = "Kompatibilität mit mehreren Geräten";
$table_4_label = "🚀 Leistungsrate";
$table_4_val = "85% Genauigkeit";
$table_5_label = "📊 Handelsinstrumente";
$table_5_val = "Aktien, Forex, Rohstoffe, Edelmetalle, CFDs, Kryptowährungen und mehr…";
$table_6_label = "✍️ Kontoeinrichtung";
$table_6_val = "Schnell und effizient";
$table_7_label = "📞 Kundensupport";
$table_7_val = "24/7 professionelle Unterstützung";

// Reviews summary card
$summary_title = "$site_name Bewertungen";
$summary_badge = "Vertrauenswürdig";
$summary_desc = "Eine leistungsstarke, benutzerfreundliche Handelsplattform mit solider Automatisierung und Bildungsressourcen.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Klug handeln, schnell wachsen";
$footer_community_label = "Community";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produkt";
$footnav_offer = "Angebot";
$footnav_contacts = "Kontakt";
$footnav_faq = "FAQ";
$footnav_privacy = "Datenschutzerklärung";
$footnav_conditions = "Nutzungsbedingungen";
$footnav_risk = "Risikowarnung";
$footer_disclaimer = "$site_name teilt Bildungsressourcen und marktbezogenes Material, um Besuchern zu helfen, Handel, Investitionen und digitale Finanzprodukte besser zu verstehen. Die auf der Website präsentierten Informationen, wie Marktkommentare, Vermögenspreise, Charts, Leitfäden und analytische Inhalte, dienen allgemeinen Informationszwecken und stellen keine Finanz-, Anlage-, Steuer- oder Rechtsberatung dar. Obwohl angemessene Anstrengungen unternommen werden, um genaue und relevante Informationen bereitzustellen, übernimmt $site_name keine Gewährleistung für die Vollständigkeit, Genauigkeit oder Aktualität der Inhalte und kann nicht für Entscheidungen oder Verluste verantwortlich gemacht werden, die aus deren Nutzung resultieren.<br><br>Die Teilnahme an Finanzmärkten birgt inhärente Risiken. Kryptowährungen, Forex, CFDs, Aktien und andere Handelsinstrumente können erhebliche Preisschwankungen erfahren, und es können Verluste entstehen. Individuelle Umstände und Risikotoleranz variieren, daher sollten Nutzer eigene Recherchen durchführen und in Erwägung ziehen, sich von einem qualifizierten Finanzexperten beraten zu lassen, bevor sie Gelder einsetzen. Handeln Sie niemals mit Geld, dessen Verlust Sie sich nicht leisten können.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Handelsberaterin";
$quiz_text_welcome = "Hallo! Ich bin Maya, Ihre persönliche Handelsberaterin. Haben Sie ein paar Minuten Zeit, um den besten Plan für Sie zu finden?";
$quiz_text_q1 = "Haben Sie schon einmal mit Kryptowährungen gehandelt?";
$quiz_text_a1_yes = "Ja, ich habe Erfahrung";
$quiz_text_a1_no = "Nein, ich bin Anfänger";
$quiz_text_q2 = "Großartig! Wie ist Ihr Vorname, damit ich Ihren Plan personalisieren kann?";
$quiz_text_q3 = "Was ist Ihr Hauptziel beim Handel?";
$quiz_text_a3_yes = "Langfristigen Wohlstand aufbauen";
$quiz_text_a3_no = "Kurzfristiges Einkommen generieren";
$quiz_text_q4 = "Mit wie viel möchten Sie beginnen?";
$quiz_text_a4_1 = "Unter $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Über $1000";
$quiz_text_q5 = "Perfekt. Möchten Sie, dass ich jetzt ein kostenloses Konto für Sie eröffne?";
$quiz_text_a5_yes = "Ja, lass es uns tun";
$quiz_text_a5_no = "Nicht jetzt";
$quiz_text_loader = "Finde Ihren besten Plan...";
$quiz_text_final_ttl = "Alles bereit!";
$quiz_text_processing = "Ihre Daten werden übermittelt...";
$quiz_text_typing = "schreibt...";
$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail";
$quiz_btn_submit = "Mein Kostenloses Konto Erhalten";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risikowarnung — Offenlegung des Handelsrisikos";
$risk_meta_description = "Lesen Sie die Risikowarnung von $site_name, bevor Sie handeln: Kryptowährungsmarktrisiken, Hebelwirkung, Liquidität, Cybersicherheit und regulatorische Überlegungen.";
$risk_title = "Risikowarnung";
$risk_intro = "Das Verständnis der Risiken ist der erste Schritt zu selbstbewusstem Handel.";
$risk_ai_title = "Wie Unser KI-System beim Risikomanagement Hilft:";
$risk_ai_1_title = "Algorithmische Effizienz &amp; Emotionsloser Handel:";
$risk_ai_1_text = "Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zu optimalen Zeitpunkten auszuführen.";
$risk_ai_2_title = "Datengesteuerte Strategien:";
$risk_ai_2_text = "Strategien basieren auf verifizierten Marktmustern und Echtzeitanalysen anstatt auf Vermutungen.";
$risk_ai_3_title = "Flexible Einstellungen &amp; Volle Kontrolle:";
$risk_ai_3_text = "Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Salden und Trades transparent auf Ihrem Dashboard, ohne versteckte Gebühren und ohne Einschränkungen bei Auszahlungen.";
$risk_disclaimer = "<strong>Haftungsausschluss:</strong> Handel birgt stets ein Risiko. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können aufgrund von Softwarefehlern oder unerwarteten Marktereignissen versagen und erfordern eine Überwachung durch den Nutzer. Vergangene Ergebnisse sind kein Indikator für zukünftige Resultate. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und bietet keine Finanzberatung.";
$risk_s1_title = "1. Allgemeine &amp; Kryptowährungsmarktrisiken";
$risk_s1_text = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die rund um die Uhr mit minimaler regulatorischer Aufsicht in den meisten Rechtsräumen agieren.";
$risk_s1_li1 = "Werte können innerhalb kurzer Zeiträume dramatisch schwanken, was möglicherweise zu einem vollständigen Verlust des investierten Kapitals führen kann.";
$risk_s1_li2 = "Marktwerte können stark durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder breitere makroökonomische Ereignisse beeinflusst werden.";
$risk_s1_li3 = "Einige Vermögenswerte können ihren gesamten Wert vollständig verlieren. Investieren Sie nur Gelder, deren Verlust Sie sich leisten können.";
$risk_s2_title = "2. Ausführungs-, Liquiditäts- &amp; Hebelwirkungsrisiken";
$risk_s2_li1_title = "Marktvolatilität &amp; Liquidität:";
$risk_s2_li1_text = "Extreme Preisbewegungen (10-20%+ täglich) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und schwerwiegender Ausführungsverschiebung führen. Stop-Loss-Orders können unter extremen Bedingungen keine Verlustgrenzen garantieren.";
$risk_s2_li2_title = "Hebelwirkungs- &amp; Margin-Risiken:";
$risk_s2_li2_text = "Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, was bedeutet, dass Sie mehr verlieren können als Ihre ursprüngliche Einzahlung. <em>Etwa 70-80% der Konten von Kleinanlegern verlieren Geld beim Handel mit gehebelten Produkten.</em>";
$risk_s3_title = "3. Technische, Cybersicherheits- &amp; Drittparteirisiken";
$risk_s3_li1_title = "Technische Faktoren:";
$risk_s3_li1_text = "Der Online-Handel birgt inhärente Risiken wie Internetausfälle, Hardware-/Softwarefehler und Nichtverfügbarkeit des Dienstes.";
$risk_s3_li2_title = "Cybersicherheit:";
$risk_s3_li2_text = "Kryptowährungskonten sind häufige Ziele von Phishing, Malware und Hacking. Transaktionen sind unwiderruflich; die Kompromittierung Ihrer Zugangsdaten kann zu einem dauerhaften Verlust führen.";
$risk_s3_li3_title = "Drittanbieter-Plattformen:";
$risk_s3_li3_text = "Diese Website kann Nutzer mit Drittanbieter-Plattformen verbinden. Wir kontrollieren, unterstützen oder garantieren nicht deren Sicherheit, Betrieb oder Solvenz. Führen Sie stets Ihre eigene Sorgfaltsprüfung durch, bevor Sie Gelder auf externen Plattformen einzahlen.";
$risk_s4_title = "4. Regulatorische, Steuer- &amp; Schlussbestimmungen";
$risk_s4_li1_title = "Rechtliche Compliance &amp; Steuern:";
$risk_s4_li1_text = "Regulatorische Rahmenbedingungen variieren stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich, sicherzustellen, dass ihre Handelsaktivitäten den lokalen Gesetzen entsprechen, und ihre eigenen Steuerpflichten zu erfüllen.";
$risk_s4_li2_title = "Keine Gewinngarantien:";
$risk_s4_li2_text = "Es gibt keinen \"sicheren\" oder risikofreien Kryptohandel. Alle angegebenen Renditezahlen oder Leistungsbeispiele sind rein hypothetisch.";
$risk_s4_li3_title = "Eignung:";
$risk_s4_li3_text = "Wenn Sie die Risiken nicht vollständig verstehen, auf essentielle Gelder angewiesen sind oder mit geliehenem Geld handeln, ist der Kryptohandel nicht für Sie geeignet. Konsultieren Sie im Zweifelsfall einen unabhängigen, lizenzierten Finanzberater.";
$risk_contact = "<strong>Kontakt:</strong> Bei Fragen zu dieser Erklärung oder um eine Anfrage zu stellen, wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Startseite";
$bc_product = "Produkt";
$bc_offer = "Angebot";
$bc_contacts = "Kontakt";
$bc_faq = "FAQ";
$bc_privacy = "Datenschutzerklärung";
$bc_conditions = "Nutzungsbedingungen";
$bc_risk = "Risikowarnung";
$bc_sign = "Registrieren";
$bc_sitemap = "Sitemap";
$bc_thanks = "Danke";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Produkt — Handelswerkzeuge &amp; Plattformfunktionen";
$product_meta_description = "Entdecken Sie das $site_name-Produkt: Spot-Handel, Krypto-Derivate, ein Trading-Bot, Margin-Handel und mehr, alles auf einer schnellen und sicheren Plattform aufgebaut.";
$product_h1 = "Das $site_name Handelsprodukt";
$product_lead = "Eine Plattform, jedes Werkzeug, das ein Trader braucht: von Ihrem ersten Spot-Trade bis hin zu automatisierten Strategien und Margin-Positionen — $site_name hält das Erlebnis schnell, sicher und leicht verständlich.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Angebot — Handel Ab $$app_price Starten";
$offer_meta_description = "Sehen Sie, was im aktuellen $site_name-Angebot enthalten ist: eine niedrige Mindesteinzahlung von $$app_price, voller Plattformzugang und keine versteckten Gebühren.";
$offer_h1 = "Unser Aktuelles Angebot";
$offer_lead = "Beginnen Sie mit nur <strong>$$app_price $app_currency</strong> und schalten Sie die volle $site_name-Plattform ab dem ersten Tag frei &mdash; jedes Werkzeug, jeder Markt, keine versteckten Kosten.";
$offer_li1 = "Mindesteinzahlung von nur $$app_price $app_currency zur Aktivierung Ihres Kontos";
$offer_li2 = "Voller Zugang zu Spot-Handel, Derivaten, Margin und dem Trading-Bot";
$offer_li3 = "Mehrere Finanzierungsmethoden, einschließlich Karten und Banküberweisung";
$offer_li4 = "Keine Registrierungsgebühren, keine Abonnementkosten, keine versteckten Gebühren";
$offer_li5 = "24/7-Kundensupport bei Ihrem Einstieg";
$offer_note = "Einzahlungsbeträge und verfügbare Zahlungsmethoden können je nach Region variieren. Lesen Sie unsere <a class=\"link\" href=\"risk-warning.php\">Risikowarnung</a>, bevor Sie ein Konto finanzieren.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Kontaktieren Sie $site_name — Nehmen Sie Kontakt mit Unserem Team auf";
$contacts_meta_description = "Haben Sie eine Frage zu Ihrem $site_name-Konto oder der Plattform? Erreichen Sie unser Support-Team per E-Mail oder senden Sie uns eine Nachricht, und wir melden uns bei Ihnen zurück.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Fragen zu Ihrem Konto, einer Einzahlung oder wie die Plattform funktioniert? Unser Team ist hier, um zu helfen.";
$contacts_email_label = "E-Mail";
$contacts_hours_label = "Support-Zeiten";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typische Antwortzeit";
$contacts_response_value = "Innerhalb von 24 Stunden";
$contacts_form_title = "Senden Sie Uns Eine Nachricht";
$contacts_form_desc = "Hinterlassen Sie unten Ihre Daten, und ein Mitglied unseres Teams wird sich direkt bei Ihnen melden.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name FAQ — Häufig Gestellte Fragen";
$faq_meta_description = "Antworten auf die häufigsten Fragen zur Erstellung eines $site_name-Kontos, zur Einzahlung, zur Plattformsicherheit und zu Gebühren.";
$faq_page_lead = "Alles, was Sie wissen müssen, bevor Sie mit dem Handel beginnen. Sie finden Ihre Antwort nicht? <a class=\"link\" href=\"contacts.php\">Kontaktieren Sie unser Team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Datenschutzerklärung";
$privacy_meta_description = "Erfahren Sie, wie $site_name Ihre persönlichen Daten auf der gesamten Website und Plattform sammelt, verwendet und schützt.";
$privacy_sections = [
    [
        "title" => "1. Einführung",
        "body" => "Diese Datenschutzerklärung erläutert, wie $site_name (\"wir\", \"uns\", \"unser\") die persönlichen Daten von Besuchern und Nutzern von $site_domain (die \"Website\") sammelt, verwendet und schützt. Durch die Nutzung der Website stimmen Sie den unten beschriebenen Praktiken zu.",
    ],
    [
        "title" => "2. Informationen, die Wir Sammeln",
        "body" => "Wir können Informationen sammeln, die Sie direkt bereitstellen, wie Ihren Namen, Ihre E-Mail-Adresse und Telefonnummer bei der Registrierung oder Übermittlung eines Formulars, sowie automatisch gesammelte Informationen, einschließlich Ihrer IP-Adresse, Geräte- und Browsertyp und angesehener Seiten auf der Website.",
    ],
    [
        "title" => "3. Wie Wir Ihre Informationen Verwenden",
        "body" => "Wir verwenden gesammelte Informationen, um Ihr Konto zu erstellen und zu verwalten, auf Anfragen zu antworten, Kundensupport zu bieten, die Website und unsere Dienste zu verbessern und, sofern zulässig, Updates zu Produkten und Angeboten zu senden. Sie können sich jederzeit von Marketingkommunikation abmelden.",
    ],
    [
        "title" => "4. Cookies &amp; Tracking-Technologien",
        "body" => "Die Website verwendet Cookies und ähnliche Technologien, um sich Ihre Präferenzen zu merken, Sie angemeldet zu halten und zu verstehen, wie Besucher unsere Seiten nutzen. Sie können Cookies über Ihre Browsereinstellungen deaktivieren, obwohl einige Funktionen dadurch möglicherweise nicht korrekt funktionieren.",
    ],
    [
        "title" => "5. Weitergabe von Informationen",
        "body" => "Wir verkaufen Ihre persönlichen Daten nicht. Wir können Informationen mit vertrauenswürdigen Dienstleistern teilen, die uns beim Betrieb der Website unterstützen (wie Hosting- oder Analyseanbieter), oder wenn dies gesetzlich vorgeschrieben ist oder zum Schutz unserer rechtlichen Ansprüche erforderlich ist.",
    ],
    [
        "title" => "6. Datensicherheit",
        "body" => "Wir wenden angemessene technische und organisatorische Maßnahmen an, um Ihre Informationen vor unbefugtem Zugriff, Änderung oder Verlust zu schützen. Keine Übertragungs- oder Speichermethode ist vollständig sicher, und wir können keine absolute Sicherheit garantieren.",
    ],
    [
        "title" => "7. Ihre Rechte &amp; Wahlmöglichkeiten",
        "body" => "Je nach Ihrem Standort haben Sie möglicherweise das Recht, auf Ihre persönlichen Daten zuzugreifen, sie zu korrigieren oder deren Löschung zu verlangen, sowie bestimmten Verwendungen zu widersprechen. Um diese Rechte auszuüben, wenden Sie sich bitte über unsere <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> an uns.",
    ],
    [
        "title" => "8. Datenschutz für Kinder",
        "body" => "Die Website richtet sich nicht an Personen unter 18 Jahren, und wir sammeln nicht wissentlich persönliche Daten von Minderjährigen. Wenn Sie glauben, dass ein Minderjähriger uns persönliche Daten zur Verfügung gestellt hat, kontaktieren Sie uns bitte, damit wir diese entfernen können.",
    ],
    [
        "title" => "9. Änderungen an dieser Richtlinie",
        "body" => "Wir können diese Datenschutzerklärung von Zeit zu Zeit aktualisieren. Etwaige Änderungen werden auf dieser Seite mit einem überarbeiteten Wirksamkeitsdatum veröffentlicht. Wir empfehlen Ihnen, diese Seite regelmäßig zu überprüfen.",
    ],
    [
        "title" => "10. Kontaktieren Sie Uns",
        "body" => "Wenn Sie Fragen zu dieser Datenschutzerklärung oder zur Handhabung Ihrer Informationen haben, wenden Sie sich bitte über unsere <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> an uns oder senden Sie uns eine E-Mail an info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
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
        "body" => "Sie müssen mindestens 18 Jahre alt sein und rechtlich berechtigt sein, handelsbezogene Dienstleistungen in Ihrer Rechtsordnung zu nutzen, um die Website zu verwenden. Durch die Nutzung der Website bestätigen Sie, dass Sie diese Anforderungen erfüllen.",
    ],
    [
        "title" => "3. Beschreibung des Dienstes",
        "body" => "$site_name bietet eine Online-Plattform mit Bildungsinhalten, Marktinformationen und Handelswerkzeugen. Nichts auf der Website stellt eine Finanz-, Anlage-, Steuer- oder Rechtsberatung dar, und alle bereitgestellten Informationen dienen ausschließlich allgemeinen Informationszwecken.",
    ],
    [
        "title" => "4. Nutzerverantwortlichkeiten",
        "body" => "Sie sind dafür verantwortlich, bei der Registrierung genaue Informationen bereitzustellen, die Vertraulichkeit Ihrer Kontoanmeldedaten zu wahren und für alle Aktivitäten, die unter Ihrem Konto stattfinden.",
    ],
    [
        "title" => "5. Geistiges Eigentum",
        "body" => "Alle Inhalte auf der Website, einschließlich Text, Grafiken, Logos und Software, sind Eigentum von $site_name oder seinen Lizenzgebern und durch geltende Gesetze zum geistigen Eigentum geschützt. Sie dürfen diese Inhalte nicht ohne Genehmigung reproduzieren oder verbreiten.",
    ],
    [
        "title" => "6. Keine Finanzberatung",
        "body" => "Inhalte auf der Website dienen ausschließlich Informations- und Bildungszwecken und sollten nicht als Finanzberatung ausgelegt werden. Sie sind allein für Ihre eigenen Handelsentscheidungen verantwortlich und sollten bei Bedarf einen unabhängigen Finanzberater konsultieren. Weitere Informationen finden Sie in unserer <a class=\"link\" href=\"risk-warning.php\">Risikowarnung</a>.",
    ],
    [
        "title" => "7. Haftungsbeschränkung",
        "body" => "Im maximal gesetzlich zulässigen Umfang haftet $site_name nicht für direkte, indirekte, zufällige oder Folgeschäden, die aus Ihrer Nutzung oder Unfähigkeit zur Nutzung der Website oder verlinkter Dienste Dritter entstehen.",
    ],
    [
        "title" => "8. Kündigung",
        "body" => "Wir behalten uns das Recht vor, Ihren Zugang zur Website nach eigenem Ermessen ohne Vorankündigung auszusetzen oder zu beenden, für Verhalten, das unserer Meinung nach gegen diese Nutzungsbedingungen verstößt oder anderen Nutzern oder der Website schadet.",
    ],
    [
        "title" => "9. Änderungen an diesen Bedingungen",
        "body" => "Wir können diese Nutzungsbedingungen jederzeit überarbeiten. Die fortgesetzte Nutzung der Website nach Veröffentlichung von Änderungen stellt die Annahme der aktualisierten Bedingungen dar.",
    ],
    [
        "title" => "10. Kontakt",
        "body" => "Fragen zu diesen Nutzungsbedingungen können über die <a class=\"link\" href=\"contacts.php\">Kontaktseite</a> an unser Team gerichtet oder per E-Mail an info@$site_domain gesendet werden.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrieren | $site_name — Erstellen Sie Ihr Kostenloses Konto";
$sign_meta_description = "Erstellen Sie in wenigen Minuten Ihr kostenloses $site_name-Konto und beginnen Sie mit nur $$app_price $app_currency zu handeln.";
$sign_h1 = "Erstellen Sie Ihr Kostenloses Konto";
$sign_lead = "Treten Sie $site_name in wenigen Minuten bei. Füllen Sie unten Ihre Daten aus, um zu beginnen.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Danke | $site_name";
$thanks_h1 = "Danke!";
$thanks_text = "Ihre Daten wurden empfangen. Ein Mitglied des $site_name-Teams wird sich in Kürze mit Ihnen in Verbindung setzen, um Ihnen den Einstieg zu erleichtern.";
$thanks_btn = "Zurück zur Startseite";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Durchsuchen Sie alle Seiten der $site_name-Website, einschließlich der Handelsplattform, des Angebots, des Supports und der rechtlichen Seiten.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Alle Seiten von $site_name an einem Ort.";

