@extends("layouts.master")
@section("title", "Early Cash")
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

<section id="single-page-common">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Early Cash</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('gurdianCareFree', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Care Free (3 Stage)</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('gurdianCarePro', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Care Free Pro (4 Stage)</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('gurdianCareUltra', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Care Free Pro Ultra (5 Stage)</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection