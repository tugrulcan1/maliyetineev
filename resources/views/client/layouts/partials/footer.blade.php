<footer class="footer-dark pt-1 pb-0" style="background-color: #274abb1f;">
    <div class="container" style="border-bottom: 1px solid #bebebe">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 text-center text-xl-start mb-sm-0">
                <h3 class="mb-2 fw-500" style="color: #333; font-size: 24px;">Aklınıza takılan soru mu var?</h3>
                <p class="fs-15 fw-300" style="color: #333;">Bizimle iletişime geçebilirsiniz.</p>
            </div>
            <div class="col-xl-6 text-center text-xl-end">
                <a href="mailto:{{ $settings['e-mail'] }}"
                    class="btn btn-extra-large btn-rounded text-white me-2"
                    style="background-color: #ea2a28">
                    <i class="fa fa-envelope"></i> {{ $settings['e-mail'] }}
                </a>
                <a href="tel:{{ $settings['phone'] }}"
                    class="btn btn-extra-large btn-base-color btn-rounded text-white"
                    style="background-color: #274abb">
                    <i class="fa fa-phone"></i> {{ $settings['phone'] }}
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2 justify-content-between mb-2 align-items-center">
            <div class="col-12 col-lg-4 mb-lg-0">
                <a href="demo-accounting.html" class="footer-logo mb-2 d-inline-block">
                    <img src="{{ asset('images/maliyetineevlogo.png') }}" alt="Logo">
                </a>
                {{-- <p class="fs-14" style="color: #333;">Maliyetine Ev Sahibi Olmak Herkesin Hakkı</p> --}}


            </div>
            {{-- <div class="col-12 col-lg-4 col-sm-4 mb-4 mb-lg-0" style="width: 390px;">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">Hızlı Link</span>
                <ul class="menu-list">
                    <li><a href="/page/hakkimizda" style="color: #333;">Hakkımızda</a></li>
                    <li><a href="/projelerimiz" style="color: #333;">Projelerimiz</a></li>
                    <li><a href="/subelerimiz" style="color: #333;">Şubelerimiz</a></li>
                </ul>
            </div> --}}
            <div class="col-12 col-lg-4 col-sm-4 mb-lg-0 text-end color-right-footer">
                <span class="fs-16 fw-400 d-block mb-2" style="color: #333;">İletişim</span>
                <p>Cevizli, Çanakkale Cd. No:103A, 34865 Kartal/İstanbul

                </p>
            </div>
        </div>
    </div>

    <div class="second-footer bg-white-3">
        <div style="    padding: 10 40 !important;
    margin: 0 auto !important;
    width: 100%;
    text-align: center;
    background: #274abb;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;">
            <p class="d-flex align-items-center" style="gap: 5px;margin-bottom:0">
                <span id="current-year">2024</span> © Copyright - Maliyetine Ev
                <a style="margin-left: 30px;" href="javascript:;" data-pikap-popup="popup-kvkk">Kişisel Verilerin Korunması</a>
                <a style="margin-left: 30px;" href="javascript:;" data-pikap-popup="popup-kvkk">Kişisel Verilerin Korunması</a>
            </p>

            <script>
                document.getElementById("current-year").textContent = new Date().getFullYear();
            </script>
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
    </div>

</footer>



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
