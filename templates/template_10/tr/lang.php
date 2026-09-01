<?php
require __DIR__ . '/../lang.php';
$site_lang = 'tr-TR';
$form_language = 'tr'; // matches this page's own language, not the offer's global default

// ============================================================
// TR TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Resmi Web Sitesi | Ticaret Platformu";
$home_meta_description = "$site_name, gelişmiş piyasa araçları, gerçek zamanlı içgörüler ve çevrimiçi ticareti daha erişilebilir ve bilinçli hale getiren pratik özelliklerle kullanıcı dostu bir ticaret platformu sunar.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Hakkımızda";
$nav_contacts = "İletişim";
$nav_login = "Giriş Yap";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Canlı";
$activity_suffix = "Az önce katıldı";
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
$form_title = "Şimdi Başlayın";
$form_fname_placeholder = "Ad Soyad";
$form_lname_placeholder = "Soyad";
$form_email_placeholder = "E-posta adresi";
$form_btn_submit = "Hesap Oluştur";
$form_disclaimer_text = "* Düğmeye tıklayarak <a class=\"link\" href=\"privacy.php\">Gizlilik Politikamızı</a> ve <a class=\"link\" href=\"conditions.php\">Kullanım Şartlarımızı</a> kabul etmiş olursunuz.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "GÜVENLİ";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: Piyasayı daha net okumak için tasarlanmış yapay zeka";
$s1_subtitle = "Teknoloji odaklı yatırım stratejisi";
$s1_quote = "$site_name, deneyiminiz olsun ya da olmasın, piyasalarla çalışmayı kolaylaştırmak için oluşturuldu. Platform, karmaşık verileri net, uygulanabilir kararlara dönüştürmek için yapay zeka kullanır ve her senaryoda daha fazla güvenle işlem yapmanızı sağlar.";
$s1_p1 = "Sistem, muazzam miktarda bilgiyi gerçek zamanlı olarak inceler: değişiklikleri tespit eder, kalıpları tanır ve piyasa sinyallerine hızla tepki verir. Bu size mevcut bağlam hakkında net bir resim sunar, böylece karmaşık analizlere dalmadan fırsatları tespit edebilirsiniz.";
$s1_p2 = "7/24 izleme, kullanıcı dostu bir arayüz ve yüksek düzeyde koruma, deneyimi rahat ve güvenilir kılar. Her şey, teknik tarafa değil sonuçlara odaklanabilmeniz için tasarlanmıştır.";
$s1_p3 = "Kopya ticaret özelliği ayrıca size daha deneyimli tüccarların stratejilerine erişim sağlar. Hareketlerini takip edebilir ve kanıtlanmış yaklaşımları kendi ticaretinize uygulayarak profesyonel yargıyı otomasyonla birleştirebilirsiniz.";
$s1_cta = "Hesap Oluştur";
$s1_img_alt = "$site_name dijital finans";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Fazladan gürültü olmadan hassas piyasa analizi";
$s2_intro = "$site_name, piyasayı sürekli izlemek ve değişiklikleri hızla tespit etmek için yapay zeka kullanır. Sistem muazzam miktarda veriyi işler ve sizi gereksiz bilgilerle boğmadan yalnızca ilgili sinyalleri gösterir.";
$s2_item1_title = "Beklemeden piyasa tepkisi";
$s2_item1_text = "Platform, hareketleri erken aşamalarında tanımlar: momentum, tersine dönüşler ve trend değişiklikleri. Neler olduğunu anında görürsünüz ve doğru zamanda harekete geçebilirsiniz.";
$s2_item2_title = "Tahmin yerine net bir okuma";
$s2_item2_text = "Karmaşık grafikler veya tahminler yok. $site_name önemli olanı vurgular, durumun net bir özetini sunarak sezgiyle değil verilerle karar vermenizi sağlar.";
$s2_item3_title = "Kontrol ve koruma";
$s2_item3_text = "Verileriniz korunur, erişim kontrol edilir ve işlemler güvenli kanallardan akar. Bu, teknik risk yerine piyasaya odaklanmanızı sağlar.";
$s2_img_alt = "$site_name kripto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Tüccarlar için net zeka";
$s3_card1_title = "$site_name kullanıcı gizliliğine ve kontrolüne saygı gösterir";
$s3_card1_text = "$site_name, bilgileri tam şeffaflık ve dürüstlükle ele alır. Kişisel verilerinizi kötüye kullanmaz. Bu platformda hiçbir işlem veya emir kaydedilmez.";
$s3_card2_title = "Daha iyi kararlar için net bir analiz ortamı";
$s3_card2_text = "$site_name, yapay zekanın insan yargısını değiştirmek yerine güçlendirdiği teknolojik bir alan olarak işlev görür. Bu araçlar, piyasa değişimlerini anlamayı, stratejileri karşılaştırmayı ve varlık davranışını incelemeyi kolaylaştırır.";
$s3_card3_title = "Piyasa görüşünüzü keskinleştiren yapay zeka araçları";
$s3_card3_text = "Analiz asla durmaz. $site_name kripto ortamını gözlemler ve ilgili bir hareket ortaya çıkar çıkmaz gerçek zamanlı bildirimler gönderir.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Duygusuz ve hatasız keskin analiz";
$s4_quote = "$site_name, karmaşık piyasa verilerini düzenli, okunması kolay bilgilere dönüştürür, gereksiz gürültüyü ortadan kaldırır ve gerçekten önemli olan sinyallere odaklanmanıza yardımcı olur. Bu, bir durumu daha erken anlamanızı ve duyguların kontrolü ele geçirmesine izin vermeden karar vermenizi sağlar.";
$s4_p1 = "Sistem, sonuçlarını yeni verilerle sürekli günceller. Gecikmeli göstergeler yerine, piyasa değişikliklerine gerçek zamanlı olarak tepki veren uyarlanabilir modeller kullanır. Bu, her zaman güncel bir görünümle çalıştığınız ve gerçekten önemli olduğunda daha hızlı hareket edebileceğiniz anlamına gelir.";
$s4_img_alt = "$site_name yapay zeka";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Hassas, zamanında kararlar için $site_name yapay zekasını kullanın";
$s5_quote = "$site_name piyasayı gerçek zamanlı olarak analiz eder ve hareketin ve fırsatların nerede olduğunu size anında gösterir. Sistem verileri sizin için işler, hazır sinyaller sunar: ne zaman girileceği, ne zaman çıkılacağı ve nelere dikkat edileceği.";
$s5_p1 = "Bütün gün grafiklere bakmanıza gerek yok. Platform değişiklikleri kendisi tespit eder ve piyasaya hızla tepki verir, böylece önemli anları kaçırmazsınız.";
$s5_p2 = "Algoritmalar 7/24 çalışır, ortaya çıkar çıkmaz yeni fırsatları belirler. Gecikme veya bilgi yükü olmadan güncel bilgiler alırsınız.";
$s5_p3 = "Aynı zamanda güvenlik yüksek düzeyde kalır: veri koruması, güvenli erişim ve ticaret kontrolü. $site_name hem yeni başlayanlar hem de aktif tüccarlar için uygundur — kararlar sizin kalır, ancak sağlam bir analitik temelle desteklenir.";
$s5_img_alt = "$site_name finansal otomasyon";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Tutarlı ticaret organize bir sistemle başlar";
$s6_p1 = "$site_name, piyasayla çalışmanıza yapı kazandırmanıza yardımcı olur. Platform net bir çerçeve oluşturur: hedeflerinizi ve risk seviyenizi siz belirlersiniz, sistem analizini tarzınıza uyarlar — kaos ve aşırı yük olmadan.";
$s6_p2 = "7/24 analiz, veri akışını basit, anlaşılır sinyallere dönüştürür. Sadece önemli olanı görürsünüz: hareketin nerede olduğunu, nerede girmeye değer olduğunu ve ne zaman beklemenin daha iyi olduğunu. Zaman içinde algoritmalar daha keskinleşir ve piyasaya uyum sağlar.";
$s6_item1_title = "Temponuzu seçin: hızlı ticaret veya uzun vadeli bir yaklaşım";
$s6_item1_text = "$site_name farklı stratejileri destekler. Aktif ticaret için sistem giriş noktalarını ve fiyat hareketlerini işaretler. Uzun vadeli bir yaklaşım için trend ve riski göz önünde bulundurarak pozisyonları sürdürmenize yardımcı olur.";
$s6_item2_title = "Tahmin olmadan giriş noktaları";
$s6_item2_text = "Platform, piyasanın en aktif olduğu yeri gösterir. Bu, doğaçlama yapmadan daha fazla güvenle girmenize ve zamanında çıkmanıza yardımcı olur.";
$s6_item3_title = "Başından itibaren risk yönetimi";
$s6_item3_text = "Olası senaryoları önceden görebilirsiniz: riskin daha düşük ve potansiyelin daha yüksek olduğu yerler. Bu, hareket başlamadan önce işlemleri planlamanızı sağlar.";
$s6_item4_title = "Kullanıma hazır analiz";
$s6_item4_text = "$site_name sizi karmaşık terminolojiyle boğmaz. Daha hızlı ve daha fazla güvenle karar vermenize yardımcı olmak için tasarlanmış net, doğrudan kullanılabilir bilgiler alırsınız.";
$s6_cta = "Şimdi Başlayın";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "$site_name ile hassas kararlar için basit araçlar";
$s7_quote = "$site_name, piyasada işlem yapmak için ihtiyacınız olan her şeyi sunar — teknik jargon veya bilgi yükü olmadan. Platform, fiyat hareketlerini, trendleri ve olası giriş noktalarını kendisi analiz eder ve yalnızca gerçekten önemli olanı gösterir.";
$s7_point1 = "Sistem, piyasanın ne zaman dönebileceğini, güçlü hareketlerin nerede ortaya çıktığını ve hangi anların girmek veya çıkmak için en iyi olduğunu tespit etmenize yardımcı olur. Her sinyal önceden işlenmiş olarak gelir — karmaşık göstergelerde ustalaşmanıza gerek yoktur.";
$s7_point2 = "Ayrıca kopya ticaret de içerir: kendi analizinize zaman harcamadan deneyimli tüccarların kararlarını takip edebilir ve tekrarlayabilirsiniz.";
$s7_point3 = "Arayüz mümkün olduğunca basit kalır — her araç bir bakışta anlaşılır ve ilk andan itibaren kullanıma hazırdır.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "$site_name yapay zekasıyla önemli zaman pencerelerini bulun";
$s8_item1 = "Otomatik çeşitlendirme, fonları farklı varlıklar arasında dağıtarak riski azaltır ve istikrarsız piyasalarda bile sermayeyi korur.";
$s8_item2 = "Tamamen özerk bir sistem — grafiklere bakmanıza gerek yok. Algoritmalar piyasayı analiz eder ve bağımsız olarak kararlar alır.";
$s8_item3 = "Para çekme işlemleri her zaman kullanılabilir — banka kartlarına, kripto cüzdanlarına veya elektronik ödeme sistemlerine, gecikme olmadan.";
$s8_item4 = "Günlük raporlar sonuçlarınızı gösterir ve durum üzerinde gerçek zamanlı tam kontrol sağlar.";
$s8_item5 = "Esnek risk seviyesi ayarları, hedeflerinize uygun bir strateji seçmenizi sağlar — muhafazakardan daha agresife kadar.";
$s8_item6 = "%400'e varan kar potansiyeli, $site_name'i sadece sermayesini korumak değil, önemli ölçüde büyütmek isteyenler için bir araç haline getirir.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "$site_name tarafından desteklenen uzman analizi";
$s9_quote = "$site_name, algoritmaların gücünü piyasa deneyimiyle birleştirerek karmaşık verileri net, anlaşılması kolay sinyallere dönüştürür. Sistem, kalıpları ve potansiyel fırsatları hızla tespit eder, bilgi yükü olmadan karar vermenizi sağlar.";
$s9_p1 = "Hem teknik göstergeleri hem de piyasa davranışını dikkate alan önceden işlenmiş analizler alırsınız — böylece daha hızlı, daha fazla güven ve hassasiyetle hareket edebilirsiniz.";
$s9_img_alt = "$site_name yatırım stratejisi";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Kullanıcılarımız ne diyor";
$review_1_text = "Platform çok sezgisel ve araçlar ticaret sonuçlarımı geliştirmeme yardımcı oldu.";
$review_2_text = "Hızlı destek ve gerçekten yararlı öğrenme materyalleri — yeni başlayanlar için mükemmel.";
$review_3_text = "Özelleştirilebilir grafikler ve hızlı yürütme — aylardır ilk tercihim.";
$review_4_text = "Kayıt beş dakikadan az sürdü ve panel, paramın tam olarak nerede olduğunu görmemi kolaylaştırıyor.";
$review_5_text = "Platformun bana sadece rakamlar fırlatmak yerine her sinyalin arkasındaki mantığı açıklamasını seviyorum.";
$review_6_text = "Para çekme işlemleri benim için her zaman hızlı oldu ve destek ekibi gerçekten dakikalar içinde yanıt veriyor.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "$site_name Hakkında Sıkça Sorulan Sorular";
$faq_q1 = "$site_name gerçek zamanlı piyasa değişikliklerini tespit edebilir mi?";
$faq_a1 = "Evet. Canlı verileri takip eder, momentum değişimlerini erken aşamalarında tanımlar ve tam olarak gelişmeden önce kalıpları tespit eder, kullanıcılara zamanında bir avantaj sağlar.";
$faq_q2 = "$site_name deneyimi özelleştirilebilir mi?";
$faq_a2 = "Evet. Kullanıcılar ilgi alanlarını seçebilir, ayrıntı düzeyini ayarlayabilir ve ticaret tarzlarına veya öğrenme ihtiyaçlarına uygun genel stratejileri takip edebilir.";
$faq_q3 = "$site_name geleneksel araştırma yöntemlerinin yerini alıyor mu?";
$faq_a3 = "Hayır. Kullanıcı kendi araştırması ve kararları üzerinde tam kontrolü korurken, yapay zeka tarafından filtrelenmiş içgörüleri hızla sunarak onları geliştirir.";
$faq_cta = "Şimdi Daha Fazla Bilgi Edinin";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Öne Çıkanlar";
$hl1_emoji = "🤖";
$hl1_title = "Kayıt Ücreti";
$hl1_desc = "Kayıt için ücret yok";
$hl2_emoji = "💰";
$hl2_title = "Ticaret Komisyonları";
$hl2_desc = "Kesinlikle ücretsiz";
$hl3_emoji = "📋";
$hl3_title = "Kayıt Kolaylığı";
$hl3_desc = "Kayıt hızlı ve basittir";
$hl4_emoji = "📊";
$hl4_title = "Eğitim Odağı";
$hl4_desc = "Kripto, Forex ticareti ve yatırım hakkında dersler";
$hl5_emoji = "🌎";
$hl5_title = "Mevcut Ülkeler";
$hl5_desc = "ABD'de kullanılamaz, diğer ülkelerin çoğunda kullanılabilir";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Akıllıca ticaret yapın, güvenle büyüyün";
$footnav_about = "Hakkımızda";
$footnav_product = "Ürün";
$footnav_offer = "Teklif";
$footnav_contacts = "İletişim";
$footnav_faq = "SSS";
$footnav_privacy = "Gizlilik Politikası";
$footnav_conditions = "Kullanım Şartları";
$footnav_risk = "Risk Uyarısı";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name, ticaret, yatırım, finansal piyasalar ve dijital varlıklar hakkında genel eğitim materyalleri yayınlar. Makaleler, piyasa verileri, grafikler ve diğer site içerikleri yalnızca bilgi amaçlı sunulur ve finansal, yatırım veya hukuki tavsiye olarak değerlendirilmemelidir. Güvenilir ve güncel bilgiler sağlamaya çalışsak da, doğruluğunu veya eksiksizliğini garanti edemeyiz ve içeriğe güvenmekten kaynaklanan kayıplardan sorumlu değiliz.<br><br>Ticaret risk içerir ve kripto para birimleri, Forex, CFD'ler, hisse senetleri ve diğer finansal ürünler değer olarak önemli ölçüde dalgalanabilir. Ticaret yapmadan önce kendi mali durumunuzu ve risk toleransınızı değerlendirin ve gerektiğinde profesyonel tavsiye alın. Kaybetmeyi göze alamayacağınız parayı asla yatırmayın.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Ticaret Danışmanı";
$quiz_text_welcome = "Merhaba! Ben Sofia, kişisel ticaret danışmanınız. Sizin için en iyi planı bulmak için birkaç dakikanız var mı?";
$quiz_text_q1 = "Daha önce işlem yaptınız mı?";
$quiz_text_a1_yes = "Evet, deneyimim var";
$quiz_text_a1_no = "Hayır, yeni başlıyorum";
$quiz_text_q2 = "Harika! Planınızı kişiselleştirebilmem için adınız nedir?";
$quiz_text_q3 = "Ticaretteki ana hedefiniz nedir?";
$quiz_text_a3_yes = "Uzun vadeli servet oluşturma";
$quiz_text_a3_no = "Kısa vadeli gelir elde etme";
$quiz_text_q4 = "Ne kadarla başlamak istersiniz?";
$quiz_text_a4_1 = "$$app_price'den az";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "$1000'den fazla";
$quiz_text_q5 = "Mükemmel. Şimdi sizin için ücretsiz bir hesap açmamı ister misiniz?";
$quiz_text_a5_yes = "Evet, yapalım";
$quiz_text_a5_no = "Şimdi değil";
$quiz_text_loader = "Sizin için en iyi plan bulunuyor...";
$quiz_text_final_ttl = "Her şey hazır!";
$quiz_text_processing = "Bilgileriniz gönderiliyor...";
$quiz_text_typing = "yazıyor...";
$quiz_placeholder_fname = "Ad";
$quiz_placeholder_lname = "Soyad";
$quiz_placeholder_email = "E-posta";
$quiz_btn_submit = "Ücretsiz Hesabımı Al";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Ana Sayfa";
$bc_about = "Hakkımızda";
$bc_product = "Ürün";
$bc_offer = "Teklif";
$bc_contacts = "İletişim";
$bc_faq = "SSS";
$bc_privacy = "Gizlilik Politikası";
$bc_conditions = "Kullanım Şartları";
$bc_risk = "Risk Uyarısı";
$bc_sign = "Kayıt";
$bc_thanks = "Teşekkürler";
$bc_sitemap = "Site Haritası";

