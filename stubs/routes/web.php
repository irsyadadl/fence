<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile\{ProfileInformationController, UpdateProfileController, UpdatePasswordController, UpdateProfileInformationController};

Route::view('/', 'welcome');
Route::get('/home', HomeController::class);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    
    Route::prefix('profile')->group(function () {
        Route::get('', ProfileInformationController::class)->name('profile.showInformation');
        Route::get('update-profile-information', UpdateProfileInformationController::class)->name('profile.information');
        Route::patch('update-profile', UpdateProfileController::class)->name('profile.update-information');
        Route::patch('update-password', UpdatePasswordController::class)->name('profile.update-password');
    });
});
