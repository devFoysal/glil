@extends("layouts.master")
@section("title", "Corporate Page")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/corporateSolution/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Group Insurance </p>
                <h1>
                    Corporate 
                    <span> Solutions </span>
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
                                    Why Gurdian <span></span>
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
                                    Benefits <span></span>
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
                                    Group Term Life <span></span>
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
                                    Critical Illness Benefit <span></span>
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
                                Group Medical Insurance Plan <span></span>
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
                                Group Personal Accident Benefit <span></span>
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
                                                Group life insurance helps to offer multiple benefits to a standard group of individuals in one go. Group Insurance plan is hassle free and customized mechanism to cover a group of people under a single master life insurance policy. Group insurance ensures financial security to the family in the event of unfortunate group members sickness, accident, death or other hospital cares such as maternity related facilities.
                                            </p>
    
                                            <p>
                                                The Group Insurance is a comprehensive coverage that can be offered to employees and the plan can be customized as per the need of the group. The employer can offer their group members either uniform cover or varied cover. Benefits are not only for insured, but also for their dependents such as spouse, children, and parents as well. Group insurance is appropriate for all kinds of small and large organizations having at least 10 employees such as associations, banks, financial institutions etc. to provide a systematic financial security for the employees that work as a motivational tool which leades to higher employee retention and productivity.
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
                                            <p>Guardian Life is backed up by very renowned and very trusted business houses in Bangladesh viz., Apex, BRAC & Square Group.</p>
                                            <p>-  Large group insurance portfolio in the country.</p>
                                            <p>- Preferential admission facilities in our designated Hospitals by showing Health Card.</p>
                                            <p>- Easy Claim Submission: We will be sending someone to the particular organization to collect all claim related document.</p>
                                            <p>- Claim Tracking System: You will receive SMS confirmation on claim intimation and settlement stages. From our designated web portal clients can see their current claim’s status easily and also information regarding his/her last three settled claim.</p>
                                            <p>- Cashless treatment facilities. It is under hospitalization coverage in our registered hospitals.</p>
                                            <p>- Highest premium earner among 4th generation life insurance companies in the country.</p>
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
                                            <p>- Death Benefits (Natural/Accidental Death, Permanent Total/Partial Disability).</p>
                                            <p>- Critical Illness Benefit – covering 18 major diseases. (Please refer below).</p>
                                            <p>- IPD Benefits (Hospitalization Benefits).</p>
                                            <p>- OPD Benefits (Out Patient Department Benefits).</p>
                                            <p>- Maternity Benefits.</p>
                                            <p>-  OPD Dental Benefits</p>
                                            <p>- OPD Optical Benefits</p>
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
                                            <p>The more financial security employee has, the more motivated they remain. Through group term insurance an organization can mitigate the level of uncertainty of their employees and for that employees become more loyal to the organization when they get financial supports in time of their needs from the organization they work for. Conversely an employer/organization feels better when they can stand beside their employees through group term insurance providing a sense of good governance in the organization.</p>
                                            <div class="accordion accordion-right" id="accordionExample8">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne1">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                            LIFE COVERAGE
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample8">
                                                        <div class="card-body">
                                                          <p>If an insured member dies (except suicidal death, in first year of coverage of a member and HIV/AIDS-related diseases), Guardian Life Insurance upon receipt of written proof of such death due to sickness or accident, will pay the organization the sum insured in respect of the said insured member within 7 days.</p>
                                                        </div>
                                                      </div>
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
                                    <div class="">
                                        <div class="col">
                                            <p>Critical Illness is a special supplementary scheme designed for employees and for their family members with a view to provide financial support and protection in the event of a member is diagnosed to have one of the diseases mentioned below, but not until at least three months have been elapsed since the commencement. The coverage amount is provided upon being diagnosed with the following 18 critical diseases.</p>
                                            <div class="accordion accordion-right" id="accordionExample7">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne1">
                                                        <h2 class="mb-0 ml-3">
                                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                            CRITICAL ILLNESS INSURANCE BENEFIT -LIST OF DISEASES
                                                          </button>
                                                        </h2>
                                                      </div>
                                              
                                                      <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample7">
                                                        <div class="card-body">
                                                          <p>1. Cancer</p>
                                                          <p>2. Heart Attack (Myocardial Infarction)</p>
                                                          <p>3. Stroke</p>
                                                          <p>4. Coronary Artery (Bypass) Surgery</p>
                                                          <p>5. Kidney Failure (End Stage Renal Disease)</p>
                                                          <p>6. Major Organ Transplantation</p>
                                                          <p>7. Paralysis</p>
                                                          <p>8. Multiple Sclerosis</p>
                                                          <p>9. Loss of Limbs.</p>
                                                          <p>10. Blindness/ Loss of Sight</p>
                                                          <p>11. Heart Valve Replacement</p>
                                                          <p>12. Surgery of Aorta</p>
                                                          <p>13. Aplastic Anemia</p>
                                                          <p>14. Benign Brain Tumor</p>
                                                          <p>15. Chronic Lung Disease/End Stage Lung Disease</p>
                                                          <p>16. Deafness/Loss of Hearing</p>
                                                          <p>17. Major Head Trauma</p>
                                                          <p>18. Loss of Speech</p>
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
                                            <p>Nowadays to lead a healthy life is very challenging considering the imbalances of family expenses. Medical insurance plans are designed to cover medical expenses in case of hospitalization either as in-patient or as an out- patient as well as critical illness. Very flexible and an affordable group medical insurance allows all the regular employees with an option to include family member (spouse & dependent children) under the proposed Medical Insurance Scheme.</p>
                                            <div class="accordion accordion-right" id="accordionExample9">
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
    
                                {{-- tab 7 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-7"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-7"
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
                                                        ACCIDENTAL DEATH BENEFIT (ADB)
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample10">
                                                    <div class="card-body">
                                                      <p>Accidental death benefit shall pay to the employer (organization) the sum insured in respect of the said insured member in addition to death benefit if an insured member dies directly from an accident caused through external and violent, within 7 days from the date of occurrence.</p>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne2">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                        PERMANENT AND TOTAL DISABILITY
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample10">
                                                    <div class="card-body">
                                                      <p>Permanent and Total Disability coverage shall pay to the organization the sum insured in respect of said insured employee in case of permanent and total disability caused directly by an accident from bodily injury, which prevents the insured member from engaging in any business, occupation or work whatsoever for remuneration or profit and which disability has continued uninterruptedly for a period of at least six months and has been certified to be incurable by a physician approved by the company.</p>
                                                      <P>In the interpretation of this definition the Company will, however, recognize as Total and Permanent Disability the entire and irrevocable loss of:</P>
                                                      <P>1. both eyes</P>
                                                      <P>2. both hands above the wrist,</P>
                                                      <P>3. both feet above the ankle,</P>
                                                      <P>4. one hand above the wrist and one foot above the ankle,</P>
                                                      <P>5. one eye and one hand above the wrist,</P>
                                                      <P>6. one eye and one foot above the ankle.</P>
                                                      <P>If an insured Member becoming totally and permanently disabled die within 365 days from the date of such disablement the Company shall pay the sum insured in respect of the said insured employee.</P>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne3">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner3">
                                                        PERMANENT AND PERTIAL DISABILITY
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample10">
                                                    <div class="card-body">
                                                      <P>Permanent and Partial Disability coverage will be paid to the employer as per the benefit specified in the following schedule where applicable in respect of the said insured employee in case of a permanent partial disablement caused directly by an accident. However, one sum namely the larger sum will be paid for multiple injuries resulting from one accident:</P>
                                                      <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">Sl No.</th>
                                                                <th scope="col">Description of injury</th>
                                                                <th scope="col">% of loss earing capacity</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <th scope="row">1</th>
                                                                <td>Loss of both hands or amputation from higher parts	</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">2</th>
                                                                <td>Loss of 1 (one) hand and one leg</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">3</th>
                                                                <td>Loss of sight of both eyes to such an extent as to render the claimant unable to perform any work for which eye-sight is essential</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">4</th>
                                                                <td>Amputation of both legs or thighs, or amputation of one leg or thigh and loss of any leg</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">5</th>
                                                                <td>Severe facial disfigurement</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">6</th>
                                                                <td>Absolute deafness</td>
                                                                <td>100</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">7</th>
                                                                <td>Amputation up to shoulder joint</td>
                                                                <td>80</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">8</th>
                                                                <td>Amputation below shoulder with stump less than 20 centimeters from tip of acromion.</td>
                                                                <td>70</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">9</th>
                                                                <td>Amputation from 20 centimeters from tip of acromion to less than 11 centimeters below tip of olecranon</td>
                                                                <td>60</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">10</th>
                                                                <td>Loss of a hand or of the thumb and four fingers of one hand or amputation from 20 centimeters below tip of olecranon</td>
                                                                <td>60</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">11</th>
                                                                <td>Loss of thumb</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">12</th>
                                                                <td>Loss of thumb and its metacarpal bone</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">13</th>
                                                                <td>Loss of 4 (four) fingers of 1 (one) hand</td>
                                                                <td>50</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">14</th>
                                                                <td>Loss of 3 (three) fingers of 1 (one) hand</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">15</th>
                                                                <td>Loss of 2 (two) fingers of 1 (one) hand</td>
                                                                <td>20</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">16</th>
                                                                <td>Loss of terminal phalanx of thumb</td>
                                                                <td>10</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">17</th>
                                                                <td>Amputation of both feet</td>
                                                                <td>90</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">18</th>
                                                                <td>Amputation through both feet proximal to the metatarsophalangeal joint</td>
                                                                <td>80</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">19</th>
                                                                <td>Loss of all toes of both feet through the metatarsophalangeal joint</td>
                                                                <td>40</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">20</th>
                                                                <td>Loss of all toes of both feet from proximal to the proximal inter- phalangeal joint</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">21</th>
                                                                <td>Loss of all toes of both feet from distal to the proximal inter- phalangeal joint</td>
                                                                <td>20</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">22</th>
                                                                <td>Amputation from lower part of the hip</td>
                                                                <td>90</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">23</th>
                                                                <td>Amputation from lower part of the hip with stump exceeding 12.5 centimeters measured from tip of great trochanter, but not beyond middle thigh</td>
                                                                <td>80</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">24</th>
                                                                <td>Amputation from lower part of the hip with stump not exceeding 12.5 centimeters measured from tip of great trochanter</td>
                                                                <td>70</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">25</th>
                                                                <td>Amputation from middle thigh to 9 centimeters below knee</td>
                                                                <td>60</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">26</th>
                                                                <td>Amputation below knee with stump exceeding 9 centimeters but not exceeding 12.5 centimeters</td>
                                                                <td>50</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">27</th>
                                                                <td>Amputation below knee with stump exceeding 12.5 centimeters</td>
                                                                <td>40</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">28</th>
                                                                <td>Amputation of 1 (one) foot resulting in end-bearing</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">29</th>
                                                                <td>Amputation of one foot from proximal to the metatarso-phalangeal joint</td>
                                                                <td>30</td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">30</th>
                                                                <td>Loss of all toes of 1 (one) foot through the metatarso-phalangeal joint</td>
                                                                <td>20</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                      </div>

                                                      <p>Permanent disabilities that are not mentioned above shall be compensated in accordance with their severity as compared to those listed. Permanent, partial or total loss of the use of a limb shall be deemed to be same as permanent, partial or total loss of the said limb. No indemnity is payable for any pre-existing degree of disablement and if further injury occurs, only the difference between the condition prior to and after current injury shall be considered.</p>
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