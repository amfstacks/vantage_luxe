<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'vantage Luxe') ?></title>

    <!-- Fav icon -->
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
 <script src="<?= base_url('assets/js/plugins/jquery-3-7-1.min.js') ?>"></script>
    <?= $this->renderSection('extraHead') ?>
</head>

<body class="homepage1-body <?= $bodyClass ?? 'homepage1-body' ?>">

   -
    <!-- Header -->
   

    <!-- Page content -->
    <!-- <main> -->
        <?= $this->renderSection('content') ?>
    <!-- </main> -->

    <!-- Footer -->
    <?= $this->include('partials/footer') ?>

    <!-- Scripts (bottom for performance) -->

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

    <?= $this->renderSection('extraScripts') ?>
</body>
</html>