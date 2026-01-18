<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} – {{ $title ?? 'Authentication' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 bg-white shadow-lg rounded-lg overflow-hidden">

        {{-- Left branding --}}
        <div class="hidden md:flex flex-col justify-center px-10 text-white" style="background-color: #008b8b;">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo" class="mb-6 w-48">
            <h1 class="text-3xl font-bold mb-4">
                {{ config('app.name') }}
            </h1>
            <p class="text-gray-300 leading-relaxed">
                Manage staffing enquiries, track submissions, and stay updated
                with application status in one place.
            </p>
        </div>

        {{-- Right form --}}
        <div class="px-6 py-10 md:px-10">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
