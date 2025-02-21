<?php

namespace App\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Article;

class ShowResultsBlog extends Component
{
    public $results = [];

    protected $listeners = ['searchUpdated' => 'filterResults'];

    public function mount()
    {
        $this->loadAllArticles();
    }

    public function filterResults($searchText)
    {
        if (empty($searchText)) {
            $this->loadAllArticles();
        } else {
            $this->results = Article::where('title', 'LIKE', "%{$searchText}%")->get();
        }
    }
    public function getArticles()
    {
    return Article::all()->map(function ($article) {
        return [
            'title' => $article->title,
            'description' => Str::limit($article->excerpt, 100),
            'image' => $article->image_url,
            'link' => route('blog.show', ['slug' => $article->slug]) // URL correcta
        ];
    });
    }


    public function loadAllArticles()
    {
        $this->results = Article::all();
    }

    public function render()
    {
        return view('livewire.components.blog.show-results-blog');
    }
}
