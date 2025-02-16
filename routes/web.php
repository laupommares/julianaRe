<?php

use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Livewire\Login;
use App\Livewire\Blog;

Route::get('/blog', Blog::class)->name('pages.blog');


Route::view('/', 'livewire.pages.home')->name('livewire.pages.home');
Route::view('/turnos', 'livewire.pages.turnos')->name('livewire.pages.turnos');
Route::view('/about-me', 'livewire.pages.about-me')->name('livewire.pages.about-me');
Route::view('/contactame', 'livewire.pages.contactame')->name('livewire.pages.contactame');
Route::view('/blog', 'livewire.pages.blog')->name('livewire.pages.blog');
Route::view('/recipes', 'livewire.pages.recipes')->name('livewire.pages.recipes');


Route::post('logout', [Login::class, 'logout'])->name('logout');
