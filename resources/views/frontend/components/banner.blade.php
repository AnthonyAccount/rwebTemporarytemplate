{{-- resources/views/components/banner.blade.php --}}

<div class="relative overflow-hidden rounded-2xl h-44 md:h-56">

    {{-- Background Image --}}
    <img src="{{ asset('frontend/banner.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-r from-[#16213E]/85 via-[#1B4332]/60 to-[#2D6A4F]/75"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">

        {{-- Optional Logo --}}
        @if ($showLogo ?? true)
            <img src="{{ asset('frontend/Logo.png') }}" alt="Logo" class="h-14 md:h-20 mb-3">
        @endif

        {{-- Title --}}
        <h1 class="text-white text-2xl md:text-4xl font-bold">
            {{ $title ?? 'Our Company' }}
        </h1>

    </div>

</div>
