
@extends('client.layouts.master')

@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"

        style="background-image: url({{asset('demo-conference-page-bg.jpg')}});        padding-top: 30px;
        padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen" >
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Devam Eden Projeler&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">PROJELERİMİZ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-very-light-gray overflow-hidden position-relative ps-3 xs-ps-0">
        <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-lg-3 ps-5 pe-5 xl-pe-0 lg-ps-0 text-center text-lg-start md-mb-40px">
        <div class="mb-10px"><span class="text-dark-gray fw-500 text-highlight">Lookbook 2023<span class="bg-base-color h-8px bottom-0px"></span></span></div>
        <h2 class="alt-font lh-50 text-dark-gray ls-minus-1px mb-15px">New arrival <span class="fw-600">collection</span></h2>
        <p class="xs-pe-15px xs-ps-15px">Flash summer sale 70% off on selected collection for him.</p>
        <a href="demo-fashion-store-shop.html" class="btn btn-dark-gray btn-box-shadow btn-medium">View collection</a>

        </div>
        <div class="col-12 col-lg-9 position-relative">
        <div class="outside-box-right-10 lg-outside-box-right-20 md-outside-box-right-25 xs-outside-box-right-0">
        <div class="swiper slider-three-slide" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 4000, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-one-slide-next-1&quot;, &quot;prevEl&quot;: &quot;.slider-one-slide-prev-1&quot; }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1400&quot;: { &quot;slidesPerView&quot;: 4 }, &quot;1024&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot; }">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-01.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Ethnic wear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Outfits matching</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-02.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Dress materials</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Explore a variety</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-03.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Western wear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Traditional attires</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-04.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Loungewear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Women branded</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-01.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Ethnic wear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Outfits matching</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-02.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Dress materials</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Explore a variety</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-03.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Western wear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Traditional attires</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>


        <div class="swiper-slide">
        <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
        <img src="images/demo-fashion-store-collection-slider-04.jpg" alt />
        <div class="opacity-full bg-gradient-gray-light-dark-transparent"></div>
        <div class="image-content h-100 w-100 ps-15 pe-15 pt-11 pb-11 lg-p-11 d-flex justify-content-bottom align-items-start flex-column">
        <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
        <span class="text-white fw-500 fs-22">Loungewear</span>
        <span class="content-title text-white fs-14 fw-500 opacity-7 text-uppercase ls-05px">Women branded</span>
        <a href="demo-fashion-store-shop.html" class="content-title-hover fs-14 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore collection</a>
        <span class="content-arrow lh-50 rounded-circle bg-base-color w-50px h-50px ms-20px text-center"><i class="bi bi-arrow-right-short text-dark-gray icon-very-medium"></i></span>
        </div>
        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
        <div class="box-overlay bg-gradient-gray-light-dark-transparent"></div>
        <a href="demo-fashion-store-shop.html" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
        </div>
        </div>
        </div>

        </div>
        </div>
        </div>



        </div>
        </div>
        </div>
        <div class="fs-180 lg-fs-150 md-fs-130 fw-700 position-absolute bottom-minus-50px md-bottom-minus-40px ls-minus-5px left-0px right-0px text-center w-100 opacity-1 d-none d-md-block" data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">new collection</div>
        </section>


@endsection

