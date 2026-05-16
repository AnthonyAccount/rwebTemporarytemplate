{{-- Deals & Offers Section --}}
<section class="px-4 mt-6">

    {{-- Banner --}}
    @include('frontend.components.banner', [
        'title' => 'Deals & Offers',
        'showLogo' => false,
    ])

    <div class="max-w-7xl mx-auto px-6 py-12">

        {{-- Header --}}
        <div class="mb-6">
            <p class="text-green-600 text-xs font-semibold mb-1">
                • What’s New
            </p>

            <h2 class="font-serif text-3xl font-bold text-gray-900">
                Get Exclusive Packages
            </h2>
        </div>

        {{-- Tabs --}}
        <div class="flex flex-wrap gap-2 bg-gray-100 rounded-lg p-2 mb-8">
            <button class="px-4 py-2 text-xs font-semibold rounded-md bg-white text-green-600 shadow-sm">
                All
            </button>

            <button class="px-4 py-2 text-xs font-semibold rounded-md text-gray-500 hover:bg-white hover:text-green-600">
                Camp Holiday Resort
            </button>

            <button class="px-4 py-2 text-xs font-semibold rounded-md text-gray-500 hover:bg-white hover:text-green-600">
                Holiday Oceanview
            </button>

            <button class="px-4 py-2 text-xs font-semibold rounded-md text-gray-500 hover:bg-white hover:text-green-600">
                Holiday Inn Davao
            </button>
        </div>

        @php
            $deals = [
                [
                    'image' => 'frontend/deals/deal-1.png',
                    'logo' => 'frontend/home/logos/camp-logo.png',
                    'discount' => '50%',
                    'title' => 'Stay More, Save More',
                    'subtitle' => 'Exclusive package',
                ],
                [
                    'image' => 'frontend/deals/deal-2.png',
                    'logo' => 'frontend/home/logos/green-logo.png',
                    'discount' => '50%',
                    'title' => 'Relaxing Room Package',
                    'subtitle' => 'Limited offer',
                ],
                [
                    'image' => 'frontend/deals/deal-3.png',
                    'logo' => 'frontend/home/logos/holiday-tours-logo.png',
                    'discount' => '40%',
                    'title' => 'Holiday Food Deals',
                    'subtitle' => 'Special discount',
                ],
            ];
        @endphp

        {{-- Deals Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            @foreach ($deals as $deal)
                <div class="relative h-44 rounded-xl overflow-hidden shadow-md group">

                    <img src="{{ asset($deal['image']) }}" alt="{{ $deal['title'] }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                    {{-- Dark Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                    {{-- Logo --}}
                    <div class="absolute top-3 left-3 bg-white rounded px-2 py-1">
                        <img src="{{ asset($deal['logo']) }}" alt="Logo" class="h-5 object-contain">
                    </div>

                    {{-- Discount --}}
                    <div class="absolute left-3 bottom-3 text-white">
                        <p class="text-xs text-white/80">
                            {{ $deal['subtitle'] }}
                        </p>

                        <h3 class="text-2xl font-bold leading-tight">
                            {{ $deal['discount'] }}
                        </h3>

                        <p class="text-sm font-semibold">
                            {{ $deal['title'] }}
                        </p>
                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>
