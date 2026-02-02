<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-medium text-gray-700">Total Properties</h3>
        <p class="text-4xl font-bold mt-2">248</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-medium text-gray-700">Pending Approval</h3>
        <p class="text-4xl font-bold mt-2 text-yellow-600">17</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-medium text-gray-700">Published</h3>
        <p class="text-4xl font-bold mt-2 text-green-600">231</p>
    </div>
</div>

<?= $this->endSection() ?>