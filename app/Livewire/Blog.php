<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;


class Blog extends Component
{
    public function render()
    {
        return view('pages.blog');
    }
}
