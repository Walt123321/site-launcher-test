<?php
require __DIR__ . '/../lang.php';
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// ============================================================
// ES TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Sitio Oficial | Plataforma de Trading";
$home_meta_description = "$site_name ofrece una plataforma de trading fácil de usar con herramientas de mercado avanzadas, información en tiempo real y funciones prácticas diseñadas para hacer el trading en línea más accesible e informado.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Plataforma $site_name";
$hero_subtitle = "Apoyando a millones en todo el mundo en su viaje con activos digitales";
$hero_badge_title = "Miembros Satisfechos";
$hero_badge_subtitle = "Amado por millones";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Empieza a Operar Hoy";
$form_desc = "¿Listo para dar el paso? Regístrate ahora y da el primer paso hacia la libertad financiera. Comienza con solo $app_price $app_currency — accede a cada herramienta de trading, datos de mercado en tiempo real y acceso completo a la plataforma desde el primer día.";
$form_fname_placeholder = "Nombre";
$form_lname_placeholder = "Apellido";
$form_email_placeholder = "Correo Electrónico";
$form_btn_submit = "Registrarse";
$form_disclaimer_text = "Al introducir tu información personal y hacer clic en el botón, aceptas la <a class=\"link\" href=\"privacy.php\">Política de Privacidad</a> y los <a class=\"link\" href=\"conditions.php\">Términos y Condiciones</a> del sitio web.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SEGURO";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Conoce la Plataforma";
$stats_title = "Una breve introducción a un trading más inteligente";
$stat_1_value = "154+";
$stat_1_label = "Países Cubiertos";
$stat_2_value = "29 Millones";
$stat_2_label = "Inversores Globales";
$stat_3_value = "635+";
$stat_3_label = "Monedas";
$stat_4_value = "3260 Millones $";
$stat_4_label = "Volumen de Trading en 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "¿Por qué $site_name?";
$why_title = "Razones para Elegirnos";
$why_1_title = "Rápido &amp; Fácil";
$why_1_text = "Compra y vende tus criptomonedas favoritas en segundos.";
$why_2_title = "Seguro &amp; Protegido";
$why_2_text = "Utilizamos la tecnología más reciente para mantener tus fondos y datos seguros.";
$why_3_title = "Abierto para Todos";
$why_3_text = "Opera en nuestra plataforma 24/7, dondequiera y cuando quieras.";
$why_4_title = "Herramientas Profesionales";
$why_4_text = "Desde funciones de trading simples hasta profesionales, lo tenemos todo.";
$why_5_title = "Tendencias &amp; Perspectivas";
$why_5_text = "Recibe las últimas noticias, perspectivas y tendencias cripto de expertos.";
$why_6_title = "Soporte 24/7";
$why_6_text = "Nuestro amigable equipo de soporte está aquí para ayudarte en cualquier momento.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Cómo Funciona";
$how_title = "Pasos Sencillos para Comenzar a Operar";
$how_1_title = "Registrarse";
$how_1_text = "Crea una cuenta y comienza a operar en cuestión de minutos.";
$how_1_btn = "Empezar a Operar";
$how_2_title = "Deposita Fondos";
$how_2_text = "Financia tu cuenta con un depósito mínimo de $app_price $app_currency para desbloquear el acceso completo al trading. Elige entre múltiples métodos de pago y comienza a hacer crecer tu portafolio hoy mismo.";
$how_2_note = "Añadir fondos....";
$how_3_title = "Empezar a Operar";
$how_3_text = "Explora el mercado y opera a tu manera.";
$how_3_note = "Comprar y HODLear";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calculadora";
$calc_title = "Descubre cuánto tiempo y potencial estás dejando sobre la mesa";
$calc_volume_label = "Volumen de Trading Mensual";
$calc_trades_label = "Operaciones por Semana";
$calc_time_label = "Tiempo que Podrías Ahorrar";
$calc_boost_label = "Aumento Potencial de Volumen";
$calc_btn = "Empezar a Operar";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Características";
$features_title = "El Poder de $site_name";
$feature_1_title = "Trading Spot";
$feature_1_text = "Maximiza tu potencial de trading con herramientas profesionales.";
$feature_2_title = "Comprar Cripto";
$feature_2_text = "Compra cripto usando tarjetas o bancos.";
$feature_3_title = "Derivados Cripto";
$feature_3_text = "Trading de futuros fácil y avanzado.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Haz crecer tu patrimonio con facilidad.";
$feature_5_title = "Bot de Trading";
$feature_5_text = "Mayores ganancias, incluso mientras duermes.";
$feature_6_title = "Trading con Margen";
$feature_6_text = "Pide prestado, opera y paga fácilmente.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Lo Que Dicen Nuestros Usuarios";
$review_1_text = "La plataforma es muy fácil de usar, y he visto un progreso constante desde que me convertí en holder. El compromiso del equipo y sus ideas frescas me hacen esperar con interés lo que viene a continuación!";
$review_1_role = "Trader";
$review_2_text = "$site_name ofrece una experiencia de trading fluida e intuitiva. Pude comenzar a comprar y operar cripto de inmediato. La interfaz es fácil de usar y las velocidades de transacción son excelentes!";
$review_2_role = "Nuevo Trader";
$review_3_text = "Confío en esta plataforma para gestionar mis inversiones en cripto. Sus funciones de seguridad me dan confianza, y no he experimentado ningún problema con retiros o depósitos. Es uno de los exchanges más confiables que he usado.";
$review_3_role = "Trader Profesional";
$review_4_text = "Siempre que he tenido preguntas, el equipo de atención al cliente ha sido rápido y servicial. Realmente se preocupan por sus usuarios y hacen que cada experiencia de trading sea fluida y sencilla.";
$review_4_role = "Trader Experimentado";
$review_5_text = "Como principiante, encontré $site_name muy fácil de usar. Lo que realmente destaca es la variedad de herramientas avanzadas para traders más experimentados. Es una opción sólida para cualquiera que busque construir su portafolio!";
$review_5_role = "Trader de la Comunidad";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Preguntas Frecuentes";
$faq_title = "Preguntas Frecuentes";
$faq_q1 = "¿Qué es $site_name?";
$faq_a1 = "$site_name es un exchange de criptomonedas donde los usuarios pueden operar fácilmente con una amplia gama de monedas, incluyendo Bitcoin, Ethereum y otras criptomonedas populares.";
$faq_q2 = "¿Qué Tan Seguro es $site_name para el Trading de Cripto?";
$faq_a2 = "La plataforma ofrece seguridad a través de tecnología avanzada y respaldo de activos 1:1 mediante Prueba de Reservas.";
$faq_q3 = "¿Cómo Hago un Depósito?";
$faq_a3 = "$site_name ofrece varias opciones de depósito, incluyendo depósito cripto, depósito fiat, trading P2P y compra con un clic.";
$faq_q4 = "¿Necesito Experiencia para Usar $site_name?";
$faq_a4 = "No, no necesitas ninguna experiencia. La interfaz fácil de usar de la plataforma la hace accesible para todos, desde principiantes hasta traders avanzados.";
$faq_q5 = "¿Hay comisiones o costos ocultos?";
$faq_a5 = "Ninguno en absoluto. No hay comisiones de registro, costos de suscripción ni cargos ocultos de ningún tipo. Siempre ves el monto exacto de la transacción antes de confirmar. Los ingresos provienen de funciones premium y asociaciones de intercambio, no de tomar dinero de los usuarios.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Empieza a Operar Hoy";
$cta_desc = "¿Listo para dar el paso? Regístrate ahora y da el primer paso hacia la independencia financiera.";
$cta_btn = "Registrarse";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Características Principales de la Plataforma de Trading $site_name";
$table_1_label = "🤖 Tecnología de la Plataforma";
$table_1_val = "Motor de Trading IA Avanzado";
$table_2_label = "💳 Métodos de Financiación";
$table_2_val = "Principales Tarjetas de Crédito, Transferencia Bancaria, PayPal";
$table_3_label = "📱 Acceso a la Plataforma";
$table_3_val = "Compatibilidad Multi-dispositivo";
$table_4_label = "🚀 Tasa de Rendimiento";
$table_4_val = "85% de Precisión";
$table_5_label = "📊 Instrumentos de Trading";
$table_5_val = "Acciones, Forex, Materias Primas, Metales Preciosos, CFD, Criptomonedas y más…";
$table_6_label = "✍️ Configuración de Cuenta";
$table_6_val = "Rápida y Eficiente";
$table_7_label = "📞 Atención al Cliente";
$table_7_val = "Asistencia Profesional 24/7";

