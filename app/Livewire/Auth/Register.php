<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $username;
    public $email;
    public $password;

    public function register()
    {
        $validate = $this->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create($validate);
        Auth::login($user);

        $this->redirect(route('home'), navigate:true);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}