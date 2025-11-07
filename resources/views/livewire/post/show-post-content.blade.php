<div class="mt-5 w-100">
    @if($photo)
    <div class="flex justify-center items-center mb-5">
        <img src="{{ asset("/storage/$photo") }}" alt="photo" width="100">
    </div>
    @endif

    <div class="break-words text-center">
        <p class="font-semibold text-2xl">{{ $post->title }}</p>
    </div>

    <div class="break-words mt-5">
        {{ $post->content }}
    </div>
</div>
