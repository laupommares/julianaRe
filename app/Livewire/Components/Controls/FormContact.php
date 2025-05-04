<?php

namespace App\Livewire\Components\Controls;

use Livewire\Component;

class FormContact extends Component
{
    public $type;  // Definir la propiedad para recibir el valor
    public $name;
    public $email;
    public $issue;
    public $message;


    public function mount($type = 'short')  // Asignamos un valor por defecto
    {
        $this->type = $type;  // Asignar el valor recibido al componente
    }
    public function enviarFormulario()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'issue' => 'required|not_in:""',
            'issue' => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        // Aquí podrías enviar un correo, guardar en DB, etc.
        // Ejemplo simulado:
        // ContactForm::create([...]);

        session()->flash('mensaje', 'Gracias por tu mensaje. ¡Te responderé pronto!');

        // Limpiar los campos
        $this->reset(['name', 'email', 'issue', 'message']);
    }

    public function render()
    {
        return view('livewire.components.controls.form-contact');
    }
}
