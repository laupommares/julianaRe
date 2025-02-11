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
        $this->loadAllArticles();
    }

    public function updatedSearchText($value)
    {
        if (empty($value)) {
            $this->loadAllArticles(); // Restaurar todos los artículos si el input está vacío
            return;
        }

        $searchTerm = "%{$value}%";
        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear()
    {
        $this->reset(); // Borra todas las propiedades del componente
        $this->loadAllArticles(); // Asegurar que se restauren todas las cards
    }

    private function loadAllArticles()
    {
        $this->results = Article::all();
    }

    public function render()
    {
        return view('livewire.components.controls.search');
    }
}
