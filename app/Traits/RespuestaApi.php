<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait RespuestaApi
{
    /**
     * Respuestas exitosas
     * @param $String / $Object / $Array
     * @param int $codigo
     * @return \Illuminate\Http\JsonResponse
     */
    public function respuestaCorrecta($data, $codigo = Response::HTTP_OK)
    {
        return response($data, $codigo)->header('Content-Type', 'application/json');
    }

    /**
     * Respuestas de Error
     * @param $mensaje
     * @param int $codigo
     * @return \Illuminate\Http\JsonResponse
     */
    public function respuestaConError($mensaje, $codigo = Response::HTTP_BAD_REQUEST)
    {
        return response()->json(['error' => $mensaje,'codigo' => $codigo], $codigo);
    }

    /**
     * Respuestas de Error mensaje
     * @param $mensaje
     * @param int $codigo
     * @return \Illuminate\Http\Response
     */
    public function mensajeError($mensaje, $codigo)
    {
        return response($mensaje, $codigo)->header('Content-Type', 'application/json');
    }
}
