<?php

namespace App\Livewire\Components\Recipes;

use Livewire\Component;
use App\Models\Recipe;


class ShowResultsRecipes extends Component
{
    public $results = [];

    protected $listeners = ['searchUpdated' => 'filterResults'];

    public function mount()
    {
        $this->loadAllRecipes();
    }

    public function filterResults($searchText)
    {
        if (empty($searchText)) {
            $this->loadAllRecipes();
        } else {
            $this->results = Recipe::where('title', 'LIKE', "%{$searchText}%")
            ->orWhere('description', 'LIKE', "%{$searchText}%")
            ->get();
                }
    }
    public function getRecipes()
    {
    return Recipe::all()->map(function ($recipe) {
        return [
            'title' => $recipe->title,
            'description' => Str::limit($recipe->excerpt, 100),
            'image' => $recipe->image_url,
            'link' => route('blog.show', ['slug' => $recipe->slug]) // URL correcta
        ];
    });
    }
    public function loadAllRecipes()
    {
        $this->results = Recipe::all();
    }
    public function render()
    {
        return view('livewire.components.recipes.show-results-recipes');
    }
}
