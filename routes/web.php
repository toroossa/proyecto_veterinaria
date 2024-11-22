<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VeterinarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/envios/{envio}/pdf', [EnvioController::class, 'pdf'])->name('envios.pdf');

Route::resource( '/products',ProductController::class);

Route::resource( '/envios',EnvioController::class);

Route::resource( '/veterinarios',VeterinarioController::class);

Route::resource( '/citas',CitaController::class);

