@extends("layouts.master")
@section("title", "Faq Page")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"
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

<section id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h3>FAQ</h3>
            </div>
            <div class="col-lg-8">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Type what you’re searching" aria-label="Type what you’re searching" aria-describedby="button-addon2">
                    <div class="">
                      <button class="btn btn-over" type="button" id="button-addon2">Search</button>
                    </div>
                </div>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Topic 1</a>
                    </li>
                    <li>
                        <img src={{asset('assets/img/line2.png')}} alt="">
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Topic 2</a>
                    </li>
                    <li>
                        <img src={{asset('assets/img/line2.png')}} alt="">
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Topic 3</a>
                    </li>
                    <li>
                        <img src={{asset('assets/img/line2.png')}} alt="">
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false">Topic 4</a>
                    </li>
                  </ul>
                  <h4>All questions</h4>
                  <div class="px-3 tab-content-outer">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                        <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="tab-faq">
                                <div class="col">
                                    <div class="accordion" id="accordionExample2">
                                        <div class="card">
                                          <div class="card-header" id="headingOne2">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                1. What is Cashless Hospitalization.? 
                                              </button>
                                            </h2>
                                          </div>
                                      
                                          <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                Cashless Hospitalization is a special privilege or value added service offered by GLIL. You can enjoy hospital expenses in advance from your available limits as GLIL pays the bills directly to hospitals. You have to pay only for the non-covered items & expenses exceeding your limits at the time of discharge from hospital.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                          <div class="card-header" id="headingTwo2">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                2.What are the procedures to avail Cashless Hospitalization?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
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
                                          <div class="card-header" id="headingThree2">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                3. Will I get cashless facility in every hospitals?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                No. We can arrange cashless hospitalization only in our enlisted/preferred hospitals.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading42">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse42" aria-expanded="false" aria-controls="collapseThree22">
                                                    4. From where I can know the details of your listed/preferred 
                                                    hospitals?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse42" class="collapse" aria-labelledby="heading42" data-parent="#accordionExample2">
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
                                            <div class="card-header" id="heading52">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse52" aria-expanded="false" aria-controls="collapseThree2">
                                                    5. In which cases GLIL deny to provide cashless facility?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse52" class="collapse" aria-labelledby="heading52" data-parent="#accordionExample2">
                                              <div class="card-body">
                                                In case of non-covered diseases or any doubtful hospitalization where every details need to be checked; we may not provide you the cashless facility. In those cases, you have to pay total hospital bill & later send us your claim along with claim form & supporting documents.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading62">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse62" aria-expanded="false" aria-controls="collapseThree2">
                                                    6. Why I had to pay 10,000/- in hospital counter at the time of discharge though I was under “Cashless Hospitalization”?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse62" class="collapse" aria-labelledby="heading62" data-parent="#accordionExample2">
                                              <div class="card-body">
                                                We instructed you to deposit a lump sum money on assumption at the time of discharge. As there were excess costs in the bill exceeding your limits in room rent, service charge etc. And there were costs of some items those are not covered by insurance such as: non-medical items, food items, non-covered medicines etc.
                                                Upon final settlement of the bill, the excess deposited amount (if any) would be refunded to your bank account or you may have to deposit more money to us if the amount is less than your non-payables.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading72">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse72" aria-expanded="false" aria-controls="collapseThree2">
                                                    7. What would happen if I forget to ask for the cashless facility to GLIL in time & knock them at the time of discharge?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse72" class="collapse" aria-labelledby="heading72" data-parent="#accordionExample2">
                                              <div class="card-body">
                                                We highly discourage this type of very late communication. Because, you have to wait for hours till the procedures from our end is completed. In worst case scenario, even we may not be able to provide you the cashless facility.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading82">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse82" aria-expanded="false" aria-controls="collapseThree2">
                                                    8. While enjoying cashless facility for a particular disease or disability, should I perform consultation & tests for my other body parts? Such as, I got admitted for gall bladder operation, should I perform my neurological, kidney, eye etc. checkups?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse82" class="collapse" aria-labelledby="heading82" data-parent="#accordionExample2">
                                              <div class="card-body">
                                                Insurance covers only the disability for which you are admitted & general checkup is not covered. We would cover the consequence of the disability/disease for which you are admitted into hospital. But non-relevant tests or consultation or medications with the admission cause have to be borne by you & you have to deposit this excess amount at the time of discharge
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading92">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse92" aria-expanded="false" aria-controls="collapseThree2">
                                                    9. What is the claim procedure & your official address?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse92" class="collapse" aria-labelledby="heading92" data-parent="#accordionExample2">
                                              <div class="card-body">
                                                After treatment, you will have to collect the claim form from our website/ your office and fill it up properly with necessary documents and submit it to GLIL. You can send your claim through courier or deposit it to your HR if our messenger use to pick up claims from your office.
                                                <br>
                                                Our address is: Guardian Life Insurance Limited. Police Plaza – Concord, Tower-2, Plot-2, Road-144, Gulshan Avenue, Dhaka -1212. Call Center :16622 . Web:  <a href="www.guardianlife.com.bd">www.guardianlife.com.bd</a>
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading102">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse102" aria-expanded="false" aria-controls="collapseThree2">
                                                    10. From where can I get the claim form?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionExample2">
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
                        <div class="tab-pane fade show" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="tab-faq">
                                <div class="col">
                                    <div class="accordion" id="accordionExample3">
                                        <div class="card">
                                          <div class="card-header" id="headingOne3">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                                1. What is Cashless Hospitalization..? 
                                              </button>
                                            </h2>
                                          </div>
                                      
                                          <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordionExample3">
                                            <div class="card-body">
                                                Cashless Hospitalization is a special privilege or value added service offered by GLIL. You can enjoy hospital expenses in advance from your available limits as GLIL pays the bills directly to hospitals. You have to pay only for the non-covered items & expenses exceeding your limits at the time of discharge from hospital.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                          <div class="card-header" id="headingTwo3">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                2.What are the procedures to avail Cashless Hospitalization?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordionExample3">
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
                                          <div class="card-header" id="headingThree3">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                                3. Will I get cashless facility in every hospitals?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample3">
                                            <div class="card-body">
                                                No. We can arrange cashless hospitalization only in our enlisted/preferred hospitals.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading43">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse43" aria-expanded="false" aria-controls="collapseThree3">
                                                    4. From where I can know the details of your listed/preferred 
                                                    hospitals?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse43" class="collapse" aria-labelledby="heading43" data-parent="#accordionExample3">
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
                                            <div class="card-header" id="heading53">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse53" aria-expanded="false" aria-controls="collapseThree3">
                                                    5. In which cases GLIL deny to provide cashless facility?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse53" class="collapse" aria-labelledby="heading53" data-parent="#accordionExample3">
                                              <div class="card-body">
                                                In case of non-covered diseases or any doubtful hospitalization where every details need to be checked; we may not provide you the cashless facility. In those cases, you have to pay total hospital bill & later send us your claim along with claim form & supporting documents.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading63">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse63" aria-expanded="false" aria-controls="collapseThree3">
                                                    6. Why I had to pay 10,000/- in hospital counter at the time of discharge though I was under “Cashless Hospitalization”?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse63" class="collapse" aria-labelledby="heading63" data-parent="#accordionExample3">
                                              <div class="card-body">
                                                We instructed you to deposit a lump sum money on assumption at the time of discharge. As there were excess costs in the bill exceeding your limits in room rent, service charge etc. And there were costs of some items those are not covered by insurance such as: non-medical items, food items, non-covered medicines etc.
                                                Upon final settlement of the bill, the excess deposited amount (if any) would be refunded to your bank account or you may have to deposit more money to us if the amount is less than your non-payables.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading73">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse73" aria-expanded="false" aria-controls="collapseThree3">
                                                    7. What would happen if I forget to ask for the cashless facility to GLIL in time & knock them at the time of discharge?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse73" class="collapse" aria-labelledby="heading73" data-parent="#accordionExample3">
                                              <div class="card-body">
                                                We highly discourage this type of very late communication. Because, you have to wait for hours till the procedures from our end is completed. In worst case scenario, even we may not be able to provide you the cashless facility.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading83">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse83" aria-expanded="false" aria-controls="collapseThree3">
                                                    8. While enjoying cashless facility for a particular disease or disability, should I perform consultation & tests for my other body parts? Such as, I got admitted for gall bladder operation, should I perform my neurological, kidney, eye etc. checkups?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse83" class="collapse" aria-labelledby="heading83" data-parent="#accordionExample3">
                                              <div class="card-body">
                                                Insurance covers only the disability for which you are admitted & general checkup is not covered. We would cover the consequence of the disability/disease for which you are admitted into hospital. But non-relevant tests or consultation or medications with the admission cause have to be borne by you & you have to deposit this excess amount at the time of discharge
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading93">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse93" aria-expanded="false" aria-controls="collapseThree3">
                                                    9. What is the claim procedure & your official address?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse93" class="collapse" aria-labelledby="heading93" data-parent="#accordionExample3">
                                              <div class="card-body">
                                                After treatment, you will have to collect the claim form from our website/ your office and fill it up properly with necessary documents and submit it to GLIL. You can send your claim through courier or deposit it to your HR if our messenger use to pick up claims from your office.
                                                <br>
                                                Our address is: Guardian Life Insurance Limited. Police Plaza – Concord, Tower-2, Plot-2, Road-144, Gulshan Avenue, Dhaka -1212. Call Center :16622 . Web:  <a href="www.guardianlife.com.bd">www.guardianlife.com.bd</a>
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading103">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse103" aria-expanded="false" aria-controls="collapseThree3">
                                                    10. From where can I get the claim form?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionExample3">
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
                        <div class="tab-pane fade show" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                            <div class="tab-faq">
                                <div class="col">
                                    <div class="accordion" id="accordionExample4">
                                        <div class="card">
                                          <div class="card-header" id="headingOne4">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                                1. What is Cashless Hospitalization...? 
                                              </button>
                                            </h2>
                                          </div>
                                      
                                          <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne4" data-parent="#accordionExample4">
                                            <div class="card-body">
                                                Cashless Hospitalization is a special privilege or value added service offered by GLIL. You can enjoy hospital expenses in advance from your available limits as GLIL pays the bills directly to hospitals. You have to pay only for the non-covered items & expenses exceeding your limits at the time of discharge from hospital.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                          <div class="card-header" id="headingTwo4">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                                2.What are the procedures to avail Cashless Hospitalization?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo4" data-parent="#accordionExample4">
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
                                          <div class="card-header" id="headingThree4">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                                3. Will I get cashless facility in every hospitals?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordionExample4">
                                            <div class="card-body">
                                                No. We can arrange cashless hospitalization only in our enlisted/preferred hospitals.
                                            </div>
                                          </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading44">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse44" aria-expanded="false" aria-controls="collapseThree4">
                                                    4. From where I can know the details of your listed/preferred 
                                                    hospitals?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse44" class="collapse" aria-labelledby="heading44" data-parent="#accordionExample4">
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
                                            <div class="card-header" id="heading54">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse54" aria-expanded="false" aria-controls="collapseThree4">
                                                    5. In which cases GLIL deny to provide cashless facility?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse54" class="collapse" aria-labelledby="heading54" data-parent="#accordionExample4">
                                              <div class="card-body">
                                                In case of non-covered diseases or any doubtful hospitalization where every details need to be checked; we may not provide you the cashless facility. In those cases, you have to pay total hospital bill & later send us your claim along with claim form & supporting documents.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading64">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse64" aria-expanded="false" aria-controls="collapseThree4">
                                                    6. Why I had to pay 10,000/- in hospital counter at the time of discharge though I was under “Cashless Hospitalization”?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse64" class="collapse" aria-labelledby="heading64" data-parent="#accordionExample4">
                                              <div class="card-body">
                                                We instructed you to deposit a lump sum money on assumption at the time of discharge. As there were excess costs in the bill exceeding your limits in room rent, service charge etc. And there were costs of some items those are not covered by insurance such as: non-medical items, food items, non-covered medicines etc.
                                                Upon final settlement of the bill, the excess deposited amount (if any) would be refunded to your bank account or you may have to deposit more money to us if the amount is less than your non-payables.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading74">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse74" aria-expanded="false" aria-controls="collapseThree4">
                                                    7. What would happen if I forget to ask for the cashless facility to GLIL in time & knock them at the time of discharge?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse74" class="collapse" aria-labelledby="heading74" data-parent="#accordionExample4">
                                              <div class="card-body">
                                                We highly discourage this type of very late communication. Because, you have to wait for hours till the procedures from our end is completed. In worst case scenario, even we may not be able to provide you the cashless facility.
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading84">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse84" aria-expanded="false" aria-controls="collapseThree4">
                                                    8. While enjoying cashless facility for a particular disease or disability, should I perform consultation & tests for my other body parts? Such as, I got admitted for gall bladder operation, should I perform my neurological, kidney, eye etc. checkups?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse84" class="collapse" aria-labelledby="heading84" data-parent="#accordionExample4">
                                              <div class="card-body">
                                                Insurance covers only the disability for which you are admitted & general checkup is not covered. We would cover the consequence of the disability/disease for which you are admitted into hospital. But non-relevant tests or consultation or medications with the admission cause have to be borne by you & you have to deposit this excess amount at the time of discharge
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading94">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse94" aria-expanded="false" aria-controls="collapseThree4">
                                                    9. What is the claim procedure & your official address?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse94" class="collapse" aria-labelledby="heading94" data-parent="#accordionExample4">
                                              <div class="card-body">
                                                After treatment, you will have to collect the claim form from our website/ your office and fill it up properly with necessary documents and submit it to GLIL. You can send your claim through courier or deposit it to your HR if our messenger use to pick up claims from your office.
                                                <br>
                                                Our address is: Guardian Life Insurance Limited. Police Plaza – Concord, Tower-2, Plot-2, Road-144, Gulshan Avenue, Dhaka -1212. Call Center :16622 . Web:  <a href="www.guardianlife.com.bd">www.guardianlife.com.bd</a>
                                              </div>
                                            </div>
                                        </div>
    
                                        <div class="card">
                                            <div class="card-header" id="heading104">
                                              <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse104" aria-expanded="false" aria-controls="collapseThree4">
                                                    10. From where can I get the claim form?
                                                </button>
                                              </h2>
                                            </div>
                                            <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionExample4">
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
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>

@endsection