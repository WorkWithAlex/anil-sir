<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryUserController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('user.dashboard.index', compact('enquiries'));
    }

    public function show(Enquiry $enquiry)
    {
        abort_if($enquiry->user_id !== auth()->id(), 403);

        return view('user.dashboard.show', compact('enquiry'));
    }
}
