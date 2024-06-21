<footer class="footer-dark pt-0 lg-pb-35px"  style="padding-bottom: 10px !important; padding-top:10px !important;background-color:#dddddd" >
    <div class="footer-top  sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light" style="margin-top:20px; padding-bottom:10px !important; padding-top:0px !important;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                    <h3 class="mb-5px fw-500 ls-minus-1px" style="color:#333 !important">Aklınıza takılan soru mu var?</h3>
                    <span class="fs-20 fw-300" style="color:#333 !important">Bizimle iletişime geçebilirsiniz.</span>
                </div>
                <div class="col-xl-6 text-center text-xl-end">
                    <a href="mailto:{{$settings['e-mail']}}"
                        style="background: #0f75bc !important; color: white !important;"
                        class="btn btn-extra-large btn-yellow left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px">
                        <i class="fa fa-envelope"></i>{{$settings['e-mail']}}
                    </a>
                    <a href="tel:12345678910" style="background-color:rgb(230, 71, 71)"
                        class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px">
                        <i class="fa fa-phone"></i>{{$settings['phone']}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center fs-17 fw-300 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px" style="margin-top: 10px !important;" >
            <div class="col-12 col-lg-3 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                <a href="demo-accounting.html" class="footer-logo mb-5px d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}" >
                </a>
                <span class="w-85 xl-w-95 sm-w-100" style="color:#333 !important;display:block">Maliyetine Ev Sahibi Olmak Herkesin Hakkı</span>
                <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                    <ul class="small-icon light">
                        @foreach($socialMediaIcons as $SocialMediaIcon)
                            <li><a class="facebook" href="{{$SocialMediaIcon->url}}" target="_blank"><i
                                        class="fa-brands {{$SocialMediaIcon->icon_class}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-12 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2" style="width: 390px !important">
                <span class="fs-18 fw-400 d-block mb-5px" style="color: #333">Hızlı Link</span>
                <ul class="menu-list">
                    @foreach ($menu as $menus)
                        <li><a href="{{$menus->href}}" style="color: #333">{{$menus->text}}</a></li>
                    @endforeach
                    <li><a href="/page/hakkimizda" style="color: #333">Hakkımızda</a></li>
                    <li><a href="/musterilerimize_mektup" style="color: #333">Müşterilerimze Mektup</a></li>
                </ul>
            </div>


            <div class="col-12 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-18 fw-400 d-block mb-5px" style="color: #333">İletişim</span>
                <a href="tel:{{$settings['phone']}}" style="color: #333;">{{$settings['phone']}}</a>
                <a href="mailto:{{$settings['e-mail']}}" class="lh-16 d-block" style="color: #333">{{$settings['e-mail']}}</a>
            </div>


            <div class="col-lg-3 col-sm-12 md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                <span class="fs-18 fw-400 d-block mb-5px" style="color: #333">Mail gönderin</span>
                <p class="mb-20px" style="color: #333">En kısa sürede dönüş yapacağız.</p>
                <div class="d-inline-block w-100 newsletter-style-02 position-relative">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('footer.form.show') }}" class="position-relative">
                        @csrf
                        <label for="">E-Mail Adresinizi Giriniz</label>

                        <input
                            class="border-color-transparent-white-light  border-radius-4px w-100 form-control lg-ps-15px required fs-16  input-placeholder-black"
                            type="email" name="email" placeholder="Email Adresiniz" />
                        <input type="hidden" name="redirect" value>
                        <button class="btn pe-20px" aria-label="submit"><i
                                class="fa fa-envelope icon-small "></i></button>
                        <div
                            class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none">
                        </div>
                    </form>
                </div>
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