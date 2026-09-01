<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ms-MY';
$form_language = 'ms'; // matches this page's own language, not the offer's global default

// ============================================================
// MS TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Laman Web Rasmi | Platform Dagangan";
$home_meta_description = "$site_name menawarkan platform dagangan yang mesra pengguna dengan alat pasaran termaju, wawasan masa nyata, dan ciri praktikal yang direka untuk menjadikan dagangan dalam talian lebih mudah diakses dan bermaklumat.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "Platform $site_name";
$hero_subtitle = "Menyokong berjuta-juta orang di seluruh dunia dalam perjalanan aset digital mereka";
$hero_badge_title = "Ahli yang Berpuas Hati";
$hero_badge_subtitle = "Disayangi oleh berjuta-juta";
$hero_rating_value = "4.9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Mula Berdagang Hari Ini";
$form_desc = "Bersedia untuk membuat langkah anda? Daftar sekarang dan ambil langkah pertama ke arah kebebasan kewangan. Mulakan dengan hanya $app_price $app_currency — akses setiap alat dagangan, data pasaran masa nyata, dan akses platform penuh sejak hari pertama.";
$form_fname_placeholder = "Nama";
$form_lname_placeholder = "Nama Keluarga";
$form_email_placeholder = "E-mel";
$form_btn_submit = "Daftar";
$form_disclaimer_text = "Dengan memasukkan maklumat peribadi anda dan mengklik butang, anda bersetuju dengan <a class=\"link\" href=\"privacy.php\">Dasar Privasi</a> dan <a class=\"link\" href=\"conditions.php\">Terma &amp; Syarat</a> laman web ini.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SELAMAT";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Kenali Platform Ini";
$stats_title = "Pengenalan ringkas kepada dagangan yang lebih bijak";
$stat_1_value = "154+";
$stat_1_label = "Negara Diliputi";
$stat_2_value = "29 Juta";
$stat_2_label = "Pelabur Global";
$stat_3_value = "635+";
$stat_3_label = "Syiling";
$stat_4_value = "$3.26 Bilion";
$stat_4_label = "Jumlah Dagangan 24 Jam";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Mengapa $site_name?";
$why_title = "Sebab Memilih Kami";
$why_1_title = "Pantas &amp; Mudah";
$why_1_text = "Beli dan jual mata wang kripto pilihan anda dalam beberapa saat.";
$why_2_title = "Selamat &amp; Terjamin";
$why_2_text = "Kami menggunakan teknologi terkini untuk memastikan dana dan data anda selamat.";
$why_3_title = "Terbuka untuk Semua";
$why_3_text = "Berdagang di platform kami 24/7, di mana sahaja dan bila-bila masa anda mahu.";
$why_4_title = "Alat Profesional";
$why_4_text = "Daripada ciri dagangan yang mudah hingga profesional, kami mempunyai semuanya.";
$why_5_title = "Trend &amp; Wawasan";
$why_5_text = "Dapatkan berita, wawasan, dan trend kripto terkini daripada pakar.";
$why_6_title = "Sokongan 24/7";
$why_6_text = "Pasukan sokongan mesra kami sedia membantu pada bila-bila masa.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Cara Ia Berfungsi";
$how_title = "Langkah Mudah untuk Mula Berdagang";
$how_1_title = "Daftar";
$how_1_text = "Cipta akaun dan mula berdagang dalam beberapa minit.";
$how_1_btn = "Mula Berdagang";
$how_2_title = "Deposit Dana";
$how_2_text = "Danai akaun anda dengan deposit minimum $app_price $app_currency untuk membuka akses dagangan penuh. Pilih daripada pelbagai kaedah pembayaran dan mula mengembangkan portfolio anda hari ini.";
$how_2_note = "Tambah dana....";
$how_3_title = "Mula Berdagang";
$how_3_text = "Terokai pasaran dan berdagang mengikut cara anda sendiri.";
$how_3_note = "Beli dan HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Kalkulator";
$calc_title = "Lihat berapa banyak masa dan potensi yang anda tinggalkan begitu sahaja";
$calc_volume_label = "Jumlah Dagangan Bulanan";
$calc_trades_label = "Dagangan Seminggu";
$calc_time_label = "Masa Yang Boleh Anda Jimatkan";
$calc_boost_label = "Peningkatan Jumlah Berpotensi";
$calc_btn = "Mula Berdagang";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Ciri-ciri";
$features_title = "Kuasa $site_name";
$feature_1_title = "Dagangan Spot";
$feature_1_text = "Maksimumkan potensi dagangan anda dengan alat profesional.";
$feature_2_title = "Beli Kripto";
$feature_2_text = "Beli kripto menggunakan kad atau bank.";
$feature_3_title = "Derivatif Kripto";
$feature_3_text = "Dagangan niaga hadapan yang mudah dan termaju.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Kembangkan kekayaan anda dengan mudah.";
$feature_5_title = "Bot Dagangan";
$feature_5_text = "Keuntungan lebih tinggi, walaupun ketika anda tidur.";
$feature_6_title = "Dagangan Margin";
$feature_6_text = "Pinjam, dagang, dan bayar balik dengan mudah.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Apa Kata Pengguna Kami";
$review_1_text = "Platform ini sangat mudah digunakan, dan saya telah melihat kemajuan yang stabil sejak menjadi pemegang. Komitmen pasukan dan idea baharu membuatkan saya tidak sabar untuk melihat apa yang akan datang seterusnya!";
$review_1_role = "Peniaga";
$review_2_text = "$site_name menawarkan pengalaman dagangan yang lancar dan intuitif. Saya dapat mula membeli dan berdagang kripto dengan segera. Antara muka mudah digunakan, dan kelajuan transaksi sangat baik!";
$review_2_role = "Peniaga Baharu";
$review_3_text = "Saya mempercayai platform ini untuk menguruskan pelaburan kripto saya. Ciri keselamatannya memberi saya keyakinan, dan saya tidak pernah menghadapi sebarang masalah dengan pengeluaran atau deposit. Ia adalah salah satu pertukaran paling boleh dipercayai yang pernah saya gunakan.";
$review_3_role = "Peniaga Profesional";
$review_4_text = "Setiap kali saya mempunyai soalan, pasukan sokongan pelanggan sentiasa segera dan membantu. Mereka benar-benar mengambil berat tentang pengguna mereka dan menjadikan setiap pengalaman dagangan lancar dan mudah.";
$review_4_role = "Peniaga Berpengalaman";
$review_5_text = "Sebagai pemula, saya mendapati $site_name sangat mudah digunakan. Apa yang benar-benar menonjol ialah pelbagai alat termaju untuk peniaga yang lebih berpengalaman. Ia adalah pilihan yang kukuh untuk sesiapa sahaja yang ingin membina portfolio mereka!";
$review_5_role = "Peniaga Komuniti";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Soalan Lazim";
$faq_title = "Soalan Lazim";
$faq_q1 = "Apakah itu $site_name?";
$faq_a1 = "$site_name ialah pertukaran kripto di mana pengguna boleh berdagang dengan mudah pelbagai jenis syiling, termasuk Bitcoin, Ethereum, dan mata wang kripto popular lain.";
$faq_q2 = "Sejauh Manakah Selamatnya $site_name untuk Dagangan Kripto?";
$faq_a2 = "Platform ini menyediakan keselamatan melalui teknologi termaju dan sokongan aset 1:1 melalui Proof of Reserves.";
$faq_q3 = "Bagaimana Saya Membuat Deposit?";
$faq_a3 = "$site_name menawarkan pelbagai pilihan deposit, termasuk Deposit Kripto, Deposit Fiat, Dagangan P2P, dan Beli Satu Klik.";
$faq_q4 = "Perlukah Saya Berpengalaman untuk Menggunakan $site_name?";
$faq_a4 = "Tidak, anda tidak memerlukan sebarang pengalaman. Antara muka platform yang mudah digunakan menjadikannya boleh diakses oleh semua orang, daripada pemula hingga peniaga termaju.";
$faq_q5 = "Adakah terdapat sebarang yuran atau kos tersembunyi?";
$faq_a5 = "Tiada langsung. Tiada yuran pendaftaran, kos langganan, atau caj tersembunyi dalam apa jua bentuk. Anda sentiasa melihat jumlah transaksi yang tepat sebelum mengesahkan. Pendapatan diperoleh daripada ciri premium dan perkongsian pertukaran, bukan daripada mengambil wang daripada pengguna.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Mula Berdagang Hari Ini";
$cta_desc = "Bersedia untuk membuat langkah anda? Daftar sekarang dan ambil langkah pertama ke arah kebebasan kewangan.";
$cta_btn = "Daftar";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Ciri Utama Platform Dagangan $site_name";
$table_1_label = "🤖 Teknologi Platform";
$table_1_val = "Enjin Dagangan AI Termaju";
$table_2_label = "💳 Kaedah Pendanaan";
$table_2_val = "Kad Kredit Utama, Pindahan Bank, PayPal";
$table_3_label = "📱 Akses Platform";
$table_3_val = "Keserasian Pelbagai Peranti";
$table_4_label = "🚀 Kadar Prestasi";
$table_4_val = "Ketepatan 85%";
$table_5_label = "📊 Instrumen Dagangan";
$table_5_val = "Ekuiti, Forex, Komoditi, Logam Berharga, CFD, Mata Wang Kripto dan lain-lain…";
$table_6_label = "✍️ Persediaan Akaun";
$table_6_val = "Pantas dan Cekap";
$table_7_label = "📞 Sokongan Pelanggan";
$table_7_val = "Bantuan Profesional 24/7";

