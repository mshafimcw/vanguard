<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="utf-8">

    <title>ENVED - Empowering Action for Environment & Sustainability</title>

    <!-- Stylesheets -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive File -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-animate.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/profilestyle.css') }}" rel="stylesheet" />

   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">-->





    <!-- Responsive Settings -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


    @php
    $phone1 = App\Http\Controllers\HomeController::getphone1();
    //$address = App\Http\Controllers\HomeController::getalladdress();
    //$email = App\Http\Controllers\HomeController::getemail();
    $email1 = App\Http\Controllers\HomeController::getemail1();
    //$socialicons = App\Http\Controllers\HomeController::getsocialicons();
    //$getaddress = App\Http\Controllers\HomeController::getaddress();
    $logo = App\Http\Controllers\HomeController::getlogo();


    //$servername= request()->getHttpHost();

    $socialicons = App\Http\Controllers\HomeController::getsocialicons();

    //$branch1=App\Http\Controllers\HomeController::getbranch1();
    // $branch2=App\Http\Controllers\HomeController::getbranch2();

    @endphp
     @yield('styles')
</head>



<body>



    <div class="page-wrapper">

        <!-- Preloader -->

        <div class="preloader">
            <div class="icon"></div>
        </div>



        <!-- Main Header -->

        <header class="main-header header-style-one">

            <!-- Header Top -->

            <div class="header-top header-top-one">

                <div class="auto-container">

                    <div class="inner clearfix">

                        <div class="top-left clearfix">

                            <div class="phone"><a href="tel:{{$phone1}}"><span class="icon fa fa-phone-alt"></span>{{$phone1}}</a></div>

                            <div class="email"><a href="mailto:{{$email1}}"><span class="icon fa fa-envelope"></span>{{$email1}}</a></div>

                        </div>



                        <div class="mid-text"><span>Visiting London?</span> Find events, residents and more.</div>



                        <div class="top-right clearfix">


                            <div class="hours">

                                <div class="hours-btn">Open Today: 09 to 18 <span class="arrow flaticon-down-arrow"></span></div>

                                <div class="hours-dropdown">

                                    <ul>

                                        <li><a href="#">Monday: 09 to 18</a></li>

                                        <li><a href="#">Tuesday: 09 to 18</a></li>

                                        <li><a href="#">Wednesday: 09 to 18</a></li>

                                        <li><a href="#">Thursday: 09 to 18</a></li>

                                        <li><a href="#">Friday: 09 to 18</a></li>

                                        <li><a href="#">Saturday: 10 to 15</a></li>

                                        <li><a href="#">Sunday: Off</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Header Upper -->

            <div class="header-upper">

                <div class="auto-container">

                    <div class="inner-container clearfix">

                        <!--Logo-->

                        <div class="logo-box clearfix">

                            <div class="logo">
                                <a title=""><img src="{{ asset($logo) }}" alt="" title=""></a>
                            </div>


                        </div>



                        <!--Nav-->

                        <div class="nav-outer clearfix">

                            <!--Mobile Navigation Toggler-->

                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>



                            <!-- Main Menu -->

                            <nav class="main-menu navbar-expand-md navbar-light">

                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">

                                    <ul class="navigation clearfix">

                                        <li class="current "><a href="{{route('home.index')}}">Home</a></li>
                                        <li><a href="{{route('home.about')}}">About Us</a></li>
                                       <li class=""><a href="{{route('home.programs')}}">Programs</a></li>
                                        <li class=""><a href="{{route('projects.list')}}">projects</a></li>
                                        <li class=""><a href="{{route('events')}}">Events </a></li>
                                        <li class=""><a href="{{route('home.portfolio')}}"> Gallery</a></li>
                                        <li class=""><a href="{{ route('donate.form') }}">Common Donation</a></li>
                                        <li><a href="{{ route('home.contact') }}">Contact</a></li>



                                    </ul>

                                </div>

                            </nav>

                        </div>



                        <!--Other Links-->

                        <div class="other-links clearfix">

                            <!--Language-->

                            @if (Auth::check())
                            <div class="profile-dropdown me-3 text-center align-self-center" style="margin-top: 25px;margin-left: 20px;">
                                <img src="{{ Auth::user()->profile_image ? asset(Auth::user()->profile_image) : asset('default-avatar.png') }}"
                                    class="user-avatar" alt="User" />
                                <div class="profile-dropdown-menu">
                                    <div class="px-3 py-2 border-bottom text-center">
                                        <strong>{{ Auth::user()->name }}</strong><br />
                                        <small>{{ Auth::user()->email }}</small>
                                    </div>
                                    <a href="/profile">Profile</a>
                                    <a href="{{ route('profile.edit') }}">Account Settings</a>
                                    <a href="{{ route('admin.user.change-password.form') }}">Change Password</a>

                                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-start w-100 border-0 bg-white">Log Out</button>
                                    </form>
                                </div>
                            </div>
                            @else
                            <a href="{{ url('/signup') }}" class="btn btn-outline-success ms-3" style="margin-top: 25px;">Sign Up</a>
                            @endif



                            <!--Social Links-->

                            <div class=" social-links-one">

                                <ul class="">
                                    <ul>
                                        @foreach($socialicons as $socialicon)
                                        <li><a href="{{$socialicon->title}}"><img src="{{ asset($socialicon->image) }}" alt=""></i></a></li>
                                        @endforeach
                                        <!-- <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li> -->

                                    </ul>



                            </div>



                        </div>



                    </div>

                </div>

            </div>

            <!--End Header Upper-->



            <!-- Sticky Header  -->

            <div class="sticky-header">

                <div class="auto-container clearfix">

                    <!--Logo-->

                    <div class="logo pull-left">

                        <a href="#" title=""><img src="images/sticky-logo.png" alt="" title=""></a>

                    </div>

                    <!--Right Col-->

                    <div class="pull-right">

                        <!-- Main Menu -->

                        <nav class="main-menu clearfix">

                            <!--Keep This Empty / Menu will come through Javascript-->

                        </nav>
                        <!-- Main Menu End-->

                    </div>

                </div>

            </div>
            <!-- End Sticky Menu -->



            <!-- Mobile Menu  -->

            <div class="mobile-menu">

                <div class="menu-backdrop"></div>

                <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>



                <nav class="menu-box">

                    <div class="nav-logo">
                        <a href=""><img src="images/nav-logo.png" alt="" title=""></a>
                    </div>

                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>

                    <!--Social Links-->

                    <div class="social-links">

                        <ul class="clearfix">

                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>

                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>

                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>

                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>

                        </ul>

                    </div>

                </nav>

            </div>
            <!-- End Mobile Menu -->

        </header>

        <!-- End Main Header -->
        @yield('content')

        <!-- Main Footer -->

        <footer class="main-footer">



            <!--Widgets Section-->

            <div class="widgets-section">

                <div class="auto-container">

                    <div class="row clearfix">

                        <!--Column-->

                        <div class="column col-lg-3 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-title">

                                    <h4>Departments</h4>

                                </div>

                                <div class="widget-content">

                                    <ul class="links">

                                        <li><a href="#">Lorem ipsum</a></li>

                                        <li><a href="#">Lorem ipsum</a></li>

                                        <li><a href="#">Lorem ipsum</a></li>

                                        <li><a href="#">Lorem ipsum</a></li>

                                        <li><a href="#">Lorem ipsum</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!--Column-->

                        <div class="column col-lg-3 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-title">

                                    <h4>Information</h4>

                                </div>

                            <div class="widget-content">
						<ul class="links">
							<li><a href="{{ route('cancellation-and-refunds') }}">Cancellation & Refunds</a></li>
							<li><a href="{{ route('termsandconditions') }}">Terms & Conditions</a></li>
							<li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
							<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
							<li><a href="{{ route('home.about') }}">About Us</a></li>
						</ul>
					</div>

                            </div>

                        </div>

                        <!--Column-->

                        <div class="column col-lg-3 col-md-6 col-sm-12">

                            <div class="footer-widget num-widget">

                                <div class="widget-title">

                                    <h4>Emergency</h4>

                                </div>

                                <div class="widget-content">

                                    <ul class="num-links">

                                        <li><a href="#">Lorem ipsum <span class="hvr-info">Call: 977</span></a></li>

                                        <li><a href="#">Lorem ipsum <span class="hvr-info">Call: 911</span></a></li>

                                        <li><a href="#">Lorem ipsum <span class="hvr-info">Call: 922</span></a></li>

                                        <li><a href="#">Lorem ipsum <span class="hvr-info">Call: 111</span></a></li>

                                        <li><a href="#">Lorem ipsum <span class="hvr-info">Call: 101</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!--Column-->

                        <div class="column col-lg-3 col-md-6 col-sm-12">

                            <div class="footer-widget about-widget">

                                <div class="logo">

                                    <a href="#"><img src="{{ asset($logo) }}" alt=""></a>

                                </div>

                                <div class="address">

                                    <h5>Enved</h5>

                                    <div class="text">46, Lorem ipsum<br>lorem 5241, IND</div>

                                </div>

                                <div class="address">

                                    <h5>Opening hrs</h5>

                                    <div class="text">10am to 6pm, Sun: Closed</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Footer Bottom -->

            <div class="footer-bottom">

                <div class="auto-container">

                    <div class="inner">

                        <div class="copyright"> <a href="#">&copy; 2025 </a> All rights reserved.</div>

                        <ul class="social-links clearfix">

                            @foreach($socialicons as $socialicon)
                            <li><a href="{{$socialicon->title}}"><img src="{{ asset($socialicon->image) }}" alt=""></i></a></li>
                                    @endforeach


                                    </ul>

                                </div>

                            </div>

                        </div>



        </footer>



    </div>

    <!--End pagewrapper-->

    <!--Scroll to top-->

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-up-arrow-angle"></span></div>






    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
     


</body>


</html>