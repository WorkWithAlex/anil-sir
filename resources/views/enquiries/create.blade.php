@extends('layouts.public.app')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-gradient-to-r from-brand-navy to-brand-teal text-white">
    <div class="max-w-7xl mx-auto px-6 pt-32 pb-24">

        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 text-xl font-bold uppercase tracking-wide text-brand-teal">
                {{-- <span class="w-2 h-2 rounded-full bg-brand-teal"></span> --}}
                Staffing Request
            </span>

            <h1 class="mt-6 text-5xl font-extrabold tracking-tight leading-tight">
                Submit a staffing requirement
            </h1>

            <p class="mt-6 text-lg text-slate-200 leading-relaxed">
                Share your hiring needs with complete clarity.
                A structured request helps us review, prioritize,
                and act faster without back-and-forth.
            </p>
        </div>

    </div>
</section>

{{-- CONTEXT + FORM --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-3 gap-16 items-start">

            {{-- LEFT: CONTEXT --}}
            <div class="lg:col-span-1">

                <h2 class="text-2xl font-semibold text-brand-navy">
                    What happens next?
                </h2>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Once you submit the requirement, it enters our
                    staffing workflow where it is reviewed,
                    tracked, and updated transparently.
                </p>

                <ul class="mt-8 space-y-5 text-sm text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2 h-2 rounded-full bg-brand-teal"></span>
                        Your requirement is securely recorded
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2 h-2 rounded-full bg-brand-teal"></span>
                        Status updates are tracked centrally
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-2 h-2 rounded-full bg-brand-teal"></span>
                        No emails or manual follow-ups needed
                    </li>
                </ul>

                <div class="mt-10 rounded-2xl border border-slate-200 bg-slate-50 p-6 text-sm text-slate-600">
                    <strong class="block text-brand-navy mb-1">
                        Tip
                    </strong>
                    The more detail you provide, the faster we can
                    understand and act on your requirement.
                </div>

            </div>

            {{-- RIGHT: FORM --}}
            <div class="lg:col-span-2">

                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-10 shadow-sm">
                    @include('enquiries._form')
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
