@extends("layouts.master")
@section("title", "Financials")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"
></section>

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
                <h5 class="title">Financials</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                <div class="left-side">
                    <div class="row mx-0">
                        <div class="col-md-3 blue-bg">
                            <div
                                class="nav flex-column"
                                id="v-pills-tab"
                                role="tablist"
                                aria-orientation="vertical"
                            >
                                <a
                                    class="nav-link active"
                                    id="v-pills-home-tab1"
                                    data-toggle="pill"
                                    href="#v-pills-1"
                                    role="tab"
                                    aria-controls="#v-pills-1"
                                    aria-selected="true"
                                >
                                Financials Highlights <span></span>
                                </a>
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab2"
                                    data-toggle="pill"
                                    href="#v-pills-2"
                                    role="tab"
                                    aria-controls="#v-pills-2"
                                    aria-selected="true"
                                >
                                Annual Reports <span></span>
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-md-9 ash-main-bg">
                            <div
                                class="tab-content ash-bg"
                                id="v-pills-tabContent"
                                {{-- style={{ position: "relative" }} --}}
                            >
                                {{-- tab 1 --}}
                                <div
                                    class="tab-pane fade show active"
                                    id="v-pills-1"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-1"
                                >
                                    <div class="row mx-0 border-0">
                                        <div class="col-lg-12">
                                            <h2>Solid Financial Backbone</h2>
                                            <br>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <img src="{{asset("assets/img/news/f1.png")}}" alt="" class="img-fluid">
                                            <img src="{{asset("assets/img/news/f2.png")}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <h2>Commendable Claim Payout Trend</h2>
                                            <br>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <img src="{{asset("assets/img/news/f3.png")}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
    
                                {{-- tab 2 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-2"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-2"
                                >
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Download Annual Reports</h2>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Reports</th>
                                                    <th scope="col">Download</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Audit Report 2017</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Audit Report 2016</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Audit Report 2015</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Audit Report 2014</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Audit Report 2018</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Audit Report 2019</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                </tbody>
                                              </table>
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