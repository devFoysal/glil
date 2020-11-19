@extends("layouts.master")
@section("title", "Media Corner")
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
                                News <span></span>
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
                                Press <span></span>
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
                                Blog  <span></span>
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
                                Videos & TVC <span></span>
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
                                Photo Gallery <span></span>
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
                                Stakeholder Experiences <span></span>
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
                                            <h2>Guardian News</h2>
                                            <br>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="news">
                                                <h4>THE LOSS OF COUNTRY’S RENOWNED EDUCATIONIST NILOUFER MANZUR</h4>
                                                <div>
                                                    <img
                                                    src="{{asset("assets/img/news/media1.png")}}"
                                                    alt=""
                                                    class="float-left mr-3"
                                                    style="width: 250px"
                                                />
                                                <p class="text-justify">lMrs. Niloufer Manzur, renowned educationist and Principal of Sunbeams School passed away at 12:55am on 26 May 2020 at CMH in Dhaka. Inna lillahi wa inna ilaihi rajeun. She was 74 and left behind her husband, Syed Manzur Elahi, former Adviser to the Caretaker Government and Chairman, Apex Footwear Ltd, son Syed Nasim Manzur (Sponsor of Guardian Life), daughter Munize Manzur, daughter-in-law Dr Samia Huq, 6 grandchildren, sister Yasmeen Haque, brother Jamshed Chowdhury and a large host of friends, admirers and students. She founded Sunbeams School on 15 January 1974. Niloufer Manzur was the daughter of Late Dr Mafiz Ali Chowdhury, MP, a former Minister in Bangabandhu Sheikh Mujibur Rahman’s cabinet in 1972. She was buried after a privat...</p>
                                                </div>
                                                <a href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="news">
                                                <h4>THE LOSS OF COUNTRY’S RENOWNED EDUCATIONIST NILOUFER MANZUR</h4>
                                                <div>
                                                    <img
                                                    src="{{asset("assets/img/news/media1.png")}}"
                                                    alt=""
                                                    class="float-left mr-3"
                                                    style="width: 250px"
                                                />
                                                <p class="text-justify">lMrs. Niloufer Manzur, renowned educationist and Principal of Sunbeams School passed away at 12:55am on 26 May 2020 at CMH in Dhaka. Inna lillahi wa inna ilaihi rajeun. She was 74 and left behind her husband, Syed Manzur Elahi, former Adviser to the Caretaker Government and Chairman, Apex Footwear Ltd, son Syed Nasim Manzur (Sponsor of Guardian Life), daughter Munize Manzur, daughter-in-law Dr Samia Huq, 6 grandchildren, sister Yasmeen Haque, brother Jamshed Chowdhury and a large host of friends, admirers and students. She founded Sunbeams School on 15 January 1974. Niloufer Manzur was the daughter of Late Dr Mafiz Ali Chowdhury, MP, a former Minister in Bangabandhu Sheikh Mujibur Rahman’s cabinet in 1972. She was buried after a privat...</p>
                                                </div>
                                                <a href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <h2>News Video</h2>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-lg-4">
                                            <iframe src="https://www.youtube.com/embed/zt5YqANGoz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <h2>Guardian Press</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <h4>ADOPTING NEW NORMAL: LIFE INSURANCE IN 5 MINUTES THROUGH E-KYC AT GUARDIAN LIFE</h4>
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/media2.png")}}"
                                                alt=""
                                                class="float-left mr-3"
                                                style="width: 250px"
                                            />
                                            <p class="text-justify">lMrs. Niloufer Manzur, renowned educationist and Principal of Sunbeams School passed away at 12:55am on 26 May 2020 at CMH in Dhaka. Inna lillahi wa inna ilaihi rajeun. She was 74 and left behind her husband, Syed Manzur Elahi, former Adviser to the Caretaker Government and Chairman, Apex Footwear Ltd, son Syed Nasim Manzur (Sponsor of Guardian Life), daughter Munize Manzur, daughter-in-law Dr Samia Huq, 6 grandchildren, sister Yasmeen Haque, brother Jamshed Chowdhury and a large host of friends, admirers and students. She founded Sunbeams School on 15 January 1974. Niloufer Manzur was the daughter of Late Dr Mafiz Ali Chowdhury, MP, a former Minister in Bangabandhu Sheikh Mujibur Rahman’s cabinet in 1972. She was buried after a privat...</p>
                                            </div>
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <h4>ADOPTING NEW NORMAL: LIFE INSURANCE IN 5 MINUTES THROUGH E-KYC AT GUARDIAN LIFE</h4>
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/media2.png")}}"
                                                alt=""
                                                class="float-left mr-3"
                                                style="width: 250px"
                                            />
                                            <p class="text-justify">lMrs. Niloufer Manzur, renowned educationist and Principal of Sunbeams School passed away at 12:55am on 26 May 2020 at CMH in Dhaka. Inna lillahi wa inna ilaihi rajeun. She was 74 and left behind her husband, Syed Manzur Elahi, former Adviser to the Caretaker Government and Chairman, Apex Footwear Ltd, son Syed Nasim Manzur (Sponsor of Guardian Life), daughter Munize Manzur, daughter-in-law Dr Samia Huq, 6 grandchildren, sister Yasmeen Haque, brother Jamshed Chowdhury and a large host of friends, admirers and students. She founded Sunbeams School on 15 January 1974. Niloufer Manzur was the daughter of Late Dr Mafiz Ali Chowdhury, MP, a former Minister in Bangabandhu Sheikh Mujibur Rahman’s cabinet in 1972. She was buried after a privat...</p>
                                            </div>
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <h4>ADOPTING NEW NORMAL: LIFE INSURANCE IN 5 MINUTES THROUGH E-KYC AT GUARDIAN LIFE</h4>
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/media2.png")}}"
                                                alt=""
                                                class="float-left mr-3"
                                                style="width: 250px"
                                            />
                                            <p class="text-justify">lMrs. Niloufer Manzur, renowned educationist and Principal of Sunbeams School passed away at 12:55am on 26 May 2020 at CMH in Dhaka. Inna lillahi wa inna ilaihi rajeun. She was 74 and left behind her husband, Syed Manzur Elahi, former Adviser to the Caretaker Government and Chairman, Apex Footwear Ltd, son Syed Nasim Manzur (Sponsor of Guardian Life), daughter Munize Manzur, daughter-in-law Dr Samia Huq, 6 grandchildren, sister Yasmeen Haque, brother Jamshed Chowdhury and a large host of friends, admirers and students. She founded Sunbeams School on 15 January 1974. Niloufer Manzur was the daughter of Late Dr Mafiz Ali Chowdhury, MP, a former Minister in Bangabandhu Sheikh Mujibur Rahman’s cabinet in 1972. She was buried after a privat...</p>
                                            </div>
                                            <a href="#">Continue Reading</a>
                                        </div>
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
                                        <h2>Guardian Blog</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="news">
                                            <h4>একজন সোবহান আহমেদ এবং একটি দীর্ঘশ্বাসের গল্প!</h4>
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/media3.png")}}"
                                                alt=""
                                                class="float-left mr-3"
                                                style="width: 250px"
                                            />
                                            <p class="text-justify">অবসর জীবন এতোটা দুর্বিষহ হয়ে উঠবে তা কল্পনাও করতে পারেননি সোবহান আহমেদ। ভেবেছিলেন চাকরি থেকে অবসর নিয়ে পরিবারের সাথে সুখে শান্তিতে সময় কাটাবেন । সারা জীবন ব্যয় করেছেন সংসারের জন্য। নিজের জন্য আলাদা ভাবার সময় ছিল না তার। স্ত্রীকে নিয়ে একা ঘুরেও আসতে পারেননি কোথাও । ছেলে মেয়েকে পড়াশ...</p>
                                            </div>
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="news">
                                            <h4>একজন সোবহান আহমেদ এবং একটি দীর্ঘশ্বাসের গল্প!</h4>
                                            <div>
                                                <img
                                                src="{{asset("assets/img/news/media3.png")}}"
                                                alt=""
                                                class="float-left mr-3"
                                                style="width: 250px"
                                            />
                                            <p class="text-justify">অবসর জীবন এতোটা দুর্বিষহ হয়ে উঠবে তা কল্পনাও করতে পারেননি সোবহান আহমেদ। ভেবেছিলেন চাকরি থেকে অবসর নিয়ে পরিবারের সাথে সুখে শান্তিতে সময় কাটাবেন । সারা জীবন ব্যয় করেছেন সংসারের জন্য। নিজের জন্য আলাদা ভাবার সময় ছিল না তার। স্ত্রীকে নিয়ে একা ঘুরেও আসতে পারেননি কোথাও । ছেলে মেয়েকে পড়াশ...</p>
                                            </div>
                                            <a href="#">Continue Reading</a>
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
                                        <h2>মুজিববর্ষ | জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মশতবার্ষিকী</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <iframe height="500px" src="https://www.youtube.com/embed/xwEYt_4Byxo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                    <div class="col-lg-12">
                                        <h2>LEED- AV</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <iframe height="500px" src="https://www.youtube.com/embed/TyKfd1tpm88" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                    <div class="col-lg-12">
                                        <h2>LEED- AV</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <iframe height="500px" src="https://www.youtube.com/embed/6cZigY2Q5tg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                    <div class="col-lg-12">
                                        <h2>Corona Virus Awareness</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row border-0">
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4">
                                                <iframe src="https://www.youtube.com/embed/iO3eGgOTAuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <div class="row mx-0 border-0">
                                    <div class="col-lg-12">
                                        <h2>Photo Gallery</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row border-0">
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media4.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">মুজিববর্ষ | জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মশতবার্ষিকী</h5>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media5.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">Insurance Asia Award – 2019</h5>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media4.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">মুজিববর্ষ | জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মশতবার্ষিকী</h5>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media5.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">Insurance Asia Award – 2019</h5>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media4.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">মুজিববর্ষ | জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মশতবার্ষিকী</h5>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <img src="{{asset("assets/img/news/media5.png")}}" alt="" class="img-fluid">
                                                <h5 class="mt-3">Insurance Asia Award – 2019</h5>
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
                                        <h2>Our Valued Customers Speak For Us</h2>
                                        <br>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row border-0">
                                            <div class="col-lg-4 mb-3">
                                                <iframe src="https://www.youtube.com/embed/I7pxlwMLEIU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <iframe src="https://www.youtube.com/embed/0ltz8-6BxqQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <iframe src="https://www.youtube.com/embed/_IVjJmCePgw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <iframe src="https://www.youtube.com/embed/Agz5JwgRyAM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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