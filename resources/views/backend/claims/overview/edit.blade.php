@extends('layouts.backend.master')

@section('title', 'Overview Edit')


@section('content')      
<div class="page-body p-4 text-dark">
<div class="page-heading border-bottom d-flex flex-row">
<h5 class="font-weight-normal">Edit Overview</h5>
</div>

<!-- Responsive Data Table example -->
<div class="card mt-4 rounded-lg">
<!-- Card body -->
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="card-title">Claims | Overview</div>

</div>
@if(session('success'))
        <div class="alert alert-card alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ session('success') }}</p>
        </div>
@endif
        {{-- @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-card alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $error }}</strong>
                </div>
                @endforeach
        @endif --}}

        <form action="{{ route('claims.overview.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="">

               
                <div class="row">
                   
                    <div class="col-md-6">
                        <h4>English  Version</h4>

                        <div class="form-group">
                            <label for="name_en">Name (en)</label>
                        <input id="name_en" class="form-control bg-light @if($errors->has('name_en')) {{'is-invalid'}} @endif" type="text" name="name_en" value="{{$overview->name_en}}">
                            @if($errors->has('name_en'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_en') }}
                            </small>
                            @endif
                        </div>


                      <div class="form-group">
                            <label style="font-size: 1rem !important" for="description_en">Description (en)</label>
                               
                            <textarea class="form-control" id="description_en" 
                      name="description_en">{{$overview->description_en}}</textarea>
                        </div>

                
                    </div>

                    <div class="col-md-6">
                        <h4>বাংলা ভার্সন</h4>
                     
                        <div class="form-group">
                            <label for="name_bn">নাম</label>
                        <input id="name_bn" class="form-control bg-light @if($errors->has('name_bn')) {{'is-invalid'}} @endif" type="text" name="name_bn" value="{{$overview->name_bn}}">
                            @if($errors->has('name_bn'))
                            <small class="d-block text-danger mb-3">
                                {{ $errors->first('name_bn') }}
                            </small>
                            @endif
                        </div>

                       
                        <div class="form-group">
                            <label style="font-size: 1rem !important" for="description_bn">ডেসক্রিপশন</label>
                               
                            <textarea class="form-control" id="description_bn" 
                        name="description_bn">{{$overview->description_bn}}</textarea>
                        </div>
                     
                    </div>
                </div>

            </div>

            <div class="form-group
            mt-3">
                <button type="submit" class="btn btn-primary">Update Overview</button>
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
            height:"300"
        })
    }
</script>
@endpush
