{{-- HOW IT WORKS --}}
<section id="how-it-works" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Mobile header --}}
        <div class="text-center max-w-3xl mx-auto mb-10 lg:hidden">
            <span class="inline-block text-xl font-bold uppercase tracking-wide text-brand-teal">
                The Solution
            </span>

            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-brand-navy">
                A simple workflow from
                <span class="text-brand-teal">login to closure</span>
            </h2>

            <p class="mt-5 text-lg text-slate-600 leading-relaxed">
                No complex tools. No learning curve. Just a clear,
                structured staffing process everyone can follow.
            </p>

            <a href="{{ route('enquiry.create') }}"
               class="inline-block mt-6 px-6 py-3 text-white bg-brand-teal rounded-lg shadow hover:bg-brand-navy transition">
                Submit Your Requirements
            </a>
        </div>

        {{-- Steps grid --}}
        <div class="grid lg:grid-cols-4 gap-8 items-stretch">

            {{-- Left steps --}}
            <div class="space-y-8">
                {{-- Step 1 --}}
                <div class="group relative rounded-3xl p-10 border border-slate-200 bg-white shadow-sm transition
                            hover:bg-gradient-to-br hover:from-brand-navy hover:to-brand-teal hover:text-white">

                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-70">
                        Step 1
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full
                                bg-brand-teal/10 mb-6 text-xl
                                group-hover:bg-white/15 transition">
                        🔐
                    </div>

                    <h3 class="text-xl font-semibold">
                        Login or register
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600 group-hover:text-white/90">
                        Create an account or log in securely to start submitting
                        and tracking staffing requirements.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="group relative rounded-3xl p-10 border border-slate-200 bg-white shadow-sm transition
                            hover:bg-gradient-to-br hover:from-brand-navy hover:to-brand-teal hover:text-white">

                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-70">
                        Step 2
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full
                                bg-brand-teal/10 mb-6 text-xl
                                group-hover:bg-white/15 transition">
                        📝
                    </div>

                    <h3 class="text-xl font-semibold">
                        Submit requirement
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600 group-hover:text-white/90">
                        Fill out a guided form with role details, skills,
                        experience, and timelines — all in one place.
                    </p>
                </div>
            </div>

            {{-- Center column (desktop) --}}
            <div class="hidden lg:flex lg:col-span-2 flex-col items-center text-center px-6">

                <span class="inline-block text-xl font-bold uppercase tracking-wide text-brand-teal">
                    The Solution
                </span>

                <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-brand-navy">
                    A simple workflow from
                    <span class="text-brand-teal">login to closure</span>
                </h2>

                <p class="mt-5 text-lg text-slate-600 leading-relaxed max-w-2xl">
                    No complex tools. No learning curve. Just a clear,
                    structured staffing process everyone can follow.
                </p>

                <a href="{{ route('enquiry.create') }}"
                   class="inline-block my-6 px-6 py-3 text-white bg-brand-teal rounded-lg shadow hover:bg-brand-navy transition">
                    Submit Your Requirements
                </a>

                <img
                    src="{{ asset('images/problem-solution.jpg') }}"
                    alt="How it works illustration"
                    class="w-full rounded-xl shadow-xl shadow-slate-300/30"
                >
            </div>

            {{-- Right steps --}}
            <div class="space-y-8">
                {{-- Step 3 --}}
                <div class="group relative rounded-3xl p-10 border border-slate-200 bg-white shadow-sm transition
                            hover:bg-gradient-to-br hover:from-brand-navy hover:to-brand-teal hover:text-white">

                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-70">
                        Step 3
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full
                                bg-brand-teal/10 mb-6 text-xl
                                group-hover:bg-white/15 transition">
                        📊
                    </div>

                    <h3 class="text-xl font-semibold">
                        Review & track
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600 group-hover:text-white/90">
                        Admins review submissions, update status,
                        and manage ownership from a central dashboard.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="group relative rounded-3xl p-10 border border-slate-200 bg-white shadow-sm transition
                            hover:bg-gradient-to-br hover:from-brand-navy hover:to-brand-teal hover:text-white">

                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-70">
                        Step 4
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full
                                bg-brand-teal/10 mb-6 text-xl
                                group-hover:bg-white/15 transition">
                        🔔
                    </div>

                    <h3 class="text-xl font-semibold">
                        Stay updated
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600 group-hover:text-white/90">
                        Track progress and status changes in real time
                        without emails, calls, or follow-ups.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
