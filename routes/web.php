<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PublicacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas para el frontend
|
*/
Route::get('/', GeneralController::class,'raiz')->name('raiz');
Route::get('/inicio', [GeneralController::class, 'inicio'])->name('inicio');

