<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function bcategory(){
        return $this->belongsTo(Bcategory::class, 'category_id');
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}