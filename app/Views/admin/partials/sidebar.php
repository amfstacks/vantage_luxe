<aside class="w-64 bg-gray-900 text-white flex-shrink-0 overflow-y-auto">
    <div class="p-6 border-b border-gray-800">
        <h1 class="text-2xl font-bold tracking-tight">HouseBox Admin</h1>
    </div>
    <nav class="mt-6 px-3 space-y-1">
        <a href="<?= site_url('admin') ?>" 
           class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 transition-colors <?= current_url() === site_url('admin') ? 'bg-gray-800' : '' ?>">
            <i class="fas fa-tachometer-alt w-6"></i>
            <span class="ml-4 font-medium">Dashboard</span>
        </a>
        <a href="<?= site_url('admin/properties') ?>" 
           class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 transition-colors <?= str_contains(current_url(), 'properties') ? 'bg-gray-800' : '' ?>">
            <i class="fas fa-home w-6"></i>
            <span class="ml-4 font-medium">Properties</span>
        </a>
         <a href="<?= site_url('admin/amenities') ?>" 
           class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-800 transition-colors <?= str_contains(current_url(), 'properties') ? 'bg-gray-800' : '' ?>">
            <i class="fas fa-home w-6"></i>
            <span class="ml-4 font-medium">Amenities</span>
        </a>
        <!-- Add more links later -->
    </nav>
</aside>