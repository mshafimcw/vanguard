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
                <h1>Donate Money</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Donate Money</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="default-form booking-form">
    <section class="money-donation-form py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">
                           
                            <div class="text-center mb-4">
                                <div class="impact-stats">
                                    <div class="stat-item">
                                        <i class="fas fa-hand-holding-heart text-success me-2"></i>
                                        <span>Support Our Causes</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Alert Messages Section -->
                            <div id="responseMessage"></div>

                            <form method="POST" id="donationForm">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Name *</label>
                                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your full name" required value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Email Address *</label>
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email" required value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Contact Number *</label>
                                            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter your phone number" required value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">We are *</label>
                                            <select name="donor_type" class="form-control form-control-lg" required>
                                                <option value="">Select Category</option>
                                                <option value="Individual/Residential" {{ old('donor_type') == 'Individual/Residential' ? 'selected' : '' }}>Individual/Residential</option>
                                                <option value="Association/Education" {{ old('donor_type') == 'Association/Education' ? 'selected' : '' }}>Association/Education</option>
                                                <option value="Institution/Corporate/Commercial" {{ old('donor_type') == 'Institution/Corporate/Commercial' ? 'selected' : '' }}>Institution/Corporate/Commercial</option>
                                                <option value="Establishment" {{ old('donor_type') == 'Establishment' ? 'selected' : '' }}>Establishment</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Donation Amount (₹) *</label>
                                    <div class="amount-presets mb-3">
                                        <div class="btn-group w-100" role="group">
                                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="1000">₹1000</button>
                                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="2000">₹2000</button>
                                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="5000">₹5000</button>
                                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="10000">₹10000</button>
                                        </div>
                                    </div>
                                    <input type="number" name="amount" class="form-control form-control-lg" placeholder="Or enter custom amount" min="1" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Preferred Cause *</label>
                                    <select name="preferred_cause" class="form-control form-control-lg" required>
                                        <option value="">Select Preferred Cause</option>
                                        <option value="Collection Drive" {{ old('preferred_cause') == 'Collection Drive' ? 'selected' : '' }}>Collection Drive</option>
                                        <option value="E-Waste Awareness" {{ old('preferred_cause') == 'E-Waste Awareness' ? 'selected' : '' }}>E-Waste Awareness</option>
                                        <option value="Sustainability Education Sessions" {{ old('preferred_cause') == 'Sustainability Education Sessions' ? 'selected' : '' }}>Sustainability Education Sessions</option>
                                        <option value="Educational Institutions" {{ old('preferred_cause') == 'Educational Institutions' ? 'selected' : '' }}>Educational Institutions</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Message</label>
                                    <textarea name="message" class="form-control form-control-lg" rows="3" placeholder="Mention any preferred location, cause etc.">{{ old('message') }}</textarea>
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
                                                    <input class="form-check-input" 
                                                           type="checkbox" 
                                                           name="gdpr_consent" 
                                                           id="gdpr_consent" 
                                                           value="1" 
                                                           {{ old('gdpr_consent') ? 'checked' : '' }}
                                                           required>
                                                    <label class="form-check-label fw-medium" for="gdpr_consent">
                                                        I consent to the processing of my personal data for donation processing and communication purposes. *
                                                    </label>
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
                                    <button type="submit" class="btn btn-success btn-lg px-5 shadow-sm donation-btn" id="donationSubmitBtn">
                                        <i class="fas fa-heart me-2"></i> 
                                        <span class="btn-text">Donate Now</span>
                                        <div class="spinner-border spinner-border-sm ms-2 d-none" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                    
                                    <div class="mt-3">
                                        <small class="text-muted">
                                            <i class="fas fa-lock me-1"></i>
                                            Your payment is secure and encrypted with Razorpay
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

<!-- Razorpay Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Complete Your Donation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="payment-details mb-4">
                    <h4 class="amount-display text-success"></h4>
                    <p class="donor-name mb-1"></p>
                    <p class="donor-email text-muted"></p>
                    <p class="donor-cause text-muted small"></p>
                </div>
                <div id="razorpay-container"></div>
            </div>
        </div>
    </div>
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

