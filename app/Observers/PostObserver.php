<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;


class PostObserver
{
    /**
     * Handle the Blog "created" event.
     *
     * @param  \App\Models\Blog  $blog
     * @return void
     */
    public function created(Blog $post)
    {
        //
    }


    /**
     * Handle the Blog "deleted" event.
     *
     * @param  \App\Models\Blog  $blog
     * @return void
     */
    public function deleting(Blog $post)
    {
        if ($post->image) {
            
            Storage::delete($post->image->url);
        }
    }

}
