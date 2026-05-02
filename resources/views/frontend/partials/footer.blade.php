<footer class="bg-gray-100 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">

            {{-- Logo + Social --}}
            <div>
                <img src="{{ asset('frontend/Logo.png') }}" class="h-12 mb-4" alt="Logo">

                <p class="text-sm text-gray-500 mb-4">
                    Holiday Group of Companies
                </p>

                <div class="flex gap-3">
                    <a href="#" class="text-gray-500 hover:text-blue-600">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-pink-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-black">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">Quick Links</h3>
                <div class="w-10 h-1 bg-purple-500 mb-4"></div>

                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">Home</a></li>
                    <li><a href="#" class="hover:text-blue-600">About Us</a></li>
                    <li><a href="#" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </div>

            {{-- Our Properties --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">Our Properties</h3>
                <div class="w-10 h-1 bg-purple-500 mb-4"></div>

                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">Luxury Villas</a></li>
                    <li><a href="#" class="hover:text-blue-600">Apartments</a></li>
                    <li><a href="#" class="hover:text-blue-600">Commercial</a></li>
                </ul>
            </div>

            {{-- Newsletter --}}
            <div>
                <h3 class="font-semibold text-gray-800 mb-3">Newsletter</h3>
                <div class="w-10 h-1 bg-purple-500 mb-4"></div>

                <p class="text-sm text-gray-500 mb-4">
                    Subscribe to get latest updates and offers.
                </p>

                <div class="flex items-center bg-white rounded overflow-hidden shadow-sm">
                    <input type="email" placeholder="Enter your email" class="w-full px-3 py-2 text-sm outline-none">
                    <button class="bg-blue-600 text-white px-4 py-2 text-sm hover:bg-blue-700">
                        Subscribe
                    </button>
                </div>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t mt-10 pt-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} Holiday Group. All rights reserved.
        </div>

    </div>
</footer>
