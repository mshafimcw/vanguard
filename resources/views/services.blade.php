@extends('layouts.main')

@section('content')

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header wow fadeIn">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center text-lg-start hero-text">
        <h1 class="display-1 mb-4">OUR SERVICES</h1>
        <p class="fs-4">
              Fast, Reliable, Hassle-Free <br />
             Services in UAE
            </p>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<div class="content-wrapper">
<section class="material-services">
    <div class="services-heading">
  <h2>Our Scrap Services</h2>
</div>
  <div class="material-services-container">

    <div class="material-card">
      <img src="img/metal.png" alt="Metal Scrap">
      <h3>Metal Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
     
    </div>

    <div class="material-card">
      <img src="img/cpper.png" alt="Copper Scrap">
      <h3>Copper Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
    </div>

    <div class="material-card">
      <img src="img/aluminium.png" alt="Aluminium Scrap">
      <h3>Aluminium Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
    </div>

    <div class="material-card">
      <img src="img/construction.png" alt="Construction Scrap">
      <h3>Construction Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
    </div>

    <div class="material-card">
      <img src="img/industrial2.png" alt="Industrial Scrap">
      <h3>Industrial Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
    </div>

    <div class="material-card">
      <img src="img/industrial3.png" alt="Industrial Scrap">
      <h3>Industrial Scrap</h3>
      <a href="contact.html" class="material-btn">View Details</a>
    </div>

  </div>
</section>


<!-- ================= FEATURES SECTION (EXACT MATCH WITH ICONS) ================= -->
<section class="features-exact">
    <div class="services-heading">
  <h2>What Makes Our Services Different</h2>
</div>
  <div class="container">
    <div class="features-exact-grid">
      
      <div class="feature-exact-item">
        <div class="feature-icon-exact">
          <i class="fas fa-truck"></i>
        </div>
        <h3>FREE SCRAP PICKUP</h3>
        <p>Fast, hassle-free pickup of scrap metal from your location.</p>
      </div>
      
      <div class="feature-exact-item">
        <div class="feature-icon-exact">
          <i class="fas fa-weight-scale"></i>
        </div>
        <h3>PRECISION WEIGHING</h3>
        <p>Accurate weighing of your scrap with certified industrial scales.</p>
      </div>
      
      <div class="feature-exact-item">
        <div class="feature-icon-exact">
          <i class="fas fa-medal"></i>
        </div>
        <h3>BEST MARKET PRICES</h3>
        <p>Get the highest value for your scrap with our competitive torque titles.</p>
      </div>
      
    </div>
    
    <div class="features-exact-cta">
      <a href="#contact" class="btn-price-exact">Get My Price</a>
    </div>
  </div>
</section>

<!-- ================= CTA RIBBON ================= -->
<section class="scrap-cta">
    <div class="scrap-cta-inner">
        <h3>GET IN TOUCH WITH US FOR ALL YOUR SCRAP METAL NEEDS!</h3>
        <a href="contact.html" class="scrap-cta-btn">CONTACT US</a>
    </div>
</section>
</div>

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
        <span>Dubai</span>
        <span>Sharjah</span>
        <span>Abu Dhabi</span>
        <span>Ajman</span>
        <span>Ras Al Khaimah</span>
        <span>Umm Al Quwain</span>
      </div>
    </div>
  </div>

@endsection