@extends('layout.app')

@section('title', 'Recipes | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/recipes.css') }}" />
@endpush
@section('content')

 <!-- ================= RECIPES HERO ================= -->
    <section class="al-recipes-hero">
        <!-- BACKGROUND IMAGE -->
        <div class="al-recipes-bg">
            <img src="{{ asset('assets/image/recipe-header.png') }}" alt="Recipes" />
        </div>

        <!-- OVERLAY -->
        <div class="al-recipes-overlay"></div>

        <!-- CONTENT -->
        <div class="al-recipes-content">
            <h1>RECIPES</h1>
            <p>Delicious coffee recipes crafted for every mood</p>
        </div>

        <!-- WAVE -->
        <div class="al-recipes-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,60 C240,120 480,120 720,90 960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#faf7f2"></path>
            </svg>
        </div>
    </section>


<!-- ================= BLOG SECTION ================= -->
<section class="coffee-blog">
  <div class="container">

    <!-- HEADER -->
    <div class="coffee-blog-header">
      <h2>Latest Blogs</h2>
      <p>Tips, guides & insights curated by our experts</p>
    </div>

    <!-- BLOG GRID -->
    <div class="coffee-blog-grid" id="blogGrid">

      <!-- BLOG CARD -->
      <article class="coffee-blog-card">
        <div class="coffee-blog-img">
          <img src="{{ asset('assets/image/blog1.jpg') }}" alt="">
        </div>
        <div class="coffee-blog-content">
          <span class="coffee-blog-tag">Brewing</span>
      <h3>The Perfect Pour Over Coffee at Home</h3>
      <p>Learn step-by-step techniques to brew a smooth and flavorful pour over coffee like a barista.</p>
          <a href="{{ route('blog-details') }}" class="coffee-blog-btn">Read More</a>
        </div>
      </article>

      <article class="coffee-blog-card">
        <div class="coffee-blog-img">
          <img src="{{ asset('assets/image/blog2.jpg') }}" alt="">
        </div>
        <div class="coffee-blog-content">
          <span class="coffee-blog-tag">Guide</span>
         <h3>Arabica vs Robusta – What’s the Difference?</h3>
        <p>Understand flavor profiles, caffeine levels, and which bean suits your taste best.</p>
          <a href="{{ route('blog-details') }}" class="coffee-blog-btn">Read More</a>
        </div>
      </article>

      <article class="coffee-blog-card">
        <div class="coffee-blog-img">
          <img src="{{ asset('assets/image/blog3.jpg') }}" alt="">
        </div>
        <div class="coffee-blog-content">
          <h3>Beginner’s Guide to Latte Art</h3>
      <p>Master basic latte art techniques and create stunning coffee designs at home.</p>
          <a href="{{ route('blog-details') }}" class="coffee-blog-btn">Read More</a>
        </div>
      </article>

      <!-- HIDDEN BLOGS -->
      <article class="coffee-blog-card hidden-blog">
        <div class="coffee-blog-img">
          <img src="{{ asset('assets/image/blog2.jpg') }}" alt="">
        </div>
        <div class="coffee-blog-content">
          <span class="coffee-blog-tag">Recipe</span>
      <h3>How to Make Smooth Cold Brew Coffee</h3>
      <p>A simple overnight method to prepare refreshing and less acidic cold brew.</p>
          <a href="{{ route('blog-details') }}" class="coffee-blog-btn">Read More</a>
        </div>
      </article>

      <article class="coffee-blog-card hidden-blog">
        <div class="coffee-blog-img">
          <img src="{{ asset('assets/image/blog2.jpg') }}" alt="">
        </div>
        <div class="coffee-blog-content">
          <span class="coffee-blog-tag">Care</span>
      <h3>How to Store Coffee Beans Properly</h3>
      <p>Keep your coffee fresh longer with proper storage techniques and containers.</p>
          <a href="{{ route('blog-details') }}" class="coffee-blog-btn">Read More</a>
        </div>
      </article>

    </div>

    <!-- LOAD MORE -->
    <div class="coffee-blog-load">
      <button id="loadMoreBlogs">Load More</button>
    </div>

  </div>
</section>

@endsection
@push('scripts')
 
 <script>
  const loadBtn = document.getElementById("loadMoreBlogs");
  const hiddenBlogs = document.querySelectorAll(".hidden-blog");

  let current = 0;
  const step = 2;

  loadBtn.addEventListener("click", () => {
    for (let i = current; i < current + step; i++) {
      if (hiddenBlogs[i]) {
        hiddenBlogs[i].style.display = "block";
      }
    }
    current += step;

    if (current >= hiddenBlogs.length) {
      loadBtn.style.display = "none";
    }
  });
</script>
@endpush