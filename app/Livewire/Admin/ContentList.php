<?php
namespace App\Livewire\Admin;

use App\Models\Article;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class ContentList extends Component
{
    use WithPagination;

    public $modelClass;  // Esta propiedad permitirá cambiar entre modelos

    public $showOnlyPublished = false;

    public function delete($id)
    {
        $modelClass = $this->modelClass;
    
        $item = $modelClass::findOrFail($id);
    
        $item->delete();
    }
    
    public function showAll(){
        $this->showOnlyPublished = false;
        $this->resetPage();
    }

    public function showPublished(){
        $this->showOnlyPublished = true;
        $this->resetPage();
    }
    
    public function render()
    {
        // Aquí hacemos que la consulta dependa de $modelClass
        $query = $this->modelClass::query();  // Esto manejará tanto Article como Recipe

        // Filtrar por publicaciones, si se ha activado la opción
        if ($this->showOnlyPublished) {
            $query->where('published', 1);
        }

        // Renderizamos la vista con la paginación de los artículos o recetas
        return view('livewire.admin.content-list', [
            'items' => $query->paginate(10),  // 'items' será genérico para ambos modelos
        ])->layout('livewire.layouts.admin');
    }
}
