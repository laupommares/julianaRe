<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Components\Controls\Login;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\AboutMe;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Recipes;
use App\Livewire\Components\Search\ShowDetail;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\ContentList;
use App\Livewire\Admin\RecipeList;
use App\Livewire\Admin\CreatePost;
use App\Livewire\Admin\EditPost;
use App\Models\Article;
use App\Models\Recipe;
use App\Livewire\UserProfile;

Route::get('/', Home::class)->name('livewire.pages.home');
Route::get('/about-me', AboutMe::class)->name('livewire.pages.about-me');
Route::get('/contact', Contact::class)->name('livewire.pages.contact');
Route::get('/blog', Blog::class)->name('livewire.pages.blog');
Route::get('/recipes', Recipes::class)->name('livewire.pages.recipes');
Route::get('/dashboard', Dashboard::class)->name('livewire.admin.dashboard');
Route::get('/dashboard/articles', ContentList::class)->defaults('modelClass', Article::class)->name('dashboard.articles');
Route::get('/dashboard/{model}/create', CreatePost::class)->name('dashboard.create');


Route::get('/dashboard/recipes', ContentList::class)->defaults('modelClass', Recipe::class)->name('dashboard.recipes');
Route::get('/admin/edit/{model}/{id}', EditPost::class)
    ->name('dashboard.edit');

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
Route::get('/user-profile', UserProfile::class)->name('user-profile');
