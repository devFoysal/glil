@extends("layouts.master")
@section("title", "Career")
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
                <h5 class="title">Career</h5>
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
                                Building Tomorrow’s Winners<span></span>
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
                                GLIL HR Vision <span></span>
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
                                Current Openings <span></span>
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
                                            <h4>Career</h4>
                                            <p>We pay special attention to the recruitment and selection process as well as provide continuous training both on and off the job for our employees. We focus on employees’ competence and commitment which is crucial in providing high-quality customer service in a transparent, accountable and responsible manner. It is our employees who should have the ability to go beyond and constantly bring changes for the betterment and success which will lead us to achieve the Company’s goals.</p>
                                            <br>

                                            <h4>Today’s ability, tomorrow’s success</h4>
                                            <p>In the selection of our employees, we are looking to find highly motivated, talented, dynamic, honest and friendly people who are willing to get involved and uphold the corporate culture within and beyond the organization. We welcome applications from people who have Master’s /4 years Honors Degree from a course of academic study in any field, and are either at the beginning of their career path or have previous work experience which may even be unrelated to life insurance industry We encourage innovation and learning from best performances and thus strive to achieve excellence through research in an open atmosphere.</p>
                                            <br>

                                            <h4>Recruitment</h4>
                                            <p>Our recruitment process includes job analysis with position specification, sourcing of candidates by networking and other mediums, matching candidates to job requirements and screening individuals. We also assess our candidates to identify whether their individual potential match with our organization requirements by conducting interviews and other such assessment techniques.</p>
                                            <br>

                                            <h4>Learning and Development</h4>
                                            <p>We pay special attention to the recruitment and selection process by:</p>
                                            <li>Providing continuous training to our potential employees.</li>
                                            <li>Providing dynamic opportunities for personal and professional development based on transparent criteria, including the chance of working abroad.</li>
                                            <li>Developing professional performance that goes beyond targets; building interpersonal skills along with dedication and commitment to responsibility.</li>
                                            <br>

                                            <h4>Talent Management</h4>
                                            <p>Our talent management prepares our team members to compete in the global economy and capitalize quickly on new opportunities. We set strategic talent management plans, which will allow us to:</p>
                                            <li>Become “proactive” rather than “reactive”.</li>
                                            <li>Identify the essential skills to be developed in all team members, and minimize training costs by focusing on key development areas; and</li>
                                            <li>Improve our recruiting process by identifying high-quality candidates using job descriptions provided by our reliable enterprise team members holding unique company or industry competencies.</li>
                                            <br>

                                            <h4>Combining Individual Goals with Corporate Strategy</h4>
                                            <p>Our talent management plan is closely aligned with the Insurance Company’s overall strategic plan and business needs. At GLIL, goal alignment is a powerful management tool that not only clarifies job roles for our individual team members, but also demonstrates their ongoing value to the organization. We engage our team members in their work through such alignments which create greater ownership. As a result this makes our team members more committed to the organization and help reaching higher levels of job satisfaction.</p>
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
                                        <h4>GLIL HR Vision</h4>
                                        
                                        <div>
                                            <p>GLIL values its human resources as one of the greatest strength and key success factor. In order to add a different magnitude in the sector, not only in terms of the quality of rendering Life Insurance services, but also in terms of the qualifications and attitude of our staff, we strive to make a persistent investment in human resources development. We identify that incompetent human resources may be the worst risk for an Insurance Company. Our objective is not only to make a difference in the market in terms of the quality of the financial services we offer but also to be immaculate in the selection of our human resources.</p>

                                            <br>

                                            <p>GLIL believes in continuous investment in human resources development. We seek team members who are not only interested in a particular position, but also understand our long-term objectives. Furthermore, we believe that potential applicants should have a desire for continuous development within the institution and should demonstrate commitment to our ethical and moral approach to Insurance Industry. We put great emphasis on creating fair and respectful relationships between employees and developing a working environment where open communication and sharing ideas with colleagues can be practiced within the organizational hierarchy.</p>

                                            <br>

                                            <p>GLIL’s salary structure fully reflects the Mission, Vision and Core Values. We work in the life Insurance sector; a sector which specializes in working with business people and in providing a safe and secure future for our customers. Our objective is to provide a similar scenario for our employees, with the salary structure being in line with our strong emphasis on high-quality services and responsible character of the Credit mission. Our active and well nourished management encourages employee commitment, contribution and performance rather than routine process or opportunistic considerations, and salary increment will follow this core philosophy.</p>

                                            <br>

                                            <p>GLIL’s objective is to turn itself into a leading Insurance Company in terms of profitability, performance and goodwill and at the same time focus on the primary elements of our human resources as part of our Corporate Philosophy. Our strategy is not to be “Just Another Insurance Company”, but to build a workplace for all to work, grow and prosper along with the Company itself.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>

                                {{-- tab 1 --}}
                                <div
                                    class="tab-pane fade show"
                                    id="v-pills-3"
                                    role="tabpanel"
                                    aria-labelledby="#v-pills-3"
                                >

                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h4 class="pb-4">GRADUATES</h4>
                                        <div class="accordion accordion-right" id="accordionExample9">
                                            <div class="card">
                                                <div class="card-header" id="headingOne1">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                        CORPORATE RM
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                        <img src="{{asset("assets/img/career/img1.jpg")}}" alt="" class="img-fluid">
                                                        <button class="btn yellow-btn mt-4">Upload CV</button>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne2">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                        CLIENT RM
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                        <img src="{{asset("assets/img/career/img1.jpg")}}" alt="" class="img-fluid">
                                                        <button class="btn yellow-btn mt-4">Upload CV</button>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <h4 class="pb-4">PROFESSIONALS</h4>
                                        <div class="accordion accordion-right" id="accordionExample10">
                                            <div class="card">
                                                <div class="card-header" id="headingOne11">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner11" aria-expanded="true" aria-controls="collapseInner11">
                                                        TRAINING MANAGER
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner11" class="collapse show" aria-labelledby="headingOne11" data-parent="#accordionExample10">
                                                    <div class="card-body">
                                                        <img src="{{asset("assets/img/career/img1.jpg")}}" alt="" class="img-fluid">
                                                        <button class="btn yellow-btn mt-4">Upload CV</button>
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