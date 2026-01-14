{{-- ABOUT US --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Image + floating stats --}}
            <div class="relative">

                {{-- Main image --}}
                <div class="rounded-3xl overflow-hidden shadow-xl">
                    <img
                        src="{{ asset('images/working-staff-2.jpg') }}"
                        alt="Working staff"
                        class="w-full h-full object-cover"
                    >
                </div>

                {{-- Floating stat: top right --}}
                <div class="absolute top-0 right-0 bg-gradient-to-r from-brand-teal to-brand-navy text-white rounded-bl-2xl px-6 py-5 shadow-xl">
                    <p class="text-2xl font-bold">85%</p>
                    <p class="text-sm opacity-90">Process Efficiency</p>
                </div>

                {{-- Floating stat: bottom left --}}
                <div class="absolute bottom-0 left-0 bg-gradient-to-r from-brand-navy to-brand-teal text-white rounded-tr-2xl px-6 py-5 shadow-xl">
                    <p class="text-2xl font-bold">10K+</p>
                    <p class="text-sm opacity-90">Requirements Managed</p>
                </div>

                {{-- Floating stat: bottom right (bigger) --}}
                <div class="absolute bottom-0 right-0 bg-brand-teal text-brand-navy rounded-tl-3xl px-8 py-7 shadow-2xl bg-gradient-to-r from-brand-teal to-brand-navy text-white">
                {{-- <div class="absolute bottom-0 right-0 rounded-tl-3xl px-8 py-7 shadow-2xl bg-gradient-to-r from-brand-teal to-brand-navy text-white"> --}}
                    <p class="text-3xl font-extrabold">120%</p>
                    <p class="text-sm font-medium opacity-90">
                        Workflow Visibility
                    </p>
                </div>

            </div>

            {{-- Right: Content --}}
            <div>

                <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                    {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                    About Us
                </span>

                <h2 class="mt-6 text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-navy">
                    Innovating staffing workflows for a
                    <span class="text-brand-teal">better tomorrow</span>
                </h2>

                <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-xl">
                    We help organizations bring structure, visibility, and accountability
                    to staffing requirements. No scattered emails. No spreadsheets.
                    Just one reliable system built for clarity and scale.
                </p>

                {{-- Vision / Mission --}}
                <div class="mt-10 grid sm:grid-cols-2 gap-6">

                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 text-brand-teal mb-4">
                            👁️
                        </div>
                        <h3 class="text-lg font-semibold text-brand-navy">
                            Our Vision
                        </h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            To make every staffing requirement visible, owned,
                            and tracked from submission to closure.
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
                            To replace fragmented hiring communication with a
                            structured, transparent staffing workflow.
                        </p>
                    </div>

                </div>

                {{-- CTA --}}
                <div class="mt-10">
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-brand-navy text-white font-semibold hover:bg-brand-navy/90 transition">
                        More About Us →
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
