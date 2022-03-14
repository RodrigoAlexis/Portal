<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug'
    ];

    public function groups(){
        return $this->belongsToMany(Group::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');  
    }
}