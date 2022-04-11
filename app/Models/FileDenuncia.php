<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileDenuncia extends Model
{
    use HasFactory;

    protected $fillable=[
        'file',
        'image_path',
        'denuncia_id'
    ];

    public function buzon(){
        return $this->belongsTo(Buzon::class);
    }
}
