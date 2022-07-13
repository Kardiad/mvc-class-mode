<?php

namespace App\Rutas;

use App\Controlador\ClienteControlador;
use Tienda\App\App;

class Routing extends App{
    
    //renderiza búsqueda en caso de que se haya hecho get a la ruta previamente parametrizada en controlador
    public function cargarVistaGet(String $endpoint, $params){
        if($endpoint==$_GET['url']){
            include_once('Vista/'.$endpoint.'.php');
        }else{
            echo 'no tienes acceso a esta página con ese método';
        }
    }
    //renderiza búsqueda en caso de que se haya hecho post a la ruta previamente parametrizada en controlador
    public function cargarVistaPost(String $endpoint, $params){
        if($endpoint==$_POST['url']){
            include_once('Vista/'.$endpoint.'.php');
        }else{
            echo 'no tienes acceso a esta página con ese método';
        }
    }
    //Aquí se da de alta a todas las rutas instanciando al controlador y al método que hagas dentro del controlador. 
    public function lanzarIndex(array $params){
        $controler = new ClienteControlador();
        $controler->index($params['url'], $params);
    }

    public function otraPagina(array $params){
        $controler = new ClienteControlador();
        $controler->cargarOtraPagina($params['url'], $params);
    }
}

?>