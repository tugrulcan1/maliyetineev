@extends('client.layouts.master')

@section('content')






<section class="py-0 mt-5" style="margin-top: 150px !important;">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6 col-md-7 col-sm-8 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">Ekibimiz</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">


				@foreach($blogs as $blog)
                <div class="col text-center team-style-01 md-mb-30px">
                    <figure class="mb-0 hover-box box-hover position-relative">
                        <img src="images/{{$blog->image}}" style="height: 350px; object-fit: cover;" alt
                            class="border-radius-6px" />
                        <figcaption class="w-100 p-30px lg-p-25px bg-white">
                            <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                                <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">{{$blog->title}} </span>
                                <p class="m-0">{{$blog->short_content}}</p>

                            </div>
                            <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                        </figcaption>
                    </figure>
                </div>
				@endforeach




            </div>

        </div>
    </section>

    <!-- <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor"
        style="background-image: url(images/demo-accounting-process-title-bg.jpg)">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Working
                        process</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Superlative process</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row align-items-center justify-content-md-center">
                <div class="col-lg-6 col-md-10 text-end md-mb-50px"
                    data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#005153&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                    <figure class="position-relative m-0">
                        <img class="lg-w-90 border-radius-8px" src="images/demo-accounting-process-01.jpg" alt>
                        <figcaption
                            class="position-absolute bg-white box-shadow-double-large border-radius-5px overflow-hidden bottom-80px lg-bottom-25px left-0px w-230px pt-35px text-center last-paragraph-no-margin"
                            data-bottom-top="transform: translateY(-50px)"
                            data-top-bottom="transform: translateY(50px)">
                            <div class="icon-with-text-style-03">
                                <div class="feature-box overflow-hidden">
                                    <div class="feature-box-icon mb-20px">
                                        <img src="images/demo-accounting-process-02.jpg" class="h-65px" alt>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span
                                            class="d-inline-block fw-600 lh-24 text-dark-gray ls-minus-1px mb-30px ps-20 pe-20">If
                                            you need help get a consultation</span>
                                        <a href="demo-accounting-contact.html"
                                            class="btn btn-large text-white text-uppercase btn-base-color d-block btn-box-shadow">Get
                                            started<i class="feather icon-feather-arrow-right icon-small"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-10 col-xl-5 offset-xl-1 col-lg-6"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">We are leading in the market last 40 years.</h3>
                    <p class="w-85 lg-w-100 mb-30px">We put a strong focus on the needs of business to figure out
                        solutions that best fits your demand.</p>
                    <div class="row justify-content-center mb-40px">
                        <div class="col-12 progress-bar-style-03 mt-30px">

                            <div
                                class="progress mb-13 lg-mb-15 md-mb-60px bg-extra-medium-gray text-dark-gray fs-17 fw-500">
                                <div class="fs-19 fw-600 progress-bar-title d-inline-block">Consulting</div>
                                <div class="progress-bar bg-base-color m-0 border-radius-3px" role="progressbar"
                                    aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" aria-label="consulting">
                                </div>
                                <span class="progress-bar-percent">83%</span>
                            </div>


                            <div class="progress bg-extra-medium-gray text-dark-gray fs-17 fw-500">
                                <div class="fs-19 fw-600 progress-bar-title d-inline-block">Advices</div>
                                <div class="progress-bar bg-base-color m-0 border-radius-3px" role="progressbar"
                                    aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" aria-label="advices">
                                </div>
                                <span class="progress-bar-percent">73%</span>
                            </div>

                        </div>
                    </div>
                    <div class="row row-cols-1 justify-content-center">

                        <div class="col icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded bg-yellow w-70px h-70px rounded-circle me-20px">
                                    <i class="bi bi-telephone-outbound text-white icon-extra-medium"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-block ls-minus-05px mb-5px">Do you have any question?</span>
                                    <a href="tel:1800222000"
                                        class="d-block fs-24 text-dark-gray ls-minus-05px fw-600">1-800-222-000</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row row-cols-1 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 justify-content-center text-center icon-with-style-2 g-0"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Like icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Trusted
                                    company</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover h-100 border-end sm-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Knight icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Professional
                                    work</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover h-100 border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Bar-Chart2 icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Consistent
                                    growth</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover h-100 border-end sm-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover sm-border-bottom last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Money-Bag icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Expert
                                    advisors</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover h-100 border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover xs-border-bottom last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Medal-2 icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Award
                                    winning</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>


                <div class="col icon-with-text-style-05 transition-inner-all">
                    <div
                        class="feature-box hover-box dark-hover h-100 border-color-extra-medium-gray border-color-transparent-on-hover last-paragraph-no-margin">
                        <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Business-ManWoman icon-extra-large text-base-color mb-20px justify-content-center"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px">Dedicated
                                    team</span>
                                <p class="text-visible text-light-opacity">Lorem ipsum is simply dummy text printing.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="bg-very-light-gray overlap-height">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center"
                    data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">Simple working process</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

                <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box md-mb-50px">
                    <div class="process-step-icon-box position-relative mb-25px">
                        <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                        <div
                            class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                            <img src="images/demo-accounting-process-03.jpg" alt>
                            <div class="box-overlay bg-gradient-green-yellow-color"></div>
                            <span class="number icon-extra-large text-white absolute-middle-center"><i
                                    class="line-icon-Address-Book"></i></span>
                        </div>
                    </div>
                    <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px">Account
                        analyzing</span>
                    <p class="w-75 lg-w-95 mx-auto">Lorem ipsum is simply print typesetting.</p>
                </div>


                <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box md-mb-50px">
                    <div class="process-step-icon-box position-relative mb-25px">
                        <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                        <div
                            class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                            <img src="images/demo-accounting-process-05.jpg" alt>
                            <div class="box-overlay bg-gradient-green-yellow-color"></div>
                            <span class="number icon-extra-large text-white absolute-middle-center"><i
                                    class="line-icon-Approved-Window"></i></span>
                        </div>
                    </div>
                    <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px">Posting in
                        journal</span>
                    <p class="w-75 lg-w-95 mx-auto">Lorem ipsum is simply print typesetting.</p>
                </div>


                <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box xs-mb-50px">
                    <div class="process-step-icon-box position-relative mb-25px">
                        <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                        <div
                            class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                            <img src="images/demo-accounting-process-04.jpg" alt>
                            <div class="box-overlay bg-gradient-green-yellow-color"></div>
                            <span class="number icon-extra-large text-white absolute-middle-center"><i
                                    class="line-icon-Address-Book2"></i></span>
                        </div>
                    </div>
                    <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px">Adjustment
                        entries</span>
                    <p class="w-75 lg-w-95 mx-auto">Lorem ipsum is simply print typesetting.</p>
                </div>


                <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box">
                    <div class="process-step-icon-box position-relative mb-25px">
                        <div
                            class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                            <img src="images/demo-accounting-process-06.jpg" alt>
                            <div class="box-overlay bg-gradient-green-yellow-color"></div>
                            <span class="number icon-extra-large text-white absolute-middle-center"><i
                                    class="line-icon-Thumb"></i></span>
                        </div>
                    </div>
                    <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px">Closing trial
                        balance</span>
                    <p class="w-75 lg-w-95 mx-auto">Lorem ipsum is simply print typesetting.</p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-0 sm-pt-50px"
        data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
        <div class="container overlap-section">
            <div class="row justify-content-center g-0">
                <div
                    class="col-auto text-center last-paragraph-no-margin pt-20px pb-20px ps-60px pe-60px sm-ps-50px sm-pe-40px bg-white box-shadow-quadruple-large border-radius-100px xs-border-radius-30px">
                    <div class="fs-19 ls-minus-05px"><span class="fw-600 text-dark-gray">Accounting services:
                        </span>Accounting, tax preparation, book keeping and payroll services agency.</div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center"
                data-anime="{&quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-lg-5 col-md-6 col-sm-7 md-mb-30px">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto"><span
                                class="alt-font text-dark-gray fw-700 fs-130 ls-minus-5px">40<sup>+</sup></span></div>
                        <div class="col-5 col-xl-4 col-md-5 col-sm-6 pe-0">
                            <h6 class="fw-500 text-dark-gray alt-font m-0">Years working experience.</h6>
                        </div>
                        <div class="col-3 col-xl-2 col-md-2 text-end d-none d-xl-inline-block"><span
                                class="fw-300 fs-130 text-yellow position-relative top-minus-5px">|</span></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 overflow-hidden text-center text-lg-start">
                    <div class="row align-items-center">
                        <div class="col-sm-6 last-paragraph-no-margin xs-mb-30px">
                            <h2 class="fw-700 text-dark-gray mb-5px alt-font">5M<sup>+</sup></h2>
                            <span class="ls-minus-05px fs-19 fw-600 text-dark-gray">Project completed</span>
                            <p class="lh-24">Lorem simply text</p>
                        </div>
                        <div class="col-sm-6 last-paragraph-no-margin">
                            <h2 class="fw-700 text-dark-gray mb-5px alt-font">64<sup>K</sup></h2>
                            <span class="ls-minus-05px fs-19 fw-600 text-dark-gray">Satisfied customer</span>
                            <p class="lh-24">Lorem simply text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


   

@endsection