<?php

namespace App\Livewire;

use Livewire\Component;

class Rating extends Component
{
    public $user = '';
    public $message = '';

    public function submit($user, $message)
    {
        // Validar que ambos campos estén completos
        $this->validate([
            'user' => 'required|string|min:3',
            'message' => 'required|string|min:5',
        ]);

        // Solo agregar si ambos campos son válidos
        if (!empty($user) && !empty($message)) {
            session()->push('comments', [
                'user' => $user,
                'message' => $message,
            ]);
        }

        // Limpiar los campos después de enviar
        $this->reset(['user', 'message']);
    }

    public function render()
    {
        $comments = session()->get('comments', []);

        return view('livewire.rating', [
            'comments' => $comments,
        ]);
    }
}
