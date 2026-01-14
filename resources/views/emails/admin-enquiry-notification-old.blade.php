<h2>New Staffing Requirement</h2>

<p><strong>Company:</strong> {{ $enquiry->company_name }}</p>
<p><strong>Contact Person:</strong> {{ $enquiry->contact_person }}</p>
<p><strong>Email:</strong> {{ $enquiry->email }}</p>
<p><strong>Phone:</strong> {{ $enquiry->phone }}</p>

<hr>

<p><strong>Job Title:</strong> {{ $enquiry->job_title }}</p>
<p><strong>Skills:</strong> {{ $enquiry->skills }}</p>
<p><strong>Experience:</strong> {{ $enquiry->experience_required }}</p>
<p><strong>Employment Type:</strong> {{ $enquiry->employment_type }}</p>
<p><strong>Location:</strong> {{ $enquiry->location }}</p>
<p><strong>Budget:</strong> {{ $enquiry->budget }}</p>
<p><strong>Timeline:</strong> {{ $enquiry->timeline }}</p>

<hr>

<p><strong>Message:</strong></p>
<p>{{ $enquiry->message }}</p>
