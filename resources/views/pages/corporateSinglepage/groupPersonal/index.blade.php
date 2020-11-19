@extends("layouts.master")
@section("title", "Group Personal Accident Benefit")
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
                <h2>Group Personal Accident Benefit</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 my-5">
                <div class="text-box">
                    <h5>Supplementary Benefit (Disability) <br>

                        Group personal accident insurance plans cover multiple types of disabilities. The disabilities caused by accidents are classified under the following three sections for determining compensation:</h5>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="text-box">
                    <div class="accordion" id="accordionExample10">
                        <div class="card">
                            <div class="card-header" id="headingOne1">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner1" aria-expanded="true" aria-controls="collapseInner1">
                                    ACCIDENTAL DEATH BENEFIT (ADB)
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordionExample10">
                                <div class="card-body">
                                  <p>Accidental death benefit shall pay to the employer (organization) the sum insured in respect of the said insured member in addition to death benefit if an insured member dies directly from an accident caused through external and violent, within 7 days from the date of occurrence.</p>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne2">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner2" aria-expanded="true" aria-controls="collapseInner2">
                                    PERMANENT AND TOTAL DISABILITY
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample10">
                                <div class="card-body">
                                  <p>Permanent and Total Disability coverage shall pay to the organization the sum insured in respect of said insured employee in case of permanent and total disability caused directly by an accident from bodily injury, which prevents the insured member from engaging in any business, occupation or work whatsoever for remuneration or profit and which disability has continued uninterruptedly for a period of at least six months and has been certified to be incurable by a physician approved by the company.</p>
                                  <P>In the interpretation of this definition the Company will, however, recognize as Total and Permanent Disability the entire and irrevocable loss of:</P>
                                  <P>1. both eyes</P>
                                  <P>2. both hands above the wrist,</P>
                                  <P>3. both feet above the ankle,</P>
                                  <P>4. one hand above the wrist and one foot above the ankle,</P>
                                  <P>5. one eye and one hand above the wrist,</P>
                                  <P>6. one eye and one foot above the ankle.</P>
                                  <P>If an insured Member becoming totally and permanently disabled die within 365 days from the date of such disablement the Company shall pay the sum insured in respect of the said insured employee.</P>
                                </div>
                              </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne3">
                                <h2 class="mb-0 ml-3">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInner3" aria-expanded="true" aria-controls="collapseInner3">
                                    PERMANENT AND PERTIAL DISABILITY
                                  </button>
                                </h2>
                              </div>
                      
                              <div id="collapseInner3" class="collapse" aria-labelledby="headingOne3" data-parent="#accordionExample10">
                                <div class="card-body">
                                  <P>Permanent and Partial Disability coverage will be paid to the employer as per the benefit specified in the following schedule where applicable in respect of the said insured employee in case of a permanent partial disablement caused directly by an accident. However, one sum namely the larger sum will be paid for multiple injuries resulting from one accident:</P>
                                  <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Description of injury</th>
                                            <th scope="col">% of loss earing capacity</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Loss of both hands or amputation from higher parts	</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Loss of 1 (one) hand and one leg</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Loss of sight of both eyes to such an extent as to render the claimant unable to perform any work for which eye-sight is essential</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Amputation of both legs or thighs, or amputation of one leg or thigh and loss of any leg</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>Severe facial disfigurement</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Absolute deafness</td>
                                            <td>100</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>Amputation up to shoulder joint</td>
                                            <td>80</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">8</th>
                                            <td>Amputation below shoulder with stump less than 20 centimeters from tip of acromion.</td>
                                            <td>70</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">9</th>
                                            <td>Amputation from 20 centimeters from tip of acromion to less than 11 centimeters below tip of olecranon</td>
                                            <td>60</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">10</th>
                                            <td>Loss of a hand or of the thumb and four fingers of one hand or amputation from 20 centimeters below tip of olecranon</td>
                                            <td>60</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">11</th>
                                            <td>Loss of thumb</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">12</th>
                                            <td>Loss of thumb and its metacarpal bone</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">13</th>
                                            <td>Loss of 4 (four) fingers of 1 (one) hand</td>
                                            <td>50</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">14</th>
                                            <td>Loss of 3 (three) fingers of 1 (one) hand</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">15</th>
                                            <td>Loss of 2 (two) fingers of 1 (one) hand</td>
                                            <td>20</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">16</th>
                                            <td>Loss of terminal phalanx of thumb</td>
                                            <td>10</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">17</th>
                                            <td>Amputation of both feet</td>
                                            <td>90</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">18</th>
                                            <td>Amputation through both feet proximal to the metatarsophalangeal joint</td>
                                            <td>80</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">19</th>
                                            <td>Loss of all toes of both feet through the metatarsophalangeal joint</td>
                                            <td>40</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">20</th>
                                            <td>Loss of all toes of both feet from proximal to the proximal inter- phalangeal joint</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">21</th>
                                            <td>Loss of all toes of both feet from distal to the proximal inter- phalangeal joint</td>
                                            <td>20</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">22</th>
                                            <td>Amputation from lower part of the hip</td>
                                            <td>90</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">23</th>
                                            <td>Amputation from lower part of the hip with stump exceeding 12.5 centimeters measured from tip of great trochanter, but not beyond middle thigh</td>
                                            <td>80</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">24</th>
                                            <td>Amputation from lower part of the hip with stump not exceeding 12.5 centimeters measured from tip of great trochanter</td>
                                            <td>70</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">25</th>
                                            <td>Amputation from middle thigh to 9 centimeters below knee</td>
                                            <td>60</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">26</th>
                                            <td>Amputation below knee with stump exceeding 9 centimeters but not exceeding 12.5 centimeters</td>
                                            <td>50</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">27</th>
                                            <td>Amputation below knee with stump exceeding 12.5 centimeters</td>
                                            <td>40</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">28</th>
                                            <td>Amputation of 1 (one) foot resulting in end-bearing</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">29</th>
                                            <td>Amputation of one foot from proximal to the metatarso-phalangeal joint</td>
                                            <td>30</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">30</th>
                                            <td>Loss of all toes of 1 (one) foot through the metatarso-phalangeal joint</td>
                                            <td>20</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                  </div>

                                  <p>Permanent disabilities that are not mentioned above shall be compensated in accordance with their severity as compared to those listed. Permanent, partial or total loss of the use of a limb shall be deemed to be same as permanent, partial or total loss of the said limb. No indemnity is payable for any pre-existing degree of disablement and if further injury occurs, only the difference between the condition prior to and after current injury shall be considered.</p>
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