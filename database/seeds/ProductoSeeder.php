<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => "Producto 1",
            'descripcion' => "Desciprcion producto 1",
            'precio' => mt_rand(100,9999),
        ]);
        DB::table('productos')->insert([
            'nombre' => "Producto 2",
            'descripcion' => "Desciprcion producto 2",
            'precio' => mt_rand(100,9999),
        ]);
        DB::table('productos')->insert([
            'nombre' => "Producto 3",
            'descripcion' => "Desciprcion producto 3",
            'precio' => mt_rand(100,9999),
        ]);
        DB::table('productos')->insert([
            'nombre' => "Producto 4",
            'descripcion' => "Desciprcion producto 4",
            'precio' => mt_rand(100,9999),
        ]);
        DB::table('productos')->insert([
            'nombre' => "Producto 5",
            'descripcion' => "Desciprcion producto 5",
            'precio' => mt_rand(100,9999),
        ]);


    }
}
