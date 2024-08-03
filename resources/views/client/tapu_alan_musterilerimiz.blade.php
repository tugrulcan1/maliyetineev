@extends('client.layouts.master')

@section('content')
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }}) ;padding-top: 30px;
padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Tapu Alan&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">MÜŞTERİLERİMİZ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-0 mt-5 mb-5">
        <div class="container mb-5 mt-5">
            <div class="row mb-5">
                @foreach ($tapu_alan_musterilerimiz as $item)
                    <div class="col-lg-4 col-md-6 mb-4 mt-4 col-sm-12">
                        <div class="card custom-card h-100">
                            <div class="card-body p-0 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('tapu_alan_musteriler/' . $item->image) }}" alt=""
                                    class="img-fluid w-100 h-100 object-fit-contain">
                            </div>
                            <div class="card-footer text-center">
                                <span class="card-title">{{ $item->musteri_bilgisi }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
