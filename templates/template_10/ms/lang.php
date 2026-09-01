<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ms-MY';
$form_language = 'ms'; // matches this page's own language, not the offer's global default

// ============================================================
// MS TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Laman Web Rasmi | Platform Dagangan";
$home_meta_description = "$site_name menawarkan platform dagangan mesra pengguna dengan alat pasaran termaju, gambaran masa nyata dan ciri praktikal yang menjadikan dagangan dalam talian lebih mudah diakses dan bermaklumat.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Tentang Kami";
$nav_contacts = "Hubungi Kami";
$nav_login = "Log Masuk";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Langsung";
$activity_suffix = "Baru sahaja menyertai";
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
$form_title = "Mula Sekarang";
$form_fname_placeholder = "Nama penuh";
$form_lname_placeholder = "Nama keluarga";
$form_email_placeholder = "Alamat e-mel";
$form_btn_submit = "Cipta Akaun";
$form_disclaimer_text = "* Dengan mengklik butang, anda bersetuju dengan <a class=\"link\" href=\"privacy.php\">Dasar Privasi</a> dan <a class=\"link\" href=\"conditions.php\">Terma Penggunaan</a> kami.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SELAMAT";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI direka untuk membaca pasaran dengan lebih jelas";
$s1_subtitle = "Strategi pelaburan didorong teknologi";
$s1_quote = "$site_name dibina untuk memudahkan kerja dengan pasaran, sama ada anda mempunyai pengalaman atau tidak. Platform ini menggunakan kecerdasan buatan untuk mengubah data kompleks menjadi keputusan yang jelas dan boleh dilaksanakan, membolehkan anda berdagang dengan lebih yakin dalam sebarang senario.";
$s1_p1 = "Sistem ini meneliti sejumlah besar maklumat secara masa nyata: ia mengesan perubahan, mengenali corak, dan bertindak balas dengan cepat terhadap isyarat pasaran. Ini memberikan anda gambaran jelas tentang konteks semasa, supaya anda dapat mengesan peluang tanpa perlu menggali analisis yang rumit.";
$s1_p2 = "Pemantauan 24/7, antara muka mesra pengguna, dan tahap perlindungan yang tinggi menjadikan pengalaman selesa dan boleh dipercayai. Semuanya direka supaya anda boleh menumpukan perhatian pada hasil, bukan aspek teknikal.";
$s1_p3 = "Ciri copy trading juga memberikan anda akses kepada strategi peniaga yang lebih berpengalaman. Anda boleh mengikuti pergerakan mereka dan mengaplikasikan pendekatan yang terbukti dalam dagangan anda sendiri, menggabungkan pertimbangan profesional dengan automasi.";
$s1_cta = "Cipta Akaun";
$s1_img_alt = "kewangan digital $site_name";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Analisis pasaran yang tepat, tanpa bunyi bising tambahan";
$s2_intro = "$site_name menggunakan kecerdasan buatan untuk memantau pasaran secara berterusan dan mengesan perubahan dengan cepat. Sistem memproses sejumlah besar data dan hanya memaparkan isyarat yang relevan, tanpa membebankan anda dengan maklumat yang tidak perlu.";
$s2_item1_title = "Reaksi pasaran tanpa menunggu";
$s2_item1_text = "Platform ini mengenal pasti pergerakan pada peringkat awal: momentum, pembalikan dan perubahan trend. Anda melihat dengan segera apa yang berlaku dan boleh bertindak pada masa yang tepat.";
$s2_item2_title = "Bacaan yang jelas berbanding tekaan";
$s2_item2_text = "Tiada carta rumit atau tekaan. $site_name menekankan perkara penting, memberikan gambaran keseluruhan situasi yang jelas, supaya anda boleh membuat keputusan berdasarkan data, bukan intuisi.";
$s2_item3_title = "Kawalan dan perlindungan";
$s2_item3_text = "Data anda dilindungi, akses dikawal, dan transaksi mengalir melalui saluran selamat. Ini membolehkan anda menumpukan perhatian pada pasaran, bukan risiko teknikal.";
$s2_img_alt = "kripto $site_name";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Kecerdasan yang jelas untuk peniaga";
$s3_card1_title = "$site_name menghormati privasi dan kawalan pengguna";
$s3_card1_text = "$site_name mengendalikan maklumat dengan ketelusan dan integriti penuh. Ia tidak menyalahgunakan data peribadi anda. Tiada transaksi atau pesanan direkodkan pada platform ini.";
$s3_card2_title = "Persekitaran analisis yang jelas untuk keputusan yang lebih baik";
$s3_card2_text = "$site_name berfungsi sebagai ruang teknologi di mana AI mengukuhkan pertimbangan manusia dan bukannya menggantikannya. Alat-alat ini memudahkan pemahaman peralihan pasaran, membandingkan strategi, dan mengkaji tingkah laku aset.";
$s3_card3_title = "Alat AI yang mempertajamkan pandangan pasaran anda";
$s3_card3_text = "Analisis tidak pernah berhenti. $site_name memerhatikan persekitaran kripto dan menghantar pemberitahuan masa nyata sebaik sahaja pergerakan yang relevan muncul.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Analisis tajam, tanpa emosi atau kesilapan";
$s4_quote = "$site_name mengubah data pasaran yang kompleks menjadi maklumat teratur yang mudah dibaca, menghapuskan bunyi bising yang tidak perlu dan membantu anda menumpukan perhatian pada isyarat yang benar-benar penting. Ini membolehkan anda memahami situasi lebih awal dan membuat keputusan tanpa emosi mengambil alih kawalan.";
$s4_p1 = "Sistem sentiasa mengemas kini kesimpulannya dengan data baharu. Bukannya penunjuk yang ketinggalan, ia menggunakan model adaptif yang bertindak balas terhadap perubahan pasaran secara masa nyata. Ini bermakna anda sentiasa bekerja dengan gambaran terkini dan boleh bertindak lebih cepat apabila benar-benar penting.";
$s4_img_alt = "kecerdasan buatan $site_name";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Gunakan AI $site_name untuk keputusan yang tepat dan tepat pada masanya";
$s5_quote = "$site_name menganalisis pasaran secara masa nyata dan segera menunjukkan kepada anda di mana pergerakan dan peluang berada. Sistem memproses data untuk anda, menyediakan isyarat sedia guna: bila hendak masuk, bila hendak keluar, dan apa yang perlu diperhatikan.";
$s5_p1 = "Anda tidak perlu melihat carta sepanjang hari. Platform ini sendiri mengesan perubahan dan bertindak balas dengan cepat terhadap pasaran, supaya anda tidak terlepas detik-detik penting.";
$s5_p2 = "Algoritma beroperasi 24/7, mengenal pasti peluang baharu sebaik sahaja ia muncul. Anda mendapat maklumat terkini tanpa kelewatan atau lebihan maklumat.";
$s5_p3 = "Pada masa yang sama, keselamatan kekal pada tahap tinggi: perlindungan data, akses selamat dan kawalan dagangan. $site_name sesuai untuk kedua-dua pemula dan peniaga aktif — keputusan kekal milik anda, tetapi disokong oleh asas analisis yang kukuh.";
$s5_img_alt = "automasi kewangan $site_name";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Dagangan yang konsisten bermula dengan sistem yang teratur";
$s6_p1 = "$site_name membantu membawa struktur kepada kerja anda dengan pasaran. Platform ini mencipta rangka kerja yang jelas: anda menentukan matlamat dan tahap risiko anda, dan sistem menyesuaikan analisisnya dengan gaya anda — tanpa kekacauan dan tanpa beban berlebihan.";
$s6_p2 = "Analisis 24/7 mengubah aliran data menjadi isyarat yang mudah dan boleh difahami. Anda hanya melihat perkara yang penting: di mana terdapat pergerakan, di mana berbaloi untuk masuk, dan bila lebih baik untuk menunggu. Dari semasa ke semasa, algoritma menjadi lebih tepat dan menyesuaikan diri dengan pasaran.";
$s6_item1_title = "Pilih rentak anda: dagangan pantas atau pendekatan jangka panjang";
$s6_item1_text = "$site_name menyokong pelbagai strategi. Untuk dagangan aktif, sistem menandakan titik masuk dan pergerakan harga. Untuk pendekatan jangka panjang, ia membantu anda mengekalkan kedudukan dengan mengambil kira trend dan risiko.";
$s6_item2_title = "Titik masuk tanpa tekaan";
$s6_item2_text = "Platform menunjukkan di mana pasaran paling aktif. Ini membantu anda masuk dengan lebih yakin dan keluar tepat pada masanya, tanpa improvisasi.";
$s6_item3_title = "Pengurusan risiko dari awal";
$s6_item3_text = "Anda boleh melihat senario yang mungkin terlebih dahulu: di mana risiko lebih rendah dan potensi lebih tinggi. Ini membolehkan anda merancang transaksi sebelum pergerakan bermula.";
$s6_item4_title = "Analisis sedia guna";
$s6_item4_text = "$site_name tidak membebankan anda dengan terminologi yang rumit. Anda mendapat maklumat yang jelas dan boleh digunakan secara langsung, direka untuk membantu anda membuat keputusan dengan lebih cepat dan lebih yakin.";
$s6_cta = "Mula Sekarang";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Alat mudah untuk keputusan yang tepat dengan $site_name";
$s7_quote = "$site_name memberikan anda segala yang anda perlukan untuk berdagang di pasaran — tanpa jargon teknikal atau lebihan maklumat. Platform ini sendiri menganalisis pergerakan harga, trend, dan titik masuk yang berpotensi, hanya menunjukkan perkara yang benar-benar penting.";
$s7_point1 = "Sistem membantu mengesan bila pasaran mungkin berbalik, di mana pergerakan kuat muncul, dan masa mana yang terbaik untuk masuk atau keluar. Setiap isyarat tiba yang telah diproses terlebih dahulu — anda tidak perlu menguasai penunjuk kompleks.";
$s7_point2 = "Ia juga termasuk copy trading: anda boleh mengikuti dan meniru keputusan peniaga berpengalaman tanpa menghabiskan masa untuk analisis anda sendiri.";
$s7_point3 = "Antara muka kekal sesederhana mungkin — setiap alat difahami sepintas lalu dan sedia digunakan dari saat pertama.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Cari tetingkap masa penting dengan AI $site_name";
$s8_item1 = "Kepelbagaian automatik mengagihkan dana merentasi pelbagai aset, mengurangkan risiko dan melindungi modal walaupun di pasaran yang tidak stabil.";
$s8_item2 = "Sistem yang sepenuhnya autonomi — anda tidak perlu melihat carta. Algoritma menganalisis pasaran dan membuat keputusan secara bebas.";
$s8_item3 = "Pengeluaran tersedia pada bila-bila masa — ke kad bank, dompet kripto atau sistem pembayaran elektronik, tanpa kelewatan.";
$s8_item4 = "Laporan harian menunjukkan hasil anda dan memberikan anda kawalan penuh ke atas situasi secara masa nyata.";
$s8_item5 = "Tetapan tahap risiko yang fleksibel membolehkan anda memilih strategi yang sesuai dengan matlamat anda — daripada konservatif hingga lebih agresif.";
$s8_item6 = "Potensi keuntungan sehingga 400% menjadikan $site_name alat untuk mereka yang mahu bukan sahaja mengekalkan modal mereka, tetapi mengembangkannya dengan ketara.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Analisis pakar dikuasakan oleh $site_name";
$s9_quote = "$site_name menggabungkan kekuatan algoritma dengan pengalaman pasaran, mengubah data kompleks menjadi isyarat yang jelas dan mudah difahami. Sistem mengesan corak dan peluang berpotensi dengan cepat, membolehkan anda membuat keputusan tanpa lebihan maklumat.";
$s9_p1 = "Anda menerima analisis yang telah diproses terlebih dahulu yang mengambil kira kedua-dua penunjuk teknikal dan tingkah laku pasaran — supaya anda boleh bertindak lebih cepat, dengan lebih yakin dan tepat.";
$s9_img_alt = "strategi pelaburan $site_name";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Apa kata pengguna kami";
$review_1_text = "Platform ini sangat intuitif, dan alat-alat ini telah membantu saya meningkatkan hasil dagangan saya.";
$review_2_text = "Sokongan pantas dan bahan pembelajaran yang benar-benar berguna — sempurna untuk orang yang baru bermula.";
$review_3_text = "Carta yang boleh disesuaikan dan pelaksanaan pantas — ia telah menjadi pilihan pertama saya selama berbulan-bulan.";
$review_4_text = "Pendaftaran mengambil masa kurang daripada lima minit, dan papan pemuka memudahkan untuk melihat dengan tepat di mana wang saya berada.";
$review_5_text = "Saya suka bahawa platform menerangkan alasan di sebalik setiap isyarat, bukannya hanya melemparkan nombor kepada saya.";
$review_6_text = "Pengeluaran sentiasa pantas bagi saya, dan pasukan sokongan benar-benar membalas dalam beberapa minit.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Soalan Lazim mengenai $site_name";
$faq_q1 = "Bolehkah $site_name mengesan perubahan pasaran secara masa nyata?";
$faq_a1 = "Ya. Ia mengikuti data langsung, mengenal pasti peralihan momentum pada peringkat awal, dan mengesan corak sebelum ia berkembang sepenuhnya, memberikan pengguna kelebihan tepat pada masanya.";
$faq_q2 = "Bolehkah pengalaman $site_name disesuaikan?";
$faq_a2 = "Ya. Pengguna boleh memilih bidang minat, melaraskan tahap perincian, dan mengikuti strategi awam yang sesuai dengan gaya dagangan atau keperluan pembelajaran mereka.";
$faq_q3 = "Adakah $site_name menggantikan kaedah penyelidikan tradisional?";
$faq_a3 = "Tidak. Ia meningkatkan mereka dengan menyediakan pandangan yang ditapis AI dengan cepat, sambil pengguna mengekalkan kawalan penuh ke atas penyelidikan dan keputusan mereka sendiri.";
$faq_cta = "Ketahui Lebih Lanjut Sekarang";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "Sorotan $site_name";
$hl1_emoji = "🤖";
$hl1_title = "Kos Pendaftaran";
$hl1_desc = "Tiada kos untuk mendaftar";
$hl2_emoji = "💰";
$hl2_title = "Komisen Dagangan";
$hl2_desc = "Sama sekali tiada kos";
$hl3_emoji = "📋";
$hl3_title = "Kemudahan Pendaftaran";
$hl3_desc = "Pendaftaran adalah pantas dan mudah";
$hl4_emoji = "📊";
$hl4_title = "Fokus Pendidikan";
$hl4_desc = "Pelajaran mengenai kripto, dagangan Forex dan pelaburan";
$hl5_emoji = "🌎";
$hl5_title = "Negara Yang Tersedia";
$hl5_desc = "Tidak tersedia di AS, tersedia di kebanyakan negara lain";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Berdagang dengan bijak, berkembang dengan yakin";
$footnav_about = "Tentang Kami";
$footnav_product = "Produk";
$footnav_offer = "Tawaran";
$footnav_contacts = "Hubungi Kami";
$footnav_faq = "Soalan Lazim";
$footnav_privacy = "Dasar Privasi";
$footnav_conditions = "Terma Penggunaan";
$footnav_risk = "Amaran Risiko";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name menerbitkan bahan pendidikan umum mengenai dagangan, pelaburan, pasaran kewangan dan aset digital. Artikel, data pasaran, carta dan kandungan laman web lain disediakan semata-mata untuk tujuan maklumat dan tidak boleh dianggap sebagai nasihat kewangan, pelaburan atau undang-undang. Walaupun kami berusaha untuk menyediakan maklumat yang boleh dipercayai dan terkini, kami tidak boleh menjamin ketepatan atau kesempurnaannya dan tidak bertanggungjawab atas kerugian yang timbul daripada pergantungan pada kandungan.<br><br>Dagangan melibatkan risiko, dan mata wang kripto, Forex, CFD, saham dan produk kewangan lain boleh turun naik dengan ketara dalam nilai. Pertimbangkan keadaan kewangan anda sendiri dan toleransi risiko sebelum berdagang, dan dapatkan nasihat profesional apabila perlu. Jangan sekali-kali meletakkan wang yang anda tidak mampu untuk hilang.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Perunding Dagangan";
$quiz_text_welcome = "Hai! Saya Sofia, perunding dagangan peribadi anda. Adakah anda mempunyai beberapa minit untuk mencari pelan terbaik untuk anda?";
$quiz_text_q1 = "Adakah anda pernah berdagang sebelum ini?";
$quiz_text_a1_yes = "Ya, saya mempunyai pengalaman";
$quiz_text_a1_no = "Tidak, saya seorang pemula";
$quiz_text_q2 = "Bagus! Apakah nama pertama anda supaya saya boleh memperibadikan pelan anda?";
$quiz_text_q3 = "Apakah matlamat utama anda dengan dagangan?";
$quiz_text_a3_yes = "Membina kekayaan jangka panjang";
$quiz_text_a3_no = "Menjana pendapatan jangka pendek";
$quiz_text_q4 = "Berapa banyak yang anda ingin mulakan?";
$quiz_text_a4_1 = "Kurang daripada $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Lebih daripada $1000";
$quiz_text_q5 = "Sempurna. Adakah anda mahu saya membuka akaun percuma untuk anda sekarang?";
$quiz_text_a5_yes = "Ya, mari kita lakukannya";
$quiz_text_a5_no = "Bukan sekarang";
$quiz_text_loader = "Mencari pelan terbaik untuk anda...";
$quiz_text_final_ttl = "Semuanya sudah sedia!";
$quiz_text_processing = "Butiran anda sedang dihantar...";
$quiz_text_typing = "sedang menaip...";
$quiz_placeholder_fname = "Nama pertama";
$quiz_placeholder_lname = "Nama keluarga";
$quiz_placeholder_email = "E-mel";
$quiz_btn_submit = "Dapatkan Akaun Percuma Saya";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Utama";
$bc_about = "Tentang Kami";
$bc_product = "Produk";
$bc_offer = "Tawaran";
$bc_contacts = "Hubungi Kami";
$bc_faq = "Soalan Lazim";
$bc_privacy = "Dasar Privasi";
$bc_conditions = "Terma Penggunaan";
$bc_risk = "Amaran Risiko";
$bc_sign = "Pendaftaran";
$bc_thanks = "Terima Kasih";
$bc_sitemap = "Peta Laman";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Tentang $site_name";
$about_meta_description = "Ketahui tentang misi $site_name: menjadikan analisis pasaran lebih jelas dan mudah diakses dengan alat berkuasa AI.";
$about_h1 = "Tentang $site_name";
$about_lead = "$site_name dibina berdasarkan satu idea: keputusan dagangan harus berdasarkan maklumat yang jelas, bukan tekaan.";
$about_p1 = "Kami menggabungkan kecerdasan buatan dengan pengalaman pasaran sebenar untuk mengubah data yang kompleks dan bising menjadi isyarat yang mudah difahami dan diambil tindakan. Platform kami memantau pasaran siang dan malam, supaya anda tidak perlu.";
$about_p2 = "Sama ada anda membuat dagangan pertama anda atau telah aktif di pasaran selama bertahun-tahun, $site_name direka untuk bertemu dengan anda di mana anda berada — dengan alat yang terdiri daripada panduan mudah hingga analisis masa nyata yang termaju.";
$about_p3 = "Kami percaya bahawa teknologi harus menyokong pertimbangan anda, bukan menggantikannya. Setiap isyarat yang dihasilkan oleh $site_name bertujuan untuk memaklumkan keputusan yang masih sepenuhnya milik anda.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "Produk $site_name — Alat Analisis Pasaran AI";
$product_meta_description = "Terokai produk $site_name: analisis pasaran AI masa nyata, copy trading, kawalan risiko dan kepelbagaian automatik.";
$product_h1 = "Produk $site_name";
$product_lead = "Satu platform yang membaca pasaran untuk anda: analisis masa nyata, copy trading dan alat risiko fleksibel, direka untuk menjadikan keputusan dagangan lebih jelas.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "Tawaran $site_name — Mula Percuma";
$offer_meta_description = "Lihat apa yang termasuk dalam tawaran $site_name semasa: pendaftaran percuma, tiada komisen dagangan dan akses platform penuh.";
$offer_h1 = "Tawaran semasa kami";
$offer_lead = "Cipta akaun anda secara percuma dan buka kunci platform $site_name penuh &mdash; tiada yuran pendaftaran, tiada komisen dagangan.";
$offer_li1 = "Tiada kos untuk mendaftarkan akaun anda";
$offer_li2 = "Tiada komisen ke atas transaksi";
$offer_li3 = "Akses penuh kepada analisis pasaran AI masa nyata dan copy trading";
$offer_li4 = "Pengeluaran tersedia pada bila-bila masa, tanpa yuran tersembunyi";
$offer_li5 = "Sumber pendidikan mengenai kripto, Forex dan pelaburan termasuk";
$offer_note = "Ketersediaan mungkin berbeza mengikut wilayah. Semak <a class=\"link\" href=\"risk-warning.php\">Amaran Risiko</a> kami sebelum membiayai akaun.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Hubungi $site_name — Hubungi pasukan kami";
$contacts_meta_description = "Adakah anda mempunyai soalan mengenai akaun $site_name atau platform anda? Hubungi pasukan sokongan kami melalui e-mel atau hantar mesej kepada kami.";
$contacts_h1 = "Hubungi Kami";
$contacts_lead = "Soalan mengenai akaun anda, deposit, atau bagaimana platform berfungsi? Pasukan kami sedia membantu.";
$contacts_email_label = "E-mel";
$contacts_hours_label = "Waktu Sokongan";
$contacts_hours_value = "24/7";
$contacts_response_label = "Masa Tindak Balas Biasa";
$contacts_response_value = "Dalam masa 24 jam";
$contacts_form_title = "Hantar Mesej Kepada Kami";
$contacts_form_desc = "Tinggalkan butiran anda di bawah dan ahli pasukan kami akan menghubungi anda secara langsung.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "Dasar Privasi $site_name";
$privacy_meta_description = "Ketahui bagaimana $site_name mengumpul, menggunakan dan melindungi data peribadi anda di seluruh laman web dan platform.";
$privacy_sections = [
    [
        "title" => "1. Pengenalan",
        "body" => "Dasar Privasi ini menerangkan bagaimana $site_name (\"kami\") mengumpul, menggunakan dan melindungi data peribadi pelawat dan pengguna $site_domain (\"Laman Web\"). Dengan menggunakan Laman Web, anda bersetuju dengan amalan yang diterangkan di bawah.",
    ],
    [
        "title" => "2. Maklumat Yang Kami Kumpulkan",
        "body" => "Kami mungkin mengumpul maklumat yang anda berikan secara langsung, seperti nama, alamat e-mel dan nombor telefon anda semasa mendaftar atau menghantar borang, serta maklumat yang dikumpul secara automatik, termasuk alamat IP, jenis peranti dan pelayar, dan halaman yang dilihat pada Laman Web.",
    ],
    [
        "title" => "3. Bagaimana Kami Menggunakan Maklumat Anda",
        "body" => "Kami menggunakan maklumat yang dikumpul untuk mencipta dan menguruskan akaun anda, menjawab pertanyaan, menyediakan sokongan pelanggan, meningkatkan Laman Web dan perkhidmatan kami, dan, di mana dibenarkan, menghantar kemas kini mengenai produk dan tawaran. Anda boleh berhenti melanggan komunikasi pemasaran pada bila-bila masa.",
    ],
    [
        "title" => "4. Kuki dan Teknologi Penjejakan",
        "body" => "Laman Web menggunakan kuki dan teknologi serupa untuk mengingati keutamaan anda, mengekalkan status log masuk anda, dan memahami bagaimana pelawat menggunakan halaman kami. Anda boleh melumpuhkan kuki melalui tetapan pelayar anda, walaupun sesetengah ciri mungkin tidak berfungsi dengan betul.",
    ],
    [
        "title" => "5. Perkongsian Maklumat",
        "body" => "Kami tidak menjual data peribadi anda. Kami mungkin berkongsi maklumat dengan penyedia perkhidmatan yang dipercayai yang membantu kami mengendalikan Laman Web (seperti penyedia hosting atau analitik), atau apabila diperlukan oleh undang-undang, atau untuk melindungi hak undang-undang kami.",
    ],
    [
        "title" => "6. Keselamatan Data",
        "body" => "Kami menggunakan langkah teknikal dan organisasi yang munasabah untuk melindungi maklumat anda daripada akses, pengubahan atau kehilangan yang tidak dibenarkan. Tiada kaedah penghantaran atau penyimpanan yang benar-benar selamat dan kami tidak boleh menjamin keselamatan mutlak.",
    ],
    [
        "title" => "7. Hak dan Pilihan Anda",
        "body" => "Bergantung pada lokasi anda, anda mungkin mempunyai hak untuk mengakses, membetulkan atau meminta pemadaman data peribadi anda, dan membantah penggunaan tertentu daripadanya. Untuk menggunakan hak ini, hubungi kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi</a> kami.",
    ],
    [
        "title" => "8. Privasi Kanak-kanak",
        "body" => "Laman Web ini tidak ditujukan kepada individu di bawah umur 18 tahun, dan kami tidak dengan sengaja mengumpul data peribadi daripada kanak-kanak bawah umur. Jika anda percaya bahawa kanak-kanak bawah umur telah memberikan kami data peribadi, sila hubungi kami supaya kami boleh mengeluarkannya.",
    ],
    [
        "title" => "9. Perubahan pada Dasar Ini",
        "body" => "Kami mungkin mengemas kini Dasar Privasi ini dari semasa ke semasa. Sebarang perubahan akan disiarkan pada halaman ini dengan tarikh berkuat kuasa yang disemak. Kami menggalakkan anda menyemak halaman ini secara berkala.",
    ],
    [
        "title" => "10. Hubungi Kami",
        "body" => "Jika anda mempunyai soalan mengenai Dasar Privasi ini atau bagaimana maklumat anda dikendalikan, hubungi kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi</a> kami atau e-mel kami di info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "Terma Penggunaan $site_name";
$conditions_meta_description = "Semak Terma Penggunaan yang mengawal akses dan penggunaan laman web dan platform dagangan $site_name.";
$conditions_sections = [
    [
        "title" => "1. Penerimaan Terma",
        "body" => "Dengan mengakses atau menggunakan $site_domain (\"Laman Web\"), anda bersetuju untuk terikat dengan Terma Penggunaan ini. Jika anda tidak bersetuju dengan mana-mana bahagian terma ini, jangan gunakan Laman Web.",
    ],
    [
        "title" => "2. Kelayakan",
        "body" => "Anda mesti berumur sekurang-kurangnya 18 tahun dan mempunyai kapasiti undang-undang untuk menggunakan perkhidmatan berkaitan dagangan dalam bidang kuasa anda untuk menggunakan Laman Web. Dengan menggunakan Laman Web, anda mengesahkan bahawa anda memenuhi keperluan ini.",
    ],
    [
        "title" => "3. Penerangan Perkhidmatan",
        "body" => "$site_name menyediakan platform dalam talian dengan kandungan pendidikan, maklumat pasaran dan alat analisis dibantu AI. Tiada apa-apa pada Laman Web merupakan nasihat kewangan, pelaburan, cukai atau undang-undang, dan semua maklumat yang diberikan adalah untuk tujuan maklumat am sahaja.",
    ],
    [
        "title" => "4. Tanggungjawab Pengguna",
        "body" => "Anda bertanggungjawab untuk memberikan maklumat yang tepat semasa pendaftaran, untuk mengekalkan kerahsiaan kelayakan akaun anda, dan untuk semua aktiviti yang berlaku di bawah akaun anda.",
    ],
    [
        "title" => "5. Harta Intelek",
        "body" => "Semua kandungan pada Laman Web, termasuk teks, imej, logo dan perisian, adalah milik $site_name atau pemberi lesennya dan dilindungi oleh undang-undang harta intelek yang berkenaan. Anda tidak boleh menghasilkan semula atau mengedarkan kandungan ini tanpa kebenaran.",
    ],
    [
        "title" => "6. Tiada Nasihat Kewangan",
        "body" => "Kandungan pada Laman Web disediakan semata-mata untuk tujuan maklumat dan pendidikan dan tidak boleh ditafsirkan sebagai nasihat kewangan. Anda bertanggungjawab sepenuhnya atas keputusan dagangan anda sendiri dan harus berunding dengan penasihat kewangan bebas apabila perlu. Lihat <a class=\"link\" href=\"risk-warning.php\">Amaran Risiko</a> kami untuk mengetahui lebih lanjut.",
    ],
    [
        "title" => "7. Had Liabiliti",
        "body" => "Setakat yang dibenarkan oleh undang-undang, $site_name tidak akan bertanggungjawab atas sebarang kerosakan langsung, tidak langsung, sampingan atau berbangkit yang timbul daripada penggunaan anda, atau ketidakupayaan untuk menggunakan, Laman Web atau perkhidmatan pihak ketiga yang berkaitan.",
    ],
    [
        "title" => "8. Penamatan",
        "body" => "Kami berhak untuk menggantung atau menamatkan akses anda ke Laman Web mengikut budi bicara mutlak kami, tanpa notis, kerana kelakuan yang kami percaya melanggar Terma Penggunaan ini atau sebaliknya memudaratkan pengguna lain atau Laman Web.",
    ],
    [
        "title" => "9. Perubahan pada Terma Ini",
        "body" => "Kami mungkin menyemak semula Terma Penggunaan ini pada bila-bila masa. Penggunaan berterusan Laman Web selepas perubahan disiarkan merupakan penerimaan terma yang dikemas kini.",
    ],
    [
        "title" => "10. Hubungi Kami",
        "body" => "Soalan mengenai Terma Penggunaan ini boleh dihalakan kepada pasukan kami melalui <a class=\"link\" href=\"contacts.php\">halaman hubungi</a> atau melalui e-mel di info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "Amaran Risiko $site_name — Pendedahan Risiko Dagangan";
$risk_meta_description = "Baca amaran risiko $site_name sebelum berdagang: risiko pasaran kripto, leveraj, kecairan, keselamatan siber dan pertimbangan kawal selia.";
$risk_title = "Amaran Risiko";
$risk_intro = "Memahami risiko adalah langkah pertama ke arah dagangan yang yakin.";
$risk_ai_title = "Bagaimana sistem AI kami membantu dalam pengurusan risiko:";
$risk_ai_1_title = "Kecekapan Algoritma dan Dagangan Tanpa Emosi:";
$risk_ai_1_text = "Algoritma termaju menganalisis isyarat pasaran untuk melaksanakan transaksi secara objektif pada masa yang optimum.";
$risk_ai_2_title = "Strategi Didorong Data:";
$risk_ai_2_text = "Strategi berdasarkan corak pasaran yang disahkan dan analisis masa nyata, bukan tekaan.";
$risk_ai_3_title = "Tetapan Fleksibel dan Kawalan Penuh:";
$risk_ai_3_text = "Laraskan parameter risiko anda pada bila-bila masa. Jejaki semua baki dan transaksi secara telus pada papan pemuka anda, tanpa yuran tersembunyi dan tanpa sekatan pengeluaran.";
$risk_disclaimer = "<strong>Penafian:</strong> Dagangan sentiasa melibatkan risiko. Sistem automatik (termasuk AI) tidak menjamin keuntungan, boleh gagal disebabkan pepijat perisian atau peristiwa pasaran yang tidak dijangka, dan memerlukan penyeliaan pengguna. Prestasi lalu tidak menjamin hasil masa depan. Platform ini berfungsi semata-mata untuk tujuan maklumat dan pemasaran dan tidak menyediakan nasihat kewangan.";
$risk_s1_title = "1. Risiko Umum Pasaran Kripto";
$risk_s1_text = "Mata wang kripto adalah aset yang sangat tidak menentu dan spekulatif yang beroperasi 24/7 dengan penyeliaan kawal selia yang minimum di kebanyakan bidang kuasa.";
$risk_s1_li1 = "Nilai boleh turun naik secara mendadak dalam tempoh masa yang singkat, berpotensi membawa kepada kehilangan sepenuhnya modal yang dilaburkan.";
$risk_s1_li2 = "Nilai pasaran boleh terjejas dengan teruk oleh perubahan kawal selia, perkembangan teknologi, pelanggaran keselamatan atau peristiwa makroekonomi yang lebih luas.";
$risk_s1_li3 = "Sesetengah aset mungkin kehilangan nilainya sepenuhnya. Laburkan hanya dana yang anda mampu untuk hilang.";
$risk_s2_title = "2. Risiko Pelaksanaan, Kecairan dan Leveraj";
$risk_s2_li1_title = "Ketidaktentuan Pasaran dan Kecairan:";
$risk_s2_li1_text = "Pergerakan harga yang melampau (10-20%+ setiap hari) atau kecairan rendah (terutamanya pada syiling yang lebih kecil) boleh menyebabkan kelewatan, kegagalan platform dan gelinciran pelaksanaan yang teruk. Pesanan stop-loss mungkin tidak menjamin had kerugian dalam keadaan yang melampau.";
$risk_s2_li2_title = "Risiko Leveraj dan Margin:";
$risk_s2_li2_text = "Produk berleveraj menguatkan kedua-dua keuntungan dan kerugian, bermakna anda boleh kehilangan lebih daripada deposit asal anda. Kira-kira 70-80% akaun pelabur runcit kehilangan wang semasa berdagang produk berleveraj.";
$risk_s3_title = "3. Risiko Teknikal, Keselamatan Siber dan Pihak Ketiga";
$risk_s3_li1_title = "Faktor Teknikal:";
$risk_s3_li1_text = "Dagangan dalam talian membawa risiko yang wujud seperti kegagalan sambungan internet, pepijat perkakasan/perisian dan ketidaktersediaan perkhidmatan.";
$risk_s3_li2_title = "Keselamatan Siber:";
$risk_s3_li2_text = "Akaun kripto sering menjadi sasaran pancingan data, perisian hasad dan penggodaman. Transaksi tidak boleh diterbalikkan; kelayakan log masuk anda yang terjejas boleh membawa kepada kehilangan kekal.";
$risk_s3_li3_title = "Platform Pihak Ketiga:";
$risk_s3_li3_text = "Laman web ini mungkin menghubungkan pengguna dengan platform pihak ketiga. Kami tidak mengawal, menyokong atau menjamin keselamatan, operasi atau kesolvenan mereka. Sentiasa lakukan usaha wajar menyeluruh anda sendiri sebelum mendepositkan dana pada platform luaran.";
$risk_s4_title = "4. Peruntukan Kawal Selia, Cukai dan Akhir";
$risk_s4_li1_title = "Pematuhan Undang-undang dan Cukai:";
$risk_s4_li1_text = "Rangka kerja kawal selia berbeza dengan ketara dan berubah dengan cepat. Pengguna bertanggungjawab sepenuhnya untuk memastikan aktiviti dagangan mereka mematuhi undang-undang tempatan dan untuk memenuhi kewajipan cukai mereka sendiri.";
$risk_s4_li2_title = "Tiada Jaminan Keuntungan:";
$risk_s4_li2_text = "Tiada dagangan kripto yang \"selamat\" atau bebas risiko. Sebarang angka pulangan atau contoh prestasi yang diberikan adalah semata-mata hipotesis.";
$risk_s4_li3_title = "Kesesuaian:";
$risk_s4_li3_text = "Jika anda tidak memahami sepenuhnya risiko, bergantung pada dana penting, atau berdagang dengan wang yang dipinjam, dagangan kripto tidak sesuai untuk anda. Berunding dengan penasihat kewangan bebas yang berlesen jika ragu-ragu.";
$risk_contact = "<strong>Hubungi Kami:</strong> Untuk pertanyaan mengenai kenyataan ini, atau untuk menghantar pertanyaan, sila hubungi pasukan khidmat pelanggan rasmi kami melalui borang hubungi di laman web kami.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Pendaftaran | $site_name — Cipta Akaun Percuma Anda";
$sign_meta_description = "Cipta akaun $site_name percuma anda dalam beberapa minit dan mula berdagang dengan lebih bijak dengan analisis pasaran berkuasa AI.";
$sign_h1 = "Cipta Akaun Percuma Anda";
$sign_lead = "Sertai $site_name dalam beberapa minit. Isikan butiran anda di bawah untuk bermula.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Terima Kasih | $site_name";
$thanks_h1 = "Terima Kasih!";
$thanks_text = "Butiran anda telah diterima. Seorang ahli pasukan $site_name akan menghubungi anda tidak lama lagi untuk membantu anda bermula.";
$thanks_btn = "Kembali ke Utama";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Peta Laman | $site_name";
$sitemap_meta_description = "Lihat setiap halaman laman web $site_name, termasuk platform dagangan, tawaran, sokongan dan halaman undang-undang.";
$sitemap_h1 = "Peta Laman";
$sitemap_lead = "Setiap halaman $site_name di satu tempat.";

