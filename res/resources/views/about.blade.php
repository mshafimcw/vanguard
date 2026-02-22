 @extends('layouts.main')


@section('content')
<section class="page-banner">

            <div class="image-layer" style="background-image:url(images/background/banner-image-2.jpg);"></div>



            <div class="banner-inner">

                <div class="auto-container">

                    <div class="inner-container clearfix">

                        <h1>About Us</h1>

                        <div class="page-nav">

                            <ul class="bread-crumb clearfix">

                                <li><a href="/">Home</a></li>


                                <li class="active">About Us</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>
		
		
		 <section class="welcome-section-two alternate">

            <div class="lower-row">

                <div class="auto-container">

                    <div class="row clearfix">

                        <div class="text-col col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="inner">

                                <div class="sec-title with-separator">

                                    <h2>{{$abouts->title}}</h2>

                                    <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                                </div>

                                <div class="text">{{$abouts->body}}</div>


                            </div>

                        </div>



                        <div class="image-col col-xl-7 col-lg-6 col-md-12 col-sm-12">

                            <div class="images">

                                <div class="row clearfix">

                                    <div class="image col-md-12 col-sm-12">

                                        <a class="lightbox-image" data-fancybox="about-gallery" href="{{ asset('uploads/' . $abouts->image) }}"><img src="{{ asset('uploads/' . $abouts->image) }}" alt=""></a>

                                    </div>

                                    

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </section>
		
		
	 
	
		
		
        

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		

  @endsection