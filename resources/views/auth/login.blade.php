<x-auth-layout title="Login">

    <h2 class="text-3xl font-extrabold text-brand-navy mb-2">
        Sign in to your account
    </h2>

    <p class="text-slate-600 mb-8">
        Access your dashboard and track staffing requirements in one place.
    </p>

    @if(session('status'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('status') }}
        </div>
    @endif

    @if(session('info'))
        <div class="mb-4 rounded-lg border border-blue-200 bg-blue-50 px-4 py-3 text-sm text-blue-700">
            {{ session('info') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        {{-- Email --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Email address
            </label>
            <input
                type="email"
                name="email"
                required
                autofocus
                value="{{ old('email') }}"
                class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
            >
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Password
            </label>
            <input
                type="password"
                name="password"
                required
                class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
            >
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember / Forgot --}}
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-slate-600">
                <input type="checkbox" name="remember" class="rounded border-slate-300">
                Remember me
            </label>

            <a href="{{ route('password.request') }}"
               class="text-brand-teal font-medium hover:underline">
                Forgot password?
            </a>
        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="w-full inline-flex items-center justify-center rounded-lg bg-brand-navy px-6 py-3 text-white font-semibold hover:bg-brand-teal transition">
            Sign in
        </button>

        {{-- Register --}}
        <p class="text-sm text-slate-600 text-center">
            Don’t have an account?
            <a href="{{ route('register') }}"
               class="text-brand-navy font-semibold hover:underline">
                Register
            </a>
        </p>

    </form>

</x-auth-layout>