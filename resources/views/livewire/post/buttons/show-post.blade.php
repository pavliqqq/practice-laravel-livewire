<div>
    <x-modal title="Show" :name="'show post: ' . $postId">
        @slot('body')
            <livewire:post.show-post-content :post="$post"/>
        @endslot
    </x-modal>
    <button x-data x-on:click="$dispatch('open-modal', { name: 'show post: {{ $postId }}'})"
            class="border px-3 py-2 rounded bg-purple-400 hover:bg-purple-500 outline-none cursor-pointer w-full">Show
    </button>
</div>
