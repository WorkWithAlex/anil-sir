@if(!auth()->check())
    <script>window.location = "{{ route('login') }}";</script>
@endif

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Staffing App') }} – Dashboard</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-slate-100 text-slate-900 antialiased dark:bg-slate-900 dark:text-slate-100">

        <div class="min-h-screen flex">

            {{-- Sidebar --}}
            {{-- <aside class="w-64 border-r border-slate-200 px-6 py-8 hidden md:block">
                <a href="{{ route('dashboard') }}" class="block text-lg font-semibold mb-10">
                    {{env('APP_NAME', 'Omni Outsource')}}
                </a>

                <nav class="space-y-6 text-sm font-medium">
                    <a href="{{ route('dashboard') }}" class="block text-slate-700 hover:text-slate-900">
                        <i class="mr-2 fa fa-home"></i>
                        Dashboard
                    </a>
                </nav>
            </aside> --}}

            {{-- Main --}}
            <div class="flex-1 flex flex-col">

                {{-- Top bar --}}
                <header class="h-16 border-b border-slate-200 px-8 flex items-center justify-between">
                    <h1 class="text-lg font-semibold">
                        <a href="{{ auth()->user()->role === 'super_admin' ? route('dashboard') : route('user.dashboard') }}" class="{{ is_active_route(['dashboard', 'user.dashboard']) }}">
                            @yield('PageTitle', 'Dashboard')
                        </a>
                    </h1>
                    <div class="flex items-center gap-4 text-sm">
                        <span class="text-slate-600">
                            Welcome back, {{ auth()->user()->name }}
                        </span>

                        <span class="text-slate-600">|</span>
                        <a href="/">Go To Website</a>
                        <span class="text-slate-600">|</span>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-slate-600 hover:text-slate-900">
                                Logout
                            </button>
                        </form>
                    </div>
                </header>

                {{-- Content --}}
                <main class="flex-1 px-8 py-10 bg-slate-50">
                    @yield('content')
                </main>

            </div>

        </div>

    </body>
    
</html>
