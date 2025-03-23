<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PostForm;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;

class EditPost extends Component
{
    
    use WithFileUploads;

    public $image;
    public PostForm $form;

    public function mount(Article $article)
    {
        $this->form = new PostForm($this, 'form');
        $this->form->setArticle($article);
    }
    
    public function save()
    {
        if (!$this->form->article) {
            session()->flash('message', 'Error: No se encontró el artículo.');
            return;
        }
    
        // Asegurar que la imagen siempre sea un archivo subido
        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            $this->form->image = $this->image;
        }
    
        $this->form->update();
    
        return redirect()->route('dashboard.articles');
    }
    
    public function generateSlug()
    {
        if (!$this->form->content) {
            $this->slug = '';
            return;
        }

        // Tomar las primeras 6 palabras del contenido
        $words = Str::of($this->form->content)->words(6, '');
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
        return view('livewire.admin.edit-post')->layout('livewire.layouts.admin');
    }
}
