<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, 'index']);

Route::get('/sobre-mi', function(){
    return view('sobre-mi');
});

Route::get('/contacto', function(){
    return view('contacto', ['title' => 'Contacto']);
});

Route::post('/contacto', [ContactoController::class, 'procesar']);
//MVC -> patron de arquitectura. Ruta debe redireccionar a controlador(Este ultimo tiene la logica)