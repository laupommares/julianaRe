<?php
namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;

class Blog extends Component
{
    public $isPreview=false;
    public $articles;

    public function mount()
    {
        // Obtener todos los artículos de la base de datos
        $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.pages.blog', ['articles' => $this->articles])->layout('livewire.layouts.app');
    }
}
