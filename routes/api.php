<?php

use App\Http\Controllers\Api\AtraccionApiController;
use App\Http\Controllers\Api\EspecieApiController;
use App\Http\Controllers\Api\ComentarioApiController;
use Illuminate\Support\Facades\Route;

    Route::post('comentarios', [ComentarioApiController::class, 'store']);
    Route::get('especies', [EspecieApiController::class, 'index']);
    Route::get('atracciones/{id}/especie', [AtraccionApiController::class, 'getEspecie']);
    Route::put('atracciones/{id}', [AtraccionApiController::class, 'update']);

