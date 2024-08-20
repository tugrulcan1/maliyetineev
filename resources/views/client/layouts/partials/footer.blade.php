<footer class="footer-dark bg-blue-whale py-0" style="background-color: #152833;">
    <div class="container footer-top pt-50px pb-50px md-pt-35px md-pb-35px">
        <div class="row justify-content-center">

            <div class="col-12 position-relative justify-content-center align-items-center text-center">

                <h5 class="alt-font d-inline-block align-middle text-white mb-0 me-35px md-me-0 position-relative">
                    Maliyetine evim ile <span class="text-decoration-line-bottom-medium fw-600 font-style-italic"
                        style="font-weight: 'Playfair Display', serif !important">ev sahibi olmak ister misiniz?</span>
                </h5>
                <a href="{{ url('/iletisim') }}"
                    class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600 md-mt-40px sm-mt-30px">Başvur<span
                        class="bg-dark-gray text-white"><i class="fa fa-arrow-right"></i></span></a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-50px pb-50px md-pt-35px md-pb-35px">

            <div class="col-lg-2 text-center text-lg-start last-paragraph-no-margin md-mb-15px">
                <a href="demo-lawyer.html" class="footer-logo d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}"
                        data-at2x="{{ asset('images/maliyetineevlogo.png') }}" alt="" width="138"
                        height="36">
                </a>
            </div>


            <div class="col-lg-4 last-paragraph-no-margin text-center text-lg-start md-mb-40px sm-mb-30px">
                <span class="fs-22 alt-font md-w-80 xs-w-100 m-auto d-inline-block">Aklınıza takılan soru mu var?
                    <br>
                    <span class="text-white font-style-italic fw-500 text-decoration-line-bottom">Bizimle iletişime
                        geçebilirsiniz.

                    </span></span>
            </div>


            <div class="col-lg-3 offset-xl-1 col-sm-6 text-center text-lg-start last-paragraph-no-margin xs-mb-30px">
                <span class="alt-font d-inline-block text-white mb-5px fs-18">
                    <i class="bi bi-geo-alt me-10px"></i>Adres
                </span>
                <p class="w-80 xs-w-100 d-inline-block">
                    <a href="https://www.google.com/maps?q=Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul"
                        target="_blank" class="text-white text-decoration-none">
                        Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul
                    </a>
                </p>
            </div>



            <div class="col-xl-2 col-lg-3 col-sm-6 text-center text-lg-start last-paragraph-no-margin">
                <span class="alt-font d-inline-block text-white mb-5px fs-18"><i
                        class="bi bi-telephone-outbound me-10px"></i>İletişim</span>
                <p><a href="tel:444 3 284">444 3 284</a></p>
                <a href="mailto:info@domain.com"
                    class="text-white text-decoration-line-bottom">info@maliyetineev.com</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
            </div>
        </div>
    </div>

    <div class="container footer-bottom pt-25px pb-25px">
        <div class="row align-items-center">

            <div class="col-lg-9 text-center text-lg-start sm-pb-10px">
                <ul class="footer-navbar md-lh-normal">
                    <li class="nav-item"><a href="demo-lawyer.html" class="nav-link">Kişisel Verilerin
                            Korunması</a></li>
                    <li class="nav-item"><a href="demo-lawyer-about.html" class="nav-link">Ticari Elektronik
                            İleti
                            Açık Rıza Metni</a></li>
                    <li class="nav-item"><a href="demo-lawyer-practice-areas.html" class="nav-link">Ticari Elektronik
                            İleti
                            Açık Rıza Metni</a>
                    </li>
                </ul>
            </div>


            <div class="col-lg-3 text-center text-lg-end last-paragraph-no-margin">
                <p>© 2024 Copyright <a href="#" target="_blank"
                        class="text-decoration-line-bottom text-white">Maliyetine Ev</a></p>
            </div>

        </div>
    </div>
</footer>

<style>
    .small-screenP {
        flex-direction: column;
        align-items: center;
    }
</style>

