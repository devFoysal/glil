@extends('layouts.backend.master')

@section('title', 'Corporate')
@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Bancassurance Page</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Bancassurance Page Inforation</div>
                <a href="{{ route('bancassurance.edit', ['id' => $bancassurance->id]) }}" class="btn btn-success btn-icon m-2"><i class="fas fa-plus-square"></i>&nbsp; Edit Bancassurance Page</a>
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
                <table class="table table-striped table-bordered" style="width: 100%;">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>Title (en)</th>
                            <th>Title (bn)</th>
                            <th>Subtitle (en)</th>
                            <th>Subtitle (bn)</th>
                            <th>Key Benefits 1 (en)</th>
                            <th>Key Benefits 1 (bn)</th>
                            <th>Key Benefits 2 (en)</th>
                            <th>Key Benefits 2 (bn)</th>
                            <th>Key Benefits 3 (en)</th>
                            <th>Key Benefits 3 (bn)</th>
                            <th>Key Benefits 4 (en)</th>
                            <th>Key Benefits 4 (bn)</th>
                            <th>Introduction (en)</th>
                            <th>Introduction (bn)</th>
                            <th>Why Guardian (en)</th>
                            <th>Why Guardian (bn)</th>
                            <th>Benefits for Bank Customers (en)</th>
                            <th>Benefits for Bank Customers (bn)</th>
                            <th>Benefits for Bank (en)</th>
                            <th>Benefits for Bank (bn)</th>
                            <th>Credit Risk Migration Products (en)</th>
                            <th>Credit Risk Migration Products (bn)</th>
                            <th>Depository Insurance Products (en)</th>
                            <th>Depository Insurance Products (bn)</th>
                            <th>Benefits We Are Offering (en)</th>
                            <th>Benefits We Are Offering (bn)</th>
                            <th>Banner Image</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>{{ $bancassurance->title_en }}</td>
                            <td>{{ $bancassurance->title_bn }}</td>
                            <td>{{ $bancassurance->subtitle_en }}</td>
                            <td>{{ $bancassurance->subtitle_bn }}</td>
                            <td>{{ $bancassurance->keybenefit1_en }}</td>
                            <td>{{ $bancassurance->keybenefit1_bn }}</td>
                            <td>{{ $bancassurance->keybenefit2_en }}</td>
                            <td>{{ $bancassurance->keybenefit2_bn }}</td>
                            <td>{{ $bancassurance->keybenefit3_en }}</td>
                            <td>{{ $bancassurance->keybenefit3_bn }}</td>
                            <td>{{ $bancassurance->keybenefit4_en }}</td>
                            <td>{{ $bancassurance->keybenefit4_bn }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->introduction_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->introduction_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->whygurdian_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->whygurdian_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsforbankcustomers_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsforbankcustomers_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsforbank_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsforbank_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->creditriskmigrationproducts_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->creditriskmigrationproducts_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->depositoryinsuranceproducts_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->depositoryinsuranceproducts_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsweareoffering_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bancassurance->benefitsweareoffering_bn, 30) }}</td>
                            <td>
                                <img src="{{ asset('uploads/bancassurance/'.$bancassurance->image) }}" alt="check" class="img-fluid" width="100">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Accordion List</div>
                <a href="{{ route('bancassuranceaccordion.create') }}" class="btn btn-success btn-icon m-2"><i class="fas fa-plus-square"></i>&nbsp; Add Accordion</a>
            </div>
            <!-- Data table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title (en)</th>
                            <th>Title (bn)</th>
                            <th>Selected Page</th>
                            <th>Description (en)</th>
                            <th>Description (bn)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($bancassuranceaccordions as $index => $bancassuranceaccordion)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $bancassuranceaccordion->title_en }}</td>
                                <td>{{ $bancassuranceaccordion->title_bn }}</td>
                                <td>{{ $bancassuranceaccordion->tab_link }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($bancassuranceaccordion->description_en, 30) }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($bancassuranceaccordion->description_bn, 30) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('bancassuranceaccordion.edit', ['id'=>$bancassuranceaccordion->id]) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('bancassuranceaccordion.destroy', ['id'=>$bancassuranceaccordion->id]) }}">Delete</a>
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