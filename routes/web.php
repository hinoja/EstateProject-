<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

// FRONT
// _________________________________________________________


Route::view('/', 'welcome')->name('home');

// _________________________________________________________







// BACK
// __________________________________________________________________


Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users');
});

Route::get('/dashboard/message', function () {
    return view('dashboard.message');
})->name('message');
Route::get('/dashboard/terrain', function () {
    return view('dashboard.terrain');
})->name('terrain');

// PROFILE
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//
// Route::get('/dashboard/maison', function () {
//     return view('dashboard.maison');
// })->name('maison');



// Route::get('/dashboard/engin', function () {
//     return view('dashboard.engin');
// })->name('engin');

// Route::get('/dashboard/ajout', function () {
//     return view('dashboard.ajout');
// })->name('ajout');



// Route::get('/dashboard/lotissement', function () {
//     return view('dashboard.lotissement');
// })->name('lotissement');



// Route::get('/dashboard/profile', function () {
//     return view('dashboard.profile');
// })->name('profile');


// -------------------------------------------









require __DIR__ . '/auth.php';
