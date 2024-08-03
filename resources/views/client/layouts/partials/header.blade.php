<!doctype html>
<html class="no-js" lang="tr">

<head>
    <title>Maliyetine Ev</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Maliyetine Ev">

    <link rel="shortcut icon" href="{{ URL::to('/') }}images/favicon.png">
    <link rel="apple-touch-icon" href="{{ URL::to('/') }}images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('/') }}images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('/') }}images/apple-touch-icon-114x114.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="{{ URL::to('/') }}/css/icon.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="{{ URL::to('/') }}/css/vendors.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/responsive.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/demos/accounting/accounting.css?v=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">


    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            /* background: #eee; */
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Logo boyutlarını küçültme */
        /* Logo boyutlarını küçültme */
        .logo-img {
            max-height: 50px;
            margin-left: 10px;
        }

        /* Mobilde menü düğmesinin logonun yanında görünmesi */
        @media (max-width: 991px) {
            .navbar-brand {
                max-width: 100px;
                /* Logo genişliğini ayarlayabilirsiniz */
            }

            section{
                margin-top: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;

            }

            .navbar .navbar-nav .dropdown .dropdown-menu{
                border: none;
                padding: 0;
            }

            header .navbar [class*=col-] .navbar-nav .nav-item,
            header .navbar [class*=col-] .navbar-nav .nav-item a {
                text-align: start
            }

            .navbar-expand-lg .navbar-nav .nav-item {
                padding: 0 !important;
                text-align: start
            }

            .navbar-toggler {
                position: absolute;
                right: 15px;
            }

            .navbar-collapse {
                background-color: #fff;
                padding: 0 !important;
            }

            .navbar-nav {
                width: 100%;
            }

            .navbar-nav .nav-item {
                margin-left: 0;
                margin-right: 0;
                margin: 0 10px;
            }

            .navbar-nav .nav-link {
                display: block;

                width: 100%;
                text-align: center;
                padding: 0;
            }

            .col-lg-2.text-end {
                justify-content: space-between;
                /* Elemanları eşit dağıtma */
                width: 100%;
                padding: 10px 15px;
            }

            .digitalMagaza {
                display: flex;
                /* position: absolute;
    left: 15px; */
                justify-content: center;
                align-items: center;
                width: 35%;
                /* margin-top: 40px; */
                margin-bottom: 30px;
                margin-right: 320px !important;
            }

            .elements-social .dark li a {
                color: black;
            }

            .phone-link {
                /* display: flex; */

                position: absolute;
                right: 15px;
                top: 100px;
            }
        }

        @media only screen and (max-width: 300px) {
            .digital-mgz {
                display: none;
            }
        }

        .menu-list li a {
            color: white;
            /* Bağlantı metin rengini beyaz yapıyoruz */
            text-decoration: none;
            /* Bağlantı alt çizgilerini kaldırıyoruz */
        }

        .menu-list li a:hover {
            text-decoration: underline;
            /* Bağlantıların üzerine gelindiğinde alt çizgi ekliyoruz */
        }

        .small-icon.light.list-inline {
            padding: 0;
            margin: 0;
        }

        .small-icon.light.list-inline li {
            display: inline-block;
            margin-right: 10px;
        }

        .small-icon.light.list-inline li:last-child {
            margin-right: 0;
        }

        .small-icon.light.list-inline li a {
            font-size: 20px;
        }

        .small-icon.light.list-inline li a:hover {
            color: #007bff;
            /* Değiştirmek istediğiniz hover rengi */
        }

        .color-right-footer p,
        .color-right-footer p a {
            color: black !important
        }

        .floating_btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 100px;
            height: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        @keyframes pulsing {
            to {
                box-shadow: 0 0 0 30px rgba(232, 76, 61, 0);
            }
        }

        .contact_icon {
            background-color: #42db87;
            color: #fff;
            width: 60px;
            height: 60px;
            font-size: 30px;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translatey(0px);
            animation: pulse 1.5s infinite;
            box-shadow: 0 0 0 0 #42db87;
            -webkit-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -moz-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -ms-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            font-weight: normal;
            font-family: sans-serif;
            text-decoration: none !important;
            transition: all 300ms ease-in-out;
        }


        .text_icon {
            margin-top: 8px;
            color: #707070;
            font-size: 13px;
        }
    </style>

    <style>
        .video-gallery-container {
            max-width: 1040px;
            /* Maksimum genişlik belirleme */
            margin: 80px auto;
            /* Sayfayı yatayda ortala */
            overflow: hidden;
            /* İçeriklerin dışarı taşmasını engelle */
        }

        .video-gallery {
            display: flex;
            flex-direction: column;
            /* Videoları dikey olarak sırala */
            justify-content: center;
            /* Dikeyde ortala */
            align-items: center;
            /* Yatayda ortala */
        }

        .video-item {
            width: 100%;
            /* Tam genişlik */
            margin-bottom: 20px;
            /* Videolar arasına boşluk ekle */
        }

        /* Küçük ekranlarda */
        @media screen and (max-width: 768px) {
            .video-gallery-container {
                max-width: 80%;
                /* Maksimum genişlik belirleme */
            }
        }

        /* Ekstra küçük ekranlarda */
        @media screen and (max-width: 480px) {
            .video-gallery-container {
                max-width: 90%;
                /* Maksimum genişlik belirleme */
            }
        }

        .icon-active {
            filter: sepia(100%) hue-rotate(150deg) saturate(400%);
        }

        .navbar .navbar-nav .dropdown .dropdown-menu {
            top: 86px !important;
        }

        #playlist {
            display: flex;
            position: relative;
            transition: all ease 0.3s;
            margin-bottom: 20px;
        }

        .navbar-expand-lg .navbar-nav .nav-item,
        header .navbar-brand {
            padding: 20px 0;
        }

        #video-dis {
            flex: 6.5;
            margin-right: 20px;
            background: black;
        }

        #video-dis iframe {
            width: 100%;
            height: 100%;
        }

        .scroll-to-top {
            display: none !important
        }


        .video-li {
            flex: 3.5;
            display: flex;
            box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
            padding: 10px;
            border-radius: 3px;
            flex-direction: column;
        }

        .li-collapsed {
            overflow: hidden;
            height: 40px;
        }

        #upper-info {
            display: flex;
        }

        @media (max-width: 991px) {

            header .navbar-brand .alt-logo,
            header .navbar-brand .default-logo {
                visibility: hidden !important;
                opacity: 0 !important;
                width: 0 !important;

            }

            header .navbar-brand img {
                padding: 0 !important
            }

        }

        #li-titles {
            flex: 9;
        }

        #li-titles div {
            padding-bottom: 5px;
        }

        #drop-icon {
            flex: 1;
            display: none;
            cursor: pointer;
            background: url(https://user-images.githubusercontent.com/50569315/118832584-92350500-b8e2-11eb-8398-9a90a4615b98.png) no-repeat center;
            background-size: 50%;
        }

        .ml-2 {
            margin-left: 5px;
        }

        #lower-info {
            display: flex;
            padding-top: var(--b-pad);
        }

        #lower-info div {
            width: 40px;
            height: 40px;
            cursor: pointer;
        }

        #btn-repeat {
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832591-93663200-b8e2-11eb-8b98-3b177304b555.png) no-repeat left;
            background-size: 50%;
        }

        #btn-suffle {
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832597-93fec880-b8e2-11eb-9146-f978064eddb1.png) no-repeat left;
            background-size: 45%;
        }

        #btn-save {
            margin-left: auto;
            order: 2;
            right: 10px;
            margin-right: var(--b-pad);
            background: url(https://user-images.githubusercontent.com/50569315/118832594-93fec880-b8e2-11eb-8201-12cb52be231f.png) no-repeat right;
            background-size: 60%;
        }

        #vli-videos {
            flex: 7;
            overflow: auto;
            margin-top: 5px;
        }

        .video-con {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            cursor: pointer;
        }

        .video-con:hover,
        .active-con {
            background: var(--active);
        }

        .index {
            min-width: 15px;
            align-self: center;
        }

        .thumb {
            width: 100px;
            height: 60px;
            background: #1c5fa8;
        }

        .thumb img {
            width: 100%;
        }

        .v-titles {
            flex: 6;
        }

        .v-titles .title {
            padding-left: 10px;
        }

        .v-titles div:nth-child(2) {
            margin-top: var(--s-pad);
        }

        @media only screen and (max-width: 1150px) {
            #playlist {
                width: 100%;
                height: 100%;
            }
        }

        @media only screen and (max-width: 950px) {
            #playlist {
                width: 100%;
                margin: 0 auto;
                display: block;
                align-items: center;
            }

            #video-dis {
                margin-bottom: var(--b-pad);
                width: 100%;
                height: 300px;
            }
        }

        @media only screen and (max-width: 800px) {
            #playlist {
                width: 100%;
            }
        }

        @media only screen and (max-width: 650px) {
            #playlist {
                width: 100%;
            }
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    @yield('css')
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>

    {{-- <header class="header-with-topbar">

        <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('images/logomev.png') }}" alt="Logo" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-600">
                        @foreach ($menu as $menus)
                            @if ($menus->children->isNotEmpty())
                                <li class="nav-item dropdown">
                                    <a href="{{ $menus->href }}" class="nav-link"
                                        id="navbarDropdown{{ $menus->id }}" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{ $menus->text }}
                                        @if (count($menus->children) > 0)
                                            <i class="fa fa-angle-down"></i>
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menus->id }}">
                                        @foreach ($menus->children as $child)
                                            <li><a class="dropdown-item"
                                                    href="{{ $child->href }}">{{ $child->text }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ $menus->href }}" class="nav-link">{{ $menus->text }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="digital-mgz col-auto d-none d-lg-flex align-items-center justify-content-end">
                    <a href="https://emlaksepette.com/magaza/maliyetine-ev/106" class="digitalMagaza" target="_blank"
                        style="margin-right:10px;">Dijital Satış Ofisi</a>
                    <a href="https://emlaksepette.com/magaza/maliyetine-ev/106" class="digitalMagaza"
                        target="_blank">Fiyat Listesi</a>
                </div>
                <div class="d-lg-none digital-mgz-mobile text-center mt-3">
                    <a href="https://emlaksepette.com/magaza/maliyetine-ev/106" class="digitalMagaza" target="_blank"
                        style="display: block; margin-bottom: 10px;">Dijital Satış Ofisi</a>
                    <a href="https://emlaksepette.com/magaza/maliyetine-ev/106" class="digitalMagaza"
                        target="_blank">Fiyat Listesi</a>
                </div>
            </div>
        </nav>






    </header> --}}



    <header class="sticky">

        <nav style="{{ request()->routeIs('index') ? '' : 'position: inherit !important' }}"
            class="navbar navbar-expand-lg header-transparent bg-white disable-fixed border-bottom border-color-transparent-white-light">
            <div class="container-fluid">
                <div class="col-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logomev.png') }}" data-at2x="{{ asset('images/logomev.png') }}"
                            alt="" class="default-logo">
                        <img src="{{ asset('images/logomev.png') }}" data-at2x="{{ asset('images/logomev.png') }}"
                            alt="" class="alt-logo">
                        <img src="{{ asset('images/logomev.png') }}" data-at2x="{{ asset('images/logomev.png') }}"
                            alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order left-nav ps-60px lg-ps-20px md-ps-15px">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            @foreach ($menu as $menus)
                                @if ($menus->children->isNotEmpty())
                                    <li class="nav-item dropdown">
                                        <a href="{{ $menus->href }}" class="nav-link text-black"
                                            id="navbarDropdown{{ $menus->id }}" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $menus->text }}
                                            @if (count($menus->children) > 0)
                                                <i class="fa fa-angle-down ml-2"></i>
                                            @endif
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menus->id }}">
                                            @foreach ($menus->children as $child)
                                                <li><a class="dropdown-item"
                                                        href="{{ $child->href }}">{{ $child->text }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ $menus->href }}"
                                            class="nav-link text-black">{{ $menus->text }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-auto ms-auto d-none d-lg-flex">
                    <div class="header-icon">
                        <div class="d-none d-xxl-flex me-25px xl-me-20px lg-me-0">
                            <div class="d-flex align-items-center widget-text"><span
                                    class="w-40px h-40px bg-base-color d-flex align-items-center justify-content-center me-10px rounded-circle fs-15"><i
                                        class="bi bi-telephone-outbound"></i></span><a href="tel:4443284"
                                    class="widget-text text-black text-black-hover">444 3 284</a></div>
                        </div>
                        <div class="header-button"><a href="https://emlaksepette.com/magaza/maliyetine-ev/106"
                                target="_blank" style="border-color: #EC2F2E !important;color: #EC2F2E !important"
                                class="btn btn-medium btn-transparent-white text-black border-1 border-color-black btn-rounded left-icon">Dijital
                                Satış Ofisi</a></div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
