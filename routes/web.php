<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// dashboard
Route::get('/dashboard/maison', function () {
    return view('dashboard.maison');
})->name('maison');

Route::get('/dashboard/terrain', function () {
    return view('dashboard.terrain');
})->name('terrain');

Route::get('/dashboard/engin', function () {
    return view('dashboard.engin');
})->name('engin');

Route::get('/dashboard/ajout', function () {
    return view('dashboard.ajout');
})->name('ajout');

Route::get('/dashboard/utilisateur', function () {
    return view('dashboard.utilisateur');
})->name('utilisateur');

Route::get('/dashboard/lotissement', function () {
    return view('dashboard.lotissement');
})->name('lotissement');

Route::get('/dashboard/message', function () {
    return view('dashboard.message');
})->name('message');

Route::get('/dashboard/profile', function () {
    return view('dashboard.profile');
})->name('profile');