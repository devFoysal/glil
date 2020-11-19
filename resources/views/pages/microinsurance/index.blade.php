@extends("layouts.master")
@section("title", "Microinsurance Page")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/corporateSolution/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Group Insurance </p>
                <h1> 
                    <span class="ml-0"> MICROINSURANCE </span>
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

<section id="claims" class="corporate">
    <div class="container">
        {{-- <div class="row">
            <div class="col-12">
                <h4>Claims</h4>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-12 pb-3">
                <div class=detail-appointment>
                    <h5 class="title"></h5>
                    <a class="btn book-appointment" href="{{route('bookAppointment', app()->getLocale())}}">Book an appointment</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="left-side">
                    <div class="row mx-0">
                        <div class="col-md-3 blue-bg">
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
                                Guardian Life Micro-insurance <span></span>
                                </a>
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab3"
                                    data-toggle="pill"
                                    href="#v-pills-3"
                                    role="tab"
                                    aria-controls="#v-pills-3"
                                    aria-selected="true"
                                >
                                Features of Guardian Life Micro-insurance <span></span>
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
                                Current Offerings <span></span>
                                </a>
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab5"
                                    data-toggle="pill"
                                    href="#v-pills-5"
                                    role="tab"
                                    aria-controls="#v-pills-5"
                                    aria-selected="true"
                                >
                                Current Programs <span></span>
                                </a>
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab6"
                                    data-toggle="pill"
                                    href="#v-pills-6"
                                    role="tab"
                                    aria-controls="#v-pills-6"
                                    aria-selected="true"
                                >
                                Impact of Guardian Life Micro-insurance <span></span>
                                </a>
                                
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
                                            <p>
                                                Micro-insurance is one of the formal risk management mechanisms to protect the mass community from the effect of their potential financial risks. Micro-insurance product is specially designed for the lower income people for ensuring their risk coverage in exchange of affordable premium. So any one can enjoy insurance benefits under this mechanism who, generally, do not have access to the traditional insurance due to higher premium.
                                            </p>
    
                                            <p>
                                                Micro insurance plays a vital role in the economic development of any country. Bangladesh is now under the process of graduating as developing country. So micro insurance can create a vital role to ensure inclusive growth and support the livelihood of the vulnerable segment of the society and facilitate the sustainable economic growth of this country
                                            </p>
                                            
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
                                            <p>Being the largest Micro Insurer in Bangladesh Guardian Life Insurance Ltd. is covering more than 10 million lives under different micro-insurance propositions. These micro insurance products are being offered though partnership modality. The beneficiaries or members of the partner organization i.e. MFI, Bank etc., can enjoy the benefits of offered products with affordable premium. With continuous innovation, Guardian Life is planning to explore the partnership opportunities with different organizations through tagging micro-insurance product with their product & services.</p>                                      
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
                                            <p>1. Simplified Product offered to the insured</p>
                                            <p>2. Economic Price considering the affordability of economic group</p>
                                            <p>3. Customized offering based on the demand of the insured</p>
                                            <p>4. Hassle free enrolment process</p>
                                            <p>5. Fastest claim settlement to ensure best support</p>
                                            <p>6. OPD Dental Benefits</p>
                                            <p>7. Win-win proposition for the partners</p>
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
                                            <p> <strong>Credit Shield Micro-insurance</strong> </p>
                                            <p>This policy has been designed for the micro credit holders of MFIs, Banks and the Non-Bank Financials (NBFIs) for protecting them from the effect of their potential financial risks</p>
                                            <p> <strong>Benefits</strong> </p>
                                            <li>Life Coverage: A fixed amount of funeral cost due to the death of loan holder or secondary insured</li>
                                            <li>Credit Coverage: Waiver of outstanding loan due to the death of loan holder or secondary insured</li>
                                            <br>
                                            <p> <strong>Saving Shield Micro-insurance</strong> </p>
                                            <p>This policy has been designed for the micro savings holders of MFIs, Banks and the Non-Bank Financials (NBFIs) for protecting them from the effect of their potential financial risks</p>
                                            <p> <strong>Benefits</strong> </p>
                                            <li>Life Coverage: The maturity value of savings scheme due to the death of savings holder.</li>
                                        </div>
                                    </div>
                                </div>
    
                                {{-- tab 5 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-5"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-5"
                                >
                                    <div class="">
                                        <div class="col">
                                            <p> <strong>Guardian Brac Bima (GBB)</strong> </p>
                                            <p>GLIL in partnership with BRAC tried to develop a proposition that could meet the needs of the community. Promoting this scheme through a trusted intermediary had instant benefits; the initial take up rate skyrocketed to 61% in 2016 and 76% in 2017 through voluntary participation. Partnership with BRAC gave the scheme significant reach, the availability of this product increased from 20 branches in 2015 & 650 branches in 2016 under pilot phase to 2530 branches in 10 weeks. GLIL has worked in two folds when it comes to the operations management and efficient claim processing, delivering on both quantity and quality. GLIL also introduced BRAC Guardian Bima Web Portal to drive effectiveness and efficiency in claim processing.</p>
                                            <p> <strong>Benefits</strong> </p>
                                            <li>Life Coverage: A fixed amount of funeral cost due to the death of loan holder or secondary insured</li>
                                            <li>Credit Coverage: Waiver of outstanding loan due to the death of loan holder or secondary insured</li>
                                            <br>

                                            <p> <strong>GBB’s Achievements</strong> </p>
                                            <li>GLIL achieved “Innovative Insurance Product of the Year-2017” at Insurance Asia Awards 2017 for Guardian-Brac Bima Project (GBB).</li>
                                            <li>GBB has become the largest micro-insurance project in Bangladesh</li>
                                            <li>More than 10 million lives is being secured under this proposition</li>
                                            <li>Quickest claim settlement of the largest community has been possible through automated claim management</li>
                                            <li>Settled claims of BDT. 1896 million under this project</li>
                                            <br>

                                            <p> <strong>Bank Asia Guardian Bima (BAG)</strong> </p>
                                            <p>In 2019, Bank Asia & Guardian Life jointly initiated a credit shield product for the micro loan borrowers under Agent Banking channel of Bank Asia. Through this initiatives a large number of untapped community gets an opportunity to reside under the umbrella of insurance.</p>
                                            <p> <strong>Benefits</strong> </p>
                                            <li>Life & Credit Coverage: Waiver of outstanding loan due to the death of loan holder</li>
                                        </div>
                                    </div>
                                </div>
    
                                {{-- tab 6 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-6"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-6"
                                >
                                    <div>
                                        <div class="col">
                                            <li>Liability protection of the loan holders</li>
                                            <li>Credit protection of partners, i.e. MFI, Bank & Non-Bank Financials (NBFs)</li>
                                            <li>Asset protection of all stakes</li>
                                            <li>A secured financial ecosystem</li>
                                            <li>Secured socio-economy</li>
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
                                <div class="card-header" id="headingThree6">
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

                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Compnay"
                                name="company"
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

                    <button class="btn yellow-btn mt-4">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection