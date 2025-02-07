<?php

namespace App\Livewire\Components\Controls;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $searchText = '';
    public $results = [];
    public function mount()
    {
        // Al cargar la página, mostrar todos los artículos
        $this->results = Article::all();
    }

    public function updatedSearchText($value)
    {
        // Resetear los resultados cuando el texto de búsqueda cambia
        $this->reset('results');

        // Validación para asegurarse de que searchText no esté vacío
        if (empty($value)) {
            $this->results = [];
            return;
        }

        // Buscar artículos que coincidan con el título
        $searchTerm = "%{$value}%";
        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear(){
        $this->reset('results', 'searchText');

    }

    public function render()
    {
        return view('livewire.components.controls.search');
    }
}
