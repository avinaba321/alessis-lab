@extends('layout.app')

@section('title', 'Product Details | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}" />
@endpush
@section('content')

<!-- HERO -->
<section class="product-hero text-center">
  <div class="container">
    <h1>Americano Roasted Coffee</h1>
    <p>Bold flavor. Crafted with science.</p>
  </div>
</section>

<!-- PRODUCT DETAILS -->
<section class="container">
  <div class="product-wrapper row g-5">

    <!-- IMAGE -->
    <div class="col-lg-6">
      <div class="product-img">
        <img src="{{ asset('assets/image/menu/brazilian-dark-roast-beans.webp') }}" alt="Americano Coffee">
      </div>
    </div>

    <!-- INFO -->
    <div class="col-lg-6">
      <h2>Americano Roasted Coffee</h2>
      <p class="text-muted mt-2">
        Smooth espresso diluted with hot water for a rich yet balanced taste.
      </p>

      <div class="mb-3">
        <span class="price">$19.99</span>
        <span class="old-price">$29.99</span>
      </div>

      <ul class="feature">
        <li>✔ 100% Arabica Beans</li>
        <li>✔ Medium Dark Roast</li>
        <li>✔ Freshly Packed</li>
        <li>✔ Rich Aroma & Smooth Finish</li>
      </ul>

      <div class="d-flex align-items-center gap-3 mt-4">
        <input type="number" value="1" min="1" class="form-control w-25">
        <button class="btn-cart">Add to Cart</button>
      </div>
    </div>

    <!-- TABS -->
    <div class="col-12 mt-5">
      <ul class="nav nav-pills gap-2">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#desc">Description</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#benefits">Benefits</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reviews">Reviews</button>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="desc">
          <p>
            Our Americano is crafted using premium espresso beans,
            brewed to perfection and balanced with hot water for
            a smooth yet bold flavor.
          </p>
        </div>

        <div class="tab-pane fade" id="benefits">
          <ul>
            <li>Boosts focus and energy</li>
            <li>Low calorie coffee</li>
            <li>Rich antioxidants</li>
          </ul>
        </div>

        <div class="tab-pane fade" id="reviews">
          <p>⭐⭐⭐⭐⭐ 4.8/5 based on 128 reviews</p>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
@push('scripts')
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

@endpush