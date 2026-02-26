
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
</section>

@endsection