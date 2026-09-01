<?php
require __DIR__ . '/../lang.php';
$site_lang = 'tr-TR';
$form_language = 'tr'; // matches this page's own language, not the offer's global default

// ============================================================
// TR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Resmi Web Sitesi | İşlem Platformu";
$home_meta_description = "$site_name, çevrimiçi işlemleri daha erişilebilir ve bilgilendirici hale getirmek için tasarlanmış gelişmiş piyasa araçları, gerçek zamanlı içgörüler ve pratik özelliklere sahip kullanıcı dostu bir işlem platformu sunar.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platformu";
$hero_subtitle = "Dünya çapında milyonlarca kişiyi dijital varlık yolculuklarında destekliyoruz";
$hero_badge_title = "Mutlu Üyeler";
$hero_badge_subtitle = "Milyonlarca kişi tarafından seviliyor";
$hero_rating_value = "4,9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Bugün İşlem Yapmaya Başlayın";
$form_desc = "Hamlenizi yapmaya hazır mısınız? Şimdi kaydolun ve finansal özgürlüğe giden ilk adımı atın. Sadece $app_price $app_currency ile başlayın — ilk günden itibaren her işlem aracına, gerçek zamanlı piyasa verilerine ve tam platform erişimine sahip olun.";
$form_fname_placeholder = "Ad";
$form_lname_placeholder = "Soyad";
$form_email_placeholder = "E-posta";
$form_btn_submit = "Kaydol";
$form_disclaimer_text = "Kişisel bilgilerinizi girip düğmeye tıklayarak, web sitesinin <a class=\"link\" href=\"privacy.php\">Gizlilik Politikası</a>'nı ve <a class=\"link\" href=\"conditions.php\">Şartlar &amp; Koşullar</a>'ını kabul etmiş olursunuz.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "GÜVENLİ";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Platformu Tanıyın";
$stats_title = "Daha akıllı işlem yapmaya hızlı bir giriş";
$stat_1_value = "154+";
$stat_1_label = "Kapsanan Ülke";
$stat_2_value = "29 Milyon";
$stat_2_label = "Küresel Yatırımcı";
$stat_3_value = "635+";
$stat_3_label = "Coin";
$stat_4_value = "3,26 Milyar $";
$stat_4_label = "24 Saatlik İşlem Hacmi";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Neden $site_name?";
$why_title = "Bizi Seçme Nedenleri";
$why_1_title = "Hızlı &amp; Kolay";
$why_1_text = "Tercih ettiğiniz kripto paraları saniyeler içinde alıp satın.";
$why_2_title = "Güvenli &amp; Korumalı";
$why_2_text = "Fonlarınızı ve verilerinizi güvende tutmak için en son teknolojiyi kullanıyoruz.";
$why_3_title = "Herkese Açık";
$why_3_text = "Platformumuzda 24/7, istediğiniz her yerde ve her zaman işlem yapın.";
$why_4_title = "Profesyonel Araçlar";
$why_4_text = "Basitten profesyonele kadar işlem özelliklerinin hepsine sahibiz.";
$why_5_title = "Trendler &amp; İçgörüler";
$why_5_text = "Uzmanlardan en son kripto haberlerini, içgörüleri ve trendleri edinin.";
$why_6_title = "7/24 Destek";
$why_6_text = "Dostane destek ekibimiz her zaman yardıma hazır.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "Nasıl Çalışır";
$how_title = "İşlem Yapmaya Başlamak için Kolay Adımlar";
$how_1_title = "Kaydol";
$how_1_text = "Bir hesap oluşturun ve dakikalar içinde işlem yapmaya başlayın.";
$how_1_btn = "İşlem Yapmaya Başla";
$how_2_title = "Fon Yatırın";
$how_2_text = "Tam işlem erişimini açmak için hesabınıza minimum $app_price $app_currency yatırın. Birden fazla ödeme yöntemi arasından seçim yapın ve portföyünüzü bugün büyütmeye başlayın.";
$how_2_note = "Fon ekleyin....";
$how_3_title = "İşlem Yapmaya Başla";
$how_3_text = "Piyasayı keşfedin ve kendi tarzınızda işlem yapın.";
$how_3_note = "Satın Al ve HODL Yap";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Hesap Makinesi";
$calc_title = "Ne kadar zaman ve potansiyeli boşa harcadığınızı görün";
$calc_volume_label = "Aylık İşlem Hacmi";
$calc_trades_label = "Haftalık İşlemler";
$calc_time_label = "Tasarruf Edebileceğiniz Zaman";
$calc_boost_label = "Potansiyel Hacim Artışı";
$calc_btn = "İşlem Yapmaya Başla";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Özellikler";
$features_title = "$site_name'in Gücü";
$feature_1_title = "Spot İşlem";
$feature_1_text = "İşlem potansiyelinizi profesyonel araçlarla en üst düzeye çıkarın.";
$feature_2_title = "Kripto Satın Al";
$feature_2_text = "Kartlar veya bankalar aracılığıyla kripto satın alın.";
$feature_3_title = "Kripto Türevleri";
$feature_3_text = "Kolay, gelişmiş vadeli işlem ticareti.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Servetinizi kolayca büyütün.";
$feature_5_title = "İşlem Botu";
$feature_5_text = "Siz uyurken bile daha yüksek kâr.";
$feature_6_title = "Marjinal İşlem";
$feature_6_text = "Kolayca borç alın, işlem yapın ve geri ödeyin.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "Kullanıcılarımız Ne Diyor";
$review_1_text = "Platform kullanımı çok kolay ve sahibi olduğumdan beri istikrarlı bir ilerleme gördüm. Ekibin bağlılığı ve taze fikirleri, bundan sonra neler olacağını merak etmemi sağlıyor!";
$review_1_role = "Yatırımcı";
$review_2_text = "$site_name, sorunsuz ve sezgisel bir işlem deneyimi sunuyor. Kripto satın almaya ve işlem yapmaya hemen başlayabildim. Arayüz kullanımı kolay ve işlem hızları mükemmel!";
$review_2_role = "Yeni Yatırımcı";
$review_3_text = "Kripto yatırımlarımı yönetmek için bu platforma güveniyorum. Güvenlik özellikleri bana güven veriyor ve para çekme veya yatırma konusunda hiçbir sorun yaşamadım. Kullandığım en güvenilir borsalardan biri.";
$review_3_role = "Profesyonel Yatırımcı";
$review_4_text = "Sorularım olduğunda, müşteri destek ekibi her zaman hızlı ve yardımcı oldu. Kullanıcılarını gerçekten önemsiyorlar ve her işlem deneyimini sorunsuz ve basit hale getiriyorlar.";
$review_4_role = "Deneyimli Yatırımcı";
$review_5_text = "Yeni başlayan biri olarak, $site_name'i kullanmayı çok kolay buldum. Gerçekten öne çıkan şey, daha deneyimli yatırımcılar için gelişmiş araçlar yelpazesi. Portföyünü oluşturmak isteyen herkes için sağlam bir seçenek!";
$review_5_role = "Topluluk Yatırımcısı";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "Sıkça Sorulan Sorular";
$faq_title = "Sıkça Sorulan Sorular";
$faq_q1 = "$site_name Nedir?";
$faq_a1 = "$site_name, kullanıcıların Bitcoin, Ethereum ve diğer popüler kripto paralar dahil geniş bir yelpazedeki coin'leri kolayca işlem yapabildikleri bir kripto borsasıdır.";
$faq_q2 = "Kripto İşlemleri için $site_name Ne Kadar Güvenli?";
$faq_a2 = "Platform, gelişmiş teknoloji ve Proof of Reserves aracılığıyla 1:1 varlık desteği yoluyla güvenlik sağlar.";
$faq_q3 = "Nasıl Para Yatırırım?";
$faq_a3 = "$site_name, Kripto Para Yatırma, Fiat Para Yatırma, P2P İşlem ve Tek Tıkla Satın Alma dahil birçok para yatırma seçeneği sunar.";
$faq_q4 = "$site_name'i Kullanmak için Deneyime İhtiyacım Var mı?";
$faq_a4 = "Hayır, hiçbir deneyime ihtiyacınız yok. Platformun kullanıcı dostu arayüzü, yeni başlayanlardan ileri düzey yatırımcılara kadar herkes için erişilebilir kılar.";
$faq_q5 = "Gizli ücretler veya masraflar var mı?";
$faq_a5 = "Hiç yok. Herhangi bir kayıt ücreti, abonelik maliyeti veya gizli ücret yoktur. Onaylamadan önce her zaman tam işlem tutarını görürsünüz. Gelir, kullanıcılardan para almaktan değil, premium özelliklerden ve borsa ortaklıklarından gelir.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Bugün İşlem Yapmaya Başlayın";
$cta_desc = "Hamlenizi yapmaya hazır mısınız? Şimdi kaydolun ve finansal bağımsızlığa giden ilk adımı atın.";
$cta_btn = "Kaydol";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "$site_name İşlem Platformunun Temel Özellikleri";
$table_1_label = "🤖 Platform Teknolojisi";
$table_1_val = "Gelişmiş AI İşlem Motoru";
$table_2_label = "💳 Fonlama Yöntemleri";
$table_2_val = "Büyük Kredi Kartları, Banka Havalesi, PayPal";
$table_3_label = "📱 Platform Erişimi";
$table_3_val = "Çoklu Cihaz Uyumluluğu";
$table_4_label = "🚀 Performans Oranı";
$table_4_val = "%85 Doğruluk";
$table_5_label = "📊 İşlem Araçları";
$table_5_val = "Hisse Senetleri, Forex, Emtialar, Değerli Metaller, CFD'ler, Kripto Paralar ve daha fazlası…";
$table_6_label = "✍️ Hesap Kurulumu";
$table_6_val = "Hızlı ve Verimli";
$table_7_label = "📞 Müşteri Desteği";
$table_7_val = "7/24 Profesyonel Yardım";

