<ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content space-y-2">
    <li>
        <input type="text" class="input input-bordered" wire:model.live="search" placeholder="Cari Contact">
    </li>

    @foreach ($contacts as $contact)
        <li>
            <a href="{{ route('contact.show', $contact) }}" wire:navigate>
                <x-tabler-user class="size-5"/>
                <span>{{ $contact->name }}</span>
            </a>
        </li>
    @endforeach
</ul>