@extends('layouts.backend.master')

@section('title', 'Shareholder')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Shareholder</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Shareholder</div>
                <a href="{{route('aboutus.shareholders.addForm')}}" class="btn btn-success btn-icon m-2"><i
                        class="fas fa-plus-square"></i>&nbsp; Add Shareholder Speech</a>
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
                            <th>Shareholder Name (en)</th>
                            <th>Shareholder Name (bn)</th>
                            <th>Number of Shares</th>
                            <th>% of Share</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($shareholders as $index => $sh)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$sh->name_en }}</td>
                            <td>{{$sh->name_bn }}</td>
                            <td>{{$sh->numberOfShares }}</td>
                            <td>{{$sh->percentageOfShares }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="{{route('aboutus.shareholders.edit', $sh->id)}}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ route('aboutus.shareholders.delete', ['id'=>$sh->id]) }}">Delete</a>
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



    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Shareholder Heading</div>
                <a href="{{route('aboutus.shareholders.addForm')}}" class="btn btn-success btn-icon m-2"><i
                        class="fas fa-plus-square"></i>&nbsp; Add Shareholder Heading</a>
            </div>
            <!-- Data table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>Shareholder Heading (en)</th>
                            <th>Shareholder Heading (bn)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <tr>
                            <td>{{$shareholderHeading->description_en }}</td>
                            <td>{{$shareholderHeading->description_bn }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="{{route('aboutus.shareholders.edit-heading', $shareholderHeading->id)}}">Edit</a>
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