<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Aquí podrías redirigir al usuario o mostrar un mensaje de éxito
        session()->flash('message', 'Registro exitoso.');
        return redirect()->route('login'); // Redirigir a la página de login, por ejemplo
    }

    public function render()
    {
        return view('livewire.register'); // Asegúrate de que esta vista exista
    }
}
