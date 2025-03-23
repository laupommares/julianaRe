<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleList extends Component
{
    use WithPagination;

    public $showOnlyPublished = false;

    public function delete (Article $article) {
        $article->delete();
    }

    public function showAll(){
        $this->showOnlyPublished = false;
        $this->resetPage();
    }
    public function showPublished(){
        $this->showOnlyPublished = true;
        $this->resetPage();
    }
    
    public function render()
    {
        $query= Article::query();

        if ($this->showOnlyPublished){
            $query->where('published' , 1);
        }

        return view('livewire.admin.article-list', [
            'articles'=> $query->paginate(10),
        ],)->layout('livewire.layouts.admin');
    }
}
