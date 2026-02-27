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
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-detailpage wow fadeIn"
        style="background-image: url('{{ asset('uploads/services/' . $service->image) }}');>
      <div class="container
        py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start hero-text">
                <h1 class="display-1 mb-4">
                    {{ $service->title }}<br />
                </h1>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero End -->


    <!-- ================= SERVICE DETAIL SECTION ================= -->
    <section class="service-detail">
        <div class="service-detail-overlay"></div>

        <div class="container service-detail-wrapper">

            <!-- LEFT CONTENT -->
            <div class="service-detail-content">

                <h1 class="service-title">{{ $service->title }}</h1>
                <p class="service-subtitle">
                    {{ $service->description }}
                </p>

                <!-- TYPES COVERED -->
                <div class="service-block">
                    <h3>Types of Copper Scrap We Accept</h3>
                    <ul class="service-list">
                        <li>{{ $service->text1 }}</li>
                        <li>{{ $service->text2 }}</li>
                        <li>{{ $service->text3 }}</li>

                    </ul>
                </div>



            </div>
            <!-- RIGHT FORM -->
            <aside class="service-quote">
                <h3>Get A Quote</h3>

                <form action="{{ route('scrap-request.store') }}" method="POST">
                    @csrf

                    <input type="text" name="full_name" placeholder="Full Name *" required>

                    <input type="tel" name="phone" placeholder="Phone Number *" required>

                    {{-- Location --}}
                    <select name="location" required>
                        <option value="">Select Location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->location }}">
                                {{ $location->location }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Scrap Type (auto-selected current service) --}}
                    <select name="scrap_type[]" multiple required>
                        @foreach ($services as $srv)
                            <option value="{{ $srv->title }}" {{ $srv->id === $service->id ? 'selected' : '' }}>
                                {{ $srv->title }}
                            </option>
                        @endforeach
                    </select>

                    <textarea name="details" placeholder="Details of Your Scrap (optional)"></textarea>

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
                    <button type="submit" class="btn-primary">
                        Get My Price
                    </button>
                </form>
            </aside>

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
