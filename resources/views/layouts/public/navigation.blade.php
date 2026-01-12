<header
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b border-slate-200 bg-white">

    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

        {{-- Brand --}}
        <a href="{{ route('home') }}"
           class="text-lg font-semibold text-slate-900">
            Staffing App
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
            <a href="{{ route('home') }}" class="{{ is_active_route('home') }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="{{ is_active_route('about') }}">
                About
            </a>
            <a href="{{ route('contact') }}" class="{{ is_active_route('contact') }}">
                Contact
            </a>
            <a href="{{ route('enquiry.create') }}" class="{{ is_active_route('enquiry.create') }}">
                Staffing Requirement
            </a>
        </nav>

        {{-- Desktop Actions --}}
        <div class="hidden md:flex items-center gap-4 text-sm font-medium">
            @guest
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-900">
                    Login
                </a>

                <a href="{{ route('enquiry.create') }}"
                   class="inline-flex items-center px-4 py-2 rounded-md bg-slate-900 text-white">
                    Submit Requirement
                </a>
            @endguest

            @auth
                <a href="{{ auth()->user()->role === 'super_admin'
                        ? route('dashboard')
                        : route('user.dashboard') }}"
                   class="inline-flex items-center px-4 py-2 rounded-md bg-slate-900 text-white">
                    Dashboard
                </a>
            @endauth
        </div>

        {{-- Mobile Toggle --}}
        <button
            @click="open = !open"
            class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-slate-600 hover:text-slate-900 focus:outline-none"
            aria-label="Toggle menu">

            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="md:hidden border-t border-slate-200 bg-white">

        <div class="px-6 py-6 space-y-6">

            {{-- Links --}}
            <nav class="flex flex-col gap-4 text-sm font-medium">
                <a @click="open = false"
                   href="{{ route('home') }}"
                   class="{{ is_active_route('home') }}">
                    Home
                </a>
                <a @click="open = false"
                   href="{{ route('about') }}"
                   class="{{ is_active_route('about') }}">
                    About
                </a>
                <a @click="open = false"
                   href="{{ route('contact') }}"
                   class="{{ is_active_route('contact') }}">
                    Contact
                </a>
                <a @click="open = false"
                   href="{{ route('enquiry.create') }}"
                   class="{{ is_active_route('enquiry.create') }}">
                    Staffing Requirement
                </a>
            </nav>

            <div class="border-t border-slate-200"></div>

            {{-- Actions --}}
            <div class="flex flex-col gap-3">
                @guest
                    <a @click="open = false"
                       href="{{ route('login') }}"
                       class="text-sm font-medium text-slate-700">
                        Login
                    </a>

                    <a @click="open = false"
                       href="{{ route('enquiry.create') }}"
                       class="inline-flex justify-center px-4 py-3 rounded-md bg-slate-900 text-white text-sm font-medium">
                        Submit Requirement
                    </a>
                @endguest

                @auth
                    <a @click="open = false"
                       href="{{ auth()->user()->role === 'super_admin'
                                ? route('dashboard')
                                : route('user.dashboard') }}"
                       class="inline-flex justify-center px-4 py-3 rounded-md bg-slate-900 text-white text-sm font-medium">
                        Go to Dashboard
                    </a>
                @endauth
            </div>

        </div>
    </div>
</header>
