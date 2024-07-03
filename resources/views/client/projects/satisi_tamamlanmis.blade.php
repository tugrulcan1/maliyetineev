

@extends('client.layouts.master')

@section('content')

<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url(&quot;images/subelerimiz.png&quot;);margin-top: 0 !important;">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <!-- <h1 class="mb-20px text-white text-shadow-medium"><span
                            class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Our
                        company</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">About crafto accounto</h2> -->
                </div>
            </div>
        </div>
    </section>
{{-- <section class="py-0 mt-5" >
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6 col-md-7 col-sm-8 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="fw-700 text-dark-gray ls-minus-2px">Projelerimiz</h3>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col">
                        <div class="row mb-3">
                            <span class="baslikSpan">Satışı Tamamlanmış Projeler</span>
                            @if(count($satisiTamamlanmis) > 0 )
                                @foreach($satisiTamamlanmis as $project)
                                    <div class="col-md-3 mt-5">
                                        
                                        <div class="interactive-banner-style-08">
                                            <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                                <a href="{{route('projelerimiz.show',$project->id)}}" target="_blank">
                                                        <img src="{{ asset('projects_cover_image/' . $project->cover_image) }}" alt="Resim bulunamadı" style="height: 400px; object-fit: cover;" />
                                                </a>
                                                <figcaption
                                                    class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                    <a href="{{route('projelerimiz.show',$project->id)}}" target="_blank"></a>
                                                    <div class="mt-auto d-flex w-100 align-items-center">
                                                        <div class="col last-paragraph-no-margin">
                                                            <a href="{{route('projelerimiz.show',$project->id)}}" target="_blank" class="text-white fs-24 lh-28  xl-w-75 d-block"
                                                                style="color: white;font-size:15px">{{$project->project_title}}</a>
                                                            <p class="custom-description"  style="color: white !important;"> {{$project->project_sub_title}}</p>
                                                        </div>
                                                        <a href="{{route('projelerimiz.show',$project->id)}}" target="_blank"
                                                            class="circle-box bg-yellow w-50px h-50px rounded-circle" style=" position: absolute;bottom: 80px;right: 15px; z-index: 2;">
                                                            <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
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
                            @else
                            <div class="col-md-10">
                                <p class="projectEmptyMessage">Henüz topraktan projelerimiz bulunmamaktadır.</p>
                                </div>
                            @endif
                        </div>                   
                </div>
            </div>
        </div>
    </section>

    <style>
        .custom-description {
            /* color: #ffffff !important; */
            margin: 0;
            padding: 0;
            font-size: 14px;
            display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 2.8em; /* line-height * line-clamp */
    line-height: 1.4em; /* adjust based on font-size */
        }
    </style>


    <style>
    .baslikSpan{
        color: #333;
        font-size: 35px;
        font-family: 'Roboto', sans-serif;
        /* letter-spacing: 1px; */
        font-weight: bold;
    }
    .projectEmptyMessage{
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    .position-relative .circle-box {
    position: absolute;
    bottom: 20px; /* Div'in hemen üstünde hizalanması için uygun değeri ayarlayın */
    right: 15px;  /* Sağ tarafta hizalanması için uygun değeri ayarlayın */
    z-index: 2;
}
    </style>