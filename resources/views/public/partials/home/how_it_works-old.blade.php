{{-- HOW IT WORKS - OLD --}}
<section id="how-it-works" class="py-32">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-20">
            <span class="inline-block text-sm font-semibold uppercase tracking-wide text-brand-teal">
                The solution
            </span>
            
            <h2 class="mt-4 text-4xl font-bold tracking-tight text-brand-navy">
                A simple, structured staffing workflow
            </h2>
            
            <p class="mt-4 text-lg text-slate-600">
                Everything happens in one place with clear ownership,
                visibility, and progress tracking.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-12">
            
            @foreach([
                ['Submit requirement', 'Companies submit staffing needs through a guided form with all required details.'],
                ['Review and track', 'Admins review submissions, assign ownership, and track progress centrally.'],
                ['Stay updated', 'Everyone involved sees real-time status without emails or follow-ups.'],
                ] as $index => [$title, $desc])

            <div class="relative bg-white border border-slate-200 rounded-2xl p-10">
                <span class="absolute -top-4 left-10 bg-white px-3 text-sm font-semibold text-brand-teal">
                    Step {{ $index + 1 }}
                </span>
    
                <h3 class="text-xl font-semibold text-brand-navy">
                    {{ $title }}
                </h3>
    
                <p class="mt-4 text-slate-600 leading-relaxed">
                    {{ $desc }}
                </p>
            </div>
            
            @endforeach
            
        </div>
        
    </div>
</section>

{{-- HOW IT WORKS - NEW --}}

{{-- HOW IT WORKS --}}
<section id="how-it-works" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section header --}}
        <div class="text-center max-w-3xl mx-auto mb-8 md:mb-12 md:hidden">
            <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                The Solution
            </span>

            <h2 class="mt-6 text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-navy">
                A simple workflow from
                <span class="text-brand-teal">login to closure</span>
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                No complex tools. No learning curve. Just a clear, structured staffing process everyone can follow.
            </p>

            <a href="{{ route('enquiry.create') }}" class="inline-block mt-8 px-6 py-3 text-white bg-brand-teal rounded-lg shadow hover:bg-brand-navy transition">
                Submit Your Requirements
            </a>

        </div>

        {{-- Steps grid --}}
        <div class="grid lg:grid-cols-4 gap-8 items-stretch">

            <div>
                {{-- Step 1 --}}
                <div class="relative rounded-3xl p-10 border border-slate-200 shadow-sm mb-8 md:mb-12 bg-white hover:bg-gradient-to-br from-brand-navy to-brand-teal hover:text-white transition">
                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-80">
                        Step 1
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 mb-6 text-xl">
                        🔐
                    </div>

                    <h3 class="text-xl font-semibold">
                        Login or register
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed hover:text-white/90">
                        Create an account or log in securely to start submitting
                        and tracking staffing requirements.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="relative rounded-3xl p-10 border border-slate-200 shadow-sm mb-8 md:mb-12 bg-white hover:bg-gradient-to-br from-brand-navy to-brand-teal hover:text-white transition">
                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-80">
                        Step 2
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 mb-6 text-xl">
                        📝
                    </div>

                    <h3 class="text-xl font-semibold">
                        Submit requirement
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed hover:text-white/90">
                        Fill out a guided form with role details, skills,
                        experience, and timelines — all in one place.
                    </p>
                </div>
            </div>
            
            <div class="hidden lg:block lg:col-span-2">
                {{-- Section header --}}
                <div class="text-center max-w-3xl mx-auto mb-8 md:mb-12">
                    <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                        {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                        The Solution
                    </span>

                    <h2 class="mt-6 text-4xl sm:text-5xl font-extrabold tracking-tight text-brand-navy">
                        A simple workflow from
                        <span class="text-brand-teal">login to closure</span>
                    </h2>

                    <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                        No complex tools. No learning curve. Just a clear, structured
                        staffing process everyone can follow.
                    </p>

                    <a href="{{ route('enquiry.create') }}" class="inline-block my-4 px-6 py-3 text-white bg-brand-teal rounded-lg shadow hover:bg-brand-navy transition">
                        Submit Your Requirements
                    </a>

                    <img src="{{ asset('images/problem-solution.jpg') }}"
                         alt="How it works illustration"
                         class="w-full mt-3 rounded-xl shadow-lg">

                </div>
            </div>

            <div>
                {{-- Step 3 --}}
                <div class="relative rounded-3xl p-10 border border-slate-200 shadow-sm mb-8 md:mb-12 bg-white hover:bg-gradient-to-br from-brand-navy to-brand-teal hover:text-white transition">
                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-80">
                        Step 3
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 mb-6 text-xl">
                        📊
                    </div>

                    <h3 class="text-xl font-semibold">
                        Review & track
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed hover:text-white/90">
                        Admins review submissions, update status,
                        and manage ownership from a central dashboard.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="relative rounded-3xl p-10 border border-slate-200 shadow-sm mb-8 md:mb-12 bg-white hover:bg-gradient-to-br from-brand-navy to-brand-teal hover:text-white transition">
                    <span class="absolute top-6 right-6 text-sm font-semibold opacity-80">
                        Step 4
                    </span>

                    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-brand-teal/10 mb-6 text-xl">
                        🔔
                    </div>

                    <h3 class="text-xl font-semibold">
                        Stay updated
                    </h3>

                    <p class="mt-4 text-sm leading-relaxed hover:text-white/90">
                        Track progress and status changes in real time
                        without emails, calls, or follow-ups.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
