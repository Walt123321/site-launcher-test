<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fi-FI';
$form_language = 'fi'; // matches this page's own language, not the offer's global default

// ============================================================
// FI TRANSLATION OVERRIDES
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
$home_meta_title = "$site_name — Virallinen Verkkosivusto | Kaupankäyntialusta";
$home_meta_description = "$site_name tarjoaa käyttäjäystävällisen kaupankäyntialustan edistyneillä markkinatyökaluilla, reaaliaikaisilla näkemyksillä ja käytännöllisillä ominaisuuksilla, jotka tekevät verkkokaupankäynnistä saavutettavampaa ja tietoisempaa.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "Tietoa meistä";
$nav_contacts = "Yhteystiedot";
$nav_login = "Kirjaudu sisään";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Liittyi juuri";
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
$form_title = "Aloita Nyt";
$form_fname_placeholder = "Koko nimi";
$form_lname_placeholder = "Sukunimi";
$form_email_placeholder = "Sähköpostiosoite";
$form_btn_submit = "Luo Tili";
$form_disclaimer_text = "* Klikkaamalla painiketta hyväksyt <a class=\"link\" href=\"privacy.php\">Tietosuojakäytäntömme</a> ja <a class=\"link\" href=\"conditions.php\">Käyttöehtomme</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SUOJATTU";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: Tekoäly suunniteltu lukemaan markkinoita selkeämmin";
$s1_subtitle = "Teknologialähtöinen sijoitusstrategia";
$s1_quote = "$site_name on rakennettu tekemään markkinoiden kanssa työskentelystä helpompaa, olitpa kokenut tai et. Alusta hyödyntää tekoälyä muuttaakseen monimutkaiset tiedot selkeiksi, toimintakelpoisiksi päätöksiksi, jolloin voit käydä kauppaa suuremmalla luottamuksella missä tahansa tilanteessa.";
$s1_p1 = "Järjestelmä tarkastelee valtavia tietomääriä reaaliajassa: se havaitsee muutoksia, tunnistaa kuvioita ja reagoi nopeasti markkinasignaaleihin. Tämä antaa sinulle selkeän kuvan nykytilanteesta, jotta voit havaita mahdollisuuksia ilman monimutkaisten analyysien läpikäymistä.";
$s1_p2 = "Ympärivuorokautinen seuranta, käyttäjäystävällinen käyttöliittymä ja korkea suojaustaso tekevät kokemuksesta mukavan ja luotettavan. Kaikki on suunniteltu niin, että voit keskittyä tuloksiin, et tekniseen puoleen.";
$s1_p3 = "Kopiokaupankäyntiominaisuus antaa sinulle myös pääsyn kokeneempien kauppiaiden strategioihin. Voit seurata heidän liikkeitään ja soveltaa todistettuja lähestymistapoja omaan kaupankäyntiisi, yhdistäen ammatillisen harkinnan automaatioon.";
$s1_cta = "Luo Tili";
$s1_img_alt = "$site_name digitaalinen talous";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Tarkka markkina-analyysi, ilman ylimääräistä kohinaa";
$s2_intro = "$site_name käyttää tekoälyä markkinoiden jatkuvaan seurantaan ja muutosten nopeaan havaitsemiseen. Järjestelmä käsittelee valtavia tietomääriä ja näyttää vain olennaiset signaalit ylikuormittamatta sinua tarpeettomalla tiedolla.";
$s2_item1_title = "Markkinareaktio ilman odottamista";
$s2_item1_text = "Alusta tunnistaa liikkeet niiden varhaisessa vaiheessa: momentum, käänteet ja trendinmuutokset. Näet välittömästi, mitä tapahtuu, ja voit toimia oikealla hetkellä.";
$s2_item2_title = "Selkeä tulkinta arvailun sijaan";
$s2_item2_text = "Ei monimutkaisia kaavioita tai arvailua. $site_name korostaa olennaista tarjoten selkeän yleiskuvan tilanteesta, jotta voit päättää tiedon, et intuition perusteella.";
$s2_item3_title = "Hallinta ja suoja";
$s2_item3_text = "Tietosi on suojattu, pääsyä valvotaan ja tapahtumat kulkevat suojattujen kanavien kautta. Tämä mahdollistaa keskittymisen markkinoihin, ei tekniseen riskiin.";
$s2_img_alt = "$site_name krypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Selkeää älykkyyttä kauppiaille";
$s3_card1_title = "$site_name kunnioittaa käyttäjän yksityisyyttä ja hallintaa";
$s3_card1_text = "$site_name käsittelee tietoa täydellä läpinäkyvyydellä ja rehellisyydellä. Se ei väärinkäytä henkilötietojasi. Tällä alustalla ei tallenneta tapahtumia tai tilauksia.";
$s3_card2_title = "Selkeä analyysiympäristö parempia päätöksiä varten";
$s3_card2_text = "$site_name toimii teknologisena tilana, jossa tekoäly vahvistaa inhimillistä harkintaa sen korvaamisen sijaan. Nämä työkalut helpottavat markkinamuutosten ymmärtämistä, strategioiden vertailua ja omaisuuserien käyttäytymisen tutkimista.";
$s3_card3_title = "Tekoälytyökalut, jotka terävöittävät markkinanäkemystäsi";
$s3_card3_text = "Analyysi ei koskaan pysähdy. $site_name tarkkailee kryptoympäristöä ja lähettää reaaliaikaisia ilmoituksia heti, kun olennainen liike ilmestyy.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Tarkka analyysi, ilman tunteita tai virheitä";
$s4_quote = "$site_name muuttaa monimutkaiset markkinatiedot järjestetyksi, helposti luettavaksi tiedoksi, poistaen tarpeettoman kohinan ja auttaen sinua keskittymään signaaleihin, joilla todella on merkitystä. Tämä mahdollistaa tilanteen ymmärtämisen aikaisemmin ja päätöksenteon ilman, että tunteet ottavat vallan.";
$s4_p1 = "Järjestelmä päivittää jatkuvasti johtopäätöksiään uudella tiedolla. Viivästyneiden indikaattoreiden sijaan se käyttää mukautuvia malleja, jotka reagoivat markkinamuutoksiin reaaliajassa. Tämä tarkoittaa, että työskentelet aina ajantasaisen kuvan kanssa ja voit toimia nopeammin, kun sillä todella on merkitystä.";
$s4_img_alt = "$site_name tekoäly";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Käytä $site_name tekoälyä tarkkoihin, oikea-aikaisiin päätöksiin";
$s5_quote = "$site_name analysoi markkinoita reaaliajassa ja näyttää sinulle heti, missä liike ja mahdollisuudet ovat. Järjestelmä käsittelee tiedot puolestasi ja tarjoaa valmiit signaalit: milloin mennä sisään, milloin poistua ja mitä tarkkailla.";
$s5_p1 = "Sinun ei tarvitse katsoa kaavioita koko päivää. Alusta havaitsee muutokset itse ja reagoi markkinoihin nopeasti, jotta et missaa tärkeitä hetkiä.";
$s5_p2 = "Algoritmit toimivat ympäri vuorokauden tunnistaen uusia mahdollisuuksia heti niiden ilmestyessä. Saat ajantasaista tietoa ilman viiveitä tai tietotulvaa.";
$s5_p3 = "Samalla turvallisuus pysyy korkealla tasolla: tietosuoja, turvallinen pääsy ja kaupankäynnin hallinta. $site_name sopii sekä aloittelijoille että aktiivisille kauppiaille — päätökset pysyvät sinun, mutta vahvan analyyttisen perustan tukemina.";
$s5_img_alt = "$site_name talousautomaatio";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Johdonmukainen kaupankäynti alkaa järjestäytyneestä järjestelmästä";
$s6_p1 = "$site_name auttaa tuomaan rakennetta työhösi markkinoiden kanssa. Alusta luo selkeän kehyksen: sinä määrität tavoitteesi ja riskitasosi, ja järjestelmä mukauttaa analyysinsä tyyliisi — ilman kaaosta ja ylikuormitusta.";
$s6_p2 = "Ympärivuorokautinen analyysi muuttaa tietovirran yksinkertaisiksi, ymmärrettäviksi signaaleiksi. Näet vain sen, mikä on merkityksellistä: missä on liikettä, missä kannattaa mennä sisään ja milloin on parempi odottaa. Ajan myötä algoritmit tarkentuvat ja mukautuvat markkinoihin.";
$s6_item1_title = "Valitse tahtisi: nopea kaupankäynti tai pitkän aikavälin lähestymistapa";
$s6_item1_text = "$site_name tukee erilaisia strategioita. Aktiiviseen kaupankäyntiin järjestelmä merkitsee sisääntulopisteet ja hintaliikkeet. Pitkän aikavälin lähestymistavalle se auttaa ylläpitämään positioita trendi ja riski huomioiden.";
$s6_item2_title = "Sisääntulopisteet ilman arvailua";
$s6_item2_text = "Alusta näyttää, missä markkina on aktiivisin. Tämä auttaa sinua menemään sisään suuremmalla luottamuksella ja poistumaan ajoissa ilman improvisointia.";
$s6_item3_title = "Riskienhallinta alusta alkaen";
$s6_item3_text = "Voit nähdä mahdolliset skenaariot etukäteen: missä riski on pienempi ja potentiaali suurempi. Tämä mahdollistaa tapahtumien suunnittelun jo ennen kuin liike edes alkaa.";
$s6_item4_title = "Valmis analyysi";
$s6_item4_text = "$site_name ei ylikuormita sinua monimutkaisella terminologialla. Saat selkeää, suoraan käyttökelpoista tietoa, joka on suunniteltu auttamaan sinua päättämään nopeammin ja suuremmalla luottamuksella.";
$s6_cta = "Aloita Nyt";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Yksinkertaiset työkalut tarkkoihin päätöksiin $site_name:n kanssa";
$s7_quote = "$site_name antaa sinulle kaiken tarvittavan markkinoilla kaupankäyntiin — ilman teknistä jargonia tai tietotulvaa. Alusta analysoi itse hintaliikkeitä, trendejä ja mahdollisia sisääntulopisteitä näyttäen vain sen, mikä todella on merkityksellistä.";
$s7_point1 = "Järjestelmä auttaa havaitsemaan, milloin markkina saattaa kääntyä, missä voimakkaita liikkeitä ilmenee ja mitkä hetket ovat parhaita sisään- tai ulospääsyyn. Jokainen signaali tulee esikäsiteltynä — sinun ei tarvitse hallita monimutkaisia indikaattoreita.";
$s7_point2 = "Se sisältää myös kopiokaupankäynnin: voit seurata ja toistaa kokeneiden kauppiaiden päätöksiä käyttämättä aikaa omaan analyysiisi.";
$s7_point3 = "Käyttöliittymä pysyy niin yksinkertaisena kuin mahdollista — jokainen työkalu ymmärretään silmäyksellä ja on käyttövalmis ensimmäisestä hetkestä lähtien.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Löydä tärkeät ajanjaksot $site_name tekoälyn avulla";
$s8_item1 = "Automaattinen hajautus jakaa varat eri omaisuuseriin, vähentäen riskiä ja suojaten pääomaa jopa epävakailla markkinoilla.";
$s8_item2 = "Täysin autonominen järjestelmä — sinun ei tarvitse katsoa kaavioita. Algoritmit analysoivat markkinoita ja tekevät päätöksiä itsenäisesti.";
$s8_item3 = "Nostot ovat saatavilla milloin tahansa — pankkikorteille, kryptolompakoihin tai sähköisiin maksujärjestelmiin, ilman viiveitä.";
$s8_item4 = "Päivittäiset raportit näyttävät tuloksesi ja antavat sinulle täyden hallinnan tilanteesta reaaliajassa.";
$s8_item5 = "Joustavat riskitason asetukset mahdollistavat strategian valitsemisen, joka sopii tavoitteisiisi — konservatiivisesta aggressiivisempaan.";
$s8_item6 = "Voitto potentiaali jopa 400% tekee $site_name:sta työkalun niille, jotka haluavat paitsi säilyttää pääomansa, myös kasvattaa sitä merkittävästi.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Asiantuntija-analyysi $site_name:n voimalla";
$s9_quote = "$site_name yhdistää algoritmien voiman markkinakokemukseen, muuttaen monimutkaiset tiedot selkeiksi, helposti ymmärrettäviksi signaaleiksi. Järjestelmä havaitsee nopeasti kuvioita ja potentiaalisia mahdollisuuksia, mahdollistaen päätöksenteon ilman tietotulvaa.";
$s9_p1 = "Saat esikäsiteltyjä analyysejä, jotka ottavat huomioon sekä tekniset indikaattorit että markkinakäyttäytymisen — jotta voit toimia nopeammin, suuremmalla luottamuksella ja tarkkuudella.";
$s9_img_alt = "$site_name sijoitusstrategia";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "Mitä käyttäjämme sanovat";
$review_1_text = "Alusta on erittäin intuitiivinen, ja työkalut ovat auttaneet minua parantamaan kaupankäyntituloksiani.";
$review_2_text = "Nopea tuki ja todella hyödylliset oppimateriaalit — täydellinen aloitteleville.";
$review_3_text = "Mukautettavat kaaviot ja nopea toteutus — se on ollut ensisijainen valintani kuukausien ajan.";
$review_4_text = "Rekisteröityminen kesti alle viisi minuuttia, ja hallintapaneeli helpottaa näkemään tarkalleen, missä rahani ovat.";
$review_5_text = "Pidän siitä, että alusta selittää jokaisen signaalin taustalla olevan logiikan sen sijaan, että vain heittäisi minulle lukuja.";
$review_6_text = "Nostot ovat aina olleet nopeita minulle, ja tukitiimi todella vastaa muutamassa minuutissa.";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Usein Kysytyt Kysymykset $site_name:sta";
$faq_q1 = "Voiko $site_name havaita markkinamuutoksia reaaliajassa?";
$faq_a1 = "Kyllä. Se seuraa reaaliaikaista dataa, tunnistaa momentum-muutokset niiden varhaisessa vaiheessa ja havaitsee kuvioita ennen kuin ne kehittyvät täysin, antaen käyttäjille oikea-aikaisen edun.";
$faq_q2 = "Voiko $site_name-kokemusta mukauttaa?";
$faq_a2 = "Kyllä. Käyttäjät voivat valita kiinnostuksen kohteita, säätää yksityiskohtaisuuden tasoa ja seurata julkisia strategioita, jotka vastaavat heidän kaupankäyntityyliään tai oppimistarpeitaan.";
$faq_q3 = "Korvaako $site_name perinteiset tutkimusmenetelmät?";
$faq_a3 = "Ei. Se parantaa niitä tarjoamalla nopeasti tekoälyn suodattamia näkemyksiä, samalla kun käyttäjä säilyttää täyden hallinnan omasta tutkimuksestaan ja päätöksistään.";
$faq_cta = "Lue Lisää Nyt";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Kohokohdat";
$hl1_emoji = "🤖";
$hl1_title = "Rekisteröitymiskustannus";
$hl1_desc = "Ei kustannuksia rekisteröitymisestä";
$hl2_emoji = "💰";
$hl2_title = "Kaupankäyntikomissiot";
$hl2_desc = "Ei kustannuksia lainkaan";
$hl3_emoji = "📋";
$hl3_title = "Rekisteröitymisen Helppous";
$hl3_desc = "Rekisteröityminen on nopeaa ja yksinkertaista";
$hl4_emoji = "📊";
$hl4_title = "Koulutuksellinen Painopiste";
$hl4_desc = "Oppitunteja kryptosta, Forex-kaupankäynnistä ja sijoittamisesta";
$hl5_emoji = "🌎";
$hl5_title = "Saatavilla Olevat Maat";
$hl5_desc = "Ei saatavilla Yhdysvalloissa, saatavilla useimmissa muissa maissa";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Käy kauppaa viisaasti, kasva luottamuksella";
$footnav_about = "Tietoa meistä";
$footnav_product = "Tuote";
$footnav_offer = "Tarjous";
$footnav_contacts = "Yhteystiedot";
$footnav_faq = "Usein Kysytyt Kysymykset";
$footnav_privacy = "Tietosuojakäytäntö";
$footnav_conditions = "Käyttöehdot";
$footnav_risk = "Riskivaroitus";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name julkaisee yleistä koulutusmateriaalia kaupankäynnistä, sijoittamisesta, rahoitusmarkkinoista ja digitaalisista omaisuuseristä. Artikkelit, markkinatiedot, kaaviot ja muu sivuston sisältö tarjotaan vain tiedotustarkoituksiin, eikä niitä tule pitää talous-, sijoitus- tai oikeudellisena neuvontana. Vaikka pyrimme tarjoamaan luotettavaa ja ajantasaista tietoa, emme voi taata sen tarkkuutta tai täydellisyyttä emmekä ole vastuussa tappioista, jotka johtuvat sisältöön luottamisesta.<br><br>Kaupankäyntiin liittyy riskejä, ja kryptovaluutat, Forex, CFD:t, osakkeet ja muut rahoitustuotteet voivat vaihdella merkittävästi arvoltaan. Harkitse omaa taloudellista tilannettasi ja riskinsietokykyäsi ennen kaupankäyntiä ja hae ammatillista neuvontaa tarvittaessa. Älä koskaan sijoita rahaa, jonka menettämiseen sinulla ei ole varaa.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_role = "Kaupankäyntikonsultti";
$quiz_text_welcome = "Hei! Olen Sofia, henkilökohtainen kaupankäyntikonsulttisi. Onko sinulla muutama minuutti löytääksemme sinulle parhaan suunnitelman?";
$quiz_text_q1 = "Oletko käynyt kauppaa aiemmin?";
$quiz_text_a1_yes = "Kyllä, minulla on kokemusta";
$quiz_text_a1_no = "Ei, olen aloittelija";
$quiz_text_q2 = "Loistavaa! Mikä on etunimesi, jotta voin personoida suunnitelmasi?";
$quiz_text_q3 = "Mikä on päätavoitteesi kaupankäynnissä?";
$quiz_text_a3_yes = "Pitkän aikavälin varallisuuden rakentaminen";
$quiz_text_a3_no = "Lyhytaikaisen tulon tuottaminen";
$quiz_text_q4 = "Millä summalla haluaisit aloittaa?";
$quiz_text_a4_1 = "Alle $$app_price";
$quiz_text_a4_2 = "$$app_price – $1000";
$quiz_text_a4_3 = "Yli $1000";
$quiz_text_q5 = "Täydellistä. Haluaisitko, että avaan sinulle ilmaisen tilin nyt?";
$quiz_text_a5_yes = "Kyllä, tehdään se";
$quiz_text_a5_no = "Ei nyt";
$quiz_text_loader = "Etsitään sinulle parasta suunnitelmaa...";
$quiz_text_final_ttl = "Kaikki on valmista!";
$quiz_text_processing = "Tietosi lähetetään...";
$quiz_text_typing = "kirjoittaa...";
$quiz_placeholder_fname = "Etunimi";
$quiz_placeholder_lname = "Sukunimi";
$quiz_placeholder_email = "Sähköposti";
$quiz_btn_submit = "Hanki Ilmainen Tilini";

