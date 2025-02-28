<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class CreateArticle extends Component
{

    use WithFileUploads;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $slug ='';

    #[Validate('required')]
    public $content = ''; 


    public $image;

    public function save()
    {
        $this->validate();

        Article::create($this->all());

        $imagePath = $this->image ? $this->image->store('articles', 'public') : null;

        session()->flash('message', 'Artículo creado con éxito.');

        $this->redirect('/dashboard/articles', navigate:true);
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
        return view('livewire.admin.create-article')->layout('livewire.layouts.admin');
    }
}
