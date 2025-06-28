<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $type;  // Definir la propiedad para recibir el valor
    public $name;
    public $lastName;
    public $email;
    public $issue;
    public $message;

    public function mount($type = 'short')  // Asignamos un valor por defecto
    {
        $this->type = $type;  // Asignar el valor recibido al componente
        $this->issue = request()->query('issue', '');

    }
    public function enviarFormulario()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'issue' => 'required|string',
            'message' => 'required|string|min:10',
        ]);
        // Construir el texto del mensaje
        $texto = "Hola! Soy {$this->name} ({$this->email}).\n"
            . "Asunto: {$this->issue}\n"
            . "Mensaje:\n{$this->message}";

        Mail::raw($texto, function ($mail) {
            $mail->to('laurapommares@gmail.com')
                ->from($this->email, $this->name)
                ->subject('Nuevo mensaje de contacto desde la web');
        });
    }

    public function render()
    {
        return view('livewire.pages.contact')->layout('livewire.layouts.app');
    }
}
