@extends('layouts.main')


@section('content')


<section class="banner-section banner-one">
    <div class="banner-carousel owl-theme owl-carousel">

        @foreach($slider as $key => $item)
        <div class="slide-item">
            <div class="image-layer" style="background-image: url('{{ asset($item->image) }}');"></div>

            <div class="auto-container">
                <div class="content-box">
                    <div class="content clearfix">
                        <div class="inner">
                            <h1>{{ $item->title }}</h1>
                            <div class="text">{{ $item->description }}</div>

                            <div class="links-box clearfix">
                                <a href="#" class="theme-btn btn-style-one">
                                    <span class="btn-title">About Us</span>
                                </a>
                                <a href="#" class="theme-btn btn-style-two lightbox-image">
                                    <span class="btn-title">Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  <div class="next-slide">
                <div class="inner">
                    <div class="text"></div>
                    <div class="arrow"><span class="flaticon-next"></span></div>
                </div>
            </div>-->
        </div>
        @endforeach

    </div>
</section>



                        </div>

                    </div>



                </div>

            </div>

        </section>


  <!--Welcome Section-->

        <section class="welcome-section">

            <div class="auto-container">

                <div class="sec-title centered">

                    <h2>Why Choose Enved </h2>

                    
                </div>

                <div class="row clearfix">

                    @foreach($whychooseus as $whychooseus)

                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">

                        <div class="inner-box">

                            <div class="content-box">

                                <div class="icon-box"><span class="flaticon-anchor"></span></div>

                                <div class="content">

                                    <div class="subtitle"> </div>

                                    <h4><a href="#">{{$whychooseus->title }}</a></h4>

                                </div>

                            </div>

                            <div class="hover-box">

                                <div class="image-layer" style="background-image: url(images/background/featured-image-1.jpg);"></div>

                                <div class="inner">

                                    <h4><a href="#">{{$whychooseus->title }}</a></h4>

                                    <div class="text">{{$whychooseus->body}}</div>

                                </div>

                            </div>

                            <div class="more-link">

                                <a href="#"><span class="flaticon-right-2"></span></a>

                            </div>

                        </div>

                    </div>

@endforeach

                 


                   



                </div>

            </div>

        </section>




<!--About Section-->

<section class="about-section">

    <div class="image-layer" style="background-image: url({{ asset('public/'.$abouts->image) }});"></div>


    <div class="auto-container">

        <div class="content-box">

            <div class="inner" style="width:100%;">

                <div class="sec-title light">

                    <h2>{{$abouts->title }}</h2>

                </div>

                <div class="upper-text clearfix" style="color:#fff;">{{$abouts->body }}</div>

            </div>



            <!--Quote-->

           

        </div>

    </div>

</section>



<!--Services Section-->

<section class="services-section">

    <div class="image-left">

        <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>

    </div>

    <div class="auto-container">



        <div class="row clearfix">

            <!--Featured Service Block-->

            <div class="featured-service-block col-xl-4 col-lg-12 col-md-12">

                <div class="inner-box">

                    <figure class="image-box">
                        <a href="#"><img src="images/resource/featured-image-1.jpg" alt=""></a>
                    </figure>

                    <div class="lower-box">

                        <h3><a href="#">Our Features</a></h3>

                        <div class="more-link"><a href="#">Explore Us</a></div>

                    </div>

                </div>

            </div>



            <div class="column col-xl-8 col-lg-12 col-md-12">

                <div class="col-inner">

                    <div class="row clearfix">

                        @foreach($features as $features)

                        <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="icon-box"><span class="icon flaticon-sheriff-badge"></span></div>

                                    <div class="content">

                                        <h4><a href="#">{{$features->title}}</a></h4>

                                        <div class="text">{{$features->body}}</div>

                                        <div class="read-more"><a href="#">Read More</a></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        @endforeach

                        <!--Feature Block-->



                    </div>

                </div>

            </div>

        </div>



    </div>



</section>





<!--Events Section-->

<section class="events-section">

    <div class="auto-container">

        <div class="row clearfix">



            <div class="left-column col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="col-inner">

                    <div class="sec-title with-separator">

                        <h2>Upcoming Activities & Events</h2>

                        <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                    </div>



                    <div class="carousel-box">

                        @foreach($events as $event)

                        <div class="event-block">

                            <div class="inner-box">

                                <div class="content-box">

                                    <div class="date-box">
                                        <div class="date">
                                            <span class="day">{{ \Carbon\Carbon::parse($event->created_date)->format('d') }}</span>
                                            <span class="month">{{ \Carbon\Carbon::parse($event->created_date)->format('F') }}</span>
                                        </div>
                                    </div>

                                    <div class="content">

                                        <div class="cat-info"><a href="#">{{ $event->name }}</a></div>

                                        <h3><a href="#">{{ $event->name }}</a></h3>

                                        <div class="location">{{ $event->description }}</div>

                                        <div class="read-more"><a href="{{ route('events.details', ['id' => $event->id]) }}">Read More</a></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        @endforeach



                        <!--Event Block-->





                    </div>



                </div>

            </div>






        </div>

    </div>

