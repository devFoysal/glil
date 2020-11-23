@extends('layouts.backend.master')

@section('title', 'Corporate')
@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Corporate Page</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Corporate Page Inforation</div>
                <a href="{{ route('corporate.edit', ['id' => $corporate->id]) }}" class="btn btn-success btn-icon m-2"><i class="fas fa-plus-square"></i>&nbsp; Edit Corporate Page</a>
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
                            <th>Introduction (en)</th>
                            <th>Introduction (bn)</th>
                            <th>Why Guardian (en)</th>
                            <th>Why Guardian (bn)</th>
                            <th>Benefits (en)</th>
                            <th>Benefits (bn)</th>
                            <th>Group Term Life (en)</th>
                            <th>Group Term Life (bn)</th>
                            <th>Critical Illness Benefits (en)</th>
                            <th>Critical Illness Benefits (bn)</th>
                            <th>Group Medical Insurance Plan (en)</th>
                            <th>Group Medical Insurance Plan (bn)</th>
                            <th>Group Personal Accident Benefits (en)</th>
                            <th>Group Personal Accident Benefits (bn)</th>
                            <th>Banner Image</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>{{ $corporate->title_en }}</td>
                            <td>{{ $corporate->title_bn }}</td>
                            <td>{{ $corporate->subtitle_en }}</td>
                            <td>{{ $corporate->subtitle_bn }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->intoduction_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->intoduction_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->whyguardian_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->whyguardian_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->benefit_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->benefit_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->grouptermlife_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->grouptermlife_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->illnessbenefits_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->illnessbenefits_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->medicalinsuranceplan_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->medicalinsuranceplan_bn, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->accidentbenefits_en, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($corporate->accidentbenefits_bn, 30) }}</td>
                            <td>
                                <img src="{{ asset('uploads/corporate/'.$corporate->image) }}" alt="check" class="img-fluid" width="100">
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
                <a href="{{ route('corporateaccordion.create') }}" class="btn btn-success btn-icon m-2"><i class="fas fa-plus-square"></i>&nbsp; Add Accordion</a>
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
                        @foreach ($corporateaccordions as $index => $corporateaccordion)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $corporateaccordion->title_en }}</td>
                                <td>{{ $corporateaccordion->title_bn }}</td>
                                <td>{{ $corporateaccordion->page_link }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($corporateaccordion->description_en, 30) }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($corporateaccordion->description_bn, 30) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('corporateaccordion.edit', ['id'=>$corporateaccordion->id]) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('corporateaccordion.destroy', ['id'=>$corporateaccordion->id]) }}">Delete</a>
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