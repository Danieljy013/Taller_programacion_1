<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'email' => 'required|email',
            'tipo' => 'required',
            'mensaje' => 'required|min:10',
        ]);

        Pqrs::create($request->all());

        return back()->with('success', 'PQRS enviada correctamente');
    }
}