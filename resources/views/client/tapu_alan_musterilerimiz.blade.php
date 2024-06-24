@extends('client.layouts.master')

@section('content')

<section class="py-0 mt-5 mb-5" style="margin-top: 240px !important;margin-bottom: 200px !important">
    <div class="container mb-5 mt-5">
        <div class="row mb-5">
            @foreach($tapu_alan_musterilerimiz as $item)
            <div class="col-lg-4 col-md-6 mb-4 mt-4 col-sm-12">
                <div class="card custom-card h-100">
                    <div class="card-body p-0 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('tapu_alan_musteriler/' . $item->image) }}" alt="" class="img-fluid w-100 h-100 object-fit-contain">
                    </div>
                    <div class="card-footer text-center">
                        <span class="card-title">{{ $item->musteri_bilgisi }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.card-body {
    padding: 0;
    overflow: hidden;
}

.card-body img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

@media (max-width: 768px) {
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
</style>
