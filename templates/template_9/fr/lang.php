<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ============================================================
// FR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Officiel | Plateforme de Trading";
$home_meta_description = "$site_name offre une plateforme de trading conviviale avec des outils de marché avancés, des informations en temps réel et des fonctionnalités pratiques conçues pour rendre le trading en ligne plus accessible et informé.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Plateforme $site_name";
$hero_subtitle = "Accompagner des millions de personnes dans le monde entier dans leur parcours d'actifs numériques";
$hero_badge_title = "Membres Satisfaits";
$hero_badge_subtitle = "Adoré par des millions";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Commencez à Trader Aujourd'hui";
$form_desc = "Prêt à passer à l'action ? Inscrivez-vous maintenant et faites le premier pas vers la liberté financière. Commencez avec seulement $app_price $app_currency — accédez à tous les outils de trading, aux données de marché en temps réel et à l'accès complet à la plateforme dès le premier jour.";
$form_fname_placeholder = "Prénom";
$form_lname_placeholder = "Nom";
$form_email_placeholder = "E-mail";
$form_btn_submit = "S'inscrire";
$form_disclaimer_text = "En saisissant vos informations personnelles et en cliquant sur le bouton, vous acceptez la <a class=\"link\" href=\"privacy.php\">Politique de Confidentialité</a> et les <a class=\"link\" href=\"conditions.php\">Conditions d'Utilisation</a> du site.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SÉCURISÉ";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Découvrez la Plateforme";
$stats_title = "Une introduction rapide à un trading plus intelligent";
$stat_1_value = "154+";
$stat_1_label = "Pays Couverts";
$stat_2_value = "29 Millions";
$stat_2_label = "Investisseurs Mondiaux";
$stat_3_value = "635+";
$stat_3_label = "Cryptomonnaies";
$stat_4_value = "3,26 Milliards $";
$stat_4_label = "Volume d'Échange sur 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Pourquoi $site_name ?";
$why_title = "Raisons de Nous Choisir";
$why_1_title = "Rapide &amp; Facile";
$why_1_text = "Achetez et vendez vos cryptomonnaies préférées en quelques secondes.";
$why_2_title = "Sûr &amp; Sécurisé";
$why_2_text = "Nous utilisons les dernières technologies pour protéger vos fonds et vos données.";
$why_3_title = "Ouvert à Tous";
$why_3_text = "Tradez sur notre plateforme 24h/24 et 7j/7, où et quand vous le souhaitez.";
$why_4_title = "Outils Professionnels";
$why_4_text = "Des fonctionnalités de trading simples aux plus avancées, nous avons tout.";
$why_5_title = "Tendances &amp; Analyses";
$why_5_text = "Recevez les dernières actualités, analyses et tendances crypto de la part d'experts.";
$why_6_title = "Support 24/7";
$why_6_text = "Notre équipe de support amicale est là pour vous aider à tout moment.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Comment Ça Fonctionne";
$how_title = "Étapes Simples pour Commencer à Trader";
$how_1_title = "S'inscrire";
$how_1_text = "Créez un compte et commencez à trader en quelques minutes.";
$how_1_btn = "Commencer à Trader";
$how_2_title = "Déposer des Fonds";
$how_2_text = "Alimentez votre compte avec un dépôt minimum de $app_price $app_currency pour débloquer l'accès complet au trading. Choisissez parmi plusieurs méthodes de paiement et commencez à développer votre portefeuille dès aujourd'hui.";
$how_2_note = "Ajouter des fonds....";
$how_3_title = "Commencer à Trader";
$how_3_text = "Explorez le marché et tradez à votre façon.";
$how_3_note = "Acheter et HODLer";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calculateur";
$calc_title = "Découvrez combien de temps et de potentiel vous laissez de côté";
$calc_volume_label = "Volume de Trading Mensuel";
$calc_trades_label = "Trades par Semaine";
$calc_time_label = "Temps que Vous Pourriez Économiser";
$calc_boost_label = "Augmentation Potentielle du Volume";
$calc_btn = "Commencer à Trader";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Fonctionnalités";
$features_title = "La Puissance de $site_name";
$feature_1_title = "Trading au Comptant";
$feature_1_text = "Maximisez votre potentiel de trading avec des outils professionnels.";
$feature_2_title = "Acheter des Cryptos";
$feature_2_text = "Achetez des cryptos avec cartes ou banques.";
$feature_3_title = "Produits Dérivés Crypto";
$feature_3_text = "Trading de futures facile et avancé.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Faites fructifier votre patrimoine en toute simplicité.";
$feature_5_title = "Bot de Trading";
$feature_5_text = "Des profits plus élevés, même pendant que vous dormez.";
$feature_6_title = "Trading sur Marge";
$feature_6_text = "Empruntez, tradez et remboursez facilement.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Ce Que Disent Nos Utilisateurs";
$review_1_text = "La plateforme est très facile à utiliser, et j'ai constaté des progrès constants depuis que je suis devenu détenteur. L'engagement de l'équipe et ses idées fraîches me font attendre avec impatience ce qui va suivre !";
$review_1_role = "Trader";
$review_2_text = "$site_name offre une expérience de trading fluide et intuitive. J'ai pu commencer à acheter et à trader des cryptos immédiatement. L'interface est facile à utiliser, et les vitesses de transaction sont excellentes !";
$review_2_role = "Nouveau Trader";
$review_3_text = "Je fais confiance à cette plateforme pour gérer mes investissements en crypto. Ses fonctionnalités de sécurité me donnent confiance, et je n'ai jamais rencontré de problèmes avec les retraits ou les dépôts. C'est l'une des plateformes les plus fiables que j'aie utilisées.";
$review_3_role = "Trader Professionnel";
$review_4_text = "Chaque fois que j'ai eu des questions, l'équipe de support client a été rapide et serviable. Ils se soucient vraiment de leurs utilisateurs et rendent chaque expérience de trading fluide et simple.";
$review_4_role = "Trader Expérimenté";
$review_5_text = "En tant que débutant, j'ai trouvé $site_name très facile à utiliser. Ce qui ressort vraiment, c'est la gamme d'outils avancés pour les traders plus expérimentés. C'est une excellente option pour quiconque souhaite construire son portefeuille !";
$review_5_role = "Trader de la Communauté";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "FAQ";
$faq_title = "Questions Fréquemment Posées";
$faq_q1 = "Qu'est-ce que $site_name ?";
$faq_a1 = "$site_name est une plateforme d'échange crypto où les utilisateurs peuvent facilement trader une large gamme de cryptomonnaies, y compris Bitcoin, Ethereum et d'autres cryptomonnaies populaires.";
$faq_q2 = "$site_name Est-il Sûr pour le Trading de Cryptos ?";
$faq_a2 = "La plateforme offre une sécurité grâce à une technologie avancée et une couverture des actifs 1:1 via la Preuve de Réserves.";
$faq_q3 = "Comment Effectuer un Dépôt ?";
$faq_a3 = "$site_name propose plusieurs options de dépôt, notamment le dépôt crypto, le dépôt fiat, le trading P2P et l'achat en un clic.";
$faq_q4 = "Ai-je Besoin d'Expérience pour Utiliser $site_name ?";
$faq_a4 = "Non, vous n'avez besoin d'aucune expérience. L'interface conviviale de la plateforme la rend accessible à tous, des débutants aux traders avancés.";
$faq_q5 = "Y a-t-il des frais ou des coûts cachés ?";
$faq_a5 = "Absolument pas. Il n'y a aucuns frais d'inscription, coûts d'abonnement ou frais cachés d'aucune sorte. Vous voyez toujours le montant exact de la transaction avant de confirmer. Les revenus proviennent des fonctionnalités premium et des partenariats d'échange, et non d'argent prélevé aux utilisateurs.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Commencez à Trader Aujourd'hui";
$cta_desc = "Prêt à passer à l'action ? Inscrivez-vous maintenant et faites le premier pas vers l'indépendance financière.";
$cta_btn = "S'inscrire";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Fonctionnalités Clés de la Plateforme de Trading $site_name";
$table_1_label = "🤖 Technologie de la Plateforme";
$table_1_val = "Moteur de Trading IA Avancé";
$table_2_label = "💳 Méthodes de Financement";
$table_2_val = "Principales Cartes de Crédit, Virement Bancaire, PayPal";
$table_3_label = "📱 Accès à la Plateforme";
$table_3_val = "Compatibilité Multi-Appareils";
$table_4_label = "🚀 Taux de Performance";
$table_4_val = "85% de Précision";
$table_5_label = "📊 Instruments de Trading";
$table_5_val = "Actions, Forex, Matières Premières, Métaux Précieux, CFD, Cryptomonnaies et plus…";
$table_6_label = "✍️ Configuration du Compte";
$table_6_val = "Rapide et Efficace";
$table_7_label = "📞 Support Client";
$table_7_val = "Assistance Professionnelle 24/7";

