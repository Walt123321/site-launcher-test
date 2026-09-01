<?php
require __DIR__ . '/../lang.php';
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// ============================================================
// IT TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Sito Ufficiale | Piattaforma di Trading";
$home_meta_description = "$site_name offre una piattaforma di trading intuitiva con strumenti di mercato avanzati, informazioni in tempo reale e funzionalità pratiche progettate per rendere il trading online più accessibile e informato.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Piattaforma $site_name";
$hero_subtitle = "Supportiamo milioni di persone nel mondo nel loro percorso con gli asset digitali";
$hero_badge_title = "Membri Soddisfatti";
$hero_badge_subtitle = "Amato da milioni";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Inizia a Fare Trading Oggi";
$form_desc = "Pronto a fare la tua mossa? Registrati ora e fai il primo passo verso la libertà finanziaria. Inizia con soli $app_price $app_currency — accedi a ogni strumento di trading, dati di mercato in tempo reale e accesso completo alla piattaforma dal primo giorno.";
$form_fname_placeholder = "Nome";
$form_lname_placeholder = "Cognome";
$form_email_placeholder = "Email";
$form_btn_submit = "Registrati";
$form_disclaimer_text = "Inserendo i tuoi dati personali e cliccando sul pulsante, accetti l'<a class=\"link\" href=\"privacy.php\">Informativa sulla Privacy</a> e i <a class=\"link\" href=\"conditions.php\">Termini e Condizioni</a> del sito.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SICURO";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Scopri la Piattaforma";
$stats_title = "Una breve introduzione al trading più intelligente";
$stat_1_value = "154+";
$stat_1_label = "Paesi Coperti";
$stat_2_value = "29 Milioni";
$stat_2_label = "Investitori Globali";
$stat_3_value = "635+";
$stat_3_label = "Criptovalute";
$stat_4_value = "3,26 Miliardi $";
$stat_4_label = "Volume di Trading nelle 24h";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Perché $site_name?";
$why_title = "Motivi per Scegliere Noi";
$why_1_title = "Veloce &amp; Facile";
$why_1_text = "Compra e vendi le tue criptovalute preferite in pochi secondi.";
$why_2_title = "Sicuro &amp; Protetto";
$why_2_text = "Utilizziamo la tecnologia più recente per mantenere i tuoi fondi e dati al sicuro.";
$why_3_title = "Aperto a Tutti";
$why_3_text = "Fai trading sulla nostra piattaforma 24/7, ovunque e quando vuoi.";
$why_4_title = "Strumenti Professionali";
$why_4_text = "Da funzionalità di trading semplici a professionali, abbiamo tutto.";
$why_5_title = "Tendenze &amp; Approfondimenti";
$why_5_text = "Ricevi le ultime notizie, approfondimenti e tendenze crypto dagli esperti.";
$why_6_title = "Assistenza 24/7";
$why_6_text = "Il nostro team di assistenza cordiale è qui per aiutarti in qualsiasi momento.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Come Funziona";
$how_title = "Semplici Passaggi per Iniziare a Fare Trading";
$how_1_title = "Registrati";
$how_1_text = "Crea un account e inizia a fare trading in pochi minuti.";
$how_1_btn = "Inizia a Fare Trading";
$how_2_title = "Deposita Fondi";
$how_2_text = "Finanzia il tuo account con un deposito minimo di $app_price $app_currency per sbloccare l'accesso completo al trading. Scegli tra più metodi di pagamento e inizia a far crescere il tuo portafoglio oggi stesso.";
$how_2_note = "Aggiungi fondi....";
$how_3_title = "Inizia a Fare Trading";
$how_3_text = "Esplora il mercato e fai trading a modo tuo.";
$how_3_note = "Compra e HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calcolatore";
$calc_title = "Scopri quanto tempo e potenziale stai lasciando sul tavolo";
$calc_volume_label = "Volume di Trading Mensile";
$calc_trades_label = "Trade a Settimana";
$calc_time_label = "Tempo che Potresti Risparmiare";
$calc_boost_label = "Potenziale Aumento del Volume";
$calc_btn = "Inizia a Fare Trading";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Funzionalità";
$features_title = "Il Potere di $site_name";
$feature_1_title = "Trading Spot";
$feature_1_text = "Massimizza il tuo potenziale di trading con strumenti professionali.";
$feature_2_title = "Compra Crypto";
$feature_2_text = "Compra crypto con carte o banche.";
$feature_3_title = "Derivati Crypto";
$feature_3_text = "Trading di futures facile e avanzato.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Fai crescere il tuo patrimonio con facilità.";
$feature_5_title = "Bot di Trading";
$feature_5_text = "Profitti più alti, anche mentre dormi.";
$feature_6_title = "Trading a Margine";
$feature_6_text = "Prendi in prestito, fai trading e rimborsa facilmente.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Cosa Dicono i Nostri Utenti";
$review_1_text = "La piattaforma è molto facile da usare, e ho visto progressi costanti da quando sono diventato holder. L'impegno del team e le nuove idee mi fanno guardare con entusiasmo a ciò che verrà!";
$review_1_role = "Trader";
$review_2_text = "$site_name offre un'esperienza di trading fluida e intuitiva. Sono riuscito a iniziare subito a comprare e fare trading di crypto. L'interfaccia è facile da usare e le velocità di transazione sono eccellenti!";
$review_2_role = "Nuovo Trader";
$review_3_text = "Mi fido di questa piattaforma per gestire i miei investimenti in crypto. Le sue funzionalità di sicurezza mi danno fiducia, e non ho mai avuto problemi con prelievi o depositi. È tra gli scambi più affidabili che abbia mai usato.";
$review_3_role = "Trader Professionista";
$review_4_text = "Ogni volta che ho avuto domande, il team di assistenza clienti è stato tempestivo e disponibile. Si preoccupano davvero dei loro utenti e rendono ogni esperienza di trading fluida e semplice.";
$review_4_role = "Trader Esperto";
$review_5_text = "Come principiante, ho trovato $site_name molto facile da usare. Ciò che risalta davvero è la gamma di strumenti avanzati per trader più esperti. È un'ottima opzione per chiunque voglia costruire il proprio portafoglio!";
$review_5_role = "Trader della Community";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "FAQ";
$faq_title = "Domande Frequenti";
$faq_q1 = "Cos'è $site_name?";
$faq_a1 = "$site_name è uno scambio di criptovalute dove gli utenti possono facilmente fare trading di un'ampia gamma di monete, inclusi Bitcoin, Ethereum e altre criptovalute popolari.";
$faq_q2 = "Quanto è Sicuro $site_name per il Trading di Crypto?";
$faq_a2 = "La piattaforma offre sicurezza attraverso tecnologia avanzata e copertura degli asset 1:1 tramite Proof of Reserves.";
$faq_q3 = "Come Faccio un Deposito?";
$faq_a3 = "$site_name offre diverse opzioni di deposito, tra cui deposito crypto, deposito fiat, trading P2P e acquisto con un clic.";
$faq_q4 = "Ho Bisogno di Esperienza per Usare $site_name?";
$faq_a4 = "No, non hai bisogno di alcuna esperienza. L'interfaccia intuitiva della piattaforma la rende accessibile a tutti, dai principianti ai trader avanzati.";
$faq_q5 = "Ci sono commissioni o costi nascosti?";
$faq_a5 = "Assolutamente no. Non ci sono commissioni di registrazione, costi di abbonamento o oneri nascosti di alcun tipo. Vedi sempre l'importo esatto della transazione prima di confermare. I ricavi provengono da funzionalità premium e partnership di scambio, non dal prelevare denaro dagli utenti.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Inizia a Fare Trading Oggi";
$cta_desc = "Pronto a fare la tua mossa? Registrati ora e fai il primo passo verso l'indipendenza finanziaria.";
$cta_btn = "Registrati";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Caratteristiche Principali della Piattaforma di Trading $site_name";
$table_1_label = "🤖 Tecnologia della Piattaforma";
$table_1_val = "Motore di Trading IA Avanzato";
$table_2_label = "💳 Metodi di Finanziamento";
$table_2_val = "Principali Carte di Credito, Bonifico Bancario, PayPal";
$table_3_label = "📱 Accesso alla Piattaforma";
$table_3_val = "Compatibilità Multi-Dispositivo";
$table_4_label = "🚀 Tasso di Prestazione";
$table_4_val = "85% di Precisione";
$table_5_label = "📊 Strumenti di Trading";
$table_5_val = "Azioni, Forex, Materie Prime, Metalli Preziosi, CFD, Criptovalute e altro…";
$table_6_label = "✍️ Configurazione dell'Account";
$table_6_val = "Rapida ed Efficiente";
$table_7_label = "📞 Assistenza Clienti";
$table_7_val = "Assistenza Professionale 24/7";

