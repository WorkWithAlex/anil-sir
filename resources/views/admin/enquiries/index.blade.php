@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-6">

    <h1 class="text-2xl font-bold mb-6">Staffing Enquiries</h1>

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Company</th>
                <th class="p-2 border">Job Title</th>
                <th class="p-2 border">Contact</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Date</th>
                <th class="p-2 border">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($enquiries as $enquiry)
                <tr>
                    <td class="p-2 border">{{ $enquiry->company_name }}</td>
                    <td class="p-2 border">{{ $enquiry->job_title }}</td>
                    <td class="p-2 border">{{ $enquiry->email }}</td>
                    <td class="p-2 border capitalize">{{ $enquiry->status }}</td>
                    <td class="p-2 border">{{ $enquiry->created_at->format('d M Y') }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="text-blue-600">
                            View
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-4 text-center">No enquiries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $enquiries->links() }}
    </div>

</div>
@endsection
