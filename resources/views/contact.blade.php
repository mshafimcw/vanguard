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
<div class="row">
    @foreach($contact as $item)
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <div class="info-card d-flex align-items-start">

                <div class="info-icon me-3">
                    <img src="{{ asset($item->image) }}" 
                         alt="{{ $item->title }}" width="30">
                </div>

                <div>
                    <h5>{{ $item->title }}</h5>
                    <p>{!! $item->body !!}</p>
                </div>

            </div>
        </div>
    @endforeach
</div>
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