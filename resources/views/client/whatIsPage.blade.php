@extends('client.layouts.master')

@section('content')
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('demo-conference-page-bg.jpg') }});        padding-top: 30px;
padding-bottom: 30px;">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-lg-8 text-center page-title-extra-large">
                    <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                        <span class="d-block text-outline text-outline-width-2px text-outline-color-white"
                            data-fancy-text="{ &quot;string&quot;: [&quot;Maliyetine Ev&quot;], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;speed&quot;: 50, &quot;clipPath&quot;: [&quot;inset(0 500px 0 0)&quot;, &quot;inset(0px -5px 0px 0px)&quot;], &quot;easing&quot;: &quot;easeOutCubic&quot; }"></span>
                        <span
                            data-anime="{ &quot;opacity&quot;: [0, 1], &quot;easing&quot;: &quot;easeOutQuad&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 300 }">NEDİR</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="bg-solitude-blue border-radius-6px p-45px lg-p-30px mb-25px" style="">
                <span class="fs-19 alt-font text-dark-gray fw-700 mb-20px d-inline-block">Corporate services</span>
                <ul class="p-0 m-0 list-style-02 fw-500">
                    <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a id="v-pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                            aria-controls="v-pills-home">Business planing</a><i
                            class="fa fa-arrow-right ms-auto"></i></li>
                    <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a
                            id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false"
                            class="text-dark-gray text-dark-gray-hover">Market
                            research</a><i class="fa fa-arrow-right ms-auto"></i></li>
                    <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a id="v-pills-messages-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false">Business consulting</a><i
                            class="fa fa-arrow-right ms-auto"></i></li>
                    <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a id="v-pills-settings-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Audience analysis</a><i
                            class="fa fa-arrow-right ms-auto"></i></li>
                </ul>
            </div>
            <div class="d-flex align-items-start">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">...
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        ...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        ...
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
