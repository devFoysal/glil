@extends("layouts.master")
@if (app()->getLocale() == 'en')
@section("title", $plan[0]->name_en )
@elseif (app()->getLocale() == 'bn')
@section("title", $plan[0]->name_bn )
@endif

@section("content")

<section id="banner-no-text" style="background-image: url({{asset('uploads/retail/'.$plan[0]->banner)}})"></section>

<section id="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('homepage', app()->getLocale())}}">
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

<section id="single-page-common">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @if (app()->getLocale() == 'en')
            <h2>{{$plan[0]->name_en}}</h2>
                @elseif (app()->getLocale() == 'bn')
                <h2>{{$plan[0]->name_bn}}</h2>
                @endif
               
            </div>
        </div>
        <div class="row">

            @foreach ($planLists as $list)
            <div class="col-md-4">
            <a href="{{URL::current()}}/{{$list->slug}}">
                    <div class="card">
                        <div class="img-box">
                            <img class="card-img-top" src={{asset('uploads/retail/'.$list->image)}} alt="" />
                        </div>
                        <div class="card-body">
                            @if (app()->getLocale() == 'en')
                        <h5 class="card-title">{{$list->name_en}}</h5>
                                @elseif (app()->getLocale() == 'bn')
                        <h5 class="card-title">{{$list->name_bn}}</h5>
                                @endif
                           
                        </div>
                    </div>
                </a>
            </div>  
            @endforeach
          

           
        </div>
    </div>
</section>

@endsection