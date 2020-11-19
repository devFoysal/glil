@extends("layouts.master")
@section("title", "Contact Us")
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

<section id="claims" class="corporate bancassurance about-us more">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h5 class="title">Contact Us</h5>
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
                                Contact Information <span></span>
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
                                Leave a Message <span></span>
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
                                Offices & Branches <span></span>
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
                                            <h2>Contact Us</h2>
                                            <br>
                                        </div>
                                        <div class="col-12">
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>Address:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>Police Plaza Concord (13th Floor), Tower- 02,
                                                        Plot # 02, Road # 144, Gulshan Avenue, Dhaka- 1212.</p>
                                                </div>
                                            </div>
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>Helpline:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>16622 or 09 610000200</p>
                                                </div>
                                            </div>
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>Telephone:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>+880 9612016622</p>
                                                </div>
                                            </div>
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>Fax:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>88-02-9888399</p>
                                                </div>
                                            </div>
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>Web:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>www.guardianlife.com.bd</p>
                                                </div>
                                            </div>
                                            <div class="row mx-2 my-3 border-0">
                                                <div class="col-3">
                                                    <p>E-mail:</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>info@guardianlife.com.bd</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-5">
                                            <h2>Location Map</h2>
                                            <br>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7302.568849579425!2d90.416132!3d23.772884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa13a3aabc47316c8!2sS.A%20corporation-Online%20shopping%20centre!5e0!3m2!1sen!2sbd!4v1604831901916!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                        <h2>Please fill-up the form below to leave a message & we'll get back to you soon</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-6">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="form-group">       
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                            <div class="form-group">       
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">                        
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">                                            
                                                <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn yellow-btn" type="submit">Submit</button>
                                        </form>
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
                                        <h2>Please fill-up the form below to leave a message & we'll get back to you soon</h2>
                                        <br>

                                        <div class="accordion accordion-right" id="accordionExample9">
                                            <div class="card">
                                                <div class="card-header" id="headingOne1">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                                        Head Office
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                      <div class="row border-0">
                                                          <div class="col-lg-7">
                                                              <p>Police Plaza Concord (13th Floor), Tower- 02,
                                                                Plot # 02, Road # 144, Gulshan Avenue, Dhaka- 1212.</p>
                                                                <p>Phone: +880 9612016622</p>
                                                                <p>Fax: +88 02 9888399</p>
                                                                <p>E-mail: info@guardianlife.com.bd</p>
                                                          </div>
                                                          <div class="col-lg-5">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7302.568849579425!2d90.416132!3d23.772884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa13a3aabc47316c8!2sS.A%20corporation-Online%20shopping%20centre!5e0!3m2!1sen!2sbd!4v1604831901916!5m2!1sen!2sbd" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
    
                                            <div class="card">
                                                <div class="card-header" id="headingOne2">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                                        Uttara Office
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                        <div class="row border-0">
                                                            <div class="col-lg-7">
                                                                <p>Police Plaza Concord (13th Floor), Tower- 02,
                                                                  Plot # 02, Road # 144, Gulshan Avenue, Dhaka- 1212.</p>
                                                                  <p>Phone: +880 9612016622</p>
                                                                  <p>Fax: +88 02 9888399</p>
                                                                  <p>E-mail: info@guardianlife.com.bd</p>
                                                            </div>
                                                            <div class="col-lg-5">
                                                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7302.568849579425!2d90.416132!3d23.772884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa13a3aabc47316c8!2sS.A%20corporation-Online%20shopping%20centre!5e0!3m2!1sen!2sbd!4v1604831901916!5m2!1sen!2sbd" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne3">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner2">
                                                        Mirpur Office
                                                      </button>
                                                    </h2>
                                                  </div>
                                          
                                                  <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample9">
                                                    <div class="card-body">
                                                        <div class="row border-0">
                                                            <div class="col-lg-7">
                                                                <p>Police Plaza Concord (13th Floor), Tower- 02,
                                                                  Plot # 02, Road # 144, Gulshan Avenue, Dhaka- 1212.</p>
                                                                  <p>Phone: +880 9612016622</p>
                                                                  <p>Fax: +88 02 9888399</p>
                                                                  <p>E-mail: info@guardianlife.com.bd</p>
                                                            </div>
                                                            <div class="col-lg-5">
                                                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7302.568849579425!2d90.416132!3d23.772884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa13a3aabc47316c8!2sS.A%20corporation-Online%20shopping%20centre!5e0!3m2!1sen!2sbd!4v1604831901916!5m2!1sen!2sbd" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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