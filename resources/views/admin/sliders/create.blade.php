@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <h2 class="mb-2 lh-sm">Create slider</h2>
        <div class="mt-4">
            <div class="row g-4">
                <div class="col-12 col-xl-12 order-1 order-xl-0">
                    <div class="mb-9">
                        <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body p-0">
                                <div class="p-4">

                                    <form class="row g-3 needs-validation" id="sliderForm" novalidate="" method="POST"
                                        action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
                                        @csrf



                                        <div class="col-md-12">
                                            <label class="form-label" for="image">Image</label>
                                            <input name="image" class="form-control" id="url" type="file"
                                                />
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="image">Mobile Image</label>
                                            <input name="mobile_image" class="form-control" id="url" type="file"
                                                />
                                        </div>


                                        <div class="col-12 mt-5">
                                        <button class="btn btn-primary" id="saveFormsButton" type="submit">Kaydet</button>
                                    </div>



                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body p-3"></div><button class="btn-close btn-close-white me-2 m-auto"
                        type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a
                            class="mx-1" href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v1.13.0</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('scripts')
    <script>
        jQuery($ => {


            $("#saveFormsButton").click(function() {

                var temp = $("#formContainer").find('form').toArray();
                var allForms = {}
                var sliderForm = $("#sliderForm").serializeArray()
                var csrfToken = sliderForm[0].value;

                var sliderFormData = {}
                sliderForm.map((item) => { //statik alanların verilerini formatlamak için

                    var key = item['name']
                    var val = item['value']
                    sliderFormData[key] = val

                })
                allForms.sliderForm = sliderFormData



                var dynamicData = []
                temp.map((item) => { // dinamik form verilerini formatlamak için
                    var formData = $('#' + item.id).serializeArray();
                    var row = {}
                    formData.map(item2 => {
                        var key = item2['name']
                        var val = item2['value']
                        row[key] = val

                    })
                    dynamicData.push(row)
                })

                allForms.dynamicData = dynamicData
                console.log(allForms)
                /*
                                allForms
                                [0]=>proje verileri (statik alanlar)
                                [1]=>housing_type ile oluşturulan formların dizisi (dinamik alanlar dizisi)

                */
                $.ajax({
                    method: "POST",
                    url: "{{ route('admin.sliders.store') }}",
                    data: {
                        sliderData: allForms.sliderForm,
                        dynamicData: allForms.dynamicData
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {


                    },
                    error: function(error) {
                        console.log(error)
                    }
                })

            })

            $("#generateform").click(function() {
                $('#formContainer').show()
                var housing_type = $("#housing_type").val();
                if (housing_type) {

                    $.ajax({
                        method: "GET",
                        url: "{{ route('admin.ht.getform') }}",
                        data: {
                            id: housing_type
                        },
                        success: function(response) {

                            formRenderOpts = {
                                dataType: 'json',
                                formData: response.form_json
                            };

                            var renderedForm = $('<div>');
                            renderedForm.formRender(formRenderOpts);
                            var formElement = $('#renderedFormDiv0')
                            var innerForm = formElement.find('form')
                            innerForm.append(renderedForm.html());

                            var formCount = $("input[name=count]").val();
                            for (let i = 1; i < formCount; i++) {
                                var temp = formElement.clone().attr('id', 'renderedFormDiv' + i)
                                temp.find('form').attr('id', 'renderedForm' + i)

                                $("#formContainer").append(temp);

                            }
                            $("input[name=count]").prop('disabled', true);


                        },
                        error: function(error) {
                            console.log(error)
                        }
                    })



                } else {
                    alert(housing_type)
                    alert('You must pick a housing type!')
                }
            });


        });
    </script>
    @stack('scripts')
@endsection
