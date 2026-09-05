<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $comp = Category::where('nombre', 'Computadores')->first()->id;
        $mon = Category::where('nombre', 'Monitores')->first()->id;
        $per = Category::where('nombre', 'Periféricos')->first()->id;
        $alm = Category::where('nombre', 'Almacenamiento')->first()->id;
        $red = Category::where('nombre', 'Redes')->first()->id;

        $products = [
            ['codigo' => 'PROD-001', 'category_id' => $comp, 'nombre' => 'Laptop Lenovo IdeaPad 3', 'precio' => 1850000, 'stock' => 25],
            ['codigo' => 'PROD-002', 'category_id' => $comp, 'nombre' => 'Laptop HP 15', 'precio' => 1950000, 'stock' => 12],
            ['codigo' => 'PROD-003', 'category_id' => $mon, 'nombre' => 'Monitor LG 24"', 'precio' => 550000, 'stock' => 45],
            ['codigo' => 'PROD-004', 'category_id' => $mon, 'nombre' => 'Monitor Samsung 27"', 'precio' => 780000, 'stock' => 8],
            ['codigo' => 'PROD-005', 'category_id' => $per, 'nombre' => 'Teclado Logitech K380', 'precio' => 120000, 'stock' => 100],
            ['codigo' => 'PROD-006', 'category_id' => $per, 'nombre' => 'Mouse Logitech M185', 'precio' => 45000, 'stock' => 150],
            ['codigo' => 'PROD-007', 'category_id' => $alm, 'nombre' => 'Disco SSD Kingston 480GB', 'precio' => 160000, 'stock' => 60],
            ['codigo' => 'PROD-008', 'category_id' => $alm, 'nombre' => 'Disco SSD WD Blue 1TB', 'precio' => 320000, 'stock' => 30],
            ['codigo' => 'PROD-009', 'category_id' => $red, 'nombre' => 'Router TP-Link Archer C6', 'precio' => 180000, 'stock' => 4],
            ['codigo' => 'PROD-010', 'category_id' => $per, 'nombre' => 'Impresora Epson EcoTank', 'precio' => 850000, 'stock' => 15],
            ['codigo' => 'PROD-011', 'category_id' => $per, 'nombre' => 'Cámara Web Logitech C920', 'precio' => 290000, 'stock' => 5],
            ['codigo' => 'PROD-012', 'category_id' => $per, 'nombre' => 'Audífonos Logitech H390', 'precio' => 140000, 'stock' => 22],
            ['codigo' => 'PROD-013', 'category_id' => $comp, 'nombre' => 'MacBook Air M1', 'precio' => 4200000, 'stock' => 10],
            ['codigo' => 'PROD-014', 'category_id' => $red, 'nombre' => 'Switch Cisco 8 puertos', 'precio' => 250000, 'stock' => 7],
            ['codigo' => 'PROD-015', 'category_id' => $alm, 'nombre' => 'Memoria RAM Kingston 16GB', 'precio' => 190000, 'stock' => 80],
        ];

        foreach ($products as $prod) {
            Product::updateOrCreate(['codigo' => $prod['codigo']], $prod);
        }
    }
}
