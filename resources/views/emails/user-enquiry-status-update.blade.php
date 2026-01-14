<x-email-layout
    emailTitle="Your staffing request has been updated"
    :emailSubtitle="'Current status: ' . ucfirst(str_replace('_', ' ', $enquiry->status))"
    logoUrl="{{ asset('images/full-logo-2.png') }}"
>
    @php
        $statusColor = $statusColors[$enquiry->status] ?? '#64748b';
    @endphp

    <p style="margin-top:0;">
        Hello <strong>{{ $enquiry->contact_person }}</strong>,
    </p>

    <p>
        There has been an update to the staffing requirement
        for <strong>{{ $enquiry->job_title }}</strong> that you
        submitted with us.
    </p>

    <table width="100%" cellpadding="0" cellspacing="0" style="margin:20px 0; background:#f8fafc; border-radius:8px; border:1px solid #e5e7eb;">
        <tr>
            <td style="padding:16px;">
                <p style="margin:0 0 6px; font-size:13px; color:#64748b;">
                    Job Title
                </p>
                <p style="margin:0; font-weight:600;">
                    {{ $enquiry->job_title }}
                </p>
            </td>
        </tr>
        <tr>
            <td style="padding:16px; border-top:1px solid #e5e7eb;">
                <p style="margin:0 0 6px; font-size:13px; color:#64748b;">
                    Status Updated To
                </p>
                <p style="margin:0;">
                    <span style="display:inline-block; padding:6px 12px; border-radius:999px; background:{{ $statusColor }}; color:#fff; font-size:12px; font-weight:600;">
                        {{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}
                    </span>
                </p>
            </td>
        </tr>

        @if($enquiry->admin_remarks)
        <tr>
            <td style="padding:16px; border-top:1px solid #e5e7eb;">
                <p style="margin:0 0 6px; font-size:13px; color:#64748b;">
                    Admin Remarks / Notes
                </p>
                <p style="margin:0; font-weight:600;">
                    {{ $enquiry->admin_remarks }}
                </p>
            </td>
        </tr>
        @endif

    </table>

    <p>
        You can log in to your dashboard at any time to track
        the progress or view additional details related to
        your requirement.
    </p>

    <p style="margin-top:24px;">
        Regards,<br>
        <strong>Omni Outsource Team</strong>
    </p>
</x-email-layout>
