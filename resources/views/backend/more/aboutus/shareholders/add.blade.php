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
                <div class="card-title">Add Shareholder</div>
            </div>
            <form action="{{ route('aboutus.shareholders.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_en">Name (en)</label>
                                <input id="name_en" class="form-control bg-light" type="text" name="name_en"
                                    placeholder="Shareholder Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_bn">Name (bn)</label>
                                <input id="name_bn" class="form-control bg-light" type="text" name="name_bn"
                                    placeholder="Shareholder Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numberOfShare">Number of Shareholder (en)</label>
                                <input id="numberOfShare" class="form-control bg-light" type="text" name="numberOfShare"
                                    placeholder="Number of Shareholders">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="percentageOfShare">% Percentage of Share (bn)</label>
                                <input id="percentageOfShare" class="form-control bg-light" type="text"
                                    name="percentageOfShare" placeholder="Percentage of Share">
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