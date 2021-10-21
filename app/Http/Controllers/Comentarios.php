<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comentarios extends Controller
{
    

    public function agregar(Request $request){//retorna la vista o interactua con el modelo de datos
        /*$com = [
            "nom" => $request->nombre,
            "com" => $request->comentario,
        ];*/
        $com = request()->all(); 
       // $c = $com['nombre'];
        //$co= $com['comentario'];
        return view('correo.comen', compact('com'));
    }
}
