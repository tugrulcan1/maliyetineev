<footer class="footer-dark pt-3 pb-5" style="background-color: #dddddd;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 text-center text-xl-start mb-sm-0">
                <h3 class="mb-2 fw-500" style="color: #333; font-size: 24px;">Aklınıza takılan soru mu var?</h3>
                <p class="fs-15 fw-300" style="color: #333;">Bizimle iletişime geçebilirsiniz.</p>
            </div>
            <div class="col-xl-6 text-center text-xl-end">
                <a href="mailto:{{$settings['e-mail']}}" class="btn btn-extra-large btn-yellow btn-rounded text-white me-2">
                    <i class="fa fa-envelope"></i> {{$settings['e-mail']}}
                </a>
                <a href="tel:{{$settings['phone']}}" class="btn btn-extra-large btn-base-color btn-rounded text-white">
                    <i class="fa fa-phone"></i> {{$settings['phone']}}
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="demo-accounting.html" class="footer-logo mb-2 d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}" alt="Logo">
                </a>
                <p class="fs-14" style="color: #333;">Maliyetine Ev Sahibi Olmak Herkesin Hakkı</p>
                <div class="elements-social social-icon-style-02">
                    <ul class="small-icon light list-inline mb-0">
                        @foreach($socialMediaIcons as $icon)
                            <li><a class="facebook" href="{{$icon->url}}" target="_blank"><i class="fa-brands {{$icon->icon_class}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-4 mb-4 mb-lg-0" style="width: 390px;">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">Hızlı Link</span>
                <ul class="menu-list">
                    <li><a href="/page/hakkimizda" style="color: #333;">Hakkımızda</a></li>
                    <li><a href="/projelerimiz" style="color: #333;">Projelerimiz</a></li>
                    <li><a href="/subelerimiz" style="color: #333;">Şubelerimiz</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 col-sm-4 mb-4 mb-lg-0">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">İletişim</span>
                <a href="tel:{{$settings['phone']}}" style="color: #333;">{{$settings['phone']}}</a><br>
                <a href="mailto:{{$settings['e-mail']}}" style="color: #333;">{{$settings['e-mail']}}</a>
            </div>
            {{-- <div class="col-lg-3 col-sm-12">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">Mail gönderin</span>
                <p style="color: #333;">En kısa sürede dönüş yapacağız.</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('footer.form.show') }}">
                    @csrf
                    <input class="form-control mb-2" type="email" name="email" placeholder="Email Adresiniz">
                    <button class="btn btn-primary" type="submit" aria-label="Gönder"><i class="fa fa-envelope"></i></button>
                </form>
            </div> --}}
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


<!-- <div class="sticky-wrap d-none d-lg-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <span class="fs-16"><i class="bi bi-envelope icon-small me-10px"></i>Get our service — <a
                href="cdn-cgi/l/email-protection.html#751c1b131a35111a18141c1b5b161a18"
                class="text-decoration-line-bottom fw-500">Send a message</a></span>
    </div> -->

    <style>
        .menu-list {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-list li {
    flex: 0 0 50%; /* Her bir öğenin genişliği %50 olacak şekilde ayarlıyoruz */
    margin-bottom: 10px; /* Öğeler arasına biraz boşluk ekliyoruz */
}

.menu-list li a {
    color: white; /* Bağlantı metin rengini beyaz yapıyoruz */
    text-decoration: none; /* Bağlantı alt çizgilerini kaldırıyoruz */
}

.menu-list li a:hover {
    text-decoration: underline; /* Bağlantıların üzerine gelindiğinde alt çizgi ekliyoruz */
}

    </style>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".tablinks").click(function(){
                var tabId = $(this).data("tab");
                console.log('adfsa'+tabId)
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
        document.addEventListener("DOMContentLoaded", function () {
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
