<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieApiController extends Controller
{
    public function index()
    {
        $especies = Especie::all();
        return response()->json($especies);
    }
}

