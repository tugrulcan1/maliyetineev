@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div id="projectSummary"
                    data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":12,"pagination":true}'>
                    <div class="row justify-content-between mb-4 gx-6 gy-3 align-items-center">
                        <div class="col-auto">
                            <h2 class="mb-0">Yorumlar</h2>
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
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"  data-sort="projectName">Ad Soyad</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"  data-sort="projectName">E-posta</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"  data-sort="projectName" >Telefon</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"  data-sort="projectName" >Yorum</th>
                                        <th>İŞLEMLER</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="project-list-table-body">
                                    @foreach ($comments as $comment)
                                        <tr class="position-static">
                                            <td>{{ $comment->id }}</td>
                                            <td>{{ $comment->full_name }}</td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->phone }}</td>
                                            {{-- <td>{!! $comment->content !!}</td> --}}
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal{{$comment->id}}">
                                                    Yorumu Gör
                                                </button>
                                            </td>
                                            <td>
                                                @if($comment->approval_status == 0)
                                                    <a href="{{route('admin.approve.comment', ['id' =>$comment->id])}}"><span class="badge bg-primary">Onayla</span></a>
                                                    <a href="{{route('admin.reject.comment', ['id' =>$comment->id])}}"><span class="badge bg-danger">Reddet</span></a>
                                                @elseif($comment->approval_status == 1)
                                                    <span class="badge bg-success">Onaylandı</span>
                                                @else
                                                    <span class="badge bg-danger">Reddedildi</span>
                                                @endif
                                            </td>
                                        </tr>
                                         <!-- Yorumu gör için modal -->
                                         <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $comment->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        Müşteri Yorumu
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $comment->content !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">İptal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                            <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
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
