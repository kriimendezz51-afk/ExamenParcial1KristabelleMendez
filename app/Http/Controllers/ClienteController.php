<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
       public function index()
    {
        $clientes = Cliente::all();
        dd($clientes);
    }
}
