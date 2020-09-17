<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Novedad;
use App\Categoria;

class NovedadController extends Controller
{
    public function novedades() {

        $categorias = Categoria::all();
        $novedades = Novedad::all();
        return view ('novedades.novedades', [
            'categorias' => $categorias,
            'novedades' => $novedades
        ]);
    }
}
