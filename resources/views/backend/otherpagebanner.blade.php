@extends('layouts.backend.master')

@section('title', 'Page Banner')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Other Pages Banner</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Other Pages Banner</div>
                <button class="btn btn-success btn-icon m-2" data-toggle="modal" data-target="#addbanner"><i class="fas fa-plus-square"></i>&nbsp; Add Page Banner</button>
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
                            <th>SL</th>
                            <th>Page Name</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($banners as $index => $banner)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $banner->pagename }}</td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->subtitle }}</td>
                                <td>
                                    <img src="{{ asset('uploads/'.$banner->image) }}" alt="" class="img-fluid" width="100">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editbanner{{ $banner->id }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('banner.destroy', ['id'=>$banner->id]) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Edit Home Page Banner Modal -->
                            <div class="modal fade" id="editbanner{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Blog</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="{{ route('banner.edit') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Banner Title</label>
                                                    <input id="title" class="form-control bg-light" type="text" name="title" value="{{ $banner->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="subtitle">Banner Subtitle</label>
                                                    <input id="subtitle" class="form-control bg-light" type="text" name="subtitle" value="{{ $banner->subtitle }}">
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="image">
                                                    <label class="custom-file-label" for="image">Choose Banner Image</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="oldimg" value="{{ $banner->image }}">
                                            <input type="hidden" value="{{ $banner->id }}" name="id">
                                            <input type="hidden" value="{{ $banner->type }}" name="type">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Home Page Modal -->
<div class="modal fade" id="addbanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Home Page Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Banner Title</label>
                    <input id="title" class="form-control bg-light" type="text" name="title" placeholder="Banner Title">
                </div>
                <div class="form-group">
                    <label for="subtitle">Banner Subtitle</label>
                    <input id="subtitle" class="form-control bg-light" type="text" name="subtitle" placeholder="Banner Subtitle">
                </div>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image">Choose Banner Image</label>
                </div>
                <input type="hidden" name="type" value="other">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
