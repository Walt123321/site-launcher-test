<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pt-PT';
$form_language = 'pt'; // matches this page's own language, not the offer's global default

// ============================================================
// PT TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Site Oficial | Plataforma de Negociação";
$home_meta_description = "$site_name oferece uma plataforma de negociação fácil de usar com ferramentas de mercado avançadas, informações em tempo real e recursos práticos projetados para tornar a negociação online mais acessível e informada.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Plataforma $site_name";
$hero_subtitle = "Apoiando milhões em todo o mundo em sua jornada com ativos digitais";
$hero_badge_title = "Membros Satisfeitos";
$hero_badge_subtitle = "Amado por milhões";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Comece a Negociar Hoje";
$form_desc = "Pronto para dar o próximo passo? Cadastre-se agora e dê o primeiro passo rumo à liberdade financeira. Comece com apenas $app_price $app_currency — acesse todas as ferramentas de negociação, dados de mercado em tempo real e acesso total à plataforma desde o primeiro dia.";
$form_fname_placeholder = "Nome";
$form_lname_placeholder = "Sobrenome";
$form_email_placeholder = "E-mail";
$form_btn_submit = "Cadastrar-se";
$form_disclaimer_text = "Ao inserir suas informações pessoais e clicar no botão, você concorda com a <a class=\"link\" href=\"privacy.php\">Política de Privacidade</a> e os <a class=\"link\" href=\"conditions.php\">Termos e Condições</a> do site.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SEGURO";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Conheça a Plataforma";
$stats_title = "Uma breve introdução a uma negociação mais inteligente";
$stat_1_value = "154+";
$stat_1_label = "Países Cobertos";
$stat_2_value = "29 Milhões";
$stat_2_label = "Investidores Globais";
$stat_3_value = "635+";
$stat_3_label = "Moedas";
$stat_4_value = "3,26 Bilhões $";
$stat_4_label = "Volume de Negociação em 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Por que $site_name?";
$why_title = "Razões para Nos Escolher";
$why_1_title = "Rápido &amp; Fácil";
$why_1_text = "Compre e venda suas criptomoedas favoritas em segundos.";
$why_2_title = "Seguro &amp; Protegido";
$why_2_text = "Usamos a tecnologia mais recente para manter seus fundos e dados seguros.";
$why_3_title = "Aberto para Todos";
$why_3_text = "Negocie em nossa plataforma 24/7, onde e quando quiser.";
$why_4_title = "Ferramentas Profissionais";
$why_4_text = "De recursos de negociação simples a profissionais, temos tudo.";
$why_5_title = "Tendências &amp; Insights";
$why_5_text = "Receba as últimas notícias, insights e tendências de criptomoedas de especialistas.";
$why_6_title = "Suporte 24/7";
$why_6_text = "Nossa equipe de suporte amigável está aqui para ajudar a qualquer momento.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Como Funciona";
$how_title = "Passos Simples para Começar a Negociar";
$how_1_title = "Cadastrar-se";
$how_1_text = "Crie uma conta e comece a negociar em minutos.";
$how_1_btn = "Começar a Negociar";
$how_2_title = "Deposite Fundos";
$how_2_text = "Financie sua conta com um depósito mínimo de $app_price $app_currency para desbloquear o acesso total à negociação. Escolha entre vários métodos de pagamento e comece a expandir seu portfólio hoje mesmo.";
$how_2_note = "Adicionar fundos....";
$how_3_title = "Começar a Negociar";
$how_3_text = "Explore o mercado e negocie do seu jeito.";
$how_3_note = "Comprar e HODLar";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calculadora";
$calc_title = "Descubra quanto tempo e potencial você está deixando de lado";
$calc_volume_label = "Volume de Negociação Mensal";
$calc_trades_label = "Negociações por Semana";
$calc_time_label = "Tempo que Você Poderia Economizar";
$calc_boost_label = "Aumento Potencial de Volume";
$calc_btn = "Começar a Negociar";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Recursos";
$features_title = "O Poder da $site_name";
$feature_1_title = "Negociação Spot";
$feature_1_text = "Maximize seu potencial de negociação com ferramentas profissionais.";
$feature_2_title = "Comprar Cripto";
$feature_2_text = "Compre cripto usando cartões ou bancos.";
$feature_3_title = "Derivativos Cripto";
$feature_3_text = "Negociação de futuros fácil e avançada.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Faça seu patrimônio crescer com facilidade.";
$feature_5_title = "Bot de Negociação";
$feature_5_text = "Lucros mais altos, mesmo enquanto você dorme.";
$feature_6_title = "Negociação com Margem";
$feature_6_text = "Peça emprestado, negocie e pague de forma fácil.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "O Que Nossos Usuários Dizem";
$review_1_text = "A plataforma é muito fácil de usar, e tenho visto um progresso constante desde que me tornei holder. O comprometimento e as novas ideias da equipe me deixam animado com o que vem a seguir!";
$review_1_role = "Trader";
$review_2_text = "$site_name oferece uma experiência de negociação fluida e intuitiva. Consegui começar a comprar e negociar cripto imediatamente. A interface é fácil de usar, e as velocidades de transação são excelentes!";
$review_2_role = "Novo Trader";
$review_3_text = "Confio nesta plataforma para gerenciar meus investimentos em cripto. Seus recursos de segurança me dão confiança, e nunca tive problemas com saques ou depósitos. É uma das exchanges mais confiáveis que já usei.";
$review_3_role = "Trader Profissional";
$review_4_text = "Sempre que tive dúvidas, a equipe de suporte ao cliente foi rápida e prestativa. Eles realmente se importam com seus usuários e tornam cada experiência de negociação tranquila e simples.";
$review_4_role = "Trader Experiente";
$review_5_text = "Como iniciante, achei $site_name muito fácil de usar. O que realmente se destaca é a gama de ferramentas avançadas para traders mais experientes. É uma opção sólida para qualquer um que queira construir seu portfólio!";
$review_5_role = "Trader da Comunidade";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Perguntas Frequentes";
$faq_title = "Perguntas Frequentes";
$faq_q1 = "O que é $site_name?";
$faq_a1 = "$site_name é uma exchange de criptomoedas onde os usuários podem negociar facilmente uma ampla gama de moedas, incluindo Bitcoin, Ethereum e outras criptomoedas populares.";
$faq_q2 = "Quão Segura é a $site_name para Negociação de Cripto?";
$faq_a2 = "A plataforma oferece segurança por meio de tecnologia avançada e lastro de ativos 1:1 via Prova de Reservas.";
$faq_q3 = "Como Faço um Depósito?";
$faq_a3 = "$site_name oferece várias opções de depósito, incluindo depósito em cripto, depósito fiat, negociação P2P e compra com um clique.";
$faq_q4 = "Preciso de Experiência para Usar a $site_name?";
$faq_a4 = "Não, você não precisa de nenhuma experiência. A interface fácil de usar da plataforma a torna acessível a todos, de iniciantes a traders avançados.";
$faq_q5 = "Existem taxas ou custos ocultos?";
$faq_a5 = "Absolutamente nenhum. Não há taxas de registro, custos de assinatura ou encargos ocultos de qualquer tipo. Você sempre vê o valor exato da transação antes de confirmar. A receita vem de recursos premium e parcerias de exchange, não de retirar dinheiro dos usuários.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Comece a Negociar Hoje";
$cta_desc = "Pronto para dar o próximo passo? Cadastre-se agora e dê o primeiro passo rumo à independência financeira.";
$cta_btn = "Cadastrar-se";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Principais Recursos da Plataforma de Negociação $site_name";
$table_1_label = "🤖 Tecnologia da Plataforma";
$table_1_val = "Motor de Negociação IA Avançado";
$table_2_label = "💳 Métodos de Financiamento";
$table_2_val = "Principais Cartões de Crédito, Transferência Bancária, PayPal";
$table_3_label = "📱 Acesso à Plataforma";
$table_3_val = "Compatibilidade Multi-dispositivos";
$table_4_label = "🚀 Taxa de Desempenho";
$table_4_val = "85% de Precisão";
$table_5_label = "📊 Instrumentos de Negociação";
$table_5_val = "Ações, Forex, Commodities, Metais Preciosos, CFDs, Criptomoedas e mais…";
$table_6_label = "✍️ Configuração da Conta";
$table_6_val = "Rápida e Eficiente";
$table_7_label = "📞 Atendimento ao Cliente";
$table_7_val = "Assistência Profissional 24/7";

