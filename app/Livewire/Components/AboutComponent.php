<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AboutComponent extends Component
{
    public $type;  // Definir la propiedad para recibir el valor

    public function mount($type = 'short')  // Asignamos un valor por defecto
    {
        $this->type = $type;  // Asignar el valor recibido al componente
    }
    public function render()
    {
        return view('livewire.components.about-component');
    }
}
