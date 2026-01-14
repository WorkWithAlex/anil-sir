{{-- ABOUT US --}}
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Image + stats --}}
            <div class="relative">

                {{-- Main image --}}
                <div class="rounded-3xl overflow-hidden shadow-xl">
                    <img
                        {{-- src="https://placehold.co/520x640/edf6f7/0f172a?text=Team+Collaboration" --}}
                        src="{{ asset('images/working-staff.jpg') }}"
                        alt="Team collaboration"
                        class="w-full h-full object-cover"
                    >
                </div>

                {{-- Floating stat: top right --}}
                <div class="absolute top-6 right-6 bg-gradient-to-r from-brand-teal to-brand-navy text-white rounded-2xl px-5 py-4 shadow-lg">
                    <p class="text-2xl font-bold">85%</p>
                    <p class="text-sm opacity-90">Process Efficiency</p>
                </div>

                {{-- Floating stat: bottom left --}}
                <div class="absolute bottom-6 left-6 bg-gradient-to-r from-brand-navy to-brand-teal text-white rounded-2xl px-5 py-4 shadow-lg">
                    <p class="text-2xl font-bold">10K+</p>
                    <p class="text-sm opacity-90">Requirements Managed</p>
                </div>

            </div>

            {{-- Right: Content --}}
            <div>

                <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide text-brand-teal">
                    <span class="w-2 h-2 rounded-full bg-brand-teal"></span>
                    About Us
                </span>

                <h2 class="mt-6 text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-navy">
                    Innovating staffing workflows for a
                    <span class="text-brand-teal">better tomorrow</span>
                </h2>

                <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-xl">
                    We help organizations streamline how staffing requirements are collected,
                    tracked, and managed. Our focus is clarity, accountability, and speed,
                    without relying on emails, spreadsheets, or endless follow-ups.
                </p>

                {{-- Cards --}}
                <div class="mt-10 grid sm:grid-cols-2 gap-6">

                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 text-brand-teal mb-4">
                            👁️
                        </div>
                        <h3 class="text-lg font-semibold text-brand-navy">
                            Our Vision
                        </h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            To bring transparency and structure to staffing workflows so
                            every requirement is visible, owned, and acted upon.
                        </p>
                    </div>

                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 text-brand-teal mb-4">
                            🎯
                        </div>
                        <h3 class="text-lg font-semibold text-brand-navy">
                            Our Mission
                        </h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            To replace fragmented communication with a single, reliable
                            system for managing staffing requirements end-to-end.
                        </p>
                    </div>

                </div>

                {{-- CTA --}}
                <div class="mt-10">
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-brand-navy text-white font-semibold hover:bg-brand-navy/90 transition">
                        More About Us
                        <span>→</span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
