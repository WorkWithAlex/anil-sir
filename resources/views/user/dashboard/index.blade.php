@extends('layouts.dashboard.app')

@section('PageTitle', config('app.name', 'Staffing App') . ' – My Dashboard')

@section('content')

<div class="m-auto max-w-7xl space-y-10">

    <div class="bg-white border border-slate-200 rounded-2xl p-8">
        <h1 class="text-2xl font-bold mb-6">My Enquiries</h1>
        <p class="mt-2 text-slate-600">
            Here is a quick overview of your staffing requirement enquiries.
        </p>
    </div>

    @if($enquiries->isEmpty())
        <p class="text-gray-600">You have not submitted any enquiries yet.</p>
    @else
        {{-- Metrics --}}
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white border border-slate-200 rounded-xl p-6">
                <span class="text-sm text-slate-500">Total enquiries</span>
                <div class="mt-2 text-3xl font-bold">
                    {{ count($enquiries) }}
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
        </div>
        
        <div class="overflow-x-auto bg-white rounded shadow mt-6">

            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-4 py-3 text-left">Company</th>
                        <th class="px-4 py-3 text-left">Job Title</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Submitted</th>
                        <th class="px-4 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($enquiries as $enquiry)
                        <tr class="border-t">
                            <td class="px-4 py-3">
                                <div class="font-medium text-slate-900">
                                    {{ $enquiry->company_name }}
                                </div>
                                <div class="text-slate-500 text-xs">
                                    {{ $enquiry->email }}
                                </div>
                            </td>
                            <td class="px-4 py-3">{{ $enquiry->job_title ?? '-' }}</td>
                            <td class="px-4 py-3">
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
                            <td class="px-4 py-3">
                                {{ $enquiry->created_at->format('d M Y') }}
                            </td>
                            <td class="px-4 py-3 text-left">
                                <a href="{{ route('user.enquiries.show', $enquiry) }}"
                                   class="text-sm font-medium text-slate-700 hover:text-slate-900">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
