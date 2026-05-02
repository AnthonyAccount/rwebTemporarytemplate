<section class="relative bg-white overflow-hidden py-16">

    {{-- About Section --}}
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        {{-- Left Text --}}
        <div>
            <p class="text-green-600 text-sm font-semibold mb-2">• Who We Are</p>

            <h2 class="font-serif text-4xl font-bold text-gray-900 mb-4">
                About HGC
            </h2>

            <p class="text-gray-600 text-sm leading-6 mb-5 max-w-xl">
                Based in the thriving landscape of Davao City, the Holiday Group of Companies
                stands as a distinguished family-owned conglomerate that has become synonymous
                with fine growth and dynamism of southern Mindanao.
            </p>

            <ul class="space-y-3 mb-6 text-sm text-gray-700">
                <li class="flex items-center gap-2">
                    <span
                        class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs">
                        ✓
                    </span>
                    Diverse Hospitality Experiences
                </li>

                <li class="flex items-center gap-2">
                    <span
                        class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs">
                        ✓
                    </span>
                    Trusted Partner and Lifestyle Network
                </li>

                <li class="flex items-center gap-2">
                    <span
                        class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs">
                        ✓
                    </span>
                    Guest-Focused Services
                </li>
            </ul>

            <a href="#"
                class="inline-block bg-blue-700 text-white text-sm font-medium px-5 py-3 rounded-full hover:bg-blue-800">
                More About Us
            </a>
        </div>

        {{-- Right Images --}}
        <div class="relative min-h-[360px]">
            <img src="{{ asset('frontend/about-1.jpg') }}"
                class="absolute top-10 left-12 w-40 h-40 rounded-full object-cover shadow-lg" alt="">

            <img src="{{ asset('frontend/about-2.jpg') }}"
                class="absolute top-0 right-20 w-24 h-24 rounded-full object-cover shadow-lg" alt="">

            <img src="{{ asset('frontend/about-3.jpg') }}"
                class="absolute top-28 right-4 w-56 h-56 rounded-full object-cover shadow-lg" alt="">

            <img src="{{ asset('frontend/about-4.jpg') }}"
                class="absolute bottom-0 left-28 w-32 h-32 rounded-full object-cover shadow-lg" alt="">
        </div>
    </div>

    {{-- Properties Section --}}
    <div class="max-w-7xl mx-auto px-4 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-end mb-8">
            <div>
                <p class="text-green-600 text-sm font-semibold mb-2">• Activities</p>

                <h2 class="font-serif text-3xl md:text-4xl font-bold text-gray-900">
                    Exclusive for Every Guest
                </h2>
            </div>

            <p class="text-gray-500 text-sm leading-6">
                Whether you prefer relaxing moments, family-friendly outings, or local adventures,
                there is always something to explore during your stay.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Card --}}
            <div class="relative rounded-xl overflow-hidden h-80 group">
                <img src="{{ asset('frontend/activity-1.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                <div class="absolute bottom-5 left-5 text-white">
                    <h3 class="font-semibold text-lg">Infinity Pool</h3>
                    <p class="text-xs text-gray-200">Camp Holiday</p>
                </div>
            </div>

            <div class="relative rounded-xl overflow-hidden h-80 group">
                <img src="{{ asset('frontend/activity-2.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                <div class="absolute bottom-5 left-5 text-white">
                    <h3 class="font-semibold text-lg">Waterfront Stay</h3>
                    <p class="text-xs text-gray-200">Ocean View</p>
                </div>
            </div>

            <div class="relative rounded-xl overflow-hidden h-80 group">
                <img src="{{ asset('frontend/activity-3.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                <div class="absolute bottom-5 left-5 text-white">
                    <h3 class="font-semibold text-lg">Resto</h3>
                    <p class="text-xs text-gray-200">Camp Holiday</p>
                </div>
            </div>

            <div class="relative rounded-xl overflow-hidden h-80 group">
                <img src="{{ asset('frontend/activity-4.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                <div class="absolute bottom-5 left-5 text-white">
                    <h3 class="font-semibold text-lg">Relaxation Spot</h3>
                    <p class="text-xs text-gray-200">Ocean View</p>
                </div>
            </div>

        </div>
    </div>
</section>
