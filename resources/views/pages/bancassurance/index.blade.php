@extends("layouts.master")
@section("title", "Bancassurance Page")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/bancasurance/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Group Insurance </p>
                <h1> 
                    <span class="ml-0"> BANCASSURANCE </span>
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

<section id="claims" class="corporate bancassurance">
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
                            <h5>Safeguarding the Family</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>Creating a resort for bad times</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Minimizing Credit Risk</h5>
                        </div>
                        <div class="col-md-1 img-line">
                            <img src="{{asset("assets/img/bancasurance/line.png")}}" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>Increasing Revenue</h5>
                        </div>
                    </div>
                </div>
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
                                Why Gurdian <span></span>
                                </a>
                                {{-- <a
                                    class="nav-link"
                                    id="v-pills-home-tab3"
                                    data-toggle="pill"
                                    href="#v-pills-3"
                                    role="tab"
                                    aria-controls="#v-pills-3"
                                    aria-selected="true"
                                >
                                Benifits  <span></span>
                                </a> --}}
                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab4"
                                    data-toggle="pill"
                                    href="#v-pills-4"
                                    role="tab"
                                    aria-controls="#v-pills-4"
                                    aria-selected="true"
                                >
                                Benefits for Bank Customers <span></span>
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
                                Benefits for Banks <span></span>
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
                                Credit Risk Mitigation Products <span></span>
                                </a>

                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab7"
                                    data-toggle="pill"
                                    href="#v-pills-7"
                                    role="tab"
                                    aria-controls="#v-pills-7"
                                    aria-selected="true"
                                >
                                Depository Insurance Products <span></span>
                                </a>

                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab8"
                                    data-toggle="pill"
                                    href="#v-pills-8"
                                    role="tab"
                                    aria-controls="#v-pills-8"
                                    aria-selected="true"
                                >
                                Benefits we are offering <span></span>
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
                                            <p>Bancassurance is a form of partnership with Banks and Life Insurance Companies to sell life-insurance and other assurance products. There is a huge scope of tagging banking products with life insurance products that can be a perfect combination to make banking products more attractive. In hedging the credit risk, assurance can be impactful to tackle the risk due to customer’s death or disabilities. If combined with right spirit and implemented with efficiency, bancassurance can be a win-win situation for all the participants’ viz., banks, insurers and the customer.</p>
                                            
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
                                            <p>Guardian Life Insurance is looking to partner with the banks who are willing to re-discover insurance industry as a vital source of their Non-Funded Income (NFI) Revenue. Our Bancassurance team is ready to provide your bank a sustainable insurance tagged product proposition that will surely help grow the overall banking portfolio. Our collaborative relationships will add up value to your banking business. Our team of experts is ready to analyze your needs and create an innovative cost-effective solution designed to enhance the VAS for your customers. As we uplift the commitment of our sponsors i.e. Apex, Brac & Square “to revolutionize the insurance spectrum of Bangladesh”- we believe in innovation and service to deliver best in class services for you and your customers.</p>                                      
                                        </div>
                                    </div>
                                </div>
    
                                {{-- tab 3 --}}
                                {{-- <div
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
                                </div> --}}
    
                                {{-- tab 4 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-4"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-4"
                                >
                                    <div>
                                        <div class="col">
                                            <p>Safeguarding the family from the difficulties of giving the loan back.</p>
                                            <p>Creating a Resort for Bad times. Even after immense health hazards that might lead to disabilities; installment payments will not hamper.</p>
                                            <p>Health benefits as add-on benefit that comes with Life coverage.</p>
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
                                            <p>Increasing Revenue through the sale of insurance products (Minimum investment with high return. More utilization of existing Channels/Branches/Sales Points)</p>
                                            <p>Minimizing Credit risk exposures in Mortgage/Personal/SME/Loan & Credit cards.</p>
                                            <p>Motivating Staffs through additional income opportunity through incentives/commission income earned from selling Insurance Products.</p>
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
                                            <p>Supplementary Benefit (Disability)</p>
                                            <p>Group personal accident insurance plans cover multiple types of disabilities. The disabilities caused by accidents are classified under the following three sections for determining compensation:</p>
                                            <div class="accordion accordion-right" id="accordionExample10">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne1">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                            CREDIT CARD SHIELD
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample10">
                                                        <div class="card-body">
                                                          <p>Having credit card is good while your customer is active and earning enough to pay the bills. But due to sudden unexpected incident may cause discomfort both for the bank and the customers as defaults due to customer death or disability. The credit card outstanding then becomes a serious burden for the card holder or his/her family. Our credit card shield product will remain as a trusted friend to give relief to cover the uncertainties at this difficult time by paying the outstanding to the bank. Also the family will get a sum equal to outstanding as death benefit.</p>
                                                          <p>Various features that Banks can add with their Credit Cards:</p>
                                                          <li>Offers up to 200% of outstanding balance of credit card due to natural death or PTD.</li>
                                                          <li>Covers critical illness</li>
                                                          <li>Health Benefit (both Outpatient Department [OPD] and In patient Department [IPD]</li>
                                                        </div>
                                                      </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                            MORTGAGE RISK DIVERSIFICATION
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample10">
                                                        <div class="card-body">
                                                          <p>Banks or Financial Institutions (FI) give mortgage loan that is just not a simple loan but it is a key to fulfill the dream of owning a home. As uncertainties in our life may shatter many dreams – mortgage loan, if turned out to be default, adds woe to the bank portfolio and to the life of the deceased borrower’s family.</p>

                                                          <p>Banks can hedge the default risk due to death or disability of the borrower by partnering with Guardian Life Insurance Ltd. in the form of mortgage assurance. Guardian remains as a trusted partner with the bank customer to safeguard their family by paying the remaining outstanding to the bank/financial institution. Our robust underwriting team will help the banks/FI to mitigate their credit risk.</p>

                                                          <li>Protection for outstanding loan balance</li>
                                                          <li>Cover death (both natural & ADB) and permanent total disability</li>
                                                        </div>
                                                      </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="headingOne3">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner3">
                                                            PERSONAL LOAN RISK DIVERSIFICATION
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample10">
                                                        <div class="card-body">
                                                          <P>Personal loan is great for both the bank/FI and the borrower. This any purpose loan brings in high revenue for the bank. But due to the uncertainties of life and health hazard of the borrower, this portfolio might be a ‘pain in the brain’ for the bank/FI.</P>

                                                          <p>Our ‘PL Assurance’ will come as a rescue for limiting the credit risk of banks/FIs. We are committed to repay the loan to the bank/FI in case of death or disability of the borrower. This is a great tool to reduce the portfolio risk of the banks/FIs. So this is a smart solution for the smart banks/FIs offered by Guardian Life Insurance.</p>
                                                          
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne4">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner4" aria-expanded="true" aria-controls="collapseInner4">
                                                            SME LOAN RISK DIVERSIFICATION
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner4" class="collapse" aria-labelledby="headingOne4" data-parent="#accordionExample10">
                                                        <div class="card-body">
                                                          <P>As a bank, you give hope to millions of entrepreneurs through SME loan and help flourish the strongest driving force of inclusive economic growth. But the downside risk of SME lending like NPL is also high. And if the risk arises due to the life casualty or other severe health hazards, both bank and the borrower face acute problem.</P>

                                                          <p>To mitigate such risk of lives, Guardian Life SME Banking Assurance can be a prudent way to diversify the risk of SME portfolio. Guardian is ready to make lives of borrowers worry free. We will pay the outstanding liabilities to the bank in cases of life casualties.</p>
                                                          
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne5">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner5" aria-expanded="true" aria-controls="collapseInner5">
                                                            EMPLOYEE BANKING INSURANCE PLAN
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample10">
                                                        <div class="card-body">
                                                          <P>Many employers consider employee insurance benefits as an additional cost to the company. What is the very employees account that a bank opens to facilitate salary/benefit payment also provide employee insurance coverage?</P>

                                                          <p>Guardian Life Employee Banking Insurance schemes, will give you customized insurance coverage with minimum cost bundled with the employee/salary accounts.</p>

                                                          <p>Please call us to get the Customized Solution ‘Right Now!’</p>
                                                          
                                                        </div>
                                                      </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 7 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-7"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-7"
                                >
                                    <div class="">
                                        <div class="col">
                                            <div class="accordion accordion-right" id="accordionExample11">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne1">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                            CASA ASSURANCE PRODUCTS
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample11">
                                                        <div class="card-body">
                                                          <p>Guardian life offers attractive deposit insurance scheme for current and savings accounts for the bank customers. In case of any death or casualties the account holder family can get lump sum/specific amount to cover their loss.</p>
                                                          <li>All death covered (except exclusions)</li>
                                                          <li>Single/half yearly/Monthly premium option</li>
                                                          <li>Medical Coverage</li>
                                                        </div>
                                                      </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                            CUSTOMIZED DEPOSIT INSURANCE PLANS
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample11">
                                                        <div class="card-body">
                                                          <p>As a bank you are safeguarding the deposit of your client to ensure their financial security as well as protect their families. But every family is different. So why not your deposit plan be customized with our Guardian Life Deposit Insurance plan as per the need of your deposit accountholders. We offer a range of attractive deposit insurance solutions that can be linked with your deposit scheme.</p>

                                                          <li>Wide range of ages</li>
                                                          <li>DPS maturity amount guaranteed</li>
                                                          <li>Broader death coverage- Natural & Accidental</li>
                                                        </div>
                                                      </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 8 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-8"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-8"
                                >
                                    <div class="">
                                        <div class="col">
                                            <div class="accordion accordion-right" id="accordionExample12">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne1">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                            Natural Death Benefits
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>A death occurring in the course of nature and from natural causes (as age or disease) as opposed to accident or violence. In case of death of the borrower during the insured tenure, a set amount of money will go to the people nominated as beneficiaries.</p>
                                                        </div>
                                                      </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                            Maternity Insurance Benefits
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>Maternity insurance is a supplementary benefit that will cover maternity treatment expenses to the insured during the period of coverage inclusive of child birth expenses.</p>
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne3">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner3">
                                                            ADB (Accidental Death Benefit)
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>Accidental Death Benefit is a policy that pays benefits to the beneficiary if the cause of death is directly from an accident caused through external and violent means. If an insured dies due to accident, a set amount of money will go to the people nominated as beneficiaries.</p>
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne4">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner4" aria-expanded="true" aria-controls="collapseInner4">
                                                            CI (Critical Illness)
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner4" class="collapse" aria-labelledby="headingOne4" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>If you are diagnosed with critical illness, you can focus on recovery with support from Guardian Life CI illness solutions. It's designed to support you and your family financially while you deal with your diagnosis – so you can focus on your recovery without worrying how the bills will be paid.</p>
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne5">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner5" aria-expanded="true" aria-controls="collapseInner5">
                                                            PTD (Permanent Total Disability)
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>Permanent Total Disability is any lasting disability, injury or illness that affects your ability to earn a living. This benefits can be recognized immediately in case of total and irrecoverable loss of sight of both eyes and two or more limbs (at or above wrist or ankle). In case of permanent total disability of the borrower during the insured tenure, Guardian Life helps to cover the costs of rehabilitation, debt repayments and the future cost of living</p>
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingOne6">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner6" aria-expanded="true" aria-controls="collapseInner6">
                                                            HI (Hospitalization Insurance)
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample12">
                                                        <div class="card-body">
                                                          <p>Hospitalization Insurance is a supplementary benefit that will cover the hospitalization treatment expenses to the insured due to illness or injury sustained during the period of coverage inclusive of pre-admission and post discharge follow up treatment expenses.</p>
                                                        </div>
                                                      </div>
                                                </div>

                                            </div>
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