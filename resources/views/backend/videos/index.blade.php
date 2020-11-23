@extends('layouts.backend.master')

@section('title', 'Videos')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Videos</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Videos</div>
                <a href="{{route('videos.addForm')}}" class="btn btn-success btn-icon m-2"><i
                        class="fas fa-plus-square"></i>&nbsp; Add Videos</a>
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
                            <th>Type</th>
                            <th width="10%">Title (en)</th>
                            <th width="10%">Title (bn)</th>
                            <th width="10%">Video</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($videos as $index => $video)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $video->type }}</td>
                            <td>{{ $video->title_en }}</td>
                            <td>{{ $video->title_bn }}</td>
                            <td>
                                <iframe height="100px" src="https://www.youtube.com/embed/{{ $video->video }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </td>
                            <td>
                                @if ($video->status)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                                <span class="badge badge-pill badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('videos.edit', $video->id)}}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ route('videos.delete', ['id'=>$video->id]) }}">Delete</a>
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