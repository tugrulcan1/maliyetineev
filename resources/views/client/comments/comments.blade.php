@extends('client.layouts.master')


@section('content')

<div class="container" style="margin-top: 200px;" >

    <div class="row mt-4 mb-4">

        <div class="col-md-8">
                         <h4>Kullanıcı Yorumları</h4>
                
                   @foreach ($comments as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="fas fa-user" style="margin-left: 10px;"></i>
                                 {{$comment->full_name}}</h5>
                                </h5>
                                <p class="card-text">{!! $comment->content !!}</p>
                        <small class="text-muted "> {{ date('d-m-Y H:i:s', strtotime($comment->created_at)) }}</small>

                            </div>
                            {{-- @if (Auth::check() && Auth::user()->id === $comment->user_id)

                            <form action="{{ route('yorum_sil', [$universite->id, $comment->id]) }}"
                                method="POST">  @csrf  @method('DELETE')
                                <button class="btn btn-danger btn-sm">Yorumu Sil</button>
                            </form>
                        @endif --}}
                        </div>

                   @endforeach


        </div>
        
        <div class="col-md-4">
            <div class="contact-form-style-01" style="position: absolute;width:550px;height:500px;top:0px;">
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
                    <form  method="POST" action="{{ route('add.comment') }}"
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




@section('scripts')
<script>
    $(document).ready(function() {
    $(".sticky-top").stick_in_parent();
});
</script>

@endsection