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


        <section class="p-0 mt-5">
            <div class="container">

                <div data-anime="{ &quot;opacity&quot;: [0, 1], &quot;translateY&quot;: [50, 0], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 500, &quot;delay&quot;: 300 }"
                    class="alt-font text-dark-gray mb-25px fs-20 sm-mb-15px" id="subeYazi"><span class="text-highlight">Türkiye genelinde 22 şubemiz ile hizmetinizdeyiz.

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


            </div>
        </section>


        
    @endsection

    <script>

        function checkScreen() {
            const subeYazi = document.getElementById('subeYazi');
            const screenWidth = window.innerWidth;
    
            if (window.innerWidth < 768) {
                subeYazi.classList.remove('fs-20');
            } else{
                subeYazi.classList.add('fs-20');
            }
        }
        window.addEventListener('load', checkScreen);
        window.addEventListener('resize', checkScreen);
    </script>