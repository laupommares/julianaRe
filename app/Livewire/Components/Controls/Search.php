<?php

namespace App\Livewire\Components\Controls;

use App\Models\Article;
use Livewire\Component;


class Search extends Component

{
    #[validate('required')]
    public $searchText = '';
    public $results = [];

    public function updatedSearchText($value){
        $this->reset('results');

        $searchTerm = "%{$value}%";

        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function render()
    {
        return view('livewire.components.controls.search');
    }
}
