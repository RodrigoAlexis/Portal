<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Bcategory;

class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::where('status', 2)->latest('id')->paginate(8);

        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog){

        $this->authorize('published', $blog);

        $slug = Blog::where('slug','=', $blog->slug)->firstOrFail();

        $similares = Blog::where('status', 2)
                            ->where('id', '!=', $blog->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        
        return view('blogs.show', compact('blog', 'similares', 'slug'));
    }

    public function image(Blog $blog){

        $blogs = Blog::where('id', $blog)->get();

        return view('blogs.image', compact('blogs'));
    }

}
