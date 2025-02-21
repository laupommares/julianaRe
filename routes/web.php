<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\AboutMe;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Recipes;
use App\Livewire\Components\Blog\ShowArticle;
use App\Livewire\Components\Recipes\ShowRecipe;

Route::get('/', Home::class)->name('livewire.pages.home');
Route::get('/about-me', AboutMe::class)->name('livewire.pages.about-me');
Route::get('/contact', Contact::class)->name('livewire.pages.contact');
Route::get('/blog', Blog::class)->name('livewire.pages.blog');
Route::get('/recipes', Recipes::class)->name('livewire.pages.recipes');
Route::get('/blog/{slug}', ShowArticle::class)->name('blog.show');


Route::post('logout', [Login::class, 'logout'])->name('logout');
