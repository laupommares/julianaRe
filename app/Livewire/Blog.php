<?php
namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Blog extends Component
{
    public $articles;

    public function mount()
    {
        // Obtener todos los artículos de la base de datos
        $this->articles = Article::all();
    }

    public function render()
    {
        // Pasar la variable $articles explícitamente a la vista
        return view('pages.blog', ['articles' => $this->articles]);
    }
}
