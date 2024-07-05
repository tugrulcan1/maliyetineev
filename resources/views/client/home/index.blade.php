 @extends('client.layouts.master')


 @section('content')

     @foreach ($sliders as $slider)
         <section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark position-relative"
             data-parallax-background-ratio="0.8" style="background-image: url('images/{{ $slider->image }}')">
             <div class=" h-100 position-relative">
                 <div class="container h-100">
                     <div class="row align-items-center h-100">
                         <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white"
                             data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [30, 0], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeInOutSine&quot; }">
                         </div>
                     </div>
                 </div>
             </div>

         </section>
     @endforeach

     <section class="pb-0">
         <div class="container">
             <h3 class="text-dark-gray fw-700" style="text-align: center;">{{ $settings['section_8_title'] }}</h3>
             <span style="margin-left:130px " class="fw-600">{{ $settings['section_8_small_title'] }}</span>
             <div class="row mt-3">

                 <div class="col-sm  mb-4" style="text-align: center;">
                     <div>
                         <img src="/images/trust.png" alt="" style=" height: 70px;
    margin-bottom: 10px;">
                         <p class="text-dark-gray fw-700 baslikP"
                             style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">
                             {{ $settings['section_8_1'] }}</p>
                         <p style="font-size: 12px;font-weight: normal;line-height: 20px;color: #647589">
                             {{ $settings['section_8_1.1'] }}</p>
                     </div>
                 </div>
                 <div class="col-sm  mb-4" style="text-align: center;">
                     <div>
                         <img src="/images/budget.png" alt="" style="    height: 70px;
    margin-bottom: 10px;">
                         <p class="text-dark-gray fw-700"
                             style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">
                             {{ $settings['section_8_2'] }}
                         </p>
                         <p style="font-size: 12px;font-weight: normal;line-height: 20px;color: #647589">
                             {{ $settings['section_8_2.1'] }}</p>
                     </div>
                 </div>
                 <div class="col-sm  mb-4" style="text-align: center;">
                     <div>
                         <img src="/images/bank.png" alt="" style="    height: 70px;
    margin-bottom: 10px;">
                         <p class="text-dark-gray fw-700"
                             style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">
                             {{ $settings['section_8_3'] }}
                         </p>
                         <p style="font-size: 12px;font-weight: normal;line-height: 20px;color: #647589">
                             {{ $settings['section_8_3.1'] }}</p>
                     </div>
                 </div>
                 <div class="col-sm  mb-4" style="text-align: center;">
                     <div>
                         <img src="/images/timing.png" alt="" style=" height: 70px;
    margin-bottom: 10px;">
                         <p class="text-dark-gray fw-700"
                             style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">
                             {{ $settings['section_8_4'] }}
                         </p>
                         <p style="font-size: 12px;font-weight: normal;line-height: 20px;color: #647589">
                             {{ $settings['section_8_4.1'] }}</p>
                     </div>
                 </div>
                 <div class="col-sm  mb-4" style="text-align: center;">
                     <div>
                         <img src="/images/smartphone.png" alt=""
                             style="    height: 70px;
    margin-bottom: 10px;">
                         <p class="text-dark-gray fw-700"
                             style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">
                             {{ $settings['section_8_5'] }}</p>
                         <p style="font-size: 12px;font-weight: normal;line-height: 20px;color: #647589">
                             {{ $settings['section_8_5.1'] }}</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>


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

     <section class="p-0 ">
         <div class="container bg-base-color" style="background-color:#ea2a28 !important">
             <div class="row align-items-center justify-content-center g-0">
                 <div class="col-auto d-flex align-items-center appear anime-complete"
                     data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                     style="">
                     <img src="{{ asset('favicon-c9c0de2311390de484c5d988188059cd56ed9317.png') }}" alt=""
                         data-no-retina="">
                     <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px"
                         style="margin-left:10px">
                         <p>MALİYETİNE EV SİZLERE %100 GÜVEN VE
                             GARANTİ SUNUYOR! <a href="/iletisim"
                                 class="text-decoration-line-bottom fw-500 text-white">Başvuru Yap</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     {{-- <section class="p-0 bg-base-color" style="background: #b7d8ff;margin-top:30px; ">
        <div class="container">
            <div class="row align-items-center justify-content-center g-0">
                <div class="col-auto d-flex align-items-center"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <!-- <img src="images/logomev.png" style="width: 150px; margin-right: 20px;" alt /> -->
                    <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                        <p style="color: red; font-weight: 900; font-size: 30px;">MALİYETİNE EV SİZLERE %100 GÜVEN VE
                            GARANTİ SUNUYOR!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}







     <section class="pb-0 mt-5" id="services" style="padding-bottom: 0px !important; padding-top: 0 !important;">
         <div class="tab-style-08 ">
             <div class="container border-bottom border-color-extra-medium-gray bg-white box-shadow-quadruple-large p-0">

                 <ul class="nav nav-tabs border-0 fw-500 fs-19 text-center">
                     <li class="nav-item"><a data-bs-toggle="tab" href="#tab_eight1" class="nav-link active">1-
                             {{ $settings['section_5_1'] }}<span class="tab-border bg-base-color"></span></a></li>
                     <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight2"
                             data-tab="counter">2- {{ $settings['section_5_2'] }}<span
                                 class="tab-border bg-base-color"></span></a>
                     </li>
                     <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight3"
                             data-tab="counter">3- {{ $settings['section_5_3'] }}<span
                                 class="tab-border bg-base-color"></span></a>
                     </li>
                     <li class="nav-item"><a class="nav-link" style="white-space: nowrap;" data-bs-toggle="tab"
                             href="#tab_eight4" data-tab="counter">4- {{ $settings['section_5_4'] }}<span
                                 class="tab-border bg-base-color"></span></a></li>
                 </ul>

             </div>
         </div>
         <div class="container bg-very-light-gray">
             <div class="row">
                 <div class="col-12 tab-style-08">
                     <div class="tab-content">

                         <div class="tab-pane fade in active show" id="tab_eight1">
                             <div class="row align-items-center justify-content-center g-lg-0 mb-3 mt-3">
                                 <div class="col-md-6 sm-mb-30px position-relative overflow-hidden"
                                     data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#005153&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                                     <img src="{{ $settings['section_5_1_img'] ?? '#' }}"
                                         class="w-85 border-radius-6px d-flex m-auto" style="padding: 20px">

                                 </div>
                                 <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                     style="padding: 20px 0;"
                                     data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                     <!-- <div class="mb-20px">
                                                                        <div
                                                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                                                        </div>
                                                                        <span
                                                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Strategic
                                                                            planning</span>
                                                                    </div> -->
                                     <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px"
                                         style="font-size: 22px;margin-top:10px">
                                         {{ $settings['section_5_1'] }}</h4>
                                     <p class="mb-35px md-mb-25px" style="color: #647589">
                                         {{ $settings['section_5_1_content'] }} </p>
                                     <!-- <a href="demo-accounting-services.html"
                                                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                                                        more<span class="bg-base-color text-white"><i
                                                                                class="fa fa-arrow-right-short icon-extra-medium"></i></span></a> -->
                                 </div>
                             </div>
                         </div>


                         <div class="tab-pane fade in" id="tab_eight2">
                             <div class="row align-items-center justify-content-center g-lg-0 mb-3 mt-3 mt-3">
                                 <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                     <img src="{{ $settings['section_5_2_img'] ?? '#' }}" alt
                                         class="w-85 border-radius-6px d-flex m-auto">

                                 </div>
                                 <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                     style="padding: 20px 0;">
                                     <!-- <div class="mb-20px">
                                                                            <div
                                                                                class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                                                            </div>
                                                                            <span
                                                                                class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Audit
                                                                                assurance</span>
                                                                        </div> -->
                                     <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px"
                                         style="font-size: 22px;margin-top:10px">
                                         {{ $settings['section_5_2'] }}</h4>
                                     <p class="mb-35px md-mb-25px" style="color: #647589">
                                         {{ $settings['section_5_2_content'] }}
                                     </p>
                                     <!-- <a href="demo-accounting-services.html"
                                                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                                                        more<span class="bg-base-color text-white"><i
                                                                                class="fa fa-arrow-right-short icon-extra-medium"></i></span></a> -->
                                 </div>
                             </div>
                         </div>


                         <div class="tab-pane fade in" id="tab_eight3">
                             <div class="row align-items-center justify-content-center g-lg-0 mb-3 mt-3">
                                 <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                     <img src="{{ $settings['section_5_3_img'] ?? '#' }}" alt
                                         class="w-85 border-radius-6px d-flex m-auto">

                                 </div>
                                 <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                     style="padding: 20px 0;">
                                     <!-- <div class="mb-20px">
                                                                        <div
                                                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                                                        </div>
                                                                        <span
                                                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Financial
                                                                            projections</span>
                                                                    </div> -->
                                     <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px"
                                         style="font-size: 22px;margin-top:10px">
                                         {{ $settings['section_5_3'] }}
                                     </h4>
                                     <p class="mb-35px md-mb-25px" style="color: #647589">
                                         {{ $settings['section_5_3_content'] }}
                                     </p>
                                     <!-- <a href="demo-accounting-services.html"
                                                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                                                        more<span class="bg-base-color text-white"><i
                                                                                class="fa fa-arrow-right-short icon-extra-medium"></i></span></a> -->
                                 </div>
                             </div>
                         </div>


                         <div class="tab-pane fade in" id="tab_eight4">
                             <div class="row align-items-center justify-content-center g-lg-0 mb-3 mt-3">
                                 <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                     <img src="{{ $settings['section_5_4_img'] ?? '#' }}" alt
                                         class="w-85 border-radius-6px d-flex m-auto">

                                 </div>
                                 <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                     style="padding: 20px 0;">
                                     <!-- <div class="mb-20px">
                                                                        <div
                                                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                                                        </div>
                                                                        <span
                                                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Business
                                                                            planning</span>
                                                                    </div> -->
                                     <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px"
                                         style="font-size: 22px;margin-top:10px">
                                         {{ $settings['section_5_4'] }}</h4>
                                     <p class="mb-35px md-mb-25px" style="color: #647589">
                                         {{ $settings['section_5_4_content'] }}</p>
                                     <!-- <a href="demo-accounting-services.html"
                                                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                                                        more<span class="bg-base-color text-white"><i
                                                                                class="fa fa-arrow-right-short icon-extra-medium"></i></span></a> -->
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </section>

     {{-- <section class=" mt-5  ">
         <div class="container pb-50px sm-pt-20px xs-pb-30px background-repeat background-position-center sm-background-image-none"
             style="background-image: url('https://craftohtml.themezaa.com/images/vertical-center-line-bg-dark.svg');background-color:#F4F1ED">
             <div class="row justify-content-center mb-4">
                 <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                     <h3 class="text-dark-gray alt-font ls-minus-2px fw-400 mb-40px xs-mb-30px w-80 xs-w-100 mx-auto">
                        Harika Teklifleri Kaçırmayın, Abone Olun!
                     </h3>
                     <div class="d-inline-block w-100 newsletter-style-03 position-relative mb-20px">
                         <form action="email-templates/subscribe-newsletter.php" method="post"
                             class="position-relative w-100">
                             <input
                                 class="input-large bg-white border-color-transparent w-100 border-radius-100px box-shadow-extra-large form-control required is-invalid"
                                 type="email" name="email" placeholder="E-Posta">
                             <input type="hidden" name="redirect" value="">
                             <button class="btn btn-large text-dark-gray ls-0px left-icon submit text-uppercase fw-700"
                                 aria-label="submit"><i
                                     class="fa fa-envelope icon-small text-base-color"></i><span>Abone Ol</span></button>
                             <div
                                 class="form-results border-radius-100px pt-10px pb-10px ps-15px pe-15px fs-16 mt-10px w-100 text-center position-absolute d-none">
                             </div>
                         </form>
                     </div>
                     <p class="fs-16">Verilerinize saygı duyacağımızı lütfen unutmayın, bununla ilgili daha fazla ayrıntı
                         için
                         <a href="#" class="text-decoration-line-bottom text-dark-gray">Gizlilik Politikamızı </a>
                         kontrol edebilirsiniz.
                     </p>
                 </div>
             </div>


             <div
                 class="row row-cols-3 row-cols-lg-5 row-cols-sm-3 align-items-center justify-content-center mb-4 md-mb-50px xs-mb-40px instagram-follow-api position-relative">
                 <div class="col instafeed-grid md-mb-30px xs-mb-15px">
                     <figure class="border-radius-0px"><a href="https://www.instagram.com/maliyetineev"
                             target="_blank"><img
                                 src="{{ asset('449186508_398056306615713_6952573876415675072_n.jpeg') }}"
                                 class="insta-image" alt="" data-no-retina=""><span class="insta-icon"><i
                                     class="fa-brands fa-instagram"></i></span></a></figure>
                 </div>
                 <div class="col instafeed-grid md-mb-30px xs-mb-15px">
                     <figure class="border-radius-0px"><a href="https://www.instagram.com/maliyetineev"
                             target="_blank"><img
                                 src="{{ asset('449801506_838510514418984_6593685392320693629_n.jpeg') }}"
                                 class="insta-image" alt="" data-no-retina=""><span class="insta-icon"><i
                                     class="fa-brands fa-instagram"></i></span></a></figure>
                 </div>
                 <div class="col instafeed-grid">
                     <figure class="border-radius-0px"><a href="https://www.instagram.com/maliyetineev"
                             target="_blank"><img
                                 src="{{ asset('449712635_487286733681308_951781729281049969_n.jpeg') }}"
                                 class="insta-image" alt="" data-no-retina=""><span class="insta-icon"><i
                                     class="fa-brands fa-instagram"></i></span></a></figure>
                 </div>
                 <div class="absolute-middle-center z-index-1 w-auto">
                     <a href="https://www.instagram.com/maliyetineev" target="_blank"
                         class="btn btn-large btn-switch-text btn-white btn-rounded left-icon btn-box-shadow instagram-button">
                         <span>
                             <span><i class="fa-brands fa-instagram text-base-color" style="color:#ea2a28"></i></span>
                             <span class="btn-double-text" data-text="Maliyetine Ev">Bizi Takip Et </span>
                         </span>
                     </a>
                 </div>
             </div>

         </div>
     </section> --}}


     {{-- <section class=" overflow-hidden position-relative ps-3 xs-ps-0">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3 ps-5 pe-5 xl-pe-0 lg-ps-0 text-center text-lg-start md-mb-40px">
                     <div class="mb-10px"><span class="text-dark-gray fw-500 text-highlight">Maliyetine Ev<span
                                 class="bg-base-color h-8px bottom-0px"></span></span></div>
                     <h2 class="alt-font lh-50 text-dark-gray ls-minus-1px mb-15px"> <span
                             class="fw-600">Projelerimiz</span></h2>

                 </div>
                 <div class="col-12 col-lg-12 position-relative">
                     <div
                         class="outside-box-right-10 lg-outside-box-right-20 md-outside-box-right-25 xs-outside-box-right-0">
                         <div class="swiper slider-three-slide"
                             data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1400&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;1024&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
                             <div class="swiper-wrapper">
                                @foreach ($projects as $project)

                                 <div class="swiper-slide">
                                     <div
                                         class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                         <img src="{{ asset('projects_cover_image/' . $project->cover_image) }}" alt />
                                         <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
                                         <div
                                             class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
                                             <div
                                                 class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                 <span class="text-white fw-500 fs-22">{{ $project->project_title }}</span>
                                                 <span
                                                     class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px"> {{ $project->project_sub_title }}</span>
                                                 <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                     class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom"> {{ $project->project_sub_title }}</a>
                                                 <span
                                                     class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i
                                                         class="fa fa-arrow-right-short text-dark-gray icon-very-medium"></i></span>
                                             </div>
                                             <div
                                                 class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                             </div>
                                             <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
                                             <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                 class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
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
     </section> --}}
     <section class="overflow-hidden mt-5" style="padding:0px 40px !important;">
         <div class="container">
             <div class="row align-items-center justify-content-center mb-3 mt-3 text-center text-lg-start column-form">
                 <div class="col-xl-10 col-lg-10 md-mb-20px mt-2"
                     data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                     <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Projelerimiz</h6>
                 </div>
                 <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end"
                     data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                     <div
                         class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white text-dark-gray box-shadow-large">
                         <i class="fa-solid fa-arrow-left"></i>
                     </div>
                     <div
                         class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white text-dark-gray box-shadow-large">
                         <i class="fa-solid fa-arrow-right"></i>
                     </div>

                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-12 position-relative p-0">
                     <div class="outside-box-right-40 xs-outside-box-right-0"
                         data-anime="{ &quot;translateX&quot;: [100, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                         <div class="swiper magic-cursor"
                             data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 28, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                             <div class="swiper-wrapper">
                                 @foreach ($projects as $project)
                                     <div class="swiper-slide">
                                         <div class="interactive-banner-style-08">
                                             <figure
                                                 class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                 <a href="{{ route('projelerimiz.show', $project->id) }}" target="_blank"
                                                     style="cursor: pointer">
                                                     <img src="{{ asset('projects_cover_image/' . $project->cover_image) }}"
                                                         alt="Resim bulunamadı"
                                                         style="height: 250px; object-fit: cover;" />
                                                 </a>
                                                 <figcaption
                                                     class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">

                                                     <div class="mt-auto d-flex w-100 align-items-center">

                                                         <div
                                                             class="col project-tt last-paragraph-no-margin truncate-text">
                                                             <a href="{{ route('projelerimiz.show', $project->id) }}"
                                                                 target="_blank"
                                                                 class="text-white lh-28  xl-w-100 d-block"
                                                                 style="color: white;cursor: pointer;font-size:12px">{{ $project->project_title }}</a>

                                                             <p class="clamp-text"
                                                                 style="color: white; margin: 0; padding: 0; font-size: 11px;">
                                                                 {{ $project->project_sub_title }} </p>

                                                         </div>

                                                     </div>
                                                     <div
                                                         class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
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
     </section>


     {{-- <section class="pt-0 overflow-hidden position-relative overlap-height">
        <div class="container-fluid overlap-gap-section">
            <div class="row mb-2 md-mb-4">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-15 outside-box-left-15 md-outside-box-right-0 md-outside-box-left-0">
                        <div class="swiper magic-cursor slider-shadow-left-right md-slider-shadow-none"
                            data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false },  &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1300&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }"
                            data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="swiper-wrapper pt-20px pb-20px">
                                @foreach ($comments as $comment)
                                <div class="swiper-slide">
                                    <div class="review-style-05">
                                        <div
                                            class="border-radius-4px last-paragraph-no-margin border border-color-extra-medium-gray">
                                            <div
                                                class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                                                <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-25px"
                                                    src="{{ asset('favicon-c9c0de2311390de484c5d988188059cd56ed9317.png') }}" alt />
                                                <p>{!! $comment->content !!}</p>
                                            </div>
                                            <div
                                                class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                                                <span class="fw-600 text-dark-gray d-inline-block xs-fs-15">{{ $comment->full_name }}</span>
                                                <div class="review-star-icon float-end fs-18 xs-fs-15">
                                                    <i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                                                        class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                                                        class="fa fa-star-fill"></i>
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
    </section> --}}

     <section class="pt-0 pb-2 sm-pb-6 overflow-hidden mt-5">
         <div class="container">
             <div class="row align-items-center justify-content-center">
                 <div class="col-lg-12 text-lg-start appear anime-complete"
                     data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                     style="display:flex">
                     <div class="review-star-icon fs-22 d-inline-block align-middle me-15px">
                         <i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                             class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i>
                     </div>
                     <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Müşteri Yorumları</h6>
                 </div>
             </div>
         </div>
     </section>
     <section class="m-0 p-0">
         <div class="container p-0">


             <div class="row m-0 align-items-center justify-content-center border border-color-extra-medium-gray  p-0  m-0 md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large"
                 style="    padding: 0 !important;
    margin: 0 !important;
    border-radius: 10px;"
                 data-anime="{ &quot;scale&quot;: [1.1, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                 <div class="col-lg-10">
                     <div class="swiper slider-one-slide testimonials-style-09"
                         data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
                         <div class="swiper-wrapper align-items-center">

                             @foreach ($comments as $comment)
                                 <div class="swiper-slide">
                                     <div class="row align-items-center pt-25px pb-25px">
                                         <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">

                                             <span style=""
                                                 class="d-block ps-40px md-ps-0 md-mx-auto position-relative">{!! $comment->content !!}</span>
                                         </div>
                                         <div class="col-lg-1 d-none d-lg-inline-block">
                                             <div
                                                 class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                             </div>
                                         </div>
                                         <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                             <span
                                                 class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">{{ $comment->full_name }}</span>
                                             <div></div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach



                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2 md-mb-25px">
                     <div class="d-flex justify-content-center">

                         <div
                             class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray">
                             <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                         </div>
                         <div
                             class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray">
                             <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
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
                     <!-- <div
                                                    class="d-inline-block align-middle bg-yellow fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">
                                                    Trust</div> -->
                     <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Türkiye genelinde
                         <span class="text-decoration-line-bottom text-dark-gray">22 şubemizle</span> hizmetinizdeyiz.
                     </div>
                 </div>
             </div>
         </div>
     </section>

     {{-- <section style="padding: 0 !important; margin-bottom: 50px; ">
         <div class="container">
             <img src="{{ asset('images/asdasd.jpg') }}" alt=""
                 style="width: 1220px; height: 350px; object-fit: contain;">
         </div>
     </section> --}}


 @endsection


 <style>
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
