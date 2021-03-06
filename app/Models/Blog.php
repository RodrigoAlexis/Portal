<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function image(){
        return $this->morphOne(Image::class, 'imageable');  
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
