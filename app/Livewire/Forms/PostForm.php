<?php
namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Str;

class PostForm extends Form
{
    public $modelClass;
    public $modelInstance;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $slug = '';

    #[Validate('required')]
    public $description = ''; 

    #[Validate('required')]
    public $content = ''; 

    public $image;
    public $imagePath;

    public $published = false;
    public $notifications = [];
    public $allowNotifications = false;

    public function setModel($model)
    {
        $this->modelInstance = $model;
        $this->modelClass = get_class($model);
    
        $this->title = $model->title;
        $this->description = $model->description;
        $this->content = $model instanceof \App\Models\Recipe ? $model->instructions : $model->content;
        $this->slug = $model->slug;
        $this->published = $model->published;
        $this->notifications = $model->notifications ?? [];
    
        $this->allowNotifications = count($this->notifications) > 0;
    }
    

    public function store()
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        if (!$this->slug) {
            $this->generateSlug();
        }

        $folder = Str::plural(Str::kebab(class_basename($this->modelClass)));
        $imagePath = $this->image ? $this->image->store($folder, 'public') : null;

        $this->modelClass::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            $this->modelClass === \App\Models\Recipe::class ? 'instructions' : 'content' => $this->content,
            'image' => $imagePath,
            'published' => $this->published,
            'notifications' => $this->notifications,
        ]);        

        session()->flash('message', 'Contenido creado con éxito.');
    }

    public function update()
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            $folder = Str::plural(Str::kebab(class_basename($this->modelClass)));
            $imagePath = $this->image->store($folder, 'public');
        } else {
            $imagePath = $this->modelInstance->image ?? null;
        }

        $this->modelInstance->update([
            'title' => $this->title,
            'description' => $this->description,
            $this->modelClass === \App\Models\Recipe::class ? 'instructions' : 'content' => $this->content,
            'image' => $imagePath,
            'published' => $this->published,
            'notifications' => $this->notifications,
        ]);
        

        session()->flash('message', 'Contenido actualizado con éxito.');
    }

    public function generateSlug()
    {
        if (!$this->title) {
            $this->slug = '';
            return;
        }

        $baseSlug = Str::slug($this->title);
        $slug = $baseSlug;
        $count = 1;

        while ($this->modelClass::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        $this->slug = $slug;
    }
}
