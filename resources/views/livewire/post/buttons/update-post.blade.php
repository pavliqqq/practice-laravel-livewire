<div>
    <x-modal title="Update" :name="'update post: ' . $postId">
        @slot('body')
            <livewire:post.form.update-post-form :post="$post"/>
        @endslot
    </x-modal>
    <button x-data x-on:click="$dispatch('open-modal', { name: 'update post: {{ $postId }}' })"
            class="border px-3 py-2 rounded bg-green-400 hover:bg-green-500 outline-none cursor-pointer">Update
    </button>
</div>
