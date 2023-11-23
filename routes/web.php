<?php

use App\Livewire\Home;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/login', Login::class);

Route::view('/explorer', 'explorer');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
