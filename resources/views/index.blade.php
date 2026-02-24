@extends('layouts.main')

@section('content')
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
                        <div class="scrap-card">
                            <img src="img/metal.png" alt="Metal Scrap" />
                            <h3>Metal Scrap</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                        <div class="scrap-card">
                            <img src="img/cpper.png" alt="Copper Scrap" />
                            <h3>Copper Scrap</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                        <div class="scrap-card">
                            <img src="img/aluminium.png" alt="Aluminium Scrap" />
                            <h3>Aluminium</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                        <div class="scrap-card">
                            <img src="img/construction.png" alt="Construction Scrap" />
                            <h3>Construction Scrap</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                        <div class="scrap-card">
                            <img src="img/industrial2.png" alt="Industrial Scrap" />
                            <h3>Industrial Scrap</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                        <div class="scrap-card">
                            <img src="img/industrial3.png" alt="Industrial Scrap" />
                            <h3>Industrial Scrap</h3>
                            <button class="btn-sell">Sell Scrap Now</button>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: FORM -->
                <div class="scrap-right">
                    <div class="scrap-form">
                        <h3>
                            Get Your <span class="orange-text">Scrap's</span> <br />Value
                            <span class="orange-text">Instantly</span>
                        </h3>
                        <form>
                            <input type="text" name="name" placeholder="Full Name *" required />
                            <input type="tel" name="phone" placeholder="Phone Number *" required />
                            <input type="email" name="email" placeholder="Email (optional)" />
                            <select name="location">
                                <option>Dubai - Sharjah - Ajman</option>
                            </select>
                            <select name="scrap-type">
                                <option>Metal Scrap, E-Waste, etc.</option>
                            </select>
                            <textarea name="details" placeholder="Details of Your Scrap (optional)"></textarea>
                            <div class="captcha">
                                <div class="captcha-left">
                                    <input type="checkbox" id="robot-check" required />
                                    <label for="robot-check">I'm not a robot</label>
                                </div>
                                <div class="captcha-logo">
                                    <img src="img/recaptcha.png" alt="reCAPTCHA" width="32" height="32" />
                                </div>
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

    <!-- ================= SERVICE AREA SECTION ================= -->
    <section class="service-area">
        <div class="overlay"></div>

        <div class="service-container">
            <div class="service-content">
                <h2>Service Areas Across the UAE</h2>
                <p>
                    From Dubai to Fujairah, we cover every corner of the UAE with reliabilty
                </p>

                <div class="service-tags">
                    <span>Dubai</span>
                    <span>Sharjah</span>
                    <span>Abu Dhabi</span>
                    <span>Ajman</span>
                    <span>Ras Al Khaimah</span>
                    <span>Umm Al Quwain</span>
                </div>
            </div>
        </div>
    @endsection
