<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/job/{job}/detail', [JobController::class, 'show']);

Route::get('/add-job', [JobController::class, 'create'])->middleware('auth');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->middleware('auth');
Route::patch('/job/{job}', [JobController::class, 'update'])->middleware('auth');
Route::post('/add-job', [JobController::class, 'store'])->middleware('auth');
Route::delete('/job/{job}/delete', [JobController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [JobController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile/{id}', [ProfileController::class, 'getUser'])->name('profile.user');

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/manage-users', [AdminController::class, 'manage_users'])->name('admin.manage-users');
});

// Authenticated Users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
// Socialite Logins
Route::get('/socialite/{driver}', [SocialLoginController::class, 'toProvider'])->where('driver', 'google|github');
Route::get('/auth/{driver}/login', [SocialLoginController::class, 'handleCallback']);
 
// Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
// // Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect'])->where('provider', 'google|github');
 
// Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

require __DIR__.'/auth.php';
