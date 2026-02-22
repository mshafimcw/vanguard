@extends('layouts.main')

@section('content')

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="https://st.ourhtmldemo.com/new/City.Govt/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Finance</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Growth</a></li>
                <li><a href="#">Plan</a></li>
            </ul>
        </div>
    </div>
</div>

<section class="event-banner">
    <div class="image-layer" style="background-image:url('{{ asset($program->image) }}')"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{$program->title}}</h1>
            </div>
        </div>
    </div>
</section>

<!--Events Section-->
<section class="event-details-section">
    <div class="auto-container">
        <div class="event-details">
            <div class="row clearfix">
                <!--Content Column-->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="content-inner">
                        <!--Info-->
                        <div class="info-blocks">
                            <div class="row clearfix">
                                <div class="info-block col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><span class="flaticon-circular-clock"></span></div>
                                        <h4>Date & Time</h4>
                                        <ul>
                                            <li>{{ \Carbon\Carbon::parse($program->created_date)->format('F d, Y') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($program->created_date)->format('l \\a\\t H:i') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-block col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon"><span class="flaticon-map"></span></div>
                                        <h4>Location</h4>
                                        <ul>
                                            <li>{{ $program->location ?? 'No location specified' }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-image">
                            <figure class="image">
                                <div class="main-image">
                                    @if($program->multipleImages->count())
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="carousel-fixed-size mx-auto">
                                                <div id="programImagesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                    <!-- Carousel Inner: Images -->
                                                    <div class="carousel-inner program-carousel-inner">
                                                        @foreach($program->multipleImages as $key => $image)
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('storage/' . $image->name) }}"
                                                                class="d-block w-100"
                                                                alt="Extra Image"
                                                                loading="lazy">
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    <!-- Controls -->
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#programImagesCarousel" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#programImagesCarousel" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <p>No extra images found.</p>
                                    @endif
                                </div>
                            </figure>
                        </div>

                        <div class="text-block">
                            <h2>Overview</h2>
                            <p>{{$program->description}}</p>
                        </div>

                                          

                       <div class="share-post">
    <strong>Share this post with your friends</strong>
    @php
        $currentUrl = url()->current();
        $title = $program->title;
        $description = Str::limit(strip_tags($program->description), 100);
        $image = $program->image ? asset($program->image) : asset('images/logo.png');
        
        // Social media share URLs
        $facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($currentUrl);
        $twitterUrl = "https://twitter.com/intent/tweet?url=" . urlencode($currentUrl) . "&text=" . urlencode($title);
        $linkedinUrl = "https://www.linkedin.com/sharing/share-offsite/?url=" . urlencode($currentUrl);
        $pinterestUrl = "https://pinterest.com/pin/create/button/?url=" . urlencode($currentUrl) . "&media=" . urlencode($image) . "&description=" . urlencode($title);
        $whatsappUrl = "https://wa.me/?text=" . urlencode($title . " " . $currentUrl);
    @endphp
    
    <ul class="links clearfix">
        <li class="facebook">
            <a href="{{ $facebookUrl }}" target="_blank" rel="noopener noreferrer">
                <span class="icon fab fa-facebook-f"></span>
                <span class="txt">Facebook</span>
            </a>
        </li>
        <li class="twitter">
            <a href="{{ $twitterUrl }}" target="_blank" rel="noopener noreferrer">
                <span class="icon fab fa-twitter"></span>
                <span class="txt">Twitter</span>
            </a>
        </li>
        <li class="linkedin">
            <a href="{{ $linkedinUrl }}" target="_blank" rel="noopener noreferrer">
                <span class="icon fab fa-linkedin-in"></span>
                <span class="txt">Linkedin</span>
            </a>
        </li>
        <li class="pinterest">
            <a href="{{ $pinterestUrl }}" target="_blank" rel="noopener noreferrer">
                <span class="icon fab fa-pinterest-p"></span>
                <span class="txt">Pinterest</span>
            </a>
        </li>
        <li class="whatsapp">
            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer">
                <span class="icon fab fa-whatsapp"></span>
                <span class="txt">WhatsApp</span>
            </a>
        </li>
    </ul>
</div>

                        
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="info-inner">
                        <div class="title">
                            <h4>Contact Details</h4>
                        </div>
                        <div class="content">
                            <div class="contact-box">
                               
                                <div class="default-form booking-form">
                                    <h4>Donate for this Program</h4>
                                    <div id="responseMessage"></div>
                                    
                                    <form method="POST" id="donatefromdetail">
                                        @csrf
                                        <input type="hidden" name="program_id" value="{{ $program->id }}">
                                        
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address *" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="address" placeholder="Address *" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Donation Amount (₹)</label>
                                            <div class="amount-presets mb-2">
                                                <div class="btn-group w-100" role="group">
                                                    <button type="button" class="btn btn-outline-success btn-sm amount-btn" data-amount="100">₹100</button>
                                                    <button type="button" class="btn btn-outline-success btn-sm amount-btn" data-amount="500">₹500</button>
                                                    <button type="button" class="btn btn-outline-success btn-sm amount-btn" data-amount="1000">₹1000</button>
                                                </div>
                                            </div>
                                            <input type="number" name="amount" class="form-control" placeholder="Or enter custom amount" min="1" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone Number *" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Comments"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one w-100">
                                                <span class="btn-title">Donate Now</span>
                                                <div class="spinner-border spinner-border-sm ms-2 d-none" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919999999999" class="whatsapp-float" target="_blank" title="Chat with us on WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp"
        class="whatsapp-icon">
</a>

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
                </div>
                <div id="razorpay-container"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
.amount-presets .btn {
    border-color: #164A25;
    color: #164A25;
    transition: all 0.3s ease;
    padding: 5px 10px;
    font-size: 12px;
}

.amount-presets .btn:hover,
.amount-presets .btn.active {
    background-color: #164A25;
    border-color: #164A25;
    color: white;
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

.alert {
    border-radius: 10px;
    border: none;
    margin-bottom: 15px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border-left: 4px solid #00AA55;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

.whatsapp-icon {
    width: 35px;
    height: 35px;
    margin-top: 12px;
}
</style>
@endsection

@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function() {
    // Amount preset buttons
    $('.amount-btn').click(function() {
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
        $('input[name="amount"]').val($(this).data('amount'));
    });

    // Custom amount input
    $('input[name="amount"]').on('input', function() {
        $('.amount-btn').removeClass('active');
    });

    $('#donatefromdetail').on('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = $(this).find('button[type="submit"]');
        const btnTitle = submitBtn.find('.btn-title');
        const spinner = submitBtn.find('.spinner-border');
        
        // Show loading state
        btnTitle.text('Processing...');
        spinner.removeClass('d-none');
        submitBtn.prop('disabled', true);

        $.ajax({
            url: "{{ route('donate.create-order') }}",
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    openRazorpayPayment(response);
                } else {
                    showMessage(response.message, 'danger');
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
                btnTitle.text('Donate Now');
                spinner.addClass('d-none');
                submitBtn.prop('disabled', false);
            }
        });
    });

    function openRazorpayPayment(orderData) {
        // Update modal content
        $('.amount-display').text('₹' + orderData.amount);
        $('.donor-name').text('Donor: ' + orderData.name);
        $('.donor-email').text(orderData.email);

        const options = {
            "key": orderData.key,
            "amount": orderData.amount * 100,
            "currency": "INR",
            "name": "ENVED Foundation",
            "description": "Donation for Program: {{ $program->title }}",
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
                "program_id": "{{ $program->id }}",
                "program_title": "{{ $program->title }}"
            },
            "theme": {
                "color": "#164A25"
            }
        };

        const rzp = new Razorpay(options);
        rzp.open();
    }

    function verifyPayment(paymentData, orderData) {
        $.ajax({
            url: "{{ route('donation.verify') }}",
            type: 'POST',
            data: {
                order_id: paymentData.razorpay_order_id,
                payment_id: paymentData.razorpay_payment_id,
                signature: paymentData.razorpay_signature,
                program_id: "{{ $program->id }}",
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    showMessage(response.message, 'success');
                    $('#donatefromdetail')[0].reset();
                    $('.amount-btn').removeClass('active');
                    
                    // Show success details
                    const successHtml = `
                        <div class="alert alert-success">
                            <h5>Thank You for Your Donation!</h5>
                            <p><strong>Amount:</strong> ₹${orderData.amount}</p>
                            <p><strong>Program:</strong> {{ $program->title }}</p>
                            <p><strong>Transaction ID:</strong> ${response.payment_id}</p>
                            <p>You will receive a confirmation email shortly.</p>
                        </div>
                    `;
                    $('#responseMessage').html(successHtml);
                    
                    // Close payment modal if open
                    $('#paymentModal').modal('hide');
                } else {
                    showMessage(response.message, 'danger');
                }
            },
            error: function(xhr) {
                showMessage('Payment verification failed. Please contact support.', 'danger');
            }
        });
    }

    function showMessage(message, type) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        $('#responseMessage').html(`<div class="alert ${alertClass}">${message}</div>`);
        
        // Scroll to message
        $('html, body').animate({
            scrollTop: $('#responseMessage').offset().top - 100
        }, 500);
    }
});
</script>
@endsection