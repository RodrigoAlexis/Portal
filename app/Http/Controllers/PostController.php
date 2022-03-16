<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $post = Blog::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'stract' => $request->stract,
            'body' => $request->body,
            'status' => $request->status,
        ]);
        

        if ($request->file('file')) {
            $url = Storage::put( 'blogs',$request->file('file'));

            $post->image()->create([
                'url' => $url
            ]);
        }

        // for ($i=0; $i<count($request->images) ; $i++) { 
        //     if(isset($request->))
        // }

        return redirect()->route('posts.index', $post)->with('success', 'El post se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $post)
    {
        return view('blogs.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $post)
    {
        return view('blogs.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $post)
    {
        $post->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'stract' => $request->stract,
            'body' => $request->body,
            'status' => $request->status
        ]);

        if ($request->file('file')) {
            $url = Storage::put('blogs', $request->file('file'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('posts.index', $post)->with('success', 'El post se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'El post se eliminó satisfactoriamente');
    }
}
