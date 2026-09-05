<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'empresa', 'nit', 'correo', 'telefono', 'ciudad', 'direccion', 'estado'
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
