<?php
namespace App\Livewire\Components\Search;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ShowResults extends Component
{
    use WithPagination;

    public $modelClass;
    public $routeName;

    #[Url] 
    public $searchText = '';

    protected $listeners = ['searchUpdated' => 'filterResults'];

    public function mount($modelClass, $routeName)
    {
        $this->modelClass = $modelClass;
        $this->routeName = $routeName;
        logger("Model Class: " . $this->modelClass); 
    }

    public function updatingSearchText()
    {
        $this->resetPage(); // 🔹 Resetea la paginación cuando cambia la búsqueda
    }

    public function render()
    {
        return view('livewire.components.search.show-results', [
            'results' => $this->modelClass::paginate(10), // 🔹 Asegúrate de que aquí está la paginación
        ]);
    }
    
}
