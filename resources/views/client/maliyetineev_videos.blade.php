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
                            data-fancy-text="{ &quot;string&quot;: [&quot;Müşterilerimizle&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">BERABERİZ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="container">
            <div class="video-gallery-container">
                <div class="video-gallery">
                    @foreach ($videos as $video)
                        <div class="video-item">
                            <iframe style="width: 100%;" src="{{ convertToEmbedUrl($video->url) }}"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .video-gallery-container {
        max-width: 1040px;
        /* Maksimum genişlik belirleme */
        margin: 0 auto;
        /* Sayfayı yatayda ortala */
        overflow: hidden;
        /* İçeriklerin dışarı taşmasını engelle */
    }

    .video-gallery {
        display: flex;
        flex-direction: column;
        /* Videoları dikey olarak sırala */
        justify-content: center;
        /* Dikeyde ortala */
        align-items: center;
        /* Yatayda ortala */
    }

    .video-item {
        width: 100%;
        /* Tam genişlik */
        margin-bottom: 20px;
        /* Videolar arasına boşluk ekle */
    }

    /* Küçük ekranlarda */
    @media screen and (max-width: 768px) {
        .video-gallery-container {
            max-width: 100%;
            /* Maksimum genişlik belirleme */
        }
    }

    /* Ekstra küçük ekranlarda */
    @media screen and (max-width: 480px) {
        .video-gallery-container {
            max-width: 100%;
            /* Maksimum genişlik belirleme */
        }
    }
</style>
