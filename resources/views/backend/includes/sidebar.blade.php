<aside class="w-64 bg-gray-900 text-white flex flex-col">

    <div class="h-16 flex items-center px-6 border-b border-gray-800">
        <h1 class="text-xl font-bold">Admin</h1>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">

        <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('admin.users.index') }}"
            class="block px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.users.*') ? 'bg-gray-800' : '' }}">
            Users
        </a>

        <a href="{{ route('admin.roles.index') }}"
            class="block px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.roles.*') ? 'bg-gray-800' : '' }}">
            Roles
        </a>

        <a href="{{ route('admin.privileges.index') }}"
            class="block px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.privileges.*') ? 'bg-gray-800' : '' }}">
            Privileges
        </a>

    </nav>

    <div class="p-4 border-t border-gray-800">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <button type="submit" class="w-full text-left px-4 py-3 rounded-lg bg-red-600 hover:bg-red-700">
                Logout
            </button>
        </form>
    </div>

</aside>
