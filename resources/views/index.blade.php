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
                            <div class="text">{!! $item->body !!}</div>

                            <div class="links-box clearfix">
                                <a href="{{route('home.about')}}" class=" btn-style-one">
                                    <span class="btn-title">Join the mission </span>
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

                    <h2>What Makes Enved Foundation Different </h2>

                    
                </div>

                <div class="row clearfix">

                    @foreach($whychooseus as $whychooseus)

                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">

                        <div class="inner-box">

                            <div class="content-box">

                                <div class="icon-box"><img src="{{ asset($whychooseus->image) }}" width="75px" /></div>

                                <div class="content">

                                    <div class="subtitle"> </div>

                                    <h4><a href="#">{{$whychooseus->title }}</a></h4>

                                </div>

                            </div>

                            <div class="hover-box">

                                <div class="image-layer" style="background-image: url(images/background/featured-image-1.jpg);"></div>

                                <div class="inner">

                                    <h4><a href="#">{{$whychooseus->title }}</a></h4>

                                    <div class="text">{!! $whychooseus->body !!}</div>

                                </div>

                            </div>

                            

                        </div>

                    </div>

@endforeach

                 


                   



                </div>

            </div>

        </section>



<style>


</style>
<!--About Section-->
<section class="about-section">
    <div class="image-layer" style="background-image: url('{{ asset('public/'.$aboutushome->image) }}');"></div>

    <div class="content-wrapper">
        <div class="content-box row" style="display: flex; align-items: center; justify-content: center; min-height: 45vh;padding-left: 80px;padding-right: 80px;
    color: #ffffff;">
            <div class="col-md-6 ">
                <h1>{{ $aboutushome->title }}</h1>
            </div>

            <div class="col-md-6 ">
                {!! $aboutushome->body !!}
            </div>
        </div>
    </div>
</section>


<!-- Scrolling Section -->
<section class="scroll-section">
    <div class="scroll-container">
        <div class="scroll-text">
            <span>DONATION</span>
            <span>•</span>
            <span>E-WASTE</span>
            <span>•</span>
            <span>EDUCATION</span>
            <span>•</span>
            <span>SUPPORT</span>
            <span>•</span>

            <!-- Repeat for smooth loop -->
            <span>DONATION</span>
            <span>•</span>
            <span>E-WASTE</span>
            <span>•</span>
            <span>EDUCATION</span>
            <span>•</span>
            <span>SUPPORT</span>
        </div>
    </div>
</section>
<!-- Our Focus Areas Section -->
<section class="focus-area-section">
    <div class="focus-bg"></div>

    <div class="auto-container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-5 col-md-12">
                <h2 class="focus-title">Our Focus<br>Areas</h2>
                <p class="focus-desc">
                    We help communities understand sustainable living and
                    responsible e-waste management to protect our planet.
                </p>
            </div>

            <!-- Right Content -->
            <div class="col-lg-7 col-md-12">
                <div class="focus-cards">

                    @foreach($features as $feature)
                        <div class="focus-card  {{ $loop->first ? 'active' : '' }}" data-id="{{ $feature->id }}">
                            <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}">
                            <div class="card-text">
                                <h4 class="focus-card-title">{{ $feature->title }}</h4>
                                <!-- Hidden full description for JavaScript -->
                                <div class="focus-full-desc" style="display: none;">
                                    {!! $feature->body !!}
                                </div>
                                <!-- Short preview visible in card -->
                               
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Content Display Area - Below all cards -->
                <div class="focus-content-display">
                    <div class="content-display-inner">
                        <!-- Default content when nothing is selected -->
                       @if(isset($features[0]))
                <div class="dynamic-content active">
                  {!! $features[0]->body !!}
                </div>
            @endif
			
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!--Services Section-->






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

                            <div class="date"><span>View</span></div>

                            <div class="hover-box">

                                <div class="more-link"><a href="{{ route('programs.details', ['id' => $program->id]) }}">Donate</a></div>

                            </div>

                        </div>


                        <div class="lower-box" style="background:#fff">

                            <div class="upper-info">

                                <h4><a href="#">{{$program->title }}</a></h4>

                               

                            </div>

                            <div class="meta-info clearfix">

                                <div class="author-info clearfix">

                                    <div class="author-icon"><span class="flaticon-user-3"></span></div>

                                    <div class="author-title">{{ Str::limit($program->description, 180, '..') }}</div>

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

<section class="companies-section">

    <div class="auto-container">
	
	 <div class="sec-title light with-separator centered">

            <h2>Our Partner Companies</h2>

            <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

        </div>

        <div class="carousel-box">

           

            <div class="companies-carousel owl-theme owl-carousel">

                @foreach($companies as $company)

                <div class="slide-item">

                    <div class="inner">

                        <div class="info clearfix">

                            <div class="author-thumb"><img src="{{ asset($company->image) }}" width="80px" alt=""></div>

                           
                       </div>

                     

                    </div>

                </div>
                @endforeach





            </div>

        </div>

    </div>

</section>

@endsection