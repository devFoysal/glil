@extends('layouts.backend.master')

@section('title', 'Show Appointment')

@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Show Appointment</h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Appointment Details</div>

</div>

        {{-- @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-card alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $error }}</strong>
                </div>
                @endforeach
        @endif --}}

        <div class="container">
            <div class="row">
                <table class="table table-border">
                    <tbody>
                        <tr>
                        <th>Name:</th>
                        <td>{{$appointment->name}}</td>
                        </tr>

                        <tr>
                            <th>Email:</th>
                            <td>{{$appointment->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td>{{$appointment->phone}}</td>
                        </tr>

                        <tr>
                            <th>Appointment Date:</th>
                            <td>{{date('d-M-Y',strtotime($appointment->date))}}</td>
                        </tr>
                        <tr>
                            <th>Message:</th>
                            <td>{{$appointment->message}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

</div>
</div>
</div>


@endsection
