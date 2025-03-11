<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;



class CreateArticle extends Component
{
    use WithFileUploads;
    
    public $image;
    public PostForm $form;

    public function save (){
        $this->form->image = $this->image;
        $this->form->store();   

        $this->redirect('/dashboard/articles', navigate:true);
    }
    public function generateSlug()
    {
        if (!$this->form->content) {
            $this->form->slug = '';
            return;
        }
    
        // Tomar las primeras 6 palabras del contenido
        $words = Str::of($this->form->content)->words(6, '');
        $baseSlug = Str::slug($words);
        $slug = $baseSlug;
        $count = 1;
    
        // Verificar si el slug ya existe y añadir un sufijo si es necesario
        while (\App\Models\Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }
    
        $this->form->slug = $slug;
    }
    

    public function render()
    {
        return view('livewire.admin.create-article')->layout('livewire.layouts.admin');
    }
}
