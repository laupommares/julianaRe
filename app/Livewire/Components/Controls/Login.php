<?php

namespace App\Livewire\Components\Controls;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Login extends Component
{
    public $email;
    public $password;
    public $isAuthenticated;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];
    public function mount()
    {
        $this->isAuthenticated = Auth::check();
    }
    public function login()
    {
        $errores=$this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate(); // Regenerar la sesión para mayor seguridad
            
            $this->isAuthenticated = true; // ✅ ACTUALIZAR el estado de autenticación
            
            return redirect()->intended('/dashboard');
        }
    
        session()->flash('error', 'El usuario o la contraseña no son correctos.');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // O la ruta que prefieras después de cerrar sesión
    }
public function render()
{
    return view('livewire.components.controls.login')
        ->layout('livewire.layouts.auth'); // usa el layout limpio
}


}
