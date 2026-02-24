@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header wow fadeIn">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start hero-text">
                    <h1 class="display-1 mb-4">
                        About US
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- ABOUT SECTION -->
    <section class="about-main-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2 class="section-title">TURNING SCRAP INTO VALUE</h2>

                    <p>
                        Vanguard Metal Scrap Trading LLC is one of the leading metal scrap
                        trading companies in the UAE. We transform scrap metal into value by
                        offering competitive prices, prompt payments, and exceptional service.
                    </p>

                    <p>
                        With years of experience in the industry, we've earned a reputation
                        for reliability, professionalism, and top-notch customer care.
                    </p>

                    <div class="feature-item">
                        <i class="fa-solid fa-tag"></i>
                        <div>
                            <h6>COMPETITIVE PRICES</h6>
                            <p>Best market rates with transparent pricing.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <i class="fa-solid fa-bolt"></i>
                        <div>
                            <h6>PROMPT PAYMENTS</h6>
                            <p>Fast and immediate payments for scrap materials.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <i class="fa-solid fa-leaf"></i>
                        <div>
                            <h6>ECO-FRIENDLY PRACTICES</h6>
                            <p>Environmentally responsible recycling processes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="image-box">
                        <img src="img/banner.png" alt="">
                        <a href="contact.html" class="price-btn">Get My Price</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- OUR MISSION & VISION -->
    <section class="mission-section">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-heading">Our Commitment</h2>
                <p class="section-subtitle">
                    Driving sustainability through responsible recycling and innovation.
                </p>
            </div>

            <div class="row justify-content-center g-4">

                <div class="col-lg-5 col-md-6 d-flex">
                    <div class="mv-card w-100">
                        <div class="mv-icon">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h4>Our Mission</h4>
                        <p>
                            At Vanguard, our mission is to contribute to a cleaner,
                            greener planet by recycling scrap metal sustainably.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 d-flex">
                    <div class="mv-card w-100">
                        <div class="mv-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h4>Our Vision</h4>
                        <p>
                            To be a trusted leader in sustainable scrap recycling,
                            creating long-term environmental and economic value.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    @endsection
