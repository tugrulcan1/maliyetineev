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
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Basında Biz Ekle</h4>
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
                        <form action="{{ route('admin.add.basinda.biz') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-5">
                                <label for="">Görsel Giriniz...</label>
                                <input class="form-control mb-3" type="file" name="image">
                                <input class="form-control mb-3" type="text" name="info" placeholder="Görsel Bilgisi Giriniz" required>
                                <button class="btn btn-primary btn-sm" type="submit">Yükle</button>
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
