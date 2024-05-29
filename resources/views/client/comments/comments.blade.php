@extends('client.layouts.master')


@section('content')

<div class="container mt-3">

    <div class="row">

        <div class="col-md-10">
                         <h2>Kullanıcı Yorumları</h2>
             
                   @foreach ($comments as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="fas fa-user" style="margin-left: 10px;"></i>
                                 {{$comment->title}}</h5>
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