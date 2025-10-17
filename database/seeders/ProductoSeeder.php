<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::insert([
            [
                'nombre' => 'iPhone 15 Pro',
                'descripcion' => 'Último modelo de Apple con chip A17',
                'precio' => 1299.99,
                'stock' => 10,
                'categoria_id' => 1, // Smartphones
                'codigo_barras' => 'IP15PRO123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Samsung Galaxy S24',
                'descripcion' => 'Smartphone Android de alta gama',
                'precio' => 1099.99,
                'stock' => 15,
                'categoria_id' => 1,
                'codigo_barras' => 'SGS24123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'MacBook Air M2',
                'descripcion' => 'Portátil Apple ultraligero con chip M2',
                'precio' => 1399.00,
                'stock' => 8,
                'categoria_id' => 2, // Laptops
                'codigo_barras' => 'MBAIRM213',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Dell XPS 13',
                'descripcion' => 'Laptop premium con pantalla infinita',
                'precio' => 1249.99,
                'stock' => 12,
                'categoria_id' => 2,
                'codigo_barras' => 'DXPS13123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'AirPods Pro',
                'descripcion' => 'Auriculares inalámbricos de Apple con cancelación de ruido',
                'precio' => 249.99,
                'stock' => 20,
                'categoria_id' => 3, // Accesorios
                'codigo_barras' => 'APPRO123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Logitech MX Master 3',
                'descripcion' => 'Ratón inalámbrico ergonómico para productividad',
                'precio' => 99.99,
                'stock' => 25,
                'categoria_id' => 3,
                'codigo_barras' => 'LOGMXM3123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Teclado Mecánico Redragon',
                'descripcion' => 'Teclado RGB con switches rojos',
                'precio' => 59.99,
                'stock' => 18,
                'categoria_id' => 3,
                'codigo_barras' => 'REDKEY123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Huawei P60 Pro',
                'descripcion' => 'Smartphone con cámara avanzada y diseño elegante',
                'precio' => 999.99,
                'stock' => 14,
                'categoria_id' => 1,
                'codigo_barras' => 'HWPP60P123',
                'imagen' => null,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
