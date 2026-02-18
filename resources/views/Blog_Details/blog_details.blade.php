@extends('layout.app')

@section('title', 'Blog Details | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/blog-details.css') }}" />
@endpush
@section('content')

 
 <!-- HERO -->
    <section class="blog-hero text-center">
        <div class="container">
            <span class="category">Tips</span>
            <h1 class="mt-3">How to Maintain Your Sofa for Long Life</h1>
            <p class="mt-2">By Alessilabs • January 29, 2026 • 7 min read</p>
        </div>
    </section>

    <!-- BLOG -->
    <section class="container">
        <div class="blog-wrapper row g-5">

            <!-- CONTENT -->
            <div class="col-lg-8 blog-content">

                <img src="{{ asset('assets/image/blog/blog1.png') }}" class="img-fluid rounded-4 mb-4" alt="Sofa Maintenance">

                <p>
                    A sofa is more than just a piece of furniture — it is the heart of your living space.
                    Whether you relax after a long day, entertain guests, or enjoy coffee moments,
                    your sofa experiences daily wear and tear. Proper sofa maintenance is essential
                    to preserve comfort, appearance, and longevity.
                </p>

                <p>
                    Many homeowners replace sofas prematurely, not because they are damaged beyond repair,
                    but due to poor maintenance habits. With the right care techniques, you can significantly
                    extend the life of your sofa while maintaining its fresh and premium look.
                </p>

                <h2>1. Regular Cleaning is Non-Negotiable</h2>
                <p>
                    Dust, crumbs, and dirt particles slowly settle deep into sofa fabrics. Over time,
                    this buildup weakens fibers and dulls the appearance. Vacuuming your sofa at least
                    once a week helps prevent long-term damage and keeps allergens under control.
                </p>

                <p>
                    For fabric sofas, use a soft upholstery attachment. Leather sofas should be wiped
                    with a dry microfiber cloth to remove surface dust without scratching.
                </p>

                <h2>2. Act Quickly on Spills and Stains</h2>
                <p>
                    Spills are inevitable, but permanent stains are not. The key is quick action.
                    Always blot spills gently instead of rubbing, as rubbing pushes liquid deeper
                    into the fabric.
                </p>

                <div class="highlight">
                    Quick tip: Test any cleaning solution on a hidden area first to avoid discoloration.
                </div>

                <h2>3. Protect Your Sofa from Sunlight</h2>
                <p>
                    Prolonged exposure to direct sunlight can fade upholstery colors and weaken fibers.
                    Position your sofa away from windows or use curtains and blinds to reduce UV exposure.
                    Rotating cushions regularly also helps distribute fading evenly.
                </p>

                <h2>4. Rotate and Fluff Cushions</h2>
                <p>
                    Cushion rotation prevents sagging and uneven wear. Fluffing cushions weekly helps
                    maintain their shape and comfort, especially for feather-filled or foam cushions.
                </p>

                <h2>5. Schedule Professional Cleaning</h2>
                <p>
                    Even with regular home care, professional sofa cleaning is recommended once or twice
                    a year. Professional services remove deep-seated dirt, eliminate odors, and restore
                    fabric freshness without damaging materials.
                </p>

                <p>
                    Investing in professional cleaning is far more cost-effective than replacing an
                    expensive sofa prematurely.
                </p>

                <!-- TAGS -->
                <div class="mt-4">
                    <span class="tag">Lifestyle</span>
                    <span class="tag">Home Care</span>
                    <span class="tag">Maintenance</span>
                </div>

                <!-- AUTHOR -->
                <div class="author-box">
                    <img src="{{ asset('assets/image/ceo-img.png') }}" alt="Author">
                    <div>
                        <strong>Alessilabs Experts</strong>
                        <p class="mb-0">Crafting insights where science meets everyday comfort.</p>
                    </div>
                </div>

            </div>

            <!-- LATEST BLOGS -->
            <div class="col-lg-4">
                <h4 class="mb-4">Latest Blogs</h4>

                <div class="latest-card mb-4">
                    <img src="{{ asset('assets/image/blog/blog2.png') }}" alt="">
                    <div class="content">
                        <h6>Fabric vs Leather Sofa – What to Choose?</h6>
                        <a href="./blog-details.html">Read More →</a>
                    </div>
                </div>

                <div class="latest-card mb-4">
                    <img src="{{ asset('assets/image/blog/blog3.png') }}" alt="">
                    <div class="content">
                        <h6>Repair or Replace? Make the Right Decision</h6>
                        <a href="./blog-details.html">Read More →</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
 

@endsection
@push('scripts')
 
@endpush