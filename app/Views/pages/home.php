<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Search / Filter Block -->
    <?= $this->include('partials/search-form-advanced') ?>

    <!-- About Section -->
    <?= $this->include('partials/about-section') ?>

    <!-- Other sections can go here later (featured properties, testimonials, etc.) -->

<?= $this->endSection() ?>