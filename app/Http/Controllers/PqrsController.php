<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request) // Método para almacenar una nueva PQRS
                                            // en el request se reciben los datos del formulario y pasan atravez de el https(vista)
                                            // y por ultimo los inyecta en la tabla dentro de la BD
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'email' => 'required|email', //Aqui se validan todos los datos
            'tipo' => 'required',
            'mensaje' => 'required|min:10|max:255',
        ]);

        //---------------------------------------------------------------------------------
        //Pqrs::create([                 
        //'nombre'=>$request->nombre,
        //'email'=>$request->email,
        //'tipo'=>$request->tipo,
        //'mensaje'=>$request->mensaje,
        //]);
        //--------------------------------------------------------------------------------
        Pqrs::create($request->all()); 

        return back()->with('success', 'PQRS enviada correctamente'); //Redirecciona a la misma página con un mensaje de éxito
    }
}