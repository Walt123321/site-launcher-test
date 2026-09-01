<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ============================================================
// FR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Officiel | Plateforme de Trading";
$home_meta_description = "$site_name propose une plateforme de trading conviviale avec des outils de marché avancés, des informations en temps réel et des fonctionnalités pratiques conçues pour rendre le trading en ligne plus accessible et éclairé.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "À propos de nous";
$nav_contacts = "Contact";
$nav_login = "Connexion";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "En direct";
$activity_suffix = "Vient de rejoindre";
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
$form_title = "Commencer";
$form_fname_placeholder = "Nom complet";
$form_lname_placeholder = "Nom de famille";
$form_email_placeholder = "Adresse e-mail";
$form_btn_submit = "Créer un compte";
$form_disclaimer_text = "* En cliquant sur le bouton, vous acceptez notre <a class=\"link\" href=\"privacy.php\">Avis de confidentialité</a> et nos <a class=\"link\" href=\"conditions.php\">Conditions d'utilisation</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SÉCURISÉ";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name : une IA conçue pour lire le marché avec plus de clarté";
$s1_subtitle = "Stratégie d'investissement guidée par la technologie";
$s1_quote = "$site_name a été conçu pour simplifier le travail avec les marchés, que vous ayez de l'expérience ou non. La plateforme applique l'intelligence artificielle pour transformer des données complexes en décisions claires et exploitables, vous aidant à agir avec plus de confiance dans tous les scénarios.";
$s1_p1 = "Le système examine d'énormes volumes d'informations en temps réel : il détecte les changements, reconnaît les tendances et réagit rapidement aux signaux du marché. Cela vous offre une lecture précise du contexte actuel afin que vous puissiez repérer des opportunités sans avoir à parcourir des analyses compliquées.";
$s1_p2 = "Une surveillance 24/7, une interface facile à utiliser et un niveau de protection élevé rendent l'expérience confortable et fiable. Tout est conçu pour que vous puissiez vous concentrer sur les résultats, pas sur l'aspect technique.";
$s1_p3 = "La fonctionnalité de copy trading vous donne également accès aux stratégies de traders plus expérimentés. Vous pouvez suivre leurs mouvements et appliquer des approches éprouvées à votre propre trading, en combinant jugement professionnel et automatisation.";
$s1_cta = "Créer un compte";
$s1_img_alt = "$site_name finance numérique";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Analyse de marché précise, sans bruit superflu";
$s2_intro = "$site_name utilise l'intelligence artificielle pour surveiller le marché en continu et détecter rapidement les changements. Le système traite de grandes quantités de données et n'affiche que les signaux pertinents, sans vous submerger d'informations inutiles.";
$s2_item1_title = "Réponse du marché sans attente";
$s2_item1_text = "La plateforme identifie les mouvements dès leurs premières étapes : momentum, retournements et changements de tendance. Vous voyez instantanément ce qui se passe et pouvez agir au bon moment.";
$s2_item2_title = "Une lecture claire plutôt qu'une supposition";
$s2_item2_text = "Pas de graphiques compliqués ni de suppositions. $site_name met en avant l'essentiel et offre une vue claire de la situation afin que vous puissiez décider avec des données, pas avec de l'intuition.";
$s2_item3_title = "Contrôle et protection";
$s2_item3_text = "Vos données sont protégées, l'accès est contrôlé, et les transactions passent par des canaux sécurisés. Vous pouvez ainsi vous concentrer sur le marché, pas sur le risque technique.";
$s2_img_alt = "$site_name crypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name : Une intelligence claire pour les traders";
$s3_card1_title = "$site_name respecte la vie privée et le contrôle de l'utilisateur";
$s3_card1_text = "$site_name traite les informations avec une transparence et une intégrité totales. Il n'utilise pas vos données personnelles à mauvais escient. Aucune transaction ni ordre n'est enregistré sur cette plateforme.";
$s3_card2_title = "Un environnement d'analyse clair pour de meilleures décisions";
$s3_card2_text = "$site_name fonctionne comme un espace technologique où l'IA renforce le jugement humain au lieu de le remplacer. Ces outils facilitent la compréhension des évolutions du marché, la comparaison des stratégies et l'étude du comportement des actifs.";
$s3_card3_title = "Des outils d'IA qui affinent votre lecture du marché";
$s3_card3_text = "L'analyse ne s'arrête jamais. $site_name surveille l'environnement crypto et envoie des alertes en temps réel dès qu'un mouvement pertinent apparaît.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name : Une analyse précise, sans émotion ni erreur";
$s4_quote = "$site_name transforme des données de marché complexes en informations organisées et faciles à lire, en éliminant le bruit inutile et en vous aidant à vous concentrer sur les signaux qui comptent vraiment. Cela vous permet de comprendre une situation plus tôt et de décider sans laisser l'émotion prendre le dessus.";
$s4_p1 = "Le système met continuellement à jour ses conclusions avec de nouvelles données. Au lieu d'indicateurs retardés, il utilise des modèles adaptatifs qui réagissent aux changements de marché en temps réel. Cela signifie que vous travaillez toujours avec une vue actuelle et pouvez agir plus rapidement quand cela compte vraiment.";
$s4_img_alt = "$site_name intelligence artificielle";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Utilisez l'IA de $site_name pour prendre des décisions précises et opportunes";
$s5_quote = "$site_name analyse le marché en temps réel et vous montre immédiatement où se trouvent le mouvement et les opportunités. Le système traite les données pour vous et fournit des signaux prêts à l'emploi : quand entrer, quand sortir et quoi surveiller.";
$s5_p1 = "Pas besoin de surveiller les graphiques toute la journée. La plateforme détecte les changements par elle-même et réagit rapidement au marché, vous aidant à ne pas manquer les moments clés.";
$s5_p2 = "Les algorithmes fonctionnent 24/7 et identifient de nouvelles opportunités dès qu'elles apparaissent. Vous obtenez des informations à jour sans retards ni surcharge d'informations.";
$s5_p3 = "En même temps, la sécurité reste à un niveau élevé : protection des données, accès sécurisé et contrôle des transactions. $site_name convient aussi bien aux débutants qu'aux traders actifs — les décisions restent les vôtres, mais soutenues par une base analytique solide.";
$s5_img_alt = "$site_name automatisation financière";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Un trading cohérent commence par un système organisé";
$s6_p1 = "$site_name aide à structurer votre travail avec le marché. La plateforme crée un cadre clair : vous définissez vos objectifs et votre niveau de risque, et le système adapte son analyse à votre style — sans chaos et sans surcharge.";
$s6_p2 = "L'analyse 24/7 transforme le flux de données en signaux simples et compréhensibles. Vous voyez uniquement ce qui compte : où il y a du mouvement, où il vaut la peine d'entrer, et quand il vaut mieux attendre. Avec le temps, les algorithmes deviennent plus précis et s'adaptent au marché.";
$s6_item1_title = "Choisissez votre rythme : trading rapide ou approche à long terme";
$s6_item1_text = "$site_name prend en charge différentes stratégies. Pour le trading actif, le système signale les points d'entrée et les mouvements de prix. Pour une approche à plus long terme, il vous aide à maintenir des positions en tenant compte de la tendance et du risque.";
$s6_item2_title = "Points d'entrée sans supposition";
$s6_item2_text = "La plateforme indique où le marché est le plus actif. Cela vous aide à entrer avec plus de confiance et à sortir à temps, sans improviser.";
$s6_item3_title = "Gestion des risques dès le départ";
$s6_item3_text = "Vous pouvez voir les scénarios possibles à l'avance : où le risque est plus faible et le potentiel plus élevé. Vous pouvez ainsi planifier des transactions avant même que le mouvement ne commence.";
$s6_item4_title = "Analyse prête à l'emploi";
$s6_item4_text = "$site_name ne vous submerge pas de terminologie compliquée. Vous obtenez des informations claires, prêtes à l'emploi, conçues pour vous aider à décider plus rapidement et avec plus de confiance.";
$s6_cta = "Commencer maintenant";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Des outils simples pour des décisions précises avec $site_name";
$s7_quote = "$site_name vous donne tout ce dont vous avez besoin pour trader le marché — sans jargon technique ni surcharge d'informations. La plateforme analyse par elle-même les mouvements de prix, les tendances et les points d'entrée possibles, en n'affichant que ce qui compte vraiment.";
$s7_point1 = "Le système aide à détecter quand le marché peut se retourner, où apparaissent des mouvements forts, et quels moments sont les meilleurs pour entrer ou sortir. Chaque signal est prétraité — vous n'avez pas besoin de maîtriser des indicateurs complexes.";
$s7_point2 = "Il inclut également le copy trading : vous pouvez suivre les décisions de traders expérimentés et les reproduire sans passer de temps sur votre propre analyse.";
$s7_point3 = "L'interface reste aussi simple que possible — chaque outil se comprend en un coup d'œil et est prêt à l'emploi dès le premier instant.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Trouvez les zones de timing clés avec l'IA de $site_name";
$s8_item1 = "La diversification automatique répartit les fonds sur différents actifs, réduisant le risque et protégeant le capital même dans des marchés instables.";
$s8_item2 = "Un système entièrement autonome — pas besoin de surveiller les graphiques. Les algorithmes analysent le marché et prennent des décisions par eux-mêmes.";
$s8_item3 = "Les retraits sont disponibles à tout moment — vers des cartes bancaires, des portefeuilles crypto ou des systèmes de paiement électronique, sans délai.";
$s8_item4 = "Des rapports quotidiens montrent vos résultats et vous donnent un contrôle total de la situation en temps réel.";
$s8_item5 = "Des paramètres de niveau de risque flexibles vous permettent de choisir une stratégie qui correspond à vos objectifs — du conservateur au plus agressif.";
$s8_item6 = "Un potentiel de profit allant jusqu'à 400% fait de $site_name un outil pour ceux qui ne veulent pas seulement préserver leur capital, mais le faire croître significativement.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Analyse experte propulsée par $site_name";
$s9_quote = "$site_name combine la puissance des algorithmes avec l'expérience du marché, transformant des données complexes en signaux clairs et faciles à comprendre. Le système détecte rapidement les tendances et les opportunités potentielles, vous aidant à décider sans surcharge d'informations.";
$s9_p1 = "Vous recevez des analyses prétraitées qui prennent en compte à la fois les indicateurs techniques et le comportement du marché — afin que vous puissiez agir avec plus de rapidité, de confiance et de précision.";
$s9_img_alt = "$site_name stratégie d'investissement";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Ce que disent nos utilisateurs";
$review_1_text = "La plateforme est très intuitive, et ses outils m'ont aidé à améliorer mes résultats de trading.";
$review_2_text = "Assistance rapide et ressources d'apprentissage vraiment utiles — parfait pour les débutants.";
$review_3_text = "Graphiques personnalisables et exécution rapide — c'est mon premier choix depuis des mois.";
$review_4_text = "S'inscrire a pris moins de cinq minutes, et le tableau de bord permet de voir facilement exactement où se trouve mon argent.";
$review_5_text = "J'aime que la plateforme explique le raisonnement derrière chaque signal au lieu de simplement me donner des chiffres.";
$review_6_text = "Les retraits ont toujours été rapides pour moi, et l'équipe d'assistance répond effectivement en quelques minutes.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Questions fréquemment posées à propos de $site_name";
$faq_q1 = "$site_name peut-il détecter les changements de marché en temps réel ?";
$faq_a1 = "Oui. Il suit les données en direct, identifie les changements de momentum dès leurs premières étapes et repère les tendances avant qu'elles ne se développent pleinement, offrant aux utilisateurs un avantage opportun.";
$faq_q2 = "L'expérience $site_name peut-elle être personnalisée ?";
$faq_a2 = "Oui. Les utilisateurs peuvent choisir des domaines d'intérêt, ajuster le niveau de détail et suivre des stratégies publiques correspondant à leur style de trading ou à leurs besoins d'apprentissage.";
$faq_q3 = "$site_name remplace-t-il les méthodes de recherche traditionnelles ?";
$faq_a3 = "Non. Il les améliore en offrant rapidement des informations filtrées par l'IA, tandis que l'utilisateur garde le contrôle total de sa propre recherche et de ses décisions.";
$faq_cta = "Découvrir plus maintenant";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Points forts de $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Coût d'inscription";
$hl1_desc = "Aucuns frais pour s'inscrire";
$hl2_emoji = "💰";
$hl2_title = "Commissions de trading";
$hl2_desc = "Aucun coût du tout";
$hl3_emoji = "📋";
$hl3_title = "Facilité d'inscription";
$hl3_desc = "L'inscription est rapide et simple";
$hl4_emoji = "📊";
$hl4_title = "Focus éducatif";
$hl4_desc = "Leçons sur la crypto, le trading Forex et l'investissement";
$hl5_emoji = "🌎";
$hl5_title = "Pays disponibles";
$hl5_desc = "Non disponible aux États-Unis, disponible dans la plupart des autres pays";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Tradez intelligemment, grandissez avec confiance";
$footnav_about = "À propos de nous";
$footnav_product = "Produit";
$footnav_offer = "Offre";
$footnav_contacts = "Contactez-nous";
$footnav_faq = "FAQ";
$footnav_privacy = "Politique de confidentialité";
$footnav_conditions = "Conditions d'utilisation";
$footnav_risk = "Avertissement sur les risques";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publie du matériel éducatif général couvrant le trading, l'investissement, les marchés financiers et les actifs numériques. Les articles, données de marché, graphiques et autres contenus du site sont fournis à titre informatif et ne doivent pas être considérés comme des conseils financiers, d'investissement ou juridiques. Bien que nous nous efforcions de fournir des informations fiables et à jour, nous ne pouvons garantir leur exactitude ou leur exhaustivité et ne sommes pas responsables des pertes résultant de la confiance accordée au contenu.<br><br>Le trading comporte des risques, et les cryptomonnaies, le Forex, les CFD, les actions et autres produits financiers peuvent fluctuer considérablement en valeur. Tenez compte de votre propre situation financière et de votre tolérance au risque avant de trader, et demandez un avis professionnel si nécessaire. N'engagez jamais des fonds que vous ne pouvez pas vous permettre de perdre.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Conseillère en Trading";
$quiz_text_welcome = "Bonjour ! Je suis Sofia, votre conseillère personnelle en trading. Avez-vous quelques minutes pour trouver le meilleur plan pour vous ?";
$quiz_text_q1 = "Avez-vous déjà tradé ?";
$quiz_text_a1_yes = "Oui, j'ai de l'expérience";
$quiz_text_a1_no = "Non, je suis débutant";
$quiz_text_q2 = "Génial ! Quel est votre prénom afin que je puisse personnaliser votre plan ?";
$quiz_text_q3 = "Quel est votre objectif principal en matière de trading ?";
$quiz_text_a3_yes = "Construire une richesse à long terme";
$quiz_text_a3_no = "Générer un revenu à court terme";
$quiz_text_q4 = "Avec combien souhaitez-vous commencer ?";
$quiz_text_a4_1 = "Moins de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Plus de $1000";
$quiz_text_q5 = "Parfait. Souhaitez-vous que j'ouvre maintenant un compte gratuit pour vous ?";
$quiz_text_a5_yes = "Oui, faisons-le";
$quiz_text_a5_no = "Pas maintenant";
$quiz_text_loader = "Recherche de votre meilleur plan...";
$quiz_text_final_ttl = "Tout est prêt !";
$quiz_text_processing = "Envoi de vos informations...";
$quiz_text_typing = "est en train d'écrire...";
$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom de famille";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Obtenir mon compte gratuit";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Accueil";
$bc_about = "À propos de nous";
$bc_product = "Produit";
$bc_offer = "Offre";
$bc_contacts = "Contactez-nous";
$bc_faq = "FAQ";
$bc_privacy = "Politique de confidentialité";
$bc_conditions = "Conditions d'utilisation";
$bc_risk = "Avertissement sur les risques";
$bc_sign = "S'inscrire";
$bc_thanks = "Merci";
$bc_sitemap = "Plan du site";

