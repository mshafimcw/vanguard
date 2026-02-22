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
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="images clearfix">
                        <figure class="image"><img src="images/resource/sustainablefeatured.jpg" alt=""></figure>
                        <figure class="image"><img src="images/resource/sustainableearth.jpg" alt=""></figure>
                    </div>
                    <div class="contact-info-box">
                        <div class="inner">
                            <ul class="info">
                                <li class="clearfix">
                                    <h4>Quick contact</h4>
                                    <div class="content">
                                        <span class="icon flaticon-telephone-2"></span>
                                        <span>Call on</span><br>
                                        @if($phone)
                                            <a class="txt" href="tel:{{ $phone->body }}">{{ $phone->body }}</a>
                                        @else
                                            <a class="txt" href="tel:+4488812345">+44 888 12 345</a>
                                        @endif
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <h4>Email address</h4>
                                    <div class="content">
                                        <span class="icon flaticon-postcard"></span>
                                        <span>Mail to</span><br>
                                        @if($email)
                                            <a href="mailto:{{ $email->body }}" class="txt">{{ $email->body }}</a>
                                        @endif
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <h4>Visit our office</h4>
                                    <div class="content">
                                        <span class="icon flaticon-map"></span>
                                        @if($address)
                                            <span class="txt">{!! $address->body !!}</span>
                                        @endif
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <h4>Follow Us</h4>
                                    <div class="contentbox">
                                       
                                        <div class="social-links mt-2">
                                            @foreach($socialicons as $socialicon)
                                                <a href="{{ strip_tags($socialicon->body) }}" target="_blank" class="social-icon">
                                                    @if($socialicon->image)
                                                        <img src="{{ asset($socialicon->image) }}" alt="{{ $socialicon->title }}" width="30" style="margin-right: 10px;">
                                                    @else
                                                        <span class="fab fa-{{ strtolower($socialicon->title) }}"></span>
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title with-separator">
                        <h2>We're Here to Help You</h2>
                        <div class="separator">
                            <span class="cir c-1"></span>
                            <span class="cir c-2"></span>
                            <span class="cir c-3"></span>
                        </div>
                        <div class="lower-text">Shoot us a message if you have any question, we're here to help!</div>
                    </div>

                    <div class="default-form form-box">
                        <form method="POST" action="{{ route('contact.submit') }}" id="contactForm">
                            @csrf
                            
                            <!-- Success Alert - Will appear above submit button -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 20px;">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-check-circle me-2"></i>
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Error Alert -->
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom: 20px;">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="text" name="name" placeholder="Your name *" required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="email" name="email" placeholder="Email *" required value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field-inner">
                                    <select name="subject" class="custom-select-box" required>
                                        <option value="">Select Subject</option>
                                        <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="Partnership" {{ old('subject') == 'Partnership' ? 'selected' : '' }}>Partnership</option>
                                        <option value="Volunteer" {{ old('subject') == 'Volunteer' ? 'selected' : '' }}>Volunteer</option>
                                        <option value="Donation" {{ old('subject') == 'Donation' ? 'selected' : '' }}>Donation</option>
                                        <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Message..." required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- GDPR Consent Checkbox -->
                            <div class="form-group">
                                <div class="field-inner">
                                    <div class="gdpr-consent-box">
                                        <div class="form-check">
                                            <input type="checkbox" 
                                                   class="form-check-input @error('gdpr_consent') is-invalid @enderror" 
                                                   name="gdpr_consent" 
                                                   id="gdpr_consent" 
                                                   value="1" 
                                                   {{ old('gdpr_consent') ? 'checked' : '' }}
                                                   required>
                                            <label class="form-check-label" for="gdpr_consent">
                                                I agree to the <a href="{{ route('privacy') }}" target="_blank" class="privacy-link">Privacy Policy</a> and 
                                                <a href="{{ route('termsandconditions') }}" target="_blank" class="terms-link">Terms of Service</a>. 
                                                I consent to the processing of my personal data for the purpose of responding to my inquiry.
                                            </label>
                                        </div>
                                        @error('gdpr_consent')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="gdpr-note">
                                            <small>Your data will be processed in accordance with our privacy policy. You can withdraw your consent at any time by contacting us.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one" id="submitBtn">
                                    <span class="btn-title">Send Message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Map Section-->
<section class="map-section">
    <div class="map-box">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.091127683965!2d76.30682247505073!3d10.011328899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d004e4c01cd%3A0x60e1cf25a332289d!2sEnved%20Foundation!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin&markers=color:0x164A25%7Clabel:ENVED%7C10.0113289,76.3093973" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="ENVED Foundation Location - Ernakulam, Kerala">
        </iframe>
    </div>
