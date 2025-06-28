<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $description;
    public $link;
    public $slug;
    public $route;


    public function mount($image, $title, $description, $link, $slug, $route)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->slug = $slug;
        $this->route = $route;
    }

    public function render()
    {
        return view('livewire.components.card');
    }
}
