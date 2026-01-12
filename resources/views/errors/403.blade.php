@extends('layouts.public.app')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="max-w-md text-center">
        <h1 class="text-6xl font-bold text-slate-900 mb-4">403</h1>

        <h2 class="text-xl font-semibold mb-2">
            Access denied
        </h2>

        <p class="text-slate-600 mb-6">
            You do not have permission to access this page.
        </p>

        <div class="flex justify-center gap-4">
            @auth
                <a href="{{ auth()->user()->role === 'super_admin'
                        ? route('dashboard')
                        : route('user.dashboard') }}"
                   class="px-5 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">
                    Go to dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-5 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">
                    Login
                </a>
            @endauth

            <a href="/"
               class="px-5 py-2 border border-slate-300 rounded hover:bg-slate-100">
                Home
            </a>
        </div>
    </div>
</div>
@endsection
