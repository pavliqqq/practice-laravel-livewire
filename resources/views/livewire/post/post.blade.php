<div>
    <div class="flex flex-wrap justify-between items-center">
        <div class="break-words max-w-[40%]">
            {{ $post->title }}
        </div>
        <div class="flex gap-5">
            <livewire:post.buttons.show-post :postId="$post->id" :post="$post" :key="'show ' . $post->id"/>
            <livewire:post.buttons.update-post :postId="$post->id" :post="$post" :key="'update ' . $post->id" @post-updated="$refresh"/>
            <livewire:post.buttons.delete-post :postId="$post->id" :key="'delete ' . $post->id"/>
        </div>
    </div>
</div>
