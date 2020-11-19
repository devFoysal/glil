@extends("layouts.master")
@section("title", "Guardian Sanchay")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/bancasurance/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Family Protection Plan - Savings </p>
                <h1> 
                    <span class="ml-0"> Guardian Sanchay </span>
                </h1>
            </div>
        </div>
    </div>
</section>

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

<section id="claims" class="corporate bancassurance details-page">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class=detail-appointment>
                    <h5 class="title">Key Benefits</h5>
                    <a class="btn book-appointment" href="{{route('bookAppointment', app()->getLocale())}}">Book an appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="key-benefits mb-4">
                    <div class="row key-benefits-inner mx-0 align-items-center">
                        <div class="col-md-3">
                            <h5>The easiest plan that focuses on your convenience</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Protect your Family's Future</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Life Cover for entire Policy Term</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Shortest term savings option</h5>
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
                                <a
                                    class="nav-link active"
                                    id="v-pills-home-tab1"
                                    data-toggle="pill"
                                    href="#v-pills-1"
                                    role="tab"
                                    aria-controls="#v-pills-1"
                                    aria-selected="true"
                                >
                                    Introduction <span></span>
                                </a>
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab2"
                                    data-toggle="pill"
                                    href="#v-pills-2"
                                    role="tab"
                                    aria-controls="#v-pills-2"
                                    aria-selected="true"
                                >
                                Features, Benifits & Conditions <span></span>
                                </a>
                                
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab4"
                                    data-toggle="pill"
                                    href="#v-pills-4"
                                    role="tab"
                                    aria-controls="#v-pills-4"
                                    aria-selected="true"
                                >
                                Product Video <span></span>
                                </a>
                                
                                
                            </div>
                            <div class="download-brochure">
                                <a href="#" class="nav-link"> <i class="fas fa-download"></i> Download Brochure</a>
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
                                            <p>Keep it simple: An easy savings plan topping with saving protection coverage and comes with attractive bonuses. It is a monthly saving plan, easily affordable to policyholder, offers the full Sum Assured at the maturity along with bonuses declared during the policy term.</p>
                                            <p>The plan comes with 2 [two] categories:</p>
                                            <p>[1] Guardian Savings Gold</p>
                                            <p>[2] Guardian Savings Silver</p>
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
                                            <p><strong>Term:</strong> 5 – 52 Years</p>
                                            <br>
                                            <p><strong>Lowest monthly premium:</strong> BDT 1,000</p>
                                            <br>
                                            <p><strong>Age:</strong> 18 – 65 years</p>
                                            <p>*At Maturity, age of the policyholder can’t exceed 70 years</p>
                                            <br>
                                            <p><strong>Premium Payment Method:</strong> Monthly</p>
                                            <br>
                                            <p><strong>Supplementary Insurance Facilities:</strong></p>
                                            <p>This plan allows you to avail any or multiple of the following supplementary insurance facilities:</p>
                                            <p>[1] DIAB: Double Indemnity Accidental Benefit</p>
                                            <p>[2] Health Insurance [HI]</p>
                                            <p>[3] Insurance for Critical illness [CI]</p>
                                            <br>
                                            <p><strong>Pre-requisites:</strong></p>
                                            <li>The policy applicant must be in good & sound health</li>
                                            <li>The policy applicant must have own, valid and regular income</li>
                                            <br>
                                            <p><strong>Plan Benefits:</strong></p>
                                            <p>[1] Upon maturity of the insurance plan, the policyholder will get the full survival benefit which includes the entire sum assured along with the earned bonus / profit.</p>
                                            <p>[2] If the policyholder dies while the plan is in force before the expiry of the insurance plan, then nominee of the policyholder will get the full sum assured plus the earned bonus / profit.</p>
                                            <p>[3] However, only for Guardian Savings Gold policies, if the policyholder dies due to accidental death while the plan is in force before the expiry of the plan, then the nominee of the policyholder will get double the full sum assured along with the earned bonus / profit.</p>
                                            <p>[4] The policy achieves paid-up status after paying at least 2 [two] years of premium, after that the policy may be converted to a reduced Sum Assured upon request of the policyholder.</p>
                                            <p>[5] Surrender Value and Loan Benefit: Upon payment of at least 2 [two] years of premium, a

                                                policy achieves Surrender Value. There is option for Policyholder to avail Policy Loan up to
                                                
                                                a maximum of 90% of the Surrender Value.</p>
                                            <p>[6] Income Tax Rebate Benefit: The benefit of income tax rebate on premium paid every year at applicable rate.</p>
                                            <p>[7] Hospitalization Benefits: Enjoy hospitalization benefits upto 5 Lac for Yourself and every family member [Spouse & Child] individually.</p>
                                            <p>[8] Discounts on Hospitals: Enjoy attractive discounts at more than 300 partner Hospitals & Clinical Labs with Guardian Life Card.</p>
                                            <p>[9] Critical Illness Coverage: 18 Critical Illness Coverage for self upto 5 Lac.</p>
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
                                            <iframe class="rounded" width="100%" height="400px" src="https://www.youtube.com/embed/EFsr1pB6BaY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-lg-3 mt-4 mt-lg-0">
                <div class="right-side">
                    <div class="right-side-box">
                        <h5 class="mb-4">Our plans</h5>
                        <div class="accordion accordion-right" id="accordionExample2">
                            <div class="card">
                              <div class="card-header" id="headingOne1">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    Early cash
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample2">
                                <div class="card-body">
                                  <li>Guardian Care Free</li>
                                  <li>Guardian Care Free Pro</li>
                                  <li>Guardian Care Free Pro Ultra</li>
                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                              <div class="card-header" id="headingTwo2">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    Children
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
                                <div class="card-body">
                                    <li>Child Protection Plan</li>
                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                              <div class="card-header" id="headingThree3">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                    Supplementary Benifits
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample2">
                                <div class="card-body">
                                    <li>Critical Illness Plan</li>
                                    <li>Permanent Disability And Accidental Benefit</li>
                                    <li>Double Indemnity And Accidental Benefit</li>
                                    <li>Guardian Health Insurance</li>
                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                                <div class="card-header" id="headingThree4">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree3">
                                        Savings
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordionExample2">
                                  <div class="card-body">
                                    <li>Guardian Sanchay</li>
                                    <li>Guardian Prodriddhi</li>
                                    <li>Gurdian Shomriddhi</li>
                                    <li>Guardian Money Back</li>
                                  </div>
                                </div>
                              </div>
        
                              <div class="card">
                                <div class="card-header" id="headingThree5">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree3">
                                        Retirement
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample2">
                                  <div class="card-body">
                                    <li>Pension Cum Assurance Plan</li>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header" id="headingThree5">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree3">
                                        Investment
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordionExample2">
                                  <div class="card-body">
                                    <li>Guardian Surokkha</li>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
            </div>
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