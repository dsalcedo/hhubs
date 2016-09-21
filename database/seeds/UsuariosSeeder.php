<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario\Usuario;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daniel =Usuario::create([
            'nombre'   => 'Josafat Daniel Salcedo Sambrano',
            'email'    => 'dsalcedo@outlook.com',
            'password' => bcrypt('HackrHub2016'),
            'mailing'  => true
        ]);
        $daniel->roles()->attach([1,2]);


        $marcos = Usuario::create([
            'nombre'   => 'Marcos Jonathan García Hamilton',
            'email'    => 'marcos@email.com',
            'password' => bcrypt('HackrHub2016'),
            'mailing'  => true
        ]);
        $marcos->roles()->attach([1,2]);

        $mora = Usuario::create([
            'nombre'   => 'Daniel Isaac Mora Osorio',
            'email'    => 'mora@email.com',
            'password' => bcrypt('HackrHub2016'),
            'mailing'  => true
        ]);
        $mora->roles()->attach([1,2]);

    }
}
