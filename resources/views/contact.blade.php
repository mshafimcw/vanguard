@extends('layouts.main')

@section('content')

<!-- ================= HERO ================= -->
<div class="container-fluid hero-header py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start hero-text">
                <h1 class="display-1 mb-4 text-white">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<!-- Contact Info Cards Start -->
<section class="contact-info-section">
    <div class="container">
        <div class="row g-4">

            <!-- Call Us -->
            <div class="col-lg-3 col-md-6">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h5>Call Us</h5>
                        <p>+971 52 149 1001</p>
                    </div>
                </div>
            </div>

            <!-- Mail Us -->
            <div class="col-lg-3 col-md-6">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Mail Us</h5>
                        <p>info@vanguarduae.com</p>
                    </div>
                </div>
            </div>

            <!-- Chat -->
            <div class="col-lg-3 col-md-6">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-comment"></i>
                    </div>
                    <div>
                        <h5>Chat With Us</h5>
                        <a href="#" class="chat-btn text-white">Let's Chat →</a>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="col-lg-3 col-md-6">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h5>Address</h5>
                        <p>Dubai, UAE</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Info Cards End -->
<!-- ================= CONTACT SECTION ================= -->
<section class="contact-section">

    <!-- FULL WIDTH MAP -->
    <div class="map-background">
        <iframe
            src="https://www.google.com/maps?q=Dubai,UAE&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <!-- FORM OVERLAY -->
    <div class="contact-overlay">
        <div class="container">
            <div class="contact-card">

                <h2 class="section-title">Get In Touch</h2>

                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject">
                    <textarea rows="5" placeholder="Message"></textarea>

                    <button type="submit">Send Message</button>
                </form>

            </div>
        </div>
    </div>

</section>

@endsection