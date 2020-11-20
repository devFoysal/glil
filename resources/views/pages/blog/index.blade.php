@extends("layouts.master")
@section("title", "Blog")
@section("content")

<section id="banner-no-text" style="background-image: url({{asset("assets/img/newsevent.png")}})"></section>
<section id="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('home', app()->getLocale())}}">
                    @if (app()->getLocale() == 'bn')
                    <i class="fas fa-home"></i> হোম
                    @elseif (app()->getLocale() == 'en')
                    <i class="fas fa-home"></i> Back to Home
                    @endif
                </a>
            </div>
        </div>
    </div>
</section>

<section id="news-event">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">
                    <span class="">
                        @if (app()->getLocale() == 'bn')
                        ব্লগ
                        @elseif (app()->getLocale() == 'en')
                        Blog
                        @endif
                    </span>
                </h2>
            </div>
            <div class="col-lg-8 pb-4 pb-lg-0">
                <div class="row">
                    @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                    <div class="col-md-6">

                        <div class="card">
                            <a class="link" href="{{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                <img src="{{asset("assets/img/news/image1.png")}}" alt="" class="card-img-top" />
                            </a>

                            <div class="card-body py-5">
                                <a class="link" href="{{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                    <h5 class="card-title">
                                        @if (app()->getLocale() == 'bn')
                                        {{Str::limit($blog->title_bn, 50)}}
                                        @else
                                        {{Str::limit($blog->title_en, 50)}}
                                        @endif
                                    </h5>
                                    <p class="card-text">
                                        @if (app()->getLocale() == 'bn')
                                        {{Str::limit($blog->short_description_bn, 80)}}
                                        @else
                                        {{Str::limit($blog->short_description_en, 80)}}
                                        @endif

                                    </p>
                                </a>
                            </div>

                            <div class="card-footer">
                                <h6 class="mb-4">
                                    @if (app()->getLocale() == 'bn')
                                    পোস্ট করা হয়েছে: {{banglaDate(date('d M y', strtotime($blog->created_at)))}}
                                    @else
                                    Posted on: {{date('d M, Y', strtotime($blog->create_at))}}
                                    @endif
                                </h6>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Share :</h6>
                                    <div class="social-icons">
                                        <li>
                                            <a
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://twitter.com/intent/tweet?url={{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://pinterest.com/pin/create/link/?url={{ route('blog.detail', [app()->getLocale(), $blog->id]) }}&media={{asset("uploads/blogs/cover/$blog->cover_image")}}&description={{app()->getLocale() == 'bn' ? $blog->title_bn : $blog->title_en}}">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar mb-4">
                    <h5 class="title">
                        @if (app()->getLocale() == 'bn')
                        সাম্প্রতিক পোস্ট
                        @else
                        Recent Blogs
                        @endif

                    </h5>
                    @if (count($recentBlogs))
                    @foreach ($recentBlogs as $blog)
                    <div class="side-bar-box">
                        <div class="blog-thumbnail w-75">
                            <a class="link d-block" href="{{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                <img src="{{asset("assets/img/news/image3.png")}}" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="blog-info w-100">
                            <h6>
                                <a class="link d-block" href="{{ route('blog.detail', [app()->getLocale(), $blog->id]) }}">
                                    @if (app()->getLocale() == 'bn')
                                    {{Str::limit($blog->title_bn, 40)}}
                                    @else
                                    {{Str::limit($blog->title_en, 40)}}
                                    @endif
                                </a>
                            </h6>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            
            equalHeight('#news-event .card-title');
            equalHeight('#news-event .card-text');
        })

        function equalHeight(className) {
                var selector = $(className);
                var heights = [];

                selector.each(function() {
                    var height = $(this).height();
                    heights.push(height);
                });

                var maxHeight = Math.max.apply(null, heights);
                selector.each(function() {
                    $(this).height(maxHeight);
                });
            }
    </script>
@endpush