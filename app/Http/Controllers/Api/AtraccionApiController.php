<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Atraccion;
use Illuminate\Http\Request;

class AtraccionApiController extends Controller
{
    public function getEspecie($id)
    {
        $atraccion = Atraccion::findOrFail($id);
        $especie = $atraccion->especie;

        return response()->json($especie);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:50',
            'id_especie' => 'required|exists:especies,id',
        ]);

        $atraccion = Atraccion::findOrFail($id);
        $atraccion->update($request->all());

        return response()->json($atraccion);
    }
}

