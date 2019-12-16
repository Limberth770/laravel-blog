<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(RolsUsuariosTableSeeder::class);
        $this->call(PermisosRolsTableSeeder::class);
    }
}
