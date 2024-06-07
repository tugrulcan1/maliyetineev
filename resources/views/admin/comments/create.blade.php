@extends('admin.layouts.master')

@section('content')
    <div class="content">
        @if (session('success'))
        <div class="alert alert-success text-white">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger text-white">
            {{ session('error') }}
        </div>
    @endif
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Create comment</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="p-4 code-to-copy">
                        <form  method="POST" action="{{ route('add.comment') }}" enctype="multipart/form-data"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        @csrf
                        <div class="position-relative form-group mb-15px">
                            <input type="text" name="name" class="form-control required" placeholder="Ad soyad" />
                        </div>
                        <div class="position-relative form-group mb-15px">
                            <input type="email" name="email" class="form-control required" placeholder="E-posta adresiniz" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <label class="custom-file-label" style="display: block" for="fileInput">Yorumu Giriniz</label>
                            <textarea name="comment" id="comment" cols="50" rows="14"></textarea>
                        </div>
                        <div class="mb-20px custom-file-input">
                            <label class="form-label" for="fileInput">Dosya Seç</label>
                            <input type="file" id="fileInput" name="file" onchange="updateFileName(this)">
                        </div>
                        <div class="position-relative mt-20px mb-5">
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

.form-group {
    position: relative;
}

.form-control {
    padding-left: 40px;
    border-radius: 10px;
}

/* .custom-file-label::after {
    content: "Gözat";
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
} */

.custom-file-label {
    border-radius: 10px;
}

.btn-primary {
    background-color: #0f75bc;
    border-color: #0f75bc;
    border-radius: 12px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.btn-primary:hover {
    background-color: #0e6aa7;
    border-color: #0e6aa7;
}

.custom-file-input {
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
    }
</style>

@section('scripts')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    @stack('scripts')
@endsection
