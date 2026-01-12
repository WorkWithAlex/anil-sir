@extends('layouts.dashboard.app')

@section('PageTitle', config('app.name', 'Staffing App') . ' – Dashboard')

@section('content')

<div class="m-auto max-w-7xl space-y-10">

    {{-- Context --}}
    <div class="bg-white border border-slate-200 rounded-2xl p-8">
        <h2 class="text-2xl font-semibold">
            Staffing Enquiries
        </h2>
        <p class="mt-2 text-slate-600">
            Here is a quick overview of your staffing requirement enquiries.
        </p>
    </div>

    {{-- Metrics --}}
    <div class="grid md:grid-cols-4 gap-6">
        <div class="bg-white border border-slate-200 rounded-xl p-6">
            <span class="text-sm text-slate-500">Total enquiries</span>
            <div class="mt-2 text-3xl font-bold">
                {{ $enquiries->total() }}
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl p-6">
            <span class="text-sm text-slate-500">New enquiries</span>
            <div class="mt-2 text-3xl font-bold">
                {{ $enquiries->where('status', 'New')->count() }}
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl p-6">
            <span class="text-sm text-slate-500">In Review</span>
            <div class="mt-2 text-3xl font-bold">
                {{ $enquiries->where('status', 'In Review')->count() }}
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl p-6">
            <span class="text-sm text-slate-500">Closed</span>
            <div class="mt-2 text-3xl font-bold">
                {{ $enquiries->where('status', 'Closed')->count() }}
            </div>
        </div>
    </div>
    
    {{-- Table container --}}
    <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">

        {{-- Table --}}
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr class="text-left text-slate-600">
                    <th class="px-6 py-4 font-medium">Company</th>
                    <th class="px-6 py-4 font-medium">Job title</th>
                    <th class="px-6 py-4 font-medium">Status</th>
                    <th class="px-6 py-4 font-medium">Submitted</th>
                    <th class="px-6 py-4 font-medium">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($enquiries as $enquiry)
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-900">
                                {{ $enquiry->company_name }}
                            </div>
                            <div class="text-slate-500 text-xs">
                                {{ $enquiry->email }}
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            {{ $enquiry->job_title }}
                        </td>

                        <td class="px-6 py-4">
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
                        </td>

                        <td class="px-6 py-4 text-slate-600">
                            {{ $enquiry->created_at->format('d M Y') }}
                        </td>

                        <td class="px-6 py-4">
                            <a href="{{ route('admin.enquiries.show', $enquiry) }}"
                               class="text-sm font-medium text-slate-700 hover:text-slate-900">
                                View
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-slate-500">
                            No enquiries found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    {{-- Pagination --}}
    <div>
        {{ $enquiries->links() }}
    </div>

</div>

@endsection
