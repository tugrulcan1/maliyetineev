<footer class="footer-dark pt-1 pb-0" style="background-color: #274abb1f;">
    <div class="container" style="border-bottom: 1px solid #bebebe" id="mobileContainer">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 text-center text-xl-start mb-sm-0">
                <h3 class="mb-2 fw-500" style="color: #333; font-size: 24px;">Aklınıza takılan soru mu var?</h3>
                <p class="fs-15 fw-300" style="color: #333;">Bizimle iletişime geçebilirsiniz.</p>
            </div>
            <div class="col-xl-6 text-center text-xl-end">
                <a href="mailto:{{ $settings['e-mail'] }}" class="btn btn-extra-large btn-rounded text-white me-2"
                    style="background-color: #ea2a28">
                    <i class="fa fa-envelope"></i> {{ $settings['e-mail'] }}
                </a>
                <a href="tel:{{ $settings['phone'] }}" class="btn btn-extra-large btn-base-color btn-rounded text-white"
                    style="background-color: #274abb">
                    <i class="fa fa-phone"></i> {{ $settings['phone'] }}
                </a>
            </div>
        </div>
    </div>

    <div class="container" id="pembeBolge">
        <div class="row mt-2 justify-content-between mb-2 align-items-center">
            <div class="col-12 col-lg-4 mb-lg-0" id="maliyetineEv">
                <a href="demo-accounting.html" class="footer-logo mb-2 d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}" alt="Logo" id="imageID">
                </a>
            </div>

            <div class="col-12 col-lg-4 col-sm-4 mb-lg-0 text-end color-right-footer" id="location">
                <span class=" fw-400 d-block mb-2" style="color: #333;">İletişim</span>
                <p id="location_p">Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul</p>
            </div>
        </div>
    </div>

    <div class="second-footer bg-white-3 d-flex justify-content-between" id="secondFooter">
        <div
            style="    padding: 10px 40px !important;
    margin: 0 auto !important;
    width: 100%;
    text-align: center;
    background: #274abb;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;">
            <p class="d-flex align-items-center" style="gap: 5px;margin-bottom:0" id="secondFooterP">
                <span>
                    <span id="current-year">2024</span>
                    <span style="display: inline-block;">© Copyright - Maliyetine
                        Ev</span>
                </span>

                <a style="margin-left: 30px;" href="javascript:;" data-pikap-popup="popup-kvkk">Kişisel Verilerin
                    Korunması</a>
                <a style="margin-left: 30px;" href="javascript:;" data-pikap-popup="popup-kvkk">Ticari Elektronik İleti
                    Açık Rıza Metni</a>
                <a style="margin-left: 30px;" href="/iletisim">İletişim</a>

            </p>

            <script>
                document.getElementById("current-year").textContent = new Date().getFullYear();
            </script>


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
</body>

</html>
