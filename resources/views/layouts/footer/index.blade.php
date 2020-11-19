 <!-- Footer section -->
 <div style="background-color: rgba(247, 148, 30, 0.05);">
        <section id="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 col-sm-4 col-lg-2 text-center">
                        <div class="social-icons" style="background-image: url({{asset("assets/img/home/socialbg.png")}})">
                            <li>
                                <a href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="text">
                            <span>
                                <i class="fas fa-phone-alt mr-2"></i>
                            </span>
                            16622 (24 hours)
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 logo-section">
                        <img
                            src="{{asset("assets/img/home/footerlogo.png")}}"
                            alt=""
                            class="img-fluid"
                        />
                        <p class="pt-3">Our Sponsor</p>
                        <div class="sponsors">
                            <img
                                src="{{asset("assets/img/home/sponsor1.png")}}"
                                alt=""
                                class="img-fluid"
                            />
                            <img
                                src="{{asset("assets/img/home/sponsor2.png")}}"
                                alt=""
                                class="img-fluid"
                            />
                            <img
                                src="{{asset("assets/img/home/sponsor3.png")}}"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <div class="input-group mt-3 pt-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Your Email ID"
                                aria-label="Recipient's username"
                                aria-describedby="basic-addon2"
                            />
                            <div class="input-group-append">
                                <button class="btn btn-send" type="button">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-4">
                        <h5 class="">Quick Links</h5>
                        <div class="quick-links">
                            <div>
                                <li>
                                    <a href={{route('retail', app()->getLocale())}} >Family Protection Plans</a>
                                </li>
                                <li>
                                    <a href={{route('corporate', app()->getLocale())}}>Corporate Solutions</a>
                                </li>
                                <li>
                                    <a href={{route('bancassurance', app()->getLocale())}}>Bancassurance</a>
                                </li>
                                <li>
                                    <a href={{route('microinsurance', app()->getLocale())}}>Microinsurance</a>
                                </li>
                                <li>
                                    <a href={{route('claims', app()->getLocale())}}>Claims</a>
                                </li>
                                <li>
                                    <a href="#">My Guardian</a>
                                </li>
                                <li>
                                    <a href={{route('aboutUs', app()->getLocale())}}>About Us</a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href={{route('savings', app()->getLocale())}}>Savings</a>
                                </li>
                                <li>
                                    <a href={{route('earlyCash', app()->getLocale())}}>Early Cash</a>
                                </li>
                                <li>
                                    <a href={{route('children', app()->getLocale())}}>Children</a>
                                </li>
                                <li>
                                    <a href={{route('retirement', app()->getLocale())}}>Retirement</a>
                                </li>
                                <li>
                                    <a href={{route('investment', app()->getLocale())}}>Investment</a>
                                </li>
                                <li>
                                    <a href="{{route('CSR', app()->getLocale())}}">CSR Activities</a>
                                </li>
                                <li>
                                    <a href="{{route('faq', app()->getLocale())}}">FAQ</a>
                                </li>
                            </div>
                            <div>
                                <li>
                                    <a href="{{route('supports', app()->getLocale())}}">Support</a>
                                </li>
                                <li>
                                    <a
                                        href="{{route('newsEvent', app()->getLocale())}}"
                                    >
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('blog', app()->getLocale())}}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('contactUs', app()->getLocale())}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{route('career', app()->getLocale())}}">Career</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 right-side">
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p>+8809612016622</p>
                        </div>
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <p>info@guardianlife.com.bd</p>
                        </div>
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>
                                Police Plaza Concord (13th Floor), Tower-
                                02, Plot # 02, Road # 144, Gulshan Avenue,
                                Dhaka- 1212.
                            </p>
                        </div>
                        <p>Download App</p>
                        <button class="img-btn btn1">
                            <img src="{{asset("assets/img/easylife.png")}}" class="img-fluid" alt="" />
                        </button>
                        <button class="img-btn btn-gurdian">
                            <img src="{{asset("assets/img/mygurdian.png")}}" class="img-fluid" alt="" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 border-bottoms">
                        <br />
                    </div>
                    <div class="col-12 text-center">
                        <p class="copyright">
                            Copyright ©2020 all rights reserved by Beatnik
                            Technology
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
    
    <!-- JS, Popper.js, and jQuery bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
    ></script>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            autoplay: true,
            loop: true,
            dots: true,
            nav:true,
            responsiveClass:true,
            autoplayHoverPause:true,
            items: 3,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
            }
    }
        });
      });
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("dropdowns");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <script>
        function myFunctiontwo() {
            var x = document.getElementById("dropdowns");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $("body").tooltip({ selector: '[data-toggle=tooltip]' });
        });
    </script>

    
</body>
</html>