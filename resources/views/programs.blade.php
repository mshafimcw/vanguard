 @extends('layouts.main')


 @php
    $banner = App\Http\Controllers\HomeController::getpbanner();
    @endphp

@section('content')

<section class="page-banner">

            <div class="image-layer" style="background-image:url({{ asset( $banner) }});"></div>




     <div class="banner-inner">

         <div class="auto-container">

             <div class="inner-container clearfix">

                 <h1>Programs</h1>

                 <div class="page-nav">

                     <ul class="bread-crumb clearfix">

                         <li><a href="/">Home</a></li>


                         <li class="active">Programs</li>

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

                             @foreach($programs as $program)
                             <div class="news-block-five col-md-4 col-sm-6">

                                 <div class="inner-box">

                                     <div class="image-box">

                                         <figure class="image"><img src="{{ asset('public/'.$program->image) }}"  style="min-height:250px;" alt=""></figure>

                                         <div class="date"><span>View / Donate</span></div>

                                         <div class="hover-box">

                                             <div class="more-link"><a href="{{ route('programs.details', ['id' => $program->id]) }}">View / Donate</a></div>

                                         </div>

                                     </div>


                                     <div class="lower-box">

                                         <div class="upper-info">

                                             <h4><a href="{{ route('programs.details', ['id' => $program->id]) }}">{{$program->title }}</a></h4>

                                            <!-- <div class="cat-info">

                                                 <span class="fa fa-calendar"></span>{{ \Carbon\Carbon::parse($program->created_at)->format('d/m/Y') }}

                                             </div>-->

                                         </div>

                                         <div class="text">{{$program->description }} </div>

                                         <div class="meta-info clearfix">

                                            <!-- <div class="author-info clearfix">

                                                 <div class="author-icon"><span class="flaticon-money"></span></div>

                                                 <div class="author-title">1000</div>

                                             </div>-->



                                         </div>

                                     </div>






                                 </div>

                             </div>
                             @endforeach

                             <!--News Block-->


                             <!--News Block-->



                             <!--News Block-->


                             <!--News Block-->


                             <!--News Block-->


                         </div>

                     </div>



                 </div>

             </div>






         </div>

     </div>

 </div>





























 @endsection