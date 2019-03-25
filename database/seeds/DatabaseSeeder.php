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
        $this->call(UsuarioSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
