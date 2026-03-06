<!doctype html>
<html class="no-js" lang="zxx">

<head>
  

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
    
    </title>
    
    
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="/"><img width="130px" src="" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                                <a href="/">
                                                    <i class="ti-home mr-2"></i>Home
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('about') ? 'active' : '' }}">
                                                <a href="/about">
                                                    <i class="ti-info-alt mr-2"></i>About
                                                </a>
                                            </li>


                                            <li class="{{ request()->is('directorylisting') ? 'active' : '' }}">
                                                <a href="{{ route('home.directorylisting') }}">
                                                    <i class="ti-list mr-2"></i>Directory Listing
                                                </a>
                                            </li>

                                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                                <a href="/contact">
                                                    <i class="ti-email mr-2"></i>Contact
                                                </a>
                                            </li>

                                            <li class="{{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}">
                                                <a href="{{ route('blog.index') }}">
                                                    <i class="ti-write mr-2"></i>Blogs
                                                </a>
                                            </li>

                                            <!-- Auth Buttons -->
                                            @auth
                                            <!-- User is logged in - show dropdown -->
                                            <li class="dropdown user-menu">
                                                <button class="dropdown-toggle" onclick="toggleUserDropdown()">
                                                    <i class="ti-user mr-2"></i>
                                                    {{ Str::limit(Auth::user()->name, 15) }}
                                                    <i class="fas fa-chevron-down ml-2"></i>
                                                </button>
                                                <ul class="dropdown-menu" id="userDropdown">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                                            <i class="ti-user mr-2"></i>Profile
                                                        </a>

                                                    </li>
                                                    @if(Auth::user()->is_admin)
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                                            <i class="ti-dashboard mr-2"></i>Dashboard
                                                        </a>
                                                    </li>
                                                    @endif
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                                            @csrf
                                                            <button type="submit" class="dropdown-item logout-btn">
                                                                <i class="ti-power-off mr-2"></i>Logout
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                            @else
                                            <!-- User is not logged in - show Sign In and Sign Up -->
                                            <li class="login">
                                                <a href="{{ route('login') }}">
                                                    <i class="ti-shift-right mr-2"></i>Sign In
                                                </a>
                                            </li>
                                            <li class="signup">
                                                <a href="{{ route('signup') }}">
                                                    <i class="ti-user mr-2"></i>Sign Up
                                                </a>
                                            </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    @yield('content')

   
</body>

</html>