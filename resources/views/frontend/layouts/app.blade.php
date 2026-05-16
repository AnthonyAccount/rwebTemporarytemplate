<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $setting?->meta_title ?? config('app.name', 'Laravel App') }}
    </title>

    <meta name="description" content="{{ $setting?->meta_description ?? '' }}">

    <meta name="keywords" content="{{ $setting?->meta_keywords ?? '' }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $setting?->og_title ?? ($setting?->meta_title ?? '') }}">

    <meta property="og:description" content="{{ $setting?->og_description ?? ($setting?->meta_description ?? '') }}">

    @if ($setting?->og_image)
        <meta property="og:image" content="{{ asset('storage/' . $setting->og_image) }}">
    @endif

    {{-- Canonical --}}
    @if ($setting?->canonical_url)
        <link rel="canonical" href="{{ $setting->canonical_url }}">
    @endif

    {{-- Favicon --}}
    @if ($setting?->favicon)
        <link rel="icon" href="{{ asset('storage/' . $setting->favicon) }}">
    @endif

    {{-- Google Font: Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Tailwind CDN --}}
    <script src="{{ asset('assets/js/tailwindcdn.js') }}"></script>

    {{-- Tailwind Config --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-[#f5f5f5] flex flex-col min-h-screen font-poppins">

    {{-- Navbar --}}
    @include('frontend.partials.navbar')

    {{-- Content --}}
    <main class="w-full">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.partials.footer')

</body>

</html>
