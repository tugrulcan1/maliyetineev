@extends('client.layouts.master')

@section('content')
    {{-- <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url(images/subelerimiz.png)">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <!-- <h1 class="mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Our
                        company</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">About crafto accounto</h2> -->
                </div>
            </div>
        </div>
    </section> --}}


    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }});        padding-top: 30px;
        padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Maliyetine Ev&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">ŞUBELERİMİZ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>


        <section>
            <div class="container">

                <div data-anime="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 500, &quot;delay&quot;: 300 }"
                    class="alt-font text-dark-gray mb-25px fs-20 sm-mb-15px"><span class="text-highlight">Türkiye genelinde 22 şubemiz ile hizmetinizdeyiz.

                        <span class="bg-base-color h-8px bottom-0px"></span></span></div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 mb-5"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">



                    @foreach ($branchs as $branch)
                        <div class="col icon-with-text-style-07  transition-inner-all md-mb-30px" style="margin-top: 20px;">
                            <div class="bg-very-light-gray feature-box   md-p-13 border-radius-8px justify-content-lg-start"
                                style="padding: 7% !important; height: 375px;">
                                <div class="feature-box-icon">
                                    <img src="images/{{ $branch->image }}" class="h-95px" alt>
                                </div>
                                <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html"
                                        class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">{{ $branch->title }}</a>
                                    <div class="flex" style="display: flex;  margin-bottom: 5px;">

                                        <p class="" style="margin: 0; padding: 0; text-align: left;">
                                            {!! $branch->description !!}</p>
                                    </div>
                                    <div class="flex"
                                        style="display: flex; justify-content: center; align-items: center; margin-bottom: 5px;">
                                        <i class="fas fa-phone" style="margin-right: 5px;"></i>
                                        <p class="" style="margin: 0; padding: 0;">{{ $branch->phone }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>


                <!-- <div class="row"
                        data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-12 text-center">
                            <div
                                class="d-inline-block align-middle bg-yellow fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">
                                Trust</div>
                            <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span
                                    class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto
                                accounting.</div>
                        </div>
                    </div> -->
            </div>
        </section>


        <!-- <section class="pt-0 big-section">
                <div class="container">
                    <div class="row align-items-center"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23">
                            <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                                <img src="images/demo-accounting-company-01.jpg" alt class="border-radius-8px w-100">
                            </div>
                            <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px"
                                data-shadow-animation="true" data-animation-delay="250"
                                data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <img src="images/demo-accounting-company-02.jpg" alt
                                    class="border-radius-8px w-100 box-shadow-quadruple-large" />
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">We are leader in tax advisor and financial.</h3>
                            <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">There are many variations of passages of
                                available but the majority have suffered alteration some form by humou words which don't look
                                believable.</p>
                            <div
                                class="row align-items-center mb-30px xs-mb-25px justify-content-center justify-content-lg-start">

                                <div class="col-lg-5 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04 xs-mb-25px">
                                    <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px"
                                        data-text="+" data-to="280"><sup class="text-yellow top-0px me-5px"><i
                                                class="feather icon-feather-users icon-very-medium"></i></sup></h3>
                                    <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">Accountant team</span>
                                </div>


                                <div class="col-lg-6 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04">
                                    <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px"
                                        data-text="+" data-to="465"><sup class="text-yellow top-0px me-5px"><i
                                                class="feather icon-feather-briefcase icon-very-medium"></i></sup></h3>
                                    <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">Projects completed</span>
                                </div>

                            </div>
                            <a href="demo-accounting-services.html"
                                class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">Let's
                                discuss<span class="bg-orient-blue text-white"><i
                                        class="feather icon-feather-arrow-right icon-small"></i></span></a>
                        </div>
                    </div>
                </div>
            </section> -->


        <!-- <section class="p-0 bg-base-color">
                <div class="container">
                    <div class="row align-items-center justify-content-center g-0">
                        <div class="col-auto d-flex align-items-center"
                            data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <img src="images/demo-accounting-img-05.jpg" alt />
                            <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                                <p>Save your precious time and effort spent for finding a solution. <a
                                        href="demo-accounting-contact.html"
                                        class="text-decoration-line-bottom fw-500 text-white">Contact us now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


        <!-- <section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height"
                style="background-image: url(images/demo-accounting-company-04.jpg)">
                <div class="container overlap-gap-section">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-50px"
                            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Global financial leader to financial markets quality.
                            </h3>
                            <p class="w-90 lg-w-100">Financial services provides excellence in client service and compliance
                                through our unwavering commitment.</p>
                            <div class="accordion accordion-style-02 w-90 lg-w-100" id="accordion-style-02"
                                data-active-icon="fa-chevron-up" data-inactive-icon="fa-chevron-down">

                                <div class="accordion-item active-accordion">
                                    <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                            aria-expanded="true" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="fa-solid fa-chevron-up fs-15"></i><span
                                                    class="fs-19 fw-600 ls-minus-05px">What is tax and legal advisory?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                            <p>The focus of the tax and legal department is on advisory services in the tax,
                                                company, civil and commercial law.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                            aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="fa-solid fa-chevron-down fs-15"></i><span
                                                    class="fs-19 fw-600 ls-minus-05px">What is company accounting?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                            <p>The focus of the tax and legal department is on advisory services in the tax,
                                                company, civil and commercial law.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-transparent">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                            aria-expanded="false" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <i class="fa-solid fa-chevron-down fs-15"></i><span
                                                    class="fs-19 fw-600 ls-minus-05px">What do you do for corporate
                                                    clients?</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                            <p>The focus of the tax and legal department is on advisory services in the tax,
                                                company, civil and commercial law.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6"
                            data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                            <div class="outside-box-right-30 position-relative">
                                <img src="images/demo-accounting-company-03.png" alt />
                                <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute top-100px left-100px mt-10 ms-15 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
                                    title="<span class=tooltip-title>Crafto - New York</span><p class=m-0>401 Broadway, 24th Floor, Orchard View,  New York</p>">
                                    <span>
                                        <span class="video-icon">
                                            <span
                                                class="bg-base-color w-100 h-100 border-radius-100 text-center d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                            </span>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-red"></span>
                                                <span class="video-icon-sonar-bfr bg-yellow"></span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute bottom-100px start-50 mb-10 ms-7 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
                                    title="<span class=tooltip-title>Crafto - Canada</span><p class=m-0>2839 lalemant view road, Niagara falls, Canada</p>">
                                    <span>
                                        <span class="video-icon">
                                            <span
                                                class="w-100 h-100 bg-base-color border-radius-100 d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                            </span>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-red"></span>
                                                <span class="video-icon-sonar-bfr bg-yellow"></span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="pt-md-0">
                <div class="container overlap-section">
                    <div class="row m-0 align-items-center justify-content-center bg-white border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large appear anime-complete"
                        data-anime="{ &quot;scale&quot;: [1.1, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-lg-10">
                            <div class="swiper slider-one-slide testimonials-style-09"
                                data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="row align-items-center pt-25px pb-25px">
                                            <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                                <img src="images/avtar-30.jpg" class="rounded-circle w-100px h-100px md-mb-35px"
                                                    alt>
                                                <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img
                                                        src="images/demo-accounting-home-quote-img.png"
                                                        class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto"
                                                        alt>This is one of the best templates I've came across. Very organized,
                                                    great design style and easy around.</span>
                                            </div>
                                            <div class="col-lg-1 d-none d-lg-inline-block">
                                                <div
                                                    class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                                <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Shoko
                                                    mugikura</span>
                                                <div>Financial manager</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="row align-items-center pt-25px pb-25px">
                                            <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                                <img src="images/avtar-29.jpg" class="rounded-circle w-100px h-100px md-mb-35px"
                                                    alt>
                                                <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img
                                                        src="images/demo-accounting-home-quote-img.png"
                                                        class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto"
                                                        alt>This is one of the best templates I've came across. Very organized,
                                                    great design style and easy around.</span>
                                            </div>
                                            <div class="col-lg-1 d-none d-lg-inline-block">
                                                <div
                                                    class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                                <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Matthew
                                                    taylor</span>
                                                <div>Financial manager</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="row align-items-center pt-25px pb-25px">
                                            <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                                <img src="images/avtar-27.jpg" class="rounded-circle w-100px h-100px md-mb-35px"
                                                    alt>
                                                <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img
                                                        src="images/demo-accounting-home-quote-img.png"
                                                        class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto"
                                                        alt>This is one of the best templates I've came across. Very organized,
                                                    great design style and easy around.</span>
                                            </div>
                                            <div class="col-lg-1 d-none d-lg-inline-block">
                                                <div
                                                    class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                                <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Herman
                                                    miller</span>
                                                <div>Chief financial</div>
                                            </div>
                                        </div>
                                    </div>

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


            <section class="py-0">
                <div class="container">
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-6 col-md-7 col-sm-8 text-center"
                            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <h3 class="fw-700 text-dark-gray ls-minus-2px">Meet the professional accounting people</h3>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                        <div class="col text-center team-style-01 md-mb-30px">
                            <figure class="mb-0 hover-box box-hover position-relative">
                                <img src="images/team-08.jpg" alt class="border-radius-6px" />
                                <figcaption class="w-100 p-30px lg-p-25px bg-white">
                                    <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                        <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Jeremy
                                            dupont</span>
                                        <p class="m-0">Executive officer</p>
                                        <div class="social-icon hover-text mt-20px lg-mt-10px social-icon-style-05">
                                            <a href="https://www.facebook.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Fb.</a>
                                            <a href="https://www.instagram.com/" target="_blank"
                                                class="fw-600 text-dark-gray">In.</a>
                                            <a href="https://www.twitter.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Tw.</a>
                                            <a href="https://dribbble.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Dr.</a>
                                        </div>
                                    </div>
                                    <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                                </figcaption>
                            </figure>
                        </div>


                        <div class="col text-center team-style-01 md-mb-30px">
                            <figure class="mb-0 hover-box box-hover position-relative">
                                <img src="images/team-09.jpg" alt class="border-radius-6px" />
                                <figcaption class="w-100 p-30px lg-p-25px bg-white">
                                    <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                        <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Jessica
                                            dover</span>
                                        <p class="m-0">Vice president</p>
                                        <div class="social-icon hover-text mt-20px lg-mt-10px">
                                            <a href="https://www.facebook.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Fb.</a>
                                            <a href="https://www.instagram.com/" target="_blank"
                                                class="fw-600 text-dark-gray">In.</a>
                                            <a href="https://www.twitter.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Tw.</a>
                                            <a href="https://dribbble.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Dr.</a>
                                        </div>
                                    </div>
                                    <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                                </figcaption>
                            </figure>
                        </div>


                        <div class="col text-center team-style-01 xs-mb-30px">
                            <figure class="mb-0 hover-box box-hover position-relative">
                                <img src="images/team-10.jpg" alt class="border-radius-6px" />
                                <figcaption class="w-100 p-30px lg-p-25px bg-white">
                                    <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                        <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Matthew
                                            taylor</span>
                                        <p class="m-0">Financial officer</p>
                                        <div class="social-icon hover-text mt-20px lg-mt-10px">
                                            <a href="https://www.facebook.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Fb.</a>
                                            <a href="https://www.instagram.com/" target="_blank"
                                                class="fw-600 text-dark-gray">In.</a>
                                            <a href="https://www.twitter.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Tw.</a>
                                            <a href="https://dribbble.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Dr.</a>
                                        </div>
                                    </div>
                                    <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                                </figcaption>
                            </figure>
                        </div>


                        <div class="col text-center team-style-01">
                            <figure class="mb-0 hover-box box-hover position-relative">
                                <img src="images/team-11.jpg" alt class="border-radius-6px" />
                                <figcaption class="w-100 p-30px lg-p-25px bg-white">
                                    <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                        <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">Daniel
                                            james</span>
                                        <p class="m-0">People officer</p>
                                        <div class="social-icon hover-text mt-20px lg-mt-10px">
                                            <a href="https://www.facebook.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Fb.</a>
                                            <a href="https://www.instagram.com/" target="_blank"
                                                class="fw-600 text-dark-gray">In.</a>
                                            <a href="https://www.twitter.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Tw.</a>
                                            <a href="https://dribbble.com/" target="_blank"
                                                class="fw-600 text-dark-gray">Dr.</a>
                                        </div>
                                    </div>
                                    <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </section>


            <section class="half-section">
                <div class="container">
                    <div class="row justify-content-center mb-30px"
                        data-anime="{ &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col-lg-5 text-center mb-15px">
                            <span
                                class="text-dark-gray fw-600 fs-16 ls-minus-05px text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join
                                the 10,000+ companies using crafto</span>
                        </div>
                    </div>
                    <div class="row position-relative clients-style-08 mb-35px"
                        data-anime="{&quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 50, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="col swiper text-center feather-shadow"
                            data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 6000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper marquee-slide">

                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-logitech-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#"><img src="images/logo-logitech-oxford-blue.svg" class="h-40px xs-h-30px"
                                            alt /></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    @endsection
