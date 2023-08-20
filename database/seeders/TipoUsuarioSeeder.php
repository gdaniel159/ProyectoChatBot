<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;

class TipoUsuarioSeeder extends Seeder
{
    public function run()
    {
        
        TipoUsuario::create([
            'name' => 'Administrador',
            'rols' => 'admin',
        ]);

        TipoUsuario::create([
            'name' => 'Usuario Normal',
            'rols' => 'user',
        ]);

        TipoUsuario::create([
            'name' => 'Investigador',
            'rols' => 'cientifico',
        ]);

    }
}
