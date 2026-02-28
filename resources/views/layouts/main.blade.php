<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vanguard Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon" />

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Library CSS -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/service-footer.css') }}" rel="stylesheet">
     @php
    $phone1 = App\Http\Controllers\HomeController::getphone1();
    $email1 = App\Http\Controllers\HomeController::getemail1();
    $getaddress = App\Http\Controllers\HomeController::getaddress();
    $logo = App\Http\Controllers\HomeController::getlogo();
	$secondlogo = App\Http\Controllers\HomeController::getsecondlogo();
	
    $socialicons = App\Http\Controllers\HomeController::getsocialicons();
    $timings = App\Http\Controllers\HomeController::gettimings();
    @endphp
    @yield('styles')
</head>

<body>

    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary"></div>
    </div>

    <!-- Navbar -->
    <div class="branding d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
               <img src="{{ asset($logo->image) }}" width="250px" alt="Vanguard Metal Scrap Trading LLC Transforming Scrap into Sustainable Value" title="Enved Foundation">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/blogs') }}" class="{{ request()->is('blogs*') ? 'active' : '' }}">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/services') }}" class="{{ request()->is('services*') ? 'active' : '' }}">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">
                            Contact Us
                        </a>
                    </li>
                </ul> <!-- MOVE THIS OUTSIDE THE UL BUT INSIDE NAV -->
                <div class="navbar-call d-lg-none mobile-call">
                    <i class="bi bi-telephone-fill"></i>
                    <a href="tel:{{$phone1}}">{{$phone1}}</a>
                </div>
            </nav>

            <!-- Desktop call button (visible on large screens) -->


            <button class="mobile-nav-toggle d-lg-none">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>


    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- ================= SERVICE AREA SECTION ================= -->
    <section class="service-area">
        <div class="overlay"></div>

        <div class="service-container">
            <div class="service-content">
                <h2>Service Areas Across the UAE</h2>
                <p>
                    From Dubai to Fujairah, we cover every corner of the UAE with reliabilty
                </p>

                <div class="service-tags">
                    @foreach ($locations as $location)
                    <span>{{ $location->location }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">

            <div class="footer-container">

                <div class="footer-col">

                    <h3 class="brand">Vanguard Metal Scrap Trading LLC</h3>

                    <p>{{$phone1}}</p>

                    <p>Dubai - UAE</p>

                </div>


                <div class="footer-col">

                    <h4>CONTACT US</h4>

                    <p>{{$email1}}</p>

                    <p>Rawda Bus Service - Dubai</p>

                </div>


                <div class="footer-col">

                    <h4>QUICK LINKS</h4>

                    <ul class="quick-links">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}">Services</a>
                        </li>

                        <li>
                            <a href="{{ url('/blogs') }}">Blog</a>
                        </li>

                        <li>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>

                        <li>
                            <a href="{{ url('/privacy') }}">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="{{ url('/termsandconditions') }}">Terms & Conditions</a>
                        </li>
                    </ul>

                </div>


                <div class="footer-col">

                    <h4>NEWSLETTER</h4>

                    <div class="newsletter">

                        <input type="email" placeholder="Email address">

                        <button>SUBSCRIBE</button>

                    </div>

                </div>


            </div>

        </footer>



        <!-- JS -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>

        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>

        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>

        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>

        <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>

        <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>

        <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- @if(!request()->hasCookie('cookie_consent'))
<div class="cookie-banner" id="cookie-banner">
            <div class="container d-flex justify-content-between align-items-center flex-wrap">
                <p class="mb-2 mb-md-0">
                    We use cookies that are necessary to make our site work.
                    You can manage preferences using the
                    <a href="#" onclick="openCookieSettings()">Cookie settings</a>
                    link. For more information, see our
                    <a href="{{ route('cookie.policy') }}">Cookie Policy</a>.
                </p>

                <div>
                    <div class="cookie-actions">
                   <button onclick="acceptCookies('{{ route('cookie.policy') }}')" class="btn-cookie btn-accept">
    Accept all cookies
</button>
                    <button onclick="acceptNecessary()" class="btn-cookie btn-necessary">
                        Accept only necessary cookies
                    </button>
                </div>
            </div>
        </div>
        @endif -->

        <div class="cookie-banner" style="display:none">
            <div class="container d-flex justify-content-between align-items-center flex-wrap">

                <div class="cookie-text">
                    <h5>Your privacy, your choice</h5>

                    <p>
                        We use essential cookies to make sure the site can function.
                        We also use optional cookies for advertising, personalisation of content,
                        usage analysis, and social media, as well as to allow video information
                        to be shared for both marketing, analytics and editorial purposes.
                    </p>

                    <p>
                        By accepting optional cookies, you consent to the processing of your
                        personal data – including transfers to third parties. Some third parties
                        are outside of the European Economic Area, with varying standards of
                        data protection.
                    </p>

                    <p>
                        See our
                        <a href="#" onclick="openCookieSettings()">privacy policy</a>
                        for more information on the use of your personal data.
                    </p>
                </div>

                <div class="cookie-actions">
                    <button onclick="acceptCookies()" class="btn-accept">
                        Accept all cookies
                    </button>
                    <button
                        onclick="acceptNecessary('{{ route('cookie.policy') }}')"
                        class="btn-necessary">
                        Reject optional cookies
                    </button>
                </div>

            </div>
        </div>
        </div>




</body>

</html>