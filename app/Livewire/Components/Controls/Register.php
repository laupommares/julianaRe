<?php

namespace App\Livewire\Components\Controls;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'nullable|string|min:8',
    ];
    protected $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'last_name.required' => 'El apellido es obligatorio.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'Por favor, ingresa un correo válido.',
        'email.unique' => 'Este correo ya está registrado.',
        'password.required' => 'La contraseña es obligatoria.',
        'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        'password.confirmed' => 'Las contraseñas no coinciden.',
    ];
    
    public function register()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'last_name' => $this->last_name, 
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Aquí podrías redirigir al usuario o mostrar un mensaje de éxito
        session()->flash('message', 'Registro exitoso.');
        return redirect()->route('livewire.login'); // Redirigir a la página de login, por ejemplo
    }

    public function render()
    {
        return view('livewire.components.controls.register'); // Asegúrate de que esta vista exista
    }
}
