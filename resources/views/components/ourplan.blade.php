<div class="col-lg-4 px-lg-3 mt-4 mt-lg-0">
    <div class="right-side">
        <div class="right-side-box">
            <h5 class="mb-4">Our plans</h5>
            <div class="accordion accordion-right" id="accordionExample2">

                @foreach ($ourplans as $plan)
                <div class="card">
                    <div class="card-header" id="headingOne1">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                          @if($Bn) 
                            {{$plan->name_bn}}
                          @else 
                          {{$plan->name_en}}
                          @endif
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne1" class="collapse @if($loop->first) show @endif" aria-labelledby="headingOne1" data-parent="#accordionExample2">
                      <div class="card-body">
                          @foreach ($plan->lists as $list)
                          @if($Bn)
                          <li>{{$list->name_bn}}</li>
                          @else
                          <li>{{$list->name_en}}</li>
                          @endif
                               
                          @endforeach
                      
                        
                      </div>
                    </div>
                  </div>
                @endforeach
               

               
              </div>
            </div>
        </div>
</div>