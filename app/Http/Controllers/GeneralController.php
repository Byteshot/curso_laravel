<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    /**
     * Raiz de la aplicación
     * @return Redirect
     */
    public function raiz(){
        return redirect()->route('inicio');
    }

    /**
     * Inicio
     * @return View
     */
    public function inicio(){
        Log::info('Vista: Inicio, Usuario: Emmanuel');
        return view('general.inicio');
    }

    /**
     * Acerca de
     * @return View
     */
    public function acerca(Request $datos){

        Log::info("Petición con datos: ", $datos->all());
        Log::channel('daily')->info("Petición con datos: ", $datos->all());
        // Log::alert("Posible error en el controlador GeneralController");
        // Log::error("Error grave en el controlador GeneralController usuario: $nombre");
        // return view('general.acerca');
    }

    /**
     * Acerca de
     * @return View
     */
    public function api(){

        $cliente = new Client();
        $response = $cliente->request('get', 'https://api.musixmatch.com/ws/1.1/artist.getartist_id=118',[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'apikey' => '4402e53b0b61c5c8d6f85216e8ce6ea8',
            ],
            [
                'query' => [
                    'apikey' => '4402e53b0b61c5c8d6f85216e8ce6ea8',
                ]
            ],

        ]);

        $datos=json_decode($response->getBody()->getContents(),true);

        return response()->json($datos);

    }

}
