<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{ 
    use HasFactory;
    
    protected $table = "perfil";

    protected $fillable = [
        'nombre',
        'apellidos',
        'tipo_usuario',
        'usuario',
        'identificacion',
        'password'
    ];

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];
}
