<?php
require __DIR__ . '/../lang.php';
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// ============================================================
// ES TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Sitio Web Oficial | Plataforma de Trading";
$home_meta_description = "$site_name ofrece una plataforma de trading fácil de usar con herramientas de mercado avanzadas, información en tiempo real y funciones prácticas diseñadas para hacer que el trading en línea sea más accesible e informado.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Sobre nosotros";
$nav_contacts = "Contacto";
$nav_login = "Iniciar sesión";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "En vivo";
$activity_suffix = "Se acaba de unir";
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
$form_title = "Comenzar";
$form_fname_placeholder = "Nombre completo";
$form_lname_placeholder = "Apellido";
$form_email_placeholder = "Correo electrónico";
$form_btn_submit = "Crear cuenta";
$form_disclaimer_text = "* Al hacer clic en el botón, acepta nuestro <a class=\"link\" href=\"privacy.php\">Aviso de Privacidad</a> y <a class=\"link\" href=\"conditions.php\">Términos de Uso</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SEGURO";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: IA diseñada para leer el mercado con más claridad";
$s1_subtitle = "Estrategia de inversión guiada por tecnología";
$s1_quote = "$site_name fue creado para simplificar el trabajo con los mercados, tenga o no experiencia. La plataforma aplica inteligencia artificial para convertir datos complejos en decisiones claras y accionables, ayudándole a actuar con más confianza en cualquier escenario.";
$s1_p1 = "El sistema revisa enormes volúmenes de información en tiempo real: detecta cambios, reconoce patrones y responde rápidamente a las señales del mercado. Esto le brinda una lectura precisa del contexto actual para que pueda detectar oportunidades sin tener que profundizar en análisis complicados.";
$s1_p2 = "El monitoreo 24/7, una interfaz fácil de usar y un alto nivel de protección hacen que la experiencia sea cómoda y confiable. Todo está diseñado para que pueda concentrarse en los resultados, no en el lado técnico.";
$s1_p3 = "La función de copy trading también le da acceso a las estrategias de traders más experimentados. Puede seguir sus movimientos y aplicar enfoques probados a su propio trading, combinando el juicio profesional con la automatización.";
$s1_cta = "Crear cuenta";
$s1_img_alt = "Finanzas digitales $site_name";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Análisis de mercado preciso, sin ruido adicional";
$s2_intro = "$site_name utiliza inteligencia artificial para monitorear el mercado continuamente y detectar cambios rápidamente. El sistema procesa grandes cantidades de datos y muestra solo las señales relevantes, sin abrumarle con información innecesaria.";
$s2_item1_title = "Respuesta del mercado sin espera";
$s2_item1_text = "La plataforma identifica movimientos en sus etapas iniciales: impulso, reversiones y cambios de tendencia. Ve instantáneamente lo que está sucediendo y puede actuar en el momento adecuado.";
$s2_item2_title = "Una lectura clara en lugar de conjeturas";
$s2_item2_text = "Sin gráficos confusos ni conjeturas. $site_name destaca lo esencial y ofrece una visión clara de la situación para que pueda decidir con datos, no con intuición.";
$s2_item3_title = "Control y protección";
$s2_item3_text = "Sus datos están protegidos, el acceso está controlado y las operaciones se realizan a través de canales seguros. Así puede concentrarse en el mercado, no en el riesgo técnico.";
$s2_img_alt = "Cripto $site_name";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Inteligencia clara para traders";
$s3_card1_title = "$site_name respeta la privacidad y el control del usuario";
$s3_card1_text = "$site_name maneja la información con total transparencia e integridad. No hace mal uso de sus datos personales. No se registran operaciones ni órdenes en esta plataforma.";
$s3_card2_title = "Un entorno de análisis claro para mejores decisiones";
$s3_card2_text = "$site_name funciona como un espacio tecnológico donde la IA refuerza el juicio humano en lugar de reemplazarlo. Estas herramientas facilitan la comprensión de los cambios del mercado, la comparación de estrategias y el estudio del comportamiento de los activos.";
$s3_card3_title = "Herramientas de IA que agudizan su lectura del mercado";
$s3_card3_text = "El análisis nunca se detiene. $site_name vigila el entorno cripto y envía alertas en tiempo real cada vez que aparece un movimiento relevante.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Análisis agudo, sin emoción ni error";
$s4_quote = "$site_name convierte datos de mercado complejos en información organizada y fácil de leer, eliminando el ruido innecesario y ayudándole a centrarse en las señales que realmente importan. Esto le permite comprender una situación antes y decidir sin dejar que la emoción tome el control.";
$s4_p1 = "El sistema actualiza continuamente sus conclusiones con nuevos datos. En lugar de indicadores rezagados, utiliza modelos adaptativos que reaccionan a los cambios del mercado en tiempo real. Eso significa que siempre trabaja con una visión actual y puede actuar más rápido cuando realmente importa.";
$s4_img_alt = "Inteligencia artificial $site_name";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Use la IA de $site_name para tomar decisiones precisas y oportunas";
$s5_quote = "$site_name analiza el mercado en tiempo real y le muestra de inmediato dónde están el movimiento y las oportunidades. El sistema procesa los datos por usted y entrega señales listas para usar: cuándo entrar, cuándo salir y qué observar.";
$s5_p1 = "No hay necesidad de mirar los gráficos todo el día. La plataforma detecta cambios por sí sola y responde rápidamente al mercado, ayudándole a no perder momentos clave.";
$s5_p2 = "Los algoritmos funcionan 24/7 e identifican nuevas oportunidades tan pronto como aparecen. Obtiene información actualizada sin retrasos ni sobrecarga de información.";
$s5_p3 = "Al mismo tiempo, la seguridad se mantiene en un nivel alto: protección de datos, acceso seguro y control de operaciones. $site_name se adapta tanto a principiantes como a traders activos — las decisiones siguen siendo suyas, respaldadas por una base analítica sólida.";
$s5_img_alt = "Automatización financiera $site_name";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "El trading consistente comienza con un sistema organizado";
$s6_p1 = "$site_name ayuda a aportar estructura a su trabajo con el mercado. La plataforma crea un marco claro: usted define sus objetivos y su nivel de riesgo, y el sistema adapta su análisis a su estilo — sin caos y sin sobrecarga.";
$s6_p2 = "El análisis 24/7 convierte el flujo de datos en señales simples y comprensibles. Solo ve lo que importa: dónde hay movimiento, dónde vale la pena entrar y cuándo es mejor esperar. Con el tiempo, los algoritmos se vuelven más precisos y se adaptan al mercado.";
$s6_item1_title = "Elija su ritmo: trading rápido o un enfoque a largo plazo";
$s6_item1_text = "$site_name admite diferentes estrategias. Para el trading activo, el sistema marca puntos de entrada y movimientos de precios. Para un enfoque a más largo plazo, le ayuda a mantener posiciones teniendo en cuenta la tendencia y el riesgo.";
$s6_item2_title = "Puntos de entrada sin conjeturas";
$s6_item2_text = "La plataforma muestra dónde el mercado está más activo. Eso le ayuda a entrar con más confianza y salir a tiempo, sin improvisar.";
$s6_item3_title = "Gestión de riesgos desde el principio";
$s6_item3_text = "Puede ver posibles escenarios con anticipación: dónde el riesgo es menor y el potencial mayor. Así puede planificar operaciones antes de que el movimiento siquiera comience.";
$s6_item4_title = "Análisis listo para usar";
$s6_item4_text = "$site_name no le abruma con terminología complicada. Obtiene información clara, lista para usar, diseñada para ayudarle a decidir más rápido y con más confianza.";
$s6_cta = "Comenzar ahora";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Herramientas simples para decisiones precisas con $site_name";
$s7_quote = "$site_name le brinda todo lo que necesita para operar en el mercado — sin jerga técnica ni sobrecarga de información. La plataforma analiza el movimiento de precios, las tendencias y los posibles puntos de entrada por sí sola, mostrando solo lo que realmente importa.";
$s7_point1 = "El sistema ayuda a detectar cuándo el mercado puede cambiar, dónde aparecen movimientos fuertes y qué momentos son mejores para entrar o salir. Cada señal viene preprocesada — no necesita dominar indicadores complejos.";
$s7_point2 = "También incluye copy trading: puede seguir las decisiones de traders experimentados y replicarlas sin dedicar tiempo a su propio análisis.";
$s7_point3 = "La interfaz se mantiene lo más simple posible — cada herramienta se entiende de un vistazo y está lista para usar desde el primer momento.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Encuentre zonas clave de oportunidad con la IA de $site_name";
$s8_item1 = "La diversificación automática distribuye los fondos entre diferentes activos, reduciendo el riesgo y protegiendo el capital incluso en mercados inestables.";
$s8_item2 = "Un sistema totalmente autónomo — no necesita mirar los gráficos. Los algoritmos analizan el mercado y toman decisiones por sí solos.";
$s8_item3 = "Los retiros están disponibles en cualquier momento — a tarjetas bancarias, billeteras cripto o sistemas de pago electrónico, sin demoras.";
$s8_item4 = "Los informes diarios muestran sus resultados y le dan control total de la situación en tiempo real.";
$s8_item5 = "Las configuraciones flexibles de nivel de riesgo le permiten elegir una estrategia que se adapte a sus objetivos — desde conservadora hasta más agresiva.";
$s8_item6 = "Un potencial de ganancias de hasta el 400% hace de $site_name una herramienta para quienes no solo quieren preservar su capital, sino aumentarlo significativamente.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Análisis experto impulsado por $site_name";
$s9_quote = "$site_name combina el poder de los algoritmos con la experiencia del mercado, convirtiendo datos complejos en señales claras y fáciles de entender. El sistema detecta patrones y posibles oportunidades rápidamente, ayudándole a decidir sin sobrecarga de información.";
$s9_p1 = "Recibe análisis preprocesados que tienen en cuenta tanto los indicadores técnicos como el comportamiento del mercado — para que pueda actuar con más rapidez, confianza y precisión.";
$s9_img_alt = "Estrategia de inversión $site_name";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Lo que dicen nuestros usuarios";
$review_1_text = "La plataforma es muy intuitiva, y sus herramientas me han ayudado a mejorar mis resultados de trading.";
$review_2_text = "Soporte rápido y recursos de aprendizaje realmente útiles — perfecto para quienes recién comienzan.";
$review_3_text = "Gráficos personalizables y ejecución rápida — ha sido mi primera opción durante meses.";
$review_4_text = "Registrarme tomó menos de cinco minutos, y el panel facilita ver exactamente dónde está mi dinero.";
$review_5_text = "Me gusta que la plataforma explique el razonamiento detrás de cada señal en lugar de simplemente lanzarme números.";
$review_6_text = "Los retiros siempre han sido rápidos para mí, y el equipo de soporte realmente responde en minutos.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Preguntas frecuentes sobre $site_name";
$faq_q1 = "¿Puede $site_name detectar cambios de mercado en tiempo real?";
$faq_a1 = "Sí. Rastrea datos en vivo, identifica cambios de impulso en sus etapas iniciales y detecta patrones antes de que se desarrollen completamente, brindando a los usuarios una ventaja oportuna.";
$faq_q2 = "¿Se puede personalizar la experiencia $site_name?";
$faq_a2 = "Sí. Los usuarios pueden elegir áreas de interés, ajustar el nivel de detalle y seguir estrategias públicas que coincidan con su estilo de trading o necesidades de aprendizaje.";
$faq_q3 = "¿$site_name reemplaza los métodos tradicionales de investigación?";
$faq_a3 = "No. Los mejora al ofrecer información filtrada por IA rápidamente, mientras el usuario mantiene el control total de su propia investigación y decisiones.";
$faq_cta = "Descubra más ahora";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Aspectos destacados de $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Costo de registro";
$hl1_desc = "Sin cargos por registrarse";
$hl2_emoji = "💰";
$hl2_title = "Comisiones de trading";
$hl2_desc = "Sin costo alguno";
$hl3_emoji = "📋";
$hl3_title = "Facilidad de registro";
$hl3_desc = "El registro es rápido y sencillo";
$hl4_emoji = "📊";
$hl4_title = "Enfoque educativo";
$hl4_desc = "Lecciones sobre cripto, trading de Forex e inversiones";
$hl5_emoji = "🌎";
$hl5_title = "Países disponibles";
$hl5_desc = "No disponible en EE.UU., disponible en la mayoría de los demás países";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Opere con sabiduría, crezca con confianza";
$footnav_about = "Sobre nosotros";
$footnav_product = "Producto";
$footnav_offer = "Oferta";
$footnav_contacts = "Contáctenos";
$footnav_faq = "Preguntas frecuentes";
$footnav_privacy = "Política de Privacidad";
$footnav_conditions = "Términos de Uso";
$footnav_risk = "Advertencia de Riesgo";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publica material educativo general sobre trading, inversión, mercados financieros y activos digitales. Los artículos, datos de mercado, gráficos y otro contenido del sitio web se proporcionan con fines informativos y no deben tratarse como asesoramiento financiero, de inversión o legal. Aunque nos esforzamos por proporcionar información confiable y actualizada, no podemos garantizar su exactitud o integridad y no somos responsables de las pérdidas resultantes de la confianza en el contenido.<br><br>El trading implica riesgo, y las criptomonedas, Forex, CFDs, acciones y otros productos financieros pueden fluctuar significativamente en valor. Considere sus propias circunstancias financieras y tolerancia al riesgo antes de operar, y busque asesoramiento profesional cuando corresponda. Nunca comprometa fondos que no pueda permitirse perder.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Consultora de Trading";
$quiz_text_welcome = "¡Hola! Soy Sofia, su consultora personal de trading. ¿Tiene unos minutos para encontrar el mejor plan para usted?";
$quiz_text_q1 = "¿Ha operado antes?";
$quiz_text_a1_yes = "Sí, tengo experiencia";
$quiz_text_a1_no = "No, soy principiante";
$quiz_text_q2 = "¡Genial! ¿Cuál es su nombre para que pueda personalizar su plan?";
$quiz_text_q3 = "¿Cuál es su principal objetivo con el trading?";
$quiz_text_a3_yes = "Construir riqueza a largo plazo";
$quiz_text_a3_no = "Generar ingresos a corto plazo";
$quiz_text_q4 = "¿Con cuánto le gustaría comenzar?";
$quiz_text_a4_1 = "Menos de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Más de $1000";
$quiz_text_q5 = "Perfecto. ¿Le gustaría que le abra una cuenta gratuita ahora?";
$quiz_text_a5_yes = "Sí, hagámoslo";
$quiz_text_a5_no = "Ahora no";
$quiz_text_loader = "Buscando su mejor plan...";
$quiz_text_final_ttl = "¡Todo está listo!";
$quiz_text_processing = "Enviando sus datos...";
$quiz_text_typing = "está escribiendo...";
$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellido";
$quiz_placeholder_email = "Correo electrónico";
$quiz_btn_submit = "Obtener mi cuenta gratuita";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Inicio";
$bc_about = "Sobre nosotros";
$bc_product = "Producto";
$bc_offer = "Oferta";
$bc_contacts = "Contáctenos";
$bc_faq = "Preguntas frecuentes";
$bc_privacy = "Política de Privacidad";
$bc_conditions = "Términos de Uso";
$bc_risk = "Advertencia de Riesgo";
$bc_sign = "Registrarse";
$bc_thanks = "Gracias";
$bc_sitemap = "Mapa del sitio";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Sobre $site_name";
$about_meta_description = "Conozca la misión de $site_name: hacer que el análisis de mercado sea más claro y accesible a través de herramientas impulsadas por IA.";
$about_h1 = "Sobre $site_name";
$about_lead = "$site_name fue creado en torno a una idea: las decisiones de trading deben basarse en información clara, no en conjeturas.";
$about_p1 = "Combinamos inteligencia artificial con experiencia real del mercado para convertir datos complejos y ruidosos en señales fáciles de entender y accionar. Nuestra plataforma monitorea los mercados las 24 horas para que usted no tenga que hacerlo.";
$about_p2 = "Ya sea que esté realizando su primera operación o haya estado activo en los mercados durante años, $site_name está diseñado para encontrarle donde se encuentre — con herramientas que van desde orientación simple hasta análisis avanzados en tiempo real.";
$about_p3 = "Creemos que la tecnología debe apoyar su criterio, no reemplazarlo. Cada señal que produce $site_name está destinada a informar una decisión que sigue siendo completamente suya.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Producto $site_name — Herramientas de análisis de mercado con IA";
$product_meta_description = "Explore el producto de $site_name: análisis de mercado con IA en tiempo real, copy trading, controles de riesgo y diversificación automatizada.";
$product_h1 = "El producto $site_name";
$product_lead = "Una plataforma que lee el mercado por usted: análisis en tiempo real, copy trading y herramientas de riesgo flexibles, diseñadas para hacer más claras las decisiones de trading.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Oferta $site_name — Comience gratis";
$offer_meta_description = "Vea qué incluye la oferta actual de $site_name: registro gratuito, sin comisiones de trading y acceso completo a la plataforma.";
$offer_h1 = "Nuestra oferta actual";
$offer_lead = "Cree su cuenta de forma gratuita y desbloquee la plataforma completa de $site_name &mdash; sin tarifas de registro, sin comisiones de trading.";
$offer_li1 = "Sin tarifas para registrar su cuenta";
$offer_li2 = "Sin comisiones en operaciones";
$offer_li3 = "Acceso completo al análisis de mercado con IA en tiempo real y copy trading";
$offer_li4 = "Retiros disponibles en cualquier momento, sin cargos ocultos";
$offer_li5 = "Recursos educativos sobre cripto, Forex e inversiones incluidos";
$offer_note = "La disponibilidad puede variar según la región. Revise nuestra <a class=\"link\" href=\"risk-warning.php\">Advertencia de Riesgo</a> antes de financiar una cuenta.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contacte a $site_name — Comuníquese con nuestro equipo";
$contacts_meta_description = "¿Tiene una pregunta sobre su cuenta de $site_name o la plataforma? Comuníquese con nuestro equipo de soporte por correo electrónico o envíenos un mensaje.";
$contacts_h1 = "Contáctenos";
$contacts_lead = "¿Preguntas sobre su cuenta, un depósito o cómo funciona la plataforma? Nuestro equipo está aquí para ayudar.";
$contacts_email_label = "Correo electrónico";
$contacts_hours_label = "Horario de Soporte";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tiempo de Respuesta Típico";
$contacts_response_value = "Dentro de 24 horas";
$contacts_form_title = "Envíenos un mensaje";
$contacts_form_desc = "Deje sus datos a continuación y un miembro de nuestro equipo se pondrá en contacto con usted directamente.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Política de Privacidad de $site_name";
$privacy_meta_description = "Lea cómo $site_name recopila, usa y protege su información personal en todo el sitio web y la plataforma.";
$privacy_sections = [
    [
        "title" => "1. Introducción",
        "body" => "Esta Política de Privacidad explica cómo $site_name (\"nosotros\", \"nos\", \"nuestro\") recopila, usa y protege la información personal de los visitantes y usuarios de $site_domain (el \"Sitio Web\"). Al usar el Sitio Web, usted acepta las prácticas descritas a continuación.",
    ],
    [
        "title" => "2. Información que recopilamos",
        "body" => "Podemos recopilar información que usted proporciona directamente, como su nombre, dirección de correo electrónico y número de teléfono al registrarse o enviar un formulario, así como información recopilada automáticamente, incluyendo su dirección IP, tipo de dispositivo y navegador, y páginas visitadas en el Sitio Web.",
    ],
    [
        "title" => "3. Cómo usamos su información",
        "body" => "Usamos la información recopilada para crear y administrar su cuenta, responder a consultas, brindar soporte al cliente, mejorar el Sitio Web y nuestros servicios, y, cuando esté permitido, enviar actualizaciones sobre productos y ofertas. Puede optar por no recibir comunicaciones de marketing en cualquier momento.",
    ],
    [
        "title" => "4. Cookies y tecnologías de seguimiento",
        "body" => "El Sitio Web utiliza cookies y tecnologías similares para recordar sus preferencias, mantenerlo conectado y comprender cómo los visitantes usan nuestras páginas. Puede desactivar las cookies a través de la configuración de su navegador, aunque algunas funciones pueden no funcionar correctamente como resultado.",
    ],
    [
        "title" => "5. Compartir información",
        "body" => "No vendemos su información personal. Podemos compartir información con proveedores de servicios de confianza que nos ayudan a operar el Sitio Web (como proveedores de hospedaje o análisis), o cuando así lo exija la ley o para proteger nuestros derechos legales.",
    ],
    [
        "title" => "6. Seguridad de los datos",
        "body" => "Aplicamos medidas técnicas y organizativas razonables para proteger su información de accesos no autorizados, alteraciones o pérdidas. Ningún método de transmisión o almacenamiento es completamente seguro, y no podemos garantizar la seguridad absoluta.",
    ],
    [
        "title" => "7. Sus derechos y opciones",
        "body" => "Dependiendo de su ubicación, puede tener derecho a acceder, corregir o solicitar la eliminación de su información personal, y a oponerse a ciertos usos de la misma. Para ejercer estos derechos, comuníquese con nosotros a través de nuestra <a class=\"link\" href=\"contacts.php\">página de contacto</a>.",
    ],
    [
        "title" => "8. Privacidad de los menores",
        "body" => "El Sitio Web no está dirigido a personas menores de 18 años, y no recopilamos a sabiendas información personal de menores. Si cree que un menor nos ha proporcionado información personal, contáctenos para que podamos eliminarla.",
    ],
    [
        "title" => "9. Cambios a esta política",
        "body" => "Podemos actualizar esta Política de Privacidad de vez en cuando. Cualquier cambio se publicará en esta página con una fecha de vigencia revisada. Le recomendamos revisar esta página periódicamente.",
    ],
    [
        "title" => "10. Contáctenos",
        "body" => "Si tiene preguntas sobre esta Política de Privacidad o cómo se maneja su información, comuníquese con nosotros a través de nuestra <a class=\"link\" href=\"contacts.php\">página de contacto</a> o envíenos un correo electrónico a info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Términos de Uso de $site_name";
$conditions_meta_description = "Revise los Términos de Uso que rigen el acceso y uso del sitio web y la plataforma de trading de $site_name.";
$conditions_sections = [
    [
        "title" => "1. Aceptación de los términos",
        "body" => "Al acceder o usar $site_domain (el \"Sitio Web\"), usted acepta estar sujeto a estos Términos de Uso. Si no está de acuerdo con alguna parte de estos términos, no use el Sitio Web.",
    ],
    [
        "title" => "2. Elegibilidad",
        "body" => "Debe tener al menos 18 años y estar legalmente autorizado para usar servicios relacionados con el trading en su jurisdicción para usar el Sitio Web. Al usar el Sitio Web, confirma que cumple con estos requisitos.",
    ],
    [
        "title" => "3. Descripción del servicio",
        "body" => "$site_name proporciona una plataforma en línea con contenido educativo, información de mercado y herramientas de análisis asistidas por IA. Nada en el Sitio Web constituye asesoramiento financiero, de inversión, fiscal o legal, y toda la información proporcionada es solo para fines informativos generales.",
    ],
    [
        "title" => "4. Responsabilidades del usuario",
        "body" => "Usted es responsable de proporcionar información precisa al registrarse, de mantener la confidencialidad de las credenciales de su cuenta, y de toda actividad que ocurra bajo su cuenta.",
    ],
    [
        "title" => "5. Propiedad intelectual",
        "body" => "Todo el contenido del Sitio Web, incluyendo texto, gráficos, logotipos y software, es propiedad de $site_name o sus licenciantes y está protegido por las leyes de propiedad intelectual aplicables. No puede reproducir ni distribuir este contenido sin permiso.",
    ],
    [
        "title" => "6. Sin asesoramiento financiero",
        "body" => "El contenido del Sitio Web se proporciona únicamente con fines informativos y educativos y no debe interpretarse como asesoramiento financiero. Usted es el único responsable de sus propias decisiones de trading y debe consultar a un asesor financiero independiente si es necesario. Consulte nuestra <a class=\"link\" href=\"risk-warning.php\">Advertencia de Riesgo</a> para obtener más información.",
    ],
    [
        "title" => "7. Limitación de responsabilidad",
        "body" => "En la medida máxima permitida por la ley, $site_name no será responsable de ningún daño directo, indirecto, incidental o consecuente que surja de su uso, o incapacidad para usar, el Sitio Web o cualquier servicio de terceros vinculado.",
    ],
    [
        "title" => "8. Terminación",
        "body" => "Nos reservamos el derecho de suspender o terminar su acceso al Sitio Web a nuestra discreción, sin previo aviso, por conducta que consideremos que viola estos Términos de Uso o que de otro modo es perjudicial para otros usuarios o el Sitio Web.",
    ],
    [
        "title" => "9. Cambios a estos términos",
        "body" => "Podemos revisar estos Términos de Uso en cualquier momento. El uso continuado del Sitio Web después de que se publiquen los cambios constituye la aceptación de los términos actualizados.",
    ],
    [
        "title" => "10. Contacto",
        "body" => "Las preguntas sobre estos Términos de Uso pueden dirigirse a nuestro equipo a través de la <a class=\"link\" href=\"contacts.php\">página de contacto</a> o enviando un correo electrónico a info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Advertencia de Riesgo de $site_name — Divulgación de Riesgos de Trading";
$risk_meta_description = "Lea la advertencia de riesgo de $site_name antes de operar: riesgos del mercado de criptomonedas, apalancamiento, liquidez, ciberseguridad y consideraciones regulatorias.";
$risk_title = "Advertencia de Riesgo";
$risk_intro = "Comprender los riesgos es el primer paso hacia un trading confiado.";
$risk_ai_title = "Cómo nuestro sistema de IA ayuda a gestionar el riesgo:";
$risk_ai_1_title = "Eficiencia algorítmica y trading sin emociones:";
$risk_ai_1_text = "Algoritmos avanzados analizan señales de mercado para ejecutar operaciones de manera objetiva en momentos óptimos.";
$risk_ai_2_title = "Estrategias basadas en datos:";
$risk_ai_2_text = "Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real en lugar de conjeturas.";
$risk_ai_3_title = "Configuraciones flexibles y control total:";
$risk_ai_3_text = "Ajuste sus parámetros de riesgo en cualquier momento. Realice un seguimiento de todos los saldos y operaciones de forma transparente en su panel, sin cargos ocultos y retiros sin restricciones.";
$risk_disclaimer = "<strong>Descargo de responsabilidad:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan ganancias, pueden fallar debido a errores de software o eventos de mercado inesperados, y requieren la supervisión del usuario. El rendimiento pasado no es indicativo de resultados futuros. Esta plataforma tiene fines puramente informativos y de marketing y no proporciona asesoramiento financiero.";
$risk_s1_title = "1. Riesgos generales y del mercado de criptomonedas";
$risk_s1_text = "Las criptomonedas son activos altamente volátiles y especulativos que operan las 24 horas del día, los 7 días de la semana, con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_s1_li1 = "Los valores pueden fluctuar dramáticamente en períodos cortos, lo que podría llevar a una pérdida total del capital invertido.";
$risk_s1_li2 = "Los valores de mercado pueden verse muy afectados por cambios regulatorios, desarrollos técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_s1_li3 = "Algunos activos pueden perder todo su valor por completo. Invierta solo fondos que pueda permitirse perder.";
$risk_s2_title = "2. Riesgos de ejecución, liquidez y apalancamiento";
$risk_s2_li1_title = "Volatilidad del mercado y liquidez:";
$risk_s2_li1_text = "Los movimientos extremos de precios (10–20%+ diarios) o la baja liquidez (especialmente en monedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un deslizamiento severo en la ejecución. Las órdenes de stop-loss no pueden garantizar límites de pérdida en condiciones extremas.";
$risk_s2_li2_title = "Riesgos de apalancamiento y margen:";
$risk_s2_li2_text = "Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puede perder más que su depósito inicial. Aproximadamente el 70–80% de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.";
$risk_s3_title = "3. Riesgos técnicos, de ciberseguridad y de terceros";
$risk_s3_li1_title = "Factores técnicos:";
$risk_s3_li1_text = "El trading en línea implica inherentemente riesgos de desconexiones a internet, errores de hardware/software e indisponibilidad del servicio.";
$risk_s3_li2_title = "Ciberseguridad:";
$risk_s3_li2_text = "Las cuentas de criptomonedas son objetivos frecuentes de phishing, malware y hackeo. Las transacciones son irreversibles; comprometer sus credenciales puede resultar en una pérdida permanente.";
$risk_s3_li3_title = "Plataformas de terceros:";
$risk_s3_li3_text = "Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, operaciones o solvencia. Realice siempre su propia diligencia debida antes de depositar fondos en plataformas externas.";
$risk_s4_title = "4. Disposiciones regulatorias, fiscales y finales";
$risk_s4_li1_title = "Cumplimiento legal e impuestos:";
$risk_s4_li1_text = "Los marcos regulatorios varían ampliamente y cambian rápidamente. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con las leyes locales y de cumplir con sus propias obligaciones fiscales.";
$risk_s4_li2_title = "Sin garantías de ganancias:";
$risk_s4_li2_text = "No existe un trading de criptomonedas \"seguro\" o libre de riesgos. Cualquier cifra de rendimiento o ejemplo de desempeño es puramente hipotético.";
$risk_s4_li3_title = "Idoneidad:";
$risk_s4_li3_text = "Si no comprende completamente los riesgos, depende de fondos esenciales o opera con dinero prestado, el trading de criptomonedas no es adecuado para usted. Consulte a un asesor financiero independiente con licencia si tiene dudas.";
$risk_contact = "<strong>Contacto:</strong> Para cualquier pregunta relacionada con esta declaración o para enviar una consulta, comuníquese con nuestro equipo oficial de atención al cliente a través del formulario de contacto en nuestro sitio web.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Regístrese | $site_name — Cree Su Cuenta Gratuita";
$sign_meta_description = "Cree su cuenta gratuita de $site_name en minutos y comience a operar de forma más inteligente con análisis de mercado impulsado por IA.";
$sign_h1 = "Cree Su Cuenta Gratuita";
$sign_lead = "Únase a $site_name en pocos minutos. Complete sus datos a continuación para comenzar.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Gracias | $site_name";
$thanks_h1 = "¡Gracias!";
$thanks_text = "Hemos recibido sus datos. Un miembro del equipo de $site_name se pondrá en contacto con usted en breve para ayudarle a comenzar.";
$thanks_btn = "Volver a la Página Principal";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mapa del Sitio | $site_name";
$sitemap_meta_description = "Explore todas las páginas del sitio web de $site_name, incluyendo la plataforma de trading, la oferta, el soporte y las páginas legales.";
$sitemap_h1 = "Mapa del Sitio";
$sitemap_lead = "Cada página de $site_name en un solo lugar.";

