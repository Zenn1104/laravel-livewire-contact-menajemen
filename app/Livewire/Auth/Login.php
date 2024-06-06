<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $validate = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)){
            $this->redirect(route('home'), navigate:true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}