@extends("layouts.master")
@if($Bn)
@section("title", 'অ্যাপয়েন্টমেন্ট')
@else
@section("title", "Book Appointment")
@endif

@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/confirmation.png")}})"
></section>

<section id="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('homepage', app()->getLocale())}}">
                    @if ($Bn)
                    <i class="fas fa-home"></i> হোম
                    @else
                    <i class="fas fa-home"></i> Back to Home
                    @endif
                </a>
            </div>
        </div>
    </div>
</section>

<section id="book-appointment">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                @if($Bn)

                <h2>
                    অ্যাপয়েন্টমেন্ট সম্পন্ন হয়েছে
                </h2>
                <p>
                    আপনার অনুরোধ জমা দেওয়া হয়েছে। অনুগ্রহ করে  অপেক্ষা করুন। ধন্যবাদ.
                </p>

                @else
                <h2>
                    Book <span>appoinment  </span> has been done
                </h2>
                <p>
                    Your request has been submitted. Please wait for our response. Thank you.
                </p>
                @endif
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <div class="d-flex justify-content-center">
                    <a
                        href="{{route('homepage', app()->getLocale())}}"
                        class="btn yellow-btn mt-4 mb-5 d-flex align-items-center justify-content-center"
                    >
                    @if($Bn) হোম  @else   Home @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection