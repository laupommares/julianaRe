<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    
    public $image;
    public $form;
    public string $model;

    public $modelClass;

    public function mount(string $model)
    {
        $this->model = $model;
    
        $allowedModels = [
            'article' => \App\Models\Article::class,
            'recipe' => \App\Models\Recipe::class,
        ];
    
        if (!array_key_exists($model, $allowedModels)) {
            abort(404);
        }
    
        $this->modelClass = $allowedModels[$model];
    
        $this->form = new PostForm($this, 'form');
        $this->form->modelClass = $this->modelClass;
    }
    
    public function save()
    {
        $this->form->image = $this->image;
        $this->form->store();
    
        $type = strtolower(class_basename($this->modelClass));
        return redirect()->route("dashboard.{$type}s");
    }
    
    
    public function generateSlug()
    {
        $this->form->generateSlug(); // Llama al método dentro de PostForm
    }
    
    public function render()
    {
        return view('livewire.admin.create-post')->layout('livewire.layouts.admin');
    }
}