// Reviews summary card
$summary_title = "Reseñas de $site_name";
$summary_badge = "Confiable";
$summary_desc = "Una plataforma de trading potente y fácil de usar con sólida automatización y recursos educativos.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Opera con inteligencia, crece rápido";
$footer_community_label = "Comunidad";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Producto";
$footnav_offer = "Oferta";
$footnav_contacts = "Contacto";
$footnav_faq = "Preguntas Frecuentes";
$footnav_privacy = "Política de Privacidad";
$footnav_conditions = "Términos y Condiciones";
$footnav_risk = "Advertencia de Riesgo";
$footer_disclaimer = "$site_name comparte recursos educativos y material relacionado con el mercado para ayudar a los visitantes a comprender mejor el trading, la inversión y los productos financieros digitales. La información presentada en el sitio web, como comentarios de mercado, precios de activos, gráficos, guías y contenido analítico, se proporciona con fines informativos generales y no constituye asesoramiento financiero, de inversión, fiscal o legal. Aunque se realizan esfuerzos razonables para mantener información precisa y relevante, $site_name no ofrece garantías respecto a la integridad, precisión o actualidad del contenido y no puede ser responsable de decisiones o pérdidas resultantes de su uso.<br><br>La participación en los mercados financieros conlleva riesgos inherentes. Las criptomonedas, Forex, CFD, acciones y otros instrumentos de trading pueden experimentar fluctuaciones sustanciales de precio, y pueden producirse pérdidas. Las circunstancias individuales y la tolerancia al riesgo varían, por lo que los usuarios deben realizar su propia investigación y considerar obtener asesoramiento de un profesional financiero calificado antes de comprometer fondos. Nunca operes con dinero que no puedas permitirte perder.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Consultora de Trading";
$quiz_text_welcome = "¡Hola! Soy Maya, tu consultora personal de trading. ¿Tienes un par de minutos para encontrar el mejor plan para ti?";
$quiz_text_q1 = "¿Has operado con criptomonedas antes?";
$quiz_text_a1_yes = "Sí, tengo experiencia";
$quiz_text_a1_no = "No, soy principiante";
$quiz_text_q2 = "¡Genial! ¿Cuál es tu nombre para poder personalizar tu plan?";
$quiz_text_q3 = "¿Cuál es tu objetivo principal con el trading?";
$quiz_text_a3_yes = "Construir riqueza a largo plazo";
$quiz_text_a3_no = "Generar ingresos a corto plazo";
$quiz_text_q4 = "¿Con cuánto te gustaría empezar?";
$quiz_text_a4_1 = "Menos de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Más de $1000";
$quiz_text_q5 = "Perfecto. ¿Te gustaría que abra una cuenta gratuita para ti ahora?";
$quiz_text_a5_yes = "Sí, hagámoslo";
$quiz_text_a5_no = "Ahora no";
$quiz_text_loader = "Buscando tu mejor plan...";
$quiz_text_final_ttl = "¡Todo listo!";
$quiz_text_processing = "Tus datos se están enviando...";
$quiz_text_typing = "está escribiendo...";
$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellido";
$quiz_placeholder_email = "Correo Electrónico";
$quiz_btn_submit = "Obtener Mi Cuenta Gratuita";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Advertencia de Riesgo de $site_name — Divulgación de Riesgos de Trading";
$risk_meta_description = "Lee la advertencia de riesgo de $site_name antes de operar: riesgos del mercado de criptomonedas, apalancamiento, liquidez, ciberseguridad y consideraciones regulatorias.";
$risk_title = "Advertencia de Riesgo";
$risk_intro = "Comprender los riesgos es el primer paso hacia un trading seguro.";
$risk_ai_title = "Cómo Nuestro Sistema de IA Ayuda a Gestionar el Riesgo:";
$risk_ai_1_title = "Eficiencia Algorítmica &amp; Trading Sin Emociones:";
$risk_ai_1_text = "Algoritmos avanzados analizan las señales del mercado para ejecutar operaciones objetivamente en momentos óptimos.";
$risk_ai_2_title = "Estrategias Basadas en Datos:";
$risk_ai_2_text = "Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real en lugar de conjeturas.";
$risk_ai_3_title = "Configuración Flexible &amp; Control Total:";
$risk_ai_3_text = "Ajusta tus parámetros de riesgo en cualquier momento. Rastrea todos los saldos y operaciones de forma transparente en tu panel, sin comisiones ocultas y sin restricciones de retiro.";
$risk_disclaimer = "<strong>Descargo de responsabilidad:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan ganancias, pueden fallar debido a errores de software o eventos de mercado inesperados, y requieren supervisión del usuario. El rendimiento pasado no es indicativo de resultados futuros. Esta plataforma sirve únicamente para fines informativos y de marketing y no proporciona asesoramiento financiero.";
$risk_s1_title = "1. Riesgos Generales &amp; del Mercado de Criptomonedas";
$risk_s1_text = "Las criptomonedas son activos altamente volátiles y especulativos que operan 24/7 con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_s1_li1 = "Los valores pueden fluctuar drásticamente en cortos períodos, lo que potencialmente puede llevar a una pérdida total del capital invertido.";
$risk_s1_li2 = "Los valores de mercado pueden verse fuertemente afectados por cambios regulatorios, desarrollos técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_s1_li3 = "Algunos activos pueden perder completamente todo su valor. Invierte solo fondos que puedas permitirte perder.";
$risk_s2_title = "2. Riesgos de Ejecución, Liquidez &amp; Apalancamiento";
$risk_s2_li1_title = "Volatilidad del Mercado &amp; Liquidez:";
$risk_s2_li1_text = "Los movimientos extremos de precio (10-20%+ diarios) o la baja liquidez (especialmente en monedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un deslizamiento severo en la ejecución. Las órdenes de stop-loss no pueden garantizar límites de pérdida en condiciones extremas.";
$risk_s2_li2_title = "Riesgos de Apalancamiento &amp; Margen:";
$risk_s2_li2_text = "Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puedes perder más que tu depósito inicial. <em>Aproximadamente el 70-80% de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.</em>";
$risk_s3_title = "3. Riesgos Técnicos, de Ciberseguridad &amp; de Terceros";
$risk_s3_li1_title = "Factores Técnicos:";
$risk_s3_li1_text = "El trading en línea implica inherentemente riesgos de desconexiones a internet, errores de hardware/software e indisponibilidad del servicio.";
$risk_s3_li2_title = "Ciberseguridad:";
$risk_s3_li2_text = "Las cuentas de criptomonedas son blancos frecuentes de phishing, malware y hackeos. Las transacciones son irreversibles; comprometer tus credenciales puede resultar en una pérdida permanente.";
$risk_s3_li3_title = "Plataformas de Terceros:";
$risk_s3_li3_text = "Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, operaciones o solvencia. Realiza siempre tu propia diligencia debida antes de depositar fondos en plataformas externas.";
$risk_s4_title = "4. Disposiciones Regulatorias, Fiscales &amp; Finales";
$risk_s4_li1_title = "Cumplimiento Legal &amp; Impuestos:";
$risk_s4_li1_text = "Los marcos regulatorios varían ampliamente y cambian rápidamente. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con las leyes locales y de cumplir con sus propias obligaciones fiscales.";
$risk_s4_li2_title = "Sin Garantías de Ganancias:";
$risk_s4_li2_text = "No existe un trading cripto \"seguro\" o libre de riesgos. Cualquier cifra de rendimiento o ejemplo de desempeño proporcionado es puramente hipotético.";
$risk_s4_li3_title = "Idoneidad:";
$risk_s4_li3_text = "Si no comprendes completamente los riesgos, dependes de fondos esenciales o operas con dinero prestado, el trading de cripto no es adecuado para ti. Consulta a un asesor financiero independiente y licenciado si tienes dudas.";
$risk_contact = "<strong>Contacto:</strong> Para cualquier pregunta sobre esta declaración o para enviar una consulta, ponte en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto en nuestro sitio web.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Inicio";
$bc_product = "Producto";
$bc_offer = "Oferta";
$bc_contacts = "Contacto";
$bc_faq = "Preguntas Frecuentes";
$bc_privacy = "Política de Privacidad";
$bc_conditions = "Términos y Condiciones";
$bc_risk = "Advertencia de Riesgo";
$bc_sign = "Registrarse";
$bc_sitemap = "Mapa del Sitio";
$bc_thanks = "Gracias";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Producto $site_name — Herramientas de Trading &amp; Funciones de la Plataforma";
$product_meta_description = "Descubre el producto $site_name: trading spot, derivados cripto, un bot de trading, trading con margen y más, todo construido sobre una plataforma rápida y segura.";
$product_h1 = "El Producto de Trading $site_name";
$product_lead = "Una plataforma, cada herramienta que un trader necesita: desde tu primera operación spot hasta estrategias automatizadas y posiciones con margen, $site_name mantiene la experiencia rápida, segura y fácil de entender.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Oferta $site_name — Empieza a Operar Desde $$app_price";
$offer_meta_description = "Descubre lo que está incluido en la oferta actual de $site_name: un bajo depósito mínimo de $$app_price, acceso completo a la plataforma y sin comisiones ocultas.";
$offer_h1 = "Nuestra Oferta Actual";
$offer_lead = "Comienza con tan solo <strong>$$app_price $app_currency</strong> y desbloquea la plataforma $site_name completa desde el primer día &mdash; cada herramienta, cada mercado, sin costos ocultos.";
$offer_li1 = "Depósito mínimo de solo $$app_price $app_currency para activar tu cuenta";
$offer_li2 = "Acceso completo al trading spot, derivados, margen y el bot de trading";
$offer_li3 = "Múltiples métodos de financiación, incluyendo tarjetas y transferencia bancaria";
$offer_li4 = "Sin comisiones de registro, sin costos de suscripción, sin cargos ocultos";
$offer_li5 = "Atención al cliente 24/7 mientras comienzas";
$offer_note = "Los montos de depósito y los métodos de pago disponibles pueden variar según la región. Revisa nuestra <a class=\"link\" href=\"risk-warning.php\">Advertencia de Riesgo</a> antes de financiar una cuenta.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Contacta a $site_name — Ponte en Contacto con Nuestro Equipo";
$contacts_meta_description = "¿Tienes una pregunta sobre tu cuenta $site_name o la plataforma? Contacta a nuestro equipo de soporte por correo electrónico o envíanos un mensaje y te responderemos.";
$contacts_h1 = "Contacto";
$contacts_lead = "¿Preguntas sobre tu cuenta, un depósito, o cómo funciona la plataforma? Nuestro equipo está aquí para ayudar.";
$contacts_email_label = "Correo Electrónico";
$contacts_hours_label = "Horario de Soporte";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tiempo de Respuesta Típico";
$contacts_response_value = "Dentro de 24 horas";
$contacts_form_title = "Envíanos un Mensaje";
$contacts_form_desc = "Deja tus datos abajo y un miembro de nuestro equipo se pondrá en contacto contigo directamente.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Preguntas Frecuentes de $site_name";
$faq_meta_description = "Respuestas a las preguntas más comunes sobre cómo crear una cuenta $site_name, hacer un depósito, la seguridad de la plataforma y las comisiones.";
$faq_page_lead = "Todo lo que necesitas saber antes de comenzar a operar. ¿No encuentras tu respuesta? <a class=\"link\" href=\"contacts.php\">Contacta a nuestro equipo</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Política de Privacidad de $site_name";
$privacy_meta_description = "Descubre cómo $site_name recopila, utiliza y protege tu información personal en todo el sitio web y la plataforma.";
$privacy_sections = [
    [
        "title" => "1. Introducción",
        "body" => "Esta Política de Privacidad explica cómo $site_name (\"nosotros\") recopila, utiliza y protege la información personal de los visitantes y usuarios de $site_domain (el \"Sitio Web\"). Al usar el Sitio Web, aceptas las prácticas descritas a continuación.",
    ],
    [
        "title" => "2. Información que Recopilamos",
        "body" => "Podemos recopilar información que proporcionas directamente, como tu nombre, dirección de correo electrónico y número de teléfono al registrarte o enviar un formulario, así como información recopilada automáticamente, incluyendo tu dirección IP, tipo de dispositivo y navegador, y páginas visitadas en el Sitio Web.",
    ],
    [
        "title" => "3. Cómo Usamos Tu Información",
        "body" => "Utilizamos la información recopilada para crear y gestionar tu cuenta, responder a consultas, brindar atención al cliente, mejorar el Sitio Web y nuestros servicios, y, cuando esté permitido, enviar actualizaciones sobre productos y ofertas. Puedes darte de baja de las comunicaciones de marketing en cualquier momento.",
    ],
    [
        "title" => "4. Cookies &amp; Tecnologías de Seguimiento",
        "body" => "El Sitio Web utiliza cookies y tecnologías similares para recordar tus preferencias, mantenerte conectado y entender cómo los visitantes usan nuestras páginas. Puedes desactivar las cookies a través de la configuración de tu navegador, aunque algunas funciones pueden no funcionar correctamente como resultado.",
    ],
    [
        "title" => "5. Compartir Información",
        "body" => "No vendemos tu información personal. Podemos compartir información con proveedores de servicios de confianza que nos ayudan a operar el Sitio Web (como proveedores de alojamiento o análisis), o cuando la ley lo requiera o para proteger nuestros derechos legales.",
    ],
    [
        "title" => "6. Seguridad de Datos",
        "body" => "Aplicamos medidas técnicas y organizativas razonables para proteger tu información contra el acceso no autorizado, alteración o pérdida. Ningún método de transmisión o almacenamiento es completamente seguro, y no podemos garantizar una seguridad absoluta.",
    ],
    [
        "title" => "7. Tus Derechos &amp; Opciones",
        "body" => "Dependiendo de tu ubicación, puedes tener el derecho de acceder, corregir o solicitar la eliminación de tu información personal, y de oponerte a ciertos usos de la misma. Para ejercer estos derechos, ponte en contacto con nosotros a través de nuestra <a class=\"link\" href=\"contacts.php\">página de contacto</a>.",
    ],
    [
        "title" => "8. Privacidad de Menores",
        "body" => "El Sitio Web no está dirigido a personas menores de 18 años, y no recopilamos conscientemente información personal de menores. Si crees que un menor nos ha proporcionado información personal, contáctanos para que podamos eliminarla.",
    ],
    [
        "title" => "9. Cambios a Esta Política",
        "body" => "Podemos actualizar esta Política de Privacidad de vez en cuando. Cualquier cambio se publicará en esta página con una fecha de vigencia revisada. Te animamos a revisar esta página periódicamente.",
    ],
    [
        "title" => "10. Contáctanos",
        "body" => "Si tienes preguntas sobre esta Política de Privacidad o sobre cómo se maneja tu información, contáctanos a través de nuestra <a class=\"link\" href=\"contacts.php\">página de contacto</a> o envíanos un correo electrónico a info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Términos y Condiciones de $site_name";
$conditions_meta_description = "Revisa los Términos y Condiciones que rigen el acceso y uso del sitio web y la plataforma de trading $site_name.";
$conditions_sections = [
    [
        "title" => "1. Aceptación de Términos",
        "body" => "Al acceder o usar $site_domain (el \"Sitio Web\"), aceptas estar sujeto a estos Términos y Condiciones. Si no estás de acuerdo con alguna parte de estos términos, no uses el Sitio Web.",
    ],
    [
        "title" => "2. Elegibilidad",
        "body" => "Debes tener al menos 18 años y estar legalmente autorizado para usar servicios relacionados con trading en tu jurisdicción para usar el Sitio Web. Al usar el Sitio Web, confirmas que cumples con estos requisitos.",
    ],
    [
        "title" => "3. Descripción del Servicio",
        "body" => "$site_name proporciona una plataforma en línea con contenido educativo, información de mercado y herramientas de trading. Nada en el Sitio Web constituye asesoramiento financiero, de inversión, fiscal o legal, y cualquier información proporcionada es solo para fines informativos generales.",
    ],
    [
        "title" => "4. Responsabilidades del Usuario",
        "body" => "Eres responsable de proporcionar información precisa al registrarte, de mantener la confidencialidad de las credenciales de tu cuenta, y de toda actividad que ocurra bajo tu cuenta.",
    ],
    [
        "title" => "5. Propiedad Intelectual",
        "body" => "Todo el contenido del Sitio Web, incluyendo texto, gráficos, logotipos y software, es propiedad de $site_name o de sus licenciantes y está protegido por las leyes de propiedad intelectual aplicables. No puedes reproducir ni distribuir este contenido sin permiso.",
    ],
    [
        "title" => "6. Sin Asesoramiento Financiero",
        "body" => "El contenido en el Sitio Web se proporciona únicamente con fines informativos y educativos y no debe interpretarse como asesoramiento financiero. Eres el único responsable de tus propias decisiones de trading y debes consultar a un asesor financiero independiente si es necesario. Consulta nuestra <a class=\"link\" href=\"risk-warning.php\">Advertencia de Riesgo</a> para obtener más información.",
    ],
    [
        "title" => "7. Limitación de Responsabilidad",
        "body" => "En la medida máxima permitida por la ley, $site_name no será responsable de ningún daño directo, indirecto, incidental o consecuente que surja de tu uso, o incapacidad de usar, el Sitio Web o cualquier servicio de terceros vinculado.",
    ],
    [
        "title" => "8. Terminación",
        "body" => "Nos reservamos el derecho de suspender o terminar tu acceso al Sitio Web a nuestra discreción, sin previo aviso, por conductas que consideremos que violan estos Términos y Condiciones o que sean perjudiciales para otros usuarios o para el Sitio Web.",
    ],
    [
        "title" => "9. Cambios a Estos Términos",
        "body" => "Podemos revisar estos Términos y Condiciones en cualquier momento. El uso continuado del Sitio Web después de la publicación de cambios constituye la aceptación de los términos actualizados.",
    ],
    [
        "title" => "10. Contacto",
        "body" => "Las preguntas sobre estos Términos y Condiciones pueden dirigirse a nuestro equipo a través de la <a class=\"link\" href=\"contacts.php\">página de contacto</a> o por correo electrónico a info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrarse | $site_name — Crea Tu Cuenta Gratuita";
$sign_meta_description = "Crea tu cuenta gratuita de $site_name en minutos y comienza a operar con tan solo $$app_price $app_currency.";
$sign_h1 = "Crea Tu Cuenta Gratuita";
$sign_lead = "Únete a $site_name en unos minutos. Completa tus datos a continuación para comenzar.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Gracias | $site_name";
$thanks_h1 = "¡Gracias!";
$thanks_text = "Tus datos han sido recibidos. Un miembro del equipo de $site_name se pondrá en contacto contigo en breve para ayudarte a comenzar.";
$thanks_btn = "Volver al Inicio";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa del Sitio | $site_name";
$sitemap_meta_description = "Explora todas las páginas del sitio web $site_name, incluyendo la plataforma de trading, la oferta, el soporte y las páginas legales.";
$sitemap_h1 = "Mapa del Sitio";
$sitemap_lead = "Todas las páginas de $site_name en un solo lugar.";

