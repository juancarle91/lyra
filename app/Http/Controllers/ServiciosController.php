<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ServiciosController extends Controller
{
    public function servicios() {
        $categorias = Categoria::all();
        return view ('servicios.servicios', [
            'categorias' => $categorias
        ]);
    }
}
