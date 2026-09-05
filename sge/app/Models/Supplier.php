<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'empresa', 'nit', 'correo', 'telefono', 'ciudad', 'direccion', 'estado'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