// Reviews summary card
$summary_title = "Recensioni su $site_name";
$summary_badge = "Affidabile";
$summary_desc = "Una piattaforma di trading potente e intuitiva con solida automazione e risorse educative.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Fai trading con saggezza, cresci velocemente";
$footer_community_label = "Community";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Prodotto";
$footnav_offer = "Offerta";
$footnav_contacts = "Contatti";
$footnav_faq = "FAQ";
$footnav_privacy = "Informativa sulla Privacy";
$footnav_conditions = "Termini e Condizioni";
$footnav_risk = "Avviso sui Rischi";
$footer_disclaimer = "$site_name condivide risorse educative e materiale relativo al mercato per aiutare i visitatori a comprendere meglio il trading, gli investimenti e i prodotti finanziari digitali. Le informazioni presentate sul sito, come commenti di mercato, prezzi degli asset, grafici, guide e contenuti analitici, sono fornite a scopo puramente informativo e non costituiscono consulenza finanziaria, di investimento, fiscale o legale. Sebbene vengano compiuti sforzi ragionevoli per mantenere informazioni accurate e pertinenti, $site_name non fornisce garanzie riguardo alla completezza, accuratezza o tempestività dei contenuti e non può essere ritenuta responsabile per decisioni o perdite derivanti dal loro utilizzo.<br><br>La partecipazione ai mercati finanziari comporta rischi intrinseci. Criptovalute, Forex, CFD, azioni e altri strumenti di trading possono subire notevoli fluttuazioni di prezzo, e possono verificarsi perdite. Le circostanze individuali e la tolleranza al rischio variano, quindi gli utenti dovrebbero condurre le proprie ricerche e considerare di ottenere consulenza da un professionista finanziario qualificato prima di impegnare fondi. Non fare mai trading con denaro che non puoi permetterti di perdere.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Consulente di Trading";
$quiz_text_welcome = "Ciao! Sono Maya, la tua consulente personale di trading. Hai un paio di minuti per trovare il piano migliore per te?";
$quiz_text_q1 = "Hai mai fatto trading di criptovalute prima?";
$quiz_text_a1_yes = "Sì, ho esperienza";
$quiz_text_a1_no = "No, sono un principiante";
$quiz_text_q2 = "Ottimo! Qual è il tuo nome per personalizzare il tuo piano?";
$quiz_text_q3 = "Qual è il tuo obiettivo principale con il trading?";
$quiz_text_a3_yes = "Costruire ricchezza a lungo termine";
$quiz_text_a3_no = "Generare reddito a breve termine";
$quiz_text_q4 = "Con quanto vorresti iniziare?";
$quiz_text_a4_1 = "Meno di $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Più di $1000";
$quiz_text_q5 = "Perfetto. Vorresti che aprissi un account gratuito per te adesso?";
$quiz_text_a5_yes = "Sì, facciamolo";
$quiz_text_a5_no = "Non adesso";
$quiz_text_loader = "Ricerca del tuo piano migliore in corso...";
$quiz_text_final_ttl = "Tutto pronto!";
$quiz_text_processing = "I tuoi dati sono in fase di invio...";
$quiz_text_typing = "sta scrivendo...";
$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Email";
$quiz_btn_submit = "Ottieni il Mio Account Gratuito";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "Avviso sui Rischi di $site_name — Divulgazione dei Rischi di Trading";
$risk_meta_description = "Leggi l'avviso sui rischi di $site_name prima di fare trading: rischi del mercato delle criptovalute, leva finanziaria, liquidità, cybersicurezza e considerazioni normative.";
$risk_title = "Avviso sui Rischi";
$risk_intro = "Comprendere i rischi è il primo passo verso un trading sicuro.";
$risk_ai_title = "Come il Nostro Sistema IA Aiuta a Gestire il Rischio:";
$risk_ai_1_title = "Efficienza Algoritmica &amp; Trading Senza Emozioni:";
$risk_ai_1_text = "Algoritmi avanzati analizzano i segnali di mercato per eseguire trade in modo oggettivo nei momenti ottimali.";
$risk_ai_2_title = "Strategie Basate sui Dati:";
$risk_ai_2_text = "Le strategie si basano su modelli di mercato verificati e analisi in tempo reale anziché su supposizioni.";
$risk_ai_3_title = "Impostazioni Flessibili &amp; Controllo Totale:";
$risk_ai_3_text = "Regola i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente sulla tua dashboard, senza commissioni nascoste e senza restrizioni sui prelievi.";
$risk_disclaimer = "<strong>Disclaimer:</strong> Il trading comporta sempre un rischio. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono fallire a causa di errori software o eventi di mercato imprevisti, e richiedono il monitoraggio dell'utente. Le performance passate non sono indicative dei risultati futuri. Questa piattaforma serve puramente a scopi informativi e di marketing e non fornisce consulenza finanziaria.";
$risk_s1_title = "1. Rischi Generali &amp; del Mercato delle Criptovalute";
$risk_s1_text = "Le criptovalute sono asset altamente volatili e speculativi che operano 24/7 con supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_s1_li1 = "I valori possono fluttuare drasticamente in brevi periodi, portando potenzialmente a una perdita totale del capitale investito.";
$risk_s1_li2 = "I valori di mercato possono essere fortemente influenzati da cambiamenti normativi, sviluppi tecnici, violazioni della sicurezza o più ampi eventi macroeconomici.";
$risk_s1_li3 = "Alcuni asset possono perdere completamente tutto il loro valore. Investi solo fondi che puoi permetterti di perdere.";
$risk_s2_title = "2. Rischi di Esecuzione, Liquidità &amp; Leva Finanziaria";
$risk_s2_li1_title = "Volatilità del Mercato &amp; Liquidità:";
$risk_s2_li1_text = "Movimenti di prezzo estremi (10-20%+ giornalieri) o bassa liquidità (specialmente in criptovalute più piccole) possono portare a ritardi, interruzioni della piattaforma e grave slittamento nell'esecuzione. Gli ordini stop-loss non possono garantire limiti di perdita in condizioni estreme.";
$risk_s2_li2_title = "Rischi di Leva Finanziaria &amp; Margine:";
$risk_s2_li2_text = "I prodotti a leva amplificano sia i guadagni che le perdite, il che significa che puoi perdere più del tuo deposito iniziale. <em>Circa il 70-80% dei conti di investitori al dettaglio perde denaro facendo trading di prodotti a leva.</em>";
$risk_s3_title = "3. Rischi Tecnici, di Cybersicurezza &amp; di Terze Parti";
$risk_s3_li1_title = "Fattori Tecnici:";
$risk_s3_li1_text = "Il trading online comporta intrinsecamente rischi di disconnessioni internet, errori hardware/software e indisponibilità del servizio.";
$risk_s3_li2_title = "Cybersicurezza:";
$risk_s3_li2_text = "Gli account di criptovalute sono frequenti bersagli di phishing, malware e hacking. Le transazioni sono irreversibili; la compromissione delle tue credenziali può comportare una perdita permanente.";
$risk_s3_li3_title = "Piattaforme di Terze Parti:";
$risk_s3_li3_text = "Questo sito web potrebbe collegare gli utenti a piattaforme di terze parti. Non controlliamo, approviamo o garantiamo la loro sicurezza, operazioni o solvibilità. Effettua sempre la tua due diligence prima di depositare fondi su piattaforme esterne.";
$risk_s4_title = "4. Disposizioni Normative, Fiscali &amp; Finali";
$risk_s4_li1_title = "Conformità Legale &amp; Tasse:";
$risk_s4_li1_text = "I quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono unicamente responsabili di garantire che la loro attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_s4_li2_title = "Nessuna Garanzia di Profitto:";
$risk_s4_li2_text = "Non esiste un trading crypto \"sicuro\" o privo di rischi. Tutte le cifre di rendimento o esempi di performance forniti sono puramente ipotetici.";
$risk_s4_li3_title = "Idoneità:";
$risk_s4_li3_text = "Se non comprendi appieno i rischi, dipendi da fondi essenziali o fai trading con denaro preso in prestito, il trading di crypto non è adatto a te. Consulta un consulente finanziario indipendente e autorizzato in caso di incertezza.";
$risk_contact = "<strong>Contatti:</strong> Per qualsiasi domanda riguardante questa dichiarazione o per inviare una richiesta, ti preghiamo di contattare il nostro team ufficiale di assistenza clienti tramite il modulo di contatto sul nostro sito web.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Home";
$bc_product = "Prodotto";
$bc_offer = "Offerta";
$bc_contacts = "Contatti";
$bc_faq = "FAQ";
$bc_privacy = "Informativa sulla Privacy";
$bc_conditions = "Termini e Condizioni";
$bc_risk = "Avviso sui Rischi";
$bc_sign = "Registrati";
$bc_sitemap = "Mappa del Sito";
$bc_thanks = "Grazie";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Prodotto $site_name — Strumenti di Trading &amp; Funzionalità della Piattaforma";
$product_meta_description = "Scopri il prodotto $site_name: trading spot, derivati crypto, un bot di trading, trading a margine e altro ancora, tutto costruito su una piattaforma veloce e sicura.";
$product_h1 = "Il Prodotto di Trading $site_name";
$product_lead = "Una piattaforma, ogni strumento di cui un trader ha bisogno: dal tuo primo trade spot a strategie automatizzate e posizioni a margine, $site_name mantiene l'esperienza veloce, sicura e facile da capire.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Offerta $site_name — Inizia a Fare Trading da $$app_price";
$offer_meta_description = "Scopri cosa è incluso nell'attuale offerta di $site_name: un basso deposito minimo di $$app_price, accesso completo alla piattaforma e nessuna commissione nascosta.";
$offer_h1 = "La Nostra Offerta Attuale";
$offer_lead = "Inizia con appena <strong>$$app_price $app_currency</strong> e sblocca la piattaforma $site_name completa dal primo giorno &mdash; ogni strumento, ogni mercato, nessun costo nascosto.";
$offer_li1 = "Deposito minimo di soli $$app_price $app_currency per attivare il tuo account";
$offer_li2 = "Accesso completo al trading spot, derivati, margine e al bot di trading";
$offer_li3 = "Molteplici metodi di finanziamento, incluse carte e bonifico bancario";
$offer_li4 = "Nessuna commissione di registrazione, nessun costo di abbonamento, nessun onere nascosto";
$offer_li5 = "Assistenza clienti 24/7 mentre inizi";
$offer_note = "Gli importi dei depositi e i metodi di pagamento disponibili possono variare a seconda della regione. Consulta il nostro <a class=\"link\" href=\"risk-warning.php\">Avviso sui Rischi</a> prima di finanziare un account.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Contatta $site_name — Mettiti in Contatto con il Nostro Team";
$contacts_meta_description = "Hai una domanda sul tuo account $site_name o sulla piattaforma? Contatta il nostro team di assistenza via email o inviaci un messaggio e ti risponderemo.";
$contacts_h1 = "Contatti";
$contacts_lead = "Domande sul tuo account, un deposito, o su come funziona la piattaforma? Il nostro team è qui per aiutarti.";
$contacts_email_label = "Email";
$contacts_hours_label = "Orari di Assistenza";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tempo di Risposta Tipico";
$contacts_response_value = "Entro 24 ore";
$contacts_form_title = "Inviaci un Messaggio";
$contacts_form_desc = "Lascia i tuoi dati qui sotto e un membro del nostro team ti contatterà direttamente.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "FAQ $site_name — Domande Frequenti";
$faq_meta_description = "Risposte alle domande più comuni sulla creazione di un account $site_name, l'effettuazione di un deposito, la sicurezza della piattaforma e le commissioni.";
$faq_page_lead = "Tutto ciò che devi sapere prima di iniziare a fare trading. Non trovi la tua risposta? <a class=\"link\" href=\"contacts.php\">Contatta il nostro team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Informativa sulla Privacy di $site_name";
$privacy_meta_description = "Scopri come $site_name raccoglie, utilizza e protegge le tue informazioni personali su tutto il sito e la piattaforma.";
$privacy_sections = [
    [
        "title" => "1. Introduzione",
        "body" => "Questa Informativa sulla Privacy spiega come $site_name (\"noi\") raccoglie, utilizza e salvaguarda le informazioni personali dei visitatori e utenti di $site_domain (il \"Sito\"). Utilizzando il Sito, accetti le pratiche descritte di seguito.",
    ],
    [
        "title" => "2. Informazioni che Raccogliamo",
        "body" => "Potremmo raccogliere informazioni che fornisci direttamente, come il tuo nome, indirizzo email e numero di telefono quando ti registri o invii un modulo, nonché informazioni raccolte automaticamente, incluso il tuo indirizzo IP, tipo di dispositivo e browser, e le pagine visualizzate sul Sito.",
    ],
    [
        "title" => "3. Come Utilizziamo le Tue Informazioni",
        "body" => "Utilizziamo le informazioni raccolte per creare e gestire il tuo account, rispondere alle richieste, fornire assistenza clienti, migliorare il Sito e i nostri servizi, e, dove consentito, inviare aggiornamenti su prodotti e offerte. Puoi disattivare le comunicazioni di marketing in qualsiasi momento.",
    ],
    [
        "title" => "4. Cookie &amp; Tecnologie di Tracciamento",
        "body" => "Il Sito utilizza cookie e tecnologie simili per ricordare le tue preferenze, mantenerti connesso e comprendere come i visitatori utilizzano le nostre pagine. Puoi disabilitare i cookie tramite le impostazioni del tuo browser, sebbene alcune funzionalità potrebbero non funzionare correttamente di conseguenza.",
    ],
    [
        "title" => "5. Condivisione delle Informazioni",
        "body" => "Non vendiamo le tue informazioni personali. Potremmo condividere informazioni con fornitori di servizi fidati che ci aiutano a gestire il Sito (come fornitori di hosting o analisi), o quando richiesto dalla legge o per proteggere i nostri diritti legali.",
    ],
    [
        "title" => "6. Sicurezza dei Dati",
        "body" => "Applichiamo misure tecniche e organizzative ragionevoli per proteggere le tue informazioni da accessi non autorizzati, alterazioni o perdite. Nessun metodo di trasmissione o archiviazione è completamente sicuro, e non possiamo garantire una sicurezza assoluta.",
    ],
    [
        "title" => "7. I Tuoi Diritti &amp; Scelte",
        "body" => "A seconda della tua posizione, potresti avere il diritto di accedere, correggere o richiedere la cancellazione delle tue informazioni personali, e di opporti a determinati utilizzi delle stesse. Per esercitare questi diritti, contattaci tramite la nostra <a class=\"link\" href=\"contacts.php\">pagina dei contatti</a>.",
    ],
    [
        "title" => "8. Privacy dei Minori",
        "body" => "Il Sito non è destinato a persone di età inferiore ai 18 anni, e non raccogliamo consapevolmente informazioni personali da minori. Se ritieni che un minore ci abbia fornito informazioni personali, contattaci affinché possiamo rimuoverle.",
    ],
    [
        "title" => "9. Modifiche a Questa Informativa",
        "body" => "Potremmo aggiornare questa Informativa sulla Privacy di tanto in tanto. Eventuali modifiche saranno pubblicate su questa pagina con una data di entrata in vigore rivista. Ti incoraggiamo a controllare questa pagina periodicamente.",
    ],
    [
        "title" => "10. Contattaci",
        "body" => "Se hai domande su questa Informativa sulla Privacy o su come vengono gestite le tue informazioni, contattaci tramite la nostra <a class=\"link\" href=\"contacts.php\">pagina dei contatti</a> o inviaci un'email a info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Termini e Condizioni di $site_name";
$conditions_meta_description = "Consulta i Termini e Condizioni che regolano l'accesso e l'utilizzo del sito web e della piattaforma di trading $site_name.";
$conditions_sections = [
    [
        "title" => "1. Accettazione dei Termini",
        "body" => "Accedendo o utilizzando $site_domain (il \"Sito\"), accetti di essere vincolato da questi Termini e Condizioni. Se non sei d'accordo con qualsiasi parte di questi termini, ti preghiamo di non utilizzare il Sito.",
    ],
    [
        "title" => "2. Idoneità",
        "body" => "Devi avere almeno 18 anni ed essere legalmente autorizzato a utilizzare servizi legati al trading nella tua giurisdizione per utilizzare il Sito. Utilizzando il Sito, confermi di soddisfare questi requisiti.",
    ],
    [
        "title" => "3. Descrizione del Servizio",
        "body" => "$site_name fornisce una piattaforma online con contenuti educativi, informazioni di mercato e strumenti di trading. Nulla sul Sito costituisce consulenza finanziaria, di investimento, fiscale o legale, e qualsiasi informazione fornita è solo a scopo informativo generale.",
    ],
    [
        "title" => "4. Responsabilità dell'Utente",
        "body" => "Sei responsabile di fornire informazioni accurate al momento della registrazione, di mantenere la riservatezza delle credenziali del tuo account, e di tutte le attività che si verificano sotto il tuo account.",
    ],
    [
        "title" => "5. Proprietà Intellettuale",
        "body" => "Tutti i contenuti sul Sito, inclusi testo, grafica, loghi e software, sono di proprietà di $site_name o dei suoi licenzianti e sono protetti dalle leggi applicabili sulla proprietà intellettuale. Non puoi riprodurre o distribuire questi contenuti senza autorizzazione.",
    ],
    [
        "title" => "6. Nessuna Consulenza Finanziaria",
        "body" => "I contenuti sul Sito sono forniti solo a scopo informativo ed educativo e non devono essere interpretati come consulenza finanziaria. Sei l'unico responsabile delle tue decisioni di trading e dovresti consultare un consulente finanziario indipendente se necessario. Consulta il nostro <a class=\"link\" href=\"risk-warning.php\">Avviso sui Rischi</a> per maggiori informazioni.",
    ],
    [
        "title" => "7. Limitazione di Responsabilità",
        "body" => "Nella misura massima consentita dalla legge, $site_name non sarà responsabile per eventuali danni diretti, indiretti, incidentali o consequenziali derivanti dal tuo utilizzo, o impossibilità di utilizzo, del Sito o di eventuali servizi di terze parti collegati.",
    ],
    [
        "title" => "8. Risoluzione",
        "body" => "Ci riserviamo il diritto di sospendere o terminare il tuo accesso al Sito a nostra discrezione, senza preavviso, per comportamenti che riteniamo violino questi Termini e Condizioni o siano altrimenti dannosi per altri utenti o per il Sito.",
    ],
    [
        "title" => "9. Modifiche a Questi Termini",
        "body" => "Potremmo rivedere questi Termini e Condizioni in qualsiasi momento. L'uso continuato del Sito dopo la pubblicazione di modifiche costituisce accettazione dei termini aggiornati.",
    ],
    [
        "title" => "10. Contatti",
        "body" => "Le domande su questi Termini e Condizioni possono essere indirizzate al nostro team tramite la <a class=\"link\" href=\"contacts.php\">pagina dei contatti</a> o via email a info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Registrati | $site_name — Crea il Tuo Account Gratuito";
$sign_meta_description = "Crea il tuo account $site_name gratuito in pochi minuti e inizia a fare trading con appena $$app_price $app_currency.";
$sign_h1 = "Crea il Tuo Account Gratuito";
$sign_lead = "Unisciti a $site_name in pochi minuti. Compila i tuoi dati qui sotto per iniziare.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Grazie | $site_name";
$thanks_h1 = "Grazie!";
$thanks_text = "I tuoi dati sono stati ricevuti. Un membro del team $site_name ti contatterà a breve per aiutarti a iniziare.";
$thanks_btn = "Torna alla Home";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Mappa del Sito | $site_name";
$sitemap_meta_description = "Sfoglia tutte le pagine del sito $site_name, inclusi la piattaforma di trading, l'offerta, l'assistenza e le pagine legali.";
$sitemap_h1 = "Mappa del Sito";
$sitemap_lead = "Tutte le pagine di $site_name in un unico posto.";

