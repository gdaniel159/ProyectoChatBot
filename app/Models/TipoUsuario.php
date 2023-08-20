<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    
    protected $table = 'tipo_usuarios'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'name',
        'rols',
    ];

    // Relación con los usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'tipo_id');
    }

}
