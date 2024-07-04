@extends('client.layouts.master')

@section('content')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{asset('demo-conference-page-bg.jpg')}})">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen" style="top:25px !important">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Reklam Tanıtım&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">filmleri</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

<section>


<div class="container">
    <div id="aboutus" class="row align-items-xl-center pt-2 mt-2">
        <div class="col-md-12">
            <div id="playlist">
                <div id="video-dis">
                    <iframe id="display-frame" src="" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div id="v-list" class="video-li">

                    <div id="vli-info">
                        <div id="upper-info">
                            <div id="li-titles">
                                <div class="sub-title">
                                    <span id="video-count"></span>
                                </div>
                            </div>
                            <div id="drop-icon"></div>
                        </div>
                    </div>

                    <div id="vli-videos">
                        @foreach ($reklam_tanitim_filmleri as $key => $video)
                                                        <div class="video-con active-con" video="{{ convertToEmbedUrl($video->url) }}">
                                <div class="index title">{{$key}}</div>
                                <div class="thumb">
                                    <img src="{{asset('reklam_tanitim_filmleri/'. $video->image)}}"
                                        alt="{{$video->title}}">
                                </div>
                                <div class="v-titles">
                                    <div class="title">{{$video->title}}</div>
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

@endsection



