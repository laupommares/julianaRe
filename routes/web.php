<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

Route::view('/', 'pages.home')->name('pages.home');
Route::post('logout', [Login::class, 'logout'])->name('logout');

