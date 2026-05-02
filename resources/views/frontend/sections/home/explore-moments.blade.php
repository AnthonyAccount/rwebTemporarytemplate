<section class="relative bg-[#f7f7f7] py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <div class="mb-6">
            <p class="text-green-600 text-xs font-semibold mb-1">• Galleries</p>
            <h2 class="font-serif text-3xl font-bold text-gray-900">
                Explore Holiday Moments
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">

            {{-- LEFT SIDE --}}
            <div class="space-y-5">

                {{-- Camp Holiday --}}
                <div class="bg-white rounded-lg shadow-md p-3">
                    <div class="flex gap-4 mb-3">
                        <img src="{{ asset('frontend/camp-logo.png') }}" class="h-9 object-contain" alt="Camp Holiday">

                        <div>
                            <p class="text-[11px] text-gray-500 leading-4">
                                A relaxing island destination in Samal with enjoyable amenities
                                and a refreshing escape from busy city getaways.
                            </p>
                            <a href="#" class="text-green-600 text-[11px] font-semibold">
                                Visit Now →
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('frontend/camp-1.jpg') }}" class="h-32 w-full object-cover rounded-md">
                        <img src="{{ asset('frontend/camp-2.jpg') }}" class="h-32 w-full object-cover rounded-md">
                    </div>
                </div>

                {{-- Holiday Tours --}}
                <div class="bg-white rounded-lg shadow-md p-3">
                    <div class="flex gap-4 mb-3">
                        <img src="{{ asset('frontend/holiday-tours-logo.png') }}" class="h-9 object-contain"
                            alt="Holiday Tours">

                        <div>
                            <p class="text-[11px] text-gray-500 leading-4">
                                A reliable travel service offering convenient tour arrangements
                                and enjoyable experiences for every kind of traveler.
                            </p>
                            <a href="#" class="text-green-600 text-[11px] font-semibold">
                                Visit Now →
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('frontend/tour-1.jpg') }}" class="h-32 w-full object-cover rounded-md">
                        <img src="{{ asset('frontend/tour-2.jpg') }}" class="h-32 w-full object-cover rounded-md">
                    </div>
                </div>

                {{-- Beach / Island --}}
                <div class="bg-white rounded-lg shadow-md p-3 w-full lg:w-[88%]">
                    <div class="flex gap-4 mb-3">
                        <img src="{{ asset('frontend/island-logo.png') }}" class="h-9 object-contain" alt="Island">

                        <div>
                            <p class="text-[11px] text-gray-500 leading-4">
                                A trusted provider of island adventures and curated travel
                                experiences for people who love nature and scenic views.
                            </p>
                            <a href="#" class="text-green-600 text-[11px] font-semibold">
                                Visit Now →
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('frontend/island-1.jpg') }}" class="h-32 w-full object-cover rounded-md">
                        <img src="{{ asset('frontend/island-2.jpg') }}" class="h-32 w-full object-cover rounded-md">
                    </div>
                </div>

            </div>

            {{-- RIGHT SIDE --}}
            <div class="space-y-5">

                {{-- Ocean View --}}
                <div class="bg-white rounded-lg shadow-md p-3">
                    <div class="flex gap-4 mb-3">
                        <img src="{{ asset('frontend/oceanview-logo.png') }}" class="h-9 object-contain"
                            alt="Ocean View">

                        <div>
                            <p class="text-[11px] text-gray-500 leading-4">
                                A peaceful seaside escape in Samal with beautiful ocean views
                                and relaxing atmosphere for memorable stays.
                            </p>
                            <a href="#" class="text-green-600 text-[11px] font-semibold">
                                Visit Now →
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('frontend/ocean-1.jpg') }}" class="h-32 w-full object-cover rounded-md">
                        <img src="{{ asset('frontend/ocean-2.jpg') }}" class="h-32 w-full object-cover rounded-md">
                    </div>
                </div>

                {{-- Green HGC --}}
                <div class="bg-white rounded-lg shadow-md p-3">
                    <div class="flex gap-4 mb-3">
                        <img src="{{ asset('frontend/green-logo.png') }}" class="h-9 object-contain" alt="Green HGC">

                        <div>
                            <p class="text-[11px] text-gray-500 leading-4">
                                A comfortable stay in Davao offering convenience and welcoming
                                spaces for both leisure and business travelers.
                            </p>
                            <a href="#" class="text-green-600 text-[11px] font-semibold">
                                Visit Now →
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('frontend/green-1.jpg') }}" class="h-32 w-full object-cover rounded-md">
                        <img src="{{ asset('frontend/green-2.jpg') }}" class="h-32 w-full object-cover rounded-md">
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Brush Decoration --}}
    <img src="{{ asset('frontend/brush.png') }}" class="hidden md:block absolute right-0 bottom-0 w-48 opacity-90"
        alt="">
</section>
