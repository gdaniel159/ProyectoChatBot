<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'tipo_id',
        'name',
        'surname',
        'email',
        'password',
        'bio',
        'contact_info',
    ];

    protected $hidden = [
        'password',
    ];

    // Relación con el tipo de usuario
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_id');
    }

}
