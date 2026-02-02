<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'HouseBox - Real Estate') ?></title>
  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo/fav-logo1.png') ?>" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/mobile.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/owlcarousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/sidebar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/slick-slider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/swiper-slider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
  <!--=====  JS SCRIPT LINK =======-->
  <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
</head>

<body class="homepage1-body">

  <!--===== PRELOADER STARTS =======-->
  <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="assets/img/logo/preloader.png" alt="housebox"></div>
    </div>
  </div>
  <!--===== PRELOADER ENDS =======-->

  <!--===== PROGRESS STARTS=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
  </div>
  <!--===== PROGRESS ENDS=======-->

  <!--===== SEARCHBAR STARTS=======-->
  <div class="header-search-form-wrapper">
    <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
    <div class="header-search-container">
      <form role="search" class="search-form">
        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
        <button type="submit" class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M13.7955 13.8111L19 19M16 8.5C16 12.6421 12.6421 16 8.5 16C4.35786 16 1 12.6421 1 8.5C1 4.35786 4.35786 1 8.5 1C12.6421 1 16 4.35786 16 8.5Z" stroke="#030E0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg></button>
      </form>
    </div>
  </div>
  <div class="body-overlay"></div>
  <!--===== SEARCHBAR STARTS=======-->

  <!--=====HEADER START=======-->
  <header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-top-area">
              <ul class="header-content">
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                    </svg> housebox@gmail.com</a> <span> | </span></li>
                <li><a href="tel:(234)345-4574"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                    </svg> (234) 345-4574</a><span> | </span></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z"></path>
                    </svg> (234) 345-4574</a></li>
              </ul>
              <ul class="list-content">
                <li><img src="assets/img/elements/elements11.png" alt="housebox"><select name="country" id="country" class="country-area nice-select">
                    <option value="1" data-display="ENG"> ENG</option>
                    <option value="">Belgium</option>
                    <option value="">Brazil</option>
                    <option value="">Argentina</option>
                    <option value="">Bangladesh</option>
                    <option value="">Germany</option>
                  </select></li>
                <li><a href="#" class="signin"><span> | </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                      <path d="M7 1C4.96456 1 3.30859 2.65596 3.30859 4.69141C3.30859 6.72685 4.96456 8.38281 7 8.38281C9.03544 8.38281 10.6914 6.72685 10.6914 4.69141C10.6914 2.65596 9.03544 1 7 1Z" fill="white" />
                      <path d="M11.5928 10.7944C10.5822 9.76824 9.24243 9.20312 7.82031 9.20312H6.17969C4.75759 9.20312 3.4178 9.76824 2.40718 10.7944C1.4015 11.8155 0.847656 13.1634 0.847656 14.5898C0.847656 14.8164 1.0313 15 1.25781 15H12.7422C12.9687 15 13.1523 14.8164 13.1523 14.5898C13.1523 13.1634 12.5985 11.8155 11.5928 10.7944Z" fill="white" />
                    </svg>
                    Sign In
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-elements">
              <div class="site-logo">
                <a href="index.html"><img src="assets/img/logo/logo1.png" alt="housebox"></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="#" class="plus">Home <i class="fa-solid fa-angle-down"></i></a>
                    <div class="tp-submenu">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="all-images-menu">
                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                  <img src="assets/img/all-images/demo/demo-img1.png" alt="housebox">
                                </div>

                                <div class="homemenu-btn">
                                  <a class="theme-btn1" href="index.html">View Demo <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span></a>
                                </div>
                                <div class="homemenu-content">
                                  <a href="index.html">Housebox - Homepage 01</a>
                                </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                  <img src="assets/img/all-images/demo/demo-img2.png" alt="housebox">
                                </div>
                                <div class="homemenu-btn">
                                  <a class="theme-btn1" href="index2.html"> View Demo <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span></a>
                                </div>
                                <div class="homemenu-content">
                                  <a href="index2.html">Housebox - Homepage 02</a>
                                </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                  <img src="assets/img/all-images/demo/demo-img3.png" alt="housebox">
                                </div>
                                <div class="homemenu-btn">
                                  <a class="theme-btn1" href="index3.html">View Demo <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span></a>
                                </div>
                                <div class="homemenu-content">
                                  <a href="index3.html">Housebox - Homepage 03</a>
                                </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                  <img src="assets/img/all-images/demo/demo-img4.png" alt="housebox">
                                </div>

                                <div class="homemenu-btn">
                                  <a class="theme-btn1" href="index4.html">View Demo <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                      </svg></span></a>
                                </div>
                                <div class="homemenu-content">
                                  <a href="index4.html">Housebox - Homepage 04</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="#" class="plus">Pages <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="about-us.html">About Us</a></li>
                      <li><a href="our-service.html">Our Services</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="faq.html">FAQ's</a></li>
                      <li><a href="privacy-policy.html">Privacy Policy</a></li>
                      <li><a href="loan-caculator.html">Loan Calculator</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="plus">Listing <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="property-halfmap-grid.html">Property Half Grid</a></li>
                      <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
                      <li><a href="topmap-grid.html">Property Top Map Grid</a></li>
                      <li><a href="topmap-list.html">Property Top Map List</a></li>
                      <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
                      <li><a href="sidebar-list.html">Find Sidebar List</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="plus">Properties <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="property-details-v1.html">Property Details 01</a></li>
                      <li><a href="property-details-v2.html">Property Details 02</a></li>
                      <li><a href="property-details-v3.html">Property Details 03</a></li>
                      <li><a href="property-details-v4.html">Property Details 04</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="plus">Dashboard <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="dashboard.html">Dashboard</a></li>
                      <li><a href="my-property.html">My Properties</a></li>
                      <li><a href="message.html">Message</a></li>
                      <li><a href="my-favorites.html">My Favourites</a></li>
                      <li><a href="reviews.html">Reviews</a></li>
                      <li><a href="my-profile.html">My Propfile</a></li>
                      <li><a href="add-property.html">Add Property</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="plus">Blogs <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="blog.html">Blog Default</a></li>
                      <li><a href="blog-grid.html">Blog Grid</a></li>
                      <li><a href="blog-detail.html">Blog Post Details</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
                    </svg></a>
                </div>
                <a href="property-halfmap-grid.html" class="theme-btn1">View Listing <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
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
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
  <div class="mobile-header mobile-header1 d-block d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="index.html"><img src="assets/img/logo/logo1.png" alt="housebox"></a>
          </div>
          <div class="mobile-right d-flex gap-1 align-items-center">
            <a class="circle-button user-icon" href="my-profile.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <g clip-path="url(#clip0_4104_7939)">
                  <path d="M7 0C4.96456 0 3.30859 1.65596 3.30859 3.69141C3.30859 5.72685 4.96456 7.38281 7 7.38281C9.03544 7.38281 10.6914 5.72685 10.6914 3.69141C10.6914 1.65596 9.03544 0 7 0Z" fill="#073B3A" />
                  <path d="M11.5928 9.79439C10.5822 8.76824 9.24243 8.20312 7.82031 8.20312H6.17969C4.75759 8.20312 3.4178 8.76824 2.40718 9.79439C1.4015 10.8155 0.847656 12.1634 0.847656 13.5898C0.847656 13.8164 1.0313 14 1.25781 14H12.7422C12.9687 14 13.1523 13.8164 13.1523 13.5898C13.1523 12.1634 12.5985 10.8155 11.5928 9.79439Z" fill="#073B3A" />
                </g>
                <defs>
                  <clipPath id="clip0_4104_7939">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a class="circle-button add-icon" href="add-property.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <g clip-path="url(#clip0_4104_7948)">
                  <path d="M12.75 8.25H8.5C8.36194 8.25 8.25 8.36194 8.25 8.5V12.75C8.25 13.4403 7.69031 14 7 14C6.30969 14 5.75 13.4403 5.75 12.75V8.5C5.75 8.36194 5.63806 8.25 5.5 8.25H1.25C0.559692 8.25 0 7.69031 0 7C0 6.30969 0.559692 5.75 1.25 5.75H5.5C5.63806 5.75 5.75 5.63806 5.75 5.5V1.25C5.75 0.559691 6.30969 -1.66893e-06 7 -1.66893e-06C7.69031 -1.66893e-06 8.25 0.559691 8.25 1.25V5.5C8.25 5.63806 8.36194 5.75 8.5 5.75H12.75C13.4403 5.75 14 6.30969 14 7C14 7.69031 13.4403 8.25 12.75 8.25Z" fill="#073B3A" />
                </g>
                <defs>
                  <clipPath id="clip0_4104_7948">
                    <rect width="14" height="14" fill="white" transform="matrix(1 0 0 -1 0 14)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <div class="mobile-nav-icon dots-menu">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 4H21V6H3V4ZM7 19H21V21H7V19ZM3 14H21V16H3V14ZM7 9H21V11H7V9Z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar mobile-sidebar1">
    <div class="logosicon-area">
      <div class="logos">
        <img src="assets/img/logo/logo1.png" alt="housebox">
      </div>
      <div class="menu-close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path>
        </svg>
      </div>
    </div>
    <div class="mobile-nav mobile-nav1">
      <ul class="mobile-nav-list nav-list1">
        <li><a href="#">Home </a>
          <ul class="sub-menu">
            <li><a href="index.html">Home One</a></li>
            <li><a href="index2.html">Home Two</a></li>
            <li><a href="index3.html">Home Three</a></li>
            <li><a href="index4.html">Home Four</a></li>
          </ul>
        </li>
        <li><a href="features.html">Listing</a>
          <ul class="sub-menu">
            <li><a href="property-halfmap-grid.html">Property Half Grid</a></li>
            <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
            <li><a href="topmap-grid.html">Property Top Map Grid</a></li>
            <li><a href="topmap-list.html">Property Top Map List</a></li>
            <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
            <li><a href="sidebar-list.html">Find Sidebar List</a></li>
          </ul>
        </li>
        <li><a href="features.html">Properties</a>
          <ul class="sub-menu">
            <li><a href="property-details-v1.html">Property Details 01</a></li>
            <li><a href="property-details-v2.html">Property Details 02</a></li>
            <li><a href="property-details-v3.html">Property Details 03</a></li>
            <li><a href="property-details-v4.html">Property Details 04</a></li>
          </ul>
        </li>
        <li><a href="#">Blogs</a>
          <ul class="sub-menu">
            <li><a href="blog.html">Blog Default</a></li>
            <li><a href="blog-grid.html">Blog Grid</a></li>
            <li><a href="blog-detail.html">Blog Post Details</a></li>
          </ul>
        </li>
        <li><a href="#">Pages</a>
          <ul class="sub-menu">
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="our-service.html">Our Services</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="faq.html">FAQ's</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
          </ul>
        </li>
        <li><a href="#">Dashboard</a>
          <ul class="sub-menu">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="my-property.html">My Properties</a></li>
            <li><a href="message.html">Message</a></li>
            <li><a href="my-favorites.html">My Favourites</a></li>
            <li><a href="reviews.html">Reviews</a></li>
            <li><a href="my-profile.html">My Propfile</a></li>
            <li><a href="my-property.html">Add Property</a></li>
          </ul>
        </li>
      </ul>

      <div class="allmobilesection">
        <a href="contact.html" class="theme-btn1">Contact Us <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
              <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
            </svg></span><span class="arrow2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
              <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
            </svg></span></a>
        <div class="single-footer">
          <h3>Contact Info</h3>
          <div class="footer1-contact-info">
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                </svg>
              </div>
              <div class="contact-info-text">
                <a href="tel:+3(924)4596512">+3(924)4596512</a>
              </div>
            </div>

            <div class="contact-info-single">
              <div class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path>
                </svg>
              </div>
              <div class="contact-info-text">
                <a href="mailto:info@example.com">info@example.com</a>
              </div>
            </div>

            <div class="single-footer">
              <h3>Our Location</h3>

              <div class="contact-info-single">
                <div class="contact-info-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z"></path>
                  </svg>
                </div>
                <div class="contact-info-text">
                  <a href="mailto:info@example.com">55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
                </div>
              </div>

            </div>
            <div class="single-footer">
              <h3>Social Links</h3>

              <div class="social-links-mobile-menu">
                <ul>
                  <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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

    <div class="hero1-section-area">
      <img src="assets/img/all-images/hero/hero-img2.png" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <h5>Discover Your Ideal Property Today!</h5>
              <div class="space32"></div>
              <h1>Find Your Dream Home</h1>
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

    <div class="hero1-section-area">
      <img src="assets/img/all-images/hero/hero-img3.png" alt="housebox" class="hero-img1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-header-area text-center">
              <h5>Discover Your Ideal Property Today!</h5>
              <div class="space32"></div>
              <h1>Find Your Luxury Home</h1>
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
  <!--===== MOBILE HEADER STARTS =======-->

  <div class="testimonial-arrows">
    <div class="testimonial-prev-arrow">
      <button><i class="fa-solid fa-angle-left"></i></button>
    </div>
    <div class="testimonial-next-arrow">
      <button><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== OTHERS AREA STARTS =======-->
  <div class="others-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="theme-btn1 open-search-filter-form">
            <p class="open-text">Open Search Form
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
              </svg>
            </p>
            <p class="close-text">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path>
              </svg>
              Close
            </p>
          </div>
          <div class="property-tab-section search-filter-form">
            <div class="tab-header">
              <button class="tab-btn active" data-tab="for-sale">For Sale</button>
              <button class="tab-btn" data-tab="for-rent">For Rent</button>
            </div>

            <div class="tab-content1" id="for-sale">
              <div class="filters">
                <div class="filter-group">
                  <label>Status</label>
                  <select>
                    <option>All Status</option>
                    <option>For Rent</option>
                    <option>For Sale</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label>Labels</label>
                  <select>
                    <option>All Labels</option>
                    <option>New Offer</option>
                    <option>Hot Offer</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label>Types</label>
                  <select>
                    <option>All Types</option>
                    <option>Apartment</option>
                    <option>Bar</option>
                    <option>Cafe</option>
                    <option>House</option>
                    <option>Farm</option>
                    <option>Luxury Homes</option>
                    <option>Office</option>
                    <option>Single Family</option>
                    <option>Store</option>
                    <option>Villa</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label for="customize-sale">Customize</label>
                  <button id="customize-sale" class="customize-sale show-form">
                    Advance <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z"></path>
                      </svg></span>
                  </button>
                </div>
                <div class="search-button">
                  <button id="search-sale">Search <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
                    </svg></button>
                </div>
              </div>
            </div>

            <div class="tab-content1" id="for-rent" style="display: none;">
              <div class="filters">
                <div class="filter-group">
                  <label>Status</label>
                  <select>
                    <option>All Status</option>
                    <option>For Rent</option>
                    <option>For Sale</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label>Labels</label>
                  <select>
                    <option>All Labels</option>
                    <option>New Offer</option>
                    <option>Hot Offer</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label>Types</label>
                  <select>
                    <option>All Types</option>
                    <option>Apartment</option>
                    <option>Bar</option>
                    <option>Cafe</option>
                    <option>House</option>
                    <option>Farm</option>
                    <option>Luxury Homes</option>
                    <option>Office</option>
                    <option>Single Family</option>
                    <option>Store</option>
                    <option>Villa</option>
                  </select>
                </div>
                <div class="filter-group">
                  <label for="customize-sale">Customize</label>
                  <button id="customize-sale1" class="customize-sale show-form">
                    Advance <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z"></path>
                      </svg></span>
                  </button>
                </div>
                <div class="search-button">
                  <button id="search-sale1">Search <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
                    </svg></button>
                </div>
              </div>
            </div>

            <div class="wd-search-form ">
              <div class=" group-select">
                <div class="box-select">
                  <h5>Bathrooms</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">Bathrooms</span>
                    <ul class="list">
                      <li data-value="1" class="option">1</li>
                      <li data-value="2" class="option selected">2</li>
                      <li data-value="3" class="option">3</li>
                      <li data-value="4" class="option">4</li>
                      <li data-value="5" class="option">5</li>
                      <li data-value="6" class="option">6</li>
                      <li data-value="7" class="option">7</li>
                      <li data-value="8" class="option">8</li>
                      <li data-value="9" class="option">9</li>
                      <li data-value="10" class="option">10</li>
                    </ul>
                  </div>
                </div>
                <div class="box-select">
                  <h5>Bedrooms</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">Bedrooms</span>
                    <ul class="list">
                      <li data-value="1" class="option">1</li>
                      <li data-value="2" class="option selected">2</li>
                      <li data-value="3" class="option">3</li>
                      <li data-value="4" class="option">4</li>
                      <li data-value="5" class="option">5</li>
                      <li data-value="6" class="option">6</li>
                      <li data-value="7" class="option">7</li>
                      <li data-value="8" class="option">8</li>
                      <li data-value="9" class="option">9</li>
                      <li data-value="10" class="option">10</li>
                    </ul>
                  </div>
                </div>
                <div class="box-select">
                  <h5>States</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">All States</span>
                    <ul class="list">
                      <li data-value="1" class="option">New York</li>
                      <li data-value="2" class="option selected">California</li>
                      <li data-value="3" class="option">Texas</li>
                      <li data-value="4" class="option">Sydney</li>
                    </ul>
                  </div>
                </div>
                <div class="box-select">
                  <h5>City</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">All Cities</span>
                    <ul class="list">
                      <li data-value="1" class="option">Alice</li>
                      <li data-value="2" class="option selected">Bridgaport</li>
                      <li data-value="3" class="option">Dallas</li>
                      <li data-value="4" class="option">Kingston</li>
                      <li data-value="5" class="option">Los Angeles</li>
                      <li data-value="6" class="option">New York</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=" group-select">
                <div class="box-select">
                  <h5>Garages</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">Any Garages</span>
                    <ul class="list">
                      <li data-value="1" class="option">1</li>
                      <li data-value="2" class="option selected">2</li>
                      <li data-value="3" class="option">3</li>
                      <li data-value="4" class="option">4</li>
                      <li data-value="5" class="option">5</li>
                      <li data-value="6" class="option">6</li>
                      <li data-value="7" class="option">7</li>
                      <li data-value="8" class="option">8</li>
                      <li data-value="9" class="option">9</li>
                      <li data-value="10" class="option">10</li>
                    </ul>
                  </div>
                </div>
                <div class="box-select">
                  <h5>Rooms</h5>
                  <div class="nice-select" tabindex="0">
                    <span class="current">Any Rooms</span>
                    <ul class="list">
                      <li data-value="1" class="option">1</li>
                      <li data-value="2" class="option selected">2</li>
                      <li data-value="3" class="option">3</li>
                      <li data-value="4" class="option">4</li>
                      <li data-value="5" class="option">5</li>
                      <li data-value="6" class="option">6</li>
                      <li data-value="7" class="option">7</li>
                      <li data-value="8" class="option">8</li>
                      <li data-value="9" class="option">9</li>
                      <li data-value="10" class="option">10</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="group-price">
                <div class="slider-item">
                  <div class="slider-label">Price Range: <span id="price-output">$200 - $2,500,000</span></div>
                  <div class="slider price-slider">
                    <input type="range" id="price-range-min" class="range-min" min="200" max="2500000" value="200" step="100">
                    <input type="range" id="price-range-max" class="range-max" min="200" max="2500000" value="2500000" step="100">
                    <div class="slider-fill"></div>
                  </div>
                </div>

                <div class="slider-item">
                  <div class="slider-label">Size Range: <span id="size-output">146 SqFt - 448 SqFt</span></div>
                  <div class="slider size-slider">
                    <input type="range" id="size-range-min" class="range-min" min="146" max="448" value="146" step="1">
                    <input type="range" id="size-range-max" class="range-max" min="146" max="448" value="448" step="1">
                    <div class="slider-fill"></div>
                  </div>
                </div>
              </div>
              <div class="group-checkbox">
                <div class=" title text-4 fw-6">Others Features</div>
                <div class="space16"></div>
                <div class="group-amenities ">
                  <fieldset class="checkbox-item style-1  ">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Air Conditioning</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> Laundry</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Refrigerator </span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Washer </span>
                    </label>
                  </fieldset>

                  <fieldset class="checkbox-item style-1  ">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> Barbeque</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> Lawn</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Sauna </span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Wifi </span>
                    </label>
                  </fieldset>

                  <fieldset class="checkbox-item style-1  ">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Dryer </span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Microwave</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> Swimming Pool</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Window Coverings</span>
                    </label>
                  </fieldset>

                  <fieldset class="checkbox-item style-1  ">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> Gym</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Outdoor Shower </span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4"> TV Cable</span>
                    </label>
                  </fieldset>
                  <fieldset class="checkbox-item style-1   mt-12">
                    <label>
                      <input type="checkbox">
                      <span class="btn-checkbox"></span>
                      <span class="text-4">Fireplace </span>
                    </label>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA STARTS =======-->

  <!--===== ABOUT AREA STARTS =======-->
  <div class="about1-section-area sp1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-images-area">
            <div class="img2 image-anime reveal">
              <img src="assets/img/all-images/about/about-img2.png" alt="housebox">
            </div>
            <div class="img1 image-anime reveal">
              <img src="assets/img/all-images/about/about-img1.png" alt="housebox">
            </div>
            <div class="author-img aniamtion-key-1">
              <h3>Our Happy Customer</h3>
              <div class="space18"></div>
              <img src="assets/img/all-images/others/author-img1.png" alt="housebox">
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="about-heading heading1">
            <h5 data-aos="fade-left" data-aos-duration="800">About housebox</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Embrace the Elegance Our Exclusive Property</h2>
            <div class="space18"></div>
            <p data-aos="fade-left" data-aos-duration="900">At HouseBox, we’re redefining the way people find, sell, and invest in properties. Our mission is to simplify real a estate by provide innovative solutions, expert guidance.</p>
            <div class="space32"></div>
            <div class="counter-boxes" data-aos="fade-left" data-aos-duration="1000">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                  <div class="counter-boxarea text-center">
                    <h2><span class="counter">10</span>K</h2>
                    <div class="space12"></div>
                    <p>Homes Sold</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                  <div class="counter-boxarea text-center">
                    <h2><span class="counter">9</span>K</h2>
                    <div class="space12"></div>
                    <p>Happy Client</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                  <div class="space20 d-md-none d-block"></div>
                  <div class="counter-boxarea text-center">
                    <h2><span class="counter">98</span>%</h2>
                    <div class="space12"></div>
                    <p>Satisfaction Rate</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="space32"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
              <a href="property-halfmap-grid.html" class="theme-btn1">See All Properties <span class="arrow1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
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
  <!--===== ABOUT AREA ENDS =======-->


  <!--===== CTA AREA ENDS =======-->

  <!--===== FOOTER AREA STARTS =======-->
  <div class="footer1-section-area">
    <div class="container">
     Footer
    </div>
  </div>
  <!--===== FOOTER AREA ENDS =======-->

  <!--===== JS SCRIPT LINK =======-->
  <script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/fontawesome.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/counter.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/gsap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/ScrollTrigger.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/Splitetext.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/sidebar.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/swiper-slider.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/magnific-popup.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/mobilemenu.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/owlcarousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/nice-select.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/waypoints.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/slick-slider.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/circle-progress.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>


</body>

</html>