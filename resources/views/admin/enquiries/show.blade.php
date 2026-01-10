@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6">

    <h1 class="text-2xl font-bold mb-6">Enquiry Details</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-2 mb-6">
        <p><strong>Company:</strong> {{ $enquiry->company_name }}</p>
        <p><strong>Contact Person:</strong> {{ $enquiry->contact_person }}</p>
        <p><strong>Email:</strong> {{ $enquiry->email }}</p>
        <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
        <p><strong>Job Title:</strong> {{ $enquiry->job_title }}</p>
        <p><strong>Skills:</strong> {{ $enquiry->skills }}</p>
        <p><strong>Experience:</strong> {{ $enquiry->experience_required }}</p>
        <p><strong>Employment Type:</strong> {{ $enquiry->employment_type }}</p>
        <p><strong>Location:</strong> {{ $enquiry->location }}</p>
        <p><strong>Budget:</strong> {{ $enquiry->budget }}</p>
        <p><strong>Timeline:</strong> {{ $enquiry->timeline }}</p>
        <p><strong>Message:</strong> {{ $enquiry->message }}</p>
    </div>

    <form method="POST" action="{{ route('admin.enquiries.updateStatus', $enquiry) }}">
        @csrf
        @method('PATCH')

        <label class="block mb-2 font-semibold">Update Status</label>
        <select name="status" class="border p-2">
            <option value="new" @selected($enquiry->status === 'new')>New</option>
            <option value="contacted" @selected($enquiry->status === 'contacted')>Contacted</option>
            <option value="closed" @selected($enquiry->status === 'closed')>Closed</option>
        </select>

        <button type="submit" class="ml-4 px-4 py-2 bg-black text-white">
            Update
        </button>
    </form>

</div>
@endsection
