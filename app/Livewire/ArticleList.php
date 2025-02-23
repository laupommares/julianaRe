<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public function delete (Article $article) {
        $article->delete();
    }
    public function render()
    {
        return view('livewire.article-list', ['articles'=> Article::all()],)->layout('livewire.layouts.admin');
    }
}
