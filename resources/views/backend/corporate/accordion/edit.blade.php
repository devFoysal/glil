@extends('layouts.backend.master')

@section('title', 'Corporate Accordion')

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Corporate Accordion</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit Corporate Accordion</div>
            </div>
            <form action="{{ route('corporateaccordion.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$corporateaccordion->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="page_link">Select Page</label>
                        <select name="page_link" id="page_link" class="form-control">
                            <option selected disabled>-- Select Page --</option>
                            <option value="Group Term Life" @if($corporateaccordion->page_link == 'Group Term Life') {{ 'selected' }} @endif>Group Term Life</option>
                            <option value="Critical Illness Benefits" @if($corporateaccordion->page_link == 'Critical Illness Benefits') {{ 'selected' }} @endif>Critical Illness Benefits</option>
                            <option value="Group Medical Insurance Plan" @if($corporateaccordion->page_link == 'Group Medical Insurance Plan') {{ 'selected' }} @endif>Group Medical Insurance Plan</option>
                            <option value="Group Personal Accident Benefit" @if($corporateaccordion->page_link == 'Group Personal Accident Benefit') {{ 'selected' }} @endif>Group Personal Accident Benefit</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" class="form-control bg-light" type="text" name="title_en" value="{{ $corporateaccordion->title_en }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" class="form-control bg-light" type="text" name="title_bn" value="{{ $corporateaccordion->title_bn }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_en">Description (en)</label>
                                <textarea class="form-control" id="description_en" rows="4"
                                    name="description_en" value="{{ $corporateaccordion->description_en }}"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_bn">Description (bn)</label>
                                <textarea class="form-control" id="description_bn" rows="4"
                                    name="description_bn" value="{{ $corporateaccordion->description_bn }}"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
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
        $('#description_en').summernote("code", {!! json_encode($corporateaccordion->description_en) !!});
        $('#description_bn').summernote("code", {!! json_encode($corporateaccordion->description_bn) !!});
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