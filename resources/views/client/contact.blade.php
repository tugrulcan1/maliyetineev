@extends('client.layouts.master')

@section('content')
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }});        padding-top: 30px;
        padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-15, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.1, 1], &quot;rotateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="alt-font text-white mb-0" style="font-size: 45px">İLETİŞİM</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="position-relative z-index-1 pb-0">
        <div class="d-none d-md-flex mb-1">
            <div class="section-link absolute-middle-center top-0 scroll-to-map" style="cursor: pointer">
                <div
                    class="d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px fs-22 text-dark-gray bg-white box-shadow-bottom">
                    <i class="fa fa-map-pin"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-9 sm-mb-45px">
                <div class="col-xxl-5 col-lg-6 md-mb-50px appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="fs-15 text-uppercase text-base-color fw-600 mb-15px d-block ls-1px" style="">Bizimle
                        iletişime geçin</span>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-50px sm-mb-35px" style="font-size:28px;width:100%">
                        Sizinle tanışmak için sabırsızlanıyoruz!
                    </h3>

                    <div class="icon-with-text-style-01 mb-10 md-mb-35px" style="">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="{{ asset('demo-marketing-contact-04.jpg') }}" class="h-80px" alt=""
                                    data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Tanışmak için
                                    ofisimize
                                    bekleriz</span>
                                <p class="w-60 md-w-100">Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul</p>
                            </div>
                        </div>
                    </div>

                    <div class="icon-with-text-style-01 mb-10 md-mb-35px" style="">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="{{ asset('demo-marketing-contact-02.jpg') }}" class="h-80px" alt=""
                                    data-no-retina="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Bizimle iletişime
                                    geçmekten
                                    çekinmeyin</span>
                                <div class="w-100 d-block">
                                    <span class="d-block">Telefon: <a href="tel:4443284"> 444 3 284
                                        </a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="icon-with-text-style-01" style="">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="{{ asset('demo-marketing-contact-03.jpg') }}" class="h-80px" alt=""
                                    data-no-retina="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Size nasıl yardımcı
                                    olabiliriz?</span>
                                <div class="w-100 d-block">
                                    <a href="mailto: info@maliyetineev.com"> info@maliyetineev.com</a><br>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 offset-xxl-1 appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="contact-form-style-03 position-relative border-radius-10px bg-white p-14 lg-p-10 box-shadow-double-large overflow-hidden last-paragraph-no-margin"
                        style="">
                        <h2 class="fw-700 text-dark-gray mb-30px sm-mb-20px fancy-text-style-4 ls-minus-2px"
                            style="font-size: 30px">
                            Size nasıl yardımcı olabiliriz?


                        </h2>
                        <form action="{{ route('contact.form.show') }}" method="POST" class="row contact-form-style-02">
                            @csrf
                            <div class="col-md-12 mb-30px">
                                <input class="input-name form-control required" type="text" name="name"
                                    placeholder="Ad soyad" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <input class="form-control required" type="email" name="email"
                                    placeholder="E-mail adresiniz" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <input class="form-control" type="tel" name="phone" placeholder="Telefon" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <input class="form-control" type="text" name="job" placeholder="Mesleğiniz" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <textarea class="form-control" cols="40" rows="4" name="message" placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <input type="checkbox" name="terms_condition">
                                <label>
                                    <span class="box fs-16">Kişisel Verilerin Korunması Hakkında <a
                                            href="{{ route('aydinlatma.metni') }}" target="_blank">Aydınlatma Yazısını
                                            okudum</a> ,
                                        kabul ediyorum.</span>
                                </label>
                            </div>
                            <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş sağlayacağız.
                                </p>
                            </div>
                            <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                <input type="hidden" name="redirect" value>
                                <button
                                    class="btn btn-base-color btn-medium btn-rounded btn-box-shadow"style="background: #0f75bc !important"
                                    type="submit">Gönder</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mt-8">
                <div class="col-md-auto text-center text-md-end sm-mb-20px">
                    <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Sosyal medya hesaplarımız </h6>
                </div>
                <div class="col-2 d-none d-lg-inline-block">
                    <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                </div>

                <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                    <ul class="large-icon dark">
                        @foreach ($socialMediaIcons as $socialMediaIcon)
                            <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands {{ $socialMediaIcon->icon_class }}"></i><span></span></a></li>
                        @endforeach

                    </ul>
                </div>

            </div>
        </div>

    </section>


    <section class="p-0 mt-5" id="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.305234018318!2d29.177666876446345!3d40.909052825528114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac554b56486c5%3A0x19df79713477599e!2sMaliyetine%20Ev!5e0!3m2!1str!2str!4v1714997097498!5m2!1str!2str"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
