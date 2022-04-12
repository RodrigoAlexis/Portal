<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'piezas',
        'etiqueta1',
        'etiqueta2',
        'color1',
        'color2',
        'color3',
        'color4',
        'group_id',
        'line_id',
        'mercado',
        'amazon'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function line(){
        return $this->belongsTo(Line::class);
    }   

    public function image(){
        return $this->morphOne(Image::class, 'imageable');  
    }
}
