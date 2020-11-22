@extends('layouts.backend.master')

@section('title', 'Blog')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Who We Are</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Who We Are</div>
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
                            <th>Description (en)</th>
                            <th>Description (bn)</th>
                            <th>Sponsors</th>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($whoWeAres as $index => $weare)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{Str::limit($weare->description_en, 30) }}</td>
                            <td>{{Str::limit($weare->description_bn, 30) }}</td>
                            <td>{{Str::limit($weare->sponsors, 30) }}</td>
                            <td>
                                @if ($weare->video)
                                <iframe width="100%" height="50" src="https://www.youtube.com/embed/{{$weare->video}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                @else
                                {{"No video"}}
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="{{route('aboutus.whoWeAre.edit', $weare->id)}}">Edit</a>
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
                <div class="card-title">Guardian’s Values</div>
                <a href="{{route('aboutus.whoWeAre.addGVForm')}}" class="btn btn-success btn-icon m-2"><i
                        class="fas fa-plus-square"></i>&nbsp; Add Guardian’s Value</a>
            </div>

            <!-- Data table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Description (en)</th>
                            <th>Description (bn)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($guardianValues as $index => $gv)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{Str::limit($gv->description_en, 30) }}</td>
                            <td>{{Str::limit($gv->description_bn, 30) }}</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                            href="{{route('aboutus.whoWeAre.gvEdit', $gv->id)}}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ route('aboutus.whoWeAre.gvDelete', ['id'=>$gv->id]) }}">Delete</a>
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