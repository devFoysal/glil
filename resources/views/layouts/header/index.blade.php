<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <script
    src="https://kit.fontawesome.com/e4970535a3.js"
    crossorigin="anonymous"
    ></script>

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">

    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--bootstrap CSS only -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    <title>@yield("title")</title>
</head>
<body>
    <section id="header">
        <a href="{{route('home', app()->getLocale())}}"  class="logo">
            <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="" />
        </a>
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-right socials">
                        <li class="phone">
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            16622 (24 hours)
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-right">
                        
                        {{-- @foreach(__('header.headerMenu') as $headerMenu)
                            <li class="d">
                                <a
                                    class="main-link"
                                    href="{{$headerMenu['link']}}"
                                >
                                {{$headerMenu['name']}}
                                </a>
                            </li>
                        @endforeach --}}

                        {{-- <li class="d">
                            <a class="nav-link @if(Request::segment(1) == 'en'){{'active'}}@endif d-inline-block text-capitalize"
                                href="{{route(Route::currentRouteName(), array_merge(request()->route()->parameters, ['language' => 'en']))}}">
                                EN 
                            </a>
                            <span class="d-inline-block">|</span>
                            <a class="nav-link @if(Request::segment(1) == 'bn'){{'active'}}@endif d-inline-block text-capitalize"
                                href="{{route(Route::currentRouteName(), array_merge(request()->route()->parameters, ['language' => 'bn']))}}">
                                বাংলা 
                            </a>
                        </li> --}}

                        <li class="d">
                            <a
                                class="main-link"
                                href="{{route('retail', app()->getLocale())}}"
                                title="Click Here to go Retail Page"
                            >
                                Retail
                                <div class="dropdown" style="z-index: 500">
                                    <a
                                        class="dropdown-item"
                                        href="{{route('savings', app()->getLocale())}}"
                                    >
                                        Savings
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('earlyCash', app()->getLocale())}}"
                                    >
                                        Early Cash
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('children', app()->getLocale())}}"
                                    >
                                        Children
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('retirement', app()->getLocale())}}"
                                    >
                                        Retirements
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('investment', app()->getLocale())}}"
                                    >
                                        Investment
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('supplymentary', app()->getLocale())}}"
                                    >
                                        Supplementary Benifits
                                    </a>
                                </div>
                            </a>
                        </li>

                        <li class="d">
                            <a class="main-link" href="{{route('corporate', app()->getLocale())}}" title="Click Here to go Corporate Page">
                                Corporate
                                <div class="dropdown dropdown2" style="z-index: 500">
                                    <a
                                        class="dropdown-item"
                                        href="{{route('groupTermLife', app()->getLocale())}}"
                                    >
                                        Group Term Life
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('criticalIllnessBenefit', app()->getLocale())}}"

                                    >
                                        Critical Illness Benefit
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('groupMedical', app()->getLocale())}}"

                                    >
                                        Group Medical Insurance Plan
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('groupPersonal', app()->getLocale())}}"

                                    >
                                        Group Personal Accident Benefit
                                    </a>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="main-link" href="{{route('bancassurance', app()->getLocale())}}">
                                Bancassurance
                            </a>
                        </li>

                        <li>
                            <a class="main-link" href="{{route('microinsurance', app()->getLocale())}}">
                                Micro Insurance
                            </a>
                        </li>

                        <li>
                            <a class="main-link" href="{{route('claims', app()->getLocale())}}">
                                Claims
                            </a>
                        </li>

                        {{-- <li class="about-us">
                            <a class="main-link" href="{{route('aboutUs', app()->getLocale())}}">
                                About Us
                            </a>
                        </li> --}}

                        <li class="d">
                            <a
                                class="main-link"
                                href="#"
                            >
                                More
                                <div class="dropdown more-options" style="z-index: 500">
                                    <a
                                        class="dropdown-item"
                                        href="{{route('aboutUs', app()->getLocale())}}"
                                    >
                                        About Us
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('mediaCorner', app()->getLocale())}}"
                                    >
                                        Media Corner
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('financials', app()->getLocale())}}"
                                    >
                                        Financials
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('newsLetter', app()->getLocale())}}"
                                    >
                                        Newsletter
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{route('coronaVirus', app()->getLocale())}}"
                                    >
                                        Corona Virus Awareness
                                    </a>
                                </div>
                            </a>
                        </li>

                        
                        <li class="line">
                            <img
                                src={{asset("assets/img/line.png")}}
                                class="img-fluid"
                                alt=""
                                
                            />
                        </li>
                        <button class="img-btn btn1">
                            <img
                                src={{asset("assets/img/easylife.png")}}
                                class="img-fluid"
                                alt=""
                            />
                        </button>
                        <button class="img-btn btn-gurdian">
                            <img
                                src={{asset("assets/img/mygurdian.png")}}
                                class="img-fluid"
                                alt=""
                            />
                        </button>
                        {{-- <li>
                            <i class="fas fa-search"></i>
                        </li> --}}
                        <li class="d">
                            <a href="#" class="main-link">
                                <i class="fas fa-search" onclick="myFunction()">
                                </i>
                                <div id="dropdowns" class="dropdowns" style="z-index: 20000; right: 1%">
                                    <div class="dropdown-item">
                                        <form action="" class="d-flex">
                                            <input type="text" class="form-control" placeholder="Search" >
                                            <button type="submit" class="btn yellow-btn ml-4">Search</button>
                                            <i onclick="myFunctiontwo()" class="fas fa-times ml-3"></i>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="mobile-header">
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center yellow-bg">
                        <li class="phone">
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            16622 or 09 610000200
                        </li>
                    </div>
                    <div class="col-md-6 text-center">
                        <li>
                            <a href="" class="text-light">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-light">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-light">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-light">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <a
                class="navbar-brand"
                href="{{route('home', app()->getLocale())}}"
            >
                <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="" />
            </a>
            
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    {{-- <li class="nav-item">
                        <a
                            class="nav-link"
                            
                        >
                            Retail
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="!#">
                            Corporate
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="{{route('retail', app()->getLocale())}}"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Retail
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <a class="dropdown-item" href="{{route('savings', app()->getLocale())}}">
                                Savings
                            </a>
                            <a class="dropdown-item" href="{{route('earlyCash', app()->getLocale())}}">
                                Early Cash
                            </a>
                            <a class="dropdown-item" href="{{route('children', app()->getLocale())}}">
                                Children
                            </a>
                            <a class="dropdown-item" href="{{route('retirement', app()->getLocale())}}">
                                Retirements
                            </a>
                            <a class="dropdown-item" href="{{route('investment', app()->getLocale())}}">
                                Investment
                            </a>
                            <a class="dropdown-item" href="{{route('supplymentary', app()->getLocale())}}">
                                Supplementary Benifits
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="{{route('corporate', app()->getLocale())}}"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Corporate
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <a class="dropdown-item" href="{{route('groupTermLife', app()->getLocale())}}">
                                Group Term Life
                            </a>
                            <a class="dropdown-item" href="{{route('criticalIllnessBenefit', app()->getLocale())}}">
                                Critical Illness Benefit
                            </a>
                            <a class="dropdown-item" href="{{route('groupMedical', app()->getLocale())}}">
                                Group Medical Insurance Plan
                            </a>
                            <a class="dropdown-item" href="{{route('groupPersonal', app()->getLocale())}}">
                                Group Personal Accident Benefit
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('bancassurance', app()->getLocale())}}">
                            Bancassurance
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('microinsurance', app()->getLocale())}}">
                            Micro Insurance
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('claims', app()->getLocale())}}">
                            Claims
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            More
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <a class="dropdown-item" href="{{route('aboutUs', app()->getLocale())}}">
                                About Us
                            </a>
                            <a class="dropdown-item" href="{{route('mediaCorner', app()->getLocale())}}">
                                Media Corner
                            </a>
                            <a class="dropdown-item" href="{{route('financials', app()->getLocale())}}">
                                Financials
                            </a>
                            <a class="dropdown-item" href="{{route('newsLetter', app()->getLocale())}}">
                                Newsletter
                            </a>
                            <a class="dropdown-item" href="{{route('coronaVirus', app()->getLocale())}}">
                                Corona Virus Awareness
                            </a>
                        </div>
                    </li>
                    <div class="d-flex">
                        <button class="img-btn btn1">
                            <img
                                src={{asset("assets/img/easylife.png")}}
                                class="img-fluid"
                                alt=""
                            />
                        </button>
                        <button class="img-btn btn-gurdian">
                            <img
                                src={{asset("assets/img/mygurdian.png")}}
                                class="img-fluid"
                                alt=""
                            />
                        </button>
                    </div>
                    <li>
                        <form action="" class="d-flex mt-3 pb-3">
                            <input type="text" class="form-control" style="height: 40px" placeholder="Search" >
                            <button type="submit" class="btn yellow-btn ml-4">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    {{-- Socail Sidebar --}}
    <div id="social-sidebar">
        {{-- Book Appointment  --}}
        <ul>
        {{-- <li><a href="{{route('bookAppointment', app()->getLocale())}}" class="transform"><span>বাংলা</span></a></li> --}}
        <li><a href="#" class="transform2 bangla" style="border-top: 0.5px solid #C6781B" data-toggle="tooltip" data-placement="left" title="Bangla"><span>বাংলা</span></a></li>
        <li><a href="#" class="entypo-self" style="border-top: 0.5px solid #C6781B" data-toggle="tooltip" data-placement="left" title="Premium Calculator"><img src={{asset('assets/img/calculate.png')}} alt=""><span><i></i></span></a></li>
         
        <li><a href="#" class="entypo-self" style="border-top: 0.5px solid #C6781B" data-toggle="tooltip" data-placement="left" title="Policy Information"><img src={{asset('assets/img/card.png')}} alt=""><span><i></i></span></a></li>
        <li><a href="#" class="entypo-self" style="border-top: 0.5px solid #C6781B" data-toggle="tooltip" data-placement="left" title="Claim Settlement"><img src={{asset('assets/img/date.png')}} alt=""><span><i></i></span></a></li>
        <li><a href="" class="entypo-self a2a_dd" style="border-top: 0.5px solid #C6781B" data-toggle="tooltip" data-placement="left" title="Book an Appointment"><i class="far fa-calendar-alt"></i></a></li>
        </ul>
    </div>
