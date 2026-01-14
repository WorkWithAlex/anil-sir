@extends('layouts.public.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 pt-24 pb-16">
    <div class="max-w-3xl">

        <span class="inline-block text-sm font-semibold text-slate-500 uppercase tracking-wide">
            Staffing Request
        </span>

        <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900">
            Submit a staffing requirement
        </h1>

        <p class="mt-4 text-lg text-slate-600">
            Share your hiring needs with complete clarity so our team can review and act on them efficiently.
        </p>

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 pb-32">
    <div class="max-w-4xl mx-auto">

        @include('enquiries._form')

    </div>
</section>

@endsection
