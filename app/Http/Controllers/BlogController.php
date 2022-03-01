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
        
        $photo = Blog::where('id', $blog->id)->value('foto1');

        $decode = base64_decode($photo);

        $image = "Foto.jpg";
        file_put_contents($image,$decode);
            // header('Content-Description: File Transfer');
            header('Content-Type: image/jpg');
            // header('Content-Disposition: attachment; filename="'.basename($image).'"');
            // header('Expires:0');
            // header('Cache-Control: must-revalidate');
            // header('Pragma: public');
            // header('Content-Length: ' .filesize($image));
            // readfile($image);

        return view('blogs.show', compact('blog', 'similares', 'slug', 'photo'));
    }

}
