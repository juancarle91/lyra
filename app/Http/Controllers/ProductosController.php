<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ProductosController extends Controller
{
    public function productos() {
        $categorias = Categoria::all();
        return view ('productos.productos', [
            'categorias' => $categorias
        ]);
    }
    public function categorias() {
        $categorias = Categoria::all();
        return view ('tienda.tienda', [
            'categorias' => $categorias
        ]);
    }
}
