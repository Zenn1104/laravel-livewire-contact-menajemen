<?php

namespace App\Livewire\Contact;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public ContactForm $form;

    #[On('createContact')]
    public function createContact()
    {
        $this->show = true;
        
    }

    #[On('updateContact')]
    public function updateContact(Contact $contact)
    {
        $this->form->setContact($contact);
        $this->show = true;
    }

    #[On('deleteContact')]
    public function deleteContact(Contact $contact)
    {
        $contact->delete();
        $this->redirect(route('home'), navigate:true);
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function save()
    {
        $this->form->user_id = auth()->id();

        if(isset($this->form->contact)) {
            $this->form->update();
        } else {
            $this->form->store();
        }

        $this->dispatch('reload');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.contact.actions');
    }
}