@extends('client.layouts.master')

@section('content')
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }}); padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Maliyetine Ev&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        {{-- <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">NEDİR</span> --}}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-solitude-blue border-radius-6px p-45px lg-p-30px mb-25px">
                        {{-- <span class="fs-19 alt-font text-dark-gray fw-700 mb-20px d-inline-block">Maliyetine Ev</span> --}}
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Nasıl Çalışır?</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Müşterilerimize Mektup</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Neden Maliyetine Ev</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">EV ALIRKEN, %100 GÜVENDE OLMANIN YOLU</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h4>Herkes Maliyetine Ev Sahibi Olsun Diye</h4>
                            <p>

                            <ol>
                                <li>
                                    <strong>Maliyetine Ev'de bir ev satın aldığınızda öncelikle %100 güvenli kapora ödeme
                                        sistemi ile kaporanızı ödersiniz.</strong>
                                    Ödemiş olduğunuz kapora, tapunuzu alana kadar güvenli kapora hesabında korunur.
                                </li>
                                <li>
                                    <strong>Müşterimiz belirlenen tapu tarihinde tapu dairesine davet edilir.</strong>
                                    Maliyetine Ev projelerine dahil olan müşterilerimiz öncelikle olarak peşinat ödemesiyle
                                    tapusuna sahip olur. Tapusuz Ev mi alınır? mottosuyla sistemini sürdüren Maliyetine
                                    Ev’de tüm müşteriler peşinat ödemeleri ile tapularını alır.
                                </li>
                                <li>
                                    <strong>Maliyetine Ev, sizleri tüm süreçlerinizde güven ve garanti altına alır.</strong>
                                    Tapunuzu aldıktan sonra aynı gün içinde yada ertesi gün noter sözleşmesi imzalarsınız.
                                    Maliyetine Ev, mülk alım sürecinizde süreçlerin resmi olarak yürütülmesi ve mağduriyet
                                    yaşamamanız adına noter sözleşmesi ile haklarınızı korur.
                                </li>
                                <li>
                                    <strong>İnşaat başlangıcı ile taksit ödemeleriniz başlar.</strong>
                                    Maliyetine Ev markası sizlerden karılığını almadığınız hiçbir şey için 1 TL ödeme talep
                                    etmez. İnşaatlar, Maliyetine Ev markasının sizlere noter sözleşmenizde taahhüt ettiği
                                    süre içerisinde başlar ve teslim edilir.
                                </li>
                                <li>
                                    <strong>Müşterilerimiz Maliyetine Ev finansmanını kullanarak maliyetine ev sahibi
                                        olur.</strong>
                                    Maliyetine Ev firması projelerinde müşterileri 12 aydan 120 aya kadar taksitlendirir.
                                    Sizler evlerinizi teslim aldıktan sonrada ödemelerinize devam edebilirsiniz. Bankasız
                                    faizsiz Maliyetine Ev finansmanı ile maliyetine ev sahibi olursunuz.
                                </li>
                                <li>
                                    <strong>Maliyetine Ev ister yatırım ister oturum seçeneğini seçebilirsiniz.</strong>
                                    Maliyetine Ev, projelerine dahil olan müşterilerine iki farklı modelleme sunar.
                                    Yatırımcı müşterilerimize satış ve kiralama garantisi sunarken, oturum için alan
                                    müşterilerimizin site içi huzur ve refahını her zaman en üst seviyede tutarız.
                                </li>
                            </ol>


                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <p>Değerli Maliyetine Ev sahibi adayımız, 2012-2023 yılları arasında ülkemizde yapılan AR-GE
                                çalışmaları göstermektedir ki; hazır konut fiyatlarının sürekli artması ve bankaların kredi
                                verme politikalarındaki sıkılaşmalar, özellikle yatırımcıları ve ‘ilk evini’ almak
                                isteyenleri etkilemektedir. Ekonomik krizlerin etkisiyle, projelendirildiği halde
                                başlayamayan ya da başlanıp yarım bırakılan inşaatların sayısı maalesef az değildir. En
                                büyük zararı da başlangıç aşamasında tapusunu alamamış olan müşteriler görmektedir. Ev ya da
                                arsa alımlarında, dikkat edilecek ilk husus, tapu devrinin mümkün olduğunca hızlı
                                gerçekleşmesidir. Maliyetine Ev olarak; yatırımcılara ve konut sahibi olmak isteyen sizlere
                                birincil tavsiyemiz; mülk alımınızı topraktangerçekleştirecek olsanız dahi, yaptığınız
                                ödemenin karşılığı olan tapunuzuhemen almanızdır. %100 Güven ve %100 Garanti Teminatı sunan
                                Maliyetine Ev, arsa ve ev alımında sık yaşanan sorunlara çözüm getirmekte, müşterilerinin
                                haklarını korumayı öncelikli görevi saymaktadır. “Ev sahibi olmak herkesin hakkıdır”
                                inancıyla yola çıkan, Türkiye’de bir ilki başararak “Hemen Tapu Teslimi” imkânı sunan
                                “Maliyetine Ev”; iddiası adındanda anlaşılacağı üzere, sizleri ‘topraktan, maliyetine ev
                                sahibi yapmak’için kurulmuştur.
                                Tapularını hemen alarak, maliyetine ev sahibi olmayı başaran müşterilerimizin mutluluğu,
                                şirketimizin en büyük gururudur. Sizlere taahhüdümüz: Mülk alımında karşılaşılan
                                olumsuzlukları sıfıra indirerek, uygun fiyatlarla ve güvenle ev sahibi (daire, villa ya da
                                işyeri) olmanızdır. Ne mutlu bizlere ki; daha ilk yılımızda proje geliştirme rekoru kırdık,
                                12 adet projeye imza attık. Başlatmış olduğumuz ilk projemizin inşaatını neredeyse
                                tamamladık ve söz verdiğimiz tarihten önce, müşterilerimizi ev sahibi yapacak olmanın haklı
                                gururunu yaşamaya başladık. Hedefimiz, herkesin diline yerleşmiş olan “bu devirde ev sahibi
                                olmak zor” anlayışını yıkarak, binlerce ailenin daha bizimle, ‘güvenle’ ev sahibi olmasını,
                                uygun maliyetlerle geleceğe yatırım yapmasını sağlamaktır. Biz bu yolda ilerlemeye
                                kararlıyız. Sizi de ev sahibi yapmadan bırakmayız! Şubelerimize gelin, sistemimizi ve
                                projelerimizi, size detaylı olarak anlatalım.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <p>
                            <ul>
                                <li>
                                    <strong>GÜVENLİ - ŞEFFAF BİR SİSTEM İÇİNDE OLURSUNUZ</strong>
                                    <ul>
                                        <li>Her adımda, şeffaflık ve güven ilkesiyle yol alırız.</li>
                                        <li>Ödeme yaptığınız an, arsa tapunuz elinizde olur.</li>
                                        <li>Daha sonra da sadece evinizin inşaat maliyetlerini aylık taksitlerle, faizsiz ve
                                            kredisiz olarak ödersiniz!</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>SADECE EVİNİZİN MALİYETİNİ ÖDERSİNİZ</strong>
                                    <ul>
                                        <li>Arsanızın tapusunu aldıktan sonra inşaat süreci başlar.</li>
                                        <li>Bu sırada sadece evinizin m² üzerinden belirlenen inşaat maliyetini ödersiniz.
                                        </li>
                                        <li>Ek ödemeler ve sürpriz masraflarla karşılaşmadan, hak ediş usulü ile %100
                                            maliyetine ev sahibi olursunuz.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>ÖDEME KOLAYLIĞI İMKÂNINDAN YARARLANIRSINIZ</strong>
                                    <ul>
                                        <li>Ödediğiniz peşinatla tapu sahibi olduğunuz sistemimizde;</li>
                                        <li>İnşaat maliyetleri için yaptığınız aylık ödemeler, size uygun seçenekler
                                            sunularak, sizinle birlikte belirlenir.</li>
                                        <li>Böylece ev sahibi olma hayalinize, sıkıntıya girmeden kolayca ulaşırsınız.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>TESLİMATINIZ EN HIZLI ŞEKİLDE GERÇEKLEŞİR</strong>
                                    <ul>
                                        <li>Tüm projelerimiz alanında uzman mimarlarımız ve mühendislerimiz tarafından,
                                            ruhsatlı yapı denetim birimleri kontrolünde ve iskân garantili olarak inşa
                                            edilmektedir.</li>
                                        <li>%100 inşaat tamamlama garantisiyle, sözleşmede belirtilen sürede evinizi teslim
                                            alırsınız.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>BANKA GÜVENCESİNDEN YARARLANIRSINIZ</strong>
                                    <ul>
                                        <li>Kaporanız, sıfır risk ile banka garantörlüğünde korunur.</li>
                                        <li>Tapunuzu hemen teslim aldığınız için, yatırımınız güvende olur ve herhangi bir
                                            sorunla karşılaşma ihtimaliniz kalmaz.</li>
                                    </ul>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <p>
                            <h1> %100 GÜVENDE OLMAK DEMEK, PARANIZIN GÜVENDE OLMASI DEMEKTİR</h1>
                            <ul>
                                <li>
                                    <strong>Ev sahibi olmaya karar verdiğinizde, önce evinizi hangi projemizden seçmek
                                        istediğinizi belirtirsiniz</strong>
                                </li>
                                <li>
                                    <strong>Maliyetine Ev olarak, tüm süreçlerinizde güvence sağlamak görevimiz. Bunun ilk
                                        adımı da kaporadır.</strong>
                                    <ul>
                                        <li>İnternet üzerinden, <a href="http://emlaksepette.com">emlaksepette.com</a>
                                            adresine kaporanızı yatırdığınızda, banka güvencesine ulaşmış olursunuz.</li>
                                        <li>Burada ödemeleriniz 40 gün boyunca banka garantörlüğü altında kalır, sizin için
                                            korunur.</li>
                                        <li>Anlaşma öncesinde kapora ödemesini yapanlar, peşinatlarını tapu alırken öderler.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>%100 GÜVENDE OLMAK DEMEK, TAPUNUZUN HEMEN TESLİM EDİLMESİDİR</strong>
                                    <ul>
                                        <li>Türkiye'de bir ilk olan Maliyetine Ev sistemi, 2 aşamalı çalışır.</li>
                                        <li>Birinci aşamada evinizin arsasına sahip olmanızı sağlar. Bu sayede, sahip
                                            olduğunuz arsanın tapusunu hemen alır, mülkiyetinizi resmileştirirsiniz.</li>
                                        <li>1.aşama tamamlandığında, arsa tapunuz size teslim edilir.</li>
                                        <li>İkinci aşama ise, ev sahibi olma sürecinizin başlamasıdır.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>%100 GÜVENDE OLMAK DEMEK, AYLIK TAKSİTLERLE ÖDEME YAPMA AVANTAJINDAN YARARLANMAK
                                        DEMEKTİR</strong>
                                    <ul>
                                        <li>2. aşamada, ev sahibi olma süreciniz başlar.</li>
                                        <li>Önce bir ödeme planı çıkarılır. Ödeme planın tüm ayrıntıları, yapılan noter
                                            sözleşmesinde yer alır.</li>
                                        <li>Aylık taksitlerle, kısa sürede evinize sahip olmanızı sağlayacak bu yöntemde,
                                            inşaat devam ederken, siz de taksitlerini ödersiniz.</li>
                                        <li>Taahhüt edilen süre tamamlandığında da ev sahibi olursunuz.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>%100 GÜVENDE OLMAK DEMEK, MALİYETİNE EV SAHİBİ OLMA HAKKIDIR</strong>
                                    <ul>
                                        <li>Amacımız, sizi maliyetine ev sahibi yapmaktır. Önce projelendirilmiş arsa
                                            bedelini ödeyerek tapunuzu teslim alırsınız.</li>
                                        <li>Sonra da inşaat süreci başlar.</li>
                                        <li>Bu arada da sözleşmede belirtilen aylık taksitlerle evinizin inşaat
                                            maliyetlerini (maliyetler m² üzerinden hesaplanır) ödemeye başlarsınız.</li>
                                        <li>İnşaat tamamlandığında, şirketimize sadece %15 hizmet bedeli ödeyerek tapunuzu
                                            alır ve evinize taşınırsınız.</li>
                                    </ul>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
