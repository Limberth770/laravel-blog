<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        	'usuario' => 'limberth770@gmail.com',
        	'password' => bcrypt('123'),
        	'nombre' => 'Limberth'
        ]);
        DB::table('usuarios')->insert([
        	'usuario' => 'pepito123@gmail.com',
        	'password' => bcrypt('123'),
        	'nombre' => 'Pepito'
        ]);
        DB::table('usuarios')->insert([
        	'usuario' => 'issabel123@gmail.com',
        	'password' => bcrypt('123'),
        	'nombre' => 'Issabel'
        ]);
    }
}
