@extends('client.layouts.master')


@section('content')

<div class="container" style="margin-top: 200px; margin-bottom:260px;" >

    <div class="row mt-4 mb-4">

        <div class="col-md-7">
                         <h4>Kullanıcı Yorumları</h4>
                
                   @foreach ($comments as $comment)
                        
                        <div class="row align-items-center pt-25px pb-25px commentDiv" style="">
                            <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                @if ($comment->image)
                                        <img src="{{ asset('kullanici_gorselleri/' . $comment->image) }}" alt="User Image" style="width: 60px; height: 70px; border-radius: 50%; margin-right: 10px;">
                                    @else
                                    <i class="fa-solid fa-star" style="font-size:24px;margin-left:10px;"></i>
                                    @endif
                                <span style="" class="d-block ps-40px md-ps-0 md-mx-auto position-relative">{{$comment->content}}</span>
                            </div>
                            <div class="col-lg-1 d-none d-lg-inline-block">
                                <div
                                    class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                </div>
                            </div>
                            <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">{{$comment->full_name}}</span>
                                <div></div>
                            </div>
                        </div>

                   @endforeach


        </div>
        
        <div class="col-md-5">
            <div class="contact-form-style-01" style="width:550px;height:500px;margin-left:100px;top:0px;">
                <div class="ps-8 pe-8 pt-8 pb-8 lg-p-8 bg-white box-shadow-quadruple-large border-radius-6px">
                    <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px"
                        data-anime="{ &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        Yorumlarınızı bizimle paylaşın</h6>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form  method="POST" action="{{ route('add.comment') }}" enctype="multipart/form-data"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        @csrf
                        <div class="position-relative form-group mb-15px">
                            <span class="form-icon"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" class="form-control required" placeholder="Ad soyad" />
                        </div>
                        <div class="position-relative form-group mb-15px">
                            <span class="form-icon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control required"
                                placeholder="E-posta adresiniz" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="fa fa-phone"></i></span>
                            <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="fa fa-envelope"></i></span>
                            <textarea name="comment" id="comment" cols="20" rows="4"></textarea>
                        </div>
                        <div class="mb-20px custom-file-input">
                            <label class="custom-file-label" for="fileInput">Dosya Seç</label>
                            <input type="file" id="fileInput" name="file" onchange="updateFileName(this)">
                            <div class="file-name" id="file-name">Lütfen fotoğrafınızı giriniz</div>
                        </div>
                        
                        {{-- <div class="position-relative terms-condition-box text-start d-inline-block">
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                    class="terms-condition check-box align-middle required">
                            <label>
                                <span class="box fs-16">Kişisel Verilerin Korunması Hakkında <a href="{{route('aydinlatma.metni')}}" target="_blank">Aydınlatma Yazısını
                                    okudum</a> , kabul ediyorum.</span>
                            </label>
                        </div> --}}
                        <div class="position-relative mt-20px">
                            <button class="btn btn-large btn-round-edge btn-box-shadow w-100" style="background-color: #0f75bc;color:white;border-radius:12px;"
                                type="submit">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<style>
.commentDiv{
    border:1px solid rgb(190, 190, 190);
    border-radius:25px;
    margin-bottom: 15px;
}

.container {
    margin-top: 50px;
}


.card {
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 0px;
}

.card.comment-card {
    margin-top: 20px;
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card.comment-card .card-body {
    padding: 15px;
}

.form-control.comment-input {
    border-radius: 0;
}
.btn-danger{
    float: right;
    margin-right: 30px;
    margin-bottom: 15px;
}
</style>

<style>
    .custom-file-input {
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
    }
    .custom-file-input input[type="file"] {
        display: none;
    }
    .custom-file-label {
        border: 1px solid #ccc;
        padding: 6px 12px;
        display: inline-block;
        width: 100%;
        cursor: pointer;
        text-align: center;
    }
    .file-name {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
    }
    /* Adjustments for smaller devices */
    @media (max-width: 1400px) {
    .contact-form-style-01 {
        display: flex;
        flex-wrap: wrap;
    }
    .contact-form-style-01 .form-group {
        width: 80%;
    }
    .contact-form-style-01 .custom-file-input {
        width: 80%;
    }
}

</style>


@section('scripts')
<script>
    $(document).ready(function() {
    $(".sticky-top").stick_in_parent();
});

</script>
<script>
    function updateFileName(input) {
        var fileName = input.files[0] ? input.files[0].name : "Lütfen fotoğrafınızı giriniz";
        input.nextElementSibling.textContent = fileName;
    }
</script>

<script>
// function updateFileName(input) {
//     var fileName = input.files[0] ? input.files[0].name : "Lütfen fotoğrafınızı giriniz";
//     document.getElementById('file-name').textContent = fileName;
// }


</script>
@endsection