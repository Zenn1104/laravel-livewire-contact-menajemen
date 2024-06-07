<?php

namespace App\Livewire\Partial;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public $search;

    public $listeners = ['reload' => '$refresh'];
    
    public function render()
    {
        return view('livewire.partial.sidebar', [
            'contacts' => Contact::where('user_id', auth()->id())->when($this->search, function ($contact) {
                return $contact->where("name", "like", "%{$this->search}%");
            })->orderBy('name')->get()
        ]);
    }
}