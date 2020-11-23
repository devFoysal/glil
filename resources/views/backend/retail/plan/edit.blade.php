@extends('layouts.backend.master')

@section('title', 'Retail Plan Add')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Create Retail Plan </h5>
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

        <form action="{{ route('retail.plan.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$retailPlan->id}}">
            <div class="">

                <div class="row"> 
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/retail/'.$retailPlan->banner) }}" alt="" class="img-fluid" width="150">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_en">Name (en)</label>
                        <input id="name_en" class="form-control bg-light @if($errors->has('name_en')) {{'is-invalid'}} @endif" type="text" name="name_en" value="{{$retailPlan->name_en}}">
                            @if($errors->has('name_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_en') }}
                            </small>
                            @endif
                        </div>
                     
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_bn">Name (bn)</label>
                            <input id="name_bn" class="form-control bg-light  " type="text" name="name_bn" value="{{$retailPlan->name_bn}}">

                            
                        </div>
                      
                    </div>
                </div>
                <div class="custom-file">
                    <input type="file" name="banner" class="custom-file-input @if($errors->has('banner')) {{'is-invalid'}} @endif" id="banner">
                    <label class="custom-file-label" for="banner">Choose Plan Banner</label>

                    @if($errors->has('banner'))
                    <small class="d-block text-danger mb-3">
                        {{ $errors->first('banner') }}
                    </small>
                    @endif
                </div>
            </div>

            <div class="form-group
            mt-3">
                <button type="submit" class="btn btn-primary">Update New Plan</button>
            </div>
        </form>

</div>
</div>
</div>


@endsection
