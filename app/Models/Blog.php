<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bcategory(){
        return $this->belongsTo(Bcategory::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
