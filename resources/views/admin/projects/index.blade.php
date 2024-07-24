@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div id="projectSummary"
                    data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"project":12,"pagination":true}'>
                    <div class="row justify-content-between mb-4 gx-6 gy-3 align-items-center">
                        <div class="col-auto">
                            <h2 class="mb-0">Sayfalar<span class="fw-normal text-700 ms-3">({{ count($projects) }})</span>
                            </h2>
                        </div>
                        <div class="col-auto">
                            <div class="col-auto">
                                <a class="btn btn-primary px-5" href="{{ route('admin.projects.create') }}">
                                    <i class="fa-solid fa-plus me-2"></i>Yeni Ekle
                                </a>
                            </div>
                        </div>
                    </div>

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
                    <div class="card shadow-none border border-300 my-4 p-5">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th style="width:15%;">ID</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">PROJE BAŞLIK</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">PROJE İÇERİK</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">PROJE Tipi</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">PROJE KONUM</th>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="projectName" style="width:20%;">PROJE RESİM</th>
                                        <th>İŞLEMLER</th>
                                    </tr>
                                </thead>
                                <tbody class="" id="project-list-table-body">
                                    @foreach ($projects as $key => $project)
                                        <tr class="position-static">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $project->project_title }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit(strip_tags($project->description), 150, '...') }}</td>
                                            <td>{{ $project->project_type }}</td>
                                            <td>{{ $project->slug }}</td>
                                            <td><img src="{{ url('uploads/' . $project->image) }}" alt="" style="" width="200px" height="100px"></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basvuruSureciModal{{$project->id}}">
                                                        Başvuru Süreçleri
                                                    </button>

                                                    <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                        class="btn btn-sm btn-primary " style="display: flex; justify-content: center; align-items: center;">Güncelle</a>

                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $project->id }}">
                                                        Sil
                                                    </button>

                                                    <button type="button" class="btn btn-sm btn-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#floorPlanModal{{ $project->id }}">
                                                        Kat Planı Ekle
                                                    </button>
                                                </div>
                                                <!-- Silme işlemi için modal -->
                                                <div class="modal fade" id="deleteModal{{ $project->id }}" tabindex="-1"
                                                    aria-labelledby="deleteModalLabel{{ $project->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="deleteModalLabel{{ $project->id }}">Sil
                                                                </h5>
                                                                <button type="button" class="btn p-1"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <svg class="svg-inline--fa fa-xmark fs--1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="xmark" project="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z">
                                                                        </path>
                                                                    </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com -->
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="text-700 lh-lg mb-0">Silmek istediğinize emin
                                                                    misiniz ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form
                                                                    action="{{ route('admin.projects.destroy', $project->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Evet,
                                                                        Sil</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">İptal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Kat planı ekleme işlemi için modal -->
                                                <div class="modal fade" id="floorPlanModal{{ $project->id }}" tabindex="-1"
                                                    aria-labelledby="floorPlanModalLabel{{ $project->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                Kat Planı Ekle
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    @php
                                                                        $floorPlans = DB::table('floor_plans')->where('project_id',$project->id)->get();
                                                                    @endphp
                                                                        @foreach ($floorPlans as $floorPlan)
                                                                        <div class="col-md-4">
                                                                            <span style="margin-top:250px;margin-left:15px; ">
                                                                            {{$floorPlan->floor_plan}}

                                                                            </span>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <img src="{{ asset('kat_plani/'.$floorPlan->image_path) }}" alt="Kat Planı
                                                                            Resmi" class="img-fluid">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <form action="{{ route('admin.delete.project.floor.plan', $floorPlan->id) }}" method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                                                                            </form>
                                                                        </div>
                                                                        @endforeach
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.add.project.floor.plan', $project->id) }}"
                                                                    method="POST" class="d-inline"  enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="project_id" value="{{$project->id}}">

                                                                    <label for="formFile" class="form-label">Kat Planı</label>
                                                                    <input type="text" class="form-control mb-3" name="floor_plan">

                                                                      <div class="mb-3">
                                                                        <label for="file" class="form-label">Upload Floor Plan Image</label>
                                                                        <input class="form-control" type="file" id="file" name="file" required>
                                                                    </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-sm btn-success">Ekle</button>
                                                                    <button type="button" class="btn btn-sm btn-secondary"
                                                                        data-bs-dismiss="modal">İptal</button>
                                                                </div>
                                                                </form>



                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Proje Başvuru Süreçleri Modal --}}
                                                <div class="modal fade" id="basvuruSureciModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg d-flex justify-content-center align-items-center">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h4 class="modal-title fs-5" id="exampleModalLabel">Başvuru Süreçleri</h4>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @php
                                                               $data = DB::table('proje_basvuru_surecleri')->where('project_id',$project->id)->first();
                                                            @endphp
                                                             <form action="{{ route('admin.add.proje.basvuru.surecleri') }}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="project_id" id="project_id" value="{{$project->id}}">

                                                                            <div class="row mb-3 justify-content-center" >
                                                                                <div class="col-md-10 " style="margin-right: 10px;border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                                                                    <label for="">Başlık 1</label>
                                                                                    <input class="form-control mb-3" type="text" name="title_1" value="{{ $data->title_1 ?? '' }}">
                                                                                    <label for="">Açıklama 1</label>
                                                                                    <input class="form-control mb-3" type="text" name="description_1" value="{{ $data->description_1 ?? '' }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 justify-content-center" >
                                                                                <div class="col-md-10" style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                                                                    <label for="">Başlık 2</label>
                                                                                    <input class="form-control mb-3" type="text" name="title_2" value="{{ $data->title_2 ?? '' }}">
                                                                                    <label for="">Açıklama 2</label>
                                                                                    <input class="form-control mb-3" type="text" name="description_2" value="{{ $data->description_2 ?? '' }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 justify-content-center">
                                                                                <div class="col-md-10"  style="margin-right: 10px;border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                                                                    <label for="">Başlık 3</label>
                                                                                    <input class="form-control mb-3" type="text" name="title_3" value="{{ $data->title_3 ?? '' }}">
                                                                                    <label for="">Açıklama 3</label>
                                                                                    <input class="form-control mb-3" type="text" name="description_3" value="{{ $data->description_3 ?? '' }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 justify-content-center" >
                                                                                <div class="col-md-10"  style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                                                                    <label for="">Başlık 4</label>
                                                                                    <input class="form-control mb-3" type="text" name="title_4" value="{{ $data->title_4 ?? '' }}">
                                                                                    <label for="">Açıklama 4</label>
                                                                                    <input class="form-control mb-3" type="text" name="description_4" value="{{ $data->description_4 ?? '' }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 justify-content-center">
                                                                                <div class="col-md-10" style="border: 1px solid rgb(185, 183, 183);border-radius:10px;padding:11px;">
                                                                                    <label for="">Başlık 5</label>
                                                                                    <input class="form-control mb-3" type="text" name="title_5" value="{{ $data->title_5 ?? '' }}">
                                                                                    <label for="">Açıklama 5</label>
                                                                                    <input class="form-control mb-3" type="text" name="description_5" value="{{ $data->description_5 ?? '' }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="modal-footer" style="justify-content: space-between">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                                                            </div>

                                                                    </form>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>

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
                            <div class="d-flex"><button class="project-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="project-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
