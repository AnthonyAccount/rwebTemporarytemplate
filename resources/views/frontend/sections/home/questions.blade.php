<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">

        {{-- CTA Banner --}}
        <div class="relative overflow-hidden rounded-xl h-56 flex items-center justify-center text-center">
            <img src="{{ asset('frontend/questions-bg.jpg') }}" class="absolute inset-0 w-full h-full object-cover"
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

        {{-- Contact / Info Area --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mt-12">

            {{-- Left Image --}}
            <div class="relative">
                <div class="absolute inset-0 bg-sky-100 rounded-xl translate-x-4 translate-y-4"></div>

                <img src="{{ asset('frontend/contact-person.jpg') }}"
                    class="relative rounded-xl w-full h-[360px] object-cover" alt="Customer Assistance">
            </div>

            {{-- Right Text --}}
            <div class="text-center lg:text-left">
                <p class="text-gray-600 text-sm leading-7">
                    By working together as diverse portfolio that spans tourism,
                    hospitality, residential development, and transport, HGC has
                    established a balanced ecosystem designed to serve the modern
                    traveler and growing homeowner alike.
                </p>

                <p class="text-gray-600 text-sm leading-7 mt-5">
                    The company identity is built upon a foundation of local expertise
                    and a client-centered commitment to showcasing the power of
                    destination experiences within Davao and nearby communities.
                </p>
            </div>

        </div>

    </div>
</section>
