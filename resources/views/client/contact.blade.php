@extends('client.layouts.master')

@section('content')

    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }});        padding-top: 30px;
        padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [-15, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [1.1, 1], &quot;rotateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="alt-font text-white mb-0" style="font-size: 45px">İletişim</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative z-index-1 pb-0">
        <div class="d-none d-md-flex mb-1">
            <a href="#down-section" class="section-link absolute-middle-center top-0">
                <div
                    class="d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px fs-22 text-dark-gray bg-white box-shadow-bottom">
                    <i class="fa fa-mouse"></i>
                </div>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 pb-7 sm-pb-40px appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span
                        class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 mb-10px ls-1px d-inline-block"
                        style="">Book your appointment</span>
                    <h2 class="alt-font fw-400 text-dark-gray ls-minus-1px w-80 lg-w-100 mb-40px sm-mb-30px" style="">
                        We would love to hear from you.</h2>
                    <div class="row row-cols-1 row-cols-sm-2 mb-30px xs-mb-25px" style="">
                        <div class="col last-paragraph-no-margin xs-mb-25px">
                            <span class="fs-18 fw-600 text-dark-gray">Visit beauty salon</span>
                            <div class="h-1px w-80 sm-w-100 bg-dark-gray mt-10px mb-10px"></div>
                            <p class="w-75 lg-w-90">401 Broadway, 24th Floor New York, NY 10013</p>
                        </div>
                        <div class="col">
                            <span class="fs-18 fw-600 text-dark-gray">Book appointment</span>
                            <div class="h-1px w-80 sm-w-100 bg-dark-gray mt-10px mb-10px"></div>
                            <div class="w-100 d-block">
                                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br><a
                                    href="mailto:booking@yourdomain.com">booking@yourdomain.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2" style="">
                        <div class="col last-paragraph-no-margin xs-mb-25px">
                            <span class="fs-18 fw-600 text-dark-gray">Let's talk with us</span>
                            <div class="h-1px w-80 sm-w-100 bg-dark-gray mt-10px mb-10px"></div>
                            <div class="w-100 d-block">
                                <span class="d-block"><span class="fw-600 text-dark-gray">Phone:</span> <a
                                        href="tel:1800222000" class="text-medium-gray">1-800-222-000</a></span>
                                <span class="d-block"><span class="fw-600 text-dark-gray">Fax:</span> 1-800-222-002</span>
                            </div>
                        </div>
                        <div class="col">
                            <span class="fs-18 fw-600 text-dark-gray">Opening hours</span>
                            <div class="h-1px w-80 sm-w-100 bg-dark-gray mt-10px mb-10px"></div>
                            <div class="w-100 d-block">
                                <span class="d-block"><span class="fw-600 text-dark-gray">Mon - Fri:</span> 09 am to 08
                                    pm</span>
                                <span class="d-block"><span class="fw-600 text-dark-gray">Sat - Sun:</span> 09 am to 06
                                    pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-end contact-form-style-03 sm-mb-50px">
                    <div
                        class="bg-dark-gray box-shadow-double-large p-13 lg-p-10 border-radius-10px position-relative overflow-hidden">
                        <h2 class="alt-font text-white xs-mb-15px fancy-text-style-4 ls-minus-1px">Say
                            <span
                                data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;hello!&quot;, &quot;hallå!&quot;, &quot;salve!&quot;] }"
                                class="appear"><span class="anime-text words chars splitting" data-splitting="true"
                                    style="--word-total: 1; --char-total: 6;"><span class="word" data-word="hello!"
                                        style="--word-index: 0;"><span class="char" data-char="h"
                                            style="--char-index: 0; opacity: 1; transform: rotateX(0deg);">h</span><span
                                            class="char" data-char="e"
                                            style="--char-index: 1; opacity: 1; transform: rotateX(0deg);">e</span><span
                                            class="char" data-char="l"
                                            style="--char-index: 2; opacity: 1; transform: rotateX(0deg);">l</span><span
                                            class="char" data-char="l"
                                            style="--char-index: 3; opacity: 1; transform: rotateX(0deg);">l</span><span
                                            class="char" data-char="o"
                                            style="--char-index: 4; opacity: 1; transform: rotateX(0deg);">o</span><span
                                            class="char" data-char="!"
                                            style="--char-index: 5; opacity: 1; transform: rotateX(0deg);">!</span></span></span></span>
                        </h2>
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-person icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                    type="text" name="name" placeholder="Enter your name*">
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                    type="email" name="email" placeholder="Enter your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea mt-15px mb-12">
                                <textarea
                                    class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control"
                                    name="comment" placeholder="Enter your message" rows="4"></textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-medium btn-white btn-box-shadow mt-30px fw-700 submit btn-round-edge"
                                    type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                        <div
                            class="w-200px h-200px xs-w-150px xs-h-150px border-radius-100 bg-gradient-solitude-blue-fair-pink d-flex align-items-center justify-content-center position-absolute right-minus-30px xs-right-minus-20px bottom-minus-60px xs-bottom-minus-40px">
                            <img src="images/demo-beauty-salon-contact-01.png" class="h-85px" alt=""
                                data-no-retina="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <form action="{{ route('contact.form.show') }}" method="POST" class="row contact-form-style-02">
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
                                <textarea class="form-control" cols="40" rows="4" name="message" placeholder="Mesajınız"></textarea>
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
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/"
                                        target="_blank"><i
                                            class="fa-brands {{ $socialMediaIcon->icon_class }}"></i><span></span></a></li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="p-0" id="down-section">
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
