<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    public $user_id;
    public $name;
    public $phone;
    public $email;
    public $address;

    public ?Contact $contact;

    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        $this->user_id = $contact->user_id;
        $this->name = $contact->name;
        $this->phone = $contact->phone;
        $this->email = $contact->email;
        $this->address = $contact->address;
    }

    public function store()
    {
        $validated = $this->validate([
            'user_id' => 'required',
            'name' => 'required|max:100',
            'phone' => 'required|max:20',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        Contact::create($validated);
        $this->reset();
    }

    public function update()
    {
        $validated = $this->validate([
            'user_id' => 'required',
            'name' => 'required|max:100',
            'phone' => 'required|max:20',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        $this->contact->update($validated);
        $this->reset();
    }
}