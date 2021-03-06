<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Buzon extends Model
{
    use HasFactory;

    protected $fillable=[
        'canal',
        'categoria',
        'tipo',
        'isClient',
        'hechos',
        'user_id',
        'folio',
        'telefono',
        'razon_social'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    } 
    
    public function fileDenuncia(){
        return $this->hasMany(FileDenuncia::class, 'denuncia_id');
    }
}
