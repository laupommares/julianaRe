<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Redirigir al usuario a la página deseada después de iniciar sesión
            return redirect()->route('inicio'); // Cambia 'inicio' por la ruta a la que quieras redirigir
        }

        // Si las credenciales son incorrectas, mostrar un error
        session()->flash('error', 'Las credenciales no son correctas.');
    }

    public function render()
    {
        return view('livewire.login'); // Asegúrate de que la vista sea correcta
    }
}
