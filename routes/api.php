<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelularController;
use App\Http\Middleware\Credenciales;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AlumnoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/acerca', [GeneralController::class, 'acerca'])->name('acerca');

Route::get('/grupos', [GrupoController::class, 'index'])->name('inicio');
Route::post('/grupos', [GrupoController::class, 'create'])->name('agregar');
Route::put('/grupos/{id}', [GrupoController::class, 'update'])->name('actualizar.put');
Route::patch('/grupos/{id}', [GrupoController::class, 'update'])->name('actualizar.patch');
Route::delete('/grupos/{id}', [GrupoController::class, 'delete'])->name('eliminar');
Route::get('/grupos/detalles/{id}', [GrupoController::class, 'show'])->name('grupos.detales');


Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('agregar.alumno');
Route::put('/alumnos', [AlumnoController::class, 'update'])->name('agregar.put');
Route::patch('/alumnos', [AlumnoController::class, 'update'])->name('agregar.patch');
Route::delete('/alumnos/{alumnoId}', [AlumnoController::class, 'delete'])->name('eliminar.alumno');
Route::get('/alumnos/{alumnoId}', [AlumnoController::class, 'show'])->name('mostrar.alumno');

$router->group(['prefix' => 'v1','middleware' =>'credenciales'], function () use ($router) {
    $router->get('/celulares', CelularController::class.'@index');
    $router->post('/celulares', CelularController::class.'@store');
    $router->get('/celular/{id}', CelularController::class.'@show');
    $router->put('/celular/{id}', CelularController::class.'@update');
    $router->patch('/celular/{id}', CelularController::class.'@update');
    $router->delete('/celular/{id}', CelularController::class.'@destroy');
});



