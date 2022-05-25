<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class SectionBlog extends Component
{
    public function render()
    {
        $blogs = Blog::where('status', 2)->latest('id')->take(2)->get();

        return view('livewire.section-blog', compact('blogs'));
    }
}
