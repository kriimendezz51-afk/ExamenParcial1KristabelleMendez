<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre completo',
        'correo',
        'telefono'
    ];
     public function pedido()
    {
        return $this-hasMany>(Pedido::class);
    }
}