// -------------------------
// About page
// -------------------------
$about_meta_title = "$site_name Hakkında";
$about_meta_description = "$site_name'in misyonu hakkında bilgi edinin: yapay zeka destekli araçlarla piyasa analizini daha net ve erişilebilir hale getirmek.";
$about_h1 = "$site_name Hakkında";
$about_lead = "$site_name tek bir fikir etrafında inşa edilmiştir: ticaret kararları tahmine değil, net bilgiye dayanmalıdır.";
$about_p1 = "Karmaşık, gürültülü verileri anlaşılması ve üzerinde işlem yapılması kolay sinyallere dönüştürmek için yapay zekayı gerçek piyasa deneyimiyle birleştiriyoruz. Platformumuz piyasaları gece gündüz izler, böylece siz yapmak zorunda kalmazsınız.";
$about_p2 = "İlk işleminizi yapıyor olun ya da yıllardır piyasalarda aktif olun, $site_name sizinle bulunduğunuz yerde buluşmak için tasarlanmıştır — basit rehberlikten gelişmiş gerçek zamanlı analize kadar uzanan araçlarla.";
$about_p3 = "Teknolojinin yargınızı değiştirmesi değil desteklemesi gerektiğine inanıyoruz. $site_name'in oluşturduğu her sinyal, hala tamamen size ait olan bir kararı bilgilendirmeyi amaçlar.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Ürün — Yapay Zeka Piyasa Analizi Araçları";
$product_meta_description = "$site_name ürününü keşfedin: gerçek zamanlı yapay zeka piyasa analizi, kopya ticaret, risk kontrolleri ve otomatik çeşitlendirme.";
$product_h1 = "$site_name ürünü";
$product_lead = "Piyasayı sizin için okuyan tek bir platform: gerçek zamanlı analiz, kopya ticaret ve ticaret kararlarını daha net hale getirmek için tasarlanmış esnek risk araçları.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Teklifi — Ücretsiz Başlayın";
$offer_meta_description = "Mevcut $site_name teklifine neler dahil olduğunu görün: ücretsiz kayıt, ticaret komisyonu yok ve tam platform erişimi.";
$offer_h1 = "Mevcut teklifimiz";
$offer_lead = "Hesabınızı ücretsiz oluşturun ve tam $site_name platformunun kilidini açın &mdash; kayıt ücreti yok, ticaret komisyonu yok.";
$offer_li1 = "Hesabınızı kaydettirmek için ücret yok";
$offer_li2 = "İşlemler üzerinde komisyon yok";
$offer_li3 = "Gerçek zamanlı yapay zeka piyasa analizine ve kopya ticarete tam erişim";
$offer_li4 = "Para çekme işlemleri her zaman kullanılabilir, gizli ücret yok";
$offer_li5 = "Kripto, Forex ve yatırım hakkında eğitim kaynakları dahildir";
$offer_note = "Kullanılabilirlik bölgeye göre değişebilir. Bir hesabı finanse etmeden önce <a class=\"link\" href=\"risk-warning.php\">Risk Uyarımızı</a> inceleyin.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "$site_name ile İletişime Geçin — Ekibimizle iletişime geçin";
$contacts_meta_description = "$site_name hesabınız veya platform hakkında bir sorunuz mu var? Destek ekibimizle e-posta yoluyla iletişime geçin veya bize bir mesaj gönderin.";
$contacts_h1 = "İletişim";
$contacts_lead = "Hesabınız, bir para yatırma veya platformun nasıl çalıştığı hakkında sorularınız mı var? Ekibimiz yardıma hazır.";
$contacts_email_label = "E-posta";
$contacts_hours_label = "Destek Saatleri";
$contacts_hours_value = "7/24";
$contacts_response_label = "Tipik Yanıt Süresi";
$contacts_response_value = "24 saat içinde";
$contacts_form_title = "Bize Mesaj Gönderin";
$contacts_form_desc = "Bilgilerinizi aşağıya bırakın, ekibimizin bir üyesi doğrudan sizinle iletişime geçecektir.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Gizlilik Politikası";
$privacy_meta_description = "$site_name'in kişisel verilerinizi site ve platform genelinde nasıl topladığını, kullandığını ve koruduğunu öğrenin.";
$privacy_sections = [
    [
        "title" => "1. Giriş",
        "body" => "Bu Gizlilik Politikası, $site_name'in (\"biz\") $site_domain (\"Site\") ziyaretçilerinin ve kullanıcılarının kişisel verilerini nasıl topladığını, kullandığını ve koruduğunu açıklar. Siteyi kullanarak, aşağıda açıklanan uygulamaları kabul etmiş olursunuz.",
    ],
    [
        "title" => "2. Topladığımız Bilgiler",
        "body" => "Kayıt sırasında veya bir form gönderirken adınız, e-posta adresiniz ve telefon numaranız gibi doğrudan sağladığınız bilgileri ve IP adresiniz, cihaz ve tarayıcı türünüz ve Sitede görüntülenen sayfalar dahil olmak üzere otomatik olarak toplanan bilgileri toplayabiliriz.",
    ],
    [
        "title" => "3. Bilgilerinizi Nasıl Kullanıyoruz",
        "body" => "Toplanan bilgileri hesabınızı oluşturmak ve yönetmek, sorulara yanıt vermek, müşteri desteği sağlamak, Siteyi ve hizmetlerimizi geliştirmek ve izin verildiğinde ürünler ve teklifler hakkında güncellemeler göndermek için kullanırız. Pazarlama iletişimlerinden istediğiniz zaman çıkabilirsiniz.",
    ],
    [
        "title" => "4. Çerezler ve İzleme Teknolojileri",
        "body" => "Site, tercihlerinizi hatırlamak, oturumunuzu açık tutmak ve ziyaretçilerin sayfalarımızı nasıl kullandığını anlamak için çerezler ve benzer teknolojiler kullanır. Bazı özellikler düzgün çalışmayabilse de, çerezleri tarayıcı ayarlarınız aracılığıyla devre dışı bırakabilirsiniz.",
    ],
    [
        "title" => "5. Bilgi Paylaşımı",
        "body" => "Kişisel verilerinizi satmıyoruz. Bilgileri, Siteyi işletmemize yardımcı olan güvenilir hizmet sağlayıcılarla (barındırma veya analitik sağlayıcılar gibi) veya kanunen gerekli olduğunda veya yasal haklarımızı korumak için paylaşabiliriz.",
    ],
    [
        "title" => "6. Veri Güvenliği",
        "body" => "Bilgilerinizi yetkisiz erişim, değişiklik veya kayıptan korumak için makul teknik ve organizasyonel önlemler uyguluyoruz. Hiçbir iletim veya depolama yöntemi tamamen güvenli değildir ve mutlak güvenliği garanti edemeyiz.",
    ],
    [
        "title" => "7. Haklarınız ve Seçimleriniz",
        "body" => "Konumunuza bağlı olarak, kişisel verilerinize erişme, düzeltme veya silinmesini talep etme ve bunların belirli kullanımlarına itiraz etme hakkına sahip olabilirsiniz. Bu hakları kullanmak için <a class=\"link\" href=\"contacts.php\">iletişim sayfamız</a> üzerinden bizimle iletişime geçin.",
    ],
    [
        "title" => "8. Çocukların Gizliliği",
        "body" => "Site, 18 yaşın altındaki kişilere yönelik değildir ve reşit olmayanlardan bilerek kişisel veri toplamayız. Bir reşit olmayanın bize kişisel veri sağladığını düşünüyorsanız, lütfen kaldırabilmemiz için bizimle iletişime geçin.",
    ],
    [
        "title" => "9. Bu Politikadaki Değişiklikler",
        "body" => "Bu Gizlilik Politikasını zaman zaman güncelleyebiliriz. Herhangi bir değişiklik, revize edilmiş bir yürürlük tarihiyle bu sayfada yayınlanacaktır. Bu sayfayı düzenli olarak gözden geçirmenizi öneririz.",
    ],
    [
        "title" => "10. Bizimle İletişime Geçin",
        "body" => "Bu Gizlilik Politikası veya bilgilerinizin nasıl işlendiği hakkında sorularınız varsa, <a class=\"link\" href=\"contacts.php\">iletişim sayfamız</a> üzerinden bizimle iletişime geçin veya info@$site_domain adresinden bize e-posta gönderin.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Kullanım Şartları";
$conditions_meta_description = "$site_name web sitesine ve ticaret platformuna erişimi ve kullanımı düzenleyen Kullanım Şartlarını gözden geçirin.";
$conditions_sections = [
    [
        "title" => "1. Şartların Kabulü",
        "body" => "$site_domain'e (\"Site\") erişerek veya kullanarak, bu Kullanım Şartlarına bağlı kalmayı kabul etmiş olursunuz. Bu şartların herhangi bir bölümünü kabul etmiyorsanız, Siteyi kullanmayın.",
    ],
    [
        "title" => "2. Uygunluk",
        "body" => "Siteyi kullanmak için en az 18 yaşında olmalı ve yargı bölgenizde ticaretle ilgili hizmetleri kullanma yasal kapasitesine sahip olmalısınız. Siteyi kullanarak, bu gereksinimleri karşıladığınızı onaylarsınız.",
    ],
    [
        "title" => "3. Hizmetin Açıklaması",
        "body" => "$site_name, eğitim içeriği, piyasa bilgileri ve yapay zeka destekli analiz araçları sunan çevrimiçi bir platform sağlar. Sitede hiçbir şey finansal, yatırım, vergi veya hukuki tavsiye teşkil etmez ve sağlanan tüm bilgiler yalnızca genel bilgilendirme amaçlıdır.",
    ],
    [
        "title" => "4. Kullanıcı Sorumlulukları",
        "body" => "Kayıt sırasında doğru bilgi sağlamaktan, hesap kimlik bilgilerinizin gizliliğini korumaktan ve hesabınız altında gerçekleşen tüm faaliyetlerden siz sorumlusunuz.",
    ],
    [
        "title" => "5. Fikri Mülkiyet",
        "body" => "Metin, görseller, logolar ve yazılım dahil olmak üzere Sitedeki tüm içerik $site_name veya lisans verenlerine aittir ve geçerli fikri mülkiyet yasalarıyla korunmaktadır. Bu içeriği izin almadan çoğaltamaz veya dağıtamazsınız.",
    ],
    [
        "title" => "6. Finansal Tavsiye Yok",
        "body" => "Sitedeki içerik yalnızca bilgilendirme ve eğitim amaçlı sağlanır ve finansal tavsiye olarak yorumlanmamalıdır. Kendi ticaret kararlarınızdan yalnızca siz sorumlusunuz ve gerektiğinde bağımsız bir finansal danışmana danışmalısınız. Daha fazla bilgi için <a class=\"link\" href=\"risk-warning.php\">Risk Uyarımıza</a> bakın.",
    ],
    [
        "title" => "7. Sorumluluğun Sınırlandırılması",
        "body" => "Yasaların izin verdiği azami ölçüde, $site_name, Siteyi veya bağlantılı üçüncü taraf hizmetlerini kullanmanızdan veya kullanamamanızdan kaynaklanan doğrudan, dolaylı, arızi veya sonuç olarak ortaya çıkan zararlardan sorumlu olmayacaktır.",
    ],
    [
        "title" => "8. Fesih",
        "body" => "Bu Kullanım Şartlarını ihlal ettiğine inandığımız veya başka bir şekilde diğer kullanıcılara veya Siteye zarar verdiğine inandığımız davranışlar için, bildirimde bulunmaksızın, kendi takdirimize bağlı olarak Siteye erişiminizi askıya alma veya sonlandırma hakkını saklı tutarız.",
    ],
    [
        "title" => "9. Bu Şartlardaki Değişiklikler",
        "body" => "Bu Kullanım Şartlarını istediğimiz zaman revize edebiliriz. Değişiklikler yayınlandıktan sonra Sitenin kullanılmaya devam edilmesi, güncellenen şartların kabulü anlamına gelir.",
    ],
    [
        "title" => "10. İletişim",
        "body" => "Bu Kullanım Şartları hakkındaki sorular <a class=\"link\" href=\"contacts.php\">iletişim sayfası</a> aracılığıyla veya info@$site_domain adresine e-posta yoluyla ekibimize yönlendirilebilir.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risk Uyarısı — Ticaret Riski Açıklaması";
$risk_meta_description = "İşlem yapmadan önce $site_name risk uyarısını okuyun: kripto piyasası riskleri, kaldıraç, likidite, siber güvenlik ve düzenleyici hususlar.";
$risk_title = "Risk Uyarısı";
$risk_intro = "Riskleri anlamak, kendinden emin ticaret yapmanın ilk adımıdır.";
$risk_ai_title = "Yapay zeka sistemimiz risk yönetiminde nasıl yardımcı olur:";
$risk_ai_1_title = "Algoritmik Verimlilik ve Duygusuz Ticaret:";
$risk_ai_1_text = "Gelişmiş algoritmalar, işlemleri optimal anlarda nesnel olarak yürütmek için piyasa sinyallerini analiz eder.";
$risk_ai_2_title = "Veri Odaklı Stratejiler:";
$risk_ai_2_text = "Stratejiler, tahmin yerine doğrulanmış piyasa kalıplarına ve gerçek zamanlı analize dayanır.";
$risk_ai_3_title = "Esnek Ayarlar ve Tam Kontrol:";
$risk_ai_3_text = "Risk parametrelerinizi istediğiniz zaman ayarlayın. Tüm bakiyeleri ve işlemleri panonuzda şeffaf bir şekilde takip edin, gizli ücret yok ve para çekme kısıtlaması yok.";
$risk_disclaimer = "<strong>Sorumluluk Reddi:</strong> Ticaret her zaman risk içerir. Otomatik sistemler (yapay zeka dahil) kar garantisi vermez, yazılım hataları veya beklenmedik piyasa olayları nedeniyle başarısız olabilir ve kullanıcı denetimi gerektirir. Geçmiş performans gelecekteki sonuçları garanti etmez. Bu platform yalnızca bilgilendirme ve pazarlama amaçlarına hizmet eder ve finansal tavsiye vermez.";
$risk_s1_title = "1. Genel Kripto Piyasası Riski";
$risk_s1_text = "Kripto para birimleri, çoğu yargı bölgesinde minimal düzenleyici denetimle 7/24 faaliyet gösteren son derece değişken, spekülatif varlıklardır.";
$risk_s1_li1 = "Değerler kısa sürelerde dramatik şekilde dalgalanabilir ve potansiyel olarak yatırılan sermayenin tamamen kaybedilmesine yol açabilir.";
$risk_s1_li2 = "Piyasa değerleri, düzenleyici değişiklikler, teknolojik gelişmeler, güvenlik ihlalleri veya daha geniş makroekonomik olaylardan güçlü bir şekilde etkilenebilir.";
$risk_s1_li3 = "Bazı varlıklar değerlerini tamamen kaybedebilir. Yalnızca kaybetmeyi göze alabileceğiniz fonları yatırın.";
$risk_s2_title = "2. Yürütme, Likidite ve Kaldıraç Riski";
$risk_s2_li1_title = "Piyasa Oynaklığı ve Likidite:";
$risk_s2_li1_text = "Aşırı fiyat hareketleri (günlük %10-20+) veya düşük likidite (özellikle daha küçük coinlerde) gecikmelere, platform arızalarına ve ciddi yürütme kaymasına neden olabilir. Zarar durdurma emirleri, aşırı koşullarda zarar limitlerini garanti etmeyebilir.";
$risk_s2_li2_title = "Kaldıraç ve Marj Riski:";
$risk_s2_li2_text = "Kaldıraçlı ürünler hem kazançları hem de kayıpları büyütür, bu da orijinal mevduatınızdan daha fazlasını kaybedebileceğiniz anlamına gelir. Perakende yatırımcı hesaplarının yaklaşık %70-80'i kaldıraçlı ürünlerle işlem yaparken para kaybeder.";
$risk_s3_title = "3. Teknik, Siber Güvenlik ve Üçüncü Taraf Riski";
$risk_s3_li1_title = "Teknik Faktörler:";
$risk_s3_li1_text = "Çevrimiçi ticaret, internet bağlantısı arızaları, donanım/yazılım hataları ve hizmetin kullanılamaması gibi doğal riskler taşır.";
$risk_s3_li2_title = "Siber Güvenlik:";
$risk_s3_li2_text = "Kripto hesapları, kimlik avı, kötü amaçlı yazılım ve bilgisayar korsanlığının sık hedefleridir. İşlemler geri alınamaz; giriş bilgilerinizin ele geçirilmesi kalıcı kayba yol açabilir.";
$risk_s3_li3_title = "Üçüncü Taraf Platformları:";
$risk_s3_li3_text = "Bu web sitesi kullanıcıları üçüncü taraf platformlarına bağlayabilir. Bunların güvenliğini, faaliyetlerini veya ödeme gücünü kontrol etmiyor, onaylamıyor veya garanti etmiyoruz. Harici platformlara para yatırmadan önce her zaman kendi kapsamlı durum tespitinizi yapın.";
$risk_s4_title = "4. Düzenleyici, Vergi ve Nihai Hükümler";
$risk_s4_li1_title = "Yasal Uyumluluk ve Vergiler:";
$risk_s4_li1_text = "Düzenleyici çerçeveler büyük ölçüde değişir ve hızla değişir. Kullanıcılar, ticaret faaliyetlerinin yerel yasalara uygun olmasını sağlamaktan ve kendi vergi yükümlülüklerini yerine getirmekten yalnızca kendileri sorumludur.";
$risk_s4_li2_title = "Kar Garantisi Yok:";
$risk_s4_li2_text = "\"Güvenli\" veya risksiz kripto ticareti diye bir şey yoktur. Sağlanan herhangi bir getiri rakamı veya performans örneği tamamen varsayımsaldır.";
$risk_s4_li3_title = "Uygunluk:";
$risk_s4_li3_text = "Riskleri tam olarak anlamıyorsanız, temel fonlara bağımlıysanız veya ödünç alınmış parayla işlem yapıyorsanız, kripto ticareti sizin için uygun değildir. Şüpheniz varsa bağımsız, lisanslı bir finansal danışmana danışın.";
$risk_contact = "<strong>İletişim:</strong> Bu beyanla ilgili sorularınız için veya bir soru göndermek için lütfen web sitemizdeki iletişim formu aracılığıyla resmi müşteri hizmetleri ekibimizle iletişime geçin.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Kayıt | $site_name — Ücretsiz Hesabınızı Oluşturun";
$sign_meta_description = "Dakikalar içinde ücretsiz $site_name hesabınızı oluşturun ve yapay zeka destekli piyasa analiziyle daha akıllıca işlem yapmaya başlayın.";
$sign_h1 = "Ücretsiz Hesabınızı Oluşturun";
$sign_lead = "Dakikalar içinde $site_name'e katılın. Başlamak için aşağıya bilgilerinizi girin.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Teşekkürler | $site_name";
$thanks_h1 = "Teşekkürler!";
$thanks_text = "Bilgileriniz alındı. $site_name ekibinden bir üye, başlamanıza yardımcı olmak için yakında sizinle iletişime geçecektir.";
$thanks_btn = "Ana Sayfaya Dön";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Site Haritası | $site_name";
$sitemap_meta_description = "Ticaret platformu, teklif, destek ve yasal sayfalar dahil olmak üzere $site_name web sitesinin her sayfasını görüntüleyin.";
$sitemap_h1 = "Site Haritası";
$sitemap_lead = "$site_name'in her sayfası tek bir yerde.";

