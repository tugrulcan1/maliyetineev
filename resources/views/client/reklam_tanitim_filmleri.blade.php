@extends('client.layouts.master')

@section('content')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{asset('demo-conference-page-bg.jpg')}})">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
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
        <div class="col-lg-12 mt-2">
            <h3 class="text-5 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"
                style="animation-delay: 250ms;">Send, Track and Find New Customers with a Single Platform</h3>
            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                style="animation-delay: 500ms;">Freizy is the easiest and most practical way to track and record all international business activities. You can open a free account at freizy, identify new customers and competitors, and instantly contact whenever you need, in order to carry out worldwide commercial activities, facilitate customer relations and identify suppliers.</p>
        </div>
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
                                                        <div class="video-con active-con" video="https://www.youtube.com/embed/HoY2jcMH9kQ">
                                <div class="index title">0</div>
                                <div class="thumb">
                                    <img src="http://freizy.com/storage/videos/6CspVDyJz5Q0HZqlNKdj2XjS9PVR4r50H9yQ9PuV.jpg"
                                        alt="What is Freizy?">
                                </div>
                                <div class="v-titles">
                                    <div class="title">What is Freizy?</div>
                                </div>
                            </div>
                                                        <div class="video-con active-con" video="https://www.youtube.com/embed/-iYUiEWw9Ng?si=Zo8MbBWwYocAANPl">
                                <div class="index title">1</div>
                                <div class="thumb">
                                    <img src="http://freizy.com/storage/videos/RAa7QdPPF9ArOKT10NQaX8f7m8MNz9vBRcJotoSk.png"
                                        alt="What is Freizy ?">
                                </div>
                                <div class="v-titles">
                                    <div class="title">What is Freizy ?</div>
                                </div>
                            </div>
                                                        <div class="video-con active-con" video="https://www.youtube.com/embed/UJ1radUjito?si">
                                <div class="index title">2</div>
                                <div class="thumb">
                                    <img src="http://freizy.com/storage/videos/jZiSDFRa3RdHJIZmX1KDqnPeX7VY89hNjPdESL2G.png"
                                        alt="Freizy user manuel">
                                </div>
                                <div class="v-titles">
                                    <div class="title">Freizy user manuel</div>
                                </div>
                            </div>
                                                        <div class="video-con active-con" video="https://www.youtube.com/embed/obCP9Kg5bIQ?si">
                                <div class="index title">3</div>
                                <div class="thumb">
                                    <img src="http://freizy.com/storage/videos/eM9uD1RKt5PJdot6Wbye9JMYkWfLr4vEdLdXUsNV.png"
                                        alt="Freizy Global Full Use in English">
                                </div>
                                <div class="v-titles">
                                    <div class="title">Freizy Global Full Use in English</div>
                                </div>
                            </div>
                                                </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <h3 class="text-center fw-700" style="color:#282828 !important">Reklam Tanıtım Filmleri</h3>
<div class="video-gallery-container">
    <div class="video-gallery">
        @foreach ($reklam_tanitim_filmleri as $video)
            <div class="video-item">
                <iframe style="width: 100%;height:550px" src="{{ convertToEmbedUrl($video->url) }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
    </div>
</div>
</div>
</section>

@endsection

<style>
.video-gallery-container {
    max-width: 1040px; /* Maksimum genişlik belirleme */
    margin: 80px auto; /* Sayfayı yatayda ortala */
    overflow: hidden; /* İçeriklerin dışarı taşmasını engelle */
}

.video-gallery {
    display: flex;
    flex-direction: column; /* Videoları dikey olarak sırala */
    justify-content: center; /* Dikeyde ortala */
    align-items: center; /* Yatayda ortala */
}

.video-item {
    width: 100%; /* Tam genişlik */
    margin-bottom: 20px; /* Videolar arasına boşluk ekle */
}

/* Küçük ekranlarda */
@media screen and (max-width: 768px) {
    .video-gallery-container {
        max-width: 80%; /* Maksimum genişlik belirleme */
    }
}

/* Ekstra küçük ekranlarda */
@media screen and (max-width: 480px) {
    .video-gallery-container {
        max-width: 90%; /* Maksimum genişlik belirleme */
    }
}

