@extends('layouts.backend.master')

@section('title', 'Team')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Team</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit Team</div>
            </div>
            <form action="{{ route('aboutus.managementTeam.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$mTeam->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="custom-file mb-3">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose Team Image</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img width="50" src="{{asset("uploads/management-team/$mTeam->image")}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_en">Name (en)</label>
                                <input id="name_en" value="{{$mTeam->name_en}}" class="form-control bg-light"
                                    type="text" name="name_en" placeholder="Director Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_bn">Name (bn)</label>
                                <input id="name_bn" value="{{$mTeam->name_bn}}" class="form-control bg-light"
                                    type="text" name="name_bn" placeholder="Director Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation_en">Designation (en)</label>
                                <input id="designation_en" value="{{$mTeam->designation_en}}"
                                    class="form-control bg-light" type="text" name="designation_en"
                                    placeholder="Designation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation_bn">Designation (bn)</label>
                                <input id="designation_bn" value="{{$mTeam->designation_bn}}"
                                    class="form-control bg-light" type="text" name="designation_bn"
                                    placeholder="Designation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="orders">Director List Order</label>
                                <input id="orders" value="{{$mTeam->orders}}" class="form-control bg-light"
                                    type="text" name="orders" placeholder="Designation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1" @if($mTeam->status) {{ 'selected' }}
                                        @endif>Active</option>
                                    <option value="0" @if(!$mTeam->status) {{ 'selected' }}
                                        @endif>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection