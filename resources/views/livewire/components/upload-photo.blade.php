<div>
    <x-input name="photo" type="file" wire:model.live="photo"
             class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-input>

    @if(!$errors->has('photo') && $photo || $oldPhotoPath)
        <img src="{{ $photo ? $photo->temporaryUrl() : asset("/storage/$oldPhotoPath") }}" alt="photo"
             width="50">
    @endif

    <div wire:loading wire:target="photo">
        Loading photo...
    </div>
</div>
