<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class SolicitePresupuestoController extends Controller
{
    public function solicitePresupuesto() {
        $categorias = Categoria::all();
        return view ('solicitePresupuesto', [
            'categorias' => $categorias
        ]);
    }
}
