<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nombre' => 'Computadores', 'descripcion' => 'Laptops y equipos de escritorio'],
            ['nombre' => 'Monitores', 'descripcion' => 'Monitores de varias resoluciones'],
            ['nombre' => 'Periféricos', 'descripcion' => 'Teclados, ratones, auriculares'],
            ['nombre' => 'Almacenamiento', 'descripcion' => 'Discos duros y SSDs'],
            ['nombre' => 'Redes', 'descripcion' => 'Routers, switches y cables'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['nombre' => $cat['nombre']], $cat);
        }
    }
}
