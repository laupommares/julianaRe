<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $description;
    public $link;
    public $slug;

    public function mount($image, $title, $description, $link, $slug)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->slug = $slug;

    }

    public function render()
    {
        return view('livewire.components.cards.card');
    }
}
