<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Admin\EnquiryAdminController;

use App\Models\Enquiry;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();

    $enquiries = $user->role === 'admin'
        ? Enquiry::latest()->paginate(10)
        : Enquiry::where('user_id', $user->id)->latest()->paginate(10);

    return view('dashboard', compact('enquiries'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public pages
Route::get('/', [EnquiryController::class, 'home'])->name('home');
Route::get('/about', [EnquiryController::class, 'about'])->name('about');
Route::get('/contact', [EnquiryController::class, 'contact'])->name('contact');
Route::get('/staffing-requirement', [EnquiryController::class, 'create'])->name('enquiry.create');
Route::post('/staffing-requirement', [EnquiryController::class, 'store'])->middleware('throttle:10,1')->name('enquiry.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/enquiries', [EnquiryAdminController::class, 'index'])
        ->name('admin.enquiries.index');

    Route::get('/dashboard/enquiries/{enquiry}', [EnquiryAdminController::class, 'show'])
        ->name('admin.enquiries.show');

    Route::patch('/dashboard/enquiries/{enquiry}/status', [EnquiryAdminController::class, 'updateStatus'])
        ->name('admin.enquiries.updateStatus');
});



require __DIR__.'/auth.php';
