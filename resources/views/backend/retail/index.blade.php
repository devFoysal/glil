@extends('layouts.backend.master')

@section('title', 'Retail')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Retail | Plan </h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Retail</div>
<a href="{{route('retail.edit',)}}" class="btn btn-success btn-icon m-2" ><i class="fas fa-plus-square"></i>&nbsp; Update Retail Page</a>
<a href="{{route('retail.plan.create')}}" class="btn btn-success btn-icon m-2" ><i class="fas fa-plus-square"></i>&nbsp; Add News Reatil Plan</a>

</div>
    @if(session('success'))
    <div class="alert alert-card alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>{{ session('success') }}</p>
    </div>
    @endif
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-card alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>{{ $error }}</strong>
</div>
@endforeach
@endif
<!-- Data table -->
<div class="table-responsive">
<table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
<!-- Table head -->
<thead>
<tr>
    <th>Id</th>
    <th>Banner</th>
    <th>Plan Name (en)</th>
    <th>Plan Name (bn)</th>
    <th>Action</th>
</tr>
</thead>
<!-- Table body -->
<tbody>
@foreach ($retailPlans as $index => $plan)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>
            <img src="{{ asset('uploads/retail/'.$plan->banner) }}" alt="" class="img-fluid" width="100">
        </td>
        <td>{{ $plan->name_en }}</td>
        <td>{{ $plan->name_bn }}</td>
        <td>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('retail.plan.edit', ['id'=>$plan->id]) }}">Edit</a>
                <a class="dropdown-item" href="{{route('retail.planlist.index',['planId' => $plan->id])}}"  target="_blank">Plan List</a>


                    <a class="dropdown-item" href="{{ route('retail.plan.destroy', ['id'=>$plan->id]) }}">Delete</a>
                </div>
            </div>
        </td>
    </tr>
 
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- Add News Blog Modal -->
<div class="container">
<div class="modal fade bd-example-modal-lg" id="addblog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="{{ route('newsblog.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="modal-body">
<div class="form-group">
<label for="type">Select Type</label>
<select name="type" id="type" class="form-control">
    <option selected disabled>-- Select Blog or News --</option>
    <option value="blog">Blog</option>
    <option value="news">News</option>
</select>
</div>
<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label for="title_en">Title (en)</label>
        <input id="title_en" class="form-control bg-light" type="text" name="title_en" placeholder="Blog Title">
    </div>
    <div class="form-group">
        <label for="description_en">Description (en)</label>
        <textarea class="form-control" id="description_en" rows="4" name="description_en"></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="title_bn">Title (bn)</label>
        <input id="title_bn" class="form-control bg-light" type="text" name="title_bn" placeholder="Blog Title">
    </div>
    <div class="form-group">
        <label for="description_bn">Description (bn)</label>
        <textarea class="form-control" id="description_bn" rows="4" name="description_bn"></textarea>
    </div>
</div>
</div>
<div class="custom-file">
<input type="file" name="image" class="custom-file-input" id="image">
<label class="custom-file-label" for="image">Choose News & Blog Image</label>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
