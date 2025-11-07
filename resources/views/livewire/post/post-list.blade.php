<div class="mx-auto w-150">
    <p class="text-center text-3xl my-10">Post list</p>
    <livewire:post.buttons.create-post/>
    <div class="flex flex-col gap-5 mt-10">
        @foreach($posts as $post)
            <livewire:post.post :post="$post" wire:key="{{ $post->id }}"/>
        @endforeach
    </div>
    <div class="mt-10">
        {{ $posts->links() }}
    </div>
</div>
