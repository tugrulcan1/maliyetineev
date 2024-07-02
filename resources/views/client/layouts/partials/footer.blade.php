<footer class="footer-dark pt-3 pb-5" style="background-color: #dddddd;">
    <div class="container"
    style="border-bottom: 1px solid #bebebe">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 text-center text-xl-start mb-sm-0">
                <h3 class="mb-2 fw-500" style="color: #333; font-size: 24px;">Aklınıza takılan soru mu var?</h3>
                <p class="fs-15 fw-300" style="color: #333;">Bizimle iletişime geçebilirsiniz.</p>
            </div>
            <div class="col-xl-6 text-center text-xl-end">
                <a href="mailto:{{ $settings['e-mail'] }}"
                    class="btn btn-extra-large btn-yellow btn-rounded text-white me-2">
                    <i class="fa fa-envelope"></i> {{ $settings['e-mail'] }}
                </a>
                <a href="tel:{{ $settings['phone'] }}"
                    class="btn btn-extra-large btn-base-color btn-rounded text-white">
                    <i class="fa fa-phone"></i> {{ $settings['phone'] }}
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2 justify-content-between">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="demo-accounting.html" class="footer-logo mb-2 d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}" alt="Logo">
                </a>
                <p class="fs-14" style="color: #333;">Maliyetine Ev Sahibi Olmak Herkesin Hakkı</p>

                <div class="elements-social social-icon-style-02">
                    <ul class="small-icon light list-inline mb-0">
                        @foreach ($socialMediaIcons as $icon)
                            <li>
                                <a class="{{ $icon->platform }}" href="{{ $icon->url }}" target="_blank">
                                    <i class="fa-brands {{ $icon->icon_class }}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            {{-- <div class="col-12 col-lg-4 col-sm-4 mb-4 mb-lg-0" style="width: 390px;">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">Hızlı Link</span>
                <ul class="menu-list">
                    <li><a href="/page/hakkimizda" style="color: #333;">Hakkımızda</a></li>
                    <li><a href="/projelerimiz" style="color: #333;">Projelerimiz</a></li>
                    <li><a href="/subelerimiz" style="color: #333;">Şubelerimiz</a></li>
                </ul>
            </div> --}}
            <div class="col-12 col-lg-4 col-sm-4 mb-4 mb-lg-0 text-end">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">İletişim</span>
                <p>Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul</p>
                <p><a href="mailto:info@emlaksepette.com">info@emlaksepette.com</a></p>
                <p><a href="tel:444 3 284">444 3 284</a></p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center fs-14 fw-300">
            <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                <p style="color: #333;">&copy; {{ date('Y') }} Maliyetine Ev. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</footer>



<style>
    .menu-list li a {
        color: white;
        /* Bağlantı metin rengini beyaz yapıyoruz */
        text-decoration: none;
        /* Bağlantı alt çizgilerini kaldırıyoruz */
    }

    .menu-list li a:hover {
        text-decoration: underline;
        /* Bağlantıların üzerine gelindiğinde alt çizgi ekliyoruz */
    }

    .small-icon.light.list-inline {
    padding: 0;
    margin: 0;
}

.small-icon.light.list-inline li {
    display: inline-block;
    margin-right: 10px;
}

.small-icon.light.list-inline li:last-child {
    margin-right: 0;
}

.small-icon.light.list-inline li a {
    color: #333;
    font-size: 20px;
}

.small-icon.light.list-inline li a:hover {
    color: #007bff; /* Değiştirmek istediğiniz hover rengi */
}

.small-icon.light.list-inline li a.fa-facebook {
    color: #3b5998; /* Facebook hover rengi */
}

.small-icon.light.list-inline li a.fa-instagram {
    color: #e4405f; /* Instagram hover rengi */
}

.small-icon.light.list-inline li a.fa-twitter {
    color: #1da1f2; /* Twitter hover rengi */
}

</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".tablinks").click(function() {
            var tabId = $(this).data("tab");
            console.log('adfsa' + tabId)
            $(".tabcontent").hide();
            $("#" + tabId).show();
            $(".tablinks").removeClass("active");
            $(this).addClass("active");
        });
        // Automatically click the first tab button on page load
        $(".tab button:first").click();
    });
</script>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/vendors.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/js/main.js"></script>

@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



<script>
    var successMessage = "{{ session('success') }}";
    console.log(successMessage);
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
{{-- <script>
    $(document).ready(function() {
        $('.tablinks').click(function() {
            console.log('asdasds')
            var katIndex = $(this).data('kat-index');
            var katGorselleriDiv = $('#katGorselleri');
            katGorselleriDiv.empty(); // Her tıklamada içeriği temizle

            var katGorselleri = ;

            console.log('katGorselleri')

            $.each(katGorselleri[katIndex], function(index, gorsel) {
                var img = $('<img>');
                img.attr('src', '{{ asset("storage/") }}/' + gorsel);
                katGorselleriDiv.append(img);
            });
        });
    });
</script> --}}


</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-accounting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 11:47:29 GMT -->

</html>