// Reviews summary card
$summary_title = "Avaliações da $site_name";
$summary_badge = "Confiável";
$summary_desc = "Uma plataforma de negociação poderosa e fácil de usar com automação sólida e recursos educacionais.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Negocie com sabedoria, cresça rápido";
$footer_community_label = "Comunidade";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produto";
$footnav_offer = "Oferta";
$footnav_contacts = "Contato";
$footnav_faq = "Perguntas Frequentes";
$footnav_privacy = "Política de Privacidade";
$footnav_conditions = "Termos e Condições";
$footnav_risk = "Aviso de Risco";
$footer_disclaimer = "$site_name compartilha recursos educacionais e material relacionado ao mercado para ajudar os visitantes a entender melhor negociação, investimento e produtos financeiros digitais. As informações apresentadas no site, como comentários de mercado, preços de ativos, gráficos, guias e conteúdo analítico, são fornecidas apenas para fins informativos gerais e não constituem aconselhamento financeiro, de investimento, fiscal ou jurídico. Embora esforços razoáveis sejam feitos para manter informações precisas e relevantes, $site_name não oferece garantias quanto à integridade, precisão ou atualidade do conteúdo e não pode ser responsabilizada por decisões ou perdas resultantes de seu uso.<br><br>A participação nos mercados financeiros envolve riscos inerentes. Criptomoedas, Forex, CFDs, ações e outros instrumentos de negociação podem sofrer flutuações substanciais de preço, e perdas podem ocorrer. Circunstâncias individuais e tolerância ao risco variam, portanto os usuários devem fazer sua própria pesquisa e considerar obter aconselhamento de um profissional financeiro qualificado antes de investir fundos. Nunca negocie com dinheiro que você não pode se dar ao luxo de perder.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Consultora de Negociação";
$quiz_text_welcome = "Olá! Sou a Maya, sua consultora pessoal de negociação. Você tem alguns minutos para encontrarmos o melhor plano para você?";
$quiz_text_q1 = "Você já negociou criptomoedas antes?";
$quiz_text_a1_yes = "Sim, tenho experiência";
$quiz_text_a1_no = "Não, sou iniciante";
$quiz_text_q2 = "Ótimo! Qual é o seu primeiro nome para que eu possa personalizar seu plano?";
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
$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Sobrenome";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Obter Minha Conta Gratuita";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Aviso de Risco da $site_name — Divulgação de Risco de Negociação";
$risk_meta_description = "Leia o aviso de risco da $site_name antes de negociar: riscos do mercado de criptomoedas, alavancagem, liquidez, cibersegurança e considerações regulatórias.";
$risk_title = "Aviso de Risco";
$risk_intro = "Entender os riscos é o primeiro passo rumo à negociação confiante.";
$risk_ai_title = "Como Nosso Sistema de IA Ajuda a Gerenciar Riscos:";
$risk_ai_1_title = "Eficiência Algorítmica &amp; Negociação Sem Emoção:";
$risk_ai_1_text = "Algoritmos avançados analisam sinais de mercado para executar negociações objetivamente nos momentos ideais.";
$risk_ai_2_title = "Estratégias Baseadas em Dados:";
$risk_ai_2_text = "As estratégias se baseiam em padrões de mercado verificados e análise em tempo real, em vez de suposições.";
$risk_ai_3_title = "Configurações Flexíveis &amp; Controle Total:";
$risk_ai_3_text = "Ajuste seus parâmetros de risco a qualquer momento. Acompanhe todos os saldos e negociações de forma transparente em seu painel, sem taxas ocultas e sem restrições de saque.";
$risk_disclaimer = "<strong>Aviso Legal:</strong> A negociação sempre envolve risco. Sistemas automatizados (incluindo IA) não garantem lucro, podem falhar devido a erros de software ou eventos de mercado inesperados, e requerem monitoramento do usuário. O desempenho passado não é indicativo de resultados futuros. Esta plataforma serve exclusivamente para fins informativos e de marketing e não fornece aconselhamento financeiro.";
$risk_s1_title = "1. Riscos Gerais &amp; do Mercado de Criptomoedas";
$risk_s1_text = "Criptomoedas são ativos altamente voláteis e especulativos que operam 24/7 com supervisão regulatória mínima na maioria das jurisdições.";
$risk_s1_li1 = "Os valores podem flutuar drasticamente em curtos períodos, potencialmente levando a uma perda total do capital investido.";
$risk_s1_li2 = "Os valores de mercado podem ser fortemente afetados por mudanças regulatórias, desenvolvimentos técnicos, violações de segurança ou eventos macroeconômicos mais amplos.";
$risk_s1_li3 = "Alguns ativos podem perder completamente todo o seu valor. Invista apenas fundos que você pode se dar ao luxo de perder.";
$risk_s2_title = "2. Riscos de Execução, Liquidez &amp; Alavancagem";
$risk_s2_li1_title = "Volatilidade do Mercado &amp; Liquidez:";
$risk_s2_li1_text = "Movimentos extremos de preço (10-20%+ diariamente) ou baixa liquidez (especialmente em moedas menores) podem levar a atrasos, interrupções da plataforma e deslizamento severo de execução. Ordens stop-loss não podem garantir limites de perda em condições extremas.";
$risk_s2_li2_title = "Riscos de Alavancagem &amp; Margem:";
$risk_s2_li2_text = "Produtos alavancados amplificam tanto ganhos quanto perdas, o que significa que você pode perder mais do que seu depósito inicial. <em>Aproximadamente 70-80% das contas de investidores de varejo perdem dinheiro ao negociar produtos alavancados.</em>";
$risk_s3_title = "3. Riscos Técnicos, de Cibersegurança &amp; de Terceiros";
$risk_s3_li1_title = "Fatores Técnicos:";
$risk_s3_li1_text = "A negociação online inerentemente envolve riscos de desconexões de internet, erros de hardware/software e indisponibilidade do serviço.";
$risk_s3_li2_title = "Cibersegurança:";
$risk_s3_li2_text = "Contas de criptomoedas são alvos frequentes de phishing, malware e hackeamento. As transações são irreversíveis; comprometer suas credenciais pode resultar em perda permanente.";
$risk_s3_li3_title = "Plataformas de Terceiros:";
$risk_s3_li3_text = "Este site pode conectar usuários a plataformas de terceiros. Não controlamos, endossamos ou garantimos sua segurança, operações ou solvência. Sempre realize sua própria due diligence antes de depositar fundos em plataformas externas.";
$risk_s4_title = "4. Disposições Regulatórias, Fiscais &amp; Finais";
$risk_s4_li1_title = "Conformidade Legal &amp; Impostos:";
$risk_s4_li1_text = "Os quadros regulatórios variam amplamente e mudam rapidamente. Os usuários são exclusivamente responsáveis por garantir que sua atividade de negociação esteja em conformidade com as leis locais e por cumprir suas próprias obrigações fiscais.";
$risk_s4_li2_title = "Sem Garantias de Lucro:";
$risk_s4_li2_text = "Não existe negociação de cripto \"segura\" ou livre de risco. Quaisquer números de retorno ou exemplos de desempenho fornecidos são puramente hipotéticos.";
$risk_s4_li3_title = "Adequação:";
$risk_s4_li3_text = "Se você não entende completamente os riscos, depende de fundos essenciais ou negocia com dinheiro emprestado, a negociação de cripto não é adequada para você. Consulte um consultor financeiro independente e licenciado se estiver incerto.";
$risk_contact = "<strong>Contato:</strong> Para quaisquer dúvidas sobre esta declaração ou para enviar uma consulta, entre em contato com nossa equipe oficial de atendimento ao cliente por meio do formulário de contato em nosso site.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Início";
$bc_product = "Produto";
$bc_offer = "Oferta";
$bc_contacts = "Contato";
$bc_faq = "Perguntas Frequentes";
$bc_privacy = "Política de Privacidade";
$bc_conditions = "Termos e Condições";
$bc_risk = "Aviso de Risco";
$bc_sign = "Cadastrar-se";
$bc_sitemap = "Mapa do Site";
$bc_thanks = "Obrigado";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produto $site_name — Ferramentas de Negociação &amp; Recursos da Plataforma";
$product_meta_description = "Descubra o produto $site_name: negociação spot, derivativos cripto, um bot de negociação, negociação com margem e mais, tudo construído em uma plataforma rápida e segura.";
$product_h1 = "O Produto de Negociação da $site_name";
$product_lead = "Uma plataforma, todas as ferramentas que um trader precisa: da sua primeira negociação spot a estratégias automatizadas e posições com margem, $site_name mantém a experiência rápida, segura e fácil de entender.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Oferta $site_name — Comece a Negociar a Partir de $$app_price";
$offer_meta_description = "Veja o que está incluído na oferta atual da $site_name: um baixo depósito mínimo de $$app_price, acesso total à plataforma e sem taxas ocultas.";
$offer_h1 = "Nossa Oferta Atual";
$offer_lead = "Comece com apenas <strong>$$app_price $app_currency</strong> e desbloqueie a plataforma $site_name completa desde o primeiro dia &mdash; todas as ferramentas, todos os mercados, sem custos ocultos.";
$offer_li1 = "Depósito mínimo de apenas $$app_price $app_currency para ativar sua conta";
$offer_li2 = "Acesso total à negociação spot, derivativos, margem e ao bot de negociação";
$offer_li3 = "Múltiplos métodos de financiamento, incluindo cartões e transferência bancária";
$offer_li4 = "Sem taxas de registro, sem custos de assinatura, sem encargos ocultos";
$offer_li5 = "Atendimento ao cliente 24/7 enquanto você começa";
$offer_note = "Os valores de depósito e métodos de pagamento disponíveis podem variar por região. Revise nosso <a class=\"link\" href=\"risk-warning.php\">Aviso de Risco</a> antes de financiar uma conta.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Entre em Contato com a $site_name — Fale com Nossa Equipe";
$contacts_meta_description = "Tem uma dúvida sobre sua conta $site_name ou a plataforma? Entre em contato com nossa equipe de suporte por e-mail ou envie-nos uma mensagem, e retornaremos.";
$contacts_h1 = "Contato";
$contacts_lead = "Dúvidas sobre sua conta, um depósito, ou como a plataforma funciona? Nossa equipe está aqui para ajudar.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Horário de Suporte";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tempo de Resposta Típico";
$contacts_response_value = "Dentro de 24 horas";
$contacts_form_title = "Envie-nos uma Mensagem";
$contacts_form_desc = "Deixe seus dados abaixo e um membro da nossa equipe entrará em contato diretamente com você.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Perguntas Frequentes da $site_name";
$faq_meta_description = "Respostas às perguntas mais comuns sobre criar uma conta $site_name, fazer um depósito, segurança da plataforma e taxas.";
$faq_page_lead = "Tudo o que você precisa saber antes de começar a negociar. Não encontrou sua resposta? <a class=\"link\" href=\"contacts.php\">Entre em contato com nossa equipe</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Política de Privacidade da $site_name";
$privacy_meta_description = "Descubra como a $site_name coleta, usa e protege suas informações pessoais em todo o site e plataforma.";
$privacy_sections = [
    [
        "title" => "1. Introdução",
        "body" => "Esta Política de Privacidade explica como a $site_name (\"nós\") coleta, usa e protege as informações pessoais de visitantes e usuários de $site_domain (o \"Site\"). Ao usar o Site, você concorda com as práticas descritas abaixo.",
    ],
    [
        "title" => "2. Informações que Coletamos",
        "body" => "Podemos coletar informações que você fornece diretamente, como seu nome, endereço de e-mail e número de telefone ao se cadastrar ou enviar um formulário, bem como informações coletadas automaticamente, incluindo seu endereço IP, tipo de dispositivo e navegador, e páginas visualizadas no Site.",
    ],
    [
        "title" => "3. Como Usamos Suas Informações",
        "body" => "Usamos as informações coletadas para criar e gerenciar sua conta, responder a consultas, fornecer suporte ao cliente, melhorar o Site e nossos serviços, e, quando permitido, enviar atualizações sobre produtos e ofertas. Você pode cancelar a inscrição em comunicações de marketing a qualquer momento.",
    ],
    [
        "title" => "4. Cookies &amp; Tecnologias de Rastreamento",
        "body" => "O Site usa cookies e tecnologias semelhantes para lembrar suas preferências, mantê-lo conectado e entender como os visitantes usam nossas páginas. Você pode desativar cookies através das configurações do seu navegador, embora alguns recursos possam não funcionar corretamente como resultado.",
    ],
    [
        "title" => "5. Compartilhamento de Informações",
        "body" => "Não vendemos suas informações pessoais. Podemos compartilhar informações com prestadores de serviços confiáveis que nos ajudam a operar o Site (como provedores de hospedagem ou análise), ou quando exigido por lei ou para proteger nossos direitos legais.",
    ],
    [
        "title" => "6. Segurança de Dados",
        "body" => "Aplicamos medidas técnicas e organizacionais razoáveis para proteger suas informações contra acesso não autorizado, alteração ou perda. Nenhum método de transmissão ou armazenamento é completamente seguro, e não podemos garantir segurança absoluta.",
    ],
    [
        "title" => "7. Seus Direitos &amp; Escolhas",
        "body" => "Dependendo da sua localização, você pode ter o direito de acessar, corrigir ou solicitar a exclusão de suas informações pessoais, e se opor a certos usos delas. Para exercer esses direitos, entre em contato conosco através da nossa <a class=\"link\" href=\"contacts.php\">página de contato</a>.",
    ],
    [
        "title" => "8. Privacidade de Menores",
        "body" => "O Site não é direcionado a pessoas menores de 18 anos, e não coletamos conscientemente informações pessoais de menores. Se você acredita que um menor nos forneceu informações pessoais, entre em contato conosco para que possamos removê-las.",
    ],
    [
        "title" => "9. Alterações a Esta Política",
        "body" => "Podemos atualizar esta Política de Privacidade periodicamente. Quaisquer alterações serão publicadas nesta página com uma data de vigência revisada. Incentivamos você a revisar esta página periodicamente.",
    ],
    [
        "title" => "10. Entre em Contato Conosco",
        "body" => "Se você tiver dúvidas sobre esta Política de Privacidade ou como suas informações são tratadas, entre em contato conosco através da nossa <a class=\"link\" href=\"contacts.php\">página de contato</a> ou envie-nos um e-mail para info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Termos e Condições da $site_name";
$conditions_meta_description = "Revise os Termos e Condições que regem o acesso e uso do site e da plataforma de negociação $site_name.";
$conditions_sections = [
    [
        "title" => "1. Aceitação dos Termos",
        "body" => "Ao acessar ou usar $site_domain (o \"Site\"), você concorda em estar vinculado a estes Termos e Condições. Se você não concorda com qualquer parte destes termos, não use o Site.",
    ],
    [
        "title" => "2. Elegibilidade",
        "body" => "Você deve ter pelo menos 18 anos e estar legalmente autorizado a usar serviços relacionados à negociação em sua jurisdição para usar o Site. Ao usar o Site, você confirma que atende a esses requisitos.",
    ],
    [
        "title" => "3. Descrição do Serviço",
        "body" => "$site_name fornece uma plataforma online com conteúdo educacional, informações de mercado e ferramentas de negociação. Nada no Site constitui aconselhamento financeiro, de investimento, fiscal ou jurídico, e qualquer informação fornecida é apenas para fins informativos gerais.",
    ],
    [
        "title" => "4. Responsabilidades do Usuário",
        "body" => "Você é responsável por fornecer informações precisas ao se cadastrar, por manter a confidencialidade das credenciais da sua conta, e por todas as atividades que ocorram sob sua conta.",
    ],
    [
        "title" => "5. Propriedade Intelectual",
        "body" => "Todo o conteúdo no Site, incluindo texto, gráficos, logotipos e software, é propriedade da $site_name ou de seus licenciadores e é protegido pelas leis de propriedade intelectual aplicáveis. Você não pode reproduzir ou distribuir este conteúdo sem permissão.",
    ],
    [
        "title" => "6. Nenhum Aconselhamento Financeiro",
        "body" => "O conteúdo no Site é fornecido apenas para fins informativos e educacionais e não deve ser interpretado como aconselhamento financeiro. Você é o único responsável por suas próprias decisões de negociação e deve consultar um consultor financeiro independente, se necessário. Consulte nosso <a class=\"link\" href=\"risk-warning.php\">Aviso de Risco</a> para saber mais.",
    ],
    [
        "title" => "7. Limitação de Responsabilidade",
        "body" => "Na máxima extensão permitida por lei, a $site_name não será responsável por quaisquer danos diretos, indiretos, incidentais ou consequenciais decorrentes do seu uso, ou incapacidade de usar, o Site ou quaisquer serviços de terceiros vinculados.",
    ],
    [
        "title" => "8. Rescisão",
        "body" => "Reservamo-nos o direito de suspender ou encerrar seu acesso ao Site a nosso critério, sem aviso prévio, por conduta que consideremos violar estes Termos e Condições ou que seja prejudicial a outros usuários ou ao Site.",
    ],
    [
        "title" => "9. Alterações a Estes Termos",
        "body" => "Podemos revisar estes Termos e Condições a qualquer momento. O uso continuado do Site após a publicação de alterações constitui aceitação dos termos atualizados.",
    ],
    [
        "title" => "10. Contato",
        "body" => "Perguntas sobre estes Termos e Condições podem ser direcionadas à nossa equipe através da <a class=\"link\" href=\"contacts.php\">página de contato</a> ou por e-mail para info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Cadastrar-se | $site_name — Crie Sua Conta Gratuita";
$sign_meta_description = "Crie sua conta gratuita da $site_name em minutos e comece a negociar com apenas $$app_price $app_currency.";
$sign_h1 = "Crie Sua Conta Gratuita";
$sign_lead = "Junte-se à $site_name em minutos. Preencha seus dados abaixo para começar.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Obrigado | $site_name";
$thanks_h1 = "Obrigado!";
$thanks_text = "Seus dados foram recebidos. Um membro da equipe da $site_name entrará em contato em breve para ajudá-lo a começar.";
$thanks_btn = "Voltar ao Início";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mapa do Site | $site_name";
$sitemap_meta_description = "Navegue por todas as páginas do site $site_name, incluindo a plataforma de negociação, oferta, suporte e páginas legais.";
$sitemap_h1 = "Mapa do Site";
$sitemap_lead = "Todas as páginas da $site_name em um só lugar.";

