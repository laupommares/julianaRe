<?php

namespace App\Livewire\Admin;

use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;
use Livewire\Volt\Compilers\Mount;

class EditArticle extends Component
{
    use WithFileUploads;

    public ?Article $article;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $slug ='';

    #[Validate('required')]
    public $description = ''; 

    #[Validate('required')]
    public $content = ''; 


    public $image;

    public function mount(Article $article){
        $this->title = $article->title;
        $this->description = $article->description;
        $this->content = $article->content;
        $this->slug = $article->slug;

        $this->article = $article;
    }

    public function save()
    {
        $this->validate();
    
        // Si se carga una nueva imagen, guardarla y obtener la ruta
        $imagePath = $this->image ? $this->image->store('articles', 'public') : $this->article->image;
    
        // Actualizar el artículo con el título, descripción, contenido y la imagen (si se ha subido)
        $this->article->update([
            'title' => $this->title,
            'slug' => $this->slug, // Agregar esta línea
            'description' => $this->description,
            'content' => $this->content,
            'image' => $imagePath,
        ]);
    
        if (!$this->article) {
            session()->flash('message', 'Error: No se encontró el artículo.');
            return;
        }    
        // Redirigir a la página de artículos después de guardar
        return redirect()->route('dashboard.articles');
    }
    
    public function generateSlug()
    {
        if (!$this->content) {
            $this->slug = '';
            return;
        }

        // Tomar las primeras 6 palabras del contenido
        $words = Str::of($this->content)->words(6, '');
        $baseSlug = Str::slug($words);
        $slug = $baseSlug;
        $count = 1;

        // Verificar si el slug ya existe y añadir un sufijo si es necesario
        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.admin.edit-article')->layout('livewire.layouts.admin');
    }
}
