<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('dashboard');

    // Route for getting user information by user ID
Route::get('/get-user/{userid}', [UserController::class, 'getUser'])->name('getUser');

Route::resource('resume', ResumeController::class);
// Route::view('/resume', 'welcome');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

});
