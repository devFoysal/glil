@extends('layouts.backend.master')

@section('title', 'Newsletter')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">Newsletter</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit Newsletter</div>
            </div>
            <form action="{{ route('newsletter.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$newsletter->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-file mb-3">
                                <input type="file" name="newsletter_en" class="custom-file-input" id="newsletter_en">
                                <label class="custom-file-label" for="newsletter_en">Choose Newsletter en</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file mb-3">
                                <input type="file" name="newsletter_bn" class="custom-file-input" id="newsletter_bn">
                                <label class="custom-file-label" for="newsletter_bn">Choose Newsletter bn</label>
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
@push('scripts')
<script>
    $(document).ready(function(){
        initSummernote($('#title_en'));
        initSummernote($('#title_bn'));

        $('#title_en').summernote("code", {!! json_encode($newsletter->title_en) !!});
        $('#title_bn').summernote("code", {!! json_encode($newsletter->title_bn) !!});
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