// -------------------------
// About page
// -------------------------
$about_meta_title = "À propos de $site_name";
$about_meta_description = "Découvrez la mission de $site_name : rendre l'analyse de marché plus claire et plus accessible grâce à des outils pilotés par l'IA.";
$about_h1 = "À propos de $site_name";
$about_lead = "$site_name a été construit autour d'une idée : les décisions de trading doivent être basées sur des informations claires, pas sur des suppositions.";
$about_p1 = "Nous combinons l'intelligence artificielle avec une expérience réelle du marché pour transformer des données complexes et bruyantes en signaux faciles à comprendre et à exploiter. Notre plateforme surveille les marchés 24h/24 afin que vous n'ayez pas à le faire.";
$about_p2 = "Que vous effectuiez votre première transaction ou que vous soyez actif sur les marchés depuis des années, $site_name est conçu pour vous rencontrer là où vous en êtes — avec des outils qui vont d'un guidage simple à des analyses avancées en temps réel.";
$about_p3 = "Nous pensons que la technologie doit soutenir votre jugement, pas le remplacer. Chaque signal que $site_name produit est destiné à éclairer une décision qui reste entièrement la vôtre.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Produit — Outils d'analyse de marché par IA";
$product_meta_description = "Découvrez le produit $site_name : analyse de marché par IA en temps réel, copy trading, contrôles de risque et diversification automatisée.";
$product_h1 = "Le produit $site_name";
$product_lead = "Une plateforme qui lit le marché pour vous : analyse en temps réel, copy trading et outils de risque flexibles, conçus pour clarifier les décisions de trading.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Offre $site_name — Commencez gratuitement";
$offer_meta_description = "Découvrez ce qui est inclus dans l'offre $site_name actuelle : inscription gratuite, aucune commission de trading et accès complet à la plateforme.";
$offer_h1 = "Notre offre actuelle";
$offer_lead = "Créez votre compte gratuitement et débloquez la plateforme $site_name complète &mdash; aucuns frais d'inscription, aucune commission de trading.";
$offer_li1 = "Aucuns frais pour enregistrer votre compte";
$offer_li2 = "Aucune commission sur les transactions";
$offer_li3 = "Accès complet à l'analyse de marché par IA en temps réel et au copy trading";
$offer_li4 = "Retraits disponibles à tout moment, sans frais cachés";
$offer_li5 = "Ressources éducatives sur la crypto, le Forex et l'investissement incluses";
$offer_note = "La disponibilité peut varier selon la région. Consultez notre <a class=\"link\" href=\"risk-warning.php\">Avertissement sur les risques</a> avant de financer un compte.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contactez $site_name — Entrez en contact avec notre équipe";
$contacts_meta_description = "Vous avez une question à propos de votre compte $site_name ou de la plateforme ? Contactez notre équipe d'assistance par e-mail ou envoyez-nous un message.";
$contacts_h1 = "Contactez-nous";
$contacts_lead = "Des questions sur votre compte, un dépôt, ou le fonctionnement de la plateforme ? Notre équipe est là pour vous aider.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Heures d'assistance";
$contacts_hours_value = "24/7";
$contacts_response_label = "Temps de réponse typique";
$contacts_response_value = "Dans les 24 heures";
$contacts_form_title = "Envoyez-nous un message";
$contacts_form_desc = "Laissez vos coordonnées ci-dessous et un membre de notre équipe vous contactera directement.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Politique de confidentialité de $site_name";
$privacy_meta_description = "Découvrez comment $site_name collecte, utilise et protège vos informations personnelles sur l'ensemble du site et de la plateforme.";
$privacy_sections = [
    [
        "title" => "1. Introduction",
        "body" => "Cette Politique de confidentialité explique comment $site_name (\"nous\") collecte, utilise et protège les informations personnelles des visiteurs et utilisateurs de $site_domain (le \"Site Web\"). En utilisant le Site Web, vous acceptez les pratiques décrites ci-dessous.",
    ],
    [
        "title" => "2. Informations que nous collectons",
        "body" => "Nous pouvons collecter des informations que vous fournissez directement, telles que votre nom, votre adresse e-mail et votre numéro de téléphone lors de l'inscription ou de la soumission d'un formulaire, ainsi que des informations collectées automatiquement, y compris votre adresse IP, le type d'appareil et de navigateur, et les pages consultées sur le Site Web.",
    ],
    [
        "title" => "3. Comment nous utilisons vos informations",
        "body" => "Nous utilisons les informations collectées pour créer et gérer votre compte, répondre aux demandes, fournir un support client, améliorer le Site Web et nos services, et, lorsque cela est permis, envoyer des mises à jour sur les produits et offres. Vous pouvez vous désabonner des communications marketing à tout moment.",
    ],
    [
        "title" => "4. Cookies et technologies de suivi",
        "body" => "Le Site Web utilise des cookies et des technologies similaires pour mémoriser vos préférences, vous garder connecté et comprendre comment les visiteurs utilisent nos pages. Vous pouvez désactiver les cookies via les paramètres de votre navigateur, bien que certaines fonctionnalités puissent ne pas fonctionner correctement en conséquence.",
    ],
    [
        "title" => "5. Partage d'informations",
        "body" => "Nous ne vendons pas vos informations personnelles. Nous pouvons partager des informations avec des prestataires de services de confiance qui nous aident à exploiter le Site Web (comme des fournisseurs d'hébergement ou d'analyse), ou lorsque la loi l'exige ou pour protéger nos droits légaux.",
    ],
    [
        "title" => "6. Sécurité des données",
        "body" => "Nous appliquons des mesures techniques et organisationnelles raisonnables pour protéger vos informations contre tout accès, altération ou perte non autorisés. Aucune méthode de transmission ou de stockage n'est totalement sécurisée, et nous ne pouvons garantir une sécurité absolue.",
    ],
    [
        "title" => "7. Vos droits et choix",
        "body" => "Selon votre emplacement, vous pouvez avoir le droit d'accéder à vos informations personnelles, de les corriger ou d'en demander la suppression, et de vous opposer à certaines utilisations. Pour exercer ces droits, veuillez nous contacter via notre <a class=\"link\" href=\"contacts.php\">page de contact</a>.",
    ],
    [
        "title" => "8. Confidentialité des enfants",
        "body" => "Le Site Web ne s'adresse pas aux personnes de moins de 18 ans, et nous ne collectons pas sciemment d'informations personnelles auprès de mineurs. Si vous pensez qu'un mineur nous a fourni des informations personnelles, veuillez nous contacter afin que nous puissions les supprimer.",
    ],
    [
        "title" => "9. Modifications de cette politique",
        "body" => "Nous pouvons mettre à jour cette Politique de confidentialité de temps à autre. Tout changement sera publié sur cette page avec une date d'entrée en vigueur révisée. Nous vous encourageons à consulter cette page périodiquement.",
    ],
    [
        "title" => "10. Contactez-nous",
        "body" => "Si vous avez des questions sur cette Politique de confidentialité ou sur la manière dont vos informations sont traitées, veuillez nous contacter via notre <a class=\"link\" href=\"contacts.php\">page de contact</a> ou par e-mail à info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Conditions d'utilisation de $site_name";
$conditions_meta_description = "Consultez les Conditions d'utilisation régissant l'accès et l'utilisation du site web et de la plateforme de trading $site_name.";
$conditions_sections = [
    [
        "title" => "1. Acceptation des conditions",
        "body" => "En accédant à $site_domain ou en l'utilisant (le \"Site Web\"), vous acceptez d'être lié par ces Conditions d'utilisation. Si vous n'êtes pas d'accord avec une partie de ces conditions, veuillez ne pas utiliser le Site Web.",
    ],
    [
        "title" => "2. Éligibilité",
        "body" => "Vous devez avoir au moins 18 ans et être légalement autorisé à utiliser des services liés au trading dans votre juridiction pour utiliser le Site Web. En utilisant le Site Web, vous confirmez que vous remplissez ces exigences.",
    ],
    [
        "title" => "3. Description du service",
        "body" => "$site_name fournit une plateforme en ligne avec du contenu éducatif, des informations de marché et des outils d'analyse assistés par IA. Rien sur le Site Web ne constitue un conseil financier, d'investissement, fiscal ou juridique, et toutes les informations fournies le sont à des fins d'information générale uniquement.",
    ],
    [
        "title" => "4. Responsabilités de l'utilisateur",
        "body" => "Vous êtes responsable de fournir des informations exactes lors de l'inscription, de maintenir la confidentialité des identifiants de votre compte, et de toute activité se produisant sous votre compte.",
    ],
    [
        "title" => "5. Propriété intellectuelle",
        "body" => "Tout le contenu du Site Web, y compris le texte, les graphiques, les logos et le logiciel, est la propriété de $site_name ou de ses concédants de licence et est protégé par les lois applicables en matière de propriété intellectuelle. Vous ne pouvez pas reproduire ou distribuer ce contenu sans autorisation.",
    ],
    [
        "title" => "6. Aucun conseil financier",
        "body" => "Le contenu du Site Web est fourni uniquement à des fins informatives et éducatives et ne doit pas être interprété comme un conseil financier. Vous êtes seul responsable de vos propres décisions de trading et devez consulter un conseiller financier indépendant si nécessaire. Consultez notre <a class=\"link\" href=\"risk-warning.php\">Avertissement sur les risques</a> pour plus d'informations.",
    ],
    [
        "title" => "7. Limitation de responsabilité",
        "body" => "Dans toute la mesure permise par la loi, $site_name ne sera pas responsable de tout dommage direct, indirect, accessoire ou consécutif résultant de votre utilisation ou de votre incapacité à utiliser le Site Web ou tout service tiers lié.",
    ],
    [
        "title" => "8. Résiliation",
        "body" => "Nous nous réservons le droit de suspendre ou de résilier votre accès au Site Web à notre discrétion, sans préavis, pour toute conduite que nous estimons violer ces Conditions d'utilisation ou nuire autrement à d'autres utilisateurs ou au Site Web.",
    ],
    [
        "title" => "9. Modifications de ces conditions",
        "body" => "Nous pouvons réviser ces Conditions d'utilisation à tout moment. L'utilisation continue du Site Web après la publication des modifications constitue une acceptation des conditions mises à jour.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Les questions concernant ces Conditions d'utilisation peuvent être adressées à notre équipe via la <a class=\"link\" href=\"contacts.php\">page de contact</a> ou par e-mail à info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Avertissement sur les risques $site_name — Divulgation des risques de trading";
$risk_meta_description = "Lisez l'avertissement sur les risques de $site_name avant de trader : risques du marché des cryptomonnaies, effet de levier, liquidité, cybersécurité et considérations réglementaires.";
$risk_title = "Avertissement sur les risques";
$risk_intro = "Comprendre les risques est la première étape vers un trading confiant.";
$risk_ai_title = "Comment notre système d'IA aide à gérer le risque :";
$risk_ai_1_title = "Efficacité algorithmique et trading sans émotion :";
$risk_ai_1_text = "Des algorithmes avancés analysent les signaux du marché pour exécuter des transactions de manière objective aux moments optimaux.";
$risk_ai_2_title = "Stratégies basées sur les données :";
$risk_ai_2_text = "Les stratégies sont basées sur des tendances de marché vérifiées et une analyse en temps réel plutôt que sur des suppositions.";
$risk_ai_3_title = "Paramètres flexibles et contrôle total :";
$risk_ai_3_text = "Ajustez vos paramètres de risque à tout moment. Suivez tous les soldes et transactions de manière transparente sur votre tableau de bord, sans frais cachés et avec des retraits sans restriction.";
$risk_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours des risques. Les systèmes automatisés (y compris l'IA) ne garantissent pas de profit, peuvent échouer en raison d'erreurs logicielles ou d'événements de marché inattendus, et nécessitent une surveillance de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme sert des fins purement informatives et marketing et ne fournit pas de conseils financiers.";
$risk_s1_title = "1. Risques généraux et liés au marché des cryptomonnaies";
$risk_s1_text = "Les cryptomonnaies sont des actifs hautement volatils et spéculatifs qui fonctionnent 24h/24 et 7j/7 avec une supervision réglementaire minimale dans la plupart des juridictions.";
$risk_s1_li1 = "Les valeurs peuvent fluctuer de manière spectaculaire sur de courtes périodes, entraînant potentiellement une perte totale du capital investi.";
$risk_s1_li2 = "Les valeurs de marché peuvent être fortement impactées par des changements réglementaires, des développements techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_s1_li3 = "Certains actifs peuvent perdre complètement toute leur valeur. N'investissez que des fonds que vous pouvez vous permettre de perdre.";
$risk_s2_title = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_s2_li1_title = "Volatilité du marché et liquidité :";
$risk_s2_li1_text = "Des mouvements de prix extrêmes (10 à 20 %+ par jour) ou une faible liquidité (en particulier pour les plus petites pièces) peuvent entraîner des retards, des interruptions de plateforme et un glissement d'exécution sévère. Les ordres stop-loss ne peuvent pas garantir des limites de perte dans des conditions extrêmes.";
$risk_s2_li2_title = "Risques d'effet de levier et de marge :";
$risk_s2_li2_text = "Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lors du trading de produits à effet de levier.";
$risk_s3_title = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_s3_li1_title = "Facteurs techniques :";
$risk_s3_li1_text = "Le trading en ligne comporte intrinsèquement des risques de déconnexion internet, d'erreurs matérielles/logicielles et d'indisponibilité du service.";
$risk_s3_li2_title = "Cybersécurité :";
$risk_s3_li2_text = "Les comptes de cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratage. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte permanente.";
$risk_s3_li3_title = "Plateformes tierces :";
$risk_s3_li3_text = "Ce site web peut connecter les utilisateurs à des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leurs opérations ou leur solvabilité. Effectuez toujours votre propre diligence raisonnable approfondie avant de déposer des fonds sur des plateformes externes.";
$risk_s4_title = "4. Dispositions réglementaires, fiscales et finales";
$risk_s4_li1_title = "Conformité légale et fiscalité :";
$risk_s4_li1_text = "Les cadres réglementaires varient considérablement et changent rapidement. Les utilisateurs sont seuls responsables de s'assurer que leur activité de trading est conforme aux lois locales et de remplir leurs propres obligations fiscales.";
$risk_s4_li2_title = "Aucune garantie de profit :";
$risk_s4_li2_text = "Il n'existe pas de trading de crypto \"sûr\" ou sans risque. Tous les chiffres de rendement ou exemples de performance sont purement hypothétiques.";
$risk_s4_li3_title = "Adéquation :";
$risk_s4_li3_text = "Si vous ne comprenez pas pleinement les risques, dépendez de fonds essentiels ou tradez avec de l'argent emprunté, le trading de crypto ne vous convient pas. Consultez un conseiller financier indépendant agréé en cas d'incertitude.";
$risk_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe officielle de support client via le formulaire de contact sur notre site web.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Inscrivez-vous | $site_name — Créez Votre Compte Gratuit";
$sign_meta_description = "Créez votre compte $site_name gratuit en quelques minutes et commencez à trader plus intelligemment avec une analyse de marché alimentée par l'IA.";
$sign_h1 = "Créez Votre Compte Gratuit";
$sign_lead = "Rejoignez $site_name en quelques minutes. Remplissez vos informations ci-dessous pour commencer.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Merci | $site_name";
$thanks_h1 = "Merci !";
$thanks_text = "Vos informations ont été reçues. Un membre de l'équipe $site_name vous contactera bientôt pour vous aider à démarrer.";
$thanks_btn = "Retour à l'accueil";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Plan du site | $site_name";
$sitemap_meta_description = "Parcourez toutes les pages du site $site_name, y compris la plateforme de trading, l'offre, le support et les pages légales.";
$sitemap_h1 = "Plan du site";
$sitemap_lead = "Toutes les pages de $site_name en un seul endroit.";

