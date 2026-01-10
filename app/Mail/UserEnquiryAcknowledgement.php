<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEnquiryAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public Enquiry $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this
            ->subject('We Have Received Your Staffing Requirement')
            ->view('emails.user-enquiry-acknowledgement');
    }
}
