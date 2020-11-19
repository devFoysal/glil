@extends("layouts.master")
@section("title", "Group Medical Insurance Plan")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/newsevent.png")}})"
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

<section id="corporate-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>Group Medical Insurance Plan</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 my-5">
                <div class="text-box">
                    <h5>Nowadays to lead a healthy life is very challenging considering the imbalances of family expenses. Medical insurance plans are designed to cover medical expenses in case of hospitalization either as in-patient or as an out- patient as well as critical illness. Very flexible and an affordable group medical insurance allows all the regular employees with an option to include family member (spouse & dependent children) under the proposed Medical Insurance Scheme.</h5>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="text-box">
                    <div class="accordion" id="accordionExample9">
                        <div class="card">
                            <div class="card-header" id="headingOne1">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                    IN-PATIENT TREATMENT (IPD) PLAN
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample9">
                                <div class="card-body">
                                  <p>The hospitalization Insurance Plan is designed to provide a comprehensive coverage of hospitalization treatment expenses of an insured due to illness or injury sustained during the period of coverage. Hospitalization benefit coverages are given on following categories:</p>
                                  <p>1. Daily Hospital Room Rent (Actual or Max.)</p>
                                  <p>2. ICU/CCU Limit per confinement</p>
                                  <p>3. Total Hospital Room Rent (Actual or Max.) including ICU/CCU</p>
                                  <p>4. All other In-Patient treatment expenses inclusive of surgical charges, consultation fees, medicines, medical appliances and relevant medical investigations related to the ailment and other ancillary services (excluding Room & ICU/CCU charges) maximum per disability.</p>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne2">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                    MATERNITY BENEFITS
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample9">
                                <div class="card-body">
                                  <p>Applicable for Female employee/spouse up to the age of 45 years. The maternity/obstetrical benefit is applicable for the expenses that incurred for room, board and general nursing care, special hospital services and ordinary nursing care of the baby/babies while the mother is confined to the hospital and for charges made by the physician, or registered midwife. Pregnancy shall include childbirth, miscarriage or legal abortion, including any and all complications arising there from in connection with pregnancy. Maternity benefit coverages are given on following categories:</p>
                                  <li>Normal delivery</li>
                                  <li>Caesarean/Ectopic/Extra-uterine pregnancy</li>
                                  <li>Legal abortion or miscarriage</li>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne3">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner3">
                                    OOT-PATIENT TREATMENT (OPD) PLAN INCLUDES
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample9">
                                <div class="card-body">
                                  <p>1. Doctors Consultation fees</p>
                                  <p>2. Medical Investigations fees</p>
                                  <p>3. Medicine Cost</p>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne4">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner4" aria-expanded="true" aria-controls="collapseInner4">
                                    DENTAL OUT-PATIENT TREATMENT BENEFIT INCLUDES
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner4" class="collapse" aria-labelledby="headingOne4" data-parent="#accordionExample9">
                                <div class="card-body">
                                  <p>1. Doctors Consultation fees</p>
                                  <p>2. Amalgam, Resin Plastic & Temporary/Permanent Fillings</p>
                                  <p>3. Routine Extraction</p>
                                  <p>4. Medication</p>
                                  <p>5. X-rays</p>
                                  <p>6. Root Canal Treatment</p>
                                  <p>7. Scaling & polishing (once in a year for each member)</p>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne5">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner5" aria-expanded="true" aria-controls="collapseInner5">
                                    OPTICAL OUT-PATIENT TREATMENT BENEFIT INCLUDES
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample9">
                                <div class="card-body">
                                  <p>1. Consultation</p>
                                  <p>2. Vision tests for errors of refraction</p>
                                  <p>3. Lenses and spectacles</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection