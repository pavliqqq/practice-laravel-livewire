<?php

namespace App\Livewire\Post\Buttons;

use App\Models\Post;
use Livewire\Component;

class DeletePost extends Component
{
    public int $postId;

    public function destroy()
    {
        Post::findOrFail($this->postId)->delete();
        $this->dispatch('post-deleted');
    }

    public function render()
    {
        return view('livewire.post.buttons.delete-post');
    }
}
