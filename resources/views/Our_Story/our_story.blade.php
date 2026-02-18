@extends('layout.app')

@section('title', 'Our Stroy | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/our-story.css') }}" />
@endpush
@section('content')

 <!-- ================= OUR STORY HERO ================= -->
    <section class="al-story-hero">
        <div class="al-story-bg">
            <img src="{{ asset('assets/image/ourstorybg.png') }}" alt="Our Story" />
        </div>

        <div class="al-story-overlay"></div>

        <!-- HERO CONTENT -->
        <div class="al-story-hero-content">
            <h1>OUR STORY</h1>
        </div>

        <div class="al-story-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,60 C240,120 480,120 720,90 960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#eef6f3"></path>
            </svg>
        </div>
    </section>


    <!-- ================= OUR STORY ================= -->
    <section class="al-story">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- LEFT -->
                <div class="col-lg-6">
                    <div class="al-story-visual">
                        <span class="al-bg-circle"></span>

                        <div class="al-main-image">
                            <img src="{{ asset('assets/image/personimg.jfif') }}" alt="Our Story">
                        </div>


                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6">
                    <div class="al-story-text">
                        <h2>It All Started With <br> A Cup of Coffee</h2>

                        <p>
                           Alessis Coffee was born from a quiet vision — to craft coffee
                            that awakens creativity, sharpens focus, and sparks meaningful moments.
                        </p>

                        <p>
                             From ethically sourced beans to meticulously refined blends, every cup
                            embodies our belief that coffee is not just enjoyed — it is experienced.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= END OUR STORY ================= -->

    <!-- ================= MEET FOUNDERS ================= -->
    <section class="al-meet-section">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="al-meet-content">
                        <h2>Meet Our Founder</h2>

                        <div class="al-founder">
                            <h5>Antonio Alessi</h5>
                            <p>
                                Antonio Alessi is a seasoned entrepreneur with deep roots in hospitality and business
                                leadership. Educated in engineering, architecture, and business administration, he has
                                over 25 years of experience managing and developing successful restaurant and retail
                                ventures in iconic locations such as Malibu Country Mart and Fred Segal. His hands-on
                                expertise in general management, finance, and design has shaped acclaimed culinary and
                                service spaces that blend quality with experience.
                            </p>
                        </div>

                        <!-- SOCIAL ICONS -->
                        <div class="al-meet-socials">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="al-meet-image">
                        <img src="{{ asset('assets/image/personimg2.jfif') }}" alt="Founders of Alessis Coffee">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= END MEET FOUNDERS ================= -->

    <!-- ================= HEALTHY START SECTION ================= -->
    <section class="al-healthy-section">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="al-healthy-content">
                        <h2>
                            Getting Healthy <br />
                            Starts Today
                        </h2>

                        <p>
                            Alessis Coffee was crafted for those who want more from their daily
                            cup. Clean ingredients, bold flavors, and carefully sourced beans
                            come together to fuel your energy, focus, and creativity.
                        </p>

                        <p>
                            From your first sip in the morning to your final moment of calm,
                            our blends are designed to support your lifestyle — naturally,
                            deliciously, and intentionally.
                        </p>

                        <a href="{{ route('shop') }}" class="al-healthy-btn">
                            Shop Our Coffee
                        </a>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="al-healthy-image">
                        <img src="{{ asset('assets/image/Healthy.png') }}" alt="Healthy Coffee Lifestyle" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= END HEALTHY START SECTION ================= -->

    <!-- ================= WHY ALESSILABS ================= -->
    <section class="al-why-section">
        <!-- TOP WAVE -->
        <div class="al-wave-top">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path d="M0,60 C240,20 480,20 720,40 960,60 1200,80 1440,60 L1440,0 L0,0 Z" fill="#0b3d33"></path>
            </svg>
        </div>

        <div class="container">
            <h2 class="al-why-title">Why Alessilabs Is Different</h2>

            <div class="row align-items-center g-5">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="al-values-grid">

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-shield-check"></i></span>
                            <div>
                                <h4>Integrity</h4>
                                <p>Honest sourcing, transparent processes, and clean labeling.</p>
                            </div>
                        </div>

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-compass"></i></span>
                            <div>
                                <h4>Authenticity</h4>
                                <p>Staying true to our mission, vision, and coffee science.</p>
                            </div>
                        </div>

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-people"></i></span>
                            <div>
                                <h4>Pro Team</h4>
                                <p>Driven by passionate experts focused on excellence.</p>
                            </div>
                        </div>

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-heart-pulse"></i></span>
                            <div>
                                <h4>Health First</h4>
                                <p>Supporting human wellness and a healthier planet.</p>
                            </div>
                        </div>

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-emoji-smile"></i></span>
                            <div>
                                <h4>Gratitude</h4>
                                <p>Appreciation for every step of the journey.</p>
                            </div>
                        </div>

                        <div class="al-value-item">
                            <span class="al-icon"><i class="bi bi-graph-up-arrow"></i></span>
                            <div>
                                <h4>High Performance</h4>
                                <p>Continuous improvement through innovation & testing.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="al-why-image">
                        <img src="{{ asset('assets/image/anti.png') }}" alt="Alessilabs Coffee Process">
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTTOM WAVE -->
        <div class="al-wave-bottom">
            <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path d="M0,40 C240,80 480,80 720,60 960,40 1200,20 1440,40 L1440,100 L0,100 Z" fill="#f3fbf8"></path>
            </svg>
        </div>
    </section>
    <!-- ================= END WHY ALESSILABS ================= -->


@endsection
@push('scripts')
  
@endpush