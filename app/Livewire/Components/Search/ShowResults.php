<?php

namespace App\Livewire\Components\Search;

use Livewire\Component;
use Livewire\Attributes\Url; 

class ShowResults extends Component
{
    public $results = [];
    public $modelClass;
    public $routeName;

    #[Url] // 🔹 Ahora la búsqueda se almacena en la URL correctamente
    public $searchText = '';

    protected $listeners = ['searchUpdated' => 'filterResults'];

    public function mount($modelClass, $routeName)
    {
        $this->modelClass = $modelClass;
        $this->routeName = $routeName;
        $this->filterResults($this->searchText); // 🔹 Restaurar búsqueda desde la URL
    }

    public function filterResults($searchText)
    {
        $this->searchText = $searchText;

        if (empty($searchText)) {
            $this->loadAll();
        } else {
            $this->results = $this->modelClass::where('title', 'LIKE', "%{$searchText}%")
                ->orWhere('description', 'LIKE', "%{$searchText}%")
                ->get();
        }
    }

    public function loadAll()
    {
        $this->results = $this->modelClass::all();
    }

    public function render()
    {
        return view('livewire.components.search.show-results', [
            'results' => $this->results,
            'routeName' => $this->routeName
        ]);
    }
}
