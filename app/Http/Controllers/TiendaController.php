<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class TiendaController extends Controller
{
    public function show (Request $request, $categoria_id) {
        
        $categoria = Categoria::where('id', $categoria_id)->first();

        if (!$categoria) abort(404);
        
        $categorias = Categoria::all();
        $keyword = $request->input('keyword');
        $query = Producto::where('categoria_id', $categoria_id);

        if ($keyword != false){
            $query = $query->where('titulo', 'like', '%' . $keyword . '%');
        } 

        $productos = $query->paginate(40);

        
        return view ('tienda.tienda', [
            'categoria' => $categoria,
            'categorias' => $categorias,
            'productos' => $productos,
            'keyword' => $keyword,
        ]);
    }

}

