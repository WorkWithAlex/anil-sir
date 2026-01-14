<x-auth-layout title="Register">

    <h2 class="text-3xl font-extrabold text-brand-navy mb-2">
        Create your account
    </h2>

    <p class="text-slate-600 mb-8">
        Register once to submit and track staffing requirements with clarity.
    </p>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        {{-- Name --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Full name
            </label>
            <input
                type="text"
                name="name"
                required
                value="{{ old('name') }}"
                class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
            >
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Email address
            </label>
            <input
                type="email"
                name="email"
                required
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

        {{-- Confirm Password --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Confirm password
            </label>
            <input
                type="password"
                name="password_confirmation"
                required
                class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
            >
        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="w-full inline-flex items-center justify-center rounded-lg bg-brand-navy px-6 py-3 text-white font-semibold hover:bg-brand-teal transition">
            Create account
        </button>

        {{-- Login link --}}
        <p class="text-sm text-slate-600 text-center">
            Already registered?
            <a href="{{ route('login') }}"
               class="text-brand-navy font-semibold hover:underline">
                Sign in
            </a>
        </p>

    </form>

</x-auth-layout>