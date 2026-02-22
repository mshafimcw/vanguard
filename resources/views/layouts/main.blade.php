<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Details -->
    <meta charset="utf-8">
    <title>ENVED Foundation | Sustainability & Environmental Education</title>
    <meta name="description" content="Enved Foundation - Leading sustainability foundation in Kerala, Kochi focusing on environmental education, e-waste management, and green initiatives for a cleaner planet.">
    <meta name="keywords" content="sustainability foundation Kerala, environmental education Kochi, e-waste management Kerala, green initiatives Kochi, sustainability India, environmental awareness Kerala, eco-friendly practices Kochi, climate action Kerala, waste management Kochi, sustainable development India">
    <meta name="author" content="Enved Foundation">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="ENVED Foundation | Sustainability & Environmental Education in Kerala, Kochi">
    <meta property="og:description" content="Leading sustainability foundation in Kerala, Kochi focusing on environmental education and green initiatives for a cleaner planet.">
    <meta property="og:type" content="website">
    
    <!-- Geo Location Tags -->
    <meta name="geo.region" content="IN-KL">
    <meta name="geo.placename" content="Kochi, Kerala">
    
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
    
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
	
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	 
	 
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}"><!-- 180×180 -->
	
    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

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

@php
    use App\Models\Timing;
    $timings = Timing::all();
@endphp

<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/693a005094a2991985dc2e21/1jc592er4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>


html, body {
    max-width: 100%;
    overflow-x: hidden;
}

	/* Add these styles to your existing CSS */
		.content {
				display: flex;
				align-items: center;
				justify-content: center;
				height: 100%; /* Make sure it takes full height of its parent */
		}

		.content h4 {
			margin: 0;
		}	
 .custom-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400; /* Regular */
            font-size: 1rem;
            line-height: 1.6;
        }
		.header-top-one .phone, .header-top-one .email a, .header-top-one .hours .hours-btn, .header-top-one .hours .hours-dropdown li, .about-section
		{
			font-family: 'Inter', sans-serif;
            font-weight: 400; /* Regular */
		}
		.about-section p
		{
			font-size: 18px;
		}
		.main-menu .navigation>li
		{
			 font-family: 'Poppins', sans-serif;
        font-weight: 400;
		}
		.banner-carousel .active .content-box h1
		{
			 font-family: 'Poppins', sans-serif;
        font-weight: bold;
		}
		.banner-carousel .slide-item {
    position: relative;
    overflow: hidden;
}

.banner-carousel .slide-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        to right,
        #11bb88 0%,
        rgba(17, 187, 136, 0) 100%
    );
    z-index: 1;
}

.banner-carousel .slide-item .content-box,
.banner-carousel .slide-item .content {
    position: relative;
    z-index: 2; /* bring text above gradient */
}

		
    /* Your existing styles remain unchanged */
