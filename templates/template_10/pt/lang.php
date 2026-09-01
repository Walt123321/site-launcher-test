<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pt-PT';
$form_language = 'pt'; // matches this page's own language, not the offer's global default

// ============================================================
// PT TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Oficial | Plataforma de Negociação";
$home_meta_description = "$site_name oferece uma plataforma de negociação fácil de usar com ferramentas de mercado avançadas, insights em tempo real e recursos práticos que tornam a negociação online mais acessível e informada.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Sobre nós";
$nav_contacts = "Contato";
$nav_login = "Entrar";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Ao vivo";
$activity_suffix = "Acabou de aderir";
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
$form_title = "Comece Agora";
$form_fname_placeholder = "Nome completo";
$form_lname_placeholder = "Sobrenome";
$form_email_placeholder = "Endereço de e-mail";
$form_btn_submit = "Criar Conta";
$form_disclaimer_text = "* Ao clicar no botão, você concorda com nossa <a class=\"link\" href=\"privacy.php\">Política de Privacidade</a> e <a class=\"link\" href=\"conditions.php\">Termos de Uso</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SEGURO";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: IA projetada para ler o mercado com mais clareza";
$s1_subtitle = "Estratégia de investimento orientada por tecnologia";
$s1_quote = "$site_name foi criada para tornar mais simples trabalhar com os mercados, tenha você experiência ou não. A plataforma aplica inteligência artificial para transformar dados complexos em decisões claras e acionáveis, permitindo que você negocie com mais confiança em qualquer cenário.";
$s1_p1 = "O sistema examina grandes volumes de informações em tempo real: detecta mudanças, reconhece padrões e reage rapidamente aos sinais do mercado. Isso oferece uma visão nítida do contexto atual, para que você identifique oportunidades sem precisar se aprofundar em análises complicadas.";
$s1_p2 = "O monitoramento 24 horas por dia, uma interface fácil de usar e um alto nível de proteção tornam a experiência confortável e confiável. Tudo foi projetado para que você possa se concentrar nos resultados, não na parte técnica.";
$s1_p3 = "O recurso de copy trading também dá acesso às estratégias de traders mais experientes. Você pode acompanhar seus movimentos e aplicar abordagens comprovadas à sua própria negociação, combinando julgamento profissional com automação.";
$s1_cta = "Criar Conta";
$s1_img_alt = "Finanças digitais $site_name";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Análise de mercado precisa, sem ruído extra";
$s2_intro = "$site_name usa inteligência artificial para monitorar o mercado continuamente e detectar mudanças rapidamente. O sistema processa grandes volumes de dados e mostra apenas os sinais relevantes, sem sobrecarregá-lo com informações desnecessárias.";
$s2_item1_title = "Reação ao mercado sem espera";
$s2_item1_text = "A plataforma identifica movimentos em seus estágios iniciais: momentum, reversões e mudanças de tendência. Você vê instantaneamente o que está acontecendo e pode agir no momento certo.";
$s2_item2_title = "Uma leitura clara em vez de suposições";
$s2_item2_text = "Sem gráficos complicados ou suposições. $site_name destaca o essencial, oferecendo uma visão clara da situação para que você possa decidir com dados, não com intuição.";
$s2_item3_title = "Controle e proteção";
$s2_item3_text = "Seus dados são protegidos, o acesso é controlado e as transações fluem por canais seguros. Isso permite que você se concentre no mercado, não no risco técnico.";
$s2_img_alt = "Cripto $site_name";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Inteligência clara para traders";
$s3_card1_title = "$site_name respeita a privacidade e o controle do usuário";
$s3_card1_text = "$site_name trata as informações com total transparência e integridade. Não faz mau uso dos seus dados pessoais. Nenhuma transação ou ordem é registrada nesta plataforma.";
$s3_card2_title = "Um ambiente de análise claro para melhores decisões";
$s3_card2_text = "$site_name funciona como um espaço tecnológico onde a IA reforça o julgamento humano, em vez de substituí-lo. Essas ferramentas facilitam a compreensão das mudanças de mercado, a comparação de estratégias e o estudo do comportamento dos ativos.";
$s3_card3_title = "Ferramentas de IA que aguçam sua visão do mercado";
$s3_card3_text = "A análise nunca para. $site_name observa o ambiente cripto e envia notificações em tempo real assim que surge um movimento relevante.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Análise nítida, sem emoção ou erro";
$s4_quote = "$site_name transforma dados de mercado complexos em informações organizadas e de fácil leitura, eliminando ruído desnecessário e ajudando você a se concentrar nos sinais que realmente importam. Isso permite entender uma situação mais cedo e decidir sem que a emoção assuma o controle.";
$s4_p1 = "O sistema atualiza continuamente suas conclusões com novos dados. Em vez de indicadores defasados, usa modelos adaptativos que reagem às mudanças do mercado em tempo real. Isso significa que você sempre trabalha com uma visão atual e pode agir mais rápido quando realmente importa.";
$s4_img_alt = "Inteligência artificial $site_name";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Use a IA $site_name para decisões precisas e oportunas";
$s5_quote = "$site_name analisa o mercado em tempo real e mostra imediatamente onde estão o movimento e as oportunidades. O sistema processa os dados para você, entregando sinais prontos: quando entrar, quando sair e o que observar.";
$s5_p1 = "Você não precisa olhar gráficos o dia todo. A plataforma detecta mudanças sozinha e reage rapidamente ao mercado, para que você não perca momentos importantes.";
$s5_p2 = "Os algoritmos trabalham 24 horas por dia, identificando novas oportunidades assim que surgem. Você recebe informações atualizadas sem atrasos ou excesso de informação.";
$s5_p3 = "Ao mesmo tempo, a segurança permanece em alto nível: proteção de dados, acesso seguro e controle de negociação. $site_name é adequada tanto para iniciantes quanto para traders ativos — as decisões continuam sendo suas, mas apoiadas por uma base analítica sólida.";
$s5_img_alt = "Automação financeira $site_name";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Negociar de forma consistente começa com um sistema organizado";
$s6_p1 = "$site_name ajuda a trazer estrutura ao seu trabalho com o mercado. A plataforma cria uma estrutura clara: você define suas metas e seu nível de risco, e o sistema adapta sua análise ao seu estilo — sem caos e sem sobrecarga.";
$s6_p2 = "A análise 24 horas por dia transforma o fluxo de dados em sinais simples e compreensíveis. Você vê apenas o que importa: onde há movimento, onde vale a pena entrar e quando é melhor esperar. Com o tempo, os algoritmos ficam mais precisos e se adaptam ao mercado.";
$s6_item1_title = "Escolha seu ritmo: negociação rápida ou uma abordagem de longo prazo";
$s6_item1_text = "$site_name suporta diferentes estratégias. Para negociação ativa, o sistema marca pontos de entrada e movimentos de preço. Para uma abordagem de longo prazo, ajuda você a manter posições considerando a tendência e o risco.";
$s6_item2_title = "Pontos de entrada sem suposições";
$s6_item2_text = "A plataforma mostra onde o mercado está mais ativo. Isso ajuda você a entrar com mais confiança e sair no momento certo, sem improvisar.";
$s6_item3_title = "Gestão de risco desde o início";
$s6_item3_text = "Você pode ver cenários possíveis com antecedência: onde o risco é menor e o potencial é maior. Isso permite planejar transações antes mesmo do movimento começar.";
$s6_item4_title = "Análise pronta para uso";
$s6_item4_text = "$site_name não o sobrecarrega com terminologia complicada. Você recebe informações claras e diretamente utilizáveis, projetadas para ajudá-lo a decidir mais rápido e com mais confiança.";
$s6_cta = "Comece Agora";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Ferramentas simples para decisões precisas com $site_name";
$s7_quote = "$site_name oferece tudo o que você precisa para negociar no mercado — sem jargão técnico ou excesso de informação. A plataforma analisa sozinha os movimentos de preço, as tendências e os possíveis pontos de entrada, mostrando apenas o que realmente importa.";
$s7_point1 = "O sistema ajuda a detectar quando o mercado pode virar, onde surgem movimentos fortes e quais momentos são melhores para entrar ou sair. Cada sinal chega pré-processado — você não precisa dominar indicadores complexos.";
$s7_point2 = "Também inclui copy trading: você pode acompanhar e replicar as decisões de traders experientes sem gastar tempo com sua própria análise.";
$s7_point3 = "A interface permanece o mais simples possível — cada ferramenta é compreendida rapidamente e está pronta para uso desde o primeiro momento.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Encontre janelas de tempo importantes com a IA $site_name";
$s8_item1 = "A diversificação automática distribui fundos entre diferentes ativos, reduzindo o risco e protegendo o capital mesmo em mercados instáveis.";
$s8_item2 = "Um sistema totalmente autônomo — você não precisa olhar os gráficos. Os algoritmos analisam o mercado e tomam decisões de forma independente.";
$s8_item3 = "Saques estão disponíveis a qualquer momento — para cartões bancários, carteiras cripto ou sistemas de pagamento eletrônico, sem atrasos.";
$s8_item4 = "Relatórios diários mostram seus resultados e dão a você controle total da situação em tempo real.";
$s8_item5 = "Configurações flexíveis de nível de risco permitem escolher uma estratégia que se ajuste às suas metas — de conservadora a mais agressiva.";
$s8_item6 = "Um potencial de lucro de até 400% torna $site_name uma ferramenta para quem deseja não apenas preservar seu capital, mas fazê-lo crescer significativamente.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Análise especializada impulsionada por $site_name";
$s9_quote = "$site_name combina o poder dos algoritmos com a experiência de mercado, transformando dados complexos em sinais claros e fáceis de entender. O sistema detecta rapidamente padrões e oportunidades potenciais, permitindo que você decida sem excesso de informação.";
$s9_p1 = "Você recebe análises pré-processadas que consideram tanto indicadores técnicos quanto o comportamento do mercado — para que você possa agir mais rápido, com mais confiança e precisão.";
$s9_img_alt = "Estratégia de investimento $site_name";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "O que nossos usuários dizem";
$review_1_text = "A plataforma é muito intuitiva, e as ferramentas me ajudaram a melhorar meus resultados de negociação.";
$review_2_text = "Suporte rápido e materiais de aprendizado realmente úteis — perfeito para quem está apenas começando.";
$review_3_text = "Gráficos personalizáveis e execução rápida — tem sido minha primeira escolha há meses.";
$review_4_text = "O cadastro levou menos de cinco minutos, e o painel facilita ver exatamente onde está meu dinheiro.";
$review_5_text = "Gosto que a plataforma explique o raciocínio por trás de cada sinal, em vez de apenas me jogar números.";
$review_6_text = "Os saques sempre foram rápidos para mim, e a equipe de suporte realmente responde em minutos.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Perguntas frequentes sobre $site_name";
$faq_q1 = "$site_name consegue detectar mudanças de mercado em tempo real?";
$faq_a1 = "Sim. Ela acompanha dados ao vivo, identifica mudanças de momentum em seus estágios iniciais e detecta padrões antes de se desenvolverem totalmente, dando aos usuários uma vantagem oportuna.";
$faq_q2 = "A experiência $site_name pode ser personalizada?";
$faq_a2 = "Sim. Os usuários podem escolher áreas de interesse, ajustar o nível de detalhe e acompanhar estratégias públicas que combinem com seu estilo de negociação ou necessidades de aprendizado.";
$faq_q3 = "$site_name substitui os métodos de pesquisa tradicionais?";
$faq_a3 = "Não. Ela os melhora fornecendo rapidamente insights filtrados por IA, enquanto o usuário mantém controle total sobre sua própria pesquisa e decisões.";
$faq_cta = "Saiba Mais Agora";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Destaques do $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Custo de Inscrição";
$hl1_desc = "Sem custo para se registrar";
$hl2_emoji = "💰";
$hl2_title = "Comissões de Negociação";
$hl2_desc = "Nenhum custo";
$hl3_emoji = "📋";
$hl3_title = "Facilidade de Registro";
$hl3_desc = "O cadastro é rápido e simples";
$hl4_emoji = "📊";
$hl4_title = "Foco Educacional";
$hl4_desc = "Aulas sobre cripto, negociação Forex e investimentos";
$hl5_emoji = "🌎";
$hl5_title = "Países Disponíveis";
$hl5_desc = "Não disponível nos EUA, disponível na maioria dos outros países";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Negocie com inteligência, cresça com confiança";
$footnav_about = "Sobre nós";
$footnav_product = "Produto";
$footnav_offer = "Oferta";
$footnav_contacts = "Contato";
$footnav_faq = "FAQ";
$footnav_privacy = "Política de Privacidade";
$footnav_conditions = "Termos de Uso";
$footnav_risk = "Aviso de Risco";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publica material educacional geral sobre negociação, investimentos, mercados financeiros e ativos digitais. Artigos, dados de mercado, gráficos e outros conteúdos do site são fornecidos apenas para fins informativos e não devem ser considerados aconselhamento financeiro, de investimento ou jurídico. Embora nos esforcemos para fornecer informações confiáveis e atualizadas, não podemos garantir sua precisão ou integridade e não somos responsáveis por perdas resultantes da confiança no conteúdo.<br><br>Negociar envolve risco, e criptomoedas, Forex, CFDs, ações e outros produtos financeiros podem oscilar significativamente em valor. Considere sua própria situação financeira e tolerância a risco antes de negociar, e busque aconselhamento profissional quando necessário. Nunca coloque dinheiro que você não pode perder.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Consultor de Negociação";
$quiz_text_welcome = "Olá! Sou a Sofia, sua consultora pessoal de negociação. Você tem alguns minutos para encontrarmos o melhor plano para você?";
$quiz_text_q1 = "Você já negociou antes?";
$quiz_text_a1_yes = "Sim, tenho experiência";
$quiz_text_a1_no = "Não, sou iniciante";
$quiz_text_q2 = "Ótimo! Qual é o seu primeiro nome para eu personalizar seu plano?";
$quiz_text_q3 = "Qual é o seu principal objetivo com a negociação?";
$quiz_text_a3_yes = "Construir riqueza a longo prazo";
$quiz_text_a3_no = "Gerar renda a curto prazo";
$quiz_text_q4 = "Com quanto você gostaria de começar?";
$quiz_text_a4_1 = "Menos de $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Mais de $1000";
$quiz_text_q5 = "Perfeito. Você gostaria que eu abrisse uma conta gratuita para você agora?";
$quiz_text_a5_yes = "Sim, vamos fazer isso";
$quiz_text_a5_no = "Agora não";
$quiz_text_loader = "Encontrando seu melhor plano...";
$quiz_text_final_ttl = "Tudo pronto!";
$quiz_text_processing = "Seus dados estão sendo enviados...";
$quiz_text_typing = "está digitando...";
$quiz_placeholder_fname = "Primeiro nome";
$quiz_placeholder_lname = "Sobrenome";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Obter Minha Conta Gratuita";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Início";
$bc_about = "Sobre nós";
$bc_product = "Produto";
$bc_offer = "Oferta";
$bc_contacts = "Contato";
$bc_faq = "FAQ";
$bc_privacy = "Política de Privacidade";
$bc_conditions = "Termos de Uso";
$bc_risk = "Aviso de Risco";
$bc_sign = "Cadastro";
$bc_thanks = "Obrigado";
$bc_sitemap = "Mapa do Site";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Sobre a $site_name";
$about_meta_description = "Conheça a missão da $site_name: tornar a análise de mercado mais clara e acessível com ferramentas orientadas por IA.";
$about_h1 = "Sobre a $site_name";
$about_lead = "$site_name foi construída em torno de uma ideia: as decisões de negociação devem se basear em informações claras, não em suposições.";
$about_p1 = "Combinamos inteligência artificial com experiência real de mercado para transformar dados complexos e ruidosos em sinais fáceis de entender e agir. Nossa plataforma monitora os mercados dia e noite, para que você não precise.";
$about_p2 = "Esteja você fazendo sua primeira negociação ou já atuando nos mercados há anos, $site_name foi projetada para atendê-lo onde você está — com ferramentas que vão desde orientações simples até análises avançadas em tempo real.";
$about_p3 = "Acreditamos que a tecnologia deve apoiar seu julgamento, não substituí-lo. Cada sinal que $site_name gera destina-se a informar uma decisão que ainda é totalmente sua.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Produto $site_name — Ferramentas de Análise de Mercado com IA";
$product_meta_description = "Conheça o produto $site_name: análise de mercado com IA em tempo real, copy trading, controles de risco e diversificação automatizada.";
$product_h1 = "O produto $site_name";
$product_lead = "Uma plataforma que lê o mercado por você: análise em tempo real, copy trading e ferramentas de risco flexíveis, projetadas para tornar as decisões de negociação mais claras.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Oferta $site_name — Comece Grátis";
$offer_meta_description = "Veja o que está incluído na oferta atual da $site_name: cadastro gratuito, sem comissões de negociação e acesso total à plataforma.";
$offer_h1 = "Nossa oferta atual";
$offer_lead = "Crie sua conta gratuitamente e desbloqueie a plataforma $site_name completa &mdash; sem taxas de registro, sem comissões de negociação.";
$offer_li1 = "Sem custo para registrar sua conta";
$offer_li2 = "Nenhuma comissão sobre transações";
$offer_li3 = "Acesso total à análise de mercado com IA em tempo real e copy trading";
$offer_li4 = "Saques disponíveis a qualquer momento, sem taxas ocultas";
$offer_li5 = "Recursos educacionais sobre cripto, Forex e investimentos incluídos";
$offer_note = "A disponibilidade pode variar por região. Consulte nosso <a class=\"link\" href=\"risk-warning.php\">Aviso de Risco</a> antes de financiar uma conta.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contate a $site_name — Fale com nossa equipe";
$contacts_meta_description = "Tem uma pergunta sobre sua conta $site_name ou a plataforma? Entre em contato com nossa equipe de suporte por e-mail ou envie-nos uma mensagem.";
$contacts_h1 = "Contato";
$contacts_lead = "Perguntas sobre sua conta, um depósito ou como a plataforma funciona? Nossa equipe está pronta para ajudar.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Horário de Suporte";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tempo de Resposta Típico";
$contacts_response_value = "Dentro de 24 horas";
$contacts_form_title = "Envie-nos uma Mensagem";
$contacts_form_desc = "Deixe seus dados abaixo e um membro da nossa equipe entrará em contato diretamente com você.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Política de Privacidade da $site_name";
$privacy_meta_description = "Saiba como a $site_name coleta, usa e protege seus dados pessoais em todo o site e plataforma.";
$privacy_sections = [
    [
        "title" => "1. Introdução",
        "body" => "Esta Política de Privacidade explica como a $site_name (\"nós\") coleta, usa e protege os dados pessoais dos visitantes e usuários do $site_domain (o \"Site\"). Ao usar o Site, você concorda com as práticas descritas abaixo.",
    ],
    [
        "title" => "2. Informações que coletamos",
        "body" => "Podemos coletar informações que você fornece diretamente, como seu nome, endereço de e-mail e número de telefone ao se cadastrar ou enviar um formulário, bem como informações coletadas automaticamente, incluindo seu endereço IP, tipo de dispositivo e navegador, e páginas visualizadas no Site.",
    ],
    [
        "title" => "3. Como usamos suas informações",
        "body" => "Usamos as informações coletadas para criar e gerenciar sua conta, responder a consultas, fornecer suporte ao cliente, melhorar o Site e nossos serviços e, quando permitido, enviar atualizações sobre produtos e ofertas. Você pode cancelar as comunicações de marketing a qualquer momento.",
    ],
    [
        "title" => "4. Cookies e Tecnologias de Rastreamento",
        "body" => "O Site usa cookies e tecnologias similares para lembrar suas preferências, mantê-lo conectado e entender como os visitantes usam nossas páginas. Você pode desativar os cookies nas configurações do seu navegador, embora alguns recursos possam não funcionar corretamente.",
    ],
    [
        "title" => "5. Compartilhamento de informações",
        "body" => "Não vendemos seus dados pessoais. Podemos compartilhar informações com provedores de serviços confiáveis que nos ajudam a operar o Site (como provedores de hospedagem ou análise), ou quando exigido por lei ou para proteger nossos direitos legais.",
    ],
    [
        "title" => "6. Segurança de dados",
        "body" => "Aplicamos medidas técnicas e organizacionais razoáveis para proteger suas informações contra acesso, alteração ou perda não autorizados. Nenhum método de transmissão ou armazenamento é totalmente seguro, e não podemos garantir segurança absoluta.",
    ],
    [
        "title" => "7. Seus Direitos e Escolhas",
        "body" => "Dependendo da sua localização, você pode ter o direito de acessar, corrigir ou solicitar a exclusão dos seus dados pessoais, e de se opor a determinados usos deles. Para exercer esses direitos, entre em contato conosco através da nossa <a class=\"link\" href=\"contacts.php\">página de contato</a>.",
    ],
    [
        "title" => "8. Privacidade Infantil",
        "body" => "O Site não é direcionado a pessoas menores de 18 anos, e não coletamos intencionalmente dados pessoais de menores. Se você acredita que um menor nos forneceu dados pessoais, entre em contato conosco para que possamos removê-los.",
    ],
    [
        "title" => "9. Alterações nesta Política",
        "body" => "Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão publicadas nesta página com uma data de vigência revisada. Recomendamos que você revise esta página regularmente.",
    ],
    [
        "title" => "10. Entre em Contato Conosco",
        "body" => "Se você tiver dúvidas sobre esta Política de Privacidade ou sobre como suas informações são tratadas, entre em contato conosco através da nossa <a class=\"link\" href=\"contacts.php\">página de contato</a> ou envie um e-mail para info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Termos de Uso da $site_name";
$conditions_meta_description = "Consulte os Termos de Uso que regem o acesso e uso do site e da plataforma de negociação $site_name.";
$conditions_sections = [
    [
        "title" => "1. Aceitação dos Termos",
        "body" => "Ao acessar ou usar $site_domain (o \"Site\"), você concorda em estar vinculado a estes Termos de Uso. Se você não concorda com qualquer parte destes termos, não use o Site.",
    ],
    [
        "title" => "2. Elegibilidade",
        "body" => "Você deve ter pelo menos 18 anos e ter capacidade legal para usar serviços relacionados a negociação em sua jurisdição para usar o Site. Ao usar o Site, você confirma que atende a esses requisitos.",
    ],
    [
        "title" => "3. Descrição do Serviço",
        "body" => "$site_name fornece uma plataforma online com conteúdo educacional, informações de mercado e ferramentas de análise assistidas por IA. Nada no Site constitui aconselhamento financeiro, de investimento, fiscal ou jurídico, e todas as informações fornecidas são apenas para fins informativos gerais.",
    ],
    [
        "title" => "4. Responsabilidades do Usuário",
        "body" => "Você é responsável por fornecer informações precisas no cadastro, por manter a confidencialidade das credenciais da sua conta e por todas as atividades que ocorram sob sua conta.",
    ],
    [
        "title" => "5. Propriedade Intelectual",
        "body" => "Todo o conteúdo do Site, incluindo texto, imagens, logotipos e software, é de propriedade da $site_name ou de seus licenciadores e é protegido pelas leis de propriedade intelectual aplicáveis. Você não pode reproduzir ou distribuir este conteúdo sem permissão.",
    ],
    [
        "title" => "6. Nenhum Aconselhamento Financeiro",
        "body" => "O conteúdo do Site é fornecido apenas para fins informativos e educacionais e não deve ser interpretado como aconselhamento financeiro. Você é o único responsável por suas próprias decisões de negociação e deve consultar um consultor financeiro independente quando necessário. Consulte nosso <a class=\"link\" href=\"risk-warning.php\">Aviso de Risco</a> para saber mais.",
    ],
    [
        "title" => "7. Limitação de Responsabilidade",
        "body" => "Na máxima extensão permitida por lei, a $site_name não será responsável por quaisquer danos diretos, indiretos, incidentais ou consequenciais decorrentes do seu uso, ou incapacidade de usar, o Site ou serviços de terceiros vinculados.",
    ],
    [
        "title" => "8. Rescisão",
        "body" => "Reservamo-nos o direito de suspender ou encerrar seu acesso ao Site a nosso critério, sem aviso prévio, por conduta que consideremos violar estes Termos de Uso ou que seja prejudicial a outros usuários ou ao Site.",
    ],
    [
        "title" => "9. Alterações nestes Termos",
        "body" => "Podemos revisar estes Termos de Uso a qualquer momento. O uso continuado do Site após a publicação de alterações constitui aceitação dos termos atualizados.",
    ],
    [
        "title" => "10. Contato",
        "body" => "Perguntas sobre estes Termos de Uso podem ser direcionadas à nossa equipe através da <a class=\"link\" href=\"contacts.php\">página de contato</a> ou por e-mail para info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Aviso de Risco da $site_name — Divulgação de Risco de Negociação";
$risk_meta_description = "Leia o aviso de risco da $site_name antes de negociar: riscos do mercado de criptomoedas, alavancagem, liquidez, cibersegurança e considerações regulatórias.";
$risk_title = "Aviso de Risco";
$risk_intro = "Entender os riscos é o primeiro passo para negociar com confiança.";
$risk_ai_title = "Como nosso sistema de IA ajuda na gestão de risco:";
$risk_ai_1_title = "Eficiência Algorítmica e Negociação Sem Emoção:";
$risk_ai_1_text = "Algoritmos avançados analisam sinais de mercado para executar transações objetivamente nos momentos ideais.";
$risk_ai_2_title = "Estratégias Baseadas em Dados:";
$risk_ai_2_text = "As estratégias são baseadas em padrões de mercado verificados e análise em tempo real, em vez de suposições.";
$risk_ai_3_title = "Configurações Flexíveis e Controle Total:";
$risk_ai_3_text = "Ajuste seus parâmetros de risco a qualquer momento. Acompanhe todos os saldos e transações de forma transparente no seu painel, sem taxas ocultas e sem restrições de saque.";
$risk_disclaimer = "<strong>Aviso Legal:</strong> A negociação sempre envolve risco. Sistemas automatizados (incluindo IA) não garantem lucro, podem falhar devido a bugs de software ou eventos inesperados do mercado, e requerem supervisão do usuário. Desempenho passado não garante resultados futuros. Esta plataforma serve apenas para fins informativos e de marketing e não fornece aconselhamento financeiro.";
$risk_s1_title = "1. Risco Geral do Mercado de Criptomoedas";
$risk_s1_text = "Criptomoedas são ativos altamente voláteis e especulativos que operam 24 horas por dia com supervisão regulatória mínima na maioria das jurisdições.";
$risk_s1_li1 = "Os valores podem oscilar drasticamente em curtos períodos, potencialmente levando à perda total do capital investido.";
$risk_s1_li2 = "Os valores de mercado podem ser fortemente afetados por mudanças regulatórias, desenvolvimentos tecnológicos, violações de segurança ou eventos macroeconômicos mais amplos.";
$risk_s1_li3 = "Alguns ativos podem perder totalmente seu valor. Invista apenas fundos que você pode perder.";
$risk_s2_title = "2. Risco de Execução, Liquidez e Alavancagem";
$risk_s2_li1_title = "Volatilidade de Mercado e Liquidez:";
$risk_s2_li1_text = "Movimentos extremos de preço (10-20%+ diariamente) ou baixa liquidez (especialmente em moedas menores) podem causar atrasos, falhas na plataforma e deslizamento severo na execução. Ordens de stop-loss podem não garantir limites de perda em condições extremas.";
$risk_s2_li2_title = "Risco de Alavancagem e Margem:";
$risk_s2_li2_text = "Produtos alavancados amplificam tanto os ganhos quanto as perdas, o que significa que você pode perder mais do que seu depósito original. Aproximadamente 70-80% das contas de investidores de varejo perdem dinheiro ao negociar produtos alavancados.";
$risk_s3_title = "3. Risco Técnico, de Cibersegurança e de Terceiros";
$risk_s3_li1_title = "Fatores Técnicos:";
$risk_s3_li1_text = "A negociação online carrega riscos inerentes de falhas de conexão à internet, bugs de hardware/software e indisponibilidade do serviço.";
$risk_s3_li2_title = "Cibersegurança:";
$risk_s3_li2_text = "Contas de criptomoedas são alvos frequentes de phishing, malware e invasões. As transações são irreversíveis; o comprometimento de suas credenciais de login pode levar à perda permanente.";
$risk_s3_li3_title = "Plataformas de Terceiros:";
$risk_s3_li3_text = "Este site pode conectar usuários a plataformas de terceiros. Não controlamos, endossamos nem garantimos sua segurança, operações ou solvência. Sempre realize sua própria due diligence completa antes de depositar fundos em plataformas externas.";
$risk_s4_title = "4. Disposições Regulatórias, Fiscais e Finais";
$risk_s4_li1_title = "Conformidade Legal e Impostos:";
$risk_s4_li1_text = "As estruturas regulatórias variam amplamente e mudam rapidamente. Os usuários são os únicos responsáveis por garantir que suas atividades de negociação estejam em conformidade com as leis locais e por cumprir suas próprias obrigações fiscais.";
$risk_s4_li2_title = "Nenhuma Garantia de Lucro:";
$risk_s4_li2_text = "Não existe negociação de criptomoedas \"segura\" ou livre de risco. Quaisquer números de retorno ou exemplos de desempenho fornecidos são puramente hipotéticos.";
$risk_s4_li3_title = "Adequação:";
$risk_s4_li3_text = "Se você não entende totalmente os riscos, depende de fundos essenciais ou negocia com dinheiro emprestado, a negociação de criptomoedas não é adequada para você. Consulte um consultor financeiro independente e licenciado em caso de dúvida.";
$risk_contact = "<strong>Contato:</strong> Para dúvidas sobre esta declaração ou para enviar uma pergunta, entre em contato com nossa equipe oficial de atendimento ao cliente através do formulário de contato em nosso site.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Cadastro | $site_name — Crie Sua Conta Gratuita";
$sign_meta_description = "Crie sua conta gratuita $site_name em minutos e comece a negociar com mais inteligência com a análise de mercado orientada por IA.";
$sign_h1 = "Crie Sua Conta Gratuita";
$sign_lead = "Junte-se à $site_name em minutos. Preencha seus dados abaixo para começar.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Obrigado | $site_name";
$thanks_h1 = "Obrigado!";
$thanks_text = "Seus dados foram recebidos. Um membro da equipe $site_name entrará em contato em breve para ajudá-lo a começar.";
$thanks_btn = "Voltar ao Início";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mapa do Site | $site_name";
$sitemap_meta_description = "Veja todas as páginas do site $site_name, incluindo a plataforma de negociação, oferta, suporte e páginas legais.";
$sitemap_h1 = "Mapa do Site";
$sitemap_lead = "Todas as páginas da $site_name em um só lugar.";

