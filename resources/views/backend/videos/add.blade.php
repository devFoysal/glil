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
                <div class="card-title">Add Videos</div>
            </div>
            <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="type">Select Type</label>
                        <select name="type" id="type" class="form-control">
                            <option selected disabled>-- Select Videos Page --</option>
                            <option value="aboutus" selected>About Us</option>
                            <option value="corona-virus">Corona Virus</option>
                            <option value="news">News</option>
                            <option value="tvc">Video & TVC</option>
                            <option value="stakeholder">Stakeholder Experiences</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" class="form-control bg-light" type="text" name="title_en"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" class="form-control bg-light" type="text" name="title_bn"
                                    placeholder="Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="video">Youtube Video Id</label>
                                <input id="video" class="form-control bg-light" type="text" name="video"
                                    placeholder="Video id eg: 9Je3wtnXUTQ">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

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