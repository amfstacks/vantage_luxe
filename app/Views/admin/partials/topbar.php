<header class="bg-white border-b border-gray-200 shadow-sm">
    <div class="flex justify-between items-center px-6 md:px-8 py-4">
        <h2 class="text-xl md:text-2xl font-semibold text-gray-800">
            <?= esc($title ?? 'Dashboard') ?>
        </h2>

        <div class="flex items-center space-x-6">
            <span class="text-gray-700 font-medium hidden md:inline">
                <?= session()->get('user_name') ?? 'Administrator' ?>
            </span>
            <a href="<?= site_url('logout') ?>" 
               class="text-red-600 hover:text-red-800 font-medium flex items-center">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </div>
    </div>
</header>