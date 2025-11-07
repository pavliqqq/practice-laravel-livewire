<?php

namespace App\Livewire\Post\Form;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdatePostForm extends Component
{
    public Post $post;

    #[Validate]
    public string $title = '';
    #[Validate]
    public string $content = '';
    public $photo;

    protected function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'min:2',
                'max:256',
            ],
            'content' => [
                'required',
                'string',
                'min:5'
            ],
        ];
    }

    public function mount()
    {
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->photo = $this->post->photo;
    }

    #[On('file-uploaded')]
    public function handlePhoto($photoPath)
    {
        $this->photo = $photoPath;
    }

    public function save()
    {
        $validated = $this->validate();

        if ($this->photo) {
            $validated['photo'] = $this->photo;
        } else {
            unset($validated['photo']);
        }

        $post = Post::findOrFail($this->post->id);

        $post->update($validated);

        session()->flash('success', 'Post updated successfully.');

        $this->dispatch("post-updated.{$post->id}");
        $this->dispatch("post-updated");
    }

    public function render()
    {
        return view('livewire.post.form.update-post-form');
    }
}
