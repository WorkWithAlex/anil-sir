@extends('layouts.dashboard.app')

@section('title', 'Enquiry Details')

@section('content')

<div class="m-auto max-w-7xl space-y-10">

    {{-- Header --}}
    <div class="flex">
        <div class="flex-1">
            <h2 class="text-2xl font-semibold">
                {{ $enquiry->job_title }}
            </h2>
            {{ $enquiry->created_at->format('M. j, Y, g:i a') }}
        </div>
        <p class="flex-1 text-right">
            <a href="{{ route('admin.enquiries.index') }}"
               class="text-sm font-medium text-slate-600 hover:text-slate-900">
                ← Back to enquiries
            </a>
        </p>
    </div>

    @if(session('success'))
        <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-6 py-4 text-emerald-700">
            {{ session('success') }}
        </div>
    @endif

    {{-- Meta + Status --}}
    <div class="grid md:grid-cols-3 gap-6">

        {{-- Company info --}}
        <div class="md:col-span-2 bg-white border border-slate-200 rounded-2xl p-8 space-y-4">
            <h3 class="text-lg font-semibold">
                Company information
            </h3>

            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <span class="mb-2 block text-slate-500">Company name</span>
                    <span class="font-medium">{{ $enquiry->company_name }}</span>
                </div>
                
                <div>
                    <span class="mb-2 block text-slate-500">Contact person</span>
                    <span class="font-medium">{{ $enquiry->contact_person }}</span>
                </div>
                
                <div>
                    <span class="mb-2 block text-slate-500">Email</span>
                    <span class="font-medium">{{ $enquiry->email }}</span>
                </div>
                
                <div>
                    <span class="mb-2 block text-slate-500">Phone</span>
                    <span class="font-medium">{{ $enquiry->phone ?? '—' }}</span>
                </div>
            </div>
            <hr />
            <div class="grid md:grid-cols-1 gap-6 text-sm">
                <div>
                    <span class="mb-2 block text-slate-500">Remark</span>
                    <span class="font-medium">{{ $enquiry->remark ?? 'None...' }}</span>
                </div>
            </div>

        </div>

        {{-- Status card --}}
        <div class="bg-white border border-slate-200 rounded-2xl p-8">
            <h3 class="text-lg font-semibold mb-4">
                Status
            </h3>

            @php
                $statusClasses = match($enquiry->status) {
                    'New' => 'bg-amber-50 text-amber-700 border border-amber-200',
                    'In Review' => 'bg-blue-50 text-blue-700 border border-blue-200',
                    'Contacted' => 'bg-purple-50 text-purple-700 border border-purple-200',
                    'Closed' => 'bg-emerald-50 text-emerald-700 border border-emerald-200',
                    default => 'bg-slate-100 text-slate-700 border border-slate-200',
                };
            @endphp

            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium {{ $statusClasses }}">
                {{ ucfirst($enquiry->status) }}
            </span>

            <form method="POST"
                  action="{{ route('admin.enquiries.updateStatus', $enquiry) }}"
                  class="mt-6 space-y-4">
                @csrf
                @method('PATCH')

                <hr />

                <label class="block text-sm font-medium text-slate-700">
                    Change status
                </label>

                <select name="status" class="w-full rounded-lg border-slate-300 focus:border-slate-900 focus:ring-slate-900 text-sm">
                    <option value="New" @selected($enquiry->status === 'New')>New</option>
                    <option value="In Review" @selected($enquiry->status === 'In Review')>In Review</option>
                    <option value="Contacted" @selected($enquiry->status === 'Contacted')>Contacted</option>
                    <option value="Closed" @selected($enquiry->status === 'Closed')>Closed</option>
                </select>

                <button type="submit"
                        class="w-full inline-flex justify-center rounded-lg bg-slate-900 px-4 py-2.5 text-white text-sm font-medium hover:bg-slate-800">
                    Save status
                </button>

            </form>
        </div>

    </div>

    {{-- Requirement details --}}
    <div class="bg-white border border-slate-200 rounded-2xl p-10 space-y-8">

        <h3 class="text-lg font-semibold">
            Requirement details
        </h3>

        <div class="grid md:grid-cols-3 gap-6 text-sm">

            <div>
                <span class="mb-2 block text-slate-500">Job title</span>
                <span class="font-medium">{{ $enquiry->job_title }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Skills</span>
                <span class="font-medium">{{ $enquiry->skills ?? '—' }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Experience</span>
                <span class="font-medium">{{ $enquiry->experience_required ?? '—' }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Employment type</span>
                <span class="font-medium">{{ $enquiry->employment_type ?? '—' }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Location</span>
                <span class="font-medium">{{ $enquiry->location ?? '—' }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Budget</span>
                <span class="font-medium">{{ $enquiry->budget ?? '—' }}</span>
            </div>

            <div>
                <span class="mb-2 block text-slate-500">Timeline</span>
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
        <a href="{{ route('admin.enquiries.index') }}"
           class="text-sm font-medium text-slate-600 hover:text-slate-900">
            ← Back to enquiries
        </a>
    </div>

</div>

@endsection
