<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public $name, $last_name, $email;
    public $appointments = [];

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;

        $this->appointments = $user->appointments ?? []; // si tenés la relación hecha
    }
    public function show()
    {
        return view('user-profile'); // asegurate de tener esta vista en resources/views/user-profile.blade.php
    }

    public function save()
    {
        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ]);
        session()->flash('message', 'Perfil actualizado con éxito');
    }

    public function render()
    {
        return view('livewire.user-profile')->layout('livewire.layouts.app');
    }
}
