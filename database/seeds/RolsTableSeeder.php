<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
        	'nombre' => 'Admin'
        ]);
        DB::table('rols')->insert([
        	'nombre' => 'Consultor'
        ]);
        DB::table('rols')->insert([
        	'nombre' => 'Editor'
        ]);
        DB::table('rols')->insert([
        	'nombre' => 'Receptor'
        ]);
    }
}
