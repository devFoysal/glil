@extends('layouts.backend.master')

@section('title', 'About')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">About</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit About</div>
            </div>
            <form action="{{ route('aboutus.about.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$about->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="custom-file mb-3">
                                <input type="file" name="banner" class="custom-file-input" id="banner">
                                <label class="custom-file-label" for="banner">Choose Team Image</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <img width="50" src="{{asset("uploads/aboutus/$about->banner")}}" alt="">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="livesCovered">Lives Covered</label>
                                <input class="form-control" value="{{$about->livesCovered}}" id="livesCovered" rows="4"
                                    name="livesCovered" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="paidInClaims">Paid In Claims</label>
                                <input class="form-control" value="{{$about->paidInClaims}}" id="paidInClaims" rows="4"
                                    name="paidInClaims" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="claimPayoutRatio">Claim Payout Ratio</label>
                                <input class="form-control" value="{{$about->claimPayoutRatio}}" id="claimPayoutRatio"
                                    rows="4" name="claimPayoutRatio" />
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