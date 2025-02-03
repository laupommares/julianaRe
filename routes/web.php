<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Livewire\Login;

Route::view('/', 'pages.home')->name('pages.home');
Route::view('/turnos', 'pages.turnos')->name('pages.turnos');
Route::view('/about-me', 'pages.about-me')->name('pages.about-me');
Route::view('/contactame', 'pages.contactame')->name('pages.contactame');
Route::view('/blog', 'pages.blog')->name('pages.blog');

Route::post('logout', [Login::class, 'logout'])->name('logout');
