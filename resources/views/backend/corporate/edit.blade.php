@extends('layouts.backend.master')

@section('title', 'corporate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Corporate</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit Corportae</div>
            </div>
            <form action="{{ route('corporate.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $corporate->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose Corporate Banner Image</label>
                                <img width="50" src="{{asset("uploads/corporates/thumbnail/$corporate->image")}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" class="form-control bg-light" type="text" name="title_en"
                                    value="{{ $corporate->title_en }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" class="form-control bg-light" type="text" name="title_bn"
                                    value="{{ $corporate->title_bn }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subtitle_en">Subtitle (en)</label>
                                <input id="subtitle_en" class="form-control bg-light" type="text" name="subtitle_en"
                                    value="{{ $corporate->subtitle_en }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subtitle_bn">Subtitle (bn)</label>
                                <input id="subtitle_bn" class="form-control bg-light" type="text" name="subtitle_bn"
                                    value="{{ $corporate->subtitle_bn }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="intoduction_en">Introduction (en)</label>
                                <textarea class="form-control" id="intoduction_en" rows="5"
                                    name="intoduction_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="intoduction_bn">Introduction (bn)</label>
                                <textarea class="form-control" id="intoduction_bn" rows="5"
                                    name="intoduction_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="whyguardian_en">Why Guardian (en)</label>
                                <textarea class="form-control" id="whyguardian_en" rows="5"
                                    name="whyguardian_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="whyguardian_bn">Why Guardian (bn)</label>
                                <textarea class="form-control" id="whyguardian_bn" rows="5"
                                    name="whyguardian_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="benefit_en">Benefits (en)</label>
                                <textarea class="form-control" id="benefit_en" rows="5"
                                    name="benefit_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="benefit_bn">Benefits (bn)</label>
                                <textarea class="form-control" id="benefit_bn" rows="5"
                                    name="benefit_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grouptermlife_en">Group Term Life (en)</label>
                                <textarea class="form-control" id="grouptermlife_en" rows="5"
                                    name="grouptermlife_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grouptermlife_bn">Group Term Life (bn)</label>
                                <textarea class="form-control" id="grouptermlife_bn" rows="5"
                                    name="grouptermlife_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="illnessbenefits_en">Critical Illness Benefits (en)</label>
                                <textarea class="form-control" id="illnessbenefits_en" rows="5"
                                    name="illnessbenefits_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="illnessbenefits_bn">Critical Illness Benefits (bn)</label>
                                <textarea class="form-control" id="illnessbenefits_bn" rows="5"
                                    name="illnessbenefits_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medicalinsuranceplan_en">Group Medical Insurance Plan (en)</label>
                                <textarea class="form-control" id="medicalinsuranceplan_en" rows="5"
                                    name="medicalinsuranceplan_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medicalinsuranceplan_bn">Group Medical Insurance Plan (bn)</label>
                                <textarea class="form-control" id="medicalinsuranceplan_bn" rows="5"
                                    name="medicalinsuranceplan_bn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="accidentbenefits_en">Group Personal Accident Benefits (en)</label>
                                <textarea class="form-control" id="accidentbenefits_en" rows="5"
                                    name="accidentbenefits_en"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="accidentbenefits_bn">Group Personal Accident Benefits (en)</label>
                                <textarea class="form-control" id="accidentbenefits_bn" rows="5"
                                    name="accidentbenefits_bn"></textarea>
                            </div>
                        </div>
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

@push('scripts')
<script>
    $(document).ready(function(){
        initSummernote($('#intoduction_en'));
        initSummernote($('#intoduction_bn'));
        initSummernote($('#whyguardian_en'));
        initSummernote($('#whyguardian_bn'));
        initSummernote($('#benefit_en'));
        initSummernote($('#benefit_bn'));
        initSummernote($('#grouptermlife_en'));
        initSummernote($('#grouptermlife_bn'));
        initSummernote($('#illnessbenefits_en'));
        initSummernote($('#illnessbenefits_bn'));
        initSummernote($('#medicalinsuranceplan_en'));
        initSummernote($('#medicalinsuranceplan_bn'));
        initSummernote($('#accidentbenefits_en'));
        initSummernote($('#accidentbenefits_bn'));
        $('#intoduction_en').summernote("code", {!! json_encode($corporate->intoduction_en) !!});
        $('#intoduction_bn').summernote("code", {!! json_encode($corporate->intoduction_bn) !!});
        $('#whyguardian_en').summernote("code", {!! json_encode($corporate->whyguardian_en) !!});
        $('#whyguardian_bn').summernote("code", {!! json_encode($corporate->whyguardian_bn) !!});
        $('#benefit_en').summernote("code", {!! json_encode($corporate->benefit_en) !!});
        $('#benefit_bn').summernote("code", {!! json_encode($corporate->benefit_bn) !!});
        $('#grouptermlife_en').summernote("code", {!! json_encode($corporate->grouptermlife_en) !!});
        $('#grouptermlife_bn').summernote("code", {!! json_encode($corporate->grouptermlife_bn) !!});
        $('#illnessbenefits_en').summernote("code", {!! json_encode($corporate->illnessbenefits_en) !!});
        $('#illnessbenefits_bn').summernote("code", {!! json_encode($corporate->illnessbenefits_bn) !!});
        $('#medicalinsuranceplan_en').summernote("code", {!! json_encode($corporate->medicalinsuranceplan_en) !!});
        $('#medicalinsuranceplan_bn').summernote("code", {!! json_encode($corporate->medicalinsuranceplan_bn) !!});
        $('#accidentbenefits_en').summernote("code", {!! json_encode($corporate->accidentbenefits_en) !!});
        $('#accidentbenefits_bn').summernote("code", {!! json_encode($corporate->accidentbenefits_bn) !!});
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