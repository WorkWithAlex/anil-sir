@extends('layouts.public.app')

@section('content')

{{-- Hero --}}
<section class="max-w-7xl mx-auto px-6 pt-28 pb-20">
    <div class="max-w-3xl">
        <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
            About us
        </span>

        <h1 class="mt-4 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
            Bringing structure and clarity to IT staffing workflows
        </h1>

        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
            Omni Outsource was built to solve a simple but persistent problem: managing hiring requirements should not feel chaotic, fragmented, or manual.
        </p>
    </div>
</section>

{{-- Mission --}}
<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                Our mission
            </h2>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                Our mission is to help companies collect, track, and manage staffing requirements in one clear and structured system, without relying on emails, spreadsheets, or endless follow-ups.
            </p>
        </div>
    </div>
</section>

{{-- Why we built it --}}
<section class="py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                Why we built Omni Outsource
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                We have seen firsthand how hiring requirements get lost when teams rely on scattered tools and informal communication.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    Fragmented inputs
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Requirements arrive through emails, messages, and calls, with no single source of truth.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    Lack of visibility
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Teams struggle to understand what is new, what is in progress, and what has already been closed.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    Operational overhead
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Valuable time is spent on follow-ups and coordination instead of hiring the right talent.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- What we believe --}}
<section class="bg-slate-50 py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                What we believe
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Good internal tools should feel calm, predictable, and easy to trust.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white border border-slate-200 rounded-2xl p-10">
                <h3 class="text-xl font-semibold text-slate-900">
                    Clarity over complexity
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Systems should reduce mental load, not add to it. Every feature should serve a clear purpose.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-10">
                <h3 class="text-xl font-semibold text-slate-900">
                    Process before automation
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    A clear workflow matters more than automation alone. Structure comes first, scale comes next.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Who it is for --}}
<section class="py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-2xl mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                Who Omni Outsource is for
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Omni Outsource is designed for teams that value clarity and accountability in their hiring process.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    HR teams
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Collect and manage requirements without manual tracking or follow-ups.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    Recruitment agencies
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Centralize client requirements and maintain clear ownership and status.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-8">
                <h3 class="text-lg font-semibold text-slate-900">
                    Growing companies
                </h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Replace ad-hoc hiring processes with a structured internal workflow.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Closing CTA --}}
<section class="bg-slate-900 text-white py-28">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold tracking-tight">
            Build a calmer hiring process
        </h2>

        <p class="mt-6 text-lg text-slate-300 max-w-2xl mx-auto">
            Start collecting staffing requirements in a clear, structured, and reliable system.
        </p>

        <div class="mt-10">
            <a href="{{ route('enquiry.create') }}"
               class="inline-flex items-center justify-center px-8 py-4 rounded-lg bg-white text-slate-900 font-semibold">
                Submit a staffing requirement
            </a>
        </div>

    </div>
</section>

@endsection
