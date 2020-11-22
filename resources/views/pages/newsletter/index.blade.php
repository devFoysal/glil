@extends("layouts.master")
@section("title", "Newsletter")
@section("content")

<section id="banner-no-text" style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"></section>

{{-- <section id="counter">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 box">
                <h5>1.1 Crore</h5>
                <p>Lives Covered</p>
            </div>
            <div class="col-md-3 box2">
                <h5>BDT 400+ Crore</h5>
                <p>Paid in Claims</p>
            </div>
            <div class="col-md-3 box3">
                <h5>97%</h5>
                <p>Claim Payout Ratio</p>
            </div>
        </div>
    </div>
</section> --}}

<section id="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('home', app()->getLocale())}}">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<section id="claims" class="corporate bancassurance about-us more">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h5 class="title">Newsletter</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="left-side">
                    <div class="row mx-0">
                        <div class="col-md-3 blue-bg">
                            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab1" data-toggle="pill" href="#v-pills-1"
                                    role="tab" aria-controls="#v-pills-1" aria-selected="true">
                                    Quarterly Newsletter English Version <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab2" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="#v-pills-2" aria-selected="true">
                                    Quarterly Newsletter In Bengali <span></span>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-9 ash-main-bg">
                            <div class="tab-content ash-bg" id="v-pills-tabContent"
                                {{-- style={{ position: "relative" }} --}}>
                                {{-- tab 1 --}}
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="#v-pills-1">
                                    <div class="">
                                        <div class="col">
                                            <div style="height: 650px">
                                                <div class="col d-flex align-items-center justify-content-center h-100"
                                                    style="flex-direction: column">
                                                    <a target="_blank" download=""
                                                        href="{{asset("uploads/newsletter/$newsletter->newsletter_en")}}"><i
                                                            class="fas fa-download mr-3"></i>Download Newsletter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 2 --}}
                                <div class="tab-pane fade show" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="#v-pills-2">
                                    <div class="">
                                        <div class="col">
                                            <div style="height: 650px">
                                                <div class="col d-flex align-items-center justify-content-center h-100"
                                                    style="flex-direction: column">
                                                    <a target="_blank" download=""
                                                    href="{{asset("uploads/newsletter/$newsletter->newsletter_bn")}}"><i
                                                        class="fas fa-download mr-3"></i>Download Newsletter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- <section id="video-section">
    <div class="container">
        <div class="row text-center">
            <h5>Video Gallery</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection