<x-auth-layout title="Reset Password">
    <h2 class="text-2xl font-bold mb-4">Reset your password</h2>

    <p class="text-sm text-gray-600 mb-6">
        Enter a new password for your account below.
    </p>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
        @csrf

        {{-- Password Reset Token --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        {{-- Email --}}
        <div>
            <label class="block text-sm font-medium mb-1">Email address</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
                required
                autofocus
                class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
            >
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- New Password --}}
        <div>
            <label class="block text-sm font-medium mb-1">New password</label>
            <input
                type="password"
                name="password"
                required
                class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
            >
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div>
            <label class="block text-sm font-medium mb-1">Confirm new password</label>
            <input
                type="password"
                name="password_confirmation"
                required
                class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 transition"
        >
            Reset password
        </button>

        <p class="text-sm text-gray-600 text-center">
            Remembered your password?
            <a href="{{ route('login') }}" class="text-gray-900 font-medium hover:underline">
                Back to login
            </a>
        </p>
    </form>
</x-auth-layout>