</section>

@endsection

@section('styles')
<style>
/* Map Section Full Width */
.map-section {
    width: 100%;
    margin: 0;
    padding: 0;
}

.map-box {
    width: 100%;
    margin: 0;
    padding: 0;
}

.map-box iframe {
    width: 100%;
    display: block;
}

.social-links {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f8f9fa;
    transition: all 0.3s ease;
}

.social-icon:hover {
    transform: translateY(-2px);
}

.social-icon img {
    transition: transform 0.3s ease;
	 
    border-radius: 3px;
    box-shadow: 10px #000;
   
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.social-icon:hover img {
    transform: scale(1.1);
}

.text-danger {
    font-size: 12px;
    margin-top: 5px;
    display: block;
}

.contact-info-box .info li {
    margin-bottom: 25px;
    padding-bottom: 25px;
    border-bottom: 1px solid #eee;
}

.contact-info-box .info li:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

/* Success Alert Styles */
.alert-success {
    background: linear-gradient(135deg, #d4edda, #c3e6cb);
    border: 1px solid #c3e6cb;
    color: #155724;
    border-radius: 8px;
    padding: 15px 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.alert-danger {
    background: linear-gradient(135deg, #f8d7da, #f5c6cb);
    border: 1px solid #f5c6cb;
    color: #721c24;
    border-radius: 8px;
    padding: 15px 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.alert .btn-close {
    padding: 0.75rem 1.25rem;
}

.alert strong {
    font-weight: 600;
}

/* Animation for alert */
.alert {
    animation: slideInDown 0.5s ease-out;
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

/* Auto-hide success message after 5 seconds */
.alert-success.auto-hide {
    animation: slideInDown 0.5s ease-out, slideOutUp 0.5s ease-in 4.5s forwards;
}

@keyframes slideOutUp {
    from {
        transform: translateY(0);
        opacity: 1;
    }
    to {
        transform: translateY(-20px);
        opacity: 0;
    }
}

/* GDPR Consent Styles */
.gdpr-consent-box {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 20px;
    margin: 20px 0;
}

.form-check {
    margin-bottom: 10px;
}

.form-check-input {
    margin-top: 0.3em;
    margin-right: 10px;
}

.form-check-input:checked {
    background-color: #164A25;
    border-color: #164A25;
}

.form-check-label {
    font-size: 14px;
    line-height: 1.5;
    color: #495057;
    cursor: pointer;
}

.privacy-link, .terms-link {
    color: #164A25;
    text-decoration: underline;
    font-weight: 500;
}

.privacy-link:hover, .terms-link:hover {
    color: #0d351a;
    text-decoration: none;
}

.gdpr-note {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #dee2e6;
}

.gdpr-note small {
    color: #6c757d;
    font-size: 12px;
    line-height: 1.4;
}

/* Error state for GDPR checkbox */
.form-check-input.is-invalid {
    border-color: #dc3545;
}

/* Disable submit button when checkbox is not checked */
button:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-hide success message after 5 seconds
    const successAlert = document.querySelector('.alert-success');
    if (successAlert) {
        successAlert.classList.add('auto-hide');
        setTimeout(() => {
            successAlert.remove();
        }, 5000);
    }

    // Clear form after successful submission
    @if(session('success'))
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            // Only clear if it's not a validation error redirect
            @if(!$errors->any())
                setTimeout(() => {
                    contactForm.reset();
                }, 100);
            @endif
        }
    @endif

    // Close button functionality for alerts
    const closeButtons = document.querySelectorAll('.btn-close');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            this.closest('.alert').remove();
        });
    });

    // GDPR consent validation
    const gdprCheckbox = document.getElementById('gdpr_consent');
    const submitBtn = document.getElementById('submitBtn');
    
    if (gdprCheckbox && submitBtn) {
        // Initial state
        if (!gdprCheckbox.checked) {
            submitBtn.disabled = true;
        }
        
        // Toggle submit button based on checkbox state
        gdprCheckbox.addEventListener('change', function() {
            submitBtn.disabled = !this.checked;
        });
        
        // Form submission validation
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function(e) {
            if (!gdprCheckbox.checked) {
                e.preventDefault();
                // Add visual feedback
                gdprCheckbox.classList.add('is-invalid');
                // Scroll to checkbox
                gdprCheckbox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }
});
</script>
@endpush