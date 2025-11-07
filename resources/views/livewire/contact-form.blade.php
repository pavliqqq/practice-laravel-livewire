<div class="h-screen flex items-center justify-center">
    <div class="w-100">
        @if(session('success'))
            <div class="px-3 py-5 bg-emerald-400 w-full mb-10">
                <p class="text-center">{{ session('success') }}</p>
            </div>
        @endif
        <form wire:submit="save">
            <div class="flex flex-col gap-5">
                <x-input name="name" type="text" placeholder="Name" wire:model.live="name"
                         class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-input>

                <x-input name="email" type="email" placeholder="Email" wire:model.live="email"
                         class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-input>

                <x-input name="message" type="text" placeholder="Message" wire:model.live="message"
                         class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none"></x-input>

                <button type="submit"
                        class="border border-gray-500 bg-emerald-400 hover:bg-emerald-500 rounded p-3 w-full outline-none cursor-pointer">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
