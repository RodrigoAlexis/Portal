<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'telefono',
        'isClient',
        'clave_cliente',
        'rfc',
        'razon_social'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
