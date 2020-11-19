@extends("layouts.master")
@section("title", "CSR Activities")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/newsevent.png")}})"
></section>

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

<section id="news-event">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">
                    CSR<span class="ml-2">Activities</span>
                </h2>
            </div>
            <div class="col-lg-8 pb-4 pb-lg-0">
                <div class="card">
                    <img
                        src="{{asset("assets/img/news/image1.png")}}"
                        alt=""
                        class="card-img-top"
                    />

                    <div class="card-body py-5">
                        <h5 class="card-title">
                            New premium rate has been introduced.
                        </h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Pharetra eu mattis
                            facilisis praesent. Sed rutrum eu
                            gravida quis quis adipiscing. Lacinia
                            erat lorem tincidunt sagittis elementum
                            aliquet viverra molestie. Aliquet et
                            posuere vitae a. Id sed ridiculus eu sed
                            est. Egestas sed aliquam morbi quam
                            nulla ultrices et. Et aliquam dictumst
                            id magna velit. Sit neque purus
                            elementum viverra at et lacus. Ridiculus
                            morbi fermentum egestas blandit
                            lobortis. In nec dolor sed risus arcu
                            adipiscing laoreet viverra. Tincidunt
                            pulvinar gravida arcu at in viverra.
                            Natoque amet posuere amet donec turpis
                            tristique est leo, potenti. Non fames
                            arcu viverra venenatis, nunc. <br />
                            <br /> Vel consectetur convallis cras
                            neque, aliquet vulputate fringilla.
                            Laoreet felis in consectetur aliquet.
                            Sodales praesent orci, tortor neque
                            senectus id purus, quisque. Scelerisque
                            ac eget in eget euismod risus amet nam
                            viverra. Nibh amet, proin fringilla
                            pulvinar quisque eget aliquet pretium
                            mauris. Et consequat amet maecenas
                            accumsan facilisis varius mattis duis.
                            Ullamcorper tellus, in volutpat
                            tincidunt vel. Blandit sed blandit diam
                            consequat mauris. Nullam lorem rhoncus
                            tristique rhoncus. Eget est nulla donec
                            morbi mauris.
                        </p>
                    </div>

                    <div class="card-footer">
                        <h6 class="mb-4">
                            Posted on: 18/7/2020
                        </h6>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Share :</h6>
                            <div class="social-icons">
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
            </div>
            <div class="col-lg-4">
                <div class="side-bar mb-4">
                    <h5 class="title">Recent Activities</h5>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image3.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image2.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image4.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image3.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                </div>
                <div class="side-bar">
                    <h5 class="title">Similar Topics</h5>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image3.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image2.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image4.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                    <div
                        class="side-bar-box"
                    >
                        <img
                            src="{{asset("assets/img/news/image3.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                            <h6>New premium rate has been introduced.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection