<div class="page-wrapper">
    <div class="card card-compact devide-y-2 divide-base-300">
        <div class="card-body">
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Contact Name</div>
                    <div>{{ $contact->name }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Phone</div>
                    <div>{{ $contact->phone }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Email</div>
                    <div>{{ $contact->email }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Address</div>
                    <div>{{ $contact->address }}</div>
                </div>
        </div>
        <div class="card-body">
            <div class="card-actions justify-between">
                    <button class="btn"  wire:click="$dispatch('updateContact', {contact: {{ $contact->id }}})">
                        <x-tabler-edit class="size-5"/>
                        <span>Edit</span>
                    </button>
                    <button class="btn" wire:click="$dispatch('deleteContact', {contact: {{ $contact->id }}})">
                        <x-tabler-trash class="size-5"/>
                        <span>Delete</span>
                    </button>
                </div>
        </div>
    </div>
    @livewire('contact.actions')
</div>
