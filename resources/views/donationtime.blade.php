@extends('layouts.main')

@php
    $banner = App\Http\Controllers\HomeController::getpbanner();
@endphp

@section('content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset( $banner) }});"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Join Our Mission</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Volunteer Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="default-form booking-form">
    <section class="volunteer-form py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">
                           
                            <div class="text-center mb-4">
                                <div class="impact-stats">
                                    <div class="stat-item">
                                        <i class="fa fa-hands-helping text-success me-2"></i>
                                        <span>Join Our Mission</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Alert Messages Section - UPDATED -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-check-circle me-2"></i>
                                        <div>
                                            <strong>{{ session('success') }}</strong>
                                            @if(session('volunteer_id'))
                                                <div class="small">Reference ID: {{ session('volunteer_id') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="validationAlert">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-exclamation-circle me-2"></i>
                                        <strong>Please correct the following errors:</strong>
                                    </div>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div id="responseMessage"></div>

                            <form method="POST" action="{{ route('volunteer.register') }}" id="volunteerForm">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Name *</label>
                                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your full name" required value="{{ old('name') }}">
                                            @error('name')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Email Address *</label>
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email" required value="{{ old('email') }}">
                                            @error('email')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Contact Number *</label>
                                            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter your phone number" required value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Preferred Location *</label>
                                            <input type="text" name="location" class="form-control form-control-lg" placeholder="Enter your city/area" required value="{{ old('location') }}">
                                            @error('location')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Preferred Cause *</label>
                                    <div class="cause-options">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="preferred_causes[]" value="Collection Drive" id="collection_drive" {{ in_array('Collection Drive', old('preferred_causes', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label fw-medium" for="collection_drive">
                                                        <i class="fas fa-recycle me-2 text-success"></i>Collection Drive
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="preferred_causes[]" value="Educational Sessions" id="educational_sessions" {{ in_array('Educational Sessions', old('preferred_causes', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label fw-medium" for="educational_sessions">
                                                        <i class="fas fa-graduation-cap me-2 text-success"></i>Educational Sessions
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="preferred_causes[]" value="E-waste Awareness" id="ewaste_awareness" {{ in_array('E-waste Awareness', old('preferred_causes', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label fw-medium" for="ewaste_awareness">
                                                        <i class="fas fa-microphone me-2 text-success"></i>E-waste Awareness
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="preferred_causes[]" value="Corporate Events" id="corporate_events" {{ in_array('Corporate Events', old('preferred_causes', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label fw-medium" for="corporate_events">
                                                        <i class="fas fa-briefcase me-2 text-success"></i>Corporate Events
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('preferred_causes')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- GDPR Consent Section -->
                                <div class="gdpr-consent-section mb-4">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h6 class="card-title fw-semibold mb-3 text-success">
                                                <i class="fas fa-shield-alt me-2"></i>Data Protection & Privacy
                                            </h6>
                                            
                                            <!-- Required Consent for Processing -->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input @error('gdpr_consent') is-invalid @enderror" 
                                                           type="checkbox" 
                                                           name="gdpr_consent" 
                                                           id="gdpr_consent" 
                                                           value="1" 
                                                           {{ old('gdpr_consent') ? 'checked' : '' }}
                                                           required>
                                                    <label class="form-check-label fw-medium" for="gdpr_consent">
                                                        I consent to the processing of my personal data for volunteer registration and communication purposes. *
                                                    </label>
                                                    @error('gdpr_consent')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Privacy Policy Link -->
                                            <div class="privacy-links mt-3 pt-3 border-top">
                                                <small class="text-muted">
                                                    By proceeding, you acknowledge that you have read and understand our 
                                                    <a href="{{ route('privacy') }}" target="_blank" class="text-success text-decoration-underline">Privacy Policy</a> 
                                                    and 
                                                    <a href="{{ route('termsandconditions') }}" target="_blank" class="text-success text-decoration-underline">Terms of Service</a>.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg px-5 shadow-sm volunteer-btn" id="volunteerSubmitBtn">
                                        <i class="fa fa-user-plus me-2"></i> 
                                        <span class="btn-text">Join as Volunteer</span>
                                        <div class="spinner-border spinner-border-sm ms-2 d-none" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                    
                                    <div class="mt-3">
                                        <small class="text-muted">
                                            <i class="fas fa-clock me-1"></i>
                                            We'll contact you within 2-3 business days
                                        </small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('styles')
<style>
.impact-stats {
    background: linear-gradient(135deg, #164A25, #00AA55);
    color: white;
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.stat-item {
    font-weight: 600;
    font-size: 1.1em;
}

.cause-options .form-check {
    padding: 12px 15px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
    background: white;
}

.cause-options .form-check:hover {
    border-color: #164A25;
    background-color: #f8fff9;
}

.cause-options .form-check-input:checked {
    background-color: #164A25;
    border-color: #164A25;
}

.cause-options .form-check-label {
    font-size: 1rem;
    cursor: pointer;
}

.volunteer-btn {
    background: linear-gradient(135deg, #164A25, #00AA55);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.volunteer-btn:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(22, 74, 37, 0.3);
}

.volunteer-btn:disabled {
    background: #6c757d;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

/* Alert Styles - UPDATED */
.alert {
    border-radius: 10px;
    border: none;
    padding: 15px 20px;
    margin-bottom: 20px;
    animation: slideInDown 0.5s ease-out;
}

.alert-success {
    background: linear-gradient(135deg, #d4edda, #c3e6cb);
    border: 1px solid #c3e6cb;
    color: #155724;
    border-left: 4px solid #00AA55;
}

.alert-danger {
    background: linear-gradient(135deg, #f8d7da, #f5c6cb);
    border: 1px solid #f5c6cb;
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.alert .btn-close {
    padding: 0.75rem 1.25rem;
}

.alert strong {
    font-weight: 600;
}

@keyframes slideInDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.card {
    border: none;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

/* GDPR Consent Styles */
.gdpr-consent-section .card {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef) !important;
    border: 1px solid #dee2e6 !important;
}

.gdpr-consent-section .form-check-input {
    margin-top: 0.25rem;
}

.gdpr-consent-section .form-check-input:checked {
    background-color: #164A25;
    border-color: #164A25;
}

.gdpr-consent-section .form-check-label {
    font-size: 0.95rem;
    line-height: 1.4;
    cursor: pointer;
}

.gdpr-consent-section .form-check-input:required + .form-check-label::after {
    content: " *";
    color: #dc3545;
}

.privacy-links a:hover {
    color: #0d351a !important;
}

/* Invalid state */
.form-check-input.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: block;
    font-size: 0.875rem;
}

.text-danger {
    font-size: 0.875rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .gdpr-consent-section .card-body {
        padding: 1rem;
    }
    
    .cause-options .form-check-label {
        font-size: 0.9rem;
    }
    
    .card-body.p-5 {
        padding: 2rem !important;
    }
}
</style>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Form validation
    function validateForm() {
        const requiredFields = [
            'input[name="name"]',
            'input[name="email"]', 
            'input[name="phone"]',
            'input[name="location"]',
            '#gdpr_consent'
        ];

        let isValid = true;

        // Check required fields
        requiredFields.forEach(field => {
            const element = $(field);
            if (field === '#gdpr_consent') {
                if (!element.is(':checked')) {
                    isValid = false;
                }
            } else {
                if (!element.val().trim()) {
                    isValid = false;
                }
            }
        });

        // Check at least one cause is selected
        const causesChecked = $('input[name="preferred_causes[]"]:checked').length > 0;
        if (!causesChecked) {
            isValid = false;
        }

        $('#volunteerSubmitBtn').prop('disabled', !isValid);
        return isValid;
    }

    // Real-time form validation
    $('input, textarea, select').on('input change', function() {
        const isValid = validateForm();
        $('#volunteerSubmitBtn').prop('disabled', !isValid);
    });

    // Form submission
    $('#volunteerForm').on('submit', function(e) {
        const submitBtn = $('.volunteer-btn');
        const btnText = $('.btn-text');
        const spinner = $('.spinner-border');
        
        // Show loading state
        btnText.text('Submitting...');
        spinner.removeClass('d-none');
        submitBtn.prop('disabled', true);

        // Let the form submit normally
        // Remove e.preventDefault() to allow normal form submission
    });

    // Auto-hide success message after 8 seconds
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.classList.add('fade');
            setTimeout(() => {
                successAlert.remove();
            }, 500);
        }, 8000);
    }

    // Auto-hide error messages after 10 seconds
    const errorAlert = document.getElementById('errorAlert');
    if (errorAlert) {
        setTimeout(() => {
            errorAlert.classList.add('fade');
            setTimeout(() => {
                errorAlert.remove();
            }, 500);
        }, 10000);
    }

    const validationAlert = document.getElementById('validationAlert');
    if (validationAlert) {
        setTimeout(() => {
            validationAlert.classList.add('fade');
            setTimeout(() => {
                validationAlert.remove();
            }, 500);
        }, 10000);
    }

    // Initial form validation
    validateForm();
});
</script>
@endsection