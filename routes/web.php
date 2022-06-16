<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


// Route::get('/', [CustomAuthController::class, 'index'])->name('login');
// Route::view('/', 'mainlayout');
Route::view('/', 'index');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('profile', [CustomAuthController::class, 'profile'])->name('profile');
Route::get('notification_setting', [CustomAuthController::class, 'notification_setting'])->name('notification_setting');

 

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('custom-info', [CustomAuthController::class, 'custominfo'])->name('custom-info');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
