<div class ="card bg-base-200 max-w-sm">
    <form class="card-body" wire:submit="login">
        <h3 class="card-title">Welcome...</h3>
        <div class="py-4 space-y-2">
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-at class="size-5"/>
                <input type="email" class="grow" placeholder="Email" wire:model="email" autocomplete="email"/>
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-key class="size-5"/>
                <input type="password" class="grow" placeholder="Password" wire:model="password"/>
            </label>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5"/>
                <span>Login</span>
            </button>
        </div>
    </fo>
</div>
