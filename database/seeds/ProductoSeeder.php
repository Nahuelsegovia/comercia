<?php

use Illuminate\Database\Seeder;

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
            'titulo_producto' => 'Cerveza artesanal',
            'descripcion_producto' => 'Esta es una cerveza artesanal de la marca -marca- '
        ]);
    }
}
