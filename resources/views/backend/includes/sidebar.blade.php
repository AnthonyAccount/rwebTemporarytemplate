<aside class="w-72 min-h-screen bg-[#0d1117] border-r border-[#30363d] text-[#c9d1d9] flex flex-col">

    <!-- Logo -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-[#30363d]">

        <div class="flex items-center gap-3">

            <div class="w-9 h-9 rounded-xl bg-white text-[#0d1117] flex items-center justify-center font-bold">
                A
            </div>

            <div>
                <h1 class="text-sm font-semibold text-white">
                    Admin Panel
                </h1>

                <p class="text-xs text-[#8b949e]">
                    Management System
                </p>
            </div>

        </div>

    </div>

    <!-- Navigation -->
    <div class="flex-1 overflow-y-auto px-4 py-5">

        <div class="mb-6">

            <p class="px-3 mb-2 text-xs uppercase tracking-wider text-[#8b949e] font-semibold">
                Overview
            </p>

            <div class="space-y-1">

                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-[#21262d] text-white border border-[#30363d]'
                        : 'hover:bg-[#161b22] text-[#c9d1d9]' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-80" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m0-8H5m7 0h7" />
                    </svg>

                    <span class="text-sm font-medium">
                        Dashboard
                    </span>

                </a>

            </div>

        </div>

        <div>

            <p class="px-3 mb-2 text-xs uppercase tracking-wider text-[#8b949e] font-semibold">
                Management
            </p>

            <div class="space-y-1">

                @if (auth()->user()->hasPrivilege('Users'))
                    <a href="{{ route('admin.users.index') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200
                        {{ request()->routeIs('admin.users.*')
                            ? 'bg-[#21262d] text-white border border-[#30363d]'
                            : 'hover:bg-[#161b22] text-[#c9d1d9]' }}">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-80" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M17 20h5V4H2v16h5m10 0v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4m10 0H7m5-8a3 3 0 100-6 3 3 0 000 6z" />

                        </svg>

                        <span class="text-sm font-medium">
                            Users
                        </span>

                    </a>
                @endif

                @if (auth()->user()->hasPrivilege('Roles'))
                    <a href="{{ route('admin.roles.index') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200
                        {{ request()->routeIs('admin.roles.*')
                            ? 'bg-[#21262d] text-white border border-[#30363d]'
                            : 'hover:bg-[#161b22] text-[#c9d1d9]' }}">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-80" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9.75 17L6 20.75V4h12v13H9.75z" />

                        </svg>

                        <span class="text-sm font-medium">
                            Roles
                        </span>

                    </a>
                @endif

                @if (auth()->user()->hasPrivilege('Privileges'))
                    <a href="{{ route('admin.privileges.index') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200
                        {{ request()->routeIs('admin.privileges.*')
                            ? 'bg-[#21262d] text-white border border-[#30363d]'
                            : 'hover:bg-[#161b22] text-[#c9d1d9]' }}">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-80" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0-5v2m0 14v2m9-9h-2M5 12H3m15.364 6.364l-1.414-1.414M7.05 7.05 5.636 5.636m12.728 0L16.95 7.05M7.05 16.95l-1.414 1.414" />

                        </svg>

                        <span class="text-sm font-medium">
                            Privileges
                        </span>

                    </a>
                @endif
                @if (auth()->user()->hasPrivilege('Settings'))
                    <a href="{{ route('admin.settings.edit') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200
        {{ request()->routeIs('admin.settings.*')
            ? 'bg-[#21262d] text-white border border-[#30363d]'
            : 'hover:bg-[#161b22] text-[#c9d1d9]' }}">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-80" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.89 3.31.877 2.42 2.42a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.89 1.543-.877 3.31-2.42 2.42a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.89-3.31-.877-2.42-2.42a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.89-1.543.877-3.31 2.42-2.42.996.575 2.25.046 2.573-1.066z" />

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />

                        </svg>

                        <span class="text-sm font-medium">
                            Settings
                        </span>

                    </a>
                @endif

            </div>

        </div>

    </div>

    <!-- Footer -->
    <div class="border-t border-[#30363d] p-4">

        <div class="flex items-center gap-3 mb-4">

            <div
                class="w-10 h-10 rounded-full bg-[#21262d] border border-[#30363d] flex items-center justify-center text-sm font-semibold text-white">

                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}

            </div>

            <div class="overflow-hidden">

                <p class="text-sm font-medium text-white truncate">
                    {{ auth()->user()->name ?? 'User' }}
                </p>

                <p class="text-xs text-[#8b949e] truncate">
                    {{ auth()->user()->email ?? '' }}
                </p>

            </div>

        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <button type="submit"
                class="w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-[#21262d] hover:bg-[#30363d] border border-[#30363d] text-sm font-medium transition-all duration-200">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V7" />

                </svg>

                Logout

            </button>
        </form>

    </div>

</aside>