</style>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <div class="icon"></div>
    </div>

    <!-- Main Header -->
    <header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top header-top-one sticky-header-wrapper">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <div class="phone"><a href="tel:{{$phone1}}"><span class="icon fa fa-phone-alt"></span>{{$phone1}}</a></div>
                        <div class="email"><a href="mailto:{{$email1}}"><span class="icon fa fa-envelope"></span>{{$email1}}</a></div>
                    </div>

                    <!--Other Links-->
                    <div class="other-links clearfix">
                      

                        <!--Social Links-->
                        <div class="social-links-one">
                            <ul>
                                @foreach($socialicons as $socialicon)
                                <li>
                                    <a href="{{ strip_tags($socialicon->body) }}"> 
                                        <img src="/{{$socialicon->image}}" width="20px" alt="Enved Foundation Social Media - Follow us for sustainability updates" />
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="mid-text"></div>

                    <div class="top-right clearfix">
                        <div class="hours">
                            <div class="hours-btn hours-btn-bold">Donate <span class="arrow flaticon-down-arrow"></span></div>
                            <div class="hours-dropdown">
                                <ul>
                                   <li><a href="{{route('volunteer.register.form')}}">Time</a></li>
								    <li><a href="{{route('ewaste.donate.form')}}">Ewaste</a></li>
									
									 <li><a href="{{route('money.donate.form')}}">Money</a></li>
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
                            <a href="/" title="Enved Foundation - Sustainability and Environmental Education in Kerala">
                                <img src="{{ asset($logo->image) }}" alt="Enved Foundation Logo - Sustainability and Environmental Education in Kerala, Kochi" title="Enved Foundation">
                            </a>
                        </div>
                    </div>

                    <!--Nav-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation nav-list clearfix">
                                    <li class="current"><a href="{{route('home.index')}}">Home</a></li>
                                    <li><a href="{{route('home.about')}}">About Us</a></li>
                                    <li class=""><a href="{{route('home.programs')}}">Our Works</a></li>
                                    <li class=""><a href="{{route('events')}}">Events</a></li>
									 <li class=""><a href="{{route('home.blogs')}}">Blogs</a></li>
									
                                    <li class=""><a href="{{route('home.portfolio')}}">Gallery</a></li>
                                    <li class=""><a href="{{ route('money.donate.form') }}">Make An Impact</a></li>
                                    <li><a href="{{ route('support') }}">Support</a></li>
                                    <li><a href="{{ route('home.contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="#" title="Enved Foundation Kochi">
                        <img src="images/sticky-logo.png" alt="Enved Foundation - Sustainable Environment Kerala" title="Enved Foundation">
                    </a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href=""><img src="{{ asset($secondlogo->image) }}" alt="Enved Foundation Mobile Navigation" title="Enved Foundation"></a>
                </div>

              

                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>

                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        @foreach($socialicons as $socialicon)
                        <li>
                            <a href="{{ strip_tags($socialicon->body) }}"> 
                                <img src="/{{$socialicon->image}}" width="30" alt="Enved Foundation Social Media Link" />
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer-two">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="logo">
                                <a href="#"><img src="{{ asset($secondlogo->image) }}" width="200" alt="Enved Foundation - Sustainability Education Kerala Logo" /></a>
                            </div>
                            <div class="address">
                                <div class="text">{!! $logo->body !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Information</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="links">
                                    <li><a href="{{ route('cancellation-and-refunds') }}">Cancellation & Refunds</a></li>
                                    <li><a href="{{ route('termsandconditions') }}">Terms & Conditions</a></li>
                                    
                                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('home.about') }}">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                   <!-- Updated Footer Section -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="footer-widget about-widget">
       
        
        <!-- User Section in Footer -->
				<div class="footer-user-section">
					@if (Auth::check())
					<div class="footer-profile-dropdown">
						<img src="{{ Auth::user()->profile_image ? asset(Auth::user()->profile_image) : asset('default-avatar.png') }}"
							class="user-avatar" alt="{{ Auth::user()->name }}" />
						<span class="username">{{ Auth::user()->name }}</span>
						<span class="dropdown-arrow">▼</span>
						<div class="footer-profile-dropdown-menu">
							<div class="user-header">
								<strong>{{ Auth::user()->name }}</strong>
								<small>{{ Auth::user()->email }}</small>
							</div>
							<a href="/profile">
								<i class="fas fa-user"></i>Profile
							</a>
							<a href="{{ route('profile.edit') }}">
								<i class="fas fa-cog"></i>Account Settings
							</a>
							<a href="{{ route('admin.user.change-password.form') }}">
								<i class="fas fa-key"></i>Change Password
							</a>
							<form action="{{ route('logout') }}" method="POST">
								@csrf
								<button type="submit">
									<i class="fas fa-sign-out-alt"></i>Log Out
								</button>
							</form>
						</div>
					</div>
					@else
					<div class="footer-login-section">
						<a href="{{ url('/login') }}" class="footer-login-btn">
							<i class="fas fa-sign-in-alt"></i>Login / Sign Up
						</a>
					</div>
					@endif
				</div>
			</div>
		</div>
						   <!-- Updated Footer Section -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="footer-widget about-widget">
				<div class="widget-title">
					<h4>Contact Us</h4>
				</div>
				<div class="address">
					<h5>{{$getaddress->title}}</h5>
					<div class="text">{!! $getaddress->body !!}</div>
				</div>
				<div class="address">
					<h5>Phone Number</h5>
					<div class="text">{{$phone1}}</div>
				</div>
				
				<!-- User Section in Footer -->
				
			</div>
		</div>
							
							
						</div>
					</div>
				</div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner clearfix">
                    <ul class="social-links clearfix">
                        @foreach($socialicons as $socialicon)
                        <li><a href="{{ strip_tags($socialicon->body) }}" target="_blank" ><img src="{{ asset($socialicon->image) }}" width="20px" alt="Enved Foundation Social Media"></a></li>
                        @endforeach
                    </ul>
                    <div class="copyright">
                        Copyrights <a href="#">&copy; <script>document.write(new Date().getFullYear());</script>. </a> All rights reserved. Powered by <a target="_blank"  href="https://mdigitz.com">MDIGITZ SOFT SOLUTIONS </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- GDPR Cookie Consent Banner -->
<div id="gdpr-consent-banner" class="gdpr-banner" style="display: none;">
    <div class="gdpr-content">
        <div class="gdpr-text">
            <h4>Privacy & Cookie Consent</h4>
            <p>We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. 
               By clicking "Accept All", you consent to our use of cookies. 
               <a href="{{ route('privacy') }}">Privacy Policy</a></p>
        </div>
        <div class="gdpr-buttons">
            <button class="gdpr-btn gdpr-preferences" onclick="showPreferences()">Preferences</button>
            <button class="gdpr-btn gdpr-reject" onclick="rejectAll()">Reject All</button>
            <button class="gdpr-btn gdpr-accept" onclick="acceptAll()">Accept All</button>
        </div>
    </div>
</div>

<!-- Cookie Preferences Modal -->
<div id="cookie-preferences" class="gdpr-modal" style="display: none;">
    <div class="gdpr-modal-content">
        <div class="gdpr-modal-header">
            <h3>Cookie Preferences</h3>
            <button class="gdpr-close" onclick="hidePreferences()">&times;</button>
        </div>
        <div class="gdpr-modal-body">
            <div class="cookie-category">
                <div class="cookie-header">
                    <h4>Essential Cookies <span class="required">Required</span></h4>
                    <label class="cookie-toggle">
                        <input type="checkbox" checked disabled>
                        <span class="cookie-slider"></span>
                    </label>
                </div>
                <p>Necessary for the website to function properly. Cannot be disabled.</p>
            </div>
            
            <div class="cookie-category">
                <div class="cookie-header">
                    <h4>Analytics Cookies</h4>
                    <label class="cookie-toggle">
                        <input type="checkbox" id="analytics-cookies" checked>
                        <span class="cookie-slider"></span>
                    </label>
                </div>
                <p>Help us understand how visitors interact with our website.</p>
            </div>
            
            <div class="cookie-category">
                <div class="cookie-header">
                    <h4>Marketing Cookies</h4>
                    <label class="cookie-toggle">
                        <input type="checkbox" id="marketing-cookies">
                        <span class="cookie-slider"></span>
                    </label>
                </div>
                <p>Used to track visitors across websites for marketing purposes.</p>
            </div>
        </div>
        <div class="gdpr-modal-footer">
            <button class="gdpr-btn gdpr-save" onclick="savePreferences()">Save Preferences</button>
        </div>
    </div>
</div>

<style>
/* GDPR Banner Styles */
.gdpr-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #2c3e50;
    color: white;
    padding: 20px;
    z-index: 9999;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
}

.gdpr-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.gdpr-text h4 {
    margin: 0 0 10px 0;
    color: white;
}

.gdpr-text p {
    margin: 0;
    font-size: 14px;
}

.gdpr-text a {
    color: #3498db;
    text-decoration: underline;
}

.gdpr-buttons {
    display: flex;
    gap: 10px;
    flex-shrink: 0;
}

.gdpr-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.gdpr-accept {
    background: #27ae60;
    color: white;
}

.gdpr-reject {
    background: #e74c3c;
    color: white;
}

.gdpr-preferences {
    background: #3498db;
    color: white;
}

.gdpr-btn:hover {
    opacity: 0.9;
    transform: translateY(-1px);
}

/* Modal Styles */
.gdpr-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gdpr-modal-content {
    background: white;
    border-radius: 10px;
    max-width: 500px;
    width: 90%;
    max-height: 80vh;
    overflow-y: auto;
}

.gdpr-modal-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.gdpr-modal-header h3 {
    margin: 0;
    color: #2c3e50;
}

.gdpr-close {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #7f8c8d;
}

.gdpr-modal-body {
    padding: 20px;
}

.cookie-category {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ecf0f1;
    border-radius: 5px;
}

.cookie-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.cookie-header h4 {
    margin: 0;
    color: #2c3e50;
}

.required {
    background: #e74c3c;
    color: white;
    padding: 2px 8px;
    border-radius: 3px;
    font-size: 12px;
    margin-left: 10px;
}

.cookie-toggle {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 24px;
}

.cookie-toggle input {
    opacity: 0;
    width: 0;
    height: 0;
}

.cookie-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 24px;
}

.cookie-slider:before {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .cookie-slider {
    background-color: #27ae60;
}

input:checked + .cookie-slider:before {
    transform: translateX(26px);
}

input:disabled + .cookie-slider {
    background-color: #95a5a6;
    cursor: not-allowed;
}

.gdpr-modal-footer {
    padding: 20px;
    border-top: 1px solid #eee;
    text-align: right;
}

.gdpr-save {
    background: #27ae60;
    color: white;
}

@media (max-width: 768px) {
    .gdpr-content {
        flex-direction: column;
        text-align: center;
    }
    
    .gdpr-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .gdpr-btn {
        width: 100%;
    }
}
</style>

<script>
// GDPR Consent Management
document.addEventListener('DOMContentLoaded', function() {
    if (!getCookie('gdpr_consent')) {
        document.getElementById('gdpr-consent-banner').style.display = 'block';
    }
});

function acceptAll() {
    setCookie('gdpr_consent', 'all', 365);
    setCookie('analytics_cookies', 'true', 365);
    setCookie('marketing_cookies', 'true', 365);
    document.getElementById('gdpr-consent-banner').style.display = 'none';
    initializeCookies();
}

function rejectAll() {
    setCookie('gdpr_consent', 'necessary', 365);
    setCookie('analytics_cookies', 'false', 365);
    setCookie('marketing_cookies', 'false', 365);
    document.getElementById('gdpr-consent-banner').style.display = 'none';
    initializeCookies();
}

function showPreferences() {
    document.getElementById('cookie-preferences').style.display = 'flex';
    
    // Set current preferences
    document.getElementById('analytics-cookies').checked = getCookie('analytics_cookies') !== 'false';
    document.getElementById('marketing-cookies').checked = getCookie('marketing_cookies') === 'true';
}

function hidePreferences() {
    document.getElementById('cookie-preferences').style.display = 'none';
}

function savePreferences() {
    const analytics = document.getElementById('analytics-cookies').checked;
    const marketing = document.getElementById('marketing-cookies').checked;
    
    setCookie('gdpr_consent', 'custom', 365);
    setCookie('analytics_cookies', analytics.toString(), 365);
    setCookie('marketing_cookies', marketing.toString(), 365);
    
    document.getElementById('cookie-preferences').style.display = 'none';
    document.getElementById('gdpr-consent-banner').style.display = 'none';
    
    initializeCookies();
}

function initializeCookies() {
    const analyticsAllowed = getCookie('analytics_cookies') !== 'false';
    const marketingAllowed = getCookie('marketing_cookies') === 'true';
    
    if (analyticsAllowed) {
        // Initialize Google Analytics
        loadGoogleAnalytics();
    }
    
    if (marketingAllowed) {
        // Initialize marketing cookies
        loadMarketingCookies();
    }
}

function loadGoogleAnalytics() {
    // Your Google Analytics code here
    console.log('Google Analytics loaded');
}

function loadMarketingCookies() {
    // Your marketing cookies code here
    console.log('Marketing cookies loaded');
}

// Cookie helper functions
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=Lax";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Initialize cookies based on preferences
initializeCookies();
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const focusCards = document.querySelectorAll('.focus-card');
    const contentDisplay = document.querySelector('.dynamic-content');
    const defaultMessage = document.querySelector('.default-message');
    const contentArea = document.querySelector('.focus-content-display');
    let activeCard = null;

    focusCards.forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('.focus-card-title').textContent;
            const imageSrc = this.querySelector('img').src;
            const fullContent = this.querySelector('.focus-full-desc').innerHTML;
            const cardId = this.getAttribute('data-id');

            // Remove active class from all cards
            focusCards.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked card
            this.classList.add('active');
            activeCard = this;

            // Hide default message
          
            
            // Show and update content display
            contentDisplay.classList.add('active');
            
            // Create close button if not exists
            let closeBtn = contentDisplay.querySelector('.close-content');
            if (!closeBtn) {
                closeBtn = document.createElement('button');
                closeBtn.className = 'close-content';
                closeBtn.innerHTML = '×';
                contentDisplay.appendChild(closeBtn);
                
                closeBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    resetContent();
                });
            }

            // Update content
            contentDisplay.innerHTML = `
                <h3>
                    <img src="${imageSrc}" alt="${title}">
                    ${title}
                </h3>
                <div class="content-body">
                    ${fullContent}
                </div>
            `;
            
            // Re-add close button
            contentDisplay.appendChild(closeBtn);
            
            // Add close button event listener
            const newCloseBtn = contentDisplay.querySelector('.close-content');
            newCloseBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                resetContent();
            });

            // Smooth scroll to content area if needed
            const contentRect = contentArea.getBoundingClientRect();
            if (contentRect.top < 100) {
                contentArea.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Reset content function
    function resetContent() {
        focusCards.forEach(card => card.classList.remove('active'));
        contentDisplay.classList.remove('active');
        defaultMessage.style.display = 'block';
        contentDisplay.innerHTML = '';
        activeCard = null;
    }

    // Close content when clicking outside
    document.addEventListener('click', function(e) {
        if (activeCard && 
            !contentDisplay.contains(e.target) && 
            !activeCard.contains(e.target) &&
            !e.target.closest('.focus-card')) {
            resetContent();
        }
    });

    // Keyboard support
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && activeCard) {
            resetContent();
        }
    });
});
</script>
<!-- Scripts -->
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get current full URL and pathname
    const currentUrl = window.location.href;
    const currentPath = window.location.pathname;
    
    // Get all navigation links
    const navLinks = document.querySelectorAll('.main-menu .navigation li a');
    
    // Remove current class from all items first
    navLinks.forEach(link => {
        link.parentElement.classList.remove('current');
    });
    
    // Add current class to matching navigation item
    let currentSet = false;
    
    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        
        // Method 1: Compare full URLs
        if (linkHref === currentUrl) {
            link.parentElement.classList.add('current');
            currentSet = true;
            return;
        }
        
        // Method 2: Compare pathnames
        const linkUrl = new URL(linkHref);
        if (linkUrl.pathname === currentPath) {
            link.parentElement.classList.add('current');
            currentSet = true;
            return;
        }
        
        // Home page special case
        if (currentPath === '/' && (linkHref === currentUrl || linkUrl.pathname === '/')) {
            link.parentElement.classList.add('current');
            currentSet = true;
            return;
        }
        
        // Partial match for nested routes
        if (currentPath.startsWith(linkUrl.pathname + '/') && linkUrl.pathname !== '/') {
            link.parentElement.classList.add('current');
            currentSet = true;
        }
    });
    
    // If no match found and we're on home page, set home as current
    if (!currentSet && currentPath === '/') {
        const homeLinks = document.querySelectorAll('.main-menu .navigation li a');
        homeLinks.forEach(link => {
            const linkUrl = new URL(link.getAttribute('href'));
            if (linkUrl.pathname === '/') {
                link.parentElement.classList.add('current');
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Handle header profile dropdown
    const headerDropdown = document.querySelector(".profile-dropdown");
    if (headerDropdown) {
        headerDropdown.addEventListener("click", function (e) {
            e.stopPropagation();
            headerDropdown.classList.toggle("open");
        });
    }

    // Handle footer profile dropdown
    const footerDropdown = document.querySelector(".footer-profile-dropdown");
    if (footerDropdown) {
        footerDropdown.addEventListener("click", function (e) {
            e.stopPropagation();
            footerDropdown.classList.toggle("open");
        });
    }

    // Click anywhere outside to close dropdowns
    document.addEventListener("click", function () {
        if (headerDropdown) headerDropdown.classList.remove("open");
        if (footerDropdown) footerDropdown.classList.remove("open");
    });

    // Prevent dropdown close when clicking inside dropdown menu
    document.querySelectorAll('.profile-dropdown-menu, .footer-profile-dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});
</script>
<!-- Simple WhatsApp Button -->
<div class="whatsapp-float-simple">
    <a href="https://wa.me/919846066620?text=Hi%20ENVED%20Foundation,%20I%20would%20like%20to%20know%20more%20about%20your%20sustainability%20initiatives" 
       target="_blank" 
       rel="noopener noreferrer"
       class="whatsapp-btn"
       title="Chat with ENVED Foundation on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28" height="28" fill="white">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
    </a>
</div>

<style>
.whatsapp-float-simple {
    position: fixed;
    left: 20px;
    bottom: 20px;
    z-index: 1000;
}

.whatsapp-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    transition: all 0.3s ease;
    animation: pulse-simple 2s infinite;
}

.whatsapp-btn:hover {
    background: #128C7E;
    transform: scale(1.1);
    box-shadow: 0 6px 25px rgba(37, 211, 102, 0.6);
}

@keyframes pulse-simple {
    0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    70% {
        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
}

@media (max-width: 768px) {
    .whatsapp-float-simple {
        left: 15px;
        bottom: 15px;
    }
    
    .whatsapp-btn {
        width: 50px;
        height: 50px;
    }
}
</style>
</body>
</html>