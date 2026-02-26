@extends('layouts.main')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-detailpage wow fadeIn" style="background-image: url('{{ asset('uploads/services/'.$service->image) }}');>
      <div class="container py-5">
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
          <li>Bare Bright Copper Wire</li>
          <li>Insulated Copper Cables</li>
          <li>Copper Pipes & Tubes</li>
          <li>Industrial Copper Scrap</li>
          <li>Mixed Copper Scrap</li>
        </ul>
      </div>

      <!-- BENEFITS -->
      <div class="service-benefits">
        <div class="benefit-card">
          <i class="bi bi-cash-stack"></i>
          <h4>Best Market Prices</h4>
          <p>We track live market rates to offer you maximum value.</p>
        </div>

        <div class="benefit-card">
          <i class="bi bi-truck"></i>
          <h4>Free Scrap Pickup</h4>
          <p>Fast and free pickup anywhere across the UAE.</p>
        </div>

        <div class="benefit-card">
          <i class="bi bi-lightning-fill"></i>
          <h4>Instant Payment</h4>
          <p>Get paid immediately after certified weighing.</p>
        </div>
      </div>

    </div>

    <!-- RIGHT FORM -->
    <aside class="service-quote">
      <h3>Get A Quote</h3>

      <form>
        <input type="text" placeholder="Full Name" required>
        <input type="tel" placeholder="Phone Number" required>

        <select>
          <option>Dubai - Sharjah - Ajman</option>
          <option>Abu Dhabi</option>
          <option>Ras Al Khaimah</option>
        </select>

        <select>
          <option>Copper Scrap</option>
          <option>Metal Scrap</option>
          <option>Aluminium Scrap</option>
          <option>Industrial Scrap</option>
          <option>Construction Scrap</option>
        </select>

        <textarea placeholder="Details of Your Scrap (optional)"></textarea>

        <button type="submit" class="btn-primary">
          Get My Price
        </button>
      </form>
    </aside>

  </div>
</section>

@endsection