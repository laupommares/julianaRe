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

    #[Url(as:'q', except:'', history:true)] 
    public $searchText = '';

    protected $listeners = ['searchUpdated' => 'filterResults'];

    public function mount($modelClass, $routeName)
    {
        $this->modelClass = $modelClass;
        $this->routeName = $routeName;
        logger("Model Class: " . $this->modelClass); 
    }
    public function filterResults($searchText)
    {
        $this->searchText = $searchText;
    }

    public function updatingSearchText()
    {
        $this->resetPage(); // 🔹 Resetea la paginación cuando cambia la búsqueda
    }

    public function render()
    {
        $query = $this->modelClass::query();
    
        if ($this->searchText !== '') {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->searchText . '%')
                  ->orWhere('description', 'like', '%' . $this->searchText . '%');
            });
        }
    
        return view('livewire.components.search.show-results', [
            'results' => $query->paginate(10),
        ]);
    }
    
    
}