// Reviews summary card
$summary_title = "Ulasan $site_name";
$summary_badge = "Dipercayai";
$summary_desc = "Platform dagangan yang berkuasa dan mesra pengguna dengan automasi yang kukuh dan sumber pendidikan.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Berdagang dengan bijak, berkembang dengan pantas";
$footer_community_label = "Komuniti";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Produk";
$footnav_offer = "Tawaran";
$footnav_contacts = "Hubungi kami";
$footnav_faq = "Soalan Lazim";
$footnav_privacy = "Dasar Privasi";
$footnav_conditions = "Terma &amp; Syarat";
$footnav_risk = "Amaran Risiko";
$footer_disclaimer = "$site_name berkongsi sumber pendidikan dan bahan berkaitan pasaran untuk membantu pelawat lebih memahami dagangan, pelaburan, dan produk kewangan digital. Maklumat yang dipaparkan di seluruh laman web, seperti ulasan pasaran, harga aset, carta, panduan, dan kandungan analitikal, disediakan untuk tujuan maklumat am dan tidak membentuk nasihat kewangan, pelaburan, cukai, atau undang-undang. Walaupun usaha munasabah dilakukan untuk mengekalkan maklumat yang tepat dan relevan, $site_name tidak memberikan sebarang jaminan berkenaan kesempurnaan, ketepatan, atau ketepatan masa kandungan dan tidak boleh dipertanggungjawabkan atas keputusan atau kerugian yang terhasil daripada penggunaannya.<br><br>Penyertaan dalam pasaran kewangan membawa risiko yang wujud. Mata wang kripto, Forex, CFD, ekuiti, dan instrumen dagangan lain boleh mengalami turun naik harga yang besar, dan kerugian mungkin berlaku. Keadaan individu dan toleransi risiko berbeza-beza, jadi pengguna harus menjalankan penyelidikan sendiri dan mempertimbangkan untuk mendapatkan nasihat daripada profesional kewangan yang berkelayakan sebelum melaburkan dana. Jangan sekali-kali berdagang dengan wang yang anda tidak mampu untuk rugi.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "Perunding Dagangan";
$quiz_text_welcome = "Hai! Saya Maya, perunding dagangan peribadi anda. Adakah anda mempunyai beberapa minit untuk mencari pelan terbaik untuk anda?";
$quiz_text_q1 = "Pernahkah anda berdagang mata wang kripto sebelum ini?";
$quiz_text_a1_yes = "Ya, saya berpengalaman";
$quiz_text_a1_no = "Tidak, saya pemula";
$quiz_text_q2 = "Hebat! Apakah nama pertama anda supaya saya dapat memperibadikan pelan anda?";
$quiz_text_q3 = "Apakah matlamat utama anda dalam berdagang?";
$quiz_text_a3_yes = "Bina kekayaan jangka panjang";
$quiz_text_a3_no = "Jana pendapatan jangka pendek";
$quiz_text_q4 = "Berapa banyak yang anda ingin mulakan?";
$quiz_text_a4_1 = "Bawah $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Melebihi $1000";
$quiz_text_q5 = "Sempurna. Adakah anda mahu saya membuka akaun percuma untuk anda sekarang?";
$quiz_text_a5_yes = "Ya, mari kita lakukan";
$quiz_text_a5_no = "Bukan sekarang";
$quiz_text_loader = "Mencari pelan terbaik anda...";
$quiz_text_final_ttl = "Semuanya sudah sedia!";
$quiz_text_processing = "Menghantar butiran anda...";
$quiz_text_typing = "sedang menaip...";
$quiz_placeholder_fname = "Nama Pertama";
$quiz_placeholder_lname = "Nama Keluarga";
$quiz_placeholder_email = "E-mel";
$quiz_btn_submit = "Dapatkan Akaun Percuma Saya";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Amaran Risiko — Pendedahan Risiko Dagangan";
$risk_meta_description = "Baca amaran risiko $site_name sebelum anda berdagang: risiko pasaran mata wang kripto, leveraj, kecairan, keselamatan siber dan pertimbangan kawal selia.";
$risk_title = "Amaran Risiko";
$risk_intro = "Memahami risiko adalah langkah pertama ke arah dagangan yang yakin.";
$risk_ai_title = "Cara Sistem AI Kami Membantu Menguruskan Risiko:";
$risk_ai_1_title = "Kecekapan Algoritma &amp; Dagangan Tanpa Emosi:";
$risk_ai_1_text = "Algoritma termaju menganalisis isyarat pasaran untuk melaksanakan dagangan secara objektif pada masa yang optimum.";
$risk_ai_2_title = "Strategi Berasaskan Data:";
$risk_ai_2_text = "Strategi adalah berdasarkan corak pasaran yang disahkan dan analisis masa nyata dan bukannya tekaan.";
$risk_ai_3_title = "Tetapan Fleksibel &amp; Kawalan Penuh:";
$risk_ai_3_text = "Laraskan parameter risiko anda pada bila-bila masa. Jejaki semua baki dan dagangan secara telus pada papan pemuka anda tanpa yuran tersembunyi dan pengeluaran tanpa sekatan.";
$risk_disclaimer = "<strong>Penafian:</strong> Dagangan sentiasa membawa risiko. Sistem automatik (termasuk AI) tidak menjamin keuntungan, boleh gagal disebabkan ralat perisian atau peristiwa pasaran yang tidak dijangka, dan memerlukan pemantauan pengguna. Prestasi lepas bukan penunjuk keputusan masa hadapan. Platform ini hanya berfungsi untuk tujuan maklumat dan pemasaran dan tidak memberikan nasihat kewangan.";
$risk_s1_title = "1. Risiko Am &amp; Risiko Pasaran Mata Wang Kripto";
$risk_s1_text = "Mata wang kripto adalah aset spekulatif yang sangat tidak menentu, beroperasi 24/7 dengan pengawasan kawal selia yang minimum di kebanyakan bidang kuasa.";
$risk_s1_li1 = "Nilai boleh turun naik secara mendadak dalam tempoh yang singkat, yang berpotensi membawa kepada kerugian sepenuhnya modal yang dilaburkan.";
$risk_s1_li2 = "Nilai pasaran boleh dipengaruhi secara besar-besaran oleh kemas kini kawal selia, perkembangan teknikal, pelanggaran keselamatan, atau peristiwa makroekonomi yang lebih luas.";
$risk_s1_li3 = "Sesetengah aset mungkin kehilangan sepenuhnya nilainya. Laburkan hanya dana yang anda mampu untuk rugi.";
$risk_s2_title = "2. Risiko Pelaksanaan, Kecairan &amp; Leveraj";
$risk_s2_li1_title = "Turun Naik Pasaran &amp; Kecairan:";
$risk_s2_li1_text = "Pergerakan harga yang melampau (10-20%+ setiap hari) atau kecairan rendah (terutamanya dalam syiling yang lebih kecil) boleh membawa kepada kelewatan, gangguan platform, dan gelinciran pelaksanaan yang teruk. Pesanan stop-loss tidak dapat menjamin had kerugian di bawah keadaan yang melampau.";
$risk_s2_li2_title = "Risiko Leveraj &amp; Margin:";
$risk_s2_li2_text = "Produk berleveraj menguatkan kedua-dua keuntungan dan kerugian, bermakna anda boleh kehilangan lebih daripada deposit awal anda. <em>Kira-kira 70-80% akaun pelabur runcit kehilangan wang apabila berdagang produk berleveraj.</em>";
$risk_s3_title = "3. Risiko Teknikal, Keselamatan Siber &amp; Pihak Ketiga";
$risk_s3_li1_title = "Faktor Teknikal:";
$risk_s3_li1_text = "Dagangan dalam talian secara semula jadi melibatkan risiko gangguan internet, ralat perkakasan/perisian, dan ketidaktersediaan perkhidmatan.";
$risk_s3_li2_title = "Keselamatan Siber:";
$risk_s3_li2_text = "Akaun mata wang kripto adalah sasaran kerap untuk phishing, perisian hasad, dan penggodaman. Transaksi tidak boleh dibatalkan; kompromi terhadap kelayakan anda boleh mengakibatkan kerugian kekal.";
$risk_s3_li3_title = "Platform Pihak Ketiga:";
$risk_s3_li3_text = "Laman web ini boleh menghubungkan pengguna kepada platform pihak ketiga. Kami tidak mengawal, mengiktiraf, atau menjamin keselamatan, operasi, atau kesolvenan mereka. Sentiasa jalankan usaha wajar anda sendiri sebelum mendeposit dana pada platform luaran.";
$risk_s4_title = "4. Peruntukan Kawal Selia, Cukai &amp; Akhir";
$risk_s4_li1_title = "Pematuhan Undang-undang &amp; Cukai:";
$risk_s4_li1_text = "Rangka kerja kawal selia berbeza-beza secara meluas dan berubah dengan pantas. Pengguna bertanggungjawab sepenuhnya untuk memastikan aktiviti dagangan mereka mematuhi undang-undang tempatan dan untuk memenuhi kewajipan cukai mereka sendiri.";
$risk_s4_li2_title = "Tiada Jaminan Keuntungan:";
$risk_s4_li2_text = "Tiada dagangan kripto yang \"selamat\" atau bebas risiko. Sebarang angka hasil atau contoh prestasi yang diberikan adalah semata-mata hipotesis.";
$risk_s4_li3_title = "Kesesuaian:";
$risk_s4_li3_text = "Jika anda tidak memahami sepenuhnya risiko, bergantung kepada dana penting, atau berdagang dengan wang pinjaman, dagangan kripto tidak sesuai untuk anda. Rujuk penasihat kewangan berlesen yang bebas jika anda tidak pasti.";
$risk_contact = "<strong>Hubungi Kami:</strong> Untuk sebarang soalan berkaitan kenyataan ini atau untuk menghantar pertanyaan, sila hubungi pasukan sokongan pelanggan rasmi kami melalui borang hubungi kami di laman web kami.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Utama";
$bc_product = "Produk";
$bc_offer = "Tawaran";
$bc_contacts = "Hubungi kami";
$bc_faq = "Soalan Lazim";
$bc_privacy = "Dasar Privasi";
$bc_conditions = "Terma &amp; Syarat";
$bc_risk = "Amaran Risiko";
$bc_sign = "Daftar";
$bc_sitemap = "Peta Laman";
$bc_thanks = "Terima Kasih";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "Produk $site_name — Alat Dagangan &amp; Ciri Platform";
$product_meta_description = "Terokai produk $site_name: dagangan spot, derivatif kripto, bot dagangan, dagangan margin dan banyak lagi, semuanya dibina atas platform yang pantas dan selamat.";
$product_h1 = "Produk Dagangan $site_name";
$product_lead = "Satu platform, setiap alat yang diperlukan oleh peniaga: daripada dagangan spot pertama anda kepada strategi automatik dan kedudukan margin, $site_name mengekalkan pengalaman yang pantas, selamat dan mudah difahami.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "Tawaran $site_name — Mula Berdagang Dari $$app_price";
$offer_meta_description = "Lihat apa yang termasuk dalam tawaran $site_name semasa: deposit minimum $$app_price yang rendah, akses platform penuh, dan tiada yuran tersembunyi.";
$offer_h1 = "Tawaran Semasa Kami";
$offer_lead = "Mulakan dengan hanya <strong>$$app_price $app_currency</strong> dan buka kunci platform $site_name penuh sejak hari pertama &mdash; setiap alat, setiap pasaran, tiada kos tersembunyi.";
$offer_li1 = "Deposit minimum hanya $$app_price $app_currency untuk mengaktifkan akaun anda";
$offer_li2 = "Akses penuh kepada dagangan spot, derivatif, margin dan bot dagangan";
$offer_li3 = "Pelbagai kaedah pendanaan, termasuk kad dan pindahan bank";
$offer_li4 = "Tiada yuran pendaftaran, tiada kos langganan, tiada caj tersembunyi";
$offer_li5 = "Sokongan pelanggan 24/7 semasa anda bermula";
$offer_note = "Jumlah deposit dan kaedah pembayaran yang tersedia mungkin berbeza mengikut wilayah. Semak <a class=\"link\" href=\"risk-warning.php\">Amaran Risiko</a> kami sebelum mendanai akaun.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Hubungi $site_name — Berhubung dengan Pasukan Kami";
$contacts_meta_description = "Ada soalan tentang akaun $site_name atau platform anda? Hubungi pasukan sokongan kami melalui e-mel atau hantarkan mesej kepada kami dan kami akan menghubungi anda semula.";
$contacts_h1 = "Hubungi Kami";
$contacts_lead = "Soalan tentang akaun anda, deposit, atau bagaimana platform berfungsi? Pasukan kami sedia membantu.";
$contacts_email_label = "E-mel";
$contacts_hours_label = "Waktu Sokongan";
$contacts_hours_value = "24/7";
$contacts_response_label = "Masa Tindak Balas Biasa";
$contacts_response_value = "Dalam masa 24 jam";
$contacts_form_title = "Hantar Mesej kepada Kami";
$contacts_form_desc = "Tinggalkan butiran anda di bawah dan ahli pasukan kami akan menghubungi anda secara terus.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "Soalan Lazim $site_name";
$faq_meta_description = "Jawapan kepada soalan paling biasa mengenai mencipta akaun $site_name, membuat deposit, keselamatan platform, dan yuran.";
$faq_page_lead = "Semua yang anda perlu tahu sebelum anda mula berdagang. Tidak menemui jawapan anda? <a class=\"link\" href=\"contacts.php\">Hubungi pasukan kami</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "Dasar Privasi $site_name";
$privacy_meta_description = "Ketahui bagaimana $site_name mengumpul, menggunakan, dan melindungi maklumat peribadi anda merentasi laman web dan platform.";
$privacy_sections = [
    [
        "title" => "1. Pengenalan",
        "body" => "Dasar Privasi ini menerangkan bagaimana $site_name (\"kami\") mengumpul, menggunakan, dan melindungi maklumat peribadi pelawat dan pengguna $site_domain (\"Laman Web\"). Dengan menggunakan Laman Web, anda bersetuju dengan amalan yang diterangkan di bawah.",
    ],
    [
        "title" => "2. Maklumat Yang Kami Kumpul",
        "body" => "Kami mungkin mengumpul maklumat yang anda berikan secara langsung, seperti nama, alamat e-mel, dan nombor telefon anda semasa anda mendaftar atau menghantar borang, serta maklumat yang dikumpul secara automatik, termasuk alamat IP, jenis peranti dan pelayar, dan halaman yang dilihat di Laman Web.",
    ],
    [
        "title" => "3. Bagaimana Kami Menggunakan Maklumat Anda",
        "body" => "Kami menggunakan maklumat yang dikumpul untuk mencipta dan menguruskan akaun anda, membalas pertanyaan, menyediakan sokongan pelanggan, menambah baik Laman Web dan perkhidmatan kami, dan, jika dibenarkan, menghantar kemas kini tentang produk dan tawaran. Anda boleh keluar daripada komunikasi pemasaran pada bila-bila masa.",
    ],
    [
        "title" => "4. Kuki &amp; Teknologi Penjejakan",
        "body" => "Laman Web menggunakan kuki dan teknologi serupa untuk mengingati keutamaan anda, memastikan anda kekal log masuk, dan memahami bagaimana pelawat menggunakan halaman kami. Anda boleh melumpuhkan kuki melalui tetapan pelayar anda, walaupun sesetengah ciri mungkin tidak berfungsi dengan betul akibatnya.",
    ],
    [
        "title" => "5. Perkongsian Maklumat",
        "body" => "Kami tidak menjual maklumat peribadi anda. Kami mungkin berkongsi maklumat dengan penyedia perkhidmatan yang dipercayai yang membantu kami mengendalikan Laman Web (seperti penyedia hosting atau analitik), atau apabila diperlukan oleh undang-undang atau untuk melindungi hak undang-undang kami.",
    ],
    [
        "title" => "6. Keselamatan Data",
        "body" => "Kami menggunakan langkah teknikal dan organisasi yang munasabah untuk melindungi maklumat anda daripada akses, pengubahan, atau kehilangan yang tidak dibenarkan. Tiada kaedah penghantaran atau penyimpanan yang sepenuhnya selamat, dan kami tidak dapat menjamin keselamatan mutlak.",
    ],
    [
        "title" => "7. Hak &amp; Pilihan Anda",
        "body" => "Bergantung kepada lokasi anda, anda mungkin mempunyai hak untuk mengakses, membetulkan, atau meminta pemadaman maklumat peribadi anda, dan membantah penggunaan tertentu maklumat tersebut. Untuk melaksanakan hak ini, sila hubungi kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi kami</a>.",
    ],
    [
        "title" => "8. Privasi Kanak-kanak",
        "body" => "Laman Web ini tidak ditujukan kepada individu di bawah umur 18 tahun, dan kami tidak dengan sengaja mengumpul maklumat peribadi daripada kanak-kanak bawah umur. Jika anda percaya kanak-kanak bawah umur telah memberikan kami maklumat peribadi, sila hubungi kami supaya kami boleh mengeluarkannya.",
    ],
    [
        "title" => "9. Perubahan kepada Dasar Ini",
        "body" => "Kami mungkin mengemas kini Dasar Privasi ini dari semasa ke semasa. Sebarang perubahan akan disiarkan pada halaman ini dengan tarikh kuat kuasa yang disemak semula. Kami menggalakkan anda menyemak halaman ini secara berkala.",
    ],
    [
        "title" => "10. Hubungi Kami",
        "body" => "Jika anda mempunyai soalan tentang Dasar Privasi ini atau bagaimana maklumat anda dikendalikan, sila hubungi kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi kami</a> atau e-mel kami di info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "Terma &amp; Syarat $site_name";
$conditions_meta_description = "Semak Terma &amp; Syarat yang mengawal akses kepada dan penggunaan laman web dan platform dagangan $site_name.";
$conditions_sections = [
    [
        "title" => "1. Penerimaan Terma",
        "body" => "Dengan mengakses atau menggunakan $site_domain (\"Laman Web\"), anda bersetuju untuk terikat dengan Terma &amp; Syarat ini. Jika anda tidak bersetuju dengan mana-mana bahagian terma ini, sila jangan gunakan Laman Web.",
    ],
    [
        "title" => "2. Kelayakan",
        "body" => "Anda mesti berumur sekurang-kurangnya 18 tahun dan dibenarkan secara sah untuk menggunakan perkhidmatan berkaitan dagangan di bidang kuasa anda untuk menggunakan Laman Web. Dengan menggunakan Laman Web, anda mengesahkan bahawa anda memenuhi keperluan ini.",
    ],
    [
        "title" => "3. Penerangan Perkhidmatan",
        "body" => "$site_name menyediakan platform dalam talian dengan kandungan pendidikan, maklumat pasaran, dan alat dagangan. Tiada apa-apa pada Laman Web merupakan nasihat kewangan, pelaburan, cukai, atau undang-undang, dan sebarang maklumat yang diberikan adalah untuk tujuan maklumat am sahaja.",
    ],
    [
        "title" => "4. Tanggungjawab Pengguna",
        "body" => "Anda bertanggungjawab untuk memberikan maklumat yang tepat semasa mendaftar, untuk mengekalkan kerahsiaan kelayakan akaun anda, dan untuk semua aktiviti yang berlaku di bawah akaun anda.",
    ],
    [
        "title" => "5. Harta Intelek",
        "body" => "Semua kandungan pada Laman Web, termasuk teks, grafik, logo, dan perisian, adalah hak milik $site_name atau pemberi lesennya dan dilindungi oleh undang-undang harta intelek yang berkenaan. Anda tidak boleh menghasilkan semula atau mengedarkan kandungan ini tanpa kebenaran.",
    ],
    [
        "title" => "6. Tiada Nasihat Kewangan",
        "body" => "Kandungan pada Laman Web disediakan untuk tujuan maklumat dan pendidikan sahaja dan tidak sepatutnya ditafsirkan sebagai nasihat kewangan. Anda bertanggungjawab sepenuhnya terhadap keputusan dagangan anda sendiri dan sepatutnya berunding dengan penasihat kewangan yang bebas jika perlu. Lihat <a class=\"link\" href=\"risk-warning.php\">Amaran Risiko</a> kami untuk maklumat lanjut.",
    ],
    [
        "title" => "7. Had Liabiliti",
        "body" => "Setakat yang dibenarkan oleh undang-undang, $site_name tidak akan bertanggungjawab terhadap sebarang kerosakan langsung, tidak langsung, sampingan, atau berbangkit yang timbul daripada penggunaan anda, atau ketidakupayaan untuk menggunakan, Laman Web atau mana-mana perkhidmatan pihak ketiga yang dipautkan.",
    ],
    [
        "title" => "8. Penamatan",
        "body" => "Kami berhak untuk menggantung atau menamatkan akses anda kepada Laman Web mengikut budi bicara kami, tanpa notis, bagi kelakuan yang kami percaya melanggar Terma &amp; Syarat ini atau sebaliknya memudaratkan pengguna lain atau Laman Web.",
    ],
    [
        "title" => "9. Perubahan kepada Terma Ini",
        "body" => "Kami mungkin menyemak semula Terma &amp; Syarat ini pada bila-bila masa. Penggunaan berterusan Laman Web selepas perubahan disiarkan membentuk penerimaan terma yang dikemas kini.",
    ],
    [
        "title" => "10. Hubungi",
        "body" => "Soalan tentang Terma &amp; Syarat ini boleh ditujukan kepada pasukan kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi kami</a> atau melalui e-mel kepada info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Daftar | $site_name — Cipta Akaun Percuma Anda";
$sign_meta_description = "Cipta akaun $site_name percuma anda dalam beberapa minit dan mula berdagang dengan hanya $$app_price $app_currency.";
$sign_h1 = "Cipta Akaun Percuma Anda";
$sign_lead = "Sertai $site_name dalam beberapa minit. Isi butiran anda di bawah untuk bermula.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Terima Kasih | $site_name";
$thanks_h1 = "Terima Kasih!";
$thanks_text = "Butiran anda telah diterima. Ahli pasukan $site_name akan berhubung dengan anda tidak lama lagi untuk membantu anda bermula.";
$thanks_btn = "Kembali ke Laman Utama";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Peta Laman | $site_name";
$sitemap_meta_description = "Layari setiap halaman di laman web $site_name, termasuk platform dagangan, tawaran, sokongan dan halaman undang-undang.";
$sitemap_h1 = "Peta Laman";
$sitemap_lead = "Setiap halaman di $site_name di satu tempat.";

