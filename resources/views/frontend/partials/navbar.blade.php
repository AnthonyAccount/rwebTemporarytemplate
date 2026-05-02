<nav class="bg-white border-b-2 border-purple-500">
    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <div class="flex items-center">
                <img src="{{ asset('frontend/Logo.png') }}" alt="Logo" class="h-12">
            </div>

            {{-- Center Menu --}}
            <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
                <a href="#" class="text-blue-600 font-semibold">Home</a>
                <a href="#" class="hover:text-blue-600">About Us</a>
                <a href="#" class="hover:text-blue-600 flex items-center gap-1">
                    Our Properties
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-600">What's New</a>
            </div>

            {{-- Social Section --}}
            <div class="hidden md:block">
                <div class="px-4 py-2">
                    <p class="text-xs text-gray-500 mb-1">Follow Us On:</p>

                    <div class="flex items-center gap-2">

                        {{-- Facebook --}}
                        <a href="#"
                            class="w-8 h-8 flex items-center bg-[#e3e5ef] justify-center  border rounded-full text-blue-600 hover:bg-gray-100">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        {{-- Instagram --}}
                        <a href="#"
                            class="w-8 h-8 flex items-center bg-[#e3e5ef] justify-center border rounded-full text-pink-500 hover:bg-gray-100">
                            <i class="fab fa-instagram"></i>
                        </a>

                        {{-- TikTok --}}
                        <a href="#"
                            class="w-8 h-8 flex items-center bg-[#e3e5ef] justify-center border rounded-full text-black hover:bg-gray-100">
                            <i class="fab fa-tiktok"></i>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
