<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductosController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/contactos', [ContactosController::class, 'index'])->name('contactos');
Route::get('/conversion', [ConversionController::class, 'index'])->name('conversion');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
//Route::get('/productos', [ProductosController::class, 'index'])->name('productos');

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
