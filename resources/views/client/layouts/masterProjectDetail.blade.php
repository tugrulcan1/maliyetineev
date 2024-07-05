@include('client.layouts.partials.header')

@yield('content')

@include('client.layouts.partials.footer')

<!-- "Bilgi Al" butonu ve form -->
{{-- <div id="infoButton" class="info-button">Bilgi Al</div> --}}
<div class="right-fixed-btn d-none d-lg-block" id="right-fixed-btn"><span id="right-fixed-btn-text"> Başvuru
    Formu</span></div>
<div id="formContainer" class="contact-form-style-01">
<div class="ps-8 pe-8 pt-8 pb-8 lg-p-8 bg-white box-shadow-quadruple-large border-radius-6px">
    <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px">
        Formu doldurun sizi arayalım
    </h6>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('home.form.show') }}">
        @csrf
        <div class="position-relative form-group mb-15px">
            <span class="form-icon"><i class="fas fa-user"></i></span>
            <input type="text" name="name" class="form-control required" placeholder="Ad soyad" />
        </div>
        <div class="position-relative form-group mb-15px">
            <span class="form-icon"><i class="fa fa-envelope"></i></span>
            <input type="email" name="email" class="form-control required" placeholder="E-posta adresiniz" />
        </div>
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="fa fa-phone"></i></span>
            <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız" />
        </div>
        <div class="position-relative terms-condition-box text-start d-inline-block">
            <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                class="terms-condition check-box align-middle required">
            <label>
                <span class="box fs-16">Kişisel Verilerin Korunması Hakkında <a
                        href="{{ route('aydinlatma.metni') }}" target="_blank">Aydınlatma Yazısını okudum</a> ,
                    kabul ediyorum.</span>
            </label>
        </div>
        <div class="position-relative mt-20px">
            <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow w-100"
                type="submit">Gönder</button>
        </div>
    </form>
</div>
</div>

<style>
.right-fixed-btn {
    position: fixed;
    z-index: 9;
    /* transform-origin: 100% 0 0; */
    /* margin-right: -1px; */
    right: -76px;
    bottom: 350px;
    transform: rotate(90deg);
    cursor: pointer;
    border-radius: 0px 0px 20px 20px;
    border: 1px solid #007bff;
    background: #007bff;
    padding: 10px 30px;
}


.right-fixed-btn.active-open{
    right: -66px;
}

.right-fixed-btn:hover {
    background: #ef0003;
    border: 1px solid #ef0003;

}

.right-fixed-btn span {
   /* background-color: #ea2a28; */
   color: white;
    /* border: #ea2a28; */
    border-radius: 10px;
    padding: 5px 11px;
    margin-left: auto;
    font-weight: 700;
    cursor: pointer;
    margin-right: 15px;
}

.right-fixed-form {
    border-radius: 10px 0px 0px 10px;
    line-height: 20px;
    width: 350px;
    position: fixed;
    right: -430px;
    box-sizing: border-box;
    background-color: #fff;
    z-index: 99999;
    height: auto;
    display: table;
    top: 50%;
    transition: all .6s cubic-bezier(.42, 0, .07, .99);
    transform: translateY(-50%);
    box-shadow: -1px 1px 19px 6px #007bff;
}

.right-form {
    width: 350px;
    padding: 30px;
    position: relative;
}

.right-form-close {
    position: absolute;
    top: -10px;
    left: -15px;
    display: flex;
    justify-content: center;
    cursor: pointer;
    align-items: center;
    width: 35px;
    height: 35px;
    background: #ef0003;
    color: #fff;
    border-radius: 50%;
}

.right-form-close:hover {
    background: #2a2a2d;
}

.right-0 {
    right: 0;
}

.me-3 {
    margin-right: 15px;
}

/* Animasyon */
@keyframes pulse3 {
    0% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, .5);
        box-shadow: 0 0 0 0 rgb(0 0 0 / 50%);
    }

    70% {
        -moz-box-shadow: 0 0 0 30px rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 30px rgb(0 0 0 / 0%);
    }

    100% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        box-shadow: 0 0 0 0 rgb(0 0 0 / 0%);
    }
}

.info-button {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    z-index: 1000;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

/* Form container stili */
.contact-form-style-01 {
    position: fixed;
    top: 56%;
    right: -400px;
    transform: translateY(-50%);
    width: 400px;
    transition: right 0.3s ease;
    z-index: 999;
}

/* Form açıkken sağa kayma */
.contact-form-style-01.open {
    right: 100px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var infoButton = document.getElementById('infoButton');
    var formContainer = document.getElementById('formContainer');

    infoButton.addEventListener('click', function() {
        formContainer.classList.toggle('open');
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var infoButton = document.getElementById('right-fixed-btn');
    var formContainer = document.getElementById('formContainer');
    var infoButtonText = document.getElementById("right-fixed-btn-text");

    infoButton.addEventListener('click', function() {
        formContainer.classList.toggle('open');
        infoButton.classList.toggle('active-open');

        if (formContainer.classList.contains('open')) {
            infoButtonText.innerHTML = "Formu Kapat";
        } else {
            infoButtonText.innerHTML = "Başvuru Formu";
        }
    });
});
</script>
