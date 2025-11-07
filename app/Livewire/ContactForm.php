<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $email = '';
    #[Validate]
    public string $message = '';

    protected function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
            ],
            'email' => [
                'required',
                'string',
                'email'
            ],
            'message' => [
                'required',
                'string',
            ]
        ];
    }

    public function save(): void
    {
        $this->validate();

        $this->reset();

        session()->flash('success', 'Message send successfully.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
