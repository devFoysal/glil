@extends("layouts.master")
@section("title", "Book Appointment")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/confirmation.png")}})"
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

<section id="book-appointment">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>
                    Book <span>appoinment</span>
                </h2>
                <p>
                    Your request has been submitted. Please wait for our response. Thank you.
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <div class="d-flex justify-content-center">
                    <a
                        href="{{route('home', app()->getLocale())}}"
                        class="btn yellow-btn mt-4 mb-5 d-flex align-items-center justify-content-center"
                    >
                        Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection