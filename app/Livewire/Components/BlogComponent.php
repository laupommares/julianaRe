<?php

namespace App\Livewire\Components;

use App\Models\Article;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        // Obtener todos los artículos sin paginación, ya que Alpine.js manejará la visualización
        $articles = Article::take(10)->get(); // Solo los primeros 10 artículos

        return view('livewire.components.blog-component', [
            'articles' => $articles,
        ]);
    }
}
