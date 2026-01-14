<x-auth-layout title="Login">
    <h2 class="text-2xl font-bold mb-6">Sign in to your account</h2>

    @if(session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    @if(session('info'))
        <div class="mb-4 text-sm text-blue-600">
            {{ session('info') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" required autofocus
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" required
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="rounded">
                Remember me
            </label>

            <a href="{{ route('password.request') }}"
               class="text-gray-700 hover:underline">
                Forgot password?
            </a>
        </div>

        <button type="submit"
                class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 transition">
            Sign in
        </button>

        <p class="text-sm text-gray-600 text-center">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-gray-900 font-medium hover:underline">
                Register
            </a>
        </p>
    </form>
</x-auth-layout>
