@extends('client.layouts.master')


@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
style="background-image: url({{asset('demo-conference-page-bg.jpg')}}) ;padding-top: 30px;
padding-bottom: 30px;">
<div class="container">
    <div class="row align-items-center justify-content-center extra-small-screen">
        <div class="col-lg-8 text-center page-title-extra-large">
            <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                    data-fancy-text="{ &quot;string&quot;: [&quot;Müşterilerimizin&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                <span
                    data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">DEĞERLENDİRMELERİ</span>
            </h1>
        </div>
    </div>
</div>
</section>
<section class="bg-midnight-blue pt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 justify-content-center mb-5 position-relative">

            @foreach ($comments as $comment)
                <div class="col transition-inner-all review-style-07 mb-30px appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [-15, 0], &quot;translateY&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="d-flex h-100 flex-column border-radius-6px p-11 bg-white box-shadow-quadruple-large">
                        <div class="mb-20px">
                            <img src="{{ asset('favicon-c9c0de2311390de484c5d988188059cd56ed9317.png') }}"
                                class="rounded-circle w-50px me-15px" alt="" data-no-retina="">
                            <div class="d-inline-block align-middle">
                                <div class="text-dark-gray fw-600 fs-18">{{ $comment->full_name }}</div>
                            </div>
                        </div>
                        <p class="mb-15px">{{ $comment->content }}</p>
                        <div class="d-flex align-items-center">
                            <div class="d-inline-block me-auto">
                                <div class="text-dark-gray float-start me-10px fw-600">5.0</div>
                                <div class="review-star-icon float-start">
                                    <i class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                                        class="fa fa-star-fill"></i><i class="fa fa-star-fill"></i><i
                                        class="fa fa-star-fill"></i>
                                </div>
                            </div>
                            <div
                                class="d-inline-block bg-dark-gray fw-600 text-uppercase border-radius-3px ps-15px pe-15px fs-12 lh-26 text-white">
                                {{ \Carbon\Carbon::parse($comment->created_at)->locale('tr')->isoFormat('LLL') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>
@endsection


<style>
    .commentDiv {
        border: 1px solid rgb(190, 190, 190);
        border-radius: 25px;
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

    .btn-danger {
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
