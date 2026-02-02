<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Properties</h1>
    <a href="<?= site_url('admin/properties/create') ?>" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700">
        + Add Property
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($properties as $p): ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><?= esc($p['title']) ?></td>
                <td class="px-6 py-4"><?= ucfirst($p['type']) ?> / <?= strtoupper($p['listing_type']) ?></td>
                <td class="px-6 py-4">₦<?= number_format($p['price']) ?></td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs rounded-full <?= $p['status'] === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' ?>">
                        <?= ucfirst($p['status']) ?>
                    </span>
                </td>
                <td class="px-6 py-4 text-right text-sm">
                    <a href="<?= site_url("admin/properties/{$p['id']}/edit") ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                    <form action="<?= site_url("admin/properties/{$p['id']}/delete") ?>" method="post" class="inline">
                        <?= csrf_field() ?>
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Delete this property?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>