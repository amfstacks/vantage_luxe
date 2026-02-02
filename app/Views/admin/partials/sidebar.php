<aside class="w-64 bg-gray-900 text-white flex-shrink-0">
    <div class="p-6 border-b border-gray-800">
        <h1 class="text-2xl font-bold">HouseBox Admin</h1>
    </div>
    <nav class="mt-6">
        <a href="<?= site_url('admin') ?>" class="flex items-center px-6 py-3 hover:bg-gray-800 <?= current_url() === site_url('admin') ? 'bg-gray-800' : '' ?>">
            <i class="fas fa-tachometer-alt w-6"></i>
            <span class="ml-4">Dashboard</span>
        </a>
        <a href="<?= site_url('admin/properties') ?>" class="flex items-center px-6 py-3 hover:bg-gray-800 <?= str_contains(current_url(), 'properties') ? 'bg-gray-800' : '' ?>">
            <i class="fas fa-home w-6"></i>
            <span class="ml-4">Properties</span>
        </a>
        <!-- Add more menu items later -->
    </nav>
</aside>