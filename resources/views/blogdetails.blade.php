@extends('layouts.main')

@section('content')
<!-- Hero Start -->
<div class="container-fluid blog-detail-hero wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <p class="blog-detail-hero-title">
          How Remote Work Drastically Improved My Design Skills
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- ================= MAIN CONTENT ================= -->
<section class="detail-section">
  <div class="detail-container">

    <!-- ARTICLE AREA -->
    <article class="detail-article">

      <img src="{{ asset($blog->image) }}" class="detail-feature-image">

      <p>
        {{ $blog->title }}
      </p>

      <p>
        {!! $blog->body !!}
      </p>
      @if($multiImages->count() > 0)
      <div class="container mt-4">
        <h4 class="mb-3">Gallery</h4>
        <div class="row">
          @foreach($multiImages as $image)
          <div class="col-md-4 mb-3">
            <img src="{{ asset('posts/' . $image->image_name) }}" class="img-fluid rounded shadow" style="height:250px; object-fit:cover; width:100%;">
          </div>
          @endforeach
        </div>
      </div>
      @endif


    </article>


    <!-- SIDEBAR -->
    <aside class="detail-sidebar">

      <h4 class="sidebar-heading">Related Articles</h4>
      @foreach($relatedBlogs as $related)
      <div class="sidebar-item">
        <a href="{{ route('blogs.details', $related->id) }}">
          <img src="{{ asset($related->image) }}" alt="{{ $related->title }}">
          <div>
            <h6>{{ $related->title }}</h6>
            <span>{{ $related->created_at->format('d M Y') }}</span>
          </div>
        </a>
      </div>
      @endforeach

    </aside>

  </div>
</section>

@endsection