// Reviews summary card
$summary_title = "$site_name Değerlendirmeleri";
$summary_badge = "Güvenilir";
$summary_desc = "Sağlam otomasyon ve eğitim kaynaklarına sahip güçlü, kullanıcı dostu bir işlem platformu.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Akıllıca işlem yapın, hızlı büyüyün";
$footer_community_label = "Topluluk";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Ürün";
$footnav_offer = "Teklif";
$footnav_contacts = "Bize Ulaşın";
$footnav_faq = "Sıkça Sorulan Sorular";
$footnav_privacy = "Gizlilik Politikası";
$footnav_conditions = "Şartlar &amp; Koşullar";
$footnav_risk = "Risk Uyarısı";
$footer_disclaimer = "$site_name, ziyaretçilerin işlem, yatırım ve dijital finansal ürünleri daha iyi anlamalarına yardımcı olmak için eğitim kaynakları ve piyasayla ilgili materyaller paylaşmaktadır. Piyasa yorumları, varlık fiyatları, grafikler, kılavuzlar ve analitik içerik gibi web sitesinde sunulan bilgiler, genel bilgilendirme amaçları için sağlanır ve finansal, yatırım, vergi veya hukuki tavsiye teşkil etmez. Doğru ve ilgili bilgileri korumak için makul çabalar gösterilse de, $site_name içeriğin eksiksizliği, doğruluğu veya güncelliği konusunda hiçbir garanti vermez ve kullanımından kaynaklanan kararlar veya kayıplardan sorumlu tutulamaz.<br><br>Finansal piyasalara katılım doğal riskler taşır. Kripto para, Forex, CFD'ler, hisse senetleri ve diğer işlem araçları önemli fiyat dalgalanmaları yaşayabilir ve kayıplar meydana gelebilir. Bireysel koşullar ve risk toleransı değişkenlik gösterdiğinden, kullanıcıların kendi araştırmalarını yapmaları ve fon taahhüt etmeden önce nitelikli bir finans uzmanından tavsiye almayı düşünmeleri gerekir. Kaybetmeyi göze alamayacağınız parayla asla işlem yapmayın.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_role = "İşlem Danışmanı";
$quiz_text_welcome = "Merhaba! Ben Maya, kişisel işlem danışmanınız. Sizin için en iyi planı bulmak için birkaç dakikanız var mı?";
$quiz_text_q1 = "Daha önce kripto para işlemi yaptınız mı?";
$quiz_text_a1_yes = "Evet, deneyimim var";
$quiz_text_a1_no = "Hayır, yeni başlıyorum";
$quiz_text_q2 = "Harika! Planınızı kişiselleştirebilmem için adınız nedir?";
$quiz_text_q3 = "İşlem yapmaktaki asıl amacınız nedir?";
$quiz_text_a3_yes = "Uzun vadeli servet oluşturmak";
$quiz_text_a3_no = "Kısa vadeli gelir elde etmek";
$quiz_text_q4 = "Ne kadarla başlamak istiyorsunuz?";
$quiz_text_a4_1 = "$$app_price altı";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "$1000 üzeri";
$quiz_text_q5 = "Mükemmel. Şimdi sizin için ücretsiz bir hesap açmamı ister misiniz?";
$quiz_text_a5_yes = "Evet, hadi yapalım";
$quiz_text_a5_no = "Şu an değil";
$quiz_text_loader = "En iyi planınız bulunuyor...";
$quiz_text_final_ttl = "Her şey hazır!";
$quiz_text_processing = "Bilgileriniz gönderiliyor...";
$quiz_text_typing = "yazıyor...";
$quiz_placeholder_fname = "Ad";
$quiz_placeholder_lname = "Soyad";
$quiz_placeholder_email = "E-posta";
$quiz_btn_submit = "Ücretsiz Hesabımı Al";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risk Uyarısı — İşlem Riski Açıklaması";
$risk_meta_description = "İşlem yapmadan önce $site_name risk uyarısını okuyun: kripto para piyasası riskleri, kaldıraç, likidite, siber güvenlik ve düzenleyici hususlar.";
$risk_title = "Risk Uyarısı";
$risk_intro = "Riskleri anlamak, güvenli işlem yapmanın ilk adımıdır.";
$risk_ai_title = "AI Sistemimiz Riski Yönetmeye Nasıl Yardımcı Olur:";
$risk_ai_1_title = "Algoritmik Verimlilik &amp; Duygusuz İşlem:";
$risk_ai_1_text = "Gelişmiş algoritmalar, işlemleri en uygun anlarda nesnel olarak yürütmek için piyasa sinyallerini analiz eder.";
$risk_ai_2_title = "Veri Odaklı Stratejiler:";
$risk_ai_2_text = "Stratejiler, tahminlerden ziyade doğrulanmış piyasa kalıplarına ve gerçek zamanlı analize dayanmaktadır.";
$risk_ai_3_title = "Esnek Ayarlar &amp; Tam Kontrol:";
$risk_ai_3_text = "Risk parametrelerinizi istediğiniz zaman ayarlayın. Gizli ücretler ve kısıtlama olmadan para çekme ile tüm bakiyelerinizi ve işlemlerinizi kontrol panelinizde şeffaf bir şekilde takip edin.";
$risk_disclaimer = "<strong>Feragatname:</strong> İşlem yapmak her zaman risk taşır. Otomatik sistemler (AI dahil) kâr garanti etmez, yazılım hataları veya beklenmedik piyasa olayları nedeniyle başarısız olabilir ve kullanıcı izlemesi gerektirir. Geçmiş performans, gelecekteki sonuçların bir göstergesi değildir. Bu platform yalnızca bilgilendirme ve pazarlama amaçlarına hizmet eder ve finansal tavsiye vermez.";
$risk_s1_title = "1. Genel &amp; Kripto Para Piyasası Riskleri";
$risk_s1_text = "Kripto paralar, çoğu yargı bölgesinde minimum düzenleyici gözetimle 7/24 çalışan, oldukça değişken, spekülatif varlıklardır.";
$risk_s1_li1 = "Değerler kısa süreler içinde dramatik şekilde dalgalanabilir ve potansiyel olarak yatırılan sermayenin tamamen kaybedilmesine yol açabilir.";
$risk_s1_li2 = "Piyasa değerleri, düzenleyici güncellemelerden, teknik gelişmelerden, güvenlik ihlallerinden veya daha geniş makroekonomik olaylardan büyük ölçüde etkilenebilir.";
$risk_s1_li3 = "Bazı varlıklar tüm değerlerini tamamen kaybedebilir. Yalnızca kaybetmeyi göze alabileceğiniz fonları yatırın.";
$risk_s2_title = "2. Yürütme, Likidite &amp; Kaldıraç Riskleri";
$risk_s2_li1_title = "Piyasa Oynaklığı &amp; Likidite:";
$risk_s2_li1_text = "Aşırı fiyat hareketleri (günlük %10-20+) veya düşük likidite (özellikle küçük coin'lerde) gecikmelere, platform kesintilerine ve ciddi yürütme kaymasına yol açabilir. Stop-loss emirleri, aşırı koşullar altında kayıp limitlerini garanti edemez.";
$risk_s2_li2_title = "Kaldıraç &amp; Marjin Riskleri:";
$risk_s2_li2_text = "Kaldıraçlı ürünler hem kazançları hem de kayıpları artırır; bu, ilk yatırımınızdan daha fazlasını kaybedebileceğiniz anlamına gelir. <em>Perakende yatırımcı hesaplarının yaklaşık %70-80'i kaldıraçlı ürünlerle işlem yaparken para kaybediyor.</em>";
$risk_s3_title = "3. Teknik, Siber Güvenlik &amp; Üçüncü Taraf Riskleri";
$risk_s3_li1_title = "Teknik Faktörler:";
$risk_s3_li1_text = "Çevrimiçi işlem doğası gereği internet bağlantısı kesintileri, donanım/yazılım hataları ve hizmetin kullanılamaması gibi riskler içerir.";
$risk_s3_li2_title = "Siber Güvenlik:";
$risk_s3_li2_text = "Kripto para hesapları, kimlik avı, kötü amaçlı yazılım ve saldırıların sık hedefidir. İşlemler geri alınamaz; kimlik bilgilerinizin ele geçirilmesi kalıcı kayba yol açabilir.";
$risk_s3_li3_title = "Üçüncü Taraf Platformları:";
$risk_s3_li3_text = "Bu web sitesi kullanıcıları üçüncü taraf platformlara bağlayabilir. Bu platformların güvenliğini, operasyonlarını veya ödeme gücünü kontrol etmiyor, onaylamıyor veya garanti etmiyoruz. Harici platformlara fon yatırmadan önce her zaman kendi kapsamlı durum tespitinizi yapın.";
$risk_s4_title = "4. Düzenleyici, Vergi &amp; Nihai Hükümler";
$risk_s4_li1_title = "Yasal Uyumluluk &amp; Vergiler:";
$risk_s4_li1_text = "Düzenleyici çerçeveler büyük ölçüde farklılık gösterir ve hızla değişir. Kullanıcılar, işlem faaliyetlerinin yerel yasalara uymasını sağlamaktan ve kendi vergi yükümlülüklerini yerine getirmekten yalnızca kendileri sorumludur.";
$risk_s4_li2_title = "Kâr Garantisi Yoktur:";
$risk_s4_li2_text = "\"Güvenli\" veya risksiz kripto işlemi diye bir şey yoktur. Sağlanan herhangi bir getiri rakamı veya performans örneği tamamen varsayımsaldır.";
$risk_s4_li3_title = "Uygunluk:";
$risk_s4_li3_text = "Riskleri tam olarak anlamıyorsanız, temel fonlara güveniyorsanız veya borç para ile işlem yapıyorsanız, kripto işlemi sizin için uygun değildir. Emin değilseniz bağımsız, lisanslı bir finansal danışmana danışın.";
$risk_contact = "<strong>İletişim:</strong> Bu beyanla ilgili herhangi bir sorunuz varsa veya bir sorgu göndermek istiyorsanız, lütfen web sitemizdeki iletişim formu aracılığıyla resmi müşteri destek ekibimizle iletişime geçin.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Ana Sayfa";
$bc_product = "Ürün";
$bc_offer = "Teklif";
$bc_contacts = "Bize Ulaşın";
$bc_faq = "Sıkça Sorulan Sorular";
$bc_privacy = "Gizlilik Politikası";
$bc_conditions = "Şartlar &amp; Koşullar";
$bc_risk = "Risk Uyarısı";
$bc_sign = "Kaydol";
$bc_sitemap = "Site Haritası";
$bc_thanks = "Teşekkürler";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Ürünü — İşlem Araçları &amp; Platform Özellikleri";
$product_meta_description = "$site_name ürününü keşfedin: spot işlem, kripto türevleri, bir işlem botu, marjinal işlem ve daha fazlası, hepsi hızlı ve güvenli bir platform üzerine inşa edilmiştir.";
$product_h1 = "$site_name İşlem Ürünü";
$product_lead = "Tek bir platform, bir yatırımcının ihtiyaç duyduğu her araç: ilk spot işleminizden otomatik stratejilere ve marjin pozisyonlarına kadar, $site_name deneyimi hızlı, güvenli ve anlaşılması kolay tutar.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Teklifi — $$app_price'dan İşlem Yapmaya Başlayın";
$offer_meta_description = "Mevcut $site_name teklifine neler dahil olduğunu görün: düşük bir $$app_price minimum yatırım, tam platform erişimi ve gizli ücret yok.";
$offer_h1 = "Mevcut Teklifimiz";
$offer_lead = "Yalnızca <strong>$$app_price $app_currency</strong> ile başlayın ve ilk günden itibaren tam $site_name platformunun kilidini açın &mdash; her araç, her piyasa, gizli maliyet yok.";
$offer_li1 = "Hesabınızı etkinleştirmek için sadece $$app_price $app_currency minimum yatırım";
$offer_li2 = "Spot işlem, türevler, marjin ve işlem botuna tam erişim";
$offer_li3 = "Kartlar ve banka havalesi dahil birden fazla fonlama yöntemi";
$offer_li4 = "Kayıt ücreti yok, abonelik maliyeti yok, gizli ücret yok";
$offer_li5 = "Başlarken 7/24 müşteri desteği";
$offer_note = "Yatırım tutarları ve mevcut ödeme yöntemleri bölgeye göre değişebilir. Bir hesabı fonlamadan önce <a class=\"link\" href=\"risk-warning.php\">Risk Uyarımızı</a> inceleyin.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "$site_name ile İletişime Geçin — Ekibimizle İletişime Geçin";
$contacts_meta_description = "$site_name hesabınız veya platform hakkında bir sorunuz mu var? Destek ekibimize e-posta yoluyla ulaşın veya bize bir mesaj gönderin, size geri döneceğiz.";
$contacts_h1 = "Bize Ulaşın";
$contacts_lead = "Hesabınız, bir yatırım veya platformun nasıl çalıştığı hakkında sorularınız mı var? Ekibimiz yardım etmek için burada.";
$contacts_email_label = "E-posta";
$contacts_hours_label = "Destek Saatleri";
$contacts_hours_value = "7/24";
$contacts_response_label = "Tipik Yanıt Süresi";
$contacts_response_value = "24 saat içinde";
$contacts_form_title = "Bize Mesaj Gönderin";
$contacts_form_desc = "Bilgilerinizi aşağıya bırakın, ekibimizin bir üyesi doğrudan sizinle iletişime geçecektir.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name Sıkça Sorulan Sorular";
$faq_meta_description = "$site_name hesabı oluşturma, para yatırma, platform güvenliği ve ücretler hakkındaki en yaygın soruların yanıtları.";
$faq_page_lead = "İşlem yapmaya başlamadan önce bilmeniz gereken her şey. Yanıtınızı bulamadınız mı? <a class=\"link\" href=\"contacts.php\">Ekibimizle iletişime geçin</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Gizlilik Politikası";
$privacy_meta_description = "$site_name'in web sitesi ve platform genelinde kişisel bilgilerinizi nasıl topladığını, kullandığını ve koruduğunu öğrenin.";
$privacy_sections = [
    [
        "title" => "1. Giriş",
        "body" => "Bu Gizlilik Politikası, $site_name'in (\"biz\") $site_domain (\"Web Sitesi\") ziyaretçilerinin ve kullanıcılarının kişisel bilgilerini nasıl topladığını, kullandığını ve koruduğunu açıklar. Web Sitesi'ni kullanarak, aşağıda açıklanan uygulamaları kabul etmiş olursunuz.",
    ],
    [
        "title" => "2. Topladığımız Bilgiler",
        "body" => "Kaydolduğunuzda veya bir form gönderdiğinizde adınız, e-posta adresiniz ve telefon numaranız gibi doğrudan sağladığınız bilgileri ve IP adresiniz, cihaz ve tarayıcı türünüz ile Web Sitesi'nde görüntülenen sayfalar dahil otomatik olarak toplanan bilgileri toplayabiliriz.",
    ],
    [
        "title" => "3. Bilgilerinizi Nasıl Kullanıyoruz",
        "body" => "Toplanan bilgileri hesabınızı oluşturmak ve yönetmek, sorulara yanıt vermek, müşteri desteği sağlamak, Web Sitesi'ni ve hizmetlerimizi iyileştirmek ve izin verildiği yerlerde ürünler ve teklifler hakkında güncellemeler göndermek için kullanırız. İstediğiniz zaman pazarlama iletişimlerinden çıkabilirsiniz.",
    ],
    [
        "title" => "4. Çerezler &amp; İzleme Teknolojileri",
        "body" => "Web Sitesi, tercihlerinizi hatırlamak, oturumunuzu açık tutmak ve ziyaretçilerin sayfalarımızı nasıl kullandığını anlamak için çerezler ve benzer teknolojiler kullanır. Çerezleri tarayıcı ayarlarınız aracılığıyla devre dışı bırakabilirsiniz, ancak bunun sonucunda bazı özellikler doğru şekilde çalışmayabilir.",
    ],
    [
        "title" => "5. Bilgi Paylaşımı",
        "body" => "Kişisel bilgilerinizi satmıyoruz. Web Sitesi'ni işletmemize yardımcı olan güvenilir hizmet sağlayıcılarla (barındırma veya analiz sağlayıcıları gibi) veya yasa gereği veya yasal haklarımızı korumak için bilgi paylaşabiliriz.",
    ],
    [
        "title" => "6. Veri Güvenliği",
        "body" => "Bilgilerinizi yetkisiz erişime, değişikliğe veya kayba karşı korumak için makul teknik ve organizasyonel önlemler uyguluyoruz. Hiçbir iletim veya depolama yöntemi tamamen güvenli değildir ve mutlak güvenliği garanti edemeyiz.",
    ],
    [
        "title" => "7. Haklarınız &amp; Seçenekleriniz",
        "body" => "Konumunuza bağlı olarak, kişisel bilgilerinize erişme, düzeltme veya silinmesini talep etme ve belirli kullanımlarına itiraz etme hakkına sahip olabilirsiniz. Bu hakları kullanmak için lütfen <a class=\"link\" href=\"contacts.php\">iletişim sayfamız</a> aracılığıyla bize ulaşın.",
    ],
    [
        "title" => "8. Çocukların Gizliliği",
        "body" => "Web Sitesi, 18 yaşın altındaki kişilere yönelik değildir ve reşit olmayanlardan bilerek kişisel bilgi toplamıyoruz. Reşit olmayan birinin bize kişisel bilgi verdiğini düşünüyorsanız, lütfen kaldırabilmemiz için bizimle iletişime geçin.",
    ],
    [
        "title" => "9. Bu Politikadaki Değişiklikler",
        "body" => "Bu Gizlilik Politikasını zaman zaman güncelleyebiliriz. Herhangi bir değişiklik, revize edilmiş bir yürürlük tarihiyle bu sayfada yayınlanacaktır. Bu sayfayı periyodik olarak gözden geçirmenizi öneririz.",
    ],
    [
        "title" => "10. Bize Ulaşın",
        "body" => "Bu Gizlilik Politikası veya bilgilerinizin nasıl işlendiği hakkında sorularınız varsa, lütfen <a class=\"link\" href=\"contacts.php\">iletişim sayfamız</a> aracılığıyla bize ulaşın veya info@$site_domain adresinden bize e-posta gönderin.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Şartlar &amp; Koşullar";
$conditions_meta_description = "$site_name web sitesine ve işlem platformuna erişimi ve bunların kullanımını düzenleyen Şartlar &amp; Koşulları inceleyin.";
$conditions_sections = [
    [
        "title" => "1. Şartların Kabulü",
        "body" => "$site_domain'e (\"Web Sitesi\") erişerek veya kullanarak, bu Şartlar &amp; Koşullar ile bağlı kalmayı kabul edersiniz. Bu şartların herhangi bir bölümünü kabul etmiyorsanız, lütfen Web Sitesi'ni kullanmayın.",
    ],
    [
        "title" => "2. Uygunluk",
        "body" => "Web Sitesi'ni kullanmak için en az 18 yaşında olmalı ve yargı bölgenizde işlemle ilgili hizmetleri kullanmaya yasal olarak izniniz olmalıdır. Web Sitesi'ni kullanarak, bu gereksinimleri karşıladığınızı onaylarsınız.",
    ],
    [
        "title" => "3. Hizmet Açıklaması",
        "body" => "$site_name, eğitim içeriği, piyasa bilgileri ve işlem araçları içeren çevrimiçi bir platform sağlar. Web Sitesi'ndeki hiçbir şey finansal, yatırım, vergi veya hukuki tavsiye teşkil etmez ve sağlanan herhangi bir bilgi yalnızca genel bilgilendirme amaçlıdır.",
    ],
    [
        "title" => "4. Kullanıcı Sorumlulukları",
        "body" => "Kaydolurken doğru bilgi sağlamaktan, hesap kimlik bilgilerinizin gizliliğini korumaktan ve hesabınız altında gerçekleşen tüm faaliyetlerden sorumlusunuz.",
    ],
    [
        "title" => "5. Fikri Mülkiyet",
        "body" => "Metin, grafikler, logolar ve yazılım dahil Web Sitesi'ndeki tüm içerik, $site_name'in veya lisans verenlerinin mülkiyetindedir ve geçerli fikri mülkiyet yasalarıyla korunmaktadır. Bu içeriği izin olmadan çoğaltamaz veya dağıtamazsınız.",
    ],
    [
        "title" => "6. Finansal Tavsiye Değildir",
        "body" => "Web Sitesi'ndeki içerik yalnızca bilgilendirme ve eğitim amaçlıdır ve finansal tavsiye olarak yorumlanmamalıdır. Kendi işlem kararlarınızdan yalnızca siz sorumlusunuz ve gerekirse bağımsız bir finansal danışmana danışmalısınız. Daha fazla bilgi için <a class=\"link\" href=\"risk-warning.php\">Risk Uyarımıza</a> bakın.",
    ],
    [
        "title" => "7. Sorumluluğun Sınırlandırılması",
        "body" => "Yasaların izin verdiği azami ölçüde, $site_name Web Sitesi'ni veya bağlantılı herhangi bir üçüncü taraf hizmetini kullanmanızdan veya kullanamamanızdan kaynaklanan doğrudan, dolaylı, arızi veya sonuç olarak ortaya çıkan zararlardan sorumlu olmayacaktır.",
    ],
    [
        "title" => "8. Fesih",
        "body" => "Bu Şartlar &amp; Koşullar'ı ihlal ettiğine veya diğer kullanıcılara veya Web Sitesi'ne başka şekilde zarar verdiğine inandığımız davranışlar için, bildirimde bulunmaksızın, kendi takdirimize bağlı olarak Web Sitesi'ne erişiminizi askıya alma veya sonlandırma hakkını saklı tutarız.",
    ],
    [
        "title" => "9. Bu Şartlardaki Değişiklikler",
        "body" => "Bu Şartlar &amp; Koşullar'ı istediğimiz zaman revize edebiliriz. Değişiklikler yayınlandıktan sonra Web Sitesi'ni kullanmaya devam etmeniz, güncellenmiş şartların kabulü anlamına gelir.",
    ],
    [
        "title" => "10. İletişim",
        "body" => "Bu Şartlar &amp; Koşullar hakkındaki sorular <a class=\"link\" href=\"contacts.php\">iletişim sayfası</a> aracılığıyla veya info@$site_domain adresine e-posta göndererek ekibimize yöneltilebilir.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Kaydol | $site_name — Ücretsiz Hesabınızı Oluşturun";
$sign_meta_description = "Dakikalar içinde ücretsiz $site_name hesabınızı oluşturun ve sadece $$app_price $app_currency ile işlem yapmaya başlayın.";
$sign_h1 = "Ücretsiz Hesabınızı Oluşturun";
$sign_lead = "Birkaç dakikada $site_name'e katılın. Başlamak için aşağıya bilgilerinizi girin.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Teşekkürler | $site_name";
$thanks_h1 = "Teşekkürler!";
$thanks_text = "Bilgileriniz alındı. $site_name ekibinin bir üyesi başlamanıza yardımcı olmak için kısa süre içinde sizinle iletişime geçecek.";
$thanks_btn = "Ana Sayfaya Dön";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Site Haritası | $site_name";
$sitemap_meta_description = "İşlem platformu, teklif, destek ve yasal sayfalar dahil $site_name web sitesindeki her sayfaya göz atın.";
$sitemap_h1 = "Site Haritası";
$sitemap_lead = "$site_name'deki her sayfa tek bir yerde.";

