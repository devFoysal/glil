@extends('layouts.backend.master')

@section('title', 'Page Banner')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')      
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Home Page Banner</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Home Page Banner</div>
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
                            <th>Title (en)</th>
                            <th>Title (bn)</th>
                            <th>Subtitle (en)</th>
                            <th>Subtitle (bn)</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        @foreach ($banners as $index => $banner)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $banner->title_en }}</td>
                                <td>{{ $banner->title_bn }}</td>
                                <td>{{ $banner->subtitle_en }}</td>
                                <td>{{ $banner->subtitle_bn }}</td>
                                <td>
                                    <img src="{{ asset('uploads/'.$banner->image) }}" alt="" class="img-fluid" width="100">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editbanner{{ $banner->id }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('homebanner.destroy', ['id'=>$banner->id]) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Edit Home Page Banner Modal -->
                            <div class="modal fade" id="editbanner{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Home Page Banner</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="{{ route('homebanner.edit') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title_en">Banner Title (en)</label>
                                                    <input id="title_en" class="form-control bg-light" type="text" name="title_en" value="{{ $banner->title_en }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title_bn">Banner Title (bn)</label>
                                                    <input id="title_bn" class="form-control bg-light" type="text" name="title_bn" value="{{ $banner->title_bn }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="subtitle_en">Banner Subtitle (en)</label>
                                                    <input id="subtitle_en" class="form-control bg-light" type="text" name="subtitle_en" value="{{ $banner->subtitle_en }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="subtitle_bn">Banner Subtitle (bn)</label>
                                                    <input id="subtitle_bn" class="form-control bg-light" type="text" name="subtitle_bn" value="{{ $banner->subtitle_bn }}">
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="image">
                                                    <label class="custom-file-label" for="image">Choose Banner Image</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="oldimg" value="{{ $banner->image }}">
                                            <input type="hidden" value="{{ $banner->id }}" name="id">
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
        <form action="{{ route('homebanner.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="title_en">Banner Title (en)</label>
                    <input id="title_en" class="form-control bg-light" type="text" name="title_en" placeholder="Banner Title in English">
                </div>
                <div class="form-group">
                    <label for="title_bn">Banner Title (bn)</label>
                    <input id="title_bn" class="form-control bg-light" type="text" name="title_bn" placeholder="Banner Title in Bangla">
                </div>
                <div class="form-group">
                    <label for="subtitle_en">Banner Subtitle (en)</label>
                    <input id="subtitle_en" class="form-control bg-light" type="text" name="subtitle_en" placeholder="Banner Subtitle in English">
                </div>
                <div class="form-group">
                    <label for="subtitle_bn">Banner Subtitle (bn)</label>
                    <input id="subtitle_bn" class="form-control bg-light" type="text" name="subtitle_bn" placeholder="Banner Subtitle in Bangla">
                </div>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image">Choose Banner Image</label>
                </div>
                <input type="hidden" name="type" value="home">
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
