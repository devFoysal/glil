@extends("layouts.master")
@section("title", "Supplementary Benifits")
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
                <h2>Supplementary Benifits</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('gurdianHealth', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Guardian Health Insurance</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('criticalIllness', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Critical Illness Plan</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('pdab', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Permanent Disability And Accidental Benefit</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{route('diab', app()->getLocale())}}">
                    <div class="card">
                        <div class="img-box">
                            <img
                            class="card-img-top"
                            src={{asset("assets/img/home/slider1.png")}}
                            alt=""
                        />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Double Indemnity And Accidental Benefit</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection