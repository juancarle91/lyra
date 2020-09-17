<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Categoria;
use App\Producto;

class InicioController extends Controller
{
    public function inicio() {
        $sliders = Slide::all();
        $categorias = Categoria::all();
        $productos = Producto::where('visible_en', 'si')->get();
        
        return view ('inicio.index', [
            'slides' => $sliders,
            'categorias' => $categorias,
            'productos' => $productos
        ]);
    }
}
