<?php

namespace App\Livewire\Post\Form;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePostForm extends Component
{
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
    #[On('file-uploaded')]
    public function handlePhoto($photoPath)
    {
        $this->photo = $photoPath;
    }

    public function create(): void
    {
        $validated = $this->validate();

        if ($this->photo) {
            $validated['photo'] = $this->photo;
        }

        Post::create($validated);

        $this->reset();

        session()->flash('success', 'Post created successfully.');

        $this->dispatch('post-created');
    }

    public function render()
    {
        return view('livewire.post.form.create-post-form');
    }
}
