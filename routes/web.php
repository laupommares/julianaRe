<?php

use App\Livewire\Admin\CreateArticle;
use App\Livewire\ArticleList;
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\AboutMe;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Recipes;
use App\Livewire\Components\Search\ShowDetail;

Route::get('/', Home::class)->name('livewire.pages.home');
Route::get('/about-me', AboutMe::class)->name('livewire.pages.about-me');
Route::get('/contact', Contact::class)->name('livewire.pages.contact');
Route::get('/blog', Blog::class)->name('livewire.pages.blog');
Route::get('/recipes', Recipes::class)->name('livewire.pages.recipes');
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/articles', ArticleList::class);
Route::get('/dashboard/articles/create', CreateArticle::class);


// Ruta para ver un artículo del blog
Route::get('/blog/{slug}', ShowDetail::class)
    ->name('blog.show')
    ->defaults('modelClass', App\Models\Article::class)
    ->defaults('routeBack', 'Blog');

// Ruta para ver una receta
Route::get('/recipes/{slug}', ShowDetail::class)
    ->name('recipes.show')
    ->defaults('modelClass', App\Models\Recipe::class)
    ->defaults('routeBack', 'Recetas');
Route::post('logout', [Login::class, 'logout'])->name('logout');
