<x-auth-layout title="Register">
    <h2 class="text-2xl font-bold mb-6">Create your account</h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Full Name</label>
            <input type="text" name="name" required
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" required
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" required
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                   class="w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900">
        </div>

        <button type="submit"
                class="w-full bg-gray-900 text-white py-2 rounded hover:bg-gray-800 transition">
            Create account
        </button>

        <p class="text-sm text-gray-600 text-center">
            Already registered?
            <a href="{{ route('login') }}" class="text-gray-900 font-medium hover:underline">
                Sign in
            </a>
        </p>
    </form>
</x-auth-layout>
