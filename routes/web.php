<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/proveedor', [ProveedorController::class, 'index']);