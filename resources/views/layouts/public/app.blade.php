<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Staffing App') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')

    </head>

    <body class="font-sans antialiased bg-white text-slate-900">
        
        @include('layouts.public.navigation')

        <main class="min-h-screen">
            @yield('content')
        </main>

        @include('layouts.public.footer')

        
        @stack('scripts')

    </body>
</html>
