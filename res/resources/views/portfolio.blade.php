@extends('layouts.main')

@section('content')


<section class="page-banner">

  <div class="image-layer" style="background-image:url(images/background/banner-image-3.jpg);"></div>



  <div class="banner-inner">

    <div class="auto-container">

      <div class="inner-container clearfix">

        <h1>Gallery</h1>

        <div class="page-nav">

          <ul class="bread-crumb clearfix">

            <li><a href="#">Home</a></li>


            <li class="active">Gallery</li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</section>




<section class="portfolio-section portfolio-mixitup">

  <div class="auto-container">


    <div class="sec-title with-separator centered">

      <h2>Gallery</h2>

      <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

    </div>

    <!--Mixit Galery-->

    <div class="mixit-gallery filter-gallery">

      <div class="filters clearfix">

        

      </div>



      <div class="filter-list row clearfix">

        <!--Gallery Item-->
        @foreach($gallery as $post)
        <div class="gallery-block mix all tour industry col-lg-4 col-md-6 col-sm-12">


          <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

            <div class="image-box">

              <figure class="image">

                <img src="{{ asset('public/' .$post->image) }}" alt="">

              </figure>

              <div class="zoom-btn">

                <a class="lightbox-image zoom-link" href="{{ asset('public/' .$post->image) }}" data-fancybox="gallery"><span class="icon flaticon-zoom-in"></span></a>

              </div>

              <div class="cap-box">

                <h6>{{ $post->body }}</h6>


              </div>

            </div>

            


          </div>

        </div>
        @endforeach




      


      </div>

    </div>

</section>




















@endsection