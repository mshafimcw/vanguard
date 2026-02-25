@extends('layouts.main')

@section('content')
<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header wow fadeIn">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start hero-text">
                <h1 class="display-1 mb-4">
                    About Us
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- ABOUT SECTION -->
<section class="about-main-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <h2 class="section-title">
                    {{ $abouts->title }}
                </h2>

                <p>
                    {!! nl2br(e($abouts->body)) !!}
                </p>

                @foreach ($features as $index => $feature)

                <div class="feature-item">

                    @if ($index == 0)
                    <i class="fa-solid fa-tag"></i>
                    @elseif ($index == 1)
                    <i class="fa-solid fa-bolt"></i>
                    @elseif ($index == 2)
                    <i class="fa-solid fa-leaf"></i>
                    @endif

                    <div>
                        <h6>{{ strtoupper($feature->title) }}</h6>
                        <p>{{ $feature->body }}</p>
                    </div>

                </div>

                @endforeach
                <a href="{{ route('home.index') }}" class="price-btn">
    Get My Price
</a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 text-center">
                <div class="image-box">
                    <img src="{{ asset($abouts->image) }}"
                        alt="{{ $abouts->title }}">

                </div>
            </div>

        </div>
    </div>
</section>

<!-- OUR MISSION & VISION -->
<section class="mission-section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-heading">Our Commitment</h2>
            <p class="section-subtitle">
                Driving sustainability through responsible recycling and innovation.
            </p>
        </div>

        <div class="row justify-content-center g-4">
            @foreach ($commitment as $commit)
            <div class="col-lg-5 col-md-6 d-flex">
                <div class="mv-card w-100">
                    <div class="mv-icon">
                         <img src="{{ asset($commit->image) }}" alt="Commit Image">
                    </div>
                    <h4>{{ $commit->title }}</h4>
                    <p>
                        {{ $commit->body }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection