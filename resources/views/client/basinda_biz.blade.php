@extends('client.layouts.master')

@section('content')

<section class="py-0 mt-5 mb-5" style="margin-top: 240px !important;margin-bottom: 200px !important">
        <div class="container mb-5 mt-5">
            <div class="row mb-5">
                @foreach($basinda_biz as $item)

                <div class="col-md-3 mb-5 mt-4">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <img src="{{ asset('basinda_biz/' . $item->image) }}" alt=""  class="img-fluid">
                            </div>
                            <div class="card-footer">
                                <span class="card-title">{{ $item->info }}</span>
                            </div>
                        </div>
                </div>
                @endforeach

            </div>
        </div>
</section>            

<style>
    .card{
        height: 130% !important;
    }
    .custom-card {
        border: 1px solid #ddd;
        height: 130%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;

    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-card img {
        border-bottom: 1px solid #ddd;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        width: 100%;
        height: 130% !important;

    }

    .custom-card .card-footer {
        background-color: #f8f9fa;
    }

    .custom-card .card-body{
        width: 300px;
        height: 200px;
    }

    .card-footer .card-title {
        margin: 0;
        font-size: 1.1rem;
        color: #333;
        font-family: cerebri-sans-medium !important;
        /* font-weight: bold; */
    }
</style>