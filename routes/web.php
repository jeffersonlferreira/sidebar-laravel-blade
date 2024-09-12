<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', function () { return view('site.administration.users'); })->name('administration.users');
    Route::get('/groups', function () { return view('site.administration.groups'); })->name('administration.groups');
    Route::get('/channels', function () { return view('site.menssage.channels'); })->name('menssage.channels');
    Route::get('/models', function () { return view('site.menssage.models'); })->name('menssage.models');
    Route::get('/services', function () { return view('site.menssage.services'); })->name('menssage.services');
    Route::get('/teams', function () { return view('site.menssage.teams'); })->name('menssage.teams');
});

require __DIR__.'/auth.php';
