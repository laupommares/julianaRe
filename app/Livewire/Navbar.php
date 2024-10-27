<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $menuOptions;

    public function mount()
    {
        // Definición de las opciones del menú
        $this->menuOptions = [
            'Inicio' => './',
            'Turnos' => '/turnos',
            'Sobre mi' => '/sobre-mi',
            'Contactame' => '/contactame'
        ];
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}