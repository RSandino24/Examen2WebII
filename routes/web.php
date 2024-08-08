<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtraccionController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\ComentarioController;

Route::get('/', [AtraccionController::class, 'index']);

    Route::resource('atracciones', AtraccionController::class);
    Route::resource('especies', EspecieController::class);
    Route::resource('comentarios', ComentarioController::class);

require __DIR__.'/auth.php';
