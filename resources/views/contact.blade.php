@extends('layouts.main')

@section('content')
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    @php
        $captcha_id = uniqid();
    @endphp
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

    <!-- ================= CONTACT INFO CARDS ================= -->
    <div class="contact-info-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($contact as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="info-card d-flex align-items-start">

                            <div class="info-icon me-3">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" width="30">
                            </div>

                            <div>
                                <h5>{{ $item->title }}</h5>
                                <p>{!! $item->body !!}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- ================= CONTACT SECTION ================= -->
    <section class="contact-section">

        <!-- FULL WIDTH MAP -->
        <div class="map-background">
            <iframe src="https://www.google.com/maps?q=Dubai,UAE&output=embed" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- FORM OVERLAY -->
        <div class="contact-overlay">
            <div class="container">
                <div class="contact-card">

                    <h2 class="section-title">Get In Touch</h2>



                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}"
                                class="form-control @error('subject') is-invalid @enderror" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <textarea name="message" rows="5" placeholder="Message"
                                class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div style="margin-top:15px;">

                            <label>Enter Captcha *</label>

                            <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">

                                <img id="captchaImage" src="{{ route('scrap.captcha') }}"
                                    style="height:45px; border-radius:6px; border:1px solid #ccc;">

                                <button type="button" onclick="refreshCaptcha()"
                                    style="height:45px; width:45px; border:none; cursor:pointer;">
                                    ↻
                                </button>

                            </div>

                            <input type="text" name="captcha" placeholder="Enter Captcha *" required>

                            @error('captcha')
                                <div style="color:red;">{{ $message }}</div>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>

                </div>
            </div>
        </div>

    </section>
    <script>
        function refreshCaptcha() {
            let id = "{{ $captcha_id }}";
            document.getElementById('captchaImage').src =
                "{{ route('scrap.captcha') }}?id=" + id + "&" + new Date().getTime();
        }
    </script>
@endsection
