@extends("layouts.master")
@section("title", "Retirements Details Page")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/bancasurance/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Family Protection Plan - Retirement </p>
                <h1> 
                    Pension Cum<span class="ml-0"> Assurance Plan </span>
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
                        <div class="col-md-2">
                            <h5>Retire smart & 
                                enjoy life</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>Get Pension 
                                for lifetime</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Guaranteed 
                                Pension Amount</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Protect your 
                                Family's Future</h5>
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
                                            <p>Make your retired life a respectable & self-sufficient one: A secure retirement plan that will keep you financially solvent for the rest of your life.</p>
                                            <p>In your absence, the policy offers 10 years of guaranteed pension for your precious family.</p>
                                            <p>Cherish those special moments with your grandchildren. Head out for those special tours/vacations that you could never make time for. Buy your better half that special gift that you always longed for but never could manage.</p>
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
                                            <p><strong>Term of insurance plan:</strong> 5 – 52 Years</p>
                                            <br>
                                            <p><strong>Annual Pension:</strong> It can be any amount and the minimum amount is BDT 24,000</p>
                                            <br>
                                            <p><strong>Age:</strong> 20 – 55 years</p>
                                            <br>
                                            <p><strong>Premium Payment Method:</strong> Yearly, Half-yearly, Quarterly and Monthly</p>
                                            <br>
                                            <p><strong>Premium Conversion Rate:</strong></p>
                                            <p>1.Yearly to Monthly = Yearly Premium X 0.0925</p>
                                            <p>2.Yearly to Quarterly = Yearly Premium X 0.275</p>
                                            <p>3.Yearly to Half Yearly = Yearly Premium X 0.525</p>
                                            <br>
                                            <p><strong>Supplementary Insurance Facilities:</strong></p>
                                            <p>This plan allows you to avail any or multiple of the following supplementary insurance facilities:</p>
                                            <p>[1] Health Insurance [HI]</p>
                                            <p>[2] Insurance for Critical illness [CI]</p>
                                            <br>
                                            <p><strong>Pre-requisites:</strong></p>
                                            <li>The policy applicant must be in good & sound health</li>
                                            <li>The policy applicant must have own, valid and regular income</li>
                                            <br>
                                            <p><strong>Plan Benefits:</strong></p>
                                            <p>[1] Upon maturity of the plan or at the retirement age (set by the policyholder), the policyholder will get the set monthly pension for his / her whole life.</p>
                                            <p>[2]  If the pension recipient / policyholder dies within 10 years of pension period, the monthly pension will be paid to nominee of the policyholder for the outstanding period; outstanding period being the time remaining from the completion of the 10-year tenure.</p>
                                            <p>[3] If the policyholder dies while the plan is in force before the expiry of the insurance plan, the policyholder’s nominee will be paid 10 times the set annual pension.</p>
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
                                            <iframe class="rounded" width="100%" height="400px" src="https://www.youtube.com/embed/MNnMB-8XEzA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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