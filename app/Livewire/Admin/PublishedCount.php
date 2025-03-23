<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class PublishedCount extends Component
{
    public $count = 0;
    public $placeholderText= '';

    public function mount() {
        sleep(1);
        $this->count = Article::where('published', 1)->count();
    }

    public function placeholder(){
        return view('livewire.admin.placeholder',[
            'message' => $this->placeholderText,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.published-count');
    }
}
