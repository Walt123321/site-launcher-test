<?php
require __DIR__ . '/../lang.php';
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// ============================================================
// IT TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Sito Ufficiale | Piattaforma di Trading";
$home_meta_description = "$site_name offre una piattaforma di trading facile da usare con strumenti di mercato avanzati, approfondimenti in tempo reale e funzionalità pratiche progettate per rendere il trading online più accessibile e informato.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Chi siamo";
$nav_contacts = "Contatti";
$nav_login = "Accedi";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "In diretta";
$activity_suffix = "Appena iscritto";
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
$form_title = "Inizia";
$form_fname_placeholder = "Nome completo";
$form_lname_placeholder = "Cognome";
$form_email_placeholder = "Indirizzo e-mail";
$form_btn_submit = "Crea un account";
$form_disclaimer_text = "* Cliccando sul pulsante, accetti la nostra <a class=\"link\" href=\"privacy.php\">Informativa sulla privacy</a> e i nostri <a class=\"link\" href=\"conditions.php\">Termini di utilizzo</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SICURO";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: IA progettata per leggere il mercato con maggiore chiarezza";
$s1_subtitle = "Strategia di investimento guidata dalla tecnologia";
$s1_quote = "$site_name è stato creato per semplificare il lavoro con i mercati, sia che tu abbia esperienza o meno. La piattaforma applica l'intelligenza artificiale per trasformare dati complessi in decisioni chiare e attuabili, aiutandoti ad agire con maggiore fiducia in qualsiasi scenario.";
$s1_p1 = "Il sistema esamina enormi volumi di informazioni in tempo reale: rileva i cambiamenti, riconosce i pattern e risponde rapidamente ai segnali di mercato. Questo ti offre una lettura precisa del contesto attuale così puoi individuare opportunità senza dover scavare tra analisi complicate.";
$s1_p2 = "Il monitoraggio 24/7, un'interfaccia facile da usare e un elevato livello di protezione rendono l'esperienza comoda e affidabile. Tutto è progettato affinché tu possa concentrarti sui risultati, non sull'aspetto tecnico.";
$s1_p3 = "La funzione di copy trading ti dà anche accesso alle strategie di trader più esperti. Puoi seguire le loro mosse e applicare approcci comprovati al tuo trading, combinando giudizio professionale e automazione.";
$s1_cta = "Crea un account";
$s1_img_alt = "$site_name finanza digitale";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Analisi di mercato precisa, senza rumore extra";
$s2_intro = "$site_name utilizza l'intelligenza artificiale per monitorare continuamente il mercato e rilevare rapidamente i cambiamenti. Il sistema elabora grandi quantità di dati e mostra solo i segnali rilevanti, senza sopraffarti con informazioni inutili.";
$s2_item1_title = "Risposta del mercato senza attese";
$s2_item1_text = "La piattaforma identifica i movimenti nelle loro fasi iniziali: momentum, inversioni e cambi di tendenza. Vedi istantaneamente cosa sta succedendo e puoi agire al momento giusto.";
$s2_item2_title = "Una lettura chiara invece di supposizioni";
$s2_item2_text = "Niente grafici contorti o supposizioni. $site_name evidenzia l'essenziale e offre una visione chiara della situazione così puoi decidere con i dati, non con l'intuito.";
$s2_item3_title = "Controllo e protezione";
$s2_item3_text = "I tuoi dati sono protetti, l'accesso è controllato e le operazioni avvengono tramite canali sicuri. Così puoi concentrarti sul mercato, non sul rischio tecnico.";
$s2_img_alt = "$site_name crypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Intelligenza chiara per i trader";
$s3_card1_title = "$site_name rispetta la privacy e il controllo dell'utente";
$s3_card1_text = "$site_name gestisce le informazioni con totale trasparenza e integrità. Non fa un uso improprio dei tuoi dati personali. Nessuna operazione o ordine viene registrato su questa piattaforma.";
$s3_card2_title = "Un ambiente di analisi chiaro per decisioni migliori";
$s3_card2_text = "$site_name funziona come uno spazio tecnologico in cui l'IA rafforza il giudizio umano invece di sostituirlo. Questi strumenti facilitano la comprensione dei cambiamenti di mercato, il confronto delle strategie e lo studio del comportamento degli asset.";
$s3_card3_title = "Strumenti IA che affinano la tua lettura del mercato";
$s3_card3_text = "L'analisi non si ferma mai. $site_name osserva l'ambiente crypto e invia avvisi in tempo reale ogni volta che appare un movimento rilevante.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Analisi acuta, senza emozioni o errori";
$s4_quote = "$site_name trasforma dati di mercato complessi in informazioni organizzate e facili da leggere, eliminando il rumore inutile e aiutandoti a concentrarti sui segnali che contano davvero. Questo ti permette di comprendere una situazione prima e decidere senza lasciare che l'emozione prenda il sopravvento.";
$s4_p1 = "Il sistema aggiorna continuamente le sue conclusioni con nuovi dati. Invece di indicatori in ritardo, utilizza modelli adattivi che reagiscono ai cambiamenti di mercato in tempo reale. Questo significa che lavori sempre con una visione aggiornata e puoi agire più velocemente quando conta davvero.";
$s4_img_alt = "$site_name intelligenza artificiale";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Usa l'IA di $site_name per prendere decisioni precise e tempestive";
$s5_quote = "$site_name analizza il mercato in tempo reale e ti mostra immediatamente dove si trovano il movimento e le opportunità. Il sistema elabora i dati per te e fornisce segnali pronti all'uso: quando entrare, quando uscire e cosa osservare.";
$s5_p1 = "Non c'è bisogno di guardare i grafici tutto il giorno. La piattaforma rileva i cambiamenti da sola e risponde rapidamente al mercato, aiutandoti a non perdere momenti chiave.";
$s5_p2 = "Gli algoritmi funzionano 24/7 e identificano nuove opportunità non appena appaiono. Ottieni informazioni aggiornate senza ritardi o sovraccarico di informazioni.";
$s5_p3 = "Allo stesso tempo, la sicurezza rimane a un livello elevato: protezione dei dati, accesso sicuro e controllo delle operazioni. $site_name è adatto sia ai principianti che ai trader attivi — le decisioni restano tue, ma supportate da una solida base analitica.";
$s5_img_alt = "$site_name automazione finanziaria";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Un trading coerente inizia con un sistema organizzato";
$s6_p1 = "$site_name aiuta a portare struttura nel tuo lavoro con il mercato. La piattaforma crea un quadro chiaro: definisci i tuoi obiettivi e il tuo livello di rischio, e il sistema adatta la sua analisi al tuo stile — senza caos e senza sovraccarico.";
$s6_p2 = "L'analisi 24/7 trasforma il flusso di dati in segnali semplici e comprensibili. Vedi solo ciò che conta: dove c'è movimento, dove vale la pena entrare e quando è meglio aspettare. Nel tempo, gli algoritmi diventano più precisi e si adattano al mercato.";
$s6_item1_title = "Scegli il tuo ritmo: trading veloce o un approccio a lungo termine";
$s6_item1_text = "$site_name supporta diverse strategie. Per il trading attivo, il sistema segnala i punti di ingresso e i movimenti di prezzo. Per un approccio a più lungo termine, ti aiuta a mantenere posizioni tenendo conto della tendenza e del rischio.";
$s6_item2_title = "Punti di ingresso senza supposizioni";
$s6_item2_text = "La piattaforma mostra dove il mercato è più attivo. Questo ti aiuta a entrare con maggiore fiducia e uscire in tempo, senza improvvisare.";
$s6_item3_title = "Gestione del rischio fin dall'inizio";
$s6_item3_text = "Puoi vedere possibili scenari in anticipo: dove il rischio è più basso e il potenziale più alto. Così puoi pianificare le operazioni prima ancora che il movimento inizi.";
$s6_item4_title = "Analisi pronta all'uso";
$s6_item4_text = "$site_name non ti sopraffà con terminologia complicata. Ottieni informazioni chiare, pronte all'uso, progettate per aiutarti a decidere più velocemente e con maggiore fiducia.";
$s6_cta = "Inizia ora";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Strumenti semplici per decisioni precise con $site_name";
$s7_quote = "$site_name ti offre tutto ciò di cui hai bisogno per fare trading sul mercato — senza gergo tecnico o sovraccarico di informazioni. La piattaforma analizza da sola il movimento dei prezzi, le tendenze e i possibili punti di ingresso, mostrando solo ciò che conta davvero.";
$s7_point1 = "Il sistema aiuta a rilevare quando il mercato potrebbe invertirsi, dove appaiono movimenti forti e quali momenti sono migliori per entrare o uscire. Ogni segnale arriva pre-elaborato — non hai bisogno di padroneggiare indicatori complessi.";
$s7_point2 = "Include anche il copy trading: puoi seguire le decisioni di trader esperti e replicarle senza dedicare tempo alla tua analisi.";
$s7_point3 = "L'interfaccia rimane il più semplice possibile — ogni strumento si capisce a colpo d'occhio ed è pronto all'uso fin dal primo momento.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Trova zone di tempismo chiave con l'IA di $site_name";
$s8_item1 = "La diversificazione automatica distribuisce i fondi su diversi asset, riducendo il rischio e proteggendo il capitale anche in mercati instabili.";
$s8_item2 = "Un sistema completamente autonomo — non hai bisogno di guardare i grafici. Gli algoritmi analizzano il mercato e prendono decisioni da soli.";
$s8_item3 = "I prelievi sono disponibili in qualsiasi momento — su carte bancarie, wallet crypto o sistemi di pagamento elettronico, senza ritardi.";
$s8_item4 = "I report giornalieri mostrano i tuoi risultati e ti danno il pieno controllo della situazione in tempo reale.";
$s8_item5 = "Impostazioni flessibili del livello di rischio ti permettono di scegliere una strategia adatta ai tuoi obiettivi — da conservativa a più aggressiva.";
$s8_item6 = "Un potenziale di profitto fino al 400% rende $site_name uno strumento per chi non vuole solo preservare il proprio capitale, ma farlo crescere significativamente.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Analisi esperta alimentata da $site_name";
$s9_quote = "$site_name combina la potenza degli algoritmi con l'esperienza di mercato, trasformando dati complessi in segnali chiari e facili da capire. Il sistema rileva rapidamente pattern e opportunità potenziali, aiutandoti a decidere senza sovraccarico di informazioni.";
$s9_p1 = "Ricevi analisi pre-elaborate che tengono conto sia degli indicatori tecnici che del comportamento del mercato — così puoi agire con maggiore velocità, fiducia e precisione.";
$s9_img_alt = "$site_name strategia di investimento";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Cosa dicono i nostri utenti";
$review_1_text = "La piattaforma è molto intuitiva, e i suoi strumenti mi hanno aiutato a migliorare i miei risultati di trading.";
$review_2_text = "Assistenza rapida e risorse di apprendimento davvero utili — perfetto per chi inizia.";
$review_3_text = "Grafici personalizzabili ed esecuzione rapida — è la mia prima scelta da mesi.";
$review_4_text = "L'iscrizione ha richiesto meno di cinque minuti, e la dashboard rende facile vedere esattamente dove si trovano i miei soldi.";
$review_5_text = "Mi piace che la piattaforma spieghi il ragionamento dietro ogni segnale invece di limitarsi a fornire numeri.";
$review_6_text = "I prelievi sono sempre stati rapidi per me, e il team di supporto risponde effettivamente entro pochi minuti.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Domande frequenti su $site_name";
$faq_q1 = "$site_name può rilevare i cambiamenti di mercato in tempo reale?";
$faq_a1 = "Sì. Monitora dati in tempo reale, identifica i cambi di momentum nelle fasi iniziali e individua i pattern prima che si sviluppino completamente, offrendo agli utenti un vantaggio tempestivo.";
$faq_q2 = "L'esperienza $site_name può essere personalizzata?";
$faq_a2 = "Sì. Gli utenti possono scegliere aree di interesse, regolare il livello di dettaglio e seguire strategie pubbliche che corrispondono al loro stile di trading o alle loro esigenze di apprendimento.";
$faq_q3 = "$site_name sostituisce i metodi di ricerca tradizionali?";
$faq_a3 = "No. Li migliora offrendo rapidamente approfondimenti filtrati dall'IA, mentre l'utente mantiene il pieno controllo della propria ricerca e delle proprie decisioni.";
$faq_cta = "Scopri di più ora";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Punti salienti di $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Costo di registrazione";
$hl1_desc = "Nessuna commissione per registrarsi";
$hl2_emoji = "💰";
$hl2_title = "Commissioni di trading";
$hl2_desc = "Nessun costo";
$hl3_emoji = "📋";
$hl3_title = "Facilità di registrazione";
$hl3_desc = "La registrazione è veloce e semplice";
$hl4_emoji = "📊";
$hl4_title = "Focus educativo";
$hl4_desc = "Lezioni su crypto, trading Forex e investimenti";
$hl5_emoji = "🌎";
$hl5_title = "Paesi disponibili";
$hl5_desc = "Non disponibile negli USA, disponibile nella maggior parte degli altri paesi";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Fai trading con saggezza, cresci con fiducia";
$footnav_about = "Chi siamo";
$footnav_product = "Prodotto";
$footnav_offer = "Offerta";
$footnav_contacts = "Contattaci";
$footnav_faq = "FAQ";
$footnav_privacy = "Informativa sulla privacy";
$footnav_conditions = "Termini di utilizzo";
$footnav_risk = "Avviso sui rischi";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name pubblica materiale educativo generale che copre trading, investimenti, mercati finanziari e asset digitali. Articoli, dati di mercato, grafici e altri contenuti del sito web sono forniti a scopo informativo e non devono essere trattati come consulenza finanziaria, di investimento o legale. Sebbene ci impegniamo a fornire informazioni affidabili e aggiornate, non possiamo garantirne l'accuratezza o la completezza e non siamo responsabili per perdite derivanti dall'affidamento sui contenuti.<br><br>Il trading comporta rischi, e criptovalute, Forex, CFD, azioni e altri prodotti finanziari possono fluttuare significativamente di valore. Considera le tue circostanze finanziarie e la tua tolleranza al rischio prima di fare trading, e cerca consulenza professionale quando appropriato. Non impegnare mai fondi che non puoi permetterti di perdere.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Consulente di Trading";
$quiz_text_welcome = "Ciao! Sono Sofia, la tua consulente personale di trading. Hai un paio di minuti per trovare il piano migliore per te?";
$quiz_text_q1 = "Hai già fatto trading?";
$quiz_text_a1_yes = "Sì, ho esperienza";
$quiz_text_a1_no = "No, sono un principiante";
$quiz_text_q2 = "Fantastico! Qual è il tuo nome così posso personalizzare il tuo piano?";
$quiz_text_q3 = "Qual è il tuo obiettivo principale con il trading?";
$quiz_text_a3_yes = "Costruire ricchezza a lungo termine";
$quiz_text_a3_no = "Generare reddito a breve termine";
$quiz_text_q4 = "Con quanto vorresti iniziare?";
$quiz_text_a4_1 = "Meno di $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Oltre $1000";
$quiz_text_q5 = "Perfetto. Vorresti che ti aprissi ora un conto gratuito?";
$quiz_text_a5_yes = "Sì, facciamolo";
$quiz_text_a5_no = "Non ora";
$quiz_text_loader = "Ricerca del tuo piano migliore...";
$quiz_text_final_ttl = "Tutto è pronto!";
$quiz_text_processing = "Invio dei tuoi dati...";
$quiz_text_typing = "sta scrivendo...";
$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "E-mail";
$quiz_btn_submit = "Ottieni il mio account gratuito";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Home";
$bc_about = "Chi siamo";
$bc_product = "Prodotto";
$bc_offer = "Offerta";
$bc_contacts = "Contattaci";
$bc_faq = "FAQ";
$bc_privacy = "Informativa sulla privacy";
$bc_conditions = "Termini di utilizzo";
$bc_risk = "Avviso sui rischi";
$bc_sign = "Registrati";
$bc_thanks = "Grazie";
$bc_sitemap = "Mappa del sito";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Chi è $site_name";
$about_meta_description = "Scopri la missione di $site_name: rendere l'analisi di mercato più chiara e accessibile attraverso strumenti guidati dall'IA.";
$about_h1 = "Chi è $site_name";
$about_lead = "$site_name è stato costruito attorno a un'idea: le decisioni di trading dovrebbero basarsi su informazioni chiare, non su supposizioni.";
$about_p1 = "Combiniamo intelligenza artificiale con esperienza di mercato reale per trasformare dati complessi e rumorosi in segnali facili da capire e su cui agire. La nostra piattaforma monitora i mercati 24 ore su 24, così tu non devi farlo.";
$about_p2 = "Che tu stia effettuando il tuo primo trade o sia attivo sui mercati da anni, $site_name è progettato per incontrarti dove ti trovi — con strumenti che vanno da una guida semplice ad analisi avanzate in tempo reale.";
$about_p3 = "Crediamo che la tecnologia debba supportare il tuo giudizio, non sostituirlo. Ogni segnale che $site_name produce è pensato per informare una decisione che rimane comunque interamente tua.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Prodotto — Strumenti di analisi di mercato IA";
$product_meta_description = "Esplora il prodotto $site_name: analisi di mercato IA in tempo reale, copy trading, controlli del rischio e diversificazione automatizzata.";
$product_h1 = "Il prodotto $site_name";
$product_lead = "Una piattaforma che legge il mercato per te: analisi in tempo reale, copy trading e strumenti di rischio flessibili, progettati per rendere più chiare le decisioni di trading.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Offerta $site_name — Inizia gratuitamente";
$offer_meta_description = "Scopri cosa è incluso nell'attuale offerta $site_name: registrazione gratuita, nessuna commissione di trading e accesso completo alla piattaforma.";
$offer_h1 = "La nostra offerta attuale";
$offer_lead = "Crea il tuo account gratuitamente e sblocca la piattaforma $site_name completa &mdash; nessuna commissione di iscrizione, nessuna commissione di trading.";
$offer_li1 = "Nessuna commissione per registrare il tuo account";
$offer_li2 = "Nessuna commissione sulle operazioni";
$offer_li3 = "Accesso completo all'analisi di mercato IA in tempo reale e al copy trading";
$offer_li4 = "Prelievi disponibili in qualsiasi momento, senza costi nascosti";
$offer_li5 = "Risorse educative su crypto, Forex e investimenti incluse";
$offer_note = "La disponibilità può variare in base alla regione. Consulta il nostro <a class=\"link\" href=\"risk-warning.php\">Avviso sui rischi</a> prima di finanziare un account.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contatta $site_name — Mettiti in contatto con il nostro team";
$contacts_meta_description = "Hai una domanda sul tuo account $site_name o sulla piattaforma? Contatta il nostro team di supporto via e-mail o inviaci un messaggio.";
$contacts_h1 = "Contattaci";
$contacts_lead = "Domande sul tuo account, un deposito, o su come funziona la piattaforma? Il nostro team è qui per aiutarti.";
$contacts_email_label = "E-mail";
$contacts_hours_label = "Orari di Supporto";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tempo di Risposta Tipico";
$contacts_response_value = "Entro 24 ore";
$contacts_form_title = "Inviaci un Messaggio";
$contacts_form_desc = "Lascia i tuoi dati qui sotto e un membro del nostro team ti contatterà direttamente.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Informativa sulla privacy di $site_name";
$privacy_meta_description = "Scopri come $site_name raccoglie, utilizza e protegge le tue informazioni personali su tutto il sito web e la piattaforma.";
$privacy_sections = [
    [
        "title" => "1. Introduzione",
        "body" => "Questa Informativa sulla privacy spiega come $site_name (\"noi\") raccoglie, utilizza e protegge le informazioni personali dei visitatori e degli utenti di $site_domain (il \"Sito Web\"). Utilizzando il Sito Web, accetti le pratiche descritte di seguito.",
    ],
    [
        "title" => "2. Informazioni che raccogliamo",
        "body" => "Potremmo raccogliere informazioni che fornisci direttamente, come nome, indirizzo e-mail e numero di telefono al momento della registrazione o dell'invio di un modulo, oltre a informazioni raccolte automaticamente, incluso il tuo indirizzo IP, tipo di dispositivo e browser, e le pagine visualizzate sul Sito Web.",
    ],
    [
        "title" => "3. Come utilizziamo le tue informazioni",
        "body" => "Utilizziamo le informazioni raccolte per creare e gestire il tuo account, rispondere alle richieste, fornire assistenza clienti, migliorare il Sito Web e i nostri servizi e, ove consentito, inviare aggiornamenti su prodotti e offerte. Puoi rinunciare alle comunicazioni di marketing in qualsiasi momento.",
    ],
    [
        "title" => "4. Cookie e tecnologie di tracciamento",
        "body" => "Il Sito Web utilizza cookie e tecnologie simili per ricordare le tue preferenze, mantenerti connesso e capire come i visitatori utilizzano le nostre pagine. Puoi disabilitare i cookie tramite le impostazioni del tuo browser, sebbene alcune funzionalità potrebbero non funzionare correttamente di conseguenza.",
    ],
    [
        "title" => "5. Condivisione delle informazioni",
        "body" => "Non vendiamo le tue informazioni personali. Potremmo condividere informazioni con fornitori di servizi fidati che ci aiutano a gestire il Sito Web (come provider di hosting o analisi), o quando richiesto dalla legge o per proteggere i nostri diritti legali.",
    ],
    [
        "title" => "6. Sicurezza dei dati",
        "body" => "Applichiamo misure tecniche e organizzative ragionevoli per proteggere le tue informazioni da accessi non autorizzati, alterazioni o perdite. Nessun metodo di trasmissione o archiviazione è completamente sicuro, e non possiamo garantire una sicurezza assoluta.",
    ],
    [
        "title" => "7. I tuoi diritti e le tue scelte",
        "body" => "A seconda della tua posizione, potresti avere il diritto di accedere, correggere o richiedere la cancellazione delle tue informazioni personali, e di opporti a determinati usi delle stesse. Per esercitare questi diritti, contattaci tramite la nostra <a class=\"link\" href=\"contacts.php\">pagina contatti</a>.",
    ],
    [
        "title" => "8. Privacy dei minori",
        "body" => "Il Sito Web non è rivolto a persone di età inferiore a 18 anni, e non raccogliamo consapevolmente informazioni personali da minori. Se ritieni che un minore ci abbia fornito informazioni personali, contattaci affinché possiamo rimuoverle.",
    ],
    [
        "title" => "9. Modifiche a questa informativa",
        "body" => "Potremmo aggiornare questa Informativa sulla privacy di volta in volta. Eventuali modifiche saranno pubblicate su questa pagina con una data di validità aggiornata. Ti invitiamo a rivedere questa pagina periodicamente.",
    ],
    [
        "title" => "10. Contattaci",
        "body" => "Se hai domande su questa Informativa sulla privacy o su come vengono gestite le tue informazioni, contattaci tramite la nostra <a class=\"link\" href=\"contacts.php\">pagina contatti</a> o inviaci un'e-mail a info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Termini di utilizzo di $site_name";
$conditions_meta_description = "Consulta i Termini di utilizzo che regolano l'accesso e l'uso del sito web e della piattaforma di trading $site_name.";
$conditions_sections = [
    [
        "title" => "1. Accettazione dei termini",
        "body" => "Accedendo o utilizzando $site_domain (il \"Sito Web\"), accetti di essere vincolato da questi Termini di utilizzo. Se non sei d'accordo con qualsiasi parte di questi termini, ti preghiamo di non utilizzare il Sito Web.",
    ],
    [
        "title" => "2. Idoneità",
        "body" => "Devi avere almeno 18 anni ed essere legalmente autorizzato a utilizzare servizi legati al trading nella tua giurisdizione per utilizzare il Sito Web. Utilizzando il Sito Web, confermi di soddisfare questi requisiti.",
    ],
    [
        "title" => "3. Descrizione del servizio",
        "body" => "$site_name fornisce una piattaforma online con contenuti educativi, informazioni di mercato e strumenti di analisi assistiti dall'IA. Nulla sul Sito Web costituisce consulenza finanziaria, di investimento, fiscale o legale, e tutte le informazioni fornite sono solo a scopo informativo generale.",
    ],
    [
        "title" => "4. Responsabilità dell'utente",
        "body" => "Sei responsabile di fornire informazioni accurate al momento della registrazione, di mantenere riservate le credenziali del tuo account, e di tutte le attività che si verificano sotto il tuo account.",
    ],
    [
        "title" => "5. Proprietà intellettuale",
        "body" => "Tutti i contenuti sul Sito Web, inclusi testo, grafica, loghi e software, sono di proprietà di $site_name o dei suoi licenzianti e sono protetti dalle leggi applicabili sulla proprietà intellettuale. Non puoi riprodurre o distribuire questi contenuti senza autorizzazione.",
    ],
    [
        "title" => "6. Nessuna consulenza finanziaria",
        "body" => "I contenuti sul Sito Web sono forniti solo a scopo informativo ed educativo e non devono essere interpretati come consulenza finanziaria. Sei l'unico responsabile delle tue decisioni di trading e dovresti consultare un consulente finanziario indipendente se necessario. Consulta il nostro <a class=\"link\" href=\"risk-warning.php\">Avviso sui rischi</a> per maggiori informazioni.",
    ],
    [
        "title" => "7. Limitazione di responsabilità",
        "body" => "Nella misura massima consentita dalla legge, $site_name non sarà responsabile per eventuali danni diretti, indiretti, incidentali o consequenziali derivanti dall'uso o dall'impossibilità di utilizzare il Sito Web o qualsiasi servizio di terze parti collegato.",
    ],
    [
        "title" => "8. Risoluzione",
        "body" => "Ci riserviamo il diritto di sospendere o terminare il tuo accesso al Sito Web a nostra discrezione, senza preavviso, per condotta che riteniamo violi questi Termini di utilizzo o sia altrimenti dannosa per altri utenti o per il Sito Web.",
    ],
    [
        "title" => "9. Modifiche a questi termini",
        "body" => "Potremmo rivedere questi Termini di utilizzo in qualsiasi momento. L'uso continuato del Sito Web dopo la pubblicazione delle modifiche costituisce accettazione dei termini aggiornati.",
    ],
    [
        "title" => "10. Contatto",
        "body" => "Le domande su questi Termini di utilizzo possono essere indirizzate al nostro team tramite la <a class=\"link\" href=\"contacts.php\">pagina contatti</a> o inviando un'e-mail a info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Avviso sui rischi $site_name — Divulgazione dei rischi di trading";
$risk_meta_description = "Leggi l'avviso sui rischi di $site_name prima di fare trading: rischi del mercato delle criptovalute, leva finanziaria, liquidità, cybersicurezza e considerazioni normative.";
$risk_title = "Avviso sui rischi";
$risk_intro = "Comprendere i rischi è il primo passo verso un trading sicuro.";
$risk_ai_title = "Come il nostro sistema IA aiuta a gestire il rischio:";
$risk_ai_1_title = "Efficienza algoritmica e trading senza emozioni:";
$risk_ai_1_text = "Algoritmi avanzati analizzano i segnali di mercato per eseguire operazioni in modo obiettivo nei momenti ottimali.";
$risk_ai_2_title = "Strategie basate sui dati:";
$risk_ai_2_text = "Le strategie si basano su pattern di mercato verificati e analisi in tempo reale piuttosto che su supposizioni.";
$risk_ai_3_title = "Impostazioni flessibili e controllo totale:";
$risk_ai_3_text = "Regola i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente sulla tua dashboard senza commissioni nascoste e con prelievi senza restrizioni.";
$risk_disclaimer = "<strong>Avvertenza:</strong> Il trading comporta sempre rischi. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono fallire a causa di errori software o eventi di mercato imprevisti e richiedono il monitoraggio dell'utente. Le performance passate non sono indicative dei risultati futuri. Questa piattaforma serve scopi puramente informativi e di marketing e non fornisce consulenza finanziaria.";
$risk_s1_title = "1. Rischi generali e del mercato delle criptovalute";
$risk_s1_text = "Le criptovalute sono asset altamente volatili e speculativi che operano 24/7 con una supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_s1_li1 = "I valori possono fluttuare drammaticamente in brevi periodi, portando potenzialmente a una perdita totale del capitale investito.";
$risk_s1_li2 = "I valori di mercato possono essere pesantemente influenzati da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o eventi macroeconomici più ampi.";
$risk_s1_li3 = "Alcuni asset potrebbero perdere completamente tutto il loro valore. Investi solo fondi che puoi permetterti di perdere.";
$risk_s2_title = "2. Rischi di esecuzione, liquidità e leva finanziaria";
$risk_s2_li1_title = "Volatilità del mercato e liquidità:";
$risk_s2_li1_text = "Movimenti di prezzo estremi (10-20%+ giornalieri) o bassa liquidità (specialmente in monete più piccole) possono portare a ritardi, interruzioni della piattaforma e grave slippage di esecuzione. Gli ordini stop-loss non possono garantire limiti di perdita in condizioni estreme.";
$risk_s2_li2_title = "Rischi di leva finanziaria e margine:";
$risk_s2_li2_text = "I prodotti con leva finanziaria amplificano sia i guadagni che le perdite, il che significa che puoi perdere più del tuo deposito iniziale. Circa il 70-80% dei conti degli investitori al dettaglio perde denaro facendo trading con prodotti a leva.";
$risk_s3_title = "3. Rischi tecnici, di cybersicurezza e di terze parti";
$risk_s3_li1_title = "Fattori tecnici:";
$risk_s3_li1_text = "Il trading online comporta intrinsecamente rischi di disconnessione da internet, errori hardware/software e indisponibilità del servizio.";
$risk_s3_li2_title = "Cybersicurezza:";
$risk_s3_li2_text = "Gli account di criptovalute sono bersagli frequenti di phishing, malware e hacking. Le transazioni sono irreversibili; la compromissione delle tue credenziali può risultare in una perdita permanente.";
$risk_s3_li3_title = "Piattaforme di terze parti:";
$risk_s3_li3_text = "Questo sito web potrebbe collegare gli utenti a piattaforme di terze parti. Non controlliamo, approviamo o garantiamo la loro sicurezza, operazioni o solvibilità. Conduci sempre la tua due diligence approfondita prima di depositare fondi su piattaforme esterne.";
$risk_s4_title = "4. Disposizioni normative, fiscali e finali";
$risk_s4_li1_title = "Conformità legale e tasse:";
$risk_s4_li1_text = "I quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono gli unici responsabili di garantire che la loro attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_s4_li2_title = "Nessuna garanzia di profitto:";
$risk_s4_li2_text = "Non esiste un trading di crypto \"sicuro\" o senza rischi. Eventuali cifre di rendimento o esempi di performance sono puramente ipotetici.";
$risk_s4_li3_title = "Idoneità:";
$risk_s4_li3_text = "Se non comprendi appieno i rischi, dipendi da fondi essenziali o fai trading con denaro preso in prestito, il trading di crypto non è adatto a te. Consulta un consulente finanziario indipendente autorizzato in caso di incertezza.";
$risk_contact = "<strong>Contatto:</strong> Per qualsiasi domanda riguardante questa dichiarazione o per inviare una richiesta, contatta il nostro team ufficiale di assistenza clienti tramite il modulo di contatto sul nostro sito web.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrati | $site_name — Crea il Tuo Account Gratuito";
$sign_meta_description = "Crea il tuo account $site_name gratuito in pochi minuti e inizia a fare trading in modo più intelligente con l'analisi di mercato basata sull'IA.";
$sign_h1 = "Crea il Tuo Account Gratuito";
$sign_lead = "Unisciti a $site_name in pochi minuti. Compila i tuoi dati qui sotto per iniziare.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Grazie | $site_name";
$thanks_h1 = "Grazie!";
$thanks_text = "I tuoi dati sono stati ricevuti. Un membro del team $site_name ti contatterà a breve per aiutarti a iniziare.";
$thanks_btn = "Torna alla Home";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Mappa del sito | $site_name";
$sitemap_meta_description = "Sfoglia ogni pagina del sito web $site_name, inclusa la piattaforma di trading, l'offerta, il supporto e le pagine legali.";
$sitemap_h1 = "Mappa del sito";
$sitemap_lead = "Ogni pagina di $site_name in un unico posto.";

