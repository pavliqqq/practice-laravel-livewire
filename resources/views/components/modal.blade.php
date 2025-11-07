@props(['title', 'name'])

<div
    x-data="{ show : false, name : '{{ $name }}' }"
    x-show="show"
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false"
    x-cloak
    x-transition

    class="fixed z-50 inset-0">
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl h-[490px] pb-2.5 overflow-y-auto">
        <div class="relative px-4 py-3 border-b border-gray-300">
                <p class="text-2xl text-center">{{ $title }}</p>
            <button x-on:click="show = false" class="absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-center">
            {{ $body }}
        </div>
    </div>
</div>
