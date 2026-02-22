@extends('layouts.main')

@section('content')
<style>
/* Pagination Styles */
.pagination-wrapper {
    margin-top: 50px;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
    margin: 0;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.pagination li {
    margin: 0;
}

.pagination li a,
.pagination li span {
    display: block;
    padding: 12px 20px;
    background: #fff;
    color: #333;
    text-decoration: none;
    border: 1px solid #ddd;
    border-right: none;
    transition: all 0.3s ease;
}

.pagination li:last-child a,
.pagination li:last-child span {
    border-right: 1px solid #ddd;
}

.pagination li a:hover {
    background: #f8f9fa;
    color: #007bff;
}

.pagination li.active span {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
}

.pagination li.disabled span {
    background: #f8f9fa;
    color: #6c757d;
    cursor: not-allowed;
}

/* Responsive Pagination */
@media (max-width: 768px) {
    .pagination li a,
    .pagination li span {
        padding: 10px 15px;
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .pagination li a,
    .pagination li span {
        padding: 8px 12px;
        font-size: 13px;
    }
}
</style>

 @php
    $banner = App\Http\Controllers\HomeController::getpbanner();
    @endphp



<section class="page-banner">

            <div class="image-layer" style="background-image:url({{ asset( $banner) }});"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Blogs</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="content-inner">
                    <div class="blog-posts">
                        <div class="row clearfix">
                            <!--News Block-->
                            @foreach($blogs as $blog)
                            <div class="news-block-five col-md-4 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('public/'.$blog->image) }}"  style="min-height:250px;" alt=""></figure>
                                        <div class="date"><span>View </span></div>
                                        <div class="hover-box">
                                            <div class="more-link"><a href="{{ route('blogs.details', ['id' => $blog->id]) }}">View </a></div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="upper-info">
                                            <h4><a href="{{ route('blogs.details', ['id' => $blog->id]) }}">{{$blog->title }}</a></h4>
                                            <div class="cat-info">
                                                <span class="fa fa-calendar"></span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                                            </div>
                                        </div>
                                        <div class="text">{{ Str::limit(strip_tags($blog->body), 100, '..') }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Pagination Section -->
                        @if($blogs->hasPages())
                        <div class="pagination-wrapper text-center mt-5">
                            <ul class="pagination clearfix">
                                {{-- Previous Page Link --}}
                                @if($blogs->onFirstPage())
                                    <li class="disabled"><span>&laquo;</span></li>
                                @else
                                    <li><a href="{{ $blogs->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if($page == $blogs->currentPage())
                                        <li class="active"><span>{{ $page }}</span></li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if($blogs->hasMorePages())
                                    <li><a href="{{ $blogs->nextPageUrl() }}" rel="next">&raquo;</a></li>
                                @else
                                    <li class="disabled"><span>&raquo;</span></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection