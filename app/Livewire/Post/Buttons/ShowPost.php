<?php

namespace App\Livewire\Post\Buttons;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ShowPost extends Component
{
    public string $postTitle = '';
    public string $postId = '';

    public Post $post;

    public function render()
    {
        return view('livewire.post.buttons.show-post');
    }
}
