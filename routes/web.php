<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\User\EnquiryUserController;
use App\Http\Controllers\Admin\EnquiryAdminController;

use App\Models\Enquiry;

// Public pages
Route::get('/', [EnquiryController::class, 'home'])->name('home');
Route::get('/about', action: [EnquiryController::class, 'about'])->name('about');
Route::get('/privacy-policy', [EnquiryController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-conditions', [EnquiryController::class, 'termsConditions'])->name('termsConditions');
Route::get('/contact', [EnquiryController::class, 'contact'])->name('contact');
Route::get('/staffing-requirement', [EnquiryController::class, 'create'])->name('enquiry.create');
Route::post('/staffing-requirement', [EnquiryController::class, 'store'])->middleware('throttle:10,1')->name('enquiry.store');

Route::middleware('auth')->get('/enquiry/replay', [EnquiryController::class, 'replay'])->name('enquiry.replay');

// Profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes for managing enquiries
Route::middleware(['auth', 'verified', 'super_admin'])->group(function () {
    Route::get('/dashboard', [EnquiryAdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/enquiries', [EnquiryAdminController::class, 'index'])->name('admin.enquiries.index');
    Route::get('/dashboard/enquiries/{enquiry}', [EnquiryAdminController::class, 'show'])->name('admin.enquiries.show');
    Route::patch('/dashboard/enquiries/{enquiry}/status', [EnquiryAdminController::class, 'updateStatus'])->name('admin.enquiries.updateStatus');
    
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/my-dashboard', [EnquiryUserController::class, 'index'])->name('user.dashboard');
    Route::get('/my-dashboard/enquiries', [EnquiryUserController::class, 'index'])->name('user.dashboard');
    Route::get('/my-dashboard/enquiries/{enquiry}', [EnquiryUserController::class, 'show'])->name('user.enquiries.show');
});

if (app()->environment() != 'production') {
    require base_path('routes/mail-preview.php');
}

require __DIR__.'/auth.php';