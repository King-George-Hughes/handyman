<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/add-job', [JobController::class, 'create'])->middleware('auth');
Route::get('/job/{job}/detail', [JobController::class, 'show']);
Route::get('/job/{job}/edit', [JobController::class, 'edit']);
Route::post('/add-job', [JobController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
