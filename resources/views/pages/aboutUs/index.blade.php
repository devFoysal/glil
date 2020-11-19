@extends("layouts.master")
@section("title", "About Us")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"
></section>

<section id="counter">
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

<section id="claims" class="corporate bancassurance about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h5 class="title">About Us</h5>
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
                                Who We Are <span></span>
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
                                Our Chairman <span></span>
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
                                Shareholders  <span></span>
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
                                Board Of Directors <span></span>
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
                                Management Team <span></span>
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
                                Stuff List <span></span>
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
                                Mission & Vision <span></span>
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
                                Citizen Charter <span></span>
                                </a>

                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab9"
                                    data-toggle="pill"
                                    href="#v-pills-9"
                                    role="tab"
                                    aria-controls="#v-pills-9"
                                    aria-selected="true"
                                >
                                Core values <span></span>
                                </a>

                                <a
                                    class="nav-link"
                                    id="v-pills-home-tab10"
                                    data-toggle="pill"
                                    href="#v-pills-10"
                                    role="tab"
                                    aria-controls="#v-pills-10"
                                    aria-selected="true"
                                >
                                Milestone <span></span>
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
                                        <div class="col-lg-7">
                                            <h2>Guardian Life Insurance Limited</h2>
                                            <p>Guardian Life Insurance was established in January 2014 and has already managed to achieve an admirable position in the Insurance Industry and aims to achieve much higher standards in the coming years. Insurance is one way of being prepared for the worst; it offers the surety that the economic part of the pain will be taken care of, Guardian Life Insurance makes every effort required to deliver the best to its customers by providing them with world class insurance and outstanding customer service.  They have begun their journey with the motive of offering their customers a healthier, secure and more hopeful future.</p>
                                            <br><br>
                                            <h2>Guardian’s Values</h2>
                                            <div
                                            id="carouselExampleControls1"
                                            class="carousel slide"
                                            data-ride="carousel"
                                        >
                                            <div class="carousel-inner">
                                               
                                                        <div
                                                            class="carousel-item active"
                                                        >
                                                            <div
                                                                class="col"
                                                                
                                                            >
                                                                <div class="card">
                                                                    <div class="card-body p-0 pb-3">
                                                                        <p>
                                                                            “The Sponsors of the company, BRAC, Apex and Square are known for good governance and reliable services and we are here to bring a positive change in this industry by sharing our experience”
                                                                        </p>
                                                                        <p>Tapan Chowdhury - Square</p>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <div
                                                                class="col"
                                                                
                                                            >
                                                                <div class="card">
                                                                    <div class="card-body p-0 pb-3">
                                                                        <p>
                                                                            “The Sponsors of the company, BRAC, Apex and Square are known for good governance and reliable services and we are here to bring a positive change in this industry by sharing our experience”
                                                                        </p>
                                                                        <p>Tapan Chowdhury - Square</p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>                                              
                                                        </div>

                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <div
                                                                class="col"
                                                                
                                                            >
                                                                <div class="card">
                                                                    <div class="card-body p-0 pb-3">
                                                                        <p>
                                                                            “The Sponsors of the company, BRAC, Apex and Square are known for good governance and reliable services and we are here to bring a positive change in this industry by sharing our experience”
                                                                        </p>
                                                                        <p>Tapan Chowdhury - Square</p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>                                              
                                                        </div>

                                                        <div
                                                            class="carousel-item"
                                                        >
                                                            <div
                                                                class="col"
                                                                
                                                            >
                                                                <div class="card">
                                                                    <div class="card-body p-0 pb-3">
                                                                        <p>
                                                                            “The Sponsors of the company, BRAC, Apex and Square are known for good governance and reliable services and we are here to bring a positive change in this industry by sharing our experience”
                                                                        </p>
                                                                        <p>Tapan Chowdhury - Square</p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>                                              
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls1"
                                                role="button"
                                                data-slide="prev"
                                            >
                                                <span
                                                    class="carousel-control-prev-icon"
                                                    aria-hidden="true"
                                                ></span>
                                                <span class="sr-only">
                                                    Previous
                                                </span>
                                            </a>
                                            <a
                                                class="carousel-control-next"
                                                href="#carouselExampleControls1"
                                                role="button"
                                                data-slide="next"
                                            >
                                                <span
                                                    class="carousel-control-next-icon"
                                                    aria-hidden="true"
                                                ></span>
                                                <span class="sr-only">
                                                    Next
                                                </span>
                                            </a>
                                        </div>
                                            
                                        </div>
                                        <div class="col-lg-5 mt-5 mt-lg-0">
                                            <iframe src="https://www.youtube.com/embed/BaO2KvaMYuM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <h6>Our Sponsors:</h6>
                                            <div class="images">
                                                <img src="{{asset("assets/img/about/s1.png")}}" alt="" class="img-1">
                                                <img src="{{asset("assets/img/about/s2.png")}}" alt="" class="img-2">
                                                <img src="{{asset("assets/img/about/s3.png")}}" alt="" class="img-3">
                                            </div>
                                            
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
                                            <h2>Message From Chairman</h2>
                                            <p>Guardian Life Insurance Limited is here to radically change the traditional approach to Life Insurance, injecting new energy, vitality and professionalism into our relationship with our potential customers. We wish to establish new paradigm of commitment, professionalism, integrity, and dignity in the provision of security for the future of our client and their loved ones. This is our firm commitment. The customers will be the principal stakeholders of Guardian, members of the Guardian Life Insurance Limited.</p>                                     
                                            <p>As you know, the chief sponsors of this company, namely BRAC, Square and Apex are market leaders in their own fields. These giants of the industry have long grown undeniable brand heritage. Besides, the company has 3 (three) foreign and 2 (two) local private acute investors. All of these companies are renowned for their good governance and it is only fitting that a life insurance company being sponsored by them will walk in the same direction. Guardian Life also has the unique vision of spreading the benefits of insurance to all the sectors of the society, and that is why the company is introducing three different category products for three different target markets. The company recognizes social development as a core bottom line target and is striving to achieve the tag of a corporate social citizen, a movement that will improve the industry for the better.</p>
                                            <p>The little sapling we planted today with all of your blessings will become the giant tree under whose shade the Guardian family will find the strength and courage to meet every adversity with the insurance of our constant support.</p>
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
                                            <h2>Shareholders</h2>
                                            <p>The leading institutions and individual of the country have continuously been bestowing their confidence upon us and we thrive to provide the best output they expect. Shareholding structure of GLIL as per the Audited Account 2019.</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                      <tr>
                                                        <th scope="col">SL</th>
                                                        <th scope="col">Name of Shareholders</th>
                                                        <th scope="col">No. of Shares</th>
                                                        <th scope="col">% of Shareholdings</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Ayesha Abed Foundation</td>
                                                        <td>1,444,443</td>
                                                        <td>4.29</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">2</th>
                                                        <td>Brac Foundation</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">3</th>
                                                        <td>RSA Capital Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">4</th>
                                                        <td>Square Fashion Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>4.29</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">5</th>
                                                        <td>Managewell Holdings Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">6</th>
                                                        <td>Managewell Media Ltd.</td>
                                                        <td>956,228</td>
                                                        <td>2.84</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">7</th>
                                                        <td>Fidelity Investment Trade Pte Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">8</th>
                                                        <td>Capital Fair Holdings Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">9</th>
                                                        <td>Millennium Capital Investment Pte Ltd.</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">10</th>
                                                        <td>Mr. Syed Nasim Manzur</td>
                                                        <td>3,367,000</td>
                                                        <td>10.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">11</th>
                                                        <td>Mr. Dilip Kajuri</td>
                                                        <td>722,222</td>
                                                        <td>2.15</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">12</th>
                                                        <td>Mr. Abdul Monem Bhuiyan</td>
                                                        <td>722,221</td>
                                                        <td>2.14</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">13</th>
                                                        <td>Mr. Kazi Mahmood Sattar</td>
                                                        <td>1,444,443</td>
                                                        <td>2.14</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">14</th>
                                                        <td>Mr. Charles C.R. Patra</td>
                                                        <td>1,444,443</td>
                                                        <td>2.14</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">15</th>
                                                        <td>Shahed Aziz</td>
                                                        <td>-</td>
                                                        <td>2.14</td>
                                                      </tr>
                                                      <tr>
                                                        <th colspan="2" scope="row">Total Share</th>
                                                        <td>33,670,000</td>
                                                        <td>100</td>
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
                                        <div class="col-12">
                                            <h2>Board Of Directors</h2>
                                            <p class="mb-4">The leading institutions and individual of the country have continuously been bestowing their confidence upon us and we thrive to provide the best output they expect. Shareholding structure of GLIL as per the Audited Account 2019.</p>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("assets/img/about/d1.png")}}" alt="" class="img-fluid">
                                            <div class="pt-3">
                                                <p> <strong>Mr. Samuel S Chowdhury</strong> </p>
                                                <p>Chairman</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("assets/img/about/d2.png")}}" alt="" class="img-fluid">
                                            <div class="pt-3">
                                                <p> <strong>Mr. David James Howard Griffiths</strong> </p>
                                                <p>Director</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("assets/img/about/d3.png")}}" alt="" class="img-fluid">
                                            <div class="pt-3">
                                                <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                                <p>Director</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <img src="{{asset("assets/img/about/d1.png")}}" alt="" class="img-fluid">
                                            <div class="pt-3">
                                                <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                                <p>Director</p>
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
                                <div class="row mx-0 border-0">
                                    <div class="col-12">
                                        <h2>Management Team</h2>
                                        <p class="mb-4">The leading institutions and individual of the country have continuously been bestowing their confidence upon us and we thrive to provide the best output they expect. Shareholding structure of GLIL as per the Audited Account 2019.</p>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d1.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Samuel S Chowdhury</strong> </p>
                                            <p>Chairman</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d2.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. David James Howard Griffiths</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d3.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d1.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d2.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d3.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d1.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d2.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <img src="{{asset("assets/img/about/d3.png")}}" alt="" class="img-fluid">
                                        <div class="pt-3">
                                            <p> <strong>Mr. Syed Akthar Hasan Uddin</strong> </p>
                                            <p>Director</p>
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
                                    <div style="height: 650px">
                                        <div class="col d-flex align-items-center justify-content-center h-100" style="flex-direction: column">
                                            <p><strong>Guardian Life Insurance Limited Staff List</strong></p>
                                            <a href="">Click Here to Download</a>                                        
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
                                            <h2>Vision</h2>
                                            <p>To help our valued policy holders in building a better and safer future and enjoy peace of mind through providing world-class life insurance products and customer-service experiences.</p>
                                            <br><br>

                                            <h2>Mission</h2>
                                            <p>1. To provide our valuable customers with a proactive insurance plans with the finest quality at the most competent prices possible.</p>
                                            <p>2. To build long term relationships with our significant policy holders by providing maximum health benefits and proper risk management.</p>
                                            <p>3. To help our customers make the best decisions for their life changing decisions. The Guardian Life team ensures to perform their duties with the highest level of integrity and professionalism by maintaining an uncompromised devotion to our values bringing our customers, their families and communities a better future.</p>
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
                                            <div style="height: 650px">
                                                <div class="col d-flex align-items-center justify-content-center h-100" style="flex-direction: column">
                                                    <a href="">Citizen Charter</a>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 9 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-9"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-9"
                                >
                                    <div class="">
                                        <div class="col">
                                            <h2>Core Values</h2>
                                                    <p><strong>Integrity and Professionalism:</strong> All members of the Guardian Life Team are accustomed to performing their duties with the highest levels of integrity and professionalism.</p>
                                                    <br>

                                                    <p><strong>Lifelong relationships:</strong> Guardian Life aspires to build and maintain a lifelong relationship with their clients by providing top class insurance services to their clients are rest assured.</p>
                                                    <br> 

                                                    <p><strong>Putting the customers first:</strong> Guardian Life is a customer focused company where the customers are the topmost priority. We produce the most innovative products and offer solutions customized to our client’s needs and life goals. We achieve this by analyzing our client’s financial objectives and specified needs, develop an appropriate financial solution and help them implement their plans. Lastly, we review and monitor progress on a regular basis to support their desire for life-long security.</p>
                                                    <br>

                                                    <p><strong>Respect one another:</strong> Being professionals we strongly believe in respecting one another.</p>
                                                    <br>
                                                    
                                                    <p><strong>To be regarded as the best Insurance Providers by all our stakeholders: </strong> We aspire to be regarded as the best practitioners by all our Stakeholders; customers, staff, regulators and the community and will keep working diligently until we are successful in doing so. We cater to our clients and stakeholders needs by, creating, growing, providing an enduring financial security.  We will be a dynamic leader, visionary guardian, and trusted the partner to all.</p> 
                                        </div>
                                    </div>
                                </div>

                                {{-- tab 10 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-10"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-10"
                                >
                                    <div class="">
                                        <div class="col">
                                            <h2 class="mb-4">Guardian Life Milestones</h2>
                                            <img src="{{asset("assets/img/about/milestone.png")}}" alt="" class="img-fluid">
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

<section id="video-section">
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
</section>

@endsection