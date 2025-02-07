<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $description;
    public $link;

    public function mount($image, $title, $description, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
    }

    public function render()
    {
        return view('livewire.components.cards.card');
    }
}
