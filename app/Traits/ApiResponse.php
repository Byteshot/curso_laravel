<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse
{
    /**
     * Respuestas exitosas
     * @param $String / $Object / $Array
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Respuestas de Error
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message, $code = Response::HTTP_BAD_REQUEST)
    {
        return response()->json(['error' => $message,'code' => $code], $code);
    }

    /**
     * Respuestas de Error mensaje
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
