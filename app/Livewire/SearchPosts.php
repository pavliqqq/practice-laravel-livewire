<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPosts extends Component
{
    use WithPagination;
    public string $searchString = '';

    public function updatedSearchString()
    {
        $this->resetPage();
    }

    public function render()
    {
        $result = Post::search($this->searchString)->paginate(5);

        return view('livewire.search-posts', [
            'result' => $result,
        ]);
    }
}
