<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\PostForm;

class EditPost extends Component
{
    use WithFileUploads;

    public $image;
    public string $model;
    public $modelInstance;
    public $modelClass;
    public PostForm $form;
    
    public function mount(string $model, int $id)
    {
        // Validar que el modelo esté permitido
        $this->model = $model;
        $allowedModels = [
            'article' => \App\Models\Article::class,
            'recipe' => \App\Models\Recipe::class,
        ];
    
        if (!array_key_exists($model, $allowedModels)) {
            abort(404);
        }
    
        $this->modelClass = $allowedModels[$model];
        $this->modelInstance = $this->modelClass::findOrFail($id);
    
        $this->form = new PostForm($this, 'form');
        $this->form->setModel($this->modelInstance);
    }
    public function save()
    {
        if (!$this->form->modelInstance) {
            session()->flash('message', 'Error: No se encontró el contenido.');
            return;
        }

        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            $this->form->image = $this->image;
        }

        $this->form->update();

        // Redireccionar según el tipo
        $type = strtolower(class_basename($this->modelClass));
        return redirect()->route("dashboard.{$type}s");
        
    }
    public function generateSlug()
    {
        $this->form->generateSlug();
    }

    public function render()
    {
        return view('livewire.admin.edit-post')->layout('livewire.layouts.admin');
    }
}
