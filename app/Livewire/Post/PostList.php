<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[lazy]
class PostList extends Component
{
    use WithPagination;

    public function placeholder()
    {
        return <<<'HTML'
        <div class="flex items-center justify-center h-screen">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-30 h-30">
            <circle fill="#FF156D" stroke="#FF156D" stroke-width="2" r="15" cx="40" cy="65">
            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1"
            repeatCount="indefinite" begin="-.4"></animate></circle>
            <circle fill="#FF156D" stroke="#FF156D" stroke-width="2" r="15" cx="100" cy="65">
            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1"
             repeatCount="indefinite" begin="-.2"></animate></circle>
            <circle fill="#FF156D" stroke="#FF156D" stroke-width="2" r="15" cx="160" cy="65">
            <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;" keySplines=".5 0 .5 1;.5 0 .5 1"
             repeatCount="indefinite" begin="0"></animate></circle>
             </svg>
        </div>
        HTML;
    }

    #[On('post-deleted')]
    #[On('post-created')]
    public function render()
    {
        return view('livewire.post.post-list', [
            'posts' => Post::orderByDesc('id')->paginate(5),
        ]);
    }
}
