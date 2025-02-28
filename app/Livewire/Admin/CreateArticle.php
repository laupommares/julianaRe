<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{

    public $title = '';
    public $content = '';

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create($this->all());

        $this->redirect('/dashboard/aticles', navigate: true);

    }

    public function render()
    {
        return view('livewire.admin.create-article')->layout('livewire.layouts.admin');
    }
}
