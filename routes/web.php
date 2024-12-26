<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('/booking/details/{id}', [BookingController::class, 'detail'])->name('booking.details');

//Route::get('/dashboard', [Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    //booking
    Route::get('/booking/{id}', \App\Livewire\BookingForm::class)->name('booking');
    Route::post('/booking/{id}', \App\Livewire\BookingForm::class)->name('booking.store');
    Route::get('/success', \App\Livewire\BookingSuccess::class)->name('booking.success');

    //booking history
    Route::get('/history/{id}', [BookingController::class, 'history'])->name('booking.history');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirect');

Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback']);

require __DIR__ . '/auth.php';
