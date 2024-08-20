@extends('client.layouts.master')
@section('content')
    {{-- <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor mt-0 pb-0"
style="background-image: url('{{ $pageInfo->file ?  $pageInfo->file : asset('images/demo-accounting-company-title-bg.jpg') }}')">
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
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }});padding-top: 30px;padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        {{-- <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                    data-fancy-text="{ &quot;string&quot;: [&quot;Maliyetine Ev&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span> --}}
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">{{ $pageInfo->meta_title }}</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            {{-- <div class="row justify-content-center mb-3">
                <div class="col-lg-7 col-md-8 col-sm-9 text-center"
                    data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="text-dark-gray fw-700 ls-minus-2px">{{ $pageInfo->meta_title }}</h3>
                </div>
            </div> --}}
            <div class="row row-cols-12 row-cols-lg-12 row-cols-md-12 mb-5"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">


                <p>{!! $pageInfo->content !!}</p>
                <!-- <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                                        <div
                                            class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                                            <div class="feature-box-icon">
                                                <a href="demo-accounting-services-details.html"><img
                                                        src="images/demo-accounting-company-icon01.svg" class="h-95px" alt></a>
                                            </div>
                                            <div class="feature-box-content">
                                                <a href="demo-accounting-services-details.html"
                                                    class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Business
                                                    process</a>
                                                <p class="mb-30px">An activity or set of activities that can accomplish a specific
                                                    organizational goal.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                                        <div
                                            class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                                            <div class="feature-box-icon">
                                                <a href="demo-accounting-services-details.html"><img
                                                        src="images/demo-accounting-company-icon02.svg" class="h-95px" alt></a>
                                            </div>
                                            <div class="feature-box-content">
                                                <a href="demo-accounting-services-details.html"
                                                    class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Corporate
                                                    finance</a>
                                                <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the
                                                    maximize value.</p>
                                            </div>
                                            <span
                                                class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-white border-radius-18px text-dark-gray fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                                        </div>
                                    </div>


                                    <div class="col icon-with-text-style-07 transition-inner-all">
                                        <div
                                            class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                                            <div class="feature-box-icon">
                                                <a href="demo-accounting-services-details.html"><img
                                                        src="images/demo-accounting-company-icon03.svg" class="h-95px" alt></a>
                                            </div>
                                            <div class="feature-box-content">
                                                <a href="demo-accounting-services-details.html"
                                                    class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Financial
                                                    services</a>
                                                <p class="mb-30px">Financial services are the economic services provided by the finance
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div> -->

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
@endsection
