@extends('layouts.backend.master')

@section('title', 'Retail Plan List Edit')

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Edit Retail Plan List </h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Retail Plan Create</div>

</div>
@if(session('success'))
        <div class="alert alert-card alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ session('success') }}</p>
        </div>
@endif
        {{-- @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-card alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $error }}</strong>
                </div>
                @endforeach
        @endif --}}

        <form action="{{ route('retail.planlist.update',['id'=> $planList->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="">
                <div class="row"> 
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/retail/'.$planList->banner) }}" alt="" class="img-fluid" width="150">
                    </div>
                    <div class="col-md-8">
                        <div class="custom-file">
                    
                            <input type="file" name="banner" class="custom-file-input @if($errors->has('banner')) {{'is-invalid'}} @endif" id="banner">
                            <label style="font-size: 1rem !important" class="custom-file-label" for="banner">Choose Plan  List Banner</label>
        
                            @if($errors->has('banner'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>
               
                <div class="row mt-3 mb-3"> 
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/retail/'.$planList->image) }}" alt="" class="img-fluid" width="150">
                    </div>
                    <div class="col-md-8">
                        <div class="custom-file ">
                    
                            <input type="file" name="image" class="custom-file-input @if($errors->has('image')) {{'is-invalid'}} @endif" id="image">
                            <label style="font-size: 1rem !important" class="custom-file-label" for="image">Choose Plan List Single image</label>
        
                            @if($errors->has('image'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('image') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>
                

               
                <div class="row">
                    {{-- English Version Start --}}
                    <div class="col-md-6">
                        <h2> English Version</h2>


                        <div class="form-group">
                            <label style="font-size: 1rem !important" for="name_en">Name (en)</label>
                        <input id="name_en" class="form-control bg-light @if($errors->has('name_en')) {{'is-invalid'}} @endif" type="text" name="name_en" value="{{$planList->name_en}}">
                            @if($errors->has('name_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_en') }}
                            </small>
                            @endif
                        </div>


                 <div class="form-group">
                    <label style="font-size: 1rem !important" for="banner_title_en">Banner Title (en)</label>
                        <input id="banner_title_en" class="form-control bg-light @if($errors->has('banner_title_en')) {{'is-invalid'}} @endif" type="text" name="banner_title_en" value="{{$planList->banner_title_en}}">
                            @if($errors->has('banner_title_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_en') }}
                            </small>
                            @endif
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="introduction_en">Introduction (en)</label>
                       
                    <textarea class="form-control" id="introduction_en" 
                name="introduction_en">{{$planList->introduction_en}}</textarea>
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="feature_en">Features,Benefits,Condition (en)</label>
                       
                    <textarea class="form-control" id="feature_en" 
                    name="feature_en">{{$planList->feature_en}}</textarea>
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="term_en">Term and Condition (en)</label>
                       
                    <textarea class="form-control" id="term_en" 
                    name="term_en">{{$planList->term_en}}</textarea>
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="video_url">Video (url)</label>
                        <input id="video_url" class="form-control bg-light @if($errors->has('video_url')) {{'is-invalid'}} @endif" type="text" name="video_url" value="{{$planList->video_url}}">
                            @if($errors->has('video_url'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('video_url') }}
                            </small>
                            @endif
                </div>


                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Key Benfits 1</span>
                        </div>
                    <input value="{{$planList->key_1_en}}" name="key_1_en" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Key Benfits 2</span>
                        </div>
                        <input value="{{$planList->key_3_en}}"  name="key_2_en" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Key Benfits 3</span>
                        </div>
                        <input value="{{$planList->key_3_en}}"   type="text"  name="key_3_en"
                        class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">Key Benfits 4</span>
                        </div>
                    <input value="{{$planList->key_4_en}}"  type="text" class="form-control" name="key_4_en" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      
                           
                </div>
                     
                    </div>

                    {{-- Bangla Start --}}
                    <div class="col-md-6">
                        <h2> বাংলা ভার্সন</h2>


                        <div class="form-group">
                            <label style="font-size: 1rem !important" for="name_bn">নাম </label>
                        <input id="name_bn" class="form-control bg-light @if($errors->has('name_bn')) {{'is-invalid'}} @endif" type="text" name="name_bn" value="{{$planList->name_bn}}">
                            @if($errors->has('name_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_bn') }}
                            </small>
                            @endif
                        </div>


                 <div class="form-group">
                    <label style="font-size: 1rem !important" for="banner_title_bn">ব্যানার টাইটেল</label>
                        <input id="banner_title_bn" class="form-control bg-light @if($errors->has('banner_title_bn')) {{'is-invalid'}} @endif" type="text" name="banner_title_bn" value="{{$planList->banner_title_bn}}">
                            @if($errors->has('banner_title_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_bn') }}
                            </small>
                            @endif
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="introduction_bn">ইনট্রোডাকশন</label>
                       
                    <textarea class="form-control" id="introduction_bn" 
                    name="introduction_bn">{{$planList->introduction_bn}}</textarea>
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="feature_bn">বেনেফিট,বেনেফিট,কন্ডিশন</label>
                       
                    <textarea class="form-control" id="feature_bn" 
                name="feature_bn">{{$planList->feature_bn}}</textarea>
                </div>

                <div class="form-group">
                    <label style="font-size: 1rem !important" for="term_bn">টার্ম এবং কন্ডিশন</label>
                       
                    <textarea class="form-control" id="term_bn" 
                    name="term_bn">{{$planList->term_bn}}</textarea>
                </div>

               


                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">কি বেনেফিট ১</span>
                        </div>
                        <input name="key_1_bn" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$planList->key_1_bn}}">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">কি বেনেফিট ২</span>
                        </div>
                        <input  value="{{$planList->key_2_bn}}" name="key_2_bn" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">কি বেনেফিট ৩</span>
                        </div>
                        <input value="{{$planList->key_3_bn}}" type="text"  name="key_3_bn"
                        class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">কি বেনেফিট ৪</span>
                        </div>
                        <input value="{{$planList->key_4_bn}}" type="text" class="form-control" name="key_4_bn" id="basic-url" aria-describedby="basic-addon3">
                      </div>

                      
                           
                </div>
                     
                    </div>
                </div>
               
            </div>

            <div class="form-group
            mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Update List </button>
            </div>
        </form>

</div>
</div>
</div>


@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        initSummernote($('#introduction_en'));
        initSummernote($('#feature_en'));
        initSummernote($('#term_en'));

        initSummernote($('#introduction_bn'));
        initSummernote($('#feature_bn'));
        initSummernote($('#term_bn'));
        
    })

    function initSummernote(el){
        $(el).summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear','fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
            ],
            fontSizes: ['12', '14', '16','18', '24', '36', '48' , '64', '82', '150'],
            fontNames: ['Ubuntu'],
            height:"100"
        })
    }
</script>
@endpush
