<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
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

    // Métodos requeridos por la interfaz Authenticatable
    public function getAuthIdentifierName()
    {
        return 'id'; // El nombre de la columna que identifica al usuario
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // El valor de la columna que identifica al usuario
    }

    public function getAuthPassword()
    {
        return $this->password; // La contraseña del usuario
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Token de recordar sesión
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Establecer token de recordar sesión
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Nombre de la columna para el token de recordar sesión
    }

}
