<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryStatusUpdated;

class EnquiryAdminController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::latest()->paginate(10);
        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(Enquiry $enquiry)
    {
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function updateStatus(Request $request, Enquiry $enquiry)
    {
        $request->validate([
            'status' => 'required|in:New,In Review,Contacted,Closed',
        ]);

        $enquiry->update([
            'status' => $request->status,
            'admin_remarks' => $request->admin_remarks ?? $enquiry->admin_remarks,
        ]);

        // Send email notification to the user about status update
        Mail::to($enquiry->email)->send(new EnquiryStatusUpdated($enquiry));

        return redirect()->back()->with('success', 'Enquiry status updated.');
    }
}
