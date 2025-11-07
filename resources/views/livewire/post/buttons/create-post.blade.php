<div>
    <x-modal title="Create" name="create post">
        @slot('body')
            <livewire:post.form.create-post-form />
        @endslot
    </x-modal>
    <button x-data x-on:click="$dispatch('open-modal', { name: 'create post'})"
            class="border px-3 py-2 rounded bg-blue-400 hover:bg-blue-500 outline-none cursor-pointer w-full">Create
        new Post
    </button>
</div>
