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

    <div class="scrap-left">
        <div class="scrap-items">

            @foreach ($services as $service)
                <div class="scrap-card"
                style="background-image: url('{{ asset('uploads/services/'.$service->image) }}');">

                    <h3>{{ $service->title }}</h3>

                    <p>{{ Str::limit($service->description, 100) }}</p>

                    <a href="{{ route('/servicedetails', $service->id) }}"
                       class="btn-sell">
                        View Details
                    </a>

                </div>
            @endforeach

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
