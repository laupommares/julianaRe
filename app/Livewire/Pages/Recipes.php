<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Recipe;

class Recipes extends Component
{
    public $isPreview = false; // Define si es la versión reducida o completa
    public $recipes = []; // Propiedad para guardar las recetas

    public function mount()
    {
        // Si es preview, mostramos solo 4 recetas, sino mostramos todas
        $this->recipes = $this->isPreview
            ? Recipe::latest()->take(10)->get()
            : Recipe::all();
    }

    public function render()
    {
        return view('livewire.pages.recipes', [
            'recipes' => $this->recipes
        ])->layout('livewire.layouts.app');
    }
}
