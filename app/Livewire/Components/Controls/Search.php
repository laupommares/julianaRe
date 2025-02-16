<?php
namespace App\Livewire\Components\Controls;

use Livewire\Component;

class Search extends Component
{
    public $searchText = '';

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
        return view('livewire.components.controls.search');
    }
}
