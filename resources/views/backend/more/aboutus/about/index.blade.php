@extends('layouts.backend.master')

@section('title', 'About')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">About</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">About</div>
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
                            <th>Banner</th>
                            <th>Lives Covered</th>
                            <th>Paid In Claims</th>
                            <th>Claim Payout Ratio</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td><img width="100" src="{{asset("uploads/aboutus/$about->banner")}}" alt=""></td>
                            <td>{{ $about->livesCovered }}</td>
                            <td>{{ $about->paidInClaims }}</td>
                            <td>{{ $about->claimPayoutRatio }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="{{route('aboutus.about.edit', $about->id)}}">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection