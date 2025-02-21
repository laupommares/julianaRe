<?php

namespace App\Livewire\Components\Recipes;

use Livewire\Component;
use App\Models\Recipe;

class ShowRecipe extends Component
{
    public Recipe $recipe;

    public function mount($slug)
    {
        $this->recipe = Recipe::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.components.recipes.show-recipe')->layout('livewire.layouts.app');
    }
}
