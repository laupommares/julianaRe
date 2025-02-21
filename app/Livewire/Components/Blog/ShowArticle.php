<?php

namespace App\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Article;

class ShowArticle extends Component
{
    public Article $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.components.blog.show-article')->layout('livewire.layouts.app');
    }
}
