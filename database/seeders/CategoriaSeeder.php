<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            [
                'nombre' => 'Smartphones',
                'descripcion' => 'Teléfonos inteligentes de alta gama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laptops',
                'descripcion' => 'Portátiles de diferentes marcas y características',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Complementos y periféricos electrónicos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
