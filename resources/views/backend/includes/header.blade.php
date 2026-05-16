<header class="h-16 bg-white shadow flex items-center justify-between px-6">
    <h2 class="text-lg font-semibold text-gray-700">
        @yield('page-title', 'Dashboard')
    </h2>

    <div class="text-sm text-gray-600">
        {{ auth()->user()->name ?? 'User' }}
    </div>
</header>
