<x-email-layout
    emailTitle="New staffing requirement received"
    emailSubtitle="A new request has been submitted"
>

    <p><strong>Company:</strong> {{ $enquiry->company_name }}</p>
    <p><strong>Contact:</strong> {{ $enquiry->contact_person }}</p>
    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
    <p><strong>Phone:</strong> {{ $enquiry->phone ?? '—' }}</p>

    <hr style="margin:20px 0; border:none; border-top:1px solid #e5e7eb;">

    <p><strong>Role:</strong> {{ $enquiry->job_title }}</p>
    <p><strong>Skills:</strong> {{ $enquiry->skills ?? '—' }}</p>
    <p><strong>Experience:</strong> {{ $enquiry->experience_required ?? '—' }}</p>
    <p><strong>Type:</strong> {{ $enquiry->employment_type ?? '—' }}</p>
    <p><strong>Location:</strong> {{ $enquiry->location ?? '—' }}</p>
    <p><strong>Budget:</strong> {{ $enquiry->budget ?? '—' }}</p>
    <p><strong>Timeline:</strong> {{ $enquiry->timeline ?? '—' }}</p>

    @if($enquiry->message)
        <hr style="margin:20px 0; border:none; border-top:1px solid #e5e7eb;">
        <p><strong>Additional message:</strong></p>
        <p>{{ $enquiry->message }}</p>
    @endif

</x-email-layout>
