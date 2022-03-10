<?php


namespace App\Traits;

use GuzzleHttp\Client;

trait ServiciosExternos
{

    /**
     * Enviar petición a cualquier servicio
     *
     * @return String
     */
    public function performRequest($metodo, $requestUrl, $params = [], $headers =[])
    {
        $cliente = new Client([
            'base_uri' => $this->baseUrl,
        ]);

        $response = $cliente->request($metodo, $requestUrl,['form_params' => $params,
        'headers' => $headers]);

        return $response->getBody()->getContents();
    }
}
