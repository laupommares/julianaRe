<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutMe extends Component
{
    public function render()
    {
        return view('livewire.pages.about-me')->layout('livewire.layouts.app');
    }
}
