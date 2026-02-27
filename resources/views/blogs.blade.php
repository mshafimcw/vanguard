
@extends('layouts.main')

@section('content')
@php use Illuminate\Support\Str; @endphp

<!-- ================= HERO ================= -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start hero-text">
                <h1 class="display-1 mb-4">
                    BLOG & INDUSTRY <br>INSIGHTS
                </h1>
                <p class="fs-4">
                    Stay updated with scrap prices, industry news,
                    metal trends, and recycling insights in UAE.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ================= RECENT POSTS ================= -->
<section class="blog-section">
    <div class="blog-container">

    <!-- ================= BLOG SEARCH ================= -->
    <div class="blog-search-wrapper mb-5">
    <form action="{{ route('home.blogs') }}" method="GET" class="blog-search-form">

        <input 
            type="text" 
            name="search" 
            placeholder="Search blog articles..."
            value="{{ request('search') }}"
        >

        <button type="submit">
            Search
        </button>

    </form>
</div>
        <h2 class="blog-heading">
            Recent <span>Posts</span>
        </h2>

        <div class="swiper recentSwiper">
            <div class="swiper-wrapper">

                @foreach($blogs as $blog)
                <div class="swiper-slide">
                    <div class="recent-layout">

                        <!-- LEFT IMAGE -->
                        <div class="recent-image">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </div>

                        <!-- RIGHT CONTENT -->
                        <div class="recent-content">

                            <div class="recent-meta">
                                <span>{{ $blog->created_at->format('d F Y') }}</span>

                            </div>

                            <h2>{{ $blog->title }}</h2>

                            <p>
                                {{ Str::limit(strip_tags($blog->body), 150) }}
                            </p>

                            <a href="{{ route('blogs.details', $blog->id) }}" class="recent-btn">
                                Read Article →
                            </a>

                        </div>

                    </div>
                </div>
                @endforeach

            </div>

            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

<div class="section-divider"></div>

<!-- ================= WEEKLY MOST READ ================= -->
<section class="blog-section weekly-section">
    <div class="blog-container">

        <h2 class="blog-heading">
            Weekly <span>Most Read 🔥</span>
        </h2>

        <div class="weekly-grid">

            @foreach($blogs as $blog)
            <a href="{{ route('blogs.details', $blog->id) }}" class="weekly-card">

                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">

                <div class="weekly-overlay">
                    <h4>{{ $blog->title }}</h4>
                </div>

            </a>
            @endforeach

        </div>

    </div>
    <div class="d-flex justify-content-center mt-5">
    <nav aria-label="Blog pagination">
        <ul class="pagination custom-pagination">
            @if ($blogs->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev" aria-label="Previous">&laquo;</a>
                </li>
            @endif

            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                @if ($page == $blogs->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            @if ($blogs->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}" rel="next" aria-label="Next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
</section>

@endsection