// -------------------------
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Etusivu";
$bc_about = "Tietoa meistä";
$bc_product = "Tuote";
$bc_offer = "Tarjous";
$bc_contacts = "Yhteystiedot";
$bc_faq = "Usein Kysytyt Kysymykset";
$bc_privacy = "Tietosuojakäytäntö";
$bc_conditions = "Käyttöehdot";
$bc_risk = "Riskivaroitus";
$bc_sign = "Rekisteröityminen";
$bc_thanks = "Kiitos";
$bc_sitemap = "Sivukartta";

// -------------------------
// About page
// -------------------------
$about_meta_title = "Tietoa $site_name:sta";
$about_meta_description = "Tutustu $site_name:n missioon: tehdä markkina-analyysistä selkeämpää ja saavutettavampaa tekoälypohjaisilla työkaluilla.";
$about_h1 = "Tietoa $site_name:sta";
$about_lead = "$site_name on rakennettu yhden idean ympärille: kaupankäyntipäätösten tulisi perustua selkeään tietoon, ei arvailuun.";
$about_p1 = "Yhdistämme tekoälyn todelliseen markkinakokemukseen muuttaaksemme monimutkaiset, sekavat tiedot helposti ymmärrettäviksi ja toimintakelpoisiksi signaaleiksi. Alustamme seuraa markkinoita päivin ja öin, jotta sinun ei tarvitse.";
$about_p2 = "Teetpä ensimmäistä kauppaasi tai olet ollut aktiivinen markkinoilla vuosia, $site_name on suunniteltu kohtaamaan sinut siellä, missä olet — työkaluilla, jotka vaihtelevat yksinkertaisesta ohjauksesta edistyneeseen reaaliaikaiseen analyysiin.";
$about_p3 = "Uskomme, että teknologian tulisi tukea harkintaasi, ei korvata sitä. Jokainen $site_name:n tuottama signaali on tarkoitettu tukemaan päätöstä, joka on edelleen täysin sinun.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Tuote — Tekoälytyökalut Markkina-analyysiin";
$product_meta_description = "Tutustu $site_name-tuotteeseen: reaaliaikainen tekoäly-markkina-analyysi, kopiokaupankäynti, riskinhallinta ja automatisoitu hajautus.";
$product_h1 = "$site_name-tuote";
$product_lead = "Yksi alusta, joka lukee markkinat puolestasi: reaaliaikainen analyysi, kopiokaupankäynti ja joustavat riskityökalut, suunniteltu tekemään kaupankäyntipäätöksistä selkeämpiä.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Tarjous — Aloita Ilmaiseksi";
$offer_meta_description = "Katso, mitä nykyinen $site_name-tarjous sisältää: ilmainen rekisteröityminen, ei kaupankäyntikomissioita ja täysi pääsy alustaan.";
$offer_h1 = "Nykyinen tarjouksemme";
$offer_lead = "Luo tilisi ilmaiseksi ja avaa täysi $site_name-alusta &mdash; ei rekisteröitymismaksuja, ei kaupankäyntikomissioita.";
$offer_li1 = "Ei kustannuksia tilin rekisteröinnistä";
$offer_li2 = "Ei komissioita tapahtumista";
$offer_li3 = "Täysi pääsy reaaliaikaiseen tekoäly-markkina-analyysiin ja kopiokaupankäyntiin";
$offer_li4 = "Nostot saatavilla milloin tahansa, ilman piilokuluja";
$offer_li5 = "Koulutusresurssit kryptosta, Forexista ja sijoittamisesta sisältyvät";
$offer_note = "Saatavuus voi vaihdella alueittain. Tarkista <a class=\"link\" href=\"risk-warning.php\">Riskivaroituksemme</a> ennen tilin rahoittamista.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Ota Yhteyttä $site_name:iin — Ota yhteyttä tiimiimme";
$contacts_meta_description = "Onko sinulla kysymys $site_name-tilistäsi tai alustasta? Ota yhteyttä tukitiimiimme sähköpostitse tai lähetä meille viesti.";
$contacts_h1 = "Yhteystiedot";
$contacts_lead = "Kysymyksiä tilistäsi, talletuksesta tai siitä, miten alusta toimii? Tiimimme on valmiina auttamaan.";
$contacts_email_label = "Sähköposti";
$contacts_hours_label = "Tukiajat";
$contacts_hours_value = "24/7";
$contacts_response_label = "Tyypillinen Vastausaika";
$contacts_response_value = "24 tunnin sisällä";
$contacts_form_title = "Lähetä Meille Viesti";
$contacts_form_desc = "Jätä tietosi alla, ja tiimimme jäsen ottaa sinuun suoraan yhteyttä.";

