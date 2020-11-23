@extends('layouts.backend.master')

@section('title', 'Blog')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vendor/DataTable-1.10.20/datatables.min.css') }}">
@endsection

@section('content')
<div class="page-body p-4 text-dark">
    <div class="page-heading border-bottom d-flex flex-row">
        <h5 class="font-weight-normal">Dashboard | </h5>
        <small class="mt-2 ml-2">News or Blog</small>
    </div>

    <!-- Responsive Data Table example -->
    <div class="card mt-4 rounded-lg">
        <!-- Card body -->
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="card-title">Edit News or Blog</div>
            </div>
            <form action="{{ route('newsblog.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$blog->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="type">Select Type</label>
                        <select name="type" id="type" class="form-control">
                            <option selected disabled>-- Select Blog or News --</option>
                            <option value="blog" @if($blog->type == 'blog') {{ 'selected' }} @endif>Blog</option>
                            <option value="news" @if($blog->type == 'news') {{ 'selected' }} @endif>News</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_en">Title (en)</label>
                                <input id="title_en" class="form-control bg-light" type="text" name="title_en"
                                    value="{{ $blog->title_en }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_bn">Title (bn)</label>
                                <input id="title_bn" class="form-control bg-light" type="text" name="title_bn"
                                    value="{{ $blog->title_bn }}">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="short_description_en">Short Description (en)</label>
                                <textarea class="form-control" id="short_description_en" rows="2"
                                    name="short_description_en">{{ $blog->short_description_en }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="short_description_bn">Short Description (bn)</label>
                                <textarea class="form-control" id="short_description_bn" rows="2"
                                    name="short_description_bn">{{ $blog->short_description_bn }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_en">Description (en)</label>
                                <textarea class="form-control" id="description_en" rows="5"
                                    name="description_en"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_bn">Description (bn)</label>
                                <textarea class="form-control" id="description_bn" rows="5"
                                    name="description_bn"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose Thumbnail
                                    Image</label>
                                <img width="50" src="{{asset("uploads/blogs/thumbnail/$blog->image")}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="cover_image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="cover">Choose Cover
                                    Image</label>
                                <img width="50" src="{{asset("uploads/blogs/cover/$blog->cover_image")}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" @if($blog->status) {{ 'selected' }}
                                @endif>Active</option>
                            <option value="0" @if(!$blog->status) {{ 'selected' }}
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

@push('scripts')
<script>
    $(document).ready(function(){
        initSummernote($('#description_en'));
        initSummernote($('#description_bn'));
        $('#description_en').summernote("code", {!! json_encode($blog->description_en) !!});
        $('#description_bn').summernote("code", {!! json_encode($blog->description_bn) !!});
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