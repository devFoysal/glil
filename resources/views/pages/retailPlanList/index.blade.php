@extends("layouts.master")
@if (app()->getLocale() == 'en')
@section("title", $planList->name_en )
@elseif (app()->getLocale() == 'bn')
@section("title", $planList->name_bn )
@endif
@section("content")

<section id="short-banner" style="background-image: url({{asset('uploads/retail/'.$planList->banner)}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (app()->getLocale() == 'en')
                <p> {{$planList->banner_title_en}} </p>
                <h1> 
                    <span class="ml-0"> {{$planList->name_en}} </span>
                </h1>
                @elseif (app()->getLocale() == 'bn')
                <p> {{$planList->banner_title_bn}} </p>
                <h1> 
                    <span class="ml-0"> {{$planList->name_bn}} </span>
                </h1>
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
                    @if (app()->getLocale() == 'bn')
                    <i class="fas fa-home"></i> হোম
                    @elseif (app()->getLocale() == 'en')
                    <i class="fas fa-home"></i> Back to Home
                    @endif
                </a>
            </div>
        </div>
    </div>
</section>

<section id="claims" class="corporate bancassurance details-page">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class=detail-appointment>
                    @if (app()->getLocale() == 'bn')
                    <h5 class="title">সুবিধা</h5>
                    @elseif (app()->getLocale() == 'en')
                    <h5 class="title">Key Benefits</h5>
                    @endif
                    
                    <a class="btn book-appointment" href="{{route('bookAppointment', app()->getLocale())}}">Book an appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="key-benefits mb-4">
                    <div class="row key-benefits-inner mx-0 align-items-center">
                        <div class="col-md-3">
                            @if (app()->getLocale() == 'en')
                        <h5>{{$planList->key_1_en}}</h5>
                            @elseif (app()->getLocale() == 'bn')
                            <h5>{{$planList->key_1_bn}}</h5>
                            @endif
                           
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            @if (app()->getLocale() == 'en')
                            <h5>{{$planList->key_2_en}}</h5>
                                @elseif (app()->getLocale() == 'bn')
                                <h5>{{$planList->key_2_bn}}</h5>
                                @endif
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            @if (app()->getLocale() == 'en')
                            <h5>{{$planList->key_3_en}}</h5>
                                @elseif (app()->getLocale() == 'bn')
                                <h5>{{$planList->key_3_bn}}</h5>
                                @endif
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            @if (app()->getLocale() == 'en')
                            <h5>{{$planList->key_4_en}}</h5>
                                @elseif (app()->getLocale() == 'bn')
                                <h5>{{$planList->key_4_bn}}</h5>
                           @endif
                        </div>
                    </div>
                </div>
                <div class="left-side">
                    <div class="row mx-0">
                        <div class="col-md-3 blue-bg px-0">
                            <div
                                class="nav flex-column"
                                id="v-pills-tab"
                                role="tablist"
                                aria-orientation="vertical"
                            >

                            @if(!!strip_tags($planList->introduction_en))
                                <a
                                    class="nav-link active"
                                    id="v-pills-home-tab1"
                                    data-toggle="pill"
                                    href="#v-pills-1"
                                    role="tab"
                                    aria-controls="#v-pills-1"
                                    aria-selected="true"
                                >
                                @if (app()->getLocale() == 'en')
                                Introduction
                                    @elseif (app()->getLocale() == 'bn')
                                  ভূমিকা
                               @endif
                                     <span></span>
                                </a>
                            @endif

                            @if(!!strip_tags($planList->feature_en))
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab2"
                                    data-toggle="pill"
                                    href="#v-pills-2"
                                    role="tab"
                                    aria-controls="#v-pills-2"
                                    aria-selected="true"
                                >
                                @if (app()->getLocale() == 'en')
                                Features, Benifits & Conditions 
                                    @elseif (app()->getLocale() == 'bn')
                                 বৈশিষ্ট  এবং সুবিধা
                               @endif
                               <span></span>
                                </a>

                            @endif

                        @if(!!strip_tags($planList->term_en))
                                
                            <a
                                class="nav-link"
                                id="v-pills-home-tab3"
                                data-toggle="pill"
                                href="#v-pills-3"
                                role="tab"
                                aria-controls="#v-pills-3"
                                aria-selected="true"
                            >
                            @if (app()->getLocale() == 'en')
                            Term and Condition
                                @elseif (app()->getLocale() == 'bn')
                              শর্তাবলী
                           @endif
                            <span></span>
                            </a>

                        @endif

                            @if(!!$planList->video_url)
                                
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab4"
                                    data-toggle="pill"
                                    href="#v-pills-4"
                                    role="tab"
                                    aria-controls="#v-pills-4"
                                    aria-selected="true"
                                >
                                @if (app()->getLocale() == 'en')
                                Product Video
                                    @elseif (app()->getLocale() == 'bn')
                                  ভিডিও
                               @endif
                                 <span></span>
                                </a>

                            @endif
                                
                                
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
                                    <div>
                                        <div class="col">
                                            @if (app()->getLocale() == 'en')
                                            {!!$planList->introduction_en!!}
                                         @elseif (app()->getLocale() == 'bn')
                                                <h5>{!!$planList->introduction_bn!!}</h5>
                                        @endif
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
                                    <div>
                                        <div class="col">
                                        @if (app()->getLocale() == 'en')
                                            {!!$planList->feature_en!!}
                                         @elseif (app()->getLocale() == 'bn')
                                                <h5>{!!$planList->feature_bn!!}</h5>
                                        @endif
                                        </div>
                                    </div>
                                </div>
    
                                
                                   {{-- tab 3 --}}
                                   <div
                                   class="tab-pane fade show"
                                   id="v-pills-3"
                                   role="tabpanel"
                                   aria-labelledby="#v-pills-3"
                               >
                                   <div>
                                       <div class="col">
                                        @if (app()->getLocale() == 'en')
                                        {!!$planList->term_en!!}
                                     @elseif (app()->getLocale() == 'bn')
                                            <h5>{!!$planList->term_bn!!}</h5>
                                    @endif
                                       </div>
                                   </div>
                               </div>
    
                                {{-- tab 4 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-4"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-4"
                                >
                                    <div>
                                        <div class="col">
                                            {!!$planList->video_url!!}
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.ourplan')
        </div>
    </div>
</section>

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