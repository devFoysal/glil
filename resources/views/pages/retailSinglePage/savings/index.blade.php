@extends("layouts.master")
@section("title", "Savings")
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
                <h2>Savings</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('gurdianSanchay', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Sanchay</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('gurdianProbridhi', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Probridhi</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('gurdianSomriddhi', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Shomriddhi</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('gurdianMoneyback', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Money Back</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection