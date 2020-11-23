@extends("layouts.master")
@section("title", "Premium Calculator")
@section("content")

<section id="banner-no-text" style="background-image: url({{asset("assets/img/about/bannerbg.png")}})"></section>

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
                <h5 class="title">Premium Calculator</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="left-side">
                    <div class="row mx-0">
                        <div class="col-md-3 blue-bg">
                            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab1" data-toggle="pill" href="#v-pills-1"
                                    role="tab" aria-controls="#v-pills-1" aria-selected="true">
                                    Premium Calculator
                                    <span></span>
                                </a>
                                {{-- <a class="nav-link" id="v-pills-home-tab2" data-toggle="pill" href="#v-pills-2"
                                    role="tab" aria-controls="#v-pills-2" aria-selected="true">
                                    Videos <span></span>
                                </a> --}}

                            </div>
                        </div>
                        <div class="col-md-9 ash-main-bg">
                            <div class="tab-content ash-bg" id="v-pills-tabContent"
                                {{-- style={{ position: "relative" }} --}}>
                                {{-- tab 1 --}}
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="#v-pills-1">
                                    <div class="row">
                                        <form action="http://api.myguardianbd.com/api/myGuardian/premium" method="POST">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">DOB</label>
                                                    <input type="text" id="dobpicker" name="dob" class="form-control"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>
                                        </form>
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
@endsection
@push('scripts')
<script>
    const token = "{{env('API_TOKEN')}}";
    // const url = "http://api.myguardianbd.com/api/myGuardian/premium";
    // const url = "http://api.myguardianbd.com/api/myGuardian/insuranceAge";
    const url = "http://api.myguardianbd.com/api/myGuardian/plans";
    $(document).ready(function(){
        $('#dobpicker').datepicker({
            format: 'yyyy-mm-dd',
        })
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#dobpicker').on('change', function(){
            console.log($(this).val());
            jQuery.support.cors = true;
            
            $.ajax({
                crossOrigin: true,
                url:url,
                type:'GET',
                headers:{
                    'Access-Control-Allow-Origin': '*',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': token,
                },
                // data:{
                //     'dateOfBirth': $(this).val()
                // },
                success:function(response){
                    console.log(response)
                }
            })
        })
        
        // $(document).on('click', '.product-image-delete', function(e){
        //     e.preventDefault();
        //     let pdtDetailImageId = $(this).attr('data-pdtDetailImageId');
        //     let url = "{{URL::to('management/products/detail-image-delete')}}/" + pdtDetailImageId;
        //     let _this = this;
        //     $.ajax({
        //         url: url,
        //         type:'POST',
        //         data:{
        //             'pdtDetailImageId': pdtDetailImageId
        //         },
        //         success:function(response){
        //             console.log(response)
        //             if(response.status){
        //                 $(_this).parent().hide(500)
        //             }
        //         }
        //     })
        // })
    })
</script>
@endpush