@extends('layouts.dashboard.app')

@section('title', 'Enquiry Details')

@section('content')

<div class="m-auto max-w-7xl space-y-10">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold">Enquiry Details</h1>
            <p class="text-sm text-gray-500">
                Submitted on {{ $enquiry->created_at->format('d M Y, h:i A') }}
            </p>
        </div>

        {{-- Status Badge --}}
        <span class=" px-4 py-1.5 rounded-full text-sm font-semibold
            @if(($enquiry->status ?? 'New') === 'New') bg-amber-50 text-amber-700 border border-amber-200
            @elseif(($enquiry->status ?? 'New') === 'In Review') bg-blue-50 text-blue-700 border border-blue-200
            @elseif(($enquiry->status ?? 'New') === 'Contacted') bg-purple-50 text-purple-700 border border-purple-200
            @elseif(($enquiry->status ?? 'New') === 'Closed') bg-emerald-50 text-emerald-700 border border-emerald-200
            @else bg-slate-100 text-slate-700 border border-slate-200
            @endif
        ">
            {{ ucfirst(str_replace('_', ' ', $enquiry->status && $enquiry->status !== 'new' ? $enquiry->status : 'pending')) }}
        </span>
    </div>

    @if(session('success'))
        <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-6 py-4 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    {{-- Meta + Status --}}
    <div class="grid md:grid-cols-5 gap-6">

        {{-- Company info --}}
        <div class="md:col-span-3 bg-white border border-slate-200 rounded-2xl p-8 space-y-4">
            <h3 class="text-lg font-semibold">
                Company information
            </h3>

            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <span class="block text-slate-500">Company name</span>
                    <span class="font-medium">{{ $enquiry->company_name }}</span>
                </div>

                <div>
                    <span class="block text-slate-500">Contact person</span>
                    <span class="font-medium">{{ $enquiry->contact_person }}</span>
                </div>

                <div>
                    <span class="block text-slate-500">Email</span>
                    <span class="font-medium">{{ $enquiry->email }}</span>
                </div>

                <div>
                    <span class="block text-slate-500">Phone</span>
                    <span class="font-medium">{{ $enquiry->phone ?? '—' }}</span>
                </div>
            </div>
        </div>

        {{-- Status card --}}
        <div class="md:col-span-2 bg-white border border-slate-200 rounded-2xl p-8">

            <h3 class="text-lg font-semibold mb-4 space-y-4">
                Remark
            </h3>

            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium ">
                {{ $enquiry->admin_remarks ?? 'None...' }}
            </span>
            

        </div>

    </div>

    {{-- Requirement details --}}
    <div class="bg-white border border-slate-200 rounded-2xl p-10 space-y-8">

        <h3 class="text-lg font-semibold">
            Requirement details
        </h3>

        <div class="grid md:grid-cols-3 gap-6 text-sm">

            <div>
                <span class="block text-slate-500">Job title</span>
                <span class="font-medium">{{ $enquiry->job_title }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Skills</span>
                <span class="font-medium">{{ $enquiry->skills ?? '—' }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Experience</span>
                <span class="font-medium">{{ $enquiry->experience_required ?? '—' }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Employment type</span>
                <span class="font-medium">{{ $enquiry->employment_type ? str_replace('_', ' ', ucfirst($enquiry->employment_type)) : '—' }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Location</span>
                <span class="font-medium">{{ $enquiry->location ?? '—' }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Budget</span>
                <span class="font-medium">{{ $enquiry->budget_currency }} {{ $enquiry->budget_amount }} {{ ucfirst($enquiry->budget_type) }}</span>
            </div>

            <div>
                <span class="block text-slate-500">Timeline</span>
                <span class="font-medium">{{ $enquiry->timeline ?? '—' }}</span>
            </div>

        </div>

        <div>
            <span class="block text-slate-500 text-sm mb-2">
                Additional message
            </span>
            <p class="text-slate-700 leading-relaxed">
                {{ $enquiry->message ?? '—' }}
            </p>
        </div>

    </div>

    {{-- Back --}}
    <div class="text-right">
        <a href="{{ route('user.dashboard') }}"
           class="text-sm font-medium text-slate-600 hover:text-slate-900">
            ← Back to enquiries
        </a>
    </div>

</div>

@endsection
