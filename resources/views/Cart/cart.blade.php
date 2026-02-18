@extends('layout.app')

@section('title', 'Cart | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}" />
@endpush
@section('content')

 <section class="cart-page">
    <div class="container">
      <h3 class="fw-bold mb-4">Shopping Cart</h3>

      <div class="row g-4">

        <!-- CART ITEMS -->
        <div class="col-lg-8">
          <div class="glass-card">

            <!-- ITEM -->
            <div class="cart-item">
              <img src="{{ asset('assets/image/menu/Americano Rosted Coffee.png') }}" class="cart-img">
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-1">Americano Roasted Coffee</h6>
                <small class="text-muted">250g Pack</small>

                <div class="d-flex align-items-center gap-3 mt-3">
                  <div class="qty-box">
                    <button onclick="changeQty(this,-1)">−</button>
                    <input type="text" value="1" readonly>
                    <button onclick="changeQty(this,1)">+</button>
                  </div>
                  <span class="remove">
                    <i class="bi bi-trash"></i> Remove
                  </span>
                </div>
              </div>
              <div class="price">₹499</div>
            </div>

            <!-- ITEM -->
            <div class="cart-item">
              <img src="{{ asset('assets/image/menu/AmericanoRostedCoffee.png') }}" class="cart-img">
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-1">Premium Espresso Beans</h6>
                <small class="text-muted">500g Pack</small>

                <div class="d-flex align-items-center gap-3 mt-3">
                  <div class="qty-box">
                    <button onclick="changeQty(this,-1)">−</button>
                    <input type="text" value="2" readonly>
                    <button onclick="changeQty(this,1)">+</button>
                  </div>
                  <span class="remove">
                    <i class="bi bi-trash"></i> Remove
                  </span>
                </div>
              </div>
              <div class="price">₹899</div>
            </div>

          </div>
        </div>

        <!-- SUMMARY -->
        <div class="col-lg-4">
          <div class="glass-card">
            <h5 class="fw-bold mb-4">Order Summary</h5>

            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal</span>
              <strong>₹1,398</strong>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <span>Shipping</span>
              <strong>₹99</strong>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <span>Tax</span>
              <strong>₹0</strong>
            </div>

            <hr>

            <div class="d-flex justify-content-between mb-4">
              <span>Total</span>
              <strong class="price">₹1,497</strong>
            </div>

            <button class="btn btn-checkout">
              Proceed to Checkout
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
@push('scripts')
 
<script>
    function changeQty(btn, change) {
      const input = btn.parentElement.querySelector('input');
      let value = parseInt(input.value);
      value = Math.max(1, value + change);
      input.value = value;
    }
  </script>

@endpush