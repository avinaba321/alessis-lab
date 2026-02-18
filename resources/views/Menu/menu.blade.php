@extends('layout.app')

@section('title', 'Menu | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}" />
@endpush
@section('content')

<!-- MENU HERO SECTION -->
  <section class="menu-hero">
    <div class="menu-hero-overlay"></div>

    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center text-white">
          <!-- Badge -->
          <span class="menu-hero-badge"> ☕ Our Selection </span>

          <!-- Title -->
          <h1 class="menu-hero-title">Our Menu</h1>

          <!-- Subtitle -->
          <p class="menu-hero-subtitle">
            Crafted with science, served with soul
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- POPULAR MENU -->
  <section class="al-popular-menu-section">
    <div class="menu-shape shape-1"></div>
    <div class="menu-shape shape-2"></div>

    <div class="container">
      <div class="al-popular-menu-header">
        <span class="menu-subtitle">Handpicked</span>
        <h2>Our Popular Picks</h2>
      </div>

      <div class="row g-4">
        <!-- LEFT -->
        <div class="col-lg-6">
          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/classic-americano.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Classic Americano</h5>
              <p>
                Smooth espresso diluted with hot water for a bold yet balanced
                taste.
              </p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$18.99</span>
              <span class="old">$24.00</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/vanilla-latte.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Vanilla Latte</h5>
              <p>
                Rich espresso blended with steamed milk and natural vanilla
                syrup.
              </p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$21.99</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/caramel-cappuccino.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Caramel Cappuccino</h5>
              <p>
                Perfect foam with caramel sweetness and a deep coffee finish.
              </p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$20.99</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/brazilian-dark-roast-beans.webp') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Brazilian Dark Roast Beans</h5>
              <p>
                Strong aroma with chocolate undertones sourced from Brazil.
              </p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$39.99</span>
            </div>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-lg-6">
          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/espresso-shot.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Espresso Shot</h5>
              <p>Intense single-shot espresso brewed to perfection.</p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$14.99</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/mocha-delight.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Mocha Delight</h5>
              <p>Espresso meets cocoa with a creamy milk base.</p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$23.99</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/italian-espresso-roast.png') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>Italian Espresso Roast</h5>
              <p>Traditional Italian roast with a bold, smoky finish.</p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$19.99</span>
            </div>
          </div>

          <div class="al-popular-menu-card">
            <img src="{{ asset('assets/image/menu/south-indian-filter-coffee.jpg') }}" alt="" />
            <div class="al-popular-menu-content">
              <h5>South Indian Filter Coffee</h5>
              <p>
                Authentic blend with chicory, rich aroma, and smooth body.
              </p>
            </div>
            <div class="al-popular-menu-price">
              <span class="new">$17.99</span>
              <span class="old">$22.50</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- explore-menu-section -->
  <section class="al-explore-menu-section">
    <div class="container">
      <!-- HEADER -->
      <div class="al-explore-menu-header text-center">
        <span>What Happens Here</span>
        <h2>EXPLORE OUR MENU.</h2>
      </div>

      <div class="row align-items-start g-4">
        <!-- LEFT MENU LIST -->
        <div class="col-lg-8">
          <div class="al-explore-menu-item">
            <img src="{{ asset('assets/image/menu/bmericano-rosted-coffee.webp') }}" alt="" />
            <div class="al-explore-menu-info">
              <h5>Bmericano Rosted Coffee</h5>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable.
              </p>
            </div>
            <div class="al-explore-menu-price">
              <span class="new">$19.99</span>
              <span class="old">$30.00</span>
            </div>
          </div>

          <div class="al-explore-menu-item">
            <img src="{{ asset('assets/image/menu/AmericanoRostedCoffee.png') }}" alt="" />
            <div class="al-explore-menu-info">
              <h5>Americano Rosted Coffee</h5>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable.
              </p>
            </div>
            <div class="al-explore-menu-price">
              <span class="new">$19.99</span>
            </div>
          </div>

          <div class="al-explore-menu-item">
            <img src="{{ asset('assets/image/menu/maxican-rosted-coffee.jpg') }}" alt="" />
            <div class="al-explore-menu-info">
              <h5>Maxican Rosted Coffee</h5>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable.
              </p>
            </div>
            <div class="al-explore-menu-price">
              <span class="new">$19.99</span>
            </div>
          </div>

          <div class="al-explore-menu-item">
            <img src="{{ asset('assets/image/menu/xmericano-rosted-coffee.png') }}" alt="" />
            <div class="al-explore-menu-info">
              <h5>Xmericano Tosted Coffee</h5>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable.
              </p>
            </div>
            <div class="al-explore-menu-price">
              <span class="new">$15.99</span>
            </div>
          </div>
        </div>

        <!-- RIGHT PROMO CARD -->
        <div class="col-lg-4">
          <div class="al-explore-menu-promo">
            <img src="{{ asset('assets/image/menu/menu-right-img.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
@push('scripts')
  
@endpush