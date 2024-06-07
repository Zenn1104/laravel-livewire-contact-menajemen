<div>
    <input type="checkbox" class="modal-toggle" @checked($show)/>
    <form class="modal" role="dialog" wire:submit="save">
    <div class="modal-box max-w-sm">
        <h3 class="font-bold text-lg">Form Add Contact</h3>
        <div class="py-4">
            <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Name?</span>
                </div>
                <input type="text" placeholder="Type here" @class(['input input-bordered w-full', 'input-error' => $errors->first('form.name')]) wire:model="form.name"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Phone Number?</span>
                </div>
                <input type="text" placeholder="Type here" @class(['input input-bordered w-full', 'input-error' => $errors->first('form.phone')]) wire:model="form.phone"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">What is your Email Address?</span>
                </div>
                <input type="email" placeholder="Type here" @class(['input input-bordered w-full', 'input-error' => $errors->first('form.email')]) wire:model="form.email"/>
                <div class="label">
                </div>
              </label>
              <label class="form-control">
                <div class="label">
                  <span class="label-text">Where is your Address?</span>
                </div>
                <textarea type="text" placeholder="Type here" @class(['textarea textaera-bordered w-full', 'textarea-error' => $errors->first('form.address')]) wire:model="form.address"></textarea>
              </label>
        </div>
        <div class="modal-action justify-between">
        <button class="btn btn-ghost" wire:click="closeModal">Close!</button>
        <button class="btn btn-primary" wire:click="closeModal">
            <x-tabler-check class="size-5"/>
            <span>Save</span>
        </button>
        </div>
    </form>
    </div>
</div>
