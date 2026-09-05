<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'codigo', 'nombre', 'descripcion', 
        'precio', 'stock', 'estado'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
