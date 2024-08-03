 @extends('client.layouts.master')



 @section('content')

     <section class="p-0 bg-dark-gray">
         <div class="swiper full-screen m-0 ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor"
             data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-number&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 5000, &quot;disableOnInteraction&quot;: false },  &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }"
             data-number-pagination="1">
             <div class="swiper-wrapper">

                 @foreach ($sliders as $index => $slider)
                     <div class="swiper-slide cover-background"
                         style="background-image:url('{{ asset('images/' . $slider->image) }}');">
                         <div class="container h-100">
                             <div class="row align-items-center h-100">

                             </div>
                         </div>
                     </div>
                 @endforeach


             </div>
             <div class="container">
                 <div class="row g-0">
                     <div class="col-12 position-relative">

                         <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number"></div>

                     </div>
                 </div>
             </div>



         </div>
     </section>
     <section class="p-0 lg-pt-8 xs-pt-50px">
         <div class="container">
             <div class="row justify-content-end">
                 <div class="col-xl-5 outside-box-top-205px lg-mt-0 position-relative z-index-1">
                     <div class="border-radius-10px overflow-hidden">
                         <div class="bg-base-color p-50px xs-p-30px position-relative" style="background-color:#EC2E2D">
                             <span class="text-white opacity-8 fw-500 d-block mb-5px">24 Saatte Tapu Teslim</span>
                             <h5 class="mb-0 fw-700 text-white">ÖNCE TAPUNUZU ALIN SONRA PEŞİNATINIZI ÖDEYİN</h5>
                             <div class="position-absolute top-0 end-0">
                                 <img src="{{ asset('demo-logistics-diagonal-line-01.svg') }}" alt="" height="100"
                                     width="100" data-no-retina="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="pt-5 position-relative">
         <img src="images/demo-data-analysis-bg-06.png"
             class="position-absolute top-20 left-0px skrollable skrollable-before"
             data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""
             style="transform: translateY(150px);" data-no-retina="">
         <img src="images/demo-data-analysis-bg-07.png"
             class="position-absolute top-10 right-0px lg-w-30 lg-bottom-0px skrollable skrollable-before"
             data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""
             style="transform: translateY(150px);" data-no-retina="">
         <div class="container">
             <div class="row justify-content-center mb-2 appear anime-child anime-complete"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                 <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center" style="">
                     <div
                         class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">
                         Maliyetine Ev Sistemi</div>
                     <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Maliyetine Ev <span
                             class="text-highlight">Sistemine<span
                                 class="bg-base-color opacity-3 h-10px bottom-10px"></span></span> Dair Her Şey</h2>
                 </div>
             </div>
             <div class="row row-cols-1 row-cols-lg-2 justify-content-center mb-2 appear anime-child anime-complete"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;perspective&quot;: [1200,1200], &quot;translateY&quot;: [30, 0], &quot;scale&quot;: [1.05, 1], &quot;rotateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                 <div class="col icon-with-text-style-02 transition-inner-all mb-30px" style="">
                     <div
                         class="feature-box feature-box-left-icon text-start bg-ghost-white border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                         <div class="feature-box-icon">
                             <img src="images/demo-data-analysis-icon-01.png" alt="" data-no-retina="">
                         </div>
                         <div class="feature-box-content">
                             <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Başvuru</span>
                             <p class="w-90 xl-w-100">
                                 Her proje için başvurular ayrı ayrı toplanır. Yani, her proje için bağımsız bir başvuru
                                 süreci yürütülür.</p>
                         </div>
                     </div>
                 </div>


                 <div class="col icon-with-text-style-02 transition-inner-all mb-30px" style="">
                     <div
                         class="feature-box feature-box-left-icon text-start bg-cosmic-latte-white border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                         <div class="feature-box-icon">
                             <img src="images/demo-data-analysis-icon-02.png" alt="" data-no-retina="">
                         </div>
                         <div class="feature-box-content">
                             <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Ön Kayıt</span>
                             <p class="w-90 xl-w-100">Başvuru şartlarını taşıyan kişiler ön kayıt bedeliniüvenli kapora
                                 sistemine online ödeyerek tamamlar.</p>
                         </div>
                     </div>
                 </div>


                 <div class="col icon-with-text-style-02 transition-inner-all mb-30px" style="">
                     <div
                         class="feature-box feature-box-left-icon text-start bg-chablis-red border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin position-relative xs-pe-5 xs-ps-5">
                         <div class="feature-box-icon">
                             <img src="images/demo-data-analysis-icon-03.png" alt="" data-no-retina="">
                         </div>
                         <div class="feature-box-content">

                             <span class="d-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Ödeme Sistemi</span>
                             <p class="w-90 xl-w-100">Maliyetine evim ödeme sisteminde 3 farklı ödeme planından birini
                                 seçebilir.</p>
                         </div>
                     </div>
                 </div>


                 <div class="col icon-with-text-style-02 transition-inner-all mb-30px" style="">
                     <div
                         class="feature-box feature-box-left-icon text-start bg-lavender-violet border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                         <div class="feature-box-icon">
                             <img src="images/demo-data-analysis-icon-04.png" alt="" data-no-retina="">
                         </div>
                         <div class="feature-box-content">
                             <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Tapu Devri</span>
                             <p class="w-90 xl-w-100">Noter sözleşmesi yapılarak belirlenen ödeme planına göre peşinat
                                 karşılığı tapu devri yapılır.</p>
                         </div>
                     </div>
                 </div>

             </div>
             <div class="row justify-content-center appear anime-child anime-complete"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                 <div class="col-auto text-center" style="">

                     <div class="d-inline-block text-dark-gray fs-22 alt-font fw-500"> <span class="fw-700">Kalan
                             ödemeler</span> belirlenen ödeme planına göre inşaat başlaması ile birlikte başlar.</div>
                 </div>
             </div>
         </div>
     </section>
     <section class="p-0 top-space-margin overflow-hidden pb-25px">
        <div class="container">
            <div class="row justify-content-center mb-2 appear anime-child anime-complete"
                 data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center">
                    <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Projelerimiz</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="outside-box-right-30 sm-outside-box-right-0"
                         data-anime="{ &quot;translateX&quot;: [40, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="swiper magic-cursor base-color"
                             data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 25, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 300000, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <div class="swiper-button-prev slider-navigation-style-04 bg-blue-licorice" tabindex="0" role="button" aria-label="Previous slide">
                                    <i class="bi bi-arrow-left-short icon-very-medium text-white"></i>
                                </div>
                                <div class="swiper-button-next slider-navigation-style-04 bg-blue-licorice" tabindex="0" role="button" aria-label="Next slide">
                                    <i class="bi bi-arrow-right-short icon-very-medium text-white"></i>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                @foreach ($projects as $project)
                                    <div class="swiper-slide">
                                        <div class="interactive-banner-style-09 position-relative overflow-hidden">
                                            <img class="w-100"
                                                 src="{{ asset('projects_cover_image/' . $project->cover_image) }}" alt />
                                            <div class="opacity-full-dark bg-gradient-bottom-dark-transparent"></div>
                                            <div
                                                class="image-content h-100 w-100 p-10 xl-p-30px sm-pe-15px sm-ps-15px text-center d-flex justify-content-end align-items-end flex-column">
                                                <div class="w-100">
                                                    <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                       class="btn btn-medium btn-rounded btn-box-shadow btn-white text-uppercase fw-700 ps-15px pe-15px pt-5px pb-5px lh-16 mb-20px">{{ $project->project_sub_title }}</a>
                                                    <div
                                                        class="alt-font fw-700 sliding-box-title mb-10px w-80 xl-w-100 md-w-90 sm-w-70 xs-w-100 mx-auto">
                                                        <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                           class="text-white alt-font fw-600 fs-40 lg-fs-24 ls-minus-1px lg-ls-0px">{{ $project->project_title }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- <section class="overflow-hidden bg-blue-whale position-relative" style="background-color: #EC2E2D">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-4 md-mb-40px text-center text-lg-start"
                     data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                     <h3 class="alt-font text-white mb-55px md-mb-40px ls-minus-1px">
                         Maliyetine Evim Sistemi ile
                         <span class="fw-600 font-style-italic text-decoration-line-bottom-medium">Siz de</span>
                         <br>
                         <span class="fw-600 font-style-italic text-decoration-line-bottom-medium">Ev Sahibi olun.</span>
                     </h3>
                     <div class="d-flex justify-content-center justify-content-lg-start">
                         <div
                             class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-blue-licorice">
                             <i class="fa fa-arrow-left-short icon-very-medium text-white"></i>
                         </div>
                         <div
                             class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-blue-licorice">
                             <i class="fa fa-arrow-right-short icon-very-medium text-white"></i>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-8">
                     <div class="outside-box-right-25 sm-outside-box-right-0"
                         data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                         <div class="swiper magic-cursor base-color slider-one-slide"
                             data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                             <div class="swiper-wrapper">


                                 @foreach ($projects as $project)
                                     <div class="swiper-slide">
                                         <div class="col interactive-banner-style-08">
                                             <figure
                                                 class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                 <img src="{{ asset('projects_cover_image/' . $project->cover_image) }}"
                                                     alt="Demo Image">

                                                 <figcaption
                                                     class="d-flex flex-column align-items-start justify-content-center position-absolute left-0 top-0 w-100 h-100 z-index-1 ">

                                                     <div class="d-flex w-100 align-items-center mt-auto">
                                                         <div class="col last-paragraph-no-margin">
                                                             <h6 class="alt-font fw-500 font-style-italic mb-0 w-80 xl-w-95"
                                                                 style="padding-left: 10px;padding-bottom:10px">
                                                                 <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                                     style="font-family:'Playfair Display', serif !important"
                                                                     class="text-white">{{ $project->project_title }}</a>
                                                             </h6>
                                                         </div>
                                                         <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                             class="circle-box bg-white w-55px h-55px rounded-circle ms-auto position-relative rounded-box">
                                                             <i
                                                                 class="fa fa-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                         </a>
                                                     </div>
                                                     <div
                                                         class="position-absolute left-0 top-0 w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                     </div>
                                                 </figcaption>
                                             </figure>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div
             class="position-absolute bottom-minus-40px md-bottom-minus-30px sm-bottom-minus-20px left-0 w-100 text-center d-none d-sm-block">
             <div class="container-fluid">
                 <div style="opacity: .05;"
                     class="fs-170 lg-fs-140 md-fs-130 sm-fs-100 fw-600 text-outline text-outline-color-white opacity-05 ls-minus-4px sm-ls-minus-1px">
                     Maliyetine Ev
                 </div>
             </div>
         </div>
     </section> --}}


     <section class="pt-0 mgyy  " style="display:none">
         <div class="container">
             <div class="row align-items-center justify-content-center">

                 <div class="col-lg-5 offset-lg-1 col-md-11 contact-form-style-01 position-relative" style="">
                     <div class="ps-8 pe-8 pt-8 pb-8 lg-p-8 bg-white box-shadow-quadruple-large border-radius-6px">
                         <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px"
                             data-anime="{ &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                             Formu doldurun sizi arayalım</h6>
                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul class="mb-0">
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                         <form method="POST" action="{{ route('home.form.show') }}"
                             data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                             @csrf
                             <div class="position-relative form-group mb-15px">
                                 <span class="form-icon"><i class="fas fa-user"></i></span>
                                 <input type="text" name="name" class="form-control required"
                                     placeholder="Ad soyad" />
                             </div>
                             <div class="position-relative form-group mb-15px">
                                 <span class="form-icon"><i class="fa fa-envelope"></i></span>
                                 <input type="email" name="email" class="form-control required"
                                     placeholder="E-posta adresiniz" />
                             </div>
                             <div class="position-relative form-group mb-20px">
                                 <span class="form-icon"><i class="fa fa-phone"></i></span>
                                 <input type="tel" name="phone" class="form-control"
                                     placeholder="Telefon Numaranız" />
                             </div>
                             <div class="position-relative terms-condition-box text-start d-inline-block">
                                 <input type="checkbox" name="terms_condition" id="terms_condition"
                                     class="terms-condition check-box align-middle ">
                                 <label>

                                     <span class="box fs-16">Kişisel Verilerin Korunması Hakkında <a
                                             href="{{ route('aydinlatma.metni') }}" target="_blank">Aydınlatma Yazısını
                                             okudum</a>, kabul ediyorum.</span>
                                 </label>
                             </div>
                             <div class="position-relative mt-20px">
                                 <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow w-100"
                                     type="submit">Gönder</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>







     <section class="position-relative overflow-hidden">
         <img src="images/demo-real-estate-07.png" alt class="position-absolute left-100px top-50px z-index-minus-1"
             data-bottom-top="transform: translate3d(80px, 0px, 0px);"
             data-top-bottom="transform: translate3d(-180px, 0px, 0px);" />
         <img src="images/demo-real-estate-08.png" alt class="position-absolute right-100px top-100px z-index-minus-1"
             data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);"
             data-top-bottom="transform:scale(1, 1) translate3d(-400px, 0px, 0px);" />
         <div class="container">
             <div class="row align-items-center justify-content-center">
                 <div class="col-lg-6 text-end md-mb-50px"
                     data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#262b35&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                     <figure class="position-relative m-0">
                         <img src="https://maliyetineevpanel.emlaksepette.com/uploads/28-1_Photo%20-%206.jpg"
                             class="w-90 border-radius-6px" alt>
                         <figcaption
                             class="position-absolute bg-dark-gray border-radius-10px box-shadow-quadruple-large bottom-100px xs-bottom-minus-20px left-minus-30px md-left-0px w-230px xs-w-210px text-center last-paragraph-no-margin animation-float">
                             <div
                                 class="bg-white pt-35px pb-35px border-radius-8px mb-15px position-relative top-minus-1px">
                                 <h1 class="fw-700 ls-minus-3px text-dark-gray mb-0 alt-font">4.9</h1>
                                 <div class="text-golden-yellow fs-18 ls-1px">
                                     <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                         class="fa fa-star"></i><i class="fa fa-star"></i>
                                 </div>
                                 <span class="text-dark-gray d-block alt-font fw-600">{{ count($comments) }}
                                     Değerlendirme</span>
                                 <div
                                     class="d-inline-block fs-12 text-uppercase bg-base-color ps-20px pe-20px lh-30 text-white border-radius-100px box-shadow-large">
                                     Maliyetine Ev</div>
                             </div>
                         </figcaption>
                     </figure>
                 </div>
                 <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start"
                     data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                     <span class="fs-20 d-inline-block mb-15px text-base-color">Değerlendirmeler</span>
                     <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                         data-animation-delay="700">Bizim için<span class="fw-700 text-highlight d-inline-block">
                             müşterilerimiz <span
                                 class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span>neler
                         söylüyor ?</h2>
                     <div class="swiper position-relative"
                         data-slider-options="{ &quot;autoHeight&quot;: true, &quot;loop&quot;: true, &quot;allowTouchMove&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;effect&quot;: &quot;fade&quot; }">
                         <div class="swiper-wrapper mb-40px">
                             @foreach ($comments as $comment)
                                 <div class="swiper-slide review-style-08">
                                     <p class="w-80 xl-w-90 lg-w-100">{!! $comment->content !!}</p>
                                     <div class="mt-20px">
                                         <div class="d-inline-block align-middle text-start">
                                             <div class="text-dark-gray alt-font fs-20"><span
                                                     class="fw-700">{{ $comment->full_name }}</span>
                                             </div>
                                             <div class="review-star-icon fs-18">
                                                 <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach



                         </div>
                         <div class="d-flex justify-content-center justify-content-lg-start">

                             <div
                                 class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                                 <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                             </div>
                             <div
                                 class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                                 <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>



     <section>
         <div class="container" style="overflow: hidden;">
             <div class="row position-relative clients-style-08 mb-6 sm-mb-40px" style="height: 60px !important;"
                 data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                 <div class="col swiper text-center feather-shadow"
                     data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 6000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } }, &quot;effect&quot;: &quot;slide&quot; }">
                     <div class="swiper-wrapper marquee-slide" style="height: 100px !important">

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb1.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb2.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb3.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb4.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb5.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb6.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb7.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb8.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb9.png" class="" alt /></a>
                         </div>

                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb10.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb11.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb12.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb13.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb14.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb15.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb16.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb17.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb18.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb19.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb20.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb21.png" class="" alt /></a>
                         </div>
                         <div class="swiper-slide">
                             <a href="#"><img src="images/sb22.png" class="" alt /></a>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="row justify-content-center align-items-center"
                 data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                 <div class="col-12 text-center">
                     <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Türkiye genelinde
                         <span class="text-decoration-line-bottom text-dark-gray">22 şubemizle</span> hizmetinizdeyiz.
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <script>
         function checkScreenSize() {
             const services = document.getElementById("services");
             const servicesMobile = document.getElementById("servicesMobile");
             const musteri = document.getElementById('musteri');
             const projects = document.getElementById('projects');
             const musteriSection = document.getElementById('musteriSection');
             const carouselExampleIndicators = document.getElementById('carouselExampleIndicators');
             const webButton = document.getElementById('webButton');
             const mobilButton = document.getElementById('mobilButton');
             const musteriYorum = document.getElementById('musteriYorum');
             const musteriH6 = document.getElementById('musteriH6');
             const anaResim = document.getElementById('anaResim');
             const screenWidth = window.innerWidth;

             if (window.innerWidth < 768) {
                 services.style.display = "none";
                 servicesMobile.style.display = "block";
                 musteri.classList.add('pt-5');
                 musteriSection.classList.add('pt-2', 'pb-5');
                 musteriSection.classList.remove('pb-2', 'pt-0', 'sm-pb-6', 'mt-5');
                 carouselExampleIndicators.style.maxHeight = '';
                 webButton.classList.add('d-none');
                 mobilButton.classList.remove('d-none');
                 musteriYorum.classList.remove('text-lg-start');
                 musteriYorum.classList.add('text-lg-center');
                 musteriH6.classList.add('m-auto');
                 anaResim.style.height = '40%';
                 anaResim.style.marginTop = '100px';

             } else {
                 services.style.display = "block";
                 servicesMobile.style.display = "none";
                 musteri.classList.remove('pt-5');
                 musteriSection.classList.remove('pt-2', 'pb-5');
                 musteriSection.classList.add('pb-2', 'pt-0', 'sm-pb-6', 'mt-5');
                 carouselExampleIndicators.style.maxHeight = 'calc(100vh - 80px)';
                 webButton.classList.remove('d-none');
                 mobilButton.classList.add('d-none');
                 musteriYorum.classList.add('text-lg-start');
                 musteriYorum.classList.remove('text-lg-center');
                 musteriH6.classList.remove('m-auto');
                 anaResim.style.height = '100%';
                 anaResim.style.marginTop = '0px';
             }
         }

         window.addEventListener('load', checkScreenSize);
         window.addEventListener('resize', checkScreenSize);
     </script>

 @endsection


 @section('css')
     <style>
         .outside-box-top-205px {
             margin-top: -140px
         }

         .bg-gradient-gray-light-dark-transparent {
             background-image: linear-gradient(to top, #f7f7f7 0%, transparent 100%)
         }

         @media(max-width: 1399px) {
             .xl-h-180px {
                 height: 180px
             }

             .xl-w-180px {
                 width: 180px
             }
         }

         @media(max-width: 1199px) {
             .outside-box-top-200px {
                 margin-top: -150px
             }
         }

         @media(max-width: 991px) {
             .outside-box-top-200px {
                 margin-top: 0
             }

             .navbar .navbar-nav .dropdown.open .dropdown-menu {
                 padding-bottom: 15px
             }
         }

         .clamp-text {
             display: -webkit-box;
             -webkit-line-clamp: 2;
             -webkit-box-orient: vertical;
             overflow: hidden;
             text-overflow: ellipsis;
             max-height: 2.8em;
             /* line-height * line-clamp */
             line-height: 1.4em;
             /* adjust based on font-size */
         }

         .position-relative .circle-box {
             position: absolute;
             bottom: 20px;
             /* Div'in hemen üstünde hizalanması için uygun değeri ayarlayın */
             right: 15px;
             /* Sağ tarafta hizalanması için uygun değeri ayarlayın */
             z-index: 2;
         }
     </style>
 @endsection
