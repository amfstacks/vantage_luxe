<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">

        <h2 class="text-2xl font-bold text-gray-900 mb-8">Create New Amenity</h2>

        <form action="<?= site_url('admin/amenities/store') ?>" method="post" class="space-y-6">
            <?= csrf_field() ?>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Amenity Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" required 
                       class="w-full px-5 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Font Awesome Icon Class <span class="text-red-500">*</span></label>
                <input type="text" name="icon" required value="fas fa-check" 
                       class="w-full px-5 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 font-mono">
                <p class="mt-1.5 text-sm text-gray-500">Examples: fas fa-wifi, fas fa-swimming-pool, fas fa-shield-alt</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                <input type="number" name="sort_order" value="999" 
                       class="w-full px-5 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="pt-6">
                <button type="submit" 
                        class="w-full md:w-auto px-10 py-4 bg-indigo-600 text-white font-semibold rounded-xl hover:bg-indigo-700 transition shadow-md hover:shadow-lg">
                    Create Amenity
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>