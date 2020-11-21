@extends('layouts.backend.master')

@section('title', 'Retail Plan List')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Plan List </h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Retail</div>

<a href="{{route('retail.planlist.create',['planId' => $planId])}}" class="btn btn-success btn-icon m-2" ><i class="fas fa-plus-square"></i>&nbsp; Add New Plan List</a>

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
    <th>Image</th>
    <th>Name (en)</th>
    <th>Name (bn)</th>
    <th>Banner Title (en)</th>
    <th>Banner Title (bn)</th>
    <th>Key Features (en)</th>
    <th>Key Features (bn)</th>
    <th>Action</th>
</tr>
</thead>
<!-- Table body -->
<tbody>
@foreach ($retailPlanLists as $index => $planList)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>
            <img src="{{ asset('uploads/retail/'.$planList->banner) }}" alt="" class="img-fluid" width="100">
        </td>

        <td>
            <img src="{{ asset('uploads/retail/'.$planList->image) }}" alt="" class="img-fluid" width="100">
        </td>

        <td>{{ $planList->name_en }}</td>
        <td>{{ $planList->name_bn }}</td>
        <td>{{ $planList->banner_title_en }}</td>
        <td>{{ $planList->banner_title_bn }}</td>
        <td>  
            <ul class="list-group">
            <li class="list-group-item ">{{$planList->key_1_en}}</li>
            <li class="list-group-item ">{{$planList->key_2_en}}</li>
            <li class="list-group-item ">{{$planList->key_3_en}}</li>
            <li class="list-group-item ">{{$planList->key_4_en}}</li>
               
              </ul>

        </td>

        <td>  
            <ul class="list-group">
            <li class="list-group-item ">{{$planList->key_1_bn}}</li>
            <li class="list-group-item ">{{$planList->key_2_bn}}</li>
            <li class="list-group-item ">{{$planList->key_3_bn}}</li>
            <li class="list-group-item ">{{$planList->key_4_bn}}</li>
               
              </ul>

        </td>
        <td>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('retail.planlist.edit', ['id'=>$planList->id]) }}">Edit</a>
                
                    <a class="dropdown-item" href="{{ route('retail.planlist.destroy', ['id'=>$planList->id]) }}">Delete</a>
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

@endsection
