<?php

use App\Models\Enquiry;
use App\Mail\AdminEnquiryNotification;
use App\Mail\UserEnquiryAcknowledgement;
use App\Mail\EnquiryStatusUpdated;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/preview/admin-enquiry', function () {
    $enquiry = Enquiry::latest()->first()
    ?? Enquiry::factory()->make([
        'status' => 'in_progress',
    ]);
    return new AdminEnquiryNotification($enquiry);
});

Route::get('/preview/user-ack', function () {
    $enquiry = Enquiry::latest()->first()
    ?? Enquiry::factory()->make([
        'status' => 'in_progress',
    ]);
    return new UserEnquiryAcknowledgement($enquiry);
});

Route::get('/preview/status-updated', function () {
    $enquiry = Enquiry::latest()->first()
    ?? Enquiry::factory()->make([
        'status' => 'in_progress',
    ]);
    return new EnquiryStatusUpdated($enquiry);
});
