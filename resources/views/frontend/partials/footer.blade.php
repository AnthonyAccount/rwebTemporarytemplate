<footer class=" pt-10 bg-white">

    {{-- Background Watermark Text --}}


    <div class="px-20 mx-auto  pb-12  z-10">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">

            {{-- Logo + Social --}}
            <div class="p-5 ">
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
            <div class="p-5 ">
                <h3 class="font-semibold text-2xl text-gray-800 mb-3">
                    Quick Links
                </h3>

                <div class="w-52 h-[1px] bg-purple-500 mb-4"></div>


                <ul class="space-y-2 text-sm text-gray-600">
                    <li>
                        <a href="#" class="hover:text-blue-600">Home</a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-600">About Us</a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-600">Contact Us</a>
                    </li>
                </ul>
            </div>

            {{-- Our Properties --}}
            <div class="p-5 ">
                <h3 class="font-semibold text-2xl text-gray-800 mb-3">
                    Our Properties
                </h3>

                <div class="w-52 h-[1px] bg-purple-500 mb-4"></div>

                <ul class="space-y-2 text-sm text-gray-600">
                    <li>
                        <a href="#" class="hover:text-blue-600">
                            Luxury Villas
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-600">
                            Apartments
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-600">
                            Commercial
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Newsletter --}}
            <div class="bg-[#f5f6fb] p-5 rounded-xl">
                <h3 class="font-semibold text-2xl text-gray-800 mb-3">
                    Newsletter!
                </h3>

                <p class="text-sm text-gray-500 mb-4">
                    Subscribe to receive exclusive deals, seasonal promotions, and travel updates straight to your
                    inbox.
                </p>

                <div class="flex items-center bg-white rounded-full overflow-hidden shadow-sm">
                    <input type="email" placeholder="Enter your email" class="w-full px-3 py-5 text-sm  rounded-full">

                    <button class="bg-blue-600 text-white px-4 py-2 text-sm mx-2 rounded-full hover:bg-blue-700">
                        Subscribe
                    </button>
                </div>
            </div>

        </div>

        <div class=" flex justify-center mt-10">
            <img src="{{ asset('frontend/footer/HOLIDAY GROUP OF COMPANIES.png') }}" class="" alt="Logo">
        </div>
        <div class="border-t  pt-4 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">

            <p>
                © {{ date('Y') }} Holiday Group of Companies.
                Designed and Developed by
                <span class="text-orange-500 font-semibold">
                    R Web Solutions Corp.
                </span>
            </p>

            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-blue-600">
                    Terms & Condition
                </a>

                <a href="#" class="hover:text-blue-600">
                    Privacy Policy
                </a>
            </div>

        </div>

    </div>

</footer>
