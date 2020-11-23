@extends("layouts.master")
@section("title", "Gurdian Life Insurance Ltd.")
@section("content")

{{-- <section id="banner" style="background-image: url({{asset("assets/img/home/banner.png")}})">
    <div class="banner-inner" style="background-image: url({{asset("assets/img/home/banner2.png")}})">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="banner-2">
                        <h5 class="mb-4">
                            Medical. Claim. Insurance.
                        </h5>
                        <h1 class="mb-5">Insurance for all</h1>
                        <button
                            class="btn yellow-btn"
                        >
                            get started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    
    <!-- banner section -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="z-index: -5">
          <div class="carousel-item active">
            <section id="banner" style="background-image: url({{asset("assets/img/home/banner.png")}})">
                <div class="banner-inner" style="background-image: url({{asset("assets/img/home/banner2.png")}})">
                    <div class="container ">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-2">
                                    <h5 class="mb-4">
                                        Medical. Claim. Insurance.
                                    </h5>
                                    <h1 class="mb-5">Insurance for all</h1>
                                    <button
                                        class="btn yellow-btn"
                                    >
                                        get started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section id="banner" style="background-image: url({{asset("assets/img/home/banner.png")}})">
                <div class="banner-inner" style="background-image: url({{asset("assets/img/home/banner2.png")}})">
                    <div class="container ">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-2">
                                    <h5 class="mb-4">
                                        Medical. Claim. Insurance.
                                    </h5>
                                    <h1 class="mb-5">Insurance for all</h1>
                                    <button
                                        class="btn yellow-btn"
                                    >
                                        get started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section id="banner" style="background-image: url({{asset("assets/img/home/banner.png")}})">
                <div class="banner-inner" style="background-image: url({{asset("assets/img/home/banner2.png")}})">
                    <div class="container ">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-2">
                                    <h5 class="mb-4">
                                        Medical. Claim. Insurance.
                                    </h5>
                                    <h1 class="mb-5">Insurance for all</h1>
                                    <button
                                        class="btn yellow-btn"
                                    >
                                        get started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>


    {{-- Slider section --}}
    <section id="silder-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <marquee behavior="" direction="" class="headline" onmouseover="this.stop();" onmouseout="this.start();">
                        <a class="" href="#">
                            <span>Latest News:</span> গার্ডিয়ান লাইফ
                            ইন্স্যুরেন্সের সঙ্গে রানার গ্রুপের বীমা চুক্তি -
                            Guirdian intrduced ‘Corona Safty’ for bankers -
                            গার্ডিয়ান লাইফ ইন্স্যুরেন্সের সঙ্গে রানার
                            গ্রুপের বীমা চুক্তি - Guirdian intrduced ‘C
                        </a>
                    </marquee>
                </div>
            </div>
            <div class="mt-5 pt-4">
                <div class="owl-carousel owl-theme">
                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider1.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Retail</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider2.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Banking</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider3.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Corporate Solutions
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider1.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Retail</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider2.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Banking</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider3.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Corporate Solutions</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="img-box">
                                <img
                                class="card-img-top"
                                src={{asset("assets/img/home/slider2.png")}}
                                alt=""
                            />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Banking</h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance plan section -->
    <section id="insurance-plan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Insurance <span> Plans </span>
                    </h1>
                    <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, ultrices elit ac aliquam vulputate morbi dignissim. Placerat rhoncus magna vel pulvinar molestie non sapien ullamcorper. Turpis proin urna nibh mattis pellentesque.</p>
                </div>
            </div>

            @include('components.retailSlide')
        </div>
        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <button
                        class="btn yellow-btn"
                    >
                        view all
                    </button>
                </div>
            </div>
        </div> --}}
    </section>


    <!-- App section -->
    <section id="app-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="app-card">
                        <div class="text">
                            <h2>Easylife App</h2>
                            <button
                                class="btn yellow-btn"
                                
                            >
                                Download
                            </button>
                        </div>
                        <div class="image">
                            <img
                                src="{{asset("assets/img/home/easylifeapp.png")}}"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="app-card">
                        <div class="text">
                            <h2>My Guardian App</h2>
                            <button
                                class="btn yellow-btn"
                                
                            >
                                Download
                            </button>
                        </div>
                        <div class="image">
                            <img
                                src="{{asset("assets/img/home/gurdianapp.png")}}"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection