<x-auth-layout title="Forgot Password">
    <h2 class="text-2xl font-bold mb-4">Forgot your password?</h2>

    <p class="text-sm text-gray-600 mb-6">
        No problem. Enter your email address and we will send you a link to reset your password.
    </p>

    @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Email address</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900"
            >
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 transition"
        >
            Send reset link
        </button>

        <p class="text-sm text-gray-600 text-center">
            Remembered your password?
            <a href="{{ route('login') }}" class="text-gray-900 font-medium hover:underline">
                Back to login
            </a>
        </p>
    </form>
</x-auth-layout>
