@extends('layouts.backend.master')

@section('title', 'Video')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Video</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit Video</div>
            </div>
            <form action="{{ route('videos.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$video->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="type">Select Type</label>
                        <select name="type" id="type" class="form-control">
                            <option selected disabled>-- Select Videos Page --</option>
                            <option value="aboutus" @if($video->type == 'aboutus') {{ 'selected' }}
                                @endif>About Us</option>
                            <option value="corona-virus" @if($video->type == 'corona-virus') {{ 'selected' }}
                                @endif>Corona Virus</option>
                            <option value="news" @if($video->type == 'news') {{ 'selected' }}
                                @endif>News</option>
                                <option value="tvc" @if($video->type == 'tvc') {{ 'selected' }}
                                @endif>Video & TVC</option>
                                
                                <option value="stakeholder" @if($video->type == 'stakeholder') {{ 'selected' }}
                                @endif>Stakeholder Experiences</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" value="{{$video->title_en}}" class="form-control bg-light" type="text" name="title_en"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" value="{{$video->title_bn}}" class="form-control bg-light" type="text" name="title_bn"
                                    placeholder="Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="video">Youtube Video Id</label>
                                <input id="video" value="{{$video->video}}" class="form-control bg-light" type="text"
                                    name="video" placeholder="Video id eg: 9Je3wtnXUTQ">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" @if($video->status) {{ 'selected' }}
                                @endif>Active</option>
                            <option value="0" @if(!$video->status) {{ 'selected' }}
                                @endif>Inactive</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection