<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;

class PostForm extends Form
{
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
    public $imagePath; // Para la imagen guardada

    public function setArticle(Article $article){
        $this->article = $article;
    
        $this->title = $article->title;
        $this->description = $article->description;
        $this->content = $article->content;
        $this->slug = $article->slug;
    }
    

    public function store()
    {
        $this->validate();
            // Asignar la ruta de la imagen antes de usarla
        $imagePath = $this->image ? $this->image->store('articles', 'public') : null;

        Article::create($this->only([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            $this->imagePath = $article->image, // Guarda la ruta de la imagen existente
        ]));

        session()->flash('message', 'Artículo creado con éxito.');

    }
    public function update() {
        $this->validate();
    
        // Si el usuario subió una nueva imagen, la guardamos
        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            $imagePath = $this->image->store('articles', 'public');
        } else {
            $imagePath = $this->article->image; // Mantener la imagen anterior si no se sube una nueva
        }
    
        $this->article->update([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'image' => $imagePath,
        ]);
    
        session()->flash('message', 'Artículo actualizado con éxito.');
    }
    

}
