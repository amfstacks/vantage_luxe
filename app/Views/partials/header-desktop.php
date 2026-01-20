<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-area">
                        <!-- top bar with email, phone, language, sign in -->
                        <ul class="header-content">
                            <li><a href="#"> ... housebox@gmail.com</a> <span> | </span></li>
                            <li><a href="tel:(234)345-4574"> ... (234) 345-4574</a><span> | </span></li>
                            <li><a href="#"> ... (234) 345-4574</a></li>
                        </ul>
                        <ul class="list-content">
                            <li>
                                <img src="<?= base_url('assets/img/elements/elements11.png') ?>" alt="housebox">
                                <select name="country" id="country" class="country-area nice-select">
                                    <option value="1" data-display="ENG"> ENG</option>
                                    <!-- other options -->
                                </select>
                            </li>
                            <li><a href="#" class="signin"><span> | </span> Sign In <!-- svg --></a></li>
                        </ul>
                    </div>

                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo/logo1.png') ?>" alt="housebox"></a>
                        </div>

                        <div class="main-menu">
                            <ul>
                                <li><a href="#" class="plus">Home <i class="fa-solid fa-angle-down"></i></a>
                                    <!-- mega menu with demos -->
                                </li>
                                <li><a href="#" class="plus">Pages <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="dropdown-padding">
                                        <!-- pages links -->
                                    </ul>
                                </li>
                                <!-- Listing, Properties, Dashboard, Blogs ... -->
                            </ul>
                        </div>

                        <div class="btn-area">
                            <div class="search-icon header__search header-search-btn">
                                <a href="#"><svg ... ></svg></a>
                            </div>
                            <a href="<?= site_url('properties') ?>" class="theme-btn1">View Listing <!-- arrows --></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->