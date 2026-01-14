<x-email-layout
    emailTitle="We received your staffing requirement"
    emailSubtitle="Our team will review it shortly"
>
    <p style="margin-top:0;">
        Hello <strong>{{ $enquiry->contact_person }}</strong>,
    </p>

    <p>
        Thank you for sharing your staffing requirement with us.
        We have successfully received the details and our team
        will review them shortly.
    </p>

    <p>
        One of our consultants will get in touch with you soon
        to better understand your needs and discuss the next steps.
    </p>

    <p>
        In the meantime, you can be assured that your request
        is securely recorded and being processed.
    </p>

    <p style="margin-top:24px;">
        Regards,<br>
        <strong>Omni Outsource Team</strong>
    </p>
</x-email-layout>
