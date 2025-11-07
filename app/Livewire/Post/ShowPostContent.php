<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowPostContent extends Component
{
    public Post $post;

    #[On('post-updated.{post.id}')]
    public function refreshPost(): void
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.post.show-post-content', [
            'title' => $this->post->title,
            'content' => $this->post->content,
            'photo' => $this->post->photo,
        ]);
    }
}
