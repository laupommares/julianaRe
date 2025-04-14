<?php

namespace App\Livewire\Components\Search;

use Livewire\Component;
use Livewire\Attributes\Url; // 🔹 Importación necesaria

class Search extends Component
{
    #[Url(as:'q', except:'', history:true)]
    public $searchText = '';

    #[Url]
    public $type = 'articles';

    public function updatedSearchText()
    {
        $this->dispatch('searchUpdated', searchText: $this->searchText);
    }

    public function clear()
    {
        $this->reset('searchText');
        $this->dispatch('searchUpdated', searchText: '');
    }

    public function render()
    {
        return view('livewire.components.search.search');
    }
}
