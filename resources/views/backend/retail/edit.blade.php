@extends('layouts.backend.master')

@section('title', 'Retail Page Edit')


@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Edit Retail Page</h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Retail Page Edit</div>

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

        <form action="{{ route('retail.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="">

               
                <div class="row">
                   
                    <div class="col-md-6">
                        <h4>English  Version</h4>
                        <div class="form-group">
                            <label for="banner_title_en">Banner Title (en)</label>
                        <input id="banner_title_en" class="form-control bg-light @if($errors->has('banner_title_en')) {{'is-invalid'}} @endif" type="text" name="banner_title_en" value="{{$retail[0]->banner_title_en}}">
                            @if($errors->has('banner_title_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_en') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="banner_subtitle_en">Banner SubTitle (en)</label>
                        <input id="banner_subtitle_en" class="form-control bg-light @if($errors->has('banner_subtitle_en')) {{'is-invalid'}} @endif" type="text" name="banner_subtitle_en" value="{{$retail[0]->banner_subtitle_en}}">
                            @if($errors->has('banner_subtitle_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_subtitle_en') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="title_en">Title (en)</label>
                        <input id="title_en" class="form-control bg-light @if($errors->has('title_en')) {{'is-invalid'}} @endif" type="text" name="title_en" value="{{$retail[0]->title_en}}">
                            @if($errors->has('title_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('title_en') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description_en">Description (en)</label>
                        <textarea id="description_en" class="form-control bg-light @if($errors->has('description_en')) {{'is-invalid'}} @endif" type="text" name="description_en">{{$retail[0]->description_en}} </textarea>
                            @if($errors->has('description_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('description_en') }}
                            </small>
                            @endif
                        </div>
                     
                    </div>
                    <div class="col-md-6">
                        <h4>বাংলা ভার্সন</h4>
                        <div class="form-group">
                            <label for="banner_title_bn">ব্যানার টাইটেল</label>
                        <input id="banner_title_bn" class="form-control bg-light @if($errors->has('banner_title_bn')) {{'is-invalid'}} @endif" type="text" name="banner_title_bn" value="{{$retail[0]->banner_title_bn}}">
                            @if($errors->has('banner_title_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_title_bn') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="banner_subtitle_bn">ব্যানার সাবটাইটেল</label>
                        <input id="banner_subtitle_bn" class="form-control bg-light @if($errors->has('banner_subtitle_bn')) {{'is-invalid'}} @endif" type="text" name="banner_subtitle_bn" value="{{$retail[0]->banner_subtitle_bn}}">
                            @if($errors->has('banner_subtitle_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('banner_subtitle_bn') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="title_bn">টাইটেল</label>
                        <input id="title_bn" class="form-control bg-light @if($errors->has('title_bn')) {{'is-invalid'}} @endif" type="text" name="title_bn" value="{{$retail[0]->title_bn}}">
                            @if($errors->has('title_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('title_bn') }}
                            </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description_bn">ডেস্ক্রিপশন</label>
                        <textarea id="description_bn" class="form-control bg-light @if($errors->has('description_bn')) {{'is-invalid'}} @endif" type="text" name="description_bn">{{$retail[0]->description_bn}} </textarea>
                            @if($errors->has('description_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('description_bn') }}
                            </small>
                            @endif
                        </div>
                     
                    </div>
                </div>

                <div class="row mb-3"> 
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/'.$retail[0]->banner) }}" alt="" class="img-fluid" width="150">
                    </div>
                    
                </div>
                <div class="custom-file">
                    <input type="file" name="banner" class="custom-file-input @if($errors->has('banner')) {{'is-invalid'}} @endif" id="banner">
                    <label class="custom-file-label" for="banner">Choose Retail Banner</label>

                    @if($errors->has('banner'))
                    <small class="d-block text-danger mb-3">
                        {{ $errors->first('banner') }}
                    </small>
                    @endif
                </div>
            </div>

            <div class="form-group
            mt-3">
                <button type="submit" class="btn btn-primary">Update Retail Page</button>
            </div>
        </form>

</div>
</div>
</div>


@endsection
