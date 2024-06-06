<div>
    <input type="checkbox" class="modal-toggle" @checked($show)/>
    <div class="modal" role="dialog">
    <form class="modal-box" wire:submit="save">
        <h3 class="font-bold text-lg">Form Add Contact</h3>
        <div class="py-4">
            <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Name?</span>
                  <span class="label-text-alt">Top Right label</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full" wire:model="form.name"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Phone Number?</span>
                  <span class="label-text-alt">Top Right label</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full" wire:model="form.phone"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Email Address?</span>
                  <span class="label-text-alt">Top Right label</span>
                </div>
                <input type="email" placeholder="Type here" class="input input-bordered w-full" wire:model="form.email"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">Where is your Address?</span>
                  <span class="label-text-alt">Top Right label</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full" wire:model="form.address"/>
                <div class="label">
                </div>
              </label>
        </div>
        <div class="modal-action">
        <button class="btn" wire:click="closeModal">Close!</button>
        <button class="btn btn-primary" wire:click="closeModal">
            <x-tabler-check class="size-5"/>
            <span>Save</span>
        </button>
        </div>
    </form>
    </div>
</div>
