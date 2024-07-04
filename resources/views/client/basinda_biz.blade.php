@extends('client.layouts.master')

@section('content')

    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{asset('demo-conference-page-bg.jpg')}}) ;padding-top: 30px;
        padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Basında&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">BİZ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-midnight-blue pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="image-gallery-style-03 gallery-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <li class="grid-sizer"></li>
                        @foreach ($basinda_biz as $item)
                            <li class="grid-item transition-inner-all">
                                <div class="gallery-box overflow-hidden">
                                    <a href="{{ asset('basinda_biz/' . $item->image) }}"
                                        data-group="lightbox-group-gallery-item-3" title="{{ $item->info }}">
                                        <div class="position-relative gallery-image bg-base-color">
                                            <img src="{{ asset('basinda_biz/' . $item->image) }}" alt />
                                            <div
                                                class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                <i class="fa fa-plus icon-medium text-white"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-0 mt-5 mb-5" style="margin-top: 240px !important;margin-bottom: 200px !important">
        <div class="container mb-5 mt-5">
            <div class="row mb-5">
                @foreach ($basinda_biz as $item)
                    <div class="col-lg-4 col-md-6 mb-4 mt-4 col-sm-12">
                        <div class="card custom-card h-100">
                            <div class="card-body p-0 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('basinda_biz/' . $item->image) }}" alt=""
                                    class="img-fluid w-100 h-100 object-fit-contain">
                            </div>
                            <div class="card-footer text-center">
                                <span class="card-title">{{ $item->info }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}


    @endsection

    @section("css")
    <style>
        .card-body {
            padding: 0;
            overflow: hidden;
        }

        .card-body img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
    @endsection
