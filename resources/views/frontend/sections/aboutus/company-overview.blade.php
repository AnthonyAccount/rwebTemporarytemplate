{{-- resources/views/components/company-overview.blade.php --}}

<section class="px-4 mt-6">
    @include('frontend.components.banner', [
        'title' => 'Our Company',
        'showLogo' => false,
    ])

    <div class="relative overflow-hidden rounded-3xl">

        {{-- Background Image --}}
        <img src="{{ asset('frontend/about-us/Mask group.png') }}" alt="Background"
            class="absolute -top-20 left-0  object-contain ">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Main Content --}}
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center p-8 md:p-14">

                {{-- Left Content --}}
                <div class="relative">

                    {{-- Decorative Pattern --}}
                    <div
                        class="absolute -left-6 top-0 text-gray-200 text-[120px] font-bold leading-none opacity-70 pointer-events-none select-none">
                        //
                    </div>

                    <div class="relative z-10">

                        <p class="text-sm font-semibold text-teal-600 mb-2 uppercase tracking-widest">
                            About Us
                        </p>

                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                            Who We Are
                        </h2>

                        <p class="text-sm text-gray-600 leading-7 mb-4">
                            Rooted in the thriving landscape of Davao City, the Holiday Group of Companies
                            (HGC) stands as a distinguished family-owned conglomerate that has become
                            synonymous with the growth and dynamism of Southern Mindanao.
                        </p>

                        <p class="text-sm text-gray-600 leading-7 mb-6">
                            By weaving together a diverse portfolio that spans tourism, hospitality, residential
                            development, and transport, HGC has established a seamless ecosystem designed to serve the
                            modern traveler and aspiring homeowner alike. The company’s identity is built upon a
                            foundation of local expertise and a
                            deepseated commitment to showcasing the premier destinations of the region with a touch of
                            authentic Dabawenyo warmth.
                        </p>

                        {{-- Stats --}}
                        <div class="grid grid-cols-3 gap-6 pt-4 border-t border-gray-100">

                            <div>
                                <h3 class="text-3xl font-bold text-teal-600">
                                    298+
                                </h3>
                                <p class="text-xs font-semibold text-gray-700 mt-1">
                                    Luxury Rooms
                                </p>
                            </div>

                            <div>
                                <h3 class="text-3xl font-bold text-teal-600">
                                    4.8+
                                </h3>
                                <p class="text-xs font-semibold text-gray-700 mt-1">
                                    Guest Rating
                                </p>
                            </div>

                            <div>
                                <h3 class="text-3xl font-bold text-teal-600">
                                    128k+
                                </h3>
                                <p class="text-xs font-semibold text-gray-700 mt-1">
                                    Happy Clients
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Right Image Carousel --}}
                <div class="relative w-full px-10">

                    {{-- Swiper --}}
                    <div class="swiper aboutCarousel w-full max-w-2xl mx-auto overflow-hidden">

                        <div class="swiper-wrapper">

                            @php
                                $slides = [
                                    [
                                        'image' => 'frontend/about-us/Frame 1037.png',
                                        'logo' => 'frontend/about-us/logo-1.png',
                                    ],
                                    [
                                        'image' => 'frontend/about-us/Frame 1040.png',
                                        'logo' => 'frontend/about-us/logo-2.png',
                                    ],
                                    [
                                        'image' => 'frontend/about-us/Frame 1048.png',
                                        'logo' => 'frontend/about-us/logo-3.png',
                                    ],
                                    [
                                        'image' => 'frontend/about-us/Frame 1039.png',
                                        'logo' => 'frontend/about-us/logo-4.png',
                                    ],
                                ];
                            @endphp

                            @foreach ($slides as $slide)
                                <div class="swiper-slide">

                                    <div class="relative h-[320px] md:h-[350px] rounded-3xl overflow-hidden shadow-md">

                                        {{-- Main Image --}}
                                        <img src="{{ asset($slide['image']) }}" alt="About Image"
                                            class="w-full h-full object-cover">

                                        {{-- Logo --}}
                                        <div class="absolute top-4 left-4 z-20">
                                            <img src="{{ asset($slide['logo']) }}" alt="Logo"
                                                class="h-10 md:h-14 object-contain">
                                        </div>

                                        {{-- LEFT CARD FADE --}}
                                        <div class="absolute inset-0 left-fade"></div>

                                        {{-- RIGHT CARD FADE --}}
                                        <div class="absolute inset-0 right-fade"></div>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>

                    {{-- Left Arrow --}}
                    <button
                        class="about-prev absolute left-0 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-600 hover:text-teal-600">

                        <i class="fas fa-chevron-left text-xs"></i>

                    </button>

                    {{-- Right Arrow --}}
                    <button
                        class="about-next absolute right-0 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-600 hover:text-teal-600">

                        <i class="fas fa-chevron-right text-xs"></i>

                    </button>

                </div>

                <style>
                    /* Default hide overlays */
                    .left-fade,
                    .right-fade {
                        opacity: 0;
                        transition: 0.3s ease;
                    }

                    /* LEFT CARD EFFECT */
                    .swiper-slide-active .left-fade {
                        opacity: 1;
                        background: linear-gradient(to right,
                                rgba(255, 255, 255, 0.95),
                                rgba(255, 255, 255, 0.35),
                                transparent);
                    }

                    /* RIGHT CARD EFFECT */
                    .swiper-slide-next .right-fade {
                        opacity: 1;
                        background: linear-gradient(to left,
                                rgba(255, 255, 255, 0.95),
                                rgba(255, 255, 255, 0.35),
                                transparent);
                    }
                </style>

                <script>
                    new Swiper('.aboutCarousel', {
                        loop: true,
                        spaceBetween: 20,
                        centeredSlides: false,

                        navigation: {
                            nextEl: '.about-next',
                            prevEl: '.about-prev',
                        },

                        breakpoints: {
                            0: {
                                slidesPerView: 1,
                            },

                            768: {
                                slidesPerView: 2,
                            }
                        }
                    });
                </script>

            </div>

        </div>

    </div>

    </div>

</section>



<script>
    new Swiper('.aboutCarousel', {
        loop: true,
        spaceBetween: 16,
        centeredSlides: false,

        navigation: {
            nextEl: '.about-next',
            prevEl: '.about-prev',
        },

        pagination: {
            el: '.about-pagination',
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1.1, // slight peek on mobile
            },
            768: {
                slidesPerView: 2, // two full cards on desktop
            },
        },
    });
</script>
