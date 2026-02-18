@extends('layout.app')

@section('title', 'Shop | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}" />
@endpush
@section('content')

 <!-- ================= SHOP HERO ================= -->
    <section class="al-shop-hero">
        <!-- BACKGROUND IMAGE -->
        <div class="al-shop-bg">
            <img src="{{ asset('assets/image/shop-hero-bg.png') }}" alt="Shop Alessilabs Coffee" />
        </div>

        <!-- OVERLAY -->
        <div class="al-shop-overlay"></div>

        <!-- CONTENT -->
        <div class="al-shop-content">
            <h1>SHOP</h1>
        </div>

        <!-- CURVE SHAPE -->
        <div class="al-shop-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,60 C240,120 480,120 720,90 960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#f3fbf8"></path>
            </svg>
        </div>
    </section>
    <!-- ================= END SHOP HERO ================= -->

    <!-- shop -->
    <section class="al-shop">
        <div class="container">
            <div class="shop-layout">

                <!-- SIDEBAR -->
                <aside class="shop-sidebar">
                   

                    <!-- CATEGORY -->
                    <div class="filter-group">
                        <h6>CATEGORY</h6>
                        <label><input type="checkbox" value="creamers" class="filter-category"> Creamers &
                            Coffee</label>
                        <label><input type="checkbox" value="mixes" class="filter-category"> Drink Mixes &
                            Blends</label>
                        <label><input type="checkbox" value="snacks" class="filter-category"> Snacks & Food</label>
                        <label><input type="checkbox" value="variety" class="filter-category"> Variety Packs</label>
                        <label><input type="checkbox" value="merch" class="filter-category"> Accessories & Merch</label>
                    </div>

                    <!-- DIET -->
                    <div class="filter-group">
                        <h6>SHOP BY DIET</h6>
                        <label><input type="checkbox" value="vegan" class="filter-diet"> Vegan</label>
                        <label><input type="checkbox" value="dairyfree" class="filter-diet"> Dairy-Free</label>
                        <label><input type="checkbox" value="glutenfree" class="filter-diet"> Gluten-Free</label>
                    </div>
                </aside>

                <!-- PRODUCTS -->
                <div class="shop-products">

                    <!-- TOP BAR -->
                    <div class="shop-topbar">
                        <p>Showing <strong id="count">0</strong> of <strong id="total">0</strong> products</p>

                        <select id="sort">
                            <option value="best">Best Selling</option>
                            <option value="low">Price: Low to High</option>
                            <option value="high">Price: High to Low</option>
                        </select>
                    </div>

                    <!-- GRID -->
                    <div class="product-grid" id="productGrid"></div>

                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
 <script>
      const products = [
        {
          id: 1,
          name: "Superfood Creamer Original",
          price: 29.99,
          old: 39.99,
          category: "creamers",
          diet: ["vegan", "dairyfree"],
          rating: 5,
          best: true,
          img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93",
        },
        {
          id: 2,
          name: "Collagen Peptides Powder",
          price: 44.99,
          old: 54.99,
          category: "mixes",
          diet: ["glutenfree"],
          rating: 5,
          best: true,
          img: "{{ asset('assets/image/product3.png') }}",
        },
        {
          id: 3,
          name: "Variety Pack Bundle",
          price: 79.99,
          old: 99.99,
          category: "variety",
          diet: ["vegan"],
          rating: 5,
          best: true,
          img: "https://images.unsplash.com/photo-1511920170033-f8396924c348",
        },
        {
          id: 4,
          name: "Matcha Latte",
          price: 22.99,
          old: 29.99,
          category: "mixes",
          diet: ["vegan"],
          rating: 4,
          best: false,
          img: "{{ asset('assets/image/product4.avif') }}",
        },
      ];

      const grid = document.getElementById("productGrid");
      const count = document.getElementById("count");
      const total = document.getElementById("total");
      total.innerText = products.length;

      function render(list) {
        grid.innerHTML = "";
        list.forEach((p) => {
          grid.innerHTML += `
      <div class="product-card">
        ${p.old ? `<span class="badge">-${Math.round((1 - p.price / p.old) * 100)}%</span>` : ""}
        ${p.best ? `<span class="badge secondary">Best Seller</span>` : ""}
        <div class="product-img"><img src="${p.img}"></div>
        <h5>${p.name}</h5>
        <div class="rating">★★★★★ (${Math.floor(Math.random() * 400)})</div>
        <div class="price">
          <span class="new">$${p.price}</span>
          ${p.old ? `<span class="old">$${p.old}</span>` : ""}
        </div>
        <button class="add-btn">Add to Cart</button>
      </div>`;
        });
        count.innerText = list.length;
      }

      render(products);

      /* FILTER LOGIC */
      document.querySelectorAll("input, select").forEach((el) => {
        el.addEventListener("change", () => {
          let cats = [
            ...document.querySelectorAll(".filter-category:checked"),
          ].map((i) => i.value);
          let diets = [
            ...document.querySelectorAll(".filter-diet:checked"),
          ].map((i) => i.value);
          let sort = document.getElementById("sort").value;

          let filtered = products.filter((p) => {
            return (
              (cats.length ? cats.includes(p.category) : true) &&
              (diets.length ? diets.every((d) => p.diet.includes(d)) : true)
            );
          });

          if (sort === "low") filtered.sort((a, b) => a.price - b.price);
          if (sort === "high") filtered.sort((a, b) => b.price - a.price);

          render(filtered);
        });
      });
    </script>

@endpush