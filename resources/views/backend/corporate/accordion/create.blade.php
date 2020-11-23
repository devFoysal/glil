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
                <div class="card-title">Add Corporate Accordion</div>
            </div>
            <form action="{{ route('corporateaccordion.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="page_link">Select Page</label>
                        <select name="page_link" id="page_link" class="form-control">
                            <option selected disabled>-- Select Page --</option>
                            <option value="Group Term Life">Group Term Life</option>
                            <option value="Critical Illness Benefits">Critical Illness Benefits</option>
                            <option value="Group Medical Insurance Plan">Group Medical Insurance Plan</option>
                            <option value="Group Personal Accident Benefit">Group Personal Accident Benefit</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" class="form-control bg-light" type="text" name="title_en"
                                    placeholder="Accordion Title in English">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" class="form-control bg-light" type="text" name="title_bn"
                                    placeholder="Accordion Title in Bangla">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_en">Description (en)</label>
                                <textarea class="form-control" id="description_en" rows="4"
                                    name="description_en"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_bn">Description (bn)</label>
                                <textarea class="form-control" id="description_bn" rows="4"
                                    name="description_bn"></textarea>
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