<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin • vantage') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CDN (for development – in production use build process) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Summernote (rich text editor) -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Optional: Custom admin tweaks -->
    <style>
        body, html {
            font-family: 'Montserrat', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        /* Optional: make headings bolder */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
        }
        .sidebar-active { @apply bg-indigo-800 text-white; }
        .preview-thumb { @apply h-24 w-24 object-cover rounded border border-gray-300 shadow-sm; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <?= $this->include('admin/partials/sidebar') ?>

    <!-- Main content wrapper -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Topbar -->
        <?= $this->include('admin/partials/topbar') ?>

        <!-- Page content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6 md:p-8">
            <div class="mx-auto max-w-7xl">
                <?= $this->renderSection('content') ?>
            </div>
        </main>

    </div>
</div>

<!-- Scripts -->
<script src="<?= base_url('assets/js/plugins/jquery-3-7-1.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<!-- Your custom admin JS (create this file later if needed) -->
<script src="<?= base_url('assets/js/admin.js') ?>"></script>

<?= $this->renderSection('extraScripts') ?>

</body>
</html>