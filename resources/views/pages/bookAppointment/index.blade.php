@extends("layouts.master")
@section("title", "Book Appointment")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/bookappointment.png")}})"
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
                    Please fill-up the form below to book an
                    appointment with one of our agents
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <form>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Your Name"
                                name="name"                               
                            />                          
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Phone Number"
                                name="mobile"                                
                            />                           
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Your Address"
                                name="address"                                
                            />
                            
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <input
                                type="email"
                                class="form-control"
                                placeholder="Email"
                                name="email"                             
                            />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <textarea name="message" class="form-control"
                            placeholder="Your Message" rows="5"></textarea>
                        </div>
                    </div>

                    <a
                        href="{{route('confirmAppointment', app()->getLocale())}}"
                        class="btn yellow-btn mt-4 d-flex align-items-center justify-content-center"
                    >
                        Submit
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection