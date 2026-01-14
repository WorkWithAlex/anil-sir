@extends('layouts.public.app')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-gradient-to-r from-brand-navy to-brand-teal text-white">
    <div class="max-w-7xl mx-auto px-6 pt-32 pb-24 grid lg:grid-cols-2 gap-16 items-center">

        <div class="max-w-xl">
            <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                About Us
            </span>

            <h1 class="mt-6 text-5xl font-extrabold tracking-tight leading-tight">
                Bringing structure and clarity
                <span class="block text-brand-teal">
                    to IT staffing workflows
                </span>
            </h1>

            <p class="mt-6 text-lg text-slate-200 leading-relaxed">
                Omni Outsource was built to eliminate chaos from hiring.
                We believe staffing operations should feel predictable,
                calm, and easy to manage.
            </p>
        </div>

        <div class="relative">
            <div class="rounded-2xl bg-white/5 backdrop-blur border border-white/10 shadow-2xl p-4">
                <img
                    {{-- src="https://placehold.co/600x420/3fa9b5/FFFFFF?text=Team+Collaboration" --}}
                    src="{{asset('images/team-colab.jpg')}}"
                    alt="Team collaboration"
                    class="rounded-2xl shadow-2xl"
                >
            </div>
        </div>

    </div>
</section>

{{-- MISSION --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div>
            <h2 class="text-4xl font-bold tracking-tight text-brand-navy">
                Our mission
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-xl">
                Our mission is to help companies collect, track, and manage
                staffing requirements in one clear system — without emails,
                spreadsheets, or endless follow-ups.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div class="group bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:bg-brand-teal hover:text-white transition">
                <div class="text-2xl mb-4">🧭</div>
                <h3 class="font-semibold text-lg">
                    Direction
                </h3>
                <p class="mt-3 text-sm group-hover:text-white/90">
                    A single source of truth for every hiring request.
                </p>
            </div>

            <div class="group bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:bg-brand-navy hover:text-white transition">
                <div class="text-2xl mb-4">📌</div>
                <h3 class="font-semibold text-lg">
                    Accountability
                </h3>
                <p class="mt-3 text-sm group-hover:text-white/90">
                    Clear ownership at every stage of the workflow.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- WHY WE BUILT IT --}}
<section class="py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-20">
            <h2 class="text-4xl font-bold tracking-tight text-brand-navy">
                Why we built Omni Outsource
            </h2>
            <p class="mt-6 text-lg text-slate-600">
                We saw the same problems repeated across teams, companies,
                and agencies — regardless of size.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">📥</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    Fragmented inputs
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Requirements arrive via emails, messages, and calls,
                    with no central visibility.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">👁️</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    Lack of visibility
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Teams cannot tell what is new, in progress,
                    or already completed.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">⏱️</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    Operational overhead
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Time is lost chasing updates instead of
                    hiring the right talent.
                </p>
            </div>

        </div>

    </div>
</section>

{{-- WHAT WE BELIEVE --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div>
            <h2 class="text-4xl font-bold tracking-tight text-brand-navy">
                What we believe
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                Internal tools should reduce stress, not create it.
                Good systems feel boring in the best way.
            </p>
        </div>

        <div class="space-y-6">
            <div class="group bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:bg-brand-navy hover:text-white transition">
                <h3 class="text-xl font-semibold">
                    Clarity over complexity
                </h3>
                <p class="mt-3 group-hover:text-white/90">
                    Every feature should remove confusion, not add it.
                </p>
            </div>

            <div class="group bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:bg-brand-teal hover:text-white transition">
                <h3 class="text-xl font-semibold">
                    Process before automation
                </h3>
                <p class="mt-3 group-hover:text-white/90">
                    A clear workflow matters more than clever automation.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- WHO IT IS FOR --}}
<section class="py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-20">
            <h2 class="text-4xl font-bold tracking-tight text-brand-navy">
                Who Omni Outsource is for
            </h2>
            <p class="mt-6 text-lg text-slate-600">
                Built for teams that value ownership, structure,
                and predictable execution.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">👥</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    HR teams
                </h3>
                <p class="mt-4 text-slate-600">
                    Centralize and manage staffing requirements
                    without spreadsheets.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">🏢</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    Recruitment agencies
                </h3>
                <p class="mt-4 text-slate-600">
                    Maintain visibility and accountability
                    across all client requests.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-10 border border-slate-200 hover:shadow-xl transition">
                <div class="text-3xl mb-6">🚀</div>
                <h3 class="text-xl font-semibold text-brand-navy">
                    Growing companies
                </h3>
                <p class="mt-4 text-slate-600">
                    Replace ad-hoc hiring with a
                    structured internal system.
                </p>
            </div>

        </div>

    </div>
</section>

{{-- FINAL CTA --}}
<section class="bg-brand-navy text-white py-28">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold tracking-tight">
            Build a calmer hiring process
        </h2>

        <p class="mt-6 text-lg text-slate-300 max-w-2xl mx-auto">
            Start collecting staffing requirements in a
            clear, structured, and reliable system.
        </p>

        <div class="mt-10">
            <a href="{{ route('enquiry.create') }}"
               class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-white text-brand-navy font-semibold hover:bg-brand-teal transition">
                Submit a staffing requirement
            </a>
        </div>

    </div>
</section>

@endsection
