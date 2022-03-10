<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Services\CelularService;
use Illuminate\Http\Response;

/**
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://swagger.local")
*/

class CelularController extends Controller
{
    //
    use ApiResponse;

    /**
     *  Servicio para Celulares
     * @var CelularService
     */
    public $celularService;

    /**
     * Constructor
     * @param $celularService
     */
    public function __construct(CelularService $celularService)
    {
        $this->celularService = $celularService;
    }



    /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $celulares = $this->celularService->obtenerCelulares();
        return $this->successResponse($celulares);
    }

    /**
     * Crear crear intancia de Celular
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->celularService->agregarCelular($request->all()),Response::HTTP_CREATED);
    }

    /**
     * Ver celular
     *
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->celularService->obtenerCelular($id));
    }

    /**
     * Actualizar celular
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->celularService->editarCelular($request->all(),$id));
    }

    /**
     * Destroy Celular
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->successResponse($this->celularService->eliminarCelular($id));
    }
}