</section>


<!--Services Section-->

<section class="services-section-two">

    <div class="image-layer" style="background-image: url(images/background/image-4.jpg);"></div>

    <div class="auto-container">

        <div class="sec-title light with-separator centered">

            <h2>Our Programs </h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>




        <div class="blog-posts">

            <div class="row clearfix">

                <!--News Block-->

                @foreach($programs as $program)
                <div class="news-block-five col-md-4 col-sm-6">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><img src="{{ asset($program->image) }}" alt=""></figure>

                            <div class="date"><span>27.11.2019</span></div>

                            <div class="hover-box">

                                <div class="more-link"><a href="{{ route('programs.details', ['id' => $program->id]) }}">Donate</a></div>

                            </div>

                        </div>


                        <div class="lower-box" style="background:#fff">

                            <div class="upper-info">

                                <h4><a href="#">{{$program->title }}</a></h4>

                                <div class="cat-info">

                                    <a href="#"><span class="fa fa-folder"></span>Community Life</a>

                                </div>

                            </div>

                            <div class="meta-info clearfix">

                                <div class="author-info clearfix">

                                    <div class="author-icon"><span class="flaticon-user-3"></span></div>

                                    <div class="author-title">{{$program->description }}</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                @endforeach


            </div>

        </div>




    </div>

    </div>

</section>



<!--Contact Info Section-->

<section class="contact-info-section">

    <div class="image-layer" style="background-image: url(images/background/image-5.jpg);"></div>

    <div class="auto-container">

        <div class="sec-title with-separator centered">

            <h2>Our Contact</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>


        </div>

        <div class="info-outer clearfix">

            <!--Info Box-->

            <div class="info-box">

                <div class="inner">

                    <div class="icon"><span class="flaticon-password"></span></div>

                    <strong>Call on</strong>

                    <div class="info"><a href="tel:+4488812345">+91 888 12 345</a></div>

                </div>

            </div>

            <!--Info Box-->

            <div class="info-box">

                <div class="inner">

                    <div class="icon"><span class="flaticon-contact"></span></div>

                    <strong>Mail at</strong>

                    <div class="info"><a href="mailto:Mail@enved.com">Mail@enved.com</a></div>

                </div>

            </div>

            <!--Info Box-->

            <div class="info-box">

                <div class="inner">

                    <div class="icon"><span class="flaticon-circular-clock"></span></div>

                    <strong>Off hrs</strong>

                    <div class="info">10am to 6pm</div>

                </div>

            </div>

            <!--Info Box-->

            <div class="info-box">

                <div class="inner">

                    <div class="icon"><span class="flaticon-checklist"></span></div>

                    <strong>LN 311</strong>

                    <div class="info">Non Emergency</div>

                </div>

            </div>

        </div>

    </div>



</section>



<!--Testimonials Section-->

<section class="testimonials-section">

    <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>



    <div class="auto-container">

        <div class="carousel-box">

            <div class="icon-box"><span>Q</span></div>

            <div class="testimonial-carousel owl-theme owl-carousel">

                @foreach($testimonials as $testimonials)

                <div class="slide-item">

                    <div class="inner">

                        <div class="info clearfix">

                            <div class="author-thumb"><img src="{{ asset($testimonials->image) }}" alt=""></div>

                            <div class="name">{{$testimonials->title}}</div>


                        </div>

                        <div class="text">“{{$testimonials->body}}”</div>

                    </div>

                </div>
                @endforeach





            </div>

        </div>

    </div>



</section>



<!--Facts Section-->

<section class="facts-section">

    <div class="auto-container">

        <div class="row clearfix">

            @foreach($counters as $counters)

            <div class="fact-column col-lg-4 col-md-4 col-sm-12">

                <div class="inner">

                    <div class="fact-box">

                        <span class="count-box">{{$counters->title}}</span>

                    </div>
                    <h4 class="fact-title">{{$counters->body}}</h4>


                </div>

            </div>
            @endforeach



        </div>

    </div>

</section>

@endsection