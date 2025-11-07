<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;

    #[Validate]
    public $photo;

    public $oldPhotoPath;

    public string $photoPath;

    protected function rules(): array
    {
        return [
            'photo' => [
                'nullable',
                'image',
                'extensions:jpg,jpeg,png',
                'max:1024'
            ],
        ];
    }

    public function updatedPhoto()
    {
        $this->validate();

        $this->photoPath = $this->photo->store('images');

        $this->dispatch('file-uploaded', photoPath: $this->photoPath);
    }

    #[On('post-created')]
    public function resetPhoto()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.components.upload-photo');
    }
}
