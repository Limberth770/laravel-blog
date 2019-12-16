<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RolsUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_usuario')->insert([
        	'rol_id' => 1,
        	'usuario_id' => 1,
        	'estado' => 1
        ]);
        DB::table('rol_usuario')->insert([
        	'rol_id' => 2,
        	'usuario_id' => 2,
        	'estado' => 1
        ]);
        DB::table('rol_usuario')->insert([
        	'rol_id' => 1,
        	'usuario_id' => 3,
        	'estado' => 3
        ]);
    }
}
