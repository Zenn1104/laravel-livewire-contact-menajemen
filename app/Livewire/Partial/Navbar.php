<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function logout()
    {
        Auth::logout();
        $this->redirect(route('login'), navigate:true);
    }
    public function render()
    {
        return view('livewire.partial.navbar');
    }
}