// -------------------------
// Privacy Policy page
// -------------------------
$privacy_meta_title = "$site_name Tietosuojakäytäntö";
$privacy_meta_description = "Opi, kuinka $site_name kerää, käyttää ja suojaa henkilötietojasi koko sivustolla ja alustalla.";
$privacy_sections = [
    [
        "title" => "1. Johdanto",
        "body" => "Tämä Tietosuojakäytäntö selittää, kuinka $site_name (\"me\") kerää, käyttää ja suojaa $site_domain:n (\"Sivusto\") vierailijoiden ja käyttäjien henkilötietoja. Käyttämällä Sivustoa hyväksyt alla kuvatut käytännöt.",
    ],
    [
        "title" => "2. Tiedot Jotka Keräämme",
        "body" => "Voimme kerätä tietoja, jotka annat suoraan, kuten nimesi, sähköpostiosoitteesi ja puhelinnumerosi rekisteröitymisen tai lomakkeen lähettämisen yhteydessä, sekä automaattisesti kerättyjä tietoja, mukaan lukien IP-osoitteesi, laite- ja selaintyyppisi sekä Sivustolla katsotut sivut.",
    ],
    [
        "title" => "3. Kuinka Käytämme Tietojasi",
        "body" => "Käytämme kerättyjä tietoja tilisi luomiseen ja hallintaan, kyselyihin vastaamiseen, asiakastuen tarjoamiseen, Sivuston ja palveluidemme parantamiseen, ja sallituissa tapauksissa tuote- ja tarjouspäivitysten lähettämiseen. Voit peruuttaa markkinointiviestinnän tilauksen milloin tahansa.",
    ],
    [
        "title" => "4. Evästeet ja Seurantateknologiat",
        "body" => "Sivusto käyttää evästeitä ja vastaavia teknologioita muistaakseen mieltymyksesi, pitääkseen sinut kirjautuneena ja ymmärtääkseen, kuinka vierailijat käyttävät sivujamme. Voit poistaa evästeet käytöstä selaimesi asetuksista, vaikka jotkin ominaisuudet eivät ehkä toimi oikein.",
    ],
    [
        "title" => "5. Tietojen Jakaminen",
        "body" => "Emme myy henkilötietojasi. Voimme jakaa tietoja luotettujen palveluntarjoajien kanssa, jotka auttavat meitä ylläpitämään Sivustoa (kuten hosting- tai analytiikkapalveluntarjoajat), tai kun laki sitä edellyttää tai suojataksemme laillisia oikeuksiamme.",
    ],
    [
        "title" => "6. Tietoturva",
        "body" => "Sovellamme kohtuullisia teknisiä ja organisatorisia toimenpiteitä suojataksemme tietojasi luvattomalta pääsyltä, muutokselta tai menetykseltä. Mikään siirto- tai tallennusmenetelmä ei ole täysin turvallinen emmekä voi taata täydellistä turvallisuutta.",
    ],
    [
        "title" => "7. Oikeutesi ja Valintasi",
        "body" => "Sijainnistasi riippuen sinulla saattaa olla oikeus päästä käsiksi, korjata tai pyytää henkilötietojesi poistamista, ja vastustaa tiettyjä niiden käyttötapoja. Käyttääksesi näitä oikeuksia, ota yhteyttä meihin <a class=\"link\" href=\"contacts.php\">yhteystietosivumme</a> kautta.",
    ],
    [
        "title" => "8. Lasten Yksityisyys",
        "body" => "Sivusto ei ole suunnattu alle 18-vuotiaille, emmekä tietoisesti kerää henkilötietoja alaikäisiltä. Jos uskot, että alaikäinen on antanut meille henkilötietoja, ota yhteyttä meihin, jotta voimme poistaa ne.",
    ],
    [
        "title" => "9. Muutokset Tähän Käytäntöön",
        "body" => "Voimme päivittää tätä Tietosuojakäytäntöä ajoittain. Kaikki muutokset julkaistaan tällä sivulla tarkistetulla voimaantulopäivällä. Kannustamme sinua tarkistamaan tämän sivun säännöllisesti.",
    ],
    [
        "title" => "10. Ota Yhteyttä Meihin",
        "body" => "Jos sinulla on kysymyksiä tästä Tietosuojakäytännöstä tai siitä, kuinka tietojasi käsitellään, ota yhteyttä meihin <a class=\"link\" href=\"contacts.php\">yhteystietosivumme</a> kautta tai sähköpostitse osoitteeseen info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page
// -------------------------
$conditions_meta_title = "$site_name Käyttöehdot";
$conditions_meta_description = "Tutustu Käyttöehtoihin, jotka sääntelevät $site_name-verkkosivuston ja kaupankäyntialustan käyttöä.";
$conditions_sections = [
    [
        "title" => "1. Ehtojen Hyväksyminen",
        "body" => "Käyttämällä $site_domain:ia (\"Sivusto\") hyväksyt olevasi sidottu näihin Käyttöehtoihin. Jos et hyväksy mitään osaa näistä ehdoista, älä käytä Sivustoa.",
    ],
    [
        "title" => "2. Kelpoisuus",
        "body" => "Sinun on oltava vähintään 18-vuotias ja sinulla on oltava laillinen kelpoisuus käyttää kaupankäyntiin liittyviä palveluita lainkäyttöalueellasi käyttääksesi Sivustoa. Käyttämällä Sivustoa vahvistat täyttäväsi nämä vaatimukset.",
    ],
    [
        "title" => "3. Palvelun Kuvaus",
        "body" => "$site_name tarjoaa verkkoalustan, jossa on koulutussisältöä, markkinatietoa ja tekoälyavusteisia analyysityökaluja. Mikään Sivustolla ei muodosta talous-, sijoitus-, vero- tai oikeudellista neuvontaa, ja kaikki annettu tieto on tarkoitettu vain yleisiin tiedotustarkoituksiin.",
    ],
    [
        "title" => "4. Käyttäjän Vastuut",
        "body" => "Olet vastuussa tarkkojen tietojen antamisesta rekisteröitymisen yhteydessä, tilisi tunnistetietojen luottamuksellisuuden säilyttämisestä ja kaikesta toiminnasta, joka tapahtuu tililläsi.",
    ],
    [
        "title" => "5. Immateriaalioikeudet",
        "body" => "Kaikki Sivuston sisältö, mukaan lukien teksti, kuvat, logot ja ohjelmisto, on $site_name:n tai sen lisenssinantajien omaisuutta ja on suojattu sovellettavilla immateriaalioikeuslaeilla. Et saa jäljentää tai levittää tätä sisältöä ilman lupaa.",
    ],
    [
        "title" => "6. Ei Talousneuvontaa",
        "body" => "Sivuston sisältö on tarkoitettu vain tiedotus- ja koulutustarkoituksiin, eikä sitä tulisi tulkita talousneuvonnaksi. Olet yksin vastuussa omista kaupankäyntipäätöksistäsi ja sinun tulisi konsultoida riippumatonta talousneuvojaa tarvittaessa. Katso <a class=\"link\" href=\"risk-warning.php\">Riskivaroituksemme</a> lisätietoja varten.",
    ],
    [
        "title" => "7. Vastuunrajoitus",
        "body" => "Lain sallimissa rajoissa $site_name ei ole vastuussa mistään suorista, epäsuorista, satunnaisista tai seuraamuksellisista vahingoista, jotka johtuvat Sivuston tai siihen liittyvien kolmannen osapuolen palveluiden käytöstäsi tai kyvyttömyydestäsi käyttää niitä.",
    ],
    [
        "title" => "8. Irtisanominen",
        "body" => "Pidätämme oikeuden keskeyttää tai lopettaa pääsysi Sivustolle harkintamme mukaan, ilman ilmoitusta, käytöksestä, jonka uskomme rikkovan näitä Käyttöehtoja tai olevan muutoin haitallista muille käyttäjille tai Sivustolle.",
    ],
    [
        "title" => "9. Muutokset Näihin Ehtoihin",
        "body" => "Voimme tarkistaa näitä Käyttöehtoja milloin tahansa. Sivuston jatkuva käyttö muutosten julkaisemisen jälkeen merkitsee päivitettyjen ehtojen hyväksymistä.",
    ],
    [
        "title" => "10. Yhteystiedot",
        "body" => "Kysymykset näistä Käyttöehdoista voidaan osoittaa tiimillemme <a class=\"link\" href=\"contacts.php\">yhteystietosivun</a> kautta tai sähköpostitse osoitteeseen info@$site_domain.",
    ],
];

// -------------------------
// Risk Warning page (TZ item 16, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Riskivaroitus — Kaupankäyntiriskin Ilmoitus";
$risk_meta_description = "Lue $site_name:n riskivaroitus ennen kaupankäyntiä: kryptovaluuttamarkkinoiden riskit, vipuvaikutus, likviditeetti, kyberturvallisuus ja sääntelyyn liittyvät näkökohdat.";
$risk_title = "Riskivaroitus";
$risk_intro = "Riskien ymmärtäminen on ensimmäinen askel kohti luottavaista kaupankäyntiä.";
$risk_ai_title = "Kuinka tekoälyjärjestelmämme auttaa riskienhallinnassa:";
$risk_ai_1_title = "Algoritminen Tehokkuus ja Tunteeton Kaupankäynti:";
$risk_ai_1_text = "Edistyneet algoritmit analysoivat markkinasignaaleja suorittaakseen tapahtumia objektiivisesti optimaalisina hetkinä.";
$risk_ai_2_title = "Datalähtöiset Strategiat:";
$risk_ai_2_text = "Strategiat perustuvat vahvistettuihin markkinakuvioihin ja reaaliaikaiseen analyysiin arvailun sijaan.";
$risk_ai_3_title = "Joustavat Asetukset ja Täysi Hallinta:";
$risk_ai_3_text = "Säädä riskiparametrejasi milloin tahansa. Seuraa kaikkia saldoja ja tapahtumia läpinäkyvästi hallintapaneelissasi, ilman piilokuluja ja ilman nostorajoituksia.";
$risk_disclaimer = "<strong>Vastuuvapauslauseke:</strong> Kaupankäynti sisältää aina riskin. Automatisoidut järjestelmät (mukaan lukien tekoäly) eivät takaa voittoa, voivat epäonnistua ohjelmistovirheiden tai odottamattomien markkinatapahtumien vuoksi, ja vaativat käyttäjän valvontaa. Aiempi suorituskyky ei takaa tulevia tuloksia. Tämä alusta palvelee vain tiedotus- ja markkinointitarkoituksia eikä tarjoa talousneuvontaa.";
$risk_s1_title = "1. Yleinen Kryptovaluuttamarkkinariski";
$risk_s1_text = "Kryptovaluutat ovat erittäin volatiileja, spekulatiivisia omaisuuseriä, jotka toimivat ympäri vuorokauden minimaalisella sääntelyvalvonnalla useimmilla lainkäyttöalueilla.";
$risk_s1_li1 = "Arvot voivat vaihdella dramaattisesti lyhyillä ajanjaksoilla, mikä voi johtaa sijoitetun pääoman täydelliseen menetykseen.";
$risk_s1_li2 = "Markkina-arvoihin voivat vaikuttaa voimakkaasti sääntelymuutokset, teknologinen kehitys, tietoturvaloukkaukset tai laajemmat makrotaloudelliset tapahtumat.";
$risk_s1_li3 = "Jotkin omaisuuserät voivat menettää arvonsa kokonaan. Sijoita vain varoja, joiden menettämiseen sinulla on varaa.";
$risk_s2_title = "2. Toteutus-, Likviditeetti- ja Vipuvaikutusriski";
$risk_s2_li1_title = "Markkinavolatiliteetti ja Likviditeetti:";
$risk_s2_li1_text = "Äärimmäiset hintaliikkeet (10-20%+ päivittäin) tai alhainen likviditeetti (erityisesti pienemmissä kolikoissa) voivat aiheuttaa viiveitä, alustan häiriöitä ja vakavaa toteutuksen liukumaa. Stop-loss-toimeksiannot eivät välttämättä takaa tappiorajoja äärimmäisissä olosuhteissa.";
$risk_s2_li2_title = "Vipuvaikutus- ja Marginaaliriski:";
$risk_s2_li2_text = "Vipuvaikutteiset tuotteet vahvistavat sekä voittoja että tappioita, mikä tarkoittaa, että voit menettää enemmän kuin alkuperäisen talletuksesi. Noin 70-80% vähittäissijoittajien tileistä menettää rahaa käydessään kauppaa vipuvaikutteisilla tuotteilla.";
$risk_s3_title = "3. Tekninen, Kyberturvallisuus- ja Kolmannen Osapuolen Riski";
$risk_s3_li1_title = "Tekniset Tekijät:";
$risk_s3_li1_text = "Verkkokaupankäyntiin liittyy luontaisia internetyhteyden häiriöiden, laitteisto-/ohjelmistovirheiden ja palvelun saatavuuden riskejä.";
$risk_s3_li2_title = "Kyberturvallisuus:";
$risk_s3_li2_text = "Kryptovaluuttatilit ovat usein tietojenkalastelun, haittaohjelmien ja hakkeroinnin kohteita. Tapahtumat ovat peruuttamattomia; kirjautumistietojesi vaarantuminen voi johtaa pysyvään menetykseen.";
$risk_s3_li3_title = "Kolmannen Osapuolen Alustat:";
$risk_s3_li3_text = "Tämä sivusto voi yhdistää käyttäjiä kolmannen osapuolen alustoihin. Emme valvo, suosittele emmekä takaa niiden turvallisuutta, toimintaa tai maksukykyä. Tee aina oma perusteellinen due diligence -tarkastuksesi ennen varojen tallettamista ulkoisille alustoille.";
$risk_s4_title = "4. Sääntely-, Vero- ja Loppumääräykset";
$risk_s4_li1_title = "Lakisääteinen Vaatimustenmukaisuus ja Verot:";
$risk_s4_li1_text = "Sääntelykehykset vaihtelevat huomattavasti ja muuttuvat nopeasti. Käyttäjät ovat yksin vastuussa siitä, että heidän kaupankäyntitoimintansa noudattaa paikallisia lakeja, ja omien verovelvoitteidensa täyttämisestä.";
$risk_s4_li2_title = "Ei Voittotakuita:";
$risk_s4_li2_text = "Ei ole olemassa \"turvallista\" tai riskitöntä kryptokaupankäyntiä. Kaikki annetut tuottoluvut tai suorituskykyesimerkit ovat puhtaasti hypoteettisia.";
$risk_s4_li3_title = "Soveltuvuus:";
$risk_s4_li3_text = "Jos et täysin ymmärrä riskejä, olet riippuvainen välttämättömistä varoista tai käyt kauppaa lainatulla rahalla, kryptokaupankäynti ei sovi sinulle. Konsultoi riippumatonta, lisensoitua talousneuvojaa epäselvissä tapauksissa.";
$risk_contact = "<strong>Yhteystiedot:</strong> Kysymyksiä tästä lausunnosta tai kyselyn lähettämistä varten, ota yhteyttä viralliseen asiakaspalvelutiimiimme sivustomme yhteydenottolomakkeen kautta.";

// -------------------------
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Rekisteröityminen | $site_name — Luo Ilmainen Tilisi";
$sign_meta_description = "Luo ilmainen $site_name-tilisi minuuteissa ja aloita älykkäämpi kaupankäynti tekoälypohjaisella markkina-analyysillä.";
$sign_h1 = "Luo Ilmainen Tilisi";
$sign_lead = "Liity $site_name:iin minuuteissa. Täytä tietosi alla aloittaaksesi.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Kiitos | $site_name";
$thanks_h1 = "Kiitos!";
$thanks_text = "Tietosi on vastaanotettu. $site_name-tiimin jäsen ottaa sinuun pian yhteyttä auttaakseen sinua aloittamaan.";
$thanks_btn = "Takaisin Etusivulle";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Sivukartta | $site_name";
$sitemap_meta_description = "Katso jokainen $site_name-sivuston sivu, mukaan lukien kaupankäyntialusta, tarjous, tuki ja oikeudelliset sivut.";
$sitemap_h1 = "Sivukartta";
$sitemap_lead = "Jokainen $site_name-sivu yhdessä paikassa.";

