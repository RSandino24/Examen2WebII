<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_atraccion' => 'required|exists:atraccions,id',
            'nombre_usuario' => 'required|string|max:50',
            'calificacion' => 'required|integer|between:1,5',
            'detalles' => 'required|string|max:100',
        ]);

        $comentario = Comentario::create($request->all());

        return response()->json($comentario, 201);
    }
}

