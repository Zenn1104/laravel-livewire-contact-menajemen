<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Show extends Component
{

    public Contact $contact;
    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }
    public function render()
    {
        return view('livewire.contact.show');
    }
}