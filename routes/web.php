<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/booking/details/{id}', [BookingController::class, 'detail'])->name('booking.details');

//Route::get('/dashboard', [Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //booking
    Route::get('/booking/{id}', \App\Livewire\BookingForm::class)->name('booking');
    Route::post('/booking/{id}', \App\Livewire\BookingForm::class)->name('booking.store');
    Route::get('/success', \App\Livewire\BookingSuccess::class)->name('booking.success');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirect');

Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback']);

require __DIR__ . '/auth.php';
