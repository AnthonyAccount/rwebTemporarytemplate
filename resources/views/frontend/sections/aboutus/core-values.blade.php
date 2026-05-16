{{-- Core Values Section --}}
<section class="relative py-16 px-4 mt-6 overflow-hidden">

    {{-- Background Pattern --}}
    <img src="{{ asset('frontend/about-us/Mask group.png') }}" alt=""
        class="absolute right-0 top-0 w-72 md:w-[420px] opacity-10 pointer-events-none">

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        {{-- Header --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start mb-10">

            <div>
                <p class="text-sm font-semibold text-green-600 mb-2">
                    + What Guides Us
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    Core Values &<br>
                    Strategic Goals
                </h2>
            </div>

            <p class="text-sm text-gray-600 leading-7">
                Our direction is shaped by a commitment to responsibility, innovation,
                and community progress. Success is created through shared purpose,
                operational excellence, and a continuous focus on experiences that
                deliver lasting value for every generation.
            </p>

        </div>

        @php
            $values = [
                [
                    'icon' => 'frontend/about-us/icons/stewardship.png',
                    'title' => 'Stewardship',
                    'description' =>
                        'Stewards and managers are long-term caretakers, looking after properties that serve both present and future generations.',
                ],
                [
                    'icon' => 'frontend/about-us/icons/innovation.png',
                    'title' => 'Innovation',
                    'description' =>
                        'We continuously introduce forward-thinking ideas and systems that help the company modernize and serve better.',
                ],
                [
                    'icon' => 'frontend/about-us/icons/accessibility.png',
                    'title' => 'Accessibility',
                    'description' =>
                        'We ensure that our services and developments remain within reach — allowing families, businesses, and guests to benefit.',
                ],
                [
                    'icon' => 'frontend/about-us/icons/excellence.png',
                    'title' => 'Excellence',
                    'description' =>
                        'We are committed to delivering high-quality services, maintaining strong standards across every part of our operations.',
                ],
                [
                    'icon' => 'frontend/about-us/icons/community.png',
                    'title' => 'Community-Centered Growth',
                    'description' =>
                        'We support community-focused progress, providing opportunities, jobs, and lasting contributions to the areas we serve.',
                ],
                [
                    'icon' => 'frontend/about-us/icons/connectivity.png',
                    'title' => 'Connectivity',
                    'description' =>
                        'We aim to create strong links through travel, transport, hospitality, and lifestyle experiences.',
                ],
            ];
        @endphp

        {{-- Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            @foreach ($values as $value)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition">

                    <div class="w-12 h-12 rounded-full bg-teal-50 flex items-center justify-center mb-4">
                        <img src="{{ asset($value['icon']) }}" alt="{{ $value['title'] }}"
                            class="w-7 h-7 object-contain">
                    </div>

                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        {{ $value['title'] }}
                    </h3>

                    <p class="text-sm text-gray-600 leading-6">
                        {{ $value['description'] }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
    <div class="mt-10">

        <div
            class="relative mx-4 overflow-hidden rounded-xl h-[25rem] flex items-center justify-center text-center border-2">
            <img src="{{ asset('frontend/home/q/Frame 846.png') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="Questions Background">

            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/80 via-gray-900/50 to-green-800/80"></div>

            <div class="relative z-10 px-4">
                <p class="text-green-400 text-xs font-semibold mb-2">
                    Get In Touch
                </p>

                <h2 class="font-serif text-3xl md:text-5xl font-bold text-white mb-3">
                    Have Any Questions?
                </h2>

                <p class="text-white/90 text-xs md:text-sm max-w-2xl mx-auto leading-5">
                    Contact our team for inquiries, booking assistance, and special requests.
                    We are here to help make your stay smooth and convenient.
                </p>
            </div>
        </div>
    </div>

</section>
