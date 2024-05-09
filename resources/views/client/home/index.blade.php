 @extends('client.layouts.master')


@section('content')



@foreach($sliders as $slider)
<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark position-relative"
        data-parallax-background-ratio="0.8" style="background-image: url('images/{{$slider->image}}')">
        <div class=" h-100 position-relative">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [30, 0], &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeInOutSine&quot; }">
                        <!-- <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px">Crafto expand
                            business values.</div>
                        <div>
                            <span class="opacity-5 fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block">We are dedicated to
                                providing amazing business accounting services and client service.</span>
                        </div> -->
                        <!-- <div class="icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle">
                                    <div
                                        class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-yellow me-15px rounded-box">
                                        <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <a href="#services"
                                            class="d-inline-block fs-19 text-white text-shadow-double-large">Explore
                                            services</a>
                                    </div>
                                </div> -->
                    </div>

                </div>
            </div>
        </div>
        <div class="row bg-very-light-gray m-0 align-items-center justify-content-center text-center text-lg-start position-absolute "
            style="bottom: 0; width: 100%; padding: 20px 0; background-color: rgba(1, 51, 85, 0.3); align-items: center;">


            <div class="col-12 col-md-3 jnm">
                <h4
                    style="color: white; display: flex; justify-content: center; margin: 0; padding: 0; font-weight: 900;">
                    Maliyetine Ev'de </h4>
            </div>
            <div class="col-6 col-md-2 jnm">
                <div style="">
                    <div style="display: flex;">
                        <div style="background-color: green; padding: 10px; border-radius: 20px 0px 0px 0px; "> <i
                                class="fa-solid fa-check" style="color: white;"></i>
                        </div>
                        <div
                            style="background-color: white; padding: 10px; flex-grow: 1; border-radius: 0px 0px 20px 0px; color: #333;">
                           {{$settings['section_2.1']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 jnm">
                <div style=" ">
                    <div style="display: flex;">
                        <div style="background-color: green; padding: 10px; border-radius: 20px 0px 0px 0px;"> <i
                                class="fa-solid fa-check" style="color: white;"></i>
                        </div>
                        <div
                            style="background-color: white; padding: 10px; flex-grow: 1; border-radius: 0px 0px 20px 0px; color: #333;">
                            {{$settings['section_2.2']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 jnm">
                <div style="">
                    <div style="display: flex; ">
                        <div style="background-color: green; padding: 10px; border-radius: 20px 0px 0px 0px"> <i
                                class="fa-solid fa-check" style="color: white;"></i>
                        </div>
                        <div
                            style="background-color: white; padding: 10px; flex-grow: 1; border-radius: 0px 0px 20px 0px; color: #333;">
                            {{$settings['section_2.3']}}</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 jnm">
                <div style=" ">
                    <div style="display: flex;">
                        <div style="background-color: green; padding: 10px; border-radius: 20px 0px 0px 0px"> <i
                                class="fa-solid fa-check" style="color: white;"></i>
                        </div>
                        <div
                            style="background-color: white; padding: 10px; flex-grow: 1; border-radius: 0px 0px 20px 0px; color: #333; white-space: nowrap;">
                            {{$settings['section_2.4']}}</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
	@endforeach







    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-5 offset-lg-1 col-md-11 contact-form-style-01 position-relative" style="">
                    <!-- <div class="position-absolute left-minus-25px md-left-minus-5px xs-left-0 top-100px md-top-0px">
                        <img src="images/demo-accounting-home-left-img.jpg" class="w-40px" alt>
                    </div> -->
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
                        <form  method="POST" action="{{ route('home.form.show') }}"
                            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            @csrf
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="fas fa-user"></i></span>
                                <input type="text" name="name" class="form-control required" placeholder="Ad soyad" />
                            </div>
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control required"
                                    placeholder="E-posta adresiniz" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="fa fa-phone"></i></span>
                                <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız" />
                            </div>
                            <div class="position-relative terms-condition-box text-start d-inline-block">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                        class="terms-condition check-box align-middle required">
                                    <span class="box fs-16">Kişisel Verilerin Korunması Hakkında Aydınlatma Yazısını
                                        okudum, kabul ediyorum.</span>
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


    <section class="bg-very-light-gray overflow-hidden">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center mb-6 text-center text-lg-start column-form">
                <div class="col-xl-5 col-lg-5 md-mb-20px"
                    data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h4 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Projelerimiz
                    </h4>
                </div>
                <div class="col-xl-5 col-lg-5 last-paragraph-no-margin md-mb-30px"
                    data-anime="{ &quot;translateX&quot;: [-50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <p class="w-90 xl-w-100 md-w-80 sm-w-100 md-mx-auto">Maliyetin ev güvencesiyle projelerimize göz
                        atın!</p>
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
                <div class="col-12 position-relative">
                    <div class="outside-box-right-40 xs-outside-box-right-0"
                        data-anime="{ &quot;translateX&quot;: [100, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="swiper magic-cursor"
                            data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 28, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper">
								@foreach($projects as $project)
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure
                                            class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{$project->slug}}"
                                                target="_blank">
                                                <img src="images/{{$project->image}}" alt="Resim bulunamadı"
                                                    style="height: 400px; object-fit: cover;" />
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                <a href="{{$project->slug}}"
                                                    target="_blank">
                                                    <!-- <i class="line-icon-Medal-2 text-white icon-extra-large"></i> -->
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{$project->slug}}"
                                                            target="_blank"
                                                            class="text-white fs-24 lh-28  xl-w-75 d-block"
                                                            style="color: white;">{{$project->project_title}}</a>

                                                        <p
                                                            style="color: white; margin: 0; padding: 0; font-size: 14px;">
                                                            {!!$project->description!!}</p>

                                                    </div>
                                                    <a href="{{$project->slug}}"
                                                        target="_blank"
                                                        class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
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


    <section class="p-0 bg-base-color">
        <div class="container">
            <div class="row align-items-center justify-content-center g-0">
                <div class="col-auto d-flex align-items-center"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <img src="images/logomev.png" style="width: 150px; margin-right: 20px;" alt />
                    <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                        <p><a href="https://www.emlaksepette.com"
                                class="text-decoration-line-bottom fw-500 text-white">{{$settings['section_4']}}</a> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-very-light-gray pb-0" id="services">
        <div class="tab-style-08 border-bottom border-color-extra-medium-gray bg-white box-shadow-quadruple-large">
            <div class="container">

                <ul class="nav nav-tabs border-0 fw-500 fs-19 text-center">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_eight1" class="nav-link active">1- {{$settings['section_5_1']}}<span class="tab-border bg-base-color"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight2"
                            data-tab="counter">2- {{$settings['section_5_2']}}<span class="tab-border bg-base-color"></span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_eight3"
                            data-tab="counter">3- {{$settings['section_5_3']}}<span
                                class="tab-border bg-base-color"></span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" style="white-space: nowrap;" data-bs-toggle="tab"
                            href="#tab_eight4" data-tab="counter">4- {{$settings['section_5_4']}}<span
                                class="tab-border bg-base-color"></span></a></li>
                </ul>

            </div>
        </div>
        <div class="container">
            <div class="row mb-8 sm-mb-10">
                <div class="col-12 tab-style-08">
                    <div class="tab-content">

                        <div class="tab-pane fade in active show" id="tab_eight1">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden"
                                    data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;color&quot;: &quot;#005153&quot;, &quot;direction&quot;:&quot;lr&quot;, &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;delay&quot;:50}">
                                    <img src="images/demo-accounting-img-06.jpg" alt class="w-100 border-radius-6px">
                                   
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start"
                                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <!-- <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Strategic
                                            planning</span>
                                    </div> -->
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">{{$settings['section_5_1']}}</h4>
                                    <p class="mb-35px md-mb-25px">{{$settings['section_5_1_content']}} </p>
                                    <!-- <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a> -->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight2">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="images/demo-accounting-img-07.jpg" alt class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="80"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <!-- <div class="mb-20px">
                                            <div
                                                class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                            </div>
                                            <span
                                                class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Audit
                                                assurance</span>
                                        </div> -->
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">{{$settings['section_5_2']}}</h4>
                                    <p class="mb-35px md-mb-25px">{{$settings['section_5_2_content']}}
                                    </p>
                                    <!-- <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a> -->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight3">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="images/demo-accounting-img-08.jpg" alt class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="85"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <!-- <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Financial
                                            projections</span>
                                    </div> -->
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">{{$settings['section_5_3']}}
                                    </h4>
                                    <p class="mb-35px md-mb-25px">{{$settings['section_5_3_content']}}
                                    </p>
                                    <!-- <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a> -->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="tab_eight4">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden">
                                    <img src="images/demo-accounting-img-09.jpg" alt class="w-100 border-radius-4px">
                                    <div
                                        class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center">
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px"
                                            data-to="80"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project
                                            completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                    <!-- <div class="mb-20px">
                                        <div
                                            class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2">
                                        </div>
                                        <span
                                            class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">Business
                                            planning</span>
                                    </div> -->
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px">{{$settings['section_5_4']}}</h4>
                                    <p class="mb-35px md-mb-25px">{{$settings['section_5_4_content']}}</p>
                                    <!-- <a href="demo-accounting-services.html"
                                        class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn
                                        more<span class="bg-base-color text-white"><i
                                                class="bi bi-arrow-right-short icon-extra-medium"></i></span></a> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container" style="overflow: hidden;">
            <div class="row justify-content-center mb-6">
                <div class="col-xl-6 col-md-8 col-sm-10 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h4 class="mb-0 text-dark-gray fw-700 ls-minus-1px w-85 xl-w-100 mx-auto">Uzman Kadromuzla
                        Hizmetinizdeyiz.</h4>
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
                <div class="row align-items-center " style="margin-bottom: 70px;">
                    <div class="col-12 position-relative">
                        <div class="outside-box-right-40 xs-outside-box-right-0"
                            data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                            <div class="swiper magic-cursor"
                                data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 28, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                                <div class="swiper-wrapper">
									@foreach($blogs as $blog)
                                    <div class="swiper-slide mra" style="">
                                        <div class="interactive-banner-style-08" style="">
                                            <figure class="mb-0 hover-box box-hover position-relative" style="text-align: center;">
                                                <img src="images/{{$blog->image}}" alt class="border-radius-6px"
                                                    style="width: 210px; height: 270px; object-fit: cover;" />
                                                <figcaption class="w-100 p-30px lg-p-25px bg-white">
                                                    <div class="position-relative z-index-1 overflow-hidden lg-pb-5px ">
                                                        <span
                                                            class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">{{$blog->title}}</span>
                                                        <p class="m-0" style="font-size: 13px;">{{$blog->short_content}}</p>

                                                    </div>
                                                    <div
                                                        class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px">
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
            <div class="row position-relative clients-style-08 mb-6 sm-mb-40px" style="height: 60px !important;"
                data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col swiper text-center feather-shadow"
                    data-slider-options="{ &quot;slidesPerView&quot;: 2, &quot;spaceBetween&quot;:0, &quot;speed&quot;: 6000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 } }, &quot;effect&quot;: &quot;slide&quot; }">
                    <div class="swiper-wrapper marquee-slide">




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





    <section>
        <div class="container">

        <h3 class="text-dark-gray fw-700" style="text-align: center;">{{$settings['section_8_title']}}</h3>
            <p>{{$settings['section_8_small_title']}}</p>
        <div class="row">


<div class="col-sm  mb-4" style="text-align: center;">
    <div>
        <img src="/images/trust.png" alt="" style="height: 100px;">
        <p class="text-dark-gray fw-700"
            style="font-size: 20px; margin: 0; padding: 0;  font-size: 16px; ">
            {{$settings['section_8_1']}}</p>
        <p style="font-size: 12px; line-height: 12px; font-weight: 400;">Her adımda şeffaflık ve
        {{$settings['section_8_1.1']}}</p>
    </div>
</div>
<div class="col-sm  mb-4" style="text-align: center;">
    <div>
        <img src="/images/budget.png" alt="" style="height: 100px; ">
        <p class="text-dark-gray fw-700"
            style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">{{$settings['section_8_2']}}
        </p>
        <p style="font-size: 12px; line-height: 12px; font-weight: 400;">{{$settings['section_8_2.1']}}</p>
    </div>
</div>
<div class="col-sm  mb-4" style="text-align: center;">
    <div>
        <img src="/images/bank.png" alt="" style="height: 100px; ">
        <p class="text-dark-gray fw-700"
            style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">{{$settings['section_8_3']}}
        </p>
        <p style="font-size: 12px; line-height: 12px; font-weight: 400;">{{$settings['section_8_3.1']}}</p>
    </div>
</div>
<div class="col-sm  mb-4" style="text-align: center;">
    <div>
        <img src="/images/timing.png" alt="" style="height: 100px;">
        <p class="text-dark-gray fw-700"
            style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">{{$settings['section_8_4']}}
        </p>
        <p style="font-size: 12px; line-height: 12px; font-weight: 400;">{{$settings['section_8_4.1']}}</p>
    </div>
</div>
<div class="col-sm  mb-4" style="text-align: center;">
    <div>
        <img src="/images/smartphone.png" alt="" style="height: 100px; ">
        <p class="text-dark-gray fw-700"
            style="font-size: 20px; margin: 0; padding: 0; color: #333; font-size: 16px;">{{$settings['section_8_5']}}</p>
        <p style="font-size: 12px; line-height: 12px; font-weight: 400;">{{$settings['section_8_5.1']}}</p>
    </div>
</div>
</div>
            <div class="row m-0 align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large"
                data-anime="{ &quot;scale&quot;: [1.1, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-lg-10">
                    <div class="swiper slider-one-slide testimonials-style-09"
                        data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
                        <div class="swiper-wrapper">

                        @foreach($comments as $comment)

                            <div class="swiper-slide">
                                <div class="row align-items-center pt-25px pb-25px">
                                    <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                        <img src="images/{{$comment->image}}" class="rounded-circle w-100px h-100px md-mb-35px"
                                            alt>
                                        <span style="" class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img
                                                src="images/demo-accounting-home-quote-img.png"
                                                class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto"
                                                alt>{!!$comment->content!!}</span>
                                    </div>
                                    <div class="col-lg-1 d-none d-lg-inline-block">
                                        <div
                                            class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                        <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">{{$comment->title}}</span>
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

    <section style="padding: 0 !important; margin-bottom: 50px; ">
        <div class="container">
            <img src="{{ asset('images/asdasd.jpg') }}" alt="" style="width: 1220px; height: 350px; object-fit: contain;">
        </div>
    </section>

  



		

		

@endsection 