// Reviews summary card
$summary_title = "Avis sur $site_name";
$summary_badge = "Fiable";
$summary_desc = "Une plateforme de trading puissante et conviviale avec une automatisation solide et des ressources éducatives.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Tradez intelligemment, grandissez rapidement";
$footer_community_label = "Communauté";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produit";
$footnav_offer = "Offre";
$footnav_contacts = "Contact";
$footnav_faq = "FAQ";
$footnav_privacy = "Politique de Confidentialité";
$footnav_conditions = "Conditions d'Utilisation";
$footnav_risk = "Avertissement sur les Risques";
$footer_disclaimer = "$site_name partage des ressources éducatives et du contenu lié au marché pour aider les visiteurs à mieux comprendre le trading, l'investissement et les produits financiers numériques. Les informations présentées sur le site, telles que les commentaires de marché, les prix des actifs, les graphiques, les guides et le contenu analytique, sont fournies à titre purement informatif et ne constituent pas des conseils financiers, d'investissement, fiscaux ou juridiques. Bien que des efforts raisonnables soient déployés pour maintenir des informations précises et pertinentes, $site_name ne garantit pas l'exhaustivité, l'exactitude ou l'actualité du contenu et ne peut être tenu responsable des décisions ou pertes résultant de son utilisation.<br><br>La participation aux marchés financiers comporte des risques inhérents. Les cryptomonnaies, le Forex, les CFD, les actions et autres instruments de trading peuvent connaître des fluctuations de prix importantes, et des pertes peuvent survenir. Les circonstances individuelles et la tolérance au risque varient, les utilisateurs doivent donc effectuer leurs propres recherches et envisager d'obtenir des conseils d'un professionnel financier qualifié avant d'engager des fonds. Ne tradez jamais avec de l'argent que vous ne pouvez pas vous permettre de perdre.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Consultante en Trading";
$quiz_text_welcome = "Bonjour ! Je suis Maya, votre consultante personnelle en trading. Avez-vous quelques minutes pour trouver le meilleur plan pour vous ?";
$quiz_text_q1 = "Avez-vous déjà tradé des cryptomonnaies ?";
$quiz_text_a1_yes = "Oui, j'ai de l'expérience";
$quiz_text_a1_no = "Non, je suis débutant";
$quiz_text_q2 = "Parfait ! Quel est votre prénom pour que je puisse personnaliser votre plan ?";
$quiz_text_q3 = "Quel est votre objectif principal en matière de trading ?";
$quiz_text_a3_yes = "Construire un patrimoine à long terme";
$quiz_text_a3_no = "Générer des revenus à court terme";
$quiz_text_q4 = "Avec combien souhaitez-vous commencer ?";
$quiz_text_a4_1 = "Moins de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Plus de $1000";
$quiz_text_q5 = "Parfait. Souhaitez-vous que j'ouvre un compte gratuit pour vous maintenant ?";
$quiz_text_a5_yes = "Oui, faisons-le";
$quiz_text_a5_no = "Pas maintenant";
$quiz_text_loader = "Recherche de votre meilleur plan...";
$quiz_text_final_ttl = "Tout est prêt !";
$quiz_text_processing = "Vos informations sont en cours d'envoi...";
$quiz_text_typing = "est en train d'écrire...";
$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Obtenir Mon Compte Gratuit";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Avertissement sur les Risques $site_name — Divulgation des Risques de Trading";
$risk_meta_description = "Lisez l'avertissement sur les risques de $site_name avant de trader : risques du marché des cryptomonnaies, effet de levier, liquidité, cybersécurité et considérations réglementaires.";
$risk_title = "Avertissement sur les Risques";
$risk_intro = "Comprendre les risques est la première étape vers un trading en toute confiance.";
$risk_ai_title = "Comment Notre Système IA Aide à Gérer les Risques :";
$risk_ai_1_title = "Efficacité Algorithmique &amp; Trading Sans Émotion :";
$risk_ai_1_text = "Des algorithmes avancés analysent les signaux du marché pour exécuter des trades objectivement aux moments optimaux.";
$risk_ai_2_title = "Stratégies Basées sur les Données :";
$risk_ai_2_text = "Les stratégies reposent sur des modèles de marché vérifiés et une analyse en temps réel plutôt que sur des suppositions.";
$risk_ai_3_title = "Paramètres Flexibles &amp; Contrôle Total :";
$risk_ai_3_text = "Ajustez vos paramètres de risque à tout moment. Suivez tous les soldes et transactions de manière transparente sur votre tableau de bord, sans frais cachés et sans restrictions de retrait.";
$risk_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours un risque. Les systèmes automatisés (y compris l'IA) ne garantissent pas de profit, peuvent échouer en raison d'erreurs logicielles ou d'événements de marché imprévus, et nécessitent une surveillance de l'utilisateur. Les performances passées ne sont pas indicatives des résultats futurs. Cette plateforme sert uniquement à des fins d'information et de marketing et ne fournit pas de conseils financiers.";
$risk_s1_title = "1. Risques Généraux &amp; du Marché des Cryptomonnaies";
$risk_s1_text = "Les cryptomonnaies sont des actifs spéculatifs hautement volatils qui fonctionnent 24h/24 et 7j/7 avec une supervision réglementaire minimale dans la plupart des juridictions.";
$risk_s1_li1 = "Les valeurs peuvent fluctuer de manière drastique sur de courtes périodes, entraînant potentiellement une perte totale du capital investi.";
$risk_s1_li2 = "Les valeurs de marché peuvent être fortement impactées par des changements réglementaires, des développements techniques, des violations de sécurité ou des événements macroéconomiques plus larges.";
$risk_s1_li3 = "Certains actifs peuvent perdre complètement toute leur valeur. N'investissez que des fonds que vous pouvez vous permettre de perdre.";
$risk_s2_title = "2. Risques d'Exécution, de Liquidité &amp; d'Effet de Levier";
$risk_s2_li1_title = "Volatilité du Marché &amp; Liquidité :";
$risk_s2_li1_text = "Des mouvements de prix extrêmes (10-20%+ quotidiens) ou une faible liquidité (particulièrement pour les cryptomonnaies plus petites) peuvent entraîner des retards, des pannes de plateforme et un glissement d'exécution sévère. Les ordres stop-loss ne peuvent pas garantir des limites de perte dans des conditions extrêmes.";
$risk_s2_li2_title = "Risques d'Effet de Levier &amp; de Marge :";
$risk_s2_li2_text = "Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. <em>Environ 70-80% des comptes d'investisseurs particuliers perdent de l'argent en tradant des produits à effet de levier.</em>";
$risk_s3_title = "3. Risques Techniques, de Cybersécurité &amp; de Tiers";
$risk_s3_li1_title = "Facteurs Techniques :";
$risk_s3_li1_text = "Le trading en ligne implique intrinsèquement des risques de déconnexion internet, d'erreurs matérielles/logicielles et d'indisponibilité du service.";
$risk_s3_li2_title = "Cybersécurité :";
$risk_s3_li2_text = "Les comptes de cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratage. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte permanente.";
$risk_s3_li3_title = "Plateformes Tierces :";
$risk_s3_li3_text = "Ce site web peut connecter les utilisateurs à des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leurs opérations ou leur solvabilité. Effectuez toujours votre propre diligence raisonnable avant de déposer des fonds sur des plateformes externes.";
$risk_s4_title = "4. Dispositions Réglementaires, Fiscales &amp; Finales";
$risk_s4_li1_title = "Conformité Légale &amp; Impôts :";
$risk_s4_li1_text = "Les cadres réglementaires varient largement et changent rapidement. Les utilisateurs sont seuls responsables de s'assurer que leur activité de trading est conforme aux lois locales et de remplir leurs propres obligations fiscales.";
$risk_s4_li2_title = "Aucune Garantie de Profit :";
$risk_s4_li2_text = "Il n'existe pas de trading crypto \"sûr\" ou sans risque. Tous les chiffres de rendement ou exemples de performance sont purement hypothétiques.";
$risk_s4_li3_title = "Adéquation :";
$risk_s4_li3_text = "Si vous ne comprenez pas pleinement les risques, dépendez de fonds essentiels ou tradez avec de l'argent emprunté, le trading crypto ne vous convient pas. Consultez un conseiller financier indépendant agréé en cas de doute.";
$risk_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe officielle de support client via le formulaire de contact sur notre site web.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Accueil";
$bc_product = "Produit";
$bc_offer = "Offre";
$bc_contacts = "Contact";
$bc_faq = "FAQ";
$bc_privacy = "Politique de Confidentialité";
$bc_conditions = "Conditions d'Utilisation";
$bc_risk = "Avertissement sur les Risques";
$bc_sign = "S'inscrire";
$bc_sitemap = "Plan du Site";
$bc_thanks = "Merci";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produit $site_name — Outils de Trading &amp; Fonctionnalités de la Plateforme";
$product_meta_description = "Découvrez le produit $site_name : trading au comptant, produits dérivés crypto, un bot de trading, trading sur marge et plus encore, tout construit sur une plateforme rapide et sécurisée.";
$product_h1 = "Le Produit de Trading $site_name";
$product_lead = "Une plateforme, tous les outils dont un trader a besoin : de votre premier trade au comptant aux stratégies automatisées et positions sur marge, $site_name garde l'expérience rapide, sécurisée et facile à comprendre.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Offre $site_name — Commencez à Trader à Partir de $$app_price";
$offer_meta_description = "Découvrez ce qui est inclus dans l'offre actuelle de $site_name : un dépôt minimum de $$app_price, un accès complet à la plateforme et aucuns frais cachés.";
$offer_h1 = "Notre Offre Actuelle";
$offer_lead = "Commencez avec aussi peu que <strong>$$app_price $app_currency</strong> et débloquez la plateforme $site_name complète dès le premier jour &mdash; tous les outils, tous les marchés, aucuns frais cachés.";
$offer_li1 = "Dépôt minimum de seulement $$app_price $app_currency pour activer votre compte";
$offer_li2 = "Accès complet au trading au comptant, aux dérivés, à la marge et au bot de trading";
$offer_li3 = "Plusieurs méthodes de financement, y compris les cartes et le virement bancaire";
$offer_li4 = "Aucuns frais d'inscription, aucuns coûts d'abonnement, aucuns frais cachés";
$offer_li5 = "Support client 24/7 pendant vos débuts";
$offer_note = "Les montants de dépôt et les méthodes de paiement disponibles peuvent varier selon la région. Consultez notre <a class=\"link\" href=\"risk-warning.php\">Avertissement sur les Risques</a> avant d'alimenter un compte.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Contactez $site_name — Entrez en Contact avec Notre Équipe";
$contacts_meta_description = "Vous avez une question sur votre compte $site_name ou la plateforme ? Contactez notre équipe de support par e-mail ou envoyez-nous un message et nous vous répondrons.";
$contacts_h1 = "Contact";
$contacts_lead = "Des questions sur votre compte, un dépôt, ou le fonctionnement de la plateforme ? Notre équipe est là pour vous aider.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Heures de Support";
$contacts_hours_value = "24/7";
$contacts_response_label = "Temps de Réponse Typique";
$contacts_response_value = "Sous 24 heures";
$contacts_form_title = "Envoyez-nous un Message";
$contacts_form_desc = "Laissez vos coordonnées ci-dessous et un membre de notre équipe vous contactera directement.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "FAQ $site_name — Questions Fréquemment Posées";
$faq_meta_description = "Réponses aux questions les plus courantes sur la création d'un compte $site_name, l'effectuation d'un dépôt, la sécurité de la plateforme et les frais.";
$faq_page_lead = "Tout ce que vous devez savoir avant de commencer à trader. Vous ne trouvez pas votre réponse ? <a class=\"link\" href=\"contacts.php\">Contactez notre équipe</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Politique de Confidentialité $site_name";
$privacy_meta_description = "Découvrez comment $site_name collecte, utilise et protège vos informations personnelles sur l'ensemble du site et de la plateforme.";
$privacy_sections = [
    [
        "title" => "1. Introduction",
        "body" => "Cette Politique de Confidentialité explique comment $site_name (\"nous\") collecte, utilise et protège les informations personnelles des visiteurs et utilisateurs de $site_domain (le \"Site\"). En utilisant le Site, vous acceptez les pratiques décrites ci-dessous.",
    ],
    [
        "title" => "2. Informations que Nous Collectons",
        "body" => "Nous pouvons collecter des informations que vous fournissez directement, telles que votre nom, adresse e-mail et numéro de téléphone lors de l'inscription ou de la soumission d'un formulaire, ainsi que des informations collectées automatiquement, y compris votre adresse IP, le type d'appareil et de navigateur, et les pages consultées sur le Site.",
    ],
    [
        "title" => "3. Comment Nous Utilisons Vos Informations",
        "body" => "Nous utilisons les informations collectées pour créer et gérer votre compte, répondre aux demandes, fournir un support client, améliorer le Site et nos services, et, lorsque cela est autorisé, envoyer des mises à jour sur les produits et offres. Vous pouvez vous désinscrire des communications marketing à tout moment.",
    ],
    [
        "title" => "4. Cookies &amp; Technologies de Suivi",
        "body" => "Le Site utilise des cookies et des technologies similaires pour mémoriser vos préférences, vous maintenir connecté et comprendre comment les visiteurs utilisent nos pages. Vous pouvez désactiver les cookies via les paramètres de votre navigateur, bien que certaines fonctionnalités puissent ne pas fonctionner correctement en conséquence.",
    ],
    [
        "title" => "5. Partage des Informations",
        "body" => "Nous ne vendons pas vos informations personnelles. Nous pouvons partager des informations avec des prestataires de services de confiance qui nous aident à exploiter le Site (tels que des fournisseurs d'hébergement ou d'analyse), ou lorsque la loi l'exige ou pour protéger nos droits légaux.",
    ],
    [
        "title" => "6. Sécurité des Données",
        "body" => "Nous appliquons des mesures techniques et organisationnelles raisonnables pour protéger vos informations contre tout accès non autorisé, altération ou perte. Aucune méthode de transmission ou de stockage n'est totalement sécurisée, et nous ne pouvons garantir une sécurité absolue.",
    ],
    [
        "title" => "7. Vos Droits &amp; Choix",
        "body" => "Selon votre localisation, vous pouvez avoir le droit d'accéder à, de corriger ou de demander la suppression de vos informations personnelles, et de vous opposer à certaines utilisations de celles-ci. Pour exercer ces droits, veuillez nous contacter via notre <a class=\"link\" href=\"contacts.php\">page de contact</a>.",
    ],
    [
        "title" => "8. Confidentialité des Enfants",
        "body" => "Le Site ne s'adresse pas aux personnes de moins de 18 ans, et nous ne collectons pas sciemment d'informations personnelles auprès de mineurs. Si vous pensez qu'un mineur nous a fourni des informations personnelles, veuillez nous contacter afin que nous puissions les supprimer.",
    ],
    [
        "title" => "9. Modifications de Cette Politique",
        "body" => "Nous pouvons mettre à jour cette Politique de Confidentialité de temps à autre. Tout changement sera publié sur cette page avec une date d'entrée en vigueur révisée. Nous vous encourageons à consulter cette page périodiquement.",
    ],
    [
        "title" => "10. Contactez-Nous",
        "body" => "Si vous avez des questions concernant cette Politique de Confidentialité ou la manière dont vos informations sont traitées, veuillez nous contacter via notre <a class=\"link\" href=\"contacts.php\">page de contact</a> ou nous envoyer un e-mail à info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Conditions d'Utilisation $site_name";
$conditions_meta_description = "Consultez les Conditions d'Utilisation régissant l'accès et l'utilisation du site web et de la plateforme de trading $site_name.";
$conditions_sections = [
    [
        "title" => "1. Acceptation des Conditions",
        "body" => "En accédant à ou en utilisant $site_domain (le \"Site\"), vous acceptez d'être lié par ces Conditions d'Utilisation. Si vous n'êtes pas d'accord avec une partie de ces conditions, veuillez ne pas utiliser le Site.",
    ],
    [
        "title" => "2. Éligibilité",
        "body" => "Vous devez avoir au moins 18 ans et être légalement autorisé à utiliser des services liés au trading dans votre juridiction pour utiliser le Site. En utilisant le Site, vous confirmez que vous répondez à ces exigences.",
    ],
    [
        "title" => "3. Description du Service",
        "body" => "$site_name propose une plateforme en ligne avec du contenu éducatif, des informations de marché et des outils de trading. Rien sur le Site ne constitue un conseil financier, d'investissement, fiscal ou juridique, et toute information fournie est uniquement à des fins d'information générale.",
    ],
    [
        "title" => "4. Responsabilités de l'Utilisateur",
        "body" => "Vous êtes responsable de fournir des informations exactes lors de l'inscription, de maintenir la confidentialité des identifiants de votre compte, et de toute activité qui se produit sous votre compte.",
    ],
    [
        "title" => "5. Propriété Intellectuelle",
        "body" => "Tout le contenu du Site, y compris le texte, les graphiques, les logos et les logiciels, est la propriété de $site_name ou de ses concédants de licence et est protégé par les lois applicables sur la propriété intellectuelle. Vous ne pouvez pas reproduire ou distribuer ce contenu sans autorisation.",
    ],
    [
        "title" => "6. Aucun Conseil Financier",
        "body" => "Le contenu du Site est fourni uniquement à des fins d'information et d'éducation et ne doit pas être interprété comme un conseil financier. Vous êtes seul responsable de vos propres décisions de trading et devez consulter un conseiller financier indépendant si nécessaire. Consultez notre <a class=\"link\" href=\"risk-warning.php\">Avertissement sur les Risques</a> pour plus d'informations.",
    ],
    [
        "title" => "7. Limitation de Responsabilité",
        "body" => "Dans toute la mesure permise par la loi, $site_name ne sera pas responsable de tout dommage direct, indirect, accessoire ou consécutif résultant de votre utilisation, ou de votre incapacité à utiliser, le Site ou tout service tiers lié.",
    ],
    [
        "title" => "8. Résiliation",
        "body" => "Nous nous réservons le droit de suspendre ou de résilier votre accès au Site à notre discrétion, sans préavis, pour tout comportement que nous jugeons contraire à ces Conditions d'Utilisation ou nuisible à d'autres utilisateurs ou au Site.",
    ],
    [
        "title" => "9. Modifications de Ces Conditions",
        "body" => "Nous pouvons réviser ces Conditions d'Utilisation à tout moment. L'utilisation continue du Site après la publication de modifications constitue une acceptation des conditions mises à jour.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Les questions concernant ces Conditions d'Utilisation peuvent être adressées à notre équipe via la <a class=\"link\" href=\"contacts.php\">page de contact</a> ou par e-mail à info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "S'inscrire | $site_name — Créez Votre Compte Gratuit";
$sign_meta_description = "Créez votre compte $site_name gratuit en quelques minutes et commencez à trader avec seulement $$app_price $app_currency.";
$sign_h1 = "Créez Votre Compte Gratuit";
$sign_lead = "Rejoignez $site_name en quelques minutes. Remplissez vos informations ci-dessous pour commencer.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Merci | $site_name";
$thanks_h1 = "Merci !";
$thanks_text = "Vos informations ont été reçues. Un membre de l'équipe $site_name vous contactera bientôt pour vous aider à démarrer.";
$thanks_btn = "Retour à l'Accueil";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Plan du Site | $site_name";
$sitemap_meta_description = "Parcourez toutes les pages du site $site_name, y compris la plateforme de trading, l'offre, le support et les pages légales.";
$sitemap_h1 = "Plan du Site";
$sitemap_lead = "Toutes les pages de $site_name en un seul endroit.";

