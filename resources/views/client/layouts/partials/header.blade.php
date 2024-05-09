<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from craftohtml.themezaa.com/demo-accounting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2024 11:47:16 GMT -->

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="{{ URL::to('/') }}/css/icon.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/vendors.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/icon.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/style.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/responsive.min.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/demos/accounting/accounting.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">

    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>



    <header class="header-with-topbar">

        <div class="header-top-bar top-bar-dark bg-very-light-gray">
            <div class="container-fluid">
                <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                    <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                        <!-- <div class="fs-15 text-dark-gray fw-500">Our accounting experts waiting for you! <a
                                href="demo-accounting-contact.html"
                                class="text-dark-gray text-decoration-line-bottom fw-600">Contact now</a></div> -->
                    </div>
                    <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                        <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a
                                href="tel:{{$settings['phone']}}"><i class="fa fa-phone"></i>{{$settings['phone']}}</a>
                        </div>
                        <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i
                                class=" fa fa-location"></i>{{$settings['adress']}}</div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-accounting.html">
                        <img src="{{asset('images/logomev.png')}}"  alt
                            class="default-logo">
                        <img src="images/logomev.png" data-at2x="images/logomev.png" alt class="alt-logo">
                        <img src="images/logomev.png" data-at2x="images/logomev.png" alt class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav fw-600">
							@foreach ($menu as $menus)
                            <li class="nav-item"><a href="{{$menus->href}}" class="nav-link">{{$menus->text}}</a></li>
                   @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                    <!-- <div class="header-icon">
                        <div class="header-button">
                            <a href="demo-accounting-contact.html"
                                class="btn btn-small btn-rounded btn-base-color btn-box-shadow">Let's discuss</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </nav>

    </header>
