<footer class="footer-dark bg-dark-gray pt-0 pb-2 lg-pb-35px">
    <div
        class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                    <h3 class="text-white mb-5px fw-500 ls-minus-1px">Aklınıza takılan soru mu var?</h3>
                    <span class="fs-20 widget-text fw-300">Bizimle iletişime geçebilirsiniz.</span>
                </div>


                <div class="col-xl-6 text-center text-xl-end">
                    <a href="demo-accounting-contact.html"
                        style="background: #0f75bc !important; color: white !important;"
                        class="btn btn-extra-large btn-yellow left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px"><i
                            class="fa fa-envelope"></i>{{$settings['e-mail']}}</a>
                    <a href="tel:12345678910"
                        class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"><i
                            class="fa fa-phone"></i>{{$settings['phone']}}</a>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center fs-17 fw-300 mt-5 mb-4 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px">

            <div class="col-6 col-lg-3 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                <a href="demo-accounting.html" class="footer-logo mb-15px d-inline-block"><img
                        src="{{ asset('images/logomev.png') }}" alt></a>
                <p class="w-85 xl-w-95 sm-w-100">Maliyetine Ev Sahibi Olmak Herkesin Hakkı</p>
                <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                    <ul class="small-icon light">
                        @foreach($socialMediaIcons as $SocialMediaIcon)
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands {{$SocialMediaIcon->icon_class}}"></i></a></li>
                        @endforeach

                    </ul>
                </div>
            </div>


            <div class="col-12 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Hızlı Link</span>
                <ul>
                    @foreach ($menu as $menus)


                        <li><a href="{{$menus->href}}">{{$menus->text}}</a></li>
                    @endforeach
                </ul>
            </div>





            <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-18 fw-400 d-block text-white mb-5px">İletişim</span>
                <a href="mailto:info@maliyetineev.com" style="color: white;">{{$settings['phone']}}</a>
                <a href="tel:4443284" class="text-white lh-16 d-block">{{$settings['e-mail']}}</a>
            </div>


            <div class="col-lg-3 col-sm-6 md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                <span class="fs-18 fw-400 d-block text-white mb-5px">Mail gönderin</span>
                <p class="mb-20px">En kısa sürede dönüş yapacağız.</p>
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
                        <input
                            class="border-color-transparent-white-light bg-transparent border-radius-4px w-100 form-control lg-ps-15px required fs-16"
                            type="email" name="email" placeholder="Email adresiniz" />
                        <input type="hidden" name="redirect" value>
                        <button class="btn pe-20px" aria-label="submit"><i
                                class="fa fa-envelope icon-small text-white"></i></button>
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


</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-accounting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 11:47:29 GMT -->

</html>