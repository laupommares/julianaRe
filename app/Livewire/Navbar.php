<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $menuOptions;
    public $isAuthenticated = false;
    protected $listeners = ['userLoggedIn' => 'updateAuthenticationStatus'];

    public function mount()
    {
        $this->isAuthenticated = Auth::check();
        // Definición de las opciones del menú
        $this->menuOptions = [
            'Inicio' => './',
            'Blog' => '/blog',
            'Turnos' => '/turnos',
            'Sobre mi' => '/about-me',
            'Contactame' => '/contactame'
        ];
    }
    public function updateAuthenticationStatus()
    {
        $this->isAuthenticated = Auth::check(); // Verificar si el usuario está autenticado
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}