<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Recipe;

class RecipeList extends Component
{
    public function delete (Recipe $recipe) {
        $recipe->delete();
    }
    public function render()
    {
        return view('livewire.admin.recipe-list', ['recipes'=> Recipe::all()],)->layout('livewire.layouts.admin');
    }
}
