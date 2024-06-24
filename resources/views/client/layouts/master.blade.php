@include('client.layouts.partials.header')

@yield('content')

@include('client.layouts.partials.footer')
  <!-- "Bilgi Al" butonu ve form -->
  <div id="infoButton" class="info-button">Bilgi Al</div>

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
                      <span class="box fs-16">Kişisel Verilerin Korunması Hakkında <a href="{{ route('aydinlatma.metni') }}" target="_blank">Aydınlatma Yazısını okudum</a> , kabul ediyorum.</span>
                  </label>
              </div>
              <div class="position-relative mt-20px">
                  <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow w-100" type="submit">Gönder</button>
              </div>
          </form>
      </div>
  </div>

<style>
    /* Bilgi Al butonu stili */
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
        top: 50%;
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
</script>