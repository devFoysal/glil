@extends('layouts.backend.master')

@section('title', 'Claim Page Edit')


@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Edit Claim Page</h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Claim Page Edit</div>

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

        <form action="{{ route('claims.claim.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="">

               
                <div class="row">
                   
                    <div class="col-md-6">
                        <h4>English  Version</h4>
                        <div class="form-group">
                            <label for="banner_title_en">Banner Title (en)</label>
                        <input id="banner_title_en" class="form-control bg-light @if($errors->has('banner_title_en')) {{'is-invalid'}} @endif" type="text" name="banner_title_en" value="{{$claim->banner_title_en}}">
                            @if($errors->has('banner_title_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_en') }}
                            </small>
                            @endif
                        </div>

                       

                        <div class="form-group">
                            <label for="name_en">Name (en)</label>
                        <input id="name_en" class="form-control bg-light @if($errors->has('name_en')) {{'is-invalid'}} @endif" type="text" name="name_en" value="{{$claim->name_en}}">
                            @if($errors->has('name_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_en') }}
                            </small>
                            @endif
                        </div>

                
                    </div>

                    <div class="col-md-6">
                        <h4>বাংলা ভার্সন</h4>
                        <div class="form-group">
                            <label for="banner_title_bn">ব্যানার টাইটেল</label>
                        <input id="banner_title_bn" class="form-control bg-light @if($errors->has('banner_title_bn')) {{'is-invalid'}} @endif" type="text" name="banner_title_bn" value="{{$claim->banner_title_bn}}">
                            @if($errors->has('banner_title_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_bn') }}
                            </small>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="name_bn">নাম</label>
                        <input id="name_bn" class="form-control bg-light @if($errors->has('name_bn')) {{'is-invalid'}} @endif" type="text" name="name_bn" value="{{$claim->name_bn}}">
                            @if($errors->has('name_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_bn') }}
                            </small>
                            @endif
                        </div>

                       
                     
                    </div>
                </div>

                <div class="row mb-3"> 
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/claims/'.$claim->banner) }}" alt="" class="img-fluid" width="150">
                    </div>
                    
                </div>
                <div class="custom-file">
                    <input type="file" name="banner" class="custom-file-input @if($errors->has('banner')) {{'is-invalid'}} @endif" id="banner">
                    <label class="custom-file-label" for="banner">Choose Claim Banner</label>

                    @if($errors->has('banner'))
                    <small class="d-block text-danger mb-3">
                        {{ $errors->first('banner') }}
                    </small>
                    @endif
                </div>
            </div>

            <div class="form-group
            mt-3">
                <button type="submit" class="btn btn-primary">Update Claim Page</button>
            </div>
        </form>

</div>
</div>
</div>


@endsection