.icon-active {
            filter: sepia(100%) hue-rotate(150deg) saturate(400%);
        }

        #playlist {
            display: flex;
            position: relative;
            transition: all ease 0.3s;
            margin-bottom: 20px;
        }

        #video-dis {
            flex: 6.5;
            margin-right: 20px;
            background: black;
        }

        #video-dis iframe {
            width: 100%;
            height: 100%;
        }

        .video-li {
            flex: 3.5;
            display: flex;
            box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
            padding: 10px;
            border-radius: 3px;
            flex-direction: column;
        }

        .li-collapsed {
            overflow: hidden;
            height: 40px;
        }

        #upper-info {
            display: flex;
        }

        #li-titles {
            flex: 9;
        }

        #li-titles div {
            padding-bottom: 5px;
        }

        #drop-icon {
            flex: 1;
            display: none;
            cursor: pointer;
            background: url(https://user-images.githubusercontent.com/50569315/118832584-92350500-b8e2-11eb-8398-9a90a4615b98.png) no-repeat center;
            background-size: 50%;
        }

        #lower-info {
            display: flex;
            padding-top: var(--b-pad);
        }

        #lower-info div {
            width: 40px;
            height: 40px;
            cursor: pointer;
        }

        #btn-repeat {
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832591-93663200-b8e2-11eb-8b98-3b177304b555.png) no-repeat left;
            background-size: 50%;
        }

        #btn-suffle {
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832597-93fec880-b8e2-11eb-9146-f978064eddb1.png) no-repeat left;
            background-size: 45%;
        }

        #btn-save {
            margin-left: auto;
            order: 2;
            right: 10px;
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832594-93fec880-b8e2-11eb-8201-12cb52be231f.png) no-repeat right;
            background-size: 60%;
        }

        #vli-videos {
            flex: 7;
            overflow: auto;
            margin-top: 5px;
        }

        .video-con {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            cursor: pointer;
        }

        .video-con:hover,
        .active-con {
            background: var(--active);
        }

        .index {
            min-width: 15px;
            align-self: center;
        }

        .thumb {
            width: 100px;
            height: 60px;
            background: #1c5fa8;
        }

        .thumb img {
            width: 100%;
        }

        .v-titles {
            flex: 6;
        }

        .v-titles .title {
            padding-left: 10px;
        }

        .v-titles div:nth-child(2) {
            margin-top: var(--s-pad);
        }

        @media  only screen and (max-width: 1150px) {
            #playlist {
                width: 100%;
                height: 100%;
            }
        }

        @media  only screen and (max-width: 950px) {
            #playlist {
                width: 100%;
                margin: 0 auto;
                display: block;
                align-items: center;
            }

            #video-dis {
                margin-bottom: var(--b-pad);
                width: 100%;
                height: 300px;
            }
        }

        @media  only screen and (max-width: 800px) {
            #playlist {
                width: 100%;
            }
        }

        @media  only screen and (max-width: 650px) {
            #playlist {
                width: 100%;
            }
        }


</style>

<script>
    


    function qs(elem) {
            return document.querySelector(elem);
        }

        function qsa(elem) {
            return document.querySelectorAll(elem);
        }

        // globals
        var activeCon = 0,
            totalCons = 0;

        // elements
        const v_cons = qsa(".video-con"),
            a_cons = qsa(".active-con"),
            v_count = qs("#video-count"),
            info_btns = qsa("#lower-info div"),
            drop_icon = qs("#drop-icon"),
            video_list = qs("#v-list"),
            display = qs("#display-frame");

        // activate container
        function activate(con) {
            deactivateAll();
            indexAll();
            countVideos(con.querySelector(".index").innerHTML);
            con.classList.add("active-con");
            con.querySelector(".index").innerHTML = "►";
        }
        // deactivate all container
        function deactivateAll() {
            v_cons.forEach(container => {
                container.classList.remove("active-con");
            });
        }
        // index containers
        function indexAll() {
            var i = 1;
            v_cons.forEach(container => {
                container.querySelector(".index").innerHTML = i;
                i++;
            });
        }
        // update video count
        function countVideos(active) {
            // v_count.innerHTML = active + " / " + v_cons.length;
        }
        // icon activate
        function toggle_icon(btn) {
            if (btn.classList.contains("icon-active")) {
                btn.classList.remove("icon-active");
            } else btn.classList.add("icon-active");
        }
        // toggle video list
        function toggle_list() {
            if (video_list.classList.contains("li-collapsed")) {
                drop_icon.style.transform = "rotate(0deg)";
                video_list.classList.remove("li-collapsed");
            } else {
                drop_icon.style.transform = "rotate(180deg)";
                video_list.classList.add("li-collapsed");
            }
        }

        function loadVideo(url) {
            display.setAttribute("src", url);
        }

        //******************
        // Main Function heres
        //******************
        window.addEventListener("load", function() {
            // starting calls
            indexAll(); // container indexes
            countVideos(1);
            activate(v_cons[0]);
            loadVideo(v_cons[0].getAttribute("video"));

            // Event handeling goes here
            // on each video container click
            v_cons.forEach(container => {
                container.addEventListener("click", () => {
                    activate(container);
                    loadVideo(container.getAttribute("video"));
                });
            });
            // on each button click
            info_btns.forEach(button => {
                button.addEventListener("click", () => {
                    toggle_icon(button);
                });
            });
            // drop icon click
            drop_icon.addEventListener("click", () => {
                toggle_list();
            });
        });
        //# sourceURL=pen.js
    </script>