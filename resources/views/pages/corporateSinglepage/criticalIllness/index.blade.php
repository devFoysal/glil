@extends("layouts.master")
@section("title", "Critical Illness Benefit")
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
                <h2>Critical Illness Benefit
                </h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 my-5">
                <div class="text-box">
                    <h5>Critical Illness is a special supplementary scheme designed for employees and for their family members with a view to provide financial support and protection in the event of a member is diagnosed to have one of the diseases mentioned below, but not until at least three months have been elapsed since the commencement. The coverage amount is provided upon being diagnosed with the following 18 critical diseases.</h5>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="text-box">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                CRITICAL ILLNESS INSURANCE BENEFIT -LIST OF DISEASES
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>1. Cancer</p>
                                                          <p>2. Heart Attack (Myocardial Infarction)</p>
                                                          <p>3. Stroke</p>
                                                          <p>4. Coronary Artery (Bypass) Surgery</p>
                                                          <p>5. Kidney Failure (End Stage Renal Disease)</p>
                                                          <p>6. Major Organ Transplantation</p>
                                                          <p>7. Paralysis</p>
                                                          <p>8. Multiple Sclerosis</p>
                                                          <p>9. Loss of Limbs.</p>
                                                          <p>10. Blindness/ Loss of Sight</p>
                                                          <p>11. Heart Valve Replacement</p>
                                                          <p>12. Surgery of Aorta</p>
                                                          <p>13. Aplastic Anemia</p>
                                                          <p>14. Benign Brain Tumor</p>
                                                          <p>15. Chronic Lung Disease/End Stage Lung Disease</p>
                                                          <p>16. Deafness/Loss of Hearing</p>
                                                          <p>17. Major Head Trauma</p>
                                                          <p>18. Loss of Speech</p>
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