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
                            data-fancy-text="{ &quot;string&quot;: [&quot;Reklam Tanıtım&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">FİLMLERİ</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

<section>


<div class="container">
    <div class="row" style="align-items:center;align-items:center;background-color: whitesmoke;padding: 10px;">
        <div class="col-md-1"
        style="    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;">
            <img alt=""
            class="youtubeVideo"
            src="{{asset('channels4_profile.jpg')}}"
            style="width:100%">
        </div>
        <div class="col-md-11">
            <h3 class="fw-700 text-dark-gray ls-minus-1px fancy-text-style-4 mb-0"
            style="font-size:25px">Maliyetine Ev <a href="https://www.youtube.com/@MaliyetineEv" class="btn btn-extra-large btn-rounded text-white me-2" style="background-color: #ea2a28">
                <i class="fa fa-link"></i> ABONE OL
            </a></h1>
            <span class="fs-15 text-uppercase text-base-color fw-600 d-block">Maliyetine ev sistemi Türkiye'nin en güvenli, en garantili inşaat yapım yatırım sistemidir.</span>
        </div>
    </div>
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


@section("css")

<style>
    .youtubeVideo{
        border-radius: 50%;

    }
    </style>
@endsection


