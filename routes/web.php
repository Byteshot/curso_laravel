<?php
use App\Http\Controllers\CelularController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\GrupoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas para el frontend
|
*/
Route::get('/', [GeneralController::class, 'raiz'])->name('raiz');
Route::get('/inicio', [GeneralController::class, 'inicio'])->name('inicio');
Route::get('/acerca', [GeneralController::class, 'acerca'])->name('acerca');

Route::get('/razas', [RazaController::class, 'inicio'])->name('razas.inicio');
Route::get('/razas/detalle/{id}', [RazaController::class, 'show'])->name('razas.detalle');

Route::get('/relaciones', [GrupoController::class, 'relaciones'])->name('relacion');

Route::get('/grupos', [GrupoController::class, 'inicio'])->name('grupo.inicio');
Route::get('/grupos/detalle/{codigo}', [GrupoController::class, 'detalleGrupo'])->name('grupo.detalle');






