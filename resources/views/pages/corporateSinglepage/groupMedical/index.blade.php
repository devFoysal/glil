@extends("layouts.master")
@section("title", "Group Medical Insurance Plan")
@section("content")

<section
    id="banner-no-text"
    style="background-image: url({{asset("assets/img/newsevent.png")}})"
></section>

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

<section id="corporate-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>
                  @if (app()->getLocale() == 'bn')
                  গ্রুপ মেডিকেল বীমা পরিকল্পনা
                  @elseif (app()->getLocale() == 'en')
                  Group Medical Insurance Plan
                  @endif
                </h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 my-5">
                <div class="text-box">
                    <h5>
                      @if (app()->getLocale() == 'bn')
                      {!! html_entity_decode($corporate->medicalinsuranceplan_bn ) !!}
                      @elseif (app()->getLocale() == 'en')
                      {!! html_entity_decode($corporate->medicalinsuranceplan_en ) !!}
                      @endif
                    </h5>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="text-box">
                    <div class="accordion" id="accordionExample">
                      @foreach ($gmips as $gmip)
                        @if (app()->getLocale() == 'bn')
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $gmip->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $gmip->title_bn }}
                                    </button>
                                    </h2>
                                </div>
                            
                                <div id="collapse{{ $gmip->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!! html_entity_decode($gmip->description_bn ) !!}
                                    </div>
                                </div>
                            </div> 
                        @elseif (app()->getLocale() == 'en')
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $gmip->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $gmip->title_en }}
                                    </button>
                                    </h2>
                                </div>
                            
                                <div id="collapse{{ $gmip->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
    </div>
</section>

@endsection