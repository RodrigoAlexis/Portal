<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    public function published(?User $user, Blog $post){
            if ($post->status == 2) {
                return true;
            }else{
                return false;
            }
    }
}
