<div class="page-wrapper">
    <div class="card">
        <div class="card-body space-y-4">
            <h3 class="card-title">Welcome, {{ auth()->user()->username }}</h3>
            <p>{{ config('app.name') }} is a simple application that is used to save your contacts. You can add contacts by clicking on the plus icon anywhere.
            </p>
            <p class="font-bold">Currently you have {{ auth()->user()->contacts->count() }} contacts.</p>
            <div class="card-actions">
                <button class="btn btn-primary" wire:click="$dispatch('createContact')">
                    <x-tabler-plus class="size-5"/>
                    <span>Add Contact</span>
                </button>
            </div>
        </div>
    </div>
    @livewire('contact.actions')
</div>