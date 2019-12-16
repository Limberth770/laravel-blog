<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([
        	'nombre'=>'usuarios',
        	'slug'=>'usuario',
        ]);
        DB::table('permisos')->insert([
        	'nombre'=>'permisos',
        	'slug'=>'permiso',
        ]);
        DB::table('permisos')->insert([
        	'nombre'=>'roles',
        	'slug'=>'rol',
        ]);
        DB::table('permisos')->insert([
        	'nombre'=>'permiso_rol',
        	'slug'=>'permiso-rol',
        ]);
        DB::table('permisos')->insert([
        	'nombre'=>'rol_suario',
        	'slug'=>'rol-usuario',
        ]);
    }
}
