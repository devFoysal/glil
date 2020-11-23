@extends("layouts.master")
@if($Bn)
@section("title", $claim->name_bn)
@else
@section("title", $claim->name_en)
@endif
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset('uploads/claim/'.$claim->banner)}})"
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

<section id="claims">
    <div class="container">
        <div class="row">
            <div class="col-12">
              @if($Bn)
            <h4>{{$claim->name_bn}}</h4>
              @else
              <h4>{{$claim->name_en}}</h4>
              @endif
                
            </div>
        </div>
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
                                    @if($Bn)
                                    {{$overview->name_bn}}
                                    @else 
                                    {{$overview->name_en}}
                                    @endif
                                    <span></span>
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
                                @if($Bn)
                                {{$claimSubmission->name_bn}}
                                @else 
                                {{$claimSubmission->name_en}}
                                @endif <span></span>
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
                                    Cashless Facility <span></span>
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
                                    Claim Tracking <span></span>
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
                                    FAQs <span></span>
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
                                    Forms <span></span>
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
                                    Make Online Claim <span></span>
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
                                            
                                            
                                          @if($Bn)
                                          {!!$overview->description_bn!!}

                                          @else 
                                          {!!$overview->description_en!!}

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
                                           
                                          @if($Bn)
                                          {!!$claimSubmission->description_bn!!}

                                          @else 
                                          {!!$claimSubmission->description_en!!}

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
                                            <p>
                                                Cashless facility is a
                                                benefit given by an
                                                insurance company to its
                                                health policyholders.
                                                This facility enables
                                                the insured to get
                                                hospitalized at any
                                                preferred hospital of
                                                the insurer. This
                                                relieves the
                                                policyholder of a major
                                                financial burden,
                                                especially with the
                                                rising cost of medical
                                                care these days. This
                                                facility is offered by
                                                virtue of the insurer’s
                                                tie-up with the
                                                hospital, and such
                                                hospitals are called
                                                preferred hospitals.
                                            </p>
                                            <p>
                                                You can contact the
                                                insurer directly on
                                                <strong>
                                                    09610000200
                                                </strong>
                                                or simply fill out and
                                                submit the form below to
                                                guide you on the process
                                                of taking cashless
                                                facilities.
                                            </p>
                                            <hr />
                                            <h6>
                                                Fill out the form for
                                                cashless facilities:
                                            </h6>
                                            <p>
                                                <i>
                                                    All information are
                                                    required
                                                </i>
                                            </p>
    
                                            <form>
                                                <div class="row mb-4 border-0">
                                                    <div class="col-lg-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Organization"
                                                            name="Organization"
                                                        />
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Insured Name"
                                                            name="InsuredName"
                                                        />
                                                    </div>
                                                </div>
    
                                                <div class="row border-0">
                                                    <div class="col-lg-6">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="PIN"
                                                            name="PIN"
                                                        />                                             
                                                    </div>
                                                    <div class="col-lg-6 mt-4 mt-lg-0">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Date"
                                                            name="Date"
                                                        />                                                
                                                    </div>
                                                </div>
    
                                                <div class="row mb-4 border-0">
                                                    <div class="col-lg-12 mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Patient Name"
                                                            name="PatientName"                                                    
                                                        />
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Mobile No"
                                                            name="MobileNo"
                                                        />
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            placeholder="Email ID"
                                                            name="EmailID"
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
    
                                {{-- tab 4 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-4"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-4"
                                >
                                    <div>
                                        <div class="col">
                                            <p class="mb-5">Quickly and easily check the status of your claim and get step by step help with the claims process. You can check the progress of your claim here.</p>
                                            
    
                                            <div class="claim-tracking-ash-bg mt-4">
                                                <div class="d-flex mb-4">
                                                    <p>Web portal</p>
                                                    <a>myguardianbd.com</a>
                                                </div>
    
                                                <div class="d-flex">
                                                    <p>Mobile Apps</p>
                                                    <a>Mygurdian </a>
                                                </div>
                                            </div>
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
                                    <div class="tab-faq">
                                        <div class="col">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                  <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        1. What is Cashless Hospitalization? 
                                                      </button>
                                                    </h2>
                                                  </div>
                                              
                                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Cashless Hospitalization is a special privilege or value added service offered by GLIL. You can enjoy hospital expenses in advance from your available limits as GLIL pays the bills directly to hospitals. You have to pay only for the non-covered items & expenses exceeding your limits at the time of discharge from hospital.
                                                    </div>
                                                  </div>
                                                </div>
    
                                                <div class="card">
                                                  <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        2.What are the procedures to avail Cashless Hospitalization?
                                                      </button>
                                                    </h2>
                                                  </div>
                                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        There are two types of Hospitalization.
                                                        <br>
                                                        In case of “Planned Hospitalization” such as delivery, gall bladder operation etc. you have to inform GLIL through your HR department prior to hospitalization.  Supporting medical documents mentioning your reason for admission & The Hospital’s name is mandatory with the cashless request.
                                                        <br>
                                                        In case of “Emergency Hospitalization” such as sudden heart attack, road traffic accident etc. we accept cashless request within 72 hours after your admission.
                                                        <br>In both the cases we need the full name, age, organization name, membership id (or PIN no) of the admitted patient to find his/her benefit schedule & earlier consumption of his/her limits in our system.
                                                        <br>
                                                        You can send the Cashless request through Hospital’s “Corporate desk” as well with the supporting documents mentioned above. After cross checking the information we would provide you the cashless support.
                                                        <br>
                                                        <br>In short, the insured will inform GLIL through his/her HR with prescription mentioning Hospitalization cause & advice for hospitalization. Besides, he/she will provide Full name, Staff ID, Age, organization’s name & Hospital name during admission.
                                                        <strong>However, this is not applicable for the employees of Brac. They will communicate GLIL directly with these documents during admission.</strong>
                                                    </div>
                                                  </div>
                                                </div>
    
                                                <div class="card">
                                                  <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        3. Will I get cashless facility in every hospitals?
                                                      </button>
                                                    </h2>
                                                  </div>
                                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        No. We can arrange cashless hospitalization only in our enlisted/preferred hospitals.
                                                    </div>
                                                  </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading4">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                                            4. From where I can know the details of your listed/preferred 
                                                            hospitals?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        Please click on the link below and you will get the details:
                                                        <br>
                                                        <a href="https://myguardianbd.com/Home/GlilPreferedHospital">https://myguardianbd.com/Home/GlilPreferedHospital</a>
                                                        <br>
                                                        or call us at our hotline: 16622.
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading5">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                                            5. In which cases GLIL deny to provide cashless facility?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        In case of non-covered diseases or any doubtful hospitalization where every details need to be checked; we may not provide you the cashless facility. In those cases, you have to pay total hospital bill & later send us your claim along with claim form & supporting documents.
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading6">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                                            6. Why I had to pay 10,000/- in hospital counter at the time of discharge though I was under “Cashless Hospitalization”?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        We instructed you to deposit a lump sum money on assumption at the time of discharge. As there were excess costs in the bill exceeding your limits in room rent, service charge etc. And there were costs of some items those are not covered by insurance such as: non-medical items, food items, non-covered medicines etc.
                                                        Upon final settlement of the bill, the excess deposited amount (if any) would be refunded to your bank account or you may have to deposit more money to us if the amount is less than your non-payables.
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading7">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                                            7. What would happen if I forget to ask for the cashless facility to GLIL in time & knock them at the time of discharge?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        We highly discourage this type of very late communication. Because, you have to wait for hours till the procedures from our end is completed. In worst case scenario, even we may not be able to provide you the cashless facility.
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading8">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                                            8. While enjoying cashless facility for a particular disease or disability, should I perform consultation & tests for my other body parts? Such as, I got admitted for gall bladder operation, should I perform my neurological, kidney, eye etc. checkups?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        Insurance covers only the disability for which you are admitted & general checkup is not covered. We would cover the consequence of the disability/disease for which you are admitted into hospital. But non-relevant tests or consultation or medications with the admission cause have to be borne by you & you have to deposit this excess amount at the time of discharge
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading9">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                                                            9. What is the claim procedure & your official address?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        After treatment, you will have to collect the claim form from our website/ your office and fill it up properly with necessary documents and submit it to GLIL. You can send your claim through courier or deposit it to your HR if our messenger use to pick up claims from your office.
                                                        <br>
                                                        Our address is: Guardian Life Insurance Limited. Police Plaza – Concord, Tower-2, Plot-2, Road-144, Gulshan Avenue, Dhaka -1212. Call Center :16622 . Web:  <a href="www.guardianlife.com.bd">www.guardianlife.com.bd</a>
                                                      </div>
                                                    </div>
                                                </div>
    
                                                <div class="card">
                                                    <div class="card-header" id="heading10">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                                                            10. From where can I get the claim form?
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        You can download the claim form from our website: <a href="https://www.guardianlife.com.bd/"> https://www.guardianlife.com.bd/ </a>
                                                        <br>
                                                        or you can collect it from your HR Department.
                                                      </div>
                                                    </div>
                                                </div>
                                              </div>
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
                                            <p class="mb-4">Download the forms</p>
                                            <div class="claim-tracking-ash-bg2">
                                                <div class="form-download">
                                                    <p>Critical Illness-MDB Claim Form</p>
                                                    <a href="">Download</a>
                                                </div>
                                                <div class="form-download">
                                                    <p>Death Claim Form</p>
                                                    <a href="">Download</a>
                                                </div>
                                                <div class="form-download">
                                                    <p>Health Insurance Claim Form</p>
                                                    <a href="">Download</a>
                                                </div>
                                                <div class="form-download">
                                                    <p>PPD-PTD Claim Form</p>
                                                    <a href="">Download</a>
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
                                    <div style="height: 35vh">
                                        <div class="col" style="
                                            align-items: center;
                                            display: flex;
                                            justify-content: flex-end;
                                            flex-direction: column;
                                            height: 100%;"
                                        >
                                            <p>To make online claim please visit  Guardian Online Claim Submission portal. </p>
                                            <a href="">Click Here to visit</a>
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
                                    Preferred Hospitals & Diagnostics
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample2">
                                <div class="card-body">
                                  <form>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Select Your Area</option>
                                          <option>Dhaka</option>
                                          <option>Barishal</option>
                                          <option>Sylhet</option>
                                          <option>Rajshahi</option>
                                          <option>Khulna</option>
                                          <option>Chottogram</option>
                                        </select>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                              <div class="card-header" id="headingTwo2">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    Your Feedback
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
                                <div class="card-body">
                                  <form>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Mobile</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">E-mail</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Your Claim Feedback</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <button class="yellow-btn" style="border: 0">
                                        Submit
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                              <div class="card-header" id="headingThree3">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                    Required Documents For Medical Claims
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample2">
                                <div class="card-body">
                                  <strong>1. REQUIRED DOCUMENTS FOR MEDICAL CLAIMS</strong>
                                  <br>
                                  <br>
                                  <b>A. For Outpatient treatment (OPD):</b>
                                  <br>
                                  <br>
                                  <li>
                                    Duly filled in & signed Claim Form
                                    For Group Health Insurance - All claims to be submitted through the employer and to be duly attested by competent authority. For the Individual Health Insurance- All claims to be submitted/sent directly to the Guardian Life’s head office and to be signed by insured member only.
                                  </li>
                                  <li>
                                    Original money receipt showing the attending physician's detailed charges along with his signature.
                                  </li>
                                  <li>
                                    Original itemized pharmacy bill showing date of purchase, name of patient, quantity and name of drugs along with photocopy of physician's prescription.
                                  </li>
                                  <li>
                                    Original receipt showing charge for each of the Lab test, X-ray Films, and other examinations done and supported by the respective physician's request to undergo examinations and copies of the results of examinations undertaken.
                                  </li>
                                  <br>
                                  <b>B. For In-patient treatment (IPD):</b>
                                  <br><br>
                                  <li>
                                    Duly filled in & signed Claim Form
                                    For Group Health Insurance - All claims to be submitted through the employer and to be duly attested by competent authority. For the Individual Health Insurance- All claims to be submitted/sent directly to the Guardian Life’s head office and to be signed by insured member only.
                                  </li>
                                  <li>
                                    Consultant’s recommendation for hospitalization (attested Photocopy)
                                  </li>
                                  <li>
                                    Discharge certificate (attested photocopy)
                                  </li>
                                  <li>
                                    Original and itemized Bills / Receipts of all relevant expenses i.e. Hosp. Accommodation, medicines, consultation fees, investigations, procedures, Surgery, any medical or surgical items along with their requisition slip. Database bills is preferred.
                                  </li>
                                  <li>
                                    A copy of the patient's file while hospitalized.
                                  </li>
                                  <br>
                                  <b>C. Important points for claim reimbursement:</b>
                                  <br>
                                  <br>
                                  <li>
                                    Submit your claim within allowable limit.
                                  </li>
                                  <li>
                                    Patient’s name has to be same as earlier submitted Health Insurance Application Form. Please avoid use of nick name.
                                  </li>
                                  <li>
                                    All receipt related with financial transection must be original one. Total claim amount must be well supported by submitted supporting documents.
                                  </li>
                                  <li>
                                    Overwriting or writing by self in any claim documents to change the amount is strictly prohibited. Guardian Life reserve rights to decline total claim if it is proven that insured member has manipulated the bills or trying to manipulate the bills.
                                  </li>
                                  <li>
                                    Voluntary collection of manual or computer compose bill instead of Software generated bill where well-functioning system is available also strongly prohibited.
                                  </li>
                                  <li>
                                    The Company shall, where it deems necessary, seek opinion of it’s medical expert to satisfy itself that the Member has been provided with the reasonable medical treatment and services.
                                  </li>
                                  <li>
                                    Guardian Life reserve rights to obtain any information from any source and to verify any claims by independent & professional 3rd party and may call relevant any documents before final settlement.
                                  </li>
                                  <br>

                                  <strong>2. REQUIRED DOCUMENTS FOR DEATH CLAIMS:</strong>
                                  <br>
                                  <li>
                                    Duly filled in & signed Claim Form.
                                    For Group Life/ Credit Shield Insurance - All claims to be submitted through the Employer / Bank or Leasing Company and to be duly attested by competent authority. For the Individual Life Insurance- All claims to be submitted/sent directly to the Guardian Life’s head office and to be signed by valid nominee.
                                  </li>
                                  <li>
                                    Original or attested photocopy of Death Certificate from the Hospital and/or Death Registration Certificate issued by Municipal Body, either from the health department of City Corporation / Local Union Parishad / commissioner / Councillor / Chairman / Mayor (on his/her official printed letterhead).
                                  </li>
                                  <li>
                                    Employment Certificate by the Employer for Group life Insurance, Copy of Loan / Card approval letter including copy of DGH filled out by insured Credit Shield Insurance and Original Policy Document in case of Individual Life Insurance.
                                  </li>
                                  <li>
                                    Copy of National Identification Card (NID) or Smart Card of Deceased and Nominee.
                                  </li>
                                  <li>
                                    Succession report / Nomination certificate for applicable cases
                                  </li>
                                  <li>
                                    Treatment record of Deceased prior death (if any)
                                  </li>
                                  <li>
                                    For accidental or any unnatural death- Copy of FIR/GD, Inquest Report and Post mortem report.
                                  </li>
                                  <li>
                                    Guardian Life reserve rights to obtain any information from any source and to verify any claims by independent & professional 3rd party and may call relevant any documents before final settlement.
                                  </li>
                                  <br>

                                  <strong>3. REQUIRED DOCUMENTS FOR CRITICLE ILLNESS (CI) CLAIMS:</strong>
                                  <br>
                                  <li>
                                    Duly filled in & signed Claim Form.
                                    For Group Insurance - All claims to be submitted through the Employer and to be duly attested by competent authority. For the Individual Insurance- All claims to be submitted/sent directly to the Guardian Life’s head office and to be signed by Insured Member
                                  </li>
                                  <li>
                                    Employment Certificate by the Employer for Group Insurance and Copy of Policy Document in case of Individual Insurance.
                                  </li>
                                  <li>
                                    Copy of Medical record with detailing of the Critical Illness by the respective specialist physician
                                  </li>
                                  <li>
                                    Copy of medical investigations repot to support or proof the Illness.
                                  </li>
                                  <br>

                                  <strong>4. REQUIRED DOCUMENTS FOR ACCEDENTAL PPD/PTD CLAIMS:</strong>
                                  <br>
                                  <li>
                                    Duly filled in & signed Claim Form.
                                    For Group Insurance - All claims to be submitted through the Employer and to be duly attested by competent authority. For the Individual Insurance- All claims to be submitted/sent directly to the Guardian Life’s head office and to be signed by Insured Member
                                  </li>
                                  <li>
                                    Employment Certificate by the Employer for Group Insurance and Copy of Policy Document for PPD & Original Policy Document for PTD in case of Individual Insurance.
                                  </li>
                                  <li>
                                    Copy of Medical record with detailing of the Disability by the respective specialist physician
                                  </li>
                                  <li>
                                    Copy of medical investigations repot to support or proof the Disability.
                                  </li>
                                  <li>
                                    Proof documents where reflecting the said Disability prevents the insured member from engaging in any business, occupation or work whatsoever for remuneration or profit has continued uninterruptedly for a period of at least six months (for PTD)
                                  </li>
                                  <li>
                                    Original Certificate from respective specialist physician as a proof of irrecoverable condition, dated after initial six month (for PTD)
                                  </li>
                                  <li>
                                    Guardian Life reserve rights to obtain any information from any source and to verify any claims by independent & professional 3rd party and may call relevant any documents before final settlement.
                                  </li>
                                  <br>

                                  <strong>IMPORTANT POINTS FOR DEATH / CI / PPD / PTD CLAIMS:</strong>
                                  <br>
                                  <li>
                                    Submit your claim within allowable limit.
                                  </li>
                                  <li>
                                    Name of claimant has to be same as earlier submitted documents. Please avoid use of nick name.
                                  </li>
                                  <li>
                                    Overwriting or writing by self in any claim documents is strictly prohibited. Guardian Life reserve rights to decline total claim if it is proven that insured member has manipulated the claim documents or trying to manipulate the claim documents.
                                  </li>
                                  <li>
                                    The Company shall, where it deems necessary, seek opinion of it’s medical expert along with the Company’s appointed physician to satisfy itself that cause of death or disability mentioned in submitted documents are justified.
                                  </li>
                                  <li>
                                    Guardian Life reserve rights to obtain any information from any source and to verify any claims by independent & professional 3rd party and may call relevant any documents before final settlement.
                                  </li>
                                  <br>

                                </div>
                              </div>
                            </div>
        
                            <div class="card">
                                <div class="card-header" id="headingThree4">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree3">
                                        Claims Settlement
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordionExample2">
                                  <div class="card-body">
                                    <a href="">Download</a> Claims Settlement
                                  </div>
                                </div>
                              </div>
        
                              <div class="card">
                                <div class="card-header" id="headingThree5">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree3">
                                        Pending Claims
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample2">
                                  <div class="card-body">
                                    <a href="">Download</a> Pending Claims
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