<footer class="bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid md:grid-cols-5 gap-12">

            {{-- Brand --}}
            <div class="md:col-span-3 flex flex-row items-top gap-6 space-y-4">
                <img src="{{ asset('images/full-logo-2.png') }}" alt="Staffing App Logo" class="max-w-[200px] ">
                <div class="">
                    <h3 class="text-lg font-semibold text-slate-900">
                        {{env('APP_NAME', 'Omni Outsource')}}
                    </h3>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed max-w-sm">
                        A simple internal system to collect, track, and manage staffing requirements without emails, spreadsheets, or chaos. Designed for small to medium-sized businesses looking to streamline their staffing processes. The easy way to get from requirement to closure.
                    </p>
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h4 class="text-sm font-semibold text-slate-900 uppercase tracking-wide">
                    Product
                </h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="text-slate-600 hover:text-slate-900">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-slate-600 hover:text-slate-900">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-slate-600 hover:text-slate-900">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('enquiry.create') }}" class="text-slate-600 hover:text-slate-900">
                            Submit Requirement
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h4 class="text-sm font-semibold text-slate-900 uppercase tracking-wide">
                    Legal
                </h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li>
                        <a href="{{ route('privacyPolicy') }}" class="text-slate-600 hover:text-slate-900">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('termsConditions') }}" class="text-slate-600 hover:text-slate-900">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Bottom strip --}}
        <div class="mt-16 pt-8 border-t border-slate-200 text-sm text-slate-500 flex flex-col sm:flex-row justify-between gap-4">
            <span>
                © {{ date('Y') }} {{ env('APP_NAME', 'Omni Outsource') }}. All rights reserved.
            </span>
            <span>
                Designed & Developed By <a href='https://roxstonitsolutions.com/' target="_blank">Roxston IT Solutions</a>
            </span>
        </div>

    </div>
</footer>
