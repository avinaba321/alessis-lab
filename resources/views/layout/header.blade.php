<!-- ================= NAVBAR ================= -->
  <nav class="navbar navbar-expand-lg coffee-navbar">
    <div class="container">

      <!-- LOGO -->
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/image/logo.png') }}" class="coffee-logo" alt="Alessilabs Logo" />
      </a>

      <!-- TOGGLER -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#coffeeNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="coffeeNav">
        <ul class="navbar-nav mx-auto gap-lg-4 text-center">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shop') }}">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('our-strory') }}">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('recipes') }}">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>

        <!-- ICONS -->
        <div class="nav-icons d-flex align-items-center justify-content-center gap-3">
          <a href="{{ route('cart') }}" class="icon-btn">
            <i class="bi bi-cart3"></i>
          </a>
          <a href="{{ route('account') }}" class="icon-btn">
            <i class="bi bi-person"></i>
          </a>
        </div>
      </div>

    </div>
  </nav>