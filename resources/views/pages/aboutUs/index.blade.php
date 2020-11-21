@extends("layouts.master")
@section("title", "About Us")
@section("content")

<section id="banner-no-text" style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"></section>

<section id="counter">
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
</section>

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

<section id="claims" class="corporate bancassurance about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h5 class="title">About Us</h5>
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
                                    Who We Are <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab2" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="#v-pills-2" aria-selected="true">
                                    Our Chairman <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab3" data-toggle="pill" href="#v-pills-3"
                                    role="tab" aria-controls="#v-pills-3" aria-selected="true">
                                    Shareholders <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab4" data-toggle="pill" href="#v-pills-4"
                                    role="tab" aria-controls="#v-pills-4" aria-selected="true">
                                    Board Of Directors <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab5" data-toggle="pill" href="#v-pills-5"
                                    role="tab" aria-controls="#v-pills-5" aria-selected="true">
                                    Management Team <span></span>
                                </a>
                                <a class="nav-link" id="v-pills-home-tab6" data-toggle="pill" href="#v-pills-6"
                                    role="tab" aria-controls="#v-pills-6" aria-selected="true">
                                    Stuff List <span></span>
                                </a>

                                <a class="nav-link" id="v-pills-home-tab7" data-toggle="pill" href="#v-pills-7"
                                    role="tab" aria-controls="#v-pills-7" aria-selected="true">
                                    Mission & Vision <span></span>
                                </a>

                                <a class="nav-link" id="v-pills-home-tab8" data-toggle="pill" href="#v-pills-8"
                                    role="tab" aria-controls="#v-pills-8" aria-selected="true">
                                    Citizen Charter <span></span>
                                </a>

                                <a class="nav-link" id="v-pills-home-tab9" data-toggle="pill" href="#v-pills-9"
                                    role="tab" aria-controls="#v-pills-9" aria-selected="true">
                                    Core values <span></span>
                                </a>

                                <a class="nav-link" id="v-pills-home-tab10" data-toggle="pill" href="#v-pills-10"
                                    role="tab" aria-controls="#v-pills-10" aria-selected="true">
                                    Milestone <span></span>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-9 ash-main-bg">
                            <div class="tab-content ash-bg" id="v-pills-tabContent"
                                {{-- style={{ position: "relative" }} --}}>
                                {{-- tab 1 --}}
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="#v-pills-1">
                                    <div class="row mx-0 border-0">
                                        <div class="col-lg-7">
                                            <div class="pb-3">
                                                @if ($Bn)
                                                {!! $whoWeAres->description_bn !!}
                                                @else
                                                {!! $whoWeAres->description_en !!}
                                                @endif
                                            </div>

                                            <h2>Guardian’s Values</h2>
                                            <div id="carouselExampleControls1" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner">

                                                    @if (count($guardianValies) > 0)
                                                    @foreach ($guardianValies as $index => $gv)
                                                    <div class="carousel-item @if ($index == 0)
                                                        {{'active'}}
                                                    @endif">
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-body p-0 pb-3">
                                                                    @if ($Bn)
                                                                    {!!$gv->description_bn!!}
                                                                    @else
                                                                    {!!$gv->description_en!!}
                                                                    @endif

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif



                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls1"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">
                                                        Previous
                                                    </span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls1"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">
                                                        Next
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-lg-5 mt-5 mt-lg-0">
                                            <iframe src="https://www.youtube.com/embed/{{$whoWeAres->video}}"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <h6>Our Sponsors:</h6>
                                            <style>
                                                .images>p {
                                                    display: flex !important;
                                                    align-items: center;
                                                    justify-content: space-around
                                                }

                                                .images img {
                                                    padding: 0 15px;
                                                }
                                            </style>
                                            <div class="images d-flex">
                                                {!! $whoWeAres->sponsors !!}
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                {{-- tab 2 --}}
                                <div class="tab-pane fade show" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="#v-pills-2">
                                    <div>
                                        <div class="col">
                                            @if ($Bn)
                                            {!! $chairmanSpeech->description_bn !!}
                                            @else
                                            {!! $chairmanSpeech->description_en !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 3 --}}
                                <div class="tab-pane fade show" id="v-pills-3" role="tabpanel"
                                    aria-labelledby="#v-pills-3">
                                    <div>
                                        <div class="col">
                                            <div class="mb-3">
                                                @if ($Bn)
                                                {!! $shareholderHeading->description_bn !!}
                                                @else
                                                {!! $shareholderHeading->description_en !!}
                                                @endif
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">SL</th>
                                                            <th scope="col">Name of Shareholders</th>
                                                            <th scope="col">No. of Shares</th>
                                                            <th scope="col">% of Shareholdings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($shareholders) > 0)
                                                        @foreach ($shareholders as $index => $shareholder)
                                                        @if ($Bn)
                                                        <tr>
                                                            <th scope="row">{{$index + 1}}</th>
                                                            <td>{{$shareholder->name_bn}}</td>
                                                            <td>{{number_format($shareholder->numberOfShares)}}</td>
                                                            <td>{{$shareholder->percentageOfShares}}</td>
                                                        </tr>
                                                        @else
                                                        <tr>
                                                            <th scope="row">{{$index + 1}}</th>
                                                            <td>{{$shareholder->name_en}}</td>
                                                            <td>{{number_format($shareholder->numberOfShares)}}</td>
                                                            <td>{{$shareholder->percentageOfShares}}</td>
                                                        </tr>
                                                        @endif

                                                        @endforeach
                                                        @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 4 --}}
                                <div class="tab-pane fade show" id="v-pills-4" role="tabpanel"
                                    aria-labelledby="#v-pills-4">
                                    <div class="row mx-0 border-0">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                @if ($Bn)
                                                {!! $directorHeading->description_bn !!}
                                                @else
                                                {!! $directorHeading->description_en !!}
                                                @endif
                                            </div>
                                        </div>
                                        @if (count($directors) > 0)
                                        @foreach ($directors as $director)
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("uploads/board-of-directors/$director->image")}}" alt=""
                                                class="img-fluid">
                                            <div class="pt-3">
                                                @if ($Bn)
                                                <p> <strong>{{$director->name_bn}}</strong> </p>
                                                <p>{{$director->designation_bn}}</p>
                                                @else
                                                <p> <strong>{{$director->name_en}}</strong> </p>
                                                <p>{{$director->designation_en}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                {{-- tab 5 --}}
                                <div class="tab-pane fade show" id="v-pills-5" role="tabpanel"
                                    aria-labelledby="#v-pills-5">
                                    <div class="row mx-0 border-0">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                @if ($Bn)
                                                {!! $mtHeading->description_bn !!}
                                                @else
                                                {!! $mtHeading->description_en !!}
                                                @endif
                                            </div>
                                        </div>
                                        @if (count($mTeams) > 0)
                                        @foreach ($mTeams as $team)
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("uploads/management-team/$team->image")}}" alt=""
                                                class="img-fluid">
                                            <div class="pt-3">
                                                @if ($Bn)
                                                <p> <strong>{{$team->name_bn}}</strong> </p>
                                                <p>{{$team->designation_bn}}</p>
                                                @else
                                                <p> <strong>{{$team->name_en}}</strong> </p>
                                                <p>{{$team->designation_en}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                {{-- tab 6 --}}
                                <div class="tab-pane fade show" id="v-pills-6" role="tabpanel"
                                    aria-labelledby="#v-pills-6">
                                    <div style="height: 650px">
                                        <div class="col d-flex align-items-center justify-content-center h-100"
                                            style="flex-direction: column">
                                            <p><strong>Guardian Life Insurance Limited Staff List</strong></p>
                                            <a href="">Click Here to Download</a>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 7 --}}
                                <div class="tab-pane fade show" id="v-pills-7" role="tabpanel"
                                    aria-labelledby="#v-pills-7">
                                    <div class="">
                                        <div class="col">
                                            @if ($Bn)
                                            {!!$missionVision->description_bn!!}
                                            @else
                                            {!!$missionVision->description_en!!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 8 --}}
                                <div class="tab-pane fade show" id="v-pills-8" role="tabpanel"
                                    aria-labelledby="#v-pills-8">
                                    <div class="">
                                        <div class="col">
                                            <div style="height: 650px">
                                                <div class="col d-flex align-items-center justify-content-center h-100"
                                                    style="flex-direction: column">
                                                    <a href="">Citizen Charter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 9 --}}
                                <div class="tab-pane fade show" id="v-pills-9" role="tabpanel"
                                    aria-labelledby="#v-pills-9">
                                    <div class="">
                                        <div class="col">
                                            @if ($Bn)
                                            {!!$coreValues->description_bn!!}
                                            @else
                                            {!!$coreValues->description_en!!}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 10 --}}
                                <div class="tab-pane fade show" id="v-pills-10" role="tabpanel"
                                    aria-labelledby="#v-pills-10">
                                    <div class="">
                                        <div class="col">
                                            <h2 class="mb-4">Guardian Life Milestones</h2>
                                            <img src="{{asset("assets/img/about/milestone.png")}}" alt=""
                                                class="img-fluid">
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

<section id="video-section">
    <div class="container">
        <div class="row text-center">
            <h5>Video Gallery</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <iframe src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection