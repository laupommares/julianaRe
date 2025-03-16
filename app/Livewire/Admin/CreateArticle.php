<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
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
        $this->form->generateSlug(); // Llama al método dentro de PostForm
    }
    
    public function render()
    {
        return view('livewire.admin.create-article')->layout('livewire.layouts.admin');
    }
}
