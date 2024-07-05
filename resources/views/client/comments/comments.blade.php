@extends('client.layouts.master')


@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fw-500 text-base-color text-uppercase d-inline-block" style="">Our testimonials</span>
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px" style="">Happy travellers</h2>
            </div>
        </div>
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
        <div class="row justify-content-center mb-5 md-mb-12 sm-mb-0 appear anime-complete"
            data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
            style="">
            <div class="col-auto text-center last-paragraph-no-margin">
                <div class="d-inline-block align-middle me-10px xs-m-10px"><img src="images/tripadvisor-icon.svg"
                        class="w-50px" alt="" data-no-retina=""></div>
                <div class="d-inline-block align-middle">
                    <h4 class="text-dark-gray alt-font ls-minus-1px mb-0">3,583 exclusive visitor reviews on <a
                            href="https://www.tripadvisor.in/" target="_blank"
                            class="text-decoration-line-bottom fw-600 text-dark-gray">tripadvisor.</a></h4>
                </div>
            </div>
        </div>
    </div>
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
