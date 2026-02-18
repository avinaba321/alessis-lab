@extends('layout.app')

@section('title', 'Contact | Alessislab')
@push('styles')
     <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}" />
@endpush
@section('content')

 <!-- ================= CONTACT HERO ================= -->
  <section class="al-contact-hero">
    <!-- BACKGROUND IMAGE -->
    <div class="al-contact-bg">
      <img src="{{ asset('assets/image/contact-header.png') }}" alt="Contact Us" />
    </div>

    <!-- OVERLAY -->
    <div class="al-contact-overlay"></div>

    <!-- CONTENT -->
    <div class="al-contact-content">
      <h1>CONTACT US</h1>
      <p>We’d love to hear from you — get in touch with our team</p>
    </div>

    <!-- WAVE -->
    <div class="al-contact-wave">
      <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,60 C240,120 480,120 720,90 960,60 1200,40 1440,60 L1440,120 L0,120 Z" fill="#faf7f2"></path>
      </svg>
    </div>
  </section>


  <!-- ================= CONTACT SECTION ================= -->
  <section class="al-contact-section py-5">
    <div class="container">
      <div class="row g-4">

        <!-- LEFT : CONTACT FORM -->
        <div class="col-lg-7">
          <div class="al-contact-card">
            <h3 class="mb-2">Send us a Message</h3>
            <p class="al-subtext mb-4">
              Fill out the form below and we'll respond as soon as possible.
            </p>

            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Full Name *</label>
                  <input type="text" class="form-control" placeholder="John Doe">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Email Address *</label>
                  <input type="email" class="form-control" placeholder="john@example.com">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Phone Number</label>
                  <input type="text" class="form-control" placeholder="+1 (555) 000-0000">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Subject *</label>
                  <input type="text" class="form-control" placeholder="How can we help?">
                </div>

                <div class="col-12">
                  <label class="form-label">Message *</label>
                  <textarea class="form-control" rows="5" placeholder="Tell us more about your inquiry..."></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn al-btn-primary">
                    <i class="bi bi-send"></i> Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- RIGHT : CONTACT INFO -->
        <div class="col-lg-5">
          <h3 class="mb-2">Get in Touch</h3>
          <p class="al-subtext mb-4">
            Have questions? We're here to help and answer any question you might have.
          </p>

          <!-- INFO CARD -->
          <div class="al-info-card">
            <div class="al-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div>
              <h6>Our Location</h6>
              <p>30765 Pacific Coast Highway,<br>Suite 453 Malibu, CA 90265</p>
            </div>
          </div>

          <div class="al-info-card">
            <div class="al-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div>
              <h6>Email Us</h6>
              <p>alessi.A1@icloud.com</p>
            </div>
          </div>

          <div class="al-info-card">
            <div class="al-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div>
              <h6>Call Us</h6>
              <p>(310) 463-0739</p>
            </div>
          </div>

          <div class="al-info-card">
            <div class="al-icon">
              <i class="bi bi-clock"></i>
            </div>
            <div>
              <h6>Working Hours</h6>
              <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
            </div>
          </div>

          <!-- SOCIAL -->
          <div class="mt-4">
            <h6 class="mb-3">Follow Us</h6>
            <div class="al-socials">
              <a href="#">F</a>
              <a href="#">T</a>
              <a href="#">I</a>
              <a href="#">L</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

 

@endsection
@push('scripts')
 
@endpush