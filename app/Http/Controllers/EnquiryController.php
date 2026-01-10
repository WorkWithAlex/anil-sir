<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminEnquiryNotification;
use App\Mail\UserEnquiryAcknowledgement;

class EnquiryController extends Controller
{
    public function home()
    {
        
        return view('public.home');
    }
    public function about()
    {
        return view('public.about');
    }
    public function contact()
    {
        return view('public.contact');
    }

    public function create()
    {
        return view('enquiries.create');
    }

    public function store(Request $request)
    {

        if(auth()->id() == null) {
            redirect()->back()->with('error', 'You must be logged in to submit an enquiry.');
        }else{
            $request->merge(['user_id' => auth()->id()]);   
        }

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'job_title' => 'required|string|max:255',
            'skills' => 'nullable|string|max:255',
            'experience_required' => 'nullable|string|max:255',
            'employment_type' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $validated = collect($validated)->map(fn ($v) =>
            is_string($v) ? trim($v) : $v
        )->toArray();

        $enquiry = Enquiry::create($validated);
        
        try {
            Mail::to(config('mail.admin_email'))
                ->send(new AdminEnquiryNotification($enquiry));

            Mail::to($enquiry->email)
                ->send(new UserEnquiryAcknowledgement($enquiry));
        } catch (\Throwable $e) {
            logger()->error('Mail failed', [
                'error' => $e->getMessage()
            ]);
        }

        return redirect()->back()->with('success', 'Your staffing requirement has been submitted successfully.');
    }

}