.amount-presets .btn {
    border-color: #164A25;
    color: #164A25;
    transition: all 0.3s ease;
}

.amount-presets .btn:hover,
.amount-presets .btn.active {
    background-color: #164A25;
    border-color: #164A25;
    color: white;
}

.donation-btn {
    background: linear-gradient(135deg, #164A25, #00AA55);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.donation-btn:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(22, 74, 37, 0.3);
}

.donation-btn:disabled {
    background: #6c757d;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.payment-details {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid #00AA55;
}

.amount-display {
    font-size: 2em;
    font-weight: bold;
}

.donor-name {
    font-size: 1.2em;
    font-weight: 600;
    color: #164A25;
}

/* Alert Styles */
.alert {
    border-radius: 10px;
    border: none;
    padding: 15px 20px;
    margin-bottom: 20px;
    animation: slideInDown 0.5s ease-out;
    position: relative;
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

/* Custom Close Button */
.btn-close {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    font-size: 1.2rem;
    font-weight: bold;
    color: inherit;
    opacity: 0.7;
    cursor: pointer;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.btn-close:hover {
    opacity: 1;
    background-color: rgba(0, 0, 0, 0.1);
}

.btn-close::before {
    content: "×";
    font-size: 1.5rem;
    line-height: 1;
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

/* Responsive adjustments */
@media (max-width: 768px) {
    .gdpr-consent-section .card-body {
        padding: 1rem;
    }
    
    .card-body.p-5 {
        padding: 2rem !important;
    }
    
    .amount-presets .btn {
        padding: 8px 12px;
        font-size: 0.9rem;
    }
}
</style>
@endsection
@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function() {
    let currentDonationId = null;

    // Amount preset buttons
    $('.amount-btn').click(function() {
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
        $('input[name="amount"]').val($(this).data('amount'));
        validateForm();
    });

    // Custom amount input
    $('input[name="amount"]').on('input', function() {
        $('.amount-btn').removeClass('active');
        validateForm();
    });

    // Form validation
    function validateForm() {
        const requiredFields = [
            'input[name="name"]',
            'input[name="email"]', 
            'input[name="phone"]',
            'select[name="donor_type"]',
            'input[name="amount"]',
            'select[name="preferred_cause"]',
            '#gdpr_consent'
        ];

        let isValid = true;

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

        // Additional validation for amount
        const amount = $('input[name="amount"]').val();
        if (amount && parseInt(amount) < 1) {
            isValid = false;
        }

        $('#donationSubmitBtn').prop('disabled', !isValid);
        return isValid;
    }

    // Real-time form validation
    $('input, textarea, select').on('input change', function() {
        validateForm();
    });

    // Form submission
    $('#donationForm').on('submit', function(e) {
        e.preventDefault();
        
        if (!validateForm()) {
            showMessage('Please fill all required fields and accept the privacy consent.', 'danger');
            return;
        }

        const submitBtn = $('.donation-btn');
        const btnText = $('.btn-text');
        const spinner = $('.spinner-border');
        
        // Show loading state
        btnText.text('Processing...');
        spinner.removeClass('d-none');
        submitBtn.prop('disabled', true);

        // Create order and proceed to payment
        $.ajax({
            url: "{{ route('money.donate.create-order') }}",
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    currentDonationId = response.donation_id;
                    openRazorpayPayment(response);
                } else {
                    showMessage(response.message || 'Order creation failed.', 'danger');
                }
            },
            error: function(xhr) {
                let errors = xhr.responseJSON ? xhr.responseJSON.errors : null;
                if (errors) {
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#responseMessage').html(errorHtml);
                } else {
                    showMessage('An error occurred. Please try again.', 'danger');
                }
            },
            complete: function() {
                // Reset button state
                btnText.text('Donate Now');
                spinner.addClass('d-none');
                validateForm();
            }
        });
    });

    function openRazorpayPayment(orderData) {
        // Update modal content
        $('.amount-display').text('₹' + orderData.amount);
        $('.donor-name').text('Donor: ' + orderData.name);
        $('.donor-email').text(orderData.email);
        $('.donor-cause').text('Cause: ' + $('select[name="preferred_cause"]').find('option:selected').text());

        const options = {
            "key": orderData.key,
            "amount": orderData.amount * 100,
            "currency": "INR",
            "name": "ENVED Foundation",
            "description": "Donation for " + $('select[name="preferred_cause"]').find('option:selected').text(),
            "image": "{{ asset('images/logo.png') }}",
            "order_id": orderData.order_id,
            "handler": function(response) {
                verifyPayment(response, orderData);
            },
            "prefill": {
                "name": orderData.name,
                "email": orderData.email,
                "contact": orderData.phone
            },
            "notes": {
                "donation_id": orderData.donation_id,
                "donor_type": $('select[name="donor_type"]').val(),
                "preferred_cause": $('select[name="preferred_cause"]').val()
            },
            "theme": {
                "color": "#164A25"
            }
        };

        const rzp = new Razorpay(options);
        
        // Show modal before opening Razorpay
        $('#paymentModal').modal('show');
        
        rzp.open();
        
        // Close modal when Razorpay is closed
        rzp.on('payment.failed', function(response){
            $('#paymentModal').modal('hide');
            showMessage('Payment failed. Please try again.', 'danger');
            console.error(response.error);
        });
    }

    function verifyPayment(paymentData, orderData) {
        const submitBtn = $('.donation-btn');
        const btnText = $('.btn-text');
        const spinner = $('.spinner-border');
        
        // Show loading state
        btnText.text('Verifying Payment...');
        spinner.removeClass('d-none');
        submitBtn.prop('disabled', true);

        $.ajax({
            url: "{{ route('money.donate.verify-payment') }}",
            type: 'POST',
            data: {
                razorpay_order_id: paymentData.razorpay_order_id,
                razorpay_payment_id: paymentData.razorpay_payment_id,
                razorpay_signature: paymentData.razorpay_signature,
                donation_id: currentDonationId,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    $('#paymentModal').modal('hide');
                    showMessage(response.message, 'success');
                    
                    // Show success details
                    const successHtml = `
                        <div class="alert alert-success">
                            <h5>Thank You for Your Donation!</h5>
                            <p><strong>Amount:</strong> ₹${response.amount}</p>
                            <p><strong>Transaction ID:</strong> ${response.payment_id}</p>
                            <p>You will receive a confirmation email shortly with your tax receipt.</p>
                            <hr>
                            <small class="text-muted">
                                Your donation will help us continue our environmental conservation efforts.
                            </small>
                        </div>
                    `;
                    $('#responseMessage').html(successHtml);
                    
                    // Reset form
                    $('#donationForm')[0].reset();
                    $('.amount-btn').removeClass('active');
                    $('#gdpr_consent').prop('checked', false);
                    
                } else {
                    showMessage(response.message, 'danger');
                }
            },
            error: function(xhr) {
                showMessage('Payment verification failed. Please contact support.', 'danger');
                console.error('Verification error:', xhr.responseJSON);
            },
            complete: function() {
                // Reset button state
                btnText.text('Donate Now');
                spinner.addClass('d-none');
                validateForm();
                $('#paymentModal').modal('hide');
            }
        });
    }

    function showMessage(message, type) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        const alertHtml = `
            <div class="alert ${alertClass} alert-dismissible fade show">
                <div class="d-flex align-items-center">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'} me-2"></i>
                    <div>${message}</div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        $('#responseMessage').html(alertHtml);
        
        // Scroll to message
        $('html, body').animate({
            scrollTop: $('#responseMessage').offset().top - 100
        }, 500);

        // Auto-hide success message after 8 seconds
        if (type === 'success') {
            setTimeout(() => {
                $('#responseMessage .alert').alert('close');
            }, 8000);
        }
    }

    // Close modal when clicking outside
    $('#paymentModal').on('hidden.bs.modal', function () {
        // Reset button state if modal is closed without payment
        $('.btn-text').text('Donate Now');
        $('.spinner-border').addClass('d-none');
        $('#donationSubmitBtn').prop('disabled', false);
    });

    // Initial form validation
    validateForm();
});
</script>
@endsection