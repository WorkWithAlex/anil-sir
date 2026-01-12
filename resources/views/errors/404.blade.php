@extends('layouts.public.app')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="max-w-md text-center">
        <h1 class="text-6xl font-bold text-slate-900 mb-4">404</h1>

        <h2 class="text-xl font-semibold mb-2">
            Page not found
        </h2>

        <p class="text-slate-600 mb-6">
            The page you are looking for does not exist or may have been moved.
        </p>

        <div class="flex justify-center gap-4">
            <a href="/"
               class="px-5 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">
                Go to homepage
            </a>

            @auth
                <a href="{{ auth()->user()->role === 'super_admin'
                        ? route('dashboard')
                        : route('user.dashboard') }}"
                   class="px-5 py-2 border border-slate-300 rounded hover:bg-slate-100">
                    Dashboard
                </a>
            @endauth
        </div>
    </div>
</div>
@endsection
