<div class="row">
    <div class="col-lg-2 col-md-3 blue-bg">
        <div
            class="nav flex-column"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
        >

        @foreach ($retailPlans as $plan)
            <a                           
                class= "nav-link @if($loop->first) active @endif"
    id="v-pills-home-tab{{$plan->id}}"
                data-toggle="pill"
    href="#v-pills-{{$plan->id}}"
                role="tab"
    aria-controls="#v-pills-{{$plan->id}}"
                aria-selected="true"
            >
            @if($Bn) 
                {{$plan->name_bn}}
            @else 
                {{$plan->name_en}}
            @endif
            <span></span>
            </a>
        @endforeach

        </div>
    </div>

<div class="col-lg-10 col-md-9">
    <div class="tab-content" id="v-pills-tabContent">

        {{-- Loop Start Specific Plan List --}}

        @foreach ($retailPlans as $plan)
            
       
        <div
    class="tab-pane fade show @if ($loop->first) active @endif"
    id="v-pills-{{$plan->id}}"
            role="tabpanel"
    aria-labelledby="#v-pills-{{$plan->id}}"
        >
<div class="row">
<div class="col-lg-6 col-md-12 ash-bg">

    <div
id="carouselExampleControls{{$plan->id}}"
    class="carousel slide"
    data-ride="carousel"
    >
<div class="carousel-inner">
             
@foreach ($plan->lists as $list)


<div class="carousel-item @if ($loop->first) active @endif">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if($Bn)
            <h3>{{$list->name_bn}}</h3>
            <p>{!!$list->introduction_bn!!}<p>
                @else      
                <h3>{{$list->name_en}}</h3>
                <p>{!!$list->introduction_en!!}<p>
                @endif
              
                   
                <div class="details-div">
                <a href="{{route('bookAppointment', app()->getLocale())}}"
                 class="btn book-appointment"
                    >
                    Book an appointment
                </a>

                <a href="{{url(app()->getLocale().'/'.'retail'.'/'.$plan->slug.'/'.$list->slug)}}"
                        class="details"
                >
                @if($Bn) বিস্তারিত

                @else Details

                @endif
                                    
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


@endforeach         
    
</div>
<br>
<a
    class="carousel-control-prev"
    href="#carouselExampleControls{{$plan->id}}"
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
    href="#carouselExampleControls{{$plan->id}}"
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
<img src="/assets/img/home/insurance1.png" alt="" class="img-fluid">
</div>

</div>
</div>
@endforeach
{{-- Loop end List End  --}}

           
            
        </div>
    </div>
  
</div>