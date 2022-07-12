<?php

namespace App\Rutas;

use App\Controlador\ClienteControlador;
use Tienda\App\App;

class Routing extends App{
    private String $ruta;

    function __construct($url){
        $this->ruta = $url;
    }

    public function cargarVista(String $endpoint, $params){
        $cliente = $params['cliente'];
        include_once($endpoint);
    }

    public function lanzarIndex(){
        $controler = new ClienteControlador();
        $controler->index();
    }
}

?>