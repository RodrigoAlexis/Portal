<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public $search ;
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Blog::orWhere('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(10);

        return view('livewire.posts-index', compact('posts'));
    }

    
}
