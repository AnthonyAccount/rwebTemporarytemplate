<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('assets/js/tailwindcdn.js') }}"></script>

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

<body class="bg-gray-100 font-poppins">

    <div class="min-h-screen flex">

        @include('backend.includes.sidebar')

        <main class="flex-1">

            @include('backend.includes.header')

            <section class="p-6">
                @yield('content')
            </section>

        </main>

    </div>

</body>

</html>
