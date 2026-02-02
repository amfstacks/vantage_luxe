<header class="bg-white shadow">
    <div class="flex justify-between items-center px-6 py-4">
        <h2 class="text-xl font-semibold"><?= esc($title ?? 'Dashboard') ?></h2>

        <div class="flex items-center space-x-4">
            <span class="text-gray-600"><?= session()->get('user_name') ?? 'Admin' ?></span>
            <a href="<?= site_url('logout') ?>" class="text-red-600 hover:text-red-800">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</header>