<div class="mt-5 w-100">
    @if(session('success'))
        <div x-data="{ show : true }"
             x-show="show"
             x-init="setTimeout(() => show = false, 3000)"
             x-cloak
             x-transition
             class="px-3 py-5 bg-emerald-400 w-full mb-5"
        >
            <p class="text-center">{{ session('success') }}</p>
        </div>
    @endif

    <div wire:loading wire:targer="update" class="mb-5">
        Updating post...
    </div>

    <form wire:submit="save">
        <div class="flex flex-col gap-2.5">
            <x-input name="title" type="text" placeholder="title.." wire:model.live="title"
                     class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-input>

            <x-text-area name="content" placeholder="content.." wire:model.live="content"
                         class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-text-area>

            <livewire:components.upload-photo :old-photo-path="$photo"></livewire:components.upload-photo>

            <button type="submit"
                    class="border border-gray-500 bg-emerald-400 hover:bg-emerald-500 rounded p-3 w-full outline-none cursor-pointer">
                Update
            </button>
        </div>
    </form>
</div>
