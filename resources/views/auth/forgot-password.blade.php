<x-auth-layout title="Forgot Password">

    <h2 class="text-3xl font-extrabold text-brand-navy mb-2">
        Forgot your password?
    </h2>

    <p class="text-slate-600 mb-8">
        Enter your email address and we will send you a secure link
        to reset your password.
    </p>

    @if (session('status'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        {{-- Email --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Email address
            </label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full rounded-lg border-slate-300 focus:border-brand-teal focus:ring-brand-teal"
            >
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="w-full inline-flex items-center justify-center rounded-lg bg-brand-navy px-6 py-3 text-white font-semibold hover:bg-brand-teal transition">
            Send reset link
        </button>

        {{-- Back to login --}}
        <p class="text-sm text-slate-600 text-center">
            Remembered your password?
            <a href="{{ route('login') }}"
               class="text-brand-navy font-semibold hover:underline">
                Back to login
            </a>
        </p>

    </form>

</x-auth-layout>
