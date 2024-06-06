<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Home extends Component
{
    public $number = 1;
    public $search;

    public $listeners = ['reload' => '$refresh'];
    public function render()
    {
        return view('livewire.home', [
            'title' => 'Dashboard',
            'contacts' => Contact::where('user_id', auth()->id())->when($this->search, function ($contact){
                $contact->where("name", "like", "%{$this->search}%");
            })->get()
        ]);
    }
}