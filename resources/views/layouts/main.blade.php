<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vanguard Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
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

</head>

<body>

    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary"></div>
    </div>

<!-- Navbar -->
<div class="branding d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">Vanguard</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="active">Home</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li>
                    <a href="{{ url('/blogs') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ url('/services') }}">Services</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
            <!-- MOVE THIS OUTSIDE THE UL BUT INSIDE NAV -->
            <div class="navbar-call d-lg-none mobile-call">
                <i class="bi bi-telephone-fill"></i>
                <a href="tel:+971521491001">+971 52 149 1001</a>
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
                    @foreach($locations as $location)
                    <span>{{ $location->location }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">

            <div class="footer-container">

                <div class="footer-col">

                    <h3 class="brand">VANGUARD</h3>

                    <p>1-2873 52 104 - 1001</p>

                    <p>Dubai - UAE</p>

                </div>


                <div class="footer-col">

                    <h4>CONTACT US</h4>

                    <p>info@vanguarduae.com</p>

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


        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>