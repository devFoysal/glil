@extends('layouts.backend.master')

@section('title', 'Who We Are')

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
                <div class="card-title">Edit Who We Are</div>
            </div>
            <form action="{{ route('aboutus.whoWeAre.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$whoWeAre->id}}">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_en">Who we are (en)</label>
                                <textarea class="form-control" id="description_en" rows="4"
                                    name="description_en"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_bn">Who we are (bn)</label>
                                <textarea class="form-control" id="description_bn" rows="4"
                                    name="description_bn"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sponsors">Our Sponsors:</label>
                                <textarea class="form-control" id="sponsors" rows="4" name="sponsors"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="video">Youtube Video Link</label>
                                <input id="video" value="{{$whoWeAre->video}}" class="form-control bg-light" type="text"
                                    name="video" placeholder="Video link">
                            </div>
                        </div>

                    </div>

                    <div class="form-group mt-4">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" @if($whoWeAre->status) {{ 'selected' }}
                                @endif>Active</option>
                            <option value="0" @if(!$whoWeAre->status) {{ 'selected' }}
                                @endif>Inactive</option>
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

@push('scripts')
<script>
    $(document).ready(function(){
        initSummernote($('#description_en'));
        initSummernote($('#description_bn'));
        initSummernote($('#sponsors'));

        $('#description_en').summernote("code", {!! json_encode($whoWeAre->description_en) !!});
        $('#description_bn').summernote("code", {!! json_encode($whoWeAre->description_bn) !!});
        $('#sponsors').summernote("code", {!! json_encode($whoWeAre->sponsors) !!});
    })

    function initSummernote(el){
        $(el).summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear','fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
            ],
            fontSizes: ['12', '14', '16','18', '24', '36', '48' , '64', '82', '150'],
            fontNames: ['Ubuntu'],
            height:"100"
        })
    }
</script>
@endpush