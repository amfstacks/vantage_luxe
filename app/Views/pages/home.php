<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
 <?= $this->include('partials/preloader') ?>
    <?= $this->include('partials/progress-scroll') ?>
    <?= $this->include('partials/search-overlay') ?>
  <?= $this->include('partials/header-desktop') ?>
    <?= $this->include('partials/header-mobile') ?>

    <!-- Search / Filter Block -->
    <!-- <?= $this->include('partials/search-form-advanced') ?> -->

    <!-- About Section -->
    <!-- <?= $this->include('partials/about-section') ?> -->

     <div class="hero-area-slider">
    <div class="hero1-section-area">
      <img src="assets/img/all-images/hero/hero-img1.png" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <h5>Discover Your Ideal Property Today!</h5>
              <div class="space32"></div>
              <h1>Find Your Perfect Home</h1>
              <div class="space40"></div>
              <div class="btn-area1">
                <a href="property-details-v1.html" class="theme-btn1">Find Your Dream Home Now <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
                <a href="property-halfmap-grid.html" class="theme-btn2">View Listings<span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                    </svg></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="testimonial-arrows">
    <div class="testimonial-prev-arrow">
      <button><i class="fa-solid fa-angle-left"></i></button>
    </div>
    <div class="testimonial-next-arrow">
      <button><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>

<?= $this->endSection() ?>