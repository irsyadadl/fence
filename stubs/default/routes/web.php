<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileInformationController;
use App\Http\Controllers\Profile\UpdatePasswordController;
use App\Http\Controllers\Profile\UpdateProfileController;
use App\Http\Controllers\Profile\UpdateProfileInformationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/home', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('', ProfileInformationController::class)->name('profile.showInformation');
        Route::get('update-profile-information', UpdateProfileInformationController::class)->name('profile.edit');
        Route::put('update-profile', UpdateProfileController::class)->name('profile.update');
        Route::put('update-password', UpdatePasswordController::class)->name('profile.update-password');
    });
});
