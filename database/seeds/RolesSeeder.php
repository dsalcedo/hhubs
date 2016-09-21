<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo\Roles;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Roles::create([
            'clave' => 'admin',
            'titulo' => 'Administrador de HackrHub'
        ]);

        Roles::create([
            'clave' => 'instructor',
            'titulo' => 'Profesor de HackrHub'
        ]);
        
        Roles::create([
            'clave' => 'cursante',
            'titulo' => 'Cursante'
        ]);
    }
}
