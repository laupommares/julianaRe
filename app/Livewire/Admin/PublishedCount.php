<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;

class PublishedCount extends Component
{
    public $count = 0;

    public function mount() {
        sleep(3);
        $this->count = Article::where('published', 1)->count();
    }

    public function placeholder(){
        return view('livewire.admin.placeholder',[
            'message' => 'Cargando...'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.published-count');
    }
}
