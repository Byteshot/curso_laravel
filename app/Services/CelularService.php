<?php

namespace App\Services;

use App\Traits\ServiciosExternos;

class CelularService
{

    use ServiciosExternos;

    /**
     * Base de la url a consumir
     *
     * @var string
     */
    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.celulares.base_uri');
    }

    /**
     * Obtener todos los celulares
     *
     * @return Illuminate\Http\Response
     */
    public function obtenerCelulares()
    {
        return $this->peticionService('GET', '/celulares');
    }

    /**
     * Agregar Celular
     *
     * @return Illuminate\Http\Response
     */
    public function agregarCelular($data)
    {
        return $this->peticionService('POST', '/celulares', $data);
    }

    /**
     * Obtener Celular
     *
     * @return Illuminate\Http\Response
     */
    public function obtenerCelular($id)
    {
        return $this->peticionService('GET', "/celular/{$id}");
    }

    /**
     * Editar Celular
     *
     * @return Illuminate\Http\Response
     */
    public function editarCelular($data,$id)
    {
        return $this->peticionService('PUT', "/celular/{$id}", $data);
    }

    /**
     * Eliminar Celular
     *
     * @return Illuminate\Http\Response
     */
    public function eliminarCelular($id)
    {
        return $this->peticionService('DELETE', "/celular/{$id}");
    }

}
