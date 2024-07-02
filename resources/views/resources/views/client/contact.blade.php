

@extends('client.layouts.master')

@section('content')


<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
style="background-image: url({{ $contact->file ?? asset('images/iletisim.png') }})">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <!-- <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Contact
                        us</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Clients relationships</h2>
                </div> -->
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 md-mb-50px"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="text-dark-gray fw-700 ls-minus-2px w-90 md-w-100">Sizinle tanışmak için
                        sabırsızlanıyoruz!
                    </h3>
                    <p class="w-95 md-w-100">Dilediğiniz zaman ofisimize gelip tanışabiliriz.</p>
                    <div class="row row-cols-1 justify-content-center mt-30px">

                        <div class="col icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded bg-yellow w-80px h-80px rounded-circle me-20px">
                                    <i class="fa fa-envelope text-white icon-very-medium"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-block ls-minus-05px">Aklına takılan soru mu var?</span>

                                    <a href="mailto:info@maliyetineev.com"
                                        class=" lh-16 d-block">info@maliyetineev.com</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 ps-50px lg-ps-15px">
                    <div class="row row-cols-1 row-cols-sm-2 justify-content-center">
                        <div class="col xs-mb-30px"
                            data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.305234018318!2d29.177666876446345!3d40.909052825528114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac554b56486c5%3A0x19df79713477599e!2sMaliyetine%20Ev!5e0!3m2!1str!2str!4v1714997097498!5m2!1str!2str"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-0 h-200px sm-h-50px overlap-height" id="location">
        <div class="container-fluid h-100 overlap-gap-section">
            <div class="row justify-content-center h-100">
                <div class="col-12 p-0">
                    <div id="map" class="map h-500px md-h-400px sm-h-350px"
                        data-map-options="{ &quot;lat&quot;: -37.805688, &quot;lng&quot;: 144.962312, &quot;style&quot;: &quot;Silver&quot;, &quot;marker&quot;: { &quot;type&quot;: &quot;HTML&quot;, &quot;color&quot;: &quot;#005153&quot; }, &quot;popup&quot;: { &quot;defaultOpen&quot;: true, &quot;html&quot;: &quot;<div class=infowindow><strong class=\&quot;mb-3 d-inline-block alt-font\&quot;>Crafto Accounting</strong><p class=\&quot;alt-font\&quot;>16122 Collins street, Melbourne, Australia</p></div><div class=\&quot;google-maps-link alt-font\&quot;> <a aria-label=\&quot;View larger map\&quot; target=\&quot;_blank\&quot; jstcache=\&quot;31\&quot; href=_https_/maps.google.com/mapse283.html?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\%22 jsaction=\&quot;mouseup:placeCard.largerMap\&quot;>VIEW LARGER MAP</a></div>&quot; } }">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container overlap-section overlap-section-three-fourth"
            data-anime="{&quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 500, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="row row-cols-md-1 justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Size nasıl
                                    yardımcı olabiliriz?</h3>
                            </div>
                            <div class="col-3 text-end"
                                data-anime="{ &quot;translateY&quot;: [30, 0], &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <i class="fa-solid fa-message icon-large text-dark-gray animation-zoom"></i>
                            </div>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="{{ route('contact.form.show') }}" method="POST"
                            class="row contact-form-style-02">
                            @csrf
                            <div class="col-md-6 mb-30px">
                                <input class="input-name form-control required" type="text" name="name"
                                    placeholder="Ad soyad" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control required" type="email" name="email"
                                    placeholder="E-mail adresiniz" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control" type="tel" name="phone" placeholder="Telefon" />
                            </div>
                            <div class="col-md-6 mb-30px">
                                <input class="form-control" type="text" name="job" placeholder="Mesleğiniz" />
                            </div>
                            <div class="col-md-12 mb-30px">
                                <textarea class="form-control" cols="40" rows="4" name="message"
                                    placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                <p class="text-center text-md-start fs-15 lh-26">24 saat içerisinde dönüş sağlayacağız.
                                </p>
                            </div>
                            <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                <input type="hidden" name="redirect" value>
                                <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow"style="background: #0f75bc !important"
                                    type="submit">Gönder</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>

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
                            @foreach($socialMediaIcons as $socialMediaIcon)
                            <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands {{$socialMediaIcon->icon_class}}"></i><span></span></a></li>
                                        @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endsection


   
