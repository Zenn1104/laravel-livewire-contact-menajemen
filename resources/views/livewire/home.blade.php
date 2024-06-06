<div class="card bg-base-200">
    <div class="card-body space-y-6">
        <div class="flex gap-1 justify-between">
            <input type="search" class="input input-bordered" wire:model.live="search" placeholder="Search Contact...">
            <button class="btn btn-primary" wire:click="$dispatch('createContact')">
                <x-tabler-plus class="size-5"/>
                <span>Add Contact</span>
            </button>
        </div>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square btn-success" wire:click="$dispatch('updateContact', {contact: {{ $contact->id }}})">
                                    <x-tabler-edit class="size-4"/>
                                </button>
                                <button class="btn btn-xs btn-square btn-error" wire:click="$dispatch('deleteContact', {contact: {{ $contact->id }}})">
                                    <x-tabler-trash class="size-4"/>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @livewire('contact.actions')
</div>