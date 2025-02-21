<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Recipes extends Component
{
    public function mount (){
        Recipes::all();
    }
    public function render()
    {
        return view('livewire.pages.recipes')->layout('livewire.layouts.app');
    }
}
