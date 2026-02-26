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
                    <a href="/servicedetails" class="material-btn">View Details</a>

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
        
        <!-- ================= CTA RIBBON ================= -->
        <section class="scrap-cta">
            <div class="scrap-cta-inner">
                <h3>GET IN TOUCH WITH US FOR ALL YOUR SCRAP METAL NEEDS!</h3>
                <a href="contact.html" class="scrap-cta-btn">CONTACT US</a>
            </div>
        </section>
    </div>
@endsection
