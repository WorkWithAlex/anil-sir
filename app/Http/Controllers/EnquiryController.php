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

    public function privacyPolicy()
    {
        return view('public.privacy-policy');
    }

    public function termsConditions()
    {
        return view('public.terms-conditions');
    }

    public function store(Request $request)
    {
        // If user is NOT logged in, defer submission
        if (!auth()->check()) {
            session([
                'pending_enquiry' => $request->all()
            ]);

            return redirect()->route('login')
                ->with('info', 'Please login to submit your staffing requirement.');
        }

        // User is logged in → proceed normally
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

        $validated['user_id'] = auth()->id();

        $enquiry = Enquiry::create($validated);

        $this->sendNotifications($enquiry, $request);

        return redirect()->route('user.dashboard')
            ->with('success', 'Your staffing requirement has been submitted successfully.');
    }

    public function replay()
    {
        $data = session()->pull('pending_enquiry');

        if (!$data) {
            return redirect()->route('user.dashboard');
        }

        request()->merge($data);

        return $this->store(request());
    }
    
    protected function sendNotifications(Enquiry $enquiry, Request $request)
    {
        try {
            
            Mail::to(config('mail.admin_email'))
                ->send(new AdminEnquiryNotification($enquiry));

            Mail::to($request->email)
                ->send(new UserEnquiryAcknowledgement($enquiry));

        } catch (\Throwable $e) {
            logger()->error('Mail failed', [
                'error' => $e->getMessage()
            ]);
        }
        
    }

}
