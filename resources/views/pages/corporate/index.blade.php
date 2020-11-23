@extends("layouts.master")
@section("title", "Corporate Page")
@section("content")

<section id="short-banner" style="background-image: url({{asset("assets/img/corporateSolution/bannerbg.png")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                  @if (app()->getLocale() == 'bn')
                    {{ $corporate->title_bn }}
                  @elseif (app()->getLocale() == 'en')
                    {{ $corporate->title_en }}
                  @endif
                </p>
                <h1>
                  @if (app()->getLocale() == 'bn')
                  {{ $corporate->subtitle_bn }}
                  @elseif (app()->getLocale() == 'en')
                  {{ $corporate->subtitle_en }}
                  @endif
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
                  @if (app()->getLocale() == 'bn')
                  <i class="fas fa-home"></i> হোম
                  @elseif (app()->getLocale() == 'en')
                  <i class="fas fa-home"></i> Back to Home
                  @endif
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
                            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab1" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="#v-pills-1" aria-selected="true">
                                  @if (app()->getLocale() == 'bn')
                                    ভূমিকা
                                  @elseif (app()->getLocale() == 'en')
                                    Introduction
                                  @endif
                                  <span></span>
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
                                @if (app()->getLocale() == 'bn')
                                কেন গার্ডিয়ান
                                  @elseif (app()->getLocale() == 'en')
                                  Why Gurdian
                                  @endif
                                     <span></span>
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
                                  @if (app()->getLocale() == 'bn')
                                  সুবিধা
                                  @elseif (app()->getLocale() == 'en')
                                  Benefits
                                  @endif
                                     <span></span>
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
                                @if (app()->getLocale() == 'bn')
                                গ্রুপ টার্ম লাইফ
                                @elseif (app()->getLocale() == 'en')
                                Group Term Life
                                @endif
                                     <span></span>
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
                                @if (app()->getLocale() == 'bn')
                                ক্রিটিকাল ইলনেস বেনিফিট
                                @elseif (app()->getLocale() == 'en')
                                Critical Illness Benefit
                                @endif
                                      <span></span>
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
                                @if (app()->getLocale() == 'bn')
                                গ্রুপ মেডিকেল বীমা পরিকল্পনা
                                @elseif (app()->getLocale() == 'en')
                                Group Medical Insurance Plan
                                @endif
                                  <span></span>
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
                                @if (app()->getLocale() == 'bn')
                                গ্রুপ পার্সোনাল এক্সিডেন্ট বেনিফিট
                                @elseif (app()->getLocale() == 'en')
                                Group Personal Accident Benefit
                                @endif
                                 <span></span>
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
                                        @if (app()->getLocale() == 'bn')
                                        {!! html_entity_decode($corporate->intoduction_bn ) !!}
                                        @elseif (app()->getLocale() == 'en')
                                        {!! html_entity_decode($corporate->intoduction_en ) !!}
                                        @endif
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
                                          @if (app()->getLocale() == 'bn')
                                            {!! html_entity_decode($corporate->whyguardian_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->whyguardian_en ) !!}
                                          @endif
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
                                          @if (app()->getLocale() == 'bn')
                                          {!! html_entity_decode($corporate->benefit_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->benefit_en ) !!}
                                          @endif
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
                                          @if (app()->getLocale() == 'bn')
                                          {!! html_entity_decode($corporate->grouptermlife_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->grouptermlife_en ) !!}
                                          @endif
                                            <div class="accordion accordion-right" id="accordionExample8">
                                              @foreach ($gtls as $index => $gtl)
                                              @if (app()->getLocale() == 'bn')
                                              <div class="card">
                                                <div class="card-header" id="headingOne{{ $gtl->id }}">
                                                  <h2 class="mb-0 ml-3">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gtl->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gtl->id }}">{{ $gtl->title_bn }}</button>
                                                  </h2>
                                                </div>
                                                <div id="collapseInner{{ $gtl->id }}" class="collapse" aria-labelledby="headingOne{{ $gtl->id }}" data-parent="#accordionExample8">
                                                  <div class="card-body">
                                                    {!! html_entity_decode($gtl->description_bn ) !!}
                                                  </div>
                                                </div>
                                              </div>
                                              @elseif (app()->getLocale() == 'en')
                                                <div class="card">
                                                  <div class="card-header" id="headingOne{{ $gtl->id }}">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gtl->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gtl->id }}">{{ $gtl->title_en }}</button>
                                                    </h2>
                                                  </div>
                                                  <div id="collapseInner{{ $gtl->id }}" class="collapse" aria-labelledby="headingOne{{ $gtl->id }}" data-parent="#accordionExample8">
                                                    <div class="card-body">
                                                      {!! html_entity_decode($gtl->description_en ) !!}
                                                    </div>
                                                  </div>
                                                </div>
                                              @endif
                                            @endforeach
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
                                          @if (app()->getLocale() == 'bn')
                                          {!! html_entity_decode($corporate->illnessbenefits_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->illnessbenefits_en ) !!}
                                          @endif
                                            <div class="accordion accordion-right" id="accordionExample7">
                                            @foreach ($cibs as $index => $cib)
                                              @if (app()->getLocale() == 'bn')
                                              <div class="card">
                                                <div class="card-header" id="headingOne{{ $cib->id }}">
                                                  <h2 class="mb-0 ml-3">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $cib->id }}" aria-expanded="true" aria-controls="collapseInner{{ $cib->id }}">{{ $cib->title_bn }}</button>
                                                  </h2>
                                                </div>
                                                <div id="collapseInner{{ $cib->id }}" class="collapse" aria-labelledby="headingOne{{ $cib->id }}" data-parent="#accordionExample7">
                                                  <div class="card-body">
                                                    {!! html_entity_decode($cib->description_bn ) !!}
                                                  </div>
                                                </div>
                                              </div>
                                              @elseif (app()->getLocale() == 'en')
                                                <div class="card">
                                                  <div class="card-header" id="headingOne{{ $cib->id }}">
                                                    <h2 class="mb-0 ml-3">
                                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $cib->id }}" aria-expanded="true" aria-controls="collapseInner{{ $cib->id }}">{{ $cib->title_en }}</button>
                                                    </h2>
                                                  </div>
                                                  <div id="collapseInner{{ $cib->id }}" class="collapse" aria-labelledby="headingOne{{ $cib->id }}" data-parent="#accordionExample7">
                                                    <div class="card-body">
                                                      {!! html_entity_decode($cib->description_en ) !!}
                                                    </div>
                                                  </div>
                                                </div>
                                              @endif
                                            @endforeach
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
                                          @if (app()->getLocale() == 'bn')
                                          {!! html_entity_decode($corporate->medicalinsuranceplan_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->medicalinsuranceplan_en ) !!}
                                          @endif

                                          <div class="accordion accordion-right" id="accordionExample9">
                                          @foreach ($gmips as $index => $gmip)
                                            @if (app()->getLocale() == 'bn')
                                            <div class="card">
                                              <div class="card-header" id="headingOne{{ $gmip->id }}">
                                                <h2 class="mb-0 ml-3">
                                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gmip->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gmip->id }}">{{ $gmip->title_bn }}</button>
                                                </h2>
                                              </div>
                                              <div id="collapseInner{{ $gmip->id }}" class="collapse" aria-labelledby="headingOne{{ $gmip->id }}" data-parent="#accordionExample9">
                                                <div class="card-body">
                                                  {!! html_entity_decode($gmip->description_bn ) !!}
                                                </div>
                                              </div>
                                            </div>
                                            @elseif (app()->getLocale() == 'en')
                                              <div class="card">
                                                <div class="card-header" id="headingOne{{ $gmip->id }}">
                                                  <h2 class="mb-0 ml-3">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gmip->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gmip->id }}">{{ $gmip->title_en }}</button>
                                                  </h2>
                                                </div>
                                                <div id="collapseInner{{ $gmip->id }}" class="collapse" aria-labelledby="headingOne{{ $gmip->id }}" data-parent="#accordionExample9">
                                                  <div class="card-body">
                                                    {!! html_entity_decode($gmip->description_en ) !!}
                                                  </div>
                                                </div>
                                              </div>
                                            @endif
                                          @endforeach
                                                                                              

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
                                          @if (app()->getLocale() == 'bn')
                                          {!! html_entity_decode($corporate->accidentbenefits_bn ) !!}
                                          @elseif (app()->getLocale() == 'en')
                                          {!! html_entity_decode($corporate->accidentbenefits_en ) !!}
                                          @endif
                                        <div class="accordion accordion-right" id="accordionExample10">
                                            
                                          @foreach ($gpabs as $index => $gpab)
                                          @if (app()->getLocale() == 'bn')
                                          <div class="card">
                                            <div class="card-header" id="headingOne{{ $gpab->id }}">
                                              <h2 class="mb-0 ml-3">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gpab->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gpab->id }}">{{ $gpab->title_bn }}</button>
                                              </h2>
                                            </div>
                                            <div id="collapseInner{{ $gpab->id }}" class="collapse" aria-labelledby="headingOne{{ $gpab->id }}" data-parent="#accordionExample10">
                                              <div class="card-body">
                                                {!! html_entity_decode($gpab->description_bn ) !!}
                                              </div>
                                            </div>
                                          </div>
                                          @elseif (app()->getLocale() == 'en')
                                            <div class="card">
                                              <div class="card-header" id="headingOne{{ $gpab->id }}">
                                                <h2 class="mb-0 ml-3">
                                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner{{ $gpab->id }}" aria-expanded="true" aria-controls="collapseInner{{ $gpab->id }}">{{ $gpab->title_en }}</button>
                                                </h2>
                                              </div>
                                              <div id="collapseInner{{ $gpab->id }}" class="collapse" aria-labelledby="headingOne{{ $gpab->id }}" data-parent="#accordionExample10">
                                                <div class="card-body">
                                                  {!! html_entity_decode($gpab->description_en ) !!}
                                                </div>
                                              </div>
                                            </div>
                                          @endif
                                        @endforeach
                                          
                                            

                                            
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