<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    
    public $image;
    public PostForm $form;

    public function save (){
        $this->form->image = $this->image;
        $this->form->store();   

        return redirect()->route('dashboard.articles');
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
