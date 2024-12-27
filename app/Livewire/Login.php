<?php

namespace App\Livewire;

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
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Redirigir al usuario a la página deseada después de iniciar sesión
            return redirect()->route('pages.home'); 
        }

        // Si las credenciales son incorrectas, mostrar un error
        session()->flash('error', 'Las credenciales no son correctas.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // O la ruta que prefieras después de cerrar sesión
    }
    public function render()
    {
        return view('livewire.login'); // Asegúrate de que la vista sea correcta
    }
}
