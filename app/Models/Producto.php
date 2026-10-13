<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'material'
    ];
        public function proveedor()
    {
        return $this-hasMany>(Proveedor::class);
    }
}
