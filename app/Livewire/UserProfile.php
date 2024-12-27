<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public $isOpen = false; // Controlar la visibilidad del modal

    // Función para abrir el modal
    public function open()
    {
        $this->isOpen = true;
    }

    // Función para cerrar el modal
    public function close()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
