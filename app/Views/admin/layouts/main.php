<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin • HouseBox') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">

<div class="flex h-screen">

    <!-- Sidebar -->
    <?= $this->include('admin/partials/sidebar') ?>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Topbar -->
        <?= $this->include('admin/partials/topbar') ?>

        <!-- Page content -->
        <main class="flex-1 overflow-y-auto p-6">
            <?= $this->renderSection('content') ?>
        </main>

    </div>
</div>

<script src="<?= base_url('assets/js/plugins/jquery-3-7-1.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<?= $this->renderSection('scripts') ?>

</body>
</html>