@extends('layouts.public.app')

@section('content')

{{-- <div class="max-w-6xl mx-auto py-12 px-6">
    <h1 class="text-3xl font-bold mb-4">IT Staffing Services</h1>
    <p class="mb-8">
        Share your hiring requirements and our team will get back to you.
    </p>
    @include('enquiries._form')
</div> --}}

<section class="max-w-7xl mx-auto px-6 pt-12 pb-24">

    <div class="grid lg:grid-cols-2 gap-16 items-center">

        {{-- Left: Content --}}
        <div class="max-w-xl">

            <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
                IT Staffing Workflow
            </span>

            <h1 class="mt-4 text-5xl sm:text-6xl font-extrabold tracking-tight text-slate-900">
                Collect and manage staffing requirements without chaos
            </h1>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                A simple internal system for companies to submit hiring needs and for admins to track, review, and manage them from one place.
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('enquiry.create') }}"
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-slate-900 text-white font-medium">
                    Submit staffing requirement
                </a>

                <a href="#how-it-works"
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-slate-300 text-slate-700 font-medium">
                    See how it works
                </a>
            </div>

        </div>

        {{-- Right: Visual placeholder --}}
        <div class="relative">
            <div class="h-80 rounded-2xl border border-slate-200 bg-slate-50"></div>
        </div>

    </div>

</section>

<section class="bg-slate-50 py-28">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section heading --}}
        <div class="max-w-2xl mb-16">
            <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
                The problem
            </span>
            <h2 class="mt-4 text-4xl font-bold tracking-tight text-slate-900">
                Hiring requirements get messy very quickly
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                When staffing needs are shared across emails, chats, and spreadsheets, visibility and accountability disappear.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            {{-- Primary problem --}}
            <div class="md:col-span-2 bg-white border border-slate-300 rounded-2xl p-10">
                <h3 class="text-xl font-semibold text-slate-900">
                    Requirements scattered across tools
                </h3>
                <p class="mt-4 text-base text-slate-600 leading-relaxed max-w-xl">
                    Hiring needs are shared via emails, WhatsApp messages, and spreadsheets, making them easy to miss, duplicate, or forget entirely.
                </p>
            </div>

            {{-- Secondary problems --}}
            <div class="flex flex-col gap-8">

                <div class="bg-white border border-slate-200 rounded-xl p-8">
                    <h3 class="text-lg font-semibold text-slate-900">
                        No clear ownership
                    </h3>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                        Teams do not know who is responsible for reviewing or closing each requirement.
                    </p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-8">
                    <h3 class="text-lg font-semibold text-slate-900">
                        Endless follow-ups
                    </h3>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                        HR spends time chasing updates instead of focusing on candidates.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<section id="how-it-works" class="py-32">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section heading --}}
        <div class="max-w-2xl mb-20">
            <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
                The solution
            </span>
            <h2 class="mt-4 text-4xl font-bold tracking-tight text-slate-900">
                A simple, structured staffing workflow
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Everything happens in one place, with clear ownership, visibility, and progress tracking.
            </p>
        </div>

        {{-- Steps --}}
        <div class="grid md:grid-cols-3 gap-12">

            <div class="relative bg-white border border-slate-200 rounded-2xl p-10">
                <span class="absolute -top-4 left-10 bg-white px-3 text-sm font-semibold text-slate-500">
                    Step 1
                </span>
                <h3 class="text-xl font-semibold text-slate-900">
                    Submit requirement
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Companies submit staffing needs through a clean, guided form with all required details.
                </p>
            </div>

            <div class="relative bg-white border border-slate-200 rounded-2xl p-10">
                <span class="absolute -top-4 left-10 bg-white px-3 text-sm font-semibold text-slate-500">
                    Step 2
                </span>
                <h3 class="text-xl font-semibold text-slate-900">
                    Review and track
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Admins review submissions, assign ownership, and track progress from a centralized dashboard.
                </p>
            </div>

            <div class="relative bg-white border border-slate-200 rounded-2xl p-10">
                <span class="absolute -top-4 left-10 bg-white px-3 text-sm font-semibold text-slate-500">
                    Step 3
                </span>
                <h3 class="text-xl font-semibold text-slate-900">
                    Stay updated
                </h3>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Everyone involved can see the current status without emails or follow-ups.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="bg-slate-900 text-white py-32">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold tracking-tight">
            Bring clarity to your staffing process
        </h2>

        <p class="mt-6 text-lg text-slate-300 max-w-2xl mx-auto">
            Start collecting and managing staffing requirements in a single, structured system.
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
