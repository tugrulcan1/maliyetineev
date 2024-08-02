 @extends('client.layouts.master')

 <script></script>


 @section('content')
     <div id="carouselExampleIndicators" class="carousel slide">

         <div class="carousel-inner">
             @foreach ($sliders as $index => $slider)
                 <div class="carousel-item @if ($index == 0) active @endif">
                     <img src="{{ asset('images/' . $slider->image) }}" class="d-block w-100" id="anaResim" alt="..."
                         style="height:100%">
                 </div>
             @endforeach
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
             data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
             data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>



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









     <section class="pb-0 mt-5" id="services"
         style="padding-bottom: 0px !important; padding-top: 0 !important; display: none;">
         <img src="{{ asset('homeImage.png') }}" class="w-95 border-radius-6px d-flex m-auto">
     </section>

     <section class="pb-0 mt-5" id="servicesMobile"
         style="padding-bottom: 0px !important; padding-top: 0 !important; display: none;">
         <img src="{{ asset('homeImageMobile.png') }}" class="w-95 border-radius-6px d-flex m-auto">
     </section>







     <section class="overflow-hidden mt-5" style="padding:0px 40px !important;">
         <div class="container">
             <div class="row align-items-center justify-content-center mb-3 mt-3 text-center text-lg-start column-form">
                 <div class="col-xl-10 col-lg-10 md-mb-20px mt-2" id="projects"
                     data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                     <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Projelerimiz</h6>
                 </div>
                 <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end" style="display: block"
                     id="webButton"
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
                                                                 {{ $project->project_sub_title }}
                                                             </p>

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
                 <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end mt-3" id="mobilButton"
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
         </div>
     </section>



     <section class="pt-0 pb-2 sm-pb-6 overflow-hidden mt-5" id="musteriSection">
         <div class="container" id="musteri">
             <div class="row align-items-center justify-content-center">
                 <div class="col-lg-12 appear anime-complete text-center" id="musteriYorum"
                     data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                     style="display:flex">
                     <div class="review-star-icon fs-22 d-inline-block align-middle me-15px">
                         <i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                             class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i>
                     </div>
                     <h6 class="text-dark-gra fw-600 mb-0 ls-minus-1px " id="musteriH6">Müşteri Yorumları</h6>
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
