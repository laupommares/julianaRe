<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateArticle extends Component
{

    use WithFileUploads;

    public $title, $content, $image;

    protected $rules = [
        'title' => 'required|min:5',
        'content' => 'required|min:10',
        'image' => 'nullable|image|max:1024', // 1MB max
    ];

    public function save()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('articles', 'public') : null;

        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Artículo creado con éxito.');
        return redirect()->route('admin.articles.index');
    }

    public function render()
    {
        return view('livewire.admin.create-article')->layout('livewire.layouts.admin');
    }
}
