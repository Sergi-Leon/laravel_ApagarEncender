<?php

namespace App\Http\Controllers;

use App\Models\TipoIncidencia;
use App\Models\TipoSubIncidencia;
use App\Models\User;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Tipos Incidencias
    public function form(Request $request)
    {
        $categorias = TipoIncidencia::all();
        // $subcategorias = [];

        // // Verifica si se ha seleccionado una categoría
        // if ($request->has('categoria_id')) {
        //     // Si se ha seleccionado una categoría, obtén las subcategorías correspondientes
        //     $categoriaId = $request->input('selectCategorias');
        //     $subcategorias = TipoSubIncidencia::where('categoria_id', $categoriaId)->get();
        // }

        return view('cliente.form', compact('categorias'));
    }

    // Tipos Subincidencias
    public function subincidencia(Request $request){
        // return $request->id;
        $request->id;
        $subcategorias = TipoSubIncidencia::where('tipo_incidencia_id', $request->id)->get();
        return response()->json($subcategorias);
    }
}
