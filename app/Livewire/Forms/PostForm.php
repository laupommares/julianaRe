<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;
use Illuminate\Support\Str;

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

    public $published = false;
    public $notifications = [];
    public $allowNotifications = false;

    public function setArticle(Article $article){
        $this->article = $article;
    
        $this->title = $article->title;
        $this->description = $article->description;
        $this->content = $article->content;
        $this->slug = $article->slug;
        $this->published = $article->published;
        $this->notifications = $article->notifications ?? [];

        $this-> allowNotifications = count($this->notifications) > 0;

    }
    
    public function store()
    {
        $this->validate();

        if(!$this->allowNotifications){
            $this->notifications =[];
        }

        // Generar slug si no se proporcionó
        if (!$this->slug) {
            $this->generateSlug();
        }

        $imagePath = $this->image ? $this->image->store('articles', 'public') : null;

        Article::create(([
            'title' => $this->title,
            'slug' => $this->slug, // Asegurar que se guarde el slug
            'description' => $this->description,
            'content' => $this->content,
            'image'=> $imagePath, // Guarda la ruta de la imagen existente
            'published' => $this->published,
            'notifications' => $this->notifications,
        ]));

        session()->flash('message', 'Artículo creado con éxito.');

    }

    public function generateSlug()
    {
        if (!$this->title) {
            $this->slug = '';
            return;
        }

        // Generar un slug basado en el título
        $baseSlug = Str::slug($this->title);
        $slug = $baseSlug;
        $count = 1;

        // Asegurar que el slug sea único
        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        $this->slug = $slug;
    }
    public function update() {
        $this->validate();

        if(!$this->allowNotifications){
            $this->notifications =[];
        }
        
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
            'published' => $this->published,
            'notifications' => $this->notifications,
        ]);
    
        session()->flash('message', 'Artículo actualizado con éxito.');
    }
    

}
