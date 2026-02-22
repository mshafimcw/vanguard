@extends('layouts.main')

@section('content')

<section class="event-banner">
    <div class="image-layer" style="background-image:url('{{ asset($blog->image) }}')"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{$blog->title}}</h1>
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
                                            <li>{{ \Carbon\Carbon::parse($blog->created_date)->format('F d, Y') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($blog->created_date)->format('l \\a\\t H:i') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                        

                        <div class="text-block">
                            <h2>Overview</h2>
                            <p>{!! $blog->body !!}</p>
                        </div>

                                          

                       <div class="share-post">
    <strong>Share this post with your friends</strong>
    @php
        $currentUrl = url()->current();
        $title = $blog->title;
        $description = Str::limit(strip_tags($blog->description), 100);
        $image = $blog->image ? asset($blog->image) : asset('images/logo.png');
        
        // Social media share URLs
        $facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($currentUrl);
        $twitterUrl = "https://twitter.com/intent/tweet?url=" . urlencode($currentUrl) . "&text=" . urlencode($title);
        $linkedinUrl = "https://www.linkedin.com/sharing/share-offsite/?url=" . urlencode($currentUrl);
        $pinterestUrl = "https://pinterest.com/pin/create/button/?url=" . urlencode($currentUrl) . "&media=" . urlencode($image) . "&description=" . urlencode($title);
        $whatsappUrl = "https://wa.me/?text=" . urlencode($title . " " . $currentUrl);
    @endphp
    
    
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
                                        <input type="hidden" name="program_id" value="{{ $blog->id }}">
                                        
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
