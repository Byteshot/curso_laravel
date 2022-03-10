<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelularController;
use App\Http\Middleware\Credenciales;

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

$router->group(['prefix' => 'v1','middleware' =>'credenciales'], function () use ($router) {
    $router->get('/celulares', CelularController::class.'@index');
    $router->post('/celulares', CelularController::class.'@store');
    $router->get('/celular/{id}', CelularController::class.'@show');
    $router->put('/celular/{id}', CelularController::class.'@update');
    $router->patch('/celular/{id}', CelularController::class.'@update');
    $router->delete('/celular/{id}', CelularController::class.'@destroy');
});



