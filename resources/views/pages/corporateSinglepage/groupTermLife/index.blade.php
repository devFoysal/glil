@extends("layouts.master")
@section("title", "Group Term Life")
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
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<section id="corporate-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>Group Term Life</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 my-5">
                <div class="text-box">
                    <h5>The more financial security employee has, the more motivated they remain. Through group term insurance an organization can mitigate the level of uncertainty of their employees and for that employees become more loyal to the organization when they get financial supports in time of their needs from the organization they work for. Conversely an employer/organization feels better when they can stand beside their employees through group term insurance providing a sense of good governance in the organization.</h5>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="text-box">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                LIFE COVERAGE
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                If an insured member dies (except suicidal death, in first year of coverage of a member and HIV/AIDS-related diseases), Guardian Life Insurance upon receipt of written proof of such death due to sickness or accident, will pay the organization the sum insured in respect of the said insured member within 7 days.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection