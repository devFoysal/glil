@extends("layouts.master")
@if($Bn)
@section("title", 'অ্যাপয়েন্টমেন্ট')
@else
@section("title", "Book Appointment")
@endif

@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/bookappointment.png")}})"
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
                    অ্যাপয়েন্টমেন্ট
                </h2>
                <p>
                    আমাদের একজন এজেন্টের সাথে অ্যাপয়েন্টমেন্ট নিতে নিচের ফর্মটি পূরন করুন
                </p>

                @else
                <h2>
                    Book <span>appoinment</span>
                </h2>
                <p>
                    Please fill-up the form below to book an
                    appointment with one of our agents
                </p>
                @endif
               
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <form action="{{route('appointment.add',['language' => app()->getLocale()]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif"
                                placeholder= "@if($Bn)আপনার নাম   @else Your Name @endif"
                                name="name"    
                        value="{{old('name')}}"                           
                            />
                            @if($errors->has('name'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name') }}
                            </small>
                            @endif                          
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <input
                                type="text"
                                class="form-control  @if($errors->has('phone')) {{'is-invalid'}} @endif"
                                placeholder="@if($Bn)ফোন নাম্বার  @else Phone Number @endif"
                                name="phone" 
                        value="{{old('phone')}}"                               
                            />  
                            @if($errors->has('phone'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('phone') }}
                            </small>
                            @endif                         
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control @if($errors->has('address')) {{'is-invalid'}} @endif"
                                placeholder="@if($Bn)আপনার ঠিকানা   @else Your Address @endif"
                                name="address"    
                        value="{{old('address')}}"                            
                            />
                            @if($errors->has('address'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('address') }}
                            </small>
                            @endif
                            
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <input
                                type="email"
                                class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif"
                                placeholder="@if($Bn)আপনার ইমেইল   @else Your Email @endif"
                                name="email"  
                        value="{{old('email')}}"                           
                            />
                            @if($errors->has('email'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('email') }}
                            </small>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <input
                            type="date"
                            class="form-control @if($errors->has('date')) {{'is-invalid'}} @endif"
                            placeholder="@if($Bn) অ্যাপয়েন্টমেন্ট তারিখ   @else Appointment Date @endif"
                            name="date"   
                            
                        value="{{old('date')}}"
                        />
                        @if($errors->has('date'))
                        <small class="d-block text-danger mb-3">
                            {{ $errors->first('date') }}
                        </small>
                        @endif
                        
                        </div>
                        <div class="col">
                            <textarea name="message" class="form-control @if($errors->has('message')) {{'is-invalid'}} @endif"
                            placeholder="@if($Bn)আপনার মেসেজ   @else Your Message @endif"" rows="5">{{old('message')}}</textarea>
                            @if($errors->has('message'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('message') }}
                            </small>
                            @endif
                        </div>
                    </div>

                    <button
                       type="submit"
                        class="btn yellow-btn mt-4 d-flex align-items-center justify-content-center"
                    >
                        @if($Bn) জমা দিন  @else Submit  @endif
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection