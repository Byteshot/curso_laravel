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
    public function peticionService($metodo, $peticionUrl, $parametors = [], $cabezeras =[])
    {
        $cliente = new Client([
            'base_uri' => $this->baseUrl,
        ]);

        $response = $cliente->request($metodo, $peticionUrl,['form_params' => $parametors,
        'headers' => $cabezeras]);

        return $response->getBody()->getContents();
    }
}
