@extends("layouts.master")
@section("title", "Supports")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"
></section>

{{-- <section id="counter">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 box">
                <h5>1.1 Crore</h5>
                <p>Lives Covered</p>
            </div>
            <div class="col-md-3 box2">
                <h5>BDT 400+ Crore</h5>
                <p>Paid in Claims</p>
            </div>
            <div class="col-md-3 box3">
                <h5>97%</h5>
                <p>Claim Payout Ratio</p>
            </div>
        </div>
    </div>
</section> --}}

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

<section id="claims" class="corporate bancassurance about-us more">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h5 class="title">Media Corner</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
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
                                Plan Advisor <span></span>
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
                                Premium Payment channels <span></span>
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
                                Forms & Documents  <span></span>
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
                                Preferred Hospitals and Diagnostics <span></span>
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
                                FAQ <span></span>
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
                                Download Brouchare <span></span>
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
                                    <div class="row mx-0 border-0">
                                        <div class="col-lg-12">
                                            <h2>Guardian Plan Advisor</h2>
                                            <br>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <p>Guardian Online Plan Advisor recommends insurance plans that are right for you, based on your answers to a few simple questions.</p>
                                            <br>
                                            <p>Tell us a little about you and your insurance needs, we’ll guide to choosing the best plan for you and your family.</p>
                                            <button class="btn yellow-btn mt-5">Get Started</button>
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
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Payment Channel - Rocket</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/premium1.png")}}"
                                                alt=""
                                                class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <h2>Payment Channel - bkash</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/premium2.png")}}"
                                                alt=""
                                                class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <h2>Payment Channel - bkash</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12">
                                        <p><strong>IFIC Bank Limited</strong></p>
                                        <p>Account Name:           Guardian Life Insurance Limited</p>
                                        <p>Account Number:       1094010297041</p>
                                        <br>
                                        <p><strong>BRAC Bank Limited</strong></p>
                                        <p>Account Name:           Guardian Life Insurance Limited</p>
                                        <p>Account Number:       CD A/C No: 1501 2025 9799 6001</p>
                                        <br>
                                        <p><strong>Mutual Trust Bank Limited</strong></p>
                                        <p>Account Name:           Guardian Life Insurance Limited</p>
                                        <p>Account Number:       SND A/C No: 0002 0320 0031 78</p>
                                        <br>
                                        <p><strong>Dutch Bangla Bank Limited</strong></p>
                                        <p>Account Name:           Guardian Life Insurance Limited</p>
                                        <p>Account Number:       SND A/C No: 255 120 377</p>
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
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Download Forms & Documents</h2>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Forms/Documents</th>
                                                    <th scope="col">Download</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Health Insurance Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Policy Paid Up Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Critical Illness-MDB Claim Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Death Claim Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Health Insurance Claim Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                  <tr>
                                                    <td>Lapsed Policy Revival Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Loan Agreement</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Loan Application</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>PPD-PTD Claim Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Policy Alteration Form ( Address Change)</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Policy Alteration Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Surrender Application Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>UW amendment Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Refund Application Form</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
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
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Find your nearest Guardian Life Preferred Hospitals & Diagnostics along with the available discount.</h2>
                                        <br>

                                        <form action="" class="mb-5">
                                            <div class="row border-0">
                                                <div class="col-lg-12">
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
                                        </form>

                                        <h4>Hospital</h4>
                                        <hr>
                                        <br>
                                        <div class="accordion accordion-right" id="accordionExample9">
                                            <div class="card">
                                                <div class="card-header" id="headingOne1">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                        RAQIBUL ANWAR HOSPITAL EDUCATION AND TRAINING INSTITUTE DHAKA Ltd. (0213)  <br>
                                                        Plot # 18C, Road # 106, Gulshan - 2, Dhaka- 1212
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                      <p>Contact: Mr. Mithu</p>
                                                      <p>Mobile: 0178 769 4508</p>
                                                      <p>E-mail: rahetid2018@gmil.com</p>

                                                      <br>

                                                      <p><strong>Discount</strong></p>
                                                      <li>Pathological Tests - 30%</li>
                                                      <li>Radiology & Imaging - 25%</li>
                                                      <li>Discount obtainable in OPD services only</li>
                                                      <li>Cashless facilities available for eligible expenses of Hospitalization</li>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne2">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                        SHAHABUDDIN MEDICAL COLLEGE & HOSPITAL (0064) <br>House No. # 15 - 16, Road No. # 113/A, Gulshan - 2, Dhaka
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                        <p>Contact: Mr. Abul Khair</p>
                                                        <p>Mobile: 0171 743 9218</p>
                                                        <p>E-mail: smch@shahabuddinmedical.org</p>
  
                                                        <br>
  
                                                        <p><strong>Discount</strong></p>
                                                        <li>Pathological Tests - 30%</li>
                                                        <li>Radiology & Imaging - 25%</li>
                                                        <li>Discount obtainable in OPD services only</li>
                                                        <li>Cashless facilities available for eligible expenses of Hospitalization</li>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>

                                        <br><br>

                                        <h4>Diagnostics</h4>
                                        <hr>
                                        <br>
                                        <div class="accordion accordion-right" id="accordionExample2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne5">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner5" aria-expanded="true" aria-controls="collapseInner5">
                                                        LABAID DIAGNOSTICS  <br> House # 13/A, Road # 35, Gulshan - 2 Dhaka - 1212
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner5" class="collapse show" aria-labelledby="headingOne5" data-parent="#accordionExample2">
                                                    <div class="card-body">
                                                      <p>Mobile: 0176 666 2525</p>
                                                      <p>Phone: 02 8835981, 02 8835982 - 4</p>

                                                      <br>

                                                      <p><strong>Discount</strong></p>
                                                      <li>Pathological Tests - 15% (Except PCR & Nuclear Medicine)</li>
                                                      <li>Radiology & Imaging - 10%</li>
                                                      <li>No Cashless Facilities Available</li>
                                                      <li>FMR (Full Medical Report) services obtainable</li>
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
                                        <div style="height: 650px">
                                            <div class="col d-flex align-items-center justify-content-center h-100" style="flex-direction: column">
                                                <a href="#"><i class="fas fa-download mr-3"></i>Download</a>                                         
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
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Download Brochure</h2>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Brochures</th>
                                                    <th scope="col">Download</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Child Protection Plan</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Critical Illness</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Five Stage</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Four Stage</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Guardian Sanchay</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                  <tr>
                                                    <td>Money Back</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Ordinary Endowment Plan 01</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Ordinary Endowment Plan 02</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Pension Plan</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Single Premium Insurance Plan Investment</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Three Stage Plan</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>bKash Rocket</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Push pull</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Tax Rebate Leaflet</td>
                                                    <td class=""><a href="#"><i class="fas fa-download"></i></a></td>
                                                  </tr>
                                                </tbody>
                                              </table>
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

{{-- <section id="video-section">
    <div class="container">
        <div class="row text-center">
            <h5>Video Gallery</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe  src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/54ijdoYOERE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/aaalVEjNrgA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                    <iframe width="360" height="203" src="https://www.youtube.com/embed/NOnWUHs5ZtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection