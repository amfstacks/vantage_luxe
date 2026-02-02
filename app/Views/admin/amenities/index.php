<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-center mb-8">
    <h1 class="text-2xl font-bold text-gray-900">Amenities</h1>
    <a href="<?= site_url('admin/amenities/create') ?>" 
       class="inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow-sm">
        <i class="fas fa-plus mr-2"></i> Add Amenity
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Icon</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Sort Order</th>
                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php foreach ($amenities as $a): ?>
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <i class="<?= esc($a['icon']) ?> text-2xl text-gray-600"></i>
                </td>
                <td class="px-6 py-4 font-medium"><?= esc($a['name']) ?></td>
                <td class="px-6 py-4 text-gray-600"><?= $a['sort_order'] ?></td>
                <td class="px-6 py-4 text-right text-sm space-x-3">
                    <a href="<?= site_url("admin/amenities/{$a['id']}/edit") ?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <form action="<?= site_url("admin/amenities/{$a['id']}/delete") ?>" method="post" class="inline">
                        <?= csrf_field() ?>
                        <!-- <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Delete this amenity?')">
                            Delete
                        </button> -->
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>