@extends('layouts.main')

@php
    $banner = App\Http\Controllers\HomeController::getpbanner();
@endphp

@section('content')

<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset( $banner) }});"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.impact-card {
    position: relative;
    width: 240px;
    height: 150px;
    border-radius: 20px;
    overflow: hidden;
    color: white;
    font-family: Arial, sans-serif;
    padding: 15px;
}

/* Background image with cut-out curve */
.bg-mask {
    position: absolute;
    inset: 0;
    background: url('https://envedfoundation.org/images/resource/featured-image-1.jpg') center/cover no-repeat;

   
    -webkit-mask: radial-gradient(
        90px at 100% 100%,
        transparent 0,
        transparent 89px,
        black 90px
    );
    mask: radial-gradient(
        90px at 100% 100%,
        transparent 0,
        transparent 89px,
        black 90px
    );
}

/* Text stays above bg */
.impact-text {
    position: relative;
    z-index: 2;
    font-size: 20px;
    font-weight: 700;
}

/* Icon bubble stays outside mask */
.impact-icon {
    position: absolute;
    right: 12px;
    bottom: 12px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #0baa52;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 5; /* ensures visibility */
}

.impact-icon img {
    width: 20px;
}


</style>
<section class="about-section py-5">
    <div class="auto-container">
        <div class="row align-items-center">
            <!-- Image Column - Left Side -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="about-image-wrapper">
                    <div class="about-main-image">
                        <a class="lightbox-image" data-fancybox="about-gallery" href="{{ asset($abouts->image) }}">
                            <img src="{{ asset($abouts->image) }}" alt="{{ $abouts->title }}" class="img-fluid rounded-3 shadow">
                        </a>
                    </div>
					
			
                    <!-- Optional: Additional small images -->
                    <div class="about-thumbnails mt-3">
                        <div class="row g-2">
                            <!-- Add more thumbnail images if available -->
                            <div class="col-4">
                                <img src="{{ asset($abouts->image) }}" alt="About ENVED Foundation" class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset($abouts->image) }}" alt="Sustainability Initiatives" class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset($abouts->image) }}" alt="Environmental Education" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column - Right Side -->
            <div class="col-lg-6 col-md-12">
                <div class="about-content ps-lg-4">
                    <div class="section-header mb-4">
                        <h2 class="display-5 fw-bold text-green mb-3">{{ $abouts->title }}</h2>
                        <div class="separator mb-4">
                            <span class="cir c-1 bg-success"></span>
                            <span class="cir c-2 bg-warning"></span>
                            <span class="cir c-3 bg-info"></span>
                        </div>
                    </div>
                    
                    <div class="about-text">
                        <div class="content-box">
                            {!! $abouts->body !!}
                        </div>
                    </div>

                    <!-- Additional Features -->
                    

                    <!-- Call to Action Buttons -->
                    <div class="about-actions mt-4 pt-3">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <a href="{{ route('home.contact') }}" class="btn btn-outline-success btn-lg w-100">
                                    <i class="fas fa-envelope me-2"></i>&nbsp;Contact Us
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('home.programs') }}" class="btn btn-outline-success btn-lg w-100">
                                    <i class="fas fa-hands-helping me-2"></i>&nbsp;Our Programs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection

@push('styles')
<style>
.about-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.about-image-wrapper {
    position: relative;
}

.about-main-image {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.about-main-image:hover {
    transform: translateY(-5px);
}

.about-main-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.about-main-image:hover img {
    transform: scale(1.05);
}

.about-thumbnails img {
    height: 80px;
    object-fit: cover;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.about-thumbnails img:hover {
    transform: scale(1.1);
    border-color: #164A25;
}

.about-content {
    height: 100%;
}

.section-header h2 {
    color: #164A25;
    font-weight: 700;
}

.separator {
    display: flex;
    gap: 8px;
    align-items: center;
}

.cir {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    display: inline-block;
}

.cir.c-1 { background: #28a745 !important; }
.cir.c-2 { background: #ffc107 !important; }
.cir.c-3 { background: #17a2b8 !important; }

.content-box {
    line-height: 1.8;
    color: #555;
    font-size: 1.1rem;
}

.content-box p {
    margin-bottom: 1.5rem;
}

.feature-item {
    padding: 15px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-3px);
}

.feature-icon {
    flex-shrink: 0;
}

.about-actions .btn {
    padding: 12px 24px;
    font-weight: 600;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.about-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Responsive Design */
@media (max-width: 991.98px) {
    .about-content {
        padding-left: 0 !important;
        margin-top: 30px;
    }
    
    .about-main-image img {
        height: 350px;
    }
    
    .display-5 {
        font-size: 2.5rem;
    }
}

@media (max-width: 767.98px) {
    .about-main-image img {
        height: 300px;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    .about-actions .btn {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
    
    .feature-item {
        padding: 12px;
    }
}

@media (max-width: 575.98px) {
    .about-main-image img {
        height: 250px;
    }
    
    .about-thumbnails img {
        height: 60px;
    }
}

/* Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.about-image-wrapper,
.about-content {
    animation: fadeInUp 0.8s ease-out;
}

.about-content {
    animation-delay: 0.2s;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lightbox initialization for images
    if (typeof Fancybox !== "undefined") {
        Fancybox.bind("[data-fancybox]", {
            // Custom options
        });
    }
    
    // Thumbnail click functionality
    const thumbnails = document.querySelectorAll('.about-thumbnails img');
    const mainImage = document.querySelector('.about-main-image img');
    const mainImageLink = document.querySelector('.about-main-image a');
    
    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const newSrc = this.src;
            mainImage.src = newSrc;
            mainImageLink.href = newSrc;
        });
    });
});
</script>
@endpush