@extends("layouts.master")
@section("title", "Retail Page")
@section("content")
<section id="short-banner" style="background-image: url({{asset("assets/img/retail/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p> Group Insurance </p>
                <h1>
                    RETAIL 
                    <span> FINANCIAL SERVICES </span>
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

<!-- Insurance plan section -->
<div id="family-plan">
    <section id="insurance-plan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        <span>FAMILY PROTECTION PLANS</span>
                    </h1>
                    <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, ultrices elit ac aliquam vulputate morbi dignissim. Placerat rhoncus magna vel pulvinar molestie non sapien ullamcorper. Turpis proin urna nibh mattis pellentesque.</p>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-2 col-md-3 blue-bg">
                    <div
                        class="nav flex-column"
                        id="v-pills-tab"
                        role="tablist"
                        aria-orientation="vertical"
                    >
                        
                            <a                           
                                class= "nav-link active"
                                id="v-pills-home-tab1"
                                data-toggle="pill"
                                href="#v-pills-1"
                                role="tab"
                                aria-controls="#v-pills-1"
                                aria-selected="true"
                            >
                            Savings
                            <span></span>
                            </a>
    
                            <a                           
                                class= "nav-link"
                                id="v-pills-home-tab2"
                                data-toggle="pill"
                                href="#v-pills-2"
                                role="tab"
                                aria-controls="#v-pills-2"
                                aria-selected="true"
                            >
                            Early Cash
                            <span></span>
                            </a>
    
                            <a                           
                                class= "nav-link"
                                id="v-pills-home-tab3"
                                data-toggle="pill"
                                href="#v-pills-3"
                                role="tab"
                                aria-controls="#v-pills-3"
                                aria-selected="true"
                            >
                            Children
                            <span></span>
                            </a>
    
                            <a 
                                class= "nav-link"
                                id="v-pills-home-tab4"
                                data-toggle="pill"
                                href="#v-pills-4"
                                role="tab"
                                aria-controls="#v-pills-4"
                                aria-selected="true"
                            >
                            Retirement
                            <span></span>
                            </a>

                            <a 
                                class= "nav-link"
                                id="v-pills-home-tab6"
                                data-toggle="pill"
                                href="#v-pills-6"
                                role="tab"
                                aria-controls="#v-pills-6"
                                aria-selected="true"
                            >
                            Investment
                            <span></span>
                            </a>
    
                            <a
                                class= "nav-link"
                                id="v-pills-home-tab5"
                                data-toggle="pill"
                                href="#v-pills-5"
                                role="tab"
                                aria-controls="#v-pills-5"
                                aria-selected="true"
                            >
                            Supplementary Benifits
                            <span></span>
                            </a>
                        
                    </div>
                </div>
    
                <div class="col-lg-10 col-md-9">
                    <div
                        class="tab-content"
                        id="v-pills-tabContent"
                        
                    >
                            <div
                                class="tab-pane fade show active"
                                
                                id="v-pills-1"
                                role="tabpanel"
                                aria-labelledby="#v-pills-1"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Sanchay
                                                                        </h3>
                                                                        <p>
                                                                            The easiest plan that focuses on your convenience
                                                                        </p>
                                                                        <p>
                                                                            Keep it simple: An easy savings plan to multiply the money saved with attractive bonuses The smart savings plan accrues attractive bonuses every year which multiplies your savings and allows you to achieve your long term savings goals.
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianSanchay', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Prodriddhi
                                                                        </h3>
                                                                        <p>
                                                                            Your perfect solution to Insurance & Savings combined into one perfect package. The plan allows you make monthly deposits that guarantees you a significant Insurance Coverage and also attractive returns as terminal benefits.
                                                                        </p>
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianProbridhi', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Gurdian Shomriddhi
                                                                        </h3>
                                                                        <p>
                                                                            The simplest Insurance plan that allows you to cut out all the frills and maximize your Insurance Coverage at the most affordable premiums.
                                                                        </p>
                                                                        <p>The easy savings plan focuses on your convenience with comparatively lower premium rates and a pre-defined maturity value.</p>
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianSomriddhi', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Money Back
                                                                        </h3>
                                                                        <p>
                                                                            A smart insurance plan where you will get back your deposited basic premium topped-up with 25% of coverage amount at the term-end.
                                                                        </p>
                                                                        <p>The additional cash helps you meet your priorities with more ease. Plan your child’s higher education or for the down payment of your home.</p>
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianMoneyback', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
    
                            <!-- tab 2 -->
                            <div
                                
                                class="tab-pane fade show"
                                
                                id="v-pills-2"
                                role="tabpanel"
                                aria-labelledby="#v-pills-2"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
                                        <div
                                            id="carouselExampleControls2"
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Care Free (3 Stage)
                                                                        </h3>
                                                                        <p>
                                                                            Meet your priorities: A liquid savings plan that will give back partial sum assured in three different time periods for attaining your precious dreams at various stages of life.
                                                                        </p>
                                                                        <p>
                                                                            Now, you can have insurance, savings and also cherish those major milestones of life
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianCareFree', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Care Free Pro (4 Stage)
                                                                        </h3>
                                                                        <p>
                                                                            A liquid savings plan that will give back partial sum assured in four different time periods for attaining your precious dreams at various stages of life.
                                                                        </p>
                                                                        <p>
                                                                            Now, you can have insurance, savings and also cherish those major milestones of life.
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianCarePro', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Care Free Pro Ultra (5 Stage)
                                                                        </h3>
                                                                        <p>
                                                                            The wise one’s priority plan: A liquid savings plan that will give back partial sum assured in five different time periods for attaining your precious dreams at various stages of life.
                                                                        </p>
                                                                        <p>
                                                                            Now, you can have insurance, savings and also cherish those major milestones of life.
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianCareUltra', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls2"
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
                                                href="#carouselExampleControls2"
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
    
                            <!-- tab 3 -->
                            <div
                                
                                class="tab-pane fade show"
                                
                                id="v-pills-3"
                                role="tabpanel"
                                aria-labelledby="#v-pills-3"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
                                        <div
                                            id="carouselExampleControls3"
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Child Protection Plan
                                                                        </h3>
                                                                        <p>
                                                                            Let’s keep that smile intact forever: An education plan for your starlet to keep his / her future education miles away from financial hardship.
                                                                        </p>
                                                                        <p>
                                                                            The best plan for you, your child and your family that includes a splendid admixture of benefits that will secure every stage of child’s growth
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('childProtectionDetails', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls3"
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
                                                href="#carouselExampleControls3"
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
    
                            <!-- tab 4 -->
                            <div
                                
                                class="tab-pane fade show"
                                
                                id="v-pills-4"
                                role="tabpanel"
                                aria-labelledby="#v-pills-4"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
                                        <div
                                            id="carouselExampleControls4"
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Pension cum Assurance Plan
                                                                        </h3>
                                                                        <p>
                                                                            Make your retired life a respectable & self-sufficient one: A secure retirement plan that will keep you financially solvent for the rest of your life.
                                                                        </p>
                                                                        <p>
                                                                            In your absence, the policy offers 10 years of guaranteed pension for your precious family.
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('retirementsDetails', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls4"
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
                                                href="#carouselExampleControls4"
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
    
                            <!-- tab 5 -->
                            <div
                                
                                class="tab-pane fade show"
                                
                                id="v-pills-5"
                                role="tabpanel"
                                aria-labelledby="#v-pills-5"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
                                        <div
                                            id="carouselExampleControls5"
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Health Insurance
                                                                        </h3>
                                                                        <p>Features and benefits of Guardian Health Insurance includes:</p>
                                                                        <p>Wide range of plans for your suitability <br>Convenient Premium Payment Options [same as base plan]</p>
                                                                    
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianHealth', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Critical Illness Plan
                                                                        </h3>
                                                                        <p>
                                                                            Features and benefits of Critical Illness Plan includes:
                                                                        </p>
                                                                        <p>
                                                                            Support against 18 critical dieases <br>
                                                                            Coverage up to BDT 10 lac (not more than 50% of Sum Assured)
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('criticalIllness', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Permanent Disability and Accidental Benefit
                                                                        </h3>
                                                                        <p>Due to accident, if within 90 days from the date of occurrence an insured dies or suffered from disablement caused directly by an accident caused through external, violent and visible in nature the Company shall pay any one of the following indemnity to the insured.</p>
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('pdab', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Double Indemnity and Accidental Benefit
                                                                        </h3>
                                                                        <p>Due to accident, if within 90 days from the date of occurrence an insured dies directly from such an accident caused through external, violent and visible in nature then the Company shall pay to the insured the sum assured in addition to the death benefit of the basic policy</p>
                                                                        
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('diab', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls5"
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
                                                href="#carouselExampleControls5"
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>

                            <!-- tab 6 -->
                            <div
                                
                                class="tab-pane fade show"
                                
                                id="v-pills-6"
                                role="tabpanel"
                                aria-labelledby="#v-pills-6"
                            >
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ash-bg">
                                        
    
                                        <div
                                            id="carouselExampleControls4"
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
                                                                    <div class="card-body">
                                                                        <h3>
                                                                            Guardian Surokkha
                                                                        </h3>
                                                                        <p>
                                                                            The Investor’s Choice: An investment plan with sure benefit of doubling the invested amount to implement your precious long-term goals.
                                                                        </p>
                                                                        <p>
                                                                            The best mix of investment & protection for your family.
                                                                        </p>
                                                                        <div class="details-div">
                                                                            <a
                                                                                href="{{route('bookAppointment', app()->getLocale())}}"
                                                                                class="btn book-appointment"
                                                                            >
                                                                                Book an appointment
                                                                            </a>

                                                                            <a
                                                                                href="{{route('gurdianSurokkha', app()->getLocale())}}"
                                                                                class="details"
                                                                            >
                                                                                Details
                                                                                <span>
                                                                                    <i class="fas fa-chevron-right"></i>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <hr />
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                
                                            </div>
                                            <a
                                                class="carousel-control-prev"
                                                href="#carouselExampleControls4"
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
                                                href="#carouselExampleControls4"
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
                                    <div class="col-lg-6 pic-bg d-none d-lg-block">
                                        <img
                                            src="{{asset("assets/img/home/insurance1.png")}}"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <button
                        class="btn yellow-btn"
                    >
                        view all
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

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