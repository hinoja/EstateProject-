<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsAdminTest;

// FRONT
// _________________________________________________________


Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');


// BACK
// __________________________________________________________________


Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/index', DashboardController::class)->name('dashboard');
    Route::view('/users', 'dashboard.users')->middleware(['auth', IsAdminTest::class])->name('dashboard.users');
    Route::view('/messages', 'dashboard.message')->name('dashboard.messages');
    Route::view('/estate', 'dashboard.estate')->name('dashboard.estates');
});


// PROFILE
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// -------------------------------------------









require __DIR__ . '/auth.php';
