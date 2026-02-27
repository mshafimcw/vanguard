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
    @foreach ($banner as $banners)
        <div class="container-fluid py-5 mb-5 hero-header wow fadeIn"
            style="background-image: url('{{ asset($banners->image) }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">

            <div class="container py-5">
                <div class="row align-items-center">

                    <div class="col-lg-6 text-center text-lg-start hero-text">

                        <h1 class="display-1 mb-4">
                            {!! $banners->title !!}
                        </h1>

                        <p class="fs-4">
                            {!! $banners->body !!}
                        </p>

                    </div>

                    <div class="hero-cta">

                        <a href="#price" class="btn-price">
                            Get My Price
                        </a>

                        <a href="tel:+971521491001" class="btn-call-dark">
                            <i class="bi bi-telephone-fill"></i>
                            Call Now +971 52 149 1001
                        </a>

                    </div>

                </div>
            </div>

        </div>
    @endforeach
    <!-- Hero End -->

    <section class="scrap-section">
        <div class="container">
            <!-- COMMON HEADING -->
            <div class="section-header">
                <h2 class="section-title">WHY CHOOSE <span>VANGUARD?</span></h2>
                <p class="section-subtitle">
                    We make scraps with the best experience — we never guarantee your
                    igo, direct terms of printing or priority max cash.
                </p>
            </div>

            <!-- TWO-COLUMN LAYOUT -->
            <div class="scrap-container">
                <!-- LEFT: CARDS GRID -->
                <div class="scrap-left">
                    <div class="scrap-items">

                        @foreach ($services as $service)
                            <div class="scrap-card"
                                style="background-image: url('{{ asset('uploads/services/' . $service->image) }}');">



                                <h3>{{ $service->title }}</h3>


                                <a href="{{ route('servicedetails', $service->id) }}" class="btn-sell">View Details</button>
                                </a>

                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- RIGHT: FORM -->
                <div class="scrap-right">
                    <div class="scrap-form">
                        <h3>
                            Get Your <span class="orange-text">Scrap's</span> <br />Value
                            <span class="orange-text">Instantly</span>
                        </h3>
                        <form action="{{ route('scrap-request.store') }}" method="POST">

                            @csrf

                            <input type="text" name="full_name" placeholder="Full Name *" required>


                            <input type="tel" name="phone" placeholder="Phone Number *" required>


                            <input type="email" name="email" placeholder="Email">


                            <select name="location" required>
                                <option value="">Select Location</option>

                                @foreach ($locations as $location)
                                    <option value="{{ $location->location }}">
                                        {{ $location->location }}
                                    </option>
                                @endforeach
                            </select>


                            {{-- Dynamic scrap type --}}
                            <select name="scrap_type[]" multiple required>

                                @foreach ($services as $service)
                                    <option value="{{ $service->title }}">

                                        {{ $service->title }}

                                    </option>
                                @endforeach

                            </select>


                            <textarea name="details"></textarea>

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
                            <button type="submit" class="btn-get-price">

                                Get My Price

                            </button>

                        </form>
                    </div>
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
