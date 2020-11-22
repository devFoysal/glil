@extends("layouts.master")
@if ($Bn)
@section("title", "রিটেইল")
@else 
@section("title", "Retail Page")
@endif

@section("content")
<section id="short-banner" style="background-image: url({{asset("assets/img/retail/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($Bn)
                  <p>{{$retail->banner_subtitle_bn}}</p>
                  <h1>{{$retail->banner_title_bn}}</h1>
                @else 
                    <p>{{$retail->banner_subtitle_en}}</p>
                    <h1>{{$retail->banner_title_en}}</h1>
                @endif
              
                
            </div>
        </div>
    </div>
</section>

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

@include('components.retailSlide');

<section id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h4>Contact Us</h4>
                <form>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Name"
                                name="name"
                            />
                            
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Mobile Number"
                                name="mobile"
                            />                         
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <select
                                class="form-control"
                                name="place"
                            >     
                                <option value="Dhaka">
                                    Dhaka
                                </option>
                                <option value="Dhaka">
                                    Dhaka
                                </option> 
                                <option value="Dhaka">
                                    Dhaka
                                </option> 
                                <option value="Dhaka">
                                    Dhaka
                                </option> 
                                <option value="Dhaka">
                                    Dhaka
                                </option> 
                                <option value="Dhaka">
                                    Dhaka
                                </option>                           
                            </select>
                            
                        </div>
                        <div class="col"></div>
                    </div>

                    <button class="btn yellow-btn mt-4">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection