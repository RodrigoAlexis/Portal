<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug'
    ];

    public function lines(){
        return $this->belongsToMany(Lines::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');  
    }
}
