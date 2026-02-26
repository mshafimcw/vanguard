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
      @foreach ($multiImages as $image)
      <img src="{{ asset('posts/' . $image->image_name) }}" />
      {{ $image->image_name }}
      @endforeach
      

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