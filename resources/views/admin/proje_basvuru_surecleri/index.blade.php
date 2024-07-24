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
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Proje Başvuru Süreçleri Ekle</h4>
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
                    <div class="card shadow-none border border-300 my-4 p-5">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th style="width:15%;">ID</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="commentName" style="width:20%;">Proje Başlığı</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="commentName" style="width:20%;">Proje Alt Başlığı</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="commentName" style="width:20%;">Proje Türü</th>

                                        <th>İŞLEMLER</th>

                                    </tr>
                                </thead>
                                <tbody class="list" id="comment-list-table-body">
                                    @foreach ($projects as $key => $item)
                                        <tr class="position-static">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->project_title }}</td>
                                            <td>{{ $item->project_sub_title }}</td>
                                            <td>{{ $item->project_type }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
                            <div class="d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                    data-list-info="data-list-info">
                                </p>
                            </div>
                            <div class="d-flex"><button class="comment-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="comment-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                    {{-- <form action="{{ route('admin.add.proje.basvuru.surecleri') }}" method="POST">
                        @csrf
                        <div class="row mb-3" >
                            <div class="col-md-5 " style="margin-right: 10px;border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                <label for="">Başlık 1</label>
                                <input class="form-control mb-3" type="text" name="title_1" value="{{ $data->title_1 ?? '' }}">
                                <label for="">Açıklama 1</label>
                                <input class="form-control mb-3" type="text" name="description_1" value="{{ $data->description_1 ?? '' }}">
                            </div>

                            <div class="col-md-5" style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                <label for="">Başlık 2</label>
                                <input class="form-control mb-3" type="text" name="title_2" value="{{ $data->title_2 ?? '' }}">
                                <label for="">Açıklama 2</label>
                                <input class="form-control mb-3" type="text" name="description_2" value="{{ $data->description_2 ?? '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5"  style="margin-right: 10px;border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                <label for="">Başlık 3</label>
                                <input class="form-control mb-3" type="text" name="title_3" value="{{ $data->title_3 ?? '' }}">
                                <label for="">Açıklama 3</label>
                                <input class="form-control mb-3" type="text" name="description_3" value="{{ $data->description_3 ?? '' }}">
                            </div>
                            <div class="col-md-5"  style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                <label for="">Başlık 4</label>
                                <input class="form-control mb-3" type="text" name="title_4" value="{{ $data->title_4 ?? '' }}">
                                <label for="">Açıklama 4</label>
                                <input class="form-control mb-3" type="text" name="description_4" value="{{ $data->description_4 ?? '' }}">
                            </div>
                        </div>
                        <div class="row mb-3"  >
                            <div class="col-md-5" style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                <label for="">Başlık 5</label>
                                <input class="form-control mb-3" type="text" name="title_5" value="{{ $data->title_5 ?? '' }}">
                                <label for="">Açıklama 5</label>
                                <input class="form-control mb-3" type="text" name="description_5" value="{{ $data->description_5 ?? '' }}">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Yükle</button>
                    </form> --}}
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
@endsection
