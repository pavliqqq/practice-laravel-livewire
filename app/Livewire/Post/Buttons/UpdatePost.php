<?php

namespace App\Livewire\Post\Buttons;

use App\Models\Post;
use Livewire\Component;

class UpdatePost extends Component
{
    public string $postTitle = '';
    public string $postId = '';

    public Post $post;

    public function render()
    {
        return view('livewire.post.buttons.update-post');
    }
}