<div class="floating_btn">
    <a target="_blank" href="https://wa.me/905496716212">
        <div class="contact_icon">
            <i class="fa fa-whatsapp my-float"></i>
        </div>
    </a>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.questionHeader').on('click', function() {
            const icon = $(this).find('.icon');
            const answer = $(this).next('.answerP');
            $('.questionHeader').removeClass("active");
            $(this).addClass("active");
            icon.toggleClass('rotate');
            answer.slideToggle();
        });

        // mfp-arrow-right sınıfına sahip öğeyi seçin ve sınıfları değiştirin
        $('.mfp-arrow-right').removeClass('mfp-arrow-right').addClass('fas fa-angle-right');


    });
    $(document).ready(function() {
        $(".tablinks").click(function() {
            var tabId = $(this).data("tab");
            $(".tabcontent").hide();
            $("#" + tabId).show();
            $(".tablinks").removeClass("active");
            $(this).addClass("active");
        });
        // Automatically click the first tab button on page load
        $(".tab button:first").click();
    });
</script>

<script>
    function checkScreen() {
        const mobileContainer = document.getElementById('mobileContainer');
        const secondFooter = document.getElementById('secondFooter');
        const secondFooterP = document.getElementById('secondFooterP');
        const buttons = document.querySelectorAll('.btn-extra-large')
        const pembeBolge = document.getElementById('pembeBolge');
        const locationElement = document.getElementById('location');
        const maliyetineEv = document.getElementById('maliyetineEv');
        const aEtiket = pembeBolge.querySelector('a');
        const locationP = document.getElementById('location_p');
        const imageID = document.getElementById('imageID');
        const image = aEtiket.querySelector('img');
        const screenWidth = window.innerWidth;

        if (window.innerWidth < 768) {
            buttons.forEach(button => {
                button.classList.remove('btn-extra-large');
                button.classList.add('mb-2');
            });
            locationElement.classList.remove('text-end');
            locationElement.classList.add('text-center');
            pembeBolge.classList.add('flex-column');
            maliyetineEv.classList.add('d-flex', 'align-items-center', 'justify-content-center');
            pembeBolge.classList.remove('row');
            locationP.style.fontSize = '12px';
            imageID.style.maxHeight = '70px';
            secondFooterP.classList.add('flex-column', 'small-screenP', 'align-items-center',
                'justify-content-center');
            secondFooter.classList.add('align-items-center', 'justify-content-center');
        }
    }
    window.addEventListener('load', checkScreen);
    window.addEventListener('resize', checkScreen);
</script>


@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



<script>
    $('.scroll-to-map').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#map-section').offset().top
        }, 800);
    });
    document.addEventListener('DOMContentLoaded', function() {
        var figures = document.querySelectorAll('.interactive-banner-style-08 figure');

        figures.forEach(function(figure) {
            figure.addEventListener('click', function() {
                var url = figure.getAttribute('data-url');
                if (url) {
                    window.location.href = url;
                }
            });
        });
    });
</script>

<script>
    var successMessage = "{{ session('success') }}";
    if (successMessage) {
        Toastify({
            text: successMessage,
            duration: 5000,
            gravity: 'bottom',
            position: 'center',
            backgroundColor: 'green',
            stopOnFocus: true,
        }).showToast();
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        if (evt) {
            evt.currentTarget.className += " active";
        }
    }

    // Sayfa yüklendiğinde ilk sekmeyi aç
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".tablinks").click();
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="http://freizy.com/assets/frontend/vendor/plugins/js/plugins.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="http://freizy.com/assets/frontend/js/theme.js"></script>

<!-- Circle Flip Slideshow Script -->
<script src="http://freizy.com/assets/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script> <!-- Current Page Views -->
<script src="http://freizy.com/assets/frontend/js/views/view.home.js"></script>

<!-- Theme Initialization Files -->
<script src="http://freizy.com/assets/frontend/js/theme.init.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script id="rendered-js">
    function qSearch(val) {
        $value = val.getAttribute('value');
        $('#search').val($value);
        $('.output').css({
            "display": "none"
        });
    };

    $('#search').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: 'http://freizy.com/search',
            data: {
                'search': $value
            },
            success: function(data) {
                $('.output').html(data);
                $('.output').css({
                    "display": "block"
                });

            }
        });
    })
    $.ajaxSetup({
        headers: {
            'csrftoken': 'QaqlNfB0gATy6I5bjwZwFINiyYGVKw7066kb87Km'
        }
    });


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
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/vendors.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/main.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/ie7/ie7.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css
" rel="stylesheet">
</body>

</html>
