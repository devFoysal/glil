@extends('layouts.backend.master')

@section('title', 'Appointment Details')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Book | Appointment </h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Appointment Details</div>


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
    <th>Appointment Date</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Message</th>
    <th>Action</th>
</tr>
</thead>
<!-- Table body -->
<tbody>
@foreach ($appointments as $index => $appointment)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ date('d-M-Y',strtotime($appointment->date)) }}</td>
        <td>{{ $appointment->name }}</td>
        <td>{{ $appointment->phone }}</td>
        <td>{{ $appointment->email }}</td>
        <td>{{ $appointment->address }}</td>
        <td>{{ \Illuminate\Support\Str::limit($appointment->message, 30) }}...</td>
        <td>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('appointment.edit', ['id'=>$appointment->id]) }}">Show</a>
          


                    <a class="dropdown-item" href="{{ route('appointment.destroy', ['id'=>$appointment->id]) }}">Delete</a>
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
