<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre completo',
        'correo',
        'telefono'
    ];
        public function proveedor()
    {
        return $this-belongsTo>(Producto::class);
    }
}
