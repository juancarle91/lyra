<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class SobreNosotrosController extends Controller
{
    public function sobreNosotros() {
        $categorias = Categoria::all();
        return view ('sobre-nosotros.sobre-nosotros', [
            'categorias' => $categorias
        ]);
    }
}
