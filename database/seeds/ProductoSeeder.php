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
        for($contador = 0; $contador<=30; $contador++){
            DB::table('productos')->insert([
                'titulo_producto' => 'Hamburguesa Vegana con mayo',
                'descripcion_producto' => 'Hamburguesa Vegana hecha con seitán ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'comidas',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Remeras estampadas',
                'descripcion_producto' => 'Remeras estampadas de algodón todos los talles ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'ropa',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Celular Samsung Galaxy 10',
                'descripcion_producto' => 'Samsung Galaxy nuevo en caja 120gb  ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'tecnologia',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Shampoo artesanal',
                'descripcion_producto' => 'Shampoo artesanal 200ml',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'farmacia',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Cortadora de pasto',
                'descripcion_producto' => 'Cortadora de pasto para jardines Lepal ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'ferreteria',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Bebidas',
                'descripcion_producto' => 'Cerveza Heinekeen sixpack ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'bebidas',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Rimel Loreal',
                'descripcion_producto' => 'Rimel loreal par pestañas',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'cosmeticos',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

            DB::table('productos')->insert([
                'titulo_producto' => 'Abogado laborista',
                'descripcion_producto' => 'Abogado laborista, para todo tipo de juicios laborales ',
                'foto_producto' => 'lisa.jpg',
                'categoria_producto' => 'servicios',
                'precio_producto' => '500',
                'id_usuario' => '1'
            ]);

        }
    }
}
