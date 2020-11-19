@extends("layouts.master")
@section("title", "Policy Information")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/policyinfo.png")}})"
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

<div id="policy-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>
                    Policy <span>Information</span>
                </h2>
            </div>

            <div class="col-lg-8">
                <form>
                    <div
                        class="d-flex mb-4"
                    >
                        <label class="labels">
                            Individual
                            <input
                                type="radio"
                                defaultChecked
                                name="radio"
                                value="Individual"
                            />
                            <span class="checkmark"></span>
                        </label>
                        <label class="labels ml-4">
                            Group
                            <input
                                type="radio"
                                name="radio"
                                value="Group"
                            />
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Policy Number"
                                name="policyno"
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

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Date of Birth"
                                name="birthdate"
                            />
                            
                        </div>
                    </div>
                    <button
                        class="btn yellow-btn mt-3"
                    >
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection