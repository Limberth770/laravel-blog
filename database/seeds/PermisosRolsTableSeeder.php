<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PermisosRolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permiso_rol')->insert([
        	'rol_id' => 1,
        	'permiso_id' => 1,
        ]);
        DB::table('permiso_rol')->insert([
        	'rol_id' => 1,
        	'permiso_id' => 2,
        ]);
        DB::table('permiso_rol')->insert([
        	'rol_id' => 1,
        	'permiso_id' => 3,
        ]);
        DB::table('permiso_rol')->insert([
        	'rol_id' => 1,
        	'permiso_id' => 4,
        ]);
        DB::table('permiso_rol')->insert([
        	'rol_id' => 1,
        	'permiso_id' => 5,
        ]);
    }
}
