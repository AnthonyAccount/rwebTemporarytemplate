<section class=" relative overflow-hidden py-16 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('frontend/home/background.png') }}');">

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
        <div class=" min-h-[360px]">
            <img src="{{ asset('frontend/home/Group 778.png') }}" class="  object-cover " alt="">


        </div>
    </div>
    <div class="absolute -bottom-[20rem] left-0">
        <img src="{{ asset('frontend/home/Vector 31.png') }}" class="  object-cover " alt="">


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

        @php
            $activities = [
                [
                    'image' => 'frontend/home/image.png',
                    'title' => 'Infinity Pool',
                    'subtitle' => 'Camp Holiday',
                ],
                [
                    'image' => 'frontend/home/image.png',
                    'title' => 'Waterfront Stay',
                    'subtitle' => 'Ocean View',
                ],
                [
                    'image' => 'frontend/home/image.png',
                    'title' => 'Resto',
                    'subtitle' => 'Camp Holiday',
                ],
                [
                    'image' => 'frontend/home/image.png',
                    'title' => 'Relaxation Spot',
                    'subtitle' => 'Ocean View',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($activities as $activity)
                <div class="relative rounded-xl overflow-hidden h-[25rem] group">
                    <img src="{{ asset($activity['image']) }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="absolute bottom-5 left-5 text-white">
                        <h3 class="font-semibold text-lg">{{ $activity['title'] }}</h3>
                        <p class="text-xs text-gray-200">{{ $activity['subtitle'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
