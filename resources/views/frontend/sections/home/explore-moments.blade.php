<section class="relative bg-[#f7f7f7] py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <div class="mb-6">
            <p class="text-green-600 text-xs font-semibold mb-1">• Galleries</p>
            <h2 class="font-serif text-3xl font-bold text-gray-900">
                Explore Holiday Moments
            </h2>
        </div>
        @php
            $items = [
                [
                    'logo' => 'frontend/home/logos/camp-logo.png',
                    'desc' =>
                        'A relaxing island destination in Samal with enjoyable amenities and a refreshing escape from busy city getaways.',
                    'images' => ['frontend/home/logos/tour-1.png', 'frontend/home/logos/tour-1.png'],
                ],
                [
                    'logo' => 'frontend/home/logos/holiday-tours-logo.png',
                    'desc' =>
                        'A reliable travel service offering convenient tour arrangements and enjoyable experiences for every kind of traveler.',
                    'images' => ['frontend/home/logos/tour-1.png', 'frontend/home/logos/tour-1.png'],
                ],
                [
                    'logo' => 'frontend/home/logos/island-logo.png',
                    'desc' =>
                        'A trusted provider of island adventures and curated travel experiences for people who love nature and scenic views.',
                    'images' => ['frontend/home/logos/tour-1.png', 'frontend/home/logos/tour-1.png'],
                    'span' => 'lg:col-span-1 lg:pr-10', // optional tweak for width feel
                ],
                [
                    'logo' => 'frontend/home/logos/oceanview-logo.png',
                    'desc' =>
                        'A peaceful seaside escape in Samal with beautiful ocean views and relaxing atmosphere for memorable stays.',
                    'images' => ['frontend/home/logos/tour-1.png', 'frontend/home/logos/tour-1.png'],
                ],
                [
                    'logo' => 'frontend/home/logos/green-logo.png',
                    'desc' =>
                        'A comfortable stay in Davao offering convenience and welcoming spaces for both leisure and business travelers.',
                    'images' => ['frontend/home/logos/tour-1.png', 'frontend/home/logos/tour-1.png'],
                ],
            ];
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">


            @foreach ($items as $item)
                @include('frontend.components.gallery-card', [
                    'logo' => $item['logo'],
                    'desc' => $item['desc'],
                    'images' => $item['images'],
                    'link' => $item['link'] ?? '#',
                    'class' => $item['span'] ?? '',
                ])
            @endforeach


        </div>
    </div>

    {{-- Brush Decoration --}}
    <img src="{{ asset('frontend/brush.png') }}" class="hidden md:block absolute right-0 bottom-0 w-48 opacity-90"
        alt="">
